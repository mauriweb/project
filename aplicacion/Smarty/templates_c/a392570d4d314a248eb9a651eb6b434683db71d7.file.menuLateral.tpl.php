<?php /* Smarty version Smarty-3.1.12, created on 2014-01-27 00:20:52
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/clienteVisado/menuLateral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189283582852ab6a19419909-42187613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a392570d4d314a248eb9a651eb6b434683db71d7' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/clienteVisado/menuLateral.tpl',
      1 => 1390778448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189283582852ab6a19419909-42187613',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52ab6a1944ac41_95910163',
  'variables' => 
  array (
    'activeInformes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ab6a1944ac41_95910163')) {function content_52ab6a1944ac41_95910163($_smarty_tpl) {?><!-- BEGIN SIDEBAR MENU -->        
			<ul class="page-sidebar-menu">
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
                <li style="padding-bottom:10px;"></li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeInformes']->value;?>
">
					<a href="#">
					<i class="fa fa-bar-chart-o"></i>
					<span class="title">Informes</span>
					<span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="informes-trabajo-cliente">Partes de trabajo</a>
						</li>
                        <li >
							<a href="informes-material-cliente">Partes de material</a>
						</li>
                        <li >
							<a href="informes-gastos-cliente">Partes de gastos</a>
						</li>
                        
                        
					</ul>
				</li>
                
                
				
			</ul>
			<!-- END SIDEBAR MENU --><?php }} ?>