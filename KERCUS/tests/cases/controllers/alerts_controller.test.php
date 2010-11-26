<?php
/* Alerts Test cases generated on: 2010-11-22 13:11:20 : 1290430580*/
App::import('Controller', 'Alerts');

class TestAlertsController extends AlertsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AlertsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.alert', 'app.user', 'app.group', 'app.menus');

	function startTest() {
		$this->Alerts =& new TestAlertsController();
		$this->Alerts->constructClasses();
	}

	function endTest() {
		unset($this->Alerts);
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