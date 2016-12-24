<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
	 	parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form', 'url');
 		$this->load->model('mproduct');
 		$this->load->model('mcategory');
 		$this->load->model('msupplier');
 		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("admin/login"));
		}
	}

	public function index()
	{
		$data_view['content'] = 'admin/product/content_product';
		$data_view['product'] = $this->mproduct->get_all_product();
		$this->load->view('admin/vproduct', $data_view);
	}

	public function add()
	{	
		if($this->input->post('submit'))
		{

			$config['upload_path']          = './images/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('picture'))
			{
	            redirect('admin/product/add');
         	}
         	else
         	{ 
         		$image = $this->upload->data();
			
				$object = array(
					'product_id' => $this->mproduct->get_id_product(),
					'supplier_id' => $this->input->post('supplier_id'),
					'product_name' => $this->input->post('product_name'),
					'product_description' => $this->input->post('product_description'),
					'unit_price' => $this->input->post('unit_price'),
					'unit_in_stock' => $this->input->post('unit_in_stock'),
					'discount' => $this->input->post('discount'),
					'picture' => 'images/'.$image['file_name'],
					'sub_category_id' => $this->input->post('sub_category_id'),
				);

	            $insert = $this->mproduct->product_add($object);
			
				if($insert)
				{
					$this->session->set_flashdata('alert', 'berhasil insert');
					redirect('admin/product');
				}
         	}	
		}
		else
		{
			//$data['category'] = $this->mproduct->get_all_category();
			$data_view['supplier'] = $this->msupplier->get_all_supplier();
			$data_view['category'] = $this->mcategory->get_all_category();
			$data_view['content'] = 'admin/product/add_product';
			$this->load->view('admin/vproduct', $data_view);
		}
	}

	public function update($id = null)
	{
		if($this->input->post('submit'))
		{

			if ($_FILES['picture']['name'] == "")
			{
				$object = array(
					'supplier_id' => $this->input->post('supplier_id'),
					'product_name' => $this->input->post('product_name'),
					'product_description' => $this->input->post('product_description'),
					'unit_price' => $this->input->post('unit_price'),
					'unit_in_stock' => $this->input->post('unit_in_stock'),
					'discount' => $this->input->post('discount'),
					'sub_category_id' => $this->input->post('sub_category_id')
				);

				$update = $this->mproduct->product_update(array('product_id' => $id), $object);
				
				if($update)
				{
					$this->session->set_flashdata('alert', 'berhasil update');
					redirect('admin/product');
				}
			}
			else
			{
				$config['upload_path']          = './images/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 1000;
				
				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('picture'))
				{
		            redirect('admin/product/update/$id');
	         	}
	         	else
	         	{
	         		
					$image = $this->upload->data();
			
					$object = array(
						'supplier_id' => $this->input->post('supplier_id'),
						'product_name' => $this->input->post('product_name'),
						'product_description' => $this->input->post('product_description'),
						'unit_price' => $this->input->post('unit_price'),
						'unit_in_stock' => $this->input->post('unit_in_stock'),
						'discount' => $this->input->post('discount'),
						'picture' => 'images/'.$image['file_name'],
						'sub_category_id' => $this->input->post('sub_category_id')
					);

	            $update = $this->mproduct->product_update(array('product_id' => $id), $object);
				
					if($update)
					{
						$this->session->set_flashdata('alert', 'berhasil update');
						redirect('admin/product');
					}
				}
			}
        }
        else
        { 
			$data_view['supplier'] = $this->msupplier->get_all_supplier();
			$data_view['category'] = $this->mcategory->get_all_category();
 			$data_view['product'] = $this->mproduct->get_product_by_id($id);
			$data_view['content'] = 'admin/product/update_product';
			$this->load->view('admin/vproduct', $data_view);
			
        }

	}

	public function delete($id){
		$delete = $this->mproduct->delete_product_by_id($id);
		if($delete)
		{
			$this->session->set_flashdata('alert', 'berhasil hapus data');
			redirect('admin/product');
		}
		else
		{
			$this->session->set_flashdata('alert', 'gagal hapus data');
			redirect('admin/product');
		}
	}

}

/* End of file product.php */
/* Location: ./application/controllers/product.php */

?>