<?php /* Smarty version Smarty-3.1.12, created on 2012-11-08 18:33:59
         compiled from "C:\xampp\htdocs\proyecto\plantillas\tpl\inicial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19395509bea4946edf5-77252684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a04b578ca11c121b5f3fa1eb2b60a55d2722c4d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\plantillas\\tpl\\inicial.tpl',
      1 => 1352396016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19395509bea4946edf5-77252684',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509bea495143a6_85822856',
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bea495143a6_85822856')) {function content_509bea495143a6_85822856($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
<link rel="stylesheet" type="text/css" href="plantillas/css/css.css"/>

<style type="text/css">
.anim-photo{
	overflow:hidden;
	height: 360px;
	width: 298px;
	margin:auto;
	float:left;
}
.contenedor .tayron {
	float: left;
	width: 900px;
}
.contenedor .tayron .imagenTayron {
	float: left;
	width: 298px;
	margin-right: 30px;
}
.contenedor .tayron .textoTayron {
	float: left;
	width: 540px;
	padding-top: 25px;
	padding-right: 15px;
	padding-bottom: 15px;
	padding-left: 15px;
}

.cadre-photo.first {
	margin-top:100px;
}
.contenedor .curriculum {
	padding: 10px;
	float: left;
	width: 900px;
	padding-top: 20px;
}
.contenedor .curriculum .cuadroCurriculum {

	float: left;
    padding-left: 5px;
    padding-right: 20px;
    width: 270px;

	
}
.aficiones {
	width: 200px;
	padding-right: 25px;
	padding-left: 25px;
}
.textoResaltado {
	font-family: Georgia,"Times New Roman",Times,serif;
	/*font-family: Petita,Arial,Helvetica,sans-serif;*/
    font-size: 25px;
	line-height: 20px;
	margin-bottom: 5px;
	text-shadow: none;
	font-weight: 600;
	font-variant: small-caps;
	text-align: center;
}
.formaTrabajar .imagenMetodo {
	background-image: url(plantillas/img/metodoDeTrabajo.png);
	background-repeat: no-repeat;
	background-position: center center;
	height: 250px;
	width: 900px;
	padding-top: 10px;
	padding-bottom: 10px;
	font-size: 15px;
	font-variant: small-caps;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #FAAC58;
	text-align: center;
}
.textoResaltado1 {
	font-family: Georgia,"Times New Roman",Times,serif;
	/*font-family: Petita,Arial,Helvetica,sans-serif;*/
	color: #FE642E;
	font-size: 25px;
	line-height: 20px;
	margin-bottom: 15px;
	text-shadow: none;
	margin-left: 20px;
}
.imagenIndex {
	background-image: url(plantillas/img/nosotros_1.gif);
	background-repeat: no-repeat;
	background-position: center top;
	min-height:600px;
}
.imagenIndex .contenedorIndex .textoSomos {
	float: left;
	width: 500px;
	margin-left: 300px;
	margin-right: 100px;
	font-family: Georgia,"Times New Roman",Times,serif;
	font-size:13px;
	text-align: justify;
	padding-bottom: 100px;
}
.resaltadaIndex {
	font-size: 39px;
	color:#F5D0A9;
	font-style: normal;
	line-height: 35px;
	font-weight: 600;
}
.formaTrabajar {
	width: 900px;
	margin-right: auto;
	margin-left: auto;
}
.textoResaltado1 img {
	float: left;
	margin-top: 1px;
	margin-right:10px;
}
.textoResaltadoSub {
	color: #FE642E;
	font-family: Georgia,"Times New Roman",Times,serif;
	font-size: 15px;
	font-weight: 300;
	margin-bottom: 15px;
	margin-left:5px;
	text-shadow: none;
	margin-top:20px;
}
.textoCurriculum {
	color: #BDBDBD;
	font-family: Georgia,"Times New Roman",Times,serif;
	font-size: 12px;
	font-weight: light;
	margin-bottom: 15px;
	text-shadow: none;
	height:180px;
}
.imagenIndex .contenedorIndex {
	width: 900px;
	margin-right: auto;
	margin-left: auto;
}
.textoCurriculum1 {
	color: #BDBDBD;
	font-family: Georgia,"Times New Roman",Times,serif;
	font-size: 12px;
	font-weight: light;
	margin-bottom: 25px;
	text-shadow: none;
	height:20px;
}
.textoCurriculum2 {
	color: #BDBDBD;
	font-family: Georgia,"Times New Roman",Times,serif;
	font-size: 12px;
	font-weight: light;
	margin-bottom: 15px;
	text-shadow: none;
}


</style>

	<!-- include jquery -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>

     
    <!-- include Bocadillos JS -->
    <script type="text/javascript" src="plantillas/js/bocadillos.js"></script>
    
    <!-- include careto JS -->
    <script type="text/javascript" src="plantillas/js/animJquery.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
	  $('.anim-photo').anim();
	});
	
	</script>


    

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="imagenIndex">
	<div class="contenedorIndex">
	<div style="margin-bottom:50px" class="horizontal-line"></div>
    <div class="textoSomos">
    
    <p><strong>JoseEnriqueNacher&co </strong> es un pequeño estudio ubicado en Valencia capaz de resolver y desarrollar cualquier proyecto de comunicación en cualquiera de sus diferentes disciplinas.</p>
    
    <p class="resaltadaIndex">Somos un equipo repleto de <span style="font-size:45px; color:#F7BE81; ">energía</span>, <span style="font-size:35px; color:#F7BE81; ">creatividad</span>, <span style="font-size:32px; color:#F7BE81;">juventud</span>, <span style="font-size:40px; color:#F7BE81;">seriedad</span> y por supuesto <span style="font-size:45px; color:#FAAC58;">trabajo.</span></p>
    
    <p>Porque desde que nos levantamos hasta que nos acostamos estamos preparados para abordar nuevos proyectos y llevarlos a su objetivo.</p>
    
    <p>Nos dejamos la piel para ofrecer al cliente una solución atractiva, actual y rentable. Todo esto sin olvidarnos nunca de ti. No pretendemos hacer obras de arte que ganen <span class="has_bocadillo">
    premios*
    <span class="bocadillo" style="top: -169px; display: none;">
    Aunque, si nos lo dan por
    <strong>un buen trabajo</strong>
    , bienvenidos sean.
    <span class="flechita"></span>
    </span>
    </span>
    , ni salir en revistas, solo que nuestro cliente este satisfecho de nuestro trabajo.</p>
    <p>En <strong>JoseEnriqueNacher&co</strong> miramos siempre por nuestro cliente, porque es su empresa, su producto y su dinero.</p>
    
    </div>

    
  </div><!--/////////// fin contenedor index-->    
</div><!--/////////// fin imagen contenedor-->
  

    
    



<div class="contenedor">
<div style="margin-bottom:50px" class="horizontal-line"></div>

<div class="cadre-photo first">
				
							<div class="anim-photo">
								<img   alt="" src="plantillas/img/jc2-50.jpg" style="top: -2160px; position: relative;">
							</div>
                            <div class="anim-photo">
								<img  alt="" src="plantillas/img/jc2-51.jpg"   style="top: -2160px; position: relative;">
							</div>
                            <div class="anim-photo">
								<img  alt="" src="plantillas/img/jc2-52.jpg"  style="top: -2160px; position: relative;">
							</div>
                            
</div>

<div class="curriculum">

        <div class="cuadroCurriculum">
           <div class="textoResaltadoSub">Como persona...</div>
           <div class="textoCurriculum">Valencia 1984.<br />
             <p>Desde pequeño gran apasionado del arte, en todas sus facetas. Sus primeras obras fueron en las paredes.</p>
             <p>Siempre le gusto pintar y dibujar pero a los 18 años decidio hacer algo más técnico y decidio hacer la ingenieria de diseño industrial.</p>
             <p> A partir de ahi a ido encaminando su vida al diseño, pasando por varios masters y cursos.</p>
             
         
          </div> 
    </div>
    
        <div class="cuadroCurriculum">
            <div class="textoResaltadoSub">Como diseñador...</div>
            <div class="textoCurriculum">
            <p>A trabajado en varias empresas como diseñador tocando varios campos, diseño gráfico, web y de producto.</p>
            <p>Trabajo como freelance los ultimos años pero en 2012 decidio centrarse plenamente en su sueño y decidio enbarcase en su mayor proyecto crear su propio estudio.</p>
          </div>
        </div>
    
        <div class="cuadroCurriculum">
           	<div class="textoResaltadoSub">Un poco más...</div>
          <div class="textoResaltado1"><img src="plantillas/img/corazon.png" width="20" height="20" alt="aficiones" />Aficiones</div>
            <div class="aficiones">
            <div class="textoCurriculum1">La gastronomia, el deporte en especial el balonmano y viajar.</div>
            </div>
            <div class="textoResaltado1"><img src="plantillas/img/odia.png" width="18" height="18" alt="odia" />Odia</div>
            <div class="aficiones">
            <div class="textoCurriculum1">Las imagenes pixeladas</div>
            </div>
            <div class="textoResaltado1"><img src="plantillas/img/musica.png" width="20" height="20" alt="musica" />Musica</div>
            <div class="aficiones">
            <div class="textoCurriculum1">Todas las cosas escuchables.</div>
            </div>
        </div>
	
        <div class="tayron">
        <div class="imagenTayron"><img src="plantillas/img/tayron.png" width="288" height="360" alt="tayron" /></div>
            <div class="textoTayron">	
                <div class="textoResaltado">& CO</div>
                <div class="textoResaltadoSub">Ayudante principal</div>
                <div class="textoCurriculum2">Valencia 2012.<br />
        El trabajo en el estudio se centra principalmente en dormir en su camita, tarea que sólo descuida ocasionalmente para chupar o morder cualquier cosa.
        El servicio de cafes lo delega a un loro, pero eso en el estudio no lo saben.
                </div>
                <div class="textoResaltado1"><img src="plantillas/img/corazon.png" width="20" height="20" alt="aficiones" />Aficiones</div>
                <div class="aficiones">
                <div class="textoCurriculum1">Correr, morder y comer.</div>
                </div>
                <div class="textoResaltado1"><img src="plantillas/img/odia.png" width="18" height="18" alt="odia" />Odia</div>
                <div class="aficiones">
                <div class="textoCurriculum1">Las berbenas</div>
                </div>
                <div class="textoResaltado1"><img src="plantillas/img/musica.png" width="20" height="20" alt="musica" />Musica</div>
                <div class="aficiones">
                <div class="textoCurriculum1">No tiene preferencias musicales.</div>
                </div>
            </div>
        </div>
	</div><!--/////////// fin curriculum-->
</div><!--/////////// fin contenedor-->
<div style="clear:both;"></div>
<div class="formaTrabajar">
  <div style="margin-:50px" class="horizontal-line"></div>
        <p class="resaltadaIndex">Nuestra forma de trabajar: <br /><span style="font-size:20px; font-style:italic;"><img src="plantillas/img/comillas_izq.png" width="15" height="15" />No sabemos si es la mejor, pero a nosotros nos funciona.<img src="plantillas/img/comillas_der.png" width="18" height="20" /></span></p>
                
             
        
      <div class="imagenMetodo">
          <div style="margin-top:60px; margin-left:105px; float:left; width:90px;">Reunión</div>
        <div style="margin-top:168px; margin-left:15px; float:left; width:90px;">Presupuesto</div>
        <div style="margin-top:42px; margin-left:5px; float:left; width:110px;;">Aprovacion<p>presupuesto</p></div>
        <div style="margin-top:168px; margin-left:4px; float:left; width:90px;">Creatividad</div>
        <div style="margin-top:60px; margin-left:10px; float:left; width:90px;">Reunión</div>
          <div style="margin-top:125px; margin-left:62px; float:left; width:100px; font-size:24px; font-style:normal; font-weight: 800;">Arte final</div>
        </div>
</div><!--/////////// fin forma trabajar-->




<?php echo $_smarty_tpl->getSubTemplate ("pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>