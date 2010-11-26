<?php
/* Menuses Test cases generated on: 2010-08-09 12:08:13 : 1281350953*/
App::import('Controller', 'Menuses');

class TestMenusesController extends MenusesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MenusesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.menus');

	function startTest() {
		$this->Menuses =& new TestMenusesController();
		$this->Menuses->constructClasses();
	}

	function endTest() {
		unset($this->Menuses);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testIndextable() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDel() {

	}

}
?>