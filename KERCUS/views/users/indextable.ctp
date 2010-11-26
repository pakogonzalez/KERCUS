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
echo "<row id='".$result[$i]['User']['id']."'>";
echo "<cell>".$result[$i]['User']['id']."</cell>";
echo "<cell>".$result[$i]['User']['username']."</cell>";
echo "<cell></cell>";
echo "<cell>".$result[$i]['User']['nombre']."</cell>";
echo "<cell>".$result[$i]['User']['last_login']."</cell>";
echo "<cell>".$result[$i]['Group']['name']."</cell>";
echo "<cell>".$result[$i]['User']['estado']."</cell>";
echo "<cell>".$result[$i]['User']['created']."</cell>";
echo "<cell>".$result[$i]['User']['modified']."</cell>";
echo "</row>";
}
echo "</rows>";
?>



			
		