var main = function(){
	$page = $("*[page]").attr("page");
	if($page == "index"){
		$("nav.menu .flex-container .hrefs-container .margin").addClass("active");
	}

	var $menuIcon = $("nav.menu .menu-icon");
	var $hrefsContainer = $("nav.menu .flex-container .hrefs-container");

	$menuIcon.on("click", function(){
		var pageWidth = $(document).width();
		if($(this).hasClass("active")){
			$(this).removeClass("active");
			$hrefsContainer.css("right", "-740px");
		} else {
			$(this).addClass("active");
			$hrefsContainer.css("right", "0");
		}
	});
};

$(document).ready(main);