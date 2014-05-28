<?php /* Smarty version Smarty-3.1.12, created on 2014-04-24 18:24:34
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227426043529dc40d717917-93707533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfaefd8c663b40e2455122220480ce181c3241c0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/menu.tpl',
      1 => 1396558275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227426043529dc40d717917-93707533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_529dc40d71b2e1_03230376',
  'variables' => 
  array (
    'user' => 0,
    'DOMINIO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529dc40d71b2e1_03230376')) {function content_529dc40d71b2e1_03230376($_smarty_tpl) {?>
	<!-- BEGIN HEADER -->   
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="header-inner">
			<!-- BEGIN LOGO -->  
			<a class="navbar-brand" href="inicio" style="padding-top:10px;">
			<img src="plantillas/assets/img/logo.png" alt="logo" class="img-responsive" />
			</a>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER --> 
			<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="plantillas/assets/img/menu-toggler.png" alt="" />
			</a> 
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="imagenes/imgTrabajadores/SusanaAnton.png"/>
					<span class="username"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="javascript:;" id="trigger_fullscreen"><i class="fa fa-move"></i> Pantalla completa</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
/?cerrar=1"><i class="fa fa-key"></i> Salir</a></li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
    <div class="clearfix"></div><?php }} ?>