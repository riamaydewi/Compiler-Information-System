<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {
	
	public function cek_dashboard($id_user)
	{
		# code...
		$query = "
			select * from login l join role r on ( l.id_role = r.id_role )
			where l.id_user='$id_user'
		";

		$data = $this->db->query($query);

		return $data;
	}
}
