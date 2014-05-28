<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/alta-parte-de-material');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Alta parte de material');
	$smarty->assign('activeMaterial','start active');
	
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
		foreach ($_POST as $key => $val) { //VALIDACION EMPTY
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
				if(substr($key, 0, 9)=='det-fecha' && !$error){
					//$test_date = '03/22/2010';
					$test_arr  = explode('/', $_POST[$key]);
					if (!checkdate($test_arr[0], $test_arr[1], $test_arr[2])){
						$error=true;
						break;
					}
					$_POST[$key]=strtotime($_POST[$key]);
				}
				if ($_POST[$key] == '') {//exit($key);
					$error = true;
					break;
				}
			}
		}
		return $error;
	}*/
	
	function insertaDet($idMat)
	{
		global $db;
		$orden=0;
		$codInsertados=array();
		foreach ($_POST as $key => $val) {
			if (substr($key, 0, 4) == 'det-') {//det-fecha-1
				$pos=substr($key, 10);
				if (substr($key, 4, 5) != 'fecha' || in_array($_POST['det-codigo-'.$pos], $codInsertados))
                    continue;
				$codInsertados[]=$_POST['det-codigo-'.$pos];
				$sql = "insert into partes_material_detalle 
							(idPartesMaterial, fecha, dimensiones, totFact, totNoFact, pedidoPor, codigo) 
							values 
							($idMat, '" . sanitize($_POST['det-fecha-'.$pos], INT) . "', '" . sanitize($_POST['det-dim-'.$pos], SQL) . "', '" . sanitize($_POST['det-fact-'.$pos], SQL) . "', '" . sanitize($_POST['det-noFact-'.$pos], SQL) . "', '" . sanitize($_POST['det-pedidoPor-'.$pos], SQL) . "', '" . sanitize($_POST['det-codigo-'.$pos], SQL) . "')";
				$db->execute($sql);
			}
		}
	}
	if(isset($_POST['enviar']) && !isset($_REQUEST['idMat'])){
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
			$sql="select id from partes_material where idPedido=$idPedido AND fecha BETWEEN $limiteMin AND $limiteMax AND idUser=".$_POST['frm-idUser'];
			$idMat=false;
			if($resC=$db->GetRow($sql)){
			    $idMat=$resC['id'];
			}else{
			    $sqlIn="insert into partes_material
				(".$sqlProp.") values 
				(".$sqlVal.")";
				if($db->execute($sqlIn)){
				    $idMat=$db->Insert_ID();
				}
			}
			if($idMat){
				insertaDet($idMat);
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
        
			$coma = $cod=$fexa=$dim=$fact=$noFact=$pedidoPor='';
			$pos=0;
			//DVULEVE VALORES
			foreach ($_POST as $key => $val) {
				if (substr($key, 0, 4) == 'det-') {
					if (substr($key, 4, 5) != 'fecha')
						continue;
					$pos=substr($key, 10);
					$cod .= $coma . "'" . $_POST['det-cod-' . $pos] . "'";
					$dim .= $coma . "'" . $_POST['det-dim-' . $pos] . "'";
					$fexa .= $coma . "'" . $post['det-fecha-' . $pos] . "'";
					$fact .= $coma . "'" . $_POST['det-fact-' . $pos] . "'";
					$noFact .= $coma . "'" . $_POST['det-noFact-' . $pos] . "'";
					$pedidoPor .= $coma . "'" . $post['det-pedidoPor-' . $pos] . "'";
					$coma = ', ';
				}
			}
			$filasDeMas = 'var filasDeMas=' . $_POST['filasDeMas'] . ';';
			$sy->assign('codEdit', 'desc=Array(' . $cod . ');');
			$sy->assign('dimEdit', 'desc=Array(' . $dim . ');');
			$sy->assign('fechaEdit', 'var fecha=Array(' . $fexa . ');');
			$sy->assign('noFactEdit', 'desc=Array(' . $noFact . ');');
			$sy->assign('factEdit', 'desc=Array(' . $fact . ');');
			$sy->assign('pedidoPorEdit', 'var fecha=Array(' . $pedidoPor . ');');
			$sy->assign('filasDeMasEdit', $filasDeMas);
		}
		
		
	}elseif(isset($_REQUEST['idMat'])){
		$id=sanitize($_REQUEST['idMat'], INT);
		
		if(isset($_POST['idMat'])){
			$sql= '';
			$error= filtraCampos(true);
				
			if(!$error){
				$sqlIn="update partes_material set
				".$sql." where id=".$id;
				if($db->execute($sqlIn)){
					if($db->execute('delete from partes_material_detalle where idPartesMaterial='.$id))
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
		
		$sqlEd="select * from partes_material where id=".$id;
		$resEd=$db->GetRow($sqlEd);
		if(count($resEd)>0){
		  $sy->assign('data', $resEd);
		  $sy->assign('idMat', '<input type="hidden" name="idMat" value="'.$id.'">');
		  $sy->assign('edita', true);
		  $_POST['frm-idPedido']=$resEd['idPedido'];

			//DVULEVE VALORES
			$coma      = '';
			$sqlM      = "select * from partes_material_detalle where idPartesMaterial=" . $id;
			if ($resM = $db->GetAll($sqlM)) {
				foreach ($resM as $reM) {
					$cod .= $coma . "'" . $reM['codigo'] . "'";
					$dim .= $coma . "'" . $reM['dimensiones'] . "'";
					$fexa .= $coma . "'" . date('d/m/Y', $reM['fecha']) . "'";
					$fact .= $coma . "'" . $reM['totFact'] . "'";
					$noFact .= $coma . "'" . $reM['totNoFact'] . "'";
					$pedidoPor .= $coma . "'" . $reM['pedidoPor'] . "'";
					$coma = ', ';

				}
				$sy->assign('codEdit', 'cod=Array(' . $cod . ');');
				$sy->assign('dimEdit', 'var dim=Array(' . $dim . ');');
				$sy->assign('fechaEdit', 'var fecha=Array(' . $fexa . ');');
				$sy->assign('noFactEdit', 'var noFact=Array(' . $noFact . ');');
				$sy->assign('factEdit', 'var fact=Array(' . $fact . ');');
				$sy->assign('pedidoPorEdit', 'var pedidoPor=Array(' . $pedidoPor . ');');
				$sy->assign('filasDeMasEdit', 'var filasDeMas=' . (count($resM) - 1) . ';');
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
	
	/*CODIGOS*/
	$sql="select id, codigo from partes_material_codigos";
	$res=$db->GetAll($sql);
	$codigosHtml='';
	  foreach($res as $key=>$val){
	      $codigosHtml.='<option value="'.$val['id'].'">'.$val['codigo'].'</option>';
	  }
	$sy->assign('codigosHtml', $codigosHtml);
	$sy->assign('numCodig', count($res));
	
	
	$smarty->display('admin/alta-parte-de-material.tpl');
?>