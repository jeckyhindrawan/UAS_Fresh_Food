<?php
class m_login extends CI_Model{
    
    function getUser($where,$table){ 
        return $this->db->get_where($table,$where);
    }

}
?>