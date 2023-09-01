<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'strateg' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'IV.NG*UNrqwB{`J5E^y/TB06ayYp[uG2;z*/M%Cv]U].5L3A;j<>}inEAA++v^:w' );
define( 'SECURE_AUTH_KEY',  '|/YiQHEFAySdRV/|sl%5W0~#4px6RKc:[`WY!6ygJpx6TcgxhT3/nLpI|TU/u%kK' );
define( 'LOGGED_IN_KEY',    'hy9MKyDG=4F Izc3_lG29xvU/)X.WyYn:N5/[;z(u!rl*}%;M`ay[@x@sTJcaj!j' );
define( 'NONCE_KEY',        '#!{+)6D/l32PW:%t9eQ@Ow3MQ__l1/Ssjh$[Z@HOOmo(?_IVB.^ImjH-GrJS05UV' );
define( 'AUTH_SALT',        't[M^sen3QBbgV9_5L5@?Q26iDpB|%mDe6cU(0Oe*(zK7Wd g3o(,b5^q>Hh&I2Iw' );
define( 'SECURE_AUTH_SALT', '9@zgIu&58V 6IMSOEJ19AT&gbtKWP>?y_QN`FU|<sE=M8Kw]7MY~F}~MtZfR[R@6' );
define( 'LOGGED_IN_SALT',   'xw]b)n!Y&o:S~2y6e?}K!PRmYaX2(|-0KHe14)H}ar>jjk%7Tc`J%]|1N@/,tGoL' );
define( 'NONCE_SALT',       'k4L5=Xbm|6FvA5_DRGLU7CnjwOUD. G=nn{D.IT[=xxgBd~@uwxeD27GhA5zdjbe' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
