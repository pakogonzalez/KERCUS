<?php
/* Mensaje Fixture generated on: 2010-11-22 09:11:54 : 1290416154 */
class MensajeFixture extends CakeTestFixture {
	var $name = 'Mensaje';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'destino' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'asunto' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'texto' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'estado' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'destino' => 1,
			'asunto' => 'Lorem ipsum dolor sit amet',
			'texto' => 'Lorem ipsum dolor sit amet',
			'estado' => 1,
			'created' => '2010-11-22 09:55:54'
		),
	);
}
?>