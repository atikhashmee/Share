<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_dashboard extends CI_Controller {

	function __construct()
	{

		parent::__construct();
		$this->is_looged_in();
		session_start();
		$data[] = array();
	}
	public function  index()
	{
		$session_id = $this->session->userdata('email');
		$this->load->model('register_model');
		$data['user_info'] = $this->register_model->get_user_info($session_id);
		
		$data_title['title'] = 'WelCome to our sharebook :: thanks for login';
		       $this->load->view('users/user_files/user_header',$data_title);
				$this->load->view('users/user_files/user_menu',$data);
				$this->load->view('users/user_dashboard',$data);
				$this->load->view('files/Footer');
	}
	
	
	
	public function is_looged_in()
	{
		$session_data = $this->session->userdata('is_logged_in');

		if(!isset($session_data) || $session_data != true)
			{
			
			    redirect('login',$data);
			    $data['$data_error'] = "please log in again";
				
				die();

			}else
			{
				
				return true;

			}

	}
	public function user_log_file()
	{


	}
	public function buy_share()
	{
		$session_id = $this->session->userdata('email');
		$this->load->model('register_model');
		$data1['user_info'] = $this->register_model->get_user_info($session_id);
		$data['title'] = "Buying share in sharebook";
		$this->load->view('users/user_files/user_header',$data);
		$this->load->view('users/user_files/user_menu',$data1);
		$this->load->view('users/buy_share');
		$this->load->view('files/Footer');

	}
	
}

