<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	
	public function cek_login($user,$password)
	{
		$query = "select *from login where username='$user' and password='$password'";
		$data = $this->db->query($query);
		return $data;
	}
}

