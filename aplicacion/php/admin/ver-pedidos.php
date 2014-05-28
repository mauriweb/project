<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/ver-pedidos');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Ver pedidos');
	$smarty->assign('activePedidos','start active');
	
	if(!isset($_GET['idPed'])){
	  fourOfour();
	}
	$sy->assign('idPedido', $_GET['idPed']);
	$id=sanitize($_GET['idPed'], INT);
	$sql="select pp.*, c.empresa, p.codigo, e.nombre from 
	partes_pedido pp, clientes c, empleados e, proyectos p where 
	c.id=pp.idCliente AND p.id=pp.idProyecto AND pp.idEmpleadoResp=e.id AND pp.id=$id";
	$res=$db->GetRow($sql);
	if(count($res)==0){
		fourOfour();
	}
	$sy->assign('res', $res);
	//echo '<pre>';print_r($res);echo '</pre>';
	
	$sqlA="select pp.*, e.nombre from partes_pedido_detalle pp, empleados e where e.id=pp.idEmpleado AND idPartesPedido=".$id;
	$detalle='';
	if($resA=$db->GetAll($sqlA)){
	  foreach($resA as $reA){
	    $detalle.='<tr>
                                            	<td>'.$reA['orden'].'</td>
                                                <td>'.$reA['descripcion'].'</td>
                                                <td>'.$reA['nombre'].'</td>
                                                <td>'.date('d/m/Y', $reA['fecha']).'</td>
                                            </tr>';
	  }
	}
	$sy->assign('detalle', $detalle);
	
	if(isset($_POST['pdf'])){
		include(RUTA_BASE."/aplicacion/includes/MPDF57/mpdf.php");
		$mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0);
		$mpdf->SetDisplayMode('fullpage');
		$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
		$urgente='No';
		if($res['urgente']=='s')$urgente='Si';
		$pedidoPorTel='No';
		if($res['pedidoPorTel']=='s')$pedidoPorTel='Si';
		$listadoDocumentos='No';
		if($res['listadoDocumentos']=='s')$listadoDocumentos='Si';
		$planificado='No';
		if($res['planificado']=='s')$planificado='Si';
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
		</head>
		<body>
		<div class="row">
					<div class="col-md-8">
										<div class="portlet-body flip-scroll">
											<table class="table table-bordered table-striped table-condensed flip-content">
												<thead class="flip-content">
													<tr>
														<th>Cliente</th>
														<th>Proyecto</th>
														<th>Encargado por</th>
														<th>Responsable del trabajo</th>
														<th>Departamento</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>'.$res['empresa'].'</td>
														<td>'.$res['codigo'].'</td>
														<td>'.$res['encargadoPor'].'</td>
														<td>'.$res['nombre'].'</td>
														<td>'.$res['departamento'].'</td>
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
														<th>Urgente</th>
														<th>Pedido telefónicamente</th>
														<th>Listado de documentos</th>
														<th>Planificado</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>'.$urgente.'</td>
														<td>'.$pedidoPorTel.'</td>
														<td>'.$listadoDocumentos.'</td>
														<td>'.$planificado.'</td>
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
														<th>Nº Orden</th>
														<th>Descripción</th>
														<th>Trabajador</th>
														<th>Fecha de inserción</th>
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
		</html>
		';
		$mpdf->WriteHTML($htmls);
		$mpdf->Output();
		exit;
		

	}
	
	
	$smarty->display('admin/ver-pedidos.tpl');
?>