<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SAN extends CI_Controller {

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
			'tittle' => 'Sanitasi',
			'tittle_header' => 'Sanitasi',
			'content' => 'Sanitasi',
			'kdsatker' => $kdsatker,
			'dataProvinsi' => $this->M_rc24->getDataProvinsiSan()
		);


		if ($this->session->userdata('rkdak_prive') == '1') {

			$kdlokasi = kdlokasi($kdsatker);
			$kdkabkota = kdkabkota($kdsatker);
			$kdbidang = kdbidang($kdsatker);

			$tmp['dataSanIpal'] = $this->M_rc24->getDataTabelSanIpal($kdlokasi, $kdkabkota, $kdsatker);
			$tmp['dataSanIPLT'] = $this->M_rc24->getDataTabelSanIplt($kdlokasi, $kdkabkota, $kdsatker);
			$tmp['dataSanPembangunanBaru'] = $this->M_rc24->getDataTabelSanPembangunanBaru($kdlokasi, $kdkabkota, $kdsatker);
			$tmp['dataSanRehabilitasi'] = $this->M_rc24->getDataTabelSanRehabilitasi($kdlokasi, $kdkabkota);
			$tmp['dataSanPembangunan'] = $this->M_rc24->getDataTabelSanPembangunan($kdlokasi, $kdkabkota);
			$tmp['nmProvinsi'] = strtoupper('PROVINSI ' . getProvinsiByRow($kdlokasi)->NMLOKASI);
			$tmp['nmkabkota'] = strtoupper(getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA);
			$tmp['dataHeader'] = $this->M_rc24->getDataHeaderSan($kdlokasi, $kdkabkota);
			$tmp['dataKabKota'] = $this->M_rc24->getDataKabKota($kdlokasi);
			$tmp['dataKecamatan'] = $this->M_rc24->getDataKecamatan($kdlokasi, $kdkabkota);
		}


		$this->load->view('tamplate/baseTamplate', $tmp);
	}


	public function getDataDesa()
	{
		$kdkec = $this->input->post('idkec');
		$kdsatker = $this->session->userdata('rkdak_kdsat');

		if ($this->session->userdata('rkdak_priv') == '1') {

			$kdlokasi = kdlokasi($kdsatker);
			$kdkabkota = kdkabkota($kdsatker);

			if ($this->session->userdata('is_provinsi')) {
				$kdkabkota = $this->input->post('idkabKota');
			}
		} else {

			$kdlokasi = $this->input->post('kdlokasi');
			$kdsatker = $this->input->post('kdkabkota');
			$kdkabkota = kdkabkota($kdsatker);
		}

		$data = $this->M_rc24->detDesa($kdlokasi, $kdkabkota, $kdkec);

		echo json_encode($data);
	}


	public function getDataDesaIplt()
	{
		$kdkec = $this->input->post('idkec');
		$kdsatker = $this->session->userdata('rkdak_kdsat');

		if ($this->session->userdata('rkdak_priv') == '1') {

			$kdlokasi = kdlokasi($kdsatker);
			$kdkabkota = kdkabkota($kdsatker);

			if ($this->session->userdata('is_provinsi')) {
				$kdkabkota = $this->input->post('idkabKota');
			}
		} else {

			$kdlokasi = $this->input->post('kdlokasi');
			$kdsatker = $this->input->post('kdkabkota');
			$kdkabkota = kdkabkota($kdsatker);
		}

		$data = $this->M_rc24->detDesa($kdlokasi, $kdkabkota, $kdkec);

		echo json_encode($data);
	}


	public function getDataTableSan()
	{
		$kdlokasi = $this->input->post('kdlokasi');
		$kdkabkota = $this->input->post('kdkabkota');
		$kdsatkerSession = $this->session->userdata('rkdak_kdsat');

		$kdkabkota = kdkabkota($kdkabkota);

		$Ipal = $this->M_rc24->getDataTabelSanIpal($kdlokasi, $kdkabkota,'');
		$dataIPLT = $this->M_rc24->getDataTabelSanIplt($kdlokasi, $kdkabkota, '');
		$PembangunanBaru = $this->M_rc24->getDataTabelSanPembangunanBaru($kdlokasi, $kdkabkota,'');
		$rehabilitasi = $this->M_rc24->getDataTabelSanRehabilitasi($kdlokasi, $kdkabkota);
		$pembangunan = $this->M_rc24->getDataTabelSanPembangunan($kdlokasi, $kdkabkota);

		$dataHeader = $this->M_rc24->getDataHeaderSan($kdlokasi, $kdkabkota);

		echo json_encode(['dataHeader' => $dataHeader, 'ipal' => $Ipal, 'iplt' => $dataIPLT, 'pembangunanBaru' => $PembangunanBaru, 'rehabilitasi' => $rehabilitasi, 'pembangunan' => $pembangunan]);
	}


	public function getKabKotaByKdlokasi()
	{
		$kdlokasi = $this->input->post('kdlokasi');

		$data = $this->M_rc24->getKabKota($kdlokasi);

		echo json_encode($data);
	}

	public function hapusIpal()
	{
		$id = $this->input->post('id');

		$pros = $this->M_dinamis->delete('t_rc_san_ipal', ['id' => $id]);
		echo json_encode(['code' => ($pros == true) ? '200' : '500']);
	}


	public function hapusIplt()
	{
		$id = $this->input->post('id');

		$pros = $this->M_dinamis->delete('t_rc_san_iplt', ['id' => $id]);
		echo json_encode(['code' => ($pros == true) ? '200' : '500']);
	}


	public function hapusPembangunanBaru()
	{
		$id = $this->input->post('id');

		$pros = $this->M_dinamis->delete('t_rc_san_pembangunan_baru', ['id' => $id]);
		echo json_encode(['code' => ($pros == true) ? '200' : '500']);
	}


	public function hapusRehabilitasi()
	{
		$id = $this->input->post('id');

		$pros = $this->M_dinamis->delete('t_rc_san_rehabilitasi', ['id' => $id]);
		echo json_encode(['code' => ($pros == true) ? '200' : '500']);
	}


	public function hapusPembangunan()
	{
		$id = $this->input->post('id');

		$pros = $this->M_dinamis->delete('t_rc_san_pembangunan', ['id' => $id]);
		echo json_encode(['code' => ($pros == true) ? '200' : '500']);
	}

	public function hapusDakIntegrasi()
	{
		$id = $this->input->post('id');

		$pros = $this->M_dinamis->delete('t_rc_perumahan', ['id' => $id]);
		echo json_encode(['code' => ($pros == true) ? '200' : '500']);
	}


	public function simpanFileSan()
	{
		$kdlokasi = $this->input->post('kdlokasi');
		$kdkabkota = $this->input->post('kdkabkota');
		$kdkec = $this->input->post('kdkec');
		$kddesa = $this->input->post('kddesa');
		$ta = $this->session->userdata('thang');

		$nmProv = getProvinsiByRow($kdlokasi)->NMLOKASI;
		$nmKab = getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA;
		$nmKecamatan = getKecamatan($kdlokasi, $kdkabkota, $kdkec)->nmkec;
		$nmDesa = getdesa($kdlokasi, $kdkabkota, $kdkec, $kddesa)->nmdesa;

		$nmFileGagalUpload = '';


		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.pdf';
		$config['max_size'] = 10000;
		$this->load->library('upload', $config);

		$dataArray = array(
			'ded' => 'DED',
			'rab' => 'RAB',
			'spesifikasi' => 'SPESIFIKASI TEKNIS TRUCK TINJA',
			'kesiapan_lahan' => 'BUKTI KESIAPAN LAHAN',
			'penerima_manfaat' => 'DAFTAR CALON PENERIMA MANFAAT',
			'bp' => 'BUSINESS PLAN TPS3R',
			'kesiapan_desa' => 'SURAT PERNYATAAN KESIAPAN DESA'
		);


		foreach ($dataArray as $key => $value) {

			if (!empty($_FILES[$key]['name'])) {

				if (!file_exists('./assets/RC')) {
					mkdir('./assets/RC');
				}

				if (!file_exists("./assets/RC/$ta")) {
					mkdir("./assets/RC/$ta");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi")) {
					mkdir("./assets/RC/$ta/sanitasi");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi/$nmProv")) {
					mkdir("./assets/RC/$ta/sanitasi/$nmProv");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi/$nmProv/$nmKab")) {
					mkdir("./assets/RC/$ta/sanitasi/$nmProv/$nmKab");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi/$nmProv/$nmKab/$nmKecamatan")) {
					mkdir("./assets/RC/$ta/sanitasi/$nmProv/$nmKab/$nmKecamatan");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi/$nmProv/$nmKab/$nmKecamatan/$nmDesa")) {
					mkdir("./assets/RC/$ta/sanitasi/$nmProv/$nmKab/$nmKecamatan/$nmDesa");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value")) {
					mkdir("./assets/RC/$ta/sanitasi/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value");
				}

				$path = "./assets/RC/$ta/sanitasi/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value/";

				$pathX = $_FILES[$key]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.' . $ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)) {

					$nmFileGagalUpload .= '   File ' . $value . '  ' . $this->upload->display_errors() . ',';
				} else {

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];

					if ($key == 'ded') {
						$jns_upload = 'ded-san';
					}

					if ($key == 'rab') {
						$jns_upload = 'rab-san';
					}

					if ($key == 'spesifikasi') {
						$jns_upload = 'spesifikasi-san';
					}

					if ($key == 'kesiapan_lahan') {
						$jns_upload = 'bkl-san';
					}

					if ($key == 'penerima_manfaat') {
						$jns_upload = 'penerimaManfaat-san';
					}

					if ($key == 'bp') {
						$jns_upload = 'bp-san';
					}

					if ($key == 'kesiapan_desa') {
						$jns_upload = 'spkd-san';
					}


					$dataInsert = array(
						'kdlokasi' => $kdlokasi,
						'kdkabkota' => $kdkabkota,
						'kdkec' => $kdkec,
						'kddesa' => $kddesa,
						'jns_bidang' => 'SAN',
						'jns_upload' => $jns_upload,
						'path' => $fullPath,
						'sts_verifikasi' => '0',
						'created_at' => date('Y-m-d H:i:s')
					);

					$whereDelete = array(
						'kdlokasi' => $kdlokasi,
						'kdkabkota' => $kdkabkota,
						'kdkec' => $kdkec,
						'kddesa' => $kddesa,
						'jns_bidang' => 'SAN',
						'jns_upload' => $jns_upload,
					);

					$this->M_dinamis->delete('t_rc_perkim', $whereDelete);
					$this->M_dinamis->save('t_rc_perkim', $dataInsert);
				}
			}
		}


		if ($nmFileGagalUpload != '') {
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> ' . $nmFileGagalUpload . ' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Foto Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('SAN', 'refresh');
	}


	public function simpanFileSanIpal()
	{

		$kdsatkerSession = $this->session->userdata('rkdak_kdsat');
		$kdlokasiSession =  kdlokasi($kdsatkerSession);
		$kdkabkotaSession = kdkabkota($kdsatkerSession);

		$kdsatker = $this->session->userdata('is_provinsi') ? "03".$kdlokasiSession.$this->input->post('klikKabKota_ipal').'04' : $this->session->userdata('rkdak_kdsat');
		$kdlokasi =  kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);
		$kdkec = $this->input->post('kdkec_ipal');
		$kddesa = $this->input->post('kddesa_ipal');
		$ta = $this->session->userdata('thang');

		$nmProv = getProvinsiByRow($kdlokasi)->NMLOKASI;
		$nmKab = getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA;
		$nmKecamatan = getKecamatan($kdlokasi, $kdkabkota, $kdkec)->nmkec;
		$nmDesa = getdesa($kdlokasi, $kdkabkota, $kdkec, $kddesa)->nmdesa;

		$nmFileGagalUpload = '';


		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.pdf';
		$config['max_size'] = 10000;
		$this->load->library('upload', $config);

		$dataArray = array(
			'ded_ipal' => 'DED',
			'rab_ipal' => 'RAB',
			'k_lahan_ipal' => 'Surat Pernyataan Kesiapan Pelaksanaan Kegiatan dari Pemerintah Desa',
			'penerima_manfaat_ipal' => 'Daftar calon penerima manfaat',
			'k_lahan_dinas_ipal' => 'Surat Pernyataan Kesiapan Pelaksanaan Kegiatan dari Dinas Kabupaten',
			'spesifikasi_ipal' => 'Bukti Kepemilikan dan keberfungsian IPLT',
			'abd' => 'As Build Drowing',
			'justekPipa' => 'Justifikasi teknis untuk penambahan pipa pengumpul'
		);


		$dataInsert = array(
			'kdlokasi' => $kdlokasi,
			'kdkabkota' => $kdkabkota,
			'kdkec' => $kdkec,
			'kddesa' => $kddesa,
			'kdkabkota_penginput' => $this->session->userdata('is_provinsi') ? $this->session->userdata('rkdak_kdsat'):'',
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

				if (!file_exists("./assets/RC/$ta/sanitasi-ipal")) {
					mkdir("./assets/RC/$ta/sanitasi-ipal");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-ipal/$nmProv")) {
					mkdir("./assets/RC/$ta/sanitasi-ipal/$nmProv");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab")) {
					mkdir("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab/$nmKecamatan")) {
					mkdir("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab/$nmKecamatan");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab/$nmKecamatan/$nmDesa")) {
					mkdir("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab/$nmKecamatan/$nmDesa");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value")) {
					mkdir("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value");
				}

				$path = "./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value/";

				$pathX = $_FILES[$key]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.' . $ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)) {

					$nmFileGagalUpload .= '   File ' . $value . '  ' . $this->upload->display_errors() . ',';
				} else {

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];

					$dataInsert[$key] = $fullPath;
				}
			}
		}

		$this->M_dinamis->save('t_rc_san_ipal', $dataInsert);


		if ($nmFileGagalUpload != '') {
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> ' . $nmFileGagalUpload . ' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Dokumen Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('SAN', 'refresh');
	}


	public function simpanFileSanIpalEdit()
	{
		$idEdit =  $this->input->post('idEditIpal');
		$dataAwal = $this->M_dinamis->getById('t_rc_san_ipal', ['id' => $idEdit]);
		$kdsatker = ($this->session->userdata('rkdak_prive')) ? '03'.$dataAwal->kdlokasi.$dataAwal->kdkabkota.'04' : $this->session->userdata('rkdak_kdsat');
		$kdlokasi =  kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);
		$kdkec = $this->input->post('idEditDKecIpal');
		$kddesa = $this->input->post('idEditDesaIpal');
		$ta = $this->session->userdata('thang');

		$nmProv = getProvinsiByRow($kdlokasi)->NMLOKASI;
		$nmKab = getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA;
		$nmKecamatan = getKecamatan($kdlokasi, $kdkabkota, $kdkec)->nmkec;
		$nmDesa = getdesa($kdlokasi, $kdkabkota, $kdkec, $kddesa)->nmdesa;

		$nmFileGagalUpload = '';


		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.pdf';
		$config['max_size'] = 10000;
		$this->load->library('upload', $config);

		$dataArray = array(
			'ded_ipal_edit' => 'DED',
			'rab_ipal_edit' => 'RAB',
			'k_lahan_ipal_edit' => 'Surat Pernyataan Kesiapan Pelaksanaan Kegiatan dari Pemerintah Desa',
			'penerima_manfaat_ipal_edit' => 'Daftar calon penerima manfaat',
			'k_lahan_dinas_ipal_edit' => 'Surat Pernyataan Kesiapan Pelaksanaan Kegiatan dari Dinas Kabupaten',
			'spesifikasi_ipal_edit' => 'Spesifikasi Teknis dan harga supplier truk tinja',
			'abd_edit' => 'As Build Drowing',
			'justekPipa_edit' => 'Justifikasi teknis untuk penambahan pipa pengumpul'
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

				if (!file_exists("./assets/RC/$ta/sanitasi-ipal")) {
					mkdir("./assets/RC/$ta/sanitasi-ipal");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-ipal/$nmProv")) {
					mkdir("./assets/RC/$ta/sanitasi-ipal/$nmProv");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab")) {
					mkdir("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab/$nmKecamatan")) {
					mkdir("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab/$nmKecamatan");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab/$nmKecamatan/$nmDesa")) {
					mkdir("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab/$nmKecamatan/$nmDesa");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value")) {
					mkdir("./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value");
				}

				$path = "./assets/RC/$ta/sanitasi-ipal/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value/";

				$pathX = $_FILES[$key]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.' . $ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)) {

					$nmFileGagalUpload .= '   File ' . $value . '  ' . $this->upload->display_errors() . ',';
				} else {

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];

					if ($key == 'ded_ipal_edit') {
						$dataInsert['ded_ipal'] = $fullPath;
					}

					if ($key == 'rab_ipal_edit') {
						$dataInsert['rab_ipal'] = $fullPath;
					}

					if ($key == 'k_lahan_ipal_edit') {
						$dataInsert['k_lahan_ipal'] = $fullPath;
					}

					if ($key == 'penerima_manfaat_ipal_edit') {
						$dataInsert['penerima_manfaat_ipal'] = $fullPath;
					}

					if ($key == 'k_lahan_dinas_ipal_edit') {
						$dataInsert['k_lahan_dinas_ipal'] = $fullPath;
					}

					if ($key == 'spesifikasi_ipal_edit') {
						$dataInsert['spesifikasi_ipal'] = $fullPath;
					}

					if ($key == 'abd_edit') {
						$dataInsert['abd'] = $fullPath;
					}

					if ($key == 'justekPipa_edit') {
						$dataInsert['justekPipa'] = $fullPath;
					}
				}
			}
		}

		$this->M_dinamis->update('t_rc_san_ipal', $dataInsert, ['id' => $idEdit]);


		if ($nmFileGagalUpload != '') {
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> ' . $nmFileGagalUpload . ' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Dokumen Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('SAN', 'refresh');
	}

	public function simpanFileSanIPLTX()
	{	

		$kdsatkerSession = $this->session->userdata('rkdak_kdsat');
		$kdlokasiSession =  kdlokasi($kdsatkerSession);
		$kdkabkotaSession = kdkabkota($kdsatkerSession);

		$kdsatker = $this->session->userdata('is_provinsi') ? "03".$kdlokasiSession.$this->input->post('klikKabKota_ipltX').'04' : $this->session->userdata('rkdak_kdsat');

		$kdlokasi =  kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);
		$kdkec = $this->input->post('kdkec_ipltX');
		$kddesa = $this->input->post('kddesa_ipltX');
		$ta = $this->session->userdata('thang');

		$nmProv = getProvinsiByRow($kdlokasi)->NMLOKASI;
		$nmKab = getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA;
		$nmKecamatan = getKecamatan($kdlokasi, $kdkabkota, $kdkec)->nmkec;
		$nmDesa = getdesa($kdlokasi, $kdkabkota, $kdkec, $kddesa)->nmdesa;

		$nmFileGagalUpload = '';


		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.pdf';
		$config['max_size'] = 10000;
		$this->load->library('upload', $config);

		$dataArray = array(
			'penetapan_ipltx' => 'Surat Penetapan Lokasi oleh Kepala Daerah',
			'legalitas_ipltx' => 'Bukti legalitas lahan berupa sertifikat lahan',
			'ded_ipltx' => 'DED',
			'rab_ipltx' => 'RAB',
			'justifikasi_ipltx' => 'Dokumen justifikasi teknis',
			'audit_ipltx' => 'Laporan audit',
			'mp_ipltx' => 'MasterPlan',
			'lingkungan_ipltx' => 'Dokumen Lingkungan',
			'kesiapan_ipltx' => 'Surat Kesiapan Lembaga Pengelola',
			'kesiapan_biaya_ipltx' => 'Surat Kesiapan Biaya Operasional dan Pemeliharaan',
			'mintatKepalaDaerah' => 'Surat Minat dari Kepala Daerah',
			'pernyataanBPPW' => 'Surat Pernyataan BPPW',
			'businessPlanIPLT' => 'Rencana pengelolaan atau business plan IPLT',
			'buktiKomitmenIPLT' => 'Bukti komitmen untuk melaksanaan LLTT',
			'abd' => 'As Build Drawing IPLT Terbangun',
			'bpkp' => 'Laporan Audit atau reviu BPKP',
			'sTrukTinja' => 'Spesifikasi Teknis dan Harga Supplier Truk Tinja'
		);

		$dataInsert = array(
			'kdlokasi' => $kdlokasi,
			'kdkabkota' => $kdkabkota,
			'kdkec' => $kdkec,
			'kddesa' => $kddesa,
			'kdkabkota_penginput' => $this->session->userdata('is_provinsi') ? $this->session->userdata('rkdak_kdsat'):'',
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

				if (!file_exists("./assets/RC/$ta/sanitasi-IPLT")) {
					mkdir("./assets/RC/$ta/sanitasi-IPLT");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-IPLT/$nmProv")) {
					mkdir("./assets/RC/$ta/sanitasi-IPLT/$nmProv");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab")) {
					mkdir("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab/$nmKecamatan")) {
					mkdir("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab/$nmKecamatan");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab/$nmKecamatan/$nmDesa")) {
					mkdir("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab/$nmKecamatan/$nmDesa");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value")) {
					mkdir("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value");
				}

				$path = "./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value/";

				$pathX = $_FILES[$key]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.' . $ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)) {

					$nmFileGagalUpload .= '   File ' . $value . '  ' . $this->upload->display_errors() . ',';
				} else {

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];

					$dataInsert[$key] = $fullPath;
				}
			}
		}

		$this->M_dinamis->save('t_rc_san_iplt', $dataInsert);


		if ($nmFileGagalUpload != '') {
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> ' . $nmFileGagalUpload . ' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Dokumen Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('SAN', 'refresh');
	}


	public function simpanFileSanIPLTXEdit()
	{
		$idEdit = $this->input->post('idEditIplt');

		$dataAwal = $this->M_dinamis->getById('t_rc_san_iplt', ['id' => $idEdit]);
		$kdsatker = ($this->session->userdata('rkdak_prive')) ? '03'.$dataAwal->kdlokasi.$dataAwal->kdkabkota.'04' : $this->session->userdata('rkdak_kdsat');
		
		$kdlokasi =  kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);
		$kdkec = $this->input->post('idEditDKecIplt');
		$kddesa = $this->input->post('idEditDesaIplt');
		$ta = $this->session->userdata('thang');

		$nmProv = getProvinsiByRow($kdlokasi)->NMLOKASI;
		$nmKab = getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA;
		$nmKecamatan = getKecamatan($kdlokasi, $kdkabkota, $kdkec)->nmkec;
		$nmDesa = getdesa($kdlokasi, $kdkabkota, $kdkec, $kddesa)->nmdesa;

		$nmFileGagalUpload = '';


		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.pdf';
		$config['max_size'] = 10000;
		$this->load->library('upload', $config);

		$dataArray = array(
			'penetapan_ipltx_edit' => 'Surat Penetapan Lokasi oleh Kepala Daerah',
			'legalitas_ipltx_edit' => 'Bukti legalitas lahan berupa sertifikat lahan',
			'ded_ipltx_edit' => 'DED',
			'rab_ipltx_edit' => 'RAB',
			'justifikasi_ipltx_edit' => 'Dokumen justifikasi teknis',
			'mp_ipltx_edit' => 'MasterPlan',
			'lingkungan_ipltx_edit' => 'Dokumen Lingkungan',
			'kesiapan_ipltx_edit' => 'Surat Kesiapan Lembaga Pengelola',
			'mintatKepalaDaerah_edit' => 'Surat Minat dari Kepala Daerah',
			'pernyataanBPPW_edit' => 'Surat Pernyataan BPP',
			'businessPlanIPLT_edit' => 'Rencana pengelolaan atau business plan IPLT',
			'buktiKomitmenIPLT_edit' => 'Bukti komitmen untuk melaksanaan LLTT',
			'abd_edit' => 'As Build Drawing IPLT Terbangun',
			'bpkp_edit' => 'Laporan Audit atau reviu BPKP',
			'sTrukTinja_edit' => 'Spesifikasi Teknis dan Harga Supplier Truk Tinja'
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

				if (!file_exists("./assets/RC/$ta/sanitasi-IPLT")) {
					mkdir("./assets/RC/$ta/sanitasi-IPLT");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-IPLT/$nmProv")) {
					mkdir("./assets/RC/$ta/sanitasi-IPLT/$nmProv");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab")) {
					mkdir("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab/$nmKecamatan")) {
					mkdir("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab/$nmKecamatan");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab/$nmKecamatan/$nmDesa")) {
					mkdir("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab/$nmKecamatan/$nmDesa");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value")) {
					mkdir("./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value");
				}

				$path = "./assets/RC/$ta/sanitasi-IPLT/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value/";

				$pathX = $_FILES[$key]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.' . $ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)) {

					$nmFileGagalUpload .= '   File ' . $value . '  ' . $this->upload->display_errors() . ',';
				} else {

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];

					$dataArray = array(
						'penetapan_ipltx' => 'Surat Penetapan Lokasi oleh Kepala Daerah',
						'legalitas_ipltx' => 'Bukti legalitas lahan berupa sertifikat lahan',
						'ded_ipltx' => 'DED',
						'rab_ipltx' => 'RAB',
						'justifikasi_ipltx' => 'Dokumen justifikasi teknis',
						'mp_ipltx' => 'MasterPlan',
						'lingkungan_ipltx' => 'Dokumen Lingkungan',
						'kesiapan_ipltx' => 'Surat Kesiapan Lembaga Pengelola'
					);

					$dataArray = array(
						'penetapan_ipltx_edit' => 'Surat Penetapan Lokasi oleh Kepala Daerah',
						'legalitas_ipltx_edit' => 'Bukti legalitas lahan berupa sertifikat lahan',
						'ded_ipltx_edit' => 'DED',
						'rab_ipltx_edit' => 'RAB',
						'justifikasi_ipltx_edit' => 'Dokumen justifikasi teknis',
						'mp_ipltx_edit' => 'MasterPlan',
						'lingkungan_ipltx_edit' => 'Dokumen Lingkungan',
						'kesiapan_ipltx_edit' => 'Surat Kesiapan Lembaga Pengelola',
					);


					if ($key == 'penetapan_ipltx_edit') {
						$dataInsert['penetapan_ipltx'] = $fullPath;
					}

					if ($key == 'legalitas_ipltx_edit') {
						$dataInsert['legalitas_ipltx'] = $fullPath;
					}

					if ($key == 'ded_ipltx_edit') {
						$dataInsert['ded_ipltx'] = $fullPath;
					}

					if ($key == 'rab_ipltx_edit') {
						$dataInsert['rab_ipltx'] = $fullPath;
					}

					if ($key == 'justifikasi_ipltx_edit') {
						$dataInsert['justifikasi_ipltx'] = $fullPath;
					}

					if ($key == 'mp_ipltx_edit') {
						$dataInsert['mp_ipltx'] = $fullPath;
					}

					if ($key == 'lingkungan_ipltx_edit') {
						$dataInsert['lingkungan_ipltx'] = $fullPath;
					}

					if ($key == 'kesiapan_ipltx_edit') {
						$dataInsert['kesiapan_ipltx'] = $fullPath;
					}

					if ($key == 'mintatKepalaDaerah_edit') {
						$dataInsert['mintatKepalaDaerah'] = $fullPath;
					}

					if ($key == 'pernyataanBPPW_edit') {
						$dataInsert['pernyataanBPPW'] = $fullPath;
					}

					if ($key == 'businessPlanIPLT_edit') {
						$dataInsert['businessPlanIPLT'] = $fullPath;
					}

					if ($key == 'buktiKomitmenIPLT_edit') {
						$dataInsert['buktiKomitmenIPLT'] = $fullPath;
					}

					if ($key == 'abd_edit') {
						$dataInsert['abd'] = $fullPath;
					}

					if ($key == 'bpkp_edit') {
						$dataInsert['bpkp'] = $fullPath;
					}

					if ($key == 'sTrukTinja_edit') {
						$dataInsert['sTrukTinja'] = $fullPath;
					}


				}
			}
		}

		$this->M_dinamis->update('t_rc_san_iplt', $dataInsert, ['id' => $idEdit]);


		if ($nmFileGagalUpload != '') {
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> ' . $nmFileGagalUpload . ' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Dokumen Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('SAN', 'refresh');
	}


	public function simpanFileSanPembangunanBaru()
	{


		$kdsatkerSession = $this->session->userdata('rkdak_kdsat');
		$kdlokasiSession =  kdlokasi($kdsatkerSession);
		$kdkabkotaSession = kdkabkota($kdsatkerSession);

		$kdsatker = $this->session->userdata('is_provinsi') ? "03".$kdlokasiSession.$this->input->post('klikKabKota_pembangunanBaru').'04' : $this->session->userdata('rkdak_kdsat');
		$kdlokasi =  kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);
		$kdkec = $this->input->post('kdkec_pembangunanBaru');
		$kddesa = $this->input->post('kddesa_pembangunanBaru');
		$ta = $this->session->userdata('thang');

		$nmProv = getProvinsiByRow($kdlokasi)->NMLOKASI;
		$nmKab = getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA;
		$nmKecamatan = getKecamatan($kdlokasi, $kdkabkota, $kdkec)->nmkec;
		$nmDesa = getdesa($kdlokasi, $kdkabkota, $kdkec, $kddesa)->nmdesa;

		$nmFileGagalUpload = '';


		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.pdf';
		$config['max_size'] = 10000;
		$this->load->library('upload', $config);

		$dataArray = array(
			'ded_pembangunanBaru' => 'DED',
			'rab_pembangunanBaru' => 'RAB',
			'kesiapan_pembangunanBaru' => 'Surat Pernyataan Kesiapan Pelaksanaan Kegiatan',
			'legalitas_pembangunanBaru' => 'Bukti legalitas lahan untuk TPS 3R',
			'bp_pembangunanBaru' => 'Konsep Business Plan pengelolaan TPS 3R pasca konstruksi',
			'penerima_manfaat_pembangunanBaru' => 'Daftar calon penerima manfaat TPS 3R minimal 200 KK',
			'ba_warga' => 'Berita Acara Kesepakatan Warga',
			'kesepakatan_oprasi_pemeliharan' => 'Surat Pernyataan Kesiapan dan Dukungan Biaya Operasi dan Pemeliharaan',
			'surat_dinas_hidup' => 'Surat dukungan Dinas Lingkungan Hidup',
			'justifikasi_TPS_peningkatan' => 'Justifikasi Peningkatan atau Rehabilitasi TPS3R',
			'sk_desa_kpp' => 'SK Kepala Desa tentang Pembentukan KKP',
			'abd' => 'As Build Drawing TPS3R Terbangun'
		);

		$dataInsert = array(
			'kdlokasi' => $kdlokasi,
			'kdkabkota' => $kdkabkota,
			'kdkec' => $kdkec,
			'kddesa' => $kddesa,
			'kdkabkota_penginput' => $this->session->userdata('is_provinsi') ? $this->session->userdata('rkdak_kdsat'):'',
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

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab/$nmKecamatan")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab/$nmKecamatan");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab/$nmKecamatan/$nmDesa")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab/$nmKecamatan/$nmDesa");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value");
				}

				$path = "./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value/";

				$pathX = $_FILES[$key]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.' . $ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)) {

					$nmFileGagalUpload .= '   File ' . $value . '  ' . $this->upload->display_errors() . ',';
				} else {

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];

					$dataInsert[$key] = $fullPath;
				}
			}
		}

		$this->M_dinamis->save('t_rc_san_pembangunan_baru', $dataInsert);


		if ($nmFileGagalUpload != '') {
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> ' . $nmFileGagalUpload . ' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Dokumen Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('SAN', 'refresh');
	}


	public function simpanFileSanPembangunanBaruEdit()
	{
		$id = $this->input->post('idEditPembangunanBaru');

		$dataAwal = $this->M_dinamis->getById('t_rc_san_pembangunan_baru', ['id' => $idEdit]);
		$kdsatker = ($this->session->userdata('rkdak_prive')) ? '03'.$dataAwal->kdlokasi.$dataAwal->kdkabkota.'04' : $this->session->userdata('rkdak_kdsat');

		$kdlokasi =  kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);
		$kdkec = $this->input->post('idEditDKecPembangunanBaru');
		$kddesa = $this->input->post('idEditDesaPembangunanBaru');
		$ta = $this->session->userdata('thang');

		$nmProv = getProvinsiByRow($kdlokasi)->NMLOKASI;
		$nmKab = getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA;
		$nmKecamatan = getKecamatan($kdlokasi, $kdkabkota, $kdkec)->nmkec;
		$nmDesa = getdesa($kdlokasi, $kdkabkota, $kdkec, $kddesa)->nmdesa;

		$nmFileGagalUpload = '';


		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.pdf';
		$config['max_size'] = 10000;
		$this->load->library('upload', $config);


		$dataArray = array(
			'ded_pembangunanBaru_edit' => 'DED',
			'rab_pembangunanBaru_edit' => 'RAB',
			'kkesiapan_pembangunanBaru_edit' => 'Surat Pernyataan Kesiapan Pelaksanaan Kegiatan',
			'legalitas_pembangunanBaru_edit' => 'Bukti legalitas lahan untuk TPS 3R',
			'bp_pembangunanBaru_edit' => 'Konsep Business Plan pengelolaan TPS 3R pasca konstruksi',
			'penerima_manfaat_pembangunanBaru_edit' => 'Daftar calon penerima manfaat TPS 3R minimal 200 KK',
			'ba_warga' => 'Berita Acara Kesepakatan Warga',
			'kesepakatan_oprasi_pemeliharan_edit' => 'Surat Pernyataan Kesiapan dan Dukungan Biaya Operasi dan Pemeliharaan',
			'surat_dinas_hidup_edit' => 'Surat dukungan Dinas Lingkungan Hidup',
			'justifikasi_TPS_peningkatan_edit' => 'Justifikasi Peningkatan atau Rehabilitasi TPS3R',
			'sk_desa_kpp_edit' => 'SK Kepala Desa tentang Pembentukan KKP',
			'abd_edit' => 'As Build Drawing TPS3R Terbangun'
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

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab/$nmKecamatan")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab/$nmKecamatan");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab/$nmKecamatan/$nmDesa")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab/$nmKecamatan/$nmDesa");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value");
				}

				$path = "./assets/RC/$ta/sanitasi-persampahan-pembangunanBaru/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value/";

				$pathX = $_FILES[$key]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.' . $ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)) {

					$nmFileGagalUpload .= '   File ' . $value . '  ' . $this->upload->display_errors() . ',';
				} else {

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];


					if ($key == 'ded_pembangunanBaru_edit') {
						$dataInsert['ded_pembangunanBaru'] = $fullPath;
					}

					if ($key == 'rab_pembangunanBaru_edit') {
						$dataInsert['rab_pembangunanBaru'] = $fullPath;
					}

					if ($key == 'kkesiapan_pembangunanBaru_edit') {
						$dataInsert['kkesiapan_pembangunanBaru'] = $fullPath;
					}

					if ($key == 'legalitas_pembangunanBaru_edit') {
						$dataInsert['legalitas_pembangunanBaru'] = $fullPath;
					}

					if ($key == 'bp_pembangunanBaru_edit') {
						$dataInsert['bp_pembangunanBaru'] = $fullPath;
					}

					if ($key == 'penerima_manfaat_pembangunanBaru_edit') {
						$dataInsert['penerima_manfaat_pembangunanBaru'] = $fullPath;
					}

					if ($key == 'ba_warga') {
						$dataInsert['ba_warga'] = $fullPath;
					}

					if ($key == 'kesepakatan_oprasi_pemeliharan_edit') {
						$dataInsert['kesepakatan_oprasi_pemeliharan'] = $fullPath;
					}

					if ($key == 'surat_dinas_hidup_edit') {
						$dataInsert['surat_dinas_hidup'] = $fullPath;
					}

					if ($key == 'justifikasi_TPS_peningkatan_edit') {
						$dataInsert['justifikasi_TPS_peningkatan'] = $fullPath;
					}

					if ($key == 'sk_desa_kpp_edit') {
						$dataInsert['sk_desa_kpp'] = $fullPath;
					}

					if ($key == 'abd_edit') {
						$dataInsert['abd'] = $fullPath;
					}


				}
			}
		}

		$this->M_dinamis->update('t_rc_san_pembangunan_baru', $dataInsert, ['id' => $id]);


		if ($nmFileGagalUpload != '') {
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> ' . $nmFileGagalUpload . ' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Dokumen Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('SAN', 'refresh');
	}


	public function simpanFileSanRehabilitasi()
	{
		$kdsatker = $this->session->userdata('rkdak_kdsat');
		$kdlokasi =  kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);
		$kdkec = $this->input->post('kdkec_rehabilitasi');
		$kddesa = $this->input->post('kddesa_rehabilitasi');
		$ta = $this->session->userdata('thang');

		$nmProv = getProvinsiByRow($kdlokasi)->NMLOKASI;
		$nmKab = getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA;
		$nmKecamatan = getKecamatan($kdlokasi, $kdkabkota, $kdkec)->nmkec;
		$nmDesa = getdesa($kdlokasi, $kdkabkota, $kdkec, $kddesa)->nmdesa;

		$nmFileGagalUpload = '';


		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.pdf';
		$config['max_size'] = 10000;
		$this->load->library('upload', $config);

		$dataArray = array(
			'ded_rehabilitasi' => 'DED',
			'rab_rehabilitasi' => 'RAB',
			'kesiapan_rehabilitasi' => 'Surat Pernyataan Kesiapan Pelaksanaan Kegiatan',
			'legalitas_rehabilitasi' => 'Bukti legalitas lahan untuk TPS 3R',
			'bp_rehabilitasi' => 'Konsep Business Plan pengelolaan TPS 3R pasca konstruksi',
			'penerima_manfaat_rehabilitasi' => 'Daftar calon penerima manfaat TPS 3R minimal 200 KK',
			'justifikasi_rehabilitasi' => 'Justifikasi teknis kebutuhan peningkatan atau rehabilitasi TPS 3R',
			'komitmen_rehabilitasi' => 'Surat Komitmen Kepala Daerah',
			'dukungan_rehabilitasi' => 'Surat kesiapan dukungan biaya operasional dan pemeliharaan',
			'rincian_anggaran_rehabilitasi' => 'Rincian Kegiatan dan Anggaran alokasi APBD untuk peningkatan kapasitas TPS3R',
			'kpp' => 'Bukti Kepemilikan KPP'
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

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab/$nmKecamatan")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab/$nmKecamatan");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab/$nmKecamatan/$nmDesa")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab/$nmKecamatan/$nmDesa");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value");
				}

				$path = "./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value/";

				$pathX = $_FILES[$key]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.' . $ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)) {

					$nmFileGagalUpload .= '   File ' . $value . '  ' . $this->upload->display_errors() . ',';
				} else {

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];

					$dataInsert[$key] = $fullPath;
				}
			}
		}

		$this->M_dinamis->save('t_rc_san_rehabilitasi', $dataInsert);


		if ($nmFileGagalUpload != '') {
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> ' . $nmFileGagalUpload . ' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Dokumen Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('SAN', 'refresh');
	}


	public function simpanFileSanRehabilitasiEdit()
	{
		$id = $this->input->post('idEditRehabilitasi');
		$kdsatker = $this->session->userdata('rkdak_kdsat');
		$kdlokasi =  kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);
		$kdkec = $this->input->post('idEditDKecRehabilitasi');
		$kddesa = $this->input->post('idEditDesaRehabilitasi');
		$ta = $this->session->userdata('thang');

		$nmProv = getProvinsiByRow($kdlokasi)->NMLOKASI;
		$nmKab = getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA;
		$nmKecamatan = getKecamatan($kdlokasi, $kdkabkota, $kdkec)->nmkec;
		$nmDesa = getdesa($kdlokasi, $kdkabkota, $kdkec, $kddesa)->nmdesa;

		$nmFileGagalUpload = '';


		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.pdf';
		$config['max_size'] = 10000;
		$this->load->library('upload', $config);


		$dataArray = array(
			'ded_rehabilitasi_edit' => 'DED',
			'rab_rehabilitasi_edit' => 'RAB',
			'kesiapan_rehabilitasi_edit' => 'Surat Pernyataan Kesiapan Pelaksanaan Kegiatan',
			'legalitas_rehabilitasi_edit' => 'Bukti legalitas lahan untuk TPS 3R',
			'bp_rehabilitasi_edit' => 'Konsep Business Plan pengelolaan TPS 3R pasca konstruksi',
			'penerima_manfaat_rehabilitasi_edit' => 'Daftar calon penerima manfaat TPS 3R minimal 200 KK',
			'justifikasi_rehabilitasi_edit' => 'Justifikasi teknis kebutuhan peningkatan atau rehabilitasi TPS 3R',
			'komitmen_rehabilitasi_edit' => 'Surat Komitmen Kepala Daerah',
			'dukungan_rehabilitasi_edit' => 'Surat kesiapan dukungan biaya operasional dan pemeliharaan',
			'rincian_anggaran_rehabilitasi_edit' => 'Rincian Kegiatan dan Anggaran alokasi APBD untuk peningkatan kapasitas TPS3R',
			'kpp_edit' => 'Bukti Kepemilikan KPP'
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

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab/$nmKecamatan")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab/$nmKecamatan");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab/$nmKecamatan/$nmDesa")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab/$nmKecamatan/$nmDesa");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value");
				}

				$path = "./assets/RC/$ta/sanitasi-persampahan-rehabilitasi/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value/";

				$pathX = $_FILES[$key]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.' . $ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)) {

					$nmFileGagalUpload .= '   File ' . $value . '  ' . $this->upload->display_errors() . ',';
				} else {

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];


					if ($key == 'ded_rehabilitasi_edit') {
						$dataInsert['ded_rehabilitasi'] = $fullPath;
					}

					if ($key == 'rab_rehabilitasi_edit') {
						$dataInsert['rab_rehabilitasi'] = $fullPath;
					}

					if ($key == 'kesiapan_rehabilitasi_edit') {
						$dataInsert['kesiapan_rehabilitasi'] = $fullPath;
					}

					if ($key == 'legalitas_rehabilitasi_edit') {
						$dataInsert['legalitas_rehabilitasi'] = $fullPath;
					}

					if ($key == 'bp_rehabilitasi_edit') {
						$dataInsert['bp_rehabilitasi'] = $fullPath;
					}

					if ($key == 'penerima_manfaat_rehabilitasi_edit') {
						$dataInsert['penerima_manfaat_rehabilitasi'] = $fullPath;
					}

					if ($key == 'justifikasi_rehabilitasi_edit') {
						$dataInsert['justifikasi_rehabilitasi'] = $fullPath;
					}

					if ($key == 'komitmen_rehabilitasi_edit') {
						$dataInsert['komitmen_rehabilitasi'] = $fullPath;
					}

					if ($key == 'dukungan_rehabilitasi_edit') {
						$dataInsert['dukungan_rehabilitasi'] = $fullPath;
					}

					if ($key == 'rincian_anggaran_rehabilitasi_edit') {
						$dataInsert['rincian_anggaran_rehabilitasi'] = $fullPath;
					}

					if ($key == 'kpp_edit') {
						$dataInsert['kpp'] = $fullPath;
					}
				}
			}
		}

		$this->M_dinamis->update('t_rc_san_rehabilitasi', $dataInsert, ['id' => $id]);


		if ($nmFileGagalUpload != '') {
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> ' . $nmFileGagalUpload . ' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Dokumen Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('SAN', 'refresh');
	}


	public function simpanFileSanPembangunan()
	{
		$kdsatker = $this->session->userdata('rkdak_kdsat');
		$kdlokasi =  kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);
		$kdkec = $this->input->post('kdkec_pembangunan');
		$kddesa = $this->input->post('kddesa_pembangunan');
		$ta = $this->session->userdata('thang');

		$nmProv = getProvinsiByRow($kdlokasi)->NMLOKASI;
		$nmKab = getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA;
		$nmKecamatan = getKecamatan($kdlokasi, $kdkabkota, $kdkec)->nmkec;
		$nmDesa = getdesa($kdlokasi, $kdkabkota, $kdkec, $kddesa)->nmdesa;

		$nmFileGagalUpload = '';


		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.pdf';
		$config['max_size'] = 10000;
		$this->load->library('upload', $config);

		$dataArray = array(
			'penetapan_lokasi_pembangunan' => 'Surat Penetapan Lokasi oleh Kepala Daerah',
			'legalitas_pembangunan' => 'Bukti legalitas lahan berupa sertifikat lahan',
			'rtrw_pembangunan' => 'Kesesuaian dengan RTRW',
			'kesiapan_pengelola_pembangunan' => 'Surat Pernyataan Kesiapan Lembaga Pengelola',
			'rab_pembangunan' => 'RAB',
			'ded_pembangunan' => 'DED',
			'pks_pembangunan' => 'PKS dengan Offtaker',
			'lingkungan_pembangunan' => 'Dokumen Lingkungan',
			'profile_pembangunan' => 'Data profil',
			'dprd_pembangunan' => 'Surat pernyataan Komitmen DPRD',
			'penerima_pembangunan' => 'Kesiapan calon penerima'
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

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunan")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunan");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab/$nmKecamatan")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab/$nmKecamatan");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab/$nmKecamatan/$nmDesa")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab/$nmKecamatan/$nmDesa");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value");
				}

				$path = "./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value/";

				$pathX = $_FILES[$key]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.' . $ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)) {

					$nmFileGagalUpload .= '   File ' . $value . '  ' . $this->upload->display_errors() . ',';
				} else {

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];

					$dataInsert[$key] = $fullPath;
				}
			}
		}

		$this->M_dinamis->save('t_rc_san_pembangunan', $dataInsert);


		if ($nmFileGagalUpload != '') {
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> ' . $nmFileGagalUpload . ' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Dokumen Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('SAN', 'refresh');
	}


	public function simpanFileSanPembangunanEdit()
	{
		$id = $this->input->post('idEditPembangunan');
		$kdsatker = $this->session->userdata('rkdak_kdsat');
		$kdlokasi =  kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);
		$kdkec = $this->input->post('idEditDKecPembangunan');
		$kddesa = $this->input->post('idEditDesaPembangunan');
		$ta = $this->session->userdata('thang');

		$nmProv = getProvinsiByRow($kdlokasi)->NMLOKASI;
		$nmKab = getKabKotaByRow($kdlokasi, $kdkabkota)->NMKABKOTA;
		$nmKecamatan = getKecamatan($kdlokasi, $kdkabkota, $kdkec)->nmkec;
		$nmDesa = getdesa($kdlokasi, $kdkabkota, $kdkec, $kddesa)->nmdesa;

		$nmFileGagalUpload = '';


		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.pdf';
		$config['max_size'] = 10000;
		$this->load->library('upload', $config);


		$dataArray = array(
			'penetapan_lokasi_pembangunan_edit' => 'Surat Penetapan Lokasi oleh Kepala Daerah',
			'legalitas_pembangunan_edit' => 'Bukti legalitas lahan berupa sertifikat lahan',
			'rtrw_pembangunan_edit' => 'Kesesuaian dengan RTRW',
			'kesiapan_pengelola_pembangunan_edit' => 'Surat Pernyataan Kesiapan Lembaga Pengelola',
			'rab_pembangunan_edit' => 'RAB',
			'ded_pembangunan_edit' => 'DED',
			'pks_pembangunan_edit' => 'PKS dengan Offtaker',
			'lingkungan_pembangunan_edit' => 'Dokumen Lingkungan',
			'profile_pembangunan_edit' => 'Data profil',
			'dprd_pembangunan_edit' => 'Surat pernyataan Komitmen DPRD',
			'penerima_pembangunan_edit' => 'Kesiapan calon penerima'
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

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunan")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunan");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab/$nmKecamatan")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab/$nmKecamatan");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab/$nmKecamatan/$nmDesa")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab/$nmKecamatan/$nmDesa");
				}

				if (!file_exists("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value")) {
					mkdir("./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value");
				}

				$path = "./assets/RC/$ta/sanitasi-persampahan-pembangunan/$nmProv/$nmKab/$nmKecamatan/$nmDesa/$value/";

				$pathX = $_FILES[$key]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.' . $ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)) {

					$nmFileGagalUpload .= '   File ' . $value . '  ' . $this->upload->display_errors() . ',';
				} else {

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];

					if ($key == 'penetapan_lokasi_pembangunan_edit') {
						$dataInsert['penetapan_lokasi_pembangunan'] = $fullPath;
					}

					if ($key == 'legalitas_pembangunan_edit') {
						$dataInsert['legalitas_pembangunan'] = $fullPath;
					}

					if ($key == 'rtrw_pembangunan_edit') {
						$dataInsert['rtrw_pembangunan'] = $fullPath;
					}

					if ($key == 'kesiapan_pengelola_pembangunan_edit') {
						$dataInsert['kesiapan_pengelola_pembangunan'] = $fullPath;
					}

					if ($key == 'rab_pembangunan_edit') {
						$dataInsert['rab_pembangunan'] = $fullPath;
					}

					if ($key == 'ded_pembangunan_edit') {
						$dataInsert['ded_pembangunan'] = $fullPath;
					}

					if ($key == 'pks_pembangunan_edit') {
						$dataInsert['pks_pembangunan'] = $fullPath;
					}

					if ($key == 'lingkungan_pembangunan_edit') {
						$dataInsert['lingkungan_pembangunan'] = $fullPath;
					}

					if ($key == 'profile_pembangunan_edit') {
						$dataInsert['profile_pembangunan'] = $fullPath;
					}

					if ($key == 'dprd_pembangunan_edit') {
						$dataInsert['dprd_pembangunan'] = $fullPath;
					}

					if ($key == 'penerima_pembangunan_edit') {
						$dataInsert['penerima_pembangunan'] = $fullPath;
					}
				}
			}
		}

		$this->M_dinamis->update('t_rc_san_pembangunan', $dataInsert, ['id' => $id]);


		if ($nmFileGagalUpload != '') {
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> ' . $nmFileGagalUpload . ' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Dokumen Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('SAN', 'refresh');
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
		$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.pdf';
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
				$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.' . $ext;
				$config['max_size'] = 300000;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload($key)) {

					$nmFileGagalUpload .= '   File ' . $value . '  ' . $this->upload->display_errors() . ',';
				} else {

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
				<strong>Gagal </strong> ' . $nmFileGagalUpload . ' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Foto Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('SAN', 'refresh');
	}


	public function getDatakecamatan()
	{
		$kdsatker = $this->session->userdata('rkdak_kdsat');
		$kdlokasi = kdlokasi($kdsatker);
		$idkabKota = $this->input->post('idkabKota');

		$data = $this->M_rc24->getDatakecamatan($kdlokasi, $idkabKota);

		echo json_encode($data);
	}



}
