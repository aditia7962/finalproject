<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Msubcategory extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_subcategory()
	{
		$this->db->from('sub_category');
		$this->db->join('category', 'category.category_id = sub_category.category_id');
		$query=$this->db->get();
		
		return $query->result();
	}

	function get_id_subcategory()
	{
		$this->db->select('RIGHT(sub_category.sub_category_id,3) as code', FALSE);
		$this->db->order_by('sub_category_id','DESC');
		$this->db->limit(1);

		$query = $this->db->get('subcategory');

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
		$resultcode = "SK-".$codemax;

		return $resultcode;
	}

	public function get_subcategory_by_id($id)
	{
		$this->db->from('sub_category');
		$this->db->where('sub_category_id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function subcategory_add($object)
	{
		return $this->db->insert('sub_category', $object);
	}

	public function subcategory_update($where, $data)
	{
		$this->db->update('sub_category', $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_subcategory_by_id($id)
	{
		$this->db->where('sub_category_id', $id);
		return $this->db->delete('sub_category');
	}	

}

/* End of file msubcategory.php */
/* Location: ./application/models/msubcategory.php */
?>