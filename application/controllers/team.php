<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud');
	}
	 
	public function index()
	{
		$data['dt_team']=$this->m_crud->get_order('team','team');
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('team/team',$data);
		$this->load->view('footer_compiler');	
	}

	public function tambah()
	{
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('team/tambah');
		$this->load->view('footer_compiler');
	}

	public function simpan()
	{
		$data = array(
			'team'=>$this->input->post('team')
		);
		$this->m_crud->get_insert('team',$data);
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil tersimpan</div>');

		redirect('team');
	}

	public function hapus()
	{
		$where = array(
			'team' => $this->input->post('team')
		);
		$this->m_crud->get_delete('team', $where);
		
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil dihapus</div>');	
		redirect('team');
	}
}




/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */