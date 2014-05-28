<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/edit-empleados');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Editar empleados');
	$smarty->assign('activeEmpleados','start active');
	
	
	$smarty->display('admin/edit-empleados.tpl');
?>