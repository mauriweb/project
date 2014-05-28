<?php /* Smarty version Smarty-3.1.12, created on 2013-03-22 12:33:25
         compiled from "C:\xampp\htdocs\proyecto\plantillas\tpl\ingles\quienes-somos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23912514b63e90dfaa9-91232004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3e1d2025127781d1a0af8c05edc973a0ed2ee0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\plantillas\\tpl\\ingles\\quienes-somos.tpl',
      1 => 1363951647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23912514b63e90dfaa9-91232004',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_514b63e916bd91_44418322',
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
<?php if ($_valid && !is_callable('content_514b63e916bd91_44418322')) {function content_514b63e916bd91_44418322($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

		<?php echo $_smarty_tpl->getSubTemplate ("ingles/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		ESTRUCTURA
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    


<div class="fondoContenedor" id="first">
    <div class="contenedor">
    
    
      	<div class="cajaTexto">Who is JNACHER  <span style="font-size:9px;">TEAM</span>
        
    	<p class="textoIntro" style=" color:#FFFFFF; font-weight:400;"> <strong>JNacher </strong> gives name to a studio located in Valencia capable of making and develop any project of communication at any of its disciplines.</p>
                
        <p class="textoIntro" style=" color:#FFFFFF; font-weight:400;">We are a team full of energy, creativity, youth, seriousness and of course work.</p>
    
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
                   	<div class="textoResaltadoSub">As a person...</div>
                   	<div class="textoCurriculum">Valencia 1984.<br />
                     <p>Since childhood big passionate of art, and all of its facets. His first’s works were on the walls.</p>
                     <p>He always liked painting and drawing but at his 18 years old decided to do something more technical and decided to do degree design industrial(ingenieria de diseño industrial).</p>
                     <p>From that moment on he has been routed his life into the design, doing several masters and courses.</p>
                     
                 
               	</div> 
            	</div>
            
                <div class="cuadroCurriculum">
                    <div class="textoResaltadoSub">As a designer...</div>
                    <div class="textoCurriculum">
                    <p>He’s been working in several companies as a designer, dealing with several fields, graphic design, web and product.</p>
                    <p>He worked as a freelance in the latest years but in 2012 decided focusing completely in his dream and decided embark in his biggest project, creating his own studio.</p>
                  	</div>
                </div>
            
                <div class="cuadroCurriculum">
                    <div class="textoResaltadoSub">A little more...</div>
                  	<div class="textoResaltado1"><img src="plantillas/img/corazon.png" width="20" height="20" alt="aficiones" />Hobbies</div>
                    <div>
                    <div class="textoCurriculum1">La gastronomy, sports, specially handball and traveling.</div>
                    </div>
                    <div class="textoResaltado1"><img src="plantillas/img/odia.png" width="18" height="18" alt="odia" />Hates</div>
                    <div class="aficiones">
                    <div class="textoCurriculum1">Pixilated images.</div>
                    </div>
                    <div class="textoResaltado1"><img src="plantillas/img/musica.png" width="20" height="20" alt="musica" />Music</div>
                    <div class="aficiones">
                    <div class="textoCurriculum1">Everything less reggae ton.</div>
                    </div>
                </div>   
        </div><!--/////////// fin curriculum-->
        <div class="curriculum">
        		
                <h2>Fran Mauri</h2>
        		<span class="separador"></span>
                <div class="cuadroCurriculum">
                   	<div class="textoResaltadoSub">As a person...</div>
                   	<div class="textoCurriculum">Valencia 1979.<br />
                     <p>An amusing guy when is in his environment but serious when it is time to work, first thing work and after enjoy, without one cannot be other. since very young very interested in programming language and all its secrets, but it was not till late when he decided to take that seriously, but when he did it, he defiantly did it!, and haven't stopped since then, and what better way of making it focusing on the web world ..
					</p>
                     
                 
               	</div> 
            	</div>
            
                <div class="cuadroCurriculum">
                    <div class="textoResaltadoSub">As a developer...</div>
                    <div class="textoCurriculum">
                    <p>The José and Fran’s paths crossed when a few years ago Fran taught web programming to José, and from that moment on because of similarities of ideas they decided embark in the same boat.</p>
                    <p>He's been working as a freelance developing webs, applications and anything he is asked for, in the latest years he's been as a teacher and now is in Manchester where works for the studio with clients from Spain and England. </p>
                  	</div>
                </div>
            
                <div class="cuadroCurriculum">
                    <div class="textoResaltadoSub">A little more...</div>
                  	<div class="textoResaltado1"><img src="plantillas/img/corazon.png" width="20" height="20" alt="aficiones" />Hobbies</div>
                    <div>
                    <div class="textoCurriculum1">Sports, nature, women, and I do not name internet because I have enough at work.</div>
                    </div>
                    <div class="textoResaltado1"><img src="plantillas/img/odia.png" width="18" height="18" alt="odia" />Hates</div>
                    <div class="aficiones">
                    <div class="textoCurriculum1">Design (not layout!, just designing.... the green here, the blur blue there and bold Arial font here).</div>
                    </div>
                    <div class="textoResaltado1"><img src="plantillas/img/musica.png" width="20" height="20" alt="musica" />Music</div>
                    <div class="aficiones">
                    <div class="textoCurriculum1">It is varied, but mainly POP & DANCE</div>
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

		<?php echo $_smarty_tpl->getSubTemplate ("ingles/pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>