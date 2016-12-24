<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Msupplier extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_supplier()
	{
		$this->db->from('supplier');
		$query=$this->db->get();
		
		return $query->result();
	}

	function get_id_supplier()
	{
		$this->db->select('RIGHT(supplier.supplier_id,3) as code', FALSE);
		$this->db->order_by('supplier_id','DESC');
		$this->db->limit(1);

		$query = $this->db->get('supplier');

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
		$resultcode = "S-".$codemax;

		return $resultcode;
	}

	public function get_supplier_by_id($id)
	{
		$this->db->from('supplier');
		$this->db->where('supplier_id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function supplier_add($object)
	{
		return $this->db->insert('supplier', $object);
	}

	public function supplier_update($where, $data)
	{
		$this->db->update('supplier', $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_supplier_by_id($id)
	{
		$this->db->where('supplier_id', $id);
		return $this->db->delete('supplier');
	}	

}

/* End of file msupplier.php */
/* Location: ./application/models/msupplier.php */
?>