<?php /* Smarty version Smarty-3.1.12, created on 2013-03-12 11:31:49
         compiled from "C:\xampp\htdocs\proyecto\plantillas\tpl\proyectos\moreno-abogados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22112513f0407b5e441-44553350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afe8d5e3983b74eaeeb8659880ed240d88399726' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\plantillas\\tpl\\proyectos\\moreno-abogados.tpl',
      1 => 1363084306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22112513f0407b5e441-44553350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_513f0407bf6229_58074924',
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
<?php if ($_valid && !is_callable('content_513f0407bf6229_58074924')) {function content_513f0407bf6229_58074924($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	<meta property="og:title" content="Diseño web morenoabogados" />
    <meta property="og:description" content="Proyecto hecho para Fernando, hicimos una carta de presentación online." />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="	http://www.jnacher.com/que-hacemos/<?php echo $_smarty_tpl->tpl_vars['articulo']->value;?>
/" />
	<meta property="og:image" content="http://www.jnacher.com/imagenes/proyectos/morenoabogados.jpg" />
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
           
            <h2 style="padding-left:20px; color:#0197D2;">Web básica Moreno Abogados</h2>
            <span class="separador"></span>            
            
            <p>
			
            <span style="padding-left:10px; color:#0197D2;">Cliente:</span> Moreno Abogados<br />
            <span style="padding-left:10px; color:#0197D2;">Año:</span> 2012<br /><br />
            
            <p>Proyecto hecho para Fernando, hicimos una carta de presentación online.</p><br />
            <span style="padding-left:10px; color:#0197D2;">Trabajo realizados:</span><br />
            <span class="separador"></span><br />
            <span style="padding-left:20px;">Diseño web.</span><br />
            
            <br />
            <a href="presupuestos"><div class="leer2">presupuesto</div></a>
            <a target="_blank" href="http://www.morenoabogado.com"><div class="leer">visitar web</div></a>
		  </p>
            
            
             <div class="imagenCabeceraInfo"><img src="plantillas/img/proyectos/morenoabogados.jpg" width="100%" alt="diseño web" /></div><br />
             <div class="imagenCabeceraInfo"><img src="plantillas/img/proyectos/morenoabogados1.jpg" width="100%" alt="diseño web" /></div><br />
             <div class="imagenCabeceraInfo"><img src="plantillas/img/proyectos/morenoabogados2.jpg" width="100%" alt="diseño web" /></div><br />

             <br />
             <br />
             <div class="fb-like" data-href="http://www.jnacher.com/que-hacemos/moreno-abogados" data-send="false" data-layout="box_count" data-width="450" data-show-faces="true"></div>
                        
            
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