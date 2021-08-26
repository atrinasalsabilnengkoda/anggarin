<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class product_model extends CI_Model{
    public function getAllProduct(){
        return $this->db->get('produk')->result_array();
    }

    public function getAllSupplier(){
        return $this->db->get('supplier')->result_array();
    }

    public function getAllKategori(){
        return $this->db->get('kategori')->result_array();
    }

    public function select_all(){
        $sql = "SELECT produk.gambar AS gambar_produk,produk.id_produk AS id_produk,produk.nama_produk AS nama_produk, produk.harga_beli AS harga_beli, produk.harga_jual AS harga_jual, produk.deskripsi_produk AS deskripsi_produk,
                produk.jumlah_produk AS jumlah_produk, supplier.nama_supplier AS nama_supplier, kategori.nama_kategori AS nama_kategori
                FROM produk, supplier, kategori WHERE produk.id_kategori = kategori.id_kategori AND produk.id_supplier = supplier.id_supplier";

                $data = $this->db->query($sql);
                return $data->result();
    }

    public function select_by_id($id){
        $sql = "SELECT  produk.gambar AS gambar_produk,produk.id_produk AS id_produk, produk.harga_beli AS harga_beli, produk.harga_jual AS harga_jual,  produk.deskripsi_produk AS deskripsi_produk,
                produk.jumlah_produk AS jumlah_produk, supplier.nama_supplier AS nama_supplier, kategori.nama_kategori AS nama_kategori
                FROM produk, supplier, kategori WHERE produk.id_kategori = kategori.id_kategori AND produk.id_supplier = supplier.id_supplier";

                $data = $this->db->query($sql);
                return $data->row();
    }

    public function addProduct(){
        $data= array(
            "supplier" => $this->input->post('supplier', true),
            "kategori" => $this->input->post('kategori', true),
            "nama_produk" => $this->input->post('nama_produk', true),
            "harga_beli" => $this->input->post('harga_beli', true),
            "harga_jual" => $this->input->post('harga_jual', true),
            "jumlah_produk" => $this->input->post('jumlah_produk', true),
            "deskripsi_produk" => $this->input->post('deskripsi_produk', true),
            "gambar_produk" => $this->uploadImage(),
        );
            
        $this->db->insert('produk', $data);
    }

    public function ubahdataProduct()
    {
        $data=[
            "supplier" => $this->input->post('supplier', true),
            "kategori" => $this->input->post('kategori', true),
            "nama_produk" => $this->input->post('nama_produk', true),
            "harga_beli" => $this->input->post('harga_beli', true),
            "harga_jual" => $this->input->post('harga_jual', true),
            "jumlah_produk" => $this->input->post('jumlah_produk', true),
            "deskripsi_produk" => $this->input->post('deskripsi_produk', true),
            "gambar_produk" => $this->uploadImage(),
        ];
        $this->db->where('id_produk', $this->input->post('id_produk'));
        $this->db->update('produk', $data);
    }


    public function getProductByID($id){
        $query = $this->db->get_where('produk', ['id_produk' =>$id]);
        return $query->row_array();
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

        if ($this->upload->do_upload('gambar_produk')) {
            return $this->upload->data("file_name");
        }else if ($this->upload->do_upload('old_image')){
            return $this->upload->data("file_name");
        }
    }
    
    public function cariProduct(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_produk',$keyword);
        $this->db->or_like('nama_produk',$keyword);
        $this->db->or_like('kategori_produk',$keyword);
        return $this->db->get('produk')->result_array();
    }

    public function deleteProduct($id_supplier){
        $this->db->where('id_produk', $id_supplier);
        $this->db->delete('produk');
    }

    public function get_status(){
        $sql = "SELECT jumlah_produk, IF(jumlah_produk <=1,'Akan Habis','Masih') as status_order FROM produk";
        $result = $this->db->query($sql);
        return $result->row()->status_order;
    }
}
?>