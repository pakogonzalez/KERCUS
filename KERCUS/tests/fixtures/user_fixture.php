<?php
/* User Fixture generated on: 2010-07-28 11:07:42 : 1280310402 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'last_login' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'last_login' => '2010-07-28 11:46:42',
			'group_id' => 1,
			'created' => '2010-07-28',
			'modified' => '2010-07-28'
		),
	);
}
?>