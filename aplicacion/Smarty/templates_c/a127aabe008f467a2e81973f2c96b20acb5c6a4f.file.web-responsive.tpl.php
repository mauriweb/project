<?php /* Smarty version Smarty-3.1.12, created on 2013-04-19 22:48:32
         compiled from "/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/ingles/noticias/web-responsive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1351667735514c5386586267-24534190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a127aabe008f467a2e81973f2c96b20acb5c6a4f' => 
    array (
      0 => '/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/ingles/noticias/web-responsive.tpl',
      1 => 1366280140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1351667735514c5386586267-24534190',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_514c53868f6df7_43590041',
  'variables' => 
  array (
    'titulo' => 0,
    'articulo' => 0,
    'DOMINIO' => 0,
    'pagina' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514c53868f6df7_43590041')) {function content_514c53868f6df7_43590041($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
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

		<?php echo $_smarty_tpl->getSubTemplate ("ingles/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		CONTENEDOR UNO
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////-->
    
<div class="contenedorUno" id="third">
	<div class="contenedor">
    
		
        
        <div class="textoUltimosProyectos">
           	<div class="imagenCabeceraInfo"><img src="plantillas/img/responsive.png" width="100%" alt="diseño web" /></div>
            <br />
            <div class="fb-like" data-href="http://www.jnacher.com/noticias/<?php echo $_smarty_tpl->tpl_vars['articulo']->value;?>
" data-send="false" data-layout="box_count" data-width="450" data-show-faces="true"></div>
            <br />
            <h2 style="padding-left:20px; color:#0197D2;"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
            <span class="separador"></span>            
            
            <p>Hasta hace bien poco las conexiones desde dispositivos móviles a páginas web no eran relevantes, pero la proliferación de los smartphones y tablets a nivel mundial -y también en España-, ha sido tan desmesurada, que recientes estudios de Morgan Stantey, vaticinan que en el 2012 las conexiones a páginas web desde estos dispositivos superarán por primera vez en la historia a las de escritorio.
            </p><br />
			<p>Con este contexto, desarrollar una acción para Internet que no pueda verse óptimamente en algún dispositivo supone dejar fuera a gran parte del público objetivo.
            </p><br />
			<p>Por todo ello, el diseño web para móviles se ha convertido en nuestra obsesión y en la base de nuestro desarrollo de los últimos meses.
<strong> Tenemos un objetivo ambicioso, desarrollar planes de acción en Internet, que puedan ser vistos en TODOS los dispositivos posibles, ya sean smartphones, tablets, PC's, Portátiles, E-books...</strong>
			</p><br />
			<p>El primer planteamiento que nuestro estudio jnacher se hace es preguntarse cual de las alternativas para el desarrollo móvil es la más adecuada.
            </p><br />
			<p>
            <strong>App nativa</strong>
            : La App nativa es la que más se está utilizando, principalmente por el tirón que en España ha tenido el Iphone y Ipad. Pero no siempre es la mejor solución. Las Apps que se desarrollan para el Apple Store y Google
            
            llevan una programación específica, en el caso de Apple es ObjectiveC y en el caso de Android es Java. Estas aplicaciones deben ser descargadas en el dispositivo en cuestión y ofrecen una experiencia de uso rápida y gratificante. Estas aplicaciones pueden interactuar con el hardaware del dispositivo, ya sea su cámara, su GPS...Estas aplicaciones puede emitir notificaciones push y no tienen porque trabajar con el navegador. Son idoneas para crear juegos. El problema es que el coste se duplica si quieres desarrollar la misma app para el android market y el apple store. Por otro lado las actualizaciones que se desarrollen deben ser actualizadas en el terminar del usuario.
			</p><br />
            <p>
<strong>¿Compiladores?</strong>
pueden resultar una solución, pues existen plataformas gratuitas que convierten
aplicaciones web
a los dos dispositivos. El inconveniente es que no deja de ser una web incrustada, así que se corre el riesgo de que el Apple Store decida no publicarla. ¿Que se hace con una app nativa para Apple que no entra en el Apple Store? nada de nada.
			</p><br />
            <p>
<strong>Web app</strong>
. A diferencia de la app nativa, la web app es agnóstica en cuanto a plataforma se refiere. Se puede ver en cualquier dispositivo y
sistema operativo
, y por tanto no requiere la aprobación de Apple. Tampoco requiere que el usuario se descargue la app a su dispositivo ni tampoco actualizarla cuando se hace algún cambio en ella, basta con refrescar el navegador.

: un website que ha sido desarrollado con diseño adaptable o responsive design obtiene del dispositivo la resolución de pantalla del mismo y muestra el contenido de una manera "líquida". En otras palabras, el contenido se ajustará a las dimensiones de la pantalla independientemente del dispositivo, ya sea un smartphone o tablet. Al mismo tiempo es posible modificar los estilos del site en función del dispositivo, ofreciendo una mejor experiencia de navegación al usuario.

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

		<?php echo $_smarty_tpl->getSubTemplate ("ingles/pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>