<?php /* Smarty version Smarty-3.1.12, created on 2013-04-30 19:08:13
         compiled from "C:\xampp\htdocs\proyecto\plantillas\tpl\noticias\correo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7324517ffa7d0a0573-91058719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18abeaab56b9db5e8a95da118bb6561862ced43b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\plantillas\\tpl\\noticias\\correo.tpl',
      1 => 1367340341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7324517ffa7d0a0573-91058719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'articulo' => 0,
    'DOMINIO' => 0,
    'pagina' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_517ffa7d1439a9_19068007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517ffa7d1439a9_19068007')) {function content_517ffa7d1439a9_19068007($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
           	
            <br />
            <div class="fb-like" data-href="http://www.jnacher.com/noticias/<?php echo $_smarty_tpl->tpl_vars['articulo']->value;?>
" data-send="false" data-layout="box_count" data-width="450" data-show-faces="true"></div>
            <br />
            <h2 style="padding-left:20px; color:#0197D2;"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
            <span class="separador"></span>            
            
            <p>
           ¿Qué información necesita para configurar programas de correo electrónico?<br /><br />

Si desea configurar un cliente de correo, deberá tener la siguiente información, Jnacher siempre le ayudaremos a solucionar este problema tan típico. <br /><br />

PARA PROTOCOLO IMAP <br />
________________________________________<br /><br />


Tipo de Servidor:IMAP <br />
Servidor Entrante:imap.1and1.es <br />
Puerto IMAP:143 <br />
Puerto IMAP con SSL activado:993 <br /><br />

Servidor Saliente(SMTP): smtp.1and1.es <br />
Puerto SMTP: 25 o 587 <br />
El servidor saliente (SMTP) requiere autenticación (nombre de usuario y contraseña) <br />
Opcional: Asegure el cifrado del SMTP utilizando TLS (utilizando cualquiera de los dos puertos)<br /><br />

Nombre de cuenta/Nombre de usuario: Su dirección de e-mail <br />
Contraseña: Contraseña de su e-mail <br /><br /><br />


PARA PROTOCOLO POP3 <br />
________________________________________
<br /><br />

Tipo de Servidor: POP3 <br />
Servidor Entrante: pop.1and1.es <br />
Puerto POP3: 110 <br />
Puerto POP3 con SSL activado: 995 <br /><br />

Servidor Saliente(SMTP): smtp.1and1.es <br />
Puerto SMTP: 25 o 587 <br />
El servidor saliente (SMTP) requiere autenticación (nombre de usuario y contraseña) <br />
Opcional: Asegure el cifrado del SMTP utilizando TLS (utilizando cualquiera de los dos puertos)<br /><br />

Nombre de cuenta/Nombre de usuario: Su dirección de e-mail <br />
Contraseña: Contraseña de su e-mail<br />

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