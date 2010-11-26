<?php
/* Centro Test cases generated on: 2010-10-25 11:10:25 : 1287999085*/
App::import('Model', 'Centro');

class CentroTestCase extends CakeTestCase {
	var $fixtures = array('app.centro');

	function startTest() {
		$this->Centro =& ClassRegistry::init('Centro');
	}

	function endTest() {
		unset($this->Centro);
		ClassRegistry::flush();
	}

}
?>