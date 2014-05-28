<?php /* Smarty version Smarty-3.1.12, created on 2012-10-16 09:32:28
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25852507d0d3eb72ac5-50776556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1350372746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25852507d0d3eb72ac5-50776556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_507d0d3ebde307_34713821',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507d0d3ebde307_34713821')) {function content_507d0d3ebde307_34713821($_smarty_tpl) {?><div id="login">
	<form action="" method="post">
	<fieldset>
    	<legend>-LOGIN-</legend>
        <p>
        <label for="user">user</label>
        <input type="text" name="user" id="user"/>
         </p>
        <p>
        <label for="pass">pass</label>
        <input type="text" name="pass" id="pass"/>
        </p>
        <p>
        <input type="submit" name="button" id="button" value="enviar"/>
        </p>
        
    </fieldset>
    </form>
</div>
<?php }} ?>