<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_penilaianaset extends CI_Model{
    function getData(){
        $query=$this->db->query('select * from penilaian_aset');
        return $query->result_array();
    }
    
    function addData($penilaian_aset){
        // $data = array('nim' => $nim, 'nama' => $nama, 'umur' => $umur);
        // $query=$this->db->query("insert into mahasiswa VALUES ('nim','nama','umur')");
        $this->db->insert('asset',$penilaian_aset);
    }
}
