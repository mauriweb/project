<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/usuarios');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Usuarios');
	$smarty->assign('activeUsuarios','start active');
	
	if(isset($_GET['idUs'])){
	  $sqlD="delete from usuarios where id=".sanitize($_GET['idUs'], INT);
	  if($db->execute($sqlD)){
	    
	  }
	}
	
	$sql="select usuario, nivel, id, pass from usuarios";
	$res=$db->GetAll($sql);
	$usuarios='';
	if(count($res)>0){
	  foreach($res as $re){
	
	    $usuarios.='<tr >
										<td>'.$re['usuario'].'</td>
										<td>'.$re['pass'].'</td>
										<td>'.$re['nivel'].'</td>
										<td><a class="btn default btn-xs green" href="add-usuarios/?idUs='.$re['id'].'"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" onClick="return confirm(\'deseas borrar este registro?\')" href="usuarios/?idUs='.$re['id'].'"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>';
	  }
			  
	}
	$sy->assign('usuarios', $usuarios);
	
	
	$smarty->display('admin/usuarios.tpl');
?>