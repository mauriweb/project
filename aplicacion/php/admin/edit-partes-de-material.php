<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/edit-partes-de-material');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Editar parte de material');
	$smarty->assign('activeMaterial','start active');
	
	
	$smarty->display('admin/edit-partes-de-material.tpl');
?>