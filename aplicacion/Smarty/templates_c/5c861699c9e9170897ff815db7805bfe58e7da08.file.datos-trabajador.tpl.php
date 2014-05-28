<?php /* Smarty version Smarty-3.1.12, created on 2014-01-27 00:04:55
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/datos-trabajador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130931025152af18fd946c77-39989600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c861699c9e9170897ff815db7805bfe58e7da08' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/datos-trabajador.tpl',
      1 => 1390774922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130931025152af18fd946c77-39989600',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52af18fd996233_83120328',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52af18fd996233_83120328')) {function content_52af18fd996233_83120328($_smarty_tpl) {?><!DOCTYPE html>
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
    <link href="plantillas/assets/css/pages/profile.css" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL STYLES -->
    	
</head>

<body class="page-header-fixed page-sidebar-closed">
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
						Bienvenido Nombre Apellidos <small> esta en sus datos personales.</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
					
						<li>
							<i class="inicio"></i>
							<a href="inicio-trabajador">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Datos personales
							
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			
            <div class="row profile">
				<div class="col-md-12">
					<!--BEGIN TABS-->
					<div class="tabbable tabbable-custom tabbable-full-width">
						
						<div class="tab-content">
							<div class="tab-pane active">
								<div class="row">
									<div class="col-md-3">
										<ul class="list-unstyled profile-nav">
											<li><img src="plantillas/assets/img/profile/profile-img.png" class="img-responsive" alt="" /> 
												<a href="editar-imagen" class="profile-edit">editar</a>
											</li>
										</ul>
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-12 profile-info">
												<h1>Nombre Apellido1 Apellido2</h1>
												<div class="col-md-6">
                                                    <h3>Datos:</h3>
                                                    <div class="well">
                                                        <address>
                                                        <strong>Fecha de nacimiento.</strong><br> 17 / 09 / 2001
                                                        </address>
                                                        <address>
                                                        <strong>DNI.</strong><br> 55555555-M
                                                        </address>
                                                        <address>
                                                        <strong>Nº Cuenta Bancaria.</strong><br> 55555555764523674
                                                        </address>
                                                        <address>
                                                        <strong>Nº Seguridad Social.</strong><br> 55555555-M
                                                        </address>
                                                        <address>
                                                        <strong>Grupo cotización.</strong><br> 55555555-M
                                                        </address>
                                                        <address>
                                                         <strong>Categoría profesional.</strong><br> 55555555-M
                                                        </address>
                                                    </div>
                                                </div>
												<div class="col-md-6">
                                                    <h3>Direcciones:</h3>
                                                    <div class="well">
                                                        <address>
                                                        <strong>Pais.</strong>
                                                        <br>
                                                        C, dirección n20
                                                        <br>
                                                        Albal, (Valencia).
                                                        <br>
                                                        <abbr title="Phone">CP:</abbr>
                                                        48488
                                                        </address>
                                                        
                                                        <address>
                                                        <strong>Teléfono.</strong>
                                                        <br>
                                                        555 555555
                                                        </address>
                                                        <address>
                                                        <strong>Email.</strong>
                                                        <br>
                                                        ejemplo@ejemplo.com
                                                        </address>
                                                    </div>
                                                </div>
											</div>
											<!--end col-md-8-->
										</div>
										<!--end row-->
										
									</div>
								</div>
							</div>
							<!--tab_1_2-->
							
							<!--end tab-pane-->
						</div>
					</div>
					<!--END TABS-->
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