<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud');
	}
	 
	public function index()
	{
		$data['dt_akun']=$this->m_crud->get_row_id_role('login');
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('akun/akun',$data);
		$this->load->view('footer_compiler');	
	}

	public function tambah()
	{
		$data['dt_role'] = $this->m_crud->get_data('role');
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('akun/tambah', $data);
		$this->load->view('footer_compiler');
	}

	public function simpan()
	{
		$data = array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'id_role'=>$this->input->post('divisi')
		);
		$this->m_crud->get_insert('login',$data);
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil tersimpan</div>');

		redirect('akun');
	}

	public function update($id)
	{
		$data['dt_role'] = $this->m_crud->get_data('role');
		$data['dt_akun'] = $this->m_crud->get_row_id('login','id_user',$id);
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('akun/update',$data);
		$this->load->view('footer_compiler');
	}

	public function simpan_update()
	{
		$where = array(
			'id_user' => $this->input->post('id_user')
		);
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'id_role' => $this->input->post('divisi')
		);
		$this->m_crud->get_update('login', $data, $where);
		
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil tersimpan</div>');	
		redirect('akun');
		
	}

	public function hapus()
	{
		$where = array(
			'id_user' => $this->input->post('id_user')
		);
		$this->m_crud->get_delete('login', $where);
		
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil dihapus</div>');	
		redirect('akun');
	}
}




/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */