<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

    public function login($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');
        if ($query->num_rows()>0) {
            foreach ($query->results() as $row) {
                $sess = array('username' => $row->username,
                              'password' => $row->password
                );
            }
        $this->session->get_userdata($sess);
        redirect(base_url('home'));
        }else{
            $this->session->set_flashdata('info','Gagal Login');
            redirect(base_url('home'));
        }
    }

}

/* End of file login_model.php */

?>