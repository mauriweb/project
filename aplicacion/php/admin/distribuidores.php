<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/distribuidores');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Distribuidores');
	$smarty->assign('activeDistribuidores','start active');
	
	if(isset($_GET['idDis'])){
	  $sqlD="delete from proveedores where id=".sanitize($_GET['idDis'], INT);
	  if($db->execute($sqlD)){
	    
	  }
	}
	
	$sql="select * from proveedores";
	$res=$db->GetAll($sql);
	$distribuidores='';
	if(count($res)>0){
	  foreach($res as $re){
	
	    $distribuidores.='<tr >
										<td>'.$re['empresa'].'</td>
                                        <td>'.$re['telefono'].'</td>
                                        <td>'.$re['email'].'</td>
                                        <td>'.$re['sector'].'</td>
										<td><a class="btn default btn-xs red" onClick="return confirm(\'deseas borrar este registro?\')" href="distribuidores/?idDis='.$re['id'].'"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>';
	  }
			  
	}
	$sy->assign('distribuidores', $distribuidores);
	
	
	$smarty->display('admin/distribuidores.tpl');
?>