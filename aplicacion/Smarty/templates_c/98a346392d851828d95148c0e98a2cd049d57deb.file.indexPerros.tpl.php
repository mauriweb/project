<?php /* Smarty version Smarty-3.1.12, created on 2012-10-17 09:53:55
         compiled from ".\templates\indexPerros.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5253507e59c67763e3-15507839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98a346392d851828d95148c0e98a2cd049d57deb' => 
    array (
      0 => '.\\templates\\indexPerros.tpl',
      1 => 1350460432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5253507e59c67763e3-15507839',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_507e59c685e9a1_42060923',
  'variables' => 
  array (
    'datos' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507e59c685e9a1_42060923')) {function content_507e59c685e9a1_42060923($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\wm2\\plantillasTemplates\\libs\\plugins\\function.cycle.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<div>
<table>
<tr>
	<td>Nombre:</td>
    <td>Edad:</td>
    <td>Imagen:</td>
</tr>

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<tr style="background-color:<?php echo smarty_function_cycle(array('values'=>'#CCC, #69F'),$_smarty_tpl);?>
">
    	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['peso'];?>
</td>
        <td>..images/imagenesRaza/<?php echo $_smarty_tpl->tpl_vars['row']->value['rutaImagenRaza'];?>
.jpg</td>
    </tr>
<?php } ?>
</table>

</div>
</body>
</html>
<?php }} ?>