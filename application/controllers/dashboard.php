<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud');
	}
	
	public function index()
	{
		$this->load->model('M_dashboard');
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		
		
		$id_user = $this->session->userdata('id_user');
		$cek_dashboard = $this->M_dashboard->cek_dashboard($id_user);
		
		$halaman= $cek_dashboard->row()->nama_role;

		$data['dt_anggota'] = $this->m_crud->get_row_nama('anggota', 'nama_divisi', $halaman);
		$this->load->view('index/index_'.$halaman, $data);
		
		$this->load->view('footer_compiler');
		
	}
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */