<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KonregAM extends CI_Controller {

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
		$this->load->model('M_konregAM');
	}


	public function index()
	{
		$tmp = array(
			'tittle' => 'BA Konsultasi Program AM',
			'tittle_header' => 'BA Konsultasi Program AM',
			'content' => 'konreg/konregAM',
			'ta' => $this->session->userdata('thang'),
			'dataProvinsi' => $this->M_konregAM->getProvinsiByAM()

		);

		$this->load->view('tamplate/baseTamplate', $tmp);
	}


	public function getDataKabKota()
	{
		$kdlokasi = $this->input->post('kdlokasi');

		$data = $this->M_konregAM->getKabKota($kdlokasi);

		echo json_encode($data);

	}


	public function getDataTematik()
	{
		$kdsatker = $this->input->post('kdsatker');

		$data = $this->M_konregAM->getDataTematik($kdsatker);

		echo json_encode($data);
	}


	public function getDataBaAm()
	{
		
		$kdlokasi = clean($this->input->post('kdlokasi'));
		$kdkabkota = clean($this->input->post('kdkabkota'));
		$tematik = clean($this->input->post('tematik'));
		$kdsatker = $kdkabkota;
		$ta = $this->session->userdata('thang');
		$select = '';

		$dataAwal = $this->M_dinamis->getById('t_data_konreg_am', ['kdsatker' => $kdsatker, 'ta' => $ta]);
		$dataBody = $this->M_dinamis->getById('t_data_ba_konreg_am', ['kdsatker' => $kdsatker, 'ta' => $ta]);

		echo json_encode(['code' => 200, 'dataAwal' => $dataAwal, 'dataBody' => $dataBody]);

	}


	public function simpanBaKonregAM($value='')
	{
		$paguAlokasitotalhidde = $this->input->post('paguAlokasitotalhidde');
		$minApproveHeaderHedden = $this->input->post('minApproveHeaderHedden');
		$maxPenunjangHedden = $this->input->post('maxPenunjangHedden');
		$kdsatkerHidden = $this->input->post('kdsatkerHidden');
		$kdTematikHidden = $this->input->post('kdTematikHidden');
		$nilaiFisik = $this->input->post('nilaiFisik');
		$catatFisik = $this->input->post('catatFisik');
		$checkOutput = $this->input->post('checkOutput');
		$catatOutput = $this->input->post('catatOutput');
		$checkKomponen = $this->input->post('checkKomponen');
		$catatKomponen = $this->input->post('catatKomponen');
		$nilaiPenunjang = $this->input->post('nilaiPenunjang');
		$checkPenunjang = $this->input->post('checkPenunjang');
		$rincianKegiatan = $this->input->post('rincianKegiatan');
		$fisikPenunjang = $this->input->post('fisikPenunjang');
		$fisikPenunjangCatat = $this->input->post('fisikPenunjangCatat');
		$checkSPTJM = $this->input->post('checkSPTJM');
		$catatSptjm = $this->input->post('catatSptjm');
		$checkRispam = $this->input->post('checkRispam');
		$catatRispam = $this->input->post('catatRispam');
		$checkDed = $this->input->post('checkDed');
		$dedCatat = $this->input->post('dedCatat');
		$checkRab = $this->input->post('checkRab');
		$rabCatat = $this->input->post('rabCatat');
		$checkIpa = $this->input->post('checkIpa');
		$ipaCatat = $this->input->post('ipaCatat');
		$checkRds = $this->input->post('checkRds');
		$rdsCatat = $this->input->post('rdsCatat');
		$checkPdam = $this->input->post('checkPdam');
		$pdamCatat = $this->input->post('pdamCatat');
		$checkPks = $this->input->post('checkPks');
		$pksCatat = $this->input->post('pksCatat');
		$catatanAll = $this->input->post('catatanAll');
		$kdPersentase = $this->input->post('kdPersentase');


		$dataInsert = array(
			'paguAlokasi' => $paguAlokasitotalhidde,
			'minApprove' => $minApproveHeaderHedden,
			'maxPenunjang' => $maxPenunjangHedden,
			'kdsatker' => $kdsatkerHidden,
			'kdTematik' => $kdTematikHidden,
			'nilaiFisik' => $nilaiFisik,
			'catatFisik' => $catatFisik,
			'checkOutput' => $checkOutput,
			'catatOutput' => $catatOutput,
			'checkKomponen' => $checkKomponen,
			'catatKomponen' => $catatKomponen,
			'nilaiPenunjang' => $nilaiPenunjang,
			'checkPenunjang' => $checkPenunjang,
			'rincianKegiatan' => $rincianKegiatan,
			'fisikPenunjang' => $fisikPenunjang,
			'fisikPenunjangCatat' => $fisikPenunjangCatat,
			'checkSPTJM' => $checkSPTJM,
			'catatSptjm' => $catatSptjm,
			'checkRispam' => $checkRispam,
			'catatRispam' => $catatRispam,
			'checkDed' => $checkDed,
			'dedCatat' => $dedCatat,
			'checkRab' => $checkRab,
			'rabCatat' => $rabCatat,
			'checkIpa' => $checkIpa,
			'ipaCatat' => $ipaCatat,
			'checkRds' => $checkRds,
			'rdsCatat' => $rdsCatat,
			'checkPdam' => $checkPdam,
			'pdamCatat' => $pdamCatat,
			'checkPks' => $checkPks,
			'pksCatat' => $pksCatat,
			'catatanAll' => $catatanAll,
			'kdPersentase' => $kdPersentase,
			'ta' => $this->session->userdata('thang')
		);

		$this->M_dinamis->delete('t_data_ba_konreg_am', ['kdsatker' => $kdsatkerHidden, 'ta' => $this->session->userdata('thang')]);
		$pros = $this->M_dinamis->save('t_data_ba_konreg_am', $dataInsert);

		echo json_encode(['code' => ($pros) ? 200 :500]);
		
	}
	


}