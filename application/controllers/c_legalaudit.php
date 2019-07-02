<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class c_legalaudit extends CI_Controller{
    function __Construct(){
        parent::__Construct();
        if ($this->session->userdata('username')==null){
            redirect(site_url('c_user/login'));
        }
        $this->load->model('m_legalaudit');
        $this->load->model('m_asset');
    }
    public function display(){
        $data_aset['legalaudit']=$this->m_legalaudit->getData();
        $data['content'] = $this->load->view('v_legalaudit',$data_aset,true);
        $this->load->view('v_template',$data);
    }
    public function input(){
        $data['content'] = $this->load->view('v_tambahlegal','',true);
        $this->load->view('v_template',$data);
    }
    public function add(){
        if ($this->input->post('Simpan')!=null){
            $input['nomor_dokumen'] = $this->input->post('nomor_dokumen');
            $input['tanggal_penetapan'] = $this->input->post('tanggal_penetapan');
            $input['foto_aset'] = '';

            $config['upload_path']  = 'asset/upload';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name']    = $input['nomor_dokumen'];
            $config['max_size']     = 5000;

            $this->load->library('upload',$config);

            if (!$this->upload->do_upload('foto')){
                $error = array('error' => $this->upload->display_errors());
                // echo $error;
                // echo 'error';
                echo $this->upload->display_errors();
            } else {
                echo 'input';
                $input['foto_aset'] = $this->upload->data('file_name');
                echo $input['foto_aset'];
                $this->m_mahasiswa->addData($input);
                redirect(site_url('c_legalaudit/display'));    
            }
        }
    }
}