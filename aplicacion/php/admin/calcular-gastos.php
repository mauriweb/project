<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/calcular-gastos');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Informes abanzados');
	$smarty->assign('activeInformes','start active');
	
	
	$smarty->display('admin/calcular-gastos.tpl');
?>