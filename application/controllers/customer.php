<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('customer_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='Data Customer';
        $data['customer']=$this->customer_model->getAllCustomer();
        if($this->input->post('keyword')){
            $data['customer']=$this->customer_model->cariCustomer();
        }
        $this->load->view('template/header', $data);
        $this->load->view('customer/index');
        $this->load->view('template/footer');
    }

    public function paidCustomer(){
        $data['title']='Data Customer';
        $data['paid_customer'] = $this->customer_model->getPaidCustomer();
        $this->load->view('template/header', $data);
        $this->load->view('customer/paidCustomer');
        $this->load->view('template/footer');
    }

    public function unpaidCustomer(){
        $data['title']='Data Customer';
        $data['unpaid_customer'] = $this->customer_model->getUnpaidCustomer();
        $this->load->view('template/header', $data);
        $this->load->view('customer/unpaidCustomer');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Add Customer';
        $data['customer']=$this->customer_model->getAllCustomer();
        $this->form_validation->set_rules('id_customer', 'ID Customer');
        $this->form_validation->set_rules('nama_customer', 'Nama Customer', 'required');
        $this->form_validation->set_rules('email_customer', 'Email Customer', 'required');
        $this->form_validation->set_rules('telp_customer', 'Telp Customer', 'required');
        $this->form_validation->set_rules('keterangan_order', 'Keterangan Order', 'required');
        $this->form_validation->set_rules('tanggal_bergabung', 'Tanggal Bergabung', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('customer/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->customer_model->addCustomer();
            $this->session->set_flashdata('msg', 'ditambahkan');
            redirect(base_url('customer'),'refresh');
        }
    }

    public function hapus($id_customer){
        $this->customer_model->deleteCustomer($id_customer);
        $this->session->set_flashdata('msg_hapus', 'dihapus');
        redirect(base_url('customer'),'refresh');
    }

    public function edit($id_customer){
        $data['title']='Form Edit Data Customer';
        $data['customer']=$this->customer_model->getCustomerByID($id_customer);
        $this->form_validation->set_rules('nama_customer', 'Nama Customer', 'required');
        $this->form_validation->set_rules('email_customer', 'Email Customer', 'required');
        $this->form_validation->set_rules('telp_customer', 'Telp Customer', 'required');
        $this->form_validation->set_rules('keterangan_order', 'Keterangan Order', 'required');
        $this->form_validation->set_rules('tanggal_bergabung', 'Tanggal Bergabung', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            #code...
            $this->load->view('template/header', $data);
            $this->load->view('customer/edit', $data);
            $this->load->view('template/footer');
        }else{
            #code...
            $this->customer_model->ubahdataCustomer();
            $this->session->set_flashdata('msg', 'diedit');
            redirect(base_url('customer'),'refresh');
        }
    }

    public function histori($id_customer){
        $data['title']='Data Histori Customer';
        $data['customer']=$this->customer_model->getCustomerByID($id_customer);
        $data['histori']=$this->customer_model->getHistoriCustomer($id_customer);
        $this->load->view('template/header', $data);
        $this->load->view('customer/histori');
        $this->load->view('template/footer');
    }
}
?>