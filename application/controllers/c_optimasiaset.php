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
        if ($this->input->post('simpan')!=null){
            $input['akusisi'] = $this->input->post('akusisi');
            $input['kondisi'] = $this->input->post('kondisi');
            $input['komponen_rusak'] = $this->input->post('komponen_rusak');
            $input['jenis_pemeliharaan'] = $this->input->post('jenis_pemeliharaan');
            $input['estimasi_biaya'] = $this->input->post('estimasi_biaya');
            $input['foto_optimasi'] = '';

            $config['upload_path']  = 'asset/upload/optimasi';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name']    = uniqid();
            $config['max_size']     = 5000;

            $this->load->library('upload',$config);

            if (!$this->upload->do_upload('foto_optimasi')){
                echo $this->upload->display_errors();
            } else {
                echo 'input';
                $input['foto_optimasi'] = $this->upload->data('file_name');
                echo $input['foto_optimasi'];
                $this->m_optimasiaset->addData($input);
                redirect(site_url('c_optimasiaset/display'));    
            }
        }
    }
    public function edit($nomor_asset){
        $data = "";
        // $data = array(
        //     'title'=>'Edit Data Aset'
        //     'data_asset'=>$this->m_asset->edit($nomor_asset);
        // );
        $this->load->view('v_editoptimasi',$data);
    }
    public function update(){
        $id['akusisi'] = $this->input->post("akusisi");
        $data=array(
            'kondisi'=>$this->input->post("kondisi"),
            'komponen_rusak'=>$this->input->post("komponen_rusak"),
            'jenis_pemeliharaan'=>$this->input->post("jenis_pemeliharaan"),
            'estimasi_biaya'=>$this->input->post("estimasi_biaya"),
            'foto_optimasi'=>$this->input->post("foto_optimasi"), //ini juga gatau nampilin gambernya gimana bantuin ya heheh
        );
        $this->m_asset->update($data, $id);
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.</div>');
        redirect(base_url("index.php/c_optimasiaset/display"));
    }
}