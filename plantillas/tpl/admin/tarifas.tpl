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
									{$tarifasDel}
                                    
                                    
                                   
                                    
									
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
									{$tarGr}
                                    
                                    
                                   
                                    
									
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
									{$tarTop}
                                    
                                   
                                    
									
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
									{$tarInf}
                                    
                                    
                                   
                                    
									
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
        {include file="admin/pie.tpl"}		
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
