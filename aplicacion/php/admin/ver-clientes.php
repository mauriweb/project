<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/ver-clientes');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Ver clientes');
	$smarty->assign('activeClientes','start active');
	
	if(!isset($_GET['idCli'])){
	  fourOfour();
	}

	$id=sanitize($_GET['idCli'], INT);
	$sql="select * from clientes where id=".$id;
	$res=$db->GetRow($sql);
	if(count($res)==0){
		fourOfour();
	}
	$res['pais']=$paises[$res['pais']];
	$sy->assign('res', $res);
	
	
	
	
	$smarty->display('admin/ver-clientes.tpl');
?>