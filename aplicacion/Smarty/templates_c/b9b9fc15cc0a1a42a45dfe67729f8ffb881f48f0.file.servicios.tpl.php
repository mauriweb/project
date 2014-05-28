<?php /* Smarty version Smarty-3.1.12, created on 2013-04-18 22:13:34
         compiled from "/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/ingles/servicios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:221956054514c439b6315c4-19968165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9b9fc15cc0a1a42a45dfe67729f8ffb881f48f0' => 
    array (
      0 => '/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/ingles/servicios.tpl',
      1 => 1366280137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221956054514c439b6315c4-19968165',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_514c439b9da606_38788428',
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
<?php if ($_valid && !is_callable('content_514c439b9da606_38788428')) {function content_514c439b9da606_38788428($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    
    
      <div class="cajaTexto">SERVICES <span style="font-size:9px;"></span>
        
    <p class="textoIntro" style=" color:#FFFFFF; font-weight:400;">Our prices will not empty your pockets, very short terms for small projects, the project designer will answer personally the phone and emails, our designs are based in what is better for you and your business.
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
           
            <h2 style="padding-left:20px; color:#D6275C;">Shop online</h2>
            <span class="separador"></span>            
            <p>
			
	
            Basic Ecommerce.<br />
            Professional Ecommerce.<br />
            Custom Ecommerce.<br /><br />
			</p>
            
          	<a href="budget-request"><div class="leer2">Budget</div></a>
            <a href="services/shops-online"><div class="leer">+ Information</div></a>
                        
            <h2 style="padding-left:20px; color:#D41471;">Web design</h2>
            <span class="separador"></span>            
            <p>


            Static web corporative.<br />
            Web corporative self-managed..<br />
            Web flexible.<br />
            Web Mobil.<br /><br />
			</p>
            <a href="budget-request"><div class="leer2">Budget</div></a>
            <a href="services/web-design"><div class="leer">+ Information</div></a>
            
            <h2 style="padding-left:20px; color:#E03261;">Web programming for designers</h2>
            <span class="separador"></span>            
            <p>
            Layout and programming from a design on .psd or image format.<br /><br />
			</p>
            <a href="budget-request"><div class="leer2">Budget</div></a>
            <a href="services/web-programming-designers"><div class="leer">+ Information</div></a>
            
            <h2 style="padding-left:20px; color:#C35A74;">SEO positioning and y Advertising on internet</h2>
            <span class="separador"></span>            
            <p>
			Online campaigns. SEM/SEO. Google Adwords.Analysis of results and impacts.<br /><br />
			<strong>Basic Seo</strong><br /><br />

            We position your web in the main search engines with special attention in Google.<br />
            We select the best key words for your business.<br />
            Analysis, report and proposal for SEO improvements.<br />
            Improvement internal factors. Meta tag creation, sitemap generation<br />
            Improvement external factors. Permanent campaign of achievement of lasting links.<br />
            We do not use either link farms or own links, you will not lose the links once the SEO project is finished.<br />
           Tracing evolution for Google Analytics so the client can watch at any moment his website data.<br /><br />

			<strong>Advanced Seo</strong><br /><br />
			We generate quality traffic of several free sources.<br />
			We don't only pursue to position a particular key word in the search engines but we generate a flow of noticeable, growing and quality traffic through various sources.<br /><br />

			IT INCLUDES EVERY CHARACTERISTIC OF BASIC SEO AND BESIDES:<br /><br />

            Online Public Relations Campaign. We Generate and spread your content in sector portals and websites of journalists.<br />
            Management Multimedia channels (YouTube, Flickr, Google Video, Yahoo! Video...).<br />
            Promotion in social network (Facebook, Twitter, LinkedIn...).<br />
            Advanced Analitics setting included to analyze profitability of every traffic source (SEO, SEM, e-Mailing, Redes Sociales...).<br />
            SEO Semantic.<br /><br />
			</p>
            <a href="budget-request"><div class="leer2">Budget</div></a>
            <h2 style="padding-left:20px; color:#DC4B61;">Community Manager</h2>
            <span class="separador"></span>            
            <p>
			We create your professional presence in social networks, boost your channles and manage campaigns of publicity in facebook, Twitter, LinkedIn, YouTube, Blogs...<br /><br />
			</p>
            <a href="budget-request"><div class="leer2">Budget</div></a>
            <h2 style="padding-left:20px; color:#D8285C;">Campaigns of mailing.</h2>
            <span class="separador"></span>            
            <p>
			We make sure your products reach all your customers.<br /><br />
            </p>
            <a href="budget-request"><div class="leer2">Budget</div></a>
          	<h2 style="padding-left:20px; color:#A26287;">Corporate Identity</h2>
            <span class="separador"></span>            
            <p>
            Brand.<br />
            Corporate brand creation, design and management.<br />
            Corporative identity.<br />
            A well performed image is not a logotype, a well performed logotype is not a simple picture with letters on it. it is necessarily to maintain a visual consistency in all the communications that a company make, like Brochures, stationery, web pages, etc. the corporative image of a company is its cover letter, its face to the public and is part of its identity, from this identity will depend the organization image..<br /><br />
			</p>
            <a href="budget-request"><div class="leer2">Budget</div></a>
            <h2 style="padding-left:20px; color:#DF7B4F;">Graphic design</h2>
            <span class="separador"></span>            
            <p>

            Communication.<br />
            Logotypes design and layout, business cards, Brochures, leaflets .<br />
            Brochures and Catalogs.<br />
            Design and layout of Brochures and Catalogs for companies and institutions.<br />
            Editorial.<br />
            Design and layout of editorial projects.<br />
            Graphic advertising.<br />
            Graphic design at any graphic format of publicity.<br />
            Signage.<br />
            Designs elements of corporate signage.<br />
            Packaging.<br />
            Design and development of graphic applications for containers and packaging.<br /><br />
			</p>
            <a href="budget-request"><div class="leer2">Budget</div></a>
            <h2 style="padding-left:20px; color:#BC168A;">Product design</h2>
            <span class="separador"></span>            
            <p>

            Furniture and illumination.<br />
            Design and development products .<br />
            Packaging.<br />
            Industrial design, and containers and packaging development for products.<br />
            Product.<br />
            Design and development of new products for companies.<br /><br />
			</p>
            <a href="budget-request"><div class="leer2">Budget</div></a>
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