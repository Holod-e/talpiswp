<?php
/**
 * Template Name: статьи и видео (articlesandvideo.php)
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
					<?php $loop = new WP_Query( array( 'post_type' => 'post') );
							if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>

<?php get_footer(); // подключаем footer.php ?>