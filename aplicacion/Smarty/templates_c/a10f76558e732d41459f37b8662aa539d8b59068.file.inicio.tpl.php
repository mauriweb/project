<?php /* Smarty version Smarty-3.1.12, created on 2013-05-14 11:12:28
         compiled from "/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/inicio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:794664527514c437c48bf01-23377064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a10f76558e732d41459f37b8662aa539d8b59068' => 
    array (
      0 => '/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/inicio.tpl',
      1 => 1368522746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '794664527514c437c48bf01-23377064',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_514c437cb737d1_12864909',
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
<?php if ($_valid && !is_callable('content_514c437cb737d1_12864909')) {function content_514c437cb737d1_12864909($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
 
<meta name="Title" content="<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
">
<meta name="description" content="Líderes en dise&ntilde;o web y posicionamiento de marca, gran experiencia como empresa dise&ntilde;o páginas web, le hacemos VENDER, presupuesto dise&ntilde;o web a medida"" />
<meta name="keywords" content="dise&ntilde;o web, dise&ntilde;o páginas web, dise&ntilde;o web profesional, creación páginas web,dise&ntilde;o web sevilla, empresa de dise&ntilde;o web, dise&ntilde;o y marketing online, empresas, desarrollo páginas web, flash multimedia" />

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


<!--///////////////////////////////////////////// GOOGLE //////////////////////////////-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39333386-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 
<!--///////////////////////////////////////////// GOOGLE //////////////////////////////-->
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
    
    
      <div class="cajaTexto">ESTO ES JNACHER <span style="font-size:9px;">team</span>
        
    <p class="textoIntro" style=" color:#FFFFFF; font-weight:400;"> estudio de diseño web & gráfico y algunas cosas más, solo tienes que preguntarnos.<br /> Creatividad e innovación definen a este estudio.  ¿Nuestra filosofía? Entendemos nuestro trabajo como una inversión inteligente que generará a nuestros clientes ingresos a corto y medio plazo. Siete años dedicados al mundo del diseño nos avalan. Sigue bajando y enterate por qué sucede esto.</p>
    
      </div>
    
    </div>
</div>


<!--/////////////////////////////////imagen trasera--><div class="bg" id="second"><!--/////////////////////////////////imagen trasera-->

<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		CONTENEDOR UNO
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////-->
    
<div class="contenedorUno" id="third">
	<div class="contenedor">
    
		
        
        <div class="textoUltimosProyectos">
            <h2 style="padding-left:20px;">NUESTRO PROCESO DE TRABAJO</h2>
            <span class="separador"></span>
            <p class="desaparecer">"no tenernos a nosotros como punto de partida, ayuda a cumplir el objetivo de nuestro cliente"</p>
        </div>
        
        <div class="columnaCuatro">
        	<img src="plantillas/img/planificar.png" width="50" height="50" />
            <h2>Planificar</h2>
            <span class="separador"></span>
            <strong class="desaparecer">Proyectar ideas</strong>
            <p class="desaparecer">Necesitamos saber qué quieres. Por eso nuestro primer paso será la elaboración de un ‘briefing’. Una vez recopilada toda la información nos ponemos a planificar cómo hacerlo y qué es lo necesario para conseguirlo.

</p>
        </div>
        <!--////////////////////////////////////////////////-->
        <div class="columnaCuatro">
        	<img src="plantillas/img/utilizar.png" width="50" height="50" />
       	  	<h2>Diseñar</h2>
            <span class="separador"></span>
            <strong class="desaparecer">Soñar despierto</strong>
            <p class="desaparecer">Tus ideas empiezan a materializarse. Ya tenemos el diseño. Hasta ahora hemos necesitado exprimir nuestra creatividad al máximo. Todavía queda un largo camino por recorrer, pero ‘keep calm’. Juntos encontraremos las mejores soluciones. Vamos por el buen camino.</p>
      </div>
        <!--////////////////////////////////////////////////-->
        <div class="columnaCuatro">
        	<img src="plantillas/img/diseñar.png" width="50" height="50" />
        	<h2>Crear</h2>
            <span class="separador"></span>
            <strong class="desaparecer">Desde los cimientos</strong>
            <p class="desaparecer">Cuando la solución esta madurada y aceptada por el cliente, nos pondremos manos a la obra. Aquí es cuando se trabaja a fondo y se realiza el trabajo con las técnicas y recursos necesarios.</p>
        </div>
        <!--////////////////////////////////////////////////-->
        <div class="columnaCuatro">
        	<img src="plantillas/img/lanzar.png" width="50" height="50" />
            <h2>Acción</h2>
            <span class="separador"></span>
            <strong class="desaparecer">Publicación</strong>
            <p class="desaparecer">Hemos llegado a la meta, pero antes de cruzarla es mejor que nos aseguremos de que todo ha salido como esperábamos. Aún estamos a tiempo de cambiarlo. ¿Algo que quieras modificar?

</p>
        </div>
        <!--////////////////////////////////////////////////-->
        <div class="columnaCuatro">
        	<img src="plantillas/img/crear.png" width="50" height="50" />
            <h2>Utilizar</h2>
            <span class="separador"></span>
            <strong class="desaparecer">Satisfacción</strong>
            <p class="desaparecer">Despues si te hace falta cualquier cosa, llámanos.</p>
        </div>
        <!--////////////////////////////////////////////////-->
        
        
  </div>
</div>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		CAJAS SUELTAS
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////-->

<div class="contenedorTres">

<div class="contenedorTranspa">

<div class="contenedor">
			<h2 class="titulo" style="padding-left:20px;">QUE TE OFRECEMOS:</h2>
            <span class="separador"></span>
            
            
            <div class="columnaCinco">
        	<img src="plantillas/img/diseñoWeb.png" width="50" height="50" />
            <h2>Diseño web</h2>
        	</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/tiendas-online.png" width="50" height="50" />
       	  	<h2>Tiendas online</h2>
      		</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/posicionamiento.png" width="50" height="50" />
        	<h2>Posicionamiento</h2>
        	</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/publicidad3.png" width="50" height="50" />
            <h2>Publicidad en Internet</h2>
        	</div>
            
            
        <!--////////////////////////////////////////////////-->
        
        <div class="columnaCinco">
        	<img src="plantillas/img/web-movil.png" width="50" height="50" />
            <h2>Diseño web movil</h2>
        	</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/comunity-manager.png" width="50" height="50" />
       	  	<h2>Community Manager</h2>
      		</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/campaña-mailin.png" width="50" height="50" />
        	<h2>Campañas de mailing</h2>
        	</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/programacion.png" width="50" height="50" />
            <h2>Programación para diseñadores</h2>
        	</div>
            
            
        <!--////////////////////////////////////////////////-->
        
        
        	<div class="columnaCinco">
        	<img src="plantillas/img/identidad-corporativa.png" width="50" height="50" />
            <h2>Identidad Corporativa</h2>
        	</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/diseño-grafico.png" width="50" height="50" />
       	  	<h2>Diseño gráfico</h2>
      		</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/diseño-producto.png" width="50" height="50" />
        	<h2>Diseño de producto</h2>
        	</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/publicidad1.png" width="50" height="50" />
            <h2>Publicidad</h2>
        	</div>
        <!--////////////////////////////////////////////////-->
        
        
        <div class="textoTBlanco">No te vuelvas loco,<br /> JNACHER expertos en responsive web</div>
        <div class="noTeVuelvas"></div>
</div>

</div>

</div>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		CONTENEDOR DOS
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////-->

<div class="contenedorDos" id="four">
	
    <div class="contenedor">
        <h2 style="padding:20px;">ULTIMOS PROYECTOS:</h2>
        <p>Una imagen vale más que mil palabras. ¿Para qué contarte lo que hacemos si lo   puedes ver? Visita la sección ¿Que hacemos? y descubre cómo trabajamos.</p>
        <br />
        <a href="que-hacemos/lahuerta-naranja">
        <div class="ultimo">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/lahuerta-naranja.png" alt="lahuerta-naranja" width="100%" />
          	<div class="cada_proyectot"><strong>Empresa:</strong> LahuertaNaranja </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Tienda online & imagen </div>
        </div>    
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="que-hacemos/vive-valencia">
        <div class="ultimo">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/vive-valencia.png" alt="vive-valencia" width="100%"  />
          	<div class="cada_proyectot"><strong>Empresa:</strong> ViveValencia </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Diseño web & imagen </div>
        </div>     
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="que-hacemos/evolution-motos">
        <div class="ultimo">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/evolution-motos.png" alt="evolution-motos" width="100%"  />
          	<div class="cada_proyectot"><strong>Empresa:</strong> Evolution motos </div>
			<div class="cada_proyectot2"><strong>Servicio:</strong> Diseño web & logotipo </div>
        </div>    
		</a>
        
		<div class="textoUltimosProyectos">
            <h2>CLIENTES SATISFECHOS</h2>
            <span class="separador"></span>
          <p>Para &lsquo;JNacher estudio de diseño&rsquo; lo importante eres tú. Seguridad, confianza y   satisfacción. Estos tres valores articulan nuestro día a día y nos obligan a   trabajar duro por nuestros clientes. Sabemos que podemos ofrecerles el mejor   producto, adaptado a sus gustos y a sus necesidades. Porque su felicidad es   nuestra mejor recompensa. </p>
        </div>
        
        <div class="textoUltimosProyectos">
            <h2>TESTIMONIOS</h2>
            <span class="separador"></span>
            
                <!--<div class="img"><img  src="plantillas/img/testimonios/paquillo.jpg" width="116" height="120" /></div>
                <div class="columna">
                    <span>Paquito Hernandez</span><br />
                    <span>Directivo ejecutivo pepito</span>
                    <p >Nos realizaron el diseño de nuestra marca y nuestra tienda online. El resultado fue muy satisfactorio. Un servicio profesional, acompañado de muy buen trato.</p>
                </div>-->
                
        </div>
  
 
	</div>

</div>

<!--/////////////////////////////////imagen trasera--></div><!--/////////////////////////////////imagen trasera-->

<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		PIE DE PAGINA
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 

		<?php echo $_smarty_tpl->getSubTemplate ("pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>