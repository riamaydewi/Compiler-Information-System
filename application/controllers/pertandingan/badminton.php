<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Badminton extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud');
	}
	 
	public function index()
	{
		$data['dt_pertandingan']=$this->m_crud->get_row_tanggal('hasil_pertandingan','pertandingan', 'badminton');
		$this->load->view('header_menu');
		$this->load->view('pertandingan/pertandingan_badminton',$data);
		$this->load->view('footer_compiler');
		
	}
	
	
	
}




/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */