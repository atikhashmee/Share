<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_model {


	function __construct()
	{
		parent::__construct();
	}
	public function admin_model_login($admin,$pass)
	{
		$this->db->select('*');
		$this->db->from('administrative');
		$this->db->where('username',$admin);
		$this->db->where('password',$pass);
		$query = $this->db->get();
		if($query->num_rows()==1)
		{
			return true;
		}else 
		{
			return false;
		}
	}
	public function get_all_users()
	{
		$this->db->select('*');
		$this->db->from('table1');
		$q = $this->db->get();
		if($q->num_rows()>0)
		{
			foreach ($q->result() as $key) {
				$data[] = $key;
			}
			return $data;
		}

			
		
		
	}
	public function online_active_users()
	{
		$this->db->select("*");
		$this->db->from("ci_sessions");
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $key ) {
				$onlinedata[] = $key;
			}
			return $onlinedata;
		}
		

	}
	/*update users from admin panel*/
	public function get_users_by_id($data)
	{
		$this->db->select("*");
		$this->db->from("table1");
		$this->db->where('id',$data);
		$query  = $this->db->get();
		$result = $query->result();
		return $result;
	}
}

