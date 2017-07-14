<?php
/**
 * Template Name: Календарь (calendar.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
	<!-- SECTION BLUEHEADER-->
	<section class="blueheader"></section>

	<?php get_template_part('partials/breadcrumbs'); ?>

	<div class="section-calendar">
		<div class="container">
			<?php get_template_part('partials/subscribeform'); ?>
			<h2 class="sec-title">Календарь</h2>
			<!-- FILTERS -->
			<?php get_template_part('partials/calendar-filter'); ?>
			<?php if ($_GET && !empty($_GET)) { // если было передано что-то из формы
				go_filter(); // запускаем функцию фильтрации
			} ?>
			<div class="row">
				<div class="col-md-8">
					<?php
						$args = array(
										'post_type' => 'seminar'
									);
						$loop = new query_posts( $args );
								if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<?php get_template_part('loop-seminar');?>
						<?php endwhile; ?>
						<?php endif; ?>
				</div>
				<div class="col-md-4">
					<div class="vidgets-block"></div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); // подключаем footer.php ?>