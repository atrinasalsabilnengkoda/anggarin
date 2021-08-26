<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class supplier extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('supplier_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='Data Supplier';
        $data['supplier']=$this->supplier_model->getAllSupplier();
        if($this->input->post('keyword')){
            $data['supplier']=$this->supplier_model->cariSupplier();
        }
        $this->load->view('template/header', $data);
        $this->load->view('supplier/index');
        $this->load->view('template/footer');
    }

    public function paidSupplier(){
        $data['title']='Data Supplier';
        $data['paid_supplier'] = $this->supplier_model->getPaidSupplier();
        $this->load->view('template/header', $data);
        $this->load->view('supplier/paidSupplier');
        $this->load->view('template/footer');
    }

    public function unpaidSupplier(){
        $data['title']='Data Supplier';
        $data['unpaid_supplier'] = $this->supplier_model->getUnpaidSupplier();
        $this->load->view('template/header', $data);
        $this->load->view('supplier/unpaidSupplier');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Add Supplier';
        $data['supplier']=$this->supplier_model->getAllSupplier();
        $data['kategori']=$this->supplier_model->getAllKategori();
        $this->form_validation->set_rules('id_supplier', 'ID Supplier');
        $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
        $this->form_validation->set_rules('telp_supplier', 'Telp Supplier', 'required');
        $this->form_validation->set_rules('email_supplier', 'Email Supplier', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('keterangan_supplier', 'Keterangan Supplier', 'required');
        $this->form_validation->set_rules('gambar_supplier', 'Gambar Supplier');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('supplier/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->supplier_model->addSupplier();
            $this->session->set_flashdata('msg', 'ditambahkan');
            redirect('supplier');
        }
    }

    public function hapus($id_supplier){
        $this->supplier_model->deleteSupplier($id_supplier);
        $this->session->set_flashdata('msg_hapus', 'dihapus');
        redirect('supplier');
    }

    public function edit($id_supplier)
    {
        $data['title']='Form Edit Data Supplier';
        $data['supplier']=$this->supplier_model->getSupplierByID($id_supplier);
        $data['kategori']=$this->supplier_model->getAllKategori();
        $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
        $this->form_validation->set_rules('telp_supplier', 'Telp Supplier', 'required');
        $this->form_validation->set_rules('email_supplier', 'Email Supplier', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('keterangan_supplier', 'Keterangan Supplier', 'required');
        $this->form_validation->set_rules('gambar_supplier', 'Gambar Supplier');
        
        if($this->form_validation->run() == FALSE)
        {
            #code...
            $this->load->view('template/header', $data);
            $this->load->view('supplier/edit', $data);
            $this->load->view('template/footer');
        }else{
            #code...
            $this->supplier_model->ubahdataSupplier();
            $this->session->set_flashdata('msg', 'diedit');
            redirect('supplier');
        }
    }

    public function histori($id_supplier){
        $data['title']='Data Histori Supplier';
        $data['supplier']=$this->supplier_model->getSupplierByID($id_supplier);
        $data['histori']=$this->supplier_model->getHistoriSupplier($id_supplier);
        $this->load->view('template/header', $data);
        $this->load->view('supplier/histori');
        $this->load->view('template/footer');
    }
}
?>