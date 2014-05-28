<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        {include file="admin/head.tpl"}
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
    {literal}
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
    {/literal}
    	
</head>

<body class="page-header-fixed ">
        <!-- =======================================
        
        MENU
        
        ======================================= -->
        {include file="admin/menu.tpl"}		
        <!-- =======================================
        
        FIN MENU
        
        ======================================= -->
        <div class="page-container">
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
               <!-- ======================================= MENU LATERAL ======================================= -->
            {include file="admin/menuLateral.tpl"}		
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
					<ul class="page-breadcrumb breadcrumb" style="background-color:#E0ECF8;">
						<li>
							<i class="inicio"></i>
							Informes avanzados <span style="font-size:16px; font-weight:bolder; ">PARTES DE MATERIAL</span>
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
							<div class="caption">Partes de material, informes avanzados</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="javascript:;" class="reload"></a>
							</div>
						</div>
                       
						<div class="portlet-body">
                        <form method="post" action="informes-material" id="filtro" >
							{$cliente}
							<div class="table-toolbar">
                            {$mensaje}
                            <div class="row">
                            	<div class="col-md-12">
                                        <div class="col-md-2">
                                                    <select class="form-control" name="idPedido" class="select2me">
                                                        <option value="">Nºpedido</option>
                                                        {$pedidosHtml}
                                                    </select>
                                        </div>
                                        <div class="col-md-2">
                                                    <select class="form-control" name="idCliente" class="select2me">
                                                        <option value="">Cliente</option>
                                                        {$clientesHtml}
                                                    </select>
                                        </div>
                                        <div class="col-md-2">
                                                    <select class="form-control" name="idProyecto" class="select2me">
                                                        <option value="">Proyecto</option>
                                                        {$proyectosHtml}
                                                    </select>
                                        </div>
                                        <div class="col-md-2">
                                                    <select class="form-control" name="idEmpleado" class="select2me">
                                                        <option value="">Trabajador</option>
                                                        {$empleados}
                                                    </select>
                                        </div>
                                        <div class="col-md-2">
                                        <input class="form-control date-picker" name="fechaDe" placeholder="Fecha de" size="5" type="text" value="{$fechaDe}" />
                                        </div>
                                        <div class="col-md-2">
                                                  <button class="btn dropdown-toggle red" id="actualizar" data-toggle="dropdown"><i class="fa fa-refresh"></i> Actualizar</button>  
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
                                                        <input type="radio" name="firmado" {$firmadoSi} value="si" > Si
                                                        </label>
                                                        <label class="radio-inline">
                                                        <input type="radio" name="firmado" {$firmadoNo} value="no" > No
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
                                                        <input type="radio" name="visado" {$visadoSi} value="si" > Si
                                                        </label>
                                                        <label class="radio-inline">
                                                        <input type="radio" name="visado" {$visadoNo} value="no" > No
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
                                                        <input type="radio" name="facturado" {$factSi} value="si" > Si
                                                        </label>
                                                        <label class="radio-inline">
                                                        <input type="radio" name="facturado" {$factNo} value="no" > No
                                                        </label>
                                                    </div>
												</div>
											</div>      
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-2 pad20">
                                        	<input class="form-control date-picker" placeholder="Fecha a" name="fechaA" size="5" type="text" value="{$fechaA}" />
                                        </div>
                                        <div class="col-md-2 pad20">
                                        	
                                        </div>
                                     </div>
                                     
                                     <div style="clear:both;"></div>
                                     
                                     <div class="col-md-12" style="margin-top:10px;">
                                        <div class="col-md-2">
										<input type="text" class="form-control" name="num-factura" value="{$num-factura}" placeholder="Nº Factura">
                                        </div>
                                        <div class="col-md-4">
										<button  class="btn dropdown-toggle blue" id="aplicar" data-toggle="dropdown"><i class="fa fa-share"></i> Aplicar</button>
                                       <button  class="btn dropdown-toggle yellow" id="calcular" data-toggle="dropdown"><i class="fa fa-share"></i> Calcular</button>
                                        <button style="margin-left:5px;" name="excel" id="excel"  class="btn dropdown-toggle green" data-toggle="dropdown"><i class="fa fa-th"></i> Guardar Excel</button>
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
                                       <th style="display:none"></th>
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
									{$partes}
                                    
                                   
									
								</tbody>
							</table>
                            </form>
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
        {include file="admin/pie.tpl"}		
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
            var tabla='partes_material';
            jQuery(document).ready(function() {       
               App.init();
               TableManaged.init();
			   FormComponents.init();
			   
			   jQuery('#actualizar, #excel, #aplicar, #calcular').click(function(){
				   jQuery('#excell, #aplicarr, #calcularr').remove();												   
				   if(jQuery(this).attr('id')=='excel'){
				       jQuery('#filtro').append('<input type="hidden" name="excel" id="excell">');
					   jQuery('#filtro').submit();		
				   }else if(jQuery(this).attr('id')=='aplicar'){
				       jQuery('#filtro').append('<input type="hidden" name="aplicar" id="aplicarr">');
					   jQuery('#filtro').submit();		
				   }else if(jQuery(this).attr('id')=='calcular'){
				       if(!$('#clienteFiltro').val()){
						   alert('Para poder sacar el calculo primero debes filtrar por cliente!');
					   }else{
					   	   jQuery('#filtro').append('<input type="hidden" name="calcular" id="calcularr">')
					   	   .attr('action','calcular');
					   	   jQuery('#filtro').submit();	
					   }		
				   }else{
				       jQuery('#filtro').submit();	
				   } 							
			   });
			   
			   jQuery('.firmar, .visar').click(function(){
			       var campo=$(this).hasClass('visar')?'visado':'firmado';
				   var accion=$(this).attr('checked')?'s':'n';
				   $.post( "aplicacion/ajax/ajax.php", { action: accion, id: $(this).val(), field: campo, table:tabla }, function(data){
				       
				   });
			   });
            });
        </script>
</body>
</html>
