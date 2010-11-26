<?php
/* ArosAco Test cases generated on: 2010-11-17 14:11:18 : 1290001158*/
App::import('Model', 'ArosAco');

class ArosAcoTestCase extends CakeTestCase {
	var $fixtures = array('app.aros_aco', 'app.aro', 'app.aco');

	function startTest() {
		$this->ArosAco =& ClassRegistry::init('ArosAco');
	}

	function endTest() {
		unset($this->ArosAco);
		ClassRegistry::flush();
	}

}
?>