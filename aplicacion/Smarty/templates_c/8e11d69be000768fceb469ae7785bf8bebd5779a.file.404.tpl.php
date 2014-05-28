<?php /* Smarty version Smarty-3.1.12, created on 2013-12-30 12:15:31
         compiled from "C:\xampp\htdocs\acero\plantillas\tpl\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1352852c155d3f09560-32391526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e11d69be000768fceb469ae7785bf8bebd5779a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acero\\plantillas\\tpl\\404.tpl',
      1 => 1386967870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1352852c155d3f09560-32391526',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52c155d4141e76_99240787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c155d4141e76_99240787')) {function content_52c155d4141e76_99240787($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("admin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <!-- =======================================
        
        FIN HEAD
        
        ======================================= -->	
        <link href="plantillas/assets/css/pages/error.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
    	
</head>

<body class="page-404-3">
	<div class="page-inner">
		<img src="plantillas/assets/img/pages/earth.jpg" class="img-responsive" alt="">
	</div>
	<div class="container error-404">
		<h1>Error 404</h1>
		<h2>Houston, tenemos un problema.</h2>
		<p>
			Actualmente, la página que está buscando no existe.
		</p>
		<p>
			<a href="login">Volver al Login</a>
			<br>
		</p>
	</div>
	
</body>
</body>
</html><?php }} ?>