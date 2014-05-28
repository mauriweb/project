<?php /* Smarty version Smarty-3.1.12, created on 2013-06-20 11:48:59
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebaUna/plantillas/tpl/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60953881151b0f675eb2c02-10359356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '086d441981ecf471fa0fbb141dcf67f3152d0823' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebaUna/plantillas/tpl/contact.tpl',
      1 => 1371717235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60953881151b0f675eb2c02-10359356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51b0f675f12dd4_53164097',
  'variables' => 
  array (
    'titulo' => 0,
    'DOMINIO' => 0,
    'categoria' => 0,
    'articulo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b0f675f12dd4_53164097')) {function content_51b0f675f12dd4_53164097($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>

<meta name="description" content="HUGOTEJADASTUDIO es un estudio creativo dedicado al desarrollo de producto industrial, gráfico e interiorismo. Buscando la funcionalidad del objeto y su valor estético sin olvidar la calidad del producto y lo más importante, que satisfaga las necesidades del consumidor final." />
<meta name="keywords" content="estudio de diseño industrial" />       
<link rel="icon" type="image/png" href="plantillas/img/favicon.png" />

<base href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
"/>
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
"/>
<!--la ruta canonical hay que poner la ruta para que google lo lea mejor y solo tenga una opcion en vez de varias rutas con www sin etc...Esto ES SOLO PARA BUSCADORES
ej: href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['articulo']->value;?>
 -->
<!--<base href="http://www.dominio.com" />-->
<!--<link href="http://www.dominio.com/plantillas/css/css.css" type="text/css" rel="stylesheet"/>-->


<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->

	
	
	
	<!--[if !lte IE 6]><!-->
		<link rel="stylesheet" href="plantillas/css/style.css" media="screen" />

		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic" />
		
		<link rel="stylesheet" href="plantillas/css/fancybox.min.css" media="screen" />

		<link rel="stylesheet" href="plantillas/css/video-js.min.css" media="screen" />

		<link rel="stylesheet" href="plantillas/css/audioplayerv1.min.css" media="screen" />
	<!--<![endif]-->

	<!--[if lte IE 6]>
		<link rel="stylesheet" href="//universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
	<![endif]-->

	<!-- HTML5 Shiv + detect touch events -->
	<script src="plantillas/js/modernizr.custom.js"></script>

	<!-- HTML5 video player -->
	<script src="plantillas/js/video.min.js"></script>
	<script>_V_.options.flash.swf = 'plantillas/js/video-js.swf';</script>
</head>
<body>
<!-- =======================================

MENU

======================================= -->
<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
<!-- =======================================

FIN MENU

======================================= -->	
<section id="content" class="clearfix">

	<div class="container clearfix">

		<header class="page-header">
		
			<h1 class="page-title">VALENCIA (SPAIN)</h1>
			
		</header><!-- end .page-header -->

	</div><!-- end .container -->
<section id="map">
		<p class="container">Something went wrong... Try to enable your JavaScript!</p>
	</section><!-- end #map -->

	<div class="container clearfix">
		
		<div class="one-fourth">

			<h3>Hugotejadastudio</h3>

			<p>C/Entrada a la casa el llop nº 6 46026<br/>
			Polígono Horno de Alcedo,<br/>
 			Valencia - ( Spain )<br/>
            </p>

				<p>tel. (+34) 610905946<br/>
				tel. (+34) 963752960<br/>
				Email: info@hugotejadastudio.com<br/>
				Web: hugotejadastudio.com</p>
			
		</div><!-- end .one-fourth -->
		
		<div class="three-fourth last">

			<h3>Contact us</h3>

			<form action="php/contact-send.php" method="post" class="contact-form">
			
				<p class="input-block">
					<label for="contact-name"><strong>Name</strong> (required)</label>
					<input type="text" name="name" value="" id="contact-name" required>
				</p>

				<p class="input-block">
					<label for="contact-email"><strong>Email</strong> (required)</label>
					<input type="email" name="email" value="" id="contact-email" required>
				</p>
				
				<p class="input-block">
					<label for="contact-subject"><strong>Subject</strong></label>
					<input type="text" name="subject" value="" id="contact-subject">
				</p>

				<p class="textarea-block">
					<label for="contact-message"><strong>Your Message</strong> (required)</label>
					<textarea name="message" id="contact-message" cols="88" rows="6" required></textarea>
				</p>
			
				<div class="hidden">
					<label for="contact-spam-check">Do not fill out this field:</label>
					<input name="spam-check" type="text" value="" id="contact-spam-check" />
				</div>

				<input type="submit" value="Submit">

				<div class="clear"></div>

			</form>

		</div><!-- end .three-fourth.last -->

	</div><!-- end .container -->
		
</section><!-- end #content -->



<!-- end #content -->
<!-- =======================================

PIE

======================================= -->
<?php echo $_smarty_tpl->getSubTemplate ("pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
<!-- =======================================

FIN PIE

======================================= -->	
</body>
</html><?php }} ?>