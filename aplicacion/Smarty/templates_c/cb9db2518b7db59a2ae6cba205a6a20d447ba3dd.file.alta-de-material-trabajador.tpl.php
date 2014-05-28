<?php /* Smarty version Smarty-3.1.12, created on 2013-12-16 15:07:49
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/alta-de-material-trabajador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:832484052af0814c2eca7-85589889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb9db2518b7db59a2ae6cba205a6a20d447ba3dd' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/alta-de-material-trabajador.tpl',
      1 => 1387202866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '832484052af0814c2eca7-85589889',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52af0814c8a5a4_06307660',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52af0814c8a5a4_06307660')) {function content_52af0814c8a5a4_06307660($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("trabajador/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
						Insertar partes de material <small> Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							
							<a href="partes-de-material-trabajador" class="btn red dropdown-toggle"><span style="color:#FFF;">Ver partes de material</span></a>
							
						</li>
						<li>
							<i class="inicio"></i>
							<a href="inicio-trabajador">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Insertar partes de material
							
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="tab-pane ">
								<div class="portlet box red">
									<div class="portlet-title">
										<div class="caption">Insertar parte de material</div>
										<div class="tools">
											<a href="javascript:;" class="collapse"></a>
                                        </div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal">
											<div class="form-body">
												<h3 class="form-section">Rellenar, parte diario</h3>
												
												<!--/row-->
												
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Nº Pedido</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">P13-032</option>
																	<option value="">P13-032</option>
                                                                    <option value="">P13-032</option>
                                                                    <option value="">P13-032</option>
                                                                    <option value="">P13-032</option>
                                                                    <option value="">P13-032</option>
                                                                    <option value="">P13-032</option>
                                                                    <option value="">P13-032</option>
                                                                    <option value="">P13-032</option>
																</select>
																<span class="help-block">Selecciona el número de pedido, se vinculara, cliente, proyecto, persona encargada y quien lo realiza.</span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Fecha</label>
                                                        <div class="col-md-3">
                                                            <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" >
                                                                <input type="text" class="form-control" readonly>
                                                                <span class="input-group-btn">
                                                                <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                                                </span>
                                                            </div>
                                                            <!-- /input-group -->      
                                                            <span class="help-block">Selecciona la fecha</span>                           
                                                        </div>
                                                    </div>
                                                    </div>
													<!--/span-->
												</div>
												<!--/row-->        
												
												
                                                
												<!--/row-->                   
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
                                                                    <label  class="col-md-3 control-label">Pedido por:</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" placeholder="Nombre">
                                                                    </div>
                                                    </div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
                                                            <label class="control-label col-md-3">Cantidad</label>
                                                            <div class="col-md-9">
                                                                <input id="touchspin_demo1" type="text" value="1" name="demo1" class="form-control">
                                                                <span class="help-block">
                                                                Números de unidades.
                                                                </span>
                                                            </div>
                                                        </div>
													</div>
                                                    
												</div>
                                                <!--/row-->                   
												
                                                <!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
                                                                    <label  class="col-md-3 control-label">Dimensiones:</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" placeholder="100x100">
                                                                    </div>
                                                    	</div>
                                                    </div>
													<!--/span-->
													<div class="col-md-3">
														<div class="form-group">
                                                                    <label  class="col-md-3 control-label">Código:</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" placeholder="C200">
                                                                        <span class="help-block">Mirar tablas de códigos <i class="fa fa-arrow-down"></i></span>
                                                                    </div>
                                                    	</div>
                                                    </div>
													<!--/span-->
                                                    <div class="col-md-3">
														<div class="form-group">
                                                                    <label  class="col-md-3 control-label">Total:</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" placeholder="C200">
                                                                        <span class="help-block">Mirar ??????</span>
                                                                    </div>
                                                    	</div>
													</div>
												<!--/row-->  
												</div>
                                             <!--/FINNNNNNNNNNNN--> 
                                             <h3 class="form-section">Códigos</h3>
                                             <div class="row ">
                                                    <div class="col-md-3 col-sm-3">
                                                        <div class="portlet box light grey">
                                                            <div class="portlet-title">
                                                                <div class="caption">Impresión</div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse"></a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body flip-scroll">
                                                                <table class="table table-bordered table-striped table-condensed flip-content">
                                                                    
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>C201</th>
                                                                            <td>Cortado y doblado de planos</td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>C201</th>
                                                                            <td>Cortado y doblado de planos</td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>C201</th>
                                                                            <td>Cortado y doblado de planos</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                    
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <!--#################################-->
                                                    
                                                    <div class="col-md-3 col-sm-3">
                                                        <div class="portlet box light grey">
                                                            <div class="portlet-title">
                                                                <div class="caption">Operaciones imprenta</div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse"></a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body flip-scroll">
                                                                <table class="table table-bordered table-striped table-condensed flip-content">
                                                                    
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>C201</th>
                                                                            <td>Cortado y doblado de planos</td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>C201</th>
                                                                            <td>Cortado y doblado de planos</td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>C201</th>
                                                                            <td>Cortado y doblado de planos</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                    
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <!--#################################-->
                                                    
                                                    <div class="col-md-3 col-sm-3">
                                                        <div class="portlet box light grey">
                                                            <div class="portlet-title">
                                                                <div class="caption">Material</div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse"></a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body flip-scroll">
                                                                <table class="table table-bordered table-striped table-condensed flip-content">
                                                                    
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>C201</th>
                                                                            <td>Cortado y doblado de planos</td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>C201</th>
                                                                            <td>Cortado y doblado de planos</td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>C201</th>
                                                                            <td>Cortado y doblado de planos</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                    
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <!--#################################-->
                                                    
                                                    <div class="col-md-3 col-sm-3">
                                                        <div class="portlet box light grey">
                                                            <div class="portlet-title">
                                                                <div class="caption">Otros...</div>
                                                                <div class="tools">
                                                                    <a href="javascript:;" class="collapse"></a>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body flip-scroll">
                                                                <table class="table table-bordered table-striped table-condensed flip-content">
                                                                    
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>C201</th>
                                                                            <td>Cortado y doblado de planos</td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>C201</th>
                                                                            <td>Cortado y doblado de planos</td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>C201</th>
                                                                            <td>Cortado y doblado de planos</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                    
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <!--#################################-->
                                                    
                                                   
                                                    
                                                    
                                                </div>
                                             </div>  
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-6">
														<div class="col-md-offset-3 col-md-9">
															<button type="submit" class="btn red">Enviar</button>
															<button type="button" class="btn default">Cancelar</button>                              
														</div>
													</div>
													<div class="col-md-6"></div>
												</div>
											</div>
										</form>
										<!-- END FORM-->                
									</div>
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
        <?php echo $_smarty_tpl->getSubTemplate ("trabajador/pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
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