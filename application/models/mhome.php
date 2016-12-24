<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhome extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get_product($pencarian,$offset,$total){
		$result['total_rows'] = $this->db->count_all_results('product');

		if ($pencarian){
 			$this->db->like('product_name',$pencarian);
 		}

		$query = $this->db->get('product',$total,$offset);
        
 		$result['data'] = $query->result(); 
 		
 		return $result;
	}

	public function get_count_product(){
		$this->db->from('product');
		$query = $this->db->get();

		return $query->num_rows();
	}	



}

/* End of file mhome.php */
/* Location: ./application/models/mhome.php */