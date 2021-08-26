<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class income extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('income_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['title']='Report Income All Years';
        $data['jumlah_orderAllYears'] = $this->income_model->getJumlahOrderAllYears();
        $data['jumlah_customerAllYears'] = $this->income_model->getJumlahCustomerAllYears();
        $data['pendapatan_janAllYears'] = $this->income_model->getPendapatanJanAllYears();
        $data['pendapatan_febAllYears'] = $this->income_model->getPendapatanFebAllYears();
        $data['pendapatan_marAllYears'] = $this->income_model->getPendapatanMarAllYears();
        $data['pendapatan_aprAllYears'] = $this->income_model->getPendapatanAprAllYears();
        $data['pendapatan_meiAllYears'] = $this->income_model->getPendapatanMeiAllYears();
        $data['pendapatan_junAllYears'] = $this->income_model->getPendapatanJunAllYears();
        $data['pendapatan_julAllYears'] = $this->income_model->getPendapatanJulAllYears();
        $data['pendapatan_aguAllYears'] = $this->income_model->getPendapatanAguAllYears();
        $data['pendapatan_sepAllYears'] = $this->income_model->getPendapatanSepAllYears();
        $data['pendapatan_oktAllYears'] = $this->income_model->getPendapatanOktAllYears();
        $data['pendapatan_novAllYears'] = $this->income_model->getPendapatanNovAllYears();
        $data['pendapatan_desAllYears'] = $this->income_model->getPendapatanDesAllYears();
        $data['graphAllYears'] = $this->income_model->graphAllYears();
        $this->load->view('template/header',$data);
        $this->load->view('income/index',$data);
        $this->load->view('template/footer');
    }

    public function income2020(){
        $data['title']='Report Income 2020';
        $data['jumlah_order2020'] = $this->income_model->getJumlahOrder2020();
        $data['jumlah_customer2020'] = $this->income_model->getJumlahCustomer2020();
        $data['pendapatan_jan2020'] = $this->income_model->getPendapatanJan2020();
        $data['pendapatan_feb2020'] = $this->income_model->getPendapatanFeb2020();
        $data['pendapatan_mar2020'] = $this->income_model->getPendapatanMar2020();
        $data['pendapatan_apr2020'] = $this->income_model->getPendapatanApr2020();
        $data['pendapatan_mei2020'] = $this->income_model->getPendapatanMei2020();
        $data['pendapatan_jun2020'] = $this->income_model->getPendapatanJun2020();
        $data['pendapatan_jul2020'] = $this->income_model->getPendapatanJul2020();
        $data['pendapatan_agu2020'] = $this->income_model->getPendapatanAgu2020();
        $data['pendapatan_sep2020'] = $this->income_model->getPendapatanSep2020();
        $data['pendapatan_okt2020'] = $this->income_model->getPendapatanOkt2020();
        $data['pendapatan_nov2020'] = $this->income_model->getPendapatanNov2020();
        $data['pendapatan_des2020'] = $this->income_model->getPendapatanDes2020();
        $data['graph2020'] = $this->income_model->graph2020();
        $this->load->view('template/header',$data);
        $this->load->view('income/income2020',$data);
        $this->load->view('template/footer');
    }

    public function income2021(){
        $data['title']='Report Income 2021';
        $data['jumlah_order2021'] = $this->income_model->getJumlahOrder2021();
        $data['jumlah_customer2021'] = $this->income_model->getJumlahCustomer2021();
        $data['pendapatan_jan2021'] = $this->income_model->getPendapatanJan2021();
        $data['pendapatan_feb2021'] = $this->income_model->getPendapatanFeb2021();
        $data['pendapatan_mar2021'] = $this->income_model->getPendapatanMar2021();
        $data['pendapatan_apr2021'] = $this->income_model->getPendapatanApr2021();
        $data['pendapatan_mei2021'] = $this->income_model->getPendapatanMei2021();
        $data['pendapatan_jun2021'] = $this->income_model->getPendapatanJun2021();
        $data['pendapatan_jul2021'] = $this->income_model->getPendapatanJul2021();
        $data['pendapatan_agu2021'] = $this->income_model->getPendapatanAgu2021();
        $data['pendapatan_sep2021'] = $this->income_model->getPendapatanSep2021();
        $data['pendapatan_okt2021'] = $this->income_model->getPendapatanOkt2021();
        $data['pendapatan_nov2021'] = $this->income_model->getPendapatanNov2021();
        $data['pendapatan_des2021'] = $this->income_model->getPendapatanDes2021();
        $data['graph2021'] = $this->income_model->graph2021();
        $this->load->view('template/header',$data);
        $this->load->view('income/income2021',$data);
        $this->load->view('template/footer');
    }

    public function income2022(){
        $data['title']='Report Income 2022';
        $data['jumlah_order2022'] = $this->income_model->getJumlahOrder2022();
        $data['jumlah_customer2022'] = $this->income_model->getJumlahCustomer2022();
        $data['pendapatan_jan2022'] = $this->income_model->getPendapatanJan2022();
        $data['pendapatan_feb2022'] = $this->income_model->getPendapatanFeb2022();
        $data['pendapatan_mar2022'] = $this->income_model->getPendapatanMar2022();
        $data['pendapatan_apr2022'] = $this->income_model->getPendapatanApr2022();
        $data['pendapatan_mei2022'] = $this->income_model->getPendapatanMei2022();
        $data['pendapatan_jun2022'] = $this->income_model->getPendapatanJun2022();
        $data['pendapatan_jul2022'] = $this->income_model->getPendapatanJul2022();
        $data['pendapatan_agu2022'] = $this->income_model->getPendapatanAgu2022();
        $data['pendapatan_sep2022'] = $this->income_model->getPendapatanSep2022();
        $data['pendapatan_okt2022'] = $this->income_model->getPendapatanOkt2022();
        $data['pendapatan_nov2022'] = $this->income_model->getPendapatanNov2022();
        $data['pendapatan_des2022'] = $this->income_model->getPendapatanDes2022();
        $data['graph2022'] = $this->income_model->graph2022();
        $this->load->view('template/header',$data);
        $this->load->view('income/income2022',$data);
        $this->load->view('template/footer');
    }


}

/* End of file Controllername.php */

?>