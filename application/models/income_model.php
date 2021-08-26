<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class income_model extends CI_Model{
    public function getAllOrder(){
        return $this->db->get('orders')->result_array();
    }

    //AllYears
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

    public function getPendapatanJanAllYears(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_janAllYears FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND MONTH(tanggal_order) = 1";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_janAllYears;
    }

    public function getPendapatanFebAllYears(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_febAllYears FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND MONTH(tanggal_order) = 2";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_febAllYears;
    }

    public function getPendapatanMarAllYears(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_marAllYears FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND MONTH(tanggal_order) = 3";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_marAllYears;
    }

    public function getPendapatanAprAllYears(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_aprAllYears FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND MONTH(tanggal_order) = 4";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_aprAllYears;
    }

    public function getPendapatanMeiAllYears(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_meiAllYears FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND MONTH(tanggal_order) = 5";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_meiAllYears;
    }

    public function getPendapatanJunAllYears(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_junAllYears FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND MONTH(tanggal_order) = 6";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_junAllYears;
    }

    public function getPendapatanJulAllYears(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_julAllYears FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND MONTH(tanggal_order) = 7";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_julAllYears;
    }

    public function getPendapatanAguAllYears(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_aguAllYears FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND MONTH(tanggal_order) = 8";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_aguAllYears;
    }

    public function getPendapatanSepAllYears(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_sepAllYears FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND MONTH(tanggal_order) = 9";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_sepAllYears;
    }

    public function getPendapatanOktAllYears(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_oktAllYears FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND MONTH(tanggal_order) = 10";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_oktAllYears;
    }

    public function getPendapatanNovAllYears(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_novAllYears FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND MONTH(tanggal_order) = 11";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_novAllYears;
    }

    public function getPendapatanDesAllYears(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_desAllYears FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND MONTH(tanggal_order) = 12";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_desAllYears;
    }

    public function graphAllYears(){
        $data = $this->db->query("SELECT SUM(p.harga_jual * jumlah_order) as total_order, DATE_FORMAT(tanggal_order,'%M') as `month` FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order = 'Selesai' GROUP BY DATE_FORMAT(`tanggal_order`,'%M') ORDER BY tanggal_order");
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
 
     public function getPendapatanJan2020(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_jan2020 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2020 AND MONTH(tanggal_order) = 1";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_jan2020;
     }
 
     public function getPendapatanFeb2020(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_feb2020 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2020 AND MONTH(tanggal_order) = 2";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_feb2020;
     }
 
     public function getPendapatanMar2020(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_mar2020 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2020 AND MONTH(tanggal_order) = 3";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_mar2020;
     }
 
     public function getPendapatanApr2020(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_apr2020 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2020 AND MONTH(tanggal_order) = 4";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_apr2020;
     }
 
     public function getPendapatanMei2020(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_mei2020 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2020 AND MONTH(tanggal_order) = 5";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_mei2020;
     }
 
     public function getPendapatanJun2020(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_jun2020 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2020 AND MONTH(tanggal_order) = 6";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_jun2020;
     }
 
     public function getPendapatanJul2020(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_jul2020 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2020 AND MONTH(tanggal_order) = 7";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_jul2020;
     }
 
     public function getPendapatanAgu2020(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_agu2020 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2020 AND MONTH(tanggal_order) = 8";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_agu2020;
     }
 
     public function getPendapatanSep2020(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_sep2020 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2020 AND MONTH(tanggal_order) = 9";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_sep2020;
     }
 
     public function getPendapatanOkt2020(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_okt2020 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2020 AND MONTH(tanggal_order) = 10";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_okt2020;
     }
 
     public function getPendapatanNov2020(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_nov2020 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2020 AND MONTH(tanggal_order) = 11";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_nov2020;
     }
 
     public function getPendapatanDes2020(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_des2020 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2020 AND MONTH(tanggal_order) = 12";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_des2020;
     }
 
     public function graph2020(){
         $data = $this->db->query("SELECT SUM(p.harga_jual * jumlah_order) as total_order, DATE_FORMAT(tanggal_order,'%M') as `month` FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order = 'Selesai' AND YEAR(tanggal_order) = 2020 GROUP BY DATE_FORMAT(`tanggal_order`,'%M') ORDER BY tanggal_order");
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
 
     public function getPendapatanJan2021(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_jan2021 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2021 AND MONTH(tanggal_order) = 1";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_jan2021;
     }
 
     public function getPendapatanFeb2021(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_feb2021 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2021 AND MONTH(tanggal_order) = 2";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_feb2021;
     }
 
     public function getPendapatanMar2021(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_mar2021 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2021 AND MONTH(tanggal_order) = 3";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_mar2021;
     }
 
     public function getPendapatanApr2021(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_apr2021 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2021 AND MONTH(tanggal_order) = 4";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_apr2021;
     }
 
     public function getPendapatanMei2021(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_mei2021 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2021 AND MONTH(tanggal_order) = 5";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_mei2021;
     }
 
     public function getPendapatanJun2021(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_jun2021 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2021 AND MONTH(tanggal_order) = 6";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_jun2021;
     }
 
     public function getPendapatanJul2021(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_jul2021 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2021 AND MONTH(tanggal_order) = 7";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_jul2021;
     }
 
     public function getPendapatanAgu2021(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_agu2021 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2021 AND MONTH(tanggal_order) = 8";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_agu2021;
     }
 
     public function getPendapatanSep2021(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_sep2021 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2021 AND MONTH(tanggal_order) = 9";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_sep2021;
     }
 
     public function getPendapatanOkt2021(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_okt2021 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2021 AND MONTH(tanggal_order) = 10";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_okt2021;
     }
 
     public function getPendapatanNov2021(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_nov2021 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2021 AND MONTH(tanggal_order) = 11";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_nov2021;
     }
 
     public function getPendapatanDes2021(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_des2021 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2021 AND MONTH(tanggal_order) = 12";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_des2021;
     }
 
     public function graph2021(){
         $data = $this->db->query("SELECT SUM(p.harga_jual * jumlah_order) as total_order, DATE_FORMAT(tanggal_order,'%M') as `month` FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order = 'Selesai' AND YEAR(tanggal_order) = 2021 GROUP BY DATE_FORMAT(`tanggal_order`,'%M') ORDER BY tanggal_order");
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
 
     public function getPendapatanJan2022(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_jan2022 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2022 AND MONTH(tanggal_order) = 1";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_jan2022;
     }
 
     public function getPendapatanFeb2022(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_feb2022 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2022 AND MONTH(tanggal_order) = 2";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_feb2022;
     }
 
     public function getPendapatanMar2022(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_mar2022 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2022 AND MONTH(tanggal_order) = 3";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_mar2022;
     }
 
     public function getPendapatanApr2022(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_apr2022 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2022 AND MONTH(tanggal_order) = 4";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_apr2022;
     }
 
     public function getPendapatanMei2022(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_mei2022 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2022 AND MONTH(tanggal_order) = 5";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_mei2022;
     }
 
     public function getPendapatanJun2022(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_jun2022 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2022 AND MONTH(tanggal_order) = 6";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_jun2022;
     }
 
     public function getPendapatanJul2022(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_jul2022 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2022 AND MONTH(tanggal_order) = 7";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_jul2022;
     }
 
     public function getPendapatanAgu2022(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_agu2022 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2022 AND MONTH(tanggal_order) = 8";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_agu2022;
     }
 
     public function getPendapatanSep2022(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_sep2022 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2022 AND MONTH(tanggal_order) = 9";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_sep2022;
     }
 
     public function getPendapatanOkt2022(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_okt2022 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2022 AND MONTH(tanggal_order) = 10";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_okt2022;
     }
 
     public function getPendapatanNov2022(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_nov2022 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2022 AND MONTH(tanggal_order) = 11";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_nov2022;
     }
 
     public function getPendapatanDes2022(){
         $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_des2022 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2022 AND MONTH(tanggal_order) = 12";
         $result = $this->db->query($sql);
         return $result->row()->pendapatan_des2022;
     }
 
     public function graph2022(){
         $data = $this->db->query("SELECT SUM(p.harga_jual * jumlah_order) as total_order, DATE_FORMAT(tanggal_order,'%M') as `month` FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order = 'Selesai' AND YEAR(tanggal_order) = 2022 GROUP BY DATE_FORMAT(`tanggal_order`,'%M') ORDER BY tanggal_order");
         return $data->result();
     }
}
?>