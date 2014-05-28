<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        <link rel="stylesheet" href="{$AC_DIR_CSS}avail-calendar.css">
        {include file="admin/head.tpl"}
        <!-- =======================================
        
        FIN HEAD
        
        ======================================= -->		
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
						Acero <small>estadísticas generales</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="inicio">Inicio</a> 
						&gt; Calendario</li>
						
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<div class="clearfix"></div>
            
            <!--CALENDARIO-->
	<div id="cal_wrapper">
		<div id="cal_controls">
			<div id="cal_prev" title="{$prev_X_months}"><img src="{$AC_DIR_IMAGES}icon_prev.gif" class="cal_button"></div>
			<div id="cal_next" title="{$next_X_months}"><img src="{$AC_DIR_IMAGES}icon_next.gif" class="cal_button"></div>
			
			<!-- optional calendar change options -->
			<div id="cal_admin">
				<form method="get">
				<select name="id_item" class="select" onChange="this.form.submit();">
					{$id_item}
				</select>
				<!--<select name="lang" class="select" onChange="this.form.submit();">
						<?php echo $list_languages_web}
					</select>-->
				</form>
			</div>
			<!-- end options -->
		</div>
		<div id="the_months">
			{$calendar_months}
		</div>
		<div id="key_wrapper">
			{$calendar_states}
			<div id="footer_data" style="clear:both;">
				{$last_update_ID_ITEM}
			</div>
		</div>
	</div>
	<script type="text/javascript">		
	//	define vars
	var url_ajax_cal 		= '{$AC_DIR_AJAX}calendar.ajax.php'; // ajax file for loading calendar via ajax
	var img_loading_day		= '{$AC_DIR_IMAGES}ajax-loader-day.gif'; // animated gif for loading	
	var img_loading_month	= '{$AC_DIR_IMAGES}ajax-loader-month.gif'; // animated gif for loading	
	//	don't change these values
	var id_item 			= '{$ID_ITEM}'; // id of item to be modified (via ajax)
	var lang 				= '{$AC_LANG}'; // language
	var months_to_show		= '{$AC_NUM_MONTHS}'; // number of months to show
	var clickable_past		= '{$AC_ACTIVE_PAST_DATES}'; // previous dates
	</script>
	<script type="text/javascript" src="{$AC_DIR_JS}mootools-core-1.3.2-full-compat-yc.js"></script>
	<script type="text/javascript" src="{$AC_DIR_JS}mootools-cal-public.js"></script>
    <!--END CALENDAR-->
			
			<div class="clearfix"></div>
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
