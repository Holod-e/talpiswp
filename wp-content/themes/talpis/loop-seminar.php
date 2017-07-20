<?php
/**
 * Цикл календаря (loop-seminar.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<div class="seminar f1 f2 f3" id="seminar-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
	<div class="seminar-body">
		<div class="seminar-images">
		<?php
			$image = get_field('seminar-photo');
			if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		<?php
			$image2 = get_field('seminar-photo2');
			if( !empty($image2) ): ?>
				<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
			<?php endif; ?>
		<?php
			$image3 = get_field('seminar-photo3');
			if( !empty($image3) ): ?>
				<img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
			<?php endif; ?>
		</div>
		<div class="seminar-info">
			<p class="seminar-subtitle"><?php the_field('seminar-subtitle'); ?></p>
			<p class="seminar-title"><?php the_title(); ?></p>
			<p class="seminar-description"><?php the_field('seminar-description'); ?></p>
			<a class="more-link" href="<?php the_field('more-link'); ?>">Узнать подробнее</a>
			<div class="time-block">
				<p class="start-date">Старт: <br>
					<span><?php the_field('seminar-start-date'); ?></span>
				</p>
				<p class="start-date finish-date">Окончание: <br>
					<span><?php the_field('seminar-finish-date'); ?></span>
				</p>
			</div>
		</div>
	</div>
	<div class="seminar-footer">
		<p class="seminar-adress"><?php the_field('seminar-adress'); ?></p>
		<p class="seminar-price"><?php the_field('seminar-price'); ?></p>
		<p class="seminar-left-seats"><?php the_field('seminar-left-seats'); ?></p>
		<a href="#" class="seminar-btn">Забронировать</a>
	</div>
	<div class="seminar-hidden">
		<input type="hidden" class="seminar-name" name="seminar-name" value="<?php the_field('seminar-name')?>">
		<input type="hidden" class="seminar-place" name="seminar-place" value="<?php the_field('seminar-place')?>">
		<input type="hidden" class="trainer-name" name="trainer-name" value="<?php the_field('trainer-name')?>">
	</div>
</div>