<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mproduct extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_product()
	{
		$this->db->from('product');
		$this->db->join('sub_category', 'sub_category.sub_category_id = product.sub_category_id');
		$this->db->join('supplier', 'supplier.supplier_id = product.supplier_id');
		$query=$this->db->get();
		
		return $query->result();
	}

	public function get_all_product_category($value)
	{
		$this->db->from('product');
		$this->db->join('sub_category', 'sub_category.sub_category_id = product.sub_category_id');
		$this->db->join('category', 'category.category_id = sub_category.category_id');
		$this->db->where('category.category_name', $value);
		$this->db->order_by('product_id', 'desc');
		$query=$this->db->get();
		
		return $query->result();
	}

	function get_id_product()
	{
		$this->db->select('RIGHT(product.product_id,3) as code', FALSE);
		$this->db->order_by('product_id','DESC');
		$this->db->limit(1);

		$query = $this->db->get('product');

		if($query->num_rows() <> 0)
		{
			$data = $query->row();
			$code = intval($data->code) + 1;
		}
		else
		{
			$kode = 1;
		}
		
		$codemax = str_pad($code, 3, "0", STR_PAD_LEFT);
		$resultcode = "P-".$codemax;

		return $resultcode;
	}

	public function get_product_by_id($id)
	{
		$this->db->from('product');
		$this->db->join('sub_category', 'sub_category.sub_category_id = product.sub_category_id');
		$this->db->join('supplier', 'supplier.supplier_id = product.supplier_id');
		$this->db->where('product_id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function product_add($object)
	{
		return $this->db->insert('product', $object);
	}

	public function product_update($where, $data)
	{
		$this->db->update('product', $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_product_by_id($id)
	{
		$this->db->where('product_id', $id);
		return $this->db->delete('product');
	}
}

/* End of file mproduct.php */
/* Location: ./application/models/mproduct.php */
?>