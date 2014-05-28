<?php /* Smarty version Smarty-3.1.12, created on 2012-10-16 11:15:43
         compiled from ".\templates\modificadores-03.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11658507d2415aa45a9-90854691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50f17a6a488f2ae98c0be4b6de034e42b385c329' => 
    array (
      0 => '.\\templates\\modificadores-03.tpl',
      1 => 1350378940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11658507d2415aa45a9-90854691',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_507d2415b5e4b9_92232496',
  'variables' => 
  array (
    'titulo' => 0,
    'sinopsis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507d2415b5e4b9_92232496')) {function content_507d2415b5e4b9_92232496($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\xampp\\htdocs\\wm2\\plantillasTemplates\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_spacify')) include 'D:\\xampp\\htdocs\\wm2\\plantillasTemplates\\libs\\plugins\\modifier.spacify.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>

<body>
<?php echo nl2br($_smarty_tpl->tpl_vars['sinopsis']->value);?>
 <!--salto de linea en los textos por cada enter sin hacer falta br-->

<p>Sinopsis: <?php echo smarty_modifier_spacify(smarty_modifier_truncate($_smarty_tpl->tpl_vars['sinopsis']->value));?>
</p><!--separar las palabras tabuladas-->

<p>Sinopsis: <?php echo preg_replace('!\s+!u', ' ',smarty_modifier_truncate($_smarty_tpl->tpl_vars['sinopsis']->value,100));?>
</p><!--quita saltos de linea y espacios excesivos-->


</body>
</html>
<?php }} ?>