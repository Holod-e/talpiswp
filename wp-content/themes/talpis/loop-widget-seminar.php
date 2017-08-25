<?php
/**
 * Цикл календаря (loop-seminar.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<div class="seminar" id="seminar-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
	<div class="seminar-body">
		<div class="seminar-images">
		<?php
			$image = get_field('seminar-photo');
			if( !empty($image) ): ?>
				<div class="seminar-image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
			<?php endif; ?>
		<?php
			$image2 = get_field('seminar-photo2');
			if( !empty($image2) ): ?>
					<div class="seminar-image" style="background-image: url(<?php echo $image2['url']; ?>);"></div>
			<?php endif; ?>
		<?php
			$image3 = get_field('seminar-photo3');
			if( !empty($image3) ): ?>
				<div class="seminar-image" style="background-image: url(<?php echo $image3['url']; ?>);"></div>
			<?php endif; ?>
		</div>
		<div class="seminar-info">
			<div class="seminar-info-header">
				<div class="time-block">
					<p class="start-date">
						<?php the_field('seminar-start-date'); ?>
					</p>
					<p class="start-date finish-date">
						<?php the_field('seminar-finish-date'); ?>
					</p>
				</div>
				<p class="seminar-title"><?php the_title(); ?></p>
				<p class="seminar-city"><?php the_field('seminar-place')?></p>
			</div>
			<div class="seminar-info-body">
				<p class="seminar-description"><?php the_field('seminar-description'); ?></p>
				<a href="#" class="seminar-btn widget-seminar-btn">Забронировать</a>
			</div>
			
			<div class="seminar-info-footer">
				<p class="seminar-adress"><?php the_field('seminar-adress'); ?></p>
				<p class="seminar-price"><?php the_field('seminar-price'); ?></p>
				<p class="seminar-left-seats"><?php the_field('seminar-left-seats'); ?></p>
			</div>
		</div>
	</div>
	<div class="seminar-hidden">
		<input type="hidden" class="seminar-name" name="seminar-name" value="<?php the_field('seminar-name')?>">
		<input type="hidden" class="seminar-place" name="seminar-place" value="<?php the_field('seminar-place')?>">
		<input type="hidden" class="trainer-name" name="trainer-name" value="<?php the_field('trainer-name')?>">
		<input type="hidden" class="seminar-date" name="seminar-date" value="<?php the_field('seminar-date')?>">
		<p  class="seminar-date-text"><?php the_field('seminar-date')?> </p>
	</div>
</div>