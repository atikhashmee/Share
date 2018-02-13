<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{

		parent::__construct();
		session_start();
	}
	
	public function index()
	{
		$data['title'] = "Welcome to our our sharebook:: sell your share by the day";
		$this->load->view('files/Header',$data);
		$this->load->view('files/Menu',$data);
		$this->load->view('Dashboard',$data);
		$this->load->view('files/Footer',$data);
	}
	
	public function logged_out()
	{

		$this->session->sess_destroy();

		redirect('login/logged_out');
	}
}

