<?php

function js_asset($asset, $cdn=false, $mime="text/javascript"){

	if(!$cdn){
		echo "<script type='$mime' src='".BASE_PATH.ASSETS_DIR.'/'.$asset."'></script>";
	}else{
		echo "<script type='$mime' src='$asset'></script>";
	}


}
function css_asset($asset, $cdn=false,$media="all"){

	if(!$cdn){
		echo "<link type='text/css' rel='stylesheet' href='".BASE_PATH.ASSETS_DIR.'/'.$asset."' media='$media' />";

	}else{
		echo "<link type='text/css' rel='stylesheet' href='$asset' media='$media' />";
	}


}

function error_404(){


	header("HTTP/1.0 404 Not Found");

	include(ERROR_VIEW);

}