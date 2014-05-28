<?php /* Smarty version Smarty-3.1.12, created on 2014-04-09 00:20:40
         compiled from "C:\xampp\htdocs\acero\plantillas\tpl\admin\calcular.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3893532b46fe3b5021-29342498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32442dc0403d30a40fea806754d62e0fa3c9da90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acero\\plantillas\\tpl\\admin\\calcular.tpl',
      1 => 1396995636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3893532b46fe3b5021-29342498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_532b46fe4e41b8_23755107',
  'variables' => 
  array (
    'cliente' => 0,
    'ids' => 0,
    'factura' => 0,
    'vista' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532b46fe4e41b8_23755107')) {function content_532b46fe4e41b8_23755107($_smarty_tpl) {?><!DOCTYPE html>
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
        <link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/select2/select2_metro.css" />
        <link rel="stylesheet" href="plantillas/assets/plugins/data-tables/DT_bootstrap.css" />
        <!-- END PAGE LEVEL STYLES -->
        
		<style type="text/css">
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
						Acero <small>calculo de horas</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
                    	<li class="btn-group">
							
							<a href="informes-trabajo" class="btn red dropdown-toggle"><span style="color:#FFF;"><i class="fa fa-reply-all"></i> Volver a informes avanzados </span></a>
							
						</li>
						<li>
							<a href="inicio">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Calculo, facturación
						</li>
						
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<div class="clearfix"></div>
            
            <div class="row ">
                
                <div class="col-md-12 col-sm-12">
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption"><?php echo $_smarty_tpl->tpl_vars['cliente']->value;?>
 (nombre del cliente)</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
							</div>
						</div>
						<div class="portlet-body flip-scroll">
                        	<div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-12">
                                         
                                         
                                         
                                         <div class="col-md-12" style="margin-top:10px;">
                                            <div class="col-md-8">
                                                   
                                            </div>
                                            <div class="col-md-4">
                                            <form method="post" action="calcular" id="filtro" >
                                            <input type="hidden" name="clienteFiltro" value="1">
                                            <input type="hidden" name="ids" value="<?php echo $_smarty_tpl->tpl_vars['ids']->value;?>
">
                                            <button  style="float:right;" id="pdf" class="btn dropdown-toggle red" data-toggle="dropdown"><i class="fa fa-download"></i> Imprimir pdf </button>
                                            <button style="margin-right:5px; float:right;" id="excel"  class="btn dropdown-toggle green" data-toggle="dropdown"><i class="fa fa-th"></i> Guardar Excel</button>
                                            </form>
                                            </div>
                                         </div>
                                         
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
							<table class="table table-bordered table-striped table-condensed flip-content">
								<thead class="flip-content">
									<tr>
										<th colspan="8"><?php echo $_smarty_tpl->tpl_vars['cliente']->value;?>
 (nombre del cliente)</th>
                                        <th>Nº Factura</th>
                                        <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['factura']->value;?>
</th>
									</tr>
                                    </thead>
                                    </table>
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                   <?php echo $_smarty_tpl->tpl_vars['vista']->value;?>

                                   </table>
                                
                                
							</table>

                                
						</div>
                        
					</div>
				</div>
				
			</div>
			
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
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="plantillas/assets/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/data-tables/DT_bootstrap.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="plantillas/assets/scripts/app.js"></script>
        <script src="plantillas/assets/scripts/table-editable.js"></script>    
        <script>
            jQuery(document).ready(function() {       
               App.init();
               TableEditable.init();
			   
			   
			   jQuery('#excel, #pdf').click(function(){
				   				jQuery('#excell, #pdff, #calcularr').remove();								   
				   if(jQuery(this).attr('id')=='excel'){
				       jQuery('#filtro').append('<input type="hidden" name="excel" id="excell">');
					   jQuery('#filtro').submit();		
				   }else if(jQuery(this).attr('id')=='pdf'){
				       jQuery('#filtro').append('<input type="hidden" name="pdf" id="pdff"><input type="hidden" name="calcular" id="calcularr">');
					   jQuery('#filtro').submit();		
				   }							
			   });
            });
        </script>
        <!-- END JAVASCRIPTS -->
</body>
</html>
<?php }} ?>