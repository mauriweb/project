<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/calcular');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Informes abanzados');
	$smarty->assign('activeInformes','start active');
	
	debug();
	
	//CHECK HOW MANY PARTES HAVE BEEN CHECKED
	if(!isset($_POST['ids'])){
		$coma=$ids='';
		foreach($_POST as $key=>$val){
			if(substr($key, 0, 5)=='list-'){
				$ids.=$coma.substr($key, 5);
				$coma=', ';
			}
		}
		if($ids==''){
			header('location: '.DOMINIO.'/informes-trabajo/?errorCalcula='.$_POST['idCliente']);
			
		}
			
	}else{
		$ids=$_POST['ids'];
	}
	
	
	if((isset($_POST['calcular']) or isset($_POST['excel']))  && $ids!='' && isset($_POST['clienteFiltro'])){
		if(isset($_POST['excel'])){
			$excel=true;
			require_once 'aplicacion/includes/phpExcel/Classes/PHPExcel.php';
			$objPHPExcel = new PHPExcel();
			$objPHPExcel->setActiveSheetIndex(0);
			$rowCount = 1;
			$letras=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ','B1','B2');
		}
		$sy->assign('ids', $ids);
	    $sql="SELECT pt.numFactura, pt.id idParte, c.empresa cliente, p.codigo proy, ptd.horas, ptc.codigo, ptc.euros, ptd.id
		 idDetalle
		FROM partes_trabajo pt, partes_pedido pp, proyectos p, clientes c, empleados e, partes_trabajo_detalle ptd, partes_trabajo_codigo ptc
		WHERE pt.id
		IN ( $ids )
		AND pt.idPedido = pp.id
		AND pp.idProyecto = p.id
		AND ptc.id = ptd.codigo
		AND pp.idCliente = c.id
		AND ptd.idPartesTrabajo = pt.id
		GROUP BY ptd.id
		ORDER BY pt.id";
		$calcular=$db->GetAll($sql);
		if(count($calcular)>0){
			
			$proyecto=$calcular[0]['proy'];
			$factura=$calcular[0]['numFactura'];
			$codigos=array();
		    foreach($calcular as $cal){
				if(!in_array($cal['codigo'], $codigos))
			        $codigos[]=$cal['codigo'];
				if($factura!=$cal['numFactura'])
					$factura='';
			}
			if(!$excel){
				$sy->assign('cliente', $calcular[0]['cliente']);
				$sy->assign('factura', $factura);
				$vista='<thead><tr><th>Proyectos</th>';
			}else{
			    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $calcular[0]['cliente']);
				$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
				$objPHPExcel->getActiveSheet()->getStyle('B'.$rowCount)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
				$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, 'Factura: '.$factura);
				$rowCount++;
				$l=0;
				$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, 'Proyectos');
				$l++;
			}
			
			foreach($codigos as $codigo){
				if(!$excel){
            	    $vista.='<th>Horas '.$codigo.'</th>
                          <th>Euros</th>
                          <th>Total '.$codigo.'</th>';
				}else{
				    $objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, 'Horas '.$codigo);
					$l++;
					$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, 'euros');
					$l++;
					$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, 'Total '.$codigo);
					$l++;

				}
			}
			if(!$excel){
				$vista.='<th>Total</th>
									</tr>
									</thead>
								
								<tbody>';
			}else{
			    $objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, 'Total');
				$rowCount++;
				$maxL=$letras[$l];
				$l=0;
			}
								
			$previa=array();
			$i=$idParte=-1;
			foreach($calcular as $cal){
				$mismoParte=true;
				if($idParte!=$cal['idParte']){
					$mismoParte=false;
			    	$idParte=$cal['idParte'];
					$i++;
					$previa[$i]=array();
				}
				$previa[$i]['horas'.$cal['codigo']]+=$cal['horas'];
				$previa[$i]['euros'.$cal['codigo']]=$cal['euros'];
				$total=$cal['horas']*$cal['euros'];
				$previa[$i]['total'.$cal['codigo']]+=$total;
				$previa[$i]['total']+=$total;
				
				$totPrev['horas'.$cal['codigo']]+=$cal['horas'];
				$totPrev['euros'.$cal['codigo']]=$cal['euros'];
				$totPrev['total'.$cal['codigo']]+=$total;
				$totPrev['total']+=$total;
			}
			$i=0;
			foreach($previa as $prev){
				if(!$excel){
					$vista.='<tr><td>'.$proyecto.'</td>';
					foreach($codigos as $codigo){
						if($prev['horas'.$codigo]){
							$vista.='<td>'.$prev['horas'.$codigo].'h</td>';
							$vista.='<td>'.$prev['euros'.$codigo].'€</td>';
							$vista.='<td>'.$prev['total'.$codigo].'€</td>';
						}else{
							$vista.='<td>0h</td>';
							$vista.='<td>0€</td>';
							$vista.='<td>0€</td>';
						}
					}
					$vista.='<td>'.$prev['total'].'</td></tr>';
				}else{
					$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, $proyecto);
					$l++;
				    foreach($codigos as $codigo){
						if($prev['horas'.$codigo]){
							$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, $prev['horas'.$codigo].'');
							$l++;
							$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, $prev['euros'.$codigo].'');
							$l++;
							$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, $prev['total'.$codigo].'');
							$l++;
						}else{
							$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, '0');
							$l++;
							$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, '0');
							$l++;
							$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, '0');
							$l++;
						}
					}
					$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, $prev['total'].'');
					$rowCount++;
					$l=0;
				}
			}
			
			//LAS ROW TOTAL
			if(!$excel){
				$vista.='</tbody>';	
				$vista.='<thead class="flip-content"><tr><th>Total</th>';
				foreach($codigos as $codigo){
					$vista.='<th>'.$totPrev['horas'.$codigo].'h</th>';
					$vista.='<th>'.$totPrev['euros'.$codigo].'€</th>';
					$vista.='<th>'.$totPrev['total'.$codigo].'€</th>';
				}
				$vista.='<th>'.$totPrev['total'].'€</th>';
				$vista.='</tr></thead>';
			}else{
				$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, 'Total');
				$l++;
				foreach($codigos as $codigo){
					$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, $totPrev['horas'.$codigo].'');
					$l++;
					$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, $totPrev['euros'.$codigo].'');
					$l++;
					$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, $totPrev['total'.$codigo].'');
					$l++;
				}
				$objPHPExcel->getActiveSheet()->SetCellValue($letras[$l].$rowCount, $totPrev['total'].'');
			}
			
		}
		if(!$excel){
			if(isset($_POST['pdf'])){
				include(RUTA_BASE."/aplicacion/includes/MPDF57/mpdf.php");
				$mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0);
				$mpdf->SetDisplayMode('fullpage');
				$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
				$mpdf->WriteHTML(' <table class="table table-bordered table-striped table-condensed flip-content">
                                   '.$vista.'
                                   </table>');
				$mpdf->Output();
				exit;
			}else{
				$sy->assign('vista', $vista);
				$sy->display('admin/calcular.tpl');
			}
		}else{
			$s=0;
			foreach($letras as $letra){
				$s++;
				$objPHPExcel->getActiveSheet()->getColumnDimension($letra)->setAutoSize(true);
				$objPHPExcel->getActiveSheet()->getColumnDimension($letra.'1')->setAutoSize(true);
				if ($s % 2) {
					for($row=0;$row<=$rowCount;$row++){
						$objPHPExcel->getActiveSheet()->getStyle($letra.$row)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
				    }
				}else{
					for($row=0;$row<=$rowCount;$row++){
						$objPHPExcel->getActiveSheet()->getStyle($letra.$row)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
					}
				}
				if($letra==$maxL)break;
			}
			$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
			$objWriter->save('files/excel.xlsx');
			header('location: '.DOMINIO.'/files/excel.xlsx');
		}
		exit();					  
	}elseif(isset($_POST['pssdf'])){
		$sql="SELECT pt.numFactura, pt.id idParte, c.empresa cliente, p.codigo proy, ptd.horas, ptc.codigo, ptc.euros, ptd.id
		 idDetalle
		FROM partes_trabajo pt, partes_pedido pp, proyectos p, clientes c, empleados e, partes_trabajo_detalle ptd, partes_trabajo_codigo ptc
		WHERE pt.id
		IN ( $ids )
		AND pt.idPedido = pp.id
		AND pp.idProyecto = p.id
		AND ptc.id = ptd.codigo
		AND pp.idCliente = c.id
		AND ptd.idPartesTrabajo = pt.id
		GROUP BY ptd.id
		ORDER BY pt.id";
		$calcular=$db->GetAll($sql);
		if(count($calcular)>0){
			
			$proyecto=$calcular[0]['proy'];
			$factura=$calcular[0]['numFactura'];
			$codigos=array();
		    foreach($calcular as $cal){
				if(!in_array($cal['codigo'], $codigos))
			        $codigos[]=$cal['codigo'];
				if($factura!=$cal['numFactura'])
					$factura='';
			}
			
			
			foreach($codigos as $codigo){
				if(!$excel){
            	    $vista.='<th>Horas '.$codigo.'</th>
                          <th>Euros</th>
                          <th>Total '.$codigo.'</th>';
				}
			}
			if(!$excel){
				$vista.='<th>Total</th>
									</tr>
								</thead>
								<tbody>';
			}
								
			$previa=array();
			$i=$idParte=-1;
			foreach($calcular as $cal){
				$mismoParte=true;
				if($idParte!=$cal['idParte']){
					$mismoParte=false;
			    	$idParte=$cal['idParte'];
					$i++;
					$previa[$i]=array();
				}
				$previa[$i]['horas'.$cal['codigo']]+=$cal['horas'];
				$previa[$i]['euros'.$cal['codigo']]=$cal['euros'];
				$total=$cal['horas']*$cal['euros'];
				$previa[$i]['total'.$cal['codigo']]+=$total;
				$previa[$i]['total']+=$total;
				
				$totPrev['horas'.$cal['codigo']]+=$cal['horas'];
				$totPrev['euros'.$cal['codigo']]=$cal['euros'];
				$totPrev['total'.$cal['codigo']]+=$total;
				$totPrev['total']+=$total;
			}
			$i=0;
			foreach($previa as $prev){
				if(!$excel){
					$vista.='<tr><td>'.$proyecto.'</td>';
					foreach($codigos as $codigo){
						if($prev['horas'.$codigo]){
							$vista.='<td>'.$prev['horas'.$codigo].'h</td>';
							$vista.='<td>'.$prev['euros'.$codigo].'€</td>';
							$vista.='<td>'.$prev['total'.$codigo].'€</td>';
						}else{
							$vista.='<td>0h</td>';
							$vista.='<td>0€</td>';
							$vista.='<td>0€</td>';
						}
					}
					$vista.='<td>'.$prev['total'].'</td></tr>';
				}
			}
			
			//LAS ROW TOTAL
			
			
		}

			
			
			
		include(RUTA_BASE."/aplicacion/includes/MPDF57/mpdf.php");
		$mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0);
		$mpdf->SetDisplayMode('fullpage');
		$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list

		$htmls='<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
				table{
				font-size:11px;
					font-weight:bold;
						border-left: 1px solid #000;
							border-top: 1px solid #000;
							
							border-spacing:0;
							border-collapse: collapse;
				}
				 table td{
					height:50px;
					border-right: 1px solid #000;
							border-bottom: 1px solid #000;
							padding: 2mm;
				 
				}
				
				
				</style>
</head>

<body>
<div class="row margin-bottom-30">
            	
                <div class="col-md-8">
                				<div class="portlet-body flip-scroll">
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                        <thead class="flip-content">
                                            <tr>
                                                <th>Cliente</th>
                                                <th>Proyecto</th>
                                                <th>Encargado por</th>
                                                <th>Trabajo realizado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td>'.$res['empresa'].'</td>
														<td>'.$res['codigo'].'</td>
														<td>'.$res['encargadoPor'].'</td>
														<td>'.$res['nombre'].'</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- END TABLE PEDIDOS A REALIZAR--> 
             </div>
             <div class="col-md-4">
                				<div class="portlet-body flip-scroll">
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                        <thead class="flip-content">
                                            <tr>
                                                <th>'.$res['numero'].'</th>
                                                <th>'.$res['numFactura'].'</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td>P-14-0001</td>
                                                <td>200</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- END TABLE PEDIDOS A REALIZAR--> 
             </div>
             </div>
             
             <div class="row">
													<div class="col-md-12">
														<div class="portlet-body flip-scroll">
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                        <thead class="flip-content">
                                            <tr>
                                                <th>Fecha</th>
                                                <th>Cantidad</th>
                                                <th>Tarifa</th>
                                                <th>Concepto</th>
                                  				<th class="peq">DLN</th>
                                                <th class="peq">DSÑ</th>
                                                <th class="peq">TPG</th>
                                                <th class="peq">INF</th>
                                                <th class="peq">ED/EN</th>
                                                <th class="peq">PLN</th>
                                                <th class="peq">CHQ</th>
                                                <th class="peq">CRR</th>
                                                <th class="peq">FRM</th>
                                                <th class="peq">VRS</th>
                                                <th>Pedido por</th>
                                                <th>Revisado por</th>
                                                <th>Descripción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           '.$detalle.'
                                        </tbody>
                                    </table>
                                </div> <!-- END TABLE PEDIDOS A REALIZAR--> 
  
													</div>
                                                    
												</div>
</body>
</html>';
		$mpdf->WriteHTML($htmls);
		$mpdf->Output();
		exit;
		

	}

?>