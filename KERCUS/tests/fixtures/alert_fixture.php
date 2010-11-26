<?php
/* Alert Fixture generated on: 2010-11-22 13:11:07 : 1290430567 */
class AlertFixture extends CakeTestFixture {
	var $name = 'Alert';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'asunto' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'texto' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'estado' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'created' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'asunto' => 'Lorem ipsum dolor sit amet',
			'texto' => 'Lorem ipsum dolor sit amet',
			'estado' => 1,
			'created' => '2010-11-22',
			'modified' => '2010-11-22'
		),
	);
}
?>