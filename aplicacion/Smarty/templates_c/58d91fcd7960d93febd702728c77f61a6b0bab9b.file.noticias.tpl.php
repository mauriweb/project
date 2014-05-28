<?php /* Smarty version Smarty-3.1.12, created on 2013-05-07 22:57:46
         compiled from "/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/noticias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18771429315138f7ea5ccf05-22451770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58d91fcd7960d93febd702728c77f61a6b0bab9b' => 
    array (
      0 => '/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/noticias.tpl',
      1 => 1367958892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18771429315138f7ea5ccf05-22451770',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5138f7ea8b4530_84827813',
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
<?php if ($_valid && !is_callable('content_5138f7ea8b4530_84827813')) {function content_5138f7ea8b4530_84827813($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
<meta name="Title" content="<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
">
<meta name="description" content="Listado de notícias. Aquí encontrarás toda la actualidad en el dise&ntilde;o web, gráfico y marketing online." />
<meta name="keywords" content="dominios, dominio, registro dominio, registro dominios, registro de dominios, dominios web, dominios hosting, dominios .es, dominios valencia, dominios internet, registrar dominio, comprar dominio, posicionamiento web, campa&ntilde;as de publicidad,Certificados ssl, alta en buscadores, dise&ntilde;o web, comunidad valenciana." />

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
    background-image: url("/plantillas/img/bg_page_04.png");
    background-repeat: repeat;
}
.cajaTexto{
	background-color: rgba(138, 193, 48, 0.7);
		
}
.leer2:hover {
    background-color: #8AC130;
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
    
    
      <div class="cajaTexto">NOTICIAS <span style="font-size:9px;"></span>
        
    <p class="textoIntro" style=" color:#FFFFFF; font-weight:400;">Noticias sobre diseño web, programación, diseño grafico y más. Estate informado de todas las novedades del estudio y del mundo gráfico y web.
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
           
            <h2 style="padding-left:20px; color:#8AC130; ">NOTICIAS</h2>
            <br /><br />
            
            <h2 style="padding-left:20px; color:#225600; ">Diferencias entre App, Web App y Responsive Web Design</h2>
            <span class="separador"></span> 
          	<p>
            Hasta hace bien poco las conexiones desde dispositivos móviles a páginas web no eran relevantes, pero la proliferación de los smartphones y tablets a nivel mundial -y también en España-, ha sido tan desmesurada, que recientes estudios de Morgan Stantey, vaticinan que en el 2012 las conexiones a páginas web desde estos dispositivos superarán por primera vez en la historia a las de escritorio.
            
            Con este contexto, desarrollar una acción ....

           	</p>
            <br />
            
         	<a href="noticias/web-responsive"><div class="leer2">seguir leyendo</div></a>
            
        
        <!--////////////////////////////////////////////////////SIGUIENTE NOTICIA-->
                 
            
            
            <h2 style="padding-left:20px; color:#225600; ">Diferencias entre diseño responsive y adaptive</h2>
            <span class="separador"></span> 
          	<p>
            Un diseño responsive (o RWD, de Responsive Web Design) es un diseño que es capaz de adaptarse al dispositivo con el que estamos navegando el sitio. En este tipo de diseños se envía el mismo contenido siempre y es el móvil, la tablet o el ordenador el que realiza el trabajo de adaptar la visualización a la pantalla, normalmente ayudados por javascript. Esta adaptación a la pantalla del dispositivo se suele realizar apilando las columnas o módulos que formen nuestro sitio formando una o dos columnas en la pantalla del dispositivo, mostrando primero las ....

           	</p>
            <br />
            
         	<a href="noticias/que-es-web-responsive"><div class="leer2">seguir leyendo</div></a>
      
        
        <!--////////////////////////////////////////////////////SIGUIENTE NOTICIA-->
        
        
        
        	 <h2 style="padding-left:20px; color:#225600; ">Qué es 'posicionamiento web' (SEO) y lo necesito para mi sitio web?</h2>
            <span class="separador"></span> 
          	<p>
            El posicionamiento de sitios web o la optimización para los motores de búsqueda (SEO) se refiere a un proceso que se lleva a cabo en un sitio web con el objetivo de tener ese sitio situado tan arriba como sea posible en los motores de búsqueda ....

           	</p>
            <br />
            
         	<a href="noticias/posicionamiento"><div class="leer2">seguir leyendo</div></a>
      
        
        <!--////////////////////////////////////////////////////SIGUIENTE NOTICIA-->
        
        
        
        	 <h2 style="padding-left:20px; color:#225600; ">¿Cómo funciona un motor de búsqueda?</h2>
            <span class="separador"></span> 
          	<p>
           Básicamente, los motores de búsqueda (search engines, SE) son bases de datos gigantescas que contienen información sobre el contenido de los sitios web que integran la web. 
El motor de búsqueda más popular, Google, contiene más de 3.000.000.000  ....

           	</p>
            <br />
            
         	<a href="noticias/motor"><div class="leer2">seguir leyendo</div></a>
      
        
        <!--////////////////////////////////////////////////////SIGUIENTE NOTICIA-->
        
        
        
        	 <h2 style="padding-left:20px; color:#225600; ">¿Qué es un dominio? - Definición de dominio</h2>
            <span class="separador"></span> 
          	<p>
           Un dominio o nombre de dominio es el nombre que identifica un sitio web. Cada dominio tiene que ser único en Internet. Por ejemplo, "www.jnacher.com" es el nombre de dominio de la página web de Jnacher. Un solo servidor web puede servir  ....

           	</p>
            <br />
            
         	<a href="noticias/dominios"><div class="leer2">seguir leyendo</div></a>
      
        
        <!--////////////////////////////////////////////////////SIGUIENTE NOTICIA-->
        
        
        
        	 <h2 style="padding-left:20px; color:#225600; ">¿Qué significa optimizar un sitio web?</h2>
            <span class="separador"></span> 
          	<p>
            Hay varios elementos de un sitio web que pueden ser optimizados. Al optimizar, un buen diseñador web intentará encontrar el equilibrio apropiado entre estos componentes, desde el punto de vista del diseño y del ....

           	</p>
            <br />
            
         	<a href="noticias/optimizar"><div class="leer2">seguir leyendo</div></a>
      
        
        <!--////////////////////////////////////////////////////SIGUIENTE NOTICIA-->
        
        
        
        	 <h2 style="padding-left:20px; color:#225600; ">¿Qué es un servidor FTP (FTP Servers)?</h2>
            <span class="separador"></span> 
          	<p>
            ElUno de los servicios más antiguos de Internet, File Transfer Protocol permite mover uno o más archivos con seguridad entre distintos ordenadores proporcionando seguridad y organización de los archivos así como control  ....

           	</p>
            <br />
            
         	<a href="noticias/ftp"><div class="leer2">seguir leyendo</div></a>
      
        
        <!--////////////////////////////////////////////////////SIGUIENTE NOTICIA-->
        
        
        
        	 <h2 style="padding-left:20px; color:#225600; ">¿Qué significa php? - Definición de php</h2>
            <span class="separador"></span> 
          	<p>
           PHP es un lenguaje de programación muy potente que, junto con html, permite crear sitios web dinámicos. Php se instala en el servidor y funciona con versiones  ....

           	</p>
            <br />
            
         	<a href="noticias/php"><div class="leer2">seguir leyendo</div></a>
      
        
        <!--////////////////////////////////////////////////////SIGUIENTE NOTICIA-->
        
        
        
        	 <h2 style="padding-left:20px; color:#225600; ">¿Qué es html?  - Definición de html</h2>
            <span class="separador"></span> 
          	<p>
           HTML es el acrónimo de HyperText Markup Language (Lenguaje de Marcado de Hipertexto) y es el lenguaje que se utiliza para crear las páginas web. Este lenguaje indica a los navegadores cómo deben mostrar el  ....

           	</p>
            <br />
            
         	<a href="noticias/html"><div class="leer2">seguir leyendo</div></a>
      
        
        <!--////////////////////////////////////////////////////SIGUIENTE NOTICIA-->
        
        
        
        	 <h2 style="padding-left:20px; color:#225600; ">¿Qué es un banner? - Definición de banner</h2>
            <span class="separador"></span> 
          	<p>
           Un banner, también conocido como anuncio banner, es un anuncio normalmente rectangular colocado arriba, abajo o en los lados del contenido principal  ....

           	</p>
            <br />
            
         	<a href="noticias/banner"><div class="leer2">seguir leyendo</div></a>
      
        
        <!--////////////////////////////////////////////////////SIGUIENTE NOTICIA-->
        
        
        
        	 <h2 style="padding-left:20px; color:#225600; ">Configurar correo electrónico</h2>
            <span class="separador"></span> 
          	<p>
           Si desea configurar un cliente de correo, deberá tener la siguiente información....

           	</p>
            <br />
            
         	<a href="noticias/correo"><div class="leer2">seguir leyendo</div></a>
      
        
        <!--////////////////////////////////////////////////////SIGUIENTE NOTICIA-->
        
        
        
        	
        <!--////////////////////////////////////////////////////FIN NOTICIAS-->
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