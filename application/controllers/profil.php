<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profil extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    function __construct()
    {
        parent::__construct(); 
        $this->load->model('m_profil');
        isLoggedIn();
    }

    public function index()
    { 
        $where = array('id' => $this->session->userdata['id']);
        $data['user'] = $this->m_profil->getUser($where,'tbl_user')->result();
        $this->load->view('profil',$data);
    }
}
