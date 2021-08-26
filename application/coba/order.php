<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('order_model');
        $this->load->library('form_validation');

    }
    
    public function index(){
        $data['title']='Data Order';
        $data['order']=$this->order_model->getAllOrder();
        if($this->input->post('keyword')){
            $data['order']=$this->order_model->cariOrder();
        }
        $this->load->view('template/header', $data);
        $this->load->view('order/index');
        $this->load->view('template/footer');
    }

    public function paidOrder(){
        $data['title']='Data Order';
        $data['paid_order'] = $this->order_model->getPaidOrder();
        $this->load->view('template/header', $data);
        $this->load->view('order/paidOrder');
        $this->load->view('template/footer');
    }

    public function unpaidOrder(){
        $data['title']='Data Order';
        $data['unpaid_order'] = $this->order_model->getUnpaidOrder();
        $this->load->view('template/header', $data);
        $this->load->view('order/unpaidOrder');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Add Order';
        $data['customer']=$this->order_model->getAllCustomer();
        $data['product']=$this->order_model->getAllProduct();
        $this->form_validation->set_rules('id_order', 'ID Order');
        $this->form_validation->set_rules('id_produk', 'ID Produk', 'required');
        $this->form_validation->set_rules('id_customer', 'ID Customer', 'required');
        $this->form_validation->set_rules('tanggal_order', 'Tanggal Order', 'required');
        $this->form_validation->set_rules('jumlah_order', 'Jumlah Order', 'required');
        $this->form_validation->set_rules('status_order', 'Status Order', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('order/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->order_model->addOrder();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect(base_url('order'),'refresh');
        }
    }

    public function hapus($id_order){
        $this->order_model->deleteOrder($id_order);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect(base_url('order'),'refresh');
    }

    public function edit($id_order){
        $data['title']='Edit Order';
        $data['order']=$this->order_model->getOrderByID($id_order);
        $data['customer']=$this->order_model->getAllCustomer();
        $data['email']=$this->order_model->getAllCustomer();
        $data['product']=$this->order_model->getAllProduct();
        $this->form_validation->set_rules('id_order', 'ID Order');
        $this->form_validation->set_rules('id_produk', 'ID Produk', 'required');
        $this->form_validation->set_rules('id_customer', 'ID Customer', 'required');
        $this->form_validation->set_rules('tanggal_order', 'Tanggal Order', 'required');
        $this->form_validation->set_rules('jumlah_order', 'Jumlah Order', 'required');
        $this->form_validation->set_rules('status_order', 'Status Order', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('order/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->order_model->ubahdataOrder();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect(base_url('order'),'refresh');
        }
    }
}
?>