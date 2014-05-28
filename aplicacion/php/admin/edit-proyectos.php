<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/edit-proyectos');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Editar proyectos');
	$smarty->assign('activeProyecto','start active');
	
	
	$smarty->display('admin/edit-proyectos.tpl');
?>