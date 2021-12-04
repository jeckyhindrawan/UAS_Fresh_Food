<?php
class Categories extends CI_Model
{
    function tampil_data()
    {
        $query = "SELECT tc.name FROM tbl_food_details as tfd JOIN tbl_categories as tc on tfd.id = tc.id_food;";
        return  $this->db->query($query);
    } 
    
    function getData($id)
    {
        $query = "SELECT tc.name FROM tbl_food_details as tfd JOIN tbl_categories as tc on tfd.id = tc.id_food WHERE tfd.id = $id;";
        return  $this->db->query($query);
    }
}