<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Share_model extends CI_model {

	function __construct()
	{
		parent::__construct();
	}
	public function insert_share($sharedata)
	{
		$this->db->insert('share',$sharedata);
		return true;
	}
	public function get_all_share()
	{
	  $this->db->select("*");
	  $this->db->from("share");
	     $query =  $this->db->get();
	     if($query->num_rows()>0)
	     {
	     	foreach ($query->result() as $key ) {

	     		$data[]  = $key;
	     	}
	     	return $data;
	     }



	}
	

}

