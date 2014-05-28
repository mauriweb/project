<?php /* Smarty version Smarty-3.1.12, created on 2013-12-16 14:12:29
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/clienteVisado/proyectos-visado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55351313252ab6878a2c920-64253032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66dbe3dc150ca47f97d8305d94c7c8caeb3d95d0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/clienteVisado/proyectos-visado.tpl',
      1 => 1387199548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55351313252ab6878a2c920-64253032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52ab6878a7a371_76305111',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ab6878a7a371_76305111')) {function content_52ab6878a7a371_76305111($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("clienteVisado/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
        <?php echo $_smarty_tpl->getSubTemplate ("clienteVisado/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <!-- =======================================
        
        FIN MENU
        
        ======================================= -->
        <div class="page-container">
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
               <!-- ======================================= MENU LATERAL ======================================= -->
            <?php echo $_smarty_tpl->getSubTemplate ("clienteVisado/menuLateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
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
						Listado partes de trabajo <small> Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="inicio"></i>
							<a href="inicio">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Listado partes de trabajo
							
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
                                        <th>Concepto</th>
                                        <th>Pedido por</th>
                                        <th>Visado</th>
                                        <th>Editar</th>
									</tr>
								</thead>
								<tbody>
									<tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>NO</td>
										<td><a href="visar-trabajo">Editar</a></td>
									</tr>
                                    <tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>NO</td>
										<td><a href="visar-trabajo">Editar</a></td>
									</tr>
                                    <tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>NO</td>
										<td><a href="visar-trabajo">Editar</a></td>
									</tr>
                                    <tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>NO</td>
										<td><a href="visar-trabajo">Editar</a></td>
									</tr>
                                    <tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>NO</td>
										<td><a href="visar-trabajo">Editar</a></td>
									</tr>
                                    <tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>NO</td>
										<td><a href="visar-trabajo">Editar</a></td>
									</tr>
                                    <tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>NO</td>
										<td><a href="visar-trabajo">Editar</a></td>
									</tr>
                                    <tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>NO</td>
										<td><a href="visar-trabajo">Editar</a></td>
									</tr>
                                    <tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>NO</td>
										<td><a href="visar-trabajo">Editar</a></td>
									</tr>
                                    <tr >
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>NO</td>
										<td><a href="visar-trabajo">Editar</a></td>
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