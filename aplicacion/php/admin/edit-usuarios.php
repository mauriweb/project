<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/edit-usuarios');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Editar usuarios');
	$smarty->assign('activeUsuarios','start active');
	
	
	$smarty->display('admin/edit-usuarios.tpl');
?>