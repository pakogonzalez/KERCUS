<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php __('KERCUS'); ?></title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('kercus');
		echo $this->Html->css('south-street/jquery-ui-1.8.2.custom'); // Tema jquery Smoothness
		//echo $this->Html->css('base/jquery.ui.all'); // Tema Base
		echo $this->Html->css('ui.jqgrid.css');
		echo $this->Html->script('jquery-1.4.2.min');
		echo $this->Html->script('jquery-ui-1.8.2.custom.min');
		echo $this->Html->script('i18n/grid.locale-es.js');
		echo $this->Html->script('jquery.jqGrid.min.js');
		echo $this->Html->script('kercus');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<?php if($session->read('Auth.User.nombre')!=''){ ?>
		<?php 	echo $this->element('header'); ?>
		<?php 	echo $this->element('menu'); ?>
		<?php } ?>
		<div id="content">
			<?php echo $this->Session->flash(); echo $this->Session->flash('auth');?>
			<?php echo $content_for_layout; ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link($this->Html->image('logokercus.png'), 'http://localhost/CORE3/KERCUS/',array('escape'=>false)); ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<?php echo $js->writeBuffer();?>
</body>
</html>