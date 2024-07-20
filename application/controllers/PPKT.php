<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PPKT extends CI_Controller {

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
		$this->load->model('M_PPKT');
	}


	public function index()
	{

		$tmp = array(
			'tittle' => 'PPKT',
			'tittle_header' => 'PPKT',
			'content' => 'PPKT',
			'dataProvinsi' => $this->M_PPKT->getDataProvinsi()
		);

		$this->load->view('tamplate/baseTamplate', $tmp);
	}

	public function getKabKotaByKdlokasi()
	{
		$kdlokasi = $this->input->post('kdlokasi');

		$data = $this->M_PPKT->getKabKota($kdlokasi);

		echo json_encode($data);
	}


	public function getDataTabel()
	{
		$kdlokasi = $this->input->post('kdlokasi');
		$kdsatker = $this->input->post('kdkabkota');
		$kdkabkota = kdkabkota($kdsatker);

		$dataTabel = $this->M_PPKT->getDataTabelPPKT($kdsatker);
		$dataKecamatan = $this->M_dinamis->getResult('t_kec2', ['kdlokasi' => $kdlokasi, 'kdkabkota' => $kdkabkota]);

		echo json_encode(['dataTabel' => $dataTabel, 'dataKecamatan' => $dataKecamatan]);
	}


	public function getDataDesa()
	{
		$kdkec = $this->input->post('kdkec');
		$kdsatker = $this->input->post('kdsatker');
		$kdlokasi = kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);

		$dataDesa = $this->M_dinamis->getResult('t_desa2', ['kdlokasi' => $kdlokasi, 'kdkabkota' => $kdkabkota, 'kdkec' => $kdkec]);

		echo json_encode($dataDesa);

	}


	public function simpanDataPPKT()
	{
		$kdsatker = $this->input->post('kdsatker');
		$kdkec = $this->input->post('kdkec');
		$kddesa = $this->input->post('kddesa');

		$dataInsert = array(
			'kdsatker' => $kdsatker,
			'kdkec' => $kdkec,
			'kddesa' => $kddesa,
			'ta' => $this->session->userdata('thang'),
			'created_at' => date('Y-m-d H:i:s')
		);

		$pros = $this->M_dinamis->save('t_rc_ppkt', $dataInsert);

		echo json_encode(['code' => ($pros) ? 200 : 500]);

	}


	public function hapusPPKT()
	{
		$id = $this->input->post('id');
		$this->M_dinamis->delete('t_rc_ppkt', ['id' => $id]);

		echo json_encode(['code' => 200]);	
	}


	public function detail($id=null)
	{

		if ($id == null) {
			echo 'Invalid Parameter.!';
			return;
		}

		$dataAwal = $this->M_dinamis->getById('t_rc_ppkt', ['id' => $id]);
		$dataKabKota = $this->M_dinamis->getById('d009_dak_awal', ['kdsatker' => substr($dataAwal->kdsatker, 0, 6)]);
		$kdsatker = $dataAwal->kdsatker;
		$kdlokasi = kdlokasi($kdsatker);
		$kdkabkota = kdkabkota($kdsatker);
		$kdkec = $dataAwal->kdkec;
		$kddesa = $dataAwal->kddesa;
		$dataKecamatan = $this->M_dinamis->getById('t_kec2', ['kdlokasi' => $kdlokasi, 'kdkabkota' => $kdkabkota, 'kdkec' => $kdkec]);
		$dataDesa = $this->M_dinamis->getById('t_desa2', ['kdlokasi' => $kdlokasi, 'kdkabkota' => $kdkabkota, 'kdkec' => $kdkec, 'kddesa' => $kddesa]);

		$tmp = array(
			'tittle' => 'PPKT',
			'tittle_header' => 'PPKT - Detail',
			'content' => 'PPKT_detail',
			'dataAwal' => $dataAwal,
			'dataKabKota' => $dataKabKota,
			'dataKecamatan' => $dataKecamatan,
			'dataDesa' => $dataDesa,
			'id' => $id,
			'dataProvinsi' => $this->M_PPKT->getDataProvinsi(),
			'dataDokumenRCPPKT' => $this->M_PPKT->getDataPPKTDokumen($id),
			'catatRCPPKT' => $this->M_PPKT->getDataPPKTCatatan($id),
			'dataRincianAM' => $this->M_PPKT->getRincianAM(),
			'dataAM' => $this->M_PPKT->getDataAMPPKT($id),
			'dataRincianSan' => $this->M_PPKT->getRincianSAN(),
			'dataSAN' => $this->M_PPKT->getDataAMPPKTSan($id),
			'dataRincianPrum' => $this->M_PPKT->getRincianPerum(),
			'dataPperum' => $this->M_PPKT->getDataAMPPKTPerum($id),
		);

		$this->load->view('tamplate/baseTamplate', $tmp);
	}


	public function prsUploadDok()
	{
		$dataAcuan = array(
			'rc_utama',
			'rc_tahap_1',
			'rc_tahap_2',
			'dokumen_expose',
			'1_1',
			'2_1',
			'3_1',
			'3_2',
			'3_3',
			'3_4',
			'4_1',
			'5_1',
			'5_2',
			'5_3',
			'6_1',
			'6_2',
			'7_1',
			'7_2',
			'7_3',
			'7_4',
			'7_5',
			'7_6',
			'7_7',
			'7_8',
			'7_9',
			'8_1',
			'8_2',
			'8_3',
			'8_4',
			'8_5',
			'8_6',
			'8_7',
			'8_8',
			'8_9',
			'9_1',
			'9_2',
			'9_4',
			'9_5',
			'9_6',
			'9_7',
			'9_8',
			'9_9',
			'10_1',
			'10_2',
			'10_3',
			'10_4',
			'10_5',
			'10_6',
			'10_7',
			'10_8',
			'10_9',
			'11_1',
			'11_2',
			'11_3',
			'11_4',
			'11_5',
			'11_6',
			'11_7',
			'11_8',
			'11_9',
			'12_1',
			'12_2',
			'12_3',
			'12_4',
			'12_5',
			'12_6',
			'12_7'
		);

		$id = $this->input->post('idppkt');
		$pros = 'fix';
		$error ='';

		if ($id == null) {
			echo 'Invalid Parameter.!';
			return;
		}

		$no=1;

		foreach ($dataAcuan as $val) {
			
			if (!empty($_FILES[$val]['name'])) {

				if (!file_exists('./assets/PPKT')) {
					mkdir('./assets/PPKT');
				}

				$path = "./assets/PPKT/";

				$pathX = $_FILES[$val]['name'];
				$ext = pathinfo($pathX, PATHINFO_EXTENSION);

				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.' . $ext;
				$config['max_size'] = 300000;

				$this->load->library('upload', $config);

				if ($this->upload->do_upload($val)) {

					$upload_data = $this->upload->data();
					$namaFile = $upload_data['file_name'];
					$fullPath = $upload_data['full_path'];

					$this->M_dinamis->delete('t_dok_ppkt', ['id_ppkt' => $id, 'jns_file' => $val]);

					$dataInsert = array(
						'id_ppkt' => $id,
						'jns_file' => $val,
						'path' => $fullPath,
						'created_at' => date('Y-m-d H:i:s')
					);

					$pros = $this->M_dinamis->save('t_dok_ppkt', $dataInsert);

				} else {

					$pros = false;
					$error=$this->upload->display_errors();

				}

			}

		}


		if ($pros == true) {

			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Data Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {

			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong>'.$error.' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			
		}

		redirect('PPKT/detail/'.$id, 'refresh');

	}


	public function prsSimpanCatat()
	{
		$dataAcuan = array(
			'catat_penilaian_1',
			'catat_penilaian_2',
			'catat_penilaian_3',
			'catat_penilaian_4',
			'catat_penilaian_5',
			'catat_penilaian_6',
			'catat_penilaian_7',
			'catat_penilaian_8',
			'catat_penilaian_9',
			'catat_penilaian_10',
			'catat_penilaian_11',
			'catat_penilaian_12',
			'catat_penilaian_13',
			'catat_penilaian_14',
			'catat_penilaian_15',
			'catat_penilaian_16',
			'catat_penilaian_17',
			'catat_penilaian_18',
			'catat_penilaian_19',
			'catat_penilaian_20',
			'catat_penilaian_21',
			'catat_penilaian_22',
			'catat_penilaian_23',
			'catat_penilaian_24',
			'catat_penilaian_25',
			'catat_penilaian_26',
			'catat_penilaian_27',
			'catat_penilaian_28',
			'catat_penilaian_29',
			'catat_penilaian_30',
			'catat_penilaian_31',
			'catat_penilaian_32',
			'catat_penilaian_34',
			'catat_penilaian_35',
			'catat_penilaian_36',
			'catat_penilaian_37',
			'catat_penilaian_38',
			'catat_penilaian_39',
			'catat_penilaian_40',
			'catat_penilaian_41',
			'catat_penilaian_42',
			'catat_penilaian_43',
			'catat_penilaian_44',
			'catat_penilaian_45',
			'catat_penilaian_46',
			'catat_penilaian_47',
			'catat_penilaian_48',
			'catat_penilaian_49',
			'catat_penilaian_50',
			'catat_penilaian_51',
			'catat_penilaian_52',
			'catat_penilaian_53',
			'catat_penilaian_54',
			'catat_penilaian_55',
			'catat_penilaian_56',
			'catat_penilaian_57',
			'catat_penilaian_58',
			'catat_penilaian_59',
			'catat_penilaian_60',
			'catat_penilaian_61',
			'catat_penilaian_62',
			'catat_penilaian_63',
			'catat_penilaian_64',
			'catat_rincian_1',
			'catat_rincian_2',
			'catat_rincian_3',
			'catat_rincian_4',
			'catat_rincian_5',
			'catat_rincian_6',
			'catat_rincian_7',
			'catat_rincian_8',
			'catat_rincian_9',
			'catat_rincian_10',
			'catat_rincian_11',
			'catat_rincian_12',
			'catat_rincian_13',
			'catat_rincian_14',
			'catat_rincian_15',
			'catat_rincian_16',
			'catat_rincian_17',
			'catat_rincian_18',
			'catat_rincian_19',
			'catat_rincian_20',
			'catat_rincian_21',
			'catat_rincian_22',
			'catat_rincian_23',
			'catat_rincian_24',
			'catat_rincian_25',
			'catat_rincian_26',
			'catat_rincian_27',
			'catat_rincian_28',
			'catat_rincian_29',
			'catat_rincian_30',
			'catat_rincian_31',
			'catat_rincian_32',
			'catat_rincian_34',
			'catat_rincian_35',
			'catat_rincian_36',
			'catat_rincian_37',
			'catat_rincian_38',
			'catat_rincian_39',
			'catat_rincian_40',
			'catat_rincian_41',
			'catat_rincian_42',
			'catat_rincian_43',
			'catat_rincian_44',
			'catat_rincian_45',
			'catat_rincian_46',
			'catat_rincian_47',
			'catat_rincian_48',
			'catat_rincian_49',
			'catat_rincian_50',
			'catat_rincian_51',
			'catat_rincian_52',
			'catat_rincian_53',
			'catat_rincian_54',
			'catat_rincian_55',
			'catat_rincian_56',
			'catat_rincian_57',
			'catat_rincian_58',
			'catat_rincian_59',
			'catat_rincian_60',
			'catat_rincian_61',
			'catat_rincian_62',
			'catat_rincian_63',
			'catat_rincian_64'
		);

		$idppktCatat = $this->input->post('idppktCatat');
		$pros = '';

		foreach ($dataAcuan as $val) {
			
			$catatan = $this->input->post($val);

			if ($catatan != null) {
				
				$this->M_dinamis->delete('t_catat_ppkt', ['id_ppkt' => $idppktCatat, 'jns_catatan' => $val]);

				$dataInsert = array(
					'id_ppkt' => $idppktCatat,
					'jns_catatan' => $val,
					'catatn' => clean($catatan),
					'created_at' => date('Y-m-d H:i:s')
				);

				$pros = $this->M_dinamis->save('t_catat_ppkt', $dataInsert);

			}
		}

		if ($pros == true) {

			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Data Berhasil Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {

			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong>'.$error.' Gagal Terupload.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			
		}

		redirect('PPKT/detail/'.$idppktCatat, 'refresh');

	}


	public function SimpanAM()
	{
		$idppktAM = $this->input->post('idppktAM');
		$rincianKegiatan = $this->input->post('rincianKegiatan');
		$catatan = clean($this->input->post('catatan'));
		$volume = $this->input->post('volume');
		$satuan = clean($this->input->post('satuan'));
		$harga_satuan = $this->input->post('harga_satuan');

		$dataInsert = array(
			'id_ppkt' => $idppktAM,
			'rincianKegiatan' => $rincianKegiatan,
			'catatan' => $catatan,
			'volume' => $volume,
			'satuan' => $satuan,
			'harga_satuan' => $harga_satuan,
			'created_at' => date('Y-m-d H:i:s')
		);

		$pros = $this->M_dinamis->save('t_ppkt_am', $dataInsert);

		if ($pros == true) {

			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Data Berhasil disimpan.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {

			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong>Gagal Tersimpan.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			
		}

		redirect('PPKT/detail/'.$idppktAM, 'refresh');
	}


	public function hapusAM()
	{
		$id = $this->input->post('id');

		$pros= $this->M_dinamis->delete('t_ppkt_am', ['id' => $id]);

		if ($pros == true) {

			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Data Berhasil dihapus.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {

			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong>Gagal Dihapus.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			
		}

		echo json_encode(['code' => ($pros) ? 200:500]);

	}


	public function getDataByIdAM()
	{
		$id = $this->input->post('id');

		$data = $this->M_dinamis->getById('t_ppkt_am', ['id' => $id]);
		echo json_encode($data);
	}


	public function SimpanAMEdit()
	{
		$idPPKT12 = $this->input->post('idPPKT12');
		$idppktAMEdit = $this->input->post('idppktAMEdit');
		$rincianKegiatanEdit = $this->input->post('rincianKegiatanEdit');
		$catatanEdit = clean($this->input->post('catatanEdit'));
		$volumeEdit = $this->input->post('volumeEdit');
		$satuanEdit = clean($this->input->post('satuanEdit'));
		$harga_satuan_edit = $this->input->post('harga_satuan_edit');

		$dataUbah = array(
			'rincianKegiatan' => $rincianKegiatanEdit,
			'catatan' => $catatanEdit,
			'volume' => $volumeEdit,
			'satuan' => $satuanEdit,
			'harga_satuan' => $harga_satuan_edit,
			'created_at' => date('Y-m-d H:i:s')
		);


		$pros = $this->M_dinamis->update('t_ppkt_am', $dataUbah, ['id' => $idppktAMEdit]);

		if ($pros == true) {

			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Data Berhasil Disimpan.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {

			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong>Gagal Disimpan.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			
		}

		redirect('PPKT/detail/'.$idPPKT12, 'refresh');

	}


	public function SimpanSan()
	{
		$idppktSan = $this->input->post('idppktSan');
		$rincianKegiatanSan = $this->input->post('rincianKegiatanSan');
		$catatanSan = clean($this->input->post('catatanSan'));
		$volumeSan = $this->input->post('volumeSan');
		$satuanSan = clean($this->input->post('satuanSan'));
		$harga_satuanSan = $this->input->post('harga_satuanSan');

		$dataInsert = array(
			'id_ppkt' => $idppktSan,
			'rincianKegiatan' => $rincianKegiatanSan,
			'catatan' => $catatanSan,
			'volume' => $volumeSan,
			'satuan' => $satuanSan,
			'harga_satuan' => $harga_satuanSan,
			'created_at' => date('Y-m-d H:i:s')
		);

		$pros = $this->M_dinamis->save('t_ppkt_san', $dataInsert);

		if ($pros == true) {

			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Data Berhasil disimpan.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {

			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong>Gagal Tersimpan.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			
		}

		redirect('PPKT/detail/'.$idppktSan, 'refresh');
	}



	public function hapusSan()
	{
		$id = $this->input->post('id');

		$pros= $this->M_dinamis->delete('t_ppkt_san', ['id' => $id]);

		if ($pros == true) {

			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Data Berhasil dihapus.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {

			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong>Gagal Dihapus.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			
		}

		echo json_encode(['code' => ($pros) ? 200:500]);

	}


	public function getDataByIdSAN()
	{
		$id = $this->input->post('id');

		$data = $this->M_dinamis->getById('t_ppkt_san', ['id' => $id]);
		echo json_encode($data);
	}


	public function SimpanSanEdit()
	{

		$idPPKT12 = $this->input->post('idPPKT12San');
		$idppktAMEdit = $this->input->post('idppktSanEdit');
		$rincianKegiatanEdit = $this->input->post('rincianKegiatSanEdit');
		$catatanEdit = clean($this->input->post('catatanSanEdit'));
		$volumeEdit = $this->input->post('volumeSanEdit');
		$satuanEdit = clean($this->input->post('satuanSanEdit'));
		$harga_satuan_edit = $this->input->post('harga_satuan_edit_san');

		$dataUbah = array(
			'rincianKegiatan' => $rincianKegiatanEdit,
			'catatan' => $catatanEdit,
			'volume' => $volumeEdit,
			'satuan' => $satuanEdit,
			'harga_satuan' => $harga_satuan_edit,
			'created_at' => date('Y-m-d H:i:s')
		);


		$pros = $this->M_dinamis->update('t_ppkt_san', $dataUbah, ['id' => $idppktAMEdit]);

		if ($pros == true) {

			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Data Berhasil Disimpan.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {

			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong>Gagal Disimpan.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			
		}

		redirect('PPKT/detail/'.$idPPKT12, 'refresh');

	}


	public function SimpanPerum()
	{


		$idppktSan = $this->input->post('idppktPerum');
		$rincianKegiatanSan = $this->input->post('rincianKegiatanPerum');
		$catatanSan = clean($this->input->post('catatanPerum'));
		$volumeSan = $this->input->post('volumePerum');
		$satuanSan = clean($this->input->post('satuanPerum'));
		$harga_satuanSan = $this->input->post('harga_satuanPerum');

		$dataInsert = array(
			'id_ppkt' => $idppktSan,
			'rincianKegiatan' => $rincianKegiatanSan,
			'catatan' => $catatanSan,
			'volume' => $volumeSan,
			'satuan' => $satuanSan,
			'harga_satuan' => $harga_satuanSan,
			'created_at' => date('Y-m-d H:i:s')
		);

		$pros = $this->M_dinamis->save('t_ppkt_perum', $dataInsert);

		if ($pros == true) {

			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Data Berhasil disimpan.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {

			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong>Gagal Tersimpan.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			
		}

		redirect('PPKT/detail/'.$idppktSan, 'refresh');
	}


	public function hapusPerum()
	{
		$id = $this->input->post('id');

		$pros= $this->M_dinamis->delete('t_ppkt_perum', ['id' => $id]);

		if ($pros == true) {

			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Data Berhasil dihapus.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {

			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong>Gagal Dihapus.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			
		}

		echo json_encode(['code' => ($pros) ? 200:500]);

	}


	public function getDataByIdPerum()
	{
		$id = $this->input->post('id');

		$data = $this->M_dinamis->getById('t_ppkt_perum', ['id' => $id]);
		echo json_encode($data);
	}

	public function SimpanPerumEdit()
	{

		$idPPKT12 = $this->input->post('idPPKT12Perum');
		$idppktAMEdit = $this->input->post('idppktPerumEdit');
		$rincianKegiatanEdit = $this->input->post('rincianKegiatPerumEdit');
		$catatanEdit = clean($this->input->post('catatanPerumEdit'));
		$volumeEdit = $this->input->post('volumePerumEdit');
		$satuanEdit = clean($this->input->post('satuanPerumEdit'));
		$harga_satuan_edit = $this->input->post('harga_satuan_edit_perum');

		$dataUbah = array(
			'rincianKegiatan' => $rincianKegiatanEdit,
			'catatan' => $catatanEdit,
			'volume' => $volumeEdit,
			'satuan' => $satuanEdit,
			'harga_satuan' => $harga_satuan_edit,
			'created_at' => date('Y-m-d H:i:s')
		);


		$pros = $this->M_dinamis->update('t_ppkt_perum', $dataUbah, ['id' => $idppktAMEdit]);

		if ($pros == true) {

			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Data Berhasil Disimpan.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {

			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong>Gagal Disimpan.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			
		}

		redirect('PPKT/detail/'.$idPPKT12, 'refresh');

	}


}