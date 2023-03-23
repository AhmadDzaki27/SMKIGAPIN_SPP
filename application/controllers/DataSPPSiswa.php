<?php
class DataSPPSiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('id_user')) {
			redirect('Login');
		}
		// if ($this->session->userdata('level') == 'siswa') {
		// 	show_404();
		// }


		$this->load->model('SPPSiswa_Model');
		$this->load->model('DataPembayaranSPP_Model');
		$this->load->model('Siswa_Model');
		$this->load->model('Jenis_Spp_Model');
		$this->load->model('Jurusan_Model');
		$this->load->model('TahunAjaran_Model');
		$this->load->model('Kelas_Model');
		$this->load->library('form_validation');
	}

	public function cariKelas()
	{
		$nisn = $this->input->post('kode_jurusan');
		$kelas = $this->Kelas_Model->getAllData($nisn);
		$html = '';
		foreach ($kelas as $key => $row) {
			$html .= "<option value='$row->kode_kelas'>$row->kode_kelas</option>";
		}
		echo json_encode($html);
	}

	function index()
	{
		if ($this->session->userdata('level') == 'siswa') {
			show_404();
		}
		$data['sppsiswa'] = $this->SPPSiswa_Model->getAllData();
		$data['sppsiswa1'] = $this->Siswa_Model->getAllData();
		$data['jenis_spp'] = $this->Jenis_Spp_Model->getAllData();
		$data['jurusan'] = $this->Jurusan_Model->getAllData();
		$data['tahunajaran'] = $this->TahunAjaran_Model->getAllData();
		$data['kelas'] = $this->Kelas_Model->getAllData();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('sppsiswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function detail_siswa($fromAjax = false)
	{
		$detailSiswa = $this->SPPSiswa_Model->get_detail_siswa($this->input->post('nisn'));
		if ($fromAjax) {
			echo json_encode($detailSiswa);
		}
	}

	public function validation_form()
	{
		if ($this->session->userdata('level') != 'admin') {
			show_404();
		}
		$this->form_validation->set_rules("Nisn", "nisn", "required|is_unique[tbl_spp_siswa.nisn]|max_length[20]");
		$this->form_validation->set_rules("password", "Password", "required");
		$this->form_validation->set_rules("stts", "Status", "callback_check_select_stts");
		$this->form_validation->set_rules("nm_siswa", "Nama", "required");
		$this->form_validation->set_rules("jk_siswa", "Jenis Kelamin", "callback_check_select_jk_siswa");
		$this->form_validation->set_rules("tmpt_lahir", "Tempat Lahir", "required");
		$this->form_validation->set_rules("tgl_lahir", "Tanggal Lahir", "required");
		$this->form_validation->set_rules("almat", "Alamat", "required");
		$this->form_validation->set_rules("telp_siswa", "Telp Siswa", "required");
		$this->form_validation->set_rules("kd_ta", "Kode TA", "callback_check_select_kode_ta");
		// $this->form_validation->set_rules("tahun_keluar", "Tahun keluar", "required");

		$this->form_validation->set_rules("jurusan", "Jurusan", "callback_check_select_jurusan");
		$this->form_validation->set_rules("jenis_spp", "Jenis SPP", "callback_check_select_jenis_spp");


		if (!$this->form_validation->run()) {
			$this->index();
		} else {
			$this->Siswa_Model->tambah_data();
			$this->session->set_flashdata('flash_sppsiswa', 'Disimpan');
			redirect('DataSPPSiswa');
		}
	}

	public function check_select_jk_siswa()
	{
		if ($this->input->post('jk_siswa') == '--Pilih Jenis kelamin--') {
			$this->form_validation->set_message('check_select_jk_siswa', 'pilih jenis kelamin yang benar');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function check_select_stts()
	{
		if ($this->input->post('stts') == '--Pilih Status--') {
			$this->form_validation->set_message('check_select_stts', 'pilih status yang benar');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function check_select_kode_ta()
	{
		if ($this->input->post('kode_ta') == '--Pilih Tahun Masuk--') {
			$this->form_validation->set_message('check_select_kode_ta', 'pilih tahun ajaran yang benar');
			return FALSE;
		} else {
			return TRUE;
		}
	}
	public function check_select_jurusan()
	{
		if ($this->input->post('jurusan') == '--Pilih Jurusan--') {
			$this->form_validation->set_message('check_select_jurusan', 'pilih jurusan yang benar');
			return FALSE;
		} else {
			return TRUE;
		}
	}
	public function check_select_jenis_spp()
	{
		if ($this->input->post('jenis_spp') == '--Pilih Jenis SPP--') {
			$this->form_validation->set_message('check_select_jenis_spp', 'pilih jenis spp yang benar');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	// public function hapus($kd)
	// {
	// 	if ($this->session->userdata('level') != 'admin') {
	// 		show_404();
	// 	}
	// 	$this->Siswa_Model->hapus_data($kd);
	// 	$this->DPPSiswa_Model->hapus_data($kd);
	// 	$this->session->set_flashdata('flash_dppsiswa', 'Dihapus');
	// 	redirect('DataDPPSiswa');
	// }
	public function tampildata()
	{
		$nisn = $this->input->post('nisn');
		$result = $this->SPPSiswa_Model->getSPP($nisn);
		$data['nisn'] = $result->nisn;
		echo json_encode($data);
	}

	public function ubah($kd)
	{
		if ($this->session->userdata('level') != 'admin') {
			show_404();
		}
		$this->form_validation->set_rules("Nisn", "nisn", "required|max_length[20]");
		$this->form_validation->set_rules("password", "Password", "required");
		$this->form_validation->set_rules("nm_siswa", "Nama", "required");
		$this->form_validation->set_rules("jk_siswa", "Jenis Kelamin");
		$this->form_validation->set_rules("tmpt_lahir", "Tempat Lahir");
		$this->form_validation->set_rules("tgl_lahir", "Tanggal Lahir");
		$this->form_validation->set_rules("almat", "Alamat");
		$this->form_validation->set_rules("telp_siswa", "Telp Siswa");
		$this->form_validation->set_rules("kd_ta", "Kode TA");
		$this->form_validation->set_rules("jurusan", "Jurusan");
		$this->form_validation->set_rules("jenis_spp", "Jenis SPP");

		if ($this->form_validation->run() == FALSE) {
			$data['ubah'] = $this->SPPSiswa_Model->detail_data($kd);
			$data['ubah1'] = $this->Siswa_Model->detail_data($kd);
			$data['tahunajaran'] = $this->TahunAjaran_Model->getAllData();
			$data['jurusan'] = $this->Jurusan_Model->getAllData();
			$data['jenis_spp'] = $this->Jenis_Spp_Model->getAllData();
			$data['kelas'] = $this->Kelas_Model->getAllData();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('sppsiswa/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->session->set_flashdata('flash_sppsiswa', 'DiUbah');
			redirect('DataSPPSiswa');
		}
	}
	public function ubahsiswa($kd)
	{
		if ($this->session->userdata('level') == 'siswa') {
			if ($this->session->userdata('id_user') != $kd) {
				show_404();
			}
		}

		$this->form_validation->set_rules("Nisn", "nisn", "required|max_length[10]");
		$this->form_validation->set_rules("password", "Password", "required");
		$this->form_validation->set_rules("nm_siswa", "Nama", "required");
		$this->form_validation->set_rules("jk_siswa", "Jenis Kelamin");
		$this->form_validation->set_rules("tmpt_lahir", "Tempat Lahir");
		$this->form_validation->set_rules("tgl_lahir", "Tanggal Lahir");
		$this->form_validation->set_rules("almat", "Alamat");
		$this->form_validation->set_rules("telp_siswa", "Telp Siswa");
		$this->form_validation->set_rules("kd_ta", "Kode TA");
		// $this->form_validation->set_rules("tahun_keluar", "Tahun keluar", "required");
		$this->form_validation->set_rules("jurusan", "Jurusan");
		$this->form_validation->set_rules("jenis_spp", "Jenis SPP");


		if ($this->form_validation->run() == FALSE) {
			$data['ubah'] = $this->SPPSiswa_Model->detail_data($kd);
			$data['ubah1'] = $this->Siswa_Model->detail_data($kd);
			$data['tahunajaran'] = $this->TahunAjaran_Model->getAllData();
			$data['jurusan'] = $this->Jurusan_Model->getAllData();
			$data['jenis_spp'] = $this->Jenis_Spp_Model->getAllData();
			$data['kelas'] = $this->Kelas_Model->getAllData();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('sppsiswa/ubahsiswa', $data);
			$this->load->view('templates/footer');
		} else {

			$this->Siswa_Model->ubah_data();
			$this->session->set_flashdata('flash_sppsiswa', 'DiUbah');
			redirect('Welcome');
		}
	}
	
	public function hapus()
	{
		if ($this->session->userdata('level') != 'admin') {
			show_404();
		}
		$id = $this->input->post('id');
		$this->Siswa_Model->hapus_data($id);
		$this->SPPSiswa_Model->hapus_data($id);

		$this->session->set_flashdata('flash_jurusan', 'Dihapus');
	}

	public function checkForeign()
	{
		$data = $this->Siswa_Model->checkForeign($this->input->post('id'));
		echo json_encode($data);
	}

	public function detailTransaksi($nisn)
	{
		$result = $this->DataPembayaranSPP_Model->getDataSIswaJoinJenisSPPByNISN($nisn);
		$data = [
			'nisn' => $nisn,
			'nama_siswa' => $result->nama_siswa,
			'dataSiswa' => $this->Siswa_Model->detail_data($nisn),
			'ganjil' => [7 => 'Juli', 8 => 'Agustus', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'],
			'genap' => [1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April', 5 => 'Mei', 6 => 'Juni'],
			'tahunAjaran' => $this->DataPembayaranSPP_Model->getTagihanSPP($result->kode_ta, $result->tahun_keluar),
			'pembayaran' => $this->DataPembayaranSPP_Model->DetailDataPembayaranSPP($nisn)
		];

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('sppsiswa/detailTransaksi', $data);
		$this->load->view('templates/footer');
	}
}
