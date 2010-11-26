<?php
/* Pruebas Test cases generated on: 2010-09-24 13:09:45 : 1285329345*/
App::import('Controller', 'Pruebas');

class TestPruebasController extends PruebasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PruebasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.prueba', 'app.menus');

	function startTest() {
		$this->Pruebas =& new TestPruebasController();
		$this->Pruebas->constructClasses();
	}

	function endTest() {
		unset($this->Pruebas);
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