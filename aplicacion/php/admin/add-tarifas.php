<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/add-tarifas');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Add-tarifas');
	$smarty->assign('activeTrabajo','start active');
	
	
	debug();
	$allowed=array();
	if(isset($_POST['enviar']) && !isset($_REQUEST['idTar'])){
		$error=false;
		$sqlProp=$sqlVal=$coma='';
		foreach($_POST as $key=>$val){
			$realKey=substr($key, 4);
			if(substr($key, 0, 4)=='frm-'){
				$_POST[$key]=trim($_POST[$key]);
				if(in_array($key, array('frm-codigo')))
			      if(existeCampo('codigo', $_POST['frm-codigo'], 'partes_trabajo_codigo')){$existe=true;break;}
				if($_POST[$key]=='' and !in_array($key, $allowed)){
					$error=true;
					break;
				}
				$sqlProp.=$coma.$realKey;
				$sqlVal.=$coma."'".sanitize($_POST[$key], SQL)."'";
				$coma=', ';		    
			}
	    }
		
		if(!$error && !$existe){
			$sqlIn="insert into partes_trabajo_codigo 
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
			if($error){
		      $sy->assign('mensaje', '<div class="alert alert-warning">
<strong>Atención!! </strong> Hay campos sin rellenar .</div>');
			}else{
			  $sy->assign('mensaje', 'El codigo ya existe');
			}
		  foreach($_POST as $key=>$val){
			$realKey=substr($key, 4);
			if(substr($key, 0, 4)=='frm-'){
				$resEd[$realKey]=$val;
			}
		  }
		  $sy->assign('data', $resEd);
		}
		
		
	}elseif(isset($_REQUEST['idTar'])){
		$id=sanitize($_REQUEST['idTar'], INT);
		
		if(isset($_POST['idTar'])){
			$error=false;
			$sql=$coma='';
			foreach($_POST as $key=>$val){
				$realKey=substr($key, 4);
				if(substr($key, 0, 4)=='frm-'){
					$_POST[$key]=trim($_POST[$key]);
					if(in_array($key, array('frm-codigo')))
					    if(existeCampo('codigo', $_POST['frm-codigo'], 'partes_trabajo_codigo', $id, 'id')){$error=true;break;}
					if($_POST[$key]=='' and !in_array($key, $allowed)){
						$error=true;
						break;
					}
					$sql.=$coma.$realKey."='".sanitize($_POST[$key], SQL)."'";
					$coma=', ';		    
				}
			}
			
			if(!$error){
				$sqlIn="update partes_trabajo_codigo set
				".$sql." where id=".$id;
				if($db->execute($sqlIn)){
					$idTar=$db->Insert_ID();
					$sy->assign('mensaje', 'actualizacion ok');
				}else{
					$sy->assign('mensaje', 'error actualizacion');
				}
			}else{
			  $sy->assign('mensaje', '<div class="alert alert-warning">
<strong>Atención!! </strong> Hay campos sin rellenar .</div>');
			}
		}
		
		$sqlEd="select * from partes_trabajo_codigo where id=".$id;
		$resEd=$db->GetRow($sqlEd);
		if(count($resEd)>0){
		  $sy->assign('data', $resEd);
		  $_POST['frm-categoria']=$resEd['categoria'];
		  $sy->assign('idTar', '<input type="hidden" name="idTar" value="'.$id.'">');
		  $sy->assign('edita', true);
		}else{
		  fourOfour();
		}
		
		
	}
	//var_dump($familiasSel);
	$sel='';
	/*CATEGORIAS*/
	$cat=array('dealinacion'=>'Delineación','disenyoG'=>'Diseño gráfico','topografia'=>'Topografía','informatica'=>'Informática');
	$catHtml='';
	  foreach($cat as $key=>$val){ 
		  if($_POST['frm-categoria']==$key){$sel='selected="selected"';}
	      $catHtml.='<option value="'.$key.'" '.$sel.'>'.utf8_encode($val).'</option>';
		  $sel='';
	  }
	$sy->assign('cat', $catHtml);
	
	
	$smarty->display('admin/add-tarifas.tpl');
?>