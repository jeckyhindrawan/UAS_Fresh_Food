<?php
defined('BASEPATH') or exit('No direct script access allowed');

class contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');

        isLoggedIn();
    }

    public function index()
    {
        $this->load->view('contact');
    }

    function sendAction()
    {
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $data = array(
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        );

        $this->m_data->inputData($data, 'tbl_feedback');

        redirect('Home');
    }
}