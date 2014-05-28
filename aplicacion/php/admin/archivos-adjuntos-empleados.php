<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/archivos-adjuntos-empleados');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Archivos adjuntos empleados');
	$smarty->assign('activeEmpleados','start active');
	
	if(isset($_POST['enviar'])){
		$error=false;
		$sqlProp=$sqlVal=$coma='';
		$_POST['frm-fecha']=time();
		foreach($_POST as $key=>$val){
			$realKey=substr($key, 4);
			if(substr($key, 0, 4)=='frm-'){
				$_POST[$key]=trim($_POST[$key]);
				if($_POST[$key]==''){
					$error=true;
					break;
				}
				$sqlProp.=$coma.$realKey;
				$sqlVal.=$coma."'".sanitize($_POST[$key], SQL)."'";
				$coma=', ';		    
			}
	    }
		
		if(!$error && $_FILES['archivo']['name']!=''){
				
				$dest=rand(1000,9999).$_FILES['archivo']['name'];
				move_uploaded_file($_FILES['archivo']['tmp_name'], RUTA_BASE.'/imagenes/trabajadores/archivos/'.$dest);
				$sqlProp.=', archivo';
				$sqlVal.=', "'.$dest.'"';
			
			
			$sqlInUser="insert into empleados_archivos 
			(".$sqlProp.") values 
			(".$sqlVal.")";
			if($db->execute($sqlInUser)){
				$sy->assign('mensaje', '<div class="alert alert-success">
<strong>Inserción con éxito!! </strong></div>');
				$_POST=array();
			}else{
			    $sy->assign('mensaje', '<div class="alert alert-danger">
<strong>Error!! </strong> Inserción de datos incorrecta.</div>');
			}
		}else{
		  $addE='';
	      if($_FILES['img']['archivo']=='')$addE=' y archivos (imagenes, pdf..) sin seleccionar';
		  $sy->assign('mensaje', '<div class="alert alert-warning">
<strong>Atención!! </strong> Hay campos sin rellenar .</div>'.$addE);
		  foreach($_POST as $key=>$val){
			$realKey=substr($key, 4);
			if(substr($key, 0, 4)=='frm-'){
				$sy->assign('frm'.$realKey, $val);
			}
		  }
		  $tipo=str_replace(' ','',$_POST['frm-tipo']);
		  $tipo=str_replace('/','',$tipo);
		  $sy->assign($tipo, 'selected="selected"');
		}
		
		
	}
	
	$sel='';
	/*EMPLEADOS*/
	$sql="select id, nombre, apellido, apellidoDos from empleados";
	$res=$db->GetAll($sql);
	$empleadosHtml='';
	  foreach($res as $key=>$val){
		  if($_POST['frm-empleado']==$val['id'])$sel='selected="selected"';
	      $empleadosHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['nombre'].' '.$val['apellido'].' '.$val['apellidoDos'].'</option>';
		  $sel='';
	  }
	$sy->assign('empleadosHtml', $empleadosHtml);
	
	
	$smarty->display('admin/archivos-adjuntos-empleados.tpl');
?>