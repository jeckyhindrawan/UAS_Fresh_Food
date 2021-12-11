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
            $this->session->set_flashdata('message', 'Password and confirmation password not match');
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
            if ($user['username'] == $username) {
                $this->session->set_flashdata('message', 'Username has been taken');
            } else {
                $this->session->set_flashdata('message', 'Email has been taken');
            }
            redirect('signup');
        } else {
            $this->session->set_flashdata('message', 'Account has been created');
            $this->m_data->inputData($data, 'tbl_user');
            redirect('login');
        };
    }
}