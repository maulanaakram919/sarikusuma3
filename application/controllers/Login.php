<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


	public function index()
	{
		$data['title'] 			= 'Login';

		$this->form_validation->set_rules('username', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('login/index', $data);
		} else {
			$this->_login();
		}
	}


	// function untuk login
	private function _login()
	{
		$username 		 	= htmlspecialchars($this->input->post('username'));
		$password 	     	= htmlspecialchars($this->input->post('password'));
		$user 				= $this->db->get_where('login', ['nama' => $username, 'password' => $password])->row_array();
		if (count($user) < 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" 												role="alert">
							  Username atau Password anda tidak sesuai
							</div>');
			redirect('login');
		} else {
			$data = [
				'username' => $user['nama'],
				'role_id' => $user['role_id']
			];
			$this->session->set_userdata($data);
			redirect('admin');
		}
	}
	// end function untuk login
}
