<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_optimasiaset extends CI_Model{
    function getData(){
        $query=$this->db->query('select * from optimasi_aset');
        return $query->result_array();
    }
    
    function addData($data){
        // $data = array('nim' => $nim, 'nama' => $nama, 'umur' => $umur);
        // $query=$this->db->query("insert into mahasiswa VALUES ('nim','nama','umur')");
        $this->db->insert('optimasi_aset',$data);
    }
}
