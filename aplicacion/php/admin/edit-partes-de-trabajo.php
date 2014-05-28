<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/edit-partes-de-trabajo');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Editar parte de trabajo');
	$smarty->assign('activeTrabajo','start active');
	
	
	$smarty->display('admin/edit-partes-de-trabajo.tpl');
?>