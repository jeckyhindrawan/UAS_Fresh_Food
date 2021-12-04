<?php
class m_signup extends CI_Model
{

    function getUser($where1, $where2, $table)
    {
        $this->db->like($where1);
        $this->db->or_like($where2);
        return $this->db->get($table);
    }


    function inputUser($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
