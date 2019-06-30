<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class c_user extends CI_Controller{
    function __Construct(){
        parent::__Construct();
        $this->load->model('m_user');
    }
    public function login(){
        if ($this->session->userdata('username')!=null){
            redirect(site_url('c_home/display'));
        }
        $this->load->view('v_login');
    }
    public function do_login(){
        if ($this->session->userdata('username')!=null){
            redirect(site_url('c_home/display'));
        }
        if ($this->input->post('login')!=null){
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            
            $cek[] = $this->m_user->cekAdmin($data['username'],$data['password']);
            if($cek!=null){
                $this->session->set_userdata($data);
                redirect(site_url('c_home/display'));
            }
        } else {
            redirect(site_url('c_user/login'));
        }
    }
    public function signup(){
        if ($this->session->userdata('username')!=null){
            redirect(site_url('c_home/display'));
        }
        $this->load->view('v_signup');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url());
    }

}