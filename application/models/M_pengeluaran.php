<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengeluaran extends CI_Model {

	function get_tanggal(){
		$q= $this->db->query("select distinct(tanggal) from pengeluaran");
		return $q->result();
	}

function get_jumlah($tanggal){
		$d= $this->db->query("select sum(jumlah) as jumlah from pengeluaran where tanggal='$tanggal'");
		return $d->row();
	}	

	function get_kriteria($tanggal){
		$d= $this->db->query("select kriteria_pengeluaran,keterangan from pengeluaran where tanggal='$tanggal'");
		return $d->result();
	}

function get_cari($tanggal,$kriteria=''){
	$id_role=$this->session->userdata('id_role');
	$q="select * from pengeluaran where tanggal='$tanggal' and";

	if ($kriteria!=''){

		$q .=" kriteria_pengeluaran='$kriteria' and ";
	}
		$q .=" id_role='$id_role'";
		
		$d= $this->db->query($q);
		return $d->result();
	}


}