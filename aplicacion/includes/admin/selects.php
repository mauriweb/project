<?php
function dame_clientes($id){
    global $db;
	$clientesHtml='';
	$sql="select id, empresa from clientes";
	if($resCl=$db->GetAll($sql)){
	  foreach($resCl as $key=>$val){ 
		  if($id==$val['id'])$sel='selected="selected"';
	      $clientesHtml.='<option value="'.$val['id'].'" '.$sel.'>'.$val['empresa'].'</option>';
		  $sel='';
	  }
	}
	return $clientesHtml;
}
?>