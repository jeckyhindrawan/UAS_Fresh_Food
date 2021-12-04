<?php
class m_singup extends CI_Model{
    
    function getUser($where,$table){ 
        return $this->db->get_where($table,$where);
    }


    function inputUser($data, $table){
        $this->db->insert($table, $data);
    }  
}
?>