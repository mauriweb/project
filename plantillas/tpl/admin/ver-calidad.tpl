<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        {include file="admin/head.tpl"}
        <!-- =======================================
        
        FIN HEAD
        
        ======================================= -->	
        
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/select2/select2_metro.css" />
	<link rel="stylesheet" href="plantillas/assets/plugins/data-tables/DT_bootstrap.css" />
	<!-- END PAGE LEVEL STYLES -->
     {literal}
    <style type="text/css">
		th, tr{
			text-align:center;
		}
		tr input{
			text-align:center
		}
			
	</style>
    {/literal}
    	
</head>

<body class="page-header-fixed">
        <!-- =======================================
        
        MENU
        
        ======================================= -->
        {include file="admin/menu.tpl"}		
        <!-- =======================================
        
        FIN MENU
        
        ======================================= -->
        <div class="page-container">
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
               <!-- ======================================= MENU LATERAL ======================================= -->
            {include file="admin/menuLateral.tpl"}		
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
                            <form method="post" action="ver-calidad" id="filtro">
                            	<div class="col-md-12">
                                        <div class="col-md-4">
                                                    <select class="form-control" name="principal" id="principal" class="select2me">
                                                    <option value="">Carpeta principal</option>
                                                        {$carpetasPrin}
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
                                        <th>Borrar</th>
									</tr>
								</thead>
								<tbody>
									{$calidad}
                                    
                                    
                                   
                                    
									
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
        {include file="admin/pie.tpl"}		
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
				{$triggerChange}
				
				jQuery('#actualizar').click(function(){
				   jQuery('#filtro').submit();	 							
			   });
			  
            });
        </script>
        <!-- END JAVASCRIPTS -->
</body>
</html>
