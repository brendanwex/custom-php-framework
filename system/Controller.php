<?php

/**
 * @User Brendan
 * @Package custom-php-framework
 * @File controller.class.php
 * @Date 29-Mar-17  2:15 PM
 * @Version
 */


defined('APP_DIR') OR exit('No direct script access allowed');


class Controller
{

    function __construct() {

		$this->router = new Router();

		if(ENABLE_DB):
    	$this->db = new Db(array('host' => DB_HOST, 'username' => DB_USER, 'password' => DB_PASS, 'db' => DB_NAME, 'port' => DB_PORT, 'prefix' => DB_PREFIX));
		endif;
		if(ENABLE_SMTP):
		$this->mail = new PHPMailer();
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

		if(DEV_LOG):
			$this->logger = new Logger();
		endif;

        if(ENABLE_UPLOADER) {
            $this->uploader = new Uploader();
        }

	}




	function view($view, $data = "")
	{

		if (!empty($data)) {

			$data = (array)$data;

			extract($data);
		}

		include("app/views/" . $view . ".php");


	}



	function redirect($location){

		header("location: ".BASE_PATH.$location);
		exit;

	}










}
$controller = new Controller();