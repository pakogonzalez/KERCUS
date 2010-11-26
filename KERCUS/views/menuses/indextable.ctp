<?php
if ( stristr($_SERVER["HTTP_ACCEPT"],"application/xhtml+xml") ) {
	header("Content-type: application/xhtml+xml;charset=iso-8859-1");
} else {
	header("Content-type: text/xml;charset=iso-8859-1");
}
echo "<?xml version='1.0' encoding='iso-8859-1'?>";
echo "<rows>";
echo '<page>'.$page.'</page>';
echo '<total>'.$total_pages.'</total>';
echo '<records>'.$count.'</records>';
for($i=0;$i<sizeof($result);$i++){
echo "<row id='".$result[$i]['Menus']['id']."'>";
echo "<cell>".$result[$i]['Menus']['id']."</cell>";
echo "<cell>".$result[$i]['Menus']['titulo']."</cell>";
echo "<cell>".$result[$i]['MenusParent']['titulo']."</cell>";
echo "<cell>".$result[$i]['Menus']['estado']."</cell>";
echo "<cell>".$result[$i]['Menus']['controlador']."</cell>";
echo "<cell>".$result[$i]['Menus']['accion']."</cell>";
echo "<cell>".$result[$i]['Menus']['orden']."</cell>";
echo "<cell>".$result[$i]['Menus']['foot']."</cell>";
echo "</row>";
}
echo "</rows>";
?>



			
		