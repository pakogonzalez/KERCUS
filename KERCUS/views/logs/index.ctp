<script>
	jQuery("#gridLogs").jqGrid({ 
		url:'logs/indextable', 
		datatype: "xml",
		colNames:['Id','Accion','User_id','Created','Modified',],
		colModel:[ 
			{name:'id',index:'Log.id',width:10},
			{name:'accion',index:'Log.accion',width:50,editable:true},
			{name:'user_id',index:'user_id',width:50,editable:true,edittype:"select",editoptions:{value:"<?php echo $users;?>"}},
			{name:'created',index:'Log.created',width:50,editable:true},
			{name:'modified',index:'Log.modified',width:50,editable:true},
		], 
		rowNum:10, 
		rowList:[10,20,30], 
		pager: '#pGridLogs', 
		sortname: 'Log.id', 
		scrollOffset:0,
		viewrecords: true, 
		sortorder: "desc", 
		caption:"Logs",
		editurl:"logs/indexedit", 
		autowidth: true,
		altRows:true,
		hidegrid:false,
		height: 220
	}).navGrid('#pGridLogs',{view:true,add:false,edit:false},{},{},{},
		{closeOnEscape:true,modal:false,multipleSearch:true});
	
</script>
<table id="gridLogs"></table>
<div id="pGridLogs"></div> 

