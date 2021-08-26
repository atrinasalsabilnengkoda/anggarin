<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class bank extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('bank_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='Data Bank';
        $data['bank']=$this->bank_model->getAllBank();
        if($this->input->post('keyword')){
            $data['bank']=$this->bank_model->cariBank();
        }
        $this->load->view('template/header', $data);
        $this->load->view('bank/index');
        $this->load->view('template/footer');
    }

    public function bankActive(){
        $data['title']='Data Bank';
        $data['bank_active'] = $this->bank_model->getActiveBank();
        $this->load->view('template/header', $data);
        $this->load->view('bank/bankActive');
        $this->load->view('template/footer');
    }

    public function bankUnactive(){
        $data['title']='Data Bank';
        $data['bank_unactive'] = $this->bank_model->getUnactiveBank();
        $this->load->view('template/header', $data);
        $this->load->view('bank/bankUnactive');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Add Bank';
        $data['bank']=$this->bank_model->getAllBank();
        $this->form_validation->set_rules('id_bank', 'ID Bank');
        $this->form_validation->set_rules('nama_akun', 'Nama Akun', 'required');
        $this->form_validation->set_rules('no_rek', 'No Rekening', 'required');
        $this->form_validation->set_rules('nama_bank', 'No Bank', 'required');
        $this->form_validation->set_rules('alamat_bank', 'Alamat Bank', 'required');
        $this->form_validation->set_rules('telp_bank', 'Telp Bank', 'required');
        $this->form_validation->set_rules('saldo_awal', 'Saldo Awal', 'required');
        $this->form_validation->set_rules('status_akun', 'Status Akun');
        $this->form_validation->set_rules('akun_utama', 'Akun Utama');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('bank/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->bank_model->addBank();
            $this->session->set_flashdata('msg', 'ditambahkan');
            redirect(base_url('bank'),'refresh');
        }
    }

    public function hapus($id_bank){
        $this->bank_model->deleteBank($id_bank);
        $this->session->set_flashdata('msg_hapus', 'dihapus');
        redirect(base_url('bank'),'refresh');
    }

    public function edit($id_bank)
    {
        $data['title']='Form Edit Data Bank';
        $data['bank']=$this->bank_model->getBankByID($id_bank);
        $this->form_validation->set_rules('nama_akun', 'Nama Akun', 'required');
        $this->form_validation->set_rules('no_rek', 'No Rekening', 'required');
        $this->form_validation->set_rules('nama_bank', 'No Bank', 'required');
        $this->form_validation->set_rules('alamat_bank', 'Alamat Bank', 'required');
        $this->form_validation->set_rules('telp_bank', 'Telp Bank', 'required');
        $this->form_validation->set_rules('saldo_awal', 'Saldo Awal', 'required');
        $this->form_validation->set_rules('status_akun', 'Status Akun');
        $this->form_validation->set_rules('akun_utama', 'Akun Utama');
        
        if($this->form_validation->run() == FALSE)
        {
            #code...
            $this->load->view('template/header', $data);
            $this->load->view('bank/edit', $data);
            $this->load->view('template/footer');
        }else{
            #code...
            $this->bank_model->ubahdataBank();
            $this->session->set_flashdata('msg', 'diedit');
            redirect(base_url('bank'),'refresh');
        }
    }
}
?>