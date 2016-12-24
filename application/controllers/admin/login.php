<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
	 	parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form', 'url');
 		$this->load->model('madmin');
 		
		if($this->session->userdata('status') == "login_admin"){
			redirect(base_url("admin/dashboard"));
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
			$cek = $this->madmin->login("admin",$where)->num_rows();
			if($cek > 0){
				$data_session = array(
					'username_admin' => $username,
					'status' => "login_admin"
					);

				$this->session->set_userdata($data_session);

				redirect(base_url("admin/dashboard/"));

			}else{
				redirect(base_url("admin/login/"));
			}
		}else{
			$data_view['content'] = 'admin/admin/login';
			$this->load->view('admin/vlogin', $data_view);
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/admin/login.php */
?>