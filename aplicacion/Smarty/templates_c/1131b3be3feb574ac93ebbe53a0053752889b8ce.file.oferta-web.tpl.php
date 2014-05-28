<?php /* Smarty version Smarty-3.1.12, created on 2013-05-07 22:57:59
         compiled from "/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/oferta-web.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1193423941516fc8acebacc9-65327591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1131b3be3feb574ac93ebbe53a0053752889b8ce' => 
    array (
      0 => '/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/oferta-web.tpl',
      1 => 1367958893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1193423941516fc8acebacc9-65327591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_516fc8acf2b756_72368279',
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
<?php if ($_valid && !is_callable('content_516fc8acf2b756_72368279')) {function content_516fc8acf2b756_72368279($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<meta name="keywords" content="dise&ntilde;o web, paginas web, desarrollo web, webs, websites, portales web, tiendas online, carro de compra, tiendas virtuales, vender por internet, internet, comercio virtual, comercio online, venta por internet, creacion paginas web, webmasters, paginas web baratas, paginas web economicas, precios paginas web, presupuesto web, empresa de dise&ntilde;o web, empresa de dise&ntilde;o grafico, empresas paginas web, empresas dise&ntilde;o web, empresas internet, madrid, España" />

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
.contenedor .contenidoUno {
	display: inline-block;
	position: relative;
	width: 100%;
	min-width:900px;
	padding:10px;
	text-align:center;
}
.contenidoUno .uno {
	position: relative;
	display:inline-block;
	float:left;
	width:15%;
	padding:10px;
	border-bottom-width: thin;
	border-bottom-style: solid;
	border-bottom-color: #999;
}
.contenidoUno .dos {
	position: relative;
	display:inline-block;
	float:left;
	width:40%;
	padding:10px;
	text-align:left;
	border-bottom-width: thin;
	border-bottom-style: solid;
	border-bottom-color: #999;
}
.contenidoUno .cuatro {
	position: relative;
	display:inline-block;
	float:left;
	width:40%;
	padding:10px;
	text-align:left;
}
.contenidoUno .tres {
	position: relative;
	display:inline-block;
	float:left;
	width:15%;
	padding:10px;
	text-align:center;
}
.etiquetaUno{
	background-image: url(plantillas/img/etiquetaUno.png);
	background-position: center top;
	position: relative;
	height: 250px;
	width: 200px;
	background-repeat: no-repeat;
}
.etiquetaDos{
	background-image: url(plantillas/img/etiquetaDOs.png);
	background-position: center top;
	position: relative;
	height: 250px;
	width: 200px;
	background-repeat: no-repeat;
}
.etiquetaTres{
	background-image: url(plantillas/img/etiquetaTres.png);
	background-position: center top;
	position: relative;
	height: 250px;
	width: 200px;
	background-repeat: no-repeat;
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
    
    
      <div class="cajaTexto">Pack web <span style="font-size:9px;"></span>
        
    <p class="textoIntro" style=" color:#FFFFFF; font-weight:400;">Todo lo que necesitas para crear tu página web. Con tu propio dominio incluido.<BR /> TU PÁGINA WEB COORPORATIVA HECHA POR PROFESIONALES.</p>
    
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
    
    
            <br />
            <div class="imagenCabeceraInfo desaparecer"><img src="plantillas/img/disenyo-web.png" width="100%" alt="diseño web" /></div>
            <br />
    
    <h2 style="padding-left:20px; color:#D6275C; ">Elige tu Pack :</h2><br />
    <p>Estos packs están preparados para todo tipo de cliente, dependiendo de su presupuesto y objetivos tiene tres opciones.<br />
El <strong>pack básico</strong> es para aquella persona, que quiera tener presencia en internet a un coste bajo, secciones como (quienes somos, que hacemos, contacto).<br /><br />
El <strong>pack avanzado</strong> está adaptado a cualquier formato ya sea móvil, tableta, pantalla de ordenador; incluye también otros apartados como  galería de imágenes, servicios, además de tener  un posicionamiento natural.<br /><br />
Para finalizar el <strong>pack Premium</strong> es para aquella empresa que quiera ir un poco más lejos y tener un posicionamiento importante en su sector. <br /><br />
Estos packs se basan en unas plantillas y diseños webs profesionales que se adaptaran a cada cliente dependiendo de sus necesidades.<br /><br />
La forma de pago es una cuota mensual y un alta del servicio, con una permanencia mínima de 12 meses.<br /><br />
Para más información llamar al teléfono <strong style="font-size:18px; color:#DB1969">669529175.</strong><br /><br />


</p>
    <div class="contenidoUno">
    <div class="cuatro"></div>
    <div class="tres etiquetaUno">
    <p style="color:#FFF; font-size:16px; font-weight:bold;">BASICÁ</p>
    <p style="color:#8A0090; font-size:16px; font-weight:bold; padding-top:15px;">Diseño web para páginas presenciales en internet.</p>
    <p style="color:#FFF; font-size:30px; font-weight:300; padding-top:30px;">15€</p>
    <p style="color:#8A0090; font-size:16px; font-weight:bold;">mensuales + IVA</p>

    </div>
    <div class="tres etiquetaDos">
    <p style="color:#FFF; font-size:16px; font-weight:bold;">AVANZADA</p>
    <p style="color:#34779A; font-size:16px; font-weight:bold; padding-top:15px;">Diseño web para gente que quiere algo más, productos, servicios, SEO natural.</p>
    <p style="color:#FFF; font-size:30px; font-weight:300; padding-top:10px;">19.9€</p>
    <p style="color:#34779A; font-size:16px; font-weight:bold;">mensuales + IVA</p>

    </div>
    <div class="tres etiquetaTres">
    <p style="color:#FFF; font-size:16px; font-weight:bold;">PREMIUM</p>
    <p style="color:#82A900; font-size:16px; font-weight:bold; padding-top:15px;">Diseño web para estar delante de mis competidores y todas las herramientas.</p>
    <p style="color:#FFF; font-size:30px; font-weight:300; padding-top:10px;">29.9€</p>
    <p style="color:#82A900; font-size:16px; font-weight:bold;">mensuales + IVA</p>

    </div>
	</div>	
    <div class="contenidoUno">
    <div class="dos">Dominio + hosting  (1 año)</div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Compromiso mejor precio</div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Diseño profesional</div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Diseños a medida</div>
    <div class="uno"><img src="plantillas/img/check-no.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Alta en google</div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Formulario de contacto</div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Mapa Geolocalización</div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Cuentas de correo</div>
    <div class="uno">2</div>
    <div class="uno">5</div>
    <div class="uno">10</div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Posicionamiento web</div>
    <div class="uno"><img src="plantillas/img/check-no.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Redes sociales</div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Optimización móvil</div>
    <div class="uno"><img src="plantillas/img/check-no.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Optimización SEO</div>
    <div class="uno"><img src="plantillas/img/check-no.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-no.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Galeria de imagenes</div>
    <div class="uno"><img src="plantillas/img/check-no.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Noticias</div>
    <div class="uno"><img src="plantillas/img/check-no.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-no.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Google maps</div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Estadisticas web</div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Newsletter</div>
    <div class="uno"><img src="plantillas/img/check-no.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-no.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Tráfico ilimitado</div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Catálogo de productos y servicios</div>
    <div class="uno"><img src="plantillas/img/check-no.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
    <div class="uno"><img src="plantillas/img/check-yes.png" width="21" height="20" /></div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Precio alta</div>
    <div class="uno">150€ alta</div>
    <div class="uno">200€ alta</div>
    <div class="uno">200€ alta</div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Cuota mensual</div>
    <div class="uno">15€ mes</div>
    <div class="uno">19.9€ mes</div>
    <div class="uno">29.9€ mes</div>
	</div>
    <div class="contenidoUno">
    <div class="dos">Permanencia</div>
    <div class="uno">12 meses</div>
    <div class="uno">12 meses</div>
    <div class="uno">12 meses</div>
	</div>
    <p style="font-size:12px; margin-bottom:20px;">*Los precios mostrados no incluyen IVA. </p>
    <div style="float:right; margin-right:100px;"><a href="presupuestos"><div class="leer2">Me interesa</div></a></div>
	
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