<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
	public function dataTerapis()
	{
		$data['title'] 					= 'Data Terapis';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->db->get('data_terapis')->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/dataTerapis', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function dataObat()
	{
		$data['title'] 					= 'Data Obat';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->db->get('data_obat')->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/dataObat', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function rekamMedis()
	{
		$data['title'] 					= 'Rekam Medis';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->db->get('data_user')->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/rekamMedis', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}

	public function inputRekamMEdis()
	{
		$username 				= $this->session->userdata('username');
		$cek_terapi 			= $this->db->get_where('login', ['nama' => $username])->row_array();
		$id_terapi 				= $cek_terapi['id'];
		$id_user 				= $this->input->post('id');
		$mata_kanan 			= $this->input->post('mata_kanan');
		$mata_kanan_pinhole 	= $this->input->post('mata_kanan_pinhole');
		$mata_kiri 				= $this->input->post('mata_kiri');
		$mata_kiri_pinhole 		= $this->input->post('mata_kiri_pinhole');
		$buta_warna 			= $this->input->post('buta_warna');
		$buta_warna_parsial 	= $this->input->post('buta_warna_parsial');
		$buta_warna_total 		= $this->input->post('buta_warna_total');
		$visus_ods 				= $this->input->post('visus_ods');
		$tio_ods 				= $this->input->post('tio_ods');
		$segmen_ant_ods 		= $this->input->post('segmen_ant_ods');
		$fundus_ods 			= $this->input->post('fundus_ods');
		$ishihara_test_ods 		= $this->input->post('ishihara_test_ods');
		$obat 					= $this->input->post('obat');
		$kesimpulan 			= $this->input->post('kesimpulan');

		$data = [
			'id_user' => $id_user,
			'id_dokter' => $id_terapi,
			'mata_kanan' => $mata_kanan,
			'mata_kanan_pinhole' => $mata_kanan_pinhole,
			'mata_kiri' => $mata_kiri,
			'mata_kiri_pinhole' => $mata_kiri_pinhole,
			'buta_warna' => $buta_warna,
			'buta_warna_parsial' => $buta_warna_parsial,
			'buta_warna_total' => $buta_warna_total,
			'visus_ods' => $visus_ods,
			'tio_ods' => $tio_ods,
			'segmen_ant_ods' => $segmen_ant_ods,
			'fundus_ods' => $fundus_ods,
			'ishihara_test_ods' => $ishihara_test_ods,
			'obat' => $obat,
			'kesimpulan' => $kesimpulan,
			'tanggal' => date('Y-m-d'),
			'jam' => date('H:i:sa'),
			'layanan' => 'Pemeriksaan Mata'
		];

		$res = $this->db->insert('rekam_medis', $data);
		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Rekam Medis Berhasil Ditambahkan
							</div>');
			redirect('admin/rekamMedis');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Rekam Medis Gagal Ditambahkan
							</div>');
			redirect('admin/rekamMedis');
		}
	}

	public function kelolaRekamMedis($id)
	{
		$data['title'] 					= 'Kelola Rekam Medis';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->db->get_where('data_user', ['id' => $id])->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/kelolaRekamMedis', $data);
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

	public function editPasien()
	{

		$id 			= $this->input->post('id');
		$nama 			= $this->input->post('nama');
		$email 			= $this->input->post('email');
		$whatsapp 		= $this->input->post('whatsapp');
		$ttl 			= $this->input->post('ttl');
		$agama 			= $this->input->post('agama');
		$jk 			= $this->input->post('jk');
		$alamat 		= $this->input->post('alamat');
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
		$this->db->where('id', $id);
		$res = $this->db->update('data_user', $data);

		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Diupdate
							</div>');
			redirect('admin/pasien');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Diupdate
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
