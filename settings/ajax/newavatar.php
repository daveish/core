<?php

OC_JSON::checkLoggedIn();
OC_JSON::callCheck();
$user = OC_User::getUser();

if(isset($_POST['path'])) {
	if ($_POST['path'] === "false") { // delete avatar
		\OC_Avatar::setLocalAvatar($user, false);
	} else { // select an image from own files
		try {
			$path = OC::$SERVERROOT.'/data/'.$user.'/files'.$_POST['path'];
			\OC_Avatar::setLocalAvatar($user, $path);
			OC_JSON::success();
		} catch (Exception $e) {
			OC_JSON::error();
		}
	}
} elseif (isset($_POST['image'])) { // upload a new image
	\OC_Avatar::setLocalAvatar($user, $_POST['image']);
	OC_JSON::success();
} else {
	OC_JSON::error();
}
