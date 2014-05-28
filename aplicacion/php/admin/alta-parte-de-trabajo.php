<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/alta-parte-de-trabajo');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Alta parte de trabajo');
	$smarty->assign('activeTrabajo','start active');
	
	debug();
	$allowed=array(); 
	$fillRadios=false;
	$sy->assign('filasDeMas', 0);
	$post=$_POST;
	require_once(RUTA_BASE.'/aplicacion/includes/partes/functions.php');
/*	function filtraCampos($edita = false)
	{ 
		global $sqlProp, $sqlVal, $sql;
		$coma  = '';
		$error = false;
		if (!$edita) {
		    $_POST['frm-fecha']=time();
		}
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
	
	
	
	function insertaDet($idTra)
	{
		global $db;
		$orden=0;
		
		foreach ($_POST as $key => $val) {
			if (substr($key, 0, 4) == 'det-') {//det-fecha-1
				$pos=substr($key, 10);
				if (substr($key, 4, 5) != 'fecha')
                    continue;
				
				$sql = "insert into partes_trabajo_detalle 
							(idPartesTrabajo, fecha, horas, concepto, DLN, DSNY, TPG, INF, EDEN, PLN, CHQ, CRR, FRM, VRS, idRevisadoPor, idPedidoPor, descripcion, codigo, lugar) 
							values 
							($idTra, '" . sanitize($_POST['det-fecha-'.$pos], INT) . "', '" . sanitize($_POST['det-horas-'.$pos], SQL) . "', '" . sanitize($_POST['det-concepto-'.$pos], SQL) . "', '" . sanitize($_POST['det-DLN-'.$pos], SQL) . "', '" . sanitize($_POST['det-DSNY-'.$pos], SQL) . "', '" . sanitize($_POST['det-TPG-'.$pos], SQL) . "', '" . sanitize($_POST['det-INF-'.$pos], SQL) . "', '" . sanitize($_POST['det-EDEN-'.$pos], SQL) . "', '" . sanitize($_POST['det-PLN-'.$pos], SQL) . "', '" . sanitize($_POST['det-CHQ-'.$pos], SQL) . "', '" . sanitize($_POST['det-CRR-'.$pos], SQL) . "', '" . sanitize($_POST['det-FRM-'.$pos], SQL) . "', '" . sanitize($_POST['det-VRS-'.$pos], SQL) . "', '" . sanitize($_POST['det-idRevisadoPor-'.$pos], INT) . "', '" . sanitize($_POST['det-idPedidoPor-'.$pos], SQL) . "', '" . sanitize($_POST['det-descripcion-'.$pos], SQL) . "', '" . sanitize($_POST['det-codigo-'.$pos], SQL) . "', '" . sanitize($_POST['det-lugar-'.$pos], SQL) . "')";
				$db->execute($sql);
			}
		}
	}
	if(isset($_POST['enviar']) && !isset($_REQUEST['idTra'])){
		//NUMERO PEDIDO
		
		
		$sqlProp            = $sqlVal = '';
		$_POST['frm-fecha'] = time();
		$typeAdmin=isset($_SESSION['admin'])?$_SESSION['admin']:$_SESSION['administracion'];
		$_POST['frm-idUser'] = $typeAdmin;
		$error= filtraCampos();
		
		if(!$error){
			$limites=limitesFechaDia($_POST['frm-fecha']);
			$limiteMin=$limites['limiteMin'];
			$limiteMax=$limites['limiteMax'];
			$idPedido=sanitize($_POST['frm-idPedido'], INT);
			$sql="select id from partes_trabajo where idPedido=$idPedido AND fecha BETWEEN $limiteMin AND $limiteMax AND idUser=".$_POST['frm-idUser'];
			$idTra=false;
			if($resC=$db->GetRow($sql)){
			    $idTra=$resC['id'];
			}else{
			    $sqlIn="insert into partes_trabajo
				(".$sqlProp.") values 
				(".$sqlVal.")";
				if($db->execute($sqlIn)){
				    $idTra=$db->Insert_ID();
				}
			}
			if($idTra){
				insertaDet($idTra);
				
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
					//idPartesTrabajo, fecha, horas, concepto, DLN, DSNY, TPG, INF, ED/EN, PLN, CHQ, CRR, FRM, VRS, idRevisadoPor, idPedidoPor, descripcion, codigo, lugar
					$cod .= $coma . "'" . $_POST['det-codigo-' . $pos] . "'";
					$idPartesTrabajo .= $coma . "'" . $_POST['det-idPartesTrabajo-' . $pos] . "'";
					$fexa .= $coma . "'" . $post['det-fecha-' . $pos] . "'";
					$horas .= $coma . "'" . $_POST['det-horas-' . $pos] . "'";
					$concepto .= $coma . "'" . $_POST['det-concepto-' . $pos] . "'";
					$DLN .= $coma . "'" . $_POST['det-DLN-' . $pos] . "'";
					$DSNY .= $coma . "'" . $_POST['det-DSNY-' . $pos] . "'";
					$TPG .= $coma . "'" . $_POST['det-TPG-' . $pos] . "'";
					$INF .= $coma . "'" . $_POST['det-INF-' . $pos] . "'";
					$ED .= $coma . "'" . $_POST['det-EDEN-' . $pos] . "'";
					$PLN .= $coma . "'" . $_POST['det-PLN-' . $pos] . "'";
					$CHQ .= $coma . "'" . $_POST['det-CHQ-' . $pos] . "'";
					$CRR .= $coma . "'" . $_POST['det-CRR-' . $pos] . "'";
					$FRM .= $coma . "'" . $_POST['det-FRM-' . $pos] . "'";
					$VRS .= $coma . "'" . $_POST['det-VRS-' . $pos] . "'";
					$idPedidoPor .= $coma . "'" . $post['det-idPedidoPor-' . $pos] . "'";
					$idRevisadoPor .= $coma . "'" . $post['det-idRevisadoPor-' . $pos] . "'";
					$descripcion .= $coma . "'" . $post['det-descripcion-' . $pos] . "'";
					$lugar .= $coma . "'" . $post['det-lugar-' . $pos] . "'";
					$coma = ', ';
				}
			}
			   

			$sy->assign('codEdit', 'codEdit=Array(' . $cod . ');');
			$sy->assign('parteTrEdit', 'var parteTrEdit=Array(' . $idPartesTrabajo . ');');
			$sy->assign('fechaEdit', 'var fecha=Array(' . $fexa . ');');
			$sy->assign('horas', 'var horas=Array(' . $horas . ');');
			$sy->assign('concepto', 'var concepto=Array(' . $concepto . ');');
			$sy->assign('dln', 'var dln=Array(' . $DLN . ');');
			$sy->assign('dsny', 'var dsny=Array(' . $DSNY . ');');
			$sy->assign('tpg', 'var tpg=Array(' . $TPG . ');');
			$sy->assign('inf', 'var inf=Array(' . $INF . ');');
			$sy->assign('ed', 'var ed=Array(' . $ED . ');');
			$sy->assign('pln', 'var pln=Array(' . $PLN . ');');
			$sy->assign('chq', 'var chq=Array(' . $CHQ . ');');
			$sy->assign('crr', 'var crr=Array(' . $CRR . ');');
			$sy->assign('frm', 'var frm=Array(' . $FRM . ');');
			$sy->assign('vrs', 'var vrs=Array(' . $VRS . ');');
			$sy->assign('pedidoPor', 'var pedidoPor=Array(' . $idPedidoPor . ');');
			$sy->assign('revisadoPor', 'var revisadoPor=Array(' . $idRevisadoPor . ');');
			$sy->assign('descripcion', 'var descripcion=Array(' . $descripcion . ');');
			$sy->assign('lugar', 'var lugar=Array(' . $lugar . ');');
			$sy->assign('filasDeMasEdit', 'var filasDeMas=' . $_POST['filasDeMas'] . ';');
		}
		
		
	}elseif(isset($_REQUEST['idTra'])){
		$id=sanitize($_REQUEST['idTra'], INT);
		
		if(isset($_POST['idTra'])){
			$sql= '';
			$error= filtraCampos(true);
				
			if(!$error){
				$sqlIn="update partes_trabajo set
				".$sql." where id=".$id;
				if($db->execute($sqlIn)){
					if($db->execute('delete from partes_trabajo_detalle where idPartesTrabajo='.$id))
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
		
		$sqlEd="select * from partes_trabajo where id=".$id;
		$resEd=$db->GetRow($sqlEd);
		if(count($resEd)>0){
		  $sy->assign('data', $resEd);
		  $sy->assign('idTra', '<input type="hidden" name="idTra" value="'.$id.'">');
		  $sy->assign('edita', true);
		  $_POST['frm-idPedido']=$resEd['idPedido'];

			//DVULEVE VALORES
			$coma      = '';
			$sqlM      = "select * from partes_trabajo_detalle where idPartesTrabajo=" . $id." order by id ASC";
			if ($resM = $db->GetAll($sqlM)) {
				foreach ($resM as $reM) {
					$cod .= $coma . "'" . $reM['codigo'] . "'";
					$idPartesTrabajo .= $coma . "'" . $reM['idPartesTrabajo'] . "'";
					$fexa .= $coma . "'" . date('d/m/Y', $reM['fecha']) . "'";
					$horas .= $coma . "'" . $reM['horas'] . "'";
					$concepto .= $coma . "'" . $reM['concepto'] . "'";
					$DLN .= $coma . "'" . $reM['DLN'] . "'";
					$DSNY .= $coma . "'" . $reM['DSNY'] . "'";
					$TPG .= $coma . "'" . $reM['TPG'] . "'";
					$INF .= $coma . "'" . $reM['INF'] . "'";
					$ED .= $coma . "'" . $reM['EDEN'] . "'";
					$PLN .= $coma . "'" . $reM['PLN'] . "'";
					$CHQ .= $coma . "'" . $reM['CHQ'] . "'";
					$CRR .= $coma . "'" . $reM['CRR'] . "'";
					$FRM .= $coma . "'" . $reM['FRM'] . "'";
					$VRS .= $coma . "'" . $reM['VRS'] . "'";
					$idPedidoPor .= $coma . "'" . $reM['idPedidoPor'] . "'";
					$idRevisadoPor .= $coma . "'" . $reM['idRevisadoPor'] . "'";
					$descripcion .= $coma . "'" . $reM['descripcion'] . "'";
					$lugar .= $coma . "'" . $reM['lugar'] . "'";
					$coma = ', ';
				}
				$sy->assign('codEdit', 'codEdit=Array(' . $cod . ');');
				$sy->assign('parteTrEdit', 'var parteTrEdit=Array(' . $idPartesTrabajo . ');');
				$sy->assign('fechaEdit', 'var fecha=Array(' . $fexa . ');');
				$sy->assign('horas', 'var horas=Array(' . $horas . ');');
				$sy->assign('concepto', 'var concepto=Array(' . $concepto . ');');
				$sy->assign('dln', 'var dln=Array(' . $DLN . ');');
				$sy->assign('dsny', 'var dsny=Array(' . $DSNY . ');');
				$sy->assign('tpg', 'var tpg=Array(' . $TPG . ');');
				$sy->assign('inf', 'var inf=Array(' . $INF . ');');
				$sy->assign('ed', 'var ed=Array(' . $ED . ');');
				$sy->assign('pln', 'var pln=Array(' . $PLN . ');');
				$sy->assign('chq', 'var chq=Array(' . $CHQ . ');');
				$sy->assign('crr', 'var crr=Array(' . $CRR . ');');
				$sy->assign('frm', 'var frm=Array(' . $FRM . ');');
				$sy->assign('vrs', 'var vrs=Array(' . $VRS . ');');
				$sy->assign('pedidoPor', 'var pedidoPor=Array(' . $idPedidoPor . ');');
				$sy->assign('revisadoPor', 'var revisadoPor=Array(' . $idRevisadoPor . ');');
				$sy->assign('descripcion', 'var descripcion=Array(' . $descripcion . ');');
				$sy->assign('lugar', 'var lugar=Array(' . $lugar . ');');
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
	
	/*CODIGOS*/
	$sql="select id, codigo from partes_trabajo_codigo";
	$res=$db->GetAll($sql);
	$codigosHtml='';
	  foreach($res as $key=>$val){
	      $codigosHtml.='<option value="'.$val['id'].'">'.$val['codigo'].'</option>';
	  }
	$sy->assign('codigosHtml', $codigosHtml);
	$sy->assign('numCodig', count($res));
	//$sy->assign('numCodig', 5);
	
	$sel='';
	/*EMPLEADOS*/
	$sql="select id, nombre, apellido, apellidoDos from empleados";
	$res=$db->GetAll($sql);
	$empleadosHtml='';
	  foreach($res as $key=>$val){
		  if($idEmpleado==$val['id'])$sel='selected="selected"';
	      $empleadosHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['nombre'].' '.$val['apellido'].' '.$val['apellidoDos'].'</option>';
		  $sel='';
	  }
	$sy->assign('empleadosHtml', $empleadosHtml);
	
	
	$smarty->display('admin/alta-parte-de-trabajo.tpl');
?>