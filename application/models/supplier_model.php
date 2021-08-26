<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class supplier_model extends CI_Model{
    public function getAllSupplier(){
        return $this->db->get('supplier')->result_array();
    }

    public function getAllKategori(){
        return $this->db->get('kategori')->result_array();
    }

    public function addSupplier(){
        $data= array(
            "nama_supplier" => $this->input->post('nama_supplier', true),
            "telp_supplier" => $this->input->post('telp_supplier', true),
            "email_supplier" => $this->input->post('email_supplier', true),
            "kategori" => $this->input->post('kategori', true),
            "keterangan_supplier" => $this->input->post('keterangan_supplier', true),
            "gambar_supplier" => $this->uploadImage(),
        );
        $this->db->insert('supplier', $data);
    }

    public function deleteSupplier($id_supplier){
        $this->db->where('id_supplier', $id_supplier);
        $this->db->delete('supplier');
    }

    public function getSupplierByID($id){
        $query = $this->db->get_where('supplier', ['id_supplier' =>$id]);
        return $query->row_array();
    }

    public function cariSupplier(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_supplier',$keyword);
        $this->db->or_like('nama_supplier',$keyword);
        $this->db->or_like('kategori',$keyword);
        return $this->db->get('supplier')->result_array();
    }

    public function ubahdataSupplier()
    {
        $data=[
            "nama_supplier" => $this->input->post('nama_supplier', true),
            "telp_supplier" => $this->input->post('telp_supplier', true),
            "email_supplier" => $this->input->post('email_supplier', true),
            "kategori" => $this->input->post('kategori', true),
            "keterangan_supplier" => $this->input->post('keterangan_supplier', true),
            "gambar_supplier" => $this->uploadImage(),
        ];
        $this->db->where('id_supplier', $this->input->post('id_supplier'));
        $this->db->update('supplier', $data);
    }

    private function uploadImage(){
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['file_name']            = $this->id_produk;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar_supplier')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    public function getPaidSupplier(){
        $sql = "SELECT * FROM supplier WHERE keterangan_supplier='Lunas'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function getUnpaidSupplier(){
        $sql = "SELECT * FROM supplier WHERE keterangan_supplier='Belum Lunas'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function getHistoriSupplier($id_supplier){
        $sql = "SELECT p.tanggal_pembayaran, p.nama_produk, p.jumlah_pembayaran, p.jenis_pembayaran, p.status_pembayaran FROM pembayaran AS p JOIN supplier AS s ON p.id_supplier = s.id_supplier where p.id_supplier = $id_supplier";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>