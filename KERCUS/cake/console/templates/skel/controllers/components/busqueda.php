<?php

class BusquedaComponent extends Object {
	function busca($searchField , $searchOper, $searchString) {
		switch($searchOper){
			case 'eq': 
				$searchCondition = $searchField.' ='; 
				break;
			case 'ne': 
				$searchCondition = $searchField.' !='; 
				break;
			case 'bw': 
				$searchCondition = $searchField." LIKE"; 
				$searchString = $searchString.'%';
				break;
			case 'bn': 
				$searchCondition = $searchField.' NOT LIKE'; 
				$searchString = $searchString.'%';
				break;
			case 'ew': 
				$searchCondition = $searchField.' LIKE'; 
				$searchString = '%'.$searchString ;
				break;
			case 'en': 
				$searchCondition = $searchField.' NOT LIKE'; 
				$searchString = '%'.$searchString ;
				break;
			case 'cn': 
				$searchCondition = $searchField." LIKE"; 
				$searchString = '%'.$searchString.'%';
				break;
			case 'nc': 
				$searchCondition = $searchField.' NOT LIKE'; 
				$searchString = '%'.$searchString.'%';
				break;
			case 'lt': 
				$searchCondition = $searchField.' <'; 
				break;
			case 'gt': 
				$searchCondition = $searchField.' >'; 
				break;
			case 'le': 
				$searchCondition = $searchField.' <='; 
				break;
			case 'ge': 
				$searchCondition = $searchField.' >= '; 
				break;
		}
		return array($searchCondition,$searchString);
	}
}

?>