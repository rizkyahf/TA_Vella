<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class c_asset extends CI_Controller{
    function __Construct(){
        parent::__Construct();
        if ($this->session->userdata('username')==null){
            redirect(site_url('c_user/login'));
        }
        $this->load->model('m_asset');
    }
    public function display(){
        $data_aset['asset']=$this->m_asset->getData();
        $data['content'] = $this->load->view('v_home',$data_aset,true);
        $this->load->view('v_template',$data);
    }
    public function input(){
        $data['content'] = $this->load->view('v_tambahaset','',true);
        $this->load->view('v_template',$data);
    }
    public function addaset(){
        if ($this->input->post('simpan')!=null){
            $input['nomor_aset'] = $this->input->post('nomor_aset');
            $input['nama'] = $this->input->post('nama');
            $input['tanggal_pengadaan'] = $this->input->post('tanggal_pengadaan');
            $input['deskripsi_kegunaan'] = $this->input->post('deskripsi_kegunaan');
            $input['tipe'] = $this->input->post('tipe');
            $input['keterangan'] = $this->input->post('keterangan');
            $input['status'] = $this->input->post('status');
            $input['lokasi'] = $this->input->post('lokasi');
            $input['penanggungjawab'] = $this->input->post('penanggungjawab');
            $input['jenis'] = $this->input->post('jenis');

            // echo "<pre>"; var_dump($this->input->post()); echo "</pre>";
            $this->m_asset->addData($input);

            redirect(base_url("index.php/c_home/display"));
        }
    }
    public function delete($id){
        $this->m_asset->delete($id);
        redirect(base_url("index.php/c_home/display"));
    }
}