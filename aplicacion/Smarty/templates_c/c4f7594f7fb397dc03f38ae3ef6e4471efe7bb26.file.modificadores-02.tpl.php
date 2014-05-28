<?php /* Smarty version Smarty-3.1.12, created on 2012-10-16 11:01:00
         compiled from ".\templates\modificadores-02.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5433507d21878e0b72-67932120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4f7594f7fb397dc03f38ae3ef6e4471efe7bb26' => 
    array (
      0 => '.\\templates\\modificadores-02.tpl',
      1 => 1350378059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5433507d21878e0b72-67932120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_507d2187a028b9_26333601',
  'variables' => 
  array (
    'titulo' => 0,
    'nombre' => 0,
    'sinopsis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507d2187a028b9_26333601')) {function content_507d2187a028b9_26333601($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\xampp\\htdocs\\wm2\\plantillasTemplates\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_capitalize')) include 'D:\\xampp\\htdocs\\wm2\\plantillasTemplates\\libs\\plugins\\modifier.capitalize.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>

<body>
<p>Titulo: <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['nombre']->value, 'UTF-8');?>
</p>
<p>Titulo: <?php echo mb_strtolower($_smarty_tpl->tpl_vars['nombre']->value, 'UTF-8');?>
</p>
<p>Sinopsis: <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['sinopsis']->value,50);?>
</p><!--//te corta a 50 caracteres IMPORTANTE//-->
<p>Sinopsis: <?php echo smarty_modifier_capitalize(smarty_modifier_truncate($_smarty_tpl->tpl_vars['sinopsis']->value));?>
</p>
<p>Titulo: <?php echo ($_smarty_tpl->tpl_vars['nombre']->value).(' ya no estudia aqui');?>
</p>
<p>Titulo: <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 ya no estudia aqui</p>
<p>Sinopsis: <?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['sinopsis']->value, $tmp);?>
</p>
<p>Sinopsis: <?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['sinopsis']->value, $tmp)+1);?>
</p>
<p>Sinopsis: <?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['sinopsis']->value, $tmp);?>
</p>
<p>Sinopsis: <?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['sinopsis']->value, $tmp);?>
</p>


</body>
</html>
<?php }} ?>