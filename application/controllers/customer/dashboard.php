<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
	 	parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form', 'url');
 		$this->load->model('mcustomer');
 		
		if($this->session->userdata('status') != "login_customer"){
			redirect(base_url("customer/login"));
		}
	 }

	public function index()
	{
		$value = $this->session->userdata('nama');
		$datas = $this->mcustomer->get_customer_and_product_id($value);
		$id = $datas->customer_id;
		$id2 = $datas->order_id;

		$data_view['content'] = 'customer/customer/content_customer';
		$data_view['verify'] = $this->mcustomer->get_verify_order($id2);
		$data_view['dashboard'] = $this->mcustomer->get_order_by_id($id);
		$this->load->view('customer/vcustomer', $data_view);
	}

	public function verify($id=null)
	{
		if($this->input->post('submit'))
		{

			if ($_FILES['gambar']['name'] == "")
			{
				$object = array(
					'nama_pengirim' => $this->input->post('nama_pengirim'),
					'bank_asal' => $this->input->post('bank_asal'),
					'bank_tujuan' => $this->input->post('bank_tujuan'),
					'nominal' => $this->input->post('nominal')
				);

				$update = $this->mcustomer->verify_update(array('verifikasi_id' => $id), $object);
				
				if($update)
				{
					$this->session->set_flashdata('alert', 'berhasil update');
					redirect('customer/dashboard');
				}
			}
			else
			{
				$config['upload_path']          = './images/verify/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 1000;
				
				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('gambar'))
				{
		            redirect('customer/dashboard/verify/$id');
	         	}
	         	else
	         	{
	         		
					$image = $this->upload->data();
			
					$object = array(
					'nama_pengirim' => $this->input->post('nama_pengirim'),
					'bank_asal' => $this->input->post('bank_asal'),
					'bank_tujuan' => $this->input->post('bank_tujuan'),
					'nominal' => $this->input->post('nominal'),
					'gambar' => 'images/verify/'.$image['file_name']
					);

	            $update = $this->mcustomer->verify_update(array('verifikasi_id' => $id), $object);
				
					if($update)
					{
						$this->session->set_flashdata('alert', 'berhasil update');
						redirect('customer/dashboard/');
					}
				}
			}
        }
        else
        { 
			$data_view['content'] = 'customer/customer/verifikasi_product';
			$data_view['verify'] = $this->mcustomer->get_verify_by_id($id);
			$this->load->view('customer/vcustomer', $data_view);
				
        }
	}

	public function profile()
    {
    	
		$value = $this->session->userdata('nama');
		$datas = $this->mcustomer->get_customer_and_product_id($value);
		$id = $datas->customer_id;

    	if($this->input->post('submit'))
		{

			if ($_FILES['picture']['name'] == "")
			{
				$object = array(
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'phone' => $this->input->post('phone'),
					'email' => $this->input->post('email'),
					'address' => $this->input->post('address'),
					'country' => $this->input->post('country'),
					'city' => $this->input->post('city'),
					'postal_code' => $this->input->post('postal_code'),
					'picture' => $this->input->post('picture')
				);

				$update = $this->mcustomer->customer_update(array('customer_id' => $id), $object);
				
				if($update)
				{
					$this->session->set_flashdata('alert', 'berhasil update');
					redirect('customer/dashboard/profile/');
				}
			}
			else
			{
				$config['upload_path']          = './images/customer/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 1000;
				
				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('picture'))
				{
		            redirect('customer/dashboard/profile');
	         	}
	         	else
	         	{
	         		
					$image = $this->upload->data();
			
					$object = array(
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'username' => $this->input->post('usename'),
					'password' => $this->input->post('password'),
					'phone' => $this->input->post('phone'),
					'email' => $this->input->post('email'),
					'address' => $this->input->post('address'),
					'country' => $this->input->post('country'),
					'city' => $this->input->post('city'),
					'postal_code' => $this->input->post('postal_code'),
					'picture' => $this->input->post('picture'),
					'picture' => 'images/customer/'.$image['file_name']
					);

	            	$update = $this->mcustomer->customer_update(array('customer_id' => $id), $object);
				
					if($update)
					{
						$this->session->set_flashdata('alert', 'berhasil update');
						redirect('customer/dashboard/profile');
					}
				}
			}
        }
        else
        { 
        	$id = 'CUS-001';

        	$data_view['content'] = 'customer/customer/update_customer';
			$data_view['customer'] = $this->mcustomer->get_customer_by_id($id);
			$this->load->view('customer/vcustomer', $data_view);
		}
    }

    function logout(){
		$this->session->sess_destroy();
		redirect(base_url('customer/login'));
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */

?>