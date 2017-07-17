<?php
  $args = array(
      'post_type' => 'banner',
      'publish' => true,
      'paged' => get_query_var('paged'),
      'p' => 127
  );
  query_posts($args);
if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
 <div id="banner-<?php the_ID(); ?>" <?php post_class( 'banner2' ); ?>><?php the_content(); ?></div>
<?php endwhile; // конец цикла
 endif; ?>