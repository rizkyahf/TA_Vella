<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_home extends CI_Controller{
    function __Construct(){
        parent::__Construct();
        if ($this->session->userdata('username')==null){
            redirect(site_url('c_user/login'));
        }
        $this->load->model('m_asset');
    }

    public function display(){
        $data2['inventarisasi_aset'] = $this->m_asset->getData();

        $data['content']=$this->load->view('v_home',$data2,true);
        $this->load->view('v_template',$data);
    }
}