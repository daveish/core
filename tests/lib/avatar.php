<?php
/**
 * Copyright (c) 2013 Christopher Schäpers <christopher@schaepers.it>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

class Test_Avatar extends PHPUnit_Framework_TestCase {

	public function testModes() {
		$this->assertEquals('local', \OC_Avatar::getMode());

		\OC_Config::setValue('avatar', 'local');
		$this->assertEquals('local', \OC_Avatar::getMode());
		
		\OC_Config::setValue('avatar', 'gravatar');
		$this->assertEquals('gravatar', \OC_Avatar::getMode());

		\OC_Config::setValue('avatar', 'none');
		$this->assertEquals('none', \OC_Avatar::getMode());
	}

	public function testDisabledAvatar() {
		\OC_Config::setValue('avatar', 'none');
		$this->assertFalse(\OC_Avatar::get(\OC_User::getUser()));
		$this->assertFalse(\OC_Avatar::get(\OC_User::getUser(), 32));
	}

	public function testLocalAvatar() {
		\OC_Config::setValue('avatar', 'local');
		$this->assertEquals(\OC_Avatar::get(\OC_User::getUser()), \OC_Avatar::wrapIntoImg(\OC_Avatar::getDefaultAvatar(), 'png'));

		$expected = new OC_Image(\OC::$SERVERROOT.'/tests/data/testavatar.png');
		\OC_Avatar::setLocalAvatar(\OC_User::getUser(), $expected->data());
		$expected->resize(32);
		$this->assertEquals($expected, \OC_Avatar::get(\OC_User::getUser()));

		\OC_Avatar::setLocalAvatar(\OC_User::getUser(), false);
		$this->assertEquals(\OC_Avatar::get(\OC_User::getUser()), \OC_Avatar::wrapIntoImg(\OC_Avatar::getDefaultAvatar(), 'png'));
	}

	public function testGravatar() {
		\OC_Preferences::setValue(\OC_User::getUser(), 'settings', 'email', 'someone@example.com');
		\OC_Config::setValue('avatar', 'gravatar');
		$expected = "http://www.gravatar.com/avatar/".md5("someone@example.com")."?s=";
		$this->assertEquals($expected."64", \OC_Avatar::get(\OC_User::getUser()));
		$this->assertEquals($expected."32", \OC_Avatar::get(\OC_User::getUser(), 32));
	}

	public function testDefaultAvatar() {
		$img = new \OC_Image(OC::$SERVERROOT.'/core/img/defaultavatar.png');
		$img->resize(128);
		$this->assertEquals((string)$img, \OC_Avatar::getDefaultAvatar(128));
	}

	public function testWrapIntoImg() {
		$expected = "data:image/test;base64,DUMMY==123==";
		$this->assertEquals($expected, \OC_Avatar::wrapIntoImg("DUMMY==123==", "test"));
	}
}
