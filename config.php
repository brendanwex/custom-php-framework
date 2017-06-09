<?php
/*
 * Site Paths & Directories
 */
define('WORKING_DIR', basename(__DIR__));

/*
 * Define bas path (with final slash)
 * http://www.example.com/test/
 */
define('BASE_PATH', "");


define('APP_DIR', 'app');
define('INCLUDES_DIR', 'system');
define('ASSETS_DIR', 'assets');


/*
 * Time Zone & date Format
 */
ini_set("date.timezone", "Europe/Dublin");
define('DATE_FORMAT', "d-m-Y");

/*
 * Error View
 */
define('ERROR_VIEW', $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.APP_DIR.DIRECTORY_SEPARATOR."views/404.php");

/*
 * Routes (Very experimental)
 */

define('DEFAULT_CONTROLLER', 'Home');
define('DEFAULT_METHOD', 'index');

/*
 * Debug & Logging
 */
define('DEV_MODE', true);
define('DEV_LOG', true);
define('DEV_LOG_DIR', $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.INCLUDES_DIR.DIRECTORY_SEPARATOR."logs");

/*
 * Database configuration (MySQL) - credit / docs : https://github.com/joshcam/PHP-MySQLi-Database-Class
 */

define('ENABLE_DB', false);
define('DB_HOST', '');
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_PORT', 3306);
define('DB_PREFIX', '');


/*
 * Email Configuration (PHP Mailer Wrapper)
 */
define('ENABLE_SMTP', false);
define('SMTP_USER', '');
define('SMTP_PASS', '');
define('SMTP_AUTH', true);
define('SMTP_HOST', '');
define('SMTP_SECURE', false);
define('SMTP_PORT', '25');


/*
 * Uploader Class - Very experimental
 */
define('ENABLE_UPLOADER', false);

/*
 * Composer
 */
define('ENABLE_COMPOSER', false);
define('VENDOR_PATH', $_SERVER['DOCUMENT_ROOT'] . '/vendor');