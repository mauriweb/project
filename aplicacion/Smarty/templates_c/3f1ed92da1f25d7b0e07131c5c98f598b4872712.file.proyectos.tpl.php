<?php /* Smarty version Smarty-3.1.12, created on 2014-01-26 22:15:48
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracionAcero/proyectos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40954047552e57b0440ada2-24946579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f1ed92da1f25d7b0e07131c5c98f598b4872712' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracionAcero/proyectos.tpl',
      1 => 1390651751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40954047552e57b0440ada2-24946579',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52e57b04470147_65690055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e57b04470147_65690055')) {function content_52e57b04470147_65690055($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("administracionAcero/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
						Lista de proyectos <small> Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							
							<a href="add-proyectos" class="btn red dropdown-toggle"><span style="color:#FFF;">Añadir proyectos <i class="fa fa-plus"></i></span></a>
							
						</li>
						<li>
							<i class="inicio"></i>
							<a href="inicio">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Lista de proyectos
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
							<div class="caption">Proyectos de la aplicación web</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="javascript:;" class="reload"></a>
							</div>
						</div>
                       
						<div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                            	<div class="col-md-12">
                                        <div class="col-md-2">
                                                    <select class="form-control" name="category" class="select2me">
                                                        <option value="0">Año</option>
                                                        <option value="ES">2013</option>
                                                        <option value="ES">2014</option>
                                                        <option value="ES">2015</option>
                                                        <option value="ES">2016</option>
                                                        <option value="ES">2017</option>
                                                        <option value="ES">2018</option>
                                                        <option value="ES">2019</option>
                                                        <option value="ES">2020</option>
                                                        <option value="ES">2021</option>
                                                        <option value="ES">2022</option>
                                                        <option value="ES">2023</option>
                                                        <option value="ES">2024</option>
                                                        <option value="ES">2025</option>
                                                        <option value="ES">2026</option>
                                                        <option value="ES">2027</option>
                                                        <option value="ES">2028</option>
                                                        <option value="ES">2029</option>
                                                        <option value="ES">2030</option>
                                                        <option value="ES">2031</option>
                                                    </select>
                                        </div>
                                        <div class="col-md-10">
                                        <button  class="btn dropdown-toggle red" data-toggle="dropdown"><i class="fa fa-undo"></i> Actualizar</button>
                                        </div>
                                     </div>
                                      <div style="clear:both;"></div>
                                     
                                     
                                     
                                </div>
                                <div style="clear:both;"></div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Cliente</th>
                                        <th>Proyecto</th>
                                        <th>Observaciones</th>
										<th>Editar</th>
										<th>Borrar</th>
									</tr>
								</thead>
								<tbody>
									<tr >
										<td>Nombre cliente</td>
                                        <td>7401-DD-Kenya</td>
                                        <td>Observaciones</td>
                                        <td><a class="btn default btn-xs green" href="edit-proyectos"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" href="#"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>
                                    <tr >
										<td>Nombre cliente</td>
                                        <td>7401-DD-Kenya</td>
                                        <td>Observaciones</td>
										<td><a class="btn default btn-xs green" href="edit-proyectos"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" href="#"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>
                                    <tr >
										<td>Nombre cliente</td>
                                        <td>7401-DD-Kenya</td>
                                        <td>Observaciones</td>
										<td><a class="btn default btn-xs green" href="edit-proyectos"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" href="#"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>
                                    <tr >
										<td>Nombre cliente</td>
                                        <td>7401-DD-Kenya</td>
                                        <td>Observaciones</td>
										<td><a class="btn default btn-xs green" href="edit-proyectos"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" href="#"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>
                                    <tr >
										<td>Nombre cliente</td>
                                        <td>7401-DD-Kenya</td>
                                        <td>Observaciones</td>
										<td><a class="btn default btn-xs green" href="edit-proyectos"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" href="#"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>
                                    <tr >
										<td>Nombre cliente</td>
                                        <td>7401-DD-Kenya</td>
                                        <td>Observaciones</td>
										<td><a class="btn default btn-xs green" href="edit-proyectos"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" href="#"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>
                                    <tr >
										<td>Nombre cliente</td>
                                        <td>7401-DD-Kenya</td>
                                        <td>Observaciones</td>
										<td><a class="btn default btn-xs green" href="edit-proyectos"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" href="#"><i class="fa fa-trash-o"></i> Borrar </a></td>
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
        <?php echo $_smarty_tpl->getSubTemplate ("administracionAcero/pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
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