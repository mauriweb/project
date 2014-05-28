<?php /* Smarty version Smarty-3.1.12, created on 2013-12-16 17:04:25
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/ver-empleados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40038086252a9d03734a197-54337945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8541e595c9dd1b6e3e0ddd4322cfa69bd18fbcda' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/ver-empleados.tpl',
      1 => 1387209864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40038086252a9d03734a197-54337945',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52a9d037399914_35474929',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a9d037399914_35474929')) {function content_52a9d037399914_35474929($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("admin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <!-- =======================================
        
        FIN HEAD
        
        ======================================= -->	
        
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/select2/select2_metro.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/clockface/css/clockface.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-datepicker/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/jquery-multi-select/css/multi-select.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css"/>
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
	<!-- END PAGE LEVEL STYLES -->
    	
</head>

<body class="page-header-fixed">
        <!-- =======================================
        
        MENU
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("admin/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <!-- =======================================
        
        FIN MENU
        
        ======================================= -->
        <div class="page-container">
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
               <!-- ======================================= MENU LATERAL ======================================= -->
            <?php echo $_smarty_tpl->getSubTemplate ("admin/menuLateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
              <!-- ======================================= FIN MENU LATERAL ======================================= --> 
            <!-- END SIDEBAR MENU -->
            </div>
        	<!--###########################################################################################################-->
            <!-- BEGIN PAGE -->
            <div class="page-content"> 
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						Ver empleados <small>aplicación Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							
							<a href="empleados" class="btn red dropdown-toggle"><span style="color:#FFF;">Ver empleados</span></a>
							
						</li>
						<li>
							<i class="inicio"></i>
							<a href="inicio">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
                        <li>
							<i class="inicio"></i>
							<a href="empleados">Lista de empleados </a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Jose Maria Apellido Apellido 
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
			<div class="row margin-bottom-30">
            	<div class="col-md-12">
                	<h2 class="page-title">
						Jose Maria Apellido Apellido
					</h2>
                </div>
				<div class="col-md-6">
                	
					<!-- Blockquotes -->
					<blockquote class="hero">
						<small>DNI:</small>
                        <p>99999999-M</p>
                        
                        <small>Fecha de nacimiento:</small>
                        <p>00-00-0000</p>
                        
                        <small>Teléfono:</small>
                        <p>96 111 1111</p>
                        
                        <small>Email:</small>
                        <p>typsa@hotmail.com</p>
						
					</blockquote>
				</div>
				<div class="col-md-6">
					<!-- Blockquotes -->
					<blockquote class="hero">
						<small>País:</small>
                        <p>Spain</p>
                        
                        <small>Ciudad:</small>
                        <p>Valencia</p>
                        
                        <small>Población:</small>
                        <p>Paterna</p>
                        
                        <small>Dirección:</small>
                        <p>C/ Ejemplo de calle, n20</p>
						
					</blockquote>
				</div>
                <div class="col-md-3">
					<!-- Blockquotes -->
					<blockquote class="hero">
						<small>Nº Cuenta Bancaria:</small>
                        <p>00000</p>
						
					</blockquote>
				</div>
                <div class="col-md-3">
					<!-- Blockquotes -->
					<blockquote class="hero">
                        <small>Nº Seguridad Social:</small>
                        <p>00000</p>
						
					</blockquote>
				</div>
                <div class="col-md-3">
					<!-- Blockquotes -->
					<blockquote class="hero">
                        <small>Grupo cotización:</small>
                        <p>00000</p>
						
					</blockquote>
				</div>
                <div class="col-md-3">
					<!-- Blockquotes -->
					<blockquote class="hero">
                        <small>Categoría profesional:</small>
                        <p>00000</p>
						
					</blockquote>
				</div>
			</div>
            
            <!--TABLA////////////////////////////////////-->
            <div class="col-md-12 col-sm-12" style="padding:0;">
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption"><i class="fa fa-archive"></i>Archivos adjuntos</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
							</div>
						</div>
						<div class="portlet-body flip-scroll">
							<table class="table table-bordered table-striped table-condensed flip-content">
								<thead class="flip-content">
									<tr>
										<th>Laboral</th>
										<th>Nombre</th>
										<th class="numeric">Fecha</th>
										<th>PDF</th>
                                        <th>Eliminar</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Contrato</td>
										<td>contartoAngel12</td>
										<td class="numeric">2012</td>
										<td><a target="_blank" href="imagenes/contrato/descargaPDF.pdf">Descargar</a></td>
                                        <td><a target="_blank" href="imagenes/contrato/descargaPDF.pdf">Eliminar</a></td>
									</tr>
                                    
                                    <tr>
										<td>Contrato</td>
										<td>contartoAngel13</td>
										<td class="numeric">2013</td>
										<td><a target="_blank" href="imagenes/contrato/descargaPDF.pdf">Descargar</a></td>
                                        <td><a target="_blank" href="imagenes/contrato/descargaPDF.pdf">Eliminar</a></td>
									</tr>
                                    
                                    <tr>
										<td>Contrato</td>
										<td>contartoAngel14</td>
										<td class="numeric">2014</td>
										<td><a target="_blank" href="imagenes/contrato/descargaPDF.pdf">Descargar</a></td>
                                        <td><a target="_blank" href="imagenes/contrato/descargaPDF.pdf">Eliminar</a></td>
									</tr>
                                    
                                    <tr>
										<td>Curriculum</td>
										<td>curriculumAngel14</td>
										<td class="numeric">2014</td>
										<td><a target="_blank" href="imagenes/curriculum/descargaPDF.pdf">Descargar</a></td>
                                        <td><a target="_blank" href="imagenes/contrato/descargaPDF.pdf">Eliminar</a></td>
									</tr>
                                    
                                    <tr>
										<td>IRPF</td>
										<td>irpfAngel14</td>
										<td class="numeric">2014</td>
										<td><a target="_blank" href="imagenes/irpf/descargaPDF.pdf">Descargar</a></td>
                                        <td><a target="_blank" href="imagenes/contrato/descargaPDF.pdf">Eliminar</a></td>
									</tr>
                                    
                                    <tr>
										<td>Parte S.Social</td>
										<td>ssAngel14</td>
										<td class="numeric">2014</td>
										<td><a target="_blank" href="imagenes/ss/descargaPDF.pdf">Descargar</a></td>
                                        <td><a target="_blank" href="imagenes/contrato/descargaPDF.pdf">Eliminar</a></td>
									</tr>
									
								</tbody>
							</table>

                                <div class="scroller-footer">
                                    <div class="pull-right">
                                        <a href="#">Ver todos los registros <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                                    </div>
                                </div>
                                
						</div>
                        
					</div>
				</div>
			<!--/row--> 
		</div>
		
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
        
                 
       <!-- =======================================
        
        PIE
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("admin/pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <!-- =======================================
        
        FIN PIE
        
        ======================================= -->
        <script type="text/javascript" src="plantillas/assets/plugins/fuelux/js/spinner.min.js"></script>
		<script type="text/javascript" src="plantillas/assets/plugins/ckeditor/ckeditor.js"></script>  
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/clockface/js/clockface.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
        <script type="text/javascript" src="plantillas/assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/jquery-multi-select/js/jquery.quicksearch.js"></script>   
        <script src="plantillas/assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript" ></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="plantillas/assets/scripts/app.js"></script>
        <script src="plantillas/assets/scripts/form-components.js"></script>     
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function() {       
               // initiate layout and plugins
               App.init();
               FormComponents.init();
            });
        </script>
        <!-- BEGIN GOOGLE RECAPTCHA -->
        <script type="text/javascript">
            var RecaptchaOptions = {
               theme : 'custom',
               custom_theme_widget: 'recaptcha_widget'
            };
        </script>
        <script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LcrK9cSAAAAALEcjG9gTRPbeA0yAVsKd8sBpFpR"></script>
        <!-- END GOOGLE RECAPTCHA -->
		<!-- END JAVASCRIPTS -->   
</body>
</html>
<?php }} ?>