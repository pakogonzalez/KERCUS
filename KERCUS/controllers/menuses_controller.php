<?php
class MenusesController extends AppController {

	var $name = 'Menuses';
	
	function index() {
		$this->layout= 'ajax';
		$this->Menus->recursive = 0;
		$this->set('menuses',$this->Lista->get($this->Menus->MenusParent->find('list')));
		$this->set(compact('menuses'));
		$this->set('estados',"Activo:Activo;Inactivo:Inactivo");
	}

	function indextable() {
		$this->layout= 'ajax';
		$this->Menus->recursive = 1;
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
			$row = $this->Menus->find('count',array('conditions'=>$cond));
		else 
			$row = $this->Menus->find('count');
		$count = $row;
		if($count > 0) $total_pages = ceil($count/$limit);
		else $total_pages = 0;
		if ($page > $total_pages) $page=$total_pages;
		$start = $limit*$page - $limit;
		if($start < 0) $start = 0;
		$limit_range = $start.",".$limit;
		$sort_range = $sidx." ".$sord;
		if($search == 'true')
			$result = $this->Menus->find('all',array('fields'=>'*','conditions'=>$cond,'order'=>$sort_range,'limit'=>$limit_range,'page'=>1));
		else
			$result = $this->Menus->find('all',array('fields'=>'*','limit'=>$limit_range,'page'=>1,'order'=>$sort_range));
		$this->set('result',$result);
		$this->set('page',$page);
		$this->set('total_pages',$total_pages);
		$this->set('count',$count);
	}
		
	function add() {
		$this->autoRender = false;
		if (!empty($this->params["form"])) {
			$this->Menus->create();
			$this->Menus->save($this->params["form"]);
		}
	}

	function edit($id = null) {
		$this->autoRender = false;		
		$this->Menus->save($this->params["form"]);
	}

	function del($id = null) {
		$this->autoRender = false;
		$id=$this->params["form"]["id"];
		// Para eliminacion multiple
		$exploded_id = explode(',', $id);
		for($i=0;$i<sizeof($exploded_id);$i++) $this->Menus->delete($exploded_id[$i]);
	}

}
?>