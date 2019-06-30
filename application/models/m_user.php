<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model{
    function cekAdmin($username, $password){
        $query=$this->db->query('select * from admin where username="$username" and password=md5("$password")');
        return $query->result_array()[0];
    }
}