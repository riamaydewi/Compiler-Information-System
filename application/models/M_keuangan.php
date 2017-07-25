<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_keuangan extends CI_Model {

	

	function get_jumlah_pemasukan(){
	$divisi=$this->session->userdata('id_role');
		$d= $this->db->query("select sum(jumlah) as jumlah from pemasukan1 where id_role='$divisi'");
		return $d->row();
	}	

	function get_jumlah_pengeluaran(){
	$divisi=$this->session->userdata('id_role');
		$d= $this->db->query("select sum(jumlah) as jumlah from pengeluaran where id_role='$divisi'");
		return $d->row();
	}	

	function get_pemasukan()
	{
		$d = $this->db->query("SELECT * FROM pemasukan1 p join role r on(r.id_role=p.id_role) order by r.nama_role");
		return $d->result();
	}

	function get_pengeluaran()
	{
		$d = $this->db->query("SELECT * FROM pengeluaran p join role r on(r.id_role=p.id_role) order by r.nama_role");
		return $d->result();
	}


}