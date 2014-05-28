<?php 
class Imagenes{
	//PROPIEDADES ################################
	public $gIS;
	var $res = array();
	var $img;
	var $temp;
	var $marcoW;
	var $marcoH;
	var $foto;
	//ARRAY PARA SUSTITUIR ACENTOS Ñ ç Y ESTENSIONES PARA QUE EL NOMBRE NO TENGA NADA RARO
	var $fairy = array(	'.jpg'=>'',
					 	'.jpeg'=>'',
						'.png'=>'',
						'.gif'=>'',
						'A'=>'a',
						'á'=>'a', 
						'Á'=>'a', 
						'à'=>'a',
						'À'=>'a',
						'E'=>'e',
						'é'=>'e', 
						'É'=>'e', 
						'è'=>'e',
						'È'=>'e',
						'I'=>'i',
						'í'=>'i', 
						'Í'=>'i', 
						'ì'=>'i',
						'Ì'=>'i',
						'O'=>'o',
						'ó'=>'o', 
						'Ó'=>'o', 
						'ò'=>'o',
						'Ò'=>'o',
						'U'=>'u',
						'ú'=>'u', 
						'Ú'=>'u', 
						'ù'=>'u',
						'Ù'=>'u',
						'ñ'=>'n',
						'Ñ'=>'n',
						'ç'=>'s',
						'Ç'=>'s',
						'"'=>'',
						"'"=>'', 
						'/'=>'',
						'\\'=>'',
						'_'=>'',
						'<'=>'',
						'>'=>'',
						'%'=>'',
						'&'=>'',
						'$'=>'',
						'·'=>'',
						'!'=>'',
						'º'=>'',
						'ª'=>'',
						'@'=>'',
						'#'=>'',
						'('=>'',
						')'=>'',
						'='=>'',
						'¬'=>'',
						'?'=>'',
						'¿'=>'',
						'+'=>'',
						'*'=>'',
						']'=>'',
						'['=>'',
						'{'=>'',
						'}'=>'',
						'¨'=>'',
						'='=>'',
						';'=>'',
						','=>'',
						'¡'=>'',
						'.'=>'',
						':'=>'',
						'-'=>'', 
						' '=>'-');
						
	var $a;
	var $b;
	var $laFoto;
	var $resF1;
	var $resF2;
	var $resDosFoto;
	var $resRutas;
	var $numeracion;
	var $rutaName;
	var $separador = 'num';	
	
	var $punto;


	//METODOS#####################################################
	
	function donLimpio($cadena,$long=false){//limpia el nombre de la imagen
		$cadena = urldecode($cadena);
		$cadena = mb_strtolower($cadena, 'utf-8');
		foreach($this->fairy as $this->a=>$this->b){
			$cadena = str_replace($this->a,$this->b,$cadena);
		}
		//ls-foto-xula-de-una-castana
		$cadena = preg_replace("/[^a-z0-9\-]/",'',$cadena);//esto lo que dice es: todo lo que no vaya de a-z o de 0-9 no vale nada ^ este signo significa excepto, lo que va despues
		
		if($long){
			if( mb_strlen($cadena) > $long){
				$cadena = mb_substr($cadena,0,$long);//recorta la palabra con el numero hasta $long
			}
		}
		return $cadena;
	}
	
	//img/foto-de-una-castana.num.2.jpg
	//$ruta.$separador.num123.$extension
	//FUNCION PARA QUE NO SE REPTAN NOMBRE DE IMAGENES######
	function noRepe($ruta,$rutaDB,$separador,$extension){
		if( file_exists($ruta.$extension)){
			for($i=2; $i<=1000; $i++){//300 limite de imagenes si quieres que se vean mas imagenes modificar las imagenes
				if( !file_exists($ruta.$separador.$i.$extension)){
					$this->numeracion = $i;
					break;
				}
			}
			$this->resRutas[0] = $ruta.$separador.$this->numeracion.$extension;
			$this->resRutas[1] = $rutaDB.$separador.$this->numeracion.$extension;
			return $this->resRutas;
		}else{
			$this->resRutas[0] = $ruta.$extension;
			$this->resRutas[1] = $rutaDB.$extension;
			return $this->resRutas;
			
		}
	}
	
		############################ crea nombre a imagenes ########################################
	
	function nombreImagen($cadena,$long,$rutaOrig,$ruta,$rutaDB){ 
		//limpiar nombre
		$cadena = $this->donLimpio($cadena,$long);
		//obtener extension
		$this->punto = strrpos($rutaOrig,'.');
		$this->ext = substr($rutaOrig,$this->punto);//recorta todo despues del punto
		//..img
		return $this->noRepe($ruta.'/'.$cadena,$rutaDB.'/'.$cadena,$this->separador,$this->ext);
		
	}
	
	
	##################### UNA IMAGEN SUBIDA ###############################
	//$borrar true borra la foto original, false no quiero borrar la original, tantas veces se llamen en false la ultima vuelta true
	//$name nombre con el que queremos que se guarde el archivo $_POST
	//$long numero maximo de caracteres del nombre, o le pasamos un false al declarar la funcion si no queremos caracateres maximos
	//$campo nombre del formulario del campo de archivo que subo
	//$size tamaño unico de la foto
	//$ruta ruta fisica donde se guardan las fotos, sin barra al final
	//$rutaDB guarda opcional ruta, si no llega tiene un false
	function unaImagenSubida ($borrar,$name,$long,$campo,$size,$ruta,$rutaDB=false){
		if($rutaDB === false ){
			$rutaDB = $ruta;
		}
		$name = $this->donLimpio($name,$long);
		$this->temp = $_FILES[$campo]['tmp_name'];
		$this->gIS = getimagesize($this->temp);
		if( $this->gIS[0] > $this->gIS[1] ){//detecta si es horizontal o vertical y dependiendo entra a uno o a otro
			//horizontal//
			$this->marcoW = $size;
			$this->marcoH = round(($this->gIS[1]/$this->gIS[0]) * $size);
		}else{
			//vertical//
			$this->marcoW = round(($this->gIS[0]/$this->gIS[1]) * $size);
			$this->marcoH = $size;
		}
	####################################################
	if($this->gIS[0] < $this->marcoW || $this->gIS[1] < $this->marcoH){
		$this->res[0]= false;
		$this->res[1] = 'La imagen es demasiado pequeña';
		return $this->res;
	}else{
		switch($this->gIS[2]){
			case 2:
				$this->img = imagecreatefromjpeg($this->temp);
				break;
			case 1:
				$this->img = imagecreatefromgif($this->temp);
				break;
			case 3:
				$this->img = imagecreatefrompng($this->temp);
				break;
		}
		$this->foto = imagecreatetruecolor($this->marcoW,$this->marcoH);
		imagecopyresampled($this->foto, $this->img,0,0,0,0,$this->marcoW,$this->marcoH,$this->gIS[0],$this->gIS[1]);
		imagedestroy($this->img); //this foto destino, this img marco 0,0 y, y del destino 0,0 x, y del origen
			switch($this->gIS[2]){
				case 1:
					$this->rutaName = $this->noRepe($ruta.'/'.$name,$rutaDB.'/'.$name, $this->separador,'.gif');
					imagegif($this->foto,$this->rutaName[0]);
					$this->laFoto = $this->rutaName[1];
					break;
				case 2:
					$this->rutaName = $this->noRepe($ruta.'/'.$name,$rutaDB.'/'.$name, $this->separador,'.jpg');
					imagejpeg($this->foto,$this->rutaName[0]);
					$this->laFoto = $this->rutaName[1];
					break;
				case 3:
					$this->rutaName = $this->noRepe($ruta.'/'.$name,$rutaDB.'/'.$name, $this->separador,'.png');
					imagepng($this->foto,$this->rutaName[0]);
					$this->laFoto = $this->rutaName[1];
					break;
		}
		imagedestroy($this->foto);
		if($borrar){
			@unlink($this->temp);
		}
		$this->res[0] = true;
		$this->res[1] = 'Imagen creada';
		$this->res[2] = $this->laFoto;
		return $this->res;
	}
	
	}//UNA IMAGEN SUBIDA
	
	########################## DOS IMAGENES SUBIDAS ##################################
	//$name nombre imagen
	//$long longitud
	//$campo nombre del campo
	//$sizeT tamaño imagen pequeña
	//$sizeG tamaño imagen grande
	//$ruta ruta fisica
	//$rytaDB opcional ruta base de datos
	
	function dosImagenesSubidas($name,$long,$campo,$sizeT,$sizeG,$ruta,$rutaDB=false){
		$this->resF1 = $this->unaImagenSubida(false,$name,$long,$campo,$sizeG,$ruta,$rutaDB);
		if( $this->resF1[0]){
			$this->resF2 = $this->unaImagenSubida(true,'T '.$name,$long,$campo,$sizeT,$ruta,$rutaDB);
			$this->resDosFotos[0] = true;
			$this->resDosFotos[1] = $this->resF1[1];
			$this->resDosFotos[2] = $this->resF1[2];
			$this->resDosFotos[3] = $this->resF2[2];
		}else{
			//original menos que la grande
			$this->resDosFotos[0] = false;
			$this->resDosFotos[1] = $this->resF1[1];
		}
		return $this->resDosFotos;
	}//DOS IMAGENES SUBIDAS
	
	##########MODIFICAR IMAGENES DE UN DIRECTORIO cuando ya esta en la base de datos################
	
	function unaImagenDir($borrar,$name,$long,$rutaDisco,$size,$ruta,$rutaDB=false){
		if($rutaDB === false ){
			$rutaDB = $ruta;
		}
		$name = $this->donLimpio($name,$long);
		$this->temp = $rutaDisco;
		$this->gIS = getimagesize($this->temp);
		if( $this->gIS[0] > $this->gIS[1] ){//detecta si es horizontal o vertical y dependiendo entra a uno o a otro
			//horizontal//
			$this->marcoW = $size;
			$this->marcoH = round(($this->gIS[1]/$this->gIS[0]) * $size);
		}else{
			//vertical//
			$this->marcoW = round(($this->gIS[0]/$this->gIS[1]) * $size);
			$this->marcoH = $size;
		}
	####################################################
	if($this->gIS[0] < $this->marcoW || $this->gIS[1] < $this->marcoH){
		$this->res[0]= false;
		$this->res[1] = 'La imagen es demasiado pequeña';
		return $this->res;
	}else{
		switch($this->gIS[2]){
			case 2:
				$this->img = imagecreatefromjpeg($this->temp);
				break;
			case 1:
				$this->img = imagecreatefromgif($this->temp);
				break;
			case 3:
				$this->img = imagecreatefrompng($this->temp);
				break;
		}
		$this->foto = imagecreatetruecolor($this->marcoW,$this->marcoH);
		imagecopyresampled($this->foto, $this->img,0,0,0,0,$this->marcoW,$this->marcoH,$this->gIS[0],$this->gIS[1]);
		imagedestroy($this->img); //this foto destino, this img marco 0,0 y, y del destino 0,0 x, y del origen
			switch($this->gIS[2]){
				case 1:
					$this->rutaName = $this->noRepe($ruta.'/'.$name,$rutaDB.'/'.$name, $this->separador,'.gif');
					imagegif($this->foto,$this->rutaName[0]);
					$this->laFoto = $this->rutaName[1];
					break;
				case 2:
					$this->rutaName = $this->noRepe($ruta.'/'.$name,$rutaDB.'/'.$name, $this->separador,'.jpg');
					imagejpeg($this->foto,$this->rutaName[0]);
					$this->laFoto = $this->rutaName[1];
					break;
				case 3:
					$this->rutaName = $this->noRepe($ruta.'/'.$name,$rutaDB.'/'.$name, $this->separador,'.png');
					imagepng($this->foto,$this->rutaName[0]);
					$this->laFoto = $this->rutaName[1];
					break;
		}
		imagedestroy($this->foto);
		if($borrar){
			@unlink($this->temp);
		}
		$this->res[0] = true;
		$this->res[1] = 'Imagen creada';
		$this->res[2] = $rutaDB.'/'.$this->laFoto;
		return $this->res;
	}
	}//MODIFICAR IMAGENES DE UN DIRECTORIO
	
	####################### Imagenes directorio dos #####################################
	//$name nombre imagen
	//$long longitud
	//$campo nombre del campo
	//$sizeT tamaño imagen pequeña
	//$sizeG tamaño imagen grande
	//$ruta ruta fisica
	//$rytaDB opcional ruta base de datos
	
	function dosImagenesDir($borrar,$name,$long,$rutaDisco,$sizeT,$sizeG,$ruta,$rutaDB=false){
		$this->resF1 = $this->unaImagenDir(false,$name,$long,$rutaDisco,$sizeG,$ruta,$rutaDB);
		if( $this->resF1[0]){
			$this->resF2 = $this->unaImagenDir(true,'T '.$name,$long,$rutaDisco,$sizeT,$ruta,$rutaDB);
			$this->resDosFotos[0] = true;
			$this->resDosFotos[1] = $this->resF1[1];
			$this->resDosFotos[2] = $this->resF1[2];
			$this->resDosFotos[3] = $this->resF2[2];
		}else{
			//original menos que la grande
			$this->resDosFotos[0] = false;
			$this->resDosFotos[1] = $this->resF1[1];
		}
		return $this->resDosFotos;
	}//imagenes directorio dos
	
	######################### UMAIMAGENDIR ############################################
	
	function unaImagen($borrar,$name,$long,$fotoW,$esForm,$size,$ruta,$rutaDB=false){
		if( $rutaDB === false) {
			$rutaDB = $ruta;
		}
			$name = $this->donLimpio($name, $long);
		
		//es subida o es un directorio
		
		if($esForm){
			$this->temp = $_FILES[$fotoW]['tmp_name'];
		}else{
			$this->temp = $fotoW;
		}
		
		################################################
		
		$this->gIS = getimagesize($this->temp);
		if( $this->gIS[0] > $this->gIS[1] ){//detecta si es horizontal o vertical y dependiendo entra a uno o a otro
			//horizontal//
			$this->marcoW = $size;
			$this->marcoH = round(($this->gIS[1]/$this->gIS[0]) * $size);
		}else{
			//vertical//
			$this->marcoW = round(($this->gIS[0]/$this->gIS[1]) * $size);
			$this->marcoH = $size;
		}
		
		####################################################
		
		if($this->gIS[0] < $this->marcoW || $this->gIS[1] < $this->marcoH){
			$this->res[0]= false;
			$this->res[1] = 'La imagen es demasiado pequeña';
			return $this->res;
		}else{
			switch($this->gIS[2]){
				case 2:
					$this->img = imagecreatefromjpeg($this->temp);
					break;
				case 1:
					$this->img = imagecreatefromgif($this->temp);
					break;
				case 3:
					$this->img = imagecreatefrompng($this->temp);
					break;
		}
		$this->foto = imagecreatetruecolor($this->marcoW,$this->marcoH);
		imagecopyresampled($this->foto, $this->img,0,0,0,0,$this->marcoW,$this->marcoH,$this->gIS[0],$this->gIS[1]);
		imagedestroy($this->img); //this foto destino, this img marco 0,0 y, y del destino 0,0 x, y del origen
			switch($this->gIS[2]){
				case 1:
					$this->rutaName = $this->noRepe($ruta.'/'.$name,$rutaDB.'/'.$name, $this->separador,'.gif');
					imagegif($this->foto,$this->rutaName[0]);
					$this->laFoto = $this->rutaName[1];
					break;
				case 2:
					$this->rutaName = $this->noRepe($ruta.'/'.$name,$rutaDB.'/'.$name, $this->separador,'.jpg');
					imagejpeg($this->foto,$this->rutaName[0]);
					$this->laFoto = $this->rutaName[1];
					break;
				case 3:
					$this->rutaName = $this->noRepe($ruta.'/'.$name,$rutaDB.'/'.$name, $this->separador,'.png');
					imagepng($this->foto,$this->rutaName[0]);
					$this->laFoto = $this->rutaName[1];
					break;
		}
		imagedestroy($this->foto);
		if($borrar){
			@unlink($this->temp);
		}
		$this->res[0] = true;
		$this->res[1] = 'Imagen creada';
		$this->res[2] = $this->laFoto;
		return $this->res;
	}
		
		
	}//imagenes directorio o subir una imagen
	
	######################### dosIMAGENDIR ############################################
	
	function dosImagenes($borrar,$name,$long,$fotoW,$esForm,$sizeT,$sizeG,$ruta,$rutaDB=false){
		$this->resF1 = $this->unaImagen(false,$name,$long,$fotoW,$esForm,$sizeG,$ruta,$rutaDB);
		if( $this->resF1[0]){
			$this->resF2 = $this->unaImagen($borrar,$name.' T',$long,$fotoW,$esForm,$sizeT,$ruta,$rutaDB);
			$this->resDosFotos[0] = true;
			$this->resDosFotos[1] = $this->resF1[1];
			$this->resDosFotos[2] = $this->resF1[2];
			$this->resDosFotos[3] = $this->resF2[2];
		}else{
			//original menos que la grande
			$this->resDosFotos[0] = false;
			$this->resDosFotos[1] = $this->resF1[1];
		}
		return $this->resDosFotos;
				
	}//imagenes directorio o subir una imagen
		

	
}//FIN DE LA CLASE ############################
	
	
?>