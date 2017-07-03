var main = function(){
	/* advertising */

	var $advertisingStudioContainer = $("[advertising='Студия']");
	var $advertisingBannerContainer = $("[advertising='Баннер']");
	var $advertisingContainer = $(".advertise-container");
	var advertisingStudioTitle = $advertisingStudioContainer.find(".title").text();

	$advertisingContainer.find("a").attr("href", $advertisingBannerContainer.find(".title").text());
	$advertisingContainer.find("img").attr("src", $advertisingBannerContainer.find(".img").text());

	// разбивка чисел на разряды
	function addSpaces(nStr){
		nStr += '';
		x = nStr.split('.');
		x1 = x[0];
		x2 = x.length > 1 ? '.' + x[1] : '';
		var rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + ' ' + '$2');
		}
		return x1 + x2;
	}



	setTimeout(function(){
		var $studios = $("*[studio]");
		var studiosCount = $studios.length;
		var studiosArray = [];

		function ratingLogic(){
			var $city = $("[filter='city'] select").val();
			var $price = $("[filter='price'] input[name='price']").val();

			$studios.addClass("hide");

			studiosCount = $studios.length;
			studiosArray = [];
			studioNum = 0;

			function filterCity(city){
				var studioCity = $thisStudio.find("[info='city']").text();
				if(studioCity.indexOf(city) != -1){
					return true;
				} else {
					return false;
				}
			}

			for(var i = 0; i < studiosCount; i++){
				var $thisStudio = $("*[studio='"+(i+1)+"']");
				var $thisStudioCity = $thisStudio.find("[info='city']").text();
				var $thisStudioPrice = $thisStudio.find("[info='price']").text();
				var $thisStudioHourPrice = $thisStudio.find("[info='hour']").text();
				var $thisStudioTitle = $thisStudio.find("[info='title'] h2").text();
				var $thisStudioHref = $thisStudio.find("[info='title']").attr("href");
				var $thisStudioApps = $thisStudio.find("[info='apps']").text();
				var totalPoints = 500;

				if($thisStudioTitle == advertisingStudioTitle){
					$(".rating-list .star [info='title'] h2").text($thisStudioTitle);
					$(".rating-list .star [info='title']").attr("href", $thisStudioHref);
					$(".rating-list .star [info='city']").text($thisStudioCity);
					$(".rating-list .star [info='hour']").text($thisStudioHourPrice);
					$(".rating-list .star [info='hourFilter']").text(addSpaces($thisStudioHourPrice));
					$(".rating-list .star [info='price']").text($thisStudioPrice);
					$(".rating-list .star [info='priceFilter']").text(addSpaces($thisStudioPrice));
					$(".rating-list .star [info='apps']").text($thisStudioApps);
				}

				var r_ruward = $thisStudio.find("[rating='ruward']").text();
				var r_runet = $thisStudio.find("[rating='ratingruneta']").text();
				var r_tagline = $thisStudio.find("[rating='tagline']").text();
				var r_cnews = $thisStudio.find("[rating='cnews']").text();
				var r_adindex = $thisStudio.find("[rating='adindex']").text();

				if((r_ruward != 0) && ($("[filter='raitings'] input[name='ruward']").attr("checked") == "checked"))
					totalPoints -= (100 - r_ruward);
				if((r_runet != 0) && ($("[filter='raitings'] input[name='ratingruneta']").attr("checked") == "checked"))
					totalPoints -= (100 - r_runet);
				if((r_tagline != 0) && ($("[filter='raitings'] input[name='tagline']").attr("checked") == "checked"))
					totalPoints -= (100 - r_tagline);
				if((r_cnews != 0) && ($("[filter='raitings'] input[name='cnews']").attr("checked") == "checked"))
					totalPoints -= (100 - r_cnews);
				if((r_adindex != 0) && ($("[filter='raitings'] input[name='adindex']").attr("checked") == "checked"))
					totalPoints -= (100 - r_adindex);

				$thisStudio.attr("total", totalPoints);

				if(totalPoints != 500){
					if($city == "Все города" || filterCity($city)){
						if(parseInt($price.replace(/\s/g, '')) >= $thisStudioPrice || isNaN(parseInt($price.replace(/\s/g, ''))) || ($thisStudioPrice.indexOf('---') + 1)){
							studiosArray[studioNum] = {
								id: (i + 1),
								rating: totalPoints,
								position: 0
							};
							studioNum++;
						}
					}
				}
			}
		} // end function. rating logic

		function ratingSort(){
			setTimeout(function(){
				function compareRating(studioA, studioB){
					return studioA.rating - studioB.rating;
				}

				studiosArray.sort(compareRating);

				for(var j = 0; j < studiosArray.length; j++){
					var thisStudio = $("*[studio='"+(studiosArray[j].id)+"']");

					thisStudio.css("order", (j + 1));
					thisStudio.find("[info='num']").text(j+1);
					thisStudio.find("[info='priceFilter']").text(addSpaces(thisStudio.find("[info='priceFilter']").text()));
					thisStudio.find("[info='hourFilter']").text(addSpaces(thisStudio.find("[info='hourFilter']").text()));

					if(j < 100){
						thisStudio.removeClass("hide");
					}

					if(j == 0){
						thisStudio.css("background", "#fff");
					} else if(j == 1){
						thisStudio.css("background", "#efefef");
					} else if(j % 2 == 0){
						thisStudio.css("background", "#fff");
					} else {
						thisStudio.css("background", "#efefef");
					}
				}
			}, 300);
		}

		ratingLogic();
		ratingSort();

		$("[filter='raitings'] li [checkbox]").on("click", function(){
			ratingLogic();
			ratingSort();
		});

		$("[filter='city'] select").change(function(){
			ratingLogic();
			ratingSort();
		});

		$("[filter='price'] input[name='price']").change(function(){
			ratingLogic();
			ratingSort();
		});
		$("[filter='price'] .slider-container").mouseup(function(){
			ratingLogic();
			ratingSort();
		});
	}, 200);
};

$(document).ready(main);