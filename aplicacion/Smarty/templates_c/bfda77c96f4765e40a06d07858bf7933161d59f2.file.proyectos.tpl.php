<?php /* Smarty version Smarty-3.1.12, created on 2012-11-08 19:02:34
         compiled from "C:\xampp\htdocs\proyecto\plantillas\tpl\proyectos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21335509bf3ba35a989-22776008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfda77c96f4765e40a06d07858bf7933161d59f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\plantillas\\tpl\\proyectos.tpl',
      1 => 1352397739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21335509bf3ba35a989-22776008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'DOMINIO' => 0,
    'pagina' => 0,
    'categoria' => 0,
    'articulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509bf3ba3eb773_87959766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bf3ba3eb773_87959766')) {function content_509bf3ba3eb773_87959766($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
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
<!--<base href="http://www.dominio.com" />-->
<!--<link href="http://www.dominio.com/plantillas/css/css.css" type="text/css" rel="stylesheet"/>-->

<link rel="stylesheet" type="text/css" href="plantillas/css/css.css"/>


<style type="text/css">


</style>    

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="contenedor">
	<div style="margin-bottom:50px" class="horizontal-line"></div>
proyectos

</div>



<?php echo $_smarty_tpl->getSubTemplate ("pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>