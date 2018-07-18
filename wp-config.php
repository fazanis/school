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
define('DB_NAME', 'kairbaeva');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'g[wHKs7tzQ)l`st]!.k~TUREN,P:d/0H}z-d$Ce_X-,kny*35&D5ab ?&rZ?2l1H');
define('SECURE_AUTH_KEY',  'voM}VC(~z5)%9y9r4_%1SpEy #!J/pGF/-I$s*:.jmM=`y#Dl x}Ib=?(&h]{]Jl');
define('LOGGED_IN_KEY',    'pOPx6D5/]Zi5ef{vx<le.dp1pwE!<Pn;$mQD<#AozV@b)&z^I%=0lG+#]+py$*3@');
define('NONCE_KEY',        '[:R:jg#N*qtZv@lb0|l)t6/UHsNn?n*ZgV|Ii36H|ioPJBlF!KX|;IEW3 sguU|e');
define('AUTH_SALT',        'YZ/;Ir9Xr |!_!A#n9PbpL1nQrRvyPd?r5^EjCl:| U=Ypf*CQuji@>T}2+c v-]');
define('SECURE_AUTH_SALT', 'mF+5Ww:_NfHSX0F{ifFu_B!T$waeX~Taip[`(ZB1K~vv45=I1K:0 V;1kNUr|Li*');
define('LOGGED_IN_SALT',   's;ysag%$nAC(jh2oyB.|Fo/?ep-}M8,4/^-WGc/hA&QP1p`CWl~OZirOOsDvr{_K');
define('NONCE_SALT',       'y&giI-#xWsGr.sC635t8CH*!x{`10 sHCYTXS=8I?mj?CQq|w{LU~Mc8{:Lf`+$G');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'kr_';

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
