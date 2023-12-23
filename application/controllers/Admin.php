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
		$this->load->model('Admin_model');
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
	public function reservasi()
	{
		$data['title'] 					= 'Daftar Reservasi';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->Admin_model->reservasi();


		$data['nik']					= $this->db->get('data_user')->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/reservasi', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function pemeriksaan()
	{
		$data['title'] 					= 'Pemeriksaan';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->Admin_model->reservasi();
		$today							= date('d-m-Y');
		$data['pemeriksaan']			= $this->Admin_model->pemeriksaan($today);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/pemeriksaan', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}

	public function addReservasi()
	{
		$nik 						= $this->input->post('cari');
		$terapi 					= $this->input->post('terapi');
		$tanggal_terapi 			= $this->input->post('tanggal_terapi');
		$res 						= $this->db->get_where('data_user', ['no_ktp' => $nik])->row_array();
		$cek 						= $this->db->get_where('reservasi', ['id_user' => $res['id'], 'tanggal_terapi' => $tanggal_terapi, 'terapi' => $terapi])->num_rows();
		if ($cek > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-warning  text-center" 												role="alert">
							  Sudah Melakukan Reservasi
							</div>');
			redirect('admin/reservasi');
		}
		$data = [

			'id_user' => $res['id'],
			'terapi' => $terapi,
			'status' => 0,
			'tanggal_terapi' => $tanggal_terapi,
			'date_created' => date('Y-m-d H:i:sa')
		];

		$insert = $this->db->insert('reservasi', $data);
		if ($insert) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Reservasi Berhasil Ditambahkan
							</div>');
			redirect('admin/reservasi');
		}
	}
	public function editReservasi()
	{
		$id 						= $this->input->post('id');
		$terapi 					= $this->input->post('terapi');
		$tanggal_terapi 			= $this->input->post('tanggal_terapi');
		$status 					= $this->input->post('status');


		$data = [


			'terapi' => $terapi,
			'tanggal_terapi' => $tanggal_terapi,
			'status' => $status,
			'date_created' => date('Y-m-d H:i:sa')
		];
		$this->db->where('id', $id);
		$update = $this->db->update('reservasi', $data);
		if ($update) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Reservasi Berhasil Diupdate
							</div>');
			redirect('admin/reservasi');
		}
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

	public function inputRekamMEdis($id_reservasi, $id_pasien)
	{
		$username 				= $this->session->userdata('username');
		$cek_terapi 			= $this->db->get_where('login', ['nama' => $username])->row_array();
		$id_terapi 				= $cek_terapi['id'];
		$id_user 				= $this->input->post('id');
		$mata_kanan_minus 		= $this->input->post('mata_kanan_minus');
		$mata_kiri_minus 		= $this->input->post('mata_kiri_minus');
		$mata_kanan_plus 		= $this->input->post('mata_kanan_plus');
		$mata_kiri_plus 		= $this->input->post('mata_kiri_plus');
		$buta_warna 			= $this->input->post('buta_warna');
		$buta_warna_parsial 	= $this->input->post('buta_warna_parsial');
		$buta_warna_total 		= $this->input->post('buta_warna_total');
		$lampu15Titik 			= $this->input->post('lampu15Titik');
		$lampuTerangGelap 		= $this->input->post('lampuTerangGelap');
		$osilatorListrik 		= $this->input->post('osilatorListrik');
		$stikMagnet 			= $this->input->post('stikMagnet');
		$snelled 				= $this->input->post('snelled');
		$obat 					= $this->input->post('obat');
		$kesimpulan 			= $this->input->post('kesimpulan');

		$data = [
			'id_user' => $id_pasien,
			'id_dokter' => $id_terapi,
			'mata_kanan_minus' => $mata_kanan_minus,
			'mata_kiri_minus' => $mata_kiri_minus,
			'mata_kanan_plus' => $mata_kanan_plus,
			'mata_kiri_plus' => $mata_kiri_plus,
			'buta_warna' => $buta_warna,
			'buta_warna_parsial' => $buta_warna_parsial,
			'buta_warna_total' => $buta_warna_total,
			'lampu15Titik' => $lampu15Titik,
			'lampuTerangGelap' => $lampuTerangGelap,
			'stikMagnet' => $stikMagnet,
			'osilatorListrik' => $osilatorListrik,
			'snelled' => $snelled,
			'obat' => $obat,
			'kesimpulan' => $kesimpulan,
			'tanggal' => date('Y-m-d'),
			'jam' => date('H:i:sa'),
			'layanan' => 'Pemeriksaan Mata',
			'status' => 1,
			'date_created' => date('Y-m-d H:i:sa')
		];
		$data_reservasi = [
			'status' => 1
		];
		$this->db->where('id', $id_reservasi);
		$this->db->update('reservasi', $data_reservasi);

		$res = $this->db->insert('rekam_medis', $data);
		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Rekam Medis Berhasil Ditambahkan
							</div>');
			redirect('admin/pemeriksaan');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Rekam Medis Gagal Ditambahkan
							</div>');
			redirect('admin/pemeriksaan');
		}
	}
	public function updateRekamMEdis($id, $id_user)
	{

		$mata_kanan_minus 		= $this->input->post('mata_kanan_minus');
		$mata_kanan_plus 		= $this->input->post('mata_kanan_plus');
		$mata_kiri_minus 		= $this->input->post('mata_kiri_minus');
		$mata_kiri_plus 		= $this->input->post('mata_kiri_plus');
		$buta_warna 			= $this->input->post('buta_warna');
		$buta_warna_parsial 	= $this->input->post('buta_warna_parsial');
		$buta_warna_total 		= $this->input->post('buta_warna_total');
		$lampu15Titik 			= $this->input->post('lampu15Titik');
		$lampuTerangGelap 		= $this->input->post('lampuTerangGelap');
		$osilatorListrik 		= $this->input->post('osilatorListrik');
		$stikMagnet 			= $this->input->post('stikMagnet');
		$snelled 				= $this->input->post('snelled');
		$obat 					= $this->input->post('obat');
		$kesimpulan 			= $this->input->post('kesimpulan');

		$data = [
			'mata_kanan_minus' 	=> $mata_kanan_minus,
			'mata_kanan_plus' 	=> $mata_kanan_plus,
			'mata_kiri_minus' 	=> $mata_kiri_minus,
			'mata_kiri_plus' 	=> $mata_kiri_plus,
			'buta_warna' => $buta_warna,
			'buta_warna_parsial' => $buta_warna_parsial,
			'buta_warna_total' => $buta_warna_total,
			'lampu15Titik' => $lampu15Titik,
			'lampuTerangGelap' => $lampuTerangGelap,
			'stikMagnet' => $stikMagnet,
			'osilatorListrik' => $osilatorListrik,
			'snelled' => $snelled,
			'obat' => $obat,
			'kesimpulan' => $kesimpulan,
			'tanggal' => date('Y-m-d'),
			'jam' => date('H:i:sa'),
			'layanan' => 'Pemeriksaan Mata',
			'date_modified' => date('Y-m-d H:i:sa')
		];
		$this->db->where('id', $id);
		$res = $this->db->update('rekam_medis', $data);
		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Rekam Medis Berhasil Diupdate
							</div>');
			redirect('admin/kelolaRekamMedis/' . $id . '/' . $id_user);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Rekam Medis Gagal Diupdate
							</div>');
			redirect('admin/kelolaRekamMedis/' . $id . '/' . $id_user);
		}
	}

	public function kelolaRekamMedis($id_reservasi, $id)
	{
		$data['title'] 					= 'Kelola Rekam Medis';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->db->get_where('data_user', ['id' => $id])->result_array();

		$this->db->select('*');
		$this->db->select('rekam_medis.date_created tanggal_periksa');
		$this->db->select('rekam_medis.id id_rekam');
		$this->db->from('rekam_medis');
		$this->db->join('data_terapis', 'data_terapis.id = rekam_medis.id_dokter', 'left');
		$this->db->join('data_user', 'data_user.id = rekam_medis.id_user', 'left');
		$this->db->where('rekam_medis.id_user', $id);
		$this->db->order_by('rekam_medis.date_created', 'DESC');

		$data['rekam_medis']			= $this->db->get()->result_array();

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
		$no_ktp 			= $this->input->post('no_ktp');
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
			'no_ktp'  => $no_ktp,
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
	public function addTerapis()
	{
		$nama 			= $this->input->post('nama');
		$spesialis 		= $this->input->post('spesialis');
		$jabatan 		= $this->input->post('jabatan');


		$data = [
			'nama_terapis'  => $nama,
			'spesialis'  => $spesialis,
			'jabatan'  => $jabatan,
			'date_created' 		=> date('Y-m-d H:i:sa')
		];
		$res = $this->db->insert('data_terapis', $data);
		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Ditambahkan
							</div>');
			redirect('admin/dataTerapis');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Ditambahkan
							</div>');
			redirect('admin/dataTerapis');
		}
	}
	public function addObat()
	{

		$nama_obat 		= $this->input->post('nama_obat');
		$harga 		= $this->input->post('harga');


		$data = [
			'nama_obat'  => $nama_obat,
			'harga'  => $harga,
			'date_created' 		=> date('Y-m-d H:i:sa')
		];
		$res = $this->db->insert('data_obat', $data);
		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Ditambahkan
							</div>');
			redirect('admin/dataObat');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Ditambahkan
							</div>');
			redirect('admin/dataObat');
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
	public function editObat()
	{

		$id 				= $this->input->post('id');
		$nama_obat 			= $this->input->post('nama_obat');
		$harga 				= $this->input->post('harga');
		$data = [
			'nama_obat'  => $nama_obat,
			'harga'  => $harga,
			'date_modified' => date('Y-m-d H:i:sa')
		];
		$this->db->where('id', $id);
		$res = $this->db->update('data_obat', $data);

		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Diupdate
							</div>');
			redirect('admin/dataObat');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Diupdate
							</div>');
			redirect('admin/dataObat');
		}
	}
	public function editTerapis()
	{

		$id 			= $this->input->post('id');
		$nama 			= $this->input->post('nama');
		$spesialis 			= $this->input->post('spesialis');
		$jabatan 		= $this->input->post('jabatan');

		$data = [
			'nama_terapis'  => $nama,
			'spesialis'  => $spesialis,
			'jabatan'  => $jabatan,
			'date_modified' 		=> date('Y-m-d H:i:sa')
		];
		$this->db->where('id', $id);
		$res = $this->db->update('data_terapis', $data);

		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Diupdate
							</div>');
			redirect('admin/dataTerapis');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Diupdate
							</div>');
			redirect('admin/dataTerapis');
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
	public function hapusTerapis()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$res = $this->db->delete('data_terapis');
		if ($res) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function hapusObat()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$res = $this->db->delete('data_obat');
		if ($res) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function hapusRekamMedis()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$res = $this->db->delete('rekam_medis');
		if ($res) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function hapusReservasi()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$res = $this->db->delete('reservasi');
		if ($res) {
			echo 1;
		} else {
			echo 0;
		}
	}


	public function cariPasien()
	{
		$cari = $this->input->post('cari');
		$res = $this->db->get_where('data_user', ['no_ktp' => $cari])->row_array();
		echo json_encode($res);
	}
}
