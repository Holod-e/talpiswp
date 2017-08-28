<?php
/**
 * Template Name: Точка сборки (tochkasborki.php)
 *
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>

<!-- SECTION 1-->
<section class="course-sec1 ts-sec1">
	<div class="container"></div>
	<h1 class="course-title">Точка Сборки</h1>
	<p class="course-subtitle">Эффективная техника по квантовой психологии, доступная как профессионалам,
		<br> так и все желающим</p>
	<a href="#formblock" class="btn btn-red btn-bron btn-anchor">Забронировать</a>
	<a href="#block2" class="btn btn-more btn-anchor">Узнать подробней</a>
</section>
<!-- SECTION 2-->
<a name="block2"></a>
<section class="course-sec2 ts-sec2">
	<div class="container">
		<h2 class="sec-title">Жизненные сферы</h2>
		<p class="sec-subtitle">Обучение включает в себя квантовую психологию, элементы ВсеЛенской терапии
			<br> и технологию выявления базовых зарядов и дуальностей
			<br> для работы с более серьезными темами</p>
		<div class="elements">
			<div class="element el1">
				<div class="element-icon"></div>
				<p class="element-title">Здоровье</p>
				<p class="element-text">Lorem ipsum dolor sit amet, consectetur limit </p>
			</div>
			<div class="element el2">
				<div class="element-icon"></div>
				<p class="element-title">Отношения</p>
				<p class="element-text">Lorem ipsum dolor sit amet, consectetur limit </p>
			</div>
			<div class="element el3">
				<div class="element-icon"></div>
				<p class="element-title">Самореализация</p>
				<p class="element-text">Lorem ipsum dolor sit amet, consectetur limit </p>
			</div>
			<div class="element el4">
				<div class="element-icon"></div>
				<p class="element-title">Достижение целей</p>
				<p class="element-text">Lorem ipsum dolor sit amet, consectetur limit</p>
			</div>
		</div>
	</div>
</section>
<!-- SECTION 3-->
<section class="met-sec3 ts-sec3">
	<div class="container">
		<p class="cart-txt1">Эта технология позволяет</p>
		<p class="cart-txt2">Выбрать из бесконечного множества существующих реальностей ту,
			<br> в которой вы можете встретится с оптимальной версией себя,
			<br> своей жизни, своего здоровья</p>
		<a href="#formblock" class="btn btn-red btn-anchor">Забронировать</a>
	</div>
</section>
<!-- SECTION 4-->
<section class="vsel-sec4 ts-sec4">
	<div class="container">
		<h2 class="sec-title">Хотите преодолеть собственные блоки
			<br> и выйти за рамки собственных
			<br> ограничений?</h2>
		<p class="sec-text">Точка сборки поможет Вам получить самые современные инструменты квантовой психологии
			<br> для управления Вашей реальностью и стать более уверенным и гибким
			<br> в выборе вариантов своего будущего </p>
	</div>
</section>
<!-- SECTION 5-->
<section class="met-sec6 ts-sec5">
	<div class="container">
		<p class="txt1">После 2-х дней семинара</p>
		<p class="txt2">Вы сможете сразу использовать полученные знания и навыки
			<br> для себя, своих близких и своих клиентов </p>
	</div>
</section>
<!-- SECTION 6-->
<section class="met-sec5 vsel-sec8 ts-sec6">
	<div class="container">
		<h2 class="sec-title">Семинар «Точка Сборки» направлен на:</h2>
		<p class="title"> План семинара</p>
		<ul>
			<li>Расширение ваших терапевтических возможностей по работе с клиентами: разработку алгоритмов воздействия с клиентом и отслеживания результатов терапии</li>
			<li>Получение техник работы с установками, которые ограничивают Вашу реальность</li>
			<li>Приобретение опыта работы с факторами, постоянно создающими необходимость борьбы в Вашей жизни и лишающими Вас необходимых ресурсов </li>
		</ul>
		<ul>
			<li>Понимание временных, пространственных и энергетических характеристик реальности, а также основных техник работы с ними <br><br></li>
			<li class="small">Возможность изменять Вашу реальность во всех жизненных сферах <br><br></li>
			<li>Обучение работы с полей сердца, использование собственных ресурсов клиента для решения его собственных вопросов </li>
		</ul>
	</div>
</section>
<!-- SECTION 7-->
<section class="met-sec6 ts-sec7">
	<div class="container">
		<p class="txt1">а главное:</p>
		<p class="txt2">«Точка Сборки» поможет найти обновленного, уверенного
			<br> и сильного себя! </p>
	</div>
</section>
<?php get_template_part('partials/rewiewsts'); ?>
<!-- SECTION 8-->
<section class="met-sec7 ts-sec8">
	<div class="container">
		<h2 class="sec-title">Хотите получить ответы
			<br> на все волнующие Вас вопросы и найти
			<br> эффективное решение?</h2>
		<p class="sec-subtitle">Вы освободитесь от старых установок, отживших убеждений
			<br> и эмоциональных ограничений </p>
	</div>
</section>
<!-- SECTION 10-->
<a name="formblock"></a>
<section class="course-formblock ts-sec9">
	<div class="container">
		<div class="form-block">
			<form>
				<p class="form-title">Трансформируйте Вашу жизнь уже сегодня!</p>
				<p class="form-subtitle">Для регистрации на семинар – заполните форму</p>
				<input type="text" name="name" placeholder="Имя / Фамилия" class="name">
				<input type="text" name="phone" placeholder="Номер телефона" class="phone">
				<input type="text" name="email" placeholder="Email" class="email">
				<input type="text" name="country" placeholder=" Город / Страна" class="country">
				<div class="education-block">
					<p class="question">Есть ли у вас психологическое образование?</p>
					<span class="radio checked">Нет</span>
					<span class="radio">Да</span>
				</div>
				<a href="#modal-tsPrice" class="seminar-price">Стоимость семинара </a>
				<input type="submit" value="Забронировать место" class="btn met-subm">
			</form>
		</div>
	</div>
</section>
<!-- SECTION closest-seminars-->
<section class="closest-seminars">
	<div class="container">
		<h2 class="sec-title">Ближайшие семинары</h2>
		<div class="seminars">
			<?php
				$args = array(
					'post_type'  => 'seminar',
					'category_name' => 'tochka-sborki'
					);
				$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php get_template_part('loop-closestseminar');?>
				<?php endwhile; ?>
				<?php endif; ?>
		</div>
	</div>
</section>
<?php get_template_part('partials/videorewiews'); ?>
<?php get_template_part('partials/secbio'); ?>
<?php get_template_part('partials/teraphy'); ?>
<?php get_template_part('partials/sertificate'); ?>

<?php get_footer(); ?>

<!-- MODALS -->

<?php 
$args = array(
	'page_id'  => 31
	);
$loop = new WP_Query( $args );
	if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<!-- MODAL TOCHKA SBORKI SEMINAR-->
		<div id="modal-tsPrice" class="modal-overlay modal-seminar-price">
			<div class="modal-content">
				<div class="close-button">
					<span class="one"></span>
					<span class="two"></span>
				</div>
				<p class="seminar-name">Семинар Точка Сборки</p>
				<p class="modal-title">Стоимость семинара</p>
				<div class="prices-blocks clearfix">
					<div class="price-block pb1">
						<p class="price-val"><?php the_field('price1'); ?>
							<span>руб </span>
						</p>
						<p class="price-info">При оплате до
							<span><?php the_field('date1'); ?></span> с учетом предоплаты.</p>
					</div>
					<div class="price-block pb2">
						<p class="price-val"><?php the_field('price2'); ?>
							<span>руб </span>
						</p>
						<p class="price-info">При оплате до
							<span><?php the_field('date2'); ?></span> с учетом предоплаты.</p>
					</div>
					<div class="price-block pb3">
						<p class="price-val"><?php the_field('price3'); ?>
							<span>руб </span>
						</p>
						<p class="price-info">При оплате до
							<span><?php the_field('date3'); ?></span> с учетом предоплаты.</p>
					</div>
				</div>
				<p class="bottom-text">
					<span>*</span> Количество мест на семинаре ограничено.
					<br> Посещение семинара возможно только после внесения предоплаты.
					<br>
					<br>
					<span>*</span> При пропуске семинара предоплата не возвращается.</p>
				<a href="#" class="btn btn-red" >Забронировать</a>
			</div>
		</div>
<?php endwhile; ?>
<?php endif; ?>
