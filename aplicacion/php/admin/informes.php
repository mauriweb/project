<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/informes');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Informes abanzados');
	$smarty->assign('activeInformes','start active');
	
	//CHECK HOW MANY PARTES HAVE BEEN CHECKED
	$coma=$ids='';
	foreach($_POST as $key=>$val){
		if(substr($key, 0, 5)=='list-'){
			$ids.=$coma.substr($key, 5);
			$coma=', ';
		}
	}
	
	//APPLYING INVOICE FOR CHOSEN PARTES
	if(isset($_POST['aplicar']) && $ids!='' && trim($_POST['num-factura'])!=''){
	    $res=$db->GetAll("select idPedido from partes_trabajo where id IN ($ids) group by idPedido");
		$count=count($res);
		if($count==1){
			$ids_=explode(',', $ids);
			foreach($ids_ as $id){
		    	$db->execute('update partes_trabajo set facturado="s", numFactura="'.sanitize($_POST['num-factura'], SQL).'" where 
						firmado="s" AND visado="s" AND id='.$id);
							 
			}
		}elseif($count==0){
		    $sy->assign('mensaje', 'Selecciona algun parte para Facturar');
		}else{
		    $sy->assign('mensaje', 'No puedes facturar partes con numero de pedido distintos');
		}
	}
	
	if(isset($_GET['errorCalcula'])){
		$_POST['idCliente']=$_GET['errorCalcula'];
		$sy->assign('mensaje', 'Selecciona algun parte para sacar el calculo');
	}
	debug();
	//FILTERING TO DISPLAY LIST
	$sqlAdd='';
	if(isset($_POST['idProyecto']) && $_POST['idProyecto']!=''){
	  $sqlAdd=' AND p.id='.sanitize($_POST['idProyecto'], INT);
	}
	if(isset($_POST['idPedido']) && $_POST['idPedido']!=''){
	  $sqlAdd=' AND pp.id='.sanitize($_POST['idPedido'], INT);
	}
	if(isset($_POST['idCliente']) && $_POST['idCliente']!=''){
		$sy->assign('cliente', '<input type="hidden" name="clienteFiltro" id="clienteFiltro" value="1">');
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
	 	$fechaA=mktime(60,60,24,$month, $day, $year);
	    $sqlAdd.=' AND pt.fecha BETWEEN '.$fechaDe.' AND '.$fechaA;
	}
	if($_POST['visado']=='si'){
	    $sqlAdd.=" and pt.visado='s'";
		$sy->assign('visadoSi','checked="checked"');
	}elseif($_POST['visado']=='no'){
	    $sqlAdd.=" and pt.visado='n'";
		$sy->assign('visadoNo','checked="checked"');
	}
	if($_POST['facturado']=='si'){
	    $sqlAdd.=" and pt.facturado='s'";
		$sy->assign('factSi','checked="checked"');
	}elseif($_POST['facturado']=='no'){
	    $sqlAdd.=" and pt.facturado='n'";
		$sy->assign('factNo','checked="checked"');
	}
	if($_POST['firmado']=='si'){
	    $sqlAdd.=" and pt.firmado='s'";
		$sy->assign('firmadoSi','checked="checked"');
	}elseif($_POST['firmado']=='no'){
	    $sqlAdd.=" and pt.firmado='n'";
		$sy->assign('firmadoNo','checked="checked"');
	}
	$sql="select pt.fecha, pt.visado, pt.firmado, pt.id, pt.numFactura, c.empresa cliente, p.codigo proy, pp.numero, e.nombre resp from 
	      partes_trabajo pt, partes_pedido pp, proyectos p, clientes c, empleados e where
	      pt.idPedido=pp.id AND pp.idProyecto=p.id AND pp.idCliente=c.id AND pt.idUser=e.id".$sqlAdd;
	$res=$db->GetAll($sql);
	$partes='';
	if(count($res)>0){
	  foreach($res as $re){
		  $sql="select horas from partes_trabajo_detalle where idPartesTrabajo=".$re['id'];
		  $horas=0;
		  if($resH=$db->GetAll($sql)){
		      foreach($resH as $reH){
			      $horas+=$reH['horas'];
			  }
		  }
		  $checkVisado=$re['visado']=='s'?'checked="checked"':'';
		  $checkFirmado=$re['firmado']=='s'?'checked="checked"':'';
	      $partes.='<tr class="odd gradeX">
										<td><input type="checkbox" class="checkboxes" name="list-'.$re['id'].'" value="1" /></td>
										<td>'.$re['numero'].'</td>
                                        <td style="display:none">'.$re['cliente'].'</td>
										<td >'.$re['cliente'].'</td>
										<td >'.$re['proy'].'</td>
                                        <td >'.$re['resp'].'</td>
										<td >'.date('d/m/Y', $re['fecha']).'</td>
                                        <td >'.$horas.'hrs</td>
                                        <td ><input type="checkbox" class="firmar" '.$checkFirmado.' value="'.$re['id'].'" /></td>
                                        <td ><input type="checkbox" class="visar" '.$checkVisado.' value="'.$re['id'].'" /></td>
                                        <td >'.$re['numFactura'].'</td>
                                        <td><a href="ver-partes-de-trabajo-informe/?idTra='.$re['id'].'" class="btn default btn-xs blue"><i class="fa fa-external-link"></i> Ver </a></td>
                                        <td><a class="btn default btn-xs green" href="alta-parte-de-trabajo/?idTra='.$re['id'].'"><i class="fa fa-edit"></i> Editar </a></td>
										
									</tr>';
	  }
			  
	}
	$sy->assign('partes', $partes);
    
	//TAKE DATA FRO EXCEL DEPENDING ON WHICH PARTES HAVE BEEN CHECKED
	if($ids!='' && isset($_POST['excel'])){
		$sql="select 
		pt.fecha fechaPt, pt.numFactura, pt.id idParte, pt.visado, pt.firmado, c.empresa cliente, p.codigo proy, pp.numero, e.nombre resp, ptd.*, ptc.euros precio from 
	      partes_trabajo pt, 
		  partes_pedido pp, 
		  proyectos p, clientes c, 
		  empleados e, 
		  partes_trabajo_detalle ptd, 
		  partes_trabajo_codigo ptc 
		  WHERE 
		  pt.id IN ($ids) AND 
		  pt.idPedido=pp.id AND 
		  pp.idProyecto=p.id AND 
		  pp.idCliente=c.id AND 
		  ptd.idPartesTrabajo=pt.id AND
		  ptd.codigo=ptc.id AND 
		  pp.idEmpleadoResp=e.id".$sqlAdd;
		$excel=$db->GetAll($sql);
		
	}
	if(count($excel)>0){
		require_once 'aplicacion/includes/phpExcel/Classes/PHPExcel.php';
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);
		$rowCount = 1;
		$campos=array('PEDIDO', 'CLIENTE', 'PROYECTO', 'TRABAJADOR', 'FECHA PARTE', 'NUM FACTURA');
		$datos=array('numero', 'cliente', 'proy', 'resp', 'fechaPt', 'numFactura');
	
		$camposDetalle=array('FECHA DETALLE', 'HORAS', 'FIRMADO', 'VISADO', 'LUGAR', 'CODIGO', 'CONCEPTO', 'PEIDO POR', 'REVISADO POR', 'DESCRIPCION','PRECIO','TOTAL', 'DLN','DÑY',
				'TPG','INF','EDEN','PLN','CHQ','CRR','FRM','VRS');
		$datosDetalle=array('fecha', 'horas', 'firmado', 'visado', 'lugar', 'codigo', 'concepto', 'idPedidoPor', 'idRevisadoPor','descripcion','precio','total','DLN','DSNY',
				'TPG','INF','EDEN','PLN','CHQ','CRR','FRM','VRS');
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
		$pos=$precio=$horas=0;
		foreach($excel as $re){
			
			foreach($datos as $key=>$val){
				$valor=$re[$val];
				if($val=='fecha' or $val=='fechaPt')$valor=date('d/m/Y', $valor);
				
				if($val=='idPedidoPor'){
				    $sql="select nombre from empleados where id=".$valor;
					$res=$db->GetRow($sql);
					$valor=$res['nombre'];
				}elseif($val=='idRevisadoPor'){
				    $sql="select nombre from empleados where id=".$valor;
					$res=$db->GetRow($sql);
					$valor=$res['nombre'];
				}elseif($val=='codigo'){
				    $sql="select codigo from partes_trabajo_codigo where id=".$valor;
					$res=$db->GetRow($sql);
					$valor=$res['codigo'];
				}elseif($val=='lugar'){
				    $valor=($valor=='in')?'Oficina':'Exterior';
				}elseif($val=='visado' or $val=='firmado'){
				    $valor=($valor=='s')?'Si':'No';
				}elseif($val=='precio'){
				    $precio=$valor;
				}elseif($val=='horas'){
				    $horas=$valor;
				}elseif($val=='total'){
				    $valor=$horas*$precio;
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
	


	
	/*PEDIDOS*/
	$pedidosHtml=$sel='';
	$sql="select id, numero from partes_pedido";
	if($resP=$db->GetAll($sql)){
	  foreach($resP as $key=>$val){ 
		  if($_POST['idPedido']==$val['id'])$sel='selected="selected"';
	      $pedidosHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['numero'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('pedidosHtml', $pedidosHtml);
	
	/*PROYECTOS*/
	$proyectosHtml='';
	$sql="select p.id, p.codigo from proyectos p, partes_trabajo pt, partes_pedido pp where pt.idPedido=pp.id AND pp.idProyecto=p.id GROUP BY p.id";
	if($resP=$db->GetAll($sql)){
	  foreach($resP as $key=>$val){ 
		  if($_POST['idProyecto']==$val['id'])$sel='selected="selected"';
	      $proyectosHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['codigo'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('proyectosHtml', $proyectosHtml);
	/*CLIENTES*/
	$clientesHtml='';
	$sql="select c.id, c.empresa from clientes c, partes_trabajo pt, partes_pedido pp where 
	pt.idPedido=pp.id AND 
	pp.idCliente=c.id GROUP BY c.id";
	if($resCl=$db->GetAll($sql)){
	  foreach($resCl as $key=>$val){ 
		  if($_POST['idCliente']==$val['id'])$sel='selected="selected"';
	      $clientesHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['empresa'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('clientesHtml', $clientesHtml);
	
	$empleados='';
	$sql="select e.id, e.nombre from empleados e, partes_trabajo pt where  pt.idUser=e.id group by e.id";
	if($resE=$db->GetAll($sql)){
	  foreach($resE as $key=>$val){ 
		  if($_POST['idEmpleado']==$val['id'])$sel='selected="selected"';
	      $empleados.='<option value="'.$val['id'].'" '.$sel.'>'.$val['nombre'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('empleados', $empleados);
	
	
	$smarty->display('admin/informes.tpl');
?>