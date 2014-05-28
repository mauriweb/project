<?php /* Smarty version Smarty-3.1.12, created on 2014-01-30 19:23:03
         compiled from "C:\xampp\htdocs\acero\plantillas\tpl\clienteVisado\menuLateral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:767752ea9887c0f4f1-16065785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9084bae7ff362b6646ff33c4159b648664fdec0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acero\\plantillas\\tpl\\clienteVisado\\menuLateral.tpl',
      1 => 1390778448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '767752ea9887c0f4f1-16065785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'activeInformes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52ea9887c29da2_95534439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea9887c29da2_95534439')) {function content_52ea9887c29da2_95534439($_smarty_tpl) {?><!-- BEGIN SIDEBAR MENU -->        
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