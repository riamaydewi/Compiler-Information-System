<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Keuangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud');
		$this->load->model('M_keuangan');
	}
	 
	public function index()
	{
		$data['dt_jumlah_pemasukan'] = $this->M_keuangan->get_jumlah_pemasukan();
		$data['dt_jumlah_pengeluaran'] = $this->M_keuangan->get_jumlah_pengeluaran();
		//echo $dt_pemasukan;
		//$data['dt_pengeluaran'] = $this->m_crud->get_data('pengeluaran');
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('keuangan',$data);
		$this->load->view('footer_compiler');
		
	}
	
	
	
}




/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */