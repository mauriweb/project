<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/proyectos');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Proyectos');
	$smarty->assign('activeProyecto','start active');
	
	if(isset($_GET['idProy'])){
	  $sqlD="delete from proyectos where id=".sanitize($_GET['idProy'], INT);
	  if($db->execute($sqlD)){

	  }
	}
	$sqlAdd='';
	if(isset($_POST['anyo']) && $_POST['anyo']!=''){
	 	$fechaDe=mktime(0,0,0,1, 1, $_POST['anyo']);
		$lastDayMonth=date ('t', strtotime($_POST['anyo'].'-12-23'));
	 	$fechaA=mktime(24,60,60,12, $lastDayMonth, $_POST['anyo']);
	    $sqlAdd.=' AND p.fecha BETWEEN '.$fechaDe.' AND '.$fechaA;
	}
	$sql="select p.*, c.empresa from proyectos p, clientes c where c.id=p.idCliente".$sqlAdd;
	$res=$db->GetAll($sql);
	$proyectos='';
	if(count($res)>0){
	  foreach($res as $re){
		  $proyectos.='<tr >
										<td>'.$re['empresa'].'</td>
                                        <td>'.$re['codigo'].'</td>
                                        <td>'.$re['observaciones'].'</td>
                                        <td><a class="btn default btn-xs green" href="add-proyectos/?idProy='.$re['id'].'"><i class="fa fa-edit"></i> Editar </a></td>
										<td><a class="btn default btn-xs red" onClick="return confirm(\'quieres borrar este registro?\');" href="pryectos/?idProy='.$re['id'].'"><i class="fa fa-trash-o"></i> Borrar </a></td>
									</tr>';
	  }
	  $sy->assign('proyectos', $proyectos);
	}
	
	$anyos='';
	$now=date('Y', time());
	for($a=2000; $a<=$now; $a++){
	    if($_POST['anyo']==$a)$sel='selected="selected"';
	      $anyos.='<option value="'.$a.'" '.$sel.'>'.$a.'</option>';
		  $sel='';
	  }
	$sy->assign('anyos', $anyos);
	
	
	$smarty->display('admin/proyectos.tpl');
?>