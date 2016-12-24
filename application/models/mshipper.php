<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Mshipper extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_shipper()
	{
		$this->db->from('shipper');
		$query=$this->db->get();
		
		return $query->result();
	}

	function get_id_shipper()
	{
		$this->db->select('RIGHT(shipper.shipper_id,3) as code', FALSE);
		$this->db->order_by('shipper_id','DESC');
		$this->db->limit(1);

		$query = $this->db->get('shipper');

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
		$resultcode = "SHIP-".$codemax;

		return $resultcode;
	}

	public function get_shipper_by_id($id)
	{
		$this->db->from('shipper');
		$this->db->where('shipper_id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function shipper_add($object)
	{
		return $this->db->insert('shipper', $object);
	}

	public function shipper_update($where, $data)
	{
		$this->db->update('shipper', $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_shipper_by_id($id)
	{
		$this->db->where('shipper_id', $id);
		return $this->db->delete('shipper');
	}	

}

/* End of file mshipper.php */
/* Location: ./application/models/mshipper.php */
?>