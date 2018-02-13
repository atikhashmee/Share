<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_registration extends ci_model
{


	function __construct()
	{
		parent::__construct();
	}

	
	public function user_registr($data)
	{
		$this->db->insert('table1',$data);

	}
	public function email_check($emailmodel)
	{

		
		$this->db->where('email',$emailmodel);
		$result =$this->db->get('table1');

		if($result->num_rows()>0)
		{
			return false;//username taken 
		}
		else
		{
			return true;//username can be registred 
		}

	}
	public function login_process_m($user,$pass)
	{


		
$this->db->select('email,password ');
		$this->db->from('table1');
		$this->db->where('email',$user);
		$this->db->where('password',$pass);
		$query = $this->db->get();
		
		if($query->num_rows()==1)
		{

			return true;
		}
		else
		{
			return false;
		}
	}

}

?>
