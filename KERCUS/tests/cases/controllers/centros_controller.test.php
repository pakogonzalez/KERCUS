<?php
/* Centros Test cases generated on: 2010-10-25 11:10:58 : 1287999118*/
App::import('Controller', 'Centros');

class TestCentrosController extends CentrosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CentrosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.centro', 'app.menus');

	function startTest() {
		$this->Centros =& new TestCentrosController();
		$this->Centros->constructClasses();
	}

	function endTest() {
		unset($this->Centros);
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