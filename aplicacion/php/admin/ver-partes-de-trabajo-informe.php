<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/ver-partes-de-trabajo-informe');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Informes abanzados');
	$smarty->assign('activeInformes','start active');
	
	
		if(!isset($_GET['idTra'])){
	  fourOfour();
	}
	$sy->assign('idTra', $_GET['idTra']);
	debug();
	$id=sanitize($_GET['idTra'], INT);
	$sql="select pp.numero, c.empresa, p.codigo, e.nombre, pp.encargadoPor, pt.numFactura from 
	partes_pedido pp, clientes c, empleados e, proyectos p, partes_trabajo pt where 
	c.id=pp.idCliente AND p.id=pp.idProyecto AND pp.idEmpleadoResp=e.id AND pt.idPedido=pp.id AND pt.id=".$id;
	$res=$db->GetRow($sql);
	
	if(count($res)==0){
		//fourOfour();
	}
	$sy->assign('res', $res);
	
	$sqlA="select pmd.*, pmc.codigo from 
	partes_trabajo_codigo pmc, partes_trabajo pt, partes_trabajo_detalle pmd where 
	pmd.idPartesTrabajo=pt.id AND pmd.codigo=pmc.id AND pt.id=".$id;
	$detalle='';
	if($resA=$db->GetAll($sqlA)){
	  foreach($resA as $reA){
		$pedidoPor=$db->GetRow("select nombre from empleados where id=".$reA['idPedidoPor']);
		$revisadoPor=$db->GetRow("select nombre from empleados where id=".$reA['idRevisadoPor']);
	    $detalle.='<tr>
                                            	<td>'.date('d/m/Y', $reA['fecha']).'</td>
                                                <td>'.$reA['horas'].'</td>
                                                <td>'.$reA['codigo'].'</td>
                                                <td>'.$reA['concepto'].'</td>
                                                <td class="peqInput">'.$reA['DLN'].'</td>
                                            	<td class="peqInput">'.$reA['DSNY'].'</td>
												<td class="peqInput">'.$reA['TPG'].'</td>
                                                <td class="peqInput">'.$reA['INF'].'</td>
                                                <td class="peqInput">'.$reA['EDEN'].'</td>
                                                <td class="peqInput">'.$reA['PLN'].'</td>
                                                <td class="peqInput">'.$reA['CHQ'].'</td>
                                                <td class="peqInput">'.$reA['CRR'].'</td>
                                                <td class="peqInput">'.$reA['FRM'].'</td>
                                                <td class="peqInput">'.$reA['VRS'].'</td>
                                                <td>'.$pedidoPor['nombre'].'</td>
                                                <td>'.$revisadoPor['nombre'].'</td>
                                                <td>'.$reA['descripcion'].'</td>
                                            </tr>';
	  }
	}
	$sy->assign('detalle', $detalle);
	
	
	if(isset($_POST['pdf'])){
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
	
	$smarty->display('admin/ver-partes-de-trabajo-informe.tpl');
?>