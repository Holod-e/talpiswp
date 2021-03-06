<div class="mob-menu modal-overlay" >
	<div class="modal-content">
		<div class="close-button close-mob-menu">
				<div class="one"></div>
				<div class="two"></div>
		</div>
		<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
			'theme_location' => 'mobile', // идентификатор меню, определен в register_nav_menus() в functions.php
			'container'=> false, // обертка списка, тут не нужна
			'menu_id' => 'mobile-nav', // id для ul
			'items_wrap' => '<nav id="%1$s" class="mobile-menu navbar-nav %2$s">%3$s</ul>',
			'menu_class' => 'mobile-menu' // класс для ul, первые 2 обязательны
			);
			wp_nav_menu($args); // выводим верхнее меню
		?>
	</div>
</div>





<!-- MODALS-->
<div id="modal-video" class="modal-overlay">
	<div class="modal-content">
			<div class="close-button">
					<div class="one"></div>
					<div class="two"></div>
			</div>
			<!-- content -->
			<div id="video-popup"></div>
			<!-- end content -->

	</div>
</div>


<!-- MODAL VSELENSKAYA ADD SEMINAR-->
<div id="modal-vselenskayaaddPrice" class="modal-overlay modal-seminar-price">
	<div class="modal-content">
		<div class="close-button">
			<span class="one"></span>
			<span class="two"></span>
		</div>
		<p class="seminar-name">Семинар ВсеЛенская терапия Дополнения</p>
		<p class="modal-title">Стоимость семинара</p>
		<div class="prices-blocks clearfix">
			<div class="price-block pb1">
				<p class="price-val">55 000
					<span>руб </span>
				</p>
				<p class="price-info">При оплате до
					<span>1 августа</span> с учетом предоплаты.</p>
			</div>
			<div class="price-block pb2">
				<p class="price-val">60 000
					<span>руб </span>
				</p>
				<p class="price-info">При оплате до
					<span>1 октября</span> с учетом предоплаты.</p>
			</div>
			<div class="price-block pb3">
				<p class="price-val">65 000
					<span>руб </span>
				</p>
				<p class="price-info">При оплате до
					<span>1 октября</span> с учетом предоплаты.</p>
			</div>
		</div>
		<div class="bottom-text">
			<span>*</span> Для бронирования места на тренинге и фиксации суммы Вашей оплаты
			<br> необходимо внести предоплату
			<span class="blue">5 000 рублей</span>
		</div>
		<a class="btn btn-red">Забронировать</a>
	</div>
</div>

<!-- MODAL INDiVIDUAL TERAPHY -->
<div id="modal-individual-teraphy" class="modal-overlay modal-teraphy">
	<div class="modal-content">
		<div class="close-button">
			<span class="one"></span>
			<span class="two"></span>
		</div>
		<div class="form-block">
			<form>
				<p class="form-title">Запись на
					<br> индивидуальную терапию</p>
				<p class="form-subtitle">Для регистрации на семинар – заполните форму</p>
				<input type="text" name="name" placeholder="Имя / Фамилия" class="name">
				<input type="text" name="phone" placeholder="Номер телефона" class="phone">
				<input type="text" name="email" placeholder="Email" class="email">
				<input type="text" name="country" placeholder=" Город / Страна" class="country">
				<input type="submit" value="ЗАписаться" class="btn met-subm">
			</form>
		</div>
	</div>
</div>
<!-- MODAL GROUP TERAPHY -->
<div id="modal-group-teraphy" class="modal-overlay modal-teraphy">
	<div class="modal-content">
		<div class="close-button">
			<span class="one"></span>
			<span class="two"></span>
		</div>
		<div class="form-block">
			<form>
				<p class="form-title">Запись на
					<br> груповую терапию</p>
				<p class="form-subtitle">Для регистрации на семинар – заполните форму</p>
				<input type="text" name="name" placeholder="Имя / Фамилия" class="name">
				<input type="text" name="phone" placeholder="Номер телефона" class="phone">
				<input type="text" name="email" placeholder="Email" class="email">
				<input type="text" name="country" placeholder=" Город / Страна" class="country">

				<input type="submit" value="Записаться" class="btn met-subm">
			</form>
		</div>
	</div>
</div>

<!-- MODAL STEP 1-->
<div class="modal-overlay modal-step modal-step1">
	<div class="modal-content clearfix">
		<div class="modal-nav">
			<a class="prev"></a>
			<a class="first current">
				<span>1</span>
			</a>
			<a class="second">
				<span>2</span>
			</a>
			<a class="next"></a>
		</div>
		<div class="close-button">
			<span class="one"></span>
			<span class="two"></span>
		</div>
		<div class="form-block">
			<form>
				<p class="form-title">Введите ваши данные
					<br> для бронирования:</p>
				<p class="form-subtitle">Для подтверждения брони вам необходимо внести
					<span>100</span>
				</p>
				<div class="inputs-wrap">
					<input type="text" name="name" placeholder="Вадим" class="name">
					<input type="text" name="phone" placeholder="Номер телефона" class="phone">
					<input type="text" name="email" placeholder="Email адрес" class="email">
				</div>
				<p class="bottom-text">
					<span>*</span> ПОСЛЕ ПОДТВЕРЖДЕНИЯ ДАННЫХ,
					<br> ВЫ БУДЕТЕ ПЕРЕНАПРАВЛЕНЫ НА СТРАНИЦУ ОПЛАТЫ</p>
				<input type="submit" value="Продолжить" class="step-subm-red">
			</form>
		</div>
	</div>
</div>
<!-- MODAL STEP 2-->
<div class="modal-overlay modal-step modal-step2">
	<div class="modal-content clearfix">
		<div class="modal-nav">
			<a class="prev"></a>
			<a class="first done">
				<span></span>
			</a>
			<a class="second current">
				<span>2</span>
			</a>
			<a class="next"></a>
		</div>
		<div class="close-button">
			<span class="one"></span>
			<span class="two"></span>
		</div>
		<div class="form-block">
			<form>
				<p class="form-title">Остался последний шаг!</p>
				<p class="form-subtitle">Давайте проверим правильность ваших данных:</p>
				<div class="inputs-wrap">
					<div class="inp-wrap">
						<label class="name-label">Ваше имя</label>
						<input type="text" name="name" class="name">
					</div>
					<div class="inp-wrap">
						<label class="phone-label">Номер телефона</label>
						<input type="text" name="phone" class="phone">
					</div>
					<div class="inp-wrap">
						<label class="email-label">Email адрес</label>
						<input type="text" name="email" class="email">
					</div>
					<div class="inp-wrap">
						<label class="seminar-label">Семинар по квантовой психологии</label>
						<input type="text" name="seminar-name" class="seminar-name">
					</div>
				</div>
				<p class="bottom-text">
					<span>*</span> СУММА БРОНИРОВАНИЯ:
					<span class="dollar">100
						<span>
				</p>
				<input type="submit" value="Перейти к оплате" class="step-subm-red">
			</form>
		</div>
	</div>
</div>