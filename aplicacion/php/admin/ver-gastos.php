<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/ver-gastos');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Justificación de gastos');
	$smarty->assign('activeGastos','start active');
	
	if(!isset($_GET['idGas'])){
	  fourOfour();
	}
	$sy->assign('idGas', $_GET['idGas']);
	debug();
	$id=sanitize($_GET['idGas'], INT);
	$sql="SELECT pp.numero, c.empresa, p.codigo, u.usuario, g.numFactura
	FROM gastos g, clientes c, usuarios u, proyectos p, partes_pedido pp
	WHERE c.id = pp.idCliente
	AND p.id = pp.idProyecto
	AND g.idUser = u.id
	AND g.idPedido = pp.id
	AND g.id =".$id;
	$res=$db->GetRow($sql);
	
	if(count($res)==0){
		fourOfour();
	}
	$sy->assign('res', $res);
	
	$sqlA="select * from 
	gastos_detalle gd where 
	gd.idGastos=".$id;
	$detalle='';
	if($resA=$db->GetAll($sqlA)){
	  foreach($resA as $reA){
	    $detalle.='<tr>
                                            	<td>'.date('d/m/Y', $reA['fecha']).'</td>
                                               	<td>'.$reA['DE'].'</td>
                                                <td>'.$reA['A'].'</td>
                                                
                                                <td>'.$reA['locomocionUno'].'</td>
                                                <td>'.$reA['locomocionDos'].'</td>
                                                <td>'.$reA['km'].'</td>
                                                
                                                <td>'.$reA['hotel'].'</td>
                                                <td>'.$reA['comidas'].'</td>
                                                
                                                <td>'.$reA['otrosGastosDetalle'].'</td>
                                                <td>'.$reA['otrosGastosEuros'].'€</td>
                                                <td>'.$reA['total'].'€</td>
                                                
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
                                                <th>Trabajador</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
											<td>'.$res['empresa'].'</td>
														<td>'.$res['codigo'].'</td>

														<td>'.$res['usuario'].'</td>

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
                                                <th>Nº Pedido</th>
                                                <th>Nº Factura</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td>'.$res['numero'].'</td>
                                                <td>'.$res['numFactura'].'</td>
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
                                                <th rowspan="2">Fecha</th>
                                                <th rowspan="2">De</th>
                                                <th rowspan="2">A</th>
                                                <th colspan="3">Locomoción</th>
                                                <th rowspan="2">Hotel</th>
                                                <th rowspan="2">Comidas</th>
                                                <th colspan="2">Otros gastos</th>
                                                <th rowspan="2">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <thead class="flip-content">
                                            <tr class="letraPeq">
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>avión / ff.cc.</th>
                                                <th>autobus / taxi</th>
                                                <th>km</th>
                                                <th></th>
                                                <th></th>
                                                <th>detalle</th>
                                                <th>€</th>
                                                <th></th>
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
	
	
	$smarty->display('admin/ver-gastos.tpl');
?>