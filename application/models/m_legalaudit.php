<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_legalaudit extends CI_Model{
    function getData(){
        $query=$this->db->query('select * from legal_audit');
        return $query->result_array();
    }
    
    function addData($data){
        // $data = array('nim' => $nim, 'nama' => $nama, 'umur' => $umur);
        // $query=$this->db->query("insert into mahasiswa VALUES ('nim','nama','umur')");
        $this->db->insert('legal_audit',$data);
    }
    function getnoAsset(){
        $query=$this->db->query('select nomor_aset from inventarisasi_aset');
        return $query->result_array();
    }
    function getDataById($id){
        $this->db->select('*');
        $this->db->from('legal_audit');
        $this->db->where('nomor_dokumen',$id);
        return $this->db->get()->result_array()[0];
    }
}
