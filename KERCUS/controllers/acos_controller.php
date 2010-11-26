<?php
class AcosController extends AppController {

	var $name = 'Acos';

	function index() {
		$this->layout= 'ajax';
		$this->Aco->recursive = 0;
		$this->set('parentAcos',$this->Lista->get($this->Aco->find('list',array('fields'=>array('alias','alias'),'conditions'=>array('OR'=>array('parent_id'=>1,'id'=>1))))));
		//$this->set('aros',$this->Lista->get($this->Aco->Aro->find('list')));
		//$this->set(compact('parentAcos', 'aros'));
		$this->set(compact('parentAcos'));

	}

	function indextable() {
		$this->layout= 'ajax';
		$this->Aco->recursive = 0;
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
			$row = $this->Aco->find('count',array('conditions'=>$cond));
		else 
			$row = $this->Aco->find('count');

		$count = $row;
		if($count > 0) $total_pages = ceil($count/$limit);
		else $total_pages = 0;
		if ($page > $total_pages) $page=$total_pages;
		$start = $limit*$page - $limit;
		if($start < 0) $start = 0;
		$limit_range = $start.",".$limit;
		$sort_range = $sidx." ".$sord;
		if($search == 'true')
			$result = $this->Aco->find('all',array('fields'=>'*','conditions'=>$cond,'order'=>$sort_range,'limit'=>$limit_range,'page'=>1));
		else
			$result = $this->Aco->find('all',array('fields'=>'*','limit'=>$limit_range,'page'=>1,'order'=>$sort_range));
		//die(print_r($result));
		//die(print_r($this->Lista->get($this->Aco->find('list',array('fields'=>array('id','alias'),'conditions'=>array('OR'=>array('parent_id'=>1,'id'=>1)))))));
		$this->set('parentacos',$this->Aco->find('list',array('fields'=>array('id','alias'),'conditions'=>array('OR'=>array('parent_id'=>1,'id'=>1)))));
		$this->set('result',$result);
		$this->set('page',$page);
		$this->set('total_pages',$total_pages);
		$this->set('count',$count);
	}
		
	function add() {
		//die(print_r($this->params["form"]));
		$this->autoRender = false;
		if (!empty($this->params["form"])) {
			//$this->Aco->create();
			//$this->Aco->save($this->params["form"]);
			
			$aco =& $this->Acl->Aco;
			$root = $aco->node('controllers');
			if (!$root) {
				$aco->create(array('parent_id' => null, 'model' => null, 'alias' => 'controllers'));
				$root = $aco->save();
				$root['Aco']['id'] = $aco->id;
			} else {
				$root = $root[0];
			} 
			// Si el nodo es un Controlador
			if($this->params["form"]["parent_id"]=='controllers'){
				$controllerNode = $aco->node('controllers/'.$this->params["form"]["alias"]);
				if (!$controllerNode) {
					$aco->create(array('parent_id' => $root['Aco']['id'], 'model' => null, 'alias' => $this->params["form"]["alias"]));
					$controllerNode = $aco->save();
					$controllerNode['Aco']['id'] = $aco->id;
				} else {
					$controllerNode = $controllerNode[0];
				}
			}else{
				// Si el nodo es una accion
				$controllerNode = $aco->node('controllers/'.$this->params["form"]["parent_id"]);
				$controllerNode = $controllerNode[0];
				$methodNode = $aco->node('controllers/'.$this->params["form"]["parent_id"].'/'.$this->params["form"]["alias"]);
				if($this->params['form']['model']=='') $model=null;
				else $model=$this->params['form']['model'];
				if($this->params['form']['foreign_key']=='') $FK=NULL;
				else $FK=$this->params['form']['foreign_key'];
				if (!$methodNode) {
					$aco->create(array('parent_id'=>$controllerNode['Aco']['id'],'model'=>$model,'foreign_key'=>$FK,'alias'=>$this->params['form']['alias']));
					$methodNode = $aco->save();
				}
			}
			
		}
	}


	function del($id = null) {
		$this->autoRender = false;
		$id=$this->params["form"]["id"];
		// Para eliminacion multiple
		$exploded_id = explode(',', $id);
		for($i=0;$i<sizeof($exploded_id);$i++) $this->Aco->delete($exploded_id[$i]);
	}

}
?>