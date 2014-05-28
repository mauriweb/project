<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/aplicacion/ajax/configAjax.php');
//$db->debug=true;

if(isset($_POST['idPrin'])){
  $sql="select * from calidad_carpeta_sec where idCarpetaPrin=".sanitize($_POST['idPrin'], INT);
	$res=$db->GetAll($sql);
	$carpetasSec='<option value="">Selecciona</option>';
	  foreach($res as $key=>$val){
	      $carpetasSec.='<option value="'.$val['id'].'">'.$val['nombre'].'</option>';

	  }
	echo $carpetasSec;
}
elseif(isset($_POST['action']) && isset($_POST['id']) && isset($_POST['field']) && isset($_POST['table'])){//VISAR Y FRIRMAR
  $sql="UPDATE ".sanitize($_POST['table'], SQL)." set ".sanitize($_POST['field'], SQL)." = '".sanitize($_POST['action'], SQL)."' where
  id=".sanitize($_POST['id'], INT);
	if($res=$db->execute($sql)){
		echo 'ok';
	}else{
	    echo 'ko';
	}
}elseif(isset($_POST['idCli'])){
  $sql="select codigo, id from proyectos where idCliente=".sanitize($_POST['idCli'], INT);
	$res=$db->GetAll($sql);
	$proyectos='<option value="">Selecciona</option>';
	  foreach($res as $key=>$val){
	      $proyectos.='<option value="'.$val['id'].'">'.$val['codigo'].'</option>';

	  }
	echo $proyectos;
}


  

?>