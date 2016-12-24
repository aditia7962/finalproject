<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcustomer extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_customer_and_product_id($value)
	{
		$this->db->from('customer');
		$this->db->join('order', 'order.customer_id = customer.customer_id');
		$this->db->join('verifikasi', 'verifikasi.order_id = order.order_id');
		$this->db->where('username', $value);

		$query = $this->db->get();

		return $query->row();
	}

	public function get_order_by_id($id)
	{
		$this->db->from('order');
		$this->db->join('order_detail', 'order_detail.order_id = order.order_id');
		$this->db->join('product', 'product.product_id = order_detail.product_id');
		$this->db->where('customer_id',$id);
		// $this->db->where('order.order_id', $id2);

		//$query=$this->db->get();
		$query = $this->db->get();

		return $query->result();
	}

	public function get_verify_order($id)
	{
		$this->db->from('verifikasi');
		$this->db->where('order_id', $id);
		$query=$this->db->get();
		
		return $query->result();
	}

	public function get_verify_by_id($id)
	{
		$this->db->from('verifikasi');
		$this->db->where('verifikasi_id', $id);
		$query=$this->db->get();
		
		return $query->result();
	}

	public function verify_update($where, $data)
	{
		$this->db->update('verifikasi', $data, $where);
		return $this->db->affected_rows();
	}

	public function get_customer_by_id($id)
	{
		$this->db->from('customer');
		$this->db->where('customer_id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function customer_update($where, $data)
	{
		$this->db->update('customer', $data, $where);
		return $this->db->affected_rows();
	}	

	public function login($table,$where)
	{		
		return $this->db->get_where($table,$where);
	}	


}

/* End of file mcustomer.php */
/* Location: ./application/models/mcustomer.php */
?>