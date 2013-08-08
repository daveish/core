<?php

require_once 'lib/base.php';

function showDefault($size) {
	$image = new \OC_Image(OC::$SERVERROOT.'/core/img/defaultavatar.png');
        $image->resize($size);
        $image->show();
	exit();
}

$mode = \OC_Avatar::getMode();

if ($mode === "none") {
	exit();
}

if (isset($_GET['user'])) {
	//SECURITY TODO does this fully eliminate directory traversals?
	$user = stripslashes($_GET['user']);
} else {
	$user = false;
}

if (isset($_GET['size']) && ((int)$_GET['size'] > 0)) {
	$size = (int)$_GET['size'];
	if ($size > 2048) {
		$size = 2048;
	}
} else {
	$size = 64;
}

if ($user === false) {
	showDefault($size);
} else {
	if ($mode === "local") {
		$view = new \OC\Files\View('/'.$user);
		if ($view->file_exists('avatar.png')) {
			$ext = 'png';
		} elseif ($view->file_exists('avatar.jpg')) {
			$ext = 'jpg';
		} else {
			showDefault($size);
		}

		$image = new \OC_Image($view->file_get_contents('avatar.'.$ext));
		$image->resize($size);
		$image->show();
		exit();
	} elseif ($mode === "gravatar") {
		$email = OC_Preferences::getValue($user, 'settings', 'email');
		if ($email !== null) {
			$emailhash = md5(strtolower(trim($email)));
			$url = "http://www.gravatar.com/avatar/".$emailhash."?s=".$size;
			header("Location: ".$url);
		} else {
			showDefault($size);
		}
		exit();
	}
}
