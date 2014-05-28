<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/gastos');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Justificación de gastos');
	$smarty->assign('activeGastos','start active');
	
	
	debug();
	if(isset($_GET['idGas'])){
		$id=sanitize($_GET['idGas'], INT);
	    $sqlD="delete from gastos where id=".$id;
	    if($db->execute($sqlD)){
	  	  $db->execute('delete from gastos_detalle where idGastos='.$id);
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
	    $sqlAdd.=' AND g.fecha BETWEEN '.$fechaDe.' AND '.$fechaA;
	}
	if(isset($_POST['anyo']) && $_POST['anyo']!=''){
		
	 	$fechaDe=mktime(0,0,0,1, 1, $_POST['anyo']);
		$lastDayMonth=date ('t', strtotime($_POST['anyo'].'-12-23'));
	 	$fechaA=mktime(0,0,0,12, $lastDayMonth, $_POST['anyo']);
	    $sqlAdd.=' AND g.fecha BETWEEN '.$fechaDe.' AND '.$fechaA;
	}
	$sql="select g.fecha, g.id, c.empresa cliente, p.codigo proy, pp.numero, e.nombre resp from 
	      gastos g, partes_pedido pp, proyectos p, clientes c, empleados e where
	      g.idPedido=pp.id AND pp.idProyecto=p.id AND pp.idCliente=c.id AND g.idUser=e.id".$sqlAdd;
	$res=$db->GetAll($sql);
	$partes='';
	if(count($res)>0){
	  foreach($res as $re){
	    $partes.='<tr class="odd gradeX">
										<td><input type="checkbox" class="checkboxes" name="list-'.$re['id'].'" value="1" /></td>
										<td>'.$re['numero'].'</td>
										<td >'.$re['cliente'].'</td>
										<td >'.$re['proy'].'</td>
                                        <td >'.$re['resp'].'</td>
										<td >'.date('d/m/Y', $re['fecha']).'</td>
                                        <td><a href="ver-gastos/?idGas='.$re['id'].'" class="btn default btn-xs blue"><i class="fa fa-external-link"></i> Ver </a></td>
                                        <td><a class="btn default btn-xs green" href="add-gastos/?idGas='.$re['id'].'"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" onClick="return confirm(\'deseas borrar este registro?\')" href="gastos/?idGas='.$re['id'].'"><i class="fa fa-trash-o"></i> Borrar </a></td>
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

	//TAKE DATA FROM EXCEL DEPENDING ON WHICH PARTES HAVE BEEN CHECKED
	if($ids!='' && isset($_POST['excel'])){
		$sql="select g.fecha fechaG, g.numFactura, g.id idParte, g.visado, g.firmado, c.empresa cliente, p.codigo proy, pp.numero, e.nombre resp, gd.* from 
	      gastos g, partes_pedido pp, proyectos p, clientes c, empleados e, gastos_detalle gd where g.id IN ($ids) AND
	      g.idPedido=pp.id AND pp.idProyecto=p.id AND pp.idCliente=c.id AND gd.idGastos=g.id AND pp.idEmpleadoResp=e.id order by g.id";
		$excel=$db->GetAll($sql);
	}
	if(count($excel)>0){
		require_once 'aplicacion/includes/phpExcel/Classes/PHPExcel.php';
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);
		$rowCount = 1;
		$campos=array('PEDIDO', 'CLIENTE', 'PROYECTO', 'TRABAJADOR', 'FECHA PARTE', 'NUM FACTURA');
		$datos=array('numero', 'cliente', 'proy', 'resp', 'fechaG', 'numFactura');
		$camposDetalle=array('FECHA DETALLE', 'DE', 'A', 'LOCOMOCION 1', 'LOCOMOCION 2', 'KM', 'HOTEL', 'COMIDAS', 'DETALLE OTROS GASTOS','OTROS GASTOS €','TOTAL');
		$datosDetalle=array('fecha', 'DE', 'A', 'locomocionUno', 'locomocionDos', 'km', 'hotel', 'comidas', 'otrosGastosDetalle','otrosGastosEuros','total');
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
				if($val=='fecha' or $val=='fechaG')$valor=date('d/m/Y', $valor);
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
	$sql="select p.id, p.codigo from proyectos p, gastos pm, partes_pedido pp where pm.idPedido=pp.id AND pp.idProyecto=p.id group by p.id group by p.id";
	if($resP=$db->GetAll($sql)){
	  foreach($resP as $key=>$val){ 
		  if($_POST['idProyecto']==$val['id'])$sel='selected="selected"';
	      $proyectosHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['codigo'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('proyectosHtml', $proyectosHtml);
	
	$clientesHtml='';
	$sql="select c.id, c.empresa from clientes c, gastos pm, partes_pedido pp where pm.idPedido=pp.id AND pp.idCliente=c.id group by c.id group by c.id";
	if($resCl=$db->GetAll($sql)){
	  foreach($resCl as $key=>$val){ 
		  if($_POST['idCliente']==$val['id'])$sel='selected="selected"';
	      $clientesHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['empresa'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('clientesHtml', $clientesHtml);
	
	$empleados='';
	$sql="select e.id, e.nombre from empleados e, gastos pt where  pt.idUser=e.id group by e.id";
	if($resE=$db->GetAll($sql)){
	  foreach($resE as $key=>$val){ 
		  if($_POST['idEmpleado']==$val['id'])$sel='selected="selected"';
	      $empleados.='<option value="'.$val['id'].'" '.$sel.'>'.$val['nombre'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('empleados', $empleados);
	
	$smarty->display('admin/gastos.tpl');
?>