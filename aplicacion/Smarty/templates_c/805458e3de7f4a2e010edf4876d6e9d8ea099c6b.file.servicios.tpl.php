<?php /* Smarty version Smarty-3.1.12, created on 2013-05-23 10:36:28
         compiled from "C:\xampp\htdocs\proyecto\plantillas\tpl\servicios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25814509bf3b8827c05-18792825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '805458e3de7f4a2e010edf4876d6e9d8ea099c6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\plantillas\\tpl\\servicios.tpl',
      1 => 1368805897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25814509bf3b8827c05-18792825',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509bf3b88a99f8_28842942',
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
<?php if ($_valid && !is_callable('content_509bf3b88a99f8_28842942')) {function content_509bf3b88a99f8_28842942($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
<meta name="Title" content="<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
">
<meta name="description" content="Dise&ntilde;o paginas web valencia - jnacher empresa de Valencia dedicada a ofrecer servicios Dise&ntilde;o web y posicionamiento de páginas web.| dise&ntilde;o paginas web valencia | paginas web valencia " />
<meta name="keywords" content="dise&ntilde;o web, paginas web, desarrollo web, webs, websites, portales web, tiendas online, carro de compra, tiendas virtuales, vender por internet, internet, comercio virtual, comercio online, venta por internet, creacion paginas web, webmasters, paginas web baratas, paginas web economicas, precios paginas web, presupuesto web, empresa de dise&ntilde;o web, empresa de dise&ntilde;o grafico, empresas paginas web, empresas dise&ntilde;o web, empresas internet, madrid, Espa&ntilde;a" />

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

		<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		ESTRUCTURA
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    


<div class="fondoContenedor" id="first">
    <div class="contenedor">
    
    
      <div class="cajaTexto">SERVICIOS <span style="font-size:9px;"></span>
        
    <p class="textoIntro" style=" color:#FFFFFF; font-weight:400;">Nuestros precios no afectarán a tu bolsillo. Trabajamos en plazos muy cortos. Además, el diseñador de tu proyecto responde personalmente a tus llamadas y a tus e-mails. Nuestros diseños se basan en lo que es mejor para ti y para tu negocio.
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
            <h2 style="padding-left:20px; color:#D6275C;">OFERTA paquetes diseño coorporativo</h2>
            <span class="separador"></span>            
            <p>
			Diseño web coorporativa básica.<br />
            Diseño web coorporativa avanzada.<br />
            Diseño web coorporativa premium.<br /><br />
			</p>
            
          	<a href="presupuestos"><div class="leer2">presupuesto</div></a>
            <a href="/oferta-web"><div class="leer">+ información</div></a>
            
            <h2 style="padding-left:20px; color:#D6275C;">Tiendas Online</h2>
            <span class="separador"></span>            
            <p>
			
	
            Tienda online básica.<br />
            Tienda profesional.<br />
            Tienda online personalizada.<br /><br />
			</p>
            
          	<a href="presupuestos"><div class="leer2">presupuesto</div></a>
            <a href="servicios/tiendas-online"><div class="leer">+ información</div></a>
                        
            <h2 style="padding-left:20px; color:#D41471;">Diseño Web</h2>
            <span class="separador"></span>            
            <p>


            Web corporativa estática.<br />
            Web corporativa autogestionable.<br />
            Web flexible.<br />
            Web móvil.<br /><br />
			</p>
            <a href="presupuestos"><div class="leer2">presupuesto</div></a>
            <a href="servicios/disenyo-web"><div class="leer">+ información</div></a>
            
            <h2 style="padding-left:20px; color:#E03261;">Programación Web para diseñadores</h2>
            <span class="separador"></span>            
            <p>
            Maquetación y programación a partir de un diseño en .psd o formato de imagen.<br /><br />
			</p>
            <a href="presupuestos"><div class="leer2">presupuesto</div></a>
            <a href="servicios/programacion-web-disenyadores"><div class="leer">+ información</div></a>
            
            <h2 style="padding-left:20px; color:#C35A74;">Posicionamiento y Publicidad en Internet</h2>
            <span class="separador"></span>            
            <p>
			Campañas online. SEM/SEO. Google Adwords. Análisis de resultados e impactos.<br /><br />
			<strong>Seo básico</strong><br /><br />

            Posicionamos su web en los principales buscadores con especial atención a Google.<br />
            Seleccionamos las mejores palabras clave para su negocio.<br />
            Análisis, informe y propuesta de mejoras SEO.<br />
            Mejora de Factores Internos. Creación meta tags, generación de SiteMaps, optimización de contenido...<br />
            Mejora de Factores Externos. Campaña permanente de consecución de enlaces duraderos.<br />
            No utilizamos granjas de enlaces ni enlaces propios. No perderá los enlaces una vez finalizado el trabajo de SEO.<br />
            Seguimiento de la evolución por Google Analytics para que el cliente pueda ver en cualquier momento los datos de su web.<br /><br />

			<strong>Seo avanzado</strong><br /><br />
			Generamos Tráfico de Calidad de diversas fuentes gratuitas.<br />
			No sólo buscamos la posición de una determinada palabra clave en los buscadores, sino que generamos un flujo de tráfico notable, creciente y de calidad a través de diversas fuentes.<br /><br />

			INCLUYE TODAS LAS CARACTERÍSTICAS DEL SEO BÁSICO Y ADEMÁS:<br /><br />

            Campaña de Relaciones Públicas Online. Generamos y difundimos su contenido en portales del sector y sitios web de periodistas.<br />
            Gestión de Canales Multimedia (YouTube, Flickr, Google Video, Yahoo! Video...).<br />
            Promoción en Redes Sociales (Facebook, Twitter, LinkedIn...).<br />
            Configuración Avanzada de Analytics incluída para analizar la rentabilidad de todas las fuentes de tráfico (SEO, SEM, e-Mailing, Redes Sociales...).<br />
            SEO Semántico.<br /><br />
			</p>
            <a href="presupuestos"><div class="leer2">presupuesto</div></a>
            <h2 style="padding-left:20px; color:#DC4B61;">Community Manager</h2>
            <span class="separador"></span>            
            <p>
			Creamos su presencia profesional en Redes Sociales. Dinamizamos sus canales y gestionamos campañas de publicidad en Facebook, Twitter, LinkedIn, YouTube, Blogs...<br /><br />
			</p>
            <a href="presupuestos"><div class="leer2">presupuesto</div></a>
            <h2 style="padding-left:20px; color:#D8285C;">Campañas de mailing.</h2>
            <span class="separador"></span>            
            <p>
			Hacemos que sus productos lleguen a todos sus clientes.<br /><br />
            </p>
            <a href="presupuestos"><div class="leer2">presupuesto</div></a>
          	<h2 style="padding-left:20px; color:#A26287;">Identidad Corporativa</h2>
            <span class="separador"></span>            
            <p>
            Marca.<br />
            Creación, diseño y gestión de una marca corporativa.<br />
            Identidad Corporativa.<br />
            Una imagen bien realizada no es un simple logotipo, un logotipo bien realizado no es simplemente un dibujo con letras. Es necesario mantener una coherencia visual en todas las comunicaciones que una empresa realiza, folletos, papelería, páginas web, etc. La imagen corporativa de una empresa es su carta de presentación, su cara frente al público y forma parte de su identidad, de esta identidad dependerá la imagen que se formará de la organización.<br /><br />
			</p>
            <a href="presupuestos"><div class="leer2">presupuesto</div></a>
            <h2 style="padding-left:20px; color:#DF7B4F;">Diseño gráfico</h2>
            <span class="separador"></span>            
            <p>

            Comunicación.<br />
            Diseño y maquetación de logotipos, tarjetas de visita, folletos, trípticos.<br />
            Folletos y Catálogos.<br />
            Diseño y maquetación de folletos y catálogos para empresas e instituciones.<br />
            Editorial.<br />
            Diseño y maquetación de proyectos editoriales.<br />
            Gráfica Publicitaria.<br />
            Diseño gráfico de cualquier formato gráfico de publicidad.<br />
            Señalética.<br />
            Diseño de elementos de señalización corporativa.<br />
            Packaging.<br />
            Diseño y desarrollo de aplicaciones gráficas para envases y embalajes.<br /><br />
			</p>
            <a href="presupuestos"><div class="leer2">presupuesto</div></a>
            <h2 style="padding-left:20px; color:#BC168A;">Diseño de Producto</h2>
            <span class="separador"></span>            
            <p>

            Mueble e Iluminación.<br />
            Diseño y desarrollo de productos.<br />
            Packaging.<br />
            Diseño industrial y desarrollo de envases y embalajes para productos.<br />
            Producto.<br />
            Diseño y desarrollo de nuevos productos para empresas.<br /><br />
			</p>
            <a href="presupuestos"><div class="leer2">presupuesto</div></a>
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