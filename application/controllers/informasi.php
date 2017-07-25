<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Informasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud');
	}
	
	 
	public function index()
	{
		$data['dt_pertandingan']=$this->m_crud->get_order('hasil_pertandingan','tanggal');

		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('informasi',$data);
		$this->load->view('footer_compiler');
		
	}
	
	
	public function tambah()
	{
		
		$data['dt_team']=$this->m_crud->get_data('team');
		$data['dt_score']=$this->m_crud->get_data('score');
		$data['dt_namapertandingan']=$this->m_crud->get_data('pertandingan');

		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('pertandingan/tambah',$data);
		
		$this->load->view('footer_compiler');
	}

	public function simpan(){
		$data=array(
				'tanggal'=>$this->input->post('tanggal'),
				'jam'=>$this->input->post('jam'),
				'tempat'=>$this->input->post('tempat'),
				'team_1'=>$this->input->post('team_1'),
				'team_2'=>$this->input->post('team_2'),
				'score_1'=>$this->input->post('score_1'),
				'score_2'=>$this->input->post('score_2'),
				'hasil'=>$this->input->post('hasil'),
				'pertandingan'=>$this->input->post('pertandingan')
			);
		$this->m_crud->get_insert('hasil_pertandingan', $data);
	
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil tersimpan</div>');
		redirect('informasi');
		
	}

	public function update($id)
	{
		$data['dt_team']=$this->m_crud->get_data('team');
		$data['dt_score']=$this->m_crud->get_data('score');
		$data['dt_namapertandingan']=$this->m_crud->get_data('pertandingan');

		$data['dt_pertandingan']=$this->m_crud->get_row_id('hasil_pertandingan','id_hasil',$id);


		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('pertandingan/update',$data);
		$this->load->view('footer_compiler');
	}


	public function simpan_update(){
		$data=array(	
				'tanggal'=>$this->input->post('tanggal'),
				'jam'=>$this->input->post('jam'),
				'tempat'=>$this->input->post('tempat'),
				'team_1'=>$this->input->post('team_1'),
				'team_2'=>$this->input->post('team_2'),
				'score_1'=>$this->input->post('score_1'),
				'score_2'=>$this->input->post('score_2'),
				'hasil'=>$this->input->post('hasil'),
				'pertandingan'=>$this->input->post('pertandingan')
			);
		$where = array(
			'id_hasil'=>$this->input->post('id_hasil')
		);
		$this->m_crud->get_update('hasil_pertandingan',$data,$where);
		
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil diubah</div>');
		redirect('informasi');	
		
	}

	public function hapus(){
	$where = array(
			'id_hasil'=> $this->input->post('id_hasil')
	
	);
		$this->m_crud->get_delete('hasil_pertandingan',$where);
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil dihapus</div>');

		redirect('informasi');
	}
}

	





/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */