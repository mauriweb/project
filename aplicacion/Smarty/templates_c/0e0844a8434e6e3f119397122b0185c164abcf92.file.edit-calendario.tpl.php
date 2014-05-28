<?php /* Smarty version Smarty-3.1.12, created on 2014-05-14 18:58:34
         compiled from "C:\xampp\htdocs\acero\plantillas\tpl\admin\edit-calendario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2436752ce8fb71bae10-83965876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e0844a8434e6e3f119397122b0185c164abcf92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acero\\plantillas\\tpl\\admin\\edit-calendario.tpl',
      1 => 1400086710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2436752ce8fb71bae10-83965876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52ce8fb7384230_18341630',
  'variables' => 
  array (
    'AC_DIR_CSS' => 0,
    'admin' => 0,
    'AC_DIR_JS' => 0,
    'AC_LANG' => 0,
    'DOMINIO' => 0,
    'xtra_js' => 0,
    'msg_warning' => 0,
    'msg_order_update_OK' => 0,
    'msg_order_update_KO' => 0,
    'msg_state_mod_OK' => 0,
    'msg_state_mod_KO' => 0,
    'AC_DIR_AJAX' => 0,
    'BASE' => 0,
    'xtra_moo' => 0,
    'admin_menu' => 0,
    'this_title' => 0,
    'contents' => 0,
    'base' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce8fb7384230_18341630')) {function content_52ce8fb7384230_18341630($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        <!--CALENDARIO-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['AC_DIR_CSS']->value;?>
reset.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
css/admin-calendar.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
css/admin.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
css/mootools-roar.css">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
js/formcheck/theme/classic/formcheck.css"  />
		
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['AC_DIR_JS']->value;?>
mootools-core-1.3.2-full-compat-yc.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['AC_DIR_JS']->value;?>
mootools-more-1.3.2.1.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
js/formcheck/lang/<?php echo $_smarty_tpl->tpl_vars['AC_LANG']->value;?>
.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
js/mootools-formcheck.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
js/mootools-roar.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
/aplicacion/php/admin/calendario/ac-admin/js/mootools-cal-admin.js"></script>
		
		
		<script type="text/javascript">
		<?php echo $_smarty_tpl->tpl_vars['xtra_js']->value;?>

		var txtWarning = '<?php echo $_smarty_tpl->tpl_vars['msg_warning']->value;?>
';
		var txtOrderUpdateOK = '<?php echo $_smarty_tpl->tpl_vars['msg_order_update_OK']->value;?>
';
		var txtOrderUpdateKO = '<?php echo $_smarty_tpl->tpl_vars['msg_order_update_KO']->value;?>
';
		var txtStateModOK = '<?php echo $_smarty_tpl->tpl_vars['msg_state_mod_OK']->value;?>
';
		var txtStateModKO = '<?php echo $_smarty_tpl->tpl_vars['msg_state_mod_KO']->value;?>
';
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
							url:'<?php echo $_smarty_tpl->tpl_vars['AC_DIR_AJAX']->value;?>
list_order.ajax.php',
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
				var icon_states=new Array('<img src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
icons/icon_cross.png">','<img src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
icons/icon_tick.png">');
				var txtWarningOK=txtStateModOK;
				var txtWarningKO=txtStateModKO;
				var imgLoading='<img src=\"<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
icons/ajax-loader.gif\">';
				//	ajax call to change state
				var myHTMLRequest = new Request({
					url:'<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
ac-includes/ajax/update-state.ajax.php',
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
			<?php echo $_smarty_tpl->tpl_vars['xtra_moo']->value;?>

		});
		</script>
        <!--CALENDARIO-->
        <?php echo $_smarty_tpl->getSubTemplate ("admin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
        
        <!-- =======================================
        
        FIN HEAD
        
        ======================================= -->		
</head>

<body class="page-header-fixed" onLoad="load();">
        <!-- =======================================
        
        MENU
        
        ======================================= -->
        <?php echo $_smarty_tpl->getSubTemplate ("admin/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <!-- =======================================
        
        FIN MENU
        
        ======================================= -->
        <div class="page-container">
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
               <!-- ======================================= MENU LATERAL ======================================= -->
            <?php echo $_smarty_tpl->getSubTemplate ("admin/menuLateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
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
		
		<?php echo $_smarty_tpl->tpl_vars['admin_menu']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['this_title']->value;?>

		
		<div id="contents">
			<?php echo $_smarty_tpl->tpl_vars['contents']->value;?>

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
        <?php echo $_smarty_tpl->getSubTemplate ("admin/pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
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
				   jQuery('#wrapper a').attr('href', '<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/ac-admin/index.php'+$('#wrapper a').attr());*/
				   
				   jQuery('#wrapper a').each(function(index) { 
												var a=	jQuery(this);							  
						a.attr( 'href', function() { 
								return '<?php echo $_smarty_tpl->tpl_vars['DOMINIO']->value;?>
/edit-calendario/'+a.attr('href'); 
							} );
						
					});
				   
				   jQuery('#wrapper img').each(function(index) { 
												var a=	jQuery(this);							  
						a.attr( 'src', function() { 
								return '<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
/'+a.attr('src'); 
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
<?php }} ?>