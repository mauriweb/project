<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/calendario');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Calendario');
	$smarty->assign('activeCalendario','start active');
	
	
	$the_file=RUTA_BASE."/aplicacion/php/admin/calendario/ac-includes/cal.inc.php";
if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
else		require_once($the_file);
	
	$sy->assign('AC_DIR_CSS', DOMINIO.'/aplicacion/php/admin/calendario/ac-contents/themes/default/css/');
	$sy->assign('AC_DIR_IMAGES', AC_DIR_IMAGES);
	$sy->assign('id_item', sel_list_items($_REQUEST["id_item"]));
	$sy->assign('calendar_months', $calendar_months);
	$sy->assign('calendar_states', $calendar_states);
	$sy->assign('last_update_ID_ITEM', $lang["last_update"].': '.get_cal_update_date(ID_ITEM));
	$sy->assign('AC_DIR_AJAX', AC_DIR_AJAX);


	$sy->assign('ID_ITEM', ID_ITEM);
	$sy->assign('AC_LANG', AC_LANG);
	$sy->assign('AC_NUM_MONTHS', AC_NUM_MONTHS);
	$sy->assign('AC_ACTIVE_PAST_DATES', AC_ACTIVE_PAST_DATES);
	$sy->assign('AC_DIR_JS', AC_DIR_JS);

	$sy->assign('next_X_months', $lang["next_X_months"]);
	$sy->assign('prev_X_months', $lang["prev_X_months"]);
	
	$smarty->display('admin/calendario.tpl');
	
	//require_once(RUTA_BASE.'/calendar/index.php');
?>
