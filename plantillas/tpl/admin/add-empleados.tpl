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
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/select2/select2_metro.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/clockface/css/clockface.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-datepicker/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/jquery-multi-select/css/multi-select.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css"/>
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
	<!-- END PAGE LEVEL STYLES -->
    {literal}
    <style type="text/css">
		.codigo{
			margin-top:7px;
			margin-bottom:7px;
			text-align:left;
			position:relative;
			padding-right:0px;
			font-weight:bold;
			font-size:12px;	
		}
		
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
						Insertar empleados <small>aplicación Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							
							<a href="empleados" class="btn red dropdown-toggle"><span style="color:#FFF;">Ver empleados</span></a>
							
						</li>
						<li>
							<i class="inicio"></i>
							<a href="inicio">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Insertar empleados
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">Insertar empleados</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="add-empleados" method="post" id="form_sample_1" class="form-horizontal form-bordered form-row-stripped">
                            {$idEmp}
								<div class="form-body">
                                {$mensaje}{$repetido}
                                	<div class="form-group">
										<label class="control-label col-md-3">Sede</label>
										<div class="col-md-4">
											<select name="frm-sede" class="select2me form-control">
                                            	<option {$es} value="ES">España</option>
                                                <option {$pe} value="PE">Perú</option>
											</select>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Jornada Laboral</label>
										<div class="col-md-4">
											<select name="frm-jornadaLaboral" class="select2me form-control">
                                            	<option {$jor_n} value="N">Normal</option>
                                                <option {$jor_r} value="R">Reducida</option>
											</select>
										</div>
									</div>
                                    {if !$edita}
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Contraseña</label>
													<div class="col-md-4 codigo">
														<span class="control-labe">(se genera automáticamente, número del DNI)</span>
													</div>
									</div>
                                    {/if}
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Nombre</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="frm-nombre" value="{$data.nombre}" placeholder="Nombre">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Primer apellidos</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="Apellidos"  name="frm-apellido" value="{$data.apellido}">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Segundo apellidos</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="Apellidos" name="frm-apellidoDos" value="{$data.apellidoDos}">
													</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Fecha de nacimiento</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_date2" type="text"  name="frm-nacimiento" value="{$data.nacimiento}"  />
											<span class="help-block">dd/mm/yyyy</span>
										</div>
									</div>	
                                    <div class="form-group">
													<label  class="col-md-3 control-label">DNI</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="99999999-X"  name="frm-dni" value="{$data.dni}">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Teléfono</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="+99 999 99 99"  name="frm-tel" value="{$data.tel}">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Teléfono secundario</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="+99 999 99 99"  name="frm-telDos" value="{$data.telDos}">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Email</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="ejemplo@ejemplo.com"  name="frm-email" value="{$data.email}">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Email secundarioa</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="ejemplo@ejemplo.com"  name="frm-emailDos" value="{$data.emailDos}">
													</div>
									</div>
                                    <div class="form-group">


										<label class="control-label col-md-3">País</label>
										<div class="col-md-4">
											<select  name="frm-pais"   id="select2_sample4" class="form-control select2">
                                            	{$paises}
											</select>
										</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label"  >Ciudad</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="Insertar ciudad" name="frm-ciudad" value="{$data.ciudad}">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Población</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="Insertar población"  name="frm-poblacion" value="{$data.poblacion}">
														
													</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Dirección</label>
										<div class="col-md-9">
											<input type="text" class="form-control" maxlength="100"  id="maxlength_placement"  name="frm-direccion" value="{$data.direccion}">
											<span class="help-block">
											Máximo 100 caracteres
											</span>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Categoria profesional</label>
										<div class="col-md-4">
											<select class="form-control select2me"  name="frm-categoriaProfesional" >
                                            	<option value="ES">E101</option>
                                                <option value="ES">E101</option>
                                                <option value="ES">E101</option>
                                                <option value="ES">E101</option>
                                                <option value="ES">E101</option>
											</select>
										</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Nº Cuenta Bancaria</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="C102"  name="frm-ctaBanco" value="{$data.ctaBanco}">
													</div>
									</div>
                                     <div class="form-group">
													<label  class="col-md-3 control-label">Nº Seguridad Social</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="C102"  name="frm-sSocial" value="{$data.sSocial}">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Grupo cotización</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="C102"  name="frm-grupoCotiz" value="{$data.grupoCotiz}">
													</div>
									</div>
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn red" name="enviar">Enviar</button>
										<button type="button" class="btn default">Cancelar</button>                              
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
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
        <script type="text/javascript" src="plantillas/assets/plugins/fuelux/js/spinner.min.js"></script>
		<script type="text/javascript" src="plantillas/assets/plugins/ckeditor/ckeditor.js"></script>  
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/clockface/js/clockface.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
        <script type="text/javascript" src="plantillas/assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/jquery-multi-select/js/jquery.quicksearch.js"></script>   
        <script src="plantillas/assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript" ></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="plantillas/assets/scripts/app.js"></script>
        <script src="plantillas/assets/scripts/form-components.js"></script>     
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function() {       
               // initiate layout and plugins
               App.init();
               FormComponents.init();
            });
        </script>
        <!-- BEGIN GOOGLE RECAPTCHA -->
        <script type="text/javascript">
            var RecaptchaOptions = {
               theme : 'custom',
               custom_theme_widget: 'recaptcha_widget'
            };
        </script>
        <script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LcrK9cSAAAAALEcjG9gTRPbeA0yAVsKd8sBpFpR"></script>
        <!-- END GOOGLE RECAPTCHA -->
		<!-- END JAVASCRIPTS -->   
        
<!--                                            <script type="text/javascript">
											
$(document).ready(function(){
var i='array(';
														 var coma='';						   
$('#select2_sample4s option').each(function(index) {
    i+= coma+'"'+$(this).val() + '"=> "' + $(this).text()+'"';
	coma=', ';
});
						   i+=')';console.log(i);
						   });
											
</script>-->
</body>
</html>
