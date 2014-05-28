<?php
/*
$db = new miDB();
$datos = array( "Perico", "Palotes" );
$sql = "INSERT INTO users ( Nombre, Apellidos) VALUES( ?, ? )";
$db->consulta($sql, $datos);  
SELECT COUNT(*) FROM users
unset ($db)
*/
class miDB {
    
    private $pdo;
    private $opciones;
	private $dsn;
	private $stm;
	private $result;
	private $res;
	private $ins;
	
	
	
	
	
	
    public function __construct($dbUser, $dbHost, $dbPass, $dbDB ){
		$this->dsn 		= 'mysql:host='.$dbHost.';dbname='.$dbDB;
		//echo 'pass;'.$dbPass.' user;'.$dbUser.'host;'.$host.' dbname;'.$dbname;;
        //$this->dsn = 'sqlite:db449545841.db.1and1.com';
        //$this->dsn = 'sqlite::memory:';

		$this->opciones = array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    PDO::ATTR_PERSISTENT => true,
					PDO::ATTR_EMULATE_PREPARES => false,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::MYSQL_ATTR_FOUND_ROWS => true
        );
		
        try {
			$this->pdo = new PDO($this->dsn, $dbUser, $dbPass, $this->opciones);
        } catch( PDOException $e ) {
            echo "error ". $e->getMessage();
			return false;
        }
    }
    
	
	
	
	
	private function quitaComillasMagicas( $data ){
		if( get_magic_quotes_gpc() ){
			if( !is_array($data) ){
				return $data = stripslashes($data);
			}else{
				foreach($data as $a => $b){
					$data[$a] = stripslashes($b);
				}
				return $data;
			}
		}else{
			return $data;
		}
	}
	
	
	
	
	public function GetRow( $sql, $data=null ){
	  $this->res=$this->sacaUnaFila( $sql, $data );
		if(!$this->res){
		  return array();
		}else{
		  return $this->res;
		}
	}
    public function sacaUnaFila( $sql, $data=null ){
        if( $data !== null ){
			$data = $this->quitaComillasMagicas( $data );
            $data = array_values( $data ); 
		}
        $this->stm = $this->pdo->prepare( $sql );
        $this->stm->execute( $data );
        $this->stm->setFetchMode( PDO::FETCH_ASSOC );
        $this->result = $this->stm->fetch();
        return $this->result;
    }
	public function sacaUnaFilaa( $sql, $data=null ){
        if( $data !== null ){
			$data = $this->quitaComillasMagicas( $data );
            $data = array_values( $data ); 
		}
        $this->stmm = $this->pdo->prepare( $sql );
        $this->stmm->execute( $data );
        $this->stmm->setFetchMode( PDO::FETCH_ASSOC );
        $this->resultm = $this->stmm->fetch();
        return $this->resultm;
    }
    
	
	
	
	public function GetAll( $sql, $data=null ){
		$this->res=$this->sacaVariasFilas( $sql, $data );
		if(!$this->res){
		  return array();
		}else{
		  return $this->res;
		}
	}
    public function sacaVariasFilas( $sql, $data=null ){
		$this->stm = $this->pdo->prepare( $sql );
		$this->stm->setFetchMode( PDO::FETCH_ASSOC );
        if( $data !== null ){
			$data = $this->quitaComillasMagicas( $data );
            $data = array_values( $data );
			$this->stm->execute( $data );
		}else{
			$this->stm->execute();
		}
        
		$this->obj = $this->stm->fetchAll();
		//var_dump($this->obj);
        return $this->obj;
    }
    
	
	
	
	
    public function consulta( $sql, $data=null ){
        $this->stm = $this->pdo->prepare( $sql );
		if( $data !== null ){
			$data = $this->quitaComillasMagicas( $data );
            $data = array_values( $data ); 
			return $this->stm->execute( $data );
        }else{
			return $this->pdo->query($sql);
		}
    }
	
	public function insercion( $sql, $data=null ){
        $this->stm = $this->pdo->prepare( $sql );
		if( $data !== null ){
			$data = $this->quitaComillasMagicas( $data );
            $data = array_values( $data ); 
			$this->stm->execute( $data );
			return $this->pdo->lastInsertId();
        }else{
			return false;
		}
    }
	
	
	
	
	//SELECT count(*) as cant FROM tabla where .. contar filas
	public function rowCount($sql, $data=null ){
		if( $data !== null ){
			$this->stm = $this->pdo->prepare( $sql );
			$data = $this->quitaComillasMagicas( $data );
            $data = array_values( $data ); 
			$this->stm->execute( $data );
			return $this->stm->fetchColumn();
        }else{
			$this->stm = $this->pdo->query($sql);
			return $this->stm->fetchColumn();
		}
    }
	
	
	
    public function cerrar(){
        $this->pdo = null;
    }
    

    
    public function __destruct(){
        $this->pdo = null;
    }
}  

?>