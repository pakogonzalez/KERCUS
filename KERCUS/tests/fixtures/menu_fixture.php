<?php
/* Menu Fixture generated on: 2010-08-09 12:08:32 : 1281350852 */
class MenuFixture extends CakeTestFixture {
	var $name = 'Menu';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'titulo' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'menus_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'estado' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'titulo' => 'Lorem ipsum dolor sit amet',
			'menus_id' => 1,
			'estado' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>