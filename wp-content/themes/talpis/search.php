<?php
/**
 * Шаблон поиска (search.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<!-- SECTION BLUEHEADERч-->
<section class="blueheader"></section>
<section class="searchresults-sec1">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form role="search" id="searchresultsSearch" method="get" class="search-form form-inline" action="<?php echo home_url( '/' ); ?>">
						<input type="search" class="searchinput no-livesearch" id="search-field2" placeholder="" value="<?php echo get_search_query() ?>" name="s">
					<button type="submit" class="search-btn">найти</button>
				</form>
				<p class="search-title">
					Найдено результатов ( <span>
					<?php
					global $wp_query;
					echo $wp_query->found_posts;
					?>
					</span>)
				</p>
				<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
					<?php get_template_part('loop-search'); // для отображения каждой записи берем шаблон loop.php ?>
				<?php endwhile; // конец цикла
				else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>
				<?php pagination(); // пагинация, функция нах-ся в function.php ?>
			</div>
			<div class="col-md-4">
				<?php get_template_part('partials/subscribeform') ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>