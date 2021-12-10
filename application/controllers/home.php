<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');

        isLoggedIn();
    }

    public function index()
    {
        $data['categories'] = $this->m_data->getDistinct('tbl_categories')->result();
        $data['food_details'] = $this->m_data->getTableData('tbl_food_details')->result();
        $this->load->view('home', $data);
    }

    public function food_details($id)
    {
        $whereFoodDetails = array('id' => $id);
        $whereCategories = array('id_food' => $id);

        $data['all_food_details'] = $this->m_data->getTableData('tbl_food_details')->result();
        $data['all_categories'] = $this->m_data->getDistinct('tbl_categories')->result();

        $data['food_details'] = $this->m_data->getWhere($whereFoodDetails, 'tbl_food_details')->result();
        $data['categories'] = $this->m_data->getWhere($whereCategories, 'tbl_categories')->result();
        $this->load->view('food_details', $data);
    }
}