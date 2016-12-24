<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
	 	parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form', 'url');
 		$this->load->model('mcustomer');
 		
		if($this->session->userdata('status') == "login_customer"){
			redirect(base_url("customer/dashboard"));
		}
	 }

	public function index()
	{
		if($this->input->post('submit'))
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$where = array(
				'username' => $username,
				'password' => md5($password)
				);
			$cek = $this->mcustomer->login("customer",$where)->num_rows();
			if($cek > 0){
				$data_session = array(
					'nama' => $username,
					'status' => "login_customer"
					);

				$this->session->set_userdata($data_session);

				redirect(base_url("customer/dashboard/"));

			}else{
				$this->load->view('customer/vlogin');
			}
		}else{
			$this->load->view('customer/vlogin');
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/customer/login.php */

?>