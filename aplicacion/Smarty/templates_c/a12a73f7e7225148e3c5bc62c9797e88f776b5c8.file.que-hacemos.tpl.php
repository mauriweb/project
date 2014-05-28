<?php /* Smarty version Smarty-3.1.12, created on 2013-04-18 19:40:32
         compiled from "/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/ingles/que-hacemos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:382326500514c4398b73e08-16279363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a12a73f7e7225148e3c5bc62c9797e88f776b5c8' => 
    array (
      0 => '/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/ingles/que-hacemos.tpl',
      1 => 1366280137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '382326500514c4398b73e08-16279363',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_514c4398bcb781_29695343',
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
<?php if ($_valid && !is_callable('content_514c4398bcb781_29695343')) {function content_514c4398bcb781_29695343($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

		<?php echo $_smarty_tpl->getSubTemplate ("ingles/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		ESTRUCTURA
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    


<div class="fondoContenedor" id="first">
    <div class="contenedor">
    
    
      <div class="cajaTexto">What do we do JNACHER <span style="font-size:9px;">team</span>
        
    <p class="textoIntro" style=" color:#FFFFFF; font-weight:400;">Take a look to our works and our working methodology and if you get interested about our way of understand design.. without any kind of commitment... be aware we need to know your company, your ideas and your goals to be able to offer the best solution.
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
        <h2 style="padding:20px;">PROJECTS:</h2>
        
        <a href="that-we-do/lahuerta-naranja">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/lahuerta-naranja.png" alt="lahuerta-naranja" width="100%" />
          	<div class="cada_proyectot"><strong>Company:</strong> LahuertaNaranja </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Shop online & Image </div>
        </div>    
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="that-we-do/vive-valencia">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/vive-valencia.png" alt="vive-valencia" width="100%"  />
          	<div class="cada_proyectot"><strong>Company:</strong> ViveValencia </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Web design & Image </div>
        </div>     
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="that-we-do/evolution-motos">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/evolution-motos.png" alt="evolution-motos" width="100%"  />
          	<div class="cada_proyectot"><strong>Company:</strong> Evolution motos </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Web design & Logo </div>
        </div>    
		</a>
		<!-- /////////////////////////////////////////////////////-->
        <a href="that-we-do/restaurante-la-grava">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/la-grava.png" alt="la-grava" width="100%" />
          	<div class="cada_proyectot"><strong>Company:</strong> Restaurante la Grava </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Web & Image </div>
        </div>    
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="that-we-do/agencia-de-viajes-jovetravel">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/jovetravel.png" alt="jovetravel" width="100%"  />
          	<div class="cada_proyectot"><strong>Company:</strong> Jovetravel viajes </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Web design & Image </div>
        </div>     
        </a>
      
		<!-- /////////////////////////////////////////////////////-->
        <a href="that-we-do/romeu-imprenta-roomart">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/roomart-web.png" alt="programacion web Roomart" width="100%"  />
          	<div class="cada_proyectot"><strong>Company:</strong> Romeu imprenta </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Web layout & Programming</div>
        </div>     
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="that-we-do/dragonafly">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/logo-dragonafly.png" alt="dragonafly" width="100%" />
          	<div class="cada_proyectot"><strong>Company:</strong> Dragona Fly </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Shop online & Image </div>
        </div>    
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="that-we-do/anunciamascotas">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/anunciamascotas-web.png" alt="anunciamascotas-web" width="100%"  />
          	<div class="cada_proyectot"><strong>Company:</strong> Anunciamascotas </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Web design & Image </div>
        </div>     
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="that-we-do/pub-punto-cero">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/puntocero-rotulacion.png" alt="puntocero-rotulacion" width="100%"  />
          	<div class="cada_proyectot"><strong>Company:</strong> PuntoCero pub </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Corporate Image </div>
        </div>    
		</a>
		<!-- /////////////////////////////////////////////////////-->
        <a href="that-we-do/moreno-abogados">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/moreno-abogado-web.png" alt="moreno abogado" width="100%"  />
          	<div class="cada_proyectot"><strong>Company:</strong> Moreno Abogados </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Web design</div>
        </div>     
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="that-we-do/discoteca-ruta-sesentayseis">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/tarjeta-ruta-66.png" alt="tarjeta-ruta-66" width="100%" />
          	<div class="cada_proyectot"><strong>Company:</strong> Ruta 66 discoteca </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Logo & Business card </div>
        </div>    
        </a>
       <!-- /////////////////////////////////////////////////////-->
        
       <a href="that-we-do/estudio-disenyo-jnacher">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/jnacher-logo.png" alt="jnacher estudio de diseño" width="100%"  />
          	<div class="cada_proyectot"><strong>Company:</strong> JNacher. </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Personal web & Image</div>
        </div>     
        </a>
       <!-- /////////////////////////////////////////////////////-->
       
         <!-- /////////////////////////////////////////////////////-->
        <a href="that-we-do/autobuses-torrebus">
        <div class="ultimo cuadro">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/torrebus.png" alt="torrebus" width="100%"  />
          	<div class="cada_proyectot"><strong>Company:</strong> Torrebus </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Web design </div>
        </div>    
		</a>
        
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