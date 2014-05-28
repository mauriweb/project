<?php /* Smarty version Smarty-3.1.12, created on 2013-04-19 07:25:46
         compiled from "/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/ingles/presupuestos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:382725681514c439f723cf2-00247787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '415bff36e44051e392b71b48380f100999bc5a3b' => 
    array (
      0 => '/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/ingles/presupuestos.tpl',
      1 => 1366280136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '382725681514c439f723cf2-00247787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_514c439f7fcae6_03635244',
  'variables' => 
  array (
    'titulo' => 0,
    'DOMINIO' => 0,
    'pagina' => 0,
    'categoria' => 0,
    'articulo' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514c439f7fcae6_03635244')) {function content_514c439f7fcae6_03635244($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	position: absolute;
	background: #E6830A;
	border: 1px solid #E6830A;
	display:none;
	color:#FFF;
	padding:10px;
	font-size: 14px;
	font-weight: bolder;
	margin-left:200px;
}	 

.contenedor input, textarea{
	display:inline-block;
	text-align:left;
	width:100%;
	font-size: 16px;
	display:inline-block;
	margin-bottom:5px;
	margin-top:5px;
	color: #666;;
	padding-top: 5px;
	padding-bottom: 5px;
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
    
    
      <div class="cajaTexto">BUDGET REQUEST<span style="font-size:9px;"></span>
        
    <p class="textoIntro" style=" color:#FFFFFF; font-weight:400;">First visit our services and protfolio, take a look to our works and our working methodology and if you get interested about our way of understand design.. without any kind of commitment... be aware we need to know your company, your ideas and your goals to be able to offer the best solution.


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
     		<h2 style="padding-left:20px; color:#EEAF00;">BUDGET</h2>
            <span class="separador"></span>   
            <p>
            Answer within 24 hours:<br /><br />
            1. Fill every field.<br />
            2. In less than 24 hours we will answer your request or inquiry. We'll send you an small form(briefing) to be filled.<br />
            3. We'll present a project and a budget fully detailed.<br />
            4. Compare a decide.<br />
            </p>
               <br /><br />
     		<p style="font-size:20px; font-weight:bolder;"><?php echo $_smarty_tpl->tpl_vars['res']->value;?>
</p>

 
					<form style="float:left;" METHOD="post" action="/presupuestos" onSubmit="return compForm()"  class="contacto">
                  
                    <label for="Nombre" >Name*:</label>
                    <div class="errores-box" id="errorNombre">
                          Campo nombre no es valido
                        </div>
                    <input id="name" name="Nombre" type="text" size="20"  onblur="valida(this.value)" />
                    
                    <label for="Telefono" >Telephone*:</label>
                    <div class="errores-box" id="errorTelefono">
                          Campo teléfono no es valido
                        </div>
                    <input id="telefono" name="Telefono" type="text" size="20"  onblur="compTel(this.value)" />
                   
                    <label for="Email" >E-mail*:</label>
                    <div class="errores-box" id="errorEmail">
                          El correo electronico no es valido
                        </div>
                    <input id="email" name="Correo" type="text" size="20"  onblur="compEmail(this.value)" />
                    
                    
                    <label for="Mensaje" >Brief explanation:</label>
                    <div class="errores-box" id="errorText">
                          Escriba más de 5 caracteres
                        </div>
                    <textarea name="Mensaje" id="message" rows="10" cols="100%"  onblur="compText(this.value)" ></textarea>
                     
                   
					<input class="button_contacto" type="submit" name="submit" value="Enviar" />


				</form>		
             
        
        
        
        
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