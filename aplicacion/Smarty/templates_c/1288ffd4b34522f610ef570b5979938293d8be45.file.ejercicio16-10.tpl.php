<?php /* Smarty version Smarty-3.1.12, created on 2012-10-16 09:29:59
         compiled from ".\templates\ejercicio16-10.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31874507d0cb1aa2278-01448110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1288ffd4b34522f610ef570b5979938293d8be45' => 
    array (
      0 => '.\\templates\\ejercicio16-10.tpl',
      1 => 1350372598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31874507d0cb1aa2278-01448110',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_507d0cb1b72b10_12356717',
  'variables' => 
  array (
    'titulo' => 0,
    'logado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507d0cb1b72b10_12356717')) {function content_507d0cb1b72b10_12356717($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>

<style type="text/css">
#todo {
	width: 900px;
	margin-right: auto;
	margin-left: auto;
}
#todo #izquierda {
	float: left;
	width: 500px;
	background-color:#CCC;
	min-height:300px;
}
#todo #derecha {
	float: left;
	width: 300px;
	margin-left: 100px;
	background-color:#999;
	min-height:300px;
}
#todo #pie {
	width: 900px;
	background-color:#69F;
	min-height:100px;
	clear:both;
}
#login{
	width:160px;
}
</style>




</head>

<body>
<div id="todo">
<div id="izquierda"></div>
<div id="derecha">
<?php if ($_smarty_tpl->tpl_vars['logado']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("saludo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ("login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
</div>
<div id="pie"></div>
</div>
</body>
</html>
<?php }} ?>