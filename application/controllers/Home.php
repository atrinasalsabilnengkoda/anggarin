<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('home_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title']='Dashboard';
        $data['jumlah_order'] = $this->home_model->getJumlahOrder();
        $data['jumlah_customer'] = $this->home_model->getJumlahCustomer();
        $data['total_pendapatan'] = $this->home_model->getTotalPendapatan();
        $data['total_pengeluaran'] = $this->home_model->getTotalPengeluaran();
        $data['top_product'] = $this->home_model->getTopProduct();
        $data['income'] = $this->home_model->income();
        $data['outcome'] = $this->home_model->outcome();
        $this->load->view('template/header',$data);
        $this->load->view('home/index',$data);
        $this->load->view('template/footer');
    }

}

?>