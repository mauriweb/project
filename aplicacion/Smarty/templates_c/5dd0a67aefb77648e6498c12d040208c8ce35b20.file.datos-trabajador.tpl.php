<?php /* Smarty version Smarty-3.1.12, created on 2014-05-27 16:51:23
         compiled from "C:\xampp\htdocs\acero\plantillas\tpl\trabajador\datos-trabajador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1248352ea96c683d560-35426023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dd0a67aefb77648e6498c12d040208c8ce35b20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acero\\plantillas\\tpl\\trabajador\\datos-trabajador.tpl',
      1 => 1401202279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1248352ea96c683d560-35426023',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52ea96c695b6c8_95991249',
  'variables' => 
  array (
    'img' => 0,
    'dataT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea96c695b6c8_95991249')) {function content_52ea96c695b6c8_95991249($_smarty_tpl) {?><!DOCTYPE html>
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
											<li><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" class="img-responsive" alt="" /> 
												<a href="editar-imagen" class="profile-edit">editar</a>
											</li>
										</ul>
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-12 profile-info">
												<h1><?php echo $_smarty_tpl->tpl_vars['dataT']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['dataT']->value['apellido'];?>
 <?php echo $_smarty_tpl->tpl_vars['dataT']->value['apellidoDos'];?>
</h1>
												<div class="col-md-6">
                                                    <h3>Datos:</h3>
                                                    <div class="well">
                                                        <address>
                                                        <strong>Fecha de nacimiento.</strong><br> 
                                                        <?php echo $_smarty_tpl->tpl_vars['dataT']->value['nacimiento'];?>

                                                        </address>
                                                        <address>
                                                        <strong>DNI.</strong><br> <?php echo $_smarty_tpl->tpl_vars['dataT']->value['dni'];?>

                                                        </address>
                                                        <address>
                                                        <strong>Nº Cuenta Bancaria.</strong><br> <?php echo $_smarty_tpl->tpl_vars['dataT']->value['ctaBanco'];?>

                                                        </address>
                                                        <address>
                                                        <strong>Nº Seguridad Social.</strong><br> <?php echo $_smarty_tpl->tpl_vars['dataT']->value['sSocial'];?>

                                                        </address>
                                                        <address>
                                                        <strong>Grupo cotización.</strong><br> <?php echo $_smarty_tpl->tpl_vars['dataT']->value['grupoCotiz'];?>

                                                        </address>
                                                        <address>
                                                         <strong>Categoría profesional.</strong><br> <?php echo $_smarty_tpl->tpl_vars['dataT']->value['categoriaProfesional'];?>

                                                        </address>
                                                    </div>
                                                </div>
												<div class="col-md-6">
                                                    <h3>Direcciones:</h3>
                                                    <div class="well">
                                                        <address>
                                                        <strong>Pais.</strong>
                                                        <br>
                                                        <?php echo $_smarty_tpl->tpl_vars['dataT']->value['direccion'];?>

                                                        <br>
                                                        <?php echo $_smarty_tpl->tpl_vars['dataT']->value['poblacion'];?>
, (<?php echo $_smarty_tpl->tpl_vars['dataT']->value['ciudad'];?>
).
                                                        <br>
                                                        <?php echo $_smarty_tpl->tpl_vars['dataT']->value['pais'];?>

                                                        </address>
                                                        
                                                        <address>
                                                        <strong>Teléfono.</strong>
                                                        <br>
                                                        <?php echo $_smarty_tpl->tpl_vars['dataT']->value['tel'];?>

                                                        </address>
                                                        <address>
                                                        <strong>Email.</strong>
                                                        <br>
                                                        <?php echo $_smarty_tpl->tpl_vars['dataT']->value['email'];?>

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