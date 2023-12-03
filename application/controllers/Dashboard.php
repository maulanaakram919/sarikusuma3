<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		check();
		$this->load->library('form_validation');
		date_default_timezone_set('Asia/Jakarta');
		// $this->load->library('breadcrumb');
		// $this->load->library('logger');
	}


	public function index()
	{
		$data['title'] 					= 'Dashboard';
		$data['username'] 				= $this->session->userdata();
		$data['jumlah_register']		= $this->db->query("select count(id) id from data_user")->row_array();

		$this->load->view('user/header', $data);
		$this->load->view('user/navbar', $data);
		$this->load->view('user/main', $data);
		$this->load->view('user/script', $data);
	}
}
