<?php /* Smarty version Smarty-3.1.12, created on 2013-12-03 12:30:22
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/inicio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:263746256529cb3509e8316-31427603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '578f7aa8828c0d84e490dba1c28b7d9f4feb25e8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/inicio.tpl',
      1 => 1386070218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263746256529cb3509e8316-31427603',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_529cb350a2f711_80485113',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529cb350a2f711_80485113')) {function content_529cb350a2f711_80485113($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="es">

<head>
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <!-- =======================================
        
        FIN HEAD
        
        ======================================= -->		
</head>

<body class="page-header-fixed">
        <!-- =======================================
        
        MENU
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <!-- =======================================
        
        FIN MENU
        
        ======================================= -->
        <div class="page-container">
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
               <!-- ======================================= MENU LATERAL ======================================= -->
            <?php echo $_smarty_tpl->getSubTemplate ("menuLateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
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
							<i class="fa fa-home"></i>
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
										<td><div class="cont-col1"><img alt="" src="imagenes/imgTrabajadores/SusanaAnton.png"/> Susana Antón</div></td>
										<td>Jnacher estudio</td>
										<td class="numeric">P14-032</td>
										<td class="numeric">00 / 02 / 2013</td>
									</tr>
                                    
                                    <tr>
										<td><div class="cont-col1"><img alt="" src="imagenes/imgTrabajadores/SusanaAnton.png"/> Susana Antón</div></td>
										<td>Jnacher estudio</td>
										<td class="numeric">P14-032</td>
										<td class="numeric">00 / 02 / 2013</td>
									</tr>
                                    
                                    <tr>
										<td><div class="cont-col1"><img alt="" src="imagenes/imgTrabajadores/SusanaAnton.png"/> Susana Antón</div></td>
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
        <?php echo $_smarty_tpl->getSubTemplate ("pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <!-- =======================================
        
        FIN PIE
        
        ======================================= -->	
</body>
</html>
<?php }} ?>