<?php
class UsersController extends AppController {

	var $name = 'Users';
	//var $view = 'Theme';
	//var $theme = 'prueba';

	function index() {
		$this->layout= 'ajax';
		$this->User->recursive = 0;
		$this->set('groups',$this->Lista->get($this->User->Group->find('list')));
		$this->set(compact('groups'));
		$this->set('estados',"Activo:Activo;Inactivo:Inactivo");
		
	}
	
	function beforeFilter() {
	    parent::beforeFilter(); 
	    $this->Auth->allowedActions = array('logout');
	}

	function indextable() {
		$this->layout= 'ajax';
		$this->User->recursive = 1;
		$limit = $this->params['url']['rows'];
		$page  = $this->params['url']['page'];
		$sidx = $this->params['url']['sidx'];
		$sord = $this->params['url']['sord'];
		
		if(!$sidx) $sidx =1;
		$search = $this->params['url']['_search'];
		if($search == 'true'){
			$searchstr = $this->params['url']['filters'];
			$cond = $this->Busqueda->busca($searchstr);
		}
		if($search == 'true') 
			$row = $this->User->find('count',array('conditions'=>$cond));
		else 
			$row = $this->User->find('count');
		$count = $row;
		if($count > 0) $total_pages = ceil($count/$limit);
		else $total_pages = 0;
		if ($page > $total_pages) $page=$total_pages;
		$start = $limit*$page - $limit;
		if($start < 0) $start = 0;
		$limit_range = $start.",".$limit;
		$sort_range = $sidx." ".$sord;
		if($search == 'true')
			$result = $this->User->find('all',array('fields'=>'*','conditions'=>$cond,'order'=>$sort_range,'limit'=>$limit_range,'page'=>1));
		else
			$result = $this->User->find('all',array('fields'=>'*','limit'=>$limit_range,'page'=>1,'order'=>$sort_range));
		$this->set('result',$result);
		$this->set('page',$page);
		$this->set('total_pages',$total_pages);
		$this->set('count',$count);
	}
		
	function add() {
		$this->autoRender = false;
		if (!empty($this->params["form"])) {
			$this->params['form']['password'] = Security::hash($this->params['form']['password'], null, true);
			$this->User->create();
			$this->User->save($this->params["form"]);
		}
	}

	function edit($id = null) {
		$this->autoRender = false;
		if($this->params['form']['password'])
			$this->params['form']['password'] = Security::hash($this->params['form']['password'], null, true);	
		$this->User->save($this->params["form"]);
	}

	function del($id = null) {
		$this->autoRender = false;
		$id=$this->params["form"]["id"];
		// Para eliminacion multiple
		$exploded_id = explode(',', $id);
		for($i=0;$i<sizeof($exploded_id);$i++) $this->User->delete($exploded_id[$i]);
	}

	function login() {
		if($this->Auth->user()){
			$id = $this->Auth->user('id');
			$this->User->lastLogin($id);
			if(!isset($this->params['url']['requestedByUser'])){
				$this->redirect($this->Auth->loginRedirect);
			}
		}
		
	}
	
	function logout() {
		$this->redirect($this->Auth->logout());
	}
	
}
?>