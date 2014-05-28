<?php /* Smarty version Smarty-3.1.12, created on 2014-04-24 18:24:30
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracionAcero/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212198724752e3aa57eb8785-25749192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f902824418bf040d5ac9b75b6bb0304a0f12adbd' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracionAcero/menu.tpl',
      1 => 1396558619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212198724752e3aa57eb8785-25749192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52e3aa57ebac93_16563469',
  'variables' => 
  array (
    'user' => 0,
    'DOMINIO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e3aa57ebac93_16563469')) {function content_52e3aa57ebac93_16563469($_smarty_tpl) {?>
	<!-- BEGIN HEADER -->   
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="header-inner">
			<!-- BEGIN LOGO -->  
			<a class="navbar-brand" href="inicio-administracion" style="padding-top:10px;">
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