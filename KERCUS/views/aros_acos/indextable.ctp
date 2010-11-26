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
echo "<row id='".$result[$i]['ArosAco']['id']."'>";
echo "<cell>".$result[$i]['ArosAco']['id']."</cell>";
echo "<cell>".$result[$i]['Aro']['model']."/".$g[$result[$i]['Aro']['model']][$result[$i]['Aro']['foreign_key']]."</cell>";
echo "<cell>".$acos[$result[$i]['Aco']['parent_id']]."/".$result[$i]['Aco']['alias']."</cell>";
if($result[$i]['ArosAco']['_read']==-1) $p=0; else $p=1;
echo "<cell>".$p."</cell>";
echo "</row>";
}
echo "</rows>";
?>



			
		