<?php /* Smarty version Smarty-3.1.12, created on 2013-03-15 20:02:18
         compiled from "/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4718532865138f7c0d87014-18128267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07ec5798f952ddbc4f7d93b523174f2e0bee36d6' => 
    array (
      0 => '/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/home.tpl',
      1 => 1363374045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4718532865138f7c0d87014-18128267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5138f7c151b160_09295268',
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
<?php if ($_valid && !is_callable('content_5138f7c151b160_09295268')) {function content_5138f7c151b160_09295268($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        
    <p class="textoIntro" style=" color:#FFFFFF; font-weight:400;"> estudio de diseño, gráfico, programación y sitios web que bla bla bla bla. Hablando en serio, nosotros podemos escribir prácticamente algo como “Somos la extensión del departamento de comunicación de su empresa”, “Somos un equipo multidisciplinar”, “Nuestro estudio está formado por profesionales especializados”, “Nuestro compromiso es ofrecer un servicio completo y de calidad a un precio competitivo”. No nos engañemos……somos un pequeño estudio de diseño y todo eso también lo hacemos y pensamos nosotros. Sigue bajando y enterate por qué sucede esto.</p>
    
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
            <strong class="desaparecer">A sacar punta!</strong>
            <p class="desaparecer">El proyecto se inicia con la recolección de toda la información necesaria, "briefing". Una vez que esta información ha sido recolectada. Aquí se definen las tácticas, el presupuesto, la hoja de ruta y los requerimientos técnicos.</p>
        </div>
        <!--////////////////////////////////////////////////-->
        <div class="columnaCuatro">
        	<img src="plantillas/img/utilizar.png" width="50" height="50" />
       	  	<h2>Diseñar</h2>
            <span class="separador"></span>
            <strong class="desaparecer">Estrujando el coco</strong>
            <p class="desaparecer">El diseño y el concepto empiezan a tomar forma. Este proceso es el más creativo por ello a veces hay que recurrir a tomar unos cuantos litros de café, pero al final encontraremos la mejor solución posible.</p>
      </div>
        <!--////////////////////////////////////////////////-->
        <div class="columnaCuatro">
        	<img src="plantillas/img/diseñar.png" width="50" height="50" />
        	<h2>Crear</h2>
            <span class="separador"></span>
            <strong class="desaparecer">Desde abajo</strong>
            <p class="desaparecer">Una vez que la solución haya sido encontrada y aceptada por el cliente, nos pondremos manos a la obra. En este proceso todas las piezas empiezan a unirse a través de las tecnologías y los recursos elegidos para la ejecución del proyecto.</p>
        </div>
        <!--////////////////////////////////////////////////-->
        <div class="columnaCuatro">
        	<img src="plantillas/img/lanzar.png" width="50" height="50" />
            <h2>Acción</h2>
            <span class="separador"></span>
            <strong class="desaparecer">Lo publicamos</strong>
            <p class="desaparecer">Una vez finalizadas todas las piezas, puliremos nuestro trabajo para asegurarnos que todos los detalles hayan sido tomados en cuenta para luego lanzar el proyecto “al aire”.</p>
        </div>
        <!--////////////////////////////////////////////////-->
        <div class="columnaCuatro">
        	<img src="plantillas/img/crear.png" width="50" height="50" />
            <h2>Utilizar</h2>
            <span class="separador"></span>
            <strong class="desaparecer">Un cliente satisfecho</strong>
            <p class="desaparecer">Despues si te hace falta cualquier cosa, llámanos. Nos da igual que quieras una tarjeta de visita para tu mascota que una valla publicitaria en la luna. El proceso lo vamos a hacer de la misma manera.</p>
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
        	<img src="plantillas/img/publicidad.png" width="50" height="50" />
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
        <p>Estos son algunos de los últimos proyectos que hemos desarrollado, visita la sección ¿QUE HACEMOS? para conocer nuestros trabajos, el tipo de web que necesitas y posibles modelos de negocio a seguir.</p><br />
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
            <h2>CLIENTES FELICES</h2>
            <span class="separador"></span>
            <p>Trabajamos duro para proveer ideas y que todos nuestros trabajos sean lo esperado para todos nuestros clientes. Ellos aprecian la posibilidad de trabajar con las mismas personas que presentan las ideas. Nosotros por otro lado, creemos que este simple hecho fomenta la confianza y la seguridad en lo que producimos. Esto también nos ayuda a asegurarnos de presentar solamente aquellas ideas que queremos ejecutar. Al final del día la apreciación de nuestros clientes es el mejor premio que nos pueden otorgar.</p>
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