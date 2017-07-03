<?php 
/*
Template Name: Форма отправки
 */
?>
<?php get_header()?>

<!-- page. form (open) -->
<div page="form">
	<!-- container (open) -->
	<div class="container">
		<!-- button. close -->
		<a href="http://sa40940-43138.smrtp.ru"><div button="close"></div></a>

		<!-- form-container (open) -->
		<div class="form-container">
			<h1 class="page-name">Отправить запрос в агенства</h1>
			<p class="text">
				Заполните форму ниже и ваша заявка будет отправлена выбранным разработчикам, они свяжутся с вами в ближайшее время.
			</p>

			<!-- agent-container (open) -->
			<div class="agent-container">
				<p>Вы собираетесь отправить заказ в следующие агентства:</p>
				<ul></ul>
			</div>
			<!-- agent-container (close) -->

			<div class="clear"></div>

			<!-- inputs-container (open) -->
			<div class="inputs-container">
				<div class="input-container">
					<p class="input-name">Тема проекта <span class="red">*</span></p>
					<input type="text" name="project-name" placeholder="Название должно быть простым и отражать суть проекта.">
				</div>
				<div class="input-container">
					<p class="input-name">Описание проекта <span class="red">*</span></p>
					<textarea name="project-info" placeholder="Цели и задачи вашего проекта"></textarea>
				</div>
				<div class="input-container">
					<p class="input-name">ФИО <span class="red">*</span></p>
					<input type="text" name="user-name">
				</div>
				<div class="input-container">
					<p class="input-name">Email <span class="red">*</span></p>
					<input type="text" name="user-mail">
				</div>
				<div class="input-container">
					<p class="input-name"><span class="grey">Телефон</span></p>
					<input type="text" name="user-phone">
				</div>
				<div class="input-container">
					<p class="input-name"><span class="grey">Должность</span></p>
					<input type="text" name="user-status">
				</div>
				<div class="input-container">
					<p class="input-name"><span class="grey">Компания</span></p>
					<input type="text" name="user-company">
				</div>
				<div class="input-container">
					<p class="input-name"><span class="grey">Телефон компании</span></p>
					<input type="text" name="user-company-phone">
				</div>

				<div button="send">Отправить</div>
				<div class="server-answer">Ваша заявка отправлена</div>
			</div>
			<!-- inputs-container (close) -->
		</div>
		<!-- form-container (close) -->
	</div>
	<!-- container (close) -->
</div>
<!-- page. form (close) -->


<?php get_footer()?>