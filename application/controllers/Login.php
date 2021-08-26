<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
        //$this->load->library('session');
    }
    
    public function index()
    {
        $data['title']='Login';
        $this->load->view('login/index');
        
    }

    public function proses_login(){
        $username=htmlspecialchars($this->input->post('username'));
        $password=htmlspecialchars($this->input->post('password'));
        $this->load->model('login_model');
        $this->login_model->login($username, $password);

       
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url(''),'refresh');
        
    }
}

/* End of file login.php */
