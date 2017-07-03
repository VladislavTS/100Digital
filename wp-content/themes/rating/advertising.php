<?php 
/*
Template Name: Реклама
 */
?>
<?php get_header()?>

<?php 

// settings
$query = new WP_query(array('post_type' => 'mobile_studio', 'posts_per_page' => -1));
$advertising_query = new WP_query(array('post_type' => 'advertising', 'posts_per_page' => -1));

?>

<!-- page. advertising (open) -->
<div page="advertising">
	<!-- container (open) -->
	<div class="container">
		<h1 class="page-name">Цены на спецразмещения в <b>2017</b> году</h1>

		<!-- price-list (open) -->
		<div class="price-list">
			<div class="row row-titles">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
				<div class="col col- monthlg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info grey">Веб-разработка</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info grey">SEO</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info grey">Mobile</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info grey">Дизайн</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Февраль</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info grey">продано</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Март</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">40 000</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Апрель</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">40 000</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Май</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">40 000</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Июнь</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">32 500</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Июль</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">32 500</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Август</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">32 500</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Сентябрь</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">45 000</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Октябрь</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">45 000</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Ноябрь</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">45 000</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Декабрь</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">45 000</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
		</div>
		<!-- price-list (close) -->

		<!-- message-container (open) -->
		<div class="message-container">
			<p>
				Для заказа интересующих вас позиций пишите нам на почту <a href="info@digital-raiting.ru">info@digital-raiting.ru</a>.
			</p>
		</div>
		<!-- message-container (close) -->

		<h1 class="page-name">Цены на боковой баннер в</h1>
		<h2 class="page-slogan"><b>2017</b> году</h2>

		<!-- price-list (open) -->
		<div class="price-list">
			<div class="row row-titles">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
				<div class="col col- monthlg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info grey">Веб-разработка</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info grey">SEO</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info grey">Mobile</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info grey">Дизайн</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Февраль</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info grey">продано</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Март</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">20 000</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Апрель</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">20 000</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Май</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">20 000</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Июнь</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">16 250</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Июль</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">16 250</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Август</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">16 250</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Сентябрь</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">22 500</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Октябрь</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">22 500</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Ноябрь</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">22 500</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="info month">Декабрь</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<div class="info">22 500</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 grey">
					<div class="info grey">скоро</div>
				</div>
			</div>
		</div>
		<!-- price-list (close) -->

		<!-- message-container (open) -->
		<div class="message-container">
			<p>
				Для заказа интересующих вас позиций пишите нам на почту <a href="info@digital-raiting.ru">info@digital-raiting.ru</a>.
			</p>
		</div>
		<!-- message-container (close) -->
	</div>
	<!-- container (close) -->
</div>
<!-- page. advertising (close) -->


<?php get_footer()?>