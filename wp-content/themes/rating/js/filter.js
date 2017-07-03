var main = function(){
	function doFilter(){
		setTimeout(function(){
			var $studio = $("*[studio]");
			var studiosCount = $studio.length;
			var price = $("[filter='price'] input[name='price']").val();

			$studio.addClass("hide");
			$studio.removeClass("filter");

			function filterCity(city){
				var studioCity = $thisStudio.find("[info='city']").text();
				if(studioCity.indexOf(city) != -1){
					return true;
				} else {
					return false;
				}
			}

			function filterRatings(rating){
				var $studioRatings = $thisStudio.find("[info='ratings']");
				if($studioRatings.find("[rating='"+rating+"']").text() != 0){
					$thisStudio.addClass("filter");
				}
			}

			for(var i = 0; i < studiosCount; i++){
				var $thisStudio = $("*[studio='"+(i+1)+"']");
				var city = $("[filter='city'] select").val();
				var studioPrice = $thisStudio.find("[info='price']").text();

				// filter. city
				if(filterCity(city) || city == "Выбор города"){
					// filter. price
					if(parseInt(price.replace(/\s/g, '')) >= studioPrice || isNaN(parseInt(price.replace(/\s/g, ''))) || studioPrice == "---"){
						// filter. ratings
						if($("[filter='raitings'] input[name='ruward']").attr("checked") == "checked")
							filterRatings("ruward");
						if($("[filter='raitings'] input[name='ratingruneta']").attr("checked") == "checked")
							filterRatings("ratingruneta");
						if($("[filter='raitings'] input[name='tagline']").attr("checked") == "checked")
							filterRatings("tagline");
						if($("[filter='raitings'] input[name='cnews']").attr("checked") == "checked")
							filterRatings("cnews");
						if($("[filter='raitings'] input[name='adindex']").attr("checked") == "checked")
							filterRatings("adindex");
					}
				}
			}
		}, 100);
	}

	doFilter();

	$("[filter='raitings'] li [checkbox]").on("click", function(){
		doFilter();
	});

	$("[filter='city'] select").change(function(){
		doFilter();
	});

	$("[filter='price'] input[name='price']").change(function(){
		doFilter();
	});
	$("[filter='price'] .slider-container").mouseup(function(){
		doFilter();
	});
};

$(document).ready(main);