<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shipper extends CI_Controller {

	public function __construct()
	{
	 	parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form', 'url');
 		$this->load->model('mshipper');
  		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("admin/login"));
		}
	 }

	public function index()
	{
		$data_view['content'] = 'backend/shipper/content_shipper';
		$data_view['shipper'] = $this->mshipper->get_all_shipper();
		$this->load->view('backend/vshipper', $data_view);
	}

	public function add()
	{	
		if($this->input->post('submit'))
		{
			$object = array(
				'shipper_id' => $this->mshipper->get_id_shipper(),
				'company_name' => $this->input->post('company_name'),
				'phone' => $this->input->post('phone'),
				'address' => $this->input->post('address')
			);

	        $insert = $this->mshipper->shipper_add($object);
		
			if($insert)
			{
				$this->session->set_flashdata('alert', 'berhasil insert');
				redirect('admin/shipper');
			}	
		}
		else
		{
			//$data['shipper'] = $this->mshipper->get_all_shipper();
			$data_view['content'] = 'backend/shipper/add_shipper';
			$this->load->view('backend/vshipper', $data_view);
		}
	}

	public function update($id = null)
	{
		if($this->input->post('submit'))
		{

			$object = array(
				'company_name' => $this->input->post('company_name'),
				'phone' => $this->input->post('phone'),
				'address' => $this->input->post('address')
			);

			$update = $this->mshipper->shipper_update(array('shipper_id' => $id), $object);
			
			if($update)
			{
				$this->session->set_flashdata('alert', 'berhasil update');
				redirect('admin/shipper');
			}
		
		}
        else
        { 
			$data_view['shipper'] = $this->mshipper->get_shipper_by_id($id);
			$data_view['content'] = 'backend/shipper/update_shipper';
			$this->load->view('backend/vshipper', $data_view);
			
        }

	}

	public function delete($id){
		$delete = $this->mshipper->delete_shipper_by_id($id);
		if($delete)
		{
			$this->session->set_flashdata('alert', 'berhasil hapus data');
			redirect('admin/shipper','refresh');
		}
		else
		{
			$this->session->set_flashdata('alert', 'gagal hapus data');
			redirect('admin/shipper','refresh');
		}
	}

}

/* End of file shipper.php */
/* Location: ./application/controllers/shipper.php */

?>