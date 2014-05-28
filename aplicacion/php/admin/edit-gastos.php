<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/edit-gastos');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Justificación de gastos');
	$smarty->assign('activeGastos','start active');
	
	
	$smarty->display('admin/edit-gastos.tpl');
?>