<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


	public function index()
	{
		$data['title'] 					= 'Admin';
		$data['username'] 				= $this->session->userdata();
		$data['jumlah_register']		= $this->db->query("select count(id) id from data_user")->row_array();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/main', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function detail_user()
	{
		$data['title'] 					= 'Detail User';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->db->get('data_user')->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/detail_user', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function pasien()
	{
		$data['title'] 					= 'Daftar Pasien';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->db->get('data_user')->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/pasien', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}

	public function addPasien()
	{
		$nama 			= $this->input->post('nama');
		$email 			= $this->input->post('email');
		$whatsapp 		= $this->input->post('whatsapp');
		$ttl 			= $this->input->post('ttl');
		$agama 			= $this->input->post('agama');
		$jk 			= $this->input->post('jk');
		$alamat 		= $this->input->post('alamat$alamat');
		$kota 			= $this->input->post('kota');
		$provinsi 		= $this->input->post('provinsi');
		$negara 		= $this->input->post('negara');

		$data = [
			'nama'  => $nama,
			'email'  => $email,
			'whatsapp'  => $whatsapp,
			'tgl_lahir'  => $ttl,
			'agama'  => $agama,
			'jk'  => $jk,
			'alamat'  => $alamat,
			'kota'  => $kota,
			'provinsi'  => $provinsi,
			'negara'  => $negara,
			'date_created' 		=> date('Y-m-d H:i:sa')
		];
		$res = $this->db->insert('data_user', $data);
		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Ditambahkan
							</div>');
			redirect('admin/pasien');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Ditambahkan
							</div>');
			redirect('admin/pasien');
		}
	}

	public function hapusUser()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$res = $this->db->delete('data_user');
		if ($res) {
			echo 1;
		} else {
			echo 0;
		}
	}
}
