<?php /* Smarty version Smarty-3.1.12, created on 2013-12-30 12:24:57
         compiled from "C:\xampp\htdocs\acero\plantillas\tpl\trabajador\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2116952c15809dffed8-33325763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe9dea32bd2c60db29d347339dfd12b7066356b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acero\\plantillas\\tpl\\trabajador\\head.tpl',
      1 => 1386692370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2116952c15809dffed8-33325763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'DOMINIO' => 0,
    'pagina' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52c15809ed69c8_08483297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c15809ed69c8_08483297')) {function content_52c15809ed69c8_08483297($_smarty_tpl) {?>	<meta charset="utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">
    <!--DOMINIO CANONICAL///////////////////////////////////////-->
    <base href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
"/>
    <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
"/>
	<!--FIN DOMINIO CANONICAL///////////////////////////////////////-->
	<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	<link href="plantillas/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
	<link href="plantillas/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
	<link href="plantillas/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL PLUGIN STYLES -->
	<!-- BEGIN THEME STYLES --> 
	<link href="plantillas/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="plantillas/assets/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
<?php }} ?>