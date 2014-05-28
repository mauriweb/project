<?php 
	/*CANONICAL*/
	$smarty->assign('pagina','/inicio');
	/*SEO*/
	$smarty->assign('metaDescripcion','');
	$smarty->assign('metaKeywords','');
	/*TITULO*/
	$smarty->assign('titulo','Acero estudio | Inicio');
	$smarty->assign('activeInicio','start active');
	
	
	
	//PARTES PENDIENTES
	$sqlPartesPendientes="select e.nombre, e.apellido, e.apellidoDos, p.fecha, p.horas from 
	pendientes p, empleados e where   
	p.idUser=e.id";
	$vista='';
	if($res=$db->GetAll($sqlPartesPendientes)){
		foreach($res as $re){
			$vista.='<tr>
										<td>'.$re['nombre'].'</td>
										<td>'.$re['apellido'].'</td>
                                        <td>'.$re['apellidoDos'].'</td>
                                        <td>'.date('d/m/Y', $re['fecha']).'</td>
										<td class="numeric">'.$re['horas'].'</td>
									</tr>';
		}
	}
	$sy->assign('vista', $vista);
	
	
	
	//PWERMISOS Y AUSENCIAS
	if(isset($_GET['aceptar'])){//$db->debug=true;
		$estado='1';
		$id=sanitize($_GET['aceptar'], INT);
		$sql="select fechaDe, fechaA, horaDe, horaA, categoria, idEmpleado from permisosyausencias where id=".$id;
		$fechas=array();
		$horasCal=0;
		if($res=$db->GetRow($sql)){
			if($res['fechaDe']==$res['fechaA']){
				$fechas[0]=strtotime($acero->swip_date_us_eu($res['fechaDe']));
				if($res['horaDe']!='' && $res['horaA']!=''){
					$horasCal=$res['horaA'] - $res['horaDe'];
				}
			}else{
				$fechaDeExp=explode('/',$res['fechaDe']);
				$diaDe=$fechaDeExp[0];
				$mesDe=$fechaDeExp[1];
				$anyoDe=$fechaDeExp[2];
				$fechaDeExp=mktime(0,0,0,$mesDe, $diaDe, $anyoDe);

				$fechaAExp=explode('/',$res['fechaA']);
				$diaA=$fechaAExp[0];
				$mesA=$fechaAExp[1];
				$anyoA=$fechaAExp[2];
				$fechaAExp=mktime(0,0,0,$mesA, $diaA, $anyoA);
				while($fechaDeExp <= $fechaAExp){
					$fechas[]=$fechaDeExp;
					$fechaDeExp+=(60*60*24);
				}
			}
			//var_dump($fechas);
			$horasArestar=array();
			foreach($fechas as $fecha){
				$fechaFormat=date('Y-m-d', $fecha);
				$userId=dameUsuario($res['idEmpleado'], true, true);
				$sql="select id from cal_bookings where the_date='$fechaFormat' and id_item=".$userId;
				if($resBook=$db->GetRow($sql)){
					$sql="update cal_bookings set horas=$horasCal, id_state=".$res['categoria']." where id=".$resBook['id'];
					$db->execute($sql);
				}else{
					$sql="insert into 
					cal_bookings 
					(id_item, the_date, id_state, id_booking, horas) values 
					($userId, '$fechaFormat', ".$res['categoria'].", 0, $horasCal)";
					$db->execute($sql);
				}
			}
		}
		
	}elseif(isset($_GET['cancelar'])){
		$estado='2';
		$id=sanitize($_GET['cancelar'], INT);
		
	}
	$sqlUp="update permisosyausencias set estado='$estado' where id=".$id;
	if($db->execute($sqlUp)){
		
	}
	
	$permisos='';
	$sql="select e.nombre, e.apellido, e.apellidoDos, pa.* from permisosyausencias pa, empleados e where e.id=pa.idEmpleado";
	if($resPer=$db->GetAll($sql)){
		foreach($resPer as $rePer){
			$horas='';
			if($rePer['fechaDe']==$rePer['fechaA']){
				$fecha=$rePer['fechaDe'];
				if($rePer['horaDe']!='' && $rePer['horaA']!=''){
				    $horas=$rePer['horaDe'].'-'.$rePer['horaA'];
				}
			}else{
			    $fecha=$rePer['fechaDe'].'-'.$rePer['fechaA'];
			}
			
			//para luego lo acabo/////
			if($rePer['estado']=='x'){
				$boton='<td><a onClick="return confirm(\'Estas seguro que lo quieres Aceptar?, esta operacion no se puede revertir\')" href="inicio/?aceptar='.$rePer['id'].'">Aceptar</a></td>
						<td><a onClick="return confirm(\'Estas seguro que lo quieres Cancelar?, esta operacion no se puede revertir\')"  href="inicio/?cancelar='.$rePer['id'].'">Cancelar</a></td>';
			}elseif($rePer['estado']=='1'){
				$boton='<td colspan="2">Aceptado</td>';
			}elseif($rePer['estado']=='2'){
				$boton='<td colspan="2">Cancelado</td>';
			}
			$permisos.='<tr>
										<td>'.$rePer['nombre'].'</td>
										<td>'.$rePer['apellido'].'</td>
                                        <td>'.$rePer['apellidoDos'].'</td>
                                        <td>'.$fecha.'</td>
										<td class="numeric">'.$horas.'</td>
										'.$boton.'
									</tr>';
		}
	}
	$sy->assign('permisos', $permisos);
	
	
	$smarty->display('admin/inicio.tpl');
?>