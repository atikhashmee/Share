<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this->load->model('register_model');
		$this->load->database();
	}

	
	public function index()
	{
		
	  
		$this->load->library('form_validation');

		 $this->form_validation->set_rules('first_name','First Name','required');
		 $this->form_validation->set_rules('last_name','Last Name');

		 $this->form_validation->set_rules('email','Email ','trim|required|valid_email|callback_email_check_exist');
		 
		 
		 $this->form_validation->set_rules('password','Password','trim|required|md5');
		 $this->form_validation->set_rules('mobile','mobile Number','required');
		 if($this->form_validation->run()==false)
		 {

$data['title'] = "sharebook registration form";
		 $this->load->view('/files/Header',$data);
		$this->load->view('files/Menu');
		$this->load->view('users/Registration');
		 }else
		 {
          $data = array(
          	'first_name' =>$this->input->post('first_name'),
          	'last_name' =>$this->input->post('last_name') ,

          	'email'  => $this->input->post('email'),
          	'password' => $this->input->post('password'),
          	'mobile' => $this->input->post('mobile'),
          	'terms'   => $this->input->post('terms')
          	  );

            $this->register_model->user_registr($data);
            $data['message'] = 'Data Inserted Successfully';
          	$this->load->view('files/Header');
		    $this->load->view('files/Menu');
		    $this->load->view('users/user_dashboard');

          

		 }
	}


	public function email_check_exist($requested_email)
	{
		//$this->load->model('User_registration');
		$emailavaialble = $this->register_model->email_check($requested_email);
		if($emailavaialble)
		{
			$this->form_validation->set_message('required', 'Your custom message here');
			return true;
		}else
		{
			return false;
		}
	}
}