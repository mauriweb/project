<?php 
if($admin){
  header('location: '.DOMINIO.'/inicio');
}elseif($administrador){
  header('location: '.DOMINIO.'/inicio-administracion');
}elseif($trabajador){
  header('location: '.DOMINIO.'/inicio-trabajador');
}elseif($cliente){
  header('location: '.DOMINIO.'/informes-trabajo-cliente');
}
if(isset($_GET['cerrar'])){
  $_SESSION=array();
  session_destroy();
  header('location: '.DOMINIO);
}
//$db->debug=true;
if(isset($_POST['password']) && isset($_POST['username'])){ 
	  $sql="select id, idCliente, nivel from usuarios where usuario=? and pass='".$_POST['password']."'";
	  $res=$db->GetRow($sql, array($_POST['username']));
	  if(sizeof($res)>0){
		  switch($res['nivel']){
		    case '1':
			$_SESSION['admin']=$res['id'];
			//CALENDARIO SESSION
			$_SESSION["admin_id"]	=	1;
			$_SESSION["admin_name"]	=	'admin';
			$_SESSION["admin_lang"]	=	'es';
			$_SESSION["admin_level"]=	'1';
			header('location: '.DOMINIO.'/inicio');
			break;
			case '2':
			$_SESSION['administracion']=$res['id'];
			$_SESSION["admin_id"]	=	1;
			$_SESSION["admin_name"]	=	'admin';
			$_SESSION["admin_lang"]	=	'es';
			$_SESSION["admin_level"]=	'1';
			header('location: '.DOMINIO.'/inicio-administracion');
			break;
			
			case '4':
			$_SESSION['cliente']=$res['id'];
			$_SESSION['idCliente']=$res['idCliente'];
			header('location: '.DOMINIO.'/informes-trabajo-cliente');
			break;
		  }
		
		$_SESSION['expira']=time();
		
	  }else{
		//TRABAJADORES
		 $sql="select id from empleados where dni=? and pass='".md5($_POST['password'])."'";
	     if($res=$db->GetRow($sql, array($_POST['username']))){
		     $_SESSION['trabajador']=$res['id'];
			$_SESSION["admin_id"]	=	1;
			$_SESSION["admin_name"]	=	'admin';
			$_SESSION["admin_lang"]	=	'es';
			$_SESSION["admin_level"]=	'2';
			 header('location: '.DOMINIO.'/inicio-trabajador');
		 }
		
	  } 
  
  $sy->assign('errorLogin', $errorLogin);
}
	/*CANONICAL*/
	$smarty->assign('pagina','login');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Login');
	
	
	
	$smarty->display('login.tpl');
?>