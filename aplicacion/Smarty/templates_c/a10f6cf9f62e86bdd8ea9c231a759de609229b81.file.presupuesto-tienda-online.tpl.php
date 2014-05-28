<?php /* Smarty version Smarty-3.1.12, created on 2013-04-10 16:37:13
         compiled from "C:\xampp\htdocs\proyecto\plantillas\tpl\presupuesto-tienda-online.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17837516579193d8b96-53037141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a10f6cf9f62e86bdd8ea9c231a759de609229b81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\plantillas\\tpl\\presupuesto-tienda-online.tpl',
      1 => 1365604571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17837516579193d8b96-53037141',
  'function' => 
  array (
  ),
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
    'errorEmpresa' => 0,
    'Company' => 0,
    'errorEmail' => 0,
    'Correo' => 0,
    'errorTelefono' => 0,
    'Telefono' => 0,
    'errorNegocio' => 0,
    'negocio' => 0,
    'errorObjetivo' => 0,
    'objetivo' => 0,
    'recChbx' => 0,
    'errorLanzamiento' => 0,
    'lanzamiento' => 0,
    'errorEstructura' => 0,
    'estructura' => 0,
    'Presupuesto' => 0,
    'errorFile' => 0,
    'errorAclaracion' => 0,
    'aclaracion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51657919768a13_57295579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51657919768a13_57295579')) {function content_51657919768a13_57295579($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
<meta name="Title" content="<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
">
<meta name="description" content="Respuesta en 24 horas: Rellene todos los campos. En menos de 24 horas responderemos a su petición o consulta. Le recibimos en nuestras oficinas. Presentamos un proyecto y un presupuesto completamente detallado. Compare y decida." />
<meta name="keywords" content="presupuesto web online, presupuesto paginas web, 	
presupuesto pagina web, pagina web presupuesto, presupuesto web, presupuesto diseño" />

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
label{
	color:#999999;
	width:100%;
	display:inline-block;
	position:relative;
	vertical-align: middle;
	padding-top: 5px;
	padding-right: 0px;
	padding-bottom: 5px;
	padding-left: 0px;
}
label img{
	position:relative;
	top: 5px;	
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

.error{
	background-color: rgba(224, 182, 0, 0.7);
}
body{
	min-width:290px;	
}

.presupuesto_pasos.paso_primero .presupuesto_pasos_right {
    float: right;
    width: 100%;
}
h1{
	margin-bottom:10px;
	margin-top:10px;	
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

		

/////////////// REDES SOCIALES 

	
		$(".general a").hover(function(){
			$(this).animate({opacity: "0.6"}, "slow");
			return false;
		}, function(){
			$(this).animate({opacity: "1"}, "fast");
			return false;
		});
		
}); 		
/*VALIDACION FORMULARIO*/
		function valida(valor){
			  if(valor.match(/^[a-zA-ZÑñáéíóúÁÉÍÓÚ\s]{3,}$/i)){
				$('#errorNombre').fadeOut('slow');
				errorNombre=false;
			  }else{
				$('#errorNombre').fadeIn('slow');
				errorNombre=true;
			  }
		}
		
		function nombreEmpresa(valor){
			  if(valor.match(/^[0-9a-zA-ZÑñáéíóúÁÉÍÓÚ\s]{3,}$/i)){
				$('#errorNombreEmpresa').fadeOut('slow');
				errorNombreEmpresa=false;
			  }else{
				$('#errorNombreEmpresa').fadeIn('slow');
				errorNombreEmpresa=true;
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
		  
		  
		
 function compForm(e){
    valida($('#name').val());
	nombreEmpresa($('#nombreEmpresa').val());
	compEmail($('#email').val());
	compTel($('#telefono').val());
   /* alert(!errorNombre +'&&'+ !errorEmail +'&&'+ !errorPass +'&&'+ !errorPass2 +'&&'+ !errorAnyo +'&&'+ !errorCP +'&&'+ !errorPais +'&&'+ !errorCiudad +'&&'+ !errorRegProv +'&&'+ !errorTelefono +'&&'+ !errorApellido +'&&'+ !errorDirerccion);*/
	if(!errorNombre && !errorNombreEmpresa && !errorEmail && !errorTelefono){
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
        $("select, input").uniform();
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
    
			<br />
     		<h2 style="padding-left:20px; color:#EEAF00;">BRIEF PARA TIENDA ONLINE</h2>
            <span class="separador"></span>   
            <p>
           Con este brief completo, estaremos más cerca de cumplir sus objetivos. ¡Muchas gracias!
            </p>
               <br /><br />
          <p style="font-size:20px; font-weight:bolder; color:#DE5326; text-align:center; "><?php echo $_smarty_tpl->tpl_vars['res']->value;?>
</p>

 <!-- -->
 <form style="float:left;" METHOD="post" action="/presupuesto-tienda-online" enctype="multipart/form-data" class="contacto" onSubmit="return compForm()"> 
 <div class="presupuesto_pasos paso_primero">	
    
    
  
    <div class="presupuesto_pasos_right">
                <fieldset>
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1><strong>*</strong>Persona de contacto</h1>
                        
                        
                        <input <?php echo $_smarty_tpl->tpl_vars['errorNombre']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['Nombre']->value;?>
" id="name" name="Nombre" type="text" size="20"  onblur="valida(this.value)" placeholder="Obligatorio*" autofocus="">
                        </div>
                    </div>
                    
                    <div class="errores-box" id="errorNombre">El nombre de la persona de contacto es obligatorio*</div>
                    
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1><strong>*</strong>Nombre empresa</h1>
                        
                        <input <?php echo $_smarty_tpl->tpl_vars['errorEmpresa']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['Company']->value;?>
" id="company" class="text" onblur="nombreEmpresa(this.value)" type="text" name="Company" placeholder="Obligatorio*">
                        </div>
                    </div>
                    
                    <div class="errores-box" id="errorNombreEmpresa"> El nombre de la empresa es obligatorio* </div>
                    
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1><strong>*</strong>Email de contacto</h1>
                        
                        
                        <div class="bg_email_telefono">
                        <input <?php echo $_smarty_tpl->tpl_vars['errorEmail']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['Correo']->value;?>
" id="email" name="Correo" type="text" size="20"  onblur="compEmail(this.value)" placeholder="Obligatorio*">
                        </div>
                    </div>
                    
                    <div class="errores-box" id="errorEmail"> El correo electronico no es valido </div>
                    
                    <div class="presupuesto_campo aligment_right">
                        <h1><strong>*</strong>Teléfono de contacto</h1>
                        
                        
                      <div class="bg_email_telefono2">
                        <input <?php echo $_smarty_tpl->tpl_vars['errorTelefono']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['Telefono']->value;?>
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
    

	<div class="presupuesto_pasos_right">
                <fieldset>
                     
                  <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>01. ¿Cuál es su negocio? ¿A qué se dedica la compañía?</h1>
                        
                        
                        <div class="bg_email_telefono">
                        <textarea <?php echo $_smarty_tpl->tpl_vars['errorNegocio']->value;?>
 name="negocio" id="negocio" rows="10" cols="100%" placeholder="Escriba más de 5 caracteres - Obligatorio*" ><?php echo $_smarty_tpl->tpl_vars['negocio']->value;?>
</textarea>
                        </div>
                    </div>
                    </div>
                    
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>02. Objetivo.</h1>
                        <h2>Definición, orientación sobre el uso que se le va a dar al proyecto: presencial, ofrecer información valiosa, escaparate de productos, realización de ventas directas...  </h2>
                        
                        <div class="bg_email_telefono">
                        <textarea <?php echo $_smarty_tpl->tpl_vars['errorObjetivo']->value;?>
 name="objetivo" id="objetivo" rows="10" cols="100%" placeholder="Escriba más de 5 caracteres - Obligatorio*" ><?php echo $_smarty_tpl->tpl_vars['objetivo']->value;?>
</textarea>
                       
                        </div>
                    </div>
                    </div>
                    
                    
                    
                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>03. ¿Cuál es el target con el que desea comunicarse? ¿Usuarios potenciales?</h1>
                        <h2>Edad, género, lugar de origen, gustos, actitudes, estilo de vida.</h2>
                        
                        <div class="bg_email_telefono">
                         <label><input <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Cual_es_el_target_1'];?>
 type="checkbox" name="ch_Cual_es_el_target_1" value="Edad"  /> Edad</label>
						 <label><input <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Cual_es_el_target_2'];?>
 type="checkbox" name="ch_Cual_es_el_target_2" value="Genero" /> Genero</label>
                         <label><input <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Cual_es_el_target_3'];?>
 type="checkbox" name="ch_Cual_es_el_target_3" value="Lugar de origen" /> Lugar de origen</label>
                         <label><input <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Cual_es_el_target_4'];?>
 type="checkbox" name="ch_Cual_es_el_target_4" value="Gustos" /> Gustos</label>
                         <label><input <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Cual_es_el_target_5'];?>
 type="checkbox" name="ch_Cual_es_el_target_5" value="Actitudes" /> Actitudes</label>
                         <label><input <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Cual_es_el_target_6'];?>
 type="checkbox" name="ch_Cual_es_el_target_6" value="Estilo de vida" /> Estilo de vida</label>
                        </div>
                    </div>
                    </div>
                    
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>04. ¿Cuándo le gustaría lanzar el sitio? ¿Está trabajando en un marco de tiempo estricto o tiene una fecha de lanzamiento obligatoria?</h1>
                        
                        <div class="bg_email_telefono">
                        <textarea <?php echo $_smarty_tpl->tpl_vars['errorLanzamiento']->value;?>
 name="lanzamiento" id="lanzamiento" rows="10" cols="100%" placeholder="Escriba más de 5 caracteres - Obligatorio*" ><?php echo $_smarty_tpl->tpl_vars['lanzamiento']->value;?>
</textarea>
                        </div>
                    </div>
                    </div>
                    
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>05. ¿Cuáles son los objetivos y factores claves para el éxito del proyecto? </h1>
                        <h2>Obtener mayor cantidad de visitas, renovar el look and feel, modificar la percepción del consumidor, mejorar la experiencia del usuario, captar otro target, mejorar el posicionamiento en buscadores, actualizar el contenido, etc.</h2>
                        
                        <div class="bg_email_telefono">
                         <label><input type="checkbox" name="ch_Cual_es_factores_claves_1" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Cual_es_factores_claves_1'];?>
 value="Tener una buena carta de presentación en internet" /> Tener una buena carta de presentación en internet</label>
                         <label><input type="checkbox" name="ch_Cual_es_factores_claves_2" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Cual_es_factores_claves_2'];?>
 value="Obtener mayor cantidad de visitas" /> Obtener mayor cantidad de visitas</label>
						 <label><input type="checkbox" name="ch_Cual_es_factores_claves_3" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Cual_es_factores_claves_3'];?>
 value="Renovar el look and feel" /> Renovar el look and feel</label>
                         <label><input type="checkbox" name="ch_Cual_es_factores_claves_4" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Cual_es_factores_claves_4'];?>
 value="Modificar la percepción del consumidor" /> Modificar la percepción del consumidor</label>
                         <label><input type="checkbox" name="ch_Cual_es_factores_claves_5" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Cual_es_factores_claves_5'];?>
 value="Mejorar la experiencia del usuario" /> Mejorar la experiencia del usuario</label>
                         <label><input type="checkbox" name="ch_Cual_es_factores_claves_6" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Cual_es_factores_claves_6'];?>
 value="Captar otro target" /> Captar otro target</label>
                         <label><input type="checkbox" name="ch_Cual_es_factores_claves_7" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Cual_es_factores_claves_7'];?>
 value="Mejorar el posicionamiento en buscadores" /> Mejorar el posicionamiento en buscadores</label>
                         <label><input type="checkbox" name="ch_Cual_es_factores_claves_8" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Cual_es_factores_claves_8'];?>
 value="Actualizar el contenido" /> Actualizar el contenido</label>
                         <label><input type="checkbox" name="ch_Cual_es_factores_claves_9" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Cual_es_factores_claves_9'];?>
 value="Tener otro canal de venta" /> Tener otro canal de venta</label>
                        </div>
                    </div>
                    </div>
                    
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>06. ¿Existe algún sitio web que referencie lo que está buscando en cuánto a estética o funcionalidad? </h1>
                        <h2>Estudio de sites existentes que se dirijan al mismo tipo de público, será fuente de ideas y mejoras   ...  </h2>
                        
                        <div class="bg_email_telefono">
                        <input id="url1" name="url1" type="text"  placeholder="URL 1" >
                        <input id="url2" name="url2" type="text"  placeholder="URL 2" >
                        <input id="url3" name="url3" type="text"  placeholder="URL 3" >
                        <input id="url4" name="url4" type="text"  placeholder="URL 4" >
                        <input id="url5" name="url5" type="text"  placeholder="URL 5" >
                        </div>
                    </div>
                    </div>
                    
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>07. ¿Tiene definida la estructura de contenidos y de qué tipo de contenidos se trata? </h1>
                        <h2>Qué secciones tendrá el sitio y si el contenido serán textos, fotos o videos.</h2>
                        
                        <div class="bg_email_telefono">
                        <textarea <?php echo $_smarty_tpl->tpl_vars['errorEstructura']->value;?>
 name="estructura" id="estructura" rows="10" cols="100%" placeholder="Escriba más de 5 caracteres - Obligatorio*" ><?php echo $_smarty_tpl->tpl_vars['estructura']->value;?>
</textarea>
                        </div>
                    </div>
                    </div>
                    
                     <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>08. Secciones típicas de una web coorporativa</h1>
                        <h2>Marque las secciones que le interesen</h2>
                        
                        <div class="bg_email_telefono">
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_1'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_1" value="Pagina de inicio" /> Pagina de inicio</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_2'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_2" value="Quienes somos" /> Quienes somos</label>
						 <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_3'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_3" value="Que hacemos" /> Que hacemos</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_4'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_4" value="Donde estamos" /> Donde estamos</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_5'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_5" value="Contacto" /> Contacto</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_6'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_6" value="Productos y servicios" /> Productos y servicios</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_7'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_7" value="Banners" /> Banners</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_8'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_8" value="Videos" /> Videos</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_9'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_9" value="Google Maps" /> Google Maps</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_10'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_10" value="Lista de precios" /> Lista de precios</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_11'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_11" value="Preguntas frecuentes (FAQ)" /> Preguntas frecuentes (FAQ)</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_12'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_12" value="Recursos y artículos" /> Recursos y artículos</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_13'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_13" value=" Revista online" /> Revista online</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_14'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_14" value="Garantias" /> Garantias</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_15'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_15" value="Encuestas" /> Encuestas</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_16'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_16" value="Calendarios de eventos"/> Calendarios de eventos</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_17'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_17" value="Política de compra y devoluciones" /> Política de compra y devoluciones</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_18'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_18" value="Mapa del sitio" /> Mapa del sitio</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_19'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_19" value="Información del copyright" /> Información del copyright</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_20'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_20" value="Enlaces" /> Enlaces</label>
                         
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_21'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_21" value="Formas de pago" /> Formas de pago</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_22'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_22" value="Tienda" /> Tienda</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_23'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_23" value="Politica de envio" /> Politica de envio</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_24'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_24" value="Politica de privacidad" /> Politica de privacidad</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_25'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_25" value="Condiciones generales" /> Condiciones generales</label>
                         <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Secciones_que_le_gustaria_incluir_en_la_web_26'];?>
 name="ch_Secciones_que_le_gustaria_incluir_en_la_web_26" value="Catálogo de productos" /> Catálogo de productos</label>
                        
                        </div>
                    </div>
                    </div>
                    
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>09. ¿Qué funciones le gustaría incluir? </h1>
                        <h2>Formularios de contacto, foros, buscador, login de usuarios, blog, galerías de imágenes, etc.</h2>
                        
                        <div class="bg_email_telefono">
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Funciones_que_le_gustaria_incluir_1'];?>
 name="ch_Funciones_que_le_gustaria_incluir_1" value="Formulario de contacto" />Formulario de contacto</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Funciones_que_le_gustaria_incluir_2'];?>
 name="ch_Funciones_que_le_gustaria_incluir_2" value="Formulario de presupuesto" />Formulario de presupuesto</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Funciones_que_le_gustaria_incluir_3'];?>
 name="ch_Funciones_que_le_gustaria_incluir_3" value="Galería de imagenes" />Galería de imagenes</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Funciones_que_le_gustaria_incluir_4'];?>
 name="ch_Funciones_que_le_gustaria_incluir_4" value="Blog" />Blog</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Funciones_que_le_gustaria_incluir_5'];?>
 name="ch_Funciones_que_le_gustaria_incluir_5" value="Newsletter" />Newsletter</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Funciones_que_le_gustaria_incluir_6'];?>
 name="ch_Funciones_que_le_gustaria_incluir_6" value="Noticias" />Noticias</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Funciones_que_le_gustaria_incluir_7'];?>
 name="ch_Funciones_que_le_gustaria_incluir_7" value="Recetas" />Recetas</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Funciones_que_le_gustaria_incluir_8'];?>
 name="ch_Funciones_que_le_gustaria_incluir_8" value="Login Usuarios" />Login Usuarios</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Funciones_que_le_gustaria_incluir_9'];?>
 name="ch_Funciones_que_le_gustaria_incluir_9" value="Productos" />Productos</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Funciones_que_le_gustaria_incluir_10'];?>
 name="ch_Funciones_que_le_gustaria_incluir_10" value="Foro" />Foro</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Funciones_que_le_gustaria_incluir_11'];?>
 name="ch_Funciones_que_le_gustaria_incluir_11" value="Envio de e-mails" />Envio de e-mails</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Funciones_que_le_gustaria_incluir_12'];?>
 name="ch_Funciones_que_le_gustaria_incluir_12" value="Administrador" />Administrador</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Funciones_que_le_gustaria_incluir_13'];?>
 name="ch_Funciones_que_le_gustaria_incluir_13" value="Otros" />Otros</label>
                        </div>
                    </div>
                    </div>
                    
                                      
                     <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>10. ¿El sitio debe verse en más de un idioma?</h1>
						<h2>Marque los idiomas que le interesen</h2>
                        
                        
                        <div class="bg_email_telefono">
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_En_idioma_quiere_la_web_1'];?>
 name="ch_En_idioma_quiere_la_web_1" value="Catalan" />
                        Catalán</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_En_idioma_quiere_la_web_2'];?>
 name="ch_En_idioma_quiere_la_web_2" value="Valenciano" />Valenciano</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_En_idioma_quiere_la_web_3'];?>
 name="ch_En_idioma_quiere_la_web_3" value="Castellano" />Castellano</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_En_idioma_quiere_la_web_4'];?>
 name="ch_En_idioma_quiere_la_web_4" value="Ingles" />Ingles</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_En_idioma_quiere_la_web_5'];?>
 name="ch_En_idioma_quiere_la_web_5" value="Frances" />
                        Francés</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_En_idioma_quiere_la_web_6'];?>
 name="ch_En_idioma_quiere_la_web_6" value="Aleman" />
                        Alemán</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_En_idioma_quiere_la_web_7'];?>
 name="ch_En_idioma_quiere_la_web_7" value="Italiano" />Italiano</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_En_idioma_quiere_la_web_8'];?>
 name="ch_En_idioma_quiere_la_web_8" value="Chino" />Chino</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_En_idioma_quiere_la_web_9'];?>
 name="ch_En_idioma_quiere_la_web_9" value="Otros" />Otros</label>
                        </div>
                    </div>
                    </div>
                    
                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                    
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>11. Como quiere gestionar su web</h1>
                        <h2>Marque la casilla que le interese</h2>
                        
                        <div class="bg_email_telefono">
                         <label><input type="checkbox" name="ch_Como_quiere_gestionar_su_web_1" value="Quiero gestionarla yo" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Como_quiere_gestionar_su_web_1'];?>
   />Quiero gestionarla yo</label>
                         <label><input type="checkbox" name="ch_Como_quiere_gestionar_su_web_3" value="Quiero que me la gestione JNACHER estudio mensualmente." <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Como_quiere_gestionar_su_web_3'];?>
   /> Quiero que me la gestione JNACHER estudio.</label>                   
                        </div>
                    </div>
                    </div>
                    
                   
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>12. ¿En qué resolución de pantalla quiere la web?</h1>
                        <h2>Definir la resolución a tomar en cuenta: adaptar las páginas a cualquier monitor o tomar en cuenta la resolución promedio de los visitantes.</h2>
                        
                        <div class="bg_email_telefono">
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Resolucion_de_la_pantalla_1'];?>
 name="ch_Resolucion_de_la_pantalla_1" value="Ordenador" />Ordenador</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Resolucion_de_la_pantalla_2'];?>
 name="ch_Resolucion_de_la_pantalla_2" value="Movil" />Movil</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Resolucion_de_la_pantalla_3'];?>
 name="ch_Resolucion_de_la_pantalla_3" value="Tableta" />Tableta</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Resolucion_de_la_pantalla_4'];?>
 name="ch_Resolucion_de_la_pantalla_4" value="Cualquier pantalla" />Cualquier pantalla</label>
                        </div>
                    </div>
                    </div>
                    
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>13. Línea cromática </h1>
                        <h2>Colores de referencia principal y predominante de la web.</h2>
                        
                        <div class="bg_email_telefono">
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_1'];?>
 name="ch_Linea_cromatica_1" value="1" /><img src="plantillas/img/paletasColores/1.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_2'];?>
 name="ch_Linea_cromatica_2" value="2" /><img src="plantillas/img/paletasColores/2.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_3'];?>
 name="ch_Linea_cromatica_3" value="3" /><img src="plantillas/img/paletasColores/3.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_4'];?>
 name="ch_Linea_cromatica_4" value="4" /><img src="plantillas/img/paletasColores/4.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_5'];?>
 name="ch_Linea_cromatica_5" value="5" /><img src="plantillas/img/paletasColores/5.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_6'];?>
 name="ch_Linea_cromatica_6" value="6" /><img src="plantillas/img/paletasColores/6.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_7'];?>
 name="ch_Linea_cromatica_7" value="7" /><img src="plantillas/img/paletasColores/7.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_8'];?>
 name="ch_Linea_cromatica_8" value="8" /><img src="plantillas/img/paletasColores/8.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_9'];?>
 name="ch_Linea_cromatica_9" value="9" /><img src="plantillas/img/paletasColores/9.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_10'];?>
 name="ch_Linea_cromatica_10" value="10" /><img src="plantillas/img/paletasColores/10.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_11'];?>
 name="ch_Linea_cromatica_11" value="11" /><img src="plantillas/img/paletasColores/11.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_12'];?>
 name="ch_Linea_cromatica_12" value="12" /><img src="plantillas/img/paletasColores/12.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_13'];?>
 name="ch_Linea_cromatica_13" value="13" /><img src="plantillas/img/paletasColores/13.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_14'];?>
 name="ch_Linea_cromatica_14" value="14" /><img src="plantillas/img/paletasColores/14.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_15'];?>
 name="ch_Linea_cromatica_15" value="15" /><img src="plantillas/img/paletasColores/15.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_16'];?>
 name="ch_Linea_cromatica_16" value="16" /><img src="plantillas/img/paletasColores/17.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_17'];?>
 name="ch_Linea_cromatica_17" value="17" /><img src="plantillas/img/paletasColores/18.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_18'];?>
 name="ch_Linea_cromatica_18" value="18" /><img src="plantillas/img/paletasColores/19.png" width="100" height="18" /></label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_cromatica_20'];?>
 name="ch_Linea_cromatica_20" value="Otros" />Otros</label>
                        </div>
                    </div>
                    </div>
                    
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>14. Línea creativa</h1>
                        <h2>Definición, orientación sobre la línea creativa del proyecto: Línea Sencilla, Moderna-Vanguardista, Seria-Formal. <br /> 
                        Orientación de páginas web de referencia:
                        </h2>
                        
                        <div class="bg_email_telefono">
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_creativa_1'];?>
  name="ch_Linea_creativa_1" value="Línea Sencilla" />Línea Sencilla</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_creativa_2'];?>
  name="ch_Linea_creativa_2" value="Moderna-Vanguardista"/>Moderna-Vanguardista</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Linea_creativa_3'];?>
  name="ch_Linea_creativa_3" value="Seria-Formal"/>Seria-Formal</label>                        
                        </div>
                    </div>
                    </div>
                    
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>15. Formas de pago</h1>
                        <h2>Elija las formas de pago, seleccione solo las necesarias.</h2>
                        
                        <div class="bg_email_telefono">
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Formas_de_pago_1'];?>
  name="ch_Formas_de_pago_1" value="Paypal" />Paypal</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Formas_de_pago_2'];?>
 name="ch_Formas_de_pago_2" value="TPV virtual"/>TPV virtual</label>
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Formas_de_pago_3'];?>
 name="ch_Formas_de_pago_3" value="Transferencia"/>Transferencia</label>   
                              
                        </div>
                    </div>
                    </div>
                    
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                   <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>16. Formas de envío</h1>
                        <h2>Elija las formas de envío, trabajara solo con una empresa de envío o los usuarios podrán elegir, seleccione solo las necesarias.</h2>
                        
                        <div class="bg_email_telefono">
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Formas_de_envio_1'];?>
  name="ch_Formas_de_envio_1" value="Forma de envio única" />
                        Forma de envío única</label> 
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Formas_de_envio_2'];?>
  name="ch_Formas_de_envio_2" value="El usuario podra elejir entre varias opciones de envio" />
                        El usuario podrá elegir entre varias opciones de envío</label>                    
                        </div>
                    </div>
                    </div>
                   
                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>17. Quiere que los productos estén vinculados con Facebook</h1>
                        <h2>Elija la casilla que le interese.</h2>
                        
                        <div class="bg_email_telefono">
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Vinculadas_con_facebook_1'];?>
  name="ch_Vinculadas_con_facebook_1" value="Si" />Si</label> 
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Vinculadas_con_facebook_2'];?>
  name="ch_Vinculadas_con_facebook_2" value="No" />No</label>                     
                        </div>
                    </div>
                    </div>
                    
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                    
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>18. Productos estimados</h1>
                        <h2>Elija la opción que crea, esto nos ayudara a ofrecerle un hostin adecuado.</h2>
                        
                        <div class="bg_email_telefono">
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Productos_estimados_1'];?>
  name="ch_Productos_estimados_1" value="20-100" />20-100</label> 
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Productos_estimados_2'];?>
 name="ch_Productos_estimados_2" value="100-300" />100-300</label> 
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Productos_estimados_3'];?>
 name="ch_Productos_estimados_3" value="300-800" />300-800</label> 
                        <label><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Productos_estimados_4'];?>
 name="ch_Productos_estimados_4" value="+ 800" />+ 800</label>                    
                        </div>
                    </div>
                    </div>
                    
                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>19. Identidad corporativa</h1>
                        <h2>En caso de contar con una Identidad Corporativa, facilitar el material que nos permita respetar las características de la empresa: Logotipo vectorizado o en su defecto con buena calidad, material publicitario, etc…).<br />
                        Si no se tuviera identidad corporativa o se quisiera mejorar indicarlo.
                        </h2>
                        
                        <div class="bg_email_telefono">
                        <label><input type="checkbox"  name="ch_Identidad_coorporativa_1" value="Mi empresa ya tiene una identidad corporativa" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Identidad_coorporativa_1'];?>
/>Mi empresa ya tiene una identidad corporativa</label>
                        <label><input type="checkbox"  name="ch_Identidad_coorporativa_2" value="Quiero reediseñar mi imagen" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Identidad_coorporativa_2'];?>
/>Quiero reediseñar mi imagen</label>
                        <label><input type="checkbox"  name="ch_Identidad_coorporativa_3" value="No tengo nada" <?php echo $_smarty_tpl->tpl_vars['recChbx']->value['ch_Identidad_coorporativa_3'];?>
 />No tengo nada</label> 
                        </div>
                    </div>
                    </div>
                    
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>20. ¿Tiene un presupuesto designado para este proyecto? </h1>
                        <h2>Este ítem es muy importante, por favor no deje de completarlo.</h2>
                        
                        <select id="presupuesto" name="Presupuesto">
                         <?php echo $_smarty_tpl->tpl_vars['Presupuesto']->value;?>

                        </select>
                        
                    </div>
                    </div>
                    
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>21. ¿Ya tiene un presupuesto de otra empresa? </h1>
                        <h2>Facilítanoslo e intentaremos mejorarlo, ya sea por precio o por servicio.</h2>
                        
                        <div class="bg_email_telefono ">
                        <input  type="file" name="file" id="file" />
                        </div>
                    </div>
                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['errorFile']->value;?>

                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    <div class="presupuesto_pasos_right_fila">
                        <div class="presupuesto_campo">
                        <h1>22. Agregue cualquier aclaración de utilidad para la elaboración del presupuesto.</h1>
                        <h2>Cualquier duda sobre: Alojamiento y dominio, formas de pago, dudas en general, o cualquier anotación...</h2>
                        
                        <div class="bg_email_telefono">
                        <textarea <?php echo $_smarty_tpl->tpl_vars['errorAclaracion']->value;?>
 name="aclaracion" id="aclaracion" rows="10" cols="100%" placeholder="Escriba más de 5 caracteres - Obligatorio*" ><?php echo $_smarty_tpl->tpl_vars['aclaracion']->value;?>
</textarea>
                        </div>
                    </div>
                    </div>
                    
                   <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////-->
                   
                    
                    
                    
                    
                    
          </fieldset>
    </div>

</div>
<span class="separador"></span> 
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<button class="button_contacto" name="editar" value="Enviar" type="submit">Enviar</button>


	  </form>	 
       
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