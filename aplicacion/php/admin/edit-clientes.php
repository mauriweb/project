<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/edit-clientes');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Editar clientes');
	$smarty->assign('activeClientes','start active');
	
	
	$smarty->display('admin/edit-clientes.tpl');
?>