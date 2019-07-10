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
        $data2['nomor_aset'] = $this->m_asset->getData();
        $data['content'] = $this->load->view('v_tambahlegal',$data2, true);
        $this->load->view('v_template',$data);
    }
    public function add(){
        if ($this->input->post('simpan')!=null){
            $input['nomor_aset'] = $this->input->post('nomor_aset');
            $input['nomor_dokumen'] = $this->input->post('nomor_dokumen');
            $input['tanggal_penetapan'] = $this->input->post('tanggal_penetapan');
            $input['foto_aset'] = '';

            $config['upload_path']  = 'asset/upload/legal';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name']    = uniqid();
            $config['max_size']     = 5000;

            $this->load->library('upload',$config);

            if (!$this->upload->do_upload('foto_aset')){
                $error = array('error' => $this->upload->display_errors());
                // echo $error;
                // echo 'error';
                echo $this->upload->display_errors();
            } else {
                echo 'input';
                $input['foto_aset'] = $this->upload->data('file_name');
                echo $input['foto_aset'];
                $this->m_legalaudit->addData($input);
                redirect(site_url('c_legalaudit/display'));    
            }
        }
    }
    public function showSertificateajax($id){
        $sertifikat=$this->m_legalaudit->getDataById($id);
        // echo '<pre>'; var_dump($sertifikat); echo '</pre>';?>

        <img src="<?php echo base_url();?>asset/upload/legal/<?php echo $sertifikat['foto_aset'];?>" alt="" class="img img-responsive">
        <?php
    }
    public function delete($id){
        $record = $this->m_legalaudit->getDataById($id);
        $file = $record['foto_aset'];
        unlink("./asset/upload/legal/".$file."");
        $this->m_legalaudit->delete($id);
        redirect(base_url("index.php/c_legalaudit/display"));
    }
    public function edit($nomor_dokumen){
        $data2['legalaudit']=$this->m_legalaudit->getDataByID($nomor_dokumen);
        $data2['nomor_aset'] = $this->m_asset->getData();
        $data['content'] = $this->load->view('v_editlegal',$data2, true);
        $this->load->view('v_template',$data);
    }
    public function update(){
        if ($this->input->post('simpan')!=null){
            $id = $this->input->post('nomor_dokumen_old');
            $input['nomor_aset'] = $this->input->post('nomor_aset');
            $input['nomor_dokumen'] = $this->input->post('nomor_dokumen');
            $input['tanggal_penetapan'] = $this->input->post('tanggal_penetapan');
            $input['foto_aset'] = $this->input->post('foto_aset_old');
            $foto_aset_old = $this->input->post('foto_aset_old');

            if($_FILES['foto_aset']['name']!=""){
                $config['upload_path']  = 'asset/upload/legal';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['file_name']    = uniqid();
                $config['max_size']     = 5000;

                $this->load->library('upload',$config);

                if (!$this->upload->do_upload('foto_aset')){
                    $error = array('error' => $this->upload->display_errors());
                    // echo $error;
                    // echo 'error';
                    echo $this->upload->display_errors();
                } else {
                    unlink("./asset/upload/legal/".$foto_aset_old."");
                    $input['foto_aset'] = $this->upload->data('file_name');
                }
            }
            
            // echo $input['foto_aset'];
            // echo "<pre>"; var_dump($this->input->post()); echo "</pre>";
            $this->m_legalaudit->update($input, $id);
            redirect(site_url('c_legalaudit/display')); 
        }
    }
}