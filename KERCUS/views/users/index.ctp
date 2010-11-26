<script>
	jQuery("#gridUsers").jqGrid({ 
		url:'users/indextable', 
		datatype: "xml",
		colNames:['Id','Usuario','Clave','Nombre','Último Acceso','Grupo','Estado','Creado','Modificado',],
		colModel:[ 
			{name:'id',index:'User.id',width:3,align:'center',hidden:true},
			{name:'username',index:'User.username',width:25,editable:true},
			{name:'password',index:'User.password',editable:true,edittype:'password',editrules:{edithidden:true},hidden:true},
			{name:'nombre',index:'User.nombre',width:50,editable:true},
			{name:'last_login',index:'User.last_login',width:50,editable:false,hidden:true},
			{name:'group_id',index:'Group.nombre',width:50,editable:true,edittype:"select",editoptions:{value:"<?php echo $groups;?>"}},
			{name:'estado',index:'User.estado',width:10,editable:true,edittype:"select",editoptions:{value:"<?php echo $estados;?>"}},
			{name:'created',index:'User.created',editable:false,hidden:true},
			{name:'modified',index:'User.modified',editable:false,hidden:true},
		], 
		rowNum:10, 
		rowList:[10,20,30], 
		pager: '#pGridUsers', 
		sortname: 'User.id', 
		scrollOffset:0,
		viewrecords: true, 
		sortorder: "desc", 
		caption:"Usuarios",
		editurl:"users/indexedit", 
		autowidth: true,
		height: 220,
		altRows:true,
		hidegrid:false,
	}).navGrid('#pGridUsers',{view:true},{},
		{width:400,resize:false,reloadAfterSubmit:true, modal:true, closeOnEscape:true},
		{width:350,resize:false},
		{closeOnEscape:true,modal:false,multipleSearch:true});
	
</script>
<table id="gridUsers"></table>
<div id="pGridUsers"></div> 

