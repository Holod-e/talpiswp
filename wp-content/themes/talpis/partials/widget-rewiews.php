<div class="rewiews-block">
	<p class="rewiews-title">Отзывы</p>
	<div class="widget-slider">
		<?php
		  $args = array(
		      'post_type' => 'reviews',
		      'publish' => true,
		      'paged' => get_query_var('paged')
		  );
		  query_posts($args);
		if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
		 <div id="reviews-<?php the_ID(); ?>" <?php post_class('rewiew'); ?>>
		 	<div class="author-info">
		 		 	<?php
		 			$image = get_field('author-photo'); ?>
		 		<div class="author-icon" style="background-image: url(<?php echo $image['url']; ?>);"></div>
		 		<p class="author-name"><?php the_field( "author-name" ); ?></p>
		 		<p class="author-prof"><?php the_field( "author-prof" ); ?></p>
		 	</div>
		 	<div class="rewiew-info">
		 		<p class="rewiew-theme review-category"><?php the_field( "reviewcategory" ); ?></p>
		 		<p class="rewiew-name"><?php the_title(); ?></p>
		 		<div class="rewiew-text">
		 			<?php the_content(); ?>
		 		</div>
		 		<a href="#" class="read-more">Читать больше ></a>
		 	</div>
		 </div>
		<?php endwhile;  endif; // если записей нет, напишим "простите" ?>
		<?php //pagination(); // пагинация, функция нах-ся в function.php ?>
	</div>
</div>

