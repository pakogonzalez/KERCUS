<div id="header">
	<div id="panelInfo">
		<?php echo $session->read('Auth.User.nombre');?>
		<?php echo $this->Html->link(__('Salir', true), array('controller'=>'users', 'action'=>'logout')); ?>
	</div>
	<div class="titulo">
		<div class="tit-ppal"><?php echo $this->Html->link('T�tulo', '',array('escape'=>false,'title'=>'T�tulo')); ?></div>
		<div class="tit-aux">D.Gral. de Ejemplo</div>
	</div>
</div>