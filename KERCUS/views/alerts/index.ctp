<script>
	jQuery("#gridAlerts").jqGrid({ 
		url:'alerts/indextable', 
		datatype: "xml",
		colNames:['Id','Usuario','Asunto','Texto','Estado','Fecha','Modified',],
		colModel:[ 
			{name:'id',index:'Alert.id',width:10,hidden:true},
			{name:'user_id',index:'user_id',width:50,editable:true,edittype:"select",editoptions:{value:"<?php echo $users;?>"}<?php if($this->Session->read('Auth.User.group_id')!=1){ ?>,editrules:{edithidden:true},hidden:true<?php } ?>},
			{name:'asunto',index:'Alert.asunto',width:50,editable:true},
			{name:'texto',index:'Alert.texto',width:50,editable:true,hidden:true,edittype:'textarea',editoptions: {rows:"6",cols:"35"},editrules:{edithidden:true}},
			{name:'estado',index:'Alert.estado',width:50,editable:true,edittype:'select',editoptions:{value:"Activa:Activa;Inactiva:Inactiva"},align:'center'},
			{name:'created',index:'Alert.created',width:50,editable:false,editrules:{edithidden:true},formatter:'date',formatoptions:{srcformat: 'Y-m-d',newformat: 'd/m/Y'},align:'center'},
			{name:'modified',index:'Alert.modified',width:50,editable:false,editrules:{edithidden:true},hidden:true},
		], 
		rowNum:10, 
		rowList:[10,20,30], 
		pager: '#pGridAlerts', 
		sortname: 'Alert.id', 
		scrollOffset:0,
		viewrecords: true, 
		sortorder: "desc", 
		caption:"Alertas",
		editurl:"alerts/indexedit", 
		autowidth: true,
		altRows:true,
		hidegrid:false,
		height: 220
	}).navGrid('#pGridAlerts',{view:true<?php  if($this->Session->read('Auth.User.group_id')!=1){ ?>,add:false,del:false,edit:false<?php }?>},
		{},
		{width:450,resize:false,reloadAfterSubmit:true, modal:true, closeOnEscape:true},
		{width:450,resize:false},
		{closeOnEscape:true,modal:false,multipleSearch:true});
	
</script>
<table id="gridAlerts"></table>
<div id="pGridAlerts"></div> 

