<?php /* Smarty version Smarty-3.1.12, created on 2013-06-14 19:39:07
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebaUna/plantillas/tpl/awar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211288490251bb4fbfeccf45-92423360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0699e6ca1ba8ed289fbe4c29f3b98100439b934b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebaUna/plantillas/tpl/awar.tpl',
      1 => 1371231514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211288490251bb4fbfeccf45-92423360',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51bb4fc0006e23_11201059',
  'variables' => 
  array (
    'titulo' => 0,
    'DOMINIO' => 0,
    'categoria' => 0,
    'articulo' => 0,
    'newtitulo' => 0,
    'img' => 0,
    'v' => 0,
    'newtexto' => 0,
    'newempresa' => 0,
    'newpremio' => 0,
    'newlink' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bb4fc0006e23_11201059')) {function content_51bb4fc0006e23_11201059($_smarty_tpl) {?><!DOCTYPE html>
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

<section id="content" class="container clearfix">

	<article class="single-project">

		<header class="page-header">

			<h1 class="page-title align-left">AWARS</h1>
			
			<a href="awars" class="button no-bg medium align-right">
				All Awars <img src="plantillas/img/icon-grid.png" alt="" class="icon">
			</a>

			<hr />

			<h2 class="project-title"><?php echo $_smarty_tpl->tpl_vars['newtitulo']->value;?>
</h2>

			
		</header><!-- end .page-header -->

		<div id="main">
		
			<div class="image-gallery-slider">

				<ul>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['img']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<li>
					<img src="plantillas/img/awars/imgGran/<?php echo $_smarty_tpl->tpl_vars['v']->value['imagen'];?>
" alt="Altered">
					</li>
					<?php } ?>
				</ul>
				
			</div><!-- end .image-gallery-slider -->
	
    
		</div><!-- end #main -->

		<div id="sidebar">

			<h4><?php echo $_smarty_tpl->tpl_vars['newtitulo']->value;?>
</h4>

			<?php echo $_smarty_tpl->tpl_vars['newtexto']->value;?>


			<h4>Details</h4>

			<ul class="check">
				<li> <?php echo $_smarty_tpl->tpl_vars['newempresa']->value;?>
</li>
				<li><?php echo $_smarty_tpl->tpl_vars['newpremio']->value;?>
</li>
			</ul>

			<p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['newlink']->value;?>
" target="_blank" class="button">Awar</a>
			</p>

		</div><!-- end #sidebar -->
		
	</article><!-- end .single-project -->
	
</section><!-- end #content -->

<!-- =======================================

PIE

======================================= -->
<?php echo $_smarty_tpl->getSubTemplate ("pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
<!-- =======================================

FIN PIE

======================================= -->	
</body>
</html><?php }} ?>