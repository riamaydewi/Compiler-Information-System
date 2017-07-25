<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar_panitia extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud');
	}
	 
	public function index()
	{
		$data['dt_anggota']=$this->m_crud->get_row_divisi('anggota');
		$this->load->view('header_menu');
		$this->load->view('daftar_panitia',$data);
		$this->load->view('footer_compiler');	
	}
}