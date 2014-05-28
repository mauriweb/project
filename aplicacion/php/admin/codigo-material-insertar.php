<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','codigo-material-insertar');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Insertar código material');
	$smarty->assign('activeMaterial','start active');
	
	
	debug();
	if(isset($_POST['enviar'])){

		if($_POST['frm-tipo']!='impresion'){
			unset($_POST['frm-numImpresiones']);
			unset($_POST['frm-precioImpresiones']);
		}
		$allowed=array();
		$error=false;
		$sqlProp=$sqlVal=$coma='';

		foreach($_POST as $key=>$val){
			$realKey=substr($key, 4);
			if(substr($key, 0, 4)=='frm-'){
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
		
		if(!$error){
			$sqlIn="insert into partes_material_codigos 
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
	
	/*CODIGOS*/
	$tipos=$sel='';
	  foreach($tiposCod as $key=>$val){
		  if($_POST['frm-tipo']==$key)$sel='selected="selected"';
	      $tipos.='<option value="'.$key.'" '.$sel.'>'.$val.'</option>';
		  $sel='';
	  }
	$sy->assign('tipos', $tipos);
	
	$smarty->display('admin/codigo-material-insertar.tpl');
?>