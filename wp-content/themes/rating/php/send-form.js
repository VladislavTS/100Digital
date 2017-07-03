var main = function(){
	var $checkButtons = $(".rating-list [col] [info] [checkbox]");
	if(typeof checkedStudios == "undefined"){
		var checkedStudios = [];
	}

	function find(array, value) {
		if (array.indexOf){
			return array.indexOf(value);
		}
		for (var i = 0; i < array.length; i++){
			if (array[i] === value) return i;
		}
		return -1;
	}

	$checkButtons.on("click", function(){
		var $thisStudioCheck = $(this);
		var thisStudioName = $(this).parent().parent().parent().find("[info='title'] h2").text();

		setTimeout(function(){
			if($thisStudioCheck.attr("checkbox") == "yes"){
				checkedStudios.push(thisStudioName);
				localStorage.setItem("studios", checkedStudios);
			} else {
				var id = find(checkedStudios, thisStudioName);

				checkedStudios.splice(id, 1);
				localStorage.setItem("studios", checkedStudios);
			}
		}, 100);
	});



	// FORM-SEND
	var studiosArr = localStorage.getItem("studios").split(",");
	var $agentContainer = $("*[page='form'] .agent-container ul");

	for(var i = 0; i < studiosArr.length; i++){
		$agentContainer.append("<li>/<span class='blue'>"+studiosArr[i]+"</span></li>");
	}

	$("*[page='form'] .inputs-container [button='send']").on("click", function(){
		var projectTheme = $("*[page='form'] .inputs-container [name='project-name']").val();
		var projectDescription = $("*[page='form'] .inputs-container [name='project-info']").val();
		var projectUser = $("*[page='form'] .inputs-container [name='user-name']").val();
		var projectMail = $("*[page='form'] .inputs-container [name='user-mail']").val();
		var projectPhone = $("*[page='form'] .inputs-container [name='user-phone']").val();
		var projectStatus = $("*[page='form'] .inputs-container [name='user-status']").val();
		var projectCompany = $("*[page='form'] .inputs-container [name='user-company']").val();
		var projectCompanyPhone = $("*[page='form'] .inputs-container [name='user-company-phone']").val();

		$(this).css("display", "none");
		$("*[page='form'] .inputs-container .server-answer").css("display", "block");

		$.ajax({
			url: "http://sa40940-43138.smrtp.ru/wp-content/themes/rating/php/send-form.php",
			type: "POST",
			data: {
				studiosArr: studiosArr,
				projectTheme: projectTheme,
				projectDescription: projectDescription,
				projectUser: projectUser,
				projectMail: projectMail,
				projectPhone: projectPhone,
				projectStatus: projectStatus,
				projectCompany: projectCompany,
				projectCompanyPhone: projectCompanyPhone
			},
			success: function(data){
				console.log(data);
			}
		});
	});
};

$(document).ready(main);