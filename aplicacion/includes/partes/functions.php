<?php
function filtraCampos($edita = false)
	{ 
		global $sqlProp, $sqlVal, $sql;
		$coma  = '';
		$error = false;
		foreach ($_POST as $key => $val) { //VALIDACION EMPTY
			$realKey = substr($key, 4);
			if (substr($key, 0, 4) == 'frm-') {
				$_POST[$key] = trim($_POST[$key]);
				if ($_POST[$key] == '0') {
					$error = true;
					break;
				}
				if ($edita) {
					$sql .= $coma . $realKey . "='" . sanitize($_POST[$key], SQL) . "'"; 
				} else {
					$sqlProp .= $coma . $realKey;
					$sqlVal .= $coma . "'" . sanitize($_POST[$key], SQL) . "'";
				}
				$coma = ', ';
			} elseif (substr($key, 0, 4) == 'det-') {
				$_POST[$key] = trim($_POST[$key]);
				if(substr($key, 0, 9)=='det-fecha' && !$error){
					//$test_date = '03/22/2010';
					$test_arr  = explode('/', $_POST[$key]);
					if (!@checkdate($test_arr[1], $test_arr[0], $test_arr[2])){
						$error=true;
						break;
					}
					$_POST[$key]=strtotime($test_arr[1].'/'.$test_arr[0].'/'.$test_arr[2]);
				}
				if ($_POST[$key] == '') {//exit($key);
					$error = true;
					break;
				}
			}
		}
		return $error;
}
?>