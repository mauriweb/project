<?php /* Smarty version Smarty-3.1.12, created on 2012-10-16 09:28:49
         compiled from ".\templates\saludo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20371507d0cb1b97b39-59912634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '807d03b49de9efe3713915e315e8641e1a7fbe63' => 
    array (
      0 => '.\\templates\\saludo.tpl',
      1 => 1350372148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20371507d0cb1b97b39-59912634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_507d0cb1baba95_29523922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507d0cb1baba95_29523922')) {function content_507d0cb1baba95_29523922($_smarty_tpl) {?><div id="login">
	<p>Hola <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</p>
</div><?php }} ?>