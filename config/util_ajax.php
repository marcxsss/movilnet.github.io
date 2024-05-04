<?php
require_once '../config/conexion.php';

    Class Utils_ajax extends Database{

        public function __construct() {
            
            parent::__construct();
            
        }

        public function get_all_rows($sql){

            $stmt = $this->obj->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows > 0){

                while($rows = $result->fetch_object()){
                    $array[] = $rows;
                }

            return $array;  

            }else{

                return 'no_data_display';

            }

        }   

        public function get_one_row($sql){

            $stmt = $this->obj->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows > 0){
                $array = $result->fetch_object();
                return $array;    
            }else{
                return 'no_data_found';
            }

        }

        public function num_rows($sql){

            $stmt = $this->obj->query($sql);
            $result = $stmt->num_rows;
            return $result;

        }

        public function execute($sql){

            $stmt = $this->obj->prepare($sql);
            $stmt->execute();
            return $stmt->affected_rows;

        }

        public function execute_bind($sql,$tstring,$obj){

            $stmt = $this->obj->prepare($sql); 
            $stmt->bind_param($tstring,$obj);
            $stmt->execute();
            return $stmt->affected_rows;
    
        }

    }

?>