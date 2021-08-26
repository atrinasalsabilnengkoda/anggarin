<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class profitloss_model extends CI_Model{
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

    public function getPendapatanJanAprAllYears(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_janaprAllYears FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND MONTH(tanggal_order) BETWEEN 1 AND 4";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_janaprAllYears;
    }

    public function getPendapatanMeiAugAllYears(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_meiaugAllYears FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND MONTH(tanggal_order) BETWEEN 5 AND 8";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_meiaugAllYears;
    }

    public function getPendapatanSepDesAllYears(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_sepdesAllYears FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND MONTH(tanggal_order) BETWEEN 9 AND 12";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_sepdesAllYears;
    }

    public function getPengeluaranJanAprAllYears(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_janaprAllYears FROM pembayaran WHERE status_pembayaran='Lunas' AND MONTH(tanggal_pembayaran) BETWEEN 1 AND 4";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_janaprAllYears;
    }

    public function getPengeluaranMeiAugAllYears(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_meiaugAllYears FROM pembayaran WHERE status_pembayaran='Lunas' AND MONTH(tanggal_pembayaran) BETWEEN 5 AND 8";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_meiaugAllYears;
    }

    public function getPengeluaranSepDesAllYears(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_sepdesAllYears FROM pembayaran WHERE status_pembayaran='Lunas' AND MONTH(tanggal_pembayaran) BETWEEN 9 AND 12";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_sepdesAllYears;
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

    public function getPendapatanJanApr2020(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_janapr2020 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2020 AND MONTH(tanggal_order) BETWEEN 1 AND 4";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_janapr2020;
    }

    public function getPendapatanMeiAug2020(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_meiaug2020 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2020 AND MONTH(tanggal_order) BETWEEN 5 AND 8";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_meiaug2020;
    }

    public function getPendapatanSepDes2020(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_sepdes2020 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2020 AND MONTH(tanggal_order) BETWEEN 9 AND 12";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_sepdes2020;
    }

    public function getPengeluaranJanApr2020(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_janapr2020 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2020 AND MONTH(tanggal_pembayaran) BETWEEN 1 AND 4";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_janapr2020;
    }

    public function getPengeluaranMeiAug2020(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_meiaug2020 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2020 AND MONTH(tanggal_pembayaran) BETWEEN 5 AND 8";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_meiaug2020;
    }

    public function getPengeluaranSepDes2020(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_sepdes2020 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2020 AND MONTH(tanggal_pembayaran) BETWEEN 9 AND 12";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_sepdes2020;
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

    public function getPendapatanJanApr2021(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_janapr2021 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2021 AND MONTH(tanggal_order) BETWEEN 1 AND 4";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_janapr2021;
    }

    public function getPendapatanMeiAug2021(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_meiaug2021 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2021 AND MONTH(tanggal_order) BETWEEN 5 AND 8";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_meiaug2021;
    }

    public function getPendapatanSepDes2021(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_sepdes2021 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2021 AND MONTH(tanggal_order) BETWEEN 9 AND 12";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_sepdes2021;
    }

    public function getPengeluaranJanApr2021(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_janapr2021 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) BETWEEN 1 AND 4";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_janapr2021;
    }

    public function getPengeluaranMeiAug2021(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_meiaug2021 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) BETWEEN 5 AND 8";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_meiaug2021;
    }

    public function getPengeluaranSepDes2021(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_sepdes2021 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2021 AND MONTH(tanggal_pembayaran) BETWEEN 9 AND 12";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_sepdes2021;
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

    public function getPendapatanJanApr2022(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_janapr2022 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2022 AND MONTH(tanggal_order) BETWEEN 1 AND 4";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_janapr2022;
    }

    public function getPendapatanMeiAug2022(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_meiaug2022 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2022 AND MONTH(tanggal_order) BETWEEN 5 AND 8";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_meiaug2022;
    }

    public function getPendapatanSepDes2022(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as pendapatan_sepdes2022 FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = 2022 AND MONTH(tanggal_order) BETWEEN 9 AND 12";
        $result = $this->db->query($sql);
        return $result->row()->pendapatan_sepdes2022;
    }

    public function getPengeluaranJanApr2022(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_janapr2022 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2022 AND MONTH(tanggal_pembayaran) BETWEEN 1 AND 4";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_janapr2022;
    }

    public function getPengeluaranMeiAug2022(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_meiaug2022 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2022 AND MONTH(tanggal_pembayaran) BETWEEN 5 AND 8";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_meiaug2022;
    }

    public function getPengeluaranSepDes2022(){
        $sql = "SELECT SUM(jumlah_pembayaran) as pengeluaran_sepdes2022 FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = 2022 AND MONTH(tanggal_pembayaran) BETWEEN 9 AND 12";
        $result = $this->db->query($sql);
        return $result->row()->pengeluaran_sepdes2022;
    }
}
?>