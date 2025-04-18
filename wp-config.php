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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'firepanda' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '.7Fq&![<Nm)IlwVog,e228Ou0IVa;I r<NG3tCee_:>$KQl+{AKD4:kRwEnr)pa:' );
define( 'SECURE_AUTH_KEY',  'uWh kyZ10fDa%s?MC/>=zZlN{ea>Wf28 E*1{D]AfKV5dK[[b=|>w-GABUJ]C<ts' );
define( 'LOGGED_IN_KEY',    'AY%-=-@uaVdvV1nrvG$2$%w}r}D/]0iXA.jqY>@1_(^a5O48p{HC,DvxN=j:fc{#' );
define( 'NONCE_KEY',        '`.f~O_Qiv&,ecNRVL/CT`F&m:1QBiLxWuh*(G@gG0&5JppZc{UB`V|P:<._LFQ9R' );
define( 'AUTH_SALT',        '8Mr&[LL?5IZm|rAY>#})YfpNa7bT`2NTq<#/pQkuIe.):J0]WS6q#|O@eYys>MYo' );
define( 'SECURE_AUTH_SALT', '`M?kY;|u7#GO+P_3gs6S)$CG9yC~f)h-j}c-PdS2q85kWSq{u+qxLDz[[fv+1)4j' );
define( 'LOGGED_IN_SALT',   'eWJ#FV;=gmtU7gbIO7+d,1jY/s:+e%(S%7@^C?@TG}e`/+puls6:eRj>R+sOFhW1' );
define( 'NONCE_SALT',       '`}]:l<R8sPN]us4JAnOZuA_Ls~cUAF9^,]:{&Tc3MKRmj!qztkJG%@+e5<K0R0nA' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
