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
        $this->load->model('food_details_model');
        $this->load->model('categories');
        isLoggedIn();
    }

    public function index()
    {
        $data['food_details'] = $this->food_details_model->tampil_data()->result();
        $data['categories'] = $this->categories->tampil_data()->result();
        $this->load->view('home', $data);
    }

    public function food_details($id)
    { 
        $where = array('id' => $id);
        $data['All_food_details'] = $this->food_details_model->tampil_data()->result();
        $data['food_details'] = $this->food_details_model->getWhere($where, 'tbl_food_details')->result();
        $data['categories'] = $this->categories->tampil_data()->result(); 
        $this->load->view('food_details', $data);
    }

}
