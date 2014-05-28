<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/ver-parte-de-material');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Ver parte de material');
	$smarty->assign('activeMaterial','start active');
	
	if(!isset($_GET['idMat'])){
	  fourOfour();
	}
	$sy->assign('idMat', $_GET['idMat']);
	debug();
	$id=sanitize($_GET['idMat'], INT);
	$sql="select pp.*, c.empresa, p.codigo, e.nombre, pp.encargadoPor, pm.numFactura from 
	partes_pedido pp, clientes c, empleados e, proyectos p, partes_material pm where 
	c.id=pp.idCliente AND p.id=pp.idProyecto AND pp.idEmpleadoResp=e.id AND pm.idPedido=pp.id AND pm.id=".$id;
	$res=$db->GetRow($sql);
	
	if(count($res)==0){
		//fourOfour();
	}
	$sy->assign('res', $res);

	
	$sqlA="select pmd.*, pmc.codigo from 
	partes_material_codigos pmc, partes_material pm, partes_material_detalle pmd where 
	pmd.idPartesMaterial=pm.id AND pmd.codigo=pmc.id AND pm.id=".$id;
	$detalle='';
	if($resA=$db->GetAll($sqlA)){
	  foreach($resA as $reA){
	    $detalle.='<tr>
                                            	<td>'.date('d/m/Y', $reA['fecha']).'</td>
                                                <td>'.$reA['codigo'].'</td>
                                            	<td>'.$reA['dimensiones'].'</td>
                                                <td>'.$reA['totFact'].'</td>
                                                <td>'.$reA['totNoFact'].'</td>
                                                <td>'.$reA['pedidoPor'].'</td>
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
                                                <th>Utilizado por</th>
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
                                                <th rowspan="2">Código</th>
                                                <th rowspan="2">Dimensiones</th>
                                                <th class="colo" colspan="2">Total</th>
                                                <th rowspan="2">Pedido por</th>
                                            </tr>
                                        </thead>
                                        <thead class="flip-content">
                                            <tr class="letraPeq">
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>no fact</th>
                                                <th>facturable</th>
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
	
	
	$smarty->display('admin/ver-partes-de-material.tpl');
?>