<?php /* Smarty version Smarty-3.1.12, created on 2012-10-16 10:21:51
         compiled from ".\templates\foreach.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21736507d137ed299e5-02026370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6e63c2d5f0a53590fcf89a588526e7daf6443ac' => 
    array (
      0 => '.\\templates\\foreach.tpl',
      1 => 1350375710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21736507d137ed299e5-02026370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_507d137edcc345_27122511',
  'variables' => 
  array (
    'titulo' => 0,
    'persona' => 0,
    'v' => 0,
    'k' => 0,
    'personas' => 0,
    'b' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507d137edcc345_27122511')) {function content_507d137edcc345_27122511($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'D:\\xampp\\htdocs\\wm2\\plantillasTemplates\\libs\\plugins\\function.counter.php';
if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\wm2\\plantillasTemplates\\libs\\plugins\\function.cycle.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>

<body>

<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['persona']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<br />
<?php } ?>
<br />
<br />
<br />
<br />
<br />

<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['persona']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['v']->value['nombre'];?>
 edad: <?php echo $_smarty_tpl->tpl_vars['v']->value['edad'];?>
<br />
<?php } ?>
<br />
<br />
<br />
<br />
<br />
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['personas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<br />
<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
	<b>No hay ninguna persona.</b>
<?php } ?>
<br />
<br />
<br />
<br />
<br />
<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['persona']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
	<p>Item numero <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
. <?php echo $_smarty_tpl->tpl_vars['b']->value['nombre'];?>
</p>
<?php } ?>
<br />
<br />
<br />
<br />
<br />
<table>
<tr>
	<td>Nombre:</td>
    <td>Edad:</td>
</tr>

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['persona']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<tr style="background-color:<?php echo smarty_function_cycle(array('values'=>'#CCC, #69F'),$_smarty_tpl);?>
">
    	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['edad'];?>
</td>
    </tr>
<?php } ?>
</table>
</body>
</html>
<?php }} ?>