<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/add-gastos');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Justificación de gastos');
	$smarty->assign('activeGastos','start active');
	
	
	debug();
	$allowed=array(); 
	$fillRadios=false;
	$sy->assign('filasDeMas', 0);
	$post=$_POST;
	require_once(RUTA_BASE.'/aplicacion/includes/partes/functions.php');
	/*function filtraCampos($edita = false)
	{ 
		global $sqlProp, $sqlVal, $sql;
		$coma  = '';
		$error = false;
		foreach ($_POST as $key => $val) {//VALIDACION EMPTY
			$realKey = substr($key, 4);
			if (substr($key, 0, 4) == 'frm-') {
				$_POST[$key] = trim($_POST[$key]);
				if ($_POST[$key] == '0') {
					$error = true;
					break;
				}
				if ($edita) {
					$sql .= $coma . $realKey . "='" . sanitize($_POST[$key], SQL) . "'"; 
				} else {
					$sqlProp .= $coma . $realKey;
					$sqlVal .= $coma . "'" . sanitize($_POST[$key], SQL) . "'";
				}
				$coma = ', ';
			} elseif (substr($key, 0, 4) == 'det-') {
				$_POST[$key] = trim($_POST[$key]);
				if(substr($key, 0, 9)=='det-fecha' && !$error && $_POST[$key]!=''){
					//$test_date = '03/22/2010';
					$test_arr  = explode('/', $_POST[$key]);
					if (!checkdate($test_arr[0], $test_arr[1], $test_arr[2])){//exit($key);
						$error=true;
						break;
					}
					$_POST[$key]=strtotime($_POST[$key]);
				}
				if ($_POST[$key] == '') {
					$error = true;
					break;
				}
			}
		}
		return $error;
	}*/
	
	function insertaDet($idGas)
	{
		global $db;
		$orden=0;
		foreach ($_POST as $key => $val) {
			if (substr($key, 0, 4) == 'det-') {//det-fecha-1
				$pos=substr($key, 10);
				if (substr($key, 4, 5) != 'fecha')
                    continue;
				$sql = "insert into gastos_detalle 
							(idGastos, DE, fecha, A, locomocionUno, locomocionDos, km, hotel, comidas, otrosGastosDetalle, otrosGastosEuros, total) 
							values 
							($idGas, '" . sanitize($_POST['det-DE-'.$pos], SQL) . "', '" . sanitize($_POST['det-fecha-'.$pos], SQL) . "', '" . sanitize($_POST['det-A-'.$pos], SQL) . "', '" . sanitize($_POST['det-locomocionUno-'.$pos], SQL) . "', '" . sanitize($_POST['det-locomocionDos-'.$pos], SQL) . "', '" . sanitize($_POST['det-km-'.$pos], SQL) . "', '" . sanitize($_POST['det-hotel-'.$pos], SQL) . "', '" . sanitize($_POST['det-comidas-'.$pos], SQL) . "', '" . sanitize($_POST['det-otrosGastosDetalle-'.$pos], SQL) . "', '" . sanitize($_POST['det-otrosGastosEuros-'.$pos], SQL) . "', '" . sanitize($_POST['det-total-'.$pos], SQL) . "')";
				$db->execute($sql);
			}
		}
	}
	if(isset($_POST['enviar']) && !isset($_REQUEST['idGas'])){
		//NUMERO PEDIDO
		
		
		$sqlProp            = $sqlVal = '';
		$_POST['frm-fecha'] = time();
		$typeAdmin=isset($_SESSION['admin'])?$_SESSION['admin']:$_SESSION['administracion'];
		$_POST['frm-idUser'] = $typeAdmin;
		$error= filtraCampos();
		
		if(!$error){
			$fechaEntrada=$_POST['frm-fecha'];
			$month=date('m', $fechaEntrada);
			$day=date('d', $fechaEntrada);
			$year=date('Y', $fechaEntrada);
			$limiteMin=mktime(0,0,0,$month, $day, $year);
			$limiteMax=mktime(24,60,60,$month, $day, $year);
			$idPedido=sanitize($_POST['frm-idPedido'], INT);
			$sql="select id from gastos where idPedido=$idPedido AND fecha BETWEEN $limiteMin AND $limiteMax AND idUser=".$_POST['frm-idUser'];
			$idGas=false;
			if($resC=$db->GetRow($sql)){
			    $idGas=$resC['id'];
			}else{
			    $sqlIn="insert into gastos
				(".$sqlProp.") values 
				(".$sqlVal.")";
				if($db->execute($sqlIn)){
				    $idGas=$db->Insert_ID();
				}
			}
			if($idGas){
				insertaDet($idGas);
				$sy->assign('mensaje', '<div class="alert alert-success">
<strong>Inserción con éxito!! </strong></div>');
			}else{
			    $sy->assign('mensaje', '<div class="alert alert-danger">
<strong>Error!! </strong> Inserción de datos incorrecta.</div>');
			}
		}else{
		  $sy->assign('mensaje', '<div class="alert alert-warning">
<strong>Atención!! </strong> Hay campos sin rellenar .</div>');
		  
		  $sy->assign('filasDeMas', $_POST['filasDeMas']); //GRANULOMETRIA
        
			$coma = $det_de=$fexa=$det_a=$locUno=$locDos=$km='';
			$pos=0;
			//DVULEVE VALORES
			foreach ($_POST as $key => $val) {
				if (substr($key, 0, 4) == 'det-') {
					if (substr($key, 4, 5) != 'fecha')
						continue;
					$pos=substr($key, 10);
					//idPartesTrabajo, fecha, horas, concepto, DLN, DSNY, TPG, INF, ED/EN, PLN, CHQ, CRR, FRM, VRS, idRevisadoPor, idPedidoPor, descripcion, codigo, lugar
					$det_de .= $coma . "'" . $_POST['det-DE-' . $pos] . "'";
					$det_a .= $coma . "'" . $_POST['det-A-' . $pos] . "'";
					$fexa .= $coma . "'" . $post['det-fecha-' . $pos] . "'";
					$locUno .= $coma . "'" . $_POST['det-locomocionUno-' . $pos] . "'";
					$locDos .= $coma . "'" . $_POST['det-locomocionDos-' . $pos] . "'";
					$km .= $coma . "'" . $_POST['det-km-' . $pos] . "'";
					$hotel .= $coma . "'" . $_POST['det-hotel-' . $pos] . "'";
					$comidas .= $coma . "'" . $_POST['det-comidas-' . $pos] . "'";
					$otrosGasDet .= $coma . "'" . $_POST['det-otrosGastosDetalle-' . $pos] . "'";
					$otrosGastEu .= $coma . "'" . $_POST['det-otrosGastosEuros-' . $pos] . "'";
					$total .= $coma . "'" . $_POST['det-total-' . $pos] . "'";
					$coma = ', ';
				}
			}
			$sy->assign('det_de', 'det_de=Array(' . $det_de . ');');
			$sy->assign('det_a', 'var det_a=Array(' . $det_a . ');');
			$sy->assign('fexa', 'var fecha=Array(' . $fexa . ');');
			$sy->assign('locUno', 'var locUno=Array(' . $locUno . ');');
			$sy->assign('locDos', 'var locDos=Array(' . $locDos . ');');
			$sy->assign('km', 'var km=Array(' . $km . ');');
			$sy->assign('hotel', 'var hotel=Array(' . $hotel . ');');
			$sy->assign('comidas', 'var comidas=Array(' . $comidas . ');');
			$sy->assign('otrosGasDet', 'var otrosGasDet=Array(' . $otrosGasDet . ');');
			$sy->assign('otrosGastEu', 'var otrosGastEu=Array(' . $otrosGastEu . ');');
			$sy->assign('total', 'var total=Array(' . $total . ');');
			$sy->assign('filasDeMasEdit', 'var filasDeMas=' . $_POST['filasDeMas'] . ';');
		}
		
		
	}elseif(isset($_REQUEST['idGas'])){
		$id=sanitize($_REQUEST['idGas'], INT);
		
		if(isset($_POST['idGas'])){
			$sql= '';
			$error= filtraCampos(true);
				
			if(!$error){
				$sqlIn="update gastos set
				".$sql." where id=".$id;
				if($db->execute($sqlIn)){
					if($db->execute('delete from gastos_detalle where idGastos='.$id))
					  insertaDet($id);
					$sy->assign('mensaje', 'actualizacion ok');
				}else{
					$sy->assign('mensaje', 'error actualizacion');
				}
			}else{
			  $sy->assign('mensaje', '<div class="alert alert-warning">
<strong>Atención!! </strong> Hay campos sin rellenar .</div>');
			}
		}
		
		$sqlEd="select * from gastos where id=".$id;
		$resEd=$db->GetRow($sqlEd);
		if(count($resEd)>0){
		  $sy->assign('data', $resEd);
		  $sy->assign('idGas', '<input type="hidden" name="idGas" value="'.$id.'">');
		  $sy->assign('edita', true);
		  $_POST['frm-idPedido']=$resEd['idPedido'];

			//DVULEVE VALORES
			$coma      = '';
			$sqlM      = "select * from gastos_detalle where idGastos=" . $id;
			if ($resM = $db->GetAll($sqlM)) {
				foreach ($resM as $reM) {
					
					$det_de .= $coma . "'" . $reM['DE'] . "'";
					$det_a .= $coma . "'" . $reM['A'] . "'";
					$fexa .= $coma . "'" . date('m/d/Y', $reM['fecha']) . "'";
					$locUno .= $coma . "'" . $reM['locomocionUno'] . "'";
					$locDos .= $coma . "'" . $reM['locomocionDos'] . "'";
					$km .= $coma . "'" . $reM['km'] . "'";
					$hotel .= $coma . "'" . $reM['hotel'] . "'";
					$comidas .= $coma . "'" . $reM['comidas'] . "'";
					$otrosGasDet .= $coma . "'" . $reM['otrosGastosDetalle'] . "'";
					$otrosGastEu .= $coma . "'" . $reM['otrosGastosEuros'] . "'";
					$total .= $coma . "'" . $reM['total'] . "'";
					$coma = ', ';

				}
				
				$sy->assign('det_de', 'det_de=Array(' . $det_de . ');');
				$sy->assign('det_a', 'var det_a=Array(' . $det_a . ');');
				$sy->assign('fexa', 'var fecha=Array(' . $fexa . ');');
				$sy->assign('locUno', 'var locUno=Array(' . $locUno . ');');
				$sy->assign('locDos', 'var locDos=Array(' . $locDos . ');');
				$sy->assign('km', 'var km=Array(' . $km . ');');
				$sy->assign('hotel', 'var hotel=Array(' . $hotel . ');');
				$sy->assign('comidas', 'var comidas=Array(' . $comidas . ');');
				$sy->assign('otrosGasDet', 'var otrosGasDet=Array(' . $otrosGasDet . ');');
				$sy->assign('otrosGastEu', 'var otrosGastEu=Array(' . $otrosGastEu . ');');
				$sy->assign('total', 'var total=Array(' . $total . ');');
			    $sy->assign('filasDeMas',  (count($resM) - 1) );
			

				
			}

		}else{
		  fourOfour();
		}
		
		
	}


	
	/*PEDIDOS*/
	$pedidosHtml=$sel='';
	$sql="select id, numero from partes_pedido";
	if($resP=$db->GetAll($sql)){
	  foreach($resP as $key=>$val){ 
		  if($_POST['frm-idPedido']==$val['id'])$sel='selected="selected"';
	      $pedidosHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['numero'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('pedidosHtml', $pedidosHtml);
	
	
	
	
	$smarty->display('admin/add-gastos.tpl');
?>