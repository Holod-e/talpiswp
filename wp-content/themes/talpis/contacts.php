
<?php
/**
 * Template Name: Контакты (contacts.php)
 *
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
	<!-- SECTION BLUEHEADER-->
	<section class="blueheader"></section>
	<!-- SECTION breadcrumbs-->
	<section class="breadcrumbs">
		<div class="container">
			<p>Главная > Автор</p>
		</div>
	</section>
<!-- SECTION 1-->
	<section class="contacts-sec1">
		<h2 class="sec-title">Контакты</h2>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12658.76531206865!2d37.696328832548154!3d55.88392270539043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b53145d84e4621%3A0x33ceb8bb629a40a5!2z0KfQtdC70Y7RgdC60LjQvdGB0LrQsNGPINGD0LsuLCA5LCDQnNC-0YHQutCy0LAsINCg0L7RgdGB0LjRjywgMTI5MzM2!5e0!3m2!1sru!2sua!4v1499074485456"
			width="100%" height="455" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div class="place-info">
				<p class="adress">Адрес:
					<span>г. Москва, м. Медведково, ул. Челюскинская, 9</span>
				</p>
				<p class="phone">Телефон:
					<span>8 (495) 589-72-27</span>
				</p>
				<p class="email">Почта:
					<span>contact@talpis.com</span>
				</p>
			</div>
		</div>
	</section>
	<!-- SECTION 2-->
	<section class="contacts-sec2">
		<div class="container">
			<div class="questions-block">
				<h2 class="sec-title">Вопросы и ответы</h2>
				<div class="question">
					<p class="question-text">Какой курс выбрать?</p>
					<p class="answer-text">Все зависит от вашей психологической подготовки, желаний и потребностей при обучении. Если вы новичок, то вам 	начать с обучения Метафорическим Ассоциативным Картам</p>
				</div>
				<div class="question">
					<p class="question-text">Как оплатить тренинг?</p>
					<p class="answer-text">Оплатить тренинг вы можете с помощью кредитной карты, а также платежных систем Яндекс. Деньги и QIWI. При … 	следует учесть, что на Вас ложится процентная ставка по оплате, в зависимости</p>
				</div>
				<div class="question">
					<p class="question-text">Можно ли вернуть деньги за тренинг или
						<br> перенести его на другое время?</p>
					<p class="answer-text">В случае отказа от участия по уважительным причинам, Вы …</p>
				</div>
				<div class="answers-nav"></div>
			</div>
			<div class="form-block">
				<h2 class="sec-title">Задать вопрос</h2>
				<form>
					<label>Электронная почта</label>
					<input type="text" name="email" placeholder="Введите Ваш e-mail адрес" class="email">
					<label>Имя</label>
					<input type="text" name="name" placeholder="Введите Ваше имя" class="name">
					<label>Cообщение</label>
					<textarea class="message"></textarea>
					<input type="submit" value="Отправить" class="btn btn-send">
				</form>
			</div>
		</div>
	</section>
	<!-- SECTION 3-->
	<section class="contacts-sec3">
		<div class="container">
			<div class="block-image"></div>
			<div class="block-info">
				<h2 class="sec-title">Информация
					<br> для организаторов</h2>
				<p class="txt">Если вы хотите стать членом нашей региональной сети организаторов тренингов в мире и хотите провести выездные тренинги 	и семинары Леонида Тальписа в своем городе – свяжитесь с нами по кнопке ниже.</p>
				<a class="btn">Связаться с нами</a>
			</div>
		</div>
	</section>
<?php get_footer(); // подключаем footer.php ?>