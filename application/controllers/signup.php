<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');  
    }

    public function index()
    {
        $this->load->view('signup'); 
    }

    public function signupAction(){ 

        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password2 = $this->input->post('password2');

        if ($password !== $password2){
            redirect('signup');
        }

        $where  = array('username'=> $username);
        $user = $this->m_login->getUser($where,'tbl_user')->row_array();
        
        $data = array(
            'username' => $username,
            'password' => MD5($password),
            'email' => $email,
        );

        if ($user) {
            redirect('signup');
        }else{
            $this->m_signup->signupAction($data,'tbl_user');
            redirect('login');
        }
    }

}