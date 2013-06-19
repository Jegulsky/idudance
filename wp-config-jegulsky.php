<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'idu');

/** Имя пользователя MySQL */
define('DB_USER', 'u_idu');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'uGJmd6TO');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iCb|<Q*+}QQ&QG5@O9u%4_KcHMrl+|+Kw+-Xs:<|)1.~MT65TAuTA A% +yv{{vW');
define('SECURE_AUTH_KEY',  'eLP$.Su{E9]BiT%|9yx#Eav|hQsqbg5Ng|8v/]kzl;fR$Mxw%bw;|J|uHk}UGV<h');
define('LOGGED_IN_KEY',    '1[j.|kQ,ekx nxe~+9h3Ru)CLC>env#!@PE4=|- Y|^EjbZ9v+$Og6iPI5l;Kd<H');
define('NONCE_KEY',        '^E5eu}[)]cZWjVl.:3.&heS+ZIl&P^pB.;D>18(Bbq%}M_<Tq]!+Q4Zk* m]jXK;');
define('AUTH_SALT',        '`FKJq<+<&a6NSXNMS!SyDCMz%ikJ]o:cOSHm7ExNEhAU1?%;gQ8Ja@dNEm8<@&-R');
define('SECURE_AUTH_SALT', 'zX+|)332q2?5`lWYt0k8UQ-7=8bwZc-L}/Cz/<BETT>`Zw)Xc]}RPbS)6[L2=DBZ');
define('LOGGED_IN_SALT',   's7_Ti3}N#GC#(|VJxzNa$q!w/N{[T8c.Z ) }HY/^|%,lJCs{i`T-;%}WGi}mqAR');
define('NONCE_SALT',       '{6 leHke,p>8Q5@0J_K?gCa+7?k?q=vCmi%+-)#ExIbtVXaZk&:_{?`r:.|A7APC');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
