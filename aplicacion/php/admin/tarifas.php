<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/tarifas');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Tarifas');
	$smarty->assign('activeTrabajo','start active');
	
	
	if(isset($_GET['idTar'])){
	  $sqlD="delete from partes_trabajo_codigo where id=".sanitize($_GET['idTar'], INT);
	  if($db->execute($sqlD)){

	  }
	}
	
	$sql="select * from partes_trabajo_codigo";
	$res=$db->GetAll($sql);
	$tarifasDel=$tarGr=$tarTop=$tarInf='';
	if(count($res)>0){
	  foreach($res as $re){
		  if($re['categoria']=='dealinacion')
		  $tarifasDel.='<tr >
										<td>'.$re['codigo'].'</td>
                                        <td>'.$re['descripcion'].'</td>
                                        <td>'.$re['euros'].'&#8364;</td>
                                        <td><a class="btn default btn-xs green" href="add-tarifas/?idTar='.$re['id'].'"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" onClick="return confirm(\'quieres borrar este registro?\');" href="tarifas/?idTar='.$re['id'].'"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>';
									
		  if($re['categoria']=='disenyoG')
		  $tarGr.='<tr >
										<td>'.$re['codigo'].'</td>
                                        <td>'.$re['descripcion'].'</td>
                                        <td>'.$re['euros'].'&#8364;</td>
                                        <td><a class="btn default btn-xs green" href="add-tarifas/?idTar='.$re['id'].'"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" onClick="return confirm(\'quieres borrar este registro?\');" href="tarifas/?idTar='.$re['id'].'"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>';
									
		 if($re['categoria']=='topografia')
		  $tarTop.='<tr >
										<td>'.$re['codigo'].'</td>
                                        <td>'.$re['descripcion'].'</td>
                                        <td>'.$re['euros'].'&#8364;</td>
                                        <td><a class="btn default btn-xs green" href="add-tarifas/?idTar='.$re['id'].'"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" onClick="return confirm(\'quieres borrar este registro?\');" href="tarifas/?idTar='.$re['id'].'"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>';
									
		 if($re['categoria']=='informatica')
		  $tarInf.='<tr >
										<td>'.$re['codigo'].'</td>
                                        <td>'.$re['descripcion'].'</td>
                                        <td>'.$re['euros'].'&#8364;</td>
                                        <td><a class="btn default btn-xs green" href="add-tarifas/?idTar='.$re['id'].'"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" onClick="return confirm(\'quieres borrar este registro?\');" href="tarifas/?idTar='.$re['id'].'"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>';
	  }
	  $sy->assign('tarifasDel', $tarifasDel);
	  $sy->assign('tarInf', $tarInf);
	  $sy->assign('tarTop', $tarTop);
	  $sy->assign('tarGr', $tarGr);
	}
	
	
	$smarty->display('admin/tarifas.tpl');
?>