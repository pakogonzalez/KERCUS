<?php
if ( stristr($_SERVER["HTTP_ACCEPT"],"application/xhtml+xml") ) {
	header("Content-type: application/xhtml+xml;charset=utf-8");
} else {
	header("Content-type: text/xml;charset=utf-8");
}
echo "<?xml version='1.0' encoding='utf-8'?>";
echo "<rows>";
echo '<page>'.$page.'</page>';
echo '<total>'.$total_pages.'</total>';
echo '<records>'.$count.'</records>';
for($i=0;$i<sizeof($result);$i++){
echo "<row id='".$result[$i]['Log']['id']."'>";
echo "<cell>".$result[$i]['Log']['id']."</cell>";
echo "<cell>".$result[$i]['Log']['accion']."</cell>";
echo "<cell>".$result[$i]['Log']['user_id']."</cell>";
echo "<cell>".$result[$i]['Log']['created']."</cell>";
echo "<cell>".$result[$i]['Log']['modified']."</cell>";
echo "</row>";
}
echo "</rows>";
?>



			
		