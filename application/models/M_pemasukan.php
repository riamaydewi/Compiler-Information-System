<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemasukan extends CI_Model {

	function get_tanggal(){
		$q= $this->db->query("select distinct(tanggal) from pemasukan1");
		return $q->result();
	}

function get_jumlah($tanggal){
		$d= $this->db->query("select sum(jumlah) as jumlah from pemasukan1 where tanggal='$tanggal'");
		return $d->row();
	}	

	function get_kriteria($tanggal){
		$d= $this->db->query("select kriteria_pemasukan,keterangan from pemasukan1 where tanggal='$tanggal'");
		return $d->result();
	}



}