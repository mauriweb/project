<?php /* Smarty version Smarty-3.1.12, created on 2013-12-16 14:20:48
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracion/inicio-administracion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130387720652aefd18f3be97-90298336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ddc5b7de01779b3dd51243350015240a06dd9de' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/administracion/inicio-administracion.tpl',
      1 => 1387200036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130387720652aefd18f3be97-90298336',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52aefd1905c423_77603468',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52aefd1905c423_77603468')) {function content_52aefd1905c423_77603468($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("administracion/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <!-- =======================================
        
        FIN HEAD
        
        ======================================= -->		
</head>

<body class="page-header-fixed">
        <!-- =======================================
        
        MENU
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("administracion/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <!-- =======================================
        
        FIN MENU
        
        ======================================= -->
        <div class="page-container">
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
               <!-- ======================================= MENU LATERAL ======================================= -->
            <?php echo $_smarty_tpl->getSubTemplate ("administracion/menuLateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
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
							<a href="inicio-administracion">Inicio</a> 
						</li>
						
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<div class="clearfix"></div>
			<div class="row ">
				<div class="col-md-12 col-sm-12">
					<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption"><i class="fa fa-archive"></i>Últimos partes insertados</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
							</div>
						</div>
						<div class="portlet-body flip-scroll">
							<table class="table table-bordered table-striped table-condensed flip-content">
								<thead class="flip-content">
									<tr>
										<th>Trabajador</th>
										<th>Cliente</th>
										<th class="numeric">Nº Pedido</th>
										<th class="numeric">Fecha</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><div class="cont-col1"><img alt="" src="../imagenes/imgTrabajadores/SusanaAnton.png"/> Susana Antón</div></td>
										<td>Jnacher estudio</td>
										<td class="numeric">P14-032</td>
										<td class="numeric">00 / 02 / 2013</td>
									</tr>
                                    
                                    <tr>
										<td><div class="cont-col1"><img alt="" src="../imagenes/imgTrabajadores/SusanaAnton.png"/> Susana Antón</div></td>
										<td>Jnacher estudio</td>
										<td class="numeric">P14-032</td>
										<td class="numeric">00 / 02 / 2013</td>
									</tr>
                                    
                                    <tr>
										<td><div class="cont-col1"><img alt="" src="../imagenes/imgTrabajadores/SusanaAnton.png"/> Susana Antón</div></td>
										<td>Jnacher estudio</td>
										<td class="numeric">P14-032</td>
										<td class="numeric">00 / 02 / 2013</td>
									</tr>
									
								</tbody>
							</table>

                                <div class="scroller-footer">
                                    <div class="pull-right">
                                        <a href="#">Ver todos los registros <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                                    </div>
                                </div>
                                
						</div>
                        
					</div>
				</div>
                
                <!--#################################-->
                
                
				
			</div>
			<div class="clearfix"></div>
            
            <div class="row ">
				<div class="col-md-6 col-sm-6">
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption"><i class="fa fa-suitcase"></i>Últimos proyectos</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
							</div>
						</div>
						<div class="portlet-body flip-scroll">
							<table class="table table-bordered table-striped table-condensed flip-content">
								<thead class="flip-content">
									<tr>
										<th>Cliente</th>
										<th>Proyecto</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Typsa</td>
										<td>7401-DD-Kenya</td>
										
									</tr>
                                    
                                    <tr>
										<td>Typsa</td>
										<td>7401-DD-Kenya</td>
										
									</tr>
                                    
                                    <tr>
										<td>Typsa</td>
										<td>7401-DD-Kenya</td>
										
									</tr>
									
								</tbody>
							</table>

                                <div class="scroller-footer">
                                    <div class="pull-right">
                                        <a href="#">Ver todos los registros <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                                    </div>
                                </div>
                                
						</div>
                        
					</div>
				</div>
                
                <!--#################################-->
                
                <div class="col-md-6 col-sm-6">
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption"><i class="fa fa-user"></i>Últimos clientes</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
							</div>
						</div>
						<div class="portlet-body flip-scroll">
							<table class="table table-bordered table-striped table-condensed flip-content">
								<thead class="flip-content">
									<tr>
										<th>Cliente</th>
										<th>Nº teléfono</th>
                                        <th>Email</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Typsa</td>
										<td>96-1234567</td>
                                        <td>info@ejemplo.com</td>
										
									</tr>
                                    
                                    <tr>
										<td>Typsa</td>
										<td>96-1234567</td>
                                        <td>info@ejemplo.com</td>
										
									</tr>
                                    
                                    <tr>
										<td>Typsa</td>
										<td>96-1234567</td>
                                        <td>info@ejemplo.com</td>
										
									</tr>
									
								</tbody>
							</table>

                                <div class="scroller-footer">
                                    <div class="pull-right">
                                        <a href="#">Ver todos los registros <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                                    </div>
                                </div>
                                
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
        <?php echo $_smarty_tpl->getSubTemplate ("administracion/pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
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