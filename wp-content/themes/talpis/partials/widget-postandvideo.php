<div class="widget-block" id="post-and-video">
	<p class="widget-title posts-and-video">Статьи и видео</p>
	<div class="widget-body">
		<?php $loop = new WP_Query( array(
		 'post_type' => 'post',
		 'publish' => true,
		 'paged' => get_query_var('paged'),
		 'posts_per_page' => 2
		 ) );
				if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php get_template_part('loop');?>
		<?php endwhile; ?>
		<?php endif; ?>

		<?php $loop = new WP_Query( array(
		 'post_type' => 'video',
		 'publish' => true,
		 'paged' => get_query_var('paged'),
		 'posts_per_page' => 1
		 ) );
				if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php get_template_part('loop-video');?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>