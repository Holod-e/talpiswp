<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_print_styles() ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
	<header class="main-header">
		<a class="logo">Talpis.com</a>
			<?php get_template_part('searchform'); ?>
		<nav class="header-menu">
			<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
				'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
				'container'=> false, // обертка списка, тут не нужна
				'menu_id' => 'top-nav', // id для ul
				'items_wrap' => '<nav id="%1$s" class="header-menu navbar-nav %2$s">%3$s</ul>',
				'menu_class' => 'header-menu' // класс для ul, первые 2 обязательны
				);
				wp_nav_menu($args); // выводим верхнее меню
			?>
		</nav>
	</header>