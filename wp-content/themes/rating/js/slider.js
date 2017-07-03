var main = function(){
	function filter(){
		$("[filter='price'] .slider-container").slider({
			range: "min",
			value: 6000000,
			min: 1,
			max: 6000000,
			slide: function(event, ui){
				var finalPrice = String(ui.value).replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ');
				$("[filter='price'] input[name='price']").val(finalPrice);
			}
		});
	};
	$("[filter='price'] input[name='price']").val("6 000 000");

	filter();
};

$(document).ready(main);