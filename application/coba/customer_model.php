<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class customer_model extends CI_Model{
    public function getAllCustomer(){
        return $this->db->get('customer')->result_array();
    }

    public function addCustomer(){
        $data= array(
            "id_customer" => $this->input->post('id_customer', true),
            "nama_customer" => $this->input->post('nama_customer', true),
            "email_customer" => $this->input->post('email_customer', true),
            "telp_customer" => $this->input->post('telp_customer', true),
            "keterangan_order" => $this->input->post('keterangan_order', true),
            "tanggal_bergabung" => $this->input->post('tanggal_bergabung', true)
        );
            
        $this->db->insert('customer', $data);
    }

    public function deleteCustomer($id_customer){
        $this->db->where('id_customer', $id_customer);
        $this->db->delete('customer');
    }

    public function getCustomerByID($id){
        $query = $this->db->get_where('customer', ['id_customer' =>$id]);
        return $query->row_array();
    }
    
    public function cariCustomer(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_customer',$keyword);
        $this->db->or_like('nama_customer',$keyword);
        $this->db->or_like('keterangan_order',$keyword);
        return $this->db->get('customer')->result_array();
    }

    public function ubahdataCustomer()
    {
        $data=[
            "nama_customer" => $this->input->post('nama_customer', true),
            "email_customer" => $this->input->post('email_customer', true),
            "telp_customer" => $this->input->post('telp_customer', true),
            "keterangan_order" => $this->input->post('keterangan_order', true),
            "tanggal_bergabung" => $this->input->post('tanggal_bergabung', true),
        ];
        $this->db->where('id_customer', $this->input->post('id_customer'));
        $this->db->update('customer', $data);
    }

    public function getPaidCustomer(){
        $sql = "SELECT * FROM customer WHERE keterangan_order='Lunas'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function getUnpaidCustomer(){
        $sql = "SELECT * FROM customer WHERE keterangan_order='Belum Lunas'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function getStatusCustomer($id_customer){
        $sql = "SELECT o.tanggal_order, o.nama_prod, o.jumlah_order, o.total_order, o.status_order, COUNT(status_order) AS statusCustomer FROM orders AS o JOIN customer AS c ON o.id_customer = c.id_customer WHERE o.id_customer = $id_customer AND status_order='Proses'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function getHistoriCustomer($id_customer){
        $sql = "SELECT o.tanggal_order, p.nama_produk, o.jumlah_order, o.total_order, o.status_order FROM orders AS o JOIN customer AS c ON o.id_customer = c.id_customer JOIN produk AS p ON p.id_produk = o.id_produk WHERE o.id_customer = $id_customer";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function getCustomer($id_customer){
        $sql = "SELECT c.nama_customer AS data_customer FROM orders AS o JOIN customer AS c ON o.id_customer = c.id_customer where c.id_customer = $id_customer";
        $result = $this->db->query($sql);
        return $result->row()->data_customer;
    }
}
?>