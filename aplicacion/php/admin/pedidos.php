<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/pedidos');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Pedidos');
	$smarty->assign('activePedidos','start active');
	
	debug();
	if(isset($_GET['idPed'])){
		$id=sanitize($_GET['idPed'], INT);
	    $sqlD="delete from partes_pedido where id=".$id;
	    if($db->execute($sqlD)){
	  	  $db->execute('delete from partes_pedido_detalle where idPartesPedido='.$id);
	    }
	}
	
	$sqlAdd='';
	if(isset($_POST['idProyecto']) && $_POST['idProyecto']!=''){
	  $sqlAdd=' AND p.id='.sanitize($_POST['idProyecto'], INT);
	}
	if(isset($_POST['idCliente']) && $_POST['idCliente']!=''){
	  $sqlAdd.=' AND c.id='.sanitize($_POST['idCliente'], INT);
	}
	if(isset($_POST['idEmpleado']) && $_POST['idEmpleado']!=''){
	  $sqlAdd.=' AND e.id='.sanitize($_POST['idEmpleado'], INT);
	}
	if(isset($_POST['fechaDe']) && $_POST['fechaDe']!='' && isset($_POST['fechaA']) && $_POST['fechaA']!=''){
		$sy->assign('fechaDe', $_POST['fechaDe']);
		$sy->assign('fechaA', $_POST['fechaA']);
		$fechaDe=explode('/',$_POST['fechaDe']);
		$month=$fechaDe[0];
		$day=$fechaDe[1];
		$year=$fechaDe[2];
	 	$fechaDe=mktime(0,0,0,$month, $day, $year);
		
		$fechaA=explode('/',$_POST['fechaA']);
		$month=$fechaA[0];
		$day=$fechaA[1];
		$year=$fechaA[2];
	 	$fechaA=mktime(24,60,60,$month, $day, $year);
	  $sqlAdd.=' AND pp.fecha BETWEEN '.$fechaDe.' AND '.$fechaA;
	}
	if(isset($_POST['anyo']) && $_POST['anyo']!=''){
		
	 	$fechaDe=mktime(0,0,0,1, 1, $_POST['anyo']);
		$lastDayMonth=date ('t', strtotime($_POST['anyo'].'-12-23'));
	 	$fechaA=mktime(0,0,0,12, $lastDayMonth, $_POST['anyo']);
	    $sqlAdd.=' AND pp.fecha BETWEEN '.$fechaDe.' AND '.$fechaA;
	}
	
	$sql="select pp.id, pp.numero, pp.fecha, c.empresa, p.codigo, e.nombre from 
	partes_pedido pp, clientes c, empleados e, proyectos p where 
	c.id=pp.idCliente AND p.id=pp.idProyecto AND pp.idEmpleadoResp=e.id".$sqlAdd;
	$res=$db->GetAll($sql);
	$pedidos='';
	if(count($res)>0){
	  foreach($res as $re){
		  $pedidos.='<tr class="odd gradeX">
										<td><input type="checkbox" class="checkboxes" value="1" /></td>
										<td>'.$re['numero'].'</td>
										<td >'.$re['empresa'].'</td>
										<td >'.$re['codigo'].'</td>
                                        <td >'.$re['nombre'].'</td>
										<td >'.date('d/m/Y', $re['fecha']).'</td>
                                        
                                        <td><a href="ver-pedidos/?idPed='.$re['id'].'" class="btn default btn-xs blue"><i class="fa fa-external-link"></i> Ver </a></td>
                                        <td><a class="btn default btn-xs green" href="add-pedidos/?idPed='.$re['id'].'"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" onClick="return confirm(\'deseas borrar este registro?\')" href="pedidos/?idPed='.$re['id'].'"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>';
	  }
	  $sy->assign('pedidos', $pedidos);
	}
	
	$anyos='';
	$now=date('Y', time());
	for($a=2000; $a<=$now; $a++){
	    if($_POST['anyo']==$a)$sel='selected="selected"';
	      $anyos.='<option value="'.$a.'" '.$sel.'>'.$a.'</option>';
		  $sel='';
	  }
	$sy->assign('anyos', $anyos);
	
	/*PROYECTOS*/
	$proyectosHtml='';
	$sql="select p.id, p.codigo from proyectos p, partes_material pm, partes_pedido pp where pm.idPedido=pp.id AND pp.idProyecto=p.id";
	if($resP=$db->GetAll($sql)){
	  foreach($resP as $key=>$val){ 
		  if($_POST['idProyecto']==$val['id'])$sel='selected="selected"';
	      $proyectosHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['codigo'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('proyectosHtml', $proyectosHtml);
	
	$clientesHtml='';
	$sql="select c.id, c.empresa from clientes c, partes_material pm, partes_pedido pp where pm.idPedido=pp.id AND pp.idCliente=c.id";
	if($resCl=$db->GetAll($sql)){
	  foreach($resCl as $key=>$val){ 
		  if($_POST['idCliente']==$val['id'])$sel='selected="selected"';
	      $clientesHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['empresa'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('clientesHtml', $clientesHtml);
	
	$empleados='';
	$sql="select e.id, e.nombre from empleados e, partes_material pm, partes_pedido pp where pm.idPedido=pp.id AND pp.idEmpleadoResp=e.id";
	if($resE=$db->GetAll($sql)){
	  foreach($resE as $key=>$val){ 
		  if($_POST['idEmpleado']==$val['id'])$sel='selected="selected"';
	      $empleados.='<option value="'.$val['id'].'" '.$sel.'>'.$val['nombre'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('empleados', $empleados);
	
	
	$smarty->display('admin/pedidos.tpl');
?>