<?php /* Smarty version Smarty-3.1.12, created on 2013-06-19 20:04:50
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebaUna/plantillas/tpl/press.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208835338051b1ade317a6d0-68849144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d420703812e6dd47d15da79424535d5bb4f1af1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebaUna/plantillas/tpl/press.tpl',
      1 => 1371665087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208835338051b1ade317a6d0-68849144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51b1ade31d7378_05166897',
  'variables' => 
  array (
    'titulo' => 0,
    'DOMINIO' => 0,
    'categoria' => 0,
    'articulo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b1ade31d7378_05166897')) {function content_51b1ade31d7378_05166897($_smarty_tpl) {?><!DOCTYPE html>
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



		<h1 class="page-title align-left">Press</h1>

		<hr />

    
	<div class="team-member one-fourth" style="height:430px;">

		<img src="plantillas/img/press/3.png" alt="" class="photo">

		<div class="content">

			<h4 class="name">ROMEO & JULIET</h4>

			<span class="job-title">Hugo Tejada</span>

			<p>MAYO 2013</p>
			
		</div><!-- end .content -->
	
		
		
	</div><!-- end .team-member.one-fourth -->
    
	<div class="team-member one-fourth" style="height:430px;">

		<img src="plantillas/img/press/2.png" alt="" class="photo">

		<div class="content">

			<h4 class="name">TOWER DISEÑO INTERIOR Nº241</h4>

			<span class="job-title">Hugo Tejada</span>

			<p>FEBRERO 2013</p>
			
		</div><!-- end .content -->
	
		
		
	</div><!-- end .team-member.one-fourth -->
	
	<div class="team-member one-fourth" style="height:430px;">

		<img src="plantillas/img/press/4.png" alt="" class="photo">

		<div class="content">

			<h4 class="name">TOWER ARQUITECTURA Y DISEÑO Nº144</h4>

			<span class="job-title">Hugo Tejada</span>

			<p>ENERO 2013</p>
			
		</div><!-- end .content -->
	
		
		
	</div><!-- end .team-member.one-fourth -->
	
	
	
	<div class="team-member one-fourth last" style="height:430px;">

		<img src="plantillas/img/press/8.png" alt="" class="photo">

		<div class="content">

			<h4 class="name">PINGXI ILUMINACION PROFESIONAL Nº115</h4>

			<span class="job-title">Hugo Tejada</span>

			<p>DICIEMBRE 2012</p>
			
		</div><!-- end .content -->
		
	</div><!-- end .team-member.one-fourth.last -->
    
    
    
    
    <div class="team-member one-fourth" style="height:430px;">

		<img src="plantillas/img/press/1.png" alt="" class="photo">

		<div class="content">

			<h4 class="name">ROSETÓN ILUMINACION PROFESIONAL</h4>

			<span class="job-title">Hugo Tejada</span>

			<p>JULIO 2012</p>
			
		</div><!-- end .content -->
	
		
		
	</div><!-- end .team-member.one-fourth -->
	
	<div class="team-member one-fourth" style="height:430px;">

		<img src="plantillas/img/press/7.png" alt="" class="photo">

		<div class="content">

			<h4 class="name">PÉTALO PROYECTO CONTRACT</h4>

			<span class="job-title">Hugo Tejada</span>

			<p>2012</p>
			
		</div><!-- end .content -->
	
		
		
	</div><!-- end .team-member.one-fourth -->
	
	<div class="team-member one-fourth" style="height:430px;">

		<img src="plantillas/img/press/6.png" alt="" class="photo">

		<div class="content">

			<h4 class="name">PÉTALO HOGARES nº516</h4>

			<span class="job-title">Hugo Tejada</span>

			<p>2012</p>
			
		</div><!-- end .content -->
	
		
		
	</div><!-- end .team-member.one-fourth -->
	
	<div class="team-member one-fourth last" style="height:430px;">

		<img src="plantillas/img/press/9.png" alt="" class="photo">

		<div class="content">

			<h4 class="name">AERO OFICINAS nº294</h4>

			<span class="job-title">Hugo Tejada</span>

			<p>FEBRERO 2012</p>
			
		</div><!-- end .content -->
		
	</div><!-- end .team-member.one-fourth.last -->
    
    
    
    <div class="team-member one-fourth" style="height:430px;">

		<img src="plantillas/img/press/5.png" alt="" class="photo">

		<div class="content">

			<h4 class="name">AERO REZODESIGN</h4>

			<span class="job-title">Hugo Tejada</span>

			<p>ENERO 2012</p>
			
		</div><!-- end .content -->
	
		
		
	</div><!-- end .team-member.one-fourth -->
	
	<div class="team-member one-fourth" style="height:430px;">

		<img src="plantillas/img/press/11-aero-arte-regalo.png" alt="" class="photo">

		<div class="content">

			<h4 class="name">AERO SPAINCONTRACT</h4>

			<span class="job-title">Hugo Tejada</span>

			<p>2011</p>
			
		</div><!-- end .content -->
	
		
		
	</div><!-- end .team-member.one-fourth -->
	
	<div class="team-member one-fourth" style="height:430px;">

		<img src="plantillas/img/press/11-aero-spaincontr.png" alt="" class="photo">

		<div class="content">

			<h4 class="name">AERO ARTE REGALO</h4>

			<span class="job-title">Hugo Tejada</span>

			<p>2011</p>
			
		</div><!-- end .content -->
	
		
		
	</div><!-- end .team-member.one-fourth -->
	
	<!--<div class="team-member one-fourth last" style="height:430px;">

		<img src="plantillas/img/press/8.png" alt="" class="photo">

		<div class="content">

			<h4 class="name">PINGXI ILUMINACION PROFESIONAL Nº115 DICIEMBRE</h4>

			<span class="job-title">Hugo Tejada</span>

			<p>2012</p>
			
		</div>
		
	</div> end .team-member.one-fourth.last -->
    
    
    
	
	
	
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