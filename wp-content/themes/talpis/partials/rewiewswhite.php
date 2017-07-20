<!-- SECTION REWIEWS-->
<section class="sec-reviews rev-white">
  <div class="container">
    <h2 class="sec-title">Отзывы</h2>
    <div class="review-slider">
      <?php
        $args = array(
            'post_type' => 'reviews',
            'publish' => true,
            'paged' => get_query_var('paged'),
        );
        query_posts($args);
      if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
        <?php get_template_part('loop-reviews'); // для отображения каждой записи берем шаблон loop.php ?>
      <?php endwhile; // конец цикла
      else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>
    </div>
    <!-- <div class="slider-nav"></div> -->
  </div>
</section>
