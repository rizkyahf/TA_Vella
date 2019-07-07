<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class c_penilaianaset extends CI_Controller{
    function __Construct(){
        parent::__Construct();
        if ($this->session->userdata('username')==null){
            redirect(site_url('c_user/login'));
        }
        $this->load->model('m_penilaianaset');
        $this->load->model('m_asset');
    }
    public function display(){
        $data_aset['penilaianaset']=$this->m_penilaianaset->getData();
        $data['content'] = $this->load->view('v_penilaianaset',$data_aset,true);
        $this->load->view('v_template',$data);
    }
    public function input(){
        $data2['nomor_aset'] = $this->m_asset->getData();
        $data['content'] = $this->load->view('v_tambahnilaiaset',$data2,true);
        $this->load->view('v_template',$data);
    }
    public function add(){
        if ($this->input->post('simpan')!=null){
            $input['nomor_aset']    		= $this->input->post('nomor_aset');
			$input['akusisi']      			= $this->input->post('akusisi');
			$input['akumulasi_depresiasi']	= $this->input->post('akumulasi_depresiasi');
			$input['nilai_akhir']			= $this->input->post('nilai_akhir');
			$input['BalShTm']				= $this->input->post('BalShTm');
			$input['ApCacct']				= $this->input->post('ApCacct');

            // echo "<pre>"; var_dump($this->input->post()); echo "</pre>";
            $this->m_penilaianaset->addData($input);

            redirect(base_url("index.php/c_penilaianaset/display"));
        }
    }
    public function delete($id){
        $this->m_penilaianaset->delete($id);
        redirect(base_url("index.php/c_penilaianaset/display"));
    }
}