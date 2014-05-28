<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/add-proyectos');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Add-proyectos');
	$smarty->assign('activeProyecto','start active');
	
	
	debug();
	$allowed=array();
	if(isset($_POST['enviar']) && !isset($_REQUEST['idProy'])){
		
		$error=false;
		$sqlProp=$sqlVal=$coma='';
		$_POST['frm-fecha']=time();
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
			$sqlIn="insert into proyectos 
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
		  $sy->assign($_POST['frm-sede'], 'selected="selected"');
		  foreach($_POST as $key=>$val){
			$realKey=substr($key, 4);
			if(substr($key, 0, 4)=='frm-'){
				$resEd[$realKey]=$val;
			}
		  }
		  $sy->assign('data', $resEd);
		}
		
		
	}elseif(isset($_REQUEST['idProy'])){
		$id=sanitize($_REQUEST['idProy'], INT);
		
		if(isset($_POST['idProy'])){
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
				$sqlIn="update proyectos set
				".$sql." where id=".$id;
				if($db->execute($sqlIn)){
					$idProy=$db->Insert_ID();
					$sy->assign('mensaje', 'actualizacion ok');
				}else{
					$sy->assign('mensaje', 'error actualizacion');
				}
			}else{
			  $sy->assign('mensaje', '<div class="alert alert-warning">
<strong>Atención!! </strong> Hay campos sin rellenar .</div>');
			}
		}
		
		$sqlEd="select * from proyectos where id=".$id;
		$resEd=$db->GetRow($sqlEd);
		if(count($resEd)>0){
		  $sy->assign('data', $resEd);
		  $sy->assign('idProy', '<input type="hidden" name="idProy" value="'.$id.'">');
		  $sy->assign('edita', true);
		  $_POST['frm-cliente']=$resEd['idCliente'];
		  $sy->assign($resEd['sede'], 'selected="selected"');
		}else{
		  fourOfour();
		}
		
		
	}
	//var_dump($familiasSel);
	$sel='';
	/*CLIENTES*/
	
	$clientesHtml='';
	$sql="select id, empresa from clientes";
	if($resCl=$db->GetAll($sql)){
	  foreach($resCl as $key=>$val){ 
		  if($_POST['frm-cliente']==$val['id'])$sel='selected="selected"';
	      $clientesHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['empresa'].'</option>';
		  $sel='';
	  }
	}
	$sy->assign('clientesHtml', $clientesHtml);
	
	
	$smarty->display('admin/add-proyectos.tpl');
?>