<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/ver-empleados');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Ver empleados');
	$smarty->assign('activeEmpleados','start active');
	
	
	
	if(!isset($_GET['idEmp'])){
	  fourOfour();
	}
	if(isset($_GET['delFile'])){
	  delFiles($_GET['delFile'], 'empleados_archivos', 'archivo', '/imagenes/contrato/');
	  $sqlD="delete from empleados_archivos where id=".sanitize($_GET['delFile'], INT);
	  if($db->execute($sqlD)){
	    
	  }
	}
	$id=sanitize($_GET['idEmp'], INT);
	$sql="select * from empleados where id=".$id;
	$res=$db->GetRow($sql);
	if(count($res)==0){
		fourOfour();
	}
	$res['pais']=$paises[$res['pais']];
	$sy->assign('res', $res);
	
	$sqlA="select * from empleados_archivos where idEmpleado=".$id;
	$archivos='';
	if($resA=$db->GetAll($sqlA)){
	  foreach($resA as $reA){
	    $archivos.='<tr>
										<td>'.$reA['tipo'].'</td>
										<td>'.$reA['archivo'].'</td>
										<td class="numeric">'.date('d/m/Y', $reA['fecha']).'</td>
										<td><a target="_blank" href="imagenes/trabajadores/archivos/'.$reA['archivo'].'">Descargar</a></td>
                                        <td><a href="ver-empleado/?idEmp='.$id.'&delFile='.$reA['id'].'">Eliminar</a></td>
									</tr>';
	  }
	}
	$sy->assign('archivos', $archivos);
	
	
	$smarty->display('admin/ver-empleado.tpl');
?>