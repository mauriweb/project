<?php /* Smarty version Smarty-3.1.12, created on 2012-11-08 11:23:38
         compiled from "D:\xampp\htdocs\proyecto\plantillas\tpl\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14080509b882a9a7b74-23992112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78f70a92170d96c0bba2035bb97aa9dcdf4ab3f5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\proyecto\\plantillas\\tpl\\contacto.tpl',
      1 => 1352365364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14080509b882a9a7b74-23992112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DOMINIO' => 0,
    'pagina' => 0,
    'categoria' => 0,
    'articulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509b882aa64ef0_62486444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509b882aa64ef0_62486444')) {function content_509b882aa64ef0_62486444($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<base href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
"/>
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
"/>
<!--la ruta canonical hay que poner la ruta para que google lo lea mejor y solo tenga una opcion en vez de varias rutas con www sin etc...Esto ES SOLO PARA BUSCADORES
ej: href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['articulo']->value;?>
 -->
<!--
<base href="http://www.dominio.com" />
-->
<link href="/plantillas/css/css.css" type="text/css" rel="stylesheet"/>
<!--
<link href="http://www.dominio.com/plantillas/css/css.css" type="text/css" rel="stylesheet"/>
-->
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h1>CONTACTO</h1>
<?php echo $_smarty_tpl->getSubTemplate ('pie.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>