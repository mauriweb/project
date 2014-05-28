<?php /* Smarty version Smarty-3.1.12, created on 2014-01-30 15:30:13
         compiled from "C:\xampp\htdocs\acero\plantillas\tpl\admin\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1662052c14777527359-40040629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '168e8389f8c86727918b2773504cc151be7eec0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acero\\plantillas\\tpl\\admin\\head.tpl',
      1 => 1389898838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1662052c14777527359-40040629',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52c147775553d1_23087252',
  'variables' => 
  array (
    'titulo' => 0,
    'DOMINIO' => 0,
    'pagina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c147775553d1_23087252')) {function content_52c147775553d1_23087252($_smarty_tpl) {?>	<meta charset="utf-8" />
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
/<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
"/>
	<!--FIN DOMINIO CANONICAL///////////////////////////////////////-->
	<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	<link href="plantillas/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
    
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