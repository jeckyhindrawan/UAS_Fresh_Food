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
        $userId = $this->session->userdata('id');

        $whereHistory = array("user_id" => $userId);
        $queryCart = "SELECT tfd.*, tc.qty, tc.id as 'cartID'  FROM tbl_cart tc LEFT JOIN tbl_food_details tfd ON tc.food_id = tfd.id where user_id = $userId";

        $data['cart'] = $this->m_data->runQuery($queryCart)->result();
        $data['categories'] = $this->m_data->getDistinct('tbl_categories')->result();
        $data['history'] = $this->m_data->getWhere($whereHistory, 'tbl_history')->result();

        if (isset($id)) {
            $queryFoodDetails = "SELECT tfd.* FROM tbl_food_categories tfc LEFT JOIN tbl_food_details tfd ON tfc.food_id = tfd.id WHERE category_id = $id";
            $data['food_details'] = $this->m_data->runQuery($queryFoodDetails)->result();
        } else {
            $data['food_details'] = $this->m_data->getTableData('tbl_food_details')->result();
        }
        $this->load->view('home', $data);
    }

    public function food_details($id)
    {
        $userId = $this->session->userdata('id');

        $whereHistory = array("user_id" => $userId);
        $whereFoodDetails = array('id' => $id);
        $queryFoodCategories = "SELECT * FROM tbl_food_categories tfc LEFT JOIN tbl_categories tc ON tfc.category_id = tc.id WHERE food_id = $id";
        $queryCart = "SELECT tfd.*, tc.qty, tc.id as 'cartID' FROM tbl_cart tc LEFT JOIN tbl_food_details tfd ON tc.food_id = tfd.id where user_id = $userId";

        $data['all_food_details'] = $this->m_data->getTableData('tbl_food_details')->result();
        $data['categories'] = $this->m_data->getDistinct('tbl_categories')->result();
        $data['cart'] = $this->m_data->runQuery($queryCart)->result();
        $data['history'] = $this->m_data->getWhere($whereHistory, 'tbl_history')->result();
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

    public function removeCart($id = "")
    {
        if ($id == "") {
            $where  = array("user_id" => $this->session->userdata('id'));
        } else {
            $where  = array("id" => $id);
        }

        $this->m_data->deleteData($where, "tbl_cart");

        redirect('home');
    }

    public function checkout()
    {
        $userId = $this->session->userdata['id'];

        $query = "INSERT INTO `tbl_history`(`user_id`, `item_count`) SELECT $userId, SUM(`qty`) FROM tbl_cart WHERE user_id = $userId;";
        $this->m_data->runQuery($query);

        $where = array('user_id' => $userId);
        $this->m_data->deleteData($where, 'tbl_cart');

        redirect('Home');
    }
}