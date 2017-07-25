<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengeluaran extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud');
		$this->load->model('M_pengeluaran');
	}

	public function index()
	{
		$data['dt_kriteria'] = $this->m_crud->get_data('kriteria_pengeluaran');
		$data['dt_tanggal']=$this->M_pengeluaran->get_tanggal();
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');

		$id_user = $this->session->userdata('id_user');
		$cek_dashboard = $this->M_dashboard->cek_dashboard($id_user);
		$halaman= $cek_dashboard->row()->nama_role;

		$id_role = $this->session->userdata('id_role');

		if ($this->input->method()=='post'){

			$tanggal=$this->input->post('tanggal');
			$kriteria=$this->input->post('kriteria');
			$data['dt_pengeluaran']=$this->M_pengeluaran->get_cari($tanggal,$kriteria);

		}else{

		$data['dt_pengeluaran']=$this->m_crud->get_row_tanggal('pengeluaran','id_role',$id_role);
		


		}
		
		$this->load->view('pengeluaran/pengeluaran_'.$halaman,$data);
		
		
		$this->load->view('footer_compiler');
	}

	public function tambah()
	{
		$data['dt_kriteria'] = $this->m_crud->get_data('kriteria_pengeluaran');
		$data['dt_anggota'] = $this->m_crud->get_data('anggota');
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('pengeluaran/tambah',$data);
		$this->load->view('footer_compiler');
	}

	public function simpan()
	{
		$data = array(
			'id_role' => $this->session->userdata('id_role'),
			'tanggal' => $this->input->post('tanggal'),
			'nama_anggota' => $this->input->post('nama_anggota'),
			'kriteria_pengeluaran' => $this->input->post('kriteria_pengeluaran'),
			'keterangan' => $this->input->post('keterangan'),
			'jumlah' => $this->input->post('jumlah'),
		);

		$this->m_crud->get_insert('pengeluaran',$data);
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil tersimpan</div>');	
		redirect('pengeluaran');
	}

	public function update($id)
	{
		$data['dt_kriteria'] = $this->m_crud->get_data('kriteria_pengeluaran');
		$data['dt_anggota'] = $this->m_crud->get_data('anggota');
		$data['dt_pengeluaran'] = $this->m_crud->get_row_id('pengeluaran','id_pengeluaran',$id);
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('pengeluaran/update',$data);
		$this->load->view('footer_compiler');
	}

	public function simpan_update()
	{
		$where = array('id_pengeluaran'=>$this->input->post('id_pengeluaran'));
		$data = array(
			'tanggal' => $this->input->post('tanggal'),
			'nama_anggota' => $this->input->post('nama_anggota'),
			'kriteria_pengeluaran' => $this->input->post('kriteria_pengeluaran'),
			'keterangan' => $this->input->post('keterangan'),
			'jumlah' => $this->input->post('jumlah'),
		);
		$this->m_crud->get_update('pengeluaran', $data, $where);
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil diubah</div>');

		redirect('pengeluaran');
	}
	public function hapus()
	{
		$where = array(
			'id_pengeluaran' => $this->input->post('id_pengeluaran')
		);

		$data = $this->m_crud->get_delete('pengeluaran', $where);
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil dihapus</div>');
		
		redirect('pengeluaran');
		
	}

	public function laporan()
	{
		

		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');


		$id_user = $this->session->userdata('id_user');
		$cek_dashboard = $this->M_dashboard->cek_dashboard($id_user);
		$halaman= $cek_dashboard->row()->nama_role;

		$id_role = $this->session->userdata('id_role');
		$data['dt_tanggal']=$this->M_pengeluaran->get_tanggal();
		$this->load->view('pengeluaran/laporan_'.$halaman,$data);

		$this->load->view('footer_compiler');
	}
}