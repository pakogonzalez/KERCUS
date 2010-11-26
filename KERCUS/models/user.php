<?php
class User extends AppModel {
	var $name = 'User';
	var $displayField = 'nombre';
	
	var $belongsTo = array(
		'Group' => array('className' => 'Group','foreignKey' => 'group_id','conditions' => '','fields' => '','order' => '')
	);
	
	var $actsAs = array('Acl' => array('type' => 'requester'));
 
	function parentNode() {
	    if (!$this->id && empty($this->data)) {
	        return null;
	    }
	    $data = $this->data;
	    if (empty($this->data)) {
	        $data = $this->read();
	    }
	    if (empty($data['User']['group_id'])) {
	        return null;
	    } else {
	        return array('Group' => array('id' => $data['User']['group_id']));
	    }
	}
	
	/**    
	 * After save callback
	 *
	 * Update the aro for the user.
	 *
	 * @access public
	 * @return void
	 */
	function afterSave($created) {   
		if (!$created) {
            $parent = $this->parentNode();
            $parent = $this->node($parent);
            $node = $this->node();
            $aro = $node[0];
            $aro['Aro']['parent_id'] = $parent[0]['Aro']['id'];
            $this->Aro->save($aro);
        }
	}
	
	function bindNode($user) {
    	return array('Group' => array('id' => $user['User']['group_id']));
	}
	
	
	/**
	 * Method to save login time
	 * 
	 * @param $id
	 * @return unknown_type
	 */
	function lastLogin($id){
		$this->id = $id;
		$this->saveField('last_login', date('Y-m-d H:i:s'));
	}


}
?>