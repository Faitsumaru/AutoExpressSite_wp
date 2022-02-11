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
 * * Настройки MySQL
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
define( 'DB_NAME', 'autoexpress_db' );

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
define( 'AUTH_KEY',         'cCQZWhij0)ITgw/@-B_/_{`5]]`2I qM$&EBmjcbH]Gu0ctC$myB1afBBHXn] Rd' );
define( 'SECURE_AUTH_KEY',  'C)_8:]-1(O2xF]bLC~Oo3Nps[Tj)O_Q5,EmY)k>Sb/?q?yt@-9Q>c9M=3zY*P}[y' );
define( 'LOGGED_IN_KEY',    'W6iL(PW#uP7h;,LJ+e1mBKlB)lD`rdn+p*zn>H ,@2|zX&$YqgmC`HfKz+Esm#Hh' );
define( 'NONCE_KEY',        '%2acKPiVwI2HD*VlLq6}_:k GI/MD)!VTH;+l05SW:XOeKB(It_8~xL-+q=c^u[m' );
define( 'AUTH_SALT',        ')~bT<Pvq=wp[kDHE[8+D[5*bLO@xlx4S!I|_RX^)-gVJ!j8/>nM;TC}y[nG!+Ry<' );
define( 'SECURE_AUTH_SALT', '[Yl&>9qQhEc+96Tn |SnjW>m:*%Zjwc{7uKPM%&vYzSE.mI `WiPj7wf-st(kJQk' );
define( 'LOGGED_IN_SALT',   'H}!3`=5VGnOD%hvp(vuf}JZhp?d06xx)<s0k#v4 ICtY,Q*k/qh]|oS #kaUSz2H' );
define( 'NONCE_SALT',       '?qlYnMpyGRFuB-g3qJM+1h1[X<zv3x1%://3 izvXQog~xD/G_r-{SsS(Ezyx2[2' );

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
