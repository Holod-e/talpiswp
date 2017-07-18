<?php
/**
 * Цикл календаря (loop-closestseminar.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<div id="seminar-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
	<?php
			$image = get_field('seminar-photo');
			if( !empty($image) ): ?>
	<div class="seminar-photo" style="background-image:url(<?php echo $image['url']; ?>);">
				<!-- <img src="<?php echo $image['url']; ?>" /> -->
			<?php endif; ?>
	</div>
	<div class="seminar-info">
		<p class="seminar-name">Семинар
			<span><?php the_field('seminar-name')?></span>
		</p>
		<p class="seminar-txt"><?php the_field('seminar-description'); ?></p>
		<span class="date"><?php the_field('seminar-start-date'); ?></span>
		<a class="more">Подробнее</a>
	</div>
</div>