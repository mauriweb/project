<?php /* Smarty version Smarty-3.1.12, created on 2014-05-27 16:04:06
         compiled from "C:\xampp\htdocs\acero\plantillas\tpl\trabajador\ausencias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1198537245e60021d0-93251984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '668dfd1d1b4c16a1453ab2333198d63618293f6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acero\\plantillas\\tpl\\trabajador\\ausencias.tpl',
      1 => 1401199442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1198537245e60021d0-93251984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_537245e6145412_46446361',
  'variables' => 
  array (
    'idGas' => 0,
    'filasDeMas' => 0,
    'mensaje' => 0,
    'diasPedidos' => 0,
    'horasDeMasRes' => 0,
    'horasDeMenosRes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537245e6145412_46446361')) {function content_537245e6145412_46446361($_smarty_tpl) {?><!DOCTYPE html>
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
						Ausencias y Vacaciones <small> Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							
							<a href="gastos-trabajador" class="btn red dropdown-toggle"><span style="color:#FFF;">Ver justificantes de gastos</span></a>
							
						</li>
						<li>
							<i class="inicio"></i>
							<a href="inicio-trabajador">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Ausencias y Vacaciones
							
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
										<div class="caption">Ausencias y Vacaciones</div>
										<div class="tools">
											<a href="javascript:;" class="collapse"></a>
                                        </div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="ausencias" method="post" id="form_sample_1" class="form-horizontal form-bordered form-row-stripped"><?php echo $_smarty_tpl->tpl_vars['idGas']->value;?>
 <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['filasDeMas']->value;?>
" id="filasDeMas" name="filasDeMas">
											<div class="form-body">
												<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

                                                <div class="note note-info">
                                                	<h4 class="block">Información!</h4>
                                                	<p> - Para seleccionar un dia, el rango tiene que ser el mismo día.<br>
                                                    	- Si se quiere pedir unas horas un dia en concreto, seleccionar dia + el horario.<br>
                                                        - Para seleccionar dia completo no marquen nada en el horario. </p>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['diasPedidos']->value!=''){?>
                                                <div>
                                                Dias Pedidos (Estos datos pueden haver sido modificados por en Administrador, Consulta El calendario por seguridad.)<br>
                                                <!--<div>Dia 3/5/2014 de 10:00 a 14:00 <span style="color:red">Anulado</span></div>
                                                <div>Dia 3/5/2014 de 10:00 a 14:00 <span style="color:green">Aceptado</span></div>-->
                                                <?php echo $_smarty_tpl->tpl_vars['diasPedidos']->value;?>

                                                </div>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['horasDeMasRes']->value){?>
                                                <div>
                                                Horas Acumuladas<br>
                                                <?php echo $_smarty_tpl->tpl_vars['horasDeMasRes']->value;?>

                                                </div>
                                                <?php }elseif($_smarty_tpl->tpl_vars['horasDeMenosRes']->value){?>
                                               
                                                <div>
                                                Horas A Deber<br>
                                                <?php echo $_smarty_tpl->tpl_vars['horasDeMenosRes']->value;?>

                                                </div>
                                                <?php }?>
														<div class="form-group">
															<label class="control-label col-md-3">Categoria</label>
															<div class="col-md-7">
																<select class="form-control" name="categoria">
																	<option value="0">Seleccionar</option>
                                                                    <option value="4">Vacaciones</option>
                                                                    <option value="6">Dias de libre disposición</option>
                                                                    <option value="5">Dia libre</option>
                                                                    <option value="3">Médico</option>
																</select>
																<span class="help-block">Selecciona el tipo de ausencia o vacaciones.</span>
															</div>
														</div>
												       <div class="form-group">
                                                            <label class="control-label col-md-3">Rango de fecha</label>
                                                            <div class="col-md-4">
                                                                <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="dd/mm/yyyy">
                                                                    <input type="text" class="form-control" name="fechaDe">
                                                                    <span class="input-group-addon">
                                                                         a
                                                                    </span>
                                                                    <input type="text" class="form-control" name="fechaA">
                                                                </div>
                                                                <!-- /input-group -->
                                                                <span class="help-block">
                                                                     Seleccionar rango de fecha
                                                                </span>
                                                            </div>
                                                        </div>
														
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Hora</label>
                                                            <div class="col-md-3">
                                                                <div class="input-group">
                                                                    <input type="text" name="horaDe" class="form-control timepicker timepicker-24">
                                                                    
                                                                    <span class="input-group-btn">
                                                                        <button class="btn default" type="button"><i class="fa fa-clock-o"></i></button>
                                                                    </span>
                                                                </div> 
                                                                <span class="help-block">
                                                                     Seleccionar hora de inicio
                                                                </span>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="input-group">
                                                                    <input type="text" name="horaA" class="form-control timepicker timepicker-24">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn default" type="button"><i class="fa fa-clock-o"></i></button>
                                                                    </span>
                                                                   
                                                                </div> 
                                                                <span class="help-block">
                                                                     Seleccionar hora de fin
                                                                </span>
                                                            </div>
                                                        </div>
														 <!-- END TABLE PEDIDOS A REALIZAR-->    
												</div>
                                                    <div class="form-actions fluid">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button name="enviar" type="submit" class="btn red">Enviar</button>
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