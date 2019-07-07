<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_asset extends CI_Model{
    function getData(){
        $query=$this->db->query('select * from inventarisasi_aset');
        return $query->result_array();
    }
    
    function addData($dataIn){
        // $data = array('nim' => $nim, 'nama' => $nama, 'umur' => $umur);
        // $query=$this->db->query("insert into mahasiswa VALUES ('nim','nama','umur')");
        $this->db->insert('inventarisasi_aset',$dataIn);
    }

    function delete($id){
        $this->db->where('nomor_aset', $id);
        $this->db->delete('inventarisasi_aset');
    }
}