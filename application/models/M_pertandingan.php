<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_pertandingan extends CI_Model {

	function get_pertandingan(){
		$data=$this->db->get('hasil_pertandingan');
		return $data->result();
	}

	function get_row($id){
		$this->db->where('id_hasil',$id);
		$data=$this->db->get('hasil_pertandingan');
		return $data->row();
	}

	
	function get_update($id,$data){
		$this->db->where('id_hasil',$id);
		$this->db->update('hasil_pertandingan',$data);
		
	}

	function get_delete($id){
		$this->db->where('id_hasil',$id);
		$this->db->delete('hasil_pertandingan');
		
	}


	function get_score(){
		$data=$this->db->get('score');
		return $data->result();
	}

	function get_namapertandingan(){
		$data=$this->db->get('pertandingan');
		return $data->result();
	}

	function get_team(){
		$data=$this->db->get('team');
		return $data->result();
	}

}