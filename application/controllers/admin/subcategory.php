<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategory extends CI_Controller {

	public function __construct()
	{
	 	parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form', 'url');
 		$this->load->model('mcategory');
 		$this->load->model('msubcategory');
  		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("admin/login"));
		}
	 }

	public function index()
	{
		$data_view['content'] = 'backend/subcategory/content_subcategory';
		$data_view['category'] = $this->mcategory->get_all_category();
		$data_view['subcategory'] = $this->msubcategory->get_all_subcategory();
		$this->load->view('backend/vsubcategory', $data_view);
	}

	public function add()
	{	
		if($this->input->post('submit'))
		{
			$object = array(
				'subcategory_id' => $this->msubcategory->get_id_subcategory(),
				'subcategory_name' => $this->input->post('subcategory_name'),
				'description' => $this->input->post('description')
			);

	        $insert = $this->msubcategory->subcategory_add($object);
		
			if($insert)
			{
				$this->session->set_flashdata('alert', 'berhasil insert');
				redirect('admin/subcategory');
			}	
		}
		else
		{
			//$data['subcategory'] = $this->msubcategory->get_all_subcategory();
			$data_view['content'] = 'backend/subcategory/add_subcategory';
			$this->load->view('backend/vsubcategory', $data_view);
		}
	}

	public function update($id = null)
	{
		if($this->input->post('submit'))
		{

			$object = array(
				'subcategory_name' => $this->input->post('subcategory_name'),
				'description' => $this->input->post('description')
			);

			$update = $this->msubcategory->subcategory_update(array('subcategory_id' => $id), $object);
			
			if($update)
			{
				$this->session->set_flashdata('alert', 'berhasil update');
				redirect('admin/subcategory');
			}
		
		}
        else
        { 
			$data_view['subcategory'] = $this->msubcategory->get_subcategory_by_id($id);
			$data_view['content'] = 'backend/subcategory/update_subcategory';
			$this->load->view('backend/vsubcategory', $data_view);
			
        }

	}

	public function delete($id){
		$delete = $this->msubcategory->delete_subcategory_by_id($id);
		if($delete)
		{
			$this->session->set_flashdata('alert', 'berhasil hapus data');
			redirect('admin/subcategory','refresh');
		}
		else
		{
			$this->session->set_flashdata('alert', 'gagal hapus data');
			redirect('admin/subcategory','refresh');
		}
	}

}

/* End of file subcategory.php */
/* Location: ./application/controllers/subcategory.php */

?>