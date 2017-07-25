<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Informasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pertandingan');
	}
	
	 
	public function index()
	{
		$data['dt_pertandingan']=$this->M_pertandingan->get_pertandingan();

		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('informasi',$data);
		$this->load->view('footer_compiler');
		
	}
	
	
	public function tambah()
	{
		
		$data['dt_team']=$this->M_pertandingan->get_team();
		$data['dt_score']=$this->M_pertandingan->get_score();
		$data['dt_namapertandingan']=$this->M_pertandingan->get_namapertandingan();

		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('pertandingan/tambah',$data);
		
		$this->load->view('footer_compiler');
	}

	public function simpan(){
		$tanggal= $this->input->post('tanggal');
		$jam= $this->input->post('jam');
		$tempat= $this->input->post('tempat');
		$team_A= $this->input->post('team_1');
		$team_B= $this->input->post('team_2');
		$score_A= $this->input->post('score_1');
		$score_B= $this->input->post('score_2');
		$hasil= $this->input->post('hasil');
		$pertandingan= $this->input->post('pertandingan');
		
		$data=array(
				
				'tanggal'=>$tanggal,
				'jam'=>$jam,
				'tempat'=>$tempat,
				'team_1'=>$team_A,
				'team_2'=>$team_B,
				'score_1'=>$score_A,
				'score_2'=>$score_B,
				'hasil'=>$hasil,
				'pertandingan'=>$pertandingan,
			);
		$this->db->insert('hasil_pertandingan',$data);
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil tersimpan</div>');

		$this->session->set_flashdata('notif','data berhasil tersimpan');	
		redirect('informasi');
	}

	public function update($id)
	{
		$data['dt_team']=$this->M_pertandingan->get_team();
		$data['dt_score']=$this->M_pertandingan->get_score();
		$data['dt_namapertandingan']=$this->M_pertandingan->get_namapertandingan();

		$data['dt_pertandingan']=$this->M_pertandingan->get_row($id);

		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('pertandingan/update',$data);
		$this->load->view('footer_compiler');
	}


	public function simpan_update(){
		$id_hasil= $this->input->post('id_hasil');
		$tanggal= $this->input->post('tanggal');
		$jam= $this->input->post('jam');
		$tempat= $this->input->post('tempat');
		$team_A= $this->input->post('team_1');
		$team_B= $this->input->post('team_2');
		$score_A= $this->input->post('score_1');
		$score_B= $this->input->post('score_2');
		$hasil= $this->input->post('hasil');
		$pertandingan= $this->input->post('pertandingan');
		$data=array(
				
				'tanggal'=>$tanggal,
				'jam'=>$jam,
				'tempat'=>$tempat,
				'team_1'=>$team_A,
				'team_2'=>$team_B,
				'score_1'=>$score_A,
				'score_2'=>$score_B,
				'hasil'=>$hasil,
				'pertandingan'=>$pertandingan,
			);
		$this->M_pertandingan->get_update($id_hasil,$data);
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil diubah</div>');

		redirect('informasi');
	}

	public function hapus(){
		$id_hasil= $this->input->post('id_hasil');
		
		$this->M_pertandingan->get_delete($id_hasil);
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil dihapus</div>');

		redirect('informasi');
	}
}

	





/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */