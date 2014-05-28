<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        <!--CALENDARIO-->
        <link rel="stylesheet" href="{$AC_DIR_CSS}reset.css">
		<link rel="stylesheet" href="{$admin}css/admin-calendar.css">
		<link rel="stylesheet" href="{$admin}css/admin.css">
		<link rel="stylesheet" href="{$admin}css/mootools-roar.css">
		<link rel="stylesheet" type="text/css" media="screen" href="{$admin}js/formcheck/theme/classic/formcheck.css"  />
		
		<script type="text/javascript" src="{$AC_DIR_JS}mootools-core-1.3.2-full-compat-yc.js"></script>
		<script type="text/javascript" src="{$AC_DIR_JS}mootools-more-1.3.2.1.js"></script>
		<script type="text/javascript" src="{$admin}js/formcheck/lang/{$AC_LANG}.js"></script>
		<script type="text/javascript" src="{$admin}js/mootools-formcheck.js"></script>
		<script type="text/javascript" src="{$admin}js/mootools-roar.js"></script>
        <script type="text/javascript" src="{$DOMINIO}/aplicacion/php/admin/calendario/ac-admin/js/mootools-cal-admin.js"></script>
		
		
		<script type="text/javascript">
		{$xtra_js}
		var txtWarning = '{$msg_warning}';
		var txtOrderUpdateOK = '{$msg_order_update_OK}';
		var txtOrderUpdateKO = '{$msg_order_update_KO}';
		var txtStateModOK = '{$msg_state_mod_OK}';
		var txtStateModKO = '{$msg_state_mod_KO}';
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
			var roar = new Roar({ position: 'lowerRight',duration:'5000' });
			
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
							url:'{$AC_DIR_AJAX}list_order.ajax.php',
							method:'get',
							autoCancel:true,
							data: { 'sort_order':sort_order,'type':order_table,'order_field':order_field },
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
				var icon_states=new Array('<img src="{$admin}icons/icon_cross.png">','<img src="{$admin}icons/icon_tick.png">');
				var txtWarningOK=txtStateModOK;
				var txtWarningKO=txtStateModKO;
				var imgLoading='<img src=\"{$admin}icons/ajax-loader.gif\">';
				//	ajax call to change state
				var myHTMLRequest = new Request({
					url:'{$BASE}ac-includes/ajax/update-state.ajax.php',
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
			{$xtra_moo}
		});
		</script>
        <!--CALENDARIO-->
        {include file="admin/head.tpl"}
        
        
        <!-- =======================================
        
        FIN HEAD
        
        ======================================= -->		
</head>

<body class="page-header-fixed" onLoad="load();">
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
	<div id="wrapper">
		
		{$admin_menu}
		{$this_title}
		
		<div id="contents">
			{$contents}
		</div>
		<div class="clear"></div>
		
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
        {include file="admin/pie.tpl"}	
        <script type="text/javascript">
    $.noConflict();
    </script>	
        <!-- =======================================
        
        FIN PIE
        
        ======================================= -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
			<script src="plantillas/assets/scripts/app.js" type="text/javascript"></script>
            <script src="plantillas/assets/scripts/tasks.js" type="text/javascript"></script>        
            <!-- END PAGE LEVEL SCRIPTS -->  
            <script>
			function load(){
				//aplicacion/php/admin/calendario/ac-contents/themes/default/images/icon_next.gif
			  jQuery('#cal_prev > img').attr('src', 'aplicacion/php/admin/calendario/ac-contents/themes/default/images/icon_next.gif');
			  jQuery('#cal_next > img').attr('src', 'aplicacion/php/admin/calendario/ac-contents/themes/default/images/icon_next.gif');
				  
			}
                jQuery(document).ready(function() {  
												
												
												
												/*console.log(jQuery('#wrapper a'));
				   jQuery('#wrapper a').attr('href', '{$base}/ac-admin/index.php'+$('#wrapper a').attr());*/
				   
				   jQuery('#wrapper a').each(function(index) { 
												var a=	jQuery(this);							  
						a.attr( 'href', function() { 
								return '{$DOMINIO}/edit-calendario/'+a.attr('href'); 
							} );
						
					});
				   
				   jQuery('#wrapper img').each(function(index) { 
												var a=	jQuery(this);							  
						a.attr( 'src', function() { 
								return '{$admin}/'+a.attr('src'); 
							} );
						
					});
					
					/*if(jQuery('#id_item_sel').val()=='0'){
						jQuery('.generico_fran').css('display', 'block');
						jQuery('.no_generico_fran').css('display', 'none');
					}else{
						jQuery('.generico_fran').css('display', 'none');
						jQuery('.no_generico_fran').css('display', 'block');
					}*///id_predefined_state
				   
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
            <script type="text/javascript">
		
		
		</script>
            <!-- END JAVASCRIPTS -->	
</body>
</html>
