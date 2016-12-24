<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Office extends CI_Controller {

	public function __construct()
	{
	 	parent::__construct();
		$this->load->helper('form', 'url');
 		$this->load->model('mproduct');
 		$this->load->model('msubcategory');
 		$this->load->model('mhome');
		$this->load->library('pagination');
	}

	public function index(){
		$num = $this->mhome->get_count_product();

		$pencarian = $this->input->post('pencarian');
		$offset = $this->uri->segment(2, 0);

		$total = 9;
		$result = $this->mhome->get_product($pencarian,$offset,$total);
		$config['uri_segment'] = 2;
		$config['base_url'] = site_url('office');
		$config['per_page'] = '9';
		$config['total_rows'] = $num;
		
		$this->pagination->initialize($config); 
		
		$data['pagination'] =  $this->pagination->create_links();
		$data['office_supplies'] = $result['data'];
		$data['sub_category'] = $this->msubcategory->get_all_subcategory('Office Supplies');
		$this->load->view('office',$data);
		
		

		// $congig = array();
		// $config['base_url'] = base_url().'office/';
		// $config['total_rows'] = $num;
		// $config['per_page'] = 3;
		// $config['uri_segment'] = 3;
		// $config['num_links'] = 3;


		// $this->pagination->initialize($config);
		
		// $end = $this->uri->segment(3, 0);	

		// $data_view['office_supplies'] = $this->mhome->get_product($config['per_page'], $end);
		
		// $this->load->view('office', $data_view);
		// $this->load->view('office', $data_view);
	}

}

/* End of file office.php */
/* Location: ./application/controllers/office.php */
?>