<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
	 	parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form', 'url');
 		$this->load->model('morder');
 		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("admin/login"));
		} 		
	 }

	public function index()
	{
		$data_view['content'] = 'admin/order/content_order';
		$data_view['order'] = $this->morder->get_all_order();

		$this->load->view('admin/vorder', $data_view);
	}

	public function detail($id = null)
	{
		$data_view['content'] = 'admin/order/detail_order';
		$data_view['order'] = $this->morder->get_detail_order($id);

		$this->load->view('admin/vorder', $data_view);
	}

	public function verify($id = null)
	{
		if($this->input->post('submit'))
		{

			$object = array(
				'nilai' => $this->input->post('nilai')
			);

			$update = $this->morder->verify_update(array('verifikasi_id' => $id), $object);
			
			if($update)
			{
				$this->session->set_flashdata('alert', 'berhasil update');
				redirect('admin/order/');
			}
		
		}
        else
        { 
			$data_view['content'] = 'admin/order/verify_order';
			$data_view['order'] = $this->morder->get_verify_order($id);
			$this->load->view('admin/vorder', $data_view);
	    }
	}

}

/* End of file order.php */
/* Location: ./application/controllers/order.php */

?>