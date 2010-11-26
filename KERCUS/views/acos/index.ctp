<script>
	jQuery("#gridAcos").jqGrid({ 
		url:'acos/indextable', 
		datatype: "xml",
		colNames:['Id','Padre','Controlador/Acción','Modelo','FK','Padre'],
		colModel:[ 
			{name:'id',index:'Aco.id',hidden:true},
			{name:'parent_id',index:'Aco.parent_id',editable:true,edittype:"select",editoptions:{value:"<?php echo $parentAcos;?>"},editrules:{edithidden:true},hidden:true},
			{name:'alias',index:'Aco.alias',width:50,editable:true},
			{name:'model',index:'Aco.alias',width:50,editable:true},
			{name:'foreign_key',index:'Aco.foreign_key',width:50,editable:true},
			{name:'padre',index:'Aco.padre',width:50,editable:false},
		], 
		rowNum:27, 
		rowList:[30,40,50], 
		pager: '#pGridAcos', 
		sortname: 'Aco.id', 
		scrollOffset:0,
		viewrecords: true, 
		sortorder: "desc", 
		caption:"Controladores/Acciones",
		editurl:"acos/indexedit", 
		autowidth: true,
		altRows:true,
		hidegrid:false,
		height: 595
	}).navGrid('#pGridAcos',{view:true},
		{},
		{width:400,resize:false,reloadAfterSubmit:true, modal:true, closeOnEscape:true},
		{width:350,resize:false},
		{closeOnEscape:true,modal:false,multipleSearch:true});	
</script>
<table id="gridAcos"></table>
<div id="pGridAcos"></div> 

