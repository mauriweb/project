<?php /* Smarty version Smarty-3.1.12, created on 2014-04-30 17:17:56
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/ver-archivos-de-calidad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151189225752e58b18e3b839-52682349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a22f20aff916efee78ccffc3bcee9be2edda35c7' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/pruebacinco/plantillas/tpl/trabajador/ver-archivos-de-calidad.tpl',
      1 => 1396902795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151189225752e58b18e3b839-52682349',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52e58b18e8c289_91006610',
  'variables' => 
  array (
    'carpetasPrin' => 0,
    'calidad' => 0,
    'triggerChange' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e58b18e8c289_91006610')) {function content_52e58b18e8c289_91006610($_smarty_tpl) {?><!DOCTYPE html>
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
						Lista de archivos <small> Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="inicio"></i>
							<a href="inicio">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Lista de archivos
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
							<div class="caption">Archivos</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="javascript:;" class="reload"></a>
							</div>
						</div>
                       
						<div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                            	 <form method="post" action="ver-archivos-de-calidad" id="filtro">
                            	<div class="col-md-12">
                                        <div class="col-md-4">
                                                    <select class="form-control" name="principal" id="principal" class="select2me">
                                                    <option value="">Carpeta principal</option>
                                                        <?php echo $_smarty_tpl->tpl_vars['carpetasPrin']->value;?>

                                                    </select>
                                        </div>
                                        <div class="col-md-4">
                                                    <select class="form-control" name="secundaria" id="frm-idCarpetaSec" class="select2me">
                                                        <option value="">Carpeta secundaria</option>
                                                        
                                                    </select>
                                        </div>
                                        <div class="col-md-4">
                                        <button  class="btn dropdown-toggle red" id="actualizar" data-toggle="dropdown"><i class="fa fa-undo"></i> Actualizar</button>
                                        </div>
                                     </div>
                                     </form>
                                      <div style="clear:both;"></div>
                                     
                                     
                                     
                                </div>
                                <div style="clear:both;"></div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
									<tr>
										<th>Carpeta principal</th>
                                        <th>Carpeta secundaria</th>
                                        <th>Nombre archivo</th>
										<th>Descargar</th>
									</tr>
								</thead>
								<tbody>
									<?php echo $_smarty_tpl->tpl_vars['calidad']->value;?>

                                    
                                    
                                   
                                    
									
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
			   
			    var llena=0;
			   $('#principal').change(function(){
			     $.post('aplicacion/ajax/ajax.php', { idPrin : $(this).val() }, function(data) {
				  $('#frm-idCarpetaSec').html(data);
				  
				  if(llena){
				       jQuery('#frm-idCarpetaSec').val(llena); 
				  }
				}); 
				
				});
				<?php echo $_smarty_tpl->tpl_vars['triggerChange']->value;?>

				
				jQuery('#actualizar').click(function(){
				   jQuery('#filtro').submit();	 							
			   });
            });
        </script>
        <!-- END JAVASCRIPTS -->
</body>
</html>
<?php }} ?>