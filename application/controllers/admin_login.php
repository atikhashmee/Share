<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	function __construct()
	{
		$data_error[] =array();
		$data_success[] = array();
		parent::__construct();

	}
	public function index()
	{
		$this->load->view('admin/admin_header');
		$this->load->view('admin/admin_login');
		//$this->load->view('admin/admin_footer');
	}
	public function admin_login_process()
	{
		

		$this->form_validation->set_rules('admin_name','Sir Your Name','required');
		$this->form_validation->set_rules('admin_pass','Sir Your password','trim|required|md5');
		if($this->form_validation->run()==false)
		{

			$data_error['admin_data_error'] = "Your <b> Name </b> & <b>Password </b> seem empty first fill them up";
			$this->load->view('admin/admin_header');
		    $this->load->view('admin/admin_login',$data_error);
		}else
		{
				$username = $this->input->post('admin_name');
				$password = $this->input->post('admin_pass');
				$this->load->model('admin_model');
				$resule = $this->admin_model->admin_model_login($username,$password);
				if($resule == true)
				{
					$data_session = array(
						'name' =>$this->input->post('admin_name') , 
						'is_logged_in' =>true
						);
					$this->session->set_userdata($data_session);
					$data_success['welcome'] = "you have successfully looged in"; 
					redirect('admin_dashboard',$data_success);
				}else
				{
					$data_error['admin_data_error'] = "username and password are not matched";
					$this->load->view('admin/admin_header');
		            $this->load->view('admin/admin_login',$data_error);
				}

		}
	}
	

	
}

