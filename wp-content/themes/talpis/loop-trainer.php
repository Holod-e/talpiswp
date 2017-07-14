<?php
/**
 * Цикл тренеров (loop-trainer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<div class="trainer" id="trainer-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="trainer-info">
		<div class="trainer-photo">
      <?php
      $image = get_field('trainer-photo');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
    </div>
		<p class="trainer-name"><?php the_field('trainer-name'); ?></p>
		<p class="trainer-prof"><?php the_field('trainer-prof'); ?></p>
	</div>
	<div class="trainer-text">
		<p class="text-title"><?php the_title(); ?> </p>
		<div class="text-txt"><?php the_field('trainer-about');?></div>
		<a class="totrainer-site" href="<?php the_field('trainer-site');?>">Перейти на сайт тренера</a>
  </div>
</div>