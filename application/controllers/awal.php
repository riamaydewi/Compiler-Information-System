<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Awal extends CI_Controller {

	
	 
	public function index()
	{
		
		$this->load->view('header_menu');
		$this->load->view('index');
		$this->load->view('footer_compiler');
		
	}
	
	
	
}




/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */