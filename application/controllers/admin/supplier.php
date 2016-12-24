<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
	 	parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form', 'url');
 		$this->load->model('msupplier');
  		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("admin/login"));
		}
	 }

	public function index()
	{
		$data_view['content'] = 'backend/supplier/content_supplier';
		$data_view['supplier'] = $this->msupplier->get_all_supplier();
		$this->load->view('backend/vsupplier', $data_view);
	}

	public function add()
	{	
		if($this->input->post('submit'))
		{
			$object = array(
				'supplier_id' => $this->msupplier->get_id_supplier(),
				'company_name' => $this->input->post('company_name'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'country' => $this->input->post('country'),
				'city' => $this->input->post('city'),
				'postal_code' => $this->input->post('postal_code')
			);

	        $insert = $this->msupplier->supplier_add($object);
		
			if($insert)
			{
				$this->session->set_flashdata('alert', 'berhasil insert');
				redirect('admin/supplier');
			}	
		}
		else
		{
			//$data['category'] = $this->msupplier->get_all_category();
			$data_view['content'] = 'backend/supplier/add_supplier';
			$this->load->view('backend/vsupplier', $data_view);
		}
	}

	public function update($id = null)
	{
		if($this->input->post('submit'))
		{

			$object = array(
				'company_name' => $this->input->post('company_name'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'country' => $this->input->post('country'),
				'city' => $this->input->post('city'),
				'postal_code' => $this->input->post('postal_code')
			);

			$update = $this->msupplier->supplier_update(array('supplier_id' => $id), $object);
			
			if($update)
			{
				$this->session->set_flashdata('alert', 'berhasil update');
				redirect('admin/supplier');
			}
		
		}
        else
        { 
			$data_view['supplier'] = $this->msupplier->get_supplier_by_id($id);
			$data_view['content'] = 'backend/supplier/update_supplier';
			$this->load->view('backend/vsupplier', $data_view);
			
        }

	}

	public function delete($id){
		$delete = $this->msupplier->delete_supplier_by_id($id);
		if($delete)
		{
			$this->session->set_flashdata('alert', 'berhasil hapus data');
			redirect('admin/supplier','refresh');
		}
		else
		{
			$this->session->set_flashdata('alert', 'gagal hapus data');
			redirect('admin/supplier','refresh');
		}
	}

}

/* End of file supplier.php */
/* Location: ./application/controllers/supplier.php */

?>