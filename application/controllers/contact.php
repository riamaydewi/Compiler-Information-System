<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		
	}
	
	 
	public function index()
	{
	
		$this->load->view('header_menu');
		$this->load->view('contact');
		$this->load->view('footer_compiler');
		
	}
	
	
	
}




/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */