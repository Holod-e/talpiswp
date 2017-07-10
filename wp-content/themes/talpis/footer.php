<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
	<?php get_template_part('modals'); ?>
	<footer class="footer">
		<div class="top-footer">
			<div class="container">
				<input placeholder="Введите запрос" class="search">
				<p class="place">Москва, ул. Челюскинская, 9</p>
				<p class="email-adress">contact@talpis.com</p>
				<p class="phone-number">8 (495) 589-72-27</p>
			</div>
		</div>
		<div class="main-footer">
			<div class="container">
				<div class="logo">Talpis.com</div>
				<?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
					'theme_location' => 'bottom', // идентификатор меню, определен в register_nav_menus() в function.php
					'container'=> false, // обертка списка, false - это ничего
					'menu_class' => 'nav nav-pills bottom-menu footer-nav', // класс для ul
						'menu_id' => 'footer-nav', // id для ul
						'fallback_cb' => false
					);
				wp_nav_menu($args); // выводим нижние меню
				?>
				<div class="social">
					<script type="text/javascript">(function() {
						if (window.pluso)if (typeof window.pluso.start == "function") return;
						if (window.ifpluso==undefined) { window.ifpluso = 1;
							var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
							s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
							s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
							var h=d[g]('body')[0];
							h.appendChild(s);
						}})();</script>
					<div class="pluso" data-background="transparent" data-options="medium,round,line,horizontal,nocounter,theme=05" data-services="vkontakte,facebook,google,twitter,odnoklassniki"></div>
				</div>
				<a href="#" class="footer-btn">Покупка карт</a>
			</div>
		</div>
		<div class="copy">
			<p>© Talpis.com. Все права защищены. Копирование материалов сайта разрешено только с письменного согласия правообладателей. </p>
		</div>
	</footer>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>