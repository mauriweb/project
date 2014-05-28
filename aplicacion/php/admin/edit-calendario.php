<?php 
session_start();
/*var_dump($_SESSION);array(4) { ["admin_id"]=> string(1) "1" ["admin_name"]=> string(5) "admin" ["admin_lang"]=> string(2) "es" ["admin_level"]=> string(1) "1" } */
/*$_SESSION['admin_id']='1';
$_SESSION['admin_name']='admin';
$_SESSION['admin_lang']='es';
$_SESSION['admin_level']='1';*/

error_reporting(0);

//	general config
$the_file=RUTA_BASE."/aplicacion/php/admin/calendario/ac-config.inc.php";
if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
else		require_once($the_file);

//	db connection
$the_file=AC_INLCUDES_ROOT."db_connect.inc.php";
if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
else		require_once($the_file);

//	common vars (db and lang)
$the_file=AC_INLCUDES_ROOT."common.inc.php";
if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
else		require_once($the_file);
	
	
//	calendar functions
$the_file=AC_INLCUDES_ROOT."functions.inc.php";
if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
else		require_once($the_file);

//	admin functions
$the_file=AC_INLCUDES_ROOT."functions-admin.inc.php";
if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
else		require_once($the_file);

//	define language
if(isset($_SESSION["admin_lang"]))	define("AC_LANG", $_SESSION["admin_lang"]);
else 								define("AC_LANG", AC_DEFAULT_AC_LANG);


//	include lang file
$the_file=AC_DIR_AC_LANG.AC_LANG.".lang.php";
if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
else		require_once($the_file);

//	define page to show
/*var_dump($_SESSION);array(4) { ["admin_id"]=> string(1) "1" ["admin_name"]=> string(5) "admin" ["admin_lang"]=> string(2) "es" ["admin_level"]=> string(1) "1" } */
if(!isset($_SESSION["admin_id"]))	$_REQUEST["page"]="admin-login";
elseif(!isset($_REQUEST["page"])) 	$_REQUEST["page"]="items";
define("ADMIN_PAGE", $_REQUEST["page"]);

$page_title=$lang["admin_".ADMIN_PAGE.""];


if(ADMIN_PAGE=="admin-login"){
	$this_title="";
	$admin_menu="";
	$the_file=AC_DIR_ADMIN."admin-login.admin.php";
	if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
	else		require_once($the_file);
}else{
	//	include menu file
	$the_file=AC_DIR_ADMIN."admin-menu.inc.php";
	if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
	else		require_once($the_file);
		
	
	//	define condition for users
	$sql_condition="";
	if($_SESSION["admin_level"]>1)	$sql_condition=" AND b.id_user=".$_SESSION["admin_id"];
	
	
	//	check user is allowed to see this page
	if(!multi_array_key_exists($_REQUEST["page"],$menu[$_SESSION["admin_level"]])){
		$the_file=AC_DIR_ADMIN."forbidden.admin.php";
	}else{
		$the_file=AC_DIR_ADMIN.ADMIN_PAGE.".admin.php";
	}
	//	now inlcude the page defined
	if(!file_exists($the_file)) die("<b>".$the_file."</b> not found");
	else		require_once($the_file);
	
	$this_title='
	<div id="title">
		<div class="float_l" ><h1>>> '.$page_title.' '.$page_title_add.'</h1></div>
		<div class="float_r">'.$bt_add.'</div>
		<div class="clear"></div>
	</div>
	';
}


if(isset($_REQUEST["msg"])) $warning.=$lang["msg_".$_REQUEST["msg"].""];
if(isset($warning)){
	$xtra_moo.="roar.alert('Information','".$warning."');";
}
/*echo '<pre>';
print_r($_SERVER);
echo '</pre>';*/
$root='http://'.$_SERVER['SERVER_NAME'];

$sy->assign('AC_DIR_CSS', DOMINIO.'/aplicacion/php/admin/calendario/ac-contents/themes/default/css/');
$sy->assign('ADMIN_DIR_CSS', DOMINIO.'/aplicacion/php/admin/calendario/ac-admin/css/');
$sy->assign('AC_DIR_JS', DOMINIO.'/aplicacion/php/admin/calendario/ac-includes/js/');
$sy->assign('admin', DOMINIO.'/aplicacion/php/admin/calendario/ac-admin/');
$sy->assign('BASE', DOMINIO.'/aplicacion/php/admin/calendario/');
$sy->assign('AC_LANG', AC_LANG);
$sy->assign('xtra_js_files', $xtra_js_files);
$sy->assign('xtra_js', $xtra_js);
$sy->assign('msg_warning', $lang["msg_warning"]);
$sy->assign('msg_order_update_OK', $lang["msg_order_update_OK"]);
$sy->assign('msg_order_update_KO', $lang["msg_order_update_KO"]);
$sy->assign('msg_state_mod_OK', $lang["msg_state_mod_OK"]);
$sy->assign('msg_state_mod_KO', $lang["msg_state_mod_KO"]);
$sy->assign('AC_DIR_AJAX', AC_DIR_AJAX);
$sy->assign('xtra_moo', $xtra_moo);

$sy->assign('LOGO_CALENDAR_ADMIN', LOGO_CALENDAR_ADMIN);
$sy->assign('CAL_VERSION', CAL_VERSION);
$sy->assign('admin_menu', $admin_menu);
$sy->assign('this_title', $this_title);
$sy->assign('contents', $contents);

	/*CANONICAL*/
	$smarty->assign('pagina','/edit-calendario');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Calendario');
	$smarty->assign('activeCalendario','start active');



$smarty->display('admin/edit-calendario.tpl');


?>