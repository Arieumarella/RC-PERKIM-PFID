<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;
use PhpOffice\PhpWord\Table;
use Dompdf\Dompdf;

class Penilaian extends CI_Controller {


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

		$this->load->model('M_penilaian');
	}

	
	public function index()
	{
		$tmp = array(
			'tittle' => 'Penilaian Usulan Awal',
			'tittle_header' => 'Penilaian Usulan Awal',
			'content' => 'sebelumKrisna',
			'dataMenu' => $this->M_penilaian->getMenu(),
			'dataSatuan' => $this->M_penilaian->getAllSatuan(),
			'dataProvinsi' => $this->M_penilaian->getDataProvinsiAM()
		);

		$this->load->view('tamplate/baseTamplate', $tmp);
	}


	public function HalamanUploadSimoni()
	{
		$tmp = array(
			'tittle' => 'Ba Sebelum Simoni',
			'header_content' => 'header2',
			'footer_content' => 'footer',
			'content' => 'ModuleSimoni/UploadExcelsebelumKrisna',
			'dataProvinsi' => $this->M_penilaian->getDataProvinsiAM()
		);

		$this->load->view('tamplate/baseTamplate', $tmp);
	}

	public function getDataKrisnaBelumSIap()
	{

		$kdlokasi = $this->input->post('kdlokasi');
		$kdkabkota = $this->input->post('kdkabkota');
		$kdbidang = $this->input->post('bidang');

		$kdsatker = '33'.$kdlokasi.$kdkabkota.$kdbidang;
		$data = $this->M_penilaian->getDataSimoniKrisnaBelumSiap($kdsatker);
		$dataHeader = $this->M_penilaian->getHeaderAmBaru($kdsatker);
		$dataSubBidang = $this->M_penilaian->dataSubBidang($kdsatker);

		echo json_encode(['dataBody' => $data, 'kdsatker' => $kdsatker, 'dataHeader' => $dataHeader, 'dataSubBidang' => $dataSubBidang]);

	}


	public function SimpanData()
	{
		$pengadaan = $this->input->post('pengadaan');
		$volume = $this->input->post('volume');
		$idAwal = $this->input->post('idAwal');
		$idPaket = $this->input->post('idPaket');
		$kdsatker = $this->input->post('kdsatker');
		$harga_satuan = $this->input->post('harga_satuan');
		$catatanPu = $this->input->post('catatanPu');
		$catatanPPN = $this->input->post('catatanPPN');
		$approvelPPN = $this->input->post('approvelPPN');
		$approvelpu = $this->input->post('approvelpu');
		$komponen = $this->input->post('komponen');
		$satuan = $this->input->post('satuan');

		$status = 0;

		foreach ($kdsatker as $key => $value) {

			$penilaian = '';

			if ($approvelPPN[$key] == '1' and $approvelpu[$key] == '1') {
				$penilaian = '1';
			}

			if ($approvelPPN[$key] == '2' and $approvelpu[$key] == '1') {
				$penilaian = '3';
			}

			if ($approvelPPN[$key] == '1' and $approvelpu[$key] == '2') {
				$penilaian = '3';
			}

			if ($approvelPPN[$key] == '1' and $approvelpu[$key] == '3') {
				$penilaian = '3';
			}

			if ($approvelPPN[$key] == '3' and $approvelpu[$key] == '1') {
				$penilaian = '3';
			}

			if ($approvelPPN[$key] == '3' and $approvelpu[$key] == '3') {
				$penilaian = '3';
			}

			if ($approvelPPN[$key] == '2' and $approvelpu[$key] == '3') {
				$penilaian = '3';
			}

			if ($approvelPPN[$key] == '3' and $approvelpu[$key] == '2') {
				$penilaian = '3';
			}

			if ($approvelPPN[$key] == '2' and $approvelpu[$key] == '2') {
				$penilaian = '2';
			}

			$hargaSatuanX=0;
			$volumeX=0;

			if (is_numeric($harga_satuan[$key])) {
				$hargaSatuanX=$harga_satuan[$key];
			}

			if (is_numeric($volume[$key])) {
				$volumeX=$volume[$key];
			}


			
			$dataInsert = array(
				'id_awal' => $idAwal[$key],
				'kdsatker' => $kdsatker[$key],
				'idpaket' => $idPaket[$key],
				'pengadaan' => '["'.$pengadaan[$key].'"]',
				'volume' => $volume[$key],
				'satuan' => $satuan[$key],
				'harga_satuan' => $harga_satuan[$key],
				'usulan' => $hargaSatuanX*$volumeX,
				'Approval_KL' => $approvelpu[$key],
				'Aprroval_PPN' => $approvelPPN[$key],
				'Approval_Sum' => $penilaian,
				'komponen' => $komponen[$key],
				'Catatan_KL' => clean($catatanPu[$key]),
				'Catatan_PPN' => clean($catatanPPN[$key]),
				'ta' => $this->session->userdata('thang')
			);

			
			$pros = $this->M_penilaian->save('data_akhir_airminum', $dataInsert);

			if ($pros == false) {
				$status=1;
			}

		}


		echo json_encode(['code' => ($status == 0) ? '200':'500']);

	}


	public function getDataAwalById()
	{
		$id = $this->input->post('id');

		$data = $this->M_penilaian->getById('data_awal_airminum', ['id' => $id]);

		echo json_encode($data);
	}

	public function getRincianByMenu()
	{
		$menu = $this->input->post('val');

		$data = $this->M_penilaian->getrincianByMenu($menu);

		echo json_encode($data);
	}


	public function SimpanCopyForm()
	{
		$kdsatkerAwal = $this->input->post('kdsatkerAwal');
		$idpaketAwal = $this->input->post('idpaketAwal');
		$idAwal = $this->input->post('idAwal');
		$kec = $this->input->post('kec');
		$des = $this->input->post('des');
		$menu = $this->input->post('menu');
		$rincian = $this->input->post('rincian');
		$pengadaan = $this->input->post('pengadaan');
		$volume = $this->input->post('volume');
		$satuan = $this->input->post('satuan');
		$harga_satuan = $this->input->post('harga_satuan');
		$tot_nilai = $this->input->post('tot_nilai');
		$kompnen = $this->input->post('kompnen');
		$penilaian_ppn = $this->input->post('penilaian_ppn');
		$penilaian_pupr = $this->input->post('penilaian_pupr');
		$Penilaian_sum = $this->input->post('Penilaian_sum');
		$catatanPPN = $this->input->post('catatanPPN');
		$catatanKl = $this->input->post('catatanKl');

		$dataInduk = $this->M_penilaian->getById('data_awal_airminum', ['id' => $idAwal]);

		$dataInsertAwal = array(
			'kdsatker' => $kdsatkerAwal,
			'idpaket' => $idpaketAwal,
			'kecamatan' => $kec,
			'desa' => $des,
			'sistem' => $dataInduk->sistem,
			'bidang' => $dataInduk->bidang,
			'subbidang' => $dataInduk->subbidang,
			'menu' => $menu,
			'komponen' => $kompnen, 
			'rincian' => $rincian,
			'sts_copy' => '2',
			'ta' => $this->session->userdata('thang')
		);

		$penilaian = '';

		if ($penilaian_ppn == '1' and $penilaian_pupr == '1') {
			$penilaian = '1';
		}

		if ($penilaian_ppn == '2' and $penilaian_pupr == '1') {
			$penilaian = '3';
		}

		if ($penilaian_ppn == '1' and $penilaian_pupr == '2') {
			$penilaian = '3';
		}

		if ($penilaian_ppn == '1' and $penilaian_pupr == '3') {
			$penilaian = '3';
		}

		if ($penilaian_ppn == '3' and $penilaian_pupr == '1') {
			$penilaian = '3';
		}

		if ($penilaian_ppn == '3' and $penilaian_pupr == '3') {
			$penilaian = '3';
		}

		if ($penilaian_ppn == '2' and $penilaian_pupr == '3') {
			$penilaian = '3';
		}

		if ($penilaian_ppn == '3' and $penilaian_pupr == '2') {
			$penilaian = '3';
		}

		if ($penilaian_ppn == '2' and $penilaian_pupr == '2') {
			$penilaian = '2';
		}

		$dataInsertAkhir = array(
			'kdsatker' => $kdsatkerAwal,
			'idpaket' => $idpaketAwal,
			'pengadaan' => '["'.$pengadaan.'"]',
			'volume' => $volume,
			'satuan' => $satuan,
			'harga_satuan' => $harga_satuan,
			'usulan' => $harga_satuan*$volume,
			'Approval_KL' => $penilaian_pupr,
			'Aprroval_PPN' => $penilaian_ppn,
			'Approval_Sum' => $penilaian,
			'Catatan_KL' => $catatanKl,
			'Catatan_PPN' => $catatanPPN,
			'ta' => $this->session->userdata('thang')
		);

		$pros = $this->M_penilaian->insertDataCopy($idAwal, $dataInsertAwal, $dataInsertAkhir);

		if ($pros == true) {
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil.!</strong> Berhasil Menyimpan Data.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}else{

			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Berhasil.!</strong> Data Gagal disimpan.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('/Penilaian', 'refresh');

	}

	public function downloadPdf()
	{

		$kdsatker = $this->input->post('kdSatkerBA');
		$sub_menu = $this->input->post('sub_menu');
		$nm_petugas_desk = clean($this->input->post('nm_petugas_desk'));
		$opd_dinas = clean($this->input->post('opd_dinas'));
		$nm_peserta_desk = clean($this->input->post('nm_peserta_desk'));
		$no_hp = clean($this->input->post('no_hp'));
		$dit_air_minum = clean($this->input->post('dit_air_minum'));
		$ttd_pfid = clean($this->input->post('ttd_pfid'));
		$ttd_pemda = clean($this->input->post('ttd_pemda'));
		$ttd_bppw = clean($this->input->post('ttd_bppw'));
		$dataDaerah = $this->M_penilaian->getDataDaerah($kdsatker);


		$data = array(
			'dataTabel' => $this->M_penilaian->getDataTabelPDF($kdsatker, $sub_menu),
			'dataHeader' => $this->M_penilaian->getDataSimoniKrisnaHeaderBySubBidang($kdsatker, $sub_menu),
			'kdsatker' => $kdsatker,
			'sub_menu' => $sub_menu,
			'nm_petugas_desk' => $nm_petugas_desk,
			'opd_dinas' => $opd_dinas,
			'nm_peserta_desk' => $nm_peserta_desk,
			'no_hp' => $no_hp,
			'dit_air_minum' => $dit_air_minum,
			'ttd_pfid' => $ttd_pfid,
			'ttd_pemda' => $ttd_pemda,
			'ttd_bppw' => $ttd_bppw,
			'nmProvinsi' => $dataDaerah->nmlokasi,
			'nmKabKota' => $dataDaerah->nmkabkota,
			'nmBidang' => getNameBidang($kdsatker),
			'ta' => $this->session->userdata('thang')
		);

		$html = $this->load->view('ModuleSimoni/pdf1', $data, TRUE);
		$html2 = $this->load->view('ModuleSimoni/pdf2', $data, TRUE);
		$combined_html = $html.$html2;
		ob_start();
		$dompdf = new Dompdf();
		$dompdf->set_option('isHtml5ParserEnabled', true);
		$dompdf->set_option('isRemoteEnabled', true);
		$dompdf->setPaper('A4', 'landscape'); 
		
		$dompdf->loadHtml($combined_html);
		$dompdf->render();
		$pdf_content = $dompdf->output();
		
		if (ob_get_level() > 0) {
			ob_end_clean();
		}
		$dompdf->stream('gabungan_pdf.pdf', array('Attachment' => 0));
		return;


		$nmbidang = getNameBidang($kdsatker);
		header('Content-Type: application/pdf');
		header("Content-Disposition: attachment; filename='test.pdf'");
		header('Content-Length: ' . strlen($pdf_content));

		echo $pdf_content;
		exit;


		$dompdf->stream('gabungan_pdf.pdf', array('Attachment' => 0));

	}


	public function sudahSiap()
	{
		$tmp = array(
			'tittle' => 'Cetak BA LANGSUNG',
			'header_content' => 'header2',
			'footer_content' => 'footer',
			'content' => 'ModuleSimoni/sesudahKrisna',
			'dataMenu' => $this->M_penilaian->getMenu(),
			'dataSatuan' => $this->M_penilaian->getAllSatuan(),
			'dataProvinsi' => $this->M_penilaian->getDataProvinsiAM()
		);

		$this->load->view('tamplate/baseTamplate', $tmp);
	}


	public function simpanFileKrisna()
	{

		$nm_petugas_desk = $this->input->post('nm_petugas_desk');
		$opd_dinas = $this->input->post('opd_dinas');
		$nm_peserta_desk = $this->input->post('nm_peserta_desk');
		$no_hp = $this->input->post('no_hp');
		$dit_air_minum = $this->input->post('dit_air_minum');
		$ttd_pfid = $this->input->post('ttd_pfid');
		$ttd_pemda = $this->input->post('ttd_pemda');
		$ttd_bppw = $this->input->post('ttd_bppw');

		if (!file_exists('./assets/PERKIM')) {
			mkdir('./assets/PERKIM');
		}

		if (!file_exists('./assets/PERKIM/SIMONI')) {
			mkdir('./assets/PERKIM/SIMONI');
		}

		if (!file_exists('./assets/PERKIM/SIMONI/2023')) {
			mkdir('./assets/PERKIM/SIMONI/2023');
		}

		$path = './assets/PERKIM/SIMONI/2023/';

		$config['upload_path'] = $path; 
		$config['allowed_types'] = 'xlsx';
		$config['max_size'] = 10240;
		$idSubmit = date('i').date('s').mt_rand(100, 999);

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file_krisna')) {
			$error = $this->upload->display_errors();
			echo $error;
		} else {
			$data = $this->upload->data();
			$file_path = $data['full_path'];

			$spreadsheet = IOFactory::load($file_path);
			$worksheet = $spreadsheet->getActiveSheet();
			$kolomYgDiambil = ['A', 'B', 'C', 'D', 'E', 'H', 'I', 'K', 'T', 'BK', 'BV', 'F', 'AF', 'BW', 'BX', 'BL', 'AU', 'AY', 'BU', 'BY', 'BZ', 'AX', 'BB', 'AL'];

			$arrayDanKolom  = array(
				'A' => 'pengusul_nama',
				'B' => 'provinsi_nama',
				'C' => 'kabupaten_nama',
				'D' => 'kecamatan_nama',
				'E' => 'desa_nama',
				'H' => 'bidang',
				'I' => 'sub_bidang',
				'K' => 'menu',
				'T' => 'rincian',
				'BK' => 'pengadaan_sinkron_ids',
				'BV' => 'volume_sinkron_pusat',
				'F' => 'sistem',
				'AF' => 'satuan',
				'BW' => 'unit_cost_sinkron_pusat',
				'BX' => 'usulan_sinkron_pusat',
				'BL' => 'komponen_sinkron',
				'AU' => 'approval_sinkron_kl',
				'AY' => 'approval_sinkron_dit',
				'BU' => 'approval_sinkron_sum',
				'BY' => 'note_sinkron_kl',
				'BZ' => 'note_sinkron_dit',
				'AX' => 'usulan_sinkron_kl',
				'AL' => 'nilai_usulan',
				'BB' => 'usulan_sinkron_dit'
			);

			$nmprovinsi = '';
			$nmkabkota = '';
			$nmKec = '';
			$nmDesa = '';
			$nmbidang = '';
			$no= 0;

			foreach ($worksheet->getRowIterator() as $row) {

				$cellIterator = $row->getCellIterator();
				$cellIterator->setIterateOnlyExistingCells(false); 	
				$rowData = array();
				$rowData['id'] = $idSubmit;

				foreach ($cellIterator as $cell) {
					$columnIndex = $cell->getColumn();

					if (in_array($columnIndex, $kolomYgDiambil)) {
						$nmFeld = $arrayDanKolom[$columnIndex];
						$rowData[$nmFeld] = $cell->getValue();
					}

					if ($columnIndex == 'B') {
						$nmprovinsi = $cell->getValue();
					}

					if ($columnIndex == 'A') {
						$nmkabkota = $cell->getValue();
					}

					if ($columnIndex == 'H') {
						$nmbidang = $cell->getValue();
					}

				}

				if ($no == 1) {
					$this->M_penilaian->delete('data_krisna_siap', ['pengusul_nama' => $nmkabkota, 'bidang' => $nmbidang]);
				}

				

				$this->M_penilaian->save('data_krisna_siap', $rowData);



				$no++;

			}

		}

		$dataBa = array(
			'dataTabel' => $this->M_penilaian->getDataKrisnaSiapById($nmkabkota, $nmbidang),
			'dataSubBidang' => $this->M_penilaian->getSubMenu($nmkabkota, $nmbidang),
			'dataHeader' => $this->M_penilaian->getDataheaderKrisnaSiap($nmkabkota, $nmbidang),
			'nm_petugas_desk' => $nm_petugas_desk,
			'opd_dinas' => $opd_dinas,
			'nm_peserta_desk' => $nm_peserta_desk,
			'no_hp' => $no_hp,
			'dit_air_minum' => $dit_air_minum,
			'ttd_pfid' => $ttd_pfid,
			'ttd_pemda' => $ttd_pemda,
			'ttd_bppw' => $ttd_bppw,
			'nmProvinsi' => $nmprovinsi,
			'nmKabKota' => $nmkabkota,
			'nmBidang' => $nmbidang
		);



		$html = $this->load->view('ModuleSimoni/pdf1SudahSiap', $dataBa, TRUE);
		$html2 = $this->load->view('ModuleSimoni/pdf2SudahSiap', $dataBa, TRUE);
		
		$combined_html = $html.$html2;
		ob_start();
		$dompdf = new Dompdf();
		$dompdf->set_option('isHtml5ParserEnabled', true);
		$dompdf->set_option('isRemoteEnabled', true);
		$dompdf->setPaper('A4', 'landscape'); 
		
		$dompdf->loadHtml($combined_html);
		$dompdf->render();
		$pdf_content = $dompdf->output();
		if (ob_get_level() > 0) {
			ob_end_clean();
		}
		$dompdf->stream('gabungan_pdf.pdf', array('Attachment' => 0));
		return;

		header('Content-Type: application/pdf');
		header("Content-Disposition: attachment; filename='test.pdf'");
		header('Content-Length: ' . strlen($pdf_content));



	}

	public function exportExcelAllData()
	{
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();


		$sheet->setCellValue('A1', 'pengusul_nama');
		$sheet->setCellValue('B1', 'provinsi');
		$sheet->setCellValue('C1', 'kecamatan');
		$sheet->setCellValue('D1', 'desa');
		$sheet->setCellValue('E1', 'sistem');
		$sheet->setCellValue('F1', 'bidang');
		$sheet->setCellValue('G1', 'subbidang');
		$sheet->setCellValue('H1', 'menu');
		$sheet->setCellValue('I1', 'rincian');
		$sheet->setCellValue('J1', 'pengadaan_ids');
		$sheet->setCellValue('K1', 'volume');
		$sheet->setCellValue('L1', 'satuan');
		$sheet->setCellValue('M1', 'unit_cost');
		$sheet->setCellValue('N1', 'usulan');
		$sheet->setCellValue('O1', 'komponen');
		$sheet->setCellValue('P1', 'volume_kl');
		$sheet->setCellValue('Q1', 'unit_cost_kl');
		$sheet->setCellValue('R1', 'usulan_kl');
		$sheet->setCellValue('S1', 'volume_dit');
		$sheet->setCellValue('T1', 'unit_cost_dit');
		$sheet->setCellValue('U1', 'usulan_dit');
		$sheet->setCellValue('V1', 'approval_kl');
		$sheet->setCellValue('W1', 'approval_dit');
		$sheet->setCellValue('X1', 'Approval_Sum');
		$sheet->setCellValue('Y1', 'note_kl');
		$sheet->setCellValue('Z1', 'note_dit');
		$sheet->setCellValue('AA1', 'pengadaan_sinkron_ids');
		$sheet->setCellValue('AB1', 'volume_sinkron_daerah');
		$sheet->setCellValue('AC1', 'unit_cost_sinkron_daerah');
		$sheet->setCellValue('AD1', 'usulan_sinkron_daerah');
		$sheet->setCellValue('AE1', 'volume_sinkron_kl');
		$sheet->setCellValue('AF1', 'unit_cost_sinkron_kl');
		$sheet->setCellValue('AG1', 'usulan_sinkron_kl');
		$sheet->setCellValue('AH1', 'volume_sinkron_dit');
		$sheet->setCellValue('AI1', 'unit_cost_sinkron_dit');
		$sheet->setCellValue('AJ1', 'usulan_sinkron_dit');
		$sheet->setCellValue('AK1', 'volume_sinkron_pusat');
		$sheet->setCellValue('AL1', 'unit_cost_sinkron_pusat');
		$sheet->setCellValue('AM1', 'usulan_sinkron_pusat');
		$sheet->setCellValue('AN1', 'komponen_sinkron');
		$sheet->setCellValue('AO1', 'approval_sinkron_kl');
		$sheet->setCellValue('AP1', 'approval_sinkron_dit');
		$sheet->setCellValue('AQ1', 'approval_sinkron_sum');
		$sheet->setCellValue('AR1', 'note_sinkron_kl');
		$sheet->setCellValue('AS1', 'note_sinkron_dit');
		



        // Get data from database
		$data = $this->M_penilaian->getDataExportKrisnaBelumSiap();

        $row = 2; // Start from row 2
        foreach ($data as $item) {
        	$sheet->setCellValue('A'.$row, $item->pengusul_nama);
        	$sheet->setCellValue('B'.$row, $item->provinsi);
        	$sheet->setCellValue('C'.$row, $item->kecamatan);
        	$sheet->setCellValue('D'.$row, $item->desa);
        	$sheet->setCellValue('E'.$row, $item->sistem);
        	$sheet->setCellValue('F'.$row, $item->bidang);
        	$sheet->setCellValue('G'.$row, $item->subbidang);
        	$sheet->setCellValue('H'.$row, $item->menu);
        	$sheet->setCellValue('I'.$row, $item->rincian);
        	$sheet->setCellValue('J'.$row, $item->pengadaan_ids);
        	$sheet->setCellValue('K'.$row, $item->volume);
        	$sheet->setCellValue('L'.$row, $item->satuan);
        	$sheet->setCellValue('M'.$row, $item->unit_cost);
        	$sheet->setCellValue('N'.$row, $item->usulan);
        	$sheet->setCellValue('O'.$row, $item->komponen);
        	$sheet->setCellValue('P'.$row, $item->volume_kl);
        	$sheet->setCellValue('Q'.$row, $item->unit_cost_kl);
        	$sheet->setCellValue('R'.$row, $item->usulan_kl);
        	$sheet->setCellValue('S'.$row, $item->volume_dit);
        	$sheet->setCellValue('T'.$row, $item->unit_cost_dit);
        	$sheet->setCellValue('U'.$row, $item->usulan_dit);
        	$sheet->setCellValue('V'.$row, $item->approval_kl);
        	$sheet->setCellValue('W'.$row, $item->approval_dit);
        	$sheet->setCellValue('X'.$row, $item->Approval_Sum);
        	$sheet->setCellValue('Y'.$row, $item->note_kl);
        	$sheet->setCellValue('Z'.$row, $item->note_dit);
        	$sheet->setCellValue('AA'.$row, $item->pengadaan_sinkron_ids);
        	$sheet->setCellValue('AB'.$row, $item->volume_sinkron_daerah);
        	$sheet->setCellValue('AC'.$row, $item->unit_cost_sinkron_daerah);
        	$sheet->setCellValue('AD'.$row, $item->usulan_sinkron_daerah);
        	$sheet->setCellValue('AE'.$row, $item->volume_sinkron_kl);
        	$sheet->setCellValue('AF'.$row, $item->unit_cost_sinkron_kl);
        	$sheet->setCellValue('AG'.$row, $item->usulan_sinkron_kl);
        	$sheet->setCellValue('AH'.$row, $item->volume_sinkron_dit);
        	$sheet->setCellValue('AI'.$row, $item->unit_cost_sinkron_dit);
        	$sheet->setCellValue('AJ'.$row, $item->usulan_sinkron_dit);
        	$sheet->setCellValue('AK'.$row, $item->volume_sinkron_pusat);
        	$sheet->setCellValue('AL'.$row, $item->unit_cost_sinkron_pusat);
        	$sheet->setCellValue('AM'.$row, $item->usulan_sinkron_pusat);
        	$sheet->setCellValue('AN'.$row, $item->komponen_sinkron);
        	$sheet->setCellValue('AO'.$row, $item->approval_sinkron_kl);
        	$sheet->setCellValue('AP'.$row, $item->approval_sinkron_dit);
        	$sheet->setCellValue('AQ'.$row, $item->approval_sinkron_sum);
        	$sheet->setCellValue('AR'.$row, $item->note_sinkron_kl);
        	$sheet->setCellValue('AS'.$row, $item->note_sinkron_dit);
        	$row++;
        }


        $writer = new Xlsx($spreadsheet);


        $filename = 'data_export.xlsx';


        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        $writer->save('php://output');
    }

}