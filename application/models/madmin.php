<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_admin()
	{
		$this->db->from('admin');
		$query=$this->db->get();
		
		return $query->result();
	}

	public function admin_update($where, $data)
	{
		$this->db->update('admin', $data, $where);
		return $this->db->affected_rows();
	}

	public function login($table,$where)
	{		
		return $this->db->get_where($table,$where);
	}	

}

/* End of file madmin.php */
/* Location: ./application/models/madmin.php */
?>