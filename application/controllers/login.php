<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function actionLogin()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where  = array('username' => $username);
        $user = $this->m_data->getWhere($where, 'tbl_user')->row_array();

        if ($user) {
            if ($user['password'] === md5($password)) {
                $data = ['id' => $user['id'], 'username' => $user['username']];
                $this->session->set_userdata($data);
                redirect('home');
            } else {
                redirect('login');
            }
        } else {
            redirect('login');
        }
    }
}
