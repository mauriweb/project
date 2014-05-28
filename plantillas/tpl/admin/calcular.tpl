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
						Acero <small>calculo de horas</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
                    	<li class="btn-group">
							
							<a href="informes-trabajo" class="btn red dropdown-toggle"><span style="color:#FFF;"><i class="fa fa-reply-all"></i> Volver a informes avanzados </span></a>
							
						</li>
						<li>
							<a href="inicio">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Calculo, facturación
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
							<div class="caption">{$cliente} (nombre del cliente)</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
							</div>
						</div>
						<div class="portlet-body flip-scroll">
                        	<div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-12">
                                         
                                         
                                         
                                         <div class="col-md-12" style="margin-top:10px;">
                                            <div class="col-md-8">
                                                   
                                            </div>
                                            <div class="col-md-4">
                                            <form method="post" action="calcular" id="filtro" >
                                            <input type="hidden" name="clienteFiltro" value="1">
                                            <input type="hidden" name="ids" value="{$ids}">
                                            <button  style="float:right;" id="pdf" class="btn dropdown-toggle red" data-toggle="dropdown"><i class="fa fa-download"></i> Imprimir pdf </button>
                                            <button style="margin-right:5px; float:right;" id="excel"  class="btn dropdown-toggle green" data-toggle="dropdown"><i class="fa fa-th"></i> Guardar Excel</button>
                                            </form>
                                            </div>
                                         </div>
                                         
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
							<table class="table table-bordered table-striped table-condensed flip-content">
								<thead class="flip-content">
									<tr>
										<th colspan="8">{$cliente} (nombre del cliente)</th>
                                        <th>Nº Factura</th>
                                        <th colspan="2">{$factura}</th>
									</tr>
                                    </thead>
                                    </table>
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                   {$vista}
                                   </table>
                                
                                
							</table>

                                
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
			   
			   
			   jQuery('#excel, #pdf').click(function(){
				   				jQuery('#excell, #pdff, #calcularr').remove();								   
				   if(jQuery(this).attr('id')=='excel'){
				       jQuery('#filtro').append('<input type="hidden" name="excel" id="excell">');
					   jQuery('#filtro').submit();		
				   }else if(jQuery(this).attr('id')=='pdf'){
				       jQuery('#filtro').append('<input type="hidden" name="pdf" id="pdff"><input type="hidden" name="calcular" id="calcularr">');
					   jQuery('#filtro').submit();		
				   }							
			   });
            });
        </script>
        <!-- END JAVASCRIPTS -->
</body>
</html>
