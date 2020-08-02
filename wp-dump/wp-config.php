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
define( 'DB_NAME', 'remdance_g4v' );

/** Имя пользователя MySQL */
define( 'DB_USER', '046938440_g4v' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'istfac2007' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ns:nw@`Wwq8ex+om{qJMrt.!XLn0ndwR&hku#DF_?3O7x&7OxUF)^n+>jK8%IWb`' );
define( 'SECURE_AUTH_KEY',  '~Qp;63W@q;_$<Ww<JQbi1EQy(_;0yKKz.P2S-&^WtTH^FxHo_DdG0$-XO_xzkMUf' );
define( 'LOGGED_IN_KEY',    '0^_00GmyRiLshsV~LqMY,t]D])yf}MshYA~fA+F&/Ks7[[#S-??^F>],|LrOztd^' );
define( 'NONCE_KEY',        'Br@BLd]mmr:X-H:A;V-<oH*/m-^M]c>@4,52v6-tqxEF4>jG~m.-46Z>lxC+Qmme' );
define( 'AUTH_SALT',        'W+<q1Sclm,r1;d%SQkH{d5,BV=kk0L5X#SLesBMtgL.)44$`OsfL:!v<3G]F)8KU' );
define( 'SECURE_AUTH_SALT', 'I(wy]a7e6? 2x>%)Dw?~P0G+H}NZ5{)K6=q3iAtAAALXD 8+l[/?Dh8c0[Z+PC7g' );
define( 'LOGGED_IN_SALT',   'bd~C9u&tUQp(te@ex]!xY HxO3N)zeDA5I-Y[0jT[T<B~On>W/K]u(:R|fPcf?kd' );
define( 'NONCE_SALT',       '>%wp=sSryKedYWd.x81 .YEJ+N3]?Z (i>l%ALXeWiv*lg&c[h(]T&pk>VUQH49U' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
