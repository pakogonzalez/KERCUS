<?php
/* Logs Test cases generated on: 2010-11-25 11:11:06 : 1290680946*/
App::import('Controller', 'Logs');

class TestLogsController extends LogsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LogsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.log', 'app.user', 'app.group', 'app.menus');

	function startTest() {
		$this->Logs =& new TestLogsController();
		$this->Logs->constructClasses();
	}

	function endTest() {
		unset($this->Logs);
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