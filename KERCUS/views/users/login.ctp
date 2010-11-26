<body class="login">
<div id="login">
<?php $session->flash('auth');?>
	<div id="form_login">
	<h1>Acceso a Usuarios</h1>
	<?php echo $form->create('User', array('action' => 'login','name'=>'form_login'));?>
	<?php echo $form->input('username',array('label'=>'Nombre de Usuario','class'=>'text','value'=>'Nombre de Usuario'));?>
	<?php echo $form->input('password',array('label'=>'Contraseña','class'=>'text'));?>
	<input type="checkbox" name="remember" /><span class="remember">Recordarme en este equipo</span>
	<?php echo $form->end(array('label'=>'Acceder','class'=>'super white button'));?>
	</div>
</div>
</body>