<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/add-usuarios');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Add-usuarios');
	$smarty->assign('activeUsuarios','start active');
	
	debug();
	
	$data['usuario']=$idEmpleado=$data['pass']='';
	$sy->assign('data', $data);
	if(isset($_POST['enviar']) && !isset($_REQUEST['idUs'])){
		$error=false;
		$addMsj='';
		$sqlProp=$sqlVal=$coma='';
		if($_POST['frm-idEmpleado']!='0' && $_POST['frm-idCliente']!='0'){
			$error=true;
			$addMsj.='<br/> Selecciona cliente o empleado!';
		}else{
			$idEmpleado=$_POST['frm-idEmpleado'];
			$idCliente=$_POST['frm-idCliente'];
			if($_POST['frm-idEmpleado']!='0'){
			    
				if(existeCampo('idEmpleado', $_POST['frm-idEmpleado'], 'usuarios')){
					$error=true;
					$addMsj.='<br/> El empleado seleccionado ya esta activo!';
				}
			}elseif($_POST['frm-idCliente']!='0'){
			    if(existeCampo('idCliente', $_POST['frm-idCliente'], 'usuarios')){
					$error=true;
				    $addMsj.='<br/> El Cliente seleccionado ya esta activo!';
				}
				$_POST['frm-nivel']=4;
			}
			//unset($_POST['frm-idCliente']);
		}
		foreach($_POST as $key=>$val){
			if($error)break;
			if($_POST['frm-nivel']=='0'){
			  $error=true;
			  break;
			}
			$realKey=substr($key, 4);
			if(substr($key, 0, 4)=='frm-'){
		        if(in_array($key, array('frm-usuario', 'frm-idEmpleado')))
			       if(existeCampo('usuario', $_POST['frm-usuario'], 'usuarios')){
					   $error=true;
					   $addMsj.='<br/> El nombre de usuario seleccionado esta ocupado!';
					   break;
				   }
				$_POST[$key]=trim($_POST[$key]);
				if($_POST[$key]==''){
					$error=true;
					break;
				}
				if($realKey=='pass')$_POST[$key]=$_POST[$key];
				$sqlProp.=$coma.$realKey;
				$sqlVal.=$coma."'".sanitize($_POST[$key], SQL)."'";
				$coma=', ';		    
			}
	    }
		
		if(!$error){
			//$db->debug=true;
			$sqlIn="insert into usuarios 
			(".$sqlProp.") values 
			(".$sqlVal.")";
			if($db->execute($sqlIn)){
				$sy->assign('mensaje', '<div class="alert alert-success">
<strong>Inserción con éxito!! </strong></div>');
			}else{
			    $sy->assign('mensaje', '<div class="alert alert-danger">
<strong>Error!! </strong> Inserción de datos incorrecta.</div>');
			}
		}else{
		  $sy->assign('mensaje', '<div class="alert alert-warning">
<strong>Atención!! </strong> Hay campos sin rellenar .</div>'.$addMsj);
		  foreach($_POST as $key=>$val){
			$realKey=substr($key, 4);
			if(substr($key, 0, 4)=='frm-'){
				$resEd[$realKey]=$val;
			}
		  }
		  $sy->assign('data', $resEd);
		  
		}
		
		
	}elseif(isset($_REQUEST['idUs'])){
		$id=sanitize($_REQUEST['idUs'], INT);
		
		if(isset($_POST['idUs'])){
			//var_dump($_POST);exit();
			$error=false;
			$sql=$coma='';
			foreach($_POST as $key=>$val){
				$realKey=substr($key, 4);
				if(substr($key, 0, 4)=='frm-'){
					$_POST[$key]=trim($_POST[$key]);
					if(in_array($key, array('frm-email', 'frm-dni')))
			           if(existeCampo('email', $_POST['frm-email'], 'usuarios', $id, 'id') || existeCampo('usuario', $_POST['frm-usuario'], 'usuarios', $id, 'id')){$error=true;break;}
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
				$sqlIn="update usuarios set
				".$sql." where id=".$id;
				if($db->execute($sqlIn)){
					$idUs=$db->Insert_ID();
					$sy->assign('mensaje', 'actualizacion ok');
				}else{
					$sy->assign('mensaje', 'error actualizacion');
				}
			}else{
			  $sy->assign('mensaje', '<div class="alert alert-warning">
<strong>Atención!! </strong> Hay campos sin rellenar .</div>');
			}
		}
		$sqlEd="select * from usuarios where id=".$id;
		$resEd=$db->GetRow($sqlEd);
		if(count($resEd)>0){
		  $sy->assign('data', $resEd);
		  $sy->assign('idUs', '<input type="hidden" name="idUs" value="'.$id.'">');
		  $nivel=$niveles[$resEd['nivel']];
		  $sy->assign($nivel, 'selected="selected"');
		  if($nivel==4){
			  $idCliente=$resEd['idEmpleado'];
		  }else{
		  	  $idEmpleado=$resEd['idEmpleado'];
		  }
		}else{
		  fourOfour();
		}
		
		
	}
	
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
	
	$sel='';
	/*CLIENTES*/
	
	$clientesHtml='';
	$sql="select id, empresa from clientes";
	if($resCl=$db->GetAll($sql)){
	  foreach($resCl as $key=>$val){
		  if($idCliente==$val['id'])$sel='selected="selected"';
	      $clientesHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['empresa'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('clientesHtml', $clientesHtml);
	
	
	$smarty->display('admin/add-usuarios.tpl');
?>