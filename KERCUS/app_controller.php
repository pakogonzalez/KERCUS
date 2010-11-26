<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
	
	//var $view = 'Theme';
	//var $theme = 'prueba';
	
	var $components = array('Acl','Auth','Session','Busqueda','Lista'); 
	var $helpers = array('Html', 'Js' => array('Jquery'),'Session','Form');
	var $uses=array('Menus');
	
	function beforeFilter() {
		if($this->params['action']=='indexedit' && $this->params['form']['oper']) $this->params['action']=$this->params['form']['oper'];
		$this->Auth->actionPath = 'controllers/';
		$this->Auth->authorize = 'actions';
		$this->Auth->userScope = array('User.estado' => 'Activo');
		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
		$this->Auth->autoRedirect = false;
		$this->Auth->loginRedirect = array('controller' => 'pages','action' => 'display');
		$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login'); 
		$this->Auth->loginError = "Datos de acceso incorrectos, inténtelo de nuevo.";
    	$this->Auth->authError = "Acceso restringido.";
    	
    	
    	$menuItems=$this->Menus->find('all',array('conditions'=>array('Menus.estado'=>'Activo'),'order'=>'Menus.orden asc'));
    	$user=$this->Auth->user();
   	
    	$menu = array();
    	if($user['User']['username']){ 
		    foreach( $menuItems as $menuL1 ){
		    	if($user['User']['username'] && $menuL1['MenusParent']['id']==''){
		    		if($this->Acl->check(array('model'=>'Group','foreign_key'=>$user['User']['group_id']), array('model'=>'Menus','foreign_key'=>$menuL1['Menus']['id']))){
		    			$menu[] = $menuL1;
		    		}
		    		foreach( $menuItems as $menuL2 ){
		    			if($menuL2['MenusParent']['id']==$menuL1['Menus']['id']){
		    				if($this->Acl->check(array('model'=>'Group','foreign_key'=>$user['User']['group_id']), array('model'=>'Menus','foreign_key'=>$menuL2['Menus']['id']))){
								$menu[] = $menuL2;
		    				}
		    				foreach( $menuItems as $menuL3 ){
		    					if($menuL3['MenusParent']['id']==$menuL2['Menus']['id']){
		    						if($this->Acl->check(array('model'=>'Group','foreign_key'=>$user['User']['group_id']), array('model'=>'Menus','foreign_key'=>$menuL3['Menus']['id']))){
		    							//if($this->Acl->check(array('model'=>'User','foreign_key'=>$user['User']['id']), array('model'=>'Menus','foreign_key'=>$menuL1['Menus']['id']))){
		    							//	$menu[] = $menuL1;
		    							//}
		    							//if($this->Acl->check(array('model'=>'User','foreign_key'=>$user['User']['id']), array('model'=>'Menus','foreign_key'=>$menuL2['Menus']['id']))){
										//	$menu[] = $menuL2;
		    							//}
		    							$menu[] = $menuL3; 
		    						}
		    					}
		    				}
			    		}			
		    		}
		    	}
		    }
    	}
	    
		$this->set('menus', $menu);
		$this->Auth->allowedActions = array('display');
	}
	 
}
