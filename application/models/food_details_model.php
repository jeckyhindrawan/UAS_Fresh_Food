<?php
class Food_Details_Model extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('tbl_food_details');
    }

    function getWhere($where, $table)
    {
        return $this->db->get_where($table, $where);
    } 
}