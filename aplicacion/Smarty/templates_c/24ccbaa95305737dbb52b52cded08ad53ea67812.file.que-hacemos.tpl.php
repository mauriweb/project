<?php /* Smarty version Smarty-3.1.12, created on 2013-05-02 11:25:43
         compiled from "C:\xampp\htdocs\proyecto\plantillas\tpl\que-hacemos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245315135c8d09df010-94791094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24ccbaa95305737dbb52b52cded08ad53ea67812' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\plantillas\\tpl\\que-hacemos.tpl',
      1 => 1367486663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245315135c8d09df010-94791094',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5135c8d0a69861_79639490',
  'variables' => 
  array (
    'titulo' => 0,
    'DOMINIO' => 0,
    'pagina' => 0,
    'categoria' => 0,
    'articulo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5135c8d0a69861_79639490')) {function content_5135c8d0a69861_79639490($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
<meta name="Title" content="<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
">
<meta name="description" content="Empresa de CREACIÓN de PÁGINAS WEB en Valencia. Somos desarrolladores de páginas WEB en Valencia. Creación de PÁGINAS WEB en la zona de Valencia. Diseño WEB Valencia" />
<meta name="keywords" content="desarrollo web en Valencia, programacion web en Valencia, programacion web, empresa de diseño web, diseño de paginas web en Valencia, diseño de paginas web, creacion de blogs, empresa de diseño de blogs, gestor de contenidos web, soporte de apple en Valencia" />

<!--FACEBOOK////////////////////////////////////////////////////-->
<meta property="og:type" content="moviesite:website"/>

<meta property="og:title" content="Estudio de diseño"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.jnacher.com"/>
    <meta property="og:image" content="http://www.jnacher.com/imagenes/logotipoSocial.png"/>
    <meta property="og:site_name" content="estudio.Disenyo.Web"/>
    <meta property="fb:admins" content="https://www.facebook.com/estudio.Disenyo.Web"/>
    <meta property="og:diseño"
          content="Estudio de diseño, gráfico, programación y sitios web."/>
          
<!--FACEBOOK////////////////////////////////////////////////////-->     
<link rel="icon" type="image/png" href="plantillas/img/favicon.png" />

<base href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
"/>
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
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



<style type="text/css">
.fondoContenedor {
    background-image: url("/plantillas/img/bg_page_02.png");
    background-repeat: repeat;
}
.cajaTexto{
	background-color: rgba(91, 146, 185, 0.7);
		
}
.image-hover {
    background-image: url("/plantillas/img/bg-w1.png");
}
</style>
<script type="text/javascript" src="plantillas/js/parallax/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="plantillas/js/parallax/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="plantillas/js/parallax/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	
	$('#first').parallax("50%", -0.3);
	$('#second').parallax("50%", -0.2);
	$('#third').parallax("50%", -0.3);
	$('#four').parallax("50%", -0.5);
	$('#five').parallax("50%", -0.2);

})
</script>

<script type="text/javascript">


/////////////// BACkGROUND	

function updateBackground() {
screenWidth = $(window).width();
screenHeight = $(window).height();
var bg = jQuery(".bg");

// Proporcion horizontal/vertical. En este caso la imagen es cuadrada
ratio = 1;

if (screenWidth/screenHeight > ratio) {
$(bg).height("auto");
$(bg).width("100%");
} else {
$(bg).width("auto");
$(bg).height("100%");
}

// Si a la imagen le sobra anchura, la centramos a mano
if ($(bg).width() > 0) {
$(bg).css('left', (screenWidth - $(bg).width()) / 2);
}
}

$(document).ready(function(){
	
/////////////// BACkGROUND	
	
// Actualizamos el fondo al cargar la pagina
updateBackground();
$(window).bind("resize", function() {
// Y tambien cada vez que se redimensione el navegador
updateBackground();
});



/////////////// REDES SOCIALES 

	
		$(".general a").hover(function(){
			$(this).animate({opacity: "0.6"}, "slow");
			return false;
		}, function(){
			$(this).animate({opacity: "1"}, "fast");
			return false;
		});

/////////////// Galeria

	
		$(".ultimo").hover(function(){
			$(this).children(".image-hover").animate({opacity: "0.7"}, "slow");
			$(this).children("h2").animate({opacity: "1"}, "slow");
			return false;
		}, function(){
			$(this).children(".image-hover").animate({opacity: "0"}, "fast");
			$(this).children("h2").animate({opacity: "0"}, "slow");
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
    //		ESTRUCTURA
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    


<div class="fondoContenedor" id="first">
    <div class="contenedor">
    
    
      <div class="cajaTexto">Que hacemos en JNACHER <span style="font-size:9px;">team</span>
        
    <p class="textoIntro" style=" color:#FFFFFF; font-weight:400;"> Conoce nuestros proyectos y nuestra metodología de trabajo y, si te interesa nuestra forma de entender el diseño, contáctanos. Sin ningún tipo de compromiso. Ten en cuenta que necesitamos conocer tu empresa, tu idea y tus objetivos para ofrecerte la mejor solución.
</p>
    
      </div>
    
    </div>
</div>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		CONTENEDOR UNO
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////-->
    
<div class="contenedorUno" id="third">
	<div class="contenedor">
        <h2 style="padding:20px;">PROYECTOS:</h2>
        
        <a href="que-hacemos/lahuerta-naranja">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/lahuerta-naranja.png" alt="lahuerta-naranja" width="100%" />
          	<div class="cada_proyectot"><strong>Empresa:</strong> LahuertaNaranja </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Tienda online & Imagen </div>
        </div>    
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="que-hacemos/vive-valencia">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/vive-valencia.png" alt="vive-valencia" width="100%"  />
          	<div class="cada_proyectot"><strong>Empresa:</strong> ViveValencia </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Diseño web & Imagen </div>
        </div>     
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="que-hacemos/evolution-motos">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/evolution-motos.png" alt="evolution-motos" width="100%"  />
          	<div class="cada_proyectot"><strong>Empresa:</strong> Evolution motos </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Diseño web & Logotipo </div>
        </div>    
		</a>
		<!-- /////////////////////////////////////////////////////-->
        <a href="que-hacemos/restaurante-la-grava">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/la-grava.png" alt="la-grava" width="100%" />
          	<div class="cada_proyectot"><strong>Empresa:</strong> Restaurante la Grava </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Web & Imagen </div>
        </div>    
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="que-hacemos/agencia-de-viajes-jovetravel">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/jovetravel.png" alt="jovetravel" width="100%"  />
          	<div class="cada_proyectot"><strong>Empresa:</strong> Jovetravel viajes </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Diseño web & Imagen </div>
        </div>     
        </a>
      
		<!-- /////////////////////////////////////////////////////-->
        <a href="que-hacemos/romeu-imprenta-roomart">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/roomart-web.png" alt="programacion web Roomart" width="100%"  />
          	<div class="cada_proyectot"><strong>Empresa:</strong> Romeu imprenta </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Maquetación web & Programación</div>
        </div>     
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="que-hacemos/dragonafly">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/logo-dragonafly.png" alt="dragonafly" width="100%" />
          	<div class="cada_proyectot"><strong>Empresa:</strong> Dragona Fly </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Tienda online & Imagen </div>
        </div>    
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="que-hacemos/anunciamascotas">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/anunciamascotas-web.png" alt="anunciamascotas-web" width="100%"  />
          	<div class="cada_proyectot"><strong>Empresa:</strong> Anunciamascotas </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Diseño web & Imagen </div>
        </div>     
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="que-hacemos/pub-punto-cero">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/puntocero-rotulacion.png" alt="puntocero-rotulacion" width="100%"  />
          	<div class="cada_proyectot"><strong>Empresa:</strong> PuntoCero pub </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Imagen corporativa </div>
        </div>    
		</a>
		<!-- /////////////////////////////////////////////////////-->
        <a href="que-hacemos/moreno-abogados">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/moreno-abogado-web.png" alt="moreno abogado" width="100%"  />
          	<div class="cada_proyectot"><strong>Empresa:</strong> Moreno Abogados </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Diseño web</div>
        </div>     
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="que-hacemos/discoteca-ruta-sesentayseis">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/tarjeta-ruta-66.png" alt="tarjeta-ruta-66" width="100%" />
          	<div class="cada_proyectot"><strong>Empresa:</strong> Ruta 66 discoteca </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Logotipo & Tarjeta </div>
        </div>    
        </a>
       <!-- /////////////////////////////////////////////////////-->
        
       <a href="que-hacemos/estudio-disenyo-jnacher">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/jnacher-logo.png" alt="jnacher estudio de diseño" width="100%"  />
          	<div class="cada_proyectot"><strong>Empresa:</strong> JNacher. </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Web personal & Imagen</div>
        </div>     
        </a>
       <!-- /////////////////////////////////////////////////////-->
       
         <!-- /////////////////////////////////////////////////////-->
        <a href="que-hacemos/autobuses-torrebus">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/torrebus.png" alt="torrebus" width="100%"  />
          	<div class="cada_proyectot"><strong>Empresa:</strong> Torrebus </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Diseño web </div>
        </div>    
		</a>
        
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