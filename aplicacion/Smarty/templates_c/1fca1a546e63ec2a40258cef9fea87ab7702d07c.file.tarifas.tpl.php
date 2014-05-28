<?php /* Smarty version Smarty-3.1.12, created on 2014-04-30 16:39:21
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/tarifas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83956464652a8c7f904eb31-91980390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fca1a546e63ec2a40258cef9fea87ab7702d07c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/admin/tarifas.tpl',
      1 => 1395071748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83956464652a8c7f904eb31-91980390',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52a8c7f9099ff6_31617734',
  'variables' => 
  array (
    'tarifasDel' => 0,
    'tarGr' => 0,
    'tarTop' => 0,
    'tarInf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a8c7f9099ff6_31617734')) {function content_52a8c7f9099ff6_31617734($_smarty_tpl) {?><!DOCTYPE html>
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
						Lista de tarifas <small> Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
                    	<li class="btn-group">
							
							<a href="add-tarifas" class="btn red dropdown-toggle"><span style="color:#FFF;">Insertar tarifas<i class="fa fa-plus"></i></span></a>
							
						</li>
						<li>
							<a href="inicio">Inicio</a>
                            <i class="fa fa-angle-right"></i> 
						</li>
						<li>
							Listas de tarifas
							
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			
			<div class="clearfix"></div>
            
            <div class="row ">
				<div class="col-md-6 col-sm-6">
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">Delineación</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
							</div>
						</div>
						<div class="portlet-body flip-scroll">
							<table class="table table-bordered table-striped table-condensed flip-content">
								<thead>
									<tr>
										<th>Código</th>
                                        <th>Descripción</th>
                                        <th>€</th>
										<th>Edit</th>
										<th>Delete</th>
                                        
									</tr>
								</thead>
								<tbody>
									<?php echo $_smarty_tpl->tpl_vars['tarifasDel']->value;?>

                                    
                                    
                                   
                                    
									
								</tbody>
							</table>

                               
                                
						</div>
                        
					</div>
				</div>
                
                <!--#################################-->
                
                <div class="col-md-6 col-sm-6">
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">Diseño gráfico</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
							</div>
						</div>
						<div class="portlet-body flip-scroll">
							<table class="table table-bordered table-striped table-condensed flip-content">
								<thead>
									<tr>
										<th>Código</th>
                                        <th>Descripción</th>
                                        <th>€</th>
										<th>Edit</th>
										<th>Delete</th>
                                        
									</tr>
								</thead>
								<tbody>
									<?php echo $_smarty_tpl->tpl_vars['tarGr']->value;?>

                                    
                                    
                                   
                                    
									
								</tbody>
							</table>

                               
                                
						</div>
                        
					</div>
				</div>
                
                <!--#################################-->
                
                <div class="col-md-6 col-sm-6">
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">Topografía</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
							</div>
						</div>
						<div class="portlet-body flip-scroll">
							<table class="table table-bordered table-striped table-condensed flip-content">
								<thead>
									<tr>
										<th>Código</th>
                                        <th>Descripción</th>
                                        <th>€</th>
										<th>Edit</th>
										<th>Delete</th>
                                        
									</tr>
								</thead>
								<tbody>
									<?php echo $_smarty_tpl->tpl_vars['tarTop']->value;?>

                                    
                                   
                                    
									
								</tbody>
							</table>

                               
                                
						</div>
                        
					</div>
				</div>
                
                <!--#################################-->
                
                <div class="col-md-6 col-sm-6">
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">Informática</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
							</div>
						</div>
						<div class="portlet-body flip-scroll">
							<table class="table table-bordered table-striped table-condensed flip-content">
								<thead>
									<tr>
										<th>Código</th>
                                        <th>Descripción</th>
                                        <th>€</th>
										<th>Edit</th>
										<th>Delete</th>
                                        
									</tr>
								</thead>
								<tbody>
									<?php echo $_smarty_tpl->tpl_vars['tarInf']->value;?>

                                    
                                    
                                   
                                    
									
								</tbody>
							</table>

                               
                                
						</div>
                        
					</div>
				</div>
                
				<!--#################################-->
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
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
			<script src="plantillas/assets/scripts/app.js" type="text/javascript"></script>
            <script src="plantillas/assets/scripts/tasks.js" type="text/javascript"></script>        
            <!-- END PAGE LEVEL SCRIPTS -->  
            <script>
                jQuery(document).ready(function() {    
                   App.init(); // initlayout and core plugins
                   Index.init();
                   Index.initJQVMAP(); // init index page's custom scripts
                   Index.initCalendar(); // init index page's custom scripts
                   Index.initCharts(); // init index page's custom scripts
                   Index.initChat();
                   Index.initMiniCharts();
                   Index.initDashboardDaterange();
                   Index.initIntro();
                   Tasks.initDashboardWidget();
                });
            </script>
            <!-- END JAVASCRIPTS -->	
</body>
</html>
<?php }} ?>