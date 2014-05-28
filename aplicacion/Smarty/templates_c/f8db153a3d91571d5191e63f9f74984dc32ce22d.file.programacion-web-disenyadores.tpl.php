<?php /* Smarty version Smarty-3.1.12, created on 2013-03-07 22:06:33
         compiled from "C:\xampp\htdocs\proyecto\plantillas\tpl\programacion-web-disenyadores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:571551386ec76081b0-24975948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8db153a3d91571d5191e63f9f74984dc32ce22d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\plantillas\\tpl\\programacion-web-disenyadores.tpl',
      1 => 1362690391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '571551386ec76081b0-24975948',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51386ec7698680_66926201',
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
<?php if ($_valid && !is_callable('content_51386ec7698680_66926201')) {function content_51386ec7698680_66926201($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    
    
      <div class="cajaTexto">SERVICIOS <span style="font-size:9px;"></span>
        
    <p class="textoIntro" style=" color:#FFFFFF; font-weight:400;">Nuestros precios no vaciarán tus bolsillos, plazos muy cortos en pequeños proyectos, el diseñador de tu proyecto responde personalmente el teléfono y los emails, nuestros diseños se basan en lo que es mejor para ti y tu negocio.
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
    
		
        
        <div class="textoUltimosProyectos">
           
            <h2 style="padding-left:20px; color:#D6275C; ">PROGRAMACIÓN PARA DISEÑADORES</h2>
            <br />
            <div class="imagenCabeceraInfo desaparecer"><img src="plantillas/img/html.png" width="100%" alt="diseño web" /></div>
            <br />
            
            <h2 style="padding-left:20px; color:#D6275C; ">Si te dedicas a hacer páginas web te podemos ayudar</h2>
            <span class="separador"></span> 
          	<p>

            Si te dedicas a hacer páginas web te podemos ayudar. Necesito el HTML y la CSS para una web te ayudamos, necesitas programar tu web te ayudamos.... Si tienes el diseño de las distintas páginas que necesitas maquetar, sólo tienes que cumplimentar los datos del formulario de esta página y nos pondremos en contacto contigo para hacerte llegar una estimación del coste de maquetación de las distintas pantallas y las condiciones de contratación.
           	</p><br />
           	<h2 style="padding-left:20px; color:#D6275C; ">¿Eres programador web?</h2>
            <span class="separador"></span> 
          	<p>
            
            Si eres programador web y no quieres hacer el HTML y la CSS para las webs de tus clientes, no te preocupes, ponemos al tu alcance una maquetación accesible en la que fácilmente podrás integrar tu propia programación. Envíanos el diseño de la web en formato psd y directamente te enviaremos el HTML y la CSS de la web para que sólo tengas que integrar tu programación.
            ¿No tienes diseño? No te preocupes, ponte en contacto con nosotros a través del formulario de la sección de presupuestos de nuestra web, dejanos tus datos y nos pondremos en contacto contigo para comenzar con el diseño y la maquetación de la web.
            </p><br />
           	<h2 style="padding-left:20px; color:#D6275C; ">¿Eres diseñador web?</h2>
            <span class="separador"></span> 
          	<p>
            
            Si eres diseñador web puedes contar con nosotros para realizar el HTML y la CSS de tus diseños. Respetamos los diseños como si fueran nuestros y nos esforzamos en crear el HTML y la CSS  para que una vez diseñada la web no tengas que preocuparte de nada más. Contacta con nosotros a través del formulario de la sección de presupuestos y te aseguramos que quedarás satisfecho con los resultados.
            
            </p><br />
           	<h2 style="padding-left:20px; color:#D6275C; ">¿Eres maquetador web?</h2>
            <span class="separador"></span> 
          	<p>
            
            Si eres maquetador web y no tienes tiempo o no puedes realizar un trabajo, nosotros te ayudaremos. Nuestras maquetaciones cumplen todos los estándares y los archivos que recibirás están validados, sin fallos, y completamente estructurados. ¿Necesitas una web accesible? Con nuestro HTML y CSS no tendrás ningún problema, déjalo en manos de profesionales.
			</p><br />

		  
            <br />
         	<a href="presupuestos"><div class="leer2">presupuesto</div></a>
            <a href="que-hacemos"><div class="leer">ver ejemplos</div></a>
            <br />
        </div>
        
        
        
        
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