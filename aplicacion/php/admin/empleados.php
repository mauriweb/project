<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/empleados');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Empleados');
	$smarty->assign('activeEmpleados','start active');
	if(isset($_GET['delEmp'])){
	  $id=sanitize($_GET['delEmp'], INT);
	  delFiles($_GET['delEmp'], 'empleados_archivos', 'archivo', '/imagenes/trabajadores/archivos/', 'idEmpleado');
	  $idEmpleadoCalendario=$db->GetRow("select idEmpleadoCalendario from empleados where id=".$id);
	  $sqlD="delete from empleados where id=".$id;
	  if($db->execute($sqlD)){
		$sqlC="DELETE FROM `cal_bookings_items` WHERE `cal_bookings_items`.`id` = ".$idEmpleadoCalendario['idEmpleadoCalendario'];
		$db->execute($sqlC);
	    $sqlD="delete from empleados_archivos where idEmpleado=".$id;
	    $db->execute($sqlD);
		$sqlD="delete from usuarios where idEmpleado=".$id;
	    $db->execute($sqlD);
	  }
	}elseif(isset($_GET['rmEmp'])){
	    $db->execute('update empleados set estado="0", fechaBaja='.time().' where id='.sanitize($_GET['rmEmp'], INT));
	}
	$estado=1;
	require_once(RUTA_BASE.'/aplicacion/includes/admin/list-empleados.php');
	
	
	$smarty->display('admin/empleados.tpl');
?>