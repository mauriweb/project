<?php /* Smarty version Smarty-3.1.12, created on 2014-04-30 17:13:02
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70600841052aefed2420ec4-88015807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '976d0b5134b97993939dc26f742feb19fe2af5db' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/menu.tpl',
      1 => 1397212792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70600841052aefed2420ec4-88015807',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52aefed2422de2_68398918',
  'variables' => 
  array (
    'user' => 0,
    'resUsCal' => 0,
    'DOMINIO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52aefed2422de2_68398918')) {function content_52aefed2422de2_68398918($_smarty_tpl) {?><!-- BEGIN HEADER -->   
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="header-inner">
			<!-- BEGIN LOGO -->  
			<a class="navbar-brand" href="inicio-trabajador" style="padding-top:10px;">
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
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<li class="dropdown" id="header_notification_bar">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
						data-close-others="true">
					<i class="fa fa-warning"></i>
					<span class="badge">6</span>
					</a>
					<ul class="dropdown-menu extended notification">
						<li>
							<p>Tienes 6 partes sin rellenar</p>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 250px;">
								
								<li>  
									<a href="#">
									<span class="label label-sm label-icon label-warning"><i class="fa fa-bell-o"></i></span>
									Parte día 24 / 09 / 2013
									</a>
								</li>
                                <li>  
									<a href="#">
									<span class="label label-sm label-icon label-warning"><i class="fa fa-bell-o"></i></span>
									Parte día 24 / 09 / 2013
									</a>
								</li>
                                <li>  
									<a href="#">
									<span class="label label-sm label-icon label-warning"><i class="fa fa-bell-o"></i></span>
									Parte día 24 / 09 / 2013
									</a>
								</li>
                                <li>  
									<a href="#">
									<span class="label label-sm label-icon label-warning"><i class="fa fa-bell-o"></i></span>
									Parte día 24 / 09 / 2013
									</a>
								</li>
                                <li>  
									<a href="#">
									<span class="label label-sm label-icon label-warning"><i class="fa fa-bell-o"></i></span>
									Parte día 24 / 09 / 2013
									</a>
								</li>
                                <li>  
									<a href="#">
									<span class="label label-sm label-icon label-warning"><i class="fa fa-bell-o"></i></span>
									Parte día 24 / 09 / 2013
									</a>
								</li>
                                
								
							</ul>
						</li>
						<li class="external">   
							<a href="#">Rellenar partes <i class="m-icon-swapright"></i></a>
						</li>
					</ul>
				</li>
				<!-- END NOTIFICATION DROPDOWN -->
				
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="imagenes/imgTrabajadores/SusanaAnton.png"/>
					<span class="username"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="datos-trabajador"><i class="fa fa-user"></i> Mis datos</a></li>
						<li><a href="calendario-trabajador/?id_item=<?php echo $_smarty_tpl->tpl_vars['resUsCal']->value;?>
"><i class="fa fa-calendar"></i> Mi calendario</a></li>
						<li><a href="descargas-trabajador"><i class="fa fa-archive"></i> Mis archivos <span class="badge badge-danger">3</span></a></li>
						<li class="divider"></li>
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