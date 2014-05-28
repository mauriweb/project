<?php /* Smarty version Smarty-3.1.12, created on 2013-05-07 22:57:44
         compiled from "/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/quienes-somos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12930074195138f7cb34d120-20235474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e090aff2c19161d908fd54cb9c2889bb6e55f45f' => 
    array (
      0 => '/kunden/homepages/12/d236336551/htdocs/jenacherdesigner/plantillas/tpl/quienes-somos.tpl',
      1 => 1367958892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12930074195138f7cb34d120-20235474',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5138f7cb564305_63336638',
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
<?php if ($_valid && !is_callable('content_5138f7cb564305_63336638')) {function content_5138f7cb564305_63336638($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
<meta name="Title" content="<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
">
<meta name="description" content="Estudio de dise&ntilde;o, gráfico, programación y sitios web. Hubicados en Valencia pero damos servicio a toda Espa&ntilde;a, Madrid, Barcelona, Castellon, Alicante, Bilbao." />
<meta name="keywords" content="empresas de dise&ntilde;o, empresa de dise&ntilde;o, agencia creativa, agencias creativas, dise&ntilde;o grafico, dise&ntilde;o web, agencia de publicidad, marketing online, los mejores, las mejores" />

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
    background-image: url("/plantillas/img/bg_page_07.png");
    background-repeat: repeat;
}
.cajaTexto{
	background-color: rgba(31, 31, 31, 0.7);
		
}
</style>
    <!-- include careto JS -->
    <script type="text/javascript" src="plantillas/js/animJquery.js"></script>
	    
<script type="text/javascript">

$(document).ready(function(){
	
/////////////// GEPETOS

	  $('.anim-photo').anim();
	

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
    
    
      	<div class="cajaTexto">Quien es JNACHER <span style="font-size:9px;">team</span>
        
    	<p class="textoIntro" style=" color:#FFFFFF; font-weight:400;"> <strong>JNacher </strong> da nombre a un estudio ubicado en Valencia capaz de resolver y desarrollar cualquier proyecto de comunicación en cualquiera de sus diferentes disciplinas.

</p>
                
        <p class="textoIntro" style=" color:#FFFFFF; font-weight:400;">Somos un equipo repleto de energía, creatividad, juventud, seriedad y, por supuesto, trabajo.</p>
    
      </div>
    
    </div>
</div>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		CONTENEDOR UNO
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////-->
    
<div class="contenedorUno">
	
    
    <div class="contenedor">
    
        <!--<div class="cadre">
                        
                                    <div class="anim-photo">
                                        <img   alt="" src="plantillas/img/jc2-50.jpg" style="top: -2160px; position: relative;">
                                    </div>
                                    <div class="anim-photo">
                                        <img  alt="" src="plantillas/img/jc2-51.jpg"   style="top: -2160px;  position: relative;">
                                    </div>
                                    <div class="anim-photo">
                                        <img  alt="" src="plantillas/img/jc2-52.jpg"  style="top: -2160px; position: relative;">
                                    </div>
                                    
        </div>
         <div class="cadreDos">
                        
                                    <div class="anim-photo">
                                        <img   alt="" src="plantillas/img/cara.jpg" width="100%" >
                                    </div>
                                    <div class="anim-photo">
                                        <img  alt="" src="plantillas/img/cara.jpg" width="100%">
                                    </div>
                                    <div class="anim-photo">
                                        <img  alt="" src="plantillas/img/cara.jpg" width="100%">
                                    </div>
                                    
        </div>-->
        <div class="curriculum">
        		
                <h2>José Enrique Nacher</h2>
        		<span class="separador"></span>
                <div class="cuadroCurriculum">
                   	<div class="textoResaltadoSub">Como persona...</div>
                   	<div class="textoCurriculum">Valencia 1984.<br />
                     <p>Desde pequeño gran apasionado del arte, en todas sus facetas. Sus primeras obras fueron en las paredes.</p>
                     <p>Siempre le gusto pintar y dibujar pero a los 18 años decidió hacer algo más técnico y decidió hacer la ingeniería de diseño industrial.</p>
                     <p> A partir de ahí a ido encaminando su vida al diseño, pasando por varios masters y cursos.</p>
                     
                 
               	</div> 
            	</div>
            
                <div class="cuadroCurriculum">
                    <div class="textoResaltadoSub">Como diseñador...</div>
                    <div class="textoCurriculum">
                    <p>A trabajado en varias empresas como diseñador tocando varios campos, diseño gráfico, Web y de producto.</p>
                    <p>Trabajo como freelance los ultimos años pero en 2012 decidió centrar se plenamente en su sueño y decidió embarcase en su mayor proyecto crear su propio estudio.</p>
                  	</div>
                </div>
            
                <div class="cuadroCurriculum">
                    <div class="textoResaltadoSub">Un poco más...</div>
                  	<div class="textoResaltado1"><img src="plantillas/img/corazon.png" width="20" height="20" alt="aficiones" />Aficiones</div>
                    <div>
                    <div class="textoCurriculum1">La gastronomía, el deporte en especial el balonmano y viajar.</div>
                    </div>
                    <div class="textoResaltado1"><img src="plantillas/img/odia.png" width="18" height="18" alt="odia" />Odia</div>
                    <div class="aficiones">
                    <div class="textoCurriculum1">Las imágenes pixeladas</div>
                    </div>
                    <div class="textoResaltado1"><img src="plantillas/img/musica.png" width="20" height="20" alt="musica" />Música</div>
                    <div class="aficiones">
                    <div class="textoCurriculum1">Todo menos el reggaeton.</div>
                    </div>
                </div>   
        </div><!--/////////// fin curriculum-->
        <div class="curriculum">
        		
                <h2>Fran Mauri</h2>
        		<span class="separador"></span>
                <div class="cuadroCurriculum">
                   	<div class="textoResaltadoSub">Como persona...</div>
                   	<div class="textoCurriculum">Valencia 1979.<br />
                     <p>Es un un tio cachondo y alegre cuando esta en su salsa pero sabe ponerse serio cuando llega la hora de currar, lo primero el curro y luego el cachondeo, sin una no puede haber otra, a no ser eso si que haya cachondeo gratis jaja. Desde muy joven estaba bastante interesado por los lenguajes de programacion y todos sus secretos pero no fue hasta tarde cuando decidio meterse de lleno a ello, eso si cuando lo hizo, lo hizo!, y no ha parado, y que mejor que hacerlo orientandolo al mundo de la web..
					</p>
                     
                 
               	</div> 
            	</div>
            
                <div class="cuadroCurriculum">
                    <div class="textoResaltadoSub">Como programador...</div>
                    <div class="textoCurriculum">
                    <p>Los caminos entre José y Fran se cruzaron cuando hace unos años Fran fue profesor de programación de José, a partir de ahí por ideas y semejanzas decidieron embarcarse en la misma canoa.</p>
                    <p>A trabajado como freelance programando webs y webs, aplicaciones y lo que le propusiesen, los ultimos años a estado como profesor y ahora esta en Manchester donde trabaja para el estudio con clientes españoles y de Inglaterra.</p>
                  	</div>
                </div>
            
                <div class="cuadroCurriculum">
                    <div class="textoResaltadoSub">Un poco más...</div>
                  	<div class="textoResaltado1"><img src="plantillas/img/corazon.png" width="20" height="20" alt="aficiones" />Aficiones</div>
                    <div>
                    <div class="textoCurriculum1">El deporte, la naturaleza, las mujeres, y no pongo internet que ya tengo bastante con el trabajo.</div>
                    </div>
                    <div class="textoResaltado1"><img src="plantillas/img/odia.png" width="18" height="18" alt="odia" />Odia</div>
                    <div class="aficiones">
                    <div class="textoCurriculum1">Diseñar (ojo no maquetar!, solo diseñar.... el verde aqui, el azul difuminado alla y la letra Arial y en negrita)
.</div>
                    </div>
                    <div class="textoResaltado1"><img src="plantillas/img/musica.png" width="20" height="20" alt="musica" />Música</div>
                    <div class="aficiones">
                    <div class="textoCurriculum1">Variado pero principalmente POP & DANCE</div>
                    </div>
                </div>   
        </div><!--/////////// fin curriculum-->
        
            
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