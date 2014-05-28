<?php /* Smarty version Smarty-3.1.12, created on 2012-10-16 10:48:22
         compiled from ".\templates\modificadores-01.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22784507d1f568e75b4-41387981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd30ee2786e197c2aff77c6ff82b80777a3250d90' => 
    array (
      0 => '.\\templates\\modificadores-01.tpl',
      1 => 1350377296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22784507d1f568e75b4-41387981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_507d1f569b9897_95341182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507d1f569b9897_95341182')) {function content_507d1f569b9897_95341182($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'D:\\xampp\\htdocs\\wm2\\plantillasTemplates\\libs\\plugins\\modifier.escape.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>

<body>
<?php $_smarty_tpl->tpl_vars['email'] = new Smarty_variable('jose@anunciamascotas.com', null, 0);?>
<a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'hex');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'hexentity');?>

</a>
<br /><br /><br /><br />
<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'mail');?>


</body>
</html>
<?php }} ?>