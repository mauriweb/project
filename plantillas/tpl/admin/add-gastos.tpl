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
    {literal}
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
    {/literal}
    	
</head>

<body class="page-header-fixed">
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
						Insertar justificantes de gastos <small> Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							
							<a href="gastos" class="btn red dropdown-toggle"><span style="color:#FFF;">Ver justificantes de gastos</span></a>
							
						</li>
						<li>
							<i class="inicio"></i>
							<a href="inicio">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Insertar justificantes de gastos
							
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
										<div class="caption">Insertar justificantes de gastos</div>
										<div class="tools">
											<a href="javascript:;" class="collapse"></a>
                                        </div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="add-gastos" method="post" id="form_sample_1" class="form-horizontal form-bordered form-row-stripped">{$idGas} <input type="hidden" value="{$filasDeMas}" id="filasDeMas" name="filasDeMas">
											<div class="form-body">
												{$mensaje}
														<div class="form-group">
															<label class="control-label col-md-3">Nº Pedido</label>
															<div class="col-md-7">
																<select class="form-control" name="frm-idPedido">
																	{$pedidosHtml}
																</select>
																<span class="help-block">Selecciona el número de pedido, se vinculara, cliente, proyecto, persona encargada y quien lo realiza.</span>
															</div>
														</div>
                                                        
														<div class="form-group">
															<label class="control-label col-md-3">Trabajador que los da de alta</label>
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
                                                                            <th>De</th>
                                                                            <th>A</th>
                                                                            <th colspan="3">Locomoción</th>
                                                                            <th>Hotel</th>
                                                                            <th>Comidas</th>
                                                                            <th colspan="2">Otros gastos</th>
                                                                            <th>TOTAL</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="append">
                                                                        <tr id="aClonar">
                                                                            <td><input class="form-control date-picker det-fecha" id="det-fecha-1" name="det-fecha-1"  placeholder="Fecha" size="8" type="text" /></td>
                                                                            <td><input type="text" class="form-control det-de" name="det-DE-1" id="det-DE-1" placeholder="De" size="15" type="text"></td>
                                                                            <td><input type="text" class="form-control det-a" name="det-A-1" id="det-A-1" placeholder="A" size="15" type="text"></td>
                                                                            
                                                                            <td><input type="text" class="form-control det-loc1" name="det-locomocionUno-1" id="det-locomocionUno-1" placeholder="avión / ff.cc." size="15" type="text"></td>
                                                                            <td><input type="text" class="form-control det-loc2" name="det-locomocionDos-1" id="det-locomocionDos-1" placeholder="Autobús / taxi" size="15" type="text"></td>
                                                                            <td><input type="text" class="form-control det-km" placeholder="Km." name="det-km-1" id="det-km-1" size="15" type="text"></td>
                                                                            
                                                                            <td><input type="text" class="form-control det-hotel" name="det-hotel-1" id="det-hotel-1" placeholder="Hotel" size="15" type="text"></td>
                                                                            <td><input type="text" class="form-control det-comidas" name="det-comidas-1" id="det-comidas-1" placeholder="Comidas" size="15" type="text"></td>
                                                                            
                                                                            <td><input type="text" class="form-control det-detalle" name="det-otrosGastosDetalle-1" id="det-otrosGastosDetalle-1" placeholder="detalle" size="15" type="text"></td>
                                                                            <td><input type="text" name="det-otrosGastosEuros-1" id="det-otrosGastosEuros-1" class="form-control det-euros" placeholder="€" size="15" type="text"></td>
                                                                            <td><input type="text" name="det-total-1" id="det-total-1"  class="form-control det-total" placeholder="TOTAL" size="15" type="text"></td><td class="boton"><button style="margin-right:0;" type="button" id="uno-mas" class="btn green">+</button></td>
                                                                            
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                				</div> <!-- END TABLE PEDIDOS A REALIZAR-->    
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
        {include file="admin/pie.tpl"}		
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
				 aClonar.find('.det-fecha').datepicker({ rtl: App.isRTL(),autoclose: true })
				 .attr('name','det-fecha-'+pos).attr('id','det-fecha-'+pos).val('');
				 aClonar.find('.det-hotel').attr('name','det-hotel-'+pos).attr('id','det-hotel-'+pos).val('');
				 aClonar.find('.det-detalle').attr('name','det-otrosGastosDetalle-'+pos).attr('id','det-otrosGastosDetalle-'+pos).val('');
				 aClonar.find('.det-euros').attr('name','det-otrosGastosEuros-'+pos).attr('id','det-otrosGastosEuros-'+pos).val('');
				 aClonar.find('.det-loc1').attr('name','det-locomocionUno-'+pos).attr('id','det-locomocionUno-'+pos).val('');
				 aClonar.find('.det-loc2').attr('name','det-locomocionDos-'+pos).attr('id','det-locomocionDos-'+pos).val('');
				 aClonar.find('.det-de').attr('name','det-DE-'+pos).attr('id','det-DE-'+pos).val('');
				 aClonar.find('.det-a').attr('name','det-A-'+pos).attr('id','det-A-'+pos).val('');
				 aClonar.find('.det-km').attr('name','det-km-'+pos).attr('id','det-km-'+pos).val('');
				 aClonar.find('.det-comidas').attr('name','det-comidas-'+pos).attr('id','det-comidas-'+pos).val('');
				 aClonar.find('.det-total').attr('name','det-total-'+pos).attr('id','det-total-'+pos).val('');
				 aClonar.find('.revisadoPor').attr('name','det-idRevisadoPor-'+pos).attr('id','det-idRevisadoPor-'+pos).val('');
				 aClonar.find('.pedidoPor').attr('name','det-idPedidoPor-'+pos).attr('id','det-idPedidoPor-'+pos).val('');
				 aClonar.find('.descripcion').attr('name','det-descripcion-'+pos).attr('id','det-descripcion-'+pos).val('');
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
			   var det_de=Array();
			   {$det_de}
			   {$det_a}
			   {$fexa}
			   {$locUno}
			   {$locDos}
			   {$km}
			   {$hotel}
			   {$comidas}
			   {$otrosGasDet}
			   {$otrosGastEu}
			   {$total}
			   var numFilas=1+filasDeMas;
			   jQuery('#uno-mas').click(function(){
				 aClonar=jQuery('#aClonar').clone();
				 numFilas++;
				 addClon(numFilas);
			   });
			   if(filasDeMas>0){
			     for( var i=0; i<filasDeMas; i++ ){
				   aClonar=jQuery('#aClonar').clone();
				   addClon(2+i);
				 }
			   }
			   var n=1;
			   for(var i in det_de){ 
			     jQuery('#det-DE-'+n).val(det_de[i]);
				 jQuery('#det-A-'+n).val(det_a[i]);
				 jQuery('#det-fecha-'+n).val(fecha[i]);
				 jQuery('#det-locomocionDos-'+n).val(locDos[i]);
				 jQuery('#det-locomocionUno-'+n).val(locUno[i]);
                 jQuery('#det-km-'+n).val(km[i]);
				 jQuery('#det-hotel-'+n).val(hotel[i]);
				 jQuery('#det-comidas-'+n).val(comidas[i]);
				 jQuery('#det-otrosGastosDetalle-'+n).val(otrosGasDet[i]);
				 jQuery('#det-otrosGastosEuros-'+n).val(otrosGastEu[i]);
				 jQuery('#det-total-'+n).val(total[i]);
				 n++;
			   }
			   
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
