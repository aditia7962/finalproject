<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

		public function __construct()
	{
	 	parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form', 'url');
	}

	public function index()
	{
		// $data_view['product'] = $this->mproduct->get_all_product();
		// $this->load->view('admin/vproduct', $data_view);
		
		if($this->input->post('submit'))
		{
				
		// 		$object = array(
		// 			'customer_id' => $this->mproduct->$this->input->post('supplier_id'),
		// 			'username' => $this->mproduct->$this->input->post('supplier_id'),
		// 			'password' => $this->mproduct->$this->input->post('supplier_id')
		// 		);

		// 		$object1 = array(
		// 			'order_id' => $this->mproduct->$this->input->post('supplier_id'),
		// 			'product_id' => $this->mproduct->$this->input->post(),
		// 			'quantity' => $this->mproduct->$this->input->post('quantity'),
		// 			'total' => $this->mproduct->$this->input->post('total')
		// 		);

  //   			$insert = $this->order->myorder($object);
			
	 //            $insert1 = $this->order->myorder($object1);
			
		// 		if($insert)
		// 		{
		// 			redirect('customer/login');
		// 		}
        }	
		else
		{
			//$data['category'] = $this->mproduct->get_all_category();
			$this->load->view('checkout');
		}

	}

}

/* End of file register.php */
/* Location: ./application/config/register.php */