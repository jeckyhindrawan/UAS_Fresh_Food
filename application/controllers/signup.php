<?php
defined('BASEPATH') or exit('No direct script access allowed');

class signup extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

    public function index()
    {
        $this->load->view('signup');
    }

    function actionSignup()
    {

        $username = htmlspecialchars($this->input->post('username'));
        $email = htmlspecialchars($this->input->post('email'));
        $password = $this->input->post('password');
        $password2 = $this->input->post('password2');

        if ($password !== $password2) {
            redirect('signup');
        }

        $where1 = array(
            'username' => $username
        );

        $where2 = array(
            'email' =>  $email
        );

        $data = array(
            'username' => $username,
            'password' => MD5($password),
            'email' => $email,
        );

        $user = $this->m_data->getOrLike($where1, $where2, 'tbl_user')->row_array();

        if ($user) {
            redirect('signup');
        } else {
            $this->m_data->inputUser($data, 'tbl_user');
            redirect('login');
        };
    }
}