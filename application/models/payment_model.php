<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class payment_model extends CI_Model{

    public function getAllPayment(){
        $sql = "SELECT id_pembayaran, p.nama_produk, s.nama_supplier, s.email_supplier, s.telp_supplier, tanggal_pembayaran, jumlah_pembayaran, jenis_pembayaran, akun, status_pembayaran FROM pembayaran AS p JOIN supplier AS s ON s.id_supplier=p.id_supplier ORDER BY tanggal_pembayaran";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    
    public function getAllKategori(){
        return $this->db->get('kategori')->result_array();
    }

    public function getAllBank(){
        return $this->db->get('bank')->result_array();
    }

    public function getAllSupplier(){
        return $this->db->get('supplier')->result_array();
    }

    public function addPayment(){
        $data= array(
            "id_pembayaran" => $this->input->post('id_pembayaran', true),
            "id_supplier" => $this->input->post('id_supplier', true),
            "nama_produk" => $this->input->post('nama_produk', true),
            "tanggal_pembayaran" => $this->input->post('tanggal_pembayaran', true),
            "jumlah_pembayaran" => $this->input->post('jumlah_pembayaran', true),
            "jenis_pembayaran" => $this->input->post('jenis_pembayaran', true),
            "akun" => $this->input->post('akun', true),
            "status_pembayaran" => $this->input->post('status_pembayaran', true),
        );
        $this->db->insert('pembayaran', $data);
    }

    public function deletePayment($id_pembayaran){
        $this->db->where('id_pembayaran', $id_pembayaran);
        $this->db->delete('pembayaran');
    }

    public function getPaymentByID($id){
        $query = $this->db->get_where('pembayaran', ['id_pembayaran' =>$id]);
        return $query->row_array();
    }

    public function cariPayment(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_pembayaran',$keyword);
        $this->db->or_like('id_supplier',$keyword);
        $this->db->or_like('nama_produk',$keyword);
        return $this->db->get('pembayaran')->result_array();
    }

    public function ubahdataPayment()
    {
        $data=[
            "id_supplier" => $this->input->post('id_supplier', true),
            "nama_produk" => $this->input->post('nama_produk', true),
            "tanggal_pembayaran" => $this->input->post('tanggal_pembayaran', true),
            "jumlah_pembayaran" => $this->input->post('jumlah_pembayaran', true),
            "jenis_pembayaran" => $this->input->post('jenis_pembayaran', true),
            "akun" => $this->input->post('akun', true),
            "status_pembayaran" => $this->input->post('status_pembayaran', true),
        ];
        $this->db->where('id_pembayaran', $this->input->post('id_pembayaran'));
        $this->db->update('pembayaran', $data);
    }

    function search_supplier($nama_supplier){
        $this->db->like('nama_supplier', $nama_supplier , 'both');
        $this->db->order_by('nama_supplier', 'ASC');
        $this->db->limit(10);
        return $this->db->get('supplier')->result();
    }

    public function getPaidPayment(){
        $sql = "SELECT id_pembayaran, p.nama_produk, s.nama_supplier, s.email_supplier, s.telp_supplier, tanggal_pembayaran, jumlah_pembayaran, jenis_pembayaran, akun, status_pembayaran FROM pembayaran AS p JOIN supplier AS s ON s.id_supplier=p.id_supplier  WHERE status_pembayaran='Lunas'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function getUnpaidPayment(){
        $sql = "SELECT id_pembayaran, p.nama_produk, s.nama_supplier, s.email_supplier, s.telp_supplier, tanggal_pembayaran, jumlah_pembayaran, jenis_pembayaran, akun, status_pembayaran FROM pembayaran AS p JOIN supplier AS s ON s.id_supplier=p.id_supplier  WHERE status_pembayaran='Belum Lunas'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>