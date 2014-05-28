<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/add-pedidos');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Add-pedidos');
	$smarty->assign('activePedidos','start active');
	
	debug();
	$allowed=array(); 
	$fillRadios=false;
	$sy->assign('filasDeMas', 0);
	$post=$_POST;
	function filtraCampos($edita = false)
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
	}
	
	function insertaDet($idPed)
	{
		global $db;
		$orden=0;
		$empleadosInsertados=array();
		foreach ($_POST as $key => $val) {
			if (substr($key, 0, 4) == 'det-') {//det-descripcion-1
				$orden++;
				$pos=substr($key, 16);
				if (substr($key, 4, 11) != 'descripcion' || in_array($_POST['det-idEmpleado-'.$pos], $empleadosInsertados))
                    continue;
				$empleadosInsertados[]=$_POST['det-idEmpleado-'.$pos];
				$sql = "insert into partes_pedido_detalle 
							(orden, descripcion, idEmpleado, idPartesPedido, fecha) 
							values 
							($pos, '" . sanitize($_POST['det-descripcion-'.$pos], SQL) . "', '" . sanitize($_POST['det-idEmpleado-'.$pos], INT) . "', '" . $idPed. "', '" . sanitize($_POST['det-fecha-'.$pos], INT) . "')";
				$db->execute($sql);
			}
		}
	}
	if(isset($_POST['enviar']) && !isset($_REQUEST['idPed'])){
		//NUMERO PEDIDO
		
		
		$sqlProp            = $sqlVal = '';
		$_POST['frm-fecha'] = time();
		$error= filtraCampos();
		
		if(!$error){
			$sqlIn="insert into partes_pedido 
			(".$sqlProp.") values 
			(".$sqlVal.")";
			if($db->execute($sqlIn)){
				$idPed=$db->Insert_ID();
				$numero=str_pad($idPed, 4, '0', STR_PAD_LEFT);
				$numero='P-'.date('y', time()).'-'.$numero;
				$db->execute("update partes_pedido set numero='".$numero."' where id=".$idPed);
				insertaDet($idPed);
				$sy->assign('mensaje', '<div class="alert alert-success">
<strong>Inserción con éxito!! </strong></div>');
			}else{
			    $sy->assign('mensaje', '<div class="alert alert-danger">
<strong>Error!! </strong> Inserción de datos incorrecta.</div>');
			}
		}else{
		  $sy->assign('mensaje', '<div class="alert alert-warning">
<strong>Atención!! </strong> Hay campos sin rellenar .</div>');
		  $fillRadios=true;
		  $sy->assign('urgente'.$_POST['frm-urgente'], 'checked="checked"');
		  $sy->assign('pedXtel'.$_POST['frm-pedidoPorTel'], 'checked="checked"');
		  $sy->assign('list'.$_POST['frm-listadoDocumentos'], 'checked="checked"');
		  $sy->assign('plan'.$_POST['frm-planificado'], 'checked="checked"');
		  
		  $sy->assign('filasDeMas', $_POST['filasDeMas']); //GRANULOMETRIA
        
			$data = array();
			$coma = '';
			//DVULEVE VALORES
			foreach ($_POST as $key => $val) {
				$realKey = substr($key, 4);
				if (substr($key, 0, 4) == 'frm-') {
					$data[$realKey] = $val;
				}elseif (substr($key, 0, 4) == 'det-') {
					if (substr($key, 4, 11) != 'descripcion')
						continue;
					$pos=substr($key, 16);
					$desc .= $coma . "'" . $_POST[$key] . "'";
					$emp .= $coma . "'" . $_POST['det-idEmpleado-' . $pos] . "'";
					$fexa .= $coma . "'" . $post['det-fecha-' . $pos] . "'";
					$coma = ', ';
				}
			}
			$descripcion        = 'desc=Array(' . $desc . ');';
			$trabajador        = 'var trab=Array(' . $emp . ');';
			$fecha        = 'var fecha=Array(' . $fexa . ');';
			$filasDeMas = 'var filasDeMas=' . $_POST['filasDeMas'] . ';';
			$sy->assign('descEdit', $descripcion);
			$sy->assign('trabEdit', $trabajador);
			$sy->assign('fechaEdit', $fecha);
			$sy->assign('filasDeMasEdit', $filasDeMas);
			$sy->assign('data', $data);
		}
		
		
	}elseif(isset($_REQUEST['idPed'])){
		$id=sanitize($_REQUEST['idPed'], INT);
		
		if(isset($_POST['idPed'])){
			$sql= '';
			$error= filtraCampos(true);
				
			if(!$error){
				$sqlIn="update partes_pedido set
				".$sql." where id=".$id;
				if($db->execute($sqlIn)){
					if($db->execute('delete from partes_pedido_detalle where idPartesPedido='.$id))
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
		
		$sqlEd="select * from partes_pedido where id=".$id;
		$resEd=$db->GetRow($sqlEd);
		if(count($resEd)>0){
		  $sy->assign('data', $resEd);
		  $sy->assign('idPed', '<input type="hidden" name="idPed" value="'.$id.'">');
		  $sy->assign('edita', true);
		  $_POST['frm-idCliente']=$resEd['idCliente'];
		  $_POST['frm-idProyecto']=$resEd['idProyecto'];
		  $_POST['frm-idEmpleadoResp']=$resEd['idEmpleadoResp'];
		  
		  $fillRadios=true;
		  $sy->assign('urgente'.$resEd['urgente'], 'checked="checked"');
		  $sy->assign('pedXtel'.$resEd['pedidoPorTel'], 'checked="checked"');
		  $sy->assign('list'.$resEd['listadoDocumentos'], 'checked="checked"');
		  $sy->assign('plan'.$resEd['planificado'], 'checked="checked"');
			$pos=0;
			//DVULEVE VALORES
			$coma      = '';
			$sqlM      = "select * from partes_pedido_detalle where idPartesPedido=" . $id;
			if ($resM = $db->GetAll($sqlM)) {
				foreach ($resM as $reM) {
						$desc .= $coma . "'" . $reM['descripcion'] . "'";
						$emp .= $coma . "'" . $reM['idEmpleado'] . "'";
						$fexa .= $coma . "'" . date('d/m/Y', $reM['fecha']) . "'";
						$coma = ', ';

				}
				$descripcion        = 'desc=Array(' . $desc . ');';
				$trabajador        = 'var trab=Array(' . $emp . ');';
				$fecha        = 'var fecha=Array(' . $fexa . ');';
				$filasDeMas = 'var filasDeMas=' . (count($resM) - 1) . ';';
				$sy->assign('descEdit', $descripcion);
				$sy->assign('trabEdit', $trabajador);
				$sy->assign('fechaEdit', $fecha);
				$sy->assign('filasDeMasEdit', $filasDeMas);
			}

		}else{
		  fourOfour();
		}
		
		
	}
	if(!$fillRadios){
	    $sy->assign('urgentes', 'checked="checked"');
		$sy->assign('pedXtels', 'checked="checked"');
		$sy->assign('lists', 'checked="checked"');
		$sy->assign('plans', 'checked="checked"');
	}
	require_once(RUTA_BASE.'/aplicacion/includes/admin/selects.php');
	$sel='';
	/*CLIENTES*/
	$sy->assign('clientesHtml', dame_clientes($_POST['frm-idCliente']));
	
	/*PROYECTOS*/
	$proyectosHtml='';
	$sql="select id, codigo from proyectos";
	if($resP=$db->GetAll($sql)){
	  foreach($resP as $key=>$val){ 
		  if($_POST['frm-idProyecto']==$val['id'])$sel='selected="selected"';
	      $proyectosHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['codigo'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('proyectosHtml', $proyectosHtml);
	
	/*EMPLEADOS*/
	$sql="select id, nombre, apellido, apellidoDos from empleados";
	$res=$db->GetAll($sql);
	$empleadosHtml='';
	  foreach($res as $key=>$val){
		  if($_POST['frm-idEmpleadoResp']==$val['id'])$sel='selected="selected"';
	      $empleadosHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['nombre'].' '.$val['apellido'].' '.$val['apellidoDos'].'</option>';
		  $sel='';
	  }
	$sy->assign('empleadosHtml', $empleadosHtml);
	$sy->assign('numEmp', count($res));
	
	
	$smarty->display('admin/add-pedidos.tpl');
?>