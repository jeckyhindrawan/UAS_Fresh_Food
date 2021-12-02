<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('login'); 
    }

    public function actionLogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array('username'=> $username);
        
        $userData = $this->m_login->getUser($where,'tbl_user')->row();
        
        if (isset($userData)){
            if ($userData -> password === md5($password)){
                redirect(base_url()."home");
            } else {
                $this->load->view('login'); 
            }
        } else {
            $this->load->view('login'); 
        };

    }

}