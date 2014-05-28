<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/aplicacion/clases/adodb/adodb.inc.php');
$db=&ADONewConnection('mysql');
$ADODB_CACHE_DIR='adodbcache';
if($local){

	 $db->Connect('localhost', 'root', '', 'project');//$db->debug=true; 
	define('DB_CHARSET','utf8');
	define('DB_COLLATE','utf8_unicode_ci');
}else{
	
	$db->Connect('xx', 'xx', 'xx', 'xx');
	define('DB_CHARSET','utf8');
	define('DB_COLLATE','utf8_unicode_ci');
	
}

//$db = new miDB(DB_USER, DB_HOST, DB_PASSWORD, DB_NAME);

?>