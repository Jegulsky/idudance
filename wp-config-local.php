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
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '[r[(/2/gJVzrdTFTth00IR^3(&}sj9)D~vp&QWS>mqm)Ps:lN0[^J}~3/%v[|5Gd');
define('SECURE_AUTH_KEY',  '}^G-V;yEF?4Q:f ,knu>ouZ~tY67RFD3d{ypFkuCqi6Q+?O%^d?/J+I$R:m*F~i!');
define('LOGGED_IN_KEY',    'RFBGkVMCBi[Jt9w%_T|yH^]3Y0?N9Yu0RM+?$#U7/k lUhqH8L[zt)T&IE|mHFUJ');
define('NONCE_KEY',        'Qw{Ew=zth>(^^@,VBV72/kyJ0T|0MH9N8MZQTtonivahBaA0~zeEis5]o&Xyvyp|');
define('AUTH_SALT',        ':r4GgSQOxJa#|3=|k2:zr!reu.fM+<n=036QIBC77PokhY9JXhd,f83pl~/!Tbzl');
define('SECURE_AUTH_SALT', '/E?F~O`<(kO%^`?<BIyWUaDgy3DQ4|@-gQ^M*H9as#%7Vn:1jNjaU:{#RE0F(+dw');
define('LOGGED_IN_SALT',   '%tU!C+KL@+!P5HNnED}OA]?Xwy~gAt]X&WII]8%o}@P$7je=@/><oJd%=*GjIgD4');
define('NONCE_SALT',       'c.=[$xqQ7c/ ;j6Lmn Vm|b2MXyu@[NFz?Z{^@.8#K|SyW7+2^7@A{}Q?3bZm1xH');

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
