<?php
/* Mensajes Test cases generated on: 2010-11-22 10:11:07 : 1290416407*/
App::import('Controller', 'Mensajes');

class TestMensajesController extends MensajesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MensajesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.mensaje', 'app.user', 'app.group', 'app.menus');

	function startTest() {
		$this->Mensajes =& new TestMensajesController();
		$this->Mensajes->constructClasses();
	}

	function endTest() {
		unset($this->Mensajes);
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