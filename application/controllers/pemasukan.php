<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pemasukan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud');
		$this->load->model('M_pemasukan');
	}

public function index()
	{
		
$data['dt_tanggal']=$this->M_pemasukan->get_tanggal();
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');


		$id_user = $this->session->userdata('id_user');
		$cek_dashboard = $this->M_dashboard->cek_dashboard($id_user);
		
		$halaman= $cek_dashboard->row()->nama_role;

		$id_role = $this->session->userdata('id_role');
		$data['dt_pemasukan']=$this->m_crud->get_row_tanggal('pemasukan1', 'id_role', $id_role);

		$this->load->view('pemasukan/pemasukan_'.$halaman,$data);

		$this->load->view('footer_compiler');
	}

	public function tambah()
	{
		
		$data['dt_kriteria']=$this->m_crud->get_data('kriteria_pemasukan');
		$data['dt_anggota']=$this->m_crud->get_data('anggota');
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('pemasukan/tambah',$data);
		$this->load->view('footer_compiler');
	}

	public function simpan(){
		$data=array(
				'id_role'=>$this->session->userdata('id_role'),
				'tanggal'=>$this->input->post('tanggal'),
				'nama_anggota'=>$this->input->post('nama_anggota'),
				'kriteria_pemasukan'=>$this->input->post('kriteria_pemasukan'),
				'keterangan'=>$this->input->post('keterangan'),
				'jumlah'=>$this->input->post('jumlah')
			);
		$this->m_crud->get_insert('pemasukan1',$data);
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil tersimpan</div>');
		redirect('pemasukan');
	}

	public function update($id)
	{
		$data['dt_kriteria']=$this->m_crud->get_data('kriteria_pemasukan');
		$data['dt_anggota']=$this->m_crud->get_data('anggota');
		$data['dt_pemasukan']=$this->m_crud->get_row_id('pemasukan1','id_pemasukan',$id);
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('pemasukan/update',$data);
		$this->load->view('footer_compiler');
	}


	public function simpan_update(){
		$where = array(
			'id_pemasukan' => $this->input->post('id_pemasukan')
		);
		$data=array(
				'tanggal'=>$this->input->post('tanggal'),
				'nama_anggota'=>$this->input->post('nama_anggota'),
				'kriteria_pemasukan'=>$this->input->post('kriteria_pemasukan'),
				'keterangan'=>$this->input->post('keterangan'),
				'jumlah'=>$this->input->post('jumlah')
			);
		$this->m_crud->get_update('pemasukan1',$data,$where);
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil diubah</div>');

		redirect('pemasukan');
	}

	public function hapus(){
		$where = array(
			'id_pemasukan' => $this->input->post('id_pemasukan')
		);
		
		$this->m_crud->get_delete('pemasukan1', $where);
		$this->session->set_flashdata('notif','<div class="alert alert-success">data berhasil dihapus</div>');

		redirect('pemasukan');
	}

	

}