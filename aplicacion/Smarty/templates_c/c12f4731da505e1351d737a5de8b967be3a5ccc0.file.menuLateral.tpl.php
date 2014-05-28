<?php /* Smarty version Smarty-3.1.12, created on 2014-04-24 18:24:30
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracionAcero/menuLateral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173172961152e3aa57ebd496-42393456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c12f4731da505e1351d737a5de8b967be3a5ccc0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracionAcero/menuLateral.tpl',
      1 => 1390771394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173172961152e3aa57ebd496-42393456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52e3aa57efdeb6_28857950',
  'variables' => 
  array (
    'activeInicio' => 0,
    'activeInformes' => 0,
    'activeProyecto' => 0,
    'activeClientes' => 0,
    'activeEmpleados' => 0,
    'activePedidos' => 0,
    'activeMaterial' => 0,
    'activeTrabajo' => 0,
    'activeGastos' => 0,
    'activeCalendario' => 0,
    'activeDistribuidores' => 0,
    'activeUsuarios' => 0,
    'activeCalidad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e3aa57efdeb6_28857950')) {function content_52e3aa57efdeb6_28857950($_smarty_tpl) {?><!-- BEGIN SIDEBAR MENU -->        
			<ul class="page-sidebar-menu">
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
                <li style="padding-bottom:10px;"></li>
				<li class="<?php echo $_smarty_tpl->tpl_vars['activeInicio']->value;?>
">
					<a href="inicio-administracion">
					<i class="fa fa-home"></i> 
					<span class="title">Inicio</span>
					<span class="selected"></span>
					</a>
				</li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeInformes']->value;?>
">
					<a href="#">
					<i class="fa fa-bar-chart-o"></i>
					<span class="title">Informes</span>
					<span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="informes-trabajo">Partes de trabajo</a>
						</li>
                        <li >
							<a href="informes-material">Partes de material</a>
						</li>
                        <li >
							<a href="informes-gastos">Partes de gastos</a>
						</li>
                        
                        
					</ul>
				</li>
				<li class="<?php echo $_smarty_tpl->tpl_vars['activeProyecto']->value;?>
">
					<a href="#">
					<i class="fa fa-suitcase"></i> 
					<span class="title">Proyectos</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="proyectos">Ver</a>
						</li>
                        <li >
							<a href="add-proyectos"><span class="badge badge-roundless badge-success"> + </span>Alta</a>
						</li>
                        
					</ul>
				</li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeClientes']->value;?>
">
					<a href="#">
					<i class="fa fa-user"></i> 
					<span class="title">Clientes</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="clientes">Ver</a>
						</li>
                        <li >
							<a href="add-clientes"><span class="badge badge-roundless badge-success"> + </span>Insertar</a>
						</li>
                        
					</ul>
				</li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeEmpleados']->value;?>
">
					<a href="#">
					<i class="fa fa-group"></i> 
					<span class="title">Empleados</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="empleados">Ver</a>
						</li>
                        <li >
							<a href="add-empleados"><span class="badge badge-roundless badge-success"> + </span>Insertar</a>
						</li>
                        <li >
							<a href="archivos-adjuntos-empleados"><span class="badge badge-roundless badge-success"> + </span>Adjuntar archivos</a>
						</li>
                        <li >
							<a href="readmitir-empleados"><span class="badge badge-roundless badge-success"> + </span>Readmitir</a>
						</li>
                        
					</ul>
				</li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activePedidos']->value;?>
">
					<a href="#">
					<i class="fa fa-briefcase"></i> 
					<span class="title">Parte de pedido</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="pedidos">Ver</a>
						</li>
                        <li >
							<a href="add-pedidos"><span class="badge badge-roundless badge-success"> + </span>Alta</a>
						</li>
                        
					</ul>
				</li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeMaterial']->value;?>
">
					<a href="#">
					<i class="fa fa-briefcase"></i> 
					<span class="title">Parte de material</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="partes-de-material">Ver</a>
						</li>
                        <li >
							<a href="alta-parte-de-material"><span class="badge badge-roundless badge-success"> + </span>Alta</a>
						</li>
                        <li >
							<a href="ver-codigo-material-insertar">Tarifas material</a>
						</li>
                        <li >
							<a href="codigo-material-insertar"><span class="badge badge-roundless badge-success"> + </span>Insertar Cod.material</a>
						</li>
					</ul>
				</li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeTrabajo']->value;?>
">
					<a href="#">
					<i class="fa fa-briefcase"></i> 
					<span class="title">Parte de trabajo</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="partes-de-trabajo">Ver</a>
						</li>
                        <li >
							<a href="alta-parte-de-trabajo"><span class="badge badge-roundless badge-success"> + </span>Alta</a>
						</li>
                        <li >
							<a href="tarifas">Tarifas trabajos</a>
						</li>
                        <li >
							<a href="add-tarifas"><span class="badge badge-roundless badge-success"> + </span>Insertar Cod.tarifa</a>
						</li>
                        
					</ul>
				</li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeGastos']->value;?>
">
					<a href="#">
					<i class="fa fa-briefcase"></i> 
					<span class="title">Justifi. gastos</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="gastos">Ver</a>
						</li>
                        <li >
							<a href="add-gastos"><span class="badge badge-roundless badge-success"> + </span>Alta</a>
						</li>
                        
					</ul>
				</li>
               
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeCalendario']->value;?>
">
					<a href="#">
					<i class="fa fa-calendar"></i> 
					<span class="title">Calendario</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
                    	<li >
							<a href="calendario">Ver calendario</a>
						</li>
                        <li >
							<a href="edit-calendario">Editar calendario</a>
						</li>
                        
					</ul>
				</li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeDistribuidores']->value;?>
">
					<a href="#">
					<i class="fa  fa-truck"></i> 
					<span class="title">Proveedores</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="distribuidores">Ver</a>
						</li>
                        <li >
							<a href="add-distribuidores"><span class="badge badge-roundless badge-success"> + </span>Alta de proveedor</a>
						</li>
                        
					</ul>
				</li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeUsuarios']->value;?>
">
					<a href="#">
					<i class="fa  fa-laptop"></i> 
					<span class="title">Usuarios aplicación</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="usuarios">Ver</a>
						</li>
                        <li >
							<a href="add-usuarios"><span class="badge badge-roundless badge-success"> + </span>Alta de usuarios</a>
						</li>
                        
					</ul>
				</li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeCalidad']->value;?>
">
					<a href="#">
					<i class="fa fa-folder-open"></i>
					<span class="title">Calidad</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="ver-calidad">Ver</a>
						</li>
                        <li >
							<a href="generar-carpetas">Generar carpetas</a>
						</li>
                        
                        <li >
							<a href="insertar-archivos">Insertar archivos</a>
						</li>
                        
					</ul>
				</li>
                
				
			</ul>
			<!-- END SIDEBAR MENU --><?php }} ?>