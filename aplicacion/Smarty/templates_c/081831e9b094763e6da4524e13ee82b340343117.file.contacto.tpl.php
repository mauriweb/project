<?php /* Smarty version Smarty-3.1.12, created on 2013-05-02 11:25:57
         compiled from "C:\xampp\htdocs\proyecto\plantillas\tpl\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27436509bea4b61de36-75828414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '081831e9b094763e6da4524e13ee82b340343117' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\plantillas\\tpl\\contacto.tpl',
      1 => 1367486723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27436509bea4b61de36-75828414',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509bea4b695308_64392232',
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
<?php if ($_valid && !is_callable('content_509bea4b695308_64392232')) {function content_509bea4b695308_64392232($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
<meta name="Title" content="<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
">
<meta name="description" content="Consúltenos de forma gratuita cualquier duda sobre marketing online, nuestros asesores estarán encantados de ayudarle." />
<meta name="keywords" content="contactar, contacto, contacto empresa diseño web" />

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
    background-image: url("/plantillas/img/bg_page_06.png");
    background-repeat: repeat;
}
.cajaTexto{
	background-color: rgba(153, 43, 127, 0.7);
		
}
.caja{
	float:right;
	color:#FFFFFF;
	padding:10px;
	margin-top:20px;
	text-align:right;
	font-size:20px;
}
.textoContacto{
	font-size:80px;
	color:#FFF;
	text-align:right;
	padding:10px;
}
.mano{
	width:100%;
	height:100%;
	position:absolute;
	display:inline-block;
	left:0px;
	top:0px;
	background-image: url(/plantillas/img/mano.png);
	background-repeat: no-repeat;
	background-position: center center;
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

/////////////// CONTACTO

	
		$(".contenedorContactoFondo").hover(function(){
			$(this).children(".contenedorContacto").animate({opacity: "0"}, "slow");
			return false;
		}, function(){
			$(this).children(".contenedorContacto").animate({opacity: "1"}, "fast");
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
    
    
      <div class="cajaTexto">CONTACTO <span style="font-size:9px;"></span>
        
    <p class="textoIntro" style=" color:#FFFFFF; font-weight:400;">Acércate al estudio a conocernos. Tómate un café con nosotros y allí verás como somos de verdad. De una cosa puedes estar segur@: no hablaremos de jnacher, hablaremos de tu negocio y de cómo hacer que consigas un plus.
</p>
    
      </div>
    
    </div>
</div>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		CONTENEDOR UNO
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="contenedorContactoFondo" id="third">
	<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Calle+Mos%C3%A9n+Eusebio+Gimeno,+Albal+20&amp;aq=t&amp;sll=39.316265,-0.418859&amp;sspn=6.976291,16.907959&amp;ie=UTF8&amp;hq=&amp;hnear=Calle+Mos%C3%A9n+Eusebio+Gimeno,+20,+46470+Albal,+Valencia&amp;t=m&amp;z=14&amp;ll=39.396329,-0.412517&amp;output=embed">
    </iframe>
    
   
  <div class="contenedorContacto" id="four">
    <div class="mano">
      <div class="contenedor">
            
                <br /><br />
                <h2 class="textoContacto" style=" font-size:50px;">Teléfono: 669529175</h2>
                
                <h2 class="textoContacto" >Email: info@jnacher.com</h2>
       			<h2 class="caja">Estudio: C/ Mossen Eusebio Gimeno n20 Albal (Valencia)</h2>
        
        </div>
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