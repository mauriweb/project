<?php /* Smarty version Smarty-3.1.12, created on 2014-05-17 16:51:44
         compiled from "C:\xampp\htdocs\acero\plantillas\tpl\trabajador\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2139852c15809efccf2-37160276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b25291029b3ebf68614de38b90d6f2302e174ca2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acero\\plantillas\\tpl\\trabajador\\menu.tpl',
      1 => 1400338301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2139852c15809efccf2-37160276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52c15809f0bae6_79974512',
  'variables' => 
  array (
    'pendientes' => 0,
    'numPendientes' => 0,
    'user' => 0,
    'resUsCal' => 0,
    'numArchivos' => 0,
    'DOMINIO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c15809f0bae6_79974512')) {function content_52c15809f0bae6_79974512($_smarty_tpl) {?><!-- BEGIN HEADER -->   
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
            <?php if ($_smarty_tpl->tpl_vars['pendientes']->value){?>
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<li class="dropdown" id="header_notification_bar">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
						data-close-others="true">
					<i class="fa fa-warning"></i>
					<span class="badge"><?php echo $_smarty_tpl->tpl_vars['numPendientes']->value;?>
</span>
					</a>
                    
					<ul class="dropdown-menu extended notification">
						<li>
							<p>Tienes <?php echo $_smarty_tpl->tpl_vars['numPendientes']->value;?>
 partes sin rellenar</p>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 250px;">
								
								<?php echo $_smarty_tpl->tpl_vars['pendientes']->value;?>

                                
							</ul>
						</li>
						<li class="external">   
							<a href="#">Rellenar partes <i class="m-icon-swapright"></i></a>
						</li>
					</ul>
				</li>
				<!-- END NOTIFICATION DROPDOWN -->
				<?php }?>
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
						<li><a href="descargas-trabajador"><i class="fa fa-archive"></i> Mis archivos <?php if ($_smarty_tpl->tpl_vars['numArchivos']->value){?><span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['numArchivos']->value;?>
</span><?php }?></a></li>
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