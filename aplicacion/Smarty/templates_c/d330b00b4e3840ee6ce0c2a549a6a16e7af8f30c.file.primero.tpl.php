<?php /* Smarty version Smarty-3.1.12, created on 2012-10-15 11:56:44
         compiled from ".\templates\primero.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2447507bd98cd127c6-99637820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd330b00b4e3840ee6ce0c2a549a6a16e7af8f30c' => 
    array (
      0 => '.\\templates\\primero.tpl',
      1 => 1350295000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2447507bd98cd127c6-99637820',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_507bd98ce54872_46034015',
  'variables' => 
  array (
    'titulo' => 0,
    'contenido' => 0,
    'logado' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507bd98ce54872_46034015')) {function content_507bd98ce54872_46034015($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>

<style type="text/css">

.contenido{
	margin-left:auto;
	margin-right:auto;
	margin-top:100px;
	color:#FFF;
	width:900px;
	background-color:#CCC;
}
</style>

</head>

<body>
<div class="contenido"><?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>
</div>

<?php if ($_smarty_tpl->tpl_vars['logado']->value){?>
	<p>Hola <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</p>
    <?php }else{ ?>
    <p>Hola desconocido</p>
<?php }?>

</body>
</html>
<?php }} ?>