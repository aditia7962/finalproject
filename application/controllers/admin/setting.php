<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
	 	parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form', 'url');
 		$this->load->model('madmin');
 		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("admin/login"));
		}
	 }

	public function index()
	{
		$data_view['content'] = 'admin/admin/content_admin';
		$data_view['admin'] = $this->madmin->get_all_admin();
		$this->load->view('admin/vadmin', $data_view);
	}

	public function update()
	{
		$data = $this->madmin->get_all_admin();
		$id = $data[0]->admin_id;

		$object = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'email' => $this->input->post('email')

		);

		$update = $update = $this->madmin->admin_update(array('admin_id' => $id), $object);
		if($update)
		{
			$this->session->set_flashdata('alert', 'berhasil edit data');
			redirect('admin/admin','refresh');
		}
		else
		{
			$this->session->set_flashdata('alert', 'gagal edit data');
			redirect('admin/admin','refresh');
		}

		$data = $this->madmin->get_all_admin();
		

		
		
		if($update)
		{
			$this->session->set_flashdata('alert', 'berhasil update');
			redirect('admin/admin');
		}
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */

?>