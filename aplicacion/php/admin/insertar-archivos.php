<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/insertar-archivos');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Calidad');
	$smarty->assign('activeCalidad','start active');
	
	debug();
	if(isset($_POST['enviar']) && isset($_POST['tipo'])){
		$error=false;
		$sqlProp=$sqlVal=$coma='';
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
				$pos=strrpos($_FILES['archivo']['name'], '.');
				$tipo=substr($_FILES['archivo']['name'], ($pos+1));
				$dest=rand(1000,9999).$_FILES['archivo']['name'];
				move_uploaded_file($_FILES['archivo']['tmp_name'], RUTA_BASE.'/imagenes/calidad/'.$dest);
				$sqlProp.=', archivo, tipo';
				$sqlVal.=', "'.$dest.'" , "'.$_POST['tipo'].'"';
			
			
		
			//$db->debug=true;
			$sqlInUser="insert into calidad_archivos 
			(".$sqlProp.") values 
			(".$sqlVal.")";
			if($db->execute($sqlInUser)){
				$sy->assign('mensaje', '<div class="alert alert-success">
<strong>Inserción con éxito!! </strong></div>');
			}else{
			    $sy->assign('mensaje', '<div class="alert alert-danger">
<strong>Error!! </strong> Inserción de datos incorrecta.</div>');
			}
		}else{
		  $addE='';
	      if($_FILES['archivo']['name']=='')$addE=' y archivos (imagenes, pdf..) sin seleccionar';
		  $sy->assign('mensaje', '<div class="alert alert-warning">
<strong>Atención!! </strong> Hay campos sin rellenar .</div>'.$addE);
		  
		  foreach($_POST as $key=>$val){
			$realKey=substr($key, 4);
			if(substr($key, 0, 4)=='frm-'){
				$sy->assign('frm'.$realKey, $val);
			}
		  }
		}
		
		
	}
	
	$sel='';
	/*carpetas*/
	$sql="select * from calidad_carpeta_prin";
	$res=$db->GetAll($sql);
	$carpetasPrin='';
	  foreach($res as $key=>$val){
		  if($_POST['frm-idCarpetaPrin']==$val['id'])$sel='selected="selected"';
	      $carpetasPrin.='<option value="'.$val['id'].'" '.$sel.'>'.$val['nombre'].'</option>';
		  $sel='';
	  }
	$sy->assign('carpetasPrin', $carpetasPrin); 
	

	
	
	
	$smarty->display('admin/insertar-archivos.tpl');
?>