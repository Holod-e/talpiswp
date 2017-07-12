<?php
/**
 * Шаблон статьи и видео (category.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
	<!-- SECTION BLUEHEADER-->
	<section class="blueheader"></section>
	<?php get_template_part('partials/breadcrumbs'); ?>
	<div class="section-postandvideo">
		<div class="container">
			<?php get_template_part('partials/subscribeform'); ?>
			<!-- FILTERS -->
			<div class="filters"></div>
			<div class="row">
				<div class="col-md-8">
					<h3><?php single_cat_title(); // название категории ?></h3>
					<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
						<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
					<?php endwhile; // конец цикла
					else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>
					<?php pagination(); // пагинация, функция нах-ся в function.php ?>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>
<?php get_footer(); // подключаем footer.php ?>