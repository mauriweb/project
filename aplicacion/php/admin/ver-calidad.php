<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/ver-calidad');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Calidad');
	$smarty->assign('activeCalidad','start active');
	
	if(isset($_GET['idCal'])){
		$db->execute('delete from calidad_archivos where id='.sanitize($_GET['idCal'], INT));
	}
	
	$sqlAdd='';
	if(isset($_POST['principal']) && $_POST['principal']!=''){
	  $sqlAdd=' AND cp.id='.sanitize($_POST['principal'], INT);
	}
	if(isset($_POST['secundaria']) && $_POST['secundaria']!=''){
	  $sqlAdd.=' AND cs.id='.sanitize($_POST['secundaria'], INT);
	}
	
	$sql="select cp.nombre cp, cs.nombre cs, a.archivo, a.tipo, a.id from 
	calidad_archivos a, calidad_carpeta_prin cp, calidad_carpeta_sec cs where
	cp.id=cs.idCarpetaPrin AND
	cs.id=a.idCarpetaSec".$sqlAdd;
	$res=$db->GetAll($sql);
	$calidad='';
	if(count($res)>0){
	  foreach($res as $re){
	
	    $calidad.='<tr >
										<td>'.$re['cp'].'</td>
                                        <td>'.$re['cs'].'</td>
                                        <td>'.$re['tipo'].'</td>
										<td><a href="'.DOMINIO.'/imagenes/calidad/'.$re['archivo'].'"><img src="imagenes/iconos/'.$re['tipo'].'.png" width="30" height="30"></a></td>
										
										<td class=" "><a href="ver-calidad/?idCal='.$re['id'].'" onclick="return confirm(\'deseas borrar este registro?\')" class="btn default btn-xs red"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>';
	  }
			  
	}
	$sy->assign('calidad', $calidad);
	
	
	$sel='';
	/*carpetas*/
	$sql="select * from calidad_carpeta_prin";
	$res=$db->GetAll($sql);
	$carpetasPrin='';
	$selected = false;
	  foreach($res as $key=>$val){
		  if($_POST['principal']==$val['id']){
			  $sel='selected="selected"';
			  $selected = $_POST['principal'];
		  }
	      $carpetasPrin.='<option value="'.$val['id'].'" '.$sel.'>'.$val['nombre'].'</option>';
		  $sel='';
	  }
	$sy->assign('carpetasPrin', $carpetasPrin); 
	
	if ($selected) {
    	$sy->assign('triggerChange', "
		llena=".$_POST['secundaria'].";
			   jQuery('#principal').change();");
	}
	
	
	$smarty->display('admin/ver-calidad.tpl');
?>