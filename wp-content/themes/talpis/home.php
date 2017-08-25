
<?php
/**
 * Template Name: HOME (home.php)
 *
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<section class="home-sec1">
	<div class="container">
		<h1 class="home-title">Авторский сайт
			<br> Леонида Тальписа</h1>
		<p class="subtitle">О ВсеЛенской терапии, жизни и смыслах</p>
		<div class="seminar-widgets">
			<div class="closest-seminar" id="semInfo">
					<?php
						$args = array(
							'post_type'  => 'seminar'
							);
						$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<?php get_template_part('loop-widget-seminar');?>
						<?php endwhile; ?>
						<?php endif; ?>
			</div>
			<div class="calendar-widget">
				<p class="calendar-widget__title">Календарь</p>
					<div id="semDate">
						<?php
							$args = array(
								'post_type'  => 'seminar'
								);
							$loop = new WP_Query( $args );
								if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
									<?php get_template_part('loop-widget-seminar');?>
							<?php endwhile; ?>
							<?php endif; ?>
					</div>
					<a href="/calendar/" class="tocalendar">Смотреть все семинары</a>
			</div>
		</div>
	</div>
</section>
<!-- SECTION 2-->
<section class="home-sec2">
	<div class="container">
		<h2 class="sec-title">Авторские семинары и обучающие программы</h2>
		<p class="sec-subtitle">Наиболее эффективные трансформационные и терапевтические инструменты,
			<br> проверенные многолетней практикой и результатами клиентов</p>
		<div class="courses">
			<a href="/trainings-and-seminars/metaphorical-cards" class="course course1">
				<div class="course-title">Метафорические карты</div>
				<div class="course-info">Простой способ
					<br> познакомиться с методикой и научиться работе с картами </div>
			</a >
			<a  href="/trainings-and-seminars/assemblage-point" class="course course2">
				<div class="course-title">Точка Сборки</div>
				<div class="course-info">Легкий и веселый
					<br> обучающий семинар
					<br> по квантовой психологии</div>
			</a>
			<a  href="/trainings-and-seminars/universe-therapy" class="course course3">
				<div class="course-title">ВсеЛенская терапия</div>
				<div class="course-info">Обучение авторскому
					<br> методу терапии
					<br> Леонида Тальписа</div>
			</a>
			<a   href="/trainings-and-seminars/theta-healing" class="course course4">
				<div class="course-title">Тета-Хилинг</div>
				<div class="course-info">Полноценный обучающий курс
					<br> + дополнения
					<br> от Леонида Тальписа</div>
			</a>
			<a   href="/trainings-and-seminars/universal-therapy-additions" class="course course5">
				<div class="course-title">ВсеЛенские
					<br> дополнения 1-2-3</div>
				<div class="course-info">Работа с актуальными темами для тех, кто уже прошел обучение методу </div>
			</a>
			<a  href="/trainings-and-seminars/course-for-trainers" class="course course6">
				<div class="course-title">Тренерский курс</div>
				<div class="course-info">Только для профессионалов, желающих преподавать ВсеЛенскую терапию</div>
			</a>
			<a  href="/trainings-and-seminars/" class="course course7">
				<div class="course-title">Системное моделирование</div>
				<div class="course-info">Авторский
					<br> обучающий семинар
					<br> Александра Зелинского</div>
			</a>
			<a  href="/trainings-and-seminars/batch-training" class="course course8">
				<div class="course-title">Пакетное обучение</div>
				<div class="course-info"> Экономьте на обучении,
					<br> пройдя полный пакет в удобное вам время </div>
			</a>
		</div>
	</div>
</section>
<!-- SECTION 3-->
<section class="home-sec3">
	<div class="container">
		<div class="row">
			<div class=" col-md-7 col-sm-12 left-block">
				<h2 class="sec-title">Превращая жизнь в результате мы теряем саму жизнь</h2>
				<p class="sec-subtitle">Из интервью с Леонидом Тальписом</p>
				<div class="video">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/huFLHcZw1XQ?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
				<p class="text">На мой взгляд, психотерапевт похож на экскурсовода.
					<br> Его основная задача – сделать так, чтобы у человека появился выбор,
					<br> и ровно там, где у человека выбор появляется,
					<br> задача психотерапевта заканчивается.</p>
				<div class="buttons">
					<a href="/trainings-and-seminars/" class="btn btn-red">ПОДРОБНЕЕ О ТРЕНИНГАХ</a>
					<a href="/articles-and-videos/" class="all-video">Смотреть все видео ></a>
				</div>
			</div>
			<div class="col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-0 right-block">
				<?php get_template_part('partials/widget-rewiews'); ?>
				<?php get_template_part('partials/banner');?>
			</div>
		</div>
	</div>
</section>
<!-- SECTION 4-->
<section class="home-sec4">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 ">
				<div class="talpis-photo"></div>
			</div>
			<div class="talpis-info col-xs-12 col-sm-10 col-sm-offset-1 col-md-offset-0 col-md-8">
				<h2 class="sec-title">Автор уникальной методики
					<br> Леонид Тальпис</h2>
				<p class="talpis-text">Леонид Тальпис – практикующий психолог, потомственный врач, автор уникальной терапевтической методики под названием «ВсеЛенская терапия» и ряда дополнений к популярным психологическим направлениям, официальный представитель метафорических карт
					OH-CARDS в России, тренер международного уровня.</p>
				<a href="/about-author/" class="btn-more-about-author">ПОДРОБНЕЕ ОБ АВТОРЕ</a>
			</div>
		</div>
		<?php get_template_part('partials/banner2');?>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>