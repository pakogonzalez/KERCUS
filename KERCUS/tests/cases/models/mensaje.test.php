<?php
/* Mensaje Test cases generated on: 2010-11-22 09:11:54 : 1290416154*/
App::import('Model', 'Mensaje');

class MensajeTestCase extends CakeTestCase {
	var $fixtures = array('app.mensaje', 'app.user', 'app.group');

	function startTest() {
		$this->Mensaje =& ClassRegistry::init('Mensaje');
	}

	function endTest() {
		unset($this->Mensaje);
		ClassRegistry::flush();
	}

}
?>