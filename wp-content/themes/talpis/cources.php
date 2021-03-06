
<?php
/**
 * Template Name: Тренигни и семинары (cources.php)
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
						<a href="/trainings-and-seminars/metaphorical-cards">Метафорические карты</a>
					</li>
					<li>
						<a href="/trainings-and-seminars/assemblage-point">Точка Сборки</a>
					</li>
					<li>
						<a href="/trainings-and-seminars/universe-therapy">ВсеЛенская Терапия</a>
					</li>
					<li>
						<a href="/trainings-and-seminars/universal-therapy-additions">ВсеЛенская Терапия. Дополнения </a>
					</li>
					<li>
						<a href="/trainings-and-seminars/theta-healing"">Тета-Хилинг</a>
					</li>
					<li>
						<a href="/trainings-and-seminars/course-for-trainers">Тренерский курс</a>
					</li>
					<li>
						<a href="#modal-individual-teraphy">Личная терапия</a>
					</li>
					<li>
						<a href="#modal-group-teraphy">Груповая терапия</a>
					</li>
					<li>
						<a href="/#/">Партнерские тренинги и семинары</a>
					</li>
					<li>
						<a href="/trainings-and-seminars/batch-training" >Пакетное обучение</a>
					</li>
				</ul>
				<div class="widgets">
					<?php get_template_part('partials/widget-events'); ?>
				</div>
			</aside>
			<article>
				<div class="cources">
					<a class="cource c1" href="/trainings-and-seminars/metaphorical-cards">
						<div class="cource-icon"></div>
						<p class="cource-name">Метафорические карты</p>
						<p class="cource-info">Простой способ познакомиться с методикой и научиться работе с картами</p>
					</a>
					<a class="cource c2" href="/trainings-and-seminars/assemblage-point">
						<div class="cource-icon"></div>
						<p class="cource-name">Точка Сборки</p>
						<p class="cource-info">Легкий и веселый обучающий семинар по квантовой психологии</p>
					</a>
					<a class="cource c3" href="/trainings-and-seminars/universe-therapy">
						<div class="cource-icon" ></div>
						<p class="cource-name">ВсеЛенская терапия</p>
						<p class="cource-info">Обучение авторскому методу терапии Леонида Тальписа</p>
					</a>
					<a class="cource c4" href="/trainings-and-seminars/universal-therapy-additions">
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
					<a class="cource c6" href="/trainings-and-seminars/theta-healing">
						<div class="cource-icon"></div>
						<p class="cource-name">Тета-Хилинг</p>
						<p class="cource-info">Продвинутая авторская методика для проработки актуальных тем</p>
					</a>
					<a class="cource c7"  href="/trainings-and-seminars/course-for-trainers">
						<div class="cource-icon"></div>
						<p class="cource-name">Тренерский курс</p>
						<p class="cource-info">Только для профессионалов, желающих преподавать ВсеЛенскую терапию </p>
					</a>
					<a class="cource c8" href="#modal-group-teraphy">
						<div class="cource-icon"></div>
						<p class="cource-name">Групповая терапия</p>
						<p class="cource-info">Работа с актуальными темами для тех, кто уже прошел обучение методу</p>
					</a>
					<a class="cource c9" href="/trainings-and-seminars/batch-training" >
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
				<div class="col-md-7">
					<article>
						<div class="post-gallery">

								<div class="post-gallery__item" style="background-image: url(<?php echo get_bloginfo('template_url');?>/img/author-ts1.jpg);">
									<p class="image-title">Семинар «Точка зборки»</p>
									<span class="image-number">1/<span class="">3</span></span>
								</div>


								<div class="post-gallery__item" style="background-image: url(<?php echo get_bloginfo('template_url');?>/img/postimage.jpg);">
									<p class="image-title">Семинар «Точка зборки»</p>
									<span class="image-number">2/<span class="">3</span></span>
								</div>


								<div class="post-gallery__item" style="background-image: url(<?php echo get_bloginfo('template_url');?>/img/postimage.jpg);">
									<p class="image-title">Семинар «Точка зборки»</p>
									<span class="image-number">3/<span class="">3</span></span>
								</div>
						</div>
						<p class="post-title">Леонид Тальпис:
							<br> «Мы все время пытаемся превратить жизнь в достижение результата и из-за этого теряем сам процесс жизни»</p>
						<p class="text">О том, как найти в себе скрытые возможности для получения личного опыта и разрешения собственных вопросов, а также приобретения практических навыков для работы с клиентами.
							<br>
						</p>
						<a class="more" style="margin-top: 40px;" href="../articles/leonid-talpis-my-vse-vremya-pytaemsya-prevratit-zhizn-v-dostizhenie-rezultata-i-iz-za-etogo-teryaem-sam-process-zhizni">Читать больше</a>
					</article>
				</div>
				<div class="col-md-5">
					<aside>
						<?php get_template_part('partials/banner'); ?>
						<?php get_template_part('partials/widget-postandvideo'); ?>
					</aside>
				</div>
			</div>
			<div class="line"></div>
			<?php get_template_part('partials/banner2'); ?>
		</div>
	</div>
<?php get_footer(); // подключаем footer.php ?>