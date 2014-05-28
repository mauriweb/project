<?php /* Smarty version Smarty-3.1.12, created on 2013-12-16 14:18:26
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracion/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194986050552aefd2e1fdda4-14639982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc917066b4e045ef303eb07f4c3fa54ec297e80c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracion/menu.tpl',
      1 => 1387199906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194986050552aefd2e1fdda4-14639982',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52aefd2e202e41_45859611',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52aefd2e202e41_45859611')) {function content_52aefd2e202e41_45859611($_smarty_tpl) {?>
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
					<img alt="" src="imagenes/imgTrabajadores/SusanaAnton.png"/>
					<span class="username">Administracion</span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="javascript:;" id="trigger_fullscreen"><i class="fa fa-move"></i> Pantalla completa</a></li>
						<li><a href="login.html"><i class="fa fa-key"></i> Salir</a></li>
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