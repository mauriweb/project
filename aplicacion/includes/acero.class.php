<?php
class Acero{
	
	var $user;
	var $userCalendar;
	var $employee;
	var $db;
	var $dataEmployee=array();
	
	
	public function Acero($db){
		$this->db=$db;
		if(isset($_SESSION['admin'])){
		  $this->user=sanitize($_SESSION['admin'], INT);
		}elseif(isset($_SESSION['administracion'])){
		  $this->user=sanitize($_SESSION['administracion'], INT);
		}elseif(isset($_SESSION['cliente'])){
		  $this->user=sanitize($_SESSION['cliente'], INT);
		}elseif(isset($_SESSION['trabajador'])){
		  $this->user=sanitize($_SESSION['trabajador'], INT);
		  $this->employee=true;
		  $this->set_data_employee($this->user);
		}
	}
	
	public function set_data_employee($id=NULL){
		$sql="select * from empleados where id=".$id;
		if(!$this->dataEmployee=$this->db->GetRow($sql)){
			
		}
	}
	
	public function get_data_employee($id, $campos){
		if(!is_array($campos)){
		    $campos=array($campos);
			$single=true;
		}
		if($this->employee){
			if($single)return $this->dataEmployee[$campos[0]];
			return $this->dataEmployee;
		}
		$campos_str=$coma='';
		foreach($campos as $campos){
			$campos_str.=$coma.$campos;
			$coma=', ';
		}
		$sql="select $campos_str from empleados where id=".$id;
		if($res=$db->GetRow($sql)){
			if($single)return $res[$campos[0]];
			return $res;
		}
	}
	
	public function get_current_employee_id(){
		if(!$this->employee)die('error');
		return $this->user;
	}
	
	public function get_current_employee_id_cal(){
		if(!$this->employee)die('error');
		$sql="select idEmpleadoCalendario from empleados where id=".$this->user;
		$res=$this->db->GetRow($sql);
		return $res['idEmpleadoCalendario'];
	}
	
	public function get_employee_id_from_employe_id_cal($id){
		if(!$this->employee)die('error');
		$sql="select id from empleados where idEmpleadoCalendario=".$id;
		$res=$this->db->GetRow($sql);
		return $res['id'];
	}
	
	public function get_employee_id_cal($id){
		if(!$this->employee)die('error');
		$sql="select idEmpleadoCalendario from empleados where id=".$id;
		$res=$this->db->GetRow($sql);
		return $res['idEmpleadoCalendario'];
	}
	
	public function get_horas_de_mas_user($idUser){
		$sql="select sum(horas) horas from horasdemas where idUser=".$idUser;
		if($res=$this->db->GetRow($sql)){
			return $res['horas'];
		}
	}
	
	
	public function get_hours_from_date($date, $idEmployee){//echo '<br>rr'.$this->get_data_employee($idEmployee, 'jornadaLaboral');
		global $datosJornadas;
		if($this->get_data_employee($idEmployee, 'jornadaLaboral')=='N'){//exit;
			//$dateExp=explode('/', $date);
			//$orden=($format=='US')?array(0,1,2):array(1,0,2);
			$numDia=date('N', $date);
			$numMes=date('n', $date);
			$summer=(in_array($numMes, array(7,8)))?true:false;
			if($summer){
				$horasDia=$datosJornadas['n']['verano'];
			}else{
				$horasDia=($numDia==5)?$datosJornadas['n']['viernes']:$datosJornadas['n']['horas'];
			}
		}else{
			$horasDia=$datosJornadas['r']['horas'];
		}
		return $horasDia;
		
	}
	
	public function get_horas_de_menos($idEmployee){
		$hoursLess=0;
		$sql="select the_date, horas from cal_bookings where id_state in(5,3) AND id_item=".$this->get_employee_id_cal($idEmployee);
		if($res=$this->db->GetAll($sql)){
			foreach($res as $re){
				$horas=($re['horas']!=0)?$re['horas']:$this->get_hours_from_date(strtotime($re['the_date']), $idEmployee);
				$hoursLess+=$horas;
				
			}
				
		}
		return $hoursLess;
	}
	
	public function swip_date_us_eu($date){
		$parts=explode('/', $date);//'5/25/12';
		return $parts[1].'/'.$parts[0].'/'.$parts[2];
	}
	
	
	
	
}
?>