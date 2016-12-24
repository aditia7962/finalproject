<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcategory extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_category()
	{
		$this->db->from('sub_category');
		$query=$this->db->get();
		
		return $query->result();
	}

	function get_id_category()
	{
		$this->db->select('RIGHT(category.category_id,3) as code', FALSE);
		$this->db->order_by('category_id','DESC');
		$this->db->limit(1);

		$query = $this->db->get('category');

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
		$resultcode = "K-".$codemax;

		return $resultcode;
	}

	public function get_category_by_id($id)
	{
		$this->db->from('category');
		$this->db->where('category_id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function category_add($object)
	{
		return $this->db->insert('category', $object);
	}

	public function category_update($where, $data)
	{
		$this->db->update('category', $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_category_by_id($id)
	{
		$this->db->where('category_id', $id);
		return $this->db->delete('category');
	}	

}

/* End of file mcategory.php */
/* Location: ./application/models/mcategory.php */
?>