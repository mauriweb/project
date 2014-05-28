<?php /* Smarty version Smarty-3.1.12, created on 2014-04-30 17:16:06
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/alta-parte-de-trabajo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169760745352e5929d7bef33-32649463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d29ec788418ed82388d7a6dde4a1bbc1ecdf972' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/alta-parte-de-trabajo.tpl',
      1 => 1397070443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169760745352e5929d7bef33-32649463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52e5929d8192b5_86961177',
  'variables' => 
  array (
    'idTra' => 0,
    'filasDeMas' => 0,
    'mensaje' => 0,
    'pedidosHtml' => 0,
    'codigosHtml' => 0,
    'empleadosHtml' => 0,
    'codEdit' => 0,
    'parteTrEdit' => 0,
    'fechaEdit' => 0,
    'horas' => 0,
    'concepto' => 0,
    'dln' => 0,
    'dsny' => 0,
    'tpg' => 0,
    'inf' => 0,
    'ed' => 0,
    'pln' => 0,
    'chq' => 0,
    'crr' => 0,
    'frm' => 0,
    'vrs' => 0,
    'pedidoPor' => 0,
    'revisadoPor' => 0,
    'descripcion' => 0,
    'lugar' => 0,
    'numCodig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e5929d8192b5_86961177')) {function content_52e5929d8192b5_86961177($_smarty_tpl) {?><!DOCTYPE html>
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
						Insertar partes de trabajo <small> Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							
							<a href="partes-de-trabajo-trabajador" class="btn red dropdown-toggle"><span style="color:#FFF;">Ver partes de trabajo</span></a>
							
						</li>
						<li>
							<i class="inicio"></i>
							<a href="inicio-trabajador">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Insertar partes de trabajo
							
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
										<div class="caption">Insertar parte de trabajo</div>
										<div class="tools">
											<a href="javascript:;" class="collapse"></a>
                                        </div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="alta-parte-de-trabajo-trabajador" method="post" id="form_sample_1" class="form-horizontal form-bordered form-row-stripped">
                                        <?php echo $_smarty_tpl->tpl_vars['idTra']->value;?>

                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['filasDeMas']->value;?>
" id="filasDeMas" name="filasDeMas">
												<div class="form-body">
												<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

														<div class="form-group">
															<label class="control-label col-md-3">Nº Pedido</label>
															<div class="col-md-7">
																<select class="form-control" name="frm-idPedido">
																	<?php echo $_smarty_tpl->tpl_vars['pedidosHtml']->value;?>

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
                                                                            <th>Lugar</th>
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
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="append">
                                                                        <tr id="aClonar">
                                                                            <td><input class="form-control date-picker fecha" name="det-fecha-1" id="det-fecha-1" placeholder="Fecha" size="25" type="text" value="" /></td>
                                                                            <td>
                                                                                <select class="form-control horas" name="det-horas-1" id="det-horas-1"  style="width:80px">
                                                                                    <option value="0">0</option>
                                                                                    <option value="0.5">0.5</option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="1.5">1.5</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="2.5">2.5</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="3.5">3.5</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="4.5">4.5</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="5.5">5.5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="6.5">6.5</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="7.5">7.5</option>
                                                                                    <option value="8">8</option>
                                                                                    <option value="8.5">8.5</option>
                                                                                    <option value="9">9</option>
                                                                                    <option value="9.5">9.5</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="10.5">10.5</option>
                                                                                    <option value="11">11</option>
                                                                                    <option value="11.5">11.5</option>
                                                                                    <option value="12">12</option>
                                                                                    <option value="12.5">12.5</option>
                                                                                    <option value="13">13</option>
                                                                                    <option value="13.5">13.5</option>
                                                                                    <option value="14">14</option>
                                                                                    <option value="14.5">14.5</option>
                                                                                    <option value="15">15</option>
                                                                                    <option value="15.5">15.5</option>
                                                                                    <option value="16">16</option>
                                                                                    <option value="16.5">16.5</option>
                                                                                    <option value="17">17</option>
                                                                                    <option value="17.5">17.5</option>
                                                                                    <option value="18">18</option>
                                                                                    <option value="18.5">18.5</option>
                                                                                    <option value="19">19</option>
                                                                                    <option value="19.5">19.5</option>
                                                                                    <option value="20">20</option>
                                                                                    <option value="20.5">20.5</option>
                                                                                    <option value="21">21</option>
                                                                                    <option value="21.5">21.5</option>
                                                                                    <option value="22">22</option>
                                                                                    <option value="22.5">22.5</option>
                                                                                    <option value="23">23</option>
                                                                                    <option value="23.5">23.5</option>
                                                                                    <option value="24">24</option>
                                                                                    <option value="24.5">24.5</option>
                                                                                </select>
                                                                            </td>
                                                                            <td>
                                                                            <label>IN:</label><input class="lugarIn" type="radio" name="det-lugar-1" id="det-lugar-in-1" checked value="in"><br>

                                                                            <label>OUT:</label><input class="lugarOut" type="radio" name="det-lugar-1" id="det-lugar-out-1" value="out">   
                                                                            </td>
                                                                            <td>
                                                                                <select class="form-control codigo" name="det-codigo-1" id="det-codigo-1"  style="width:90px">
                                                                                    <option value="">Seleccionar...</option>
                                                                               <?php echo $_smarty_tpl->tpl_vars['codigosHtml']->value;?>

                                                                                </select>
                                                                            </td>
                                                                            <td><input class="form-control concepto" name="det-concepto-1" id="det-concepto-1" placeholder="Concepto" size="15" type="text"></td>
                                                                            <td class="peqInput"><input class="dln" id="det-dln-1" name="det-DLN-1"  type="checkbox"  value="X"></td>
                                                                            <td class="peqInput"><input class="dsny" name="det-DSNY-1" id="det-dsny-1"  type="checkbox"  value="X"></td>
                                                                            <td class="peqInput"><input class="tpg" name="det-TPG-1" id="det-tpg-1"  type="checkbox"  value="X"></td>
                                                                            <td class="peqInput"><input class="inf" name="det-INF-1" id="det-inf-1"  type="checkbox"  value="X"></td>
                                                                            <td class="peqInput"><input class="eden" name="det-EDEN-1" id="det-eden-1"  type="checkbox"  value="X"></td>
                                                                            <td class="peqInput"><input class="pln" name="det-PLN-1" id="det-pln-1"  type="checkbox"  value="X"></td>
                                                                            <td class="peqInput"><input class="chq" name="det-CHQ-1" id="det-chq-1"  type="checkbox"  value="X"></td>
                                                                            <td class="peqInput"><input class="crr" name="det-CRR-1" id="det-crr-1"  type="checkbox"  value="X"></td>
                                                                            <td class="peqInput"><input class="frm" name="det-FRM-1" id="det-frm-1"  type="checkbox"  value="X"></td>
                                                                            <td class="peqInput"><input class="vrs" name="det-VRS-1" id="det-vrs-1"  type="checkbox"  value="X"></td>
                                                                            
                                                                            <td>
                                                                                <select class="form-control  pedidoPor" name="det-idPedidoPor-1" id="det-idPedidoPor-1" >
                                                                                    <option value="">Seleccionar...</option>
                                                                                    <?php echo $_smarty_tpl->tpl_vars['empleadosHtml']->value;?>

                                                                                </select>
                                                                            </td>
                                                                            <td>
                                                                                <select class="form-control revisadoPor" name="det-idRevisadoPor-1" id="det-idRevisadoPor-1" >
                                                                                    <option value="">Seleccionar...</option>
                                                                                    <?php echo $_smarty_tpl->tpl_vars['empleadosHtml']->value;?>

                                                                                </select>
                                                                            </td>
                                                                            <td><input class="form-control descripcion" name="det-descripcion-1" id="det-descripcion-1" placeholder="Descripción" size="105" type="text"></td>
                                                                            <td class="boton"><button style="margin-right:0;" type="button" id="uno-mas" class="btn green">+</button></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                						</div> <!-- END TABLE PEDIDOS A REALIZAR-->
                                                
												
                                             <!--/FINNNNNNNNNNNN--> 
                                             
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
				 aClonar.find('.fecha').datepicker({ rtl: App.isRTL(),autoclose: true })
				 .attr('name','det-fecha-'+pos).attr('id','det-fecha-'+pos).val('');
				 aClonar.find('.cantidad').attr('name','det-cantidad-'+pos).attr('id','det-cantidad-'+pos).val('');
				 aClonar.find('.horas').attr('name','det-horas-'+pos).attr('id','det-horas-'+pos);
				 aClonar.find('.concepto').attr('name','det-concepto-'+pos).attr('id','det-concepto-'+pos).val('');
				 aClonar.find('.lugarIn').attr('name','det-lugar-'+pos).attr('id','det-lugar-in-'+pos);
				 aClonar.find('.lugarOut').attr('name','det-lugar-'+pos).attr('id','det-lugar-out-'+pos);
				 aClonar.find('.codigo').attr('name','det-codigo-'+pos).attr('id','det-codigo-'+pos).val('');
				 
				 aClonar.find('.dln').attr('name','det-DLN-'+pos).attr('id','det-dln-'+pos).attr('checked', false);
				 aClonar.find('.dsny').attr('name','det-DSNY-'+pos).attr('id','det-dsny-'+pos).attr('checked', false);
				 aClonar.find('.tpg').attr('name','det-TPG-'+pos).attr('id','det-tpg-'+pos).attr('checked', false);
				 aClonar.find('.inf').attr('name','det-INF-'+pos).attr('id','det-inf-'+pos).attr('checked', false);
				 aClonar.find('.eden').attr('name','det-EDEN-'+pos).attr('id','det-eden-'+pos).attr('checked', false);
				 aClonar.find('.pln').attr('name','det-PLN-'+pos).attr('id','det-pln-'+pos).attr('checked', false);
				 aClonar.find('.chq').attr('name','det-CHQ-'+pos).attr('id','det-chq-'+pos).attr('checked', false);
				 aClonar.find('.crr').attr('name','det-CRR-'+pos).attr('id','det-crr-'+pos).attr('checked', false);
				 aClonar.find('.frm').attr('name','det-FRM-'+pos).attr('id','det-frm-'+pos).attr('checked', false);
				 aClonar.find('.vrs').attr('name','det-VRS-'+pos).attr('id','det-vrs-'+pos).attr('checked', false);
				 
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
			   var codEdit=Array();
			   <?php echo $_smarty_tpl->tpl_vars['codEdit']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['parteTrEdit']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['fechaEdit']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['horas']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['concepto']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['dln']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['dsny']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['tpg']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['inf']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['ed']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['pln']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['chq']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['crr']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['frm']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['vrs']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['pedidoPor']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['revisadoPor']->value;?>
			   
			   <?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['lugar']->value;?>

			   
			   var numFilas=1+filasDeMas;
			   var numCodig = <?php echo $_smarty_tpl->tpl_vars['numCodig']->value;?>
;
			   jQuery('#uno-mas').click(function(){
				 if(numFilas>=numCodig){
					 alert('se alcanzo el limite de codigos creados!');
					 return;				
				 }
				 console.log(numFilas+' - '+numCodig);
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
			  
			   for(var i in codEdit){ console.log(dln[i]+' - '+n);
			     jQuery('#det-codigo-'+n).val(codEdit[i]);
				 jQuery('#det-idPartesTrabajo-'+n).val(parteTrEdit[i]);
				 jQuery('#det-fecha-'+n).val(fecha[i]);
				 jQuery('#det-horas-'+n).val(horas[i]);
				 jQuery('#det-concepto-'+n).val(concepto[i]);
                 checkea(jQuery('#det-dln-'+n), dln[i]);
				 checkea(jQuery('#det-dsny-'+n), dsny[i]);
				 checkea(jQuery('#det-tpg-'+n), tpg[i]);
				 checkea(jQuery('#det-inf-'+n), inf[i]);
				 checkea(jQuery('#det-eden-'+n), ed[i]);
				 checkea(jQuery('#det-chq-'+n), chq[i]);
				 checkea(jQuery('#det-crr-'+n), crr[i]);
				 checkea(jQuery('#det-frm-'+n), frm[i]);
				 checkea(jQuery('#det-vrs-'+n), vrs[i]);
				 checkea(jQuery('#det-pln-'+n), pln[i]);
				 jQuery('#det-idPedidoPor-'+n).val(pedidoPor[i]);
				 jQuery('#det-idRevisadoPor-'+n).val(revisadoPor[i]);
				 jQuery('#det-descripcion-'+n).val(descripcion[i]);
				 if(lugar[i]=='in'){
				   jQuery('#det-lugar-in-'+n).val('checked', true);
				   jQuery('#det-lugar-out-'+n).val('checked', false);
				 }else{
				   jQuery('#det-lugar-in-'+n).val('checked', false);
				   jQuery('#det-lugar-out-'+n).val('checked', true);
				 }

				 
				 n++;
			   }
            });
			function checkea(obj, valor){
			    if(valor!=''){
				   obj.attr('checked', true);
				 }
			}
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