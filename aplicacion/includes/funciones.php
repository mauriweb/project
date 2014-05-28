<?php
function dameProds($resProd){
  global $db;
  $prodHtml='';
  foreach($resProd as $reProd){
	$sqlImgProd="select * from imagenesprod where idProducto=".sanitize($reProd['productoId'], INT);
	$resImgProd=$db->GetRow($sqlImgProd);
	$rutaImg=isset($resImgProd['rutaImg'])?$resImgProd['rutaImg']:'noImg.jpg';
	$s='';
	if($reProd['productoId']==11)$s='ss'; //echo $rutaImg.' * '.$reProd['Precio'];
    $precio='<span class="precio">'.$reProd['Precio'].$s.' &euro;</span>';
    if(strlen($reProd['Descripcion'])>30)
      $reProd['Descripcion']=substr($reProd['Descripcion'], 0, 27).' ...';
    if(strlen(trim($reProd['PrecioRebajado']))>0){
      $precio='<span class="precioRebajado">'.$reProd['Precio'].' &euro;</span>';
      $precio.='<span class="precio">'.$reProd['PrecioRebajado'].' &euro;</span>';
    }
    $slug=str_replace(' ', '-', $reProd['Nombre']);
    $sqlCat='select modelo from modelos where idModelo='.$reProd['idModelo'];
    $resMod=$db->GetRow($sqlCat);
    $prodHtml.='
			<a onClick="window.location=\''.DOMINIO.'/tienda/'.$slug.'\'">
			<div class="productos">
            <div class="contenedorImagen" id="contenedorImagen">
           	<img src="imagenes/thumbsProductos/'.$rutaImg.'"  />
            <p class="descripcion">'.$resMod['modelo'].'</p>
            </div>
            <p class="titulo">'.$reProd['Nombre'].'</p>
            <span class="descripcion"><strong style="font-size:11px;">Descripción: </strong>'.$reProd['Descripcion'].'</span>
        	'.$precio.'
            <span class="comprar"><form> 
			<input type="button" class="button_comprar" value="COMPRAR" onClick="window.location=\''.DOMINIO.'/tienda/'.$slug.'\'" /> </form></span>
      		</div>
			</a>';
			
			
  }
  return $prodHtml;
}
?>