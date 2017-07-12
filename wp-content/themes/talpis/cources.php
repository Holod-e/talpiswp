
<?php
/**
 * Template Name: Курсы (cources.php)
 *
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
	<!-- SECTION BLUEHEADER-->
	<section class="blueheader"></section>
	<?php get_template_part('partials/breadcrumbs'); ?>
	<!--SECTION 1-->
	<div class="cources-sec1">
		<div class="container">
			<?php get_template_part('partials/subscribeform'); ?>
			<h2 class="sec-title">Авторские Тренинги и Семинары</h2>
			<aside>
				<ul class="cources-list">
					<li>
						<a href="/metaphor-cards/">Метафорические карты</a>
					</li>
					<li>
						<a href="/tochka-sborki/">Точка Сборки</a>
					</li>
					<li>
						<a href="/vselenskaya-teraphy/">ВсеЛенская Терапия</a>
					</li>
					<li>
						<a href="/vselenskaya-teraphy-additions/">ВсеЛенская Терапия. Дополнения </a>
					</li>
					<li>
						<a href="/teta-hilling/">Тета-Хилинг Базовый</a>
					</li>
					<li>
						<a href="/teta-hilling/">Тета-Хилинг Продвинутый</a>
					</li>
					<li>
						<a href="/trainer-course/">Тренерский курс</a>
					</li>
					<li>
						<a href="/#/">Личная терапия</a>
					</li>
					<li>
						<a href="/#/">Партнерские тренинги и семинары</a>
					</li>
					<li>
						<a href="/batch-learning/" >Пакетное обучение</a>
					</li>
				</ul>
				<div class="widgets"></div>
			</aside>
			<article>
				<div class="cources">
					<a class="cource c1" href="/metaphor-cards/">
						<div class="cource-icon"></div>
						<p class="cource-name">Метафорические карты</p>
						<p class="cource-info">Простой способ познакомиться с методикой и научиться работе с картами</p>
					</a>
					<a class="cource c2" href="/tochka-sborki/">
						<div class="cource-icon"></div>
						<p class="cource-name">Точка Сборки</p>
						<p class="cource-info">Легкий и веселый обучающий семинар по квантовой психологии</p>
					</a>
					<a class="cource c3" href="/vselenskaya-teraphy/">
						<div class="cource-icon" ></div>
						<p class="cource-name">ВсеЛенская терапия</p>
						<p class="cource-info">Обучение авторскому методу терапии Леонида Тальписа</p>
					</a>
					<a class="cource c4" href="/vselenskaya-teraphy-additions/">
						<div class="cource-icon"></div>
						<p class="cource-name big">ВсеЛенские
							<br> дополнения 1-2-3</p>
						<p class="cource-info">Работа с актуальными темами для тех, кто уже прошел обучение методу </p>
					</a>
					<a class="cource c5">
						<div class="cource-icon"></div>
						<p class="cource-name big">Системное
							<br> моделирование</p>
						<p class="cource-info">Авторский обучающий семинар Александра Зелинского</p>
					</a>
					<a class="cource c6" href="/teta-hilling/">
						<div class="cource-icon"></div>
						<p class="cource-name">Тета-Хилинг</p>
						<p class="cource-info">Продвинутая авторская методика для проработки актуальных тем</p>
					</a>
					<a class="cource c7"  href="/trainer-course/">
						<div class="cource-icon"></div>
						<p class="cource-name">Тренерский курс</p>
						<p class="cource-info">Только для профессионалов, желающих преподавать ВсеЛенскую терапию </p>
					</a>
					<a class="cource c8">
						<div class="cource-icon"></div>
						<p class="cource-name">Групповая терапия</p>
						<p class="cource-info">Работа с актуальными темами для тех, кто уже прошел обучение методу</p>
					</a>
					<a class="cource c9" href="/batch-learning/" >
						<div class="cource-icon"></div>
						<p class="cource-name">Пакетное обучение</p>
						<p class="cource-info"> Экономьте на обучении, пройдя полный пакет в удобное вам время. </p>
					</a>
				</div>
			</article>
		</div>
	</div>
	<?php get_template_part('partials/rewiewsblue'); ?>
	<!-- SECTION 2-->
	<div class="cources-sec2">
		<div class="container">
			<div class="row clearfix">
				<article>
					<div class="post-image"></div>
					<p class="post-title">Леонид Тальпис:
						<br> «Мы все время пытаемся превратить жизнь в достижение результата и из-за этого теряем сам процесс жизни»</p>
					<p class="text">О том, как найти в себе скрытые возможности для получения личного опыта и разрешения собственных вопросов, а также приобретения практических навыков для работы с клиентами.
						<br>
						<br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
						laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
				</article>
				<aside>
					<div class="banner"></div>
					<div class="widget-postandvideo2"></div>
				</aside>
			</div>
			<div class="banner"></div>
		</div>
	</div>
<?php get_footer(); // подключаем footer.php ?>