<?php /* Smarty version Smarty-3.1.12, created on 2014-04-11 18:51:02
         compiled from "C:\xampp\htdocs\acero\plantillas\tpl\clienteVisado\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1493252ea9887af23c4-06735228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2d1f11733b340dcfa1ede3fb4339d51544538db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acero\\plantillas\\tpl\\clienteVisado\\menu.tpl',
      1 => 1397235059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1493252ea9887af23c4-06735228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52ea9887ba2bd6_03790758',
  'variables' => 
  array (
    'user' => 0,
    'DOMINIO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea9887ba2bd6_03790758')) {function content_52ea9887ba2bd6_03790758($_smarty_tpl) {?>
	<!-- BEGIN HEADER -->   
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="header-inner">
			<!-- BEGIN LOGO -->  
			<a class="navbar-brand" href="informes-trabajo-cliente" style="padding-top:10px;">
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
					<img alt="" src="imagenes/imgTrabajadores/SusanaAnt.png"/>
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