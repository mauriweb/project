<?php /* Smarty version Smarty-3.1.12, created on 2014-05-06 12:07:01
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/menuLateral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128678146952aefed2425105-38962942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '717d8cad2065428005326ea8f803b4d7d4a5a44e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/menuLateral.tpl',
      1 => 1399370818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128678146952aefed2425105-38962942',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52aefed24562b7_82389266',
  'variables' => 
  array (
    'activeInicio' => 0,
    'activeClientes' => 0,
    'activeMaterial' => 0,
    'activeTrabajo' => 0,
    'activeGastos' => 0,
    'activeAusencias' => 0,
    'activeDistribuidores' => 0,
    'activeCalidad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52aefed24562b7_82389266')) {function content_52aefed24562b7_82389266($_smarty_tpl) {?><!-- BEGIN SIDEBAR MENU -->        
			<ul class="page-sidebar-menu">
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
                <li style="padding-bottom:10px;"></li>
				<li class="<?php echo $_smarty_tpl->tpl_vars['activeInicio']->value;?>
">
					<a href="inicio-trabajador">
					<i class="fa fa-home"></i> 
					<span class="title">Inicio</span>
					<span class="selected"></span>
					</a>
				</li>
                
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeClientes']->value;?>
">
					<a href="datos-clientes">
					<i class="fa fa-user"></i> 
					<span class="title">Clientes</span>
                    <span class="selected"></span>
					</a>
				</li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeMaterial']->value;?>
">
					<a href="#">
					<i class="fa fa-briefcase"></i> 
					<span class="title">Parte de material</span>
                    <span class="arrow "></span>
                    <span class="selected"></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="partes-de-material-trabajador">Ver</a>
						</li>
                        <li >
							<a href="alta-parte-de-material-trabajador"><span class="badge badge-roundless badge-success"> + </span>Alta</a>
						</li>
                        <li >
							<a href="ver-codigo-material-insertar-trabajador">Tarifas material</a>
						</li>
					</ul>
				</li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeTrabajo']->value;?>
">
					<a href="#">
					<i class="fa fa-briefcase"></i> 
					<span class="title">Parte de trabajo</span>
                    <span class="arrow "></span>
                    <span class="selected"></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="partes-de-trabajo-trabajador">Ver</a>
						</li>
                        <li >
							<a href="alta-parte-de-trabajo-trabajador"><span class="badge badge-roundless badge-success"> + </span>Alta</a>
						</li>
                        <li >
							<a href="tarifas-trabajador">Tarifas trabajos</a>
						</li>
                        
					</ul>
				</li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeGastos']->value;?>
">
					<a href="#">
					<i class="fa fa-briefcase"></i> 
					<span class="title">Justifi. gastos</span>
                    <span class="arrow "></span>
                    <span class="selected"></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="gastos-trabajador">Ver</a>
						</li>
                        <li >
							<a href="add-gastos-trabajador"><span class="badge badge-roundless badge-success"> + </span>Alta</a>
						</li>
                        
					</ul>
				</li>
               <li class="<?php echo $_smarty_tpl->tpl_vars['activeAusencias']->value;?>
">
					<a href="ausencias">
					<i class="fa fa-calendar"></i> 
					<span class="title">Ausencias y Vacaciones</span>
                    <span class="selected"></span>
					</a>
				</li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeDistribuidores']->value;?>
">
					<a href="datos-distribuidores">
					<i class="fa  fa-truck"></i> 
					<span class="title">Proveedores</span>
                    <span class="selected"></span>
					</a>
				</li>
                
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeCalidad']->value;?>
">
					<a href="ver-archivos-de-calidad">
					<i class="fa fa-folder-open"></i>
					<span class="title">Calidad</span>
                    <span class="selected"></span>
					</a>
				</li>
                
				
			</ul>
			<!-- END SIDEBAR MENU --><?php }} ?>