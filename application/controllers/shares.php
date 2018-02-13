<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shares extends CI_Controller {
    
     public function __construct()
     {
          $msg[] = array();



     	parent::__construct();
     	
     	
     }
     public function index()
     {

          $data['title'] = "share creating";

          $this->load->view('admin/admin_header',$data);
          $this->load->view('admin/admin_menu');
          $this->load->view('share/creat_share');

          $this->load->view('admin/admin_footer');

     }
     public function share_credintial()
     {

          $this->form_validation->set_rules('shareid','Share ID','required');
          $this->form_validation->set_rules('sharename','Share Name','required');
          $this->form_validation->set_rules('shared','Share Description','required');
          if($this->form_validation->run()==false)
          {
           $this->load->view('admin/admin_header');
           $this->load->view('admin/admin_menu');
           $this->load->view('share/creat_share');

           $this->load->view('admin/admin_footer');  
          }else
          {
               $sharedata = array(
                    'shareid' =>$this->input->post('shareid') ,
                    'sharename' =>$this->input->post('sharename') ,
                    'shared' =>$this->input->post('shared') ,
                     );

               $this->load->model('share_model');
               $data = $this->share_model->insert_share($sharedata);
               if( $data == true)
               {
                     $msg['submitted'] = "Your data has been submitted creat another or <a href='#'>go back</a> ";
                    $this->load->view('admin/admin_header');
           $this->load->view('admin/admin_menu');
           $this->load->view('share/creat_share',$msg);

           $this->load->view('admin/admin_footer');
                  
               }


          }

     	



     }
    
	
	

	
}

