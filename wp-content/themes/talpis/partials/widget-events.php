<div id="events">
	<h3 class="widget-title">
		События
	</h3>
	<div class="widget-body">
		<?php $loop = new WP_Query( array(
		 'post_type' => 'seminar',
		 'publish' => true,
		 'paged' => get_query_var('paged'),
		 'posts_per_page' => 2
		 ) );
				if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div id="seminar-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
					<?php
							$image = get_field('seminar-photo');
							if( !empty($image) ): ?>
					<div class="seminar-photo" style="background-image:url(<?php echo $image['url']; ?>);">
								<!-- <img src="<?php echo $image['url']; ?>" /> -->
							<?php endif; ?>
					</div>
					<div class="seminar-info">
						<p class="seminar-name">
							<span><?php the_field('seminar-name')?></span>
						</p>
						<span class="date"><?php the_field('seminar-start-date'); ?></span>
					</div>
				</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>