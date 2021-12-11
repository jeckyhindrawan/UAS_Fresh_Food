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
        $id = $this->input->get('category');
        $data['categories'] = $this->m_data->getDistinct('tbl_categories')->result();
        if (isset($id)) {
            $query = "SELECT tfd.* FROM tbl_food_categories tfc LEFT JOIN tbl_food_details tfd ON tfc.food_id = tfd.id WHERE category_id = $id";
            $data['food_details'] = $this->m_data->runQuery($query)->result();
        } else {
            $data['food_details'] = $this->m_data->getTableData('tbl_food_details')->result();
        }
        $this->load->view('home', $data);
    }

    public function food_details($id)
    {
        $whereFoodDetails = array('id' => $id);
        $queryFoodCategories = "SELECT * FROM tbl_food_categories tfc LEFT JOIN tbl_categories tc ON tfc.category_id = tc.id WHERE food_id = $id";

        $data['all_food_details'] = $this->m_data->getTableData('tbl_food_details')->result();
        $data['categories'] = $this->m_data->getDistinct('tbl_categories')->result();

        $data['food_details'] = $this->m_data->getWhere($whereFoodDetails, 'tbl_food_details')->result();
        $data['food_categories'] = $this->m_data->runQuery($queryFoodCategories)->result();
        $this->load->view('food_details', $data);
    }

    public function addCart($id)
    {
        $userId = $this->session->userdata('id');
        $foodId = $id;
        $where = $arrayName = array(
            'user_id' => $userId,
            'food_id' => $foodId
        );
        $cartData = $this->m_data->getWhere($where, 'tbl_cart')->result();

        if (sizeof($cartData) == 0) {
            $data = array(
                'user_id' => $userId,
                'food_id' => $foodId,
                'qty' => 1
            );
            $this->m_data->inputData($data, 'tbl_cart');
        } else {
            $whereData = array('id' => $cartData[0]->id);
            $data =  array('qty' => $cartData[0]->qty + 1);
            $this->m_data->updateData($whereData, $data, 'tbl_cart');
        };
        redirect('Home');
    }

    public function checkout()
    {
        $userId = $this->session->userdata['id'];

        $query = "INSERT INTO `tbl_history`(`user_id`, `item_count`) SELECT $userId, COUNT(*) FROM tbl_cart WHERE user_id = $userId;";
        $this->m_data->runQuery($query);

        $where = array('user_id' => $userId);
        $this->m_data->deleteData($where, 'tbl_cart');

        redirect('Home');
    }
}