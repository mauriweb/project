<?php /* Smarty version Smarty-3.1.12, created on 2013-04-18 18:40:19
         compiled from "/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/ingles/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:403025311514c4391e17df4-23112467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7883972945233342c5f484af19a7b80e0b5aaebf' => 
    array (
      0 => '/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/ingles/home.tpl',
      1 => 1366280136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '403025311514c4391e17df4-23112467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_514c439212b2a3_05531155',
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
<?php if ($_valid && !is_callable('content_514c439212b2a3_05531155')) {function content_514c439212b2a3_05531155($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

		<?php echo $_smarty_tpl->getSubTemplate ("ingles/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		ESTRUCTURA
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    


<div class="fondoContenedor" id="first">
    <div class="contenedor">
    
    
      <div class="cajaTexto">THIS IS JNACHER <span style="font-size:9px;">team</span>
        
    <p class="textoIntro" style=" color:#FFFFFF; font-weight:400;"> graphic, programming, Design studio and websites that bla,bla,bla, let's be serious, we could write practically something like "we are the extension of the communication department of your company", "we are a multidisciplinary team", "our team is formed by specialized professionals", "our commitment is to offer a complete and quality service to a competitive price". don't let's kid ourselves... we are a small design studio and all of that also is thought and made by ourselves, keep scrolling down and find out why this is happening.</p>
    
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
            <h2 style="padding-left:20px;">OUR WORK PROCESS</h2>
            <span class="separador"></span>
            <p class="desaparecer">"We've got ourselves as a starting point; it helps to reach the aim of our customer"</p>
        </div>
        
        <div class="columnaCuatro">
        	<img src="plantillas/img/planificar.png" width="50" height="50" />
            <h2>Planning</h2>
            <span class="separador"></span>
            <strong class="desaparecer">To extracting top!</strong>
            <p class="desaparecer">Sharpen, the project starts with the recollection of all the necessarily information, "briefing". Once this information has been recollected, here the techniques, budget, waybill and technical requirements are defined.</p>
        </div>
        <!--////////////////////////////////////////////////-->
        <div class="columnaCuatro">
        	<img src="plantillas/img/utilizar.png" width="50" height="50" />
       	  	<h2>Designning</h2>
            <span class="separador"></span>
            <strong class="desaparecer">Squeezing the mind</strong>
            <p class="desaparecer">the design and subject begin to take form. This process is the most creative, and because of that a few litres of coffee is required, but at the end we will find the best possible solution.</p>
      </div>
        <!--////////////////////////////////////////////////-->
        <div class="columnaCuatro">
        	<img src="plantillas/img/diseñar.png" width="50" height="50" />
        	<h2>Creating</h2>
            <span class="separador"></span>
            <strong class="desaparecer">From below</strong>
            <p class="desaparecer">From the bottom, once the solution has been found and accepted by the customer, we will get to work, in this process all the pices start to join each other through technology and resources chosen by the execution of the project.</p>
        </div>
        <!--////////////////////////////////////////////////-->
        <div class="columnaCuatro">
        	<img src="plantillas/img/lanzar.png" width="50" height="50" />
            <h2>Action</h2>
            <span class="separador"></span>
            <strong class="desaparecer">We publish it</strong>
            <p class="desaparecer">we publish it, once every pice is finished; we will polish our work to ensure every detail has been bear in mind to lunch the project afterwords.</p>
        </div>
        <!--////////////////////////////////////////////////-->
        <div class="columnaCuatro">
        	<img src="plantillas/img/crear.png" width="50" height="50" />
            <h2>To use</h2>
            <span class="separador"></span>
            <strong class="desaparecer">A happy customer</strong>
            <p class="desaparecer">Afterword’s if you need anything, just give us a call. We don't mind if you want a visiting card for your pet or a billboard on the moon, we are going to make the process the same way.</p>
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
			<h2 class="titulo" style="padding-left:20px;">THAT WE OFFER YOU:</h2>
            <span class="separador"></span>
            
            
            <div class="columnaCinco">
        	<img src="plantillas/img/diseñoWeb.png" width="50" height="50" />
            <h2>Web design</h2>
        	</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/tiendas-online.png" width="50" height="50" />
       	  	<h2>Shops online</h2>
      		</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/posicionamiento.png" width="50" height="50" />
        	<h2>Positioning</h2>
        	</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
            <img src="plantillas/img/publicidad3.png" width="50" height="50" />
            <h2>Advertising in Internet</h2>
        	</div>
            
            
        <!--////////////////////////////////////////////////-->
        
        <div class="columnaCinco">
        	<img src="plantillas/img/web-movil.png" width="50" height="50" />
            <h2>Web mobile design</h2>
        	</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/comunity-manager.png" width="50" height="50" />
       	  	<h2>Community Manager</h2>
      		</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/campaña-mailin.png" width="50" height="50" />
        	<h2>Campaigns of mailing</h2>
        	</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/programacion.png" width="50" height="50" />
            <h2>Programming for designers</h2>
        	</div>
            
            
        <!--////////////////////////////////////////////////-->
        
        
        	<div class="columnaCinco">
        	<img src="plantillas/img/identidad-corporativa.png" width="50" height="50" />
            <h2>Corporate identity</h2>
        	</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/diseño-grafico.png" width="50" height="50" />
       	  	<h2>Graphical design</h2>
      		</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/diseño-producto.png" width="50" height="50" />
        	<h2>Design of product</h2>
        	</div>
        <!--////////////////////////////////////////////////-->
        	<div class="columnaCinco">
        	<img src="plantillas/img/publicidad1.png" width="50" height="50" />
            <h2>Advertising</h2>
        	</div>
        <!--////////////////////////////////////////////////-->
        
        
        <div class="textoTBlanco">Do not turn madman,<br /> JNACHER experts in responsive web</div>
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
        <h2 style="padding:20px;">LATEST PROJECTS:</h2>
        <p>These are some of the latest projects we have created, visit the section what do we do? To take a look in our projects, the kind of web you need and possible models of business to follow.</p><br />
        <a href="that-we-do/lahuerta-naranja">
        <div class="ultimo">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/lahuerta-naranja.png" alt="lahuerta-naranja" width="100%" />
          	<div class="cada_proyectot"><strong>Customer:</strong> LahuertaNaranja </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Tienda online & imagen </div>
        </div>    
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="that-we-do/vive-valencia">
        <div class="ultimo">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/vive-valencia.png" alt="vive-valencia" width="100%"  />
          	<div class="cada_proyectot"><strong>Customer:</strong> ViveValencia </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Diseño web & imagen </div>
        </div>     
        </a>
       <!-- /////////////////////////////////////////////////////-->
        <a href="that-we-do/evolution-motos">
        <div class="ultimo">
        	<div class="image-hover">
            </div>
            <h2></h2>
         	
            <img src="imagenes/proyectos/evolution-motos.png" alt="evolution-motos" width="100%"  />
          	<div class="cada_proyectot"><strong>Customer:</strong> Evolution motos </div>
			<div class="cada_proyectot2"><strong>Service:</strong> Diseño web & logotipo </div>
        </div>    
		</a>
        
		<div class="textoUltimosProyectos">
            <h2>HAPPY CUSTOMER</h2>
            <span class="separador"></span>
            <p>We work hard to provide ideas and making sure all our work is the one expected by the customer. They appreciate the possibility of working with the same people who expose the ideas; on the other hand we believe this simple fact is the one which promote the confidence and security of what we offer. That helps us to ensure ourselves of offering only those ideas that we want to execute. At the end of the day the appreciation of our customers is the best reward they can grant to us.</p>
        </div>
        
        <div class="textoUltimosProyectos">
            <h2>TESTIMONIES</h2>
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

		<?php echo $_smarty_tpl->getSubTemplate ("ingles/pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>