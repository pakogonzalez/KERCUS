<?php
/* Menus Test cases generated on: 2010-08-09 12:08:52 : 1281350932*/
App::import('Model', 'Menus');

class MenusTestCase extends CakeTestCase {
	var $fixtures = array('app.menus');

	function startTest() {
		$this->Menus =& ClassRegistry::init('Menus');
	}

	function endTest() {
		unset($this->Menus);
		ClassRegistry::flush();
	}

}
?>