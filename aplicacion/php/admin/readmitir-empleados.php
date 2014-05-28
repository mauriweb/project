<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/readmitir-empleados');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Readmitir empleados');
	$smarty->assign('activeEmpleados','start active');
	
	if(isset($_GET['rdEmp'])){
	    $db->execute('update empleados set estado="1", fechaAlta='.time().' where id='.sanitize($_GET['rdEmp'], SQL));
	}
	$estado=0;
	require_once(RUTA_BASE.'/aplicacion/includes/admin/list-empleados.php');
	
	
	$smarty->display('admin/readmitir-empleados.tpl');
?>