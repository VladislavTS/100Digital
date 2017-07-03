<?php 
/*
Template Name: Главная
 */
?>
<?php get_header()?>

<?php 

// settings
$query = new WP_query(array('post_type' => 'mobile_studio', 'posts_per_page' => -1));
$advertising_query = new WP_query(array('post_type' => 'advertising', 'posts_per_page' => -1));

?>

<!-- page. index (open) -->
<div page="index">
	<!-- container (open) -->
	<div class="container">
		<!-- left-container (open) -->
		<div class="left-container col-lg-9 col-md-9 col-sm-9 col-xs-9">
			<h1 class="page-name">Рейтинг разработчиков мобильных приложений</h1>
			<h2 class="page-slogan"><b>2017</b> / Топ - 100</h2>

			<?php while($advertising_query->have_posts()) : $advertising_query->the_post(); ?>
				<!-- row (open) -->
				<div advertising="<?php the_field('advertising_type'); ?>">
					<p class="title"><?php the_field('advertising_title'); ?></p>
					<p class="img"><?php the_field('advertising_img'); ?></p>
				</div>
				<!-- row (close) -->
			<?php endwhile; ?>

			<!-- rating-list (open) -->
			<div class="rating-list">
				<!-- row (open) -->
				<div class="row">
					<div col="num" class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						<div info="" class="grey">Место</div>
					</div>
					<div col="title" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div info="" class="grey">Компания</div>
					</div>
					<div col="city" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div info="city" class="grey">Город</div>
					</div>
					<div col="hour" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div info="hourFilter" class="grey">Стоимость <br>часа разработчика</div>
					</div>
					<div col="price" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div info="priceFilter" class="grey">Минимальная <br>стоимость</div>
					</div>
					<div col="apps" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div info="apps" class="grey">Количество <br>Приложений</div>
					</div>
					<div col="check" class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						<div info="" class="grey">Добавить <br>в тендер</div>
					</div>
				</div>
				<!-- row (close) -->

				<!-- row (open) -->
				<div class="row star">
					<div col="num" class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						<div info=""><img src="<?php bloginfo('template_url') ?>/img/star.svg"></div>
					</div>
					<div col="title" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<a info="title" href="">
							<h2></h2>
						</a>
					</div>
					<div col="city" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div info="city"></div>
					</div>
					<div col="hour" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div info="hour"></div>
						<div info="hourFilter"></div>
					</div>
					<div col="price" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div info="price"></div>
						<div info="priceFilter"></div>
					</div>
					<div col="apps" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div info="apps"></div>
					</div>
					<div col="check" class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						<div info="checkbox">
							<input type="checkbox" name="">
							<div checkbox=""></div>
						</div>
					</div>
				</div>
				<!-- row (close) -->

				<?php $studioPosition = 0; ?>
				<?php while($query->have_posts()) : $query->the_post(); $studioPosition++; ?>
					<!-- row (open) -->
					<div studio="<?php echo $studioPosition ?>" class="row" total="">
						<div info="ratings">
							<span rating="ruward"><?php echo the_field('r_exp'); ?></span>
							<span rating="ratingruneta"><?php echo the_field('r_ratin'); ?></span>
							<span rating="tagline"><?php echo the_field('r_tag'); ?></span>
							<span rating="cnews"><?php echo the_field('r_news'); ?></span>
							<span rating="adindex"><?php echo the_field('r_adindex'); ?></span>
						</div>

						<div col="num" class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
							<div info="num"><?php echo $studioPosition; ?></div>
						</div>
						<div col="title" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<a info="title" href="<?php echo the_field('studio_link'); ?>">
								<h2><?php echo the_title(); ?></h2>
							</a>
						</div>
						<div col="city" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<div info="city"><?php echo the_field('city'); ?></div>
						</div>
						<div col="hour" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<div info="hour">
								<?php echo the_field('r_hourPrice'); ?>
							</div>
							<div info="hourFilter">
								<?php echo the_field('r_hourPrice'); ?>
							</div>
						</div>
						<div col="price" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<div info="price">
								<?php echo the_field('minPrice'); ?>
							</div>
							<div info="priceFilter">
								<?php echo the_field('minPrice'); ?>
							</div>
						</div>
						<div col="apps" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<div info="apps"><?php echo the_field('maked_projects'); ?></div>
						</div>
						<div col="check" class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
							<div info="checkbox">
								<input type="checkbox" name="<?php echo $studioPosition; ?>">
								<div checkbox="<?php echo $studioPosition; ?>"></div>
							</div>
						</div>
					</div>
					<!-- row (close) -->
				<?php endwhile; ?>
			</div>
			<!-- rating-list (close) -->
		</div>
		<!-- left-container (close) -->

		<!-- right-container (open) -->
		<div class="right-container col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<!-- advertise-container (open) -->
			<div class="advertise-container">
				<a href="">
					<img src="<?php bloginfo('template_url') ?>/img/banner.png">
					<p class="module-title">Реклама</p>
				</a>
			</div>
			<!-- advertise-container (close) -->

			<!-- filters-container (open) -->
			<div class="filters-container">
				<h4 class="block-name">Учитываются рейтинги:</h4>

				<!-- filter. raiting (open) -->
				<ul filter="raitings">
					<li>
						<input type="checkbox" name="ruward" checked="checked" class="filter">
						<div checkbox="yes"></div>
						<p class="filter-title">Ruward</p>
					</li>
					<li>
						<input type="checkbox" name="ratingruneta" checked="checked" class="filter">
						<div checkbox="yes"></div>
						<p class="filter-title">Ratingruneta</p>
					</li>
					<li>
						<input type="checkbox" name="tagline" checked="checked" class="filter">
						<div checkbox="yes"></div>
						<p class="filter-title">Tagline</p>
					</li>
					<li>
						<input type="checkbox" name="cnews" checked="checked" class="filter">
						<div checkbox="yes"></div>
						<p class="filter-title">CNews</p>
					</li>
					<li>
						<input type="checkbox" name="adindex" checked="checked" class="filter">
						<div checkbox="yes"></div>
						<p class="filter-title">Adindex</p>
					</li>
				</ul>
				<!-- filter. raiting (close) -->

				<h4 class="block-name">Город</h4>

				<!-- filter. city (open) -->
				<div filter="city">
					<select>
						<option>Все города</option>
						<option>Алмата</option>
						<option>Алматы</option>
						<option>Алма-Ата</option>
						<option>Архангельск</option>
						<option>Астана</option>
						<option>Астрахань</option>
						<option>Баку</option>
						<option>Барнаул</option>
						<option>Белгород</option>
						<option>Бийск</option>
						<option>Бишкек</option>
						<option>Братск</option>
						<option>Брянск</option>
						<option>Владимир</option>
						<option>Волгоград</option>
						<option>Вологда</option>
						<option>Воронеж</option>
						<option>Гамбург</option>
						<option>Гродно</option>
						<option>Дзержинск</option>
						<option>Дубай</option>
						<option>Дубна</option>
						<option>Днепропетровск</option>
						<option>Екатеринбург</option>
						<option>Житомир</option>
						<option>Зеленоград</option>
						<option>Иваново</option>
						<option>Ижевск</option>
						<option>Иркутск</option>
						<option>Йошкар-Ола</option>
						<option>Казань</option>
						<option>Калининград</option>
						<option>Калуга</option>
						<option>Караганда</option>
						<option>Киев</option>
						<option>Кишинев</option>
						<option>Ковров</option>
						<option>Коломна</option>
						<option>Королев</option>
						<option>Кострома</option>
						<option>Краснодар</option>
						<option>Красноярск</option>
						<option>Курск</option>
						<option>Липецк</option>
						<option>Лондон</option>
						<option>Магнитогорск</option>
						<option>Миннеаполис</option>
						<option>Минск</option>
						<option>Могилёв</option>
						<option>Москва</option>
						<option>Мытищи</option>
						<option>Набережные челны</option>
						<option>Нальчик</option>
						<option>Нижний Новгород</option>
						<option>Новокузнецк</option>
						<option>Новороссийск</option>
						<option>Новосибирск</option>
						<option>Нью-Йорк</option>
						<option>Обнинск</option>
						<option>Одесса</option>
						<option>Омск</option>
						<option>Пекин</option>
						<option>Пенза</option>
						<option>Пермь</option>
						<option>Подгорица</option>
						<option>Прага</option>
						<option>Рига</option>
						<option>Ростов-на-Дону</option>
						<option>Рыбинск</option>
						<option>Самара</option>
						<option>Самуи</option>
						<option>Сан-франциско</option>
						<option>Санкт-Петербург</option>
						<option>Саратов</option>
						<option>Севастополь</option>
						<option>Смоленск</option>
						<option>Сочи</option>
						<option>Ставрополь</option>
						<option>Стокгольм</option>
						<option>Сыктывкар</option>
						<option>Таганрог</option>
						<option>Тамбов</option>
						<option>Тампа</option>
						<option>Ташкент</option>
						<option>Тверь</option>
						<option>Тольятти</option>
						<option>Томск</option>
						<option>Тула</option>
						<option>Тюмень</option>
						<option>Улан-Удэ</option>
						<option>Ульяновск</option>
						<option>Уфа</option>
						<option>Харьков</option>
						<option>Чебоксары</option>
						<option>Челябинск</option>
						<option>Череповец</option>
						<option>Черновцы</option>
						<option>Шветцинген</option>
						<option>Щелково</option>
						<option>Ярославль</option>
					</select>
				</div>
				<!-- filter. city (close) -->

				<h4 class="block-name">Ваш бюджет</h4>

				<!-- filter. price (open) -->
				<div filter="price">
					<div class="price"></div>
					<input type="text" name="price" placeholder="более 6 000 000 р.">
					<div class="slider-container"></div>
				</div>
				<!-- filter. price (close) -->
			</div>
			<!-- filters-container (close) -->

			<!-- button. filter -->
			<a href="http://sa40940-43138.smrtp.ru/send-form"><div button="filter">Отправить заявку</div></a>
		</div>
		<!-- right-container (close) -->
	</div>
	<!-- container (close) -->
</div>
<!-- page. index (close) -->


<?php get_footer()?>