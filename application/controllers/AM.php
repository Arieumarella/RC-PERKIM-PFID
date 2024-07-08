<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AM extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		if ($this->session->userdata('sts_login') != true) {

			$this->session->set_flashdata('psn', '
				<div class="alert alert-important alert-danger alert-dismissible" role="alert">
				<div class="d-flex">
				<div>
				<svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
				</div>
				<div>
				Anda Belum Login/Sessi Login Anda Telah Berakhir.!
				</div>
				</div>
				<a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
				</div>
				');

			redirect('/Login', 'refresh');
			return;
		}

		$this->load->model('M_dinamis');
		$this->load->model('M_rc24');
	}


	public function index($kdsatker = null)
	{

		if ($this->session->userdata('rkdak_prive') == '1') {
			$kdsatker = $this->session->userdata('rkdak_kdsat');
		}

		$tmp = array(
			'tittle' => 'Air Minum',
			'tittle_header' => 'Air Minum',
			'content' => 'am',
			'kdsatker' => $kdsatker,
			'kdkabkota' => kdkabkota($kdsatker),
			'dataProvinsi' => $this->M_rc24->getDataProvinsiAM()
		);

		if ($this->session->userdata('rkdak_prive') == '1') {

			$kdlokasi = kdlokasi($kdsatker);
			$kdkabkota = kdkabkota($kdsatker);
			$kdbidang = kdbidang($kdsatker);

			$tmp['dataTabel'] = $this->M_rc24->getDataTable($kdlokasi, $kdsatker);
			$tmp['nmProvinsi'] = strtoupper('PROVINSI '.getProvinsiByRow($kdlokasi)->NMLOKASI);
			$tmp['nmkabkota'] = strtoupper(getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA);
			$tmp['dataHeader'] = $this->M_rc24->getDataHeader($kdlokasi, $kdkabkota);
			$tmp['dataKecamatan'] = $this->M_rc24->getDataKecamatan($kdlokasi, $kdkabkota);
			$tmp['dataRispam'] = $this->M_rc24->getDataRispam($kdlokasi, $kdkabkota);

			if ($kdkabkota == '00') {
				$tmp['dataKabKota'] = $this->M_rc24->getKabKota($kdlokasi);
			}

		}

		$this->load->view('tamplate/baseTamplate', $tmp);
	}

	public function simpanFileAm()
	{
		
		$kdkec = $this->input->post('kdkec');
		$kddesa = $this->input->post('kddesa');
		$kdsatker = $this->session->userdata('rkdak_kdsat');
		$kdlokasi = kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);
		$ta = $this->session->userdata('thang');


		$nmProv = getProvinsiByRow($kdlokasi)->NMLOKASI;
		$nmKab = getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA;
		$nmKecamatan = getKecamatan($kdlokasi, $kdkabkota, $kdkec)->nmkec;
		$nmDesa = getdesa($kdlokasi, $kdkabkota, $kdkec, $kddesa)->nmdesa;

		$nmFileGagalUpload = '';


		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_'.date('Y-m-d').'_'.time().'.pdf';
		$config['max_size'] = 10000;
		$this->load->library('upload', $config);

		$dataArray = array(
			'ded' => 'DED',
			'rab' => 'RAB',
			'k_lahan' => 'Kesediaan Lahan',
			'penerima_manfaat' => 'Penerima Manfaat',
			'k_lembaga' => 'Kesiapan Lembaga Pengelola',
			'pks' => 'PKS (Perjanjian Kerja Sama) & Skema pembagian pendanaan',
			'kelayakan_justek' => 'Studi Kelayakan atau Feasibility Study (FS) atau Justifikasi Teknis (Justek)'
		);

		$dataInsert = array(
			'kdlokasi' => $kdlokasi,
			'kdkabkota' => $kdkabkota,
			'kdkec' => $kdkec,
			'kddesa' => $kddesa,
			'created_at' => date('Y-m-d H:i:s')
		);


		foreach ($dataArray as $key => $value) {

			if (!empty($_FILES[$key]['name'])) {

				if (!file_exists('./assets/RC')) {
					mkdir('./assets/RC');
				}

				if (!file_exists("./assets/RC/$ta")) {
					mkdir("./assets/RC/$ta");
				}

				if (!file_exists("./assets/RC/$ta/Air Minum")) {
					mkdir("./assets/RC/$ta/Air Minum");
				}

				if (!file_exists("./assets/RC/$ta/Air Minum/$nmProv")) {
					mkdir("./assets/RC/$ta/Air Minum/$nmProv");
				}

				if (!file_exists("./assets/RC/$ta/Air Minum/$nmProv/$nmKab")) {
					mkdir("./assets/RC/$ta/Air Minum/$nmProv/$nmKab");
				}

				if (!file_exists("./assets/RC/$ta/Air Minum/$nmProv/$nmKab/$nmKecamatan")) {
					mkdir("./assets/RC/$ta/Air Minum/$nmProv/$nmKab/$nmKecamatan");
				}

				if (!file_exists("./assets/RC/$ta/Air Minum/$nmProv/$nmKab/$nmKecamatan/$nmDesa")) {
					mkdir("./assets/RC/$ta/Air Minum/$nmProv/$nmKab/$nmKecamatan/$nmDesa");
				}

				if (!file_exists("./assets/RC/$ta/Air Minum/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value")) {
					mkdir("./assets/RC/$ta/Air Minum/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value");
				}

				$path = "./assets/RC/$ta/Air Minum/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value/";

				$pathX = $_FILES[$key]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_'.date('Y-m-d').'_'.time().'.'.$ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)){

					$nmFileGagalUpload .= '   File '.$value.'  '.$this->upload->display_errors().',';

				}else{

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];

					$dataInsert[$key] = $fullPath;

				}


			}

		}

		$this->M_dinamis->save('t_rc_am', $dataInsert);

		if ($nmFileGagalUpload != '') {
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> '.$nmFileGagalUpload.' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}else{
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Foto Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('AM', 'refresh');

	}


	public function simpanFileAmEdit()
	{
		
		$idEdit = $this->input->post('idEdit');
		$kdkec = $this->input->post('idEditDKec');
		$kddesa = $this->input->post('idEditDesa');
		$ta = $this->session->userdata('thang');

		$kdsatker = $this->session->userdata('rkdak_kdsat');
		$kdlokasi = kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);


		$nmProv = getProvinsiByRow($kdlokasi)->NMLOKASI;
		$nmKab = getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA;
		$nmKecamatan = getKecamatan($kdlokasi, $kdkabkota, $kdkec)->nmkec;
		$nmDesa = getdesa($kdlokasi, $kdkabkota, $kdkec, $kddesa)->nmdesa;


		$nmFileGagalUpload = '';


		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_'.date('Y-m-d').'_'.time().'.pdf';
		$config['max_size'] = 10000;
		$this->load->library('upload', $config);

		$dataArray = array(
			'ded_edit' => 'DED',
			'rab_edit' => 'RAB',
			'k_lahan_edit' => 'Kesediaan Lahan',
			'penerima_manfaat_edit' => 'Penerima Manfaat',
			'k_lembaga_edit' => 'Kesiapan Lembaga Pengelola',
			'pks_edit' => 'PKS (Perjanjian Kerja Sama) & Skema pembagian pendanaan',
			'kelayakan_justek_edit' => 'Studi Kelayakan atau Feasibility Study (FS) atau Justifikasi Teknis (Justek)'
		);

		$dataInsert = array(
			
			'updated_at' => date('Y-m-d H:i:s')
		);


		foreach ($dataArray as $key => $value) {

			if (!empty($_FILES[$key]['name'])) {

				if (!file_exists('./assets/RC')) {
					mkdir('./assets/RC');
				}

				if (!file_exists("./assets/RC/$ta")) {
					mkdir("./assets/RC/$ta");
				}

				if (!file_exists("./assets/RC/$ta/Air Minum")) {
					mkdir("./assets/RC/$ta/Air Minum");
				}

				if (!file_exists("./assets/RC/$ta/Air Minum/$nmProv")) {
					mkdir("./assets/RC/$ta/Air Minum/$nmProv");
				}

				if (!file_exists("./assets/RC/$ta/Air Minum/$nmProv/$nmKab")) {
					mkdir("./assets/RC/$ta/Air Minum/$nmProv/$nmKab");
				}

				if (!file_exists("./assets/RC/$ta/Air Minum/$nmProv/$nmKab/$nmKecamatan")) {
					mkdir("./assets/RC/$ta/Air Minum/$nmProv/$nmKab/$nmKecamatan");
				}

				if (!file_exists("./assets/RC/$ta/Air Minum/$nmProv/$nmKab/$nmKecamatan/$nmDesa")) {
					mkdir("./assets/RC/$ta/Air Minum/$nmProv/$nmKab/$nmKecamatan/$nmDesa");
				}

				if (!file_exists("./assets/RC/$ta/Air Minum/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value")) {
					mkdir("./assets/RC/$ta/Air Minum/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value");
				}

				$path = "./assets/RC/$ta/Air Minum/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value/";

				$pathX = $_FILES[$key]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_'.date('Y-m-d').'_'.time().'.'.$ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)){

					$nmFileGagalUpload .= '   File '.$value.'  '.$this->upload->display_errors().',';

				}else{

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];


					if ($key == 'ded_edit') {
						$dataInsert['ded'] = $fullPath;
					}

					if ($key == 'rab_edit') {
						$dataInsert['rab'] = $fullPath;
					}

					if ($key == 'k_lahan_edit') {
						$dataInsert['k_lahan'] = $fullPath;
					}

					if ($key == 'penerima_manfaat_edit') {
						$dataInsert['penerima_manfaat'] = $fullPath;
					}

					if ($key == 'k_lembaga_edit') {
						$dataInsert['k_lembaga'] = $fullPath;
					}

					if ($key == 'pks_edit') {
						$dataInsert['pks'] = $fullPath;
					}


					if ($key == 'kelayakan_justek_edit') {
						$dataInsert['kelayakan_justek'] = $fullPath;
					}

				}


			}

		}



		$this->M_dinamis->update('t_rc_am', $dataInsert, ['id' => $idEdit]);

		if ($nmFileGagalUpload != '') {
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> '.$nmFileGagalUpload.' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}else{
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Foto Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('AM', 'refresh');

	}


	public function simpanDokHeaderSan()
	{
		$kdsatker = $this->session->userdata('rkdak_ket');

		$kdlokasi = kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);
		$nmProv = getProvinsiByRow($kdlokasi)->NMLOKASI;
		$nmKab = getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA;
		$ta = $this->session->userdata('thang');
		
		$nmFileGagalUpload = '';

		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_'.date('Y-m-d').'_'.time().'.pdf';
		$config['max_size'] = 10000;
		$this->load->library('upload', $config);

		$dataArray = array(
			'sptjm' => 'SPTJM',
			'ssk' => 'SSK',
			'ba' => 'BA Konreg',
			'komitmen_SSK' => 'Komitmen SSK',
			'ba_simoni' => 'BA Simoni',
			'stanting' => 'Update SK Stunting'
		);


		foreach ($dataArray as $key => $value) {

			if (!empty($_FILES[$key]['name'])) {

				if (!file_exists('./assets/RC-PERKIM-HEADER')) {
					mkdir('./assets/RC-PERKIM-HEADER');
				}

				if (!file_exists("./assets/RC-PERKIM-HEADER/$ta")) {
					mkdir("./assets/RC-PERKIM-HEADER/$ta");
				}

				if (!file_exists("./assets/RC-PERKIM-HEADER/$ta/Sanitasi")) {
					mkdir("./assets/RC-PERKIM-HEADER/$ta/Sanitasi");
				}

				if (!file_exists("./assets/RC-PERKIM-HEADER/$ta/Sanitasi/$nmProv")) {
					mkdir("./assets/RC-PERKIM-HEADER/$ta/Sanitasi/$nmProv");
				}

				if (!file_exists("./assets/RC-PERKIM-HEADER/$ta/Sanitasi/$nmProv/$nmKab")) {
					mkdir("./assets/RC-PERKIM-HEADER/$ta/Sanitasi/$nmProv/$nmKab");
				}

				if (!file_exists("./assets/RC-PERKIM-HEADER/$ta/Sanitasi/$nmProv/$nmKab/$value")) {
					mkdir("./assets/RC-PERKIM-HEADER/$ta/Sanitasi/$nmProv/$nmKab/$value");
				}

				

				$path = "./assets/RC-PERKIM-HEADER/$ta/Sanitasi/$nmProv/$nmKab/$value/";

				$pathX = $_FILES[$key]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_'.date('Y-m-d').'_'.time().'.'.$ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)){

					$nmFileGagalUpload .= '   File '.$value.'  '.$this->upload->display_errors().',';

				}else{

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];

					if ($key == 'sptjm') {
						$jns_upload = 'sptjm-san';
					}

					if ($key == 'ssk') {
						$jns_upload = 'ssk-san';
					}

					if ($key == 'ba') {
						$jns_upload = 'ba-san';
					}

					if ($key == 'komitmen_SSK') {
						$jns_upload = 'komitmen-ssk-san';
					}

					if ($key == 'ba_simoni') {
						$jns_upload = 'ba-simoni-san';
					}

					if ($key == 'stanting') {
						$jns_upload = 'stanting-simoni-san';
					}


					


					$dataInsert = array(
						'kdlokasi' => $kdlokasi,
						'kdkabkota' => $kdkabkota,
						'jns_bidang' => 'san',
						'jns_upload' => $jns_upload,
						'path' => $fullPath,
						'sts_verifikasi' => '0',
						'created_at' => date('Y-m-d H:i:s')
					);

					$whereDelete = array(
						'kdlokasi' => $kdlokasi,
						'kdkabkota' => $kdkabkota,
						'jns_bidang' => 'san',
						'jns_upload' => $jns_upload,
					);

					$this->M_dinamis->delete('t_rc_perkim', $whereDelete);
					$this->M_dinamis->save('t_rc_perkim', $dataInsert);

				}


			}

		}


		if ($nmFileGagalUpload != '') {
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> '.$nmFileGagalUpload.' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}else{
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Foto Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('AM', 'refresh');
	}

	public function simpanDokHeader()
	{
		$kdsatker = $this->session->userdata('rkdak_ket');

		$kdlokasi = kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);
		$nmProv = getProvinsiByRow($kdlokasi)->NMLOKASI;
		$nmKab = getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA;
		$ta = $this->session->userdata('thang');
		
		$nmFileGagalUpload = '';

		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_'.date('Y-m-d').'_'.time().'.pdf';
		$config['max_size'] = 10000;
		$this->load->library('upload', $config);

		$dataArray = array(
			'sptjm' => 'SPTJM',
			'rispam' => 'RISPAM',
			'ba' => 'BA Konreg',
			'komitmen_rispam' => 'Komitmen Rispam',
			'ba_simoni' => 'BA SIMONI',
			'stunting' => 'Update SK Stunting',
			'komiteKepalaDaerah' => 'komiteKepalaDaerah'
		);


		foreach ($dataArray as $key => $value) {

			if (!empty($_FILES[$key]['name'])) {

				if (!file_exists('./assets/RC-PERKIM-HEADER')) {
					mkdir('./assets/RC-PERKIM-HEADER');
				}

				if (!file_exists("./assets/RC-PERKIM-HEADER/$ta")) {
					mkdir("./assets/RC-PERKIM-HEADER/$ta");
				}

				if (!file_exists("./assets/RC-PERKIM-HEADER/$ta/Air Minum")) {
					mkdir("./assets/RC-PERKIM-HEADER/$ta/Air Minum");
				}

				if (!file_exists("./assets/RC-PERKIM-HEADER/$ta/Air Minum/$nmProv")) {
					mkdir("./assets/RC-PERKIM-HEADER/$ta/Air Minum/$nmProv");
				}

				if (!file_exists("./assets/RC-PERKIM-HEADER/$ta/Air Minum/$nmProv/$nmKab")) {
					mkdir("./assets/RC-PERKIM-HEADER/$ta/Air Minum/$nmProv/$nmKab");
				}

				if (!file_exists("./assets/RC-PERKIM-HEADER/$ta/Air Minum/$nmProv/$nmKab/$value")) {
					mkdir("./assets/RC-PERKIM-HEADER/$ta/Air Minum/$nmProv/$nmKab/$value");
				}

				

				$path = "./assets/RC-PERKIM-HEADER/$ta/Air Minum/$nmProv/$nmKab/$value/";

				$pathX = $_FILES[$key]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_'.date('Y-m-d').'_'.time().'.'.$ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)){

					$nmFileGagalUpload .= '   File '.$value.'  '.$this->upload->display_errors().',';

				}else{

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];


					$dataInsert = array(
						'kdlokasi' => $kdlokasi,
						'kdkabkota' => $kdkabkota,
						'jns_bidang' => 'AM',
						'jns_upload' => $key,
						'path' => $fullPath,
						'sts_verifikasi' => '0',
						'created_at' => date('Y-m-d H:i:s')
					);

					$whereDelete = array(
						'kdlokasi' => $kdlokasi,
						'kdkabkota' => $kdkabkota,
						'jns_bidang' => 'AM',
						'jns_upload' => $key,
					);

					$this->M_dinamis->delete('t_rc_perkim', $whereDelete);
					$this->M_dinamis->save('t_rc_perkim', $dataInsert);

				}


			}

		}


		if ($nmFileGagalUpload != '') {
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> '.$nmFileGagalUpload.' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}else{
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Foto Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('AM', 'refresh');
	}


	public function getDataTable()
	{
		$kdlokasi = $this->input->post('kdlokasi');
		$kdkabkota = $this->input->post('kdkabkota');

		$data = $this->M_rc24->getDataTable($kdlokasi, $kdkabkota);
		$kdkabkotaX = kdkabkota($kdkabkota);
		$dataHeader = $this->M_rc24->getDataHeader($kdlokasi, $kdkabkotaX);
		$dataRispam = $this->M_rc24->getDataRispam($kdlokasi, $kdkabkotaX);

		echo json_encode(['dataHeader' => $dataHeader, 'dataBody' => $data, 'dataRispam' => $dataRispam]);
	}


	public function hapusAm()
	{
		$id = $this->input->post('id');

		$pros = $this->M_dinamis->delete('t_rc_am', ['id' => $id]);
		echo json_encode(['code' => ($pros == true) ? '200':'500']);
	}

	public function getDataDesa()
	{
		$kdkec = $this->input->post('idkec');
		$kdsatker = $this->session->userdata('rkdak_kdsat');

		if ($this->session->userdata('rkdak_priv') == '1') {
			
			$kdlokasi = kdlokasi($kdsatker);
			$kdkabkota = kdkabkota($kdsatker);

			if ($kdkabkota == '00') {
				$kdkabkota = $this->input->post('kdkabkotaX');
			}

		}else{

			$kdlokasi = $this->input->post('kdlokasi');
			$kdsatker = $this->input->post('kdkabkota');
			$kdkabkota = kdkabkota($kdsatker);

		}

		$data = $this->M_rc24->detDesa($kdlokasi, $kdkabkota, $kdkec);

		echo json_encode($data);
	}



	public function getKabKotaByKdlokasi()
	{
		$kdlokasi = $this->input->post('kdlokasi');

		$data = $this->M_rc24->getKabKota($kdlokasi);

		echo json_encode($data);
	}


	public function getKecamatanByProvinsi()
	{
		$kdkabkota = $this->input->post('kdkabkota');
		$kdsatker = $this->session->userdata('rkdak_kdsat');
		$kdlokasi =  kdlokasi($kdsatker);
		$kdkabkotaByKdsatker = kdbidang($kdsatker);
		$kdBidang = kdbidang($kdsatker);

		$data = $this->M_rc24->getDataKecamatan($kdlokasi, $kdkabkota);

		echo json_encode($data);

	}

}
