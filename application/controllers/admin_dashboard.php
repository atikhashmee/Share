<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_admin_loged_in();

		
		

	}
	public function index()
	{

  
		/* fatching indivual information from database*/ 
		
		
		//$usersdata['user']=$this->admin_model->get_all_users();
		//$online_users['ousers'] = $this->admin_model->online_active_users();

		$datavalue = array(
			'shareuser'=>$this->sharedatafatch(),
			'user' => $this->get_all_users(), 
			'ousers' =>$this->online_users() 
			);
		/*loading all of the file from view*/
		$amin_title['title'] = "welcome to share paradise admin";
		$this->load->view('admin/admin_header',$amin_title);
		$this->load->view('admin/admin_menu');
		$this->load->view('admin/admin_dashboard',$datavalue);
		$this->load->view('admin/admin_footer');

	}


	public function is_admin_loged_in()
	{
		$session_data = $this->session->userdata('is_logged_in');

		if(!isset($session_data) || $session_data != true)
			{
			
			    redirect('Admin_login');
			    $data['$data_error'] = "You are trying to access in illegal way. login first";
				
				die();

			}else
			{
				
				return true;

			}

	}


	public function admin_logout()
	{

		$this->session->sess_destroy();
		redirect('Admin_login');
	}


	/*Fatche user data from database according to their id*/
	public function get_all_users()
	{
		$this->load->model('admin_model');
		$allregistered = $this->admin_model->get_all_users();

		
		return $allregistered;
	}


	/*fatch all the users those who are online now*/
	public function online_users()
	{
		$this->load->model('admin_model');
		$online =  $this->admin_model->online_active_users();
		return $online;
	}



	/*Updating all users data */
	public function user_update()
	{
		$id =  $this->uri->segment(3);
		$this->load->model('admin_model');

		$usersdata['data1'] = $this->admin_model->get_all_users();
		$usersdata['data2'] = $this->admin_model->get_users_by_id($id);
		$this->load->view('admin/admin_header');
		$this->load->view('admin/admin_menu');
		$this->load->view('admin/user_update',$usersdata);
		$this->load->view('admin/admin_footer');

	}
	 public function sharedatafatch()
     {

          $this->load->model('Share_model');
          $data = $this->Share_model->get_all_share();
           
          return $data;
     }
	
}




