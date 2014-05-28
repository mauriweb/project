<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/add-calendario');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Add-calendario');
	$smarty->assign('activeCalendario','start active');
	
	
	$smarty->display('admin/add-calendario.tpl');
?>