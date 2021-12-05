<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profil extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        isLoggedIn();
    }

    public function index()
    {
        $where = array('id' => $this->session->userdata['id']);
        $data['user'] = $this->m_data->getWhere($where, 'tbl_user')->result();
        $this->load->view('profil', $data);
    }
}
