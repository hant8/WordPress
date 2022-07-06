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
define( 'DB_NAME', 'wordpress_bd' );

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
define( 'AUTH_KEY',         ']Bob94zh:Fu ZUMxESrOQN?P`wN]/i,~1$|XW)rfmHWEB[$o~gJR{MabBvI-K*_z' );
define( 'SECURE_AUTH_KEY',  '6q($L[*Dn(*zFxT+Jo={>tHQuz/az /Pr6 ]*.bjm*G<4hRnH2J-?8/#^~xMB).}' );
define( 'LOGGED_IN_KEY',    'n3SCuh_65K<]K25M`-FVM;/pxB8&QfTl~36S{~Ku>}ANmti!}Nzo;rX5=Ol@.nD$' );
define( 'NONCE_KEY',        ',WWWGp]QMcv;*y?>h$w4Hmt%x`{2:sJ?glENb*=_&*[r/x!OGY%>=[=l)/RJJG/&' );
define( 'AUTH_SALT',        '#kr(,92n@GEg$=mY1|xx.lyD@|_b^M{:=SYS60tRK68BEf602}k30Dv2`N;e3t07' );
define( 'SECURE_AUTH_SALT', 'tM^])1gRkL3}[mVd8, ?bf`pqPdQL-L.=g0yA`+2E{X:Iu5wa?WpEx-[&N=;K.%v' );
define( 'LOGGED_IN_SALT',   'z$wzANlNU0/w#V}b$*$-9Ci{91CD7FIx|lg[@xq>:sHKZpiD#b ]])ubvDT1gAhS' );
define( 'NONCE_SALT',       'LSv6o>P]e:PB0i)<_7eRUUE^pvXvpf_Z;0+!;s{m9q[OC:&WOTKq7?a,]wIfGIjE' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wps_';

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
