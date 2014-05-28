<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','ver-codigo-material-insertar');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Ver códigos material');
	$smarty->assign('activeMaterial','start active');
	
	
	if(isset($_GET['idCod'])){
	  $sqlD="delete from partes_material_codigos where id=".sanitize($_GET['idCod'], INT);
	  if($db->execute($sqlD)){
	    
	  }
	}
	
	$sql="select * from partes_material_codigos";
	$res=$db->GetAll($sql);
	$codigos='';
	if(count($res)>0){
	  foreach($res as $re){
	
	    $codigos.='<tr >
										<td>'.$tiposCod[$re['tipo']].'</td>
                                        <td>'.$re['codigo'].'</td>
                                        <td>'.$re['sector'].'</td>
										<td><a class="btn default btn-xs red" onClick="return confirm(\'deseas borrar este registro?\')" href="ver-codigo-material-insertar/?idCod='.$re['id'].'"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>';
	  }
			  
	}
	$sy->assign('codigos', $codigos);
	
	
	$smarty->display('admin/ver-codigo-material-insertar.tpl');
?>