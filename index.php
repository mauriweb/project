<?php 
session_start();
$_SESSION['local']=true;
$local=$_SESSION['local'];
$debug=true;

##################################################

error_reporting(E_ALL ^ E_NOTICE);




##################################################

if($local){
  define('DOMINIO', 'http://www.project.xxx');
}else{
  define('DOMINIO', 'http://www.project.com');
}
define('RUTA_BASE',$_SERVER['DOCUMENT_ROOT']);
require_once(RUTA_BASE.'/aplicacion/includes/sanitize.inc.php');


#################  SMARTY  #######################
##################################################
##################################################

require_once(RUTA_BASE.'/aplicacion/includes/ini_smarty.php');
$smarty->assign('DOMINIO',DOMINIO);//
$smarty->assign('pagina', 'pagina');
$smarty->assign('titulo', 'titulo');

#################   BBDD   #######################
##################################################
##################################################

require_once(RUTA_BASE.'/aplicacion/includes/configBBDD.php');

#################  MAILER  #######################
##################################################
##################################################

define('SMTP_SERVER','');
define('SMTP_USER','');
define('SMTP_PASS','');
define('SMTP_CUENTA','');

define('SMTP_CUENTA_ALERTI','');
################# IMAGENES #######################
##################################################
##################################################

define('THUMB_SIZE', 100);
define('GRANDE_SIZE', 450);
define('GRANDE_SIZE_V', 450);

//version movil
define('MOVILT_SIZE', 80);
define('MOVILM_SIZE_H', 120);
define('MOVILM_SIZE_V', 120);
define('MOVILG_SIZE_H', 200);
define('MOVILG_SIZE_V', 200);

//vista previa recorte THUMBNAIL
define('RECORTE_SIZE_H', 450);
define('RECORTE_SIZE_V', 350);
define('PREVIA_MAXSIZE_H', 500);
define('PREVIA_MAXSIZE_V', 400);

//directorios imagenes
define('IMGTEMPDIR',RUTA_BASE.'/imgTemp/');
define('FOTOSDIR',RUTA_BASE.'/imagenes/');

#################   ID´s   #######################
##################################################
##################################################
//servicios esternos y datos de acceso

define('GMAPS_KEY', '');
define('FACEBOOK_ID','' );
define('ANALYTICS', '');

############## LOCALIZACION Y FECHAS #############
##################################################
##################################################

//para que funcione en internet esto hay que cambiarlo a linux porque los servidores trabajan en apache con linux

/* para que funcione en windows */
setlocale(LC_TIME, 'Spanish');

date_default_timezone_set ('Europe/Madrid');



#################  SESIONES  #######################
##################################################
##################################################

if(isset($_GET['cerrar'])){
  if(isset($_SESSION['admin'])){unset($_SESSION['admin']);}
  if(isset($_SESSION['administracion'])){unset($_SESSION['administracion']);}
  if(isset($_SESSION['cliente']))unset($_SESSION['cliente']);
  if(isset($_SESSION['trabajador']))unset($_SESSION['trabajador']);
  $_SESSION=array();
  session_destroy();
  header('location: '.DOMINIO.'/login');
}
$admin=$cliente=$trabajador=$administracion=$idUser=false;
//$_SESSION['cliente']=1;
if(isset($_SESSION['admin'])){
  $sy->assign('admin', true);
  $idUser=sanitize($_SESSION['admin'], INT);
  $admin=true;
}elseif(isset($_SESSION['administracion'])){
  $sy->assign('administracion', true);
  $idUser=sanitize($_SESSION['administracion'], INT);
  $admin=$administracion=true;
}elseif(isset($_SESSION['cliente'])){
  $sy->assign('cliente', true);
  $idUser=sanitize($_SESSION['cliente'], INT);
  $cliente=true;
}elseif(isset($_SESSION['trabajador'])){
  $sy->assign('trabajador', true);
  $idUser=sanitize($_SESSION['trabajador'], INT);
  $trabajador=true;
}
if($idUser){
	if(!$trabajador){
	  $sql="select usuario nik from usuarios where id=".$idUser;
	}else{
	  $sql="select nombre nik from empleados where id=".$idUser;
	} 
	$res=$db->GetRow($sql);
	$sy->assign('user', $res['nik']);
}

require_once(RUTA_BASE.'/aplicacion/includes/acero.class.php');
$acero=new Acero($db);

function existeCampo($campo, $valor, $tabla, $idPermite=0, $campoPermite=''){
	global $db;
	if($campoPermite!='')$campoPermiteSql=$campoPermite.', ';
    $sql="select $campoPermiteSql $campo from $tabla where $campo='$valor'";
	$res=$db->GetRow($sql);
	if($res){
	  if($campoPermite!='')
	    if($res[$campoPermite]==$idPermite)return false;
	  return true;
	}
	return false;

}
function delFiles($id, $tabla, $campo, $folder, $campoId='id'){
  global $db;
  $sql="select $campo from $tabla where $campoId=".sanitize($id, INT);
  $res=$db->GetAll($sql);
  if(count($res)>0){
	  foreach($res as $re){
       $file=RUTA_BASE.$folder.$re[$campo];
	   @unlink($file);
	  }
	   
  }
}
function fourOfour(){
	global $sy;
	$sy->assign('titulo','Error 404 | Página no encontrada');
	$sy->display('404.tpl');
	exit;
}
function debug(){
	global $db, $debug;
	if($debug){
		$db->debug=true;
	    echo '<pre>';
		print_r($_POST);
		echo '</pre>';
	}
}
function dameUsuario($id, $trabajador=false, $pideId=false){
	global $db;
	if($trabajador){
	    $res=$db->GetRow("select id, nombre user from empleados where id=".$id);
	}else{
		$res=$db->GetRow("select id, usuario user from usuarios where id=".$id);
	}
	if(!$pideId){
		return $res['user'];
	}else{
		return $res['id'];
	}
}
$tiposCod=array('impresion'=>'Impresión', 'opImprenta'=>'Operaciones imprenta','material'=>'Material', 'otros'=>'Otros');
$niveles=array('1'=>'Administrador', '2'=>'Administracion', '3'=>'trabajador', '4'=>'cliente');
$paises=array("ES"=> "Spain", "AF"=> "Afghanistan", "AL"=> "Albania", "DZ"=> "Algeria", "AS"=> "American Samoa", "AD"=> "Andorra", "AO"=> "Angola", "AI"=> "Anguilla", "AQ"=> "Antarctica", "AR"=> "Argentina", "AM"=> "Armenia", "AW"=> "Aruba", "AU"=> "Australia", "AT"=> "Austria", "AZ"=> "Azerbaijan", "BS"=> "Bahamas", "BH"=> "Bahrain", "BD"=> "Bangladesh", "BB"=> "Barbados", "BY"=> "Belarus", "BE"=> "Belgium", "BZ"=> "Belize", "BJ"=> "Benin", "BM"=> "Bermuda", "BT"=> "Bhutan", "BO"=> "Bolivia", "BA"=> "Bosnia and Herzegowina", "BW"=> "Botswana", "BV"=> "Bouvet Island", "BR"=> "Brazil", "IO"=> "British Indian Ocean Territory", "BN"=> "Brunei Darussalam", "BG"=> "Bulgaria", "BF"=> "Burkina Faso", "BI"=> "Burundi", "KH"=> "Cambodia", "CM"=> "Cameroon", "CA"=> "Canada", "CV"=> "Cape Verde", "KY"=> "Cayman Islands", "CF"=> "Central African Republic", "TD"=> "Chad", "CL"=> "Chile", "CN"=> "China", "CX"=> "Christmas Island", "CC"=> "Cocos (Keeling) Islands", "CO"=> "Colombia", "KM"=> "Comoros", "CG"=> "Congo", "CD"=> "Congo, the Democratic Republic of the", "CK"=> "Cook Islands", "CR"=> "Costa Rica", "CI"=> "Cote d'Ivoire", "HR"=> "Croatia (Hrvatska)", "CU"=> "Cuba", "CY"=> "Cyprus", "CZ"=> "Czech Republic", "DK"=> "Denmark", "DJ"=> "Djibouti", "DM"=> "Dominica", "DO"=> "Dominican Republic", "EC"=> "Ecuador", "EG"=> "Egypt", "SV"=> "El Salvador", "GQ"=> "Equatorial Guinea", "ER"=> "Eritrea", "EE"=> "Estonia", "ET"=> "Ethiopia", "FK"=> "Falkland Islands (Malvinas)", "FO"=> "Faroe Islands", "FJ"=> "Fiji", "FI"=> "Finland", "FR"=> "France", "GF"=> "French Guiana", "PF"=> "French Polynesia", "TF"=> "French Southern Territories", "GA"=> "Gabon", "GM"=> "Gambia", "GE"=> "Georgia", "DE"=> "Germany", "GH"=> "Ghana", "GI"=> "Gibraltar", "GR"=> "Greece", "GL"=> "Greenland", "GD"=> "Grenada", "GP"=> "Guadeloupe", "GU"=> "Guam", "GT"=> "Guatemala", "GN"=> "Guinea", "GW"=> "Guinea-Bissau", "GY"=> "Guyana", "HT"=> "Haiti", "HM"=> "Heard and Mc Donald Islands", "VA"=> "Holy See (Vatican City State)", "HN"=> "Honduras", "HK"=> "Hong Kong", "HU"=> "Hungary", "IS"=> "Iceland", "IN"=> "India", "ID"=> "Indonesia", "IR"=> "Iran (Islamic Republic of)", "IQ"=> "Iraq", "IE"=> "Ireland", "IL"=> "Israel", "IT"=> "Italy", "JM"=> "Jamaica", "JP"=> "Japan", "JO"=> "Jordan", "KZ"=> "Kazakhstan", "KE"=> "Kenya", "KI"=> "Kiribati", "KP"=> "Korea, Democratic People's Republic of", "KR"=> "Korea, Republic of", "KW"=> "Kuwait", "KG"=> "Kyrgyzstan", "LA"=> "Lao People's Democratic Republic", "LV"=> "Latvia", "LB"=> "Lebanon", "LS"=> "Lesotho", "LR"=> "Liberia", "LY"=> "Libyan Arab Jamahiriya", "LI"=> "Liechtenstein", "LT"=> "Lithuania", "LU"=> "Luxembourg", "MO"=> "Macau", "MK"=> "Macedonia, The Former Yugoslav Republic of", "MG"=> "Madagascar", "MW"=> "Malawi", "MY"=> "Malaysia", "MV"=> "Maldives", "ML"=> "Mali", "MT"=> "Malta", "MH"=> "Marshall Islands", "MQ"=> "Martinique", "MR"=> "Mauritania", "MU"=> "Mauritius", "YT"=> "Mayotte", "MX"=> "Mexico", "FM"=> "Micronesia, Federated States of", "MD"=> "Moldova, Republic of", "MC"=> "Monaco", "MN"=> "Mongolia", "MS"=> "Montserrat", "MA"=> "Morocco", "MZ"=> "Mozambique", "MM"=> "Myanmar", "NA"=> "Namibia", "NR"=> "Nauru", "NP"=> "Nepal", "NL"=> "Netherlands", "AN"=> "Netherlands Antilles", "NC"=> "New Caledonia", "NZ"=> "New Zealand", "NI"=> "Nicaragua", "NE"=> "Niger", "NG"=> "Nigeria", "NU"=> "Niue", "NF"=> "Norfolk Island", "MP"=> "Northern Mariana Islands", "NO"=> "Norway", "OM"=> "Oman", "PK"=> "Pakistan", "PW"=> "Palau", "PA"=> "Panama", "PG"=> "Papua New Guinea", "PY"=> "Paraguay", "PE"=> "Peru", "PH"=> "Philippines", "PN"=> "Pitcairn", "PL"=> "Poland", "PT"=> "Portugal", "PR"=> "Puerto Rico", "QA"=> "Qatar", "RE"=> "Reunion", "RO"=> "Romania", "RU"=> "Russian Federation", "RW"=> "Rwanda", "KN"=> "Saint Kitts and Nevis", "LC"=> "Saint LUCIA", "VC"=> "Saint Vincent and the Grenadines", "WS"=> "Samoa", "SM"=> "San Marino", "ST"=> "Sao Tome and Principe", "SA"=> "Saudi Arabia", "SN"=> "Senegal", "SC"=> "Seychelles", "SL"=> "Sierra Leone", "SG"=> "Singapore", "SK"=> "Slovakia (Slovak Republic)", "SI"=> "Slovenia", "SB"=> "Solomon Islands", "SO"=> "Somalia", "ZA"=> "South Africa", "GS"=> "South Georgia and the South Sandwich Islands", "LK"=> "Sri Lanka", "SH"=> "St. Helena", "PM"=> "St. Pierre and Miquelon", "SD"=> "Sudan", "SR"=> "Suriname", "SJ"=> "Svalbard and Jan Mayen Islands", "SZ"=> "Swaziland", "SE"=> "Sweden", "CH"=> "Switzerland", "SY"=> "Syrian Arab Republic", "TW"=> "Taiwan, Province of China", "TJ"=> "Tajikistan", "TZ"=> "Tanzania, United Republic of", "TH"=> "Thailand", "TG"=> "Togo", "TK"=> "Tokelau", "TO"=> "Tonga", "TT"=> "Trinidad and Tobago", "TN"=> "Tunisia", "TR"=> "Turkey", "TM"=> "Turkmenistan", "TC"=> "Turks and Caicos Islands", "TV"=> "Tuvalu", "UG"=> "Uganda", "UA"=> "Ukraine", "AE"=> "United Arab Emirates", "GB"=> "United Kingdom", "US"=> "United States", "UM"=> "United States Minor Outlying Islands", "UY"=> "Uruguay", "UZ"=> "Uzbekistan", "VU"=> "Vanuatu", "VE"=> "Venezuela", "VN"=> "Viet Nam", "VG"=> "Virgin Islands (British)", "VI"=> "Virgin Islands (U.S.)", "WF"=> "Wallis and Futuna Islands", "EH"=> "Western Sahara", "YE"=> "Yemen", "ZM"=> "Zambia", "ZW"=> "Zimbabwe");

$datosJornadas=array(
	'n'=>array('horas'=>8.5,'viernes'=>6.5, 'verano'=>7),
	'r'=>array('horas'=>5.5)
);
$permisosYausencias=array(3=>'Medico', 4=>'Vacaciones', 5=>'Dia Libre', 6=>'Dia disposicion', 7=>'baja', 8=>'baja Maternidad');

function limitesFechaDia($fechaEntrada){
	$month=date('m', $fechaEntrada);
	$day=date('d', $fechaEntrada);
	$year=date('Y', $fechaEntrada);
	$limiteMin=mktime(0,0,0,$month, $day, $year);
	$limiteMax=mktime(23,59,59,$month, $day, $year);
	return array('limiteMin'=>$limiteMin, 'limiteMax'=>$limiteMax);
}

/*$prueba=limitesFechaDia(time());
echo 'max: '.$prueba['limiteMax'].' min: '.$prueba['limiteMin'];
echo '<br>max: '.date('d/m/Y - H:m:s', $prueba['limiteMax']);
echo '<br>min: '.date('d/m/Y - H:m:s', $prueba['limiteMin']);
echo '<br>max: '.date('l jS \of F Y H:i:s', $prueba['limiteMax']);
echo '<br>min: '.date('l jS \of F Y H:i:s', $prueba['limiteMin']);

date_default_timezone_set ('UTC');
$prueba=limitesFechaDia(time());
echo '<br><br><br>max: '.$prueba['limiteMax'].' min: '.$prueba['limiteMin'];
echo '<br>max: '.date('d/m/Y - H:m:s', $prueba['limiteMax']);
echo '<br>min: '.date('d/m/Y - H:m:s', $prueba['limiteMin']);
echo '<br>max: '.date('l jS \of F Y H:i:s', $prueba['limiteMax']);
echo '<br>min: '.date('l jS \of F Y H:i:s', $prueba['limiteMin']);exit;*/


##############        INDEX          #############
##################################################
##################################################

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

if(filter_var($url, FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED)){
	$uri = '';
	if( isset($_SERVER['REQUEST_URI'])){
		$uri = explode('/', $_SERVER['REQUEST_URI']);
		$uri = array_values( array_diff( $uri, array('')));
		$secciones=array('login');
		$adminPages = array(
		
		'inicio',
		'proyectos',
		'add-proyectos',
		'edit-proyectos',
		'clientes',
		'add-clientes',
		'edit-clientes',
		'ver-clientes',
		'empleados',
		'add-empleados',
		'readmitir-empleados',
		'edit-empleados',
		'ver-empleado',
		'archivos-adjuntos-empleados',
		'pedidos',
		'add-pedidos',
		'edit-pedidos',
		'ver-pedidos',
		'tarifas',
		'add-tarifas',
		'edit-tarifas',
		'calendario',
		'add-calendario',
		'edit-calendario',
		'partes-de-material',
		'partes-de-trabajo',
		'alta-parte-de-material',
		'alta-parte-de-trabajo',
		'edit-partes-de-material',
		'edit-partes-de-trabajo',
		'ver-partes-de-material',
		'ver-partes-de-trabajo',
		'usuarios',
		'add-usuarios',
		'edit-usuarios',
		'distribuidores',
		'add-distribuidores',
		'codigo-material-insertar',
		'ver-codigo-material-insertar',
		'gastos',
		'add-gastos',
		'edit-gastos',
		'ver-gastos',
		'generar-carpetas',
		'insertar-archivos',
		'ver-calidad',
		'informes-trabajo',
		'informes-material',
		'informes-gastos',
		'calcular',
		'calcular-material',
		'calcular-gastos',
		'ver-partes-de-material-informe',
		'ver-partes-de-trabajo-informe',
		'ver-gastos-informe',
		
		

		
		'inicio-administracion'
		
		
		);//aqui se ponen todas las categorias de la web 1ºnivel
		$trabajadorPages=array('inicio-trabajador',
		'ausencias',
		'datos-clientes',
		'calendario-trabajador',
		'datos-distribuidores',
		'editar-imagen',
		'datos-trabajador',
		'descargas-trabajador',
		'partes-de-material-trabajador',
		'partes-de-trabajo-trabajador',
		'alta-parte-de-trabajo-trabajador',
		'alta-parte-de-material-trabajador',
		'edit-partes-de-material-trabajador',
		'edit-partes-de-trabajo-trabajador',
		'ver-partes-de-material-trabajador',
		'ver-partes-de-trabajo-trabajador',
		'gastos-trabajador',
		'add-gastos-trabajador',
		'edit-gastos-trabajador',
		'ver-gastos-trabajador',
		'ver-archivos-de-calidad',
		'ver-codigo-material-insertar-trabajador',
		'tarifas-trabajador');
		
		$clientePages=array('informes-trabajo-cliente',
		'informes-material-cliente',
		'informes-gastos-cliente',
		'ver-partes-de-material-cliente',
		'ver-partes-de-trabajo-cliente',
		'ver-gastos-cliente');
		if(sizeof($uri) > 0){

			if( in_array($uri[0], $clientePages) or in_array($uri[0], $trabajadorPages) or in_array($uri[0], $adminPages) or in_array($uri[0], $secciones)){
				if(in_array($uri[0], $clientePages) && !$cliente){
			        header('location: '.DOMINIO.'/login');
					exit();
				}
				if(in_array($uri[0], $trabajadorPages) && !$trabajador){
			        header('location: '.DOMINIO.'/login');
					exit();
				}elseif(in_array($uri[0], $trabajadorPages) && $trabajador){
			        $sqlUserCal="SELECT cb.id
					FROM cal_bookings_items cb, empleados e
					WHERE e.idEmpleadoCalendario = cb.id
					AND e.id =".$idUser;
					$resUsCal=$db->GetRow($sqlUserCal);
					$idUsCal=$resUsCal['id'];
					if($idUsCal){
						$sy->assign('resUsCal', $idUsCal);
					}
					if(isset($_GET['id_item']) && $_GET['id_item']!=$idUsCal)
						header('location: '.DOMINIO.'/login/?cerrar=1');
					//ALERTAS
					$pendientes='';//$db->debug=true;
					$sql="select fecha, horas from pendientes where idUser=".$idUser;
					if($res=$db->GetAll($sql)){
						foreach($res as $re){
							//echo $acero->get_hours_from_date($re['fecha'], $idUser).$re['horas'].'<br>';
							$sql="select id from partes_trabajo where fecha=".$re['fecha']." AND trabajador='s' and
							 idUser=".$idUser;
							 $idParte=$db->GetRow($sql);
							if($acero->get_hours_from_date($re['fecha'], $idUser)==$re['horas']){
								$urlFillParte='alta-parte-de-trabajo-trabajador/?dateToFill='.$re['fecha'];
							}else{
								$urlFillParte='alta-parte-de-trabajo-trabajador/?idTra='.$idParte['id'];
							}
							$pendientes.='<li>  
									<a href="'.$urlFillParte.'">
									<span class="label label-sm label-icon label-warning"><i class="fa fa-bell-o"></i></span>
									Parte día '.date('d', $re['fecha']).' / '.date('m', $re['fecha']).' / '.date('Y', $re['fecha']).' '.$re['horas'].' Horas
									</a>
								</li>';
						}
					}
					$sy->assign('pendientes', $pendientes);//numPendientes
					$sy->assign('numPendientes', count($res));
					//ARCHIVOS
					$sqlA="select count(id) id from empleados_archivos where idEmpleado=".$idUser;
					$numArchivos=$db->GetRow($sqlA);
					$sy->assign('numArchivos', $numArchivos['id']);
					
				}
				if(in_array($uri[0], $adminPages) && !$admin){
			        header('location: '.DOMINIO.'/login');
					exit();
				}
				switch($uri[0]){
				
					case 'login':
						require_once(RUTA_BASE.'/aplicacion/login.php');
					break;
					case 'calcular':
						require_once(RUTA_BASE.'/aplicacion/php/admin/calcular.php');
					break;
					case 'ver-partes-de-material-informe':
						require_once(RUTA_BASE.'/aplicacion/php/admin/ver-partes-de-material-informe.php');
					break;
					case 'ver-partes-de-trabajo-informe':
						require_once(RUTA_BASE.'/aplicacion/php/admin/ver-partes-de-trabajo-informe.php');
					break;
					case 'ver-gastos-informe':
						require_once(RUTA_BASE.'/aplicacion/php/admin/ver-gastos-informe.php');
					break;
					case 'calcular-material':
						require_once(RUTA_BASE.'/aplicacion/php/admin/calcular-material.php');
					break;
					case 'calcular-gastos':
						require_once(RUTA_BASE.'/aplicacion/php/admin/calcular-gastos.php');
					break;
					case 'informes-trabajo':
						require_once(RUTA_BASE.'/aplicacion/php/admin/informes.php');
					break;
					case 'informes-material':
						require_once(RUTA_BASE.'/aplicacion/php/admin/informes-material.php');
					break;
					case 'informes-gastos':
						require_once(RUTA_BASE.'/aplicacion/php/admin/informes-gastos.php');
					break;
					case 'ver-calidad':
						require_once(RUTA_BASE.'/aplicacion/php/admin/ver-calidad.php');
					break;
					case 'generar-carpetas':
						require_once(RUTA_BASE.'/aplicacion/php/admin/generar-carpetas.php');
					break;
					case 'insertar-archivos':
						require_once(RUTA_BASE.'/aplicacion/php/admin/insertar-archivos.php');
					break;
					case 'inicio':
						require_once(RUTA_BASE.'/aplicacion/php/admin/inicio.php');
					break;
					case 'proyectos':
						require_once(RUTA_BASE.'/aplicacion/php/admin/proyectos.php');
					break;
					case 'add-proyectos':
						require_once(RUTA_BASE.'/aplicacion/php/admin/add-proyectos.php');
					break;
					case 'edit-proyectos':
						require_once(RUTA_BASE.'/aplicacion/php/admin/edit-proyectos.php');
					break;
					case 'clientes':
						require_once(RUTA_BASE.'/aplicacion/php/admin/clientes.php');
					break;
					case 'add-clientes':
						require_once(RUTA_BASE.'/aplicacion/php/admin/add-clientes.php');
					break;
					case 'edit-clientes':
						require_once(RUTA_BASE.'/aplicacion/php/admin/edit-clientes.php');
					break;
					case 'ver-clientes':
						require_once(RUTA_BASE.'/aplicacion/php/admin/ver-clientes.php');
					break;
					case 'empleados':
						require_once(RUTA_BASE.'/aplicacion/php/admin/empleados.php');
					break;
					case 'add-empleados':
						require_once(RUTA_BASE.'/aplicacion/php/admin/add-empleados.php');
					break;
					case 'edit-empleados':
						require_once(RUTA_BASE.'/aplicacion/php/admin/edit-empleados.php');
					break;
					case 'archivos-adjuntos-empleados':
						require_once(RUTA_BASE.'/aplicacion/php/admin/archivos-adjuntos-empleados.php');
					break;
					case 'ver-empleado':
						require_once(RUTA_BASE.'/aplicacion/php/admin/ver-empleado.php');
					break;
					case 'readmitir-empleados':
						require_once(RUTA_BASE.'/aplicacion/php/admin/readmitir-empleados.php');
					break;
					case 'pedidos':
						require_once(RUTA_BASE.'/aplicacion/php/admin/pedidos.php');
					break;
					case 'add-pedidos':
						require_once(RUTA_BASE.'/aplicacion/php/admin/add-pedidos.php');
					break;
					case 'edit-pedidos':
						require_once(RUTA_BASE.'/aplicacion/php/admin/edit-pedidos.php');
					break;
					case 'ver-pedidos':
						require_once(RUTA_BASE.'/aplicacion/php/admin/ver-pedidos.php');
					break;
					case 'tarifas':
						require_once(RUTA_BASE.'/aplicacion/php/admin/tarifas.php');
					break;
					case 'add-tarifas':
						require_once(RUTA_BASE.'/aplicacion/php/admin/add-tarifas.php');
					break;
					case 'edit-tarifas':
						require_once(RUTA_BASE.'/aplicacion/php/admin/edit-tarifas.php');
					break;
					case 'calendario':
						require_once(RUTA_BASE.'/aplicacion/php/admin/calendario.php');
					break;
					case 'edit-calendario':
						require_once(RUTA_BASE.'/aplicacion/php/admin/edit-calendario.php');
					break;
					case 'partes-de-material':
						require_once(RUTA_BASE.'/aplicacion/php/admin/partes-de-material.php');
					break;
					case 'partes-de-trabajo':
						require_once(RUTA_BASE.'/aplicacion/php/admin/partes-de-trabajo.php');
					break;
					case 'alta-parte-de-trabajo':
						require_once(RUTA_BASE.'/aplicacion/php/admin/alta-parte-de-trabajo.php');
					break;
					case 'alta-parte-de-material':
						require_once(RUTA_BASE.'/aplicacion/php/admin/alta-parte-de-material.php');
					break;
					case 'edit-partes-de-material':
						require_once(RUTA_BASE.'/aplicacion/php/admin/edit-partes-de-material.php');
					break;
					case 'edit-partes-de-trabajo':
						require_once(RUTA_BASE.'/aplicacion/php/admin/edit-partes-de-trabajo.php');
					break;
					case 'ver-partes-de-material':
						require_once(RUTA_BASE.'/aplicacion/php/admin/ver-parte-de-material.php');
					break;
					case 'ver-partes-de-trabajo':
						require_once(RUTA_BASE.'/aplicacion/php/admin/ver-parte-de-trabajo.php');
					break;
					case 'distribuidores':
						require_once(RUTA_BASE.'/aplicacion/php/admin/distribuidores.php');
					break;
					case 'add-distribuidores':
						require_once(RUTA_BASE.'/aplicacion/php/admin/add-distribuidores.php');
					break;
					case 'usuarios':
						require_once(RUTA_BASE.'/aplicacion/php/admin/usuarios.php');
					break;
					case 'add-usuarios':
						require_once(RUTA_BASE.'/aplicacion/php/admin/add-usuarios.php');
					break;
					case 'edit-usuarios':
						require_once(RUTA_BASE.'/aplicacion/php/admin/edit-usuarios.php');
					break;
					case 'codigo-material-insertar':
						require_once(RUTA_BASE.'/aplicacion/php/admin/codigo-material-insertar.php');
					break;
					case 'ver-codigo-material-insertar':
						require_once(RUTA_BASE.'/aplicacion/php/admin/ver-codigo-material-insertar.php');
					break;
					case 'gastos':
						require_once(RUTA_BASE.'/aplicacion/php/admin/gastos.php');
					break;
					case 'add-gastos':
						require_once(RUTA_BASE.'/aplicacion/php/admin/add-gastos.php');
					break;
					case 'edit-gastos':
						require_once(RUTA_BASE.'/aplicacion/php/admin/edit-gastos.php');
					break;
					case 'ver-gastos':
						require_once(RUTA_BASE.'/aplicacion/php/admin/ver-gastos.php');
					break;
					
					
					
					case 'inicio-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/inicio-trabajador.php');
					break;
					case 'ausencias':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/ausencias.php');
					break;
					case 'calendario-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/calendario-trabajador.php');
					break;
					case 'datos-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/datos-trabajador.php');
					break;
					case 'descargas-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/descargas-trabajador.php');
					break;
					case 'datos-clientes':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/datos-clientes.php');
					break;
					case 'datos-distribuidores':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/datos-distribuidores.php');
					break;
					case 'editar-imagen':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/editar-imagen.php');
					break;
					case 'partes-de-material-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/partes-de-material.php');
					break;
					case 'partes-de-trabajo-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/partes-de-trabajo.php');
					break;
					case 'alta-parte-de-trabajo-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/alta-parte-de-trabajo.php');
					break;
					case 'alta-parte-de-material-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/alta-parte-de-material.php');
					break;
					case 'edit-partes-de-material-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/edit-partes-de-material.php');
					break;
					case 'edit-partes-de-trabajo-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/edit-partes-de-trabajo.php');
					break;
					case 'ver-partes-de-material-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/ver-parte-de-material.php');
					break;
					case 'ver-partes-de-trabajo-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/ver-parte-de-trabajo.php');
					break;
					case 'gastos-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/gastos.php');
					break;
					case 'add-gastos-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/add-gastos.php');
					break;
					case 'edit-gastos-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/edit-gastos.php');
					break;
					case 'ver-gastos-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/ver-gastos.php');
					break;
					case 'ver-archivos-de-calidad':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/ver-archivos-de-calidad.php');
					break;
					case 'ver-codigo-material-insertar-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/ver-codigo-material-insertar.php');
					break;
					case 'tarifas-trabajador':
						require_once(RUTA_BASE.'/aplicacion/php/trabajador/tarifas.php');
					break;
					
					
					
					case 'informes-trabajo-cliente':
						require_once(RUTA_BASE.'/aplicacion/php/clienteVisado/informes.php');
					break;
					case 'informes-material-cliente':
						require_once(RUTA_BASE.'/aplicacion/php/clienteVisado/informes-material.php');
					break;
					case 'informes-gastos-cliente':
						require_once(RUTA_BASE.'/aplicacion/php/clienteVisado/informes-gastos.php');
					break;
					case 'ver-partes-de-material-cliente':
						require_once(RUTA_BASE.'/aplicacion/php/clienteVisado/ver-parte-de-material.php');
					break;
					case 'ver-partes-de-trabajo-cliente':
						require_once(RUTA_BASE.'/aplicacion/php/clienteVisado/ver-parte-de-trabajo.php');
					break;
					case 'ver-gastos-cliente':
						require_once(RUTA_BASE.'/aplicacion/php/clienteVisado/ver-gastos.php');
					break;
					
					
					
					case 'inicio-administracion':
						require_once(RUTA_BASE.'/aplicacion/php/administracionAcero/inicio.php');
					break;
					
					
				default:
						$smarty->assign('titulo','Error 404 | Página no encontrada');
						$smarty->display('404.tpl');
				}
			}else{// uris
						$smarty->assign('titulo','Error 404 | Página no encontrada');
						$smarty->display('404.tpl');
				}
		}else{// 
		require_once(RUTA_BASE.'/aplicacion/login.php');
	}
	}else{
		require_once(RUTA_BASE.'/aplicacion/login.php');
	}
}else{// 
$smarty->assign('titulo','Error 404 | Página no encontrada');
$smarty->display('404.tpl');
}

?>