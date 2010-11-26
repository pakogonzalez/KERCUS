<?php
/**
 * Bake Template for Controller action generation.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.console.libs.template.objects
 * @since         CakePHP(tm) v 1.3
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>

	function <?php echo $admin ?>index() {
		$this->layout= 'ajax';
		$this-><?php echo $currentModelName ?>->recursive = 0;

<?php
	foreach (array('belongsTo', 'hasAndBelongsToMany') as $assoc):
		foreach ($modelObj->{$assoc} as $associationName => $relation):
			if (!empty($associationName)):
				$otherModelName = $this->_modelName($associationName);
				$otherPluralName = $this->_pluralName($associationName);
				//echo "\t\t\${$otherPluralName} = \$this->{$currentModelName}->{$otherModelName}->find('list');\n";
				echo "\t\t\$this->set('{$otherPluralName}',\$this->Lista->get(\$this->{$currentModelName}->{$otherModelName}->find('list')));\n";
				$compact[] = "'{$otherPluralName}'";
			endif;
		endforeach;
	endforeach;
	if (!empty($compact)):
		echo "\t\t\$this->set(compact(".join(', ', $compact)."));\n";
	endif;
?>

	}

/* INDEXEDIT ACTION */

	function <?php echo $admin;?>indextable() {
		$this->layout= 'ajax';
		$this-><?php echo $currentModelName;?>->recursive = 1;
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
			$row = $this-><?php echo $currentModelName;?>->find('count',array('conditions'=>$cond));
		else 
			$row = $this-><?php echo $currentModelName;?>->find('count');

		$count = $row;
		if($count > 0) $total_pages = ceil($count/$limit);
		else $total_pages = 0;
		if ($page > $total_pages) $page=$total_pages;
		$start = $limit*$page - $limit;
		if($start < 0) $start = 0;
		$limit_range = $start.",".$limit;
		$sort_range = $sidx." ".$sord;
		if($search == 'true')
			$result = $this-><?php echo $currentModelName;?>->find('all',array('fields'=>'*','conditions'=>$cond,'order'=>$sort_range,'limit'=>$limit_range,'page'=>1));
		else
			$result = $this-><?php echo $currentModelName;?>->find('all',array('fields'=>'*','limit'=>$limit_range,'page'=>1,'order'=>$sort_range));
		$this->set('result',$result);
		$this->set('page',$page);
		$this->set('total_pages',$total_pages);
		$this->set('count',$count);
	}
		
	function <?php echo $admin ?>add() {
		$this->autoRender = false;
		if (!empty($this->params["form"])) {
			$this-><?php echo $currentModelName; ?>->create();
			$this-><?php echo $currentModelName; ?>->save($this->params["form"]);
		}
	}

	function <?php echo $admin; ?>edit($id = null) {
		$this->autoRender = false;		
		$this-><?php echo $currentModelName; ?>->save($this->params["form"]);
	}

	function <?php echo $admin; ?>del($id = null) {
		$this->autoRender = false;
		$id=$this->params["form"]["id"];
		// Para eliminacion multiple
		$exploded_id = explode(',', $id);
		for($i=0;$i<sizeof($exploded_id);$i++) $this-><?php echo $currentModelName;?>->delete($exploded_id[$i]);
	}
