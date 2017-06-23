<?php

namespace App\Lib;


class Uploader
{


	public $upload_dir = "";
	public $encrypt_filename = false;
	public $allowed_mime = array();
	public $remove_spaces = false;
	public $overide_existing = false;
	public $max_upload_size = 1048576; //MB


	function upload()
	{


		$files = $this->rearrange_file_array($_FILES['userfile']);

		$result = array();

		foreach ($files as $file) {


			$errors = array();

			$ext = pathinfo($file['name'], PATHINFO_EXTENSION);


			$file_name = $file['name'];

			if ($this->remove_spaces) {

				$file_name = str_replace(' ', '-', $file['name']);
			}

			if ($this->encrypt_filename) {

				$file_name = md5(time() . $file['name']) . "." . $ext;

			}
			if (file_exists($this->upload_dir . $file_name) && !$this->overide_existing) {

				$file_name = $file_name . "-1." . $ext;
			}

			if (!in_array($ext, $this->allowed_mime)) {

				$errors[] = $file_name." - File type is not allowed";

			}
			if ($this->max_upload_size < $file['size']) {
				$errors[] = $file_name." - File size exceeded " . $this->max_upload_size . " bytes";

			}


			if (move_uploaded_file($file['tmp_name'], $this->upload_dir . $file_name) && empty($errors)) {

				$response = array(
					'result' => 'success',
					'file_name' => $file_name,
					'original_name' => $file['name'],
					'file_size' => $file['size'],
					'file_type' => $file['type'],
					'extension' => $ext,
					'upload_location' => $this->upload_dir . $file_name,
					'message' => $file_name . " - Uploaded successfully"

				);

			} else {

				$response = array(
					'result' => 'error',
					'file_name' => $file_name,
					'original_name' => $file['name'],
					'file_size' => $file['size'],
					'file_type' => $file['type'],
					'extension' => $ext,
					'message' => $errors,

				);

			}

			array_push($result, $response);
		}


		return $result;


	}


	private function rearrange_file_array(&$file_post)
	{

		$file_ary = array();
		$file_count = count($file_post['name']);
		$file_keys = array_keys($file_post);

		for ($i = 0; $i < $file_count; $i++) {
			foreach ($file_keys as $key) {
				$file_ary[$i][$key] = $file_post[$key][$i];
			}
		}

		return $file_ary;
	}

}