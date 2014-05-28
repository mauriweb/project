<?php 
class ClaseValida{
/*//EXPLICACIONES////////////////////////////////////

var ej:(var $dato;) se puede cambiar por public / estatic / private, por defecto es public, private es para cuando trabajas con más gente y es para que no te toquen el metodo o te cambien su valor
	
	

//////////////////////////////////////////////////*/	
	
/*
.....INDICE.................................................INDICE..............................
		archivoSubido
		KitaBarras
		esImagenSubida
MIXER 	noVacio BOOLEANO
NUMEROS valTelf BOLEANO
NUMBER 	valTelFijo BOOLEANO
NUMEROS valTelMovil BOLEANO
MIXER 	valDni BOOLEANO
MIXER 	valNie BOLEANO
MIXER 	valDNINIE BOLEANO
MIXER 	valCif BOLEANO
MIXER 	valMatriVieja BOLEANO
MIXER 	valMatriNueva BOLEANO
NUMEROS valMatricula BOLEANO
MIXER 	valMimeImg BOOLEANO
MIXER 	valMimeTxt BOLEANO
MIXER 	valMimeAudio BOLEANO
MIXER 	valMimeVideo BOLEANO
MIXER 	valMimeAplicaciones BOLEANO
MIXER 	valNombreEmpresa BOLEANO
TEXTO 	valNombrePersona BOLEANO
TEXTO 	valNik BOLEANO
NUMBER 	valCodigoPostal BOLEANO
MIXER 	valEmail BOLEANO
MIXER 	valDomicilio  BOOL// TB valida titulo
MIXER 	valRegistroAsociacion BOOL
MIXER 	valAreaTexto BOOL
MIXER 	valLatLong BOOL
MIXER 	valPass BOOL
NUMBER 	valEdadAnimal BOOL
STRING 	valUrl BOOL
STRING 	valTags BOOL
STRING 	valTitulo BOOL

*/
//PROPIEDADES................................................PROPIEDADES.....................
var $adulto = 18;//para 18 años si cambian leyes de mayor de edad se cambia este numero que equivale a la edad
var $dato;
var $cp;
var $tipMimeImg=array('image/png','image/x-png','image/jpeg','image/gif','image/wmp','image/pjpeg','image/tiff','image/x-windows-bmp','image/bmp','image/cmu-raster','image/florian','image/g3fax','image/ief','image/jutvision','image/naplps','image/pict','image/vnd.dwg','image/vnd.wap.wbmp','image/x-tiff');

var $tipMimeTxt=array('text/txt','text/rtf','text/doc','text/plain');
var $tipMimeAudio=array('audio/x-ms-wma,audio/aiff ,audio/basic ,audio/it ,audio/make ,audio/make ,audio/mid ,audio/mod ,audio/mpeg ,audio/mpeg3 ,audio/nspaudio,audio/x-pn-realaudio,audio/x-wav,audio/wav');
var $tipMimeAplicaciones=array('application/zip,application/x-zip-compressed,application/x-javascript,application/x-excel,application/octet-stream');
var $tipMimeVideo=array('video/mpeg,video/avi,video/avs-video,video/quicktime,video/x-mpeg,video/x-msvideo');

private	$mailBasura = array('\r', '\n', '\t', '%0a', '%0A', '%0d', '%0D', '%08i', '%08I', '%09i', '%09I', 'Bcc:', 'Cc:', 'Reply-to:', 'Subject:', 'From:', '<CR>', '<LF>');
private	$mailDetectaBasura = array('Bcc:', 'Cc:', 'Reply-to:', 'Subject:', 'From:');
/*
METODOS.......................................METODOS.......................................
*/
// validacion mail esto se pone en las validaciones y se pone como un if, ejemplo:

	/*	if($val->esString($_POST['Asumto'],25)){
			if($val->mailDetectaBasura($_POST['Asunto'])){
				$asuntoBien = false;
				$smarty->assign('','Error hay caracteres raros');
			}else{
				$asuntoBien = true;
			}
		}else{
			$asuntoBien = false;
			$smarty->assign('','Error el string es mayor de 25');
		}*/
function mailDetectaBasura($texto){
	foreach ($this->mailDetectaBasura as $v){
		$v = '/'.$v.'/i';
		if( preg_match($v,$texto)){
			return true;
		}
	}
	return false;
}
//funcion de limpieza
function limpiaMailBasura($texto){
	foreach ($this->mailBasura as $v){
		$texto = str_ireplace($v,'',$texto);
		
		}
	return $texto;
}
// funcion no vacio
function noVacio($campo){
  $this->dato=trim($campo);
  if(mb_strlen($this->dato)!=0){
    return true;
  }else{
    return false;
  }
}
//Validacion archivo
function archivoSubido($campo){
  if(!empty($_FILES[$campo]['tmp_name']) ){
  
		return true;
	}else{
		return false;
	}
}
//Validacion archivo imagen
private $gis;

function esImagenSubida($campo){
  if($this->archivoSubido($campo)){
  		$this->gis = @getimagesize($_FILES[$campo]['tmp_name']);
		if( is_array($this->gis)){
			if($this->gis[2]>= 1 && $this->gis[2]<= 3){//solo permite.jpg .png .gif porque solo trabaj de 1 a 3
				return true;
			}else{
				//no es una imagen valida
				return false;
			}
		}else{
			//no es una imagen
			return false;
		}
	}else{
		//no han subido nada
		return false;
	}
}
//KitaBarras
function KitaBarras($campo){
  if(get_magic_quotes_gpc() ){
    if( is_array($campo)){
		foreach($campo as $a=>$db){
			$campo[$a] = stripslashes($db);
		}
		return $campo;
	}else{
		return stripslashes($campo);
	}
  }else{
    return $campo;
  }
}
//Valida de edad
function mayorEdad($edad){
	return $this->adulto <= $edad;
}
//Valida mayor de numero
function mayorDe($campo, $num){
	return strlen($campo) >= $num;
}
function menorDe($campo, $num){
	return strlen($campo) <= $num;
}
function sMayorDe($campo, $num){
  if(mb_strlen($campo) > $num){
    return true;
  }else{
    return false;
  }
}

//Valida telefono fijo
function valTelFijo($campo){
  return preg_match('/^9[0-9]{9}$/',$campo);
}
//Valida telefono movil
function valTelMovil($campo){
  return preg_match('/^(6|7)[0-9]{9}$/',$campo);
}
//Valida telefonos moviles y fijos
function valTelefono($campo){
  if($this->valTelFijo($campo)){
    return true;
  }elseif($this->valTelMovil($campo)){
    return true;
  }else{
    return false;
  }
}
//Valida DNI
function valDni($campo){
 return preg_match('/^[0-9]{8}[a-z]$/',$campo);
}
//Valida NIE
function valNie($campo){
  return preg_match('/^(x|y|z)[0-9]{7}(a-z)$/',$campo);
}
//Valida CIF
function valCif($campo){
  return preg_match('/^[a-hj-np-sv-w]{1}[0-9]{8}$/',$campo);
}
//Valida DNI/NIE/CIF
function valDniNieCif($campo){
  if($this->valDni($campo)){
    return true;
  }else if ($this->valNie($campo)){
    return true;
  } else if($this->valCif($campo)){
    return true;
  } else{
    return false;
  }
}
//Valida matricula coche Viejo
function valMatriculaVieja($campo){
  return preg_match('/^[a-z]{2}\-[0-9]{4}\-[a-z]{2}$/',$campo);
}
//Valida matricula Coche
function valMatriculaNueva($campo){
  return preg_match('/^[0-9]{4}\-[b-df-hj-lpr-tv-z]{3}$/',$campo);
}
//Valida las dos matriculas
function valMatricula($campo){
  if($this->valMatriculaVieja($campo)){
    return true;
  }else if ($this->valMatriculaNueva($campo)){
  return true;
  } else{
  return false;
  }
}

function valMimeImg($datos){
	return in_array($datos,$this->tipMimeImg);//($datos='image/pjpeg')
}

function valMimeTxt($datos){
	return in_array($datos,$this->tipMimeTxt);
}

function valMimeAudio($datos){
	return in_array($datos,$this->tipMimeAudio);
}

function valMimeVideo($datos){
	return in_array($datos,$this->tipMimeVideo);
}

function valMimeAplicaciones($datos){
	return in_array($datos,$this->tipMimeAplicaciones);
}
//Valida nombre de 3 a 25 caracteres
function valNombreEmpresa($campo){
	return preg_match('/^[a-z0-9ñÑ ,\.]{3,25}$/',$campo);
}
//Valida nombre persona
function valNombrePersona($campo){
  return eregi("[[:space:]á-úÁ-Úa-zA-ZñÑ]",$campo);
}
//Valida nik de 4 caracteres
function valNik($campo){
  return preg_match('/^[0-9ñÑa-z-_]{4,}$/',$campo);
}
//Valida codigo postal CP
function valCodigoPostal($campo){
  if(strlen($campo>3)){
    return true;
  }else{
    return false;
  }
}
//Valida email
function valEmail($campo){
  return mb_ereg('^[0-9ñÑa-z-A-Z-_\.]{2,}@[ñÑa-zA-Z]{2,}\.[a-zA-Z]{2,4}(\.[a-zA-Z]{2,4})?$',$campo);
}
//Valida .pdf
function valPdf($campo){
  return mb_ereg('^.*\.(pdf|PDF)$',$campo);
}



//Valida domicilio
function valDomicilio($campo){
  return mb_eregi('^.{3,50}$',$campo);
}
//Valida poblacion
function valPoblacion($campo){
    return mb_eregi('^[a-z\,\\`Ññ ]{4,50}$',$campo);
}
//Valida registro asociacion
function valRegistroAsociacion($campo){
  return mb_eregi('^[0-9]{3}\.?[0-9]{3}$',$campo);
}
//Valida area texto
function valAreaTexto($campo){
  if(mb_strlen($campo)>10){
   return true;
  }else{
   return false;
  }
}
private function valLatitud($lat){
  if(mb_eregi('^[0-9]{2}\.[0-9]{4,15}$',$lat)){
    if ($lat>=27.5 && $lat<=43.5){
	  if ($lat<=35.3 && $lat>=29.4){
	    return false;
	  }
      return true;
    }else{
      return false;
    }
  }else{
    return false;
  }
}
private function valLongitud($long){
  if(mb_eregi('^\-?[0-9]{1,2}\.[0-9]{4,19}$',$long)){
    if ($long>=-18.2 && $long<=4.5){
	  if ($long<=-10 && $long>=-13.5){
	    return false;
	  }
      return true;
    }else{
      return false;
    }
  }else{
    return false;
  }
}
function valLatLong($lat,$long){
  if($this->valLatitud($lat) && $this->valLongitud($long)){
    if(($long<-7.5 && $long>-9.3) && ($lat<41 && $lat>36.5)){
	  return false;
	}else{
	  return true;
	}
  }else{
    return false;
  }
}
function valPass($campo){
  if (mb_eregi('^[^ ]{6,20}$',$campo)){
    return true;
  }else{
    return false;
  }
}
  function valEdadAnimal($campo){
    if(mb_eregi('^[0-9]{1,2}$',$campo)){
	  if($campo<=19){
	    return true;
	  }else{
	    return false;
	  }
	}
  }
  function valUrl($campo){
    //return mb_eregi('^(http://)?(w){3}\.{1}\S+\.[a-z]{2,4}$',$campo);
	return preg_match('/^(http://)?(w){3}\.{1}\S+\.[a-z]{2,4}$/',$campo);
  }
  
  function valTags($campo){
    //return mb_eregi('^[a-z, ]{4,}$',$campo);
	return preg_match('/^[a-z, ]{4,}$/',$campo);
  }
  
   function valTitulo($campo){
    //if (!eregi('^[a-z0-9áéíóúñ ]{3,100}$',$campo)){
	  if(!preg_match('/^[a-z0-9áéíóúñ ]{3,100}$/i', $campo)){
	    return false;
	  }else{
	    return true;
	  }
  }
  
}
?>
