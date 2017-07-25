<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model {
	
    function getAnggota(){
        $query = $this->db->get('divisi');
        if ($query->num_rows() > 0) {
        	return $query->result();
        } else {
        	return array();
        }
    }
}