<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class bank_model extends CI_Model{
    private $table = 'bank';

    public function getAllBank(){
        return $this->db->get('bank')->result_array();
    }

    public function addBank(){
        $data= array(            
            "id_bank" => $this->input->post('id_bank', true),
            "nama_akun" => $this->input->post('nama_akun', true),
            "no_rek" => $this->input->post('no_rek', true),
            "nama_bank" => $this->input->post('nama_bank', true),
            "alamat_bank" => $this->input->post('alamat_bank', true),
            "telp_bank" => $this->input->post('telp_bank', true),
            "saldo_awal" => $this->input->post('saldo_awal', true),
            "status_akun" => $this->input->post('status_akun', true),
            "akun_utama" => $this->input->post('akun_utama', true),
        );
        $this->db->insert('bank', $data);
    }

    public function deleteBank($id_bank){
        $this->db->where('id_bank', $id_bank);
        $this->db->delete('bank');
    }

    public function getBankByID($id){
        $query = $this->db->get_where('bank', ['id_bank' =>$id]);
        return $query->row_array();
    }

    public function cariBank(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_bank',$keyword);
        $this->db->or_like('nama_akun',$keyword);
        $this->db->or_like('nama_bank',$keyword);
        return $this->db->get('bank')->result_array();
    }

    public function ubahdataBank()
    {
        $data=[
            "nama_akun" => $this->input->post('nama_akun', true),
            "no_rek" => $this->input->post('no_rek', true),
            "nama_bank" => $this->input->post('nama_bank', true),
            "alamat_bank" => $this->input->post('alamat_bank', true),
            "telp_bank" => $this->input->post('telp_bank', true),
            "saldo_awal" => $this->input->post('saldo_awal', true),
            "status_akun" => $this->input->post('status_akun', true),
            "akun_utama" => $this->input->post('akun_utama', true),
        ];
        $this->db->where('id_bank', $this->input->post('id_bank'));
        $this->db->update('bank', $data);
    }

    public function getActiveBank(){
        $sql = "SELECT * FROM bank WHERE status_akun='Aktif'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function getUnactiveBank(){
        $sql = "SELECT * FROM bank WHERE status_akun='Tidak Aktif'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>