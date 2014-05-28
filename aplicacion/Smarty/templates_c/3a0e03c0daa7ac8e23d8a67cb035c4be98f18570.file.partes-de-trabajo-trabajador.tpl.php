<?php /* Smarty version Smarty-3.1.12, created on 2013-12-16 16:03:51
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/partes-de-trabajo-trabajador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13028517852af07ea912506-23287885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a0e03c0daa7ac8e23d8a67cb035c4be98f18570' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/partes-de-trabajo-trabajador.tpl',
      1 => 1387206227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13028517852af07ea912506-23287885',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52af07ea963016_29041877',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52af07ea963016_29041877')) {function content_52af07ea963016_29041877($_smarty_tpl) {?><!DOCTYPE html>
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
						Listado partes de trabajo <small> Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							
							<a href="alta-de-trabajo-trabajador" class="btn red dropdown-toggle"><span style="color:#FFF;">Añadir partes de trabajo <i class="fa fa-plus"></i></span></a>
							
						</li>
						<li>
							<i class="inicio-trabajador"></i>
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
										<th>Cliente</th>
                                        <th>Pedido</th>
                                        <th>Proyecto</th>
										<th>Fecha</th>
										<th>Horas</th>
                                        <th>Tarifa</th>
                                        <th>Concepto</th>
                                        <th>Pedido por</th>
                                        <th>Observaciones</th>
									</tr>
								</thead>
								<tbody>
									<tr >
                                    	<td>Nombre</td>
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>8,5</td>
                                        <td>C000</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500</td>
									</tr>
                                    <tr >
                                    	<td>Nombre</td>
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>8,5</td>
                                        <td>C000</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500</td>
									</tr>
                                    <tr >
                                    	<td>Nombre</td>
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>8,5</td>
                                        <td>C000</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500</td>
									</tr>
                                    <tr >
                                    	<td>Nombre</td>
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>8,5</td>
                                        <td>C000</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500</td>
									</tr>
                                    <tr >
                                    	<td>Nombre</td>
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>8,5</td>
                                        <td>C000</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500</td>
									</tr>
                                    <tr >
                                    	<td>Nombre</td>
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>8,5</td>
                                        <td>C000</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500</td>
									</tr>
                                    <tr >
                                    	<td>Nombre</td>
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>8,5</td>
                                        <td>C000</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500</td>
									</tr>
                                    <tr >
                                    	<td>Nombre</td>
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>8,5</td>
                                        <td>C000</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500</td>
									</tr>
                                    <tr >
                                    	<td>Nombre</td>
										<td>P13-017</td>
                                        <td>7401</td>
										<td>17 / 09 / 2013</td>
										<td>8,5</td>
                                        <td>C000</td>
                                        <td>Delineación</td>
                                        <td>Nombre</td>
                                        <td>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500</td>
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