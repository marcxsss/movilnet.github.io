<?php

require_once 'config/util.php';

class FirmaModel extends Utils{

    public function getFirmaData($dni){

        $sql = "SELECT *,REPLACE(telefono,' ','') as wpp FROM lista_de_trabajadores WHERE dni = ?";
        $data = ['s',$dni];
        $result = Utils::get_one_row($sql,$data);
        return $result;

    }

}
?>