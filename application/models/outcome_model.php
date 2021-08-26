<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class outcome_model extends CI_Model{
    public function getAllOrder(){
        return $this->db->get('orders')->result_array();
    }

    public function getJumlahOrderAllYears(){
       $sql = "SELECT COUNT(id_order) as jumlah_orderAllYears FROM orders";
       $result = $this->db->query($sql);
       return $result->row()->jumlah_orderAllYears;
    }

    public function getJumlahCustomerAllYears(){
        $sql = "SELECT COUNT(id_customer) as jumlah_customerAllYears FROM customer";
        $result = $this->db->query($sql);
        return $result->row()->jumlah_customerAllYears;
    }

    public function getPengeluaranJanAllYears(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_janAllYears FROM pembayaran WHERE status_pembayaran='Lunas' AND MONTH(tanggal_pembayaran) = 1";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_janAllYears;
    }

    public function getPengeluaranFebAllYears(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_febAllYears FROM pembayaran WHERE status_pembayaran='Lunas' AND MONTH(tanggal_pembayaran) = 2";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_febAllYears;
    }

    public function getPengeluaranMarAllYears(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_marAllYears FROM pembayaran WHERE status_pembayaran='Lunas' AND MONTH(tanggal_pembayaran) = 3";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_marAllYears;
    }

    public function getPengeluaranAprAllYears(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_aprAllYears FROM pembayaran WHERE status_pembayaran='Lunas' AND MONTH(tanggal_pembayaran) = 4";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_aprAllYears;
    }

    public function getPengeluaranMeiAllYears(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_meiAllYears FROM pembayaran WHERE status_pembayaran='Lunas' AND MONTH(tanggal_pembayaran) = 5";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_meiAllYears;
    }

    public function getPengeluaranJunAllYears(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_junAllYears FROM pembayaran WHERE status_pembayaran='Lunas' AND MONTH(tanggal_pembayaran) = 6";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_junAllYears;
    }

    public function getPengeluaranJulAllYears(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_julAllYears FROM pembayaran WHERE status_pembayaran='Lunas' AND MONTH(tanggal_pembayaran) = 7";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_julAllYears;
    }

    public function getPengeluaranAguAllYears(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_aguAllYears FROM pembayaran WHERE status_pembayaran='Lunas' AND MONTH(tanggal_pembayaran) = 8";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_aguAllYears;
    }

    public function getPengeluaranSepAllYears(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_sepAllYears FROM pembayaran WHERE status_pembayaran='Lunas' AND MONTH(tanggal_pembayaran) = 9";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_sepAllYears;
    }

    public function getPengeluaranOktAllYears(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_oktAllYears FROM pembayaran WHERE status_pembayaran='Lunas' AND MONTH(tanggal_pembayaran) = 10";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_oktAllYears;
    }

    public function getPengeluaranNovAllYears(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_novAllYears FROM pembayaran WHERE status_pembayaran='Lunas' AND MONTH(tanggal_pembayaran) = 11";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_novAllYears;
    }

    public function getPengeluaranDesAllYears(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_desAllYears FROM pembayaran WHERE status_pembayaran='Lunas' AND MONTH(tanggal_pembayaran) = 12";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_desAllYears;
    }

    public function graphAllYears(){
        $data = $this->db->query("SELECT SUM(jumlah_pembayaran) as jumlah_pembayaran, DATE_FORMAT(tanggal_pembayaran,'%M') as `month` FROM pembayaran WHERE status_pembayaran = 'Lunas' GROUP BY DATE_FORMAT(`tanggal_pembayaran`,'%M') ORDER BY tanggal_pembayaran");
        return $data->result();
    }

    //2020
    public function getJumlahOrder2020(){
        $sql = "SELECT COUNT(id_order) as jumlah_order2020 FROM orders WHERE YEAR(tanggal_order) = 2020";
        $result = $this->db->query($sql);
        return $result->row()->jumlah_order2020;
     }
 
    public function getJumlahCustomer2020(){
        $sql = "SELECT COUNT(id_customer) as jumlah_customer2020 FROM customer WHERE YEAR(tanggal_bergabung) = 2020";
        $result = $this->db->query($sql);
        return $result->row()->jumlah_customer2020;
    }

    public function getPengeluaranJan2020(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_jan2020 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2020 AND MONTH(tanggal_pembayaran) = 1";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_jan2020;
    }

    public function getPengeluaranFeb2020(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_feb2020 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2020 AND MONTH(tanggal_pembayaran) = 2";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_feb2020;
    }

    public function getPengeluaranMar2020(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_mar2020 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2020 AND MONTH(tanggal_pembayaran) = 3";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_mar2020;
    }

    public function getPengeluaranApr2020(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_apr2020 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2020 AND MONTH(tanggal_pembayaran) = 4";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_apr2020;
    }

    public function getPengeluaranMei2020(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_mei2020 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) = 5";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_mei2020;
    }

    public function getPengeluaranJun2020(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_jun2020 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) = 6";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_jun2020;
    }

    public function getPengeluaranJul2020(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_jul2020 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2020 AND MONTH(tanggal_pembayaran) = 7";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_jul2020;
    }

    public function getPengeluaranAgu2020(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_agu2020 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2020 AND MONTH(tanggal_pembayaran) = 8";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_agu2020;
    }

    public function getPengeluaranSep2020(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_sep2020 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2020 AND MONTH(tanggal_pembayaran) = 9";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_sep2020;
    }

    public function getPengeluaranOkt2020(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_okt2020 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2020 AND MONTH(tanggal_pembayaran) = 10";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_okt2020;
    }

    public function getPengeluaranNov2020(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_nov2020 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2020 AND MONTH(tanggal_pembayaran) = 11";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_nov2020;
    }

    public function getPengeluaranDes2020(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_des2020 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2020 AND MONTH(tanggal_pembayaran) = 12";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_des2020;
    }

    public function graph2020(){
        $data = $this->db->query("SELECT SUM(jumlah_pembayaran) as jumlah_pembayaran, DATE_FORMAT(tanggal_pembayaran,'%M') as `month` FROM pembayaran WHERE status_pembayaran = 'Lunas' AND YEAR(tanggal_pembayaran) = 2020 GROUP BY DATE_FORMAT(`tanggal_pembayaran`,'%M') ORDER BY tanggal_pembayaran");
        return $data->result();
    }

    //2021
    public function getJumlahOrder2021(){
        $sql = "SELECT COUNT(id_order) as jumlah_order2021 FROM orders WHERE YEAR(tanggal_order) = 2021";
        $result = $this->db->query($sql);
        return $result->row()->jumlah_order2021;
    }

    public function getJumlahCustomer2021(){
        $sql = "SELECT COUNT(id_customer) as jumlah_customer2021 FROM customer WHERE YEAR(tanggal_bergabung) = 2021";
        $result = $this->db->query($sql);
        return $result->row()->jumlah_customer2021;
    }

    public function getPengeluaranJan2021(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_jan2021 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) = 1";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_jan2021;
    }

    public function getPengeluaranFeb2021(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_feb2021 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) = 2";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_feb2021;
    }

    public function getPengeluaranMar2021(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_mar2021 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) = 3";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_mar2021;
    }

    public function getPengeluaranApr2021(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_apr2021 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) = 4";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_apr2021;
    }

    public function getPengeluaranMei2021(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_mei2021 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) = 5";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_mei2021;
    }

    public function getPengeluaranJun2021(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_jun2021 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) = 6";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_jun2021;
    }

    public function getPengeluaranJul2021(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_jul2021 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) = 7";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_jul2021;
    }

    public function getPengeluaranAgu2021(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_agu2021 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) = 8";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_agu2021;
    }

    public function getPengeluaranSep2021(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_sep2021 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) = 9";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_sep2021;
    }

    public function getPengeluaranOkt2021(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_okt2021 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) = 10";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_okt2021;
    }

    public function getPengeluaranNov2021(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_nov2021 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) = 11";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_nov2021;
    }

    public function getPengeluaranDes2021(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_des2021 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) = 12";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_des2021;
    }

    public function graph2021(){
        $data = $this->db->query("SELECT SUM(jumlah_pembayaran) as jumlah_pembayaran, DATE_FORMAT(tanggal_pembayaran,'%M') as `month` FROM pembayaran WHERE status_pembayaran = 'Lunas' AND YEAR(tanggal_pembayaran) = 2021 GROUP BY DATE_FORMAT(`tanggal_pembayaran`,'%M') ORDER BY tanggal_pembayaran");
        return $data->result();
    }

    //2022
    public function getJumlahOrder2022(){
        $sql = "SELECT COUNT(id_order) as jumlah_order2022 FROM orders WHERE YEAR(tanggal_order) = 2022";
        $result = $this->db->query($sql);
        return $result->row()->jumlah_order2022;
    }

    public function getJumlahCustomer2022(){
        $sql = "SELECT COUNT(id_customer) as jumlah_customer2022 FROM customer WHERE YEAR(tanggal_bergabung) = 2022";
        $result = $this->db->query($sql);
        return $result->row()->jumlah_customer2022;
    }

    public function getPengeluaranJan2022(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_jan2022 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2022 AND MONTH(tanggal_pembayaran) = 1";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_jan2022;
    }

    public function getPengeluaranFeb2022(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_feb2022 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2022 AND MONTH(tanggal_pembayaran) = 2";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_feb2022;
    }

    public function getPengeluaranMar2022(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_mar2022 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2022 AND MONTH(tanggal_pembayaran) = 3";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_mar2022;
    }

    public function getPengeluaranApr2022(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_apr2022 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2022 AND MONTH(tanggal_pembayaran) = 4";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_apr2022;
    }

    public function getPengeluaranMei2022(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_mei2022 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2022 AND MONTH(tanggal_pembayaran) = 5";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_mei2022;
    }

    public function getPengeluaranJun2022(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_jun2022 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2022 AND MONTH(tanggal_pembayaran) = 6";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_jun2022;
    }

    public function getPengeluaranJul2022(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_jul2022 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2022 AND MONTH(tanggal_pembayaran) = 7";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_jul2022;
    }

    public function getPengeluaranAgu2022(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_agu2022 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2022 AND MONTH(tanggal_pembayaran) = 8";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_agu2022;
    }

    public function getPengeluaranSep2022(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_sep2022 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2022 AND MONTH(tanggal_pembayaran) = 9";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_sep2022;
    }

    public function getPengeluaranOkt2022(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_okt2022 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2022 AND MONTH(tanggal_pembayaran) = 10";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_okt2022;
    }

    public function getPengeluaranNov2022(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_nov2022 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2022 AND MONTH(tanggal_pembayaran) = 11";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_nov2022;
    }

    public function getPengeluaranDes2022(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_des2022 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2022 AND MONTH(tanggal_pembayaran) = 12";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_des2022;
    }

    public function graph2022(){
        $data = $this->db->query("SELECT SUM(jumlah_pembayaran) as jumlah_pembayaran, DATE_FORMAT(tanggal_pembayaran,'%M') as `month` FROM pembayaran WHERE status_pembayaran = 'Lunas' AND YEAR(tanggal_pembayaran) = 2022 GROUP BY DATE_FORMAT(`tanggal_pembayaran`,'%M') ORDER BY tanggal_pembayaran");
        return $data->result();
    }
}
?>