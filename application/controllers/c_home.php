<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_home extends CI_Controller{
    public function display(){
        if ($this->session->userdata('username')==null){
            redirect(site_url('c_user/login'));
        }
        $data['content']=$this->load->view('v_home','',true);
        $this->load->view('v_template',$data);
    }
}