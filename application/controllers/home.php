<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
	 	parent::__construct();
		$this->load->helper('form', 'url');
 		$this->load->model('mproduct');

	}

	public function index(){
		$data_view['office_supplies'] = $this->mproduct->get_all_product_category('Office Supplies');
		$data_view['furniture'] = $this->mproduct->get_all_product_category('Furniture');
		$data_view['technology'] = $this->mproduct->get_all_product_category('Technology');
		$this->load->view('home', $data_view);
	
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>