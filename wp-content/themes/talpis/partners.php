<?php
/**
 * Template Name: Тренеры и партнеры (partners.php)
 *
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
	<!-- SECTION BLUEHEADER-->
	<section class="blueheader"></section>
	<?php get_template_part('partials/breadcrumbs'); ?>
	<!-- SECTION 1-->
	<section class="trainers-sec1">
		<div class="container">
			<h2 class="sec-title">Авторизированные тренеры
				<br> и партнеры в вашем городе</h2>
				<?php $loop = new WP_Query( array( 'post_type' => 'trainer') );
						if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<?php get_template_part('loop-trainer');?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>