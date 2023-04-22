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
define( 'DB_NAME', 'psyalta_test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'psyalta_test' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '567149QWEd' );

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
define( 'AUTH_KEY',         '7IVPb*ybq~]p1ByM6AErmkv>(M1wfOH^p`&[&wGY-c:N`rrv3uI=LqZ,koLP`>a[' );
define( 'SECURE_AUTH_KEY',  '$0k_172++6TT0x8]Erl(5M+3Z@HEYWrDi@^OqEu`PUiu[<uHn_j]msa~m~B:wSai' );
define( 'LOGGED_IN_KEY',    'ik/T1#x5p:j)k?}#V=6NdBv{0x~VEv!.2=HmeM$${v*$7 :%J=>ci_NtZ>9wHP$L' );
define( 'NONCE_KEY',        'Jo8IVf,iM|#K8#f~OQ=MY0+BRUl@1|]^@+?8{ZYWwU.&KE#zz@Rqn{2u2~z3>%Pb' );
define( 'AUTH_SALT',        ';,:kzXC=H6ELz*kWKTDQ[jY_:%XvM9yr>9+}TEQXdmsN?T>ODn~4#WRdr{4hK-;?' );
define( 'SECURE_AUTH_SALT', 'P0fLwD9JpSHpGdi:]M^|`rCC=a4&f>;rhlXn7,h_@xsR|U|H!1Vc6@%]d^a?gxBC' );
define( 'LOGGED_IN_SALT',   '%B;WHt4m^}giFrZ&<Ge_*Kcmjb(6u3XU=XGeC6{Hbk;S#PHB3KsKB(%r8x[pvj*.' );
define( 'NONCE_SALT',       '9i9&sSfDU&Bq24l]zn=!WyC>x24~d/Ih0$WZ[19+(~~/tgwepz7EqsZ7/[Oi`)Lr' );

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
