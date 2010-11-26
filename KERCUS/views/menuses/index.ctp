<script>
	jQuery("#gridMenuses").jqGrid({ 
		url:'menuses/indextable', 
		datatype: "xml",
		colNames:['Id','Tí­tulo','Padre','Estado','Controlador','Accion','Orden','Auxiliar'],
		colModel:[ 
			{name:'id',index:'Menus.id',width:3,align:'center'},
			{name:'titulo',index:'Menus.titulo',width:50,editable:true,editrules:{required:true}},
			{name:'menus_id',index:'MenusParent.menus_id',width:50,editable:true,edittype:"select",editoptions:{value:":;<?php echo $menuses;?>"}},
			{name:'estado',index:'Menus.estado',align:'center',width:5,editable:true,edittype:"select",editoptions:{value:"<?php echo $estados;?>"}},
			{name:'controlador',index:'Menus.controlador',editable:true,editrules:{edithidden:true},hidden:true},
			{name:'accion',index:'Menus.accion',editable:true,editrules:{edithidden:true},hidden:true},
			{name:'orden',index:'Menus.orden',width:10,editable:true,align:'center',editoptions:{value:0}},
			{name:'foot',index:'Menus.foot',width:10,editable:true,align:'center',edittype:'checkbox',editoptions:{value:'Yes:No'},formatter:'checkbox'},
		], 
		rowNum:20, 
		rowList:[20,40,60], 
		pager: '#pGridMenuses', 
		sortname: 'Menus.id', 
		scrollOffset:0,
		viewrecords: true, 
		sortorder: "desc", 
		caption:"Menús",
		editurl:"menuses/indexedit", 
		autowidth: true,
		altRows:true,
		hidegrid:false,
		multiselect:true,
		height: 440
	}).navGrid('#pGridMenuses',{view:true},
		{width:400,resize:false,reloadAfterSubmit:true, modal:true, closeOnEscape:true,closeAfterEdit:true,
			afterSubmit : function (formid) {$('#content').load("menuses");return false;}},
		{width:400,resize:false,reloadAfterSubmit:true, modal:true, closeOnEscape:true,closeAfterAdd:true,
			afterSubmit : function (formid,la) {$('#content').load("menuses");return false;},
		},
		{width:350,resize:false},
		{closeOnEscape:true,modal:false,multipleSearch:true});
	
</script>
<table id="gridMenuses"></table>
<div id="pGridMenuses"></div> 

