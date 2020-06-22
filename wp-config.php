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
define( 'DB_NAME', 'tv' );

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
define( 'AUTH_KEY',         'IuM=SoB|H[~~*T`&U&[gGcy|,Gf06AhS0yVH^<*@B+9:Iu1AVh{aS=(a$oq+#Jus' );
define( 'SECURE_AUTH_KEY',  '^PV$;(yp=IrrM`}=ap+nKZ`/|k{kgl+e;JLJjB=zrO5jV^yOX=KrlW5fs9NS2$;~' );
define( 'LOGGED_IN_KEY',    '1J>MD4o89CD`7D&m=`&<tOM+/oC=i;W3/2[aQj0N|Y?mj$$C(~vKKR(eXt,tRTZa' );
define( 'NONCE_KEY',        '2o=}7hs:_nB<w[dc4.kq,S1NcLCxX)tE%9-%Px4OhC7S|BhJm^33!/k =kS=1,+;' );
define( 'AUTH_SALT',        'nJDOI7m$74y4G;swyFfoF.m3+((IuJ~Y$G)F[T`nRAf%-aEH:=#Z=mogEV76#?QP' );
define( 'SECURE_AUTH_SALT', 'rr;+f<O~v/iGv8Z}Gz t}Asj#<q*F-rZ-;XE+!Cj`ry#Kjhi44Vp+$3[^MmkN_.G' );
define( 'LOGGED_IN_SALT',   'S}Rjv[R?cQ.fZFI}kqGtyiJ(m$7_3IdI]@}]cNDa,d;77,nXP={r?kPJ`]gwD^w/' );
define( 'NONCE_SALT',       'O+d!|&i@YXn ^(oFPRp>RxNtD)!{<ErP(pnK-tpwy96-00 @V~9B9[?)Ope[f;4s' );

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
