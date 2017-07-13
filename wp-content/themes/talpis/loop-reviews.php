<div class="review" id="reviews-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="author-info">
		<div class="author-icon">
			<?php

			$image = get_field('author-photo');

			if( !empty($image) ): ?>

			    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
		</div>
		<p class="author-name"><?php the_field( "author-name" ); ?></p>
		<p class="author-prof"><?php the_field( "author-prof" ); ?></p>
	</div>
	<div class="review-info">
		<p class="review-theme review-category"><?php the_field( "reviewcategory" ); ?></p>
		<p class="review-name"><?php the_title(); ?></p>
		<div class="review-text">
			<?php the_content(); ?>
		</div>
	</div>
</div>
