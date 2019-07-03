<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class c_optimasiaset extends CI_Controller{
    function __Construct(){
        parent::__Construct();
        if ($this->session->userdata('username')==null){
            redirect(site_url('c_user/login'));
        }
        $this->load->model('m_optimasiaset');
        $this->load->model('m_penilaianaset');
    }
    public function display(){
        $data_aset['optimasiaset']=$this->m_optimasiaset->getData();
        $data['content'] = $this->load->view('v_optimasiaset',$data_aset,true);
        $this->load->view('v_template',$data);
    }
    public function input(){
        $data2['akusisi'] = $this->m_penilaianaset->getData();
        $data['content'] = $this->load->view('v_tambahoptimasi',$data2,true);
        $this->load->view('v_template',$data);
    }
    public function addoptimasi(){
        if ($this->input->post('Simpan')!=null){
            $input['kondisi'] = $this->input->post('kondisi');
            $input['komponen_rusak'] = $this->input->post('komponen_rusak');
            $input['jenis_pemeliharaan'] = $this->input->post('jenis_pemeliharaan');
            $input['estimasi_biaya'] = $this->input->post('estimasi_biaya');
            $input['foto_optimasi'] = '';

            $config['upload_path']  = 'asset/upload/optimasi';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name']    = $input['kondisi'.'komponen_rusak'];
            $config['max_size']     = 5000;

            $this->load->library('upload',$config);

            if (!$this->upload->do_upload('foto_optimasi')){
                $error = array('error' => $this->upload->display_errors());
                // echo $error;
                // echo 'error';
                echo $this->upload->display_errors();
            } else {
                echo 'input';
                $input['foto_optimasi'] = $this->upload->data('file_name');
                echo $input['foto_optimasi'];
                $this->m_mahasiswa->addData($input);
                redirect(site_url('c_optimasiaset/display'));    
            }
        }
    }
}