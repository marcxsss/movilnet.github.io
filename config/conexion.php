<?php
include 'constantes.php';
class Database{
    private $host;
    private $user;
    private $password;
    private $db;
    public $obj = null;
    
    protected function __construct(){
        
        try{

            $this->host = DB_HOST;
            $this->user = DB_USER;
            $this->password = DB_PASS;
            $this->db = DB_NAME;
            $this->obj = new mysqli($this->host,$this->user,$this->password,$this->db);
            
            if($this->obj->connect_errno){  
                print_r($this->obj->connect_error);
            }else{
                $this->obj->set_charset("utf8");
            }
            
        }catch(mysqli_sql_exception $e){
            return 'error '.$e->getMessage();
        }

       
        
	}

}

?>