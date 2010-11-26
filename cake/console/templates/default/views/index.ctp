<script>
	jQuery("#grid<?php echo $pluralHumanName;?>").jqGrid({ 
		url:'<?php echo $pluralVar;?>/indextable', 
		datatype: "xml",
		colNames:[<?php foreach ($fields as $field) echo "'".ucwords($field)."',";?>],
		colModel:[ 
<?php 
foreach ($fields as $field){
 if($field=='id'){
  echo "{name:'{$field}',index:'{$singularHumanName}.{$field}',width:10},\n";
 }else {
  $isKey = false;
  if (!empty($associations['belongsTo'])) {
   foreach ($associations['belongsTo'] as $alias => $details) {
    if ($field === $details['foreignKey']) {
     $isKey = true;
     echo "{name:'".$details['foreignKey']."',index:'".$details['foreignKey']."',width:50,editable:true,edittype:\"select\",editoptions:{value:\"<?php echo \$".$details['controller'].";?>\"}},\n";
     break;
    }
   }
  }
  if(!$isKey) echo "{name:'{$field}',index:'{$singularHumanName}.{$field}',width:50,editable:true},\n";
 }
}
?>
		], 
		rowNum:10, 
		rowList:[10,20,30], 
		pager: '#pGrid<?php echo $pluralHumanName;?>', 
		sortname: '<?php echo $singularHumanName?>.id', 
		scrollOffset:0,
		viewrecords: true, 
		sortorder: "desc", 
		caption:"<?php echo $pluralHumanName;?>",
		editurl:"<?php echo $pluralVar."/indexedit";?>", 
		autowidth: true,
		altRows:true,
		hidegrid:false,
		height: 220
	}).navGrid('#pGrid<?php echo $pluralHumanName;?>',{view:true},
		{},
		{width:400,resize:false,reloadAfterSubmit:true, modal:true, closeOnEscape:true},
		{width:350,resize:false},
		{closeOnEscape:true,modal:false,multipleSearch:true});
	
</script>
<table id="grid<?php echo $pluralHumanName;?>"></table>
<div id="pGrid<?php echo $pluralHumanName;?>"></div> 

<?php
		if (!empty($associations['belongsTo'])) {
			foreach ($associations['belongsTo'] as $alias => $details) {
				if ($field === $details['foreignKey']) {
					$isKey = true;
					echo "{name:'".$details['foreignKey']."',index:'".$details['foreignKey']."',width:50,editable:true,edittype:\"select\",editoptions:{value:\"<?php echo \$".$details['controller'].";?>\"}},\n";
					break;
				}
			}
		}
?>