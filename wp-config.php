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
define('DB_NAME', 'artconcept_newm');

/** Имя пользователя MySQL */
define('DB_USER', 'artconcept_newm');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'DonT4312');

/** Имя сервера MySQL */
define('DB_HOST', 'mysqlserver');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '~#[UV{B$Q#9cAi!>ksyR&<n9l!^aaarT0=^,TT~tFz-()1qz .a-CTC !Sod|?jk');
define('SECURE_AUTH_KEY',  '2 #]@2#k,Y#2#3})gN_jE[PW&=B)^^E|)r_!6AQ^iY^YpFfZVYT%@w(`Gj6:>n92');
define('LOGGED_IN_KEY',    'xPkaQ-2=RKs#rU@XP$XC@,>i//hac,:#z?ycjG;Gl4kyIdhCopW7X=#mQFiQ=H8x');
define('NONCE_KEY',        'H}CCAv)dBU^3$<[B*]hwptFkG ?Rh6~ZO<UObar#mVOkdachbhfh @H0Mwqh H+!');
define('AUTH_SALT',        '*#ps@[,@[6skw)F8igCSx52Rxp1}CGHH@W/qX^( MuX>3*5.W7Su>^o!f0 NGLXR');
define('SECURE_AUTH_SALT', '>x#o&;_#d`mhaJCLTR.b_<vUMzlovZ_HmxZf !Ipe1wq|WI*pyCAcafXa,rhN#cj');
define('LOGGED_IN_SALT',   'pUY~mlq8#gwwxaBg!Jg,ey/fpfs:B7v`PM+u|&xwu>sk  *Fs)l?%QJ@dQYf6[iU');
define('NONCE_SALT',       'GK#~|kW)/!0!Rl{b1gzjzkxGWYOH6)O&/w-ynrV`kqx4?9q-Q%Kp/n^7.vlF17S:');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
