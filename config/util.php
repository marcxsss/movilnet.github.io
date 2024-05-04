<?php
    
    require_once 'conexion.php';
    
    class Utils extends Database {
        
        public function __construct() {
            
            parent::__construct();
            
        }
        
        public function refValues($arr) {
            
            if (strnatcmp(phpversion(),'5.3') >= 0) {
                
                foreach($arr as $key => $value) {
                    $refs[$key] = &$arr[$key];
                }
                
                return $refs;
                
            }
            
            return $arr;
            
        }
        
        public function get_all_rows($sql, $data = NULL) {
            
            if(is_null($data)) {
                
                $result = $this->obj->query($sql);
                
            } else {
                
                $stmt = $this->obj->prepare($sql);
                call_user_func_array(array($stmt, 'bind_param'), $this->refValues($data));
                $stmt->execute();
                $result = $stmt->get_result();
                
            }
            
            if ($this->obj->error) {
                
                print_r($this->obj->error);
                return false;

            } else {
                
                if ($result->num_rows > 0) {
                    
                    while ($rows = $result->fetch_object()) {
                        $array[] = $rows;
                    }
                    
                    return $array;  
                    
                } else {
                    
                    return 'no_data_display';
                    
                }
                
            }
            
        }
        
        public function get_one_row($sql,$data = NULL) {
            
            if(is_null($data)) {
                
                $result = $this->obj->query($sql);
                
            } else {
                
                $stmt = $this->obj->prepare($sql);
                call_user_func_array(array($stmt, 'bind_param'), $this->refValues($data));
                $stmt->execute();
                $result = $stmt->get_result();
                
            }

            if ($this->obj->error) {
                
                print_r($this->obj->error);
                return false;

            } else {
                
                if ($result->num_rows > 0) {
                    
                    $array = $result->fetch_object();                
                    return $array;  
                
                } else {
                    
                    return 'no_data_display';
                    
                }
                
            }
            
        }
        
        public function get_num_rows($sql,$data = NULL) {
            
            if(is_null($data)) {
                
                $result = $this->obj->query($sql);
                
            } else {
                
                $stmt = $this->obj->prepare($sql);
                call_user_func_array(array($stmt, 'bind_param'), $this->refValues($data));
                $stmt->execute();
                $stmt->store_result();

            }

            if ($this->obj->error) {
                
                print_r($this->obj->error);
                return false;
                
            } else {
                
                $result = $stmt->num_rows;
                return $result;
                
            }
            
        }
        
        public function execute($sql,$data = NULL) {
            
            $this->obj->begin_transaction();
            if(is_null($data)) {
                
                $result = $this->obj->query($sql);
                
            } else {
                
                $stmt = $this->obj->prepare($sql);
                call_user_func_array(array($stmt, 'bind_param'), $this->refValues($data));
               
            }

            if ($this->obj->error) {
                
                print_r($this->obj->error);
                $this->obj->rollback();
                return false;
                
            } else {
                
                $stmt->execute();
                $this->obj->commit();
                return $stmt->affected_rows;
                
            }
            
        }

    }
    
?>