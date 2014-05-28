<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/edit-pedidos');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Editar pedidos');
	$smarty->assign('activePedidos','start active');
	
	
	$smarty->display('admin/edit-pedidos.tpl');
?>