<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class setting extends CI_Controller {

    public function index()
    {
        $data['title']='Setting';
        $this->load->view('template/header',$data);
        $this->load->view('setting/index',$data);
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */

?>