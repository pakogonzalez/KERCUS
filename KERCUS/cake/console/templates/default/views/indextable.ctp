<?php
echo "<?php
if ( stristr(\$_SERVER[\"HTTP_ACCEPT\"],\"application/xhtml+xml\") ) {
	header(\"Content-type: application/xhtml+xml;charset=utf-8\");
} else {
	header(\"Content-type: text/xml;charset=utf-8\");
}\n";

echo 'echo "<?xml version=\'1.0\' encoding=\'utf-8\'?>";'."\n";
echo 'echo "<rows>";'."\n";
echo "echo '<page>'.\$page.'</page>';\n";
echo "echo '<total>'.\$total_pages.'</total>';\n";
echo "echo '<records>'.\$count.'</records>';\n";

echo "for(\$i=0;\$i<sizeof(\$result);\$i++){\n";
echo "echo \"<row id='\".\$result[\$i]['".$modelClass."']['id'].\"'>\";\n";
foreach ($fields as $field) 
	echo "echo \"<cell>\".\$result[\$i]['".$modelClass."']['".$field."'].\"</cell>\";\n";
echo 'echo "</row>";'."\n";
echo "}\n";
echo 'echo "</rows>";'."\n";
echo "?>\n";
?>



			
		