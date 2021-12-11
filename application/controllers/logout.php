<?php
defined('BASEPATH') or exit('No direct script access allowed');

class logout extends CI_Controller
{
    public function index()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', 'Logout Successful');
        redirect('login');
    }
}