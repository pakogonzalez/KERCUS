<?php
class Menus extends AppModel {
	var $name = 'Menus';
	var $displayField = 'titulo';

	var $belongsTo = array(
		'MenusParent' => array(
			'className' => 'Menus',
			'foreignKey' => 'menus_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	
	
}
?>