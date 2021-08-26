<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model{
    public function getAllOrder(){
        return $this->db->get('orders')->result_array();
    }

    public function getJumlahOrder(){
       $sql = "SELECT COUNT(id_order) as jumlah_order FROM orders WHERE YEAR(tanggal_order) = YEAR(NOW())";
       $result = $this->db->query($sql);
       return $result->row()->jumlah_order;
    }

    public function getJumlahCustomer(){
        $sql = "SELECT COUNT(id_customer) as jumlah_customer FROM customer WHERE YEAR(tanggal_bergabung) = YEAR(NOW())";
        $result = $this->db->query($sql);
        return $result->row()->jumlah_customer;
    }

    public function getTotalPendapatan(){
        $sql = "SELECT SUM(p.harga_jual * jumlah_order) as total_pendapatan FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai' AND YEAR(tanggal_order) = YEAR(NOW())";
        $result = $this->db->query($sql);
        return $result->row()->total_pendapatan;
    }
    
    public function getTotalPengeluaran(){
        $sql = "SELECT SUM(jumlah_pembayaran) as total_pengeluaran FROM pembayaran WHERE status_pembayaran='Lunas' AND YEAR(tanggal_pembayaran) = YEAR(NOW())";
        $result = $this->db->query($sql);
        return $result->row()->total_pengeluaran;
    }

    public function getTopProduct(){
        $sql = "SELECT * FROM produk LIMIT 3";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function income(){
        $data = $this->db->query("SELECT SUM(p.harga_jual * jumlah_order) as total_order, DATE_FORMAT(tanggal_order,'%M') as `month` FROM orders as o JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order = 'Selesai' AND YEAR(tanggal_order) = YEAR(NOW()) GROUP BY DATE_FORMAT(`tanggal_order`,'%M') ORDER BY tanggal_order");
        return $data->result();
    }

    public function outcome(){
        $data = $this->db->query("SELECT SUM(jumlah_pembayaran) as jumlah_pembayaran, DATE_FORMAT(tanggal_pembayaran,'%M') as `month` FROM pembayaran WHERE status_pembayaran = 'Lunas' AND YEAR(tanggal_pembayaran) = YEAR(NOW()) GROUP BY DATE_FORMAT(`tanggal_pembayaran`,'%M') ORDER BY tanggal_pembayaran");
        return $data->result();
    }
}
?>