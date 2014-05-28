<?php /* Smarty version Smarty-3.1.12, created on 2013-12-16 14:19:47
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracion/menuLateral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193400493052aefd2e205460-27324849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd28bf560a7b21c6deb5d6b6c510c9198138eade4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracion/menuLateral.tpl',
      1 => 1387199987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193400493052aefd2e205460-27324849',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52aefd2e237d83_29414471',
  'variables' => 
  array (
    'activeInicio' => 0,
    'activePartes' => 0,
    'activeDistribuidores' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52aefd2e237d83_29414471')) {function content_52aefd2e237d83_29414471($_smarty_tpl) {?><!-- BEGIN SIDEBAR MENU -->        
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
				
                
                <li class="<?php echo $_smarty_tpl->tpl_vars['activePartes']->value;?>
">
					<a href="#">
					<i class="fa fa-archive"></i> 
					<span class="title">Partes</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="partes-de-material">Partes material</a>
						</li>
                        <li >
							<a href="partes-de-trabajo">Partes de trabajo</a>
						</li>
                        <li >
							<a href="alta-parte-de-material"><span class="badge badge-roundless badge-success"> + </span>Alta parte material</a>
						</li>
                         <li >
							<a href="alta-parte-de-trabajo"><span class="badge badge-roundless badge-success"> + </span>Alta parte trabajo</a>
						</li>
                        <li >
							<a href="ver-codigo-material-insertar">Ver códigos de material</a>
						</li>
                        <li >
							<a href="codigo-material-insertar"><span class="badge badge-roundless badge-success"> + </span>Insertar Cod.material</a>
						</li>
					</ul>
				</li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeDistribuidores']->value;?>
">
					<a href="#">
					<i class="fa  fa-truck"></i> 
					<span class="title">Distribuidores</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="distribuidores">Ver todos</a>
						</li>
                        <li >
							<a href="add-distribuidores"><span class="badge badge-roundless badge-success"> + </span>Alta de distribuidores</a>
						</li>
                        
					</ul>
				</li>
				
			</ul>
			<!-- END SIDEBAR MENU --><?php }} ?>