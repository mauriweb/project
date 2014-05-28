<?php /* Smarty version Smarty-3.1.12, created on 2014-01-25 12:46:14
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/edit-partes-de-trabajo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61527924352ab4f0de87d45-54265427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cdb3e8238654cb52cc4796ad5ff4e621e670b4e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/edit-partes-de-trabajo.tpl',
      1 => 1390650195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61527924352ab4f0de87d45-54265427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52ab4f0dee5210_37758649',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ab4f0dee5210_37758649')) {function content_52ab4f0dee5210_37758649($_smarty_tpl) {?><!DOCTYPE html>
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
		.flip-content tr th.peq{
			font-size:11px;	
		}
		td.peqInput div{
			padding-top:6px;
		}
		th, tr{
			text-align:center;
		}
		tr input{
			text-align:center
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
						Editar partes de trabajo <small> Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							
							<a href="partes-de-trabajo" class="btn red dropdown-toggle"><span style="color:#FFF;">Ver partes de trabajo</span></a>
							
						</li>
						<li>
							<i class="inicio"></i>
							<a href="inicio">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Editar partes de trabajo
							
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
										<div class="caption">Editar parte de trabajo</div>
										<div class="tools">
											<a href="javascript:;" class="collapse"></a>
                                        </div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" id="form_sample_1" class="form-horizontal form-bordered form-row-stripped">
												<div class="form-body">
												
														<div class="form-group">
															<label class="control-label col-md-3">Nº Pedido</label>
															<div class="col-md-7">
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
                                                     
														<div class="form-group">
															<label class="control-label col-md-3">Trabajo a realizar</label>
															<div class="col-md-7">
																<span class="help-block">Se creara automaticamente dependiendo de quien este logueado</span>
															</div>
														</div>
                                                     
                                                        <div class="form-group">
															<label class="control-label col-md-3">Nº FACTURA</label>
                                                            <div class="col-md-7">
															<span class="help-block">Se creara automaticamente</span>
                                                            </div>
														</div>
												       
												
												
                                                                 
														<div class="portlet-body flip-scroll">
                                                                <table class="table table-bordered table-striped table-condensed flip-content">
                                                                    <thead class="flip-content">
                                                                        <tr>
                                                                            <th>Fecha</th>
                                                                            <th>Cantidad</th>
                                                                            <th>Código</th>
                                                                            <th>Concepto</th>
                                                                            <th class="peq">DLN</th>
                                                                            <th class="peq">DSÑ</th>
                                                                            <th class="peq">TPG</th>
                                                                            <th class="peq">INF</th>
                                                                            <th class="peq">ED/EN</th>
                                                                            <th class="peq">PLN</th>
                                                                            <th class="peq">CHQ</th>
                                                                            <th class="peq">CRR</th>
                                                                            <th class="peq">FRM</th>
                                                                            <th class="peq">VRS</th>
                                                                            <th>Pedido por</th>
                                                                            <th>Revisado por</th>
                                                                            <th>Descripción</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><input class="form-control date-picker" placeholder="Fecha" size="25" type="text" value="" /></td>
                                                                            <td>
                                                                                <select class="form-control" name="category" class="select2me" style="width:80px">
                                                                                    <option value="0">0</option>
                                                                                    <option value="ES">0.5</option>
                                                                                    <option value="ES">1</option>
                                                                                    <option value="ES">1.5</option>
                                                                                    <option value="ES">2</option>
                                                                                    <option value="ES">2.5</option>
                                                                                    <option value="ES">3</option>
                                                                                    <option value="ES">3.5</option>
                                                                                    <option value="ES">4</option>
                                                                                    <option value="ES">4.5</option>
                                                                                    <option value="ES">5</option>
                                                                                    <option value="ES">5.5</option>
                                                                                    <option value="ES">6</option>
                                                                                    <option value="ES">6.5</option>
                                                                                    <option value="ES">7</option>
                                                                                    <option value="ES">7.5</option>
                                                                                    <option value="ES">8</option>
                                                                                    <option value="ES">8.5</option>
                                                                                    <option value="ES">9</option>
                                                                                    <option value="ES">9.5</option>
                                                                                    <option value="ES">10</option>
                                                                                    <option value="ES">10.5</option>
                                                                                    <option value="ES">11</option>
                                                                                    <option value="ES">11.5</option>
                                                                                    <option value="ES">12</option>
                                                                                    <option value="ES">12.5</option>
                                                                                    <option value="ES">13</option>
                                                                                    <option value="ES">13.5</option>
                                                                                    <option value="ES">14</option>
                                                                                    <option value="ES">14.5</option>
                                                                                    <option value="ES">15</option>
                                                                                    <option value="ES">15.5</option>
                                                                                    <option value="ES">16</option>
                                                                                    <option value="ES">16.5</option>
                                                                                    <option value="ES">17</option>
                                                                                    <option value="ES">17.5</option>
                                                                                    <option value="ES">18</option>
                                                                                    <option value="ES">18.5</option>
                                                                                    <option value="ES">19</option>
                                                                                    <option value="ES">19.5</option>
                                                                                    <option value="ES">20</option>
                                                                                    <option value="ES">20.5</option>
                                                                                    <option value="ES">21</option>
                                                                                    <option value="ES">21.5</option>
                                                                                    <option value="ES">22</option>
                                                                                    <option value="ES">22.5</option>
                                                                                    <option value="ES">23</option>
                                                                                    <option value="ES">23.5</option>
                                                                                    <option value="ES">24</option>
                                                                                    <option value="ES">24.5</option>
                                                                                </select>
                                                                            </td>
                                                                            <td>
                                                                                <select class="form-control" name="category" class="select2me" style="width:90px">
                                                                                    <option value="0">----</option>
                                                                                    <option value="ES">C111</option>
                                                                                    <option value="ES">C111</option>
                                                                                    <option value="ES">C111</option>
                                                                                    <option value="ES">C111</option>
                                                                                    <option value="ES">C111</option>
                                                                                    <option value="ES">C111</option>
                                                                                    <option value="ES">C111</option>
                                                                                    <option value="ES">C111</option>
                                                                                    <option value="ES">C111</option>
                                                                                </select>
                                                                            </td>
                                                                            <td><input type="text" class="form-control" placeholder="Concepto" size="15" type="text"></td>
                                                                            <td class="peqInput"><input type="checkbox" id="inlineCheckbox21" value="option1"></td>
                                                                            <td class="peqInput"><input type="checkbox" id="inlineCheckbox21" value="option1"></td>
                                                                            <td class="peqInput"><input type="checkbox" id="inlineCheckbox21" value="option1"></td>
                                                                            <td class="peqInput"><input type="checkbox" id="inlineCheckbox21" value="option1"></td>
                                                                            <td class="peqInput"><input type="checkbox" id="inlineCheckbox21" value="option1"></td>
                                                                            <td class="peqInput"><input type="checkbox" id="inlineCheckbox21" value="option1"></td>
                                                                            <td class="peqInput"><input type="checkbox" id="inlineCheckbox21" value="option1"></td>
                                                                            <td class="peqInput"><input type="checkbox" id="inlineCheckbox21" value="option1"></td>
                                                                            <td class="peqInput"><input type="checkbox" id="inlineCheckbox21" value="option1"></td>
                                                                            <td class="peqInput"><input type="checkbox" id="inlineCheckbox21" value="option1"></td>
                                                                            
                                                                            <td>
                                                                                <select class="form-control" name="category" class="select2me">
                                                                                    <option value="0">Seleccionar...</option>
                                                                                    <option value="ES">Nombre de trabajador</option>
                                                                                    <option value="ES">Nombre de trabajador</option>
                                                                                    <option value="ES">Nombre de trabajador</option>
                                                                                    <option value="ES">Nombre de trabajador</option>
                                                                                    <option value="ES">Nombre de trabajador</option>
                                                                                    <option value="ES">Nombre de trabajador</option>
                                                                                </select>
                                                                            </td>
                                                                            <td>
                                                                                <select class="form-control" name="category" class="select2me">
                                                                                    <option value="0">Seleccionar...</option>
                                                                                    <option value="ES">Nombre de trabajador</option>
                                                                                    <option value="ES">Nombre de trabajador</option>
                                                                                    <option value="ES">Nombre de trabajador</option>
                                                                                    <option value="ES">Nombre de trabajador</option>
                                                                                    <option value="ES">Nombre de trabajador</option>
                                                                                    <option value="ES">Nombre de trabajador</option>
                                                                                </select>
                                                                            </td>
                                                                            <td><input type="text" class="form-control" placeholder="Descripción" size="105" type="text"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                						</div> <!-- END TABLE PEDIDOS A REALIZAR-->
                                                
												
                                             <!--/FINNNNNNNNNNNN--> 
                                             
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