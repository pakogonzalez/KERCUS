<?php
class ArosAcosController extends AppController {

	var $name = 'ArosAcos';

	function index() {
		$this->layout= 'ajax';
		$this->ArosAco->recursive = 1;
		$m=$this->ArosAco->Aro->find('all',array('fields'=>array('id','model','foreign_key')));
		$nombre='';
		foreach($m as $mm){
			$this->loadModel($mm['Aro']['model']);
			if($mm['Aro']['model']=='Group') $name='name'; else $name='nombre'; 
			$modelo=$mm['Aro']['model'];
			$this->$modelo->read($name,$mm['Aro']['foreign_key']);
			$nombre=$this->$modelo->data[$modelo][$name];
			$aux[$mm['Aro']['id']]=$modelo.'/'.$nombre;	
		}

		$cad = "";
		foreach($aux as $k=>$g) $cad .= "$k:$g;";
		$cad=substr_replace($cad,"",strlen($cad)-1);
		$this->set('aros',$cad);
		
		$m=$this->ArosAco->Aco->find('all',array('fields'=>array('id','alias','parent_id')));
		$nombre='';
		foreach($m as $mm){
			$nombre='';
			if($mm['Aco']['parent_id']!=null){
				$otro=$this->ArosAco->Aco->find('all',array('conditions'=>array('id'=>$mm['Aco']['parent_id']),'fields'=>array('alias')));
				$nombre=$otro[0]['Aco']['alias']."/";
			}
			$auxx[$mm['Aco']['id']]=$nombre.$mm['Aco']['alias'];	
		}
		
		$cad = "";
		foreach($auxx as $k=>$g) $cad .= "$k:$g;";
		$cad=substr_replace($cad,"",strlen($cad)-1);
		
		$this->set('acos',$cad);
		$this->set(compact('aros', 'acos'));
	}

	function indextable() {
		$this->layout= 'ajax';
		$this->ArosAco->recursive = 1;
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
			$row = $this->ArosAco->find('count',array('conditions'=>$cond));
		else 
			$row = $this->ArosAco->find('count');

		$count = $row;
		if($count > 0) $total_pages = ceil($count/$limit);
		else $total_pages = 0;
		if ($page > $total_pages) $page=$total_pages;
		$start = $limit*$page - $limit;
		if($start < 0) $start = 0;
		$limit_range = $start.",".$limit;
		$sort_range = $sidx." ".$sord;
		if($search == 'true')
			$result = $this->ArosAco->find('all',array('fields'=>'*','conditions'=>$cond,'order'=>$sort_range,'limit'=>$limit_range,'page'=>1));
		else
			$result = $this->ArosAco->find('all',array('fields'=>'*','limit'=>$limit_range,'page'=>1,'order'=>$sort_range));
		
		$this->loadModel('User');
		$g['User'] = $this->User->find('list',array('fields'=>'id,nombre'));
		
		$this->loadModel('Group');
		$g['Group'] = $this->Group->find('list',array('fields'=>'id,name'));

		$acos = $this->ArosAco->Aco->find('list',array('fields'=>'id,alias'));
		$this->set('g',$g);
		$this->set('acos',$acos);
		$this->set('result',$result);
		$this->set('page',$page);
		$this->set('total_pages',$total_pages);
		$this->set('count',$count);
	}
		
	function add() {
		$this->autoRender = false;
		if (!empty($this->params['form'])) {
			if($this->params['form']['permiso']==0) $this->params['form']['permiso']=-1;
			$this->params['form']['_create']=$this->params['form']['permiso'];
			$this->params['form']['_read']=$this->params['form']['permiso'];
			$this->params['form']['_update']=$this->params['form']['permiso'];
			$this->params['form']['_delete']=$this->params['form']['permiso'];
			$this->ArosAco->create();
			$this->ArosAco->save($this->params["form"]);
		}
	}

	function edit($id = null) {
		$this->autoRender = false;		
		if($this->params['form']['permiso']==0) $this->params['form']['permiso']=-1;
		$this->params['form']['_create']=$this->params['form']['permiso'];
		$this->params['form']['_read']=$this->params['form']['permiso'];
		$this->params['form']['_update']=$this->params['form']['permiso'];
		$this->params['form']['_delete']=$this->params['form']['permiso'];
		$this->ArosAco->save($this->params["form"]);
	}

	function del($id = null) {
		$this->autoRender = false;
		$id=$this->params["form"]["id"];
		// Para eliminacion multiple
		$exploded_id = explode(',', $id);
		for($i=0;$i<sizeof($exploded_id);$i++) $this->ArosAco->delete($exploded_id[$i]);
	}

}
?>