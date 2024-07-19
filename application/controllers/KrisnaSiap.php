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

class KrisnaSiap extends CI_Controller {

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


	public function index()
	{

		$tmp = array(
			'tittle' => 'BA Krisna Siap',
			'tittle_header' => 'BA Krisna Siap',
			'content' => 'KrisnaSiap'
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
		$ta = $this->session->userdata('thang');

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
		$idSubmit = date('i') . date('s') . mt_rand(100, 999);

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file_krisna')) {
			$error = $this->upload->display_errors();
			echo $error;
		} else {
			$data = $this->upload->data();
			$file_path = $data['full_path'];

			$spreadsheet = IOFactory::load($file_path);
			$worksheet = $spreadsheet->getActiveSheet();
			$kolomYgDiambil = ['A', 'B', 'C', 'D', 'E', 'H', 'I', 'K', 'S', 'AM', 'BD', 'F', 'AA', 'BE', 'BF', 'AN', 'AV', 'BA', 'BC', 'AZ', 'BB', 'AY', 'AS', 'AK'];

			$arrayDanKolom  = array(
				'A' => 'pengusul_nama',
				'B' => 'provinsi_nama',
				'C' => 'kabupaten_nama',
				'D' => 'kecamatan_nama',
				'E' => 'desa_nama',
				'H' => 'bidang',
				'I' => 'sub_bidang',
				'K' => 'menu',
				'S' => 'rincian',
				'AM' => 'pengadaan_sinkron_ids', // pengadaan_sinkron
				'BD' => 'volume_sinkron_pusat',
				'F' => 'sistem',
				'AA' => 'satuan',
				'BE' => 'unit_cost_sinkron_pusat',
				'BF' => 'usulan_sinkron_pusat',
				'AN' => 'komponen_sinkron',
				'AV' => 'approval_sinkron_kl',
				'BA' => 'approval_sinkron_dit',
				'BC' => 'approval_sinkron_sum',
				'AZ' => 'note_sinkron_kl',
				'BB' => 'note_sinkron_dit',
				'AY' => 'usulan_sinkron_kl',
				'AK' => 'nilai_usulan',
				'AS' => 'usulan_sinkron_dit' //Ini Jadi usulan_sinkron_daerah

			);

			$nmprovinsi = '';
			$nmkabkota = '';
			$nmKec = '';
			$nmDesa = '';
			$nmbidang = '';
			$no = 0;

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
					$this->M_rc24->deleteKrisnaSiap('data_krisna_siap', ['pengusul_nama' => $nmkabkota, 'bidang' => $nmbidang, 'ta' => $ta]);
				}



				$this->M_dinamis->save('data_krisna_siap', array_merge($rowData,['ta' => $ta]));



				$no++;
			}
		}

		$dataBa = array(
			'dataTabel' => $this->M_rc24->getDataKrisnaSiapByIdX($nmkabkota, $nmbidang, $ta),
			'dataSubBidang' => $this->M_rc24->getSubMenuXX($nmkabkota, $nmbidang, $ta),
			'dataHeader' => $this->M_rc24->getDataheaderKrisnaSiapXXXX($nmkabkota, $nmbidang, $ta),
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

		$combined_html = $html . $html2;

		$dompdf = new Dompdf();
		$dompdf->set_option('isHtml5ParserEnabled', true);
		$dompdf->set_option('isRemoteEnabled', true);
		$dompdf->setPaper('A4', 'landscape');

		$dompdf->loadHtml($combined_html);
		$dompdf->render();
		$pdf_content = $dompdf->output();
		ob_end_clean();
		$dompdf->stream('gabungan_pdf.pdf', array('Attachment' => 0));
		return;

		header('Content-Type: application/pdf');
		header("Content-Disposition: attachment; filename='test.pdf'");
		header('Content-Length: ' . strlen($pdf_content));
	}

}
