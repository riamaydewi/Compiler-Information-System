<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	
	 
	public function index()
	{
		$this->load->view('login');
	}
	
	public function proses_login()
	{
		$this->load->model('M_login');
		
		$user = $this->input->post('username');
		$password = $this->input->post('password');
		
		$data_login = $this->M_login->cek_login($user,$password);
		
		if ($data_login->num_rows()==1) {
			$cek = $data_login->row();
				$data_1= array(
								'id_user'=> $cek->id_user,
								'username'=> $cek->username,
								'id_role'=> $cek->id_role,
								);
			
			$this->session->set_userdata($data_1);
			redirect("dashboard");
			
		} else {
			echo "Username & Password Salah";
		}
		
	}
	
	public function proses_logout()
		{
			$this->session->sess_destroy();
			redirect("login");
		}
	
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */