<?php
if (!defined('RUTA_BASE')) {
  define('RUTA_BASE',$_SERVER['DOCUMENT_ROOT']);
}
define('PLANTILLAS_SMARTY',RUTA_BASE.'/aplicacion/Smarty/libs/Smarty.class.php');
define('PLANTILLAS_PATH', RUTA_BASE.'/plantillas/tpl/');
define('PLANTILLAS_C', RUTA_BASE.'/aplicacion/Smarty/templates_c/');
define('PLANTILLAS_CACHE', RUTA_BASE.'/aplicacion/Smarty/cache/');
define('PLANTILLAS_CONFIG', RUTA_BASE.'/aplicacion/Smarty/config/');

require_once(PLANTILLAS_SMARTY);
class miSmarty extends Smarty{
	function miSmarty(){
	// $smarty = new Smarty();
	parent::__construct();
	// $smarty->template_dir = PLANTILLAS_PATH;
	$this->template_dir = PLANTILLAS_PATH;
	$this->compile_dir = PLANTILLAS_C;
	$this->config_dir = PLANTILLAS_CONFIG;
	$this->cache_dir = PLANTILLAS_CACHE;
	}
}
$smarty=$sy = new miSmarty();

?>