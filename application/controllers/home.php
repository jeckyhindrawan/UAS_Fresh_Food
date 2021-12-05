<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');

        isLoggedIn();
    }

    public function index()
    {
        $data['Categories'] = $this->m_data->getDistinct('tbl_categories')->result();
        $data['food_details'] = $this->m_data->getTableData('tbl_food_details')->result();
        $this->load->view('home', $data);
    }

    public function food_details($id)
    {
        $whereFoodDetails = array('id' => $id);
        $whereCategories = array('id_food' => $id);
        $data['All_food_details'] = $this->m_data->getTableData('tbl_food_details')->result();
        $data['All_Categories'] = $this->m_data->getDistinct('tbl_categories')->result();
        $data['food_details'] = $this->m_data->getWhere($whereFoodDetails, 'tbl_food_details')->result();
        $data['categories'] = $this->m_data->getWhere($whereCategories, 'tbl_categories')->result();
        $this->load->view('food_details', $data);
    }
}