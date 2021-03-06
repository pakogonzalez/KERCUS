<?php
class AlertsController extends AppController {

	var $name = 'Alerts';

	function index() {
		$this->layout= 'ajax';
		$this->Alert->recursive = 0;
		$this->set('users',$this->Lista->get($this->Alert->User->find('list')));
		$this->set(compact('users'));
	}

	function indextable() {
		$this->layout= 'ajax';
		$this->Alert->recursive = 1;
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
		if($this->Session->read('Auth.Group.id')==1)
			if($search == 'true') 
				$row = $this->Alert->find('count',array('conditions'=>$cond));
			else 
				$row = $this->Alert->find('count');
		else
			if($search == 'true'){
				$cond['AND']['Alert.user_id =']=$this->Session->read('Auth.User.id');
				$row = $this->Alert->find('count',array('conditions'=>$cond));
			}else 
				$row = $this->Alert->find('count',array('conditions'=>array('Alert.user_id'=>$this->Session->read('Auth.User.id'))));
		$count = $row;
		if($count > 0) $total_pages = ceil($count/$limit);
		else $total_pages = 0;
		if ($page > $total_pages) $page=$total_pages;
		$start = $limit*$page - $limit;
		if($start < 0) $start = 0;
		$limit_range = $start.",".$limit;
		$sort_range = $sidx." ".$sord;
		if($this->Session->read('Auth.Group.id')==1)
			if($search == 'true')
				$result = $this->Alert->find('all',array('fields'=>'*','conditions'=>$cond,'order'=>$sort_range,'limit'=>$limit_range,'page'=>1));
			else
				$result = $this->Alert->find('all',array('fields'=>'*','limit'=>$limit_range,'page'=>1,'order'=>$sort_range));
		else
			if($search == 'true')
				$result = $this->Alert->find('all',array('fields'=>'*','conditions'=>$cond,'order'=>$sort_range,'limit'=>$limit_range,'page'=>1));
			else
				$result = $this->Alert->find('all',array('fields'=>'*',array('conditions'=>array('Alert.user_id'=>$this->Session->read('Auth.User.id'))),'limit'=>$limit_range,'page'=>1,'order'=>$sort_range));
		asdie(print_r($result));
		$this->set('result',$result);
		$this->set('page',$page);
		$this->set('total_pages',$total_pages);
		$this->set('count',$count);
	}
		
	function add() {
		
		$this->autoRender = false;
		if (!empty($this->params["form"])) {
			$this->Alert->create();
			$this->Alert->save($this->params["form"]);
		}
	}

	function edit($id = null) {
		$this->autoRender = false;		
		$this->Alert->save($this->params["form"]);
	}

	function del($id = null) {
		$this->autoRender = false;
		$id=$this->params["form"]["id"];
		// Para eliminacion multiple
		$exploded_id = explode(',', $id);
		for($i=0;$i<sizeof($exploded_id);$i++) $this->Alert->delete($exploded_id[$i]);
	}

}
?>