<?php /* Smarty version Smarty-3.1.12, created on 2013-03-22 12:00:22
         compiled from "C:\xampp\htdocs\proyecto\plantillas\tpl\ingles\disenyo-web.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23353514c39c63e1bd1-76380311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a555f7c026b65a0703279530a93a41682396c845' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\plantillas\\tpl\\ingles\\disenyo-web.tpl',
      1 => 1363895135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23353514c39c63e1bd1-76380311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'DOMINIO' => 0,
    'pagina' => 0,
    'categoria' => 0,
    'articulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_514c39c6489498_25236665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514c39c6489498_25236665')) {function content_514c39c6489498_25236665($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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


<style type="text/css">
.fondoContenedor {
    background-image: url("/plantillas/img/bg_page_03.png");
    background-repeat: repeat;
}
.cajaTexto{
	background-color: rgba(219, 35, 101, 0.7);
		
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
           
            <h2 style="padding-left:20px; color:#D6275C; ">TIPOS DE WEBS</h2>
            <br />
            <div class="imagenCabeceraInfo desaparecer"><img src="plantillas/img/disenyo-web.png" width="100%" alt="diseño web" /></div>
            <br />
            <h2 style="padding-left:20px; color:#D6275C; ">WEB CORPORATIVA ESTATICA <span class="precio">desde 200€</span></h2>
            <span class="separador"></span> 
            <p>

Este tipo de Web se usa  a modo de carta de presentación en internet de la empresa a la que representa. Algunas de las secciones típicas que suelen encontrarse en este tipo de sitios Web son: “Quienes somos”, “Dónde estamos”, “Productos y Servicios”, “Contacto”, etc.
Estas webs son más económicas y son útiles para empresas que no vayan a actualizar regularmente su contenido y deseen simplemente tener presencia en la red.
Este tipo de Web está orientada a restaurantes, talleres mecánicos, empresas pequeñas o toda aquella empresa que quiera tener una buena presencia en la red. 
Una vez hecha si se quisiera modificar o insertar nuevas secciones puede optar por nuestro servicio diseñador en casa que consta en contratar unos packs de horas las cuales se utilizaran para cualquier modificación o inserción de contenido en la Web.

			</p>
            <br />
         	<a href="presupuestos"><div class="leer2">presupuesto</div></a>
            <a href="que-hacemos"><div class="leer">ver ejemplos</div></a>
            <br />
            <h2 style="padding-left:20px; color:#D6275C; ">WEB CORPORATIVA AUTOGESTIONABLE <span class="precio">desde 400€</span></h2>
            <span class="separador"></span> 
            <p>


Las webs dinámicas son webs “abiertas” a la introducción de noticias, textos, imágenes, nuevas páginas y elementos de menú, por parte de los propietarios de la Web. Su actualización se realiza a través de un panel de control privado y sin necesidad de conocimientos técnicos especiales. 
Las webs auto gestionables pueden también incluir un Blog de noticias y novedades, además de elementos dinámicos de recogida de datos o noticias desde otras webs del sector.
			
            </p>
            <br />
         	<a href="presupuestos"><div class="leer2">presupuesto</div></a>
            <a href="que-hacemos"><div class="leer">ver ejemplos</div></a>
            <br />
            <h2 style="padding-left:20px; color:#D6275C; ">BLOG	<span class="precio">desde 150€</span></h2>
            <span class="separador"></span> 
            <p>


Los Blogs son como diarios online. Una de sus mayores virtudes es su función de archivado automático por fecha y categoría, convirtiéndolos por tanto en un excelente sistema de gestión del contenido.
Actualmente son una estrategia de marketing muy importante en Internet. Bien realizados atraen tráfico a su sitio Web principal y son una gran herramienta de fidelización e información al cliente.

			</p>
            <br />
         	<a href="presupuestos"><div class="leer2">presupuesto</div></a>
            <a href="que-hacemos"><div class="leer">ver ejemplos</div></a>
            <br />
            <h2 style="padding-left:20px; color:#D6275C; ">WEB FLEXIBLE <span class="precio">desde 400€</span></h2>
            <span class="separador"></span> 
            <p>


El futuro del diseño Web pasa por los dispositivos móviles, en nuestro estudio lo tenemos muy en cuenta por ello realizamos webs flexibles  esto permite que dependiendo del dispositivo que se visualice, la Web adapte los contenidos.
También podemos diseñar una Web móvil si ya tiene una.
Las páginas Web se desarrollan para ser visualizadas en un PC, por lo que en los dispositivos móviles no se visualizan correctamente. Todo ello origina una carga defectuosa y lenta de nuestra Web y una mala experiencia para el usuario. Lo ideal es disponer de una versión más reducida de su página Web que permita verse correctamente en los teléfonos móviles.
			
            </p>
            <br />
         	<a href="presupuestos"><div class="leer2">presupuesto</div></a>
            <a href="que-hacemos"><div class="leer">ver ejemplos</div></a>
            <br />
            <h2 style="padding-left:20px; color:#D6275C; ">WEB MOVIL <span class="precio">desde 200€</span></h2>
            <span class="separador"></span> 
          <p>


Dado el uso masivo de móviles y smartphones con acceso a internet, la implementación de una web específica para móviles es un aspecto a tener en cuenta para su empresa. En el caso de que usted ya posea una web, tiene dos opciones desarrollar una web exclusivamente para móviles o realizar su web de nuevo con características flexibles. Esto le permitirá ofrecer una información distinta, más adaptada a la demanda de sus usuarios desde estos dispositivos.

		  </p>
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

		<?php echo $_smarty_tpl->getSubTemplate ("ingles/pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>