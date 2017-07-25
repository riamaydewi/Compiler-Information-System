<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {
	
    function get_user_auth($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $this->db->where('status','1');
        $log=$this->db->get('adm_user');
        return $log;
    }
}