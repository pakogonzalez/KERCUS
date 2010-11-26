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
echo "<row id='".$result[$i]['Aco']['id']."'>";
echo "<cell>".$result[$i]['Aco']['id']."</cell>";
echo "<cell>".$result[$i]['Aco']['parent_id']."</cell>";
echo "<cell>".$result[$i]['Aco']['alias']."</cell>";
echo "<cell>".$result[$i]['Aco']['model']."</cell>";
echo "<cell>".$result[$i]['Aco']['foreign_key']."</cell>";
echo "<cell>".$parentacos[$result[$i]['Aco']['parent_id']]."</cell>";
echo "</row>";
}
echo "</rows>";

?>



			
		