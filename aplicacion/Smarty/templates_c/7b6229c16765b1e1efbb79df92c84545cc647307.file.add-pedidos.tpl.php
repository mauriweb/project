<?php /* Smarty version Smarty-3.1.12, created on 2014-04-30 13:34:57
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/add-pedidos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182310011852a8bf547e67c5-98306817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b6229c16765b1e1efbb79df92c84545cc647307' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/add-pedidos.tpl',
      1 => 1397238452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182310011852a8bf547e67c5-98306817',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52a8bf54837445_44037393',
  'variables' => 
  array (
    'idPed' => 0,
    'filasDeMas' => 0,
    'mensaje' => 0,
    'clientesHtml' => 0,
    'data' => 0,
    'empleadosHtml' => 0,
    'urgentes' => 0,
    'urgenten' => 0,
    'pedXtels' => 0,
    'pedXteln' => 0,
    'lists' => 0,
    'listn' => 0,
    'plans' => 0,
    'plann' => 0,
    'descEdit' => 0,
    'trabEdit' => 0,
    'fechaEdit' => 0,
    'filasDeMasEdit' => 0,
    'numEmp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a8bf54837445_44037393')) {function content_52a8bf54837445_44037393($_smarty_tpl) {?><!DOCTYPE html>
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
						Insertar pedidos <small> Acero estudio</small>
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
							Insertar pedidos
							
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
							<div class="caption">Insertar pedidos</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="add-pedidos" method="post" id="form_sample_1" class="form-horizontal form-bordered form-row-stripped">
                            <?php echo $_smarty_tpl->tpl_vars['idPed']->value;?>

                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['filasDeMas']->value;?>
" id="filasDeMas" name="filasDeMas">
								<div class="form-body">
                                <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

                                    <div class="form-group">
													<label  class="col-md-3 control-label">Número de pedido</label>
													<div class="col-md-1 codigo">
                                                    	<span class="control-labe">P14 - 0001 (se genera automaticamente, 14 cambia dependiendo del año) </span>
													</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Cliente</label>
										<div class="col-md-4">
											<select class="form-control" name="frm-idCliente" id="frm-idCliente" class="select2me">
                                            	<option value="">Selecciona</option>
                                              <?php echo $_smarty_tpl->tpl_vars['clientesHtml']->value;?>

											</select>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Código del proyecto</label>
										<div class="col-md-4">
											<select class="form-control" name="frm-idProyecto" id="frm-idProyecto" class="select2me">
                                            	<option value="">Selecciona</option>
                                                
											</select>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Encargado por</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="frm-encargadoPor" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['encargadoPor'];?>
" placeholder="Nombre">
													</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Departamento</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="frm-departamento" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['departamento'];?>
" placeholder="Nombre">
													</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Responsable del trabajo</label>
										<div class="col-md-4">
											<select class="form-control" name="frm-idEmpleadoResp" class="select2me">
                                            	<option value="">Selecciona</option>
                                                <?php echo $_smarty_tpl->tpl_vars['empleadosHtml']->value;?>

											</select>
										</div>
									</div>
                                    <div class="form-group">
										<label  class="col-md-3 control-label">Urgente</label>
										<div class="col-md-9">
											<div class="checkbox-list">
												<label class="checkbox-inline">
												<input type="radio"  name="frm-urgente" <?php echo $_smarty_tpl->tpl_vars['urgentes']->value;?>
 value="s"> Si
												</label>
												<label class="checkbox-inline">
												<input type="radio"  name="frm-urgente" <?php echo $_smarty_tpl->tpl_vars['urgenten']->value;?>
 value="n"> No
												</label> 
											</div>
										</div>
									</div>
                                    <div class="form-group">
										<label  class="col-md-3 control-label">Pedido telefónicamente</label>
										<div class="col-md-9">
											<div class="checkbox-list">
												<label class="checkbox-inline">
												<input type="radio" id="" name="frm-pedidoPorTel" <?php echo $_smarty_tpl->tpl_vars['pedXtels']->value;?>
 value="s"> Si
												</label>
												<label class="checkbox-inline">
												<input type="radio" id="" name="frm-pedidoPorTel" <?php echo $_smarty_tpl->tpl_vars['pedXteln']->value;?>
 value="n"> No
												</label> 
											</div>
										</div>
									</div>
                                    <div class="form-group">
										<label  class="col-md-3 control-label">Listado de documentos</label>
										<div class="col-md-9">
											<div class="checkbox-list">
												<label class="checkbox-inline">
												<input type="radio" id="" name="frm-listadoDocumentos" <?php echo $_smarty_tpl->tpl_vars['lists']->value;?>
 value="s"> Si
												</label>
												<label class="checkbox-inline">
												<input type="radio" id="" name="frm-listadoDocumentos" <?php echo $_smarty_tpl->tpl_vars['listn']->value;?>
 value="n"> No
												</label> 
											</div>
										</div>
									</div>
                                    <div class="form-group">
										<label  class="col-md-3 control-label">Planificado</label>
										<div class="col-md-9">
											<div class="checkbox-list">
												<label class="checkbox-inline">
												<input type="radio"  name="frm-planificado" <?php echo $_smarty_tpl->tpl_vars['plans']->value;?>
 value="s"> Si
												</label>
												<label class="checkbox-inline">
												<input type="radio"  name="frm-planificado" <?php echo $_smarty_tpl->tpl_vars['plann']->value;?>
 value="n"> No
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
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody id="append">
                                            <tr id="aClonar">
                                            	<td class="orden">1</td>
                                                <td><input class="form-control" placeholder="Descripción" name="det-descripcion-1" id="det-descripcion-1" size="105" type="text"></td>
                                                <td>
                                                	<select class="form-control" name="det-idEmpleado-1" id="det-idEmpleado-1" class="select2me">
                                                        <option value="">Seleccionar...</option>
                                                        <?php echo $_smarty_tpl->tpl_vars['empleadosHtml']->value;?>

                                                	</select>
                                                </td>
                                                <td><input class="form-control date-picker" name="det-fecha-1" id="det-fecha-1" placeholder="Fecha" size="5" type="text" value="" /></td>
                                                 <td class="boton"><button type="button" id="uno-mas" class="btn green">+</button>
                                                 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- END TABLE PEDIDOS A REALIZAR-->         
                                    
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" name="enviar" class="btn red">Enviar</button>
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
			   
			   

			  var aClonar;
			  var desc=Array();
			  var prevButton=Array();
  			  function addClon(pos){ 
				 jQuery('#filasDeMas').val(pos-1);
			     aClonar.removeAttr('id');
				 aClonar.find('input').eq(0).attr('name','det-descripcion-'+pos).attr('id','det-descripcion-'+pos).val('');
				 aClonar.find('select').eq(0).attr('name','det-idEmpleado-'+pos).attr('id','det-idEmpleado-'+pos).val('');
				 aClonar.find('input').eq(1).datepicker({ rtl: App.isRTL(),autoclose: true })
				 .attr('name','det-fecha-'+pos).attr('id','det-fecha-'+pos).val('');
				 aClonar.find('.orden').text(pos);
				 if(prevButton[pos-1])prevButton[pos-1].css('display','none');
				 var boton = $('<button/>',
					{
						text: '-',
						class: 'btn red',
						type: "button",
						click: function () { 
						if(prevButton[pos-1])prevButton[pos-1].css('display','inherit');
						jQuery(this).parent().parent().remove();
						numFilas=parseInt(jQuery('#filasDeMas').val());
						jQuery('#filasDeMas').val(numFilas-1); return false; }
					});
				 prevButton[pos]=boton;
				 aClonar.find('.boton').html(boton);
				// jQuery('#aClonar').after(aClonar);
				jQuery("#append").append(aClonar);
			   }
			   var filasDeMas=parseInt(jQuery('#filasDeMas').val());
			   <?php echo $_smarty_tpl->tpl_vars['descEdit']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['trabEdit']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['fechaEdit']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['filasDeMasEdit']->value;?>

			   
			   var numFilas=1+filasDeMas;
			   var numEmp = <?php echo $_smarty_tpl->tpl_vars['numEmp']->value;?>
;
			   jQuery('#uno-mas').click(function(){
				 if(numFilas>=numEmp){
					 alert('Se alcanzo el limite de empleados creados!');
					 return;				
				 }
				 aClonar=jQuery('#aClonar').clone();
				 numFilas++;console.log(numFilas);
				 addClon(numFilas);
			   });
			   
			   
			   if(filasDeMas>0){
			     for( var i=0; i<filasDeMas; i++ ){
				   aClonar=jQuery('#aClonar').clone();
				   addClon(2+i);
				 }
			   }
			   var n=1;
			  
			   for(var i in desc){ 
			     jQuery('#det-descripcion-'+n).val(desc[i]);
				 jQuery('#det-idEmpleado-'+n).val(trab[i]);
				 jQuery('#det-fecha-'+n).val(fecha[i]);

				 
				 n++;
			   }
			   
	    $('#frm-idCliente').change(function(){
			     $.post('aplicacion/ajax/ajax.php', { idCli : $(this).val() }, function(data) {
				  $('#frm-idProyecto').html(data);
				});
			   });

			   
 
			   
			   
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