<?php /* Smarty version Smarty-3.1.12, created on 2014-01-26 22:28:24
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/partes-de-material-trabajador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70987062752af079f9da453-38314349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bedbc954619aa2baefa1327090a1dbb517f0e51' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/partes-de-material-trabajador.tpl',
      1 => 1387206324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70987062752af079f9da453-38314349',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52af079fa2d5a1_23223394',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52af079fa2d5a1_23223394')) {function content_52af079fa2d5a1_23223394($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("trabajador/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <!-- =======================================
        
        FIN HEAD
        
        ======================================= -->	
        
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/select2/select2_metro.css" />
	<link rel="stylesheet" href="plantillas/assets/plugins/data-tables/DT_bootstrap.css" />
	<!-- END PAGE LEVEL STYLES -->
    	
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
						Listado partes de partes de material <small> Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							
							<a href="alta-de-material-trabajador" class="btn red dropdown-toggle"><span style="color:#FFF;">Añadir partes de material <i class="fa fa-plus"></i></span></a>
							
						</li>
						<li>
							<i class="inicio"></i>
							<a href="inicio-trabajador">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Listado partes de material
							
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
							<div class="caption">Listado partes de trabajo</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="javascript:;" class="reload"></a>
							</div>
						</div>
                       
						<div class="portlet-body">
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Pedido</th>
                                        <th>Proyecto</th>
										<th>Fecha</th>
                                        <th>Código</th>
										<th>Nºde unidades</th>
                                        <th>Dimensiones</th>
                                        <th>Total no fact.</th>
                                        <th>Total facturable</th>
                                        <th>Pedido por</th>
									</tr>
								</thead>
								<tbody>
									<tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>C208</td>
                                        <td>8</td>
                                        <td>100x100</td>
                                        <td>200</td>
                                        <td>0</td>
                                        <td>Nombre</td>
									</tr>
                                    <tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>C208</td>
                                        <td>8</td>
                                        <td>100x100</td>
                                        <td>200</td>
                                        <td>0</td>
                                        <td>Nombre</td>
                                       
									</tr>
                                    <tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>C208</td>
                                        <td>8</td>
                                        <td>100x100</td>
                                        <td>200</td>
                                        <td>0</td>
                                        <td>Nombre</td>
									</tr>
                                    <tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>C208</td>
                                        <td>8</td>
                                        <td>100x100</td>
                                        <td>200</td>
                                        <td>0</td>
                                        <td>Nombre</td>
									</tr>
                                    <tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>C208</td>
                                        <td>8</td>
                                        <td>100x100</td>
                                        <td>200</td>
                                        <td>0</td>
                                        <td>Nombre</td>
									</tr>
                                    <tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>C208</td>
                                        <td>8</td>
                                        <td>100x100</td>
                                        <td>200</td>
                                        <td>0</td>
                                        <td>Nombre</td>
									</tr>
                                    <tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>C208</td>
                                        <td>8</td>
                                        <td>100x100</td>
                                        <td>200</td>
                                        <td>0</td>
                                        <td>Nombre</td>
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
        <?php echo $_smarty_tpl->getSubTemplate ("trabajador/pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
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