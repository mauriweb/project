<?php /* Smarty version Smarty-3.1.12, created on 2014-05-13 18:18:40
         compiled from "C:\xampp\htdocs\acero\plantillas\tpl\trabajador\inicio-trabajador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1672852c15809d129e4-17508956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9773e4f9a64201345485f5dde5fbcf84f9808cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acero\\plantillas\\tpl\\trabajador\\inicio-trabajador.tpl',
      1 => 1397148942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1672852c15809d129e4-17508956',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52c15809ddb646_76371317',
  'variables' => 
  array (
    'vista' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c15809ddb646_76371317')) {function content_52c15809ddb646_76371317($_smarty_tpl) {?><!DOCTYPE html>
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
						Acero <small>estadísticas generales</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<a href="inicio-trabajador">Inicio</a> 
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
							<div class="caption">Últimos partes insertados</div>
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
									<?php echo $_smarty_tpl->tpl_vars['vista']->value;?>

									
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