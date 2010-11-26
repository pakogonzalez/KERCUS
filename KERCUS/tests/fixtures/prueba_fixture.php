<?php
/* Prueba Fixture generated on: 2010-09-24 13:09:23 : 1285329323 */
class PruebaFixture extends CakeTestFixture {
	var $name = 'Prueba';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'campo1' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'campo2' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'campo1' => 'Lorem ipsum dolor sit amet',
			'campo2' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>