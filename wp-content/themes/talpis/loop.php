<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
	<div class="thumb">
		<a href="<?php the_permalink(); ?>" class="thumbnail">
			<?php the_post_thumbnail( 'post-normalsize' ); ?>
		</a>
	</div>
	<div class="post-body">
		<h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> <?php // заголовок поста и ссылка на его полное отображение (single.php) ?>
		<div class="meta">
			<span class="time"><?php the_time(get_option('date_format')); ?></span> 
			<span class="wiews-number"><?php echo getPostViews(get_the_ID()); ?></span>
			<span class="comments-number"><?php comments_number( '0', '1', '%' ); ?></span>
		</div>
		<?php the_excerpt() ?>
		<a class="more" href="<?php the_permalink(); ?>">Читать дальше</a>
	</div>
</article>