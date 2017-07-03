var main = function(){
	/* filter. checkboxs */
	var $filterChecks = $("[filter='raitings'] li input[type='checkbox']");
	var $filterChecksButtons = $("[filter='raitings'] li [checkbox]");

	$filterChecksButtons.on("click", function(){
		var $checkContainer = $(this).parent();
		var $thisCheck = $checkContainer.find("input[type='checkbox']");

		if($thisCheck.prop("checked")){
			$thisCheck.removeAttr("checked");
			$(this).attr("checkbox", "no");
		} else {
			$thisCheck.attr("checked", "checked");
			$(this).attr("checkbox", "yes");
		}
	});



	/* filter. studios-list */
	var $studiosChecks = $("[studio] input[type='checkbox']");
	var $studiosChecksButtons = $("[studio] [checkbox]");
	var $starCheckButton = $(".rating-list .star [checkbox]");

	$studiosChecksButtons.on("click", function(){
		var $checkContainer = $(this).parent();
		var $thisCheck = $checkContainer.find("input[type='checkbox']");

		if($thisCheck.prop("checked")){
			$thisCheck.removeAttr("checked");
			$(this).attr("checkbox", "no");
		} else {
			$thisCheck.attr("checked", "checked");
			$(this).attr("checkbox", "yes");
		}
	});

	$starCheckButton.on("click", function(){
		var $checkContainer = $(this).parent();
		var $thisCheck = $checkContainer.find("input[type='checkbox']");

		if($thisCheck.prop("checked")){
			$thisCheck.removeAttr("checked");
			$(this).attr("checkbox", "no");
		} else {
			$thisCheck.attr("checked", "checked");
			$(this).attr("checkbox", "yes");
		}
	});
};

$(document).ready(main);