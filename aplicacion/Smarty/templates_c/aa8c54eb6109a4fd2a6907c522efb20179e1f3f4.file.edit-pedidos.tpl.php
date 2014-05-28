<?php /* Smarty version Smarty-3.1.12, created on 2014-01-30 15:39:17
         compiled from "C:\xampp\htdocs\acero\plantillas\tpl\admin\edit-pedidos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2723852ea6415da50f4-22358956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa8c54eb6109a4fd2a6907c522efb20179e1f3f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acero\\plantillas\\tpl\\admin\\edit-pedidos.tpl',
      1 => 1390650235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2723852ea6415da50f4-22358956',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52ea6415eab042_39893673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea6415eab042_39893673')) {function content_52ea6415eab042_39893673($_smarty_tpl) {?><!DOCTYPE html>
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
		.codigo{
			margin-top:5px;
			text-align:right;
			position:relative;
			padding-right:0px;
			font-weight:bold;
			font-size:16px;	
		}
		
		th, tr{
			text-align:center;
		}
		tr input{
			text-align:center
		}
		tbody tr td.num{
			padding:10px; 
			font-weight:bold; 
			font-size:14px;
		}
			
	</style>
    
    	
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
						Editar pedidos <small> Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							
							<a href="pedidos" class="btn red dropdown-toggle"><span style="color:#FFF;">Ver pedidos</span></a>
							
						</li>
						<li>
							<i class="inicio"></i>
							<a href="inicio">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Editar pedidos
							
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">Editar pedidos</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" id="form_sample_1" class="form-horizontal form-bordered form-row-stripped">
								<div class="form-body">
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Número de pedido</label>
													<div class="col-md-1 codigo">
                                                    	<span class="control-labe">P14 - 0001 (se genera automaticamente, 14 cambia dependiendo del año) </span>
													</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Cliente</label>
										<div class="col-md-4">
											<select class="form-control" name="category" class="select2me">
                                            	<option value="ES">Nombre de cliente</option>
                                                <option value="ES">Nombre de cliente</option>
                                                <option value="ES">Nombre de cliente</option>
                                                <option value="ES">Nombre de cliente</option>
                                                <option value="ES">Nombre de cliente</option>
                                                <option value="ES">Nombre de cliente</option>
                                                <option value="ES">Nombre de cliente</option>
											</select>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Código del proyecto</label>
										<div class="col-md-4">
											<select class="form-control" name="category" class="select2me">
                                            	<option value="ES">Número del proyecto</option>
                                                <option value="ES">Número del proyecto</option>
                                                <option value="ES">Número del proyecto</option>
                                                <option value="ES">Número del proyecto</option>
                                                <option value="ES">Número del proyecto</option>
                                                <option value="ES">Número del proyecto</option>
											</select>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Encargado por</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="Nombre">
													</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Departamento</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="Nombre">
													</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Responsable del trabajo</label>
										<div class="col-md-4">
											<select class="form-control" name="category" class="select2me">
                                            	<option value="ES">Número de trabajador</option>
                                                <option value="ES">Número de trabajador</option>
                                                <option value="ES">Número de trabajador</option>
                                                <option value="ES">Número de trabajador</option>
                                                <option value="ES">Número de trabajador</option>
                                                <option value="ES">Número de trabajador</option>
											</select>
										</div>
									</div>
                                    <div class="form-group">
										<label  class="col-md-3 control-label">Urgente</label>
										<div class="col-md-9">
											<div class="checkbox-list">
												<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox21" value="option1"> Si
												</label>
												<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox22" value="option2"> No
												</label> 
											</div>
										</div>
									</div>
                                    <div class="form-group">
										<label  class="col-md-3 control-label">Pedido telefónicamente</label>
										<div class="col-md-9">
											<div class="checkbox-list">
												<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox21" value="option1"> Si
												</label>
												<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox22" value="option2"> No
												</label> 
											</div>
										</div>
									</div>
                                    <div class="form-group">
										<label  class="col-md-3 control-label">Listado de documentos</label>
										<div class="col-md-9">
											<div class="checkbox-list">
												<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox21" value="option1"> Si
												</label>
												<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox22" value="option2"> No
												</label> 
											</div>
										</div>
									</div>
                                    <div class="form-group">
										<label  class="col-md-3 control-label">Planificado</label>
										<div class="col-md-9">
											<div class="checkbox-list">
												<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox21" value="option1"> Si
												</label>
												<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox22" value="option2"> No
												</label> 
											</div>
										</div>
									</div>
                                   
                                    
                       
								<div class="portlet-body flip-scroll">
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                        <thead class="flip-content">
                                            <tr>
                                                <th>Nº Orden</th>
                                                <th>Descripción</th>
                                                <th>Trabajador</th>
                                                <th>Fecha de inserción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td class="num">1</td>
                                                <td><input type="text" class="form-control" placeholder="Descripción" size="105" type="text"></td>
                                                <td>
                                                	<select class="form-control" name="category" class="select2me">
                                                        <option value="ES">Seleccionar...</option>
                                                        <option value="ES">Nombre de trabajador</option>
                                                        <option value="ES">Nombre de trabajador</option>
                                                        <option value="ES">Nombre de trabajador</option>
                                                        <option value="ES">Nombre de trabajador</option>
                                                        <option value="ES">Nombre de trabajador</option>
                                                        <option value="ES">Nombre de trabajador</option>
                                                	</select>
                                                </td>
                                                <td><input class="form-control date-picker" placeholder="Fecha" size="5" type="text" value="" /></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- END TABLE PEDIDOS A REALIZAR-->         
                                    
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn red">Enviar</button>
										<button type="button" class="btn default">Cancelar</button>                              
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
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