<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class order_model extends CI_Model{
    
    public function getAllOrder(){
        $sql = "SELECT id_order, p.nama_produk, c.nama_customer, c.email_customer, tanggal_order, jumlah_order, (p.harga_jual * jumlah_order) as total_order, status_order FROM orders AS O JOIN customer AS C ON o.id_customer=c.id_customer JOIN produk as p ON o.id_produk=p.id_produk ORDER BY tanggal_order";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function getAllCustomer(){
        return $this->db->get('customer')->result_array();
    }

    public function getAllProduct(){
        return $this->db->get('produk')->result_array();
    }

    public function addOrder(){
        $data=array(
            "id_order" => $this->input->post('id_order', true),
            "id_produk" => $this->input->post('id_produk', true),
            "id_customer" => $this->input->post('id_customer', true),
            "tanggal_order" => $this->input->post('tanggal_order', true),
            "jumlah_order" => $this->input->post('jumlah_order', true),
            "status_order" => $this->input->post('status_order', true),
        );
        $this->db->insert('orders', $data);
    }

    public function deleteOrder($id_order){
        $this->db->where('id_order', $id_order);
        $this->db->delete('orders');
    }

    public function getOrderByID($id){
        $query = $this->db->get_where('orders', ['id_order' =>$id]);
        return $query->row_array();
    }
    
    public function ubahdataOrder()
    {
        $data=[
            "id_produk" => $this->input->post('id_produk', true),
            "id_customer" => $this->input->post('id_customer', true),
            "tanggal_order" => $this->input->post('tanggal_order', true),
            "jumlah_order" => $this->input->post('jumlah_order', true),
            "status_order" => $this->input->post('status_order', true),
        ];
        $this->db->where('id_order', $this->input->post('id_order'));
        $this->db->update('orders', $data);
    }

    public function cariOrder(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_order',$keyword);
        $this->db->or_like('nama_item',$keyword);
        $this->db->or_like('nama_pelanggan',$keyword);
        $this->db->or_like('status_order',$keyword);
        return $this->db->get('orders')->result_array();
    }

    public function getPaidOrder(){
        $sql = "SELECT id_order, p.nama_produk, c.nama_customer, c.email_customer, tanggal_order, jumlah_order, (p.harga_jual * jumlah_order) as total_order, status_order FROM orders AS O JOIN customer AS C ON o.id_customer=c.id_customer JOIN produk as p ON o.id_produk=p.id_produk WHERE status_order='Selesai'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function getUnpaidOrder(){
        $sql = "SELECT id_order, p.nama_produk, c.nama_customer, c.email_customer, tanggal_order, jumlah_order, (p.harga_jual * jumlah_order) as total_order, status_order FROM orders AS O JOIN customer AS C ON o.id_customer=c.id_customer JOIN produk as p ON o.id_produk=p.id_produk  WHERE status_order='Proses'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>