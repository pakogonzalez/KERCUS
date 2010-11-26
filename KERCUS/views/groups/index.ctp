<script>
	jQuery("#gridGroups").jqGrid({ 
		url:'groups/indextable', 
		datatype: "xml",
		colNames:['Id','Name'],
		colModel:[ 
			{name:'id',index:'Group.id',width:2,align:'center',hidden:true},
			{name:'name',index:'Group.name',width:50,editable:true},
		], 
		rowNum:10, 
		rowList:[10,20,30], 
		pager: '#pGridGroups', 
		sortname: 'Group.id', 
		scrollOffset:0,
		viewrecords: true, 
		sortorder: "desc", 
		caption:"Grupos",
		editurl:"groups/indexedit", 
		autowidth: true,
		height: 220,
		altRows:true,
		hidegrid:false,
	}).navGrid('#pGridGroups',{view:true},
		{},
		{width:400,resize:false,reloadAfterSubmit:true, modal:true, closeOnEscape:true},
		{width:350,resize:false},
		{closeOnEscape:true,modal:false,multipleSearch:true});
	
</script>
<table id="gridGroups"></table>
<div id="pGridGroups"></div> 

