<script>
	jQuery("#gridMensajes").jqGrid({ 
		url:'mensajes/indextable', 
		datatype: "xml",
		colNames:['Id','Usuario','Asunto','Texto','Fecha'],
		colModel:[ 
			{name:'id',index:'Mensaje.id',width:10,hidden:true},
			{name:'destino',index:'Mensaje.user_id',width:50,editable:true,edittype:"select",editoptions:{value:"<?php echo $users;?>"}},
			{name:'asunto',index:'Mensaje.asunto',width:50,editable:true},
			{name:'texto',index:'Mensaje.texto',width:50,editable:true,hidden:true,edittype:'textarea',editoptions: {rows:"6",cols:"35"},editrules:{edithidden:true}},
			{name:'created',index:'Mensaje.created',width:50,editable:false,formatter:'date',formatoptions:{srcformat: 'Y-m-d H:i:sO',newformat: 'd/m/Y H:i:s'},align:'center'},
		], 
		rowNum:10, 
		rowList:[10,20,30], 
		pager: '#pGridMensajes', 
		sortname: 'Mensaje.created', 
		scrollOffset:0,
		viewrecords: true, 
		sortorder: "desc", 
		caption:"Mensajes - Bandeja de Entrada",
		editurl:"mensajes/indexedit", 
		autowidth: true,
		altRows:true,
		hidegrid:false,
		height: 220
	}).navGrid('#pGridMensajes',{view:true,edit:false},
		{},
		{width:450,resize:false,reloadAfterSubmit:true, modal:true, closeOnEscape:true},
		{width:450,resize:false,reloadAfterSubmit:true, modal:true, closeOnEscape:true},
		{closeOnEscape:true,modal:false,multipleSearch:true},
		{width:600,resize:true,reloadAfterSubmit:true, modal:true, closeOnEscape:true}
		);
	
</script>
<table id="gridMensajes"></table>
<div id="pGridMensajes"></div> 

