<?php

class ListaComponent extends Object {

	function get($aux)
	{
		$cad = "";
		foreach($aux as $k=>$g) $cad .= "$k:$g;";
		return substr_replace($cad,"",strlen($cad)-1);
	}

}

?>