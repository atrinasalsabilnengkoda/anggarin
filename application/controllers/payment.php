<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class payment extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('payment_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='Data Payment';
        $data['pembayaran']=$this->payment_model->getAllPayment();
        if($this->input->post('keyword')){
            $data['pembayaran']=$this->payment_model->cariPayment();
        }
        $this->load->view('template/header', $data);
        $this->load->view('payment/index');
        $this->load->view('template/footer');
    }

    public function paidPayment(){
        $data['title']='Data Payment';
        $data['paid_pembayaran'] = $this->payment_model->getPaidPayment();
        $this->load->view('template/header', $data);
        $this->load->view('payment/paidPayment');
        $this->load->view('template/footer');
    }

    public function unpaidPayment(){
        $data['title']='Data Payment';
        $data['unpaid_pembayaran'] = $this->payment_model->getUnpaidPayment();
        $this->load->view('template/header', $data);
        $this->load->view('payment/unpaidPayment');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Add Payment';
        $data['pembayaran']=$this->payment_model->getAllPayment();
        $data['kategori']=$this->payment_model->getAllKategori();
        $data['bank']=$this->payment_model->getAllBank();
        $data['supplier_nama']=$this->payment_model->getAllSupplier();
        $data['supplier_email']=$this->payment_model->getAllSupplier();
        $data['supplier_telp']=$this->payment_model->getAllSupplier();
        $this->form_validation->set_rules('id_pembayaran', 'ID Pembayaran');
        $this->form_validation->set_rules('id_supplier', 'ID Supplier', 'required');
        $this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');
        $this->form_validation->set_rules('tanggal_pembayaran', 'Tanggal Pembayaran', 'required');
        $this->form_validation->set_rules('jumlah_pembayaran', 'Jumlah Pembayaran');
        $this->form_validation->set_rules('jenis_pembayaran', 'Jenis Pembayaran');
        $this->form_validation->set_rules('akun', 'Akun');
        $this->form_validation->set_rules('status_pembayaran', 'Status Pembayaran', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('payment/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->payment_model->addPayment();
            $this->session->set_flashdata('msg', 'ditambahkan');
            redirect(base_url('payment'),'refresh');
        }
    }

    public function hapus($id_pembayaran){
        $this->payment_model->deletePayment($id_pembayaran);
        $this->session->set_flashdata('msg_hapus', 'dihapus');
        redirect(base_url('payment'),'refresh');
    }

    public function edit($id_pembayaran)
    {
        $data['title']='Form Edit Data Payment';
        $data['pembayaran']=$this->payment_model->getPaymentByID($id_pembayaran);
        $data['kategori']=$this->payment_model->getAllKategori();
        $data['bank']=$this->payment_model->getAllBank();
        $data['supplier_nama']=$this->payment_model->getAllSupplier();
        $data['supplier_email']=$this->payment_model->getAllSupplier();
        $data['supplier_telp']=$this->payment_model->getAllSupplier();
        $this->form_validation->set_rules('id_supplier', 'ID Supplier', 'required');
        $this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');
        $this->form_validation->set_rules('tanggal_pembayaran', 'Tanggal Pembayaran', 'required');
        $this->form_validation->set_rules('jumlah_pembayaran', 'Jumlah Pembayaran', 'required');
        $this->form_validation->set_rules('jenis_pembayaran', 'Jenis Pembayaran');
        $this->form_validation->set_rules('akun', 'Akun');
        $this->form_validation->set_rules('status_pembayaran', 'Status Pembayaran', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            #code...
            $this->load->view('template/header', $data);
            $this->load->view('payment/edit', $data);
            $this->load->view('template/footer');
        }else{
            #code...
            $this->payment_model->ubahdataPayment();
            $this->session->set_flashdata('msg', 'diedit');
            redirect(base_url('payment'),'refresh');
        }
    }
}
?>