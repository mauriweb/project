<?php
if($estado===NULL)fourOfour();

$sql="select id, fechaAlta, fechaBaja, apellido, nombre, tel, email, dni from empleados where estado='$estado'";
	$res=$db->GetAll($sql);
	$empleados='';
	if(count($res)>0){
	  foreach($res as $re){
		if($estado===1){
				$acciones='<td>'.date('d/m/Y', $re['fechaAlta']).'</td>
													<td><a href="ver-empleado/?idEmp='.$re['id'].'" class="btn default btn-xs blue"><i class="fa fa-external-link"></i> Ver </a></td>
													<td><a class="btn default btn-xs green" href="add-empleados/?idEmp='.$re['id'].'"><i class="fa fa-edit"></i> Editar </a></td>
													<td><a class="btn default btn-xs red" href="empleados/?delEmp='.$re['id'].'"><i class="fa fa-trash-o"></i> Borrar </a></td>
													<td><a class="btn default btn-xs purple" href="empleados/?rmEmp='.$re['id'].'"><i class="fa fa-trash-o"></i> Baja </a></td>';
		}elseif($estado===0){
				$acciones='<td>'.date('d/m/Y', $re['fechaBaja']).'</td>
													
													<td><a class="btn default btn-xs purple" href="readmitir-empleados/?rdEmp='.$re['id'].'"><i class="fa fa-trash-o"></i> Readmitir </a></td>';
		}
	    $empleados.='<tr >
						<td>'.$re['nombre'].'</td>
                                        <td>'.$re['apellido'].' '.$re['apellidoDos'].'</td>
										<td>'.$re['tel'].'</td>
										<td>'.$re['email'].'</td>
                                        <td>'.$re['dni'].'</td>
                                        '.$acciones.'
									</tr>';
	  }
			  
	}
	$sy->assign('empleados', $empleados);
?>