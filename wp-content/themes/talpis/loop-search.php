<?php
/**
 * результаты поиска записей в цикле (loop-search.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="thumb">
		<a href="<?php the_permalink(); ?>" class="thumbnail">
			<?php the_post_thumbnail( 'thumbnail' ); ?>
		</a>
		<a href="#modal-video" data-video='youtube' data-srcvideo="<?php the_field('id-youtube'); ?>" class="video-image thumbnail">
				<?php the_post_thumbnail( 'thumbnail' ); ?>
				<span class="playicon"></span>
				<span class="video-title"><?php the_title(); ?></span>
				<div class="meta">
					<span class="time"><?php the_time(get_option('date_format')); ?></span>
					<?php setPostViews(get_the_ID()); ?>
					<span class="wiews-number"><?php echo getPostViews(get_the_ID()); ?></span>
				</div>
			</a>
	</div>
	<div class="post-body">
		<a class="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<div class="meta">
			<span class="time"><?php the_time(get_option('date_format')); ?></span>
			<span class="wiews-number"><?php echo getPostViews(get_the_ID()); ?></span>
			<span class="comments-number"><?php comments_number( '0', '1', '%' ); ?></span>
		</div>
		<?php the_excerpt() ?>
	</div>
</article>