<?php
/* Alert Test cases generated on: 2010-11-22 13:11:07 : 1290430567*/
App::import('Model', 'Alert');

class AlertTestCase extends CakeTestCase {
	var $fixtures = array('app.alert', 'app.user', 'app.group');

	function startTest() {
		$this->Alert =& ClassRegistry::init('Alert');
	}

	function endTest() {
		unset($this->Alert);
		ClassRegistry::flush();
	}

}
?>