<?php
  $args = array(
      'post_type' => 'banner',
      'publish' => true,
      'paged' => get_query_var('paged'),
      'p' => 126
  );
  query_posts($args);
if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
 <div id="banner-<?php the_ID(); ?>" <?php post_class( 'banner' ); ?>><?php the_content(); ?></div>
<?php endwhile; // конец цикла
 endif; ?>