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
define( 'DB_NAME', 'wordpressagt' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'O1z-:N>rYKpZ=R7tqyLm#dbnb~T<#<C13wDQap;j]gsISaP*niJ ^#0(DAqvLb~a' );
define( 'SECURE_AUTH_KEY',  's#207$}_?aOi=V;;p8rnE$(22,Df##0|Yw$qf?1guGR)44syyoS1%JSP%rIN0ETT' );
define( 'LOGGED_IN_KEY',    '?i7cW!|Q<{Rix,NBUCXQ53g_|Dp8|So}Xk|/uM0hNrX:su:aHu_79rb[4:M*sVJ>' );
define( 'NONCE_KEY',        '`eC:6 k7Aoj0]oBa3Q2b7Nlh%9/=a9MQ3WT1*;y};rp(8z2X Fl@+}[l!<@-lG]v' );
define( 'AUTH_SALT',        '&yA8~8-$jHK![PAq Sr^^&;,JcWg]Z9#J<|W%d.x-)hU@3HaK?<V^Vb(W7&Y6]T+' );
define( 'SECURE_AUTH_SALT', 'CBuN(ca8Z1^03,K1!WA;zNh:.@+3z.`#[$6R<-:#~_EW&KOO XjFoCVxfT!9(LF,' );
define( 'LOGGED_IN_SALT',   '@L2nHS{)/Y)ixT.1+=B|JdiN;HiGm8-wJH=! hg[q -3Ho]WdKSjpt?6%31)@MeR' );
define( 'NONCE_SALT',       '^Og|u&*y [.3z~Jv&S7v N^,oGQp7`AX4?R`7p*y(^)L-ajWEQ$3L 4z|RhR}7Pr' );

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
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
