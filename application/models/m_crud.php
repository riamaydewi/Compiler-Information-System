<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	function get_data($tabelName)
	{
		$data=$this->db->get($tabelName);
		return $data->result();
	}

	function get_order($tabelName, $nama)
	{
		$this->db->order_by($nama, 'ASC');
		$data = $this->db->get($tabelName);
		return $data->result();
	}


	function get_row($tabelName, $name, $id)
	{
		$this->db->where($name,$id);
		$data = $this->db->get($tabelName);
		return $data->result();
	}


	function get_row_tanggal($tabelName, $name, $id)
	{
		$this->db->where($name,$id);
		$this->db->order_by('tanggal', 'ASC');
		$data = $this->db->get($tabelName);
		return $data->result();
	}

	function get_row_nama($tabelName, $name, $id)
	{
		$this->db->where($name,$id);
		$this->db->order_by('nama_anggota', 'ASC');
		$data = $this->db->get($tabelName);
		return $data->result();
	}

	function get_row_divisi($tabelName)
	{
		$this->db->order_by('nama_divisi', 'ASC');
		$data = $this->db->get($tabelName);
		return $data->result();
	}

	function get_row_id_role($tabelName)
	{
		$this->db->order_by('id_role', 'ASC');
		$data = $this->db->get($tabelName);
		return $data->result();
	}	

	function get_row_id($tabelName, $name, $id)
	{
		$this->db->where($name,$id);
		$data = $this->db->get($tabelName);
		return $data->row();
	}	

	function get_insert($tabelName, $data)
	{
		$this->db->insert($tabelName, $data);
	}

	function get_update($tabelName, $data, $where)
	{
		$res = $this->db->update($tabelName, $data, $where);
	}

	function get_delete($tabelName, $where)
		{
			$res = $this->db->delete($tabelName, $where);
		}

	function get_sum()
	{
		/*$this->db->select_sum('jumlah');
		$query = $this->db->get($tabelName);
		return $query->row();*/
		$this->db->query('select sum(jumlah) from pemasukan1');
	}
	
}

/*	function get_row_pemasukan($id)
	{
		$this->db->where('id_pemasukan',$id);
		$data=$this->db->get('pemasukan1');
		return $data->row();
	}

	
	function get_pemasukan($id)
	{
		$this->db->where('id_role',$id);
		$data=$this->db->get('pemasukan1');
		return $data->result();
	}

	function get_pengeluaran($id)
	{
		$this->db->where('id_role',$id);
		$data=$this->db->get('pengeluaran');
		return $data->result();
	}

	function get_row_pengeluaran($id)
	{
		$this->db->where('id_pengeluaran',$id);
		$data=$this->db->get('pengeluaran');
		return $data->row();
	}

	
	function get_anggota($id)
	{
		$this->db->where('nama_divisi',$id);
		$data=$this->db->get('anggota');
		return $data->result();
	}

	function get_row_anggota($id)
	{
		$this->db->where('id_anggota',$id);
		$data = $this->db->get('anggota');
		return $data->row();
	}
	function get_delete_pemasukan($id, $tabelName){
		$this->db->where('id_pemasukan',$id);
		$this->db->delete($tabelName);
		
	}

	function get_delete_pengeluaran($id, $tabelName){
		$this->db->where('id_pengeluaran',$id);
		$this->db->delete($tabelName);
		
	}
*/
	

