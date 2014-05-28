<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/ver-parte-de-trabajo');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Ver parte de trabajo');
	$smarty->assign('activeTrabajo','start active');
	
	
	if(!isset($_GET['idTra'])){
	  fourOfour();
	}
	$sy->assign('idTra', $_GET['idTra']);
	
	debug();
	$id=sanitize($_GET['idTra'], INT);
	$sy->assign('creador', dameUsuario($idUser));
	$sql="select pp.numero, c.empresa, p.codigo, e.nombre, pp.encargadoPor, pt.numFactura from 
	partes_pedido pp, clientes c, empleados e, proyectos p, partes_trabajo pt where 
	c.id=pp.idCliente AND p.id=pp.idProyecto AND pp.idEmpleadoResp=e.id AND pt.idPedido=pp.id AND pt.id=".$id;
	$res=$db->GetRow($sql);
	
	if(count($res)==0){
		fourOfour();
	}
	$sy->assign('res', $res);
	
	$sqlA="select pmd.*, pmc.codigo from 
	partes_trabajo_codigo pmc, partes_trabajo pt, partes_trabajo_detalle pmd where 
	pmd.idPartesTrabajo=pt.id AND pmd.codigo=pmc.id AND pt.id=".$id;
	$detalle=$detallePdf='';
	if($resA=$db->GetAll($sqlA)){
	  $num=0;
	  foreach($resA as $reA){
		
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
                                                <td>'.$reA['idPedidoPor'].'</td>
                                                <td>'.$revisadoPor['nombre'].'</td>
                                                <td>'.$reA['descripcion'].'</td>
                                            </tr>';
		$num++;
		$detallePdf.='<tr class="light">
                            <td style="width:5%;">'.date('d/m/Y', $reA['fecha']).'</td> 
                            <td style="width:5%;">'.$reA['horas'].'</td> 
                            <td style="width:10%;">'.$reA['concepto'].'</td>
                            					<td class="peq">'.$reA['DLN'].'</td>
                                                <td class="peq">'.$reA['DSNY'].'</td>
                                                <td class="peq">'.$reA['TPG'].'</td>
												<td class="peq">'.$reA['INF'].'</td>
                                                <td class="peq">'.$reA['EDEN'].'</td>
                                                <td class="peq">'.$reA['PLN'].'</td>
                                                <td class="peq">'.$reA['CHQ'].'</td>
                                                <td class="peq">'.$reA['CRR'].'</td>
                                                <td class="peq">'.$reA['FRM'].'</td>
                                                <td class="peq">'.$reA['VRS'].'</td>             
                           	<td style="width:10%;">'.$pedidoPor['nombre'].'</td>
                           	<td style="width:10%;">'.$revisadoPor['nombre'].'</td>
                           	<td style="width:10%;">Si</td>
                           	<td style="width:40%;">'.$reA['descripcion'].'</td>
                        </tr>';
	   if($num>=16)$num=0;
	  }
	}
	$sy->assign('detalle', $detalle);
	
	if($num<16){
		for($i=$num;$i<16;$i++){
			$detallePdf.='<tr class="light">
                            <td style="width:5%;">&nbsp;</td> 
                            <td style="width:5%;">&nbsp;</td> 
                            <td style="width:10%;">&nbsp;</td>
                            					<td class="peq">&nbsp;</td>
                                                <td class="peq">&nbsp;</td>
                                                <td class="peq">&nbsp;</td>
                                                <td class="peq">&nbsp;</td>
                                                <td class="peq">&nbsp;</td>
                                                <td class="peq">&nbsp;</td>
                                                <td class="peq">&nbsp;</td>
                                                <td class="peq">&nbsp;</td>
                                                <td class="peq">&nbsp;</td>
                                                <td class="peq">&nbsp;</td>
                           	<td style="width:10%;">&nbsp;</td>
                           	<td style="width:10%;">&nbsp;</td>
                           	<td style="width:10%;">&nbsp;</td>
                           	<td style="width:40%;">&nbsp;</td>
                        </tr>';
		}
	}
	
	
	if(isset($_POST['pdf'])){
		include(RUTA_BASE."/aplicacion/includes/MPDF57/mpdf.php");
		$mpdf=new mPDF('utf-8', array(297,210));
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

$htmls='<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">

				body{
					font-family:Verdana, Geneva, sans-serif;
					font-size:11px;
					font-weight:bold;
				}
				.table{
					border-top: 1px solid #000;
					border-bottom: 1px solid #000;
					border-spacing:0;
					border-collapse: collapse;
					position:relative;
				}
				
				.text_left{
					text-align:left;	
				}
				
				.min{
					width:30%;	
				}
				
				
				.minimo_titulo{
					width:15%;	
					font-size:12px;
					font-weight:lighter;
					text-align:right;
				}
				.minimo_text{
					width:15%;	
					font-size:13px;
					font-weight:bold;
					padding-left:10px;
					
				}
				
				.left{
					float:left;
					position:relative;	
				}
				
				.right{
					float:right;
					position:relative;
				}
				h1{
					font-size:16px;	
				}
				.margin_top{
					margin-top:10px;
				}
				.padding_top{
					height:40px;
				}
				
				.table_gran tr td{
					border: thin solid #000;
					border-collapse: collapse;
					text-align:center;
					padding:5px;
				}
				.table_gran tr td.peq{
					width:2%;
					font-size:7px;
					padding: 0px;
				}
				table{
					border-collapse:collapse;
				}
				.black{
					font-weight:bold;
				}
				.light{
					font-weight:lighter;	
				}
				</style>
</head>

<body>
           <div class="contenedor">
           	<h1>PARTE DE TRABAJO</h1>
				<table width="57%" class="left text_left min">
                	<thead>
                        <tr class="min">
                            <td width="13%" class="minimo_titulo">CLIENTE</td> 
                            <td width="37%" class="minimo_text">'.$res['empresa'].'</td> 
                            
                            <td width="25%" class="minimo_titulo">NªPEDIDO</td> 
                            <td width="25%" class="minimo_text">'.$res['numero'].'</td> 
                        </tr>
                        <tr class="min">
                        	<td class="minimo_titulo">PROYECTO</td>
                            <td class="minimo_text">'.$res['codigo'].'</td>
                            
                            <td class="minimo_titulo">NºFACTURA</td> 
                            <td class="minimo_text">'.$res['numFactura'].'</td>  
                        </tr>
                        <tr class="min">
                            <td class="minimo_titulo">ENCARGADO POR</td>
                            <td class="minimo_text">'.$res['encargadoPor'].'</td> 
                            
                            <td class="minimo_titulo">&nbsp;</td> 
                            <td class="minimo_text">&nbsp;</td> 
                        </tr>
                        
                        
                        
                    </thead>
                </table>
				
				
				
				
                <div style="clear:both;"></div>
             </div>
             
             <div class="margin_top">
                <table class="left text_left min">
                	<thead>
                        <tr class="min">
                            <td class="minimo_titulo">TRABAJO REALIZADO POR</th> 
                            <td class="minimo_text">'.$res['nombre'].'</td> 
                        </tr>
                    </thead>
                </table>
				
                <div style="clear:both;"></div>
             </div>
                
           </div> 
           
           <div class="margin_top">
                <table class="left text_left table_gran">
                        <tr class="black">
                            <td style="width:5%;">FECHA</td> 
                            <td style="width:5%;">CANTIDAD</td> 
                            <td style="width:10%;">CONCEPTO</td>
                            					<td class="peq">DLN</td>
                                                <td class="peq">DSÑ</td>
                                                <td class="peq">TPG</td>
                                                <td class="peq">INF</td>
                                                <td class="peq">ED/EN</td>
                                                <td class="peq">PLN</td>
                                                <td class="peq">CHQ</td>
                                                <td class="peq">CRR</td>
                                                <td class="peq">FRM</td>
                                                <td class="peq">VRS</td>
                           	<td style="width:10%;">PEDIDO POR</td>
                           	<td style="width:10%;">REVISADO POR</td>
                           	<td style="width:10%;">FIRMA</td>
                           	<td style="width:40%;">DESCRIPCIÓN DEL TRABAJO</td>
                        </tr>
                        
                        '.$detallePdf.'
                    
                </table>
                
                
                <div style="clear:both;"></div>
             </div>                         
                                       
                                     
</body>
</html>';

		$mpdf->WriteHTML($htmls);
		$mpdf->Output();
		exit;
		

	}
	
	
	$smarty->display('admin/ver-partes-de-trabajo.tpl');
?>