<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<!-- SECTION BLUEHEADER-->
<section class="blueheader"></section>

<?php get_template_part('partials/breadcrumbs'); ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
							<h1><?php the_title(); // заголовок поста ?></h1>
							<?php the_content(); // контент ?>
						</article>
					<?php endwhile; // конец цикла ?>
					<div class="post-pagination clearfix">
						<span class="prev-post"><?php previous_post_link('%link', 'Предыдущая статья', TRUE); // ссылка на предыдущий пост ?></span>
						<span class="next-post"><?php next_post_link('%link', 'Следующая статья', TRUE); // ссылка на следующий пост ?></span>
					</div>
				<?php // if (comments_open() || get_comments_number()) comments_template('', true); // если комментирование открыто - мы покажем список комментариев и форму, если закрыто, но кол-во комментов > 0 - покажем только список комментариев ?>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); // подключаем sidebar.php ?>
			</div>
		</div>
	</div>
</section>
<!--  COMMENTS SECTION -->
<section class="comments-section">
		<div class="container">
			<h3 class="sec-title">
				Обсуждение
			</h3>
		</div>
		<?php if (comments_open() || get_comments_number()) comments_template('', true); // если комментирование открыто - мы покажем список комментариев и форму, если закрыто, но кол-во комментов > 0 - покажем только список комментариев ?>
</section>
<?php //endwhile; // конец цикла ?>
<?php setPostViews(get_the_ID()); ?>
<?php get_footer(); // подключаем footer.php ?>




