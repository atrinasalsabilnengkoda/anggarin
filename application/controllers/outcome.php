<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class outcome extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('outcome_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['title']='Report Profit Loss All Years';
        $data['jumlah_orderAllYears'] = $this->outcome_model->getJumlahOrderAllYears();
        $data['jumlah_customerAllYears'] = $this->outcome_model->getJumlahCustomerAllYears();
        $data['pengeluaran_janAllYears'] = $this->outcome_model->getPengeluaranJanAllYears();
        $data['pengeluaran_febAllYears'] = $this->outcome_model->getPengeluaranFebAllYears();
        $data['pengeluaran_marAllYears'] = $this->outcome_model->getPengeluaranMarAllYears();
        $data['pengeluaran_aprAllYears'] = $this->outcome_model->getPengeluaranAprAllYears();
        $data['pengeluaran_meiAllYears'] = $this->outcome_model->getPengeluaranMeiAllYears();
        $data['pengeluaran_junAllYears'] = $this->outcome_model->getPengeluaranJunAllYears();
        $data['pengeluaran_julAllYears'] = $this->outcome_model->getPengeluaranJulAllYears();
        $data['pengeluaran_aguAllYears'] = $this->outcome_model->getPengeluaranAguAllYears();
        $data['pengeluaran_sepAllYears'] = $this->outcome_model->getPengeluaranSepAllYears();
        $data['pengeluaran_oktAllYears'] = $this->outcome_model->getPengeluaranOktAllYears();
        $data['pengeluaran_novAllYears'] = $this->outcome_model->getPengeluaranNovAllYears();
        $data['pengeluaran_desAllYears'] = $this->outcome_model->getPengeluaranDesAllYears();
        $data['graphAllYears'] = $this->outcome_model->graphAllYears();
        $this->load->view('template/header',$data);
        $this->load->view('outcome/index',$data);
        $this->load->view('template/footer');
    }

    public function outcome2020(){
        $data['title']='Report Profit Loss 2020';
        $data['jumlah_order2020'] = $this->outcome_model->getJumlahOrder2020();
        $data['jumlah_customer2020'] = $this->outcome_model->getJumlahCustomer2020();
        $data['pengeluaran_jan2020'] = $this->outcome_model->getPengeluaranJan2020();
        $data['pengeluaran_feb2020'] = $this->outcome_model->getPengeluaranFeb2020();
        $data['pengeluaran_mar2020'] = $this->outcome_model->getPengeluaranMar2020();
        $data['pengeluaran_apr2020'] = $this->outcome_model->getPengeluaranApr2020();
        $data['pengeluaran_mei2020'] = $this->outcome_model->getPengeluaranMei2020();
        $data['pengeluaran_jun2020'] = $this->outcome_model->getPengeluaranJun2020();
        $data['pengeluaran_jul2020'] = $this->outcome_model->getPengeluaranJul2020();
        $data['pengeluaran_agu2020'] = $this->outcome_model->getPengeluaranAgu2020();
        $data['pengeluaran_sep2020'] = $this->outcome_model->getPengeluaranSep2020();
        $data['pengeluaran_okt2020'] = $this->outcome_model->getPengeluaranOkt2020();
        $data['pengeluaran_nov2020'] = $this->outcome_model->getPengeluaranNov2020();
        $data['pengeluaran_des2020'] = $this->outcome_model->getPengeluaranDes2020();
        $data['graph2020'] = $this->outcome_model->graph2020();
        $this->load->view('template/header',$data);
        $this->load->view('outcome/outcome2020',$data);
        $this->load->view('template/footer');
    }

    public function outcome2021(){
        $data['title']='Report Profit Loss 2021';
        $data['jumlah_order2021'] = $this->outcome_model->getJumlahOrder2021();
        $data['jumlah_customer2021'] = $this->outcome_model->getJumlahCustomer2021();
        $data['pengeluaran_jan2021'] = $this->outcome_model->getPengeluaranJan2021();
        $data['pengeluaran_feb2021'] = $this->outcome_model->getPengeluaranFeb2021();
        $data['pengeluaran_mar2021'] = $this->outcome_model->getPengeluaranMar2021();
        $data['pengeluaran_apr2021'] = $this->outcome_model->getPengeluaranApr2021();
        $data['pengeluaran_mei2021'] = $this->outcome_model->getPengeluaranMei2021();
        $data['pengeluaran_jun2021'] = $this->outcome_model->getPengeluaranJun2021();
        $data['pengeluaran_jul2021'] = $this->outcome_model->getPengeluaranJul2021();
        $data['pengeluaran_agu2021'] = $this->outcome_model->getPengeluaranAgu2021();
        $data['pengeluaran_sep2021'] = $this->outcome_model->getPengeluaranSep2021();
        $data['pengeluaran_okt2021'] = $this->outcome_model->getPengeluaranOkt2021();
        $data['pengeluaran_nov2021'] = $this->outcome_model->getPengeluaranNov2021();
        $data['pengeluaran_des2021'] = $this->outcome_model->getPengeluaranDes2021();
        $data['graph2021'] = $this->outcome_model->graph2021();
        $this->load->view('template/header',$data);
        $this->load->view('outcome/outcome2021',$data);
        $this->load->view('template/footer');
    }

    public function outcome2022(){
        $data['title']='Report Profit Loss 2022';
        $data['jumlah_order2022'] = $this->outcome_model->getJumlahOrder2022();
        $data['jumlah_customer2022'] = $this->outcome_model->getJumlahCustomer2022();
        $data['pengeluaran_jan2022'] = $this->outcome_model->getPengeluaranJan2022();
        $data['pengeluaran_feb2022'] = $this->outcome_model->getPengeluaranFeb2022();
        $data['pengeluaran_mar2022'] = $this->outcome_model->getPengeluaranMar2022();
        $data['pengeluaran_apr2022'] = $this->outcome_model->getPengeluaranApr2022();
        $data['pengeluaran_mei2022'] = $this->outcome_model->getPengeluaranMei2022();
        $data['pengeluaran_jun2022'] = $this->outcome_model->getPengeluaranJun2022();
        $data['pengeluaran_jul2022'] = $this->outcome_model->getPengeluaranJul2022();
        $data['pengeluaran_agu2022'] = $this->outcome_model->getPengeluaranAgu2022();
        $data['pengeluaran_sep2022'] = $this->outcome_model->getPengeluaranSep2022();
        $data['pengeluaran_okt2022'] = $this->outcome_model->getPengeluaranOkt2022();
        $data['pengeluaran_nov2022'] = $this->outcome_model->getPengeluaranNov2022();
        $data['pengeluaran_des2022'] = $this->outcome_model->getPengeluaranDes2022();
        $data['graph2022'] = $this->outcome_model->graph2022();
        $this->load->view('template/header',$data);
        $this->load->view('outcome/outcome2022',$data);
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */

?>