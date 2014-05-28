<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/add-empleados');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Add-empleados');
	$smarty->assign('activeEmpleados','start active');
	
	
	debug();
	if(isset($_POST['enviar']) && !isset($_REQUEST['idEmp'])){ 
		
		//var_dump($_POST);exit();
		$allowed=array('frm-telDos', 'frm-emailDos');
		$error=$repetido=false;
		$sqlProp=$sqlVal=$coma='';
		$_POST['frm-pass']=md5($_POST['frm-dni']);
		$_POST['frm-fechaAlta']=time();
		foreach($_POST as $key=>$val){
			$realKey=substr($key, 4);
			if(substr($key, 0, 4)=='frm-'){
				if(in_array($key, array('frm-email', 'frm-dni')))
			       if(existeCampo('email', $_POST['frm-email'], 'empleados') || existeCampo('dni', $_POST['frm-dni'], 'empleados')  || existeCampo('usuario', $_POST['frm-dni'], 'usuarios')){$repetido=true;break;}
				$_POST[$key]=trim($_POST[$key]);
				if($_POST[$key]=='' and !in_array($key, $allowed)){ 
					$error=true;
					break;
				}
				$sqlProp.=$coma.$realKey;
				$sqlVal.=$coma."'".sanitize($_POST[$key], SQL)."'";
				$coma=', ';		    
			}
	    }
		
		if(!$error && !$repetido){
			//$db->debug=true;
			$nextOrder=$db->GetRow('select list_order lo from cal_bookings_items order by list_order DESC limit 0,1');
			$nombre=$_POST['frm-nombre'].' '.$_POST['frm-apellido'].' '.$_POST['frm-apellidoDos'];
			$sql="INSERT INTO `acero`.`cal_bookings_items` (
				
				`id_user` ,
				`id_ref_external` ,
				`desc_en` ,
				`desc_es` ,
				`list_order` ,
				`state`
				)
				VALUES (
				'1', '0', '".$nombre."', '".$nombre."', ".($nextOrder['lo']+1).", '1'
				)";
			if($db->execute($sql)){
				$idEmCal=$db->Insert_ID();
				$sqlIn="insert into empleados 
				(".$sqlProp.", idEmpleadoCalendario) values 
				(".$sqlVal.", $idEmCal)";
				if($db->execute($sqlIn)){
					$sy->assign('mensaje', '<div class="alert alert-success">
<strong>Inserción con éxito!! </strong></div>');
				}else{
					$sy->assign('mensaje', '<div class="alert alert-danger">
<strong>Error!! </strong> Inserción de datos incorrecta.</div>');
				}
			}else{
				$sy->assign('mensaje', '<div class="alert alert-danger">
<strong>Error!! </strong> Inserción de datos incorrecta.</div>');
			}
		}else{
		if($error){
		  $sy->assign('mensaje', '<div class="alert alert-warning">
<strong>Atención!! </strong> Hay campos sin rellenar .</div>');
		}
		if($repetido){
			$sy->assign('repetido', '<div class="alert alert-warning">
<strong>Atención!! </strong> El usuario, DNI ó email no pueden repetirse.</div>');
		}
		  foreach($_POST as $key=>$val){
			$realKey=substr($key, 4);
			if(substr($key, 0, 4)=='frm-'){
				$resEd[$realKey]=$val;
			}
		  }
		  $sy->assign('data', $resEd);
		  $sede=($_POST['frm-sede']=='ES')?'es':'pe';
		  $sy->assign($sede, 'selected="selected"');
		  $jornada=($_POST['frm-jornadaLaboral']=='N')?'jor_n':'jor_r';
		  $sy->assign($jornada, 'selected="selected"');
		}
		
		
	}elseif(isset($_REQUEST['idEmp'])){
		$id=sanitize($_REQUEST['idEmp'], INT);
		
		if(isset($_POST['idEmp'])){
			//var_dump($_POST);exit();
			$error=false;
			$sql=$coma='';
			foreach($_POST as $key=>$val){
				$realKey=substr($key, 4);
				if(substr($key, 0, 4)=='frm-'){
					$_POST[$key]=trim($_POST[$key]);
					if($_POST[$key]==''){
						$error=true;
						break;
					}
					$sql.=$coma.$realKey."='".sanitize($_POST[$key], SQL)."'";
					$coma=', ';		    
				}
			}
			
			if(!$error){
				//$db->debug=true;
				//echo '<pre>';print_r($_POST['familias']);echo '</pre>';
				$sqlIn="update empleados set
				".$sql." where id=".$id;
				if($db->execute($sqlIn)){
					$idEmp=$db->Insert_ID();
					$sy->assign('mensaje', 'actualizacion ok');
				}else{
					$sy->assign('mensaje', 'error actualizacion');
				}
			}else{
			  $sy->assign('mensaje', '<div class="alert alert-warning">
<strong>Atención!! </strong> Hay campos sin rellenar .</div>');
			}
		}
		
		$sqlEd="select * from empleados where id=".$id;
		$resEd=$db->GetRow($sqlEd);
		if(count($resEd)>0){
		  $sy->assign('data', $resEd);
		  $sy->assign('idEmp', '<input type="hidden" name="idEmp" value="'.$id.'">');
		  $sy->assign('edita', true);
		  $sede=($resEd['frm-sede']=='ES')?'es':'pe';
		  $sy->assign($sede, 'selected="selected"');
		  $jornada=($_POST['frm-jornadaLaboral']=='N')?'jor_n':'jor_r';
		  $sy->assign($jornada, 'selected="selected"');
		}else{
		  fourOfour();
		}
		
		
	}
	//var_dump($familiasSel);
	$sel='';
	/*PAISES*/
	
	$paisesHtml='';
	  foreach($paises as $key=>$val){ 
		  if($_POST['frm-pais']==$key)$sel='selected="selected"';
	      $paisesHtml.='<option value="'.$key.'" '.$sel.'>'.$val.'</option>';
		  $sel='';
	  }
	$sy->assign('paises', $paisesHtml);
	
	
	$smarty->display('admin/add-empleados.tpl');
?>