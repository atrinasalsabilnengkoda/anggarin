<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('product_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='Data Product';
        $data['status_order']= $this->product_model->get_status();
        $data['produk']=$this->product_model->getAllProduct();
        if($this->input->post('keyword')){
            $data['produk']=$this->product_model->cariProduct();
        }
        $this->load->view('template/header', $data);
        $this->load->view('product/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Add Product';
        $data['supplier']=$this->product_model->getAllSupplier();
        $data['kategori']=$this->product_model->getAllKategori();
        $this->form_validation->set_rules('id_produk', 'ID Produk');
        $this->form_validation->set_rules('supplier', 'Nama Supplier', 'required');
        $this->form_validation->set_rules('kategori', 'Nama Kategori', 'required');
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('harga_beli', 'Harga Beli', 'required');
        $this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required');
        $this->form_validation->set_rules('jumlah_produk', 'Jumlah Produk');
        $this->form_validation->set_rules('deskripsi_produk', 'Deskripsi Produk');
        $this->form_validation->set_rules('gambar_produk', 'Gambar Produk');
       
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('product/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->product_model->addProduct();
            $this->session->set_flashdata('msg', 'ditambahkan');
            redirect(base_url('product'),'refresh');
        }
    }

    public function hapus($id_produk){
        $this->product_model->deleteProduct($id_produk);
        $this->session->set_flashdata('msg_hapus', 'dihapus');
        redirect(base_url('product'),'refresh');
    }

    public function edit($id_produk){
        $data['title']='Add Product';
        $data['produk']=$this->product_model->getProductByID($id_produk);
        $data['supplier']=$this->product_model->getAllSupplier();
        $data['kategori']=$this->product_model->getAllKategori();
        $this->form_validation->set_rules('id_produk', 'ID Produk');
        $this->form_validation->set_rules('supplier', 'Nama Supplier', 'required');
        $this->form_validation->set_rules('kategori', 'Nama Kategori', 'required');
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('harga_beli', 'Harga Beli', 'required');
        $this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required');
        $this->form_validation->set_rules('jumlah_produk', 'Jumlah Produk');
        $this->form_validation->set_rules('deskripsi_produk', 'Deskripsi Produk');
        $this->form_validation->set_rules('gambar_produk', 'Gambar Produk');

        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('product/edit', $data);
            $this->load->view('template/footer');
        } else {

            $this->product_model->ubahdataProduct();
            $this->session->set_flashdata('msg', 'diedit');
            redirect(base_url('product'),'refresh');
        }
    }

    private function uploadImage(){
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['file_name']            = $this->id_produk;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar_produk')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }
}
?>