<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/generar-carpetas');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Calidad');
	$smarty->assign('activeCalidad','start active');
	
	
	if(isset($_POST['enviar'])){
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
		$tabla=isset($_POST['frm-idCarpetaPrin'])?'calidad_carpeta_sec':'calidad_carpeta_prin';
		if(!$error){
			$sqlIn="insert into $tabla 
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
<strong>Atención!! </strong> Hay campos sin rellenar .</div>');
		   foreach($_POST as $key=>$val){
			$realKey=substr($key, 4);
			if(substr($key, 0, 4)=='frm-'){
				$sy->assign('frm'.$realKey, $val);
			}
		  }
		}
	}
	
	$sel='';
	/*carpetasPrin*/
	$sql="select * from calidad_carpeta_prin";
	$res=$db->GetAll($sql);
	$carpetasPrin='';
	  foreach($res as $key=>$val){
		  if($_POST['frm-principal']==$val['id'])$sel='selected="selected"';
	      $carpetasPrin.='<option value="'.$val['id'].'" '.$sel.'>'.$val['nombre'].'</option>';
		  $sel='';
	  }
	$sy->assign('carpetasPrin', $carpetasPrin);
	
	
	$smarty->display('admin/generar-carpetas.tpl');
?>