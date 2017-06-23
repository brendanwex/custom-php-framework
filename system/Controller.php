<?php

/**
 * @User Brendan
 * @File Controller.php
 * @Date 29-Mar-17  2:15 PM
 * @Version 1.0
 * @Since 1.0
 *
 * Our main controller file
 */

namespace App;

defined('APP_DIR') OR exit('No direct script access allowed');



class Controller
{

     public function __construct() {

     	//Make our router class available
		$this->router = new Lib\Router();

		//DB connect, if enabled in config.php
		if(ENABLE_DB):
    	$this->db = new \Db(array('host' => DB_HOST, 'username' => DB_USER, 'password' => DB_PASS, 'db' => DB_NAME, 'port' => DB_PORT, 'prefix' => DB_PREFIX));
		endif;
		//PHPMailer if enabled in config.php
		if(ENABLE_SMTP):
		$this->mail = new \PHPMailer();
		$this->mail->isSMTP();
		$this->mail->Host = SMTP_HOST;
		$this->mail->SMTPAuth = SMTP_AUTH;
		$this->mail->Username = SMTP_USER;
		$this->mail->Password = SMTP_PASS;
		$this->mail->Port = SMTP_PORT;
		if(SMTP_SECURE == false) {
			$this->mail->SMTPAutoTLS = false;
		}else{
			$this->mail->SMTPSecure = SMTP_SECURE;
		}

		endif;

		//Logger, if enabled in config.php
		if(DEV_LOG):
			$this->logger = new Lib\Logger();
		endif;
		 //Uploader, if enabled in config.php

        if(ENABLE_UPLOADER) {
            $this->uploader = new Lib\Uploader();
        }

	}


	/**
	 * @param        $view
	 * @param string $data
	 *
	 * Calls the view from within a controller
	 */
	public function view($view, $data = "")
	{

		if (!empty($data)) {

			$data = (array)$data;

			extract($data);
		}

		include("app/views/" . $view . ".php");


	}


	/**
	 * @param $location
	 *
	 * OOP Wrapper for redirect
	 */
	public function redirect($location){

		header("location: ".BASE_PATH.$location);
		exit;

	}










}
$controller = new Controller();