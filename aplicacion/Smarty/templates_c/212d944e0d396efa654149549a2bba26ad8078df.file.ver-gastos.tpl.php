<?php /* Smarty version Smarty-3.1.12, created on 2014-01-27 00:04:29
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/ver-gastos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211490164552e5943db77480-09622184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '212d944e0d396efa654149549a2bba26ad8078df' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/ver-gastos.tpl',
      1 => 1390777435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211490164552e5943db77480-09622184',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52e5943dbca975_37121327',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e5943dbca975_37121327')) {function content_52e5943dbca975_37121327($_smarty_tpl) {?><!DOCTYPE html>
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
    
    <style type="text/css">
		th, tr{
			text-align:center;
		}
		.colo{
			background-color:#F5ECCE;
		}
		.flip-content tr th.peq{
			font-size:11px;	
		}
		.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
			background-color: #F5ECCE;
		}
		.table thead tr.letraPeq th{
			font-size:10px;	
			padding: 2px;
		}
	</style>
    
    
    	
</head>

<body class="page-header-fixed">
        <!-- =======================================
        
        MENU
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("trabajador/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <!-- =======================================
        
        FIN MENU
        
        ======================================= -->
        <div class="page-container">
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
               <!-- ======================================= MENU LATERAL ======================================= -->
            <?php echo $_smarty_tpl->getSubTemplate ("trabajador/menuLateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
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
						Ver justificante de gastos <small> Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							
							<a href="gastos-trabajador" class="btn red dropdown-toggle"><span style="color:#FFF;">Ver justificante de gastos</span></a>
							
						</li>
						<li>
							<i class="inicio"></i>
							<a href="inicio-trabajador">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
                        <li>
							<i class="inicio"></i>
							<a href="gastos-trabajador">Lista justificante de gastos </a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Justificante hecho por.....Nombre 
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
			<div class="row margin-bottom-30">
            	
                <div class="col-md-8">
                				<div class="portlet-body flip-scroll">
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                        <thead class="flip-content">
                                            <tr>
                                                <th>Cliente</th>
                                                <th>Proyecto</th>
                                                <th>Trabajador</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td>Typsa</td>
                                                <td>214312</td>
                                                <td>Pepe</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- END TABLE PEDIDOS A REALIZAR--> 
             </div>
             <div class="col-md-4">
                				<div class="portlet-body flip-scroll">
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                        <thead class="flip-content">
                                            <tr>
                                                <th>Nº Pedido</th>
                                                <th>Nº Factura</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td>P14 - 324</td>
                                                <td>234324</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- END TABLE PEDIDOS A REALIZAR--> 
             </div>
             </div>
			<!--/row--> 
            <div class="row">
													<div class="col-md-12">
														<div class="portlet-body flip-scroll">
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                        <thead class="flip-content">
                                            <tr>
                                                <th rowspan="2">Fecha</th>
                                                <th rowspan="2">De</th>
                                                <th rowspan="2">A</th>
                                                <th colspan="3">Locomoción</th>
                                                <th rowspan="2">Hotel</th>
                                                <th rowspan="2">Comidas</th>
                                                <th colspan="2">Otros gastos</th>
                                                <th rowspan="2">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <thead class="flip-content">
                                            <tr class="letraPeq">
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>avión / ff.cc.</th>
                                                <th>autobus / taxi</th>
                                                <th>km</th>
                                                <th></th>
                                                <th></th>
                                                <th>detalle</th>
                                                <th>€</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td>17/05/2014</td>
                                               	<td>DE</td>
                                                <td>A</td>
                                                
                                                <td>200€</td>
                                                <td></td>
                                                <td>100</td>
                                                
                                                <td>200€</td>
                                                <td>100€</td>
                                                
                                                <td>descripción detalle</td>
                                                <td>200€</td>
                                                <td>2000€</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- END TABLE PEDIDOS A REALIZAR--> 
                                <div class="form-actions">
									<div class="col-md-12">
										<button type="submit" class="btn red"><i class="fa fa-download"></i> Imprimir pdf </button>                              
									</div>
								</div>   
													</div>
                                                    
												</div>
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