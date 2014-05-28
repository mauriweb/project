<?php /* Smarty version Smarty-3.1.12, created on 2013-05-23 10:39:44
         compiled from "C:\xampp\htdocs\proyecto\plantillas\tpl\noticias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210015135c8f0ca5719-78505924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed369080f535085443d58ce9fbba22998a748cfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\plantillas\\tpl\\noticias.tpl',
      1 => 1369298383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210015135c8f0ca5719-78505924',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5135c8f0d30887_52758394',
  'variables' => 
  array (
    'titulo' => 0,
    'DOMINIO' => 0,
    'pagina' => 0,
    'categoria' => 0,
    'articulo' => 0,
    'news' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5135c8f0d30887_52758394')) {function content_5135c8f0d30887_52758394($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        
       		<h2 style="padding-left:20px; color:#225600; "><?php echo utf8_encode($_smarty_tpl->tpl_vars['v']->value['titulo']);?>
</h2>
            <span class="separador"></span> 
          	<p>
           		<?php echo utf8_encode(recortar_texto($_smarty_tpl->tpl_vars['v']->value['texto'],150));?>

           	</p>
            <br />
            
         	<a href="noticias/<?php echo $_smarty_tpl->tpl_vars['v']->value['slug'];?>
"><div class="leer2">seguir leyendo</div></a>
        
        
        <?php } ?>
              
        	
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