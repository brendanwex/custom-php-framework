<?php

class Logger
{


	public $log_dir = DEV_LOG_DIR;


	public function log($data)
	{


		$todays_log_file = "log-" . date(DATE_FORMAT) . ".log";

		try {
			if (!is_writable(DEV_LOG_DIR)) {

				throw new Exception('Your log directory defined in config.php is not writable.');

			} else {


				$data_string = date(DATE_FORMAT." H:i:s")."\t".$_SERVER['REMOTE_ADDR']."\t".$_SERVER['REQUEST_URI']."\t".$data;

				$fd = fopen(DEV_LOG_DIR . "/" . $todays_log_file, "a");

				fwrite($fd, $data_string . PHP_EOL);

				fclose($fd);


			}


		} catch (Exception $e) {


			if (DEV_MODE) {
				echo $e->debug_error();
			}


		}

	}

}