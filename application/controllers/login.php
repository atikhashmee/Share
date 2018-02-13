<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$error[] = array();
	}

	

	
	public function index()
	{
		$data['title'] = "Sharebook login panel";
		$this->load->view('files/Header',$data);
		$this->load->view('files/Menu');
		$this->load->view('users/login_user');
		$this->load->view('files/Footer');
	}


		public function ci_login_process()
		{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email','EMail','required');
		$this->form_validation->set_rules('pass','Password','trim|required|md5');
		if($this->form_validation->run()==false)
		{
		$this->load->view('files/Header');
		$this->load->view('files/Menu');
		$this->load->view('users/login_user');
		$this->load->view('files/Footer');
		}
		else
		{
			$email = $this->input->post('email');
			$pass = $this->input->post('pass');
			

		$this->load->model('register_model');
		$query = $this->register_model->login_process_m($email,$pass);

		
		 if ($query==true)
		{

			$data = array(
				'email' => $this->input->post('email'), 
				
				'is_logged_in'=> true

				);
			$this->session->set_userdata($data);
			redirect('user_dashboard');
			$this->form_validation->set_message('required', 'you have successgfully logged in ');

			return true;
		}


		else
		{
			
			$error['data_error']="username and password are not matched <b>try again</b>";
			$this->load->view('files/Header');
			$this->load->view('files/Menu');
			$this->load->view('users/login_user',$error);
			$this->load->view('files/Footer');
		}
		
		

		}



		
	}
	public function logged_out()
	{
		$this->load->view('files/Header');
		$this->load->view('files/Menu');
		$this->load->view('users/login_user');
		$this->load->view('files/Footer');

		return true;
	}
	
}
?>