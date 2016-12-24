<?php
  
   class Upload extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      }
		
      public function index() { 
         $this->load->view('upload_form', array('error' => ' ' )); 
      } 
		
      public function do_upload() { 
         $config['upload_path']   = './images/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 1000; 

         if (empty($_FILES)) 
         {
            $error = 'file kosong'; 
            $this->load->view('Upload_form', $error); 
         }
         else
         {
             $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('userfile')) {
               $error = array('error' => $this->upload->display_errors()); 
               $this->load->view('Upload_form', $error); 
            }
            
            else { 
               $data['content'] = $this->upload->data();
               $data = array('upload_data' => $this->upload->data()); 
               $this->load->view('Upload_success', $data); 
            } 
         }

         
      } 
   } 
?>