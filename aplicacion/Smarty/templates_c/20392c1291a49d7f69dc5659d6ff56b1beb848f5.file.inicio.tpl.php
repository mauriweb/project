<?php /* Smarty version Smarty-3.1.12, created on 2014-04-24 18:24:30
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracionAcero/inicio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39385139652e3aa57e14446-40726311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20392c1291a49d7f69dc5659d6ff56b1beb848f5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracionAcero/inicio.tpl',
      1 => 1390771598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39385139652e3aa57e14446-40726311',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52e3aa57e673e4_28432897',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e3aa57e673e4_28432897')) {function content_52e3aa57e673e4_28432897($_smarty_tpl) {?><!DOCTYPE html>
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
        <?php echo $_smarty_tpl->getSubTemplate ("administracionAcero/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <!-- =======================================
        
        FIN MENU
        
        ======================================= -->
        <div class="page-container">
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
               <!-- ======================================= MENU LATERAL ======================================= -->
            <?php echo $_smarty_tpl->getSubTemplate ("administracionAcero/menuLateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
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
						Acero <small>estadísticas generales</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<a href="inicio">Inicio</a> 
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
							<div class="caption"><i class="fa fa-warning"></i> Alerta partes pendientes</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
							</div>
						</div>
						<div class="portlet-body flip-scroll">
                        	<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead class="flip-content">
									<tr>
										<th>Nombre</th>
                                        <th>Apellido 1</th>
                                        <th>Apellido 2</th>
                                        <th>Fecha</th>
                                        <th>Horas</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Susana</td>
										<td>Anton</td>
                                        <td>Anton</td>
                                        <td>17/9/2014</td>
										<td class="numeric">8</td>
									</tr>
                                    <tr>
										<td>Susana</td>
										<td>Anton</td>
                                        <td>Anton</td>
                                        <td>17/9/2014</td>
										<td class="numeric">8</td>
									</tr>
                                    <tr>
										<td>Susana</td>
										<td>Anton</td>
                                        <td>Anton</td>
                                        <td>17/9/2014</td>
										<td class="numeric">8</td>
									</tr>
                                    <tr>
										<td>Susana</td>
										<td>Anton</td>
                                        <td>Anton</td>
                                        <td>17/9/2014</td>
										<td class="numeric">8</td>
									</tr>
                                    
									
								</tbody>
							</table>

                                
						</div>
                        
					</div>
				</div>
                
                <!--#################################-->
                
                
				
			</div>
			<div class="clearfix"></div>
            
            <div class="row ">
                
                <div class="col-md-12 col-sm-12">
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption"><i class="fa fa-user"></i>Notificaciones permisos y ausencias (solo puede verlas ni editar ni borrar)</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
							</div>
						</div>
						<div class="portlet-body flip-scroll">
							<table class="table table-bordered table-striped table-condensed flip-content">
								<thead class="flip-content">
									<tr>
										<th>Nombre</th>
                                        <th>Apellido 1</th>
                                        <th>Apellido 2</th>
                                        <th>Fecha</th>
                                        <th>Horas</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Susana</td>
										<td>Anton</td>
                                        <td>Anton</td>
                                        <td>17/9/2014</td>
										<td class="numeric">8</td>
									</tr>
                                    <tr>
										<td>Susana</td>
										<td>Anton</td>
                                        <td>Anton</td>
                                        <td>17/9/2014</td>
										<td class="numeric">8</td>
									</tr>
                                    <tr>
										<td>Susana</td>
										<td>Anton</td>
                                        <td>Anton</td>
                                        <td>17/9/2014</td>
										<td class="numeric">8</td>
									</tr>
                                    <tr>
										<td>Susana</td>
										<td>Anton</td>
                                        <td>Anton</td>
                                        <td>17/9/2014</td>
										<td class="numeric">8</td>
									</tr>
                                    
									
								</tbody>
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