<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panitia extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud');
	}
	 
	public function index()
	{
		$data['dt_anggota']=$this->m_crud->get_row_divisi('anggota');
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('panitia',$data);
		$this->load->view('footer_compiler');	
	}

	public function tambah()
	{
		$data['dt_role'] = $this->m_crud->get_data('role');
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('index/tambah',$data);
		$this->load->view('footer_compiler');
	}

	public function simpan()
	{
		$data = array(
			'nama_anggota'=>$this->input->post('nama'),
			'kelas'=>$this->input->post('kelas'),
			'no_hp'=>$this->input->post('hp'),
			'nama_divisi'=>$this->input->post('nama_divisi')
		);
		$this->m_crud->get_insert('anggota',$data);
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil tersimpan</div>');
		redirect('panitia');
	}

	public function update($id)
	{
		$data['dt_role'] = $this->m_crud->get_data('role');
		$data['dt_anggota'] = $this->m_crud->get_row_id('anggota','id_anggota',$id);
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('index/update',$data);
		$this->load->view('footer_compiler');
	}

	public function simpan_update()
	{
		$where = array(
			'id_anggota' => $this->input->post('id_anggota')
		);
		$data = array(
			'nama_anggota' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'no_hp' => $this->input->post('hp'),
			'nama_divisi' => $this->input->post('nama_divisi')
		);
		$this->m_crud->get_update('anggota', $data, $where);
		
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil tersimpan</div>');	
		redirect('panitia');
	}

	public function hapus()
	{
		$where = array(
			'id_anggota' => $this->input->post('id_anggota')
		);
		$this->m_crud->get_delete('anggota', $where);
		
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil dihapus</div>');	
		redirect('panitia');
	}
}




/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */