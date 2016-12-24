<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
	 	parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form', 'url');
 		$this->load->model('mcategory');
	 }

	public function index()
	{
		$data_view['content'] = 'backend/category/content_category';
		$data_view['category'] = $this->mcategory->get_all_category();
		$this->load->view('backend/vcategory', $data_view);
	}

	public function add()
	{	
		if($this->input->post('submit'))
		{
			$object = array(
				'category_id' => $this->mcategory->get_id_category(),
				'category_name' => $this->input->post('category_name'),
				'description' => $this->input->post('description')
			);

	        $insert = $this->mcategory->category_add($object);
		
			if($insert)
			{
				$this->session->set_flashdata('alert', 'berhasil insert');
				redirect('admin/category');
			}	
		}
		else
		{
			//$data['category'] = $this->mcategory->get_all_category();
			$data_view['content'] = 'backend/category/add_category';
			$this->load->view('backend/vcategory', $data_view);
		}
	}

	public function update($id = null)
	{
		if($this->input->post('submit'))
		{

			$object = array(
				'category_name' => $this->input->post('category_name'),
				'description' => $this->input->post('description')
			);

			$update = $this->mcategory->category_update(array('category_id' => $id), $object);
			
			if($update)
			{
				$this->session->set_flashdata('alert', 'berhasil update');
				redirect('admin/category');
			}
		
		}
        else
        { 
			$data_view['category'] = $this->mcategory->get_category_by_id($id);
			$data_view['content'] = 'backend/category/update_category';
			$this->load->view('backend/vcategory', $data_view);
			
        }

	}

	public function delete($id){
		$delete = $this->mcategory->delete_category_by_id($id);
		if($delete)
		{
			$this->session->set_flashdata('alert', 'berhasil hapus data');
			redirect('admin/category','refresh');
		}
		else
		{
			$this->session->set_flashdata('alert', 'gagal hapus data');
			redirect('admin/category','refresh');
		}
	}

}

/* End of file category.php */
/* Location: ./application/controllers/category.php */

?>