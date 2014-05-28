<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/calcular-material');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Informes abanzados');
	$smarty->assign('activeInformes','start active');
	
	
	$smarty->display('admin/calcular-material.tpl');
?>