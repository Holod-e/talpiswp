<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'talpis');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'talpis.com');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H@LvS0x0TG8#:Sk+g@xM~,cT2teKV43J?G[lOFZ<?4p{gNhjhjD<)VG4|X4N5o!9');
define('SECURE_AUTH_KEY',  '`1&#E:AF?!wit1vhBgyFrLSE-L3Zs;>>i+ ]Hp6kJN8MHgSaM#/r/lTlcieUcf< ');
define('LOGGED_IN_KEY',    'g:tGj!C!`Wy|Mh2Fpe>?8|/wx353]C:xN AT]kj8|O[WH^Mz/,VR1I#qZcG[YeOG');
define('NONCE_KEY',        'o[byHCP#{U@^AFga$6v+LtF/r3509TMS-G,ZWlyogthZCL)DPu(Ul;>ILKn3 sq0');
define('AUTH_SALT',        'QWP)`G6WQ*&S#b$vwc2:y>>0eW&r79|uF|Z+VDJ*:?.O0q~NbQ=(74`5dzhw}XdK');
define('SECURE_AUTH_SALT', 'E;:w6c$Ai^A3%ao*3aC+U158/7lO8_NY~(~cXV)ofJyh{kFSi!)xdPT #c&^-JbF');
define('LOGGED_IN_SALT',   'u#8vx)ksBF[AD yY#:ZPD^q3#pn;I9nHV#r{;}uesRYme]#K$h}z-MZ~T:~Ge::(');
define('NONCE_SALT',       '<TQ?([3NG_85%z,Y~Vj60[:]cvqHy~o2MUDy/x;moz+DiMIe.zchv}4Bxkw/;`Vl');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
