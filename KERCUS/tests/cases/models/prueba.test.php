<?php
/* Prueba Test cases generated on: 2010-09-24 13:09:23 : 1285329323*/
App::import('Model', 'Prueba');

class PruebaTestCase extends CakeTestCase {
	var $fixtures = array('app.prueba');

	function startTest() {
		$this->Prueba =& ClassRegistry::init('Prueba');
	}

	function endTest() {
		unset($this->Prueba);
		ClassRegistry::flush();
	}

}
?>