<?php /* Smarty version Smarty-3.1.12, created on 2014-01-26 22:15:03
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracionAcero/informes-gastos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145355010852e3aca96658a1-12634783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '340d9908cd4336849a9c4f7fb4e65f04000618be' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracionAcero/informes-gastos.tpl',
      1 => 1390653354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145355010852e3aca96658a1-12634783',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52e3aca96bb730_95672385',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e3aca96bb730_95672385')) {function content_52e3aca96bb730_95672385($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("administracionAcero/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <!-- =======================================
        
        FIN HEAD
        
        ======================================= -->	
        
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/select2/select2_metro.css" />
	<link rel="stylesheet" href="plantillas/assets/plugins/data-tables/DT_bootstrap.css" />
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
	<!-- END PAGE LEVEL STYLES -->
    
    <style type="text/css">
		th, tr{
			text-align:center;
		}
		tr input{
			text-align:center
		}
		div.col-md-2.texto{
			padding:0px;
			margin:0px;
			font-size:12px;	
		}
		.col-md-12.control-label{
			padding-top:0px;
			margin-top:0px;
			padding-bottom:0px;
			margin-bottom:0px;
			font-weight:900;
		}
		.col-md-2.pad20{
			padding-top:7px;	
		}
	</style>
    
    	
</head>

<body class="page-header-fixed ">
        <!-- =======================================
        
        MENU
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("administracionAcero/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <!-- =======================================
        
        FIN MENU
        
        ======================================= -->
        <div class="page-container">
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
               <!-- ======================================= MENU LATERAL ======================================= -->
            <?php echo $_smarty_tpl->getSubTemplate ("administracionAcero/menuLateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
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
						Informes avanzados <small> Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb" style="background-color:#F5ECCE;">
						<li>
							<i class="inicio"></i>
							Informes avanzados <span style="font-size:16px; font-weight:bolder; ">PARTES DE GASTOS</span>
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">Partes de gastos, informes avanzados</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="javascript:;" class="reload"></a>
							</div>
						</div>
                       
						<div class="portlet-body">
							<div class="table-toolbar">
                            <div class="row">
                            	<div class="col-md-12">
                                        <div class="col-md-2">
                                                    <select class="form-control" name="category" class="select2me">
                                                        <option value="0">Nºpedido</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                    </select>
                                        </div>
                                        <div class="col-md-2">
                                                    <select class="form-control" name="category" class="select2me">
                                                        <option value="0">Cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                    </select>
                                        </div>
                                        <div class="col-md-2">
                                                    <select class="form-control" name="category" class="select2me">
                                                        <option value="0">Proyecto</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                    </select>
                                        </div>
                                        <div class="col-md-2">
                                                    <select class="form-control" name="category" class="select2me">
                                                        <option value="0">Trabajador</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                        <option value="ES">Nombre de cliente</option>
                                                    </select>
                                        </div>
                                        <div class="col-md-2">
                                        <input class="form-control date-picker" placeholder="Fecha de" size="5" type="text" value="" />
                                        </div>
                                        <div class="col-md-2">
                                                  <button class="btn dropdown-toggle red" data-toggle="dropdown"><i class="fa fa-refresh"></i> Actualizar</button>  
                                        </div>
                                        
                                        
                                     	</div>
                                      	
                                        
                                        <div style="clear:both;"></div>
                                        
                                        
                                     <div class="col-md-12" style="margin-top:5px;">
                                        
                                        <div class="col-md-2 texto">
                                        	<div class="form-group">
												<label  class="col-md-12 control-label">Firmado</label>
												<div class="col-md-12">
                                                    <div class="radio-list">
                                                        <label class="radio-inline">
                                                        <input type="radio" name="optionsRadios" id="optionsRadios25" value="option1" > Si
                                                        </label>
                                                        <label class="radio-inline">
                                                        <input type="radio" name="optionsRadios" id="optionsRadios25" value="option1" > No
                                                        </label>
                                                    </div>
												</div>
											</div>      
                                        </div>
                                        <div class="col-md-2 texto">
                                        	<div class="form-group">
												<label  class="col-md-12 control-label">Visado</label>
												<div class="col-md-12">
                                                    <div class="radio-list">
                                                        <label class="radio-inline">
                                                        <input type="radio" name="optionsRadios" id="optionsRadios25" value="option1" > Si
                                                        </label>
                                                        <label class="radio-inline">
                                                        <input type="radio" name="optionsRadios" id="optionsRadios25" value="option1" > No
                                                        </label>
                                                    </div>
												</div>
											</div>      
                                        </div>
                                        <div class="col-md-2 texto">
                                        	<div class="form-group">
												<label  class="col-md-12 control-label">Facturado</label>
												<div class="col-md-12">
                                                    <div class="radio-list">
                                                        <label class="radio-inline">
                                                        <input type="radio" name="optionsRadios" id="optionsRadios25" value="option1" > Si
                                                        </label>
                                                        <label class="radio-inline">
                                                        <input type="radio" name="optionsRadios" id="optionsRadios25" value="option1" > No
                                                        </label>
                                                    </div>
												</div>
											</div>      
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-2 pad20">
                                        	<input class="form-control date-picker" placeholder="Fecha a" size="5" type="text" value="" />
                                        </div>
                                        <div class="col-md-2 pad20">
                                        	
                                        </div>
                                     </div>
                                     
                                     <div style="clear:both;"></div>
                                     
                                     <div class="col-md-12" style="margin-top:10px;">
                                        <div class="col-md-2">
										<input type="text" class="form-control" placeholder="Nº Factura">
                                        </div>
                                        <div class="col-md-4">
										<button  class="btn dropdown-toggle blue" data-toggle="dropdown"><i class="fa fa-share"></i> Aplicar</button>
                                        <a href="calcular-gastos-administracion" style="margin-left:5px;"  class="btn dropdown-toggle yellow"><i class="fa fa-pencil-square-o"></i> Calcular</a>
                                        <button style="margin-left:5px;"  class="btn dropdown-toggle green" data-toggle="dropdown"><i class="fa fa-th"></i> Guardar Excel</button>
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-2">
                                        	 
                                        </div>
                                        <div class="col-md-2">
                                        	   
                                        </div>
                                     </div>
                                     
                                </div>
                                <div style="clear:both;"></div>
							</div>
							<table class="table table-striped table-bordered table-hover" id="sample_5">
								<thead>
									<tr>
										<th class="table-checkbox"><input type="checkbox" class="group-checkable" data-set="#sample_5 .checkboxes" /></th>
										<th>Nº Pedido</th>
                                        <th>Nº Parte</th>
										<th>Cliente</th>	
										<th>Proyecto</th>
                                        <th>Trabajador</th>
                                        <th>Fecha</th>
                                        <th>Firma cliente</th>
                                        <th>Visado</th>
                                        <th>Nº Factura</th>
                                        <th>Ver</th>
										<th >Editar</th>
									</tr>
								</thead>
								<tbody>
									<tr class="odd gradeX">
										<td><input type="checkbox" class="checkboxes" value="1" /></td>
										<td>P14-23524</td>
                                        <td>1</td>
										<td >Typsa</td>
										<td >454654</td>
                                        <td >Pepe</td>
										<td >17/01/2014</td>
                                        <td ><input type="checkbox" class="checkboxes" value="si" /></td>
                                        <td ><input type="checkbox" class="checkboxes" value="si" /></td>
                                        <td ></td>
                                        <td><a href="ver-gastos-informe-administracion" class="btn default btn-xs blue"><i class="fa fa-external-link"></i> Ver </a></td>
                                        <td><a class="btn default btn-xs green" href="edit-pedidos-administracion"><i class="fa fa-edit"></i> Editar </a></td>
										
									</tr>
                                    <tr class="odd gradeX">
										<td><input type="checkbox" class="checkboxes" value="1" /></td>
										<td>P14-23524</td>
                                        <td>2</td>
										<td >Typsa</td>
										<td >454654</td>
                                        <td >Pepe</td>
										<td >17/01/2014</td>
                                        <td ><input type="checkbox" class="checkboxes" value="si" /></td>
                                        <td ><input type="checkbox" class="checkboxes" value="si" /></td>
                                        <td ></td>
                                        <td><a href="ver-gastos-informe-administracion" class="btn default btn-xs blue"><i class="fa fa-external-link"></i> Ver </a></td>
                                        <td><a class="btn default btn-xs green" href="edit-pedidos-administracion"><i class="fa fa-edit"></i> Editar </a></td>
										
									</tr>
                                    <tr class="odd gradeX">
										<td><input type="checkbox" class="checkboxes" value="1" /></td>
										<td>P14-23524</td>
                                        <td>3</td>
										<td >Typsa</td>
										<td >454654</td>
                                        <td >Pepe</td>
										<td >17/01/2014</td>
                                        <td ><input type="checkbox" class="checkboxes" value="si" /></td>
                                        <td ><input type="checkbox" class="checkboxes" value="si" /></td>
                                        <td ></td>
                                        <td><a href="ver-gastos-informe-administracion" class="btn default btn-xs blue"><i class="fa fa-external-link"></i> Ver </a></td>
                                        <td><a class="btn default btn-xs green" href="edit-pedidos-administracion"><i class="fa fa-edit"></i> Editar </a></td>
										
									</tr>
                                    <tr class="odd gradeX">
										<td><input type="checkbox" class="checkboxes" value="1" /></td>
										<td>P14-23524</td>
                                        <td>4</td>
										<td >Typsa</td>
										<td >454654</td>
                                        <td >Pepe</td>
										<td >17/01/2014</td>
                                        <td >Si</td>
                                        <td >Si</td>
                                        <td >23534</td>
                                        <td><a href="ver-gastos-informe-administracion" class="btn default btn-xs blue"><i class="fa fa-external-link"></i> Ver </a></td>
                                        <td><a class="btn default btn-xs green" href="edit-pedidos-administracion"><i class="fa fa-edit"></i> Editar </a></td>
										
									</tr>
                                    <tr class="odd gradeX">
										<td><input type="checkbox" class="checkboxes" value="1" /></td>
										<td>P14-23524</td>
                                        <td>1</td>
										<td >Typsa</td>
										<td >454654</td>
                                        <td >Pepe</td>
										<td >17/01/2014</td>
                                        <td ><input type="checkbox" class="checkboxes" value="si" /></td>
                                        <td ><input type="checkbox" class="checkboxes" value="si" /></td>
                                        <td ></td>
                                        <td><a href="ver-gastos-informe-administracion" class="btn default btn-xs blue"><i class="fa fa-external-link"></i> Ver </a></td>
                                        <td><a class="btn default btn-xs green" href="edit-pedidos-administracion"><i class="fa fa-edit"></i> Editar </a></td>
										
									</tr>
                                    
                                   
									
								</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
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
        <?php echo $_smarty_tpl->getSubTemplate ("administracionAcero/pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <!-- =======================================
        
        FIN PIE
        
        ======================================= -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
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
        
        
        
		<script type="text/javascript" src="plantillas/assets/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/data-tables/DT_bootstrap.js"></script>
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="plantillas/assets/scripts/form-components.js"></script> 
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="plantillas/assets/scripts/app.js"></script>
        <script src="plantillas/assets/scripts/table-managed.js"></script>     
        <script>
            jQuery(document).ready(function() {       
               App.init();
               TableManaged.init();
			   FormComponents.init();
            });
        </script>
</body>
</html>
<?php }} ?>