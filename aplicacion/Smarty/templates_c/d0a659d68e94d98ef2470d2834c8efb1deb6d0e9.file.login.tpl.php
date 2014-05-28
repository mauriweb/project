<?php /* Smarty version Smarty-3.1.12, created on 2014-04-30 13:28:10
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:833893743529dc65f9fbc79-96450973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0a659d68e94d98ef2470d2834c8efb1deb6d0e9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/login.tpl',
      1 => 1398438653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '833893743529dc65f9fbc79-96450973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_529dc65fa4eee3_56392248',
  'variables' => 
  array (
    'titulo' => 0,
    'DOMINIO' => 0,
    'pagina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529dc65fa4eee3_56392248')) {function content_529dc65fa4eee3_56392248($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="es">

<head>
        
    <meta charset="utf-8" />
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
	<!-- BEGIN PAGE LEVEL STYLES --> 
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/select2/select2_metro.css" />
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN THEME STYLES --> 
	<link href="plantillas/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="plantillas/assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
	<link href="plantillas/assets/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />

	<style type="text/css">
	.radio input[type="radio"], .radio-inline input[type="radio"], .checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"] {
    float: left;
    margin-left: 0px;
	}
    </style>
        
</head>

<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
		
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
    	<div style="text-align:center;">
        <img src="imagenes/logo-big.png" alt="" /> 
		</div>
        <!-- BEGIN LOGIN FORM -->
		<form class="login-form" action="login" method="post">
			<h3 class="form-title">Ingrese a su cuenta</h3>
			<div class="alert alert-danger display-hide">
				<button class="close" data-close="alert"></button>
				<span><strong>Error!!</strong> Introduzca cualquier nombre de usuario y contraseña.</span>
			</div>
			<div class="form-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Usuario</label>
				<div class="input-icon">
					<i class="fa fa-user"></i>
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Usuario" name="username"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="input-icon">
					<i class="fa fa-lock"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
				</div>
			</div>
			<div class="form-actions">
				<label class="checkbox">
				<input type="checkbox" name="remember" value="1"/> Recordarme
				</label>
				<button type="submit" class="btn blue pull-right">
				Entrar <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
			<div class="forget-password">
				<h4>¿Olvidó su contraseña?</h4>
				<p>
					No se preocupe, haga clic  <a href="javascript:;"  id="forget-password">aquí</a>
					para restablecer tu contraseña.
				</p>
			</div>
		</form>
		<!-- END LOGIN FORM -->        
		<!-- BEGIN FORGOT PASSWORD FORM -->
		<form class="forget-form" action="index.html" method="post">
			<h3 >¿Olvido su contraseña?</h3>
			<p>Introduzca su dirección de correo electrónico a continuación para restablecer la contraseña.</p>
			<div class="form-group">
				<div class="input-icon">
					<i class="fa fa-envelope"></i>
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" />
				</div>
			</div>
			<div class="form-actions">
				<button type="button" id="back-btn" class="btn">
				<i class="m-icon-swapleft"></i> Atras
				</button>
				<button type="submit" class="btn blue pull-right">
				Enviar <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
		</form>
		<!-- END FORGOT PASSWORD FORM -->
	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		2014 © Acero Estudio.
	</div>
	<!-- END COPYRIGHT -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<!--[if lt IE 9]>
	<script src="plantillas/assets/plugins/respond.min.js"></script>
	<script src="plantillas/assets/plugins/excanvas.min.js"></script> 
	<![endif]-->   
	<script src="plantillas/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="plantillas/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<script src="plantillas/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="plantillas/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<script src="plantillas/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="plantillas/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="plantillas/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="plantillas/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="plantillas/assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
	<script src="plantillas/assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="plantillas/assets/plugins/select2/select2.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="plantillas/assets/scripts/app.js" type="text/javascript"></script>
	<script src="plantillas/assets/scripts/login-soft.js" type="text/javascript"></script>      
	<!-- END PAGE LEVEL SCRIPTS --> 
	<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
</html>
<?php }} ?>