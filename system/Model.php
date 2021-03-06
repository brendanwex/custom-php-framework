<?php
/**
 * @User Brendan
 * @Package custom-php-framework
 * @File controller.class.php
 * @Date 29-Mar-17  2:15 PM
 * @Version
 */

namespace App;

defined('APP_DIR') OR exit('No direct script access allowed');

class Model
{


	function __construct() {
        $this->router = new Lib\Logger();

        if(ENABLE_DB):
            $this->db = new \Db(array('host' => DB_HOST, 'username' => DB_USER, 'password' => DB_PASS, 'db' => DB_NAME, 'port' => DB_PORT, 'prefix' => DB_PREFIX));
        endif;
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

        if(DEV_LOG):
            $this->logger = new Lib\Logger();
        endif;

        if(ENABLE_UPLOADER) {
            $this->uploader = new Lib\Uploader();
        }


	}



}