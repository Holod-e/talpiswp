<!-- SECTION closest-seminars-->
<section class="closest-seminars">
	<div class="container">
		<h2 class="sec-title">Ближайшие семинары</h2>
		<div class="seminars">
			<?php
				$args = array(
					'post_type'  => 'seminar',
					'category_name' => 'teta-hilling'
					);
				$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php get_template_part('loop-closestseminar');?>
				<?php endwhile; ?>
				<?php endif; ?>
		</div>
	</div>
</section>