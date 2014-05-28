<?php /* Smarty version Smarty-3.1.12, created on 2014-01-18 12:04:53
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/readmitir-empleados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130242881752a8b659eec871-44297041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '802b6785dbd27b6fe253fb2e9b61b2338c7d3104' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/readmitir-empleados.tpl',
      1 => 1390043090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130242881752a8b659eec871-44297041',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52a8b659f3a7d1_00626925',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a8b659f3a7d1_00626925')) {function content_52a8b659f3a7d1_00626925($_smarty_tpl) {?><!DOCTYPE html>
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
						Lista de empleados dados de baja <small> Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							
							<a href="empleados" class="btn red dropdown-toggle"><span style="color:#FFF;">Readmitir empleados <i class="fa fa-plus"></i></span></a>
							
						</li>
						<li>
							<i class="inicio"></i>
							<a href="inicio">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Lista de empleados dados de baja
							
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
							<div class="caption">Empleados dados de baja</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="javascript:;" class="reload"></a>
							</div>
						</div>
                       
						<div class="portlet-body">
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>DNI</th>
										<th>Teléfono</th>
										<th>Email</th>
                                        <th>Fecha de baja</th>
                                        <th>Dar de alta</th>
									</tr>
								</thead>
								<tbody>
									<tr >
										<td>Nombre</td>
                                        <td>Apellido1 Apellido2</td>
										<td>DNI</td>
                                        <td>Teléfono</td>
										<td>Email@ejemplo.com</td>
                                        <td>17 / 09 / 2013</td>
                                        <td><a class="btn default btn-xs green" href="#"><i class="fa fa-trash-o"></i> Readmitir </a></td>
									</tr>
                                    <tr >
										<td>Nombre</td>
                                        <td>Apellido1 Apellido2</td>
										<td>DNI</td>
                                        <td>Teléfono</td>
										<td>Email@ejemplo.com</td>
                                        <td>17 / 09 / 2013</td>
                                        <td><a class="btn default btn-xs green" href="#"><i class="fa fa-trash-o"></i> Readmitir </a></td>
									</tr>
                                    <tr >
										<td>Nombre</td>
                                        <td>Apellido1 Apellido2</td>
										<td>DNI</td>
                                        <td>Teléfono</td>
										<td>Email@ejemplo.com</td>
                                        <td>17 / 09 / 2013</td>
                                        <td><a class="btn default btn-xs green" href="#"><i class="fa fa-trash-o"></i> Readmitir </a></td>
									</tr>
                                    <tr >
										<td>Nombre</td>
                                        <td>Apellido1 Apellido2</td>
										<td>DNI</td>
                                        <td>Teléfono</td>
										<td>Email@ejemplo.com</td>
                                        <td>17 / 09 / 2013</td>
                                        <td><a class="btn default btn-xs green" href="#"><i class="fa fa-trash-o"></i> Readmitir </a></td>
									</tr>
                                    <tr >
										<td>Nombre</td>
                                        <td>Apellido1 Apellido2</td>
										<td>DNI</td>
                                        <td>Teléfono</td>
										<td>Email@ejemplo.com</td>
                                        <td>17 / 09 / 2013</td>
                                        <td><a class="btn default btn-xs green" href="#"><i class="fa fa-trash-o"></i> Readmitir </a></td>
									</tr>
                                    <tr >
										<td>Nombre</td>
                                        <td>Apellido1 Apellido2</td>
										<td>DNI</td>
                                        <td>Teléfono</td>
										<td>Email@ejemplo.com</td>
                                        <td>17 / 09 / 2013</td>
                                        <td><a class="btn default btn-xs green" href="#"><i class="fa fa-trash-o"></i> Readmitir </a></td>
									</tr>
                                    <tr >
										<td>Nombre</td>
                                        <td>Apellido1 Apellido2</td>
										<td>DNI</td>
                                        <td>Teléfono</td>
										<td>Email@ejemplo.com</td>
                                        <td>17 / 09 / 2013</td>
                                        <td><a class="btn default btn-xs green" href="#"><i class="fa fa-trash-o"></i> Readmitir </a></td>
									</tr>
                                    <tr >
										<td>Nombre</td>
                                        <td>Apellido1 Apellido2</td>
										<td>DNI</td>
                                        <td>Teléfono</td>
										<td>Email@ejemplo.com</td>
                                        <td>17 / 09 / 2013</td>
                                        <td><a class="btn default btn-xs green" href="#"><i class="fa fa-trash-o"></i> Readmitir </a></td>
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