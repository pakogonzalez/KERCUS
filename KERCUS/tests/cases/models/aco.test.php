<?php
/* Aco Test cases generated on: 2010-11-17 13:11:24 : 1289995404*/
App::import('Model', 'Aco');

class AcoTestCase extends CakeTestCase {
	var $fixtures = array('app.aco', 'app.aro', 'app.aros_aco');

	function startTest() {
		$this->Aco =& ClassRegistry::init('Aco');
	}

	function endTest() {
		unset($this->Aco);
		ClassRegistry::flush();
	}

}
?>