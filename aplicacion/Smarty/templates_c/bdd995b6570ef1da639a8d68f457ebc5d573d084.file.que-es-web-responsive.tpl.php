<?php /* Smarty version Smarty-3.1.12, created on 2013-04-19 09:08:58
         compiled from "/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/noticias/que-es-web-responsive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:699830450513f741b3cdfe2-48455968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdd995b6570ef1da639a8d68f457ebc5d573d084' => 
    array (
      0 => '/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/noticias/que-es-web-responsive.tpl',
      1 => 1366280138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '699830450513f741b3cdfe2-48455968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_513f741b550d79_08236556',
  'variables' => 
  array (
    'titulo' => 0,
    'articulo' => 0,
    'DOMINIO' => 0,
    'pagina' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f741b550d79_08236556')) {function content_513f741b550d79_08236556($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	<meta property="og:tag name" content="tag value"/> 
	<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
" /><!--/////////////////////////////PONER TITULO-->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="	http://www.jnacher.com/noticias/<?php echo $_smarty_tpl->tpl_vars['articulo']->value;?>
/" />
	<meta property="og:image" content="http://www.jnacher.com/imagenes/noticias/responsive-web-design.jpg" /><!--/////////////////////////////IMAGEN FACEBOOK-->
	<meta property="og:site_name" content="jnacher estudio de diseño" />
	<meta property="fb:admins" content="594435717" />
          
<!--FACEBOOK////////////////////////////////////////////////////-->     
<link rel="icon" type="image/png" href="plantillas/img/favicon.png" />

<base href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
"/>
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['articulo']->value;?>
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



<!--//////FACEBOOK/////////////-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--//////FACEBOOK/////////////-->



<style type="text/css">
.leer a{
	color:#FFFFFF;
	
}
.leer2 a {
	color:#FFFFFF;
	
}
.leer:hover {
    background-color: #0197D2;
}
.leer2:hover {
    background-color: #3B5998;
}
</style>
<script type="text/javascript" src="plantillas/js/parallax/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="plantillas/js/parallax/jquery.scrollTo-1.4.2-min.js"></script>


<script type="text/javascript">




$(document).ready(function(){
	



/////////////// REDES SOCIALES 

	
		$(".general a").hover(function(){
			$(this).animate({opacity: "0.6"}, "slow");
			return false;
		}, function(){
			$(this).animate({opacity: "1"}, "fast");
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
    //		CONTENEDOR UNO
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////-->
    
<div class="contenedorUno" id="third">
	<div class="contenedor">
    
		
        
        <div class="textoUltimosProyectos">
           	<div class="imagenCabeceraInfo"><img src="plantillas/img/noticias/responsive-web-design.jpg" width="100%" alt="diseño web" /></div>
            <br />
            <div class="fb-like" data-href="http://www.jnacher.com/noticias/<?php echo $_smarty_tpl->tpl_vars['articulo']->value;?>
" data-send="false" data-layout="box_count" data-width="450" data-show-faces="true"></div>
            <br />
            <h2 style="padding-left:20px; color:#0197D2;"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
            <span class="separador"></span>            
            
            <p>
            Un diseño responsive (o RWD, de Responsive Web Design) es un diseño que es capaz de adaptarse al dispositivo con el que estamos navegando el sitio. En este tipo de diseños se envía el mismo contenido siempre y es el móvil, la tablet o el ordenador el que realiza el trabajo de adaptar la visualización a la pantalla, normalmente ayudados por javascript. Esta adaptación a la pantalla del dispositivo se suele realizar apilando las columnas o módulos que formen nuestro sitio formando una o dos columnas en la pantalla del dispositivo, mostrando primero las columnas más a la izquierda y finalmente las que estén más a la derecha de nuestro diseño. Las ventajas de este tipo de diseño son:<br /><br />

    Sólo necesitaremos un único diseño para todo el sitio.<br />
    El diseño será el mismo para cualquier dispositivo por lo que no habrá usuarios que piensen que están en otro sitio si acceden con el móvil.<br />
    Los diseños responsive utilizan el tamaño de la pantalla del dispositivo para adaptar el contenido, por lo que una mayor número de dispositivos verán correctamente el sitio.<br />
    En general el coste de desarrollo de un sitio responsive es menor que el de un sitio adaptive.<br /><br />

La desventajas de esta aproximación son<br /><br />

    no podremos definir una estrategia móvil independiente y en algunos casos tendremos que tomar decisiones de compromiso para que nuestros sitios se vean correctamente en varios sitios.<br />
    Los dispositivos antiguos no se adaptarán correctamente a estos diseños.<br />
    En el caso de acceso con móviles, estaremos sobrecargando la red del usuario al enviar muchos más datos de los que necesita el dispositivo para mostrar correctamente el sitio.<br />


		  	</p><br /><br />
            
            
            <h2 style="padding-left:20px; color:#0197D2;">¿Qué es un diseño adaptive?</h2>
			<span class="separador"></span>  <br />
            <p>
Un diseño adaptive es aquel que se realiza pensando exclusivamente en cómo quedará nuestro diseño en uno o varios dispositivos (por lo general móviles). En este tipo de diseños el servidor detecta el dispositivo que accede a la web y le envía un el contenido adaptado al mismo. Las ventajas de este tipo de diseño son:<br /><br />

    Al enviar sólo contenido adaptado para el dispositivo, la velocidad de carga de la página mejorará al no enviar contenido innecesario y no obligar al dispositivo a cambiar cómo se muestra ese contenido.
    Nos obliga a pensar específicamente la experiencia móvil que queremos que tengan nuestros usuarios y eso mejorará la experiencia móvil.<br />
    Podremos crear experiencias diferentes para distintos dispositivos.<br />
    Podemos crear tantos diseños como dispositivos queramos diferenciar, permitiéndonos tener en cuenta las limitaciones de cada dispositivo (evitar uso de JavaScript o Flash para modelos antiguos, por ejemplo)<br /><br />

La desventaja mayor de este método es que necesitaremos realizar un diseño extra por cada dispositivo por lo que se duplica el trabajo en el mejor de los casos y esto implica un encarecimiento del desarrollo.
			</p><br /><br />
			
            <h2 style="padding-left:20px; color:#0197D2;">Entonces... ¿cuál elegir?</h2>
			<span class="separador"></span>  <br />
            <p>
			En Jnacher estudio de diseño optamos por la opción de adaptive ya que es como mejor se puede trabajar y tener un mayor control de lo que se quiera mostrar o no. Por ejemplo esta web es adaptive. ¿que os parece?...
			</p>
            
            
      </div>
        <br />
        <span class="separador"></span>     
        <a href="noticias"><div class="leer2"><<<<<<<<< atras <<<<<<<<< </div></a>
        
        
        
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