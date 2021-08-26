<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class profitloss extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('profitloss_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title']='Report Profit Loss All Years';
        $data['jumlah_orderAllYears'] = $this->profitloss_model->getJumlahOrderAllYears();
        $data['jumlah_customerAllYears'] = $this->profitloss_model->getJumlahCustomerAllYears();
        $data['pendapatan_janaprAllYears'] = $this->profitloss_model->getPendapatanJanAprAllYears();
        $data['pendapatan_meiaugAllYears'] = $this->profitloss_model->getPendapatanMeiAugAllYears();
        $data['pendapatan_sepdesAllYears'] = $this->profitloss_model->getPendapatanSepDesAllYears();
        $data['pengeluaran_janaprAllYears'] = $this->profitloss_model->getPengeluaranJanAprAllYears();
        $data['pengeluaran_meiaugAllYears'] = $this->profitloss_model->getPengeluaranMeiAugAllYears();
        $data['pengeluaran_sepdesAllYears'] = $this->profitloss_model->getPengeluaranSepDesAllYears();
        $this->load->view('template/header',$data);
        $this->load->view('profitloss/index',$data);
        $this->load->view('template/footer');
    }

    public function profitloss2020()
    {
        $data['title']='Report Profit Loss Tahun 2020';
        $data['jumlah_order2020'] = $this->profitloss_model->getJumlahOrder2020();
        $data['jumlah_customer2020'] = $this->profitloss_model->getJumlahCustomer2020();
        $data['pendapatan_janapr2020'] = $this->profitloss_model->getPendapatanJanApr2020();
        $data['pendapatan_meiaug2020'] = $this->profitloss_model->getPendapatanMeiAug2020();
        $data['pendapatan_sepdes2020'] = $this->profitloss_model->getPendapatanSepDes2020();
        $data['pengeluaran_janapr2020'] = $this->profitloss_model->getPengeluaranJanApr2020();
        $data['pengeluaran_meiaug2020'] = $this->profitloss_model->getPengeluaranMeiAug2020();
        $data['pengeluaran_sepdes2020'] = $this->profitloss_model->getPengeluaranSepDes2020();
        $this->load->view('template/header',$data);
        $this->load->view('profitloss/profitloss2020',$data);
        $this->load->view('template/footer');
    }

    public function profitloss2021()
    {
        $data['title']='Report Profit Loss Tahun 2021';
        $data['jumlah_order2021'] = $this->profitloss_model->getJumlahOrder2021();
        $data['jumlah_customer2021'] = $this->profitloss_model->getJumlahCustomer2021();
        $data['pendapatan_janapr2021'] = $this->profitloss_model->getPendapatanJanApr2021();
        $data['pendapatan_meiaug2021'] = $this->profitloss_model->getPendapatanMeiAug2021();
        $data['pendapatan_sepdes2021'] = $this->profitloss_model->getPendapatanSepDes2021();
        $data['pengeluaran_janapr2021'] = $this->profitloss_model->getPengeluaranJanApr2021();
        $data['pengeluaran_meiaug2021'] = $this->profitloss_model->getPengeluaranMeiAug2021();
        $data['pengeluaran_sepdes2021'] = $this->profitloss_model->getPengeluaranSepDes2021();
        $this->load->view('template/header',$data);
        $this->load->view('profitloss/profitloss2021',$data);
        $this->load->view('template/footer');
    }

    public function profitloss2022()
    {
        $data['title']='Report Profit Loss Tahun 2022';
        $data['jumlah_order2022'] = $this->profitloss_model->getJumlahOrder2022();
        $data['jumlah_customer2022'] = $this->profitloss_model->getJumlahCustomer2022();
        $data['pendapatan_janapr2022'] = $this->profitloss_model->getPendapatanJanApr2022();
        $data['pendapatan_meiaug2022'] = $this->profitloss_model->getPendapatanMeiAug2022();
        $data['pendapatan_sepdes2022'] = $this->profitloss_model->getPendapatanSepDes2022();
        $data['pengeluaran_janapr2022'] = $this->profitloss_model->getPengeluaranJanApr2022();
        $data['pengeluaran_meiaug2022'] = $this->profitloss_model->getPengeluaranMeiAug2022();
        $data['pengeluaran_sepdes2022'] = $this->profitloss_model->getPengeluaranSepDes2022();
        $this->load->view('template/header',$data);
        $this->load->view('profitloss/profitloss2022',$data);
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */

?>