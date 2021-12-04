<?php
class m_profil extends CI_Model
{ 
    function getUser($where, $table)
    {
        return $this->db->get_where($table, $where);
    } 
}
