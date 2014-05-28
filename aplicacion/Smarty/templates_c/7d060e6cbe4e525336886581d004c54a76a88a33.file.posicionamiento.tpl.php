<?php /* Smarty version Smarty-3.1.12, created on 2013-04-30 19:11:53
         compiled from "/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/noticias/posicionamiento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1493648024517ffb59d102b9-45501761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d060e6cbe4e525336886581d004c54a76a88a33' => 
    array (
      0 => '/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/noticias/posicionamiento.tpl',
      1 => 1367341779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1493648024517ffb59d102b9-45501761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'articulo' => 0,
    'DOMINIO' => 0,
    'pagina' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_517ffb59d73b60_70002790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517ffb59d73b60_70002790')) {function content_517ffb59d73b60_70002790($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>

<meta name="description" content="Estudio de diseño, gráfico, programación y sitios web." />
<meta name="keywords" content="web, pagina web barata, diseño web, tienda online" />

<!--FACEBOOK////////////////////////////////////////////////////-->
	<meta property="og:tag name" content="tag value"/> 
	<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
" /><!--/////////////////////////////PONER TITULO-->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="	http://www.jnacher.com/noticias/<?php echo $_smarty_tpl->tpl_vars['articulo']->value;?>
/" />
	<meta property="og:image" content="http://www.jnacher.com/imagenes/noticias/responsive-web-design.jpg" /><!--/////////////////////////////IMAGEN FACEBOOK-->
	<meta property="og:site_name" content="jnacher estudio de diseño" />
	<meta property="fb:admins" content="594435717" />
          
<!--FACEBOOK////////////////////////////////////////////////////-->     
<link rel="icon" type="image/png" href="plantillas/img/favicon.png" />

<base href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
"/>
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['articulo']->value;?>
"/>
<!--la ruta canonical hay que poner la ruta para que google lo lea mejor y solo tenga una opcion en vez de varias rutas con www sin etc...Esto ES SOLO PARA BUSCADORES
ej: href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['articulo']->value;?>
 -->
<!--<base href="http://www.<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
.com" />-->

<link rel="stylesheet" media="all" href="plantillas/css/css.css"/>

<!--//tipografias-->

<link href='http://fonts.googleapis.com/css?family=Anton|Fjalla+One|Oleo+Script+Swash+Caps:700,400|Amaranth:400,700' rel='stylesheet' type='text/css'>
<!--//tipografias-->

<script type="text/javascript" src="/plantillas/js/jquery-1.8.2.min.js"></script>



<!--//////FACEBOOK/////////////-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--//////FACEBOOK/////////////-->



<style type="text/css">
.leer a{
	color:#FFFFFF;
	
}
.leer2 a {
	color:#FFFFFF;
	
}
.leer:hover {
    background-color: #0197D2;
}
.leer2:hover {
    background-color: #3B5998;
}
</style>
<script type="text/javascript" src="plantillas/js/parallax/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="plantillas/js/parallax/jquery.scrollTo-1.4.2-min.js"></script>


<script type="text/javascript">




$(document).ready(function(){
	



/////////////// REDES SOCIALES 

	
		$(".general a").hover(function(){
			$(this).animate({opacity: "0.6"}, "slow");
			return false;
		}, function(){
			$(this).animate({opacity: "1"}, "fast");
			return false;
		});

		
		
}); 
</script>  


</head>

<body>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		MENU CABECERA
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 

		<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		CONTENEDOR UNO
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////-->
    
<div class="contenedorUno" id="third">
	<div class="contenedor">
    
		
        
        <div class="textoUltimosProyectos">
           	
            <br />
            <div class="fb-like" data-href="http://www.jnacher.com/noticias/<?php echo $_smarty_tpl->tpl_vars['articulo']->value;?>
" data-send="false" data-layout="box_count" data-width="450" data-show-faces="true"></div>
            <br />
            <h2 style="padding-left:20px; color:#0197D2;"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
            <span class="separador"></span>            
            
            <p>
            El posicionamiento de sitios web o la optimización para los motores de búsqueda (SEO) se refiere a un proceso que se lleva a cabo en un sitio web con el objetivo de tener ese sitio situado tan arriba como sea posible en los motores de búsqueda (GOOGLE principalmente) para determinadas palabras clave o frases clave.<br /><br />
El proceso de un buen posionamiento empieza con estudiar  el mercado del sitio web que está siendo optimizado con el objetivo de determinar qué palabras o frases clave son utilizados por los sitios web de la competencia. También es importante intentar determinar qué palabras y frases clave utilizará el público en general cuando busque ese tipo de web .<br /><br />
Una vez que se ha hecho esto, el sitio web se desarrolla teniendo presente las palabras y frases clave que fueron determinados en el estudio de mercado, esto se hace mediante unos metadatos más títulos de las paginas, h1 h2 y demás etiquetas.<br /><br />
Si no se hace un buen uso del SEO algunos buscadores como Google penaliza este tipo de prácticas, con lo que no nos interesa nada.<br /><br />
Cuando una página está acabada y está en la red , lleva generalmente cerca de cuatro a seis semanas el que se estabilice en los resultados de las búsquedas, por eso de su importancia en cuando empiezas una web subir algunos archivos para que ayuden al posicionamiento. Jnacher estudio de diseño web & grafico, el primer trabajo que se hace es esto para que su web este cuando antes lo mejor posicionada posiblemente con un SEO natural.<br /><br />
Un plan de optimización para los motores de búsqueda correctamente desarrollado es aquél que implica más que el código en la página web, y en algunos casos alcanzar los primeros puestos en los resultados del SEO puede llevar algunos meses de trabajo duro.<br /><br />
Los sitios que requieren SEO intenso son generalmente sitios de e-comercio y otros mercados competitivos como hoteles y agencias inmobiliarias. Este tipo de sitios puede necesitar ajustes semanales o mensuales de su código y otro tipo de trabajo que puede implicar intervalos de trabajo desde diarios a semanales.<br /><br />
Para los sitios en áreas menos competitivas es suficiente con una estrategia de SEO bien pensada incorporada en el sitio desde el principio. Esto, junto con algunas otras tácticas comunes de SEO, llevará al sitio a la cima de su mercado en los motores de búsqueda sin el intenso trabajo semanal o diario necesario para los mercados más competitivos.<br /><br />
En Jnacher nos gustan los retos, con lo que a parte de un posicionamiento natural para todas nuestras webs también hacemos posicionamiento duros y costosos pero el buen trabajo tiene sus frutos.<br />

		  	</p>
            
            
           
            
            
      </div>
        <br />
        <span class="separador"></span>     
        <a href="noticias"><div class="leer2"><<<<<<<<< atras <<<<<<<<< </div></a>
        
        
        
  </div>
</div>



<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		PIE DE PAGINA
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 

		<?php echo $_smarty_tpl->getSubTemplate ("pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>