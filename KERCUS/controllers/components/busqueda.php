<?php

class BusquedaComponent extends Object {
	
	function busca2($searchField , $searchOper, $searchString) {
		
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
	
	function busca($s){
           $qwery = array();
           //['eq','ne','lt','le','gt','ge','bw','bn','in','ni','ew','en','cn','nc']
           $qopers = array(
                         'eq'=>" = ",
                         'ne'=>" <> ",
                         'lt'=>" < ",
                         'le'=>" <= ",
                         'gt'=>" > ",
                         'ge'=>" >= ",
                         'bw'=>" LIKE ",
                         'bn'=>" NOT LIKE ",
                         'in'=>" IN ",
                         'ni'=>" NOT IN ",
                         'ew'=>" LIKE ",
                         'en'=>" NOT LIKE ",
                         'cn'=>" LIKE " ,
                         'nc'=>" NOT LIKE " );

           if ($s) {
               $jsona = $this->json_decode($s);
               if(is_array($jsona)){
                   $gopr = $jsona['groupOp'];
                   $rules = $jsona['rules'];
                   //$i = 0;
                   $qwery=array($gopr=>array());
                   foreach($rules as $key=>$val) {
                       $field = $val['field'];
                       $op = $val['op'];
                       $v = $val['data'];
                       if($v && $op) {
                           //$i++;
                           //if ($i > 1) $qwery .= " " .$gopr." ";
                           switch($op){
                               case 'bw':      $qwery[$gopr]["$field$qopers[$op]"] = "$v%";
                                                               break;
                                       case 'bn':      $qwery[$gopr]["$field$qopers[$op]"] = "$v%";
                                                               break;
                                       case 'ew':      $qwery[$gopr]["$field$qopers[$op]"] = "%$v";
                                                               break;
                                       case 'en':      $qwery[$gopr]["$field$qopers[$op]"] = "%$v";
                                                               break;
                                       case 'cn':      $qwery[$gopr]["$field$qopers[$op]"] = "%$v%";
                                                               break;
                                       case 'nc':      $qwery[$gopr]["$field$qopers[$op]"] = "%$v%";
                                                               break;
                                       default:        $qwery[$gopr]["$field$qopers[$op]"] = "$v";
                               }
                       }
                   }
                   
               }
           }

               return $qwery;
       }

       function json_decode($json)
       {
           $comment = false;
           $out = '$x=';

           for ($i=0; $i<strlen($json); $i++)
           {
               if (!$comment)
               {
                   if ($json[$i] == '{')        $out .= ' array(';
                   else if ($json[$i] == '}')   $out .= ')';
                   else if ($json[$i] == ':')   $out .= '=>';
                   else if ($json[$i] == '[')   $out .= ' array(';
                   else if ($json[$i] == ']')   $out .= ')';
                   else                         $out .= $json[$i];
               }
               else $out .= $json[$i];
               if ($json[$i] == '"')    $comment = !$comment;
           }
           eval($out . ';');
           return $x;
       }
	
}

?>