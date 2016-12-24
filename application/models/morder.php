<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Morder extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_order()
	{
		$this->db->from('order');
		$this->db->join('verifikasi', 'verifikasi.order_id = order.order_id');
		$this->db->join('shipper', 'shipper.shipper_id = order.shipper_id');
		$this->db->join('customer', 'customer.customer_id = order.customer_id');
		$query=$this->db->get();
		
		return $query->result();
	}

	public function get_detail_order($id)
	{
		$this->db->from('order_detail');
		$this->db->join('product', 'product.product_id = order_detail.product_id');
		$this->db->where('order_id', $id);
		$query=$this->db->get();
		
		return $query->result();
	}
	
	public function get_verify_order($id)
	{
		$this->db->from('verifikasi');
		$this->db->join('order', 'order.order_id = verifikasi.order_id');
		$this->db->join('customer', 'customer.customer_id = order.customer_id');
		$this->db->where('verifikasi_id', $id);
		$query=$this->db->get();
		
		return $query->result();
	}

	public function verify_update($where, $data)
	{
		$this->db->update('verifikasi', $data, $where);
		return $this->db->affected_rows();
	}

}

/* End of file morder.php */
/* Location: ./application/models/morder.php */
?>