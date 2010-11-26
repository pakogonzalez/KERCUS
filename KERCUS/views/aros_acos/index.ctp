<script>
	jQuery("#gridArosAcos").jqGrid({ 
		url:'aros_acos/indextable', 
		datatype: "xml",
		colNames:['Id','Solicitante','Recurso','Permiso'],
		colModel:[ 
			{name:'id',index:'Aros Aco.id',hidden:true},
			{name:'aro_id',index:'aro_id',width:50,editable:true,edittype:"select",editoptions:{value:"<?php echo $aros;?>"}},
			{name:'aco_id',index:'aco_id',width:50,editable:true,edittype:"select",editoptions:{value:"<?php echo $acos;?>"}},
			{name:'permiso',index:'ArosAco.permiso',width:10,editable:true,edittype:'select',formatter:'checkbox',align:'center',editoptions: { value:"1:Permitido;0:Denegado" }},
		], 
		rowNum:10, 
		rowList:[10,20,30], 
		pager: '#pGridArosAcos', 
		sortname: 'ArosAco.id', 
		scrollOffset:0,
		viewrecords: true, 
		sortorder: "desc", 
		caption:"Permisos",
		editurl:"aros_acos/indexedit", 
		autowidth: true,
		altRows:true,
		hidegrid:false,
		height: 220
	}).navGrid('#pGridArosAcos',{view:true},
		{width:400,resize:false,reloadAfterSubmit:true, modal:true, closeOnEscape:true},
		{width:400,resize:false,reloadAfterSubmit:true, modal:true, closeOnEscape:true},
		{width:350,resize:false},
		{closeOnEscape:true,modal:true,multipleSearch:true});
	
</script>
<table id="gridArosAcos"></table>
<div id="pGridArosAcos"></div> 

