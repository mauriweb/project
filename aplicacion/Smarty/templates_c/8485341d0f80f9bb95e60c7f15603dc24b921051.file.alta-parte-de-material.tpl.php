<?php /* Smarty version Smarty-3.1.12, created on 2014-04-30 17:20:13
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/alta-parte-de-material.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160395777552e58c07a2fbb3-84515639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8485341d0f80f9bb95e60c7f15603dc24b921051' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/alta-parte-de-material.tpl',
      1 => 1397075422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160395777552e58c07a2fbb3-84515639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52e58c07a8a343_09285872',
  'variables' => 
  array (
    'idMat' => 0,
    'filasDeMas' => 0,
    'mensaje' => 0,
    'pedidosHtml' => 0,
    'codigosHtml' => 0,
    'codEdit' => 0,
    'factEdit' => 0,
    'fechaEdit' => 0,
    'noFactEdit' => 0,
    'pedidoPorEdit' => 0,
    'dimEdit' => 0,
    'filasDeMasEdit' => 0,
    'numCodig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e58c07a8a343_09285872')) {function content_52e58c07a8a343_09285872($_smarty_tpl) {?><!DOCTYPE html>
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
										<form action="alta-parte-de-material-trabajador" method="post" id="form_sample_1" class="form-horizontal form-bordered form-row-stripped">
                                        <?php echo $_smarty_tpl->tpl_vars['idMat']->value;?>

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
                                                                        <th>Código</th>
                                                                        <th>Dimensiones</th>
                                                                        <th colspan="2">Total</th>
                                                                        <th>Pedido por</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="append">
                                                                    <tr id="aClonar">
                                                                        <td><input class="form-control date-picker" name="det-fecha-1" id="det-fecha-1" placeholder="Fecha" size="5" type="text" value="" /></td>
                                                                        <td>
                                                                            <select class="form-control" name="det-codigo-1" id="det-codigo-1" class="select2me">
                                                                                <option value="">Seleccionar...</option>
                                                                               <?php echo $_smarty_tpl->tpl_vars['codigosHtml']->value;?>

                                                                            </select>
                                                                        </td>
                                                                        <td><input type="text" class="form-control" name="det-dim-1" id="det-dim-1" placeholder="Dimensiones" size="5" type="text"></td>
                                                                        <td><input type="text" class="form-control" name="det-noFact-1" id="det-noFact-1" placeholder="No facturable" size="5" type="text"></td>
                                                                        <td><input type="text" class="form-control" name="det-fact-1" id="det-fact-1" placeholder="Facturable" size="5" type="text"></td>
                                                                        <td><input class="form-control" name="det-pedidoPor-1" id="det-pedidoPor-1" placeholder="Pedido por" size="5" type="text" value="" /></td>
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
				 aClonar.find('input').eq(1).attr('name','det-dim-'+pos).attr('id','det-dim-'+pos).val('');
				 aClonar.find('input').eq(2).attr('name','det-noFact-'+pos).attr('id','det-noFact-'+pos).val('');
				 aClonar.find('input').eq(3).attr('name','det-fact-'+pos).attr('id','det-fact-'+pos).val('');
				 aClonar.find('input').eq(4).attr('name','det-pedidoPor-'+pos).attr('id','det-pedidoPor-'+pos).val('');
				 
				 aClonar.find('select').eq(0).attr('name','det-codigo-'+pos).attr('id','det-codigo-'+pos).val('');
				 aClonar.find('input').eq(0).datepicker({ rtl: App.isRTL(),autoclose: true })
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
			   var cod=Array();
			   <?php echo $_smarty_tpl->tpl_vars['codEdit']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['factEdit']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['fechaEdit']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['noFactEdit']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['pedidoPorEdit']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['dimEdit']->value;?>

			   <?php echo $_smarty_tpl->tpl_vars['filasDeMasEdit']->value;?>

			   
			   var numFilas=1+filasDeMas;
			   var numCodig = <?php echo $_smarty_tpl->tpl_vars['numCodig']->value;?>
;
			   jQuery('#uno-mas').click(function(){
				 if(numFilas>=numCodig){
					 alert('se alcanzo el limite de codigos creados!');
					 return;				
				 }console.log(numFilas+' - '+numCodig);
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
			  
			   for(var i in cod){ 
			     jQuery('#det-fact-'+n).val(fact[i]);
				 jQuery('#det-noFact-'+n).val(noFact[i]);
				 jQuery('#det-fecha-'+n).val(fecha[i]);
				 jQuery('#det-dim-'+n).val(dim[i]);
				 jQuery('#det-pedidoPor-'+n).val(pedidoPor[i]);
				 jQuery('#det-codigo-'+n).val(cod[i]);

				 
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
<?php }} ?>