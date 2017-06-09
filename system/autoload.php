<?php
defined('APP_DIR') OR exit('No direct script access allowed');

/*
 * Enable errors if DEV_MODE is true
 */
if(DEV_MODE) {
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
}


/*
 * Load our logging class
 */
include("lib/logger/Logger.php");


/*
 * Helpers
 */

include("helpers.php");

/*
 * Load our router class
 */
include("lib/router/Router.php");

/*
 * Load our DB library if enabled
 */
if (ENABLE_DB) {
	include("lib/database/MysqliDb.php");
}

/*
 * Load PHPMailer library if enabled
 */
if (ENABLE_SMTP) {
	include("lib/phpmailer/PHPMailerAutoload.php");
}


/*
 * Load Upload Lib
 */
if (ENABLE_UPLOADER) {
	include("lib/uploader/Uploader.php");
}


/*
 * Load Composer autoloader if enabled.
 */
if (ENABLE_COMPOSER) {
	include(VENDOR_PATH . "/autoload.php");
}

/*
 * Load Our Parent Model Class
 */
include("Model.php");

/*
 * Load our parent Controller
 */
include("Controller.php");


/*
 * Load custom models
 */
foreach (glob(APP_DIR . "/models/*.php") as $filename) {
    include $filename;
}

/*
 * Load custom controllers
 */
foreach (glob(APP_DIR . "/controllers/*.php") as $filename) {
	include $filename;
}



