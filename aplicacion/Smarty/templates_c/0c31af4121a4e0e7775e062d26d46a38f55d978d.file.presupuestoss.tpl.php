<?php /* Smarty version Smarty-3.1.12, created on 2013-03-28 21:49:09
         compiled from "/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/presupuestoss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12750509585154a5630de2b9-43019911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c31af4121a4e0e7775e062d26d46a38f55d978d' => 
    array (
      0 => '/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/presupuestoss.tpl',
      1 => 1364503745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12750509585154a5630de2b9-43019911',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5154a5633576d2_72142570',
  'variables' => 
  array (
    'titulo' => 0,
    'DOMINIO' => 0,
    'pagina' => 0,
    'categoria' => 0,
    'articulo' => 0,
    'res' => 0,
    'errorNombre' => 0,
    'Nombre' => 0,
    'errorEmail' => 0,
    'errorTelefono' => 0,
    'errorMensaje' => 0,
    'errorPolitica' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5154a5633576d2_72142570')) {function content_5154a5633576d2_72142570($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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


<style type="text/css">
.fondoContenedor {
    background-image: url("/plantillas/img/bg_page_05.png");
    background-repeat: repeat;
}

.cajaTexto{
	background-color: rgba(224, 182, 0, 0.7);
		
}
.leer2:hover {
    background-color: #8AC130;
}


.errores-box {
	position: relative;
	color:#E6830A;
	padding:10px;
	width:80%;
	display:none;
	background-color: #FFFFFF;
	text-align:center;
	border-top-width: 1px;
	border-top-style: solid;
	border-top-color: #E6830A;
	border-bottom-width: 1px;
	border-bottom-style: dotted;
	border-bottom-color: #E6830A;
} 
.errores-box:after, .errores-box:before { 
	bottom: 100%; 
	border: solid transparent; 
	content: " "; 
	height: 0; 
	width: 0; 
	position: absolute; 
	pointer-events: none; 
} 
.errores-box:after {
	border-bottom-color: #FFFFFF;
	left: 50%;
	margin-left: -30px;
	border-top-width: 15px;
	border-right-width: 15px;
	border-bottom-width: 15px;
	border-left-width: 15px;
	border-top-color: rgba(230, 131, 10, 0);
	border-right-color: rgba(230, 131, 10, 0);
	border-left-color: rgba(230, 131, 10, 0);
}
.errores-box:before {
	border-bottom-color: #E6830A;
	left: 50%;
	margin-left: -31px;
	border-top-width: 16px;
	border-right-width: 16px;
	border-bottom-width: 16px;
	border-left-width: 16px;
	border-top-color: rgba(84, 68, 13, 0);
	border-right-color: rgba(84, 68, 13, 0);
	border-left-color: rgba(84, 68, 13, 0);
}


	 

.contenedor input, textarea{
	display:inline-block;
	text-align:left;
	width:80%;
	font-size: 16px;
	display:inline-block;
	margin-bottom:5px;
	margin-top:5px;
	color: #666;
	padding-top: 5px;
	padding-bottom: 5px;
	padding-right: 10px;
	padding-left: 10px;
}
.contenedor .button_contacto{
	display:inline-block;
	margin-top:20px;
	padding:2px;
	cursor:pointer;
	width:20%;
	border:1px solid #DFA900; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-family:arial, helvetica, sans-serif; text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; text-align: center; color: #FFFFFF; background-color: #DFA900;
	
}

.contenedor .button_contacto:hover{
border:1px solid #E6830A; background-color: #E6830A;
 
}
label{
	color:#E79500;	
}



.presupuesto_pasos.paso_primero .presupuesto_pasos_right fieldset .presupuesto_pasos_right_fila .presupuesto_campo h1{
	font-size: 16px;
	color: #606A6E;
	padding-top:10px;
	padding-bottom:2px;
	
}
.presupuesto_pasos.paso_primero .presupuesto_pasos_right fieldset .presupuesto_pasos_right_fila .presupuesto_campo h2{
	font-size: 13px;
	color: #E79500;
	padding-left:15px;
	padding-bottom:10px;
}
.presupuesto_pasos_left h1 strong {
	color: #DE5326;
	font-size: 25px;
}
.presupuesto_pasos.paso_primero {
	float: left;
	width: 100%;
	margin-bottom:10px;
	margin-top:15px;
}
.presupuesto_pasos.paso_primero .presupuesto_pasos_left {
	float: left;
	width: 30%;
}
.presupuesto_pasos.paso_primero .presupuesto_pasos_right {
	float: right;
	width: 70%;
}
fieldset {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
option{
	color:#999999;
	font-size:14px;
	padding:2px;
	border:none;
	z-index:1;
}
.presupuesto_pasos_left h1 {
	font-size: 35px;
	font-weight: lighter;
	color: #DE5326;
}
.presupuesto_pasos_left span {
	font-size: 15px;
	font-weight: lighter;
	color: #606A6E;
}

/* CSS VENTANA EMERGENTE LOGIN################################################## */

#laPopup form .input input {
    border: 1px solid #3B240B;
	padding:3px;
	color: #3B240B;
}
#laPopup form .input input:hover {
    border: 1px solid #9F9A8E;
    background: #F7BE81;
}

#laPopup form .input {
	float: left;
	width: 344px;
	height:60px;
	margin-top: 3px;
	margin-bottom: 3px;
	padding-right: 20px;
	padding-left: 20px;
}
#laPopup form .input span {
	font-family: Petita, Arial, Helvetica, sans-serif;
	text-transform: uppercase;
	font-size: 12px;
	font-weight: bold;
	margin-right: 20px;
	color: #3B240B;
}
#laPopup form .olvida {
	font-family: Petita, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	padding: 20px;
}
#laPopup form .olvida A:link{
	color: #3B240B;
	text-decoration: none;
}
#laPopup form .olvida A:active{
	color: #3B240B;
}
#laPopup form .olvida A:visited{
	color: #3B240B;
}
#laPopup form .olvida A:hover{
	color: #9F9A8E;
}
#fondoPopup{
	display: none;
	position: fixed;
	height: 100%;
	width: 100%;
	top: 0px;
	left: 0px;
	background: #000000;
	border: 1px solid #cecece;
	z-index: 1001;
}

#laPopup{
	display: none;
	position: fixed;
	height: 340px;
	width: 408px;
	border: 2px solid #cecece;
	z-index: 1002;
	padding: 12px;
	font-size: 13px;
	background-image: url(/plantillas/img/linepattern.png);
	background-repeat: repeat;
	background-color: #FFF;
}
#laPopup a{
	cursor:pointer;
}
#laPopup h1{
	text-align: left;
	color: #0A2A12;
	font-size: 22px;
	font-weight: 700px;
	border-bottom:  1px dotted #3B240B;
	padding-bottom: 2px;
	margin-bottom: 20px;
}

#popupCerrar{
	font-size: 14px;
	line-height: 14px;
	right: 6px;
	top: 4px;
	position: absolute;
	color: #0A2A12;
	font-weight: 700px;
	display: block;
}

#botonLogin{
	cursor:pointer;
}
#botonLogin:hover{
	color:#F7BE81;
}
.error{
	background-color:#FF6600;	
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
var errorNombre, errorEmail, errorText, errorTelefono;

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
/////////////// SELECTOR

	
		

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
/*VALIDACION FORMULARIO*/
		function valida(valor){
			  if(valor.match(/^[a-zA-ZÑñáéíóúÁÉÍÓÚ]{3,}$/i)){
				$('#errorNombre').fadeOut('slow');
				errorNombre=false;
			  }else{
				$('#errorNombre').fadeIn('slow');
				errorNombre=true;
			  }
		}
		
		function compTel(tel){
				 if(tel.match(/^[0-9]{9,14}$/)){
					$('#errorTelefono').fadeOut('slow');
					errorTelefono=false;
				  }else{
					$('#errorTelefono').fadeIn('slow');
					errorTelefono=true;
				  }
		} 
		
		function compEmail(email){
		   // ale=Math.random()*99999999;
			
				  if(email.match(/^[0-9a-z-_\.]{2,}@[a-z]{2,}\.[a-z]{2,4}(\.[a-z]{2,4})?$/i)){
					$('#errorEmail').fadeOut('slow');
					errorEmail=false;
				  }else{
					$('#errorEmail').fadeIn('slow');
					errorEmail=true;
				  }
				
			
		  }
		  
		  function compText(text){
		    if(text.length<5){
			  $('#errorText')
			  .fadeIn('slow');
			   errorText=true;
			}else{
			  $('#errorText')
			  .fadeOut('slow');
			   errorText=false;
			}
		  }
		
 function compForm(e){
    valida($('#name').val());
	compEmail($('#email').val());
	compTel($('#telefono').val());
	compText($('#message').val());
   /* alert(!errorNombre +'&&'+ !errorEmail +'&&'+ !errorPass +'&&'+ !errorPass2 +'&&'+ !errorAnyo +'&&'+ !errorCP +'&&'+ !errorPais +'&&'+ !errorCiudad +'&&'+ !errorRegProv +'&&'+ !errorTelefono +'&&'+ !errorApellido +'&&'+ !errorDirerccion);*/
	if(!errorNombre && !errorText && !errorEmail && !errorTelefono){
	  return true;
	}else{
	  return false;
	}
}
		

</script>  
<!-- Make sure your CSS file is listed before jQuery -->
<link rel="stylesheet" href="plantillas/css/uniform.default.css" media="screen" />
<script src="plantillas/js/jquery.uniform.js"></script>

<script type='text/javascript'>
    // On load, style typical form elements
    $(function () {
        $("select, button").uniform();
    });
</script>

<!--LOGIN-->

<script type="text/javascript" src="plantillas/js/ventanaLogin.js"></script>


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
    
    
      <div class="cajaTexto">SOLICITE PRESUPUESTO <span style="font-size:9px;"></span>
        
    <p class="textoIntro" style=" color:#FFFFFF; font-weight:400;">Primero visita nuestros Servicios y Portafolio, conoce nuestros trabajos  y nuestra metodología de trabajo y si te interesa nuestra forma de entender el diseño...sin ningún tipo de compromiso...
Ten en cuenta que necesitamos conocer tu empresa, tu idea y tus objetivos para ofrecerte la mejor solución.


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
    
			<br />
     		<h2 style="padding-left:20px; color:#EEAF00;">PRESUPUESTO</h2>
            <span class="separador"></span>   
            <p>
            Respuesta en 24 horas:<br /><br />
            1.	Rellene todos los campos.<br />
            2.	En menos de 24 horas responderemos a su petición o consulta. Le pasaremos un pequeño formulario (briefing) para que lo rellene.<br />
            3.	Presentamos un proyecto y un presupuesto completamente detallado.<br />
            4.	Compare y decida.<br />
            </p>
               <br /><br />
     		<p style="font-size:20px; font-weight:bolder;"><?php echo $_smarty_tpl->tpl_vars['res']->value;?>
</p>

 
 <form style="float:left;" METHOD="post" action="/presupuestoss" onSubmit="return compForm()"  class="contacto"> 
 <div class="presupuesto_pasos paso_primero">	
    
    <div class="presupuesto_pasos_left">
        <h1>
        <strong>#</strong>
        1
        </h1>
    	<span>Datos básicos cliente</span>
    </div>
  
    <div class="presupuesto_pasos_right">
                <fieldset>
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1><strong>*</strong>Persona de contacto</h1>
                        
                        <h2>¿A quién nos dirigimos?</h2>
                        <input <?php echo $_smarty_tpl->tpl_vars['errorNombre']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['Nombre']->value;?>
" id="name" name="Nombre" type="text" size="20"  onblur="valida(this.value)" placeholder="Obligatorio*" autofocus="">
                        </div>
                    </div>
                    
                    <div class="errores-box" id="errorNombre">Campo nombre no es valido</div>
                    
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>Nombre empresa</h1>
                        <h2>Si es secreto, no pasa nada</h2>
                        <input id="company" class="text" type="text" name="Company" placeholder="Opcional">
                        </div>
                    </div>
                    
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1><strong>*</strong>Email de contacto</h1>
                        
                        <h2>Ahí te enviaremos la info</h2>
                        <div class="bg_email_telefono">
                        <input class="<?php echo $_smarty_tpl->tpl_vars['errorEmail']->value;?>
" id="email" name="Correo" type="text" size="20"  onblur="compEmail(this.value)" placeholder="Obligatorio*">
                        </div>
                    </div>
                    
                    <div class="errores-box" id="errorEmail"> El correo electronico no es valido </div>
                    
                    <div class="presupuesto_campo aligment_right">
                        <h1><strong>*</strong>Teléfono de contacto</h1>
                        
                        <h2>Para comentar posibles dudas</h2>
                        <div class="bg_email_telefono2">
                        <input class="<?php echo $_smarty_tpl->tpl_vars['errorTelefono']->value;?>
" id="telefono" name="Telefono" type="text" size="20"  onblur="compTel(this.value)" placeholder="Obligatorio*">
                        </div>
                        </div>
                    </div>
                    
                    <div class="errores-box" id="errorTelefono">Campo teléfono no es valido </div>
                </fieldset>
    </div>
</div> 

<span class="separador"></span> 
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="presupuesto_pasos paso_primero">
    <div class="presupuesto_pasos_left">
        <h1>
        <strong>#</strong>
        2
        </h1>
    	<span>Datos de proyecto</span>
    </div>

	<div class="presupuesto_pasos_right">
                <fieldset>
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>Tipo de proyecto</h1>
                        
                        <h2>Elige la categoría</h2>
                        
                        <select id="tipo_proyecto" name="Tipo_proyecto">
                            <option selected="selected" value="Tiendas Online" >Tiendas Online</option>
                            <option value="Diseño Web">Diseño Web</option>
                            <option value="Programación Web para diseñadores">Programación Web para diseñadores</option>
                            <option value="Desarroyo aplicaciones Web">Desarroyo aplicaciones Web</option>
                            <option value="Publicidad y Marketing">Publicidad y Marketing</option>
                            <option value="Campañas de mailing">Campañas de mailing</option>
                            <option value="Identidad Corporativa">Identidad Corporativa</option>
                          	<option value="Diseño gráfico">Diseño gráfico</option>
                            <option value="Fotografia">Fotografía</option>
                            <option value="Otros">Otros</option>
                        </select>
                        
                        </div>
                    </div>
 
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1><strong>*</strong>Descripción de un proyecto</h1>
                        
                        <h2>Dinos qué necesitas</h2>
                        <div class="bg_email_telefono">
                        <textarea class="<?php echo $_smarty_tpl->tpl_vars['errorMensaje']->value;?>
" name="Mensaje" id="message" rows="10" cols="100%"  onblur="compText(this.value)" placeholder="Escriba más de 5 caracteres" ></textarea>
                        </div>
                    </div>
                    </div>
                    
                    <div class="errores-box" id="errorText">Escriba más de 5 caracteres</div>
                    
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>Presupuesto estimado</h1>
                        
                        <h2>¿Con qué medios contamos?</h2>
                        
                        <select id="presupuesto" name="Presupuesto">
                          <option selected="selected" value="0-150">0-150€</option>
                          <option value="150-250">150-250€</option>
                          <option value="250-35">250-350€</option>
                          <option value="350-450">350-450€</option>
                          <option value="450-600">450-600€</option>
                          <option value="600-800">600-800€</option>
                          <option value="900-1100">900-1100€</option>
                          <option value="1100-2000">1100-2000€</option>
                          <option value="2000-3000">2000-3000€</option>
                        </select>
                        
                      </div>
                    </div>
                    
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>Entrega deseada</h1>
                        <h2>¿Cuándo necesitas el proyecto?</h2>

                        <input id="entrega" class="text" type="text" name="Entrega" placeholder="Opcional 00/00/2013">
                        </div>
                    </div>
                </fieldset>
    </div>

</div>
<span class="separador"></span> 
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <div class="presupuesto_pasos paso_primero">
    <div class="presupuesto_pasos_left">
        <h1>
        <strong>#</strong>
        3
        </h1>
    	<span>algo +</span>
    </div>

	<div class="presupuesto_pasos_right">
                <fieldset>
                    
 
                  <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>¿Comó nos has encontrado?</h1>
                        
                        <h2>Os conozco de...</h2>
                        
                        <select id="referencias" name="Referencias">
                          	<option value="Referencias Personales">Referencias personales</option>
                            <option value="Google">Google</option>
                            <option value="Otros buscadores">Otros buscadores</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Otros">Otros...</option>
                        </select>
                        
                      </div>
                    </div>
                    
                   <div class="presupuesto_pasos_right_fila">
                     <div class="presupuesto_campo">
                       
                       <h1><strong><input name="acepto" type="checkbox" value="1" style="width:10px;" /></strong> Si, acepto la <span id="botonLogin" style="text-decoration:underline;">política de privacidad</span> </h1>
                       <?php echo $_smarty_tpl->tpl_vars['errorPolitica']->value;?>


                    

                    </div>
                  </div>
                   
                </fieldset>
    </div>

</div>
<span class="separador"></span> 



<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--> 
 
 
 
 
 
 
 
 
 
 
 
 

<input class="button_contacto" type="submit" name="submit" value="Enviar" />


				</form>	 
       
  </div>
</div>



<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		PIE DE PAGINA
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 

		<?php echo $_smarty_tpl->getSubTemplate ("pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
<!--///////////////////// Ventanas EMERGENTE /////////////////////-->

	<div id="laPopup">
		<a id="popupCerrar">X</a>
		<h1>Política de Privacidad</h1>
        
Política de privacidad y gestión de datos personales:<br /><br />

JNACHER sólo almacenará datos de carácter personal bajo petición del usuario y como respuesta a una demanda por parte del usuario, por ejemplo la cumplimentación de un formulario. La custodia de dichos datos se realiza acorde a los preceptos de la LOPD Española.<br /><br />

Uso de Datos de carácter personal.<br /><br />

JNACHER estudio de diseño sólo usará los datos de carácter personal para aquello que fueron solicitados explícitamente y en ningún caso cederá datos aportados por nuestros visitantes, ni personales ni no personales a ninguna empresa o particular en ninguna situación salvo consentimiento previo del usuario.
<br /><br />
Calle Mossen Eusebio Gimeno n20, 46470 Albal, Valencia España
<br /><br />

	</div>
	<div id="fondoPopup"></div>
</body>
</html><?php }} ?>