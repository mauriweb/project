<?php
session_start();
$local=$_SESSION['local'];
require_once($_SERVER['DOCUMENT_ROOT'].'/aplicacion/includes/sanitize.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/aplicacion/includes/configBBDD.php');
?>