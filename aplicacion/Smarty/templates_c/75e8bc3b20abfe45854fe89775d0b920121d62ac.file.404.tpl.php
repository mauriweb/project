<?php /* Smarty version Smarty-3.1.12, created on 2013-12-13 20:51:11
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:220161955529cb350da05a8-58493101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75e8bc3b20abfe45854fe89775d0b920121d62ac' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/404.tpl',
      1 => 1386964270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220161955529cb350da05a8-58493101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_529cb350e017a2_70752907',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529cb350e017a2_70752907')) {function content_529cb350e017a2_70752907($_smarty_tpl) {?><!DOCTYPE html>
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