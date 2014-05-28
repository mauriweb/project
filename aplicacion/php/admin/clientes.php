<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/clientes');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Clientes');
	$smarty->assign('activeClientes','start active');
	
	if(isset($_GET['idCli'])){
	  $sqlD="delete from clientes where id=".sanitize($_GET['idCli'], INT);
	  if($db->execute($sqlD)){

	  }
	}
	
	$sql="select * from clientes";
	$res=$db->GetAll($sql);
	$clientes='';
	if(count($res)>0){
	  foreach($res as $re){
		  $clientes.='<tr >
										<td>'.$re['empresa'].'</td>
                                        <td>'.$re['contacto'].'</td>
										<td>'.$re['tel'].'</td>
										<td>'.$re['email'].'</td>
                                        <td><a href="ver-clientes/?idCli='.$re['id'].'" class="btn default btn-xs blue"><i class="fa fa-external-link"></i> Ver </a></td>
                                        <td><a class="btn default btn-xs green" href="add-clientes/?idCli='.$re['id'].'"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" onClick="return confirm(\'deseas borrar este registro?\')" href="clientes/?idCli='.$re['id'].'"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>';
	  }
	  $sy->assign('clientes', $clientes);
	}
	
	
	$smarty->display('admin/clientes.tpl');
?>