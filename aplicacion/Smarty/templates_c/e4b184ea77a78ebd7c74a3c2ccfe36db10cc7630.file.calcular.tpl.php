<?php /* Smarty version Smarty-3.1.12, created on 2014-01-24 19:18:18
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/calcular.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191456748452e1791a197c48-74224329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4b184ea77a78ebd7c74a3c2ccfe36db10cc7630' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/calcular.tpl',
      1 => 1390587494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191456748452e1791a197c48-74224329',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52e1791a1e6346_69145401',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e1791a1e6346_69145401')) {function content_52e1791a1e6346_69145401($_smarty_tpl) {?><!DOCTYPE html>
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
							<div class="caption">Typsa (nombre del cliente)</div>
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
                                            <button  style="float:right;" class="btn dropdown-toggle red" data-toggle="dropdown"><i class="fa fa-download"></i> Imprimir pdf </button>
                                            <button style="margin-right:5px; float:right;"  class="btn dropdown-toggle green" data-toggle="dropdown"><i class="fa fa-th"></i> Guardar Excel</button>
                                            </div>
                                         </div>
                                         
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
							<table class="table table-bordered table-striped table-condensed flip-content">
								<thead class="flip-content">
									<tr>
										<th colspan="8">Typsa (nombre del cliente)</th>
                                        <th>Nº Factura</th>
                                        <th colspan="2">352654</th>
									</tr>
                                    <tr>
										<th>Proyectos</th>
                                        <th>Horas C101</th>
                                        <th>Precio</th>
                                        <th>Total C101</th>
                                        <th>Horas C102</th>
                                        <th>Precio</th>
                                        <th>Total C102	</th>
                                        <th>Horas C105</th>
                                        <th>Precio</th>
                                        <th>Total C105</th>
                                        <th>Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>P346346</td>
                                        <td>10</td>
                                        <td>30€</td>
                                        <td>300€</td>
                                        <td>67</td>
                                        <td>22€</td>
                                        <td>1474€</td>
                                        <td>0</td>
                                        <td>30€</td>
                                        <td>0€</td>
                                        <td>1774€</td>
									</tr>
                                    <tr>
										<td>P346346</td>
                                        <td>10</td>
                                        <td>30€</td>
                                        <td>300€</td>
                                        <td>67</td>
                                        <td>22€</td>
                                        <td>1474€</td>
                                        <td>0</td>
                                        <td>30€</td>
                                        <td>0€</td>
                                        <td>1774€</td>
									</tr>
                                    <tr>
										<td>P346346</td>
                                        <td>10</td>
                                        <td>30€</td>
                                        <td>300€</td>
                                        <td>67</td>
                                        <td>22€</td>
                                        <td>1474€</td>
                                        <td>0</td>
                                        <td>30€</td>
                                        <td>0€</td>
                                        <td>1774€</td>
									</tr>
                                    <tr>
										<td>P346346</td>
                                        <td>10</td>
                                        <td>30€</td>
                                        <td>300€</td>
                                        <td>67</td>
                                        <td>22€</td>
                                        <td>1474€</td>
                                        <td>0</td>
                                        <td>30€</td>
                                        <td>0€</td>
                                        <td>1774€</td>
									</tr>
                                    
									
								</tbody>
                                
                                <thead class="flip-content">
									<tr>
										<th>Total</th>
                                        <th>40hrs</th>
                                        <th>30€</th>
                                        <th>1200€</th>
                                        <th>268hrs</th>
                                        <th>22€</th>
                                        <th>5896€</th>
                                        <th>0hrs</th>
                                        <th>30€</th>
                                        <th>0€</th>
                                        <th>7096€</th>
									</tr>
								</thead>
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
            });
        </script>
        <!-- END JAVASCRIPTS -->
</body>
</html>
<?php }} ?>