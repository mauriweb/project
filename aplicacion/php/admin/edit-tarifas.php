<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/edit-tarifas');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Editar tarifas');
	$smarty->assign('activeTarifas','start active');
	
	
	$smarty->display('admin/edit-tarifas.tpl');
?>