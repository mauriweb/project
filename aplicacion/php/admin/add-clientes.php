<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/add-clientes');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Añadir clientes');
	$smarty->assign('activeClientes','start active');
	
	debug();
	$allowed=array('frm-telDos');
	if(isset($_POST['enviar']) && !isset($_REQUEST['idCli'])){
		
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
			$sqlIn="insert into clientes 
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
				$resEd[$realKey]=$val;
			}
		  }
		  $sy->assign('data', $resEd);
		}
		
		
	}elseif(isset($_REQUEST['idCli'])){
		$id=sanitize($_REQUEST['idCli'], INT);
		
		if(isset($_POST['idCli'])){
			$error=false;
			$sql=$coma='';
			foreach($_POST as $key=>$val){
				$realKey=substr($key, 4);
				if(substr($key, 0, 4)=='frm-'){
					$_POST[$key]=trim($_POST[$key]);
					if($_POST[$key]=='' and !in_array($key, $allowed)){
						$error=true;
						break;
					}
					$sql.=$coma.$realKey."='".sanitize($_POST[$key], SQL)."'";
					$coma=', ';		    
				}
			}
			
			if(!$error){
				$sqlIn="update clientes set
				".$sql." where id=".$id;
				if($db->execute($sqlIn)){
					$idCli=$db->Insert_ID();
					$sy->assign('mensaje', 'actualizacion ok');
				}else{
					$sy->assign('mensaje', 'error actualizacion');
				}
			}else{
			  $sy->assign('mensaje', '<div class="alert alert-warning">
<strong>Atención!! </strong> Hay campos sin rellenar .</div>');
			}
		}
		
		$sqlEd="select * from clientes where id=".$id;
		$resEd=$db->GetRow($sqlEd);
		if(count($resEd)>0){
		  $sy->assign('data', $resEd);
		  $sy->assign('idCli', '<input type="hidden" name="idCli" value="'.$id.'">');
		  $sy->assign('edita', true);
		  $_POST['frm-pais']=$resEd['pais'];
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
	
	
	$smarty->display('admin/add-clientes.tpl');
?>