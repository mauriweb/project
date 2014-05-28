<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/partes-de-material');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Partes de material');
	$smarty->assign('activeMaterial','start active');
	
	
	debug();
	if(isset($_GET['idMat'])){
	    $id=sanitize($_GET['idMat'], INT);
	    $sqlD="delete from partes_material where id=".$id;
	    if($db->execute($sqlD)){
	  	  $db->execute('delete from partes_material_detalle where idPartesMaterial='.$id);
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
	  $sqlAdd.=' AND pm.fecha BETWEEN '.$fechaDe.' AND '.$fechaA;
	}
	if(isset($_POST['anyo']) && $_POST['anyo']!=''){
		
	 	$fechaDe=mktime(0,0,0,1, 1, $_POST['anyo']);
		$lastDayMonth=date ('t', strtotime($_POST['anyo'].'-12-23'));
	 	$fechaA=mktime(0,0,0,12, $lastDayMonth, $_POST['anyo']);
	    $sqlAdd.=' AND pm.fecha BETWEEN '.$fechaDe.' AND '.$fechaA;
	}
	
	$sql="select pm.fecha, pm.id, c.empresa cliente, p.codigo proy, pp.numero, e.nombre resp from 
	      partes_material pm, partes_pedido pp, proyectos p, clientes c, empleados e where
	      pm.idPedido=pp.id AND pp.idProyecto=p.id AND pp.idCliente=c.id AND pm.idUser=e.id".$sqlAdd;
	$res=$db->GetAll($sql);
	$partes='';
	if(count($res)>0){
	  foreach($res as $re){
	    $partes.='<tr class="odd gradeX">
										<td><input type="checkbox" name="list-'.$re['id'].'" class="checkboxes" value="1" /></td>
										<td>'.$re['numero'].'</td>
										<td >'.$re['cliente'].'</td>
										<td >'.$re['proy'].'</td>
                                        <td >'.$re['resp'].'</td>
										<td >'.date('d/m/Y', $re['fecha']).'</td>
                                        <td><a href="ver-partes-de-material/?idMat='.$re['id'].'" class="btn default btn-xs blue"><i class="fa fa-external-link"></i> Ver </a></td>
                                        <td><a class="btn default btn-xs green" href="alta-parte-de-material/?idMat='.$re['id'].'"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" onClick="return confirm(\'deseas borrar este registro?\')" href="partes-de-material/?idMat='.$re['id'].'"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>';
	  }
			  
	}
	$sy->assign('partes', $partes);
	
	 $coma=$ids='';
	foreach($_POST as $key=>$val){
		if(substr($key, 0, 5)=='list-'){
			$ids.=$coma.substr($key, 5);
			$coma=', ';
		}
	}
/*	if($ids!=''){
		$sql="select pm.fecha, pm.id, c.contacto cliente, p.codigo proy, pp.numero, e.nombre resp from 
	      partes_material pm, partes_pedido pp, proyectos p, clientes c, empleados e where
	      pm.idPedido=pp.id AND pp.idProyecto=p.id AND pp.idCliente=c.id AND pm.id IN ($ids) AND pp.idEmpleadoResp=e.id".$sqlAdd;
		$excel=$db->GetAll($sql);
	}*/
	//TAKE DATA FRO EXCEL DEPENDING ON WHICH PARTES HAVE BEEN CHECKED
	if($ids!='' && isset($_POST['excel'])){
		
		$sql="select pm.fecha fechapm, pm.numFactura, pm.id idParte, pm.visado, pm.firmado, c.empresa cliente, p.codigo proy, pp.numero, e.nombre resp, pmd.* from 
	      partes_material pm, partes_pedido pp, proyectos p, clientes c, empleados e, partes_material_detalle pmd where pm.id IN ($ids) AND
	      pm.idPedido=pp.id AND pp.idProyecto=p.id AND pp.idCliente=c.id AND pmd.idPartesMaterial=pm.id AND pp.idEmpleadoResp=e.id order by pm.id"; 
		$excel=$db->GetAll($sql);
	}
	if(count($excel)>0){
		require_once 'aplicacion/includes/phpExcel/Classes/PHPExcel.php';
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);
		$rowCount = 1;
		$campos=array('PEDIDO', 'CLIENTE', 'PROYECTO', 'TRABAJADOR', 'FECHA PARTE', 'NUM FACTURA');
		$datos=array('numero', 'cliente', 'proy', 'resp', 'fechapm', 'numFactura');
	
		$camposDetalle=array('FECHA DETALLE', 'CODIGO', 'DIMENSIONES', 'FIRMADO', 'VISADO', 'TOTAL FACTURABLE', 'TOTAL NO FACTURABLE', 'PEIDO POR');
		$datosDetalle=array('fecha', 'codigo', 'dimensiones', 'firmado', 'visado', 'totFact', 'totNoFact', 'pedidoPor');
		$campos=array_merge($campos, $camposDetalle);
		$datos=array_merge($datos, $datosDetalle);
		$letras=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ','B1','B2');
		foreach($campos as $key=>$val){
		    $objPHPExcel->getActiveSheet()->SetCellValue($letras[$key].$rowCount, $val);
			$objPHPExcel->getActiveSheet()->getColumnDimension($letras[$key])->setAutoSize(true);
			$objPHPExcel->getActiveSheet()->getColumnDimension($letras[$key].'1')->setAutoSize(true);
			if ($key % 2) {
				$objPHPExcel->getActiveSheet()->getStyle($letras[$key])->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
				$objPHPExcel->getActiveSheet()->getStyle($letras[$key].'1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
			}else{
				$objPHPExcel->getActiveSheet()->getStyle($letras[$key])->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
				$objPHPExcel->getActiveSheet()->getStyle($letras[$key].'1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
			}
		}
		$rowCount++;
		$pos=0;
		foreach($excel as $re){
			foreach($datos as $key=>$val){
				$valor=$re[$val];
				if($val=='fecha' or $val=='fechapm')$valor=date('d/m/Y', $valor);
				if($val=='idPedidoPor'){
				    $sql="select nombre from empleados where id=".$valor;
					$res=$db->GetRow($sql);
					$valor=$res['nombre'];
				}
			    $objPHPExcel->getActiveSheet()->SetCellValue($letras[$key].$rowCount, $valor);
			}
			$rowCount++;
			$pos++;
		}
		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$objWriter->save('files/excel.xlsx');
		header('location: '.DOMINIO.'/files/excel.xlsx');
		exit();
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
	$sql="select p.id, p.codigo from proyectos p, partes_material pm, partes_pedido pp where pm.idPedido=pp.id AND pp.idProyecto=p.id group by p.id";
	if($resP=$db->GetAll($sql)){
	  foreach($resP as $key=>$val){ 
		  if($_POST['idProyecto']==$val['id'])$sel='selected="selected"';
	      $proyectosHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['codigo'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('proyectosHtml', $proyectosHtml);
	
	$clientesHtml='';
	$sql="select c.id, c.empresa from clientes c, partes_material pm, partes_pedido pp where pm.idPedido=pp.id AND pp.idCliente=c.id group by c.id";
	if($resCl=$db->GetAll($sql)){
	  foreach($resCl as $key=>$val){ 
		  if($_POST['idCliente']==$val['id'])$sel='selected="selected"';
	      $clientesHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['empresa'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('clientesHtml', $clientesHtml);
	
	$empleados='';
	$sql="select e.id, e.nombre from empleados e, partes_material pt where  pt.idUser=e.id group by e.id";
	if($resE=$db->GetAll($sql)){
	  foreach($resE as $key=>$val){ 
		  if($_POST['idEmpleado']==$val['id'])$sel='selected="selected"';
	      $empleados.='<option value="'.$val['id'].'" '.$sel.'>'.$val['nombre'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('empleados', $empleados);
	
	
	$smarty->display('admin/partes-de-material.tpl');
?>