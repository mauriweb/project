<?php
//	include the calendar file
$the_file="ac-includes/cal.inc.php";
if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
else		require_once($the_file);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>
	
		
		<link rel="stylesheet" href="<?php echo AC_DIR_CSS; ?>avail-calendar.css">
        
        
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        	<meta charset="utf-8" />
	<title>Acero estudio | Inicio</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">
    <!--DOMINIO CANONICAL///////////////////////////////////////-->
    <base href="http://www.acero.xxx"/>
    <link rel="canonical" href="http://www.acero.xxx//inicio"/>
	<!--FIN DOMINIO CANONICAL///////////////////////////////////////-->
	<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	<link href="../plantillas/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="../plantillas/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="../plantillas/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
	<link href="../plantillas/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
	<link href="../plantillas/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
	<link href="../plantillas/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
	<link href="../plantillas/assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
	<link href="../plantillas/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL PLUGIN STYLES -->
	<!-- BEGIN THEME STYLES --> 
	<link href="../plantillas/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="../plantillas/assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="../plantillas/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="../plantillas/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="../plantillas/assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
	<link href="../plantillas/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="../plantillas/assets/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />

        <!-- =======================================
        
        FIN HEAD
        
        ======================================= -->		
	</head>
	<body class="page-header-fixed">
    
    
        <!-- =======================================
        
        MENU
        
        ======================================= -->
        	<!-- BEGIN HEADER -->   
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="header-inner">
			<!-- BEGIN LOGO -->  
			<a class="navbar-brand" href="inicio" style="padding-top:10px;">
			<img src="../plantillas/assets/img/logo.png" alt="logo" class="img-responsive" />
			</a>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER --> 
			<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="../plantillas/assets/img/menu-toggler.png" alt="" />
			</a> 
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="imagenes/imgTrabajadores/SusanaAnton.png"/>
					<span class="username">Susana Anton</span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="javascript:;" id="trigger_fullscreen"><i class="fa fa-move"></i> Pantalla completa</a></li>
						<li><a href="login.html"><i class="fa fa-key"></i> Salir</a></li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
    <div class="clearfix"></div>		
        <!-- =======================================
        
        FIN MENU
        
        ======================================= -->
        <div class="page-container">
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
               <!-- ======================================= MENU LATERAL ======================================= -->
            <!-- BEGIN SIDEBAR MENU -->        
			<ul class="page-sidebar-menu">
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
                <li style="padding-bottom:10px;"></li>
				<li class="start active">
					<a href="inicio">
					<i class="fa fa-home"></i> 
					<span class="title">Inicio</span>
					<span class="selected"></span>
					</a>
				</li>
				<li class="">
					<a href="#">
					<i class="fa fa-suitcase"></i> 
					<span class="title">Proyectos</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="proyectos">Ver todos</a>
						</li>
                        <li >
							<a href="add-proyectos"><span class="badge badge-roundless badge-success"> + </span>Alta</a>
						</li>
                        
					</ul>
				</li>
                <li class="">
					<a href="#">
					<i class="fa fa-user"></i> 
					<span class="title">Clientes</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="clientes">Ver todos</a>
						</li>
                        <li >
							<a href="add-clientes"><span class="badge badge-roundless badge-success"> + </span>Insertar</a>
						</li>
                        
					</ul>
				</li>
                <li class="">
					<a href="#">
					<i class="fa fa-group"></i> 
					<span class="title">Empleados</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="empleados">Ver todos</a>
						</li>
                        <li >
							<a href="add-empleados"><span class="badge badge-roundless badge-success"> + </span>Insertar</a>
						</li>
                        <li >
							<a href="archivos-adjuntos-empleados"><span class="badge badge-roundless badge-success"> + </span>Adjuntar archivos</a>
						</li>
                        <li >
							<a href="readmitir-empleados"><span class="badge badge-roundless badge-success"> + </span>Readmitir</a>
						</li>
                        
					</ul>
				</li>
                <li class="">
					<a href="#">
					<i class="fa fa-briefcase"></i> 
					<span class="title">Pedidos</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="pedidos">Ver todos</a>
						</li>
                        <li >
							<a href="add-pedidos"><span class="badge badge-roundless badge-success"> + </span>Alta</a>
						</li>
                        
					</ul>
				</li>
                <li class="">
					<a href="#">
					<i class="fa fa-euro"></i> 
					<span class="title">Tarifas</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="tarifas">Ver todas</a>
						</li>
                        <li >
							<a href="add-tarifas"><span class="badge badge-roundless badge-success"> + </span>Insertar</a>
						</li>
                        
					</ul>
				</li>
                <li class="start active">
					<a href="#">
					<i class="fa fa-calendar"></i> 
					<span class="title">Calendario</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
                    	<li >
							<a href="calendar/index.php">Ver calendario</a>
						</li>
                        <li >
							<a href="calendar/ac-admin/index.php">Edita Calendario</a>
						</li>
                        
					</ul>
				</li>
                <li class="">
					<a href="#">
					<i class="fa fa-archive"></i> 
					<span class="title">Partes</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="partes-de-material">Partes material</a>
						</li>
                        <li >
							<a href="partes-de-trabajo">Partes de trabajo</a>
						</li>
                        <li >
							<a href="alta-parte-de-material"><span class="badge badge-roundless badge-success"> + </span>Alta parte material</a>
						</li>
                         <li >
							<a href="alta-parte-de-trabajo"><span class="badge badge-roundless badge-success"> + </span>Alta parte trabajo</a>
						</li>
                        <li >
							<a href="ver-codigo-material-insertar">Ver cÃ³digos de material</a>
						</li>
                        <li >
							<a href="codigo-material-insertar"><span class="badge badge-roundless badge-success"> + </span>Insertar Cod.material</a>
						</li>
					</ul>
				</li>
                <li class="">
					<a href="#">
					<i class="fa  fa-truck"></i> 
					<span class="title">Distribuidores</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="distribuidores">Ver todos</a>
						</li>
                        <li >
							<a href="add-distribuidores"><span class="badge badge-roundless badge-success"> + </span>Alta de distribuidores</a>
						</li>
                        
					</ul>
				</li>
                <li class="">
					<a href="#">
					<i class="fa  fa-laptop"></i> 
					<span class="title">Usuarios aplicaciÃ³n</span>
                    <span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li >
							<a href="usuarios">Ver todos</a>
						</li>
                        <li >
							<a href="add-usuarios"><span class="badge badge-roundless badge-success"> + </span>Alta de usuarios</a>
						</li>
                        
					</ul>
				</li>
				
			</ul>
			<!-- END SIDEBAR MENU -->		
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
						Acero <small>estadisticas generales</small>
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
			<!--CALENDARIO-->
	<div id="cal_wrapper">
		<div id="cal_controls">
			<div id="cal_prev" title="<?php echo $lang["prev_X_months"]; ?>"><img src="<?php echo AC_DIR_IMAGES; ?>icon_prev.gif" class="cal_button"></div>
			<div id="cal_next" title="<?php echo $lang["next_X_months"]; ?>"><img src="<?php echo AC_DIR_IMAGES; ?>icon_next.gif" class="cal_button"></div>
			
			<!-- optional calendar change options -->
			<div id="cal_admin">
				<form method="get">
				<select name="id_item" class="select" onChange="this.form.submit();">
					<?php echo sel_list_items($_REQUEST["id_item"]); ?>
				</select>
				<!--<select name="lang" class="select" onChange="this.form.submit();">
						<?php echo $list_languages_web; ?>
					</select>-->
				</form>
			</div>
			<!-- end options -->
		</div>
		<div id="the_months">
			<?php echo $calendar_months; ?>
		</div>
		<div id="key_wrapper">
			<?php echo $calendar_states; ?>
			<div id="footer_data" style="clear:both;">
				<?php echo $lang["last_update"].': '.get_cal_update_date(ID_ITEM); ?>
			</div>
		</div>
	</div>
	<script type="text/javascript">		
	//	define vars
	var url_ajax_cal 		= '<?php echo AC_DIR_AJAX; ?>calendar.ajax.php'; // ajax file for loading calendar via ajax
	var img_loading_day		= '<?php echo AC_DIR_IMAGES; ?>ajax-loader-day.gif'; // animated gif for loading	
	var img_loading_month	= '<?php echo AC_DIR_IMAGES; ?>ajax-loader-month.gif'; // animated gif for loading	
	//	don't change these values
	var id_item 			= '<?php echo ID_ITEM; ?>'; // id of item to be modified (via ajax)
	var lang 				= '<?php echo AC_LANG; ?>'; // language
	var months_to_show		= <?php echo AC_NUM_MONTHS; ?>; // number of months to show
	var clickable_past		= '<?php echo AC_ACTIVE_PAST_DATES; ?>'; // previous dates
	</script>
	<script type="text/javascript" src="<?php echo AC_DIR_JS; ?>mootools-core-1.3.2-full-compat-yc.js"></script>
	<script type="text/javascript" src="<?php echo AC_DIR_JS; ?>mootools-cal-public.js"></script>
    <!--END CALENDAR-->
    
			<div class="clearfix"></div>
            
            
			
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
        
                 
        <!-- =======================================
        
        PIE
        
        ======================================= -->
        <!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			2013 &copy; Acero estudio.
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="fa fa-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<!--[if lt IE 9]>
	<script src="plantillas/assets/plugins/respond.min.js"></script>
	<script src="plantillas/assets/plugins/excanvas.min.js"></script> 
	<![endif]-->   
	<script src="../plantillas/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>   
	<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="../plantillas/assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<script src="../plantillas/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="../plantillas/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="../plantillas/assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
	<script src="../plantillas/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
	<script src="../plantillas/assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
	<script src="../plantillas/assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
	<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
	<script src="../plantillas/assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
	<script src="../plantillas/assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
	<!-- END PAGE LEVEL PLUGINS -->
			
        <!-- =======================================
        
        FIN PIE
        
        ======================================= -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
			<script src="../plantillas/assets/scripts/app.js" type="text/javascript"></script>
            <script src="../plantillas/assets/scripts/tasks.js" type="text/javascript"></script>        
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