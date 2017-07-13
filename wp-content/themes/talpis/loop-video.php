<?php
/**
 * Цикл видео
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<div class="video" id="video-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php
			$image = get_field('video-image');
			if( !empty($image) ): ?>
			<a href="#modal-video" data-video='youtube' data-srcvideo="<?php the_field('id-youtube'); ?>" style="background-image: url(<?php echo $image['url']; ?>);" class="video-image">
				<span class="playicon"></span>
				<span class="video-title"><?php the_title(); ?></span>
				<div class="meta">
					<span class="time"><?php the_time(get_option('date_format')); ?></span>
					<?php setPostViews(get_the_ID()); ?>
					<span class="wiews-number"><?php echo getPostViews(get_the_ID()); ?></span>
				</div>
			</a>
			<?php endif; ?>
</div>
