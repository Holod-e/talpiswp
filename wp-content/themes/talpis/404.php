<?php
/**
 * Страница 404 ошибки (404.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // Подключаем header.php ?>
<section class="page404-sec1">
	<div class="container">
		<div class="row">
				<h1>404</h1>
				<p class="title">Страница не найдена</p>
				<p class="subtitle">
					Вернуться на <a href="/main/">главную</a> страницу сайта
				</p>
				<form role="search" id="searchresultsSearch" method="get" class="search-form form-inline" action="<?php echo home_url( '/' ); ?>">
						<input type="search" class="searchinput no-livesearch" id="search-field3" placeholder="Введите для поиска"  name="s">
					<button type="submit" class="search-btn">найти</button>
				</form>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6"></div>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>