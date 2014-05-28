<?php
session_start();

/*var_dump($_SESSION);array(4) { ["admin_id"]=> string(1) "1" ["admin_name"]=> string(5) "admin" ["admin_lang"]=> string(2) "es" ["admin_level"]=> string(1) "1" } */
$_SESSION['admin_id']='1';
$_SESSION['admin_name']='admin';
$_SESSION['admin_lang']='es';
$_SESSION['admin_level']='1';
//	general config
$the_file="../ac-config.inc.php";
if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
else		require_once($the_file);

//	db connection
$the_file=AC_INLCUDES_ROOT."db_connect.inc.php";
if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
else		require_once($the_file);

//	common vars (db and lang)
$the_file=AC_INLCUDES_ROOT."common.inc.php";
if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
else		require_once($the_file);
	
	
//	calendar functions
$the_file=AC_INLCUDES_ROOT."functions.inc.php";
if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
else		require_once($the_file);

//	admin functions
$the_file=AC_INLCUDES_ROOT."functions-admin.inc.php";
if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
else		require_once($the_file);

//	define language
if(isset($_SESSION["admin_lang"]))	define("AC_LANG", $_SESSION["admin_lang"]);
else 								define("AC_LANG", AC_DEFAULT_AC_LANG);


//	include lang file
$the_file=AC_DIR_AC_LANG.AC_LANG.".lang.php";
if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
else		require_once($the_file);

//	define page to show
/*var_dump($_SESSION);array(4) { ["admin_id"]=> string(1) "1" ["admin_name"]=> string(5) "admin" ["admin_lang"]=> string(2) "es" ["admin_level"]=> string(1) "1" } */
if(!isset($_SESSION["admin_id"]))	$_REQUEST["page"]="admin-login";
elseif(!isset($_REQUEST["page"])) 	$_REQUEST["page"]="items";
define("ADMIN_PAGE", $_REQUEST["page"]);

$page_title=$lang["admin_".ADMIN_PAGE.""];


if(ADMIN_PAGE=="admin-login"){
	$this_title="";
	$admin_menu="";
	$the_file=AC_DIR_ADMIN."admin-login.admin.php";
	if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
	else		require_once($the_file);
}else{
	//	include menu file
	$the_file=AC_DIR_ADMIN."admin-menu.inc.php";
	if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
	else		require_once($the_file);
		
	
	//	define condition for users
	$sql_condition="";
	if($_SESSION["admin_level"]>1)	$sql_condition=" AND b.id_user=".$_SESSION["admin_id"];
	
	
	//	check user is allowed to see this page
	if(!multi_array_key_exists($_REQUEST["page"],$menu[$_SESSION["admin_level"]])){
		$the_file=AC_DIR_ADMIN."forbidden.admin.php";
	}else{
		$the_file=AC_DIR_ADMIN.ADMIN_PAGE.".admin.php";
	}
	//	now inlcude the page defined
	if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
	else		require_once($the_file);
	
	$this_title='
	<div id="title">
		<div class="float_l" ><h1>>> '.$page_title.' '.$page_title_add.'</h1></div>
		<div class="float_r">'.$bt_add.'</div>
		<div class="clear"></div>
	</div>
	';
}


if(isset($_REQUEST["msg"])) $warning.=$lang["msg_".$_REQUEST["msg"].""];
if(isset($warning)){
	$xtra_moo.="roar.alert('Information','".$warning."');";
}
/*echo '<pre>';
print_r($_SERVER);
echo '</pre>';*/
$root='http://'.$_SERVER['SERVER_NAME'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>

<meta charset="utf-8" />
	<title>Acero estudio | Inicio</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">
    <!--DOMINIO CANONICAL///////////////////////////////////////-->
    
    <link rel="canonical" href="http://www.acero.xxx//inicio"/>
	<!--FIN DOMINIO CANONICAL///////////////////////////////////////-->
		
		
		<link rel="stylesheet" href="<?php echo AC_DIR_CSS; ?>reset.css">
		<link rel="stylesheet" href="css/admin-calendar.css">
		<link rel="stylesheet" href="css/admin.css">
		<link rel="stylesheet" href="css/mootools-roar.css">
		<link rel="stylesheet" type="text/css" media="screen" href="js/formcheck/theme/classic/formcheck.css"  />
		
		<script type="text/javascript" src="<?php echo AC_DIR_JS; ?>mootools-core-1.3.2-full-compat-yc.js"></script>
		<script type="text/javascript" src="<?php echo AC_DIR_JS; ?>mootools-more-1.3.2.1.js"></script>
		<script type="text/javascript" src="js/formcheck/lang/<?php echo AC_LANG; ?>.js"></script>
		<script type="text/javascript" src="js/mootools-formcheck.js"></script>
		<script type="text/javascript" src="js/mootools-roar.js"></script>
		<?php echo $xtra_js_files; ?>
		
		<script type="text/javascript">
		<?php echo $xtra_js; ?>
		var txtWarning = '<?php echo $lang["msg_warning"]; ?>';
		var txtOrderUpdateOK = '<?php echo $lang["msg_order_update_OK"]; ?>';
		var txtOrderUpdateKO = '<?php echo $lang["msg_order_update_KO"]; ?>';
		var txtStateModOK = '<?php echo $lang["msg_state_mod_OK"]; ?>';
		var txtStateModKO = '<?php echo $lang["msg_state_mod_KO"]; ?>';
		window.addEvent('domready', function() {
			var the_menu=$$('#menu li').setStyle("cursor","pointer");
			the_menu.addEvents({
			    'mouseover': function(){
			        var bg_color=this.getStyle("backgroundColor");
					this.highlight('#99ccff',bg_color); 
			    },
			    'click': function(){
			       	document.location.href=this.getChildren().get('href');
			    }
			});
			//	roar alerts
			var roar = new Roar({position: 'lowerRight',duration:'5000'});
			
			//	zebra
			$$('tbody tr:odd').addClass('odd');
		
			//	create sortables
			//	sortables
			if(document.id('sortable')){
				// row handles
				$$('.handles').setStyle('cursor','pointer').addEvent('mouseover',function(event){
					this.getParent().highlight();
				});
				
				
				var tblSortable=document.id('sortable');
				var sb = new Sortables('.list tbody', {
					handle: '.handles',
					clone: false,
					revert: true,
					constrain:true,
					onStart: function(el) { 
						el.setStyle('background','#99ccff');
					},
					onComplete: function(el) {
						el.setStyle('background','#99CCFF');
						var sort_order = '';
						$$('.list tbody tr').each(function(tr) { sort_order = sort_order +  tr.get('alt')  + '|'; });
						$('sort_order').value = sort_order;
						var order_field=tblSortable.get('field');
						var order_table=tblSortable.get('table');
						var req = new Request({
							url:'<?php echo AC_DIR_AJAX; ?>list_order.ajax.php',
							method:'get',
							autoCancel:true,
							data: {'sort_order':sort_order,'type':order_table,'order_field':order_field},
							onRequest: function() {
								//roar.alert('Order','Updating the sort order in the database.');
							},
							onSuccess: function() {
								roar.alert(''+txtWarning+' ',''+txtOrderUpdateOK+'');
							}
						}).send();
					}
				});
			}
			//update states
			var states=$$('.update_state').setStyle('cursor','pointer').addEvent('click',function(){
				//	define vars
				var el=$(this.id);
				var icon_states=new Array('<img src="icons/icon_cross.png">','<img src="icons/icon_tick.png">');
				var txtWarningOK=txtStateModOK;
				var txtWarningKO=txtStateModKO;
				var imgLoading='<img src=\"icons/ajax-loader.gif\">';
				//	ajax call to change state
				var myHTMLRequest = new Request({
					url:'../ac-includes/ajax/update-state.ajax.php',
					method:'post',
					async:false,
					data: {
						'type':this.get('rel'),
						'cur_state':this.get('state'),
						'id_item':this.id.replace('state_',''),
						'field':this.get('field')
						},
					onRequest: function() {
						el.set('html',imgLoading);
					},
					onComplete: function(responseText) {
						var newState=responseText;
						if(newState=='KO'){
							Sexy.alert(txtWarningKO);
						}else{
							el.set('state',newState);
							el.set('html',icon_states[newState]);
							roar.alert('State',txtWarningOK);
						}
					}
				}).send();
			});
			<?php
			echo $xtra_moo;
			?>
		});
		</script>
	
    
    <!-- =======================================
        
        HEAD
        
        ======================================= -->
        	
	<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	<link href="../../plantillas/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="../../plantillas/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="../../plantillas/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
	<link href="../../plantillas/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
	<link href="../../plantillas/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
	<link href="../../plantillas/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
	<link href="../../plantillas/assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
	<link href="../../plantillas/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL PLUGIN STYLES -->
	<!-- BEGIN THEME STYLES --> 
	<link href="../../plantillas/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="../../plantillas/assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="../../plantillas/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="../../plantillas/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="../../plantillas/assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
	<link href="../../plantillas/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="../../plantillas/assets/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />

        <!-- =======================================
        
        FIN HEAD
        
        ======================================= -->		
	</head>
	<body id="page_<?php echo ADMIN_PAGE; ?>" class="page-header-fixed">
    
    <?php var_dump($_SESSION); ?>ddddddddd
    
    

	
    
    
    
    
 <!-- =======================================
        
        MENU
        
        ======================================= -->
        	<!-- BEGIN HEADER -->   
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="header-inner">
			<!-- BEGIN LOGO -->  
			<a class="navbar-brand" href="inicio" style="padding-top:10px;">
			<img src="../../plantillas/assets/img/logo.png" alt="logo" class="img-responsive" />
			</a>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER --> 
			<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="../../plantillas/assets/img/menu-toggler.png" alt="" />
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
					<a href="<?php echo $root; ?>/inicio">
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
							<a href="<?php echo $root; ?>/proyectos">Ver todos</a>
						</li>
                        <li >
							<a href="<?php echo $root; ?>/add-proyectos"><span class="badge badge-roundless badge-success"> + </span>Alta</a>
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
							<a href="<?php echo $root; ?>/clientes">Ver todos</a>
						</li>
                        <li >
							<a href="<?php echo $root; ?>/add-clientes"><span class="badge badge-roundless badge-success"> + </span>Insertar</a>
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
							<a href="<?php echo $root; ?>/empleados">Ver todos</a>
						</li>
                        <li >
							<a href="<?php echo $root; ?>/add-empleados"><span class="badge badge-roundless badge-success"> + </span>Insertar</a>
						</li>
                        <li >
							<a href="<?php echo $root; ?>/archivos-adjuntos-empleados"><span class="badge badge-roundless badge-success"> + </span>Adjuntar archivos</a>
						</li>
                        <li >
							<a href="<?php echo $root; ?>/readmitir-empleados"><span class="badge badge-roundless badge-success"> + </span>Readmitir</a>
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
							<a href="<?php echo $root; ?>/pedidos">Ver todos</a>
						</li>
                        <li >
							<a href="<?php echo $root; ?>/add-pedidos"><span class="badge badge-roundless badge-success"> + </span>Alta</a>
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
							<a href="<?php echo $root; ?>/tarifas">Ver todas</a>
						</li>
                        <li >
							<a href="<?php echo $root; ?>/add-tarifas"><span class="badge badge-roundless badge-success"> + </span>Insertar</a>
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
							<a href="<?php echo $root; ?>/calendar/index.php">Ver calendario</a>
						</li>
                        <li >
							<a href="<?php echo $root; ?>/calendar/ac-admin/index.php">Edita Calendario</a>
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
							<a href="<?php echo $root; ?>/partes-de-material">Partes material</a>
						</li>
                        <li >
							<a href="<?php echo $root; ?>/partes-de-trabajo">Partes de trabajo</a>
						</li>
                        <li >
							<a href="<?php echo $root; ?>/alta-parte-de-material"><span class="badge badge-roundless badge-success"> + </span>Alta parte material</a>
						</li>
                         <li >
							<a href="<?php echo $root; ?>/alta-parte-de-trabajo"><span class="badge badge-roundless badge-success"> + </span>Alta parte trabajo</a>
						</li>
                        <li >
							<a href="<?php echo $root; ?>/ver-codigo-material-insertar">Ver cÃ³digos de material</a>
						</li>
                        <li >
							<a href="<?php echo $root; ?>/codigo-material-insertar"><span class="badge badge-roundless badge-success"> + </span>Insertar Cod.material</a>
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
							<a href="<?php echo $root; ?>/distribuidores">Ver todos</a>
						</li>
                        <li >
							<a href="<?php echo $root; ?>/add-distribuidores"><span class="badge badge-roundless badge-success"> + </span>Alta de distribuidores</a>
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
							<a href="<?php echo $root; ?>/usuarios">Ver todos</a>
						</li>
                        <li >
							<a href="<?php echo $root; ?>/add-usuarios"><span class="badge badge-roundless badge-success"> + </span>Alta de usuarios</a>
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
							<a href="<?php echo $root; ?>/inicio">Inicio</a> 
						</li>
						
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<div class="clearfix"></div>
            
            
            
			<!--CALENDARIO-->
<div id="wrapper">
		<div id="header">
			<?php echo LOGO_CALENDAR_ADMIN; ?>
			<div id="version"><?php echo CAL_VERSION; ?></div>
		</div>
		<?php echo $admin_menu; ?>
		<?php echo $this_title; ?>
		
		<div id="contents">
			<?php echo $contents;  ?>
		</div>
		<div class="clear"></div>
		<div id="footer">
			<!--<div style="float:right;">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="padding:0px;">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="MYJFSPM9J3PNL">
				<input type="image" src="https://www.paypal.com/en_GB/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online." style="padding:0px;border-width:0px;">
				<img alt="" border="0" src="https://www.paypal.com/es_ES/i/scr/pixel.gif" width="1" height="1" style="padding:0px;">
				</form>
			</div>-->
			<!--<ul>
				<li><a href="http://www.ajaxavailabilitycalendar.com" target="_blank">Calendar Web</a></li>
				<li><a href="http://forum.ajaxavailabilitycalendar.com/" target="_blank">Calendar Forum</a></li>
				<li>Developed by <a href="http://www.cbolson.com" target="_blank">Chris Bolson</a></li>
				<li>Icons by <a href="http://dryicons.com" target="_blank">http://dryicons.com</a></li>
			</ul>-->
			<div class="clear"></div>
		</div>
	</div>
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
	<script src=../../"plantillas/assets/plugins/respond.min.js"></script>
	<script src="../../plantillas/assets/plugins/excanvas.min.js"></script> 
	<![endif]-->   
	<script src="../../plantillas/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script type="text/javascript">
jQuery.noConflict();
</script>
	<script src="../../plantillas/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>   
	<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="../../plantillas/assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	<script src="../../plantillas/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../../plantillas/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<script src="../../plantillas/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="../../plantillas/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="../../plantillas/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="../../plantillas/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="../../plantillas/assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
	<script src="../../plantillas/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="../../plantillas/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="../../plantillas/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="../../plantillas/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="../../plantillas/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="../../plantillas/assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
	<script src="../../plantillas/assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="../../plantillas/assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="../../plantillas/assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
	<script src="../../plantillas/assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
	<script src="../../plantillas/assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
	<script src="../../plantillas/assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
	<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
	<script src="../../plantillas/assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
	<script src="../../plantillas/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
	<script src="../../plantillas/assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
	<!-- END PAGE LEVEL PLUGINS -->
			
        <!-- =======================================
        
        FIN PIE
        
        ======================================= -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
			<script src="../../plantillas/assets/scripts/app.js" type="text/javascript"></script>
            <script src="../../plantillas/assets/scripts/tasks.js" type="text/javascript"></script>        
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