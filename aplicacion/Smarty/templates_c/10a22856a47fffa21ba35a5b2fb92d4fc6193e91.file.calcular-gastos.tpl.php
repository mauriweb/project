<?php /* Smarty version Smarty-3.1.12, created on 2014-01-24 20:22:37
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/calcular-gastos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94134664352e2baa14d2406-49986388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10a22856a47fffa21ba35a5b2fb92d4fc6193e91' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/calcular-gastos.tpl',
      1 => 1390591356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94134664352e2baa14d2406-49986388',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52e2baa1521888_57282038',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e2baa1521888_57282038')) {function content_52e2baa1521888_57282038($_smarty_tpl) {?><!DOCTYPE html>
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
							
							<a href="informes-gastos" class="btn red dropdown-toggle"><span style="color:#FFF;"><i class="fa fa-reply-all"></i> Volver a informes avanzados </span></a>
							
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
										<th colspan="2">Typsa (nombre del cliente)</th>
                                        <th>Nº Factura</th>
                                        <th colspan="2">352654</th>
									</tr>
                                    <tr>
										<th>Proyectos</th>
                                        <th>Trabajador</th>
                                        <th>Anticipos al trabajador</th>
                                        <th>A percibir trabajador</th>
                                        <th>Total gastos</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>P346346</td>
                                        <td>Pepe</td>
                                        <td>30€</td>
                                        <td>270€</td>
                                        <td>300€</td>
									</tr>
                                    <tr>
										<td>P346346</td>
                                        <td>Pepe</td>
                                        <td>30€</td>
                                        <td>270€</td>
                                        <td>300€</td>
									</tr>
                                    <tr>
										<td>P346346</td>
                                        <td>Pepe</td>
                                        <td>30€</td>
                                        <td>270€</td>
                                        <td>300€</td>
									</tr>
                                    <tr>
										<td>P346346</td>
                                        <td>Pepe</td>
                                        <td>30€</td>
                                        <td>270€</td>
                                        <td>300€</td>
									</tr>
                                    <tr>
										<td>P346346</td>
                                        <td>Pepe</td>
                                        <td>30€</td>
                                        <td>270€</td>
                                        <td>300€</td>
									</tr>
                                    <tr>
										<td>P346346</td>
                                        <td>Pepe</td>
                                        <td>30€</td>
                                        <td>270€</td>
                                        <td>300€</td>
									</tr>
                                    <tr>
										<td>P346346</td>
                                        <td>Pepe</td>
                                        <td>30€</td>
                                        <td>270€</td>
                                        <td>300€</td>
									</tr>
                                    
									
								</tbody>
                                
                                <thead class="flip-content">
									<tr>
										<th>Total</th>
                                        <th></th>
                                        <th>210€</th>
                                        <th>1890€</th>
                                        <th>2100€</th>
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