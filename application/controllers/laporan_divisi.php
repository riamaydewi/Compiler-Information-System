<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_divisi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_keuangan');
	}
	 
	public function index()
	{

		$data['dt_masuk'] = $this->M_keuangan->get_pemasukan();
		$data['dt_keluar'] = $this->M_keuangan->get_pengeluaran();
		$this->load->view('header_compiler');
		$this->load->view('sidebar_compiler');
		$this->load->view('pemasukan_divisi',$data);
		$this->load->view('pengeluaran_divisi',$data);
		$this->load->view('footer_compiler');
		
	}
	
	
	
}




/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */