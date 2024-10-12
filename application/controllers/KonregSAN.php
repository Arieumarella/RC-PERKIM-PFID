<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;

class KonregSAN extends CI_Controller {

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
		$this->load->model('M_konregSan');
	}


	public function index()
	{
		$tmp = array(
			'tittle' => 'BA Konsultasi Program Sanitasi',
			'tittle_header' => 'BA Konsultasi Program Sanitasi',
			'content' => 'konreg/konregSan',
			'ta' => $this->session->userdata('thang'),
			'dataProvinsi' => $this->M_konregSan->getProvinsiBySan()

		);

		$this->load->view('tamplate/baseTamplate', $tmp);
	}


	public function getDataKabKota()
	{
		$kdlokasi = $this->input->post('kdlokasi');

		$data = $this->M_konregSan->getKabKota($kdlokasi);

		echo json_encode($data);

	}


	public function getDataTematik()
	{
		$kdsatker = $this->input->post('kdsatker');

		$data = $this->M_konregSan->getDataTematik($kdsatker);

		echo json_encode($data);
	}


	public function getDataBaSan()
	{
		
		$kdlokasi = clean($this->input->post('kdlokasi'));
		$kdkabkota = clean($this->input->post('kdkabkota'));
		$tematik = clean($this->input->post('tematik'));
		$kdsatker = $kdkabkota;
		$ta = $this->session->userdata('thang');

		$dataAwal = $this->M_dinamis->getById('t_data_konreg_san', ['kdsatker' => $kdsatker, 'ta' => $ta]);
		$dataBody = $this->M_dinamis->getById('t_data_ba_konreg_san', ['kdsatker' => $kdsatker, 'kdTematik' => $tematik, 'ta' => $ta]);

		echo json_encode(['code' => 200, 'dataAwal' => $dataAwal, 'dataBody' => $dataBody]);

	}


	public function simpanBaKonregSan($value='')
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
		$checkSSK = $this->input->post('checkSSK');
		$catatSSK = $this->input->post('catatSSK');
		$checkDed = $this->input->post('checkDed');
		$catatDed = $this->input->post('catatDed');
		$checkRab = $this->input->post('checkRab');
		$catatRab = $this->input->post('catatRab');
		$checkSpkp = $this->input->post('checkSpkp');
		$catatSpkp = $this->input->post('catatSpkp');
		$checkKlbs = $this->input->post('checkKlbs');
		$catatKlbs = $this->input->post('catatKlbs');
		$checkDcpm = $this->input->post('checkDcpm');
		$catatDcpm = $this->input->post('catatDcpm');
		$checkIplt = $this->input->post('checkIplt');
		$catatIplt = $this->input->post('catatIplt');
		$checkJustifikasi = $this->input->post('checkJustifikasi');
		$catatJustifikasi = $this->input->post('catatJustifikasi');
		$checkSmkd = $this->input->post('checkSmkd');
		$catatSmkd = $this->input->post('catatSmkd');
		$checkSpl = $this->input->post('checkSpl');
		$catakSpl = $this->input->post('catakSpl');
		$checkBppw = $this->input->post('checkBppw');
		$catakBppw = $this->input->post('catakBppw');
		$checkIDpr = $this->input->post('checkIDpr');
		$catakIDpr = $this->input->post('catakIDpr');
		$checkIRab = $this->input->post('checkIRab');
		$catakIRab = $this->input->post('catakIRab');
		$checkIBll = $this->input->post('checkIBll');
		$catakIBll = $this->input->post('catakIBll');
		$checkIDjt = $this->input->post('checkIDjt');
		$catakIDjt = $this->input->post('catakIDjt');
		$checkIMasterPlan = $this->input->post('checkIMasterPlan');
		$catakIMasterPlan = $this->input->post('catakIMasterPlan');
		$checkIAmdal = $this->input->post('checkIAmdal');
		$catakIAmdal = $this->input->post('catakIAmdal');
		$checkIKlp = $this->input->post('checkIKlp');
		$catakIKlp = $this->input->post('catakIKlp');
		$checkIBisnis = $this->input->post('checkIBisnis');
		$catakIBisnis = $this->input->post('catakIBisnis');
		$checkIBkll = $this->input->post('checkIBkll');
		$catakIBkll = $this->input->post('catakIBkll');
		$checkIAbd = $this->input->post('checkIAbd');
		$catakIAbd = $this->input->post('catakIAbd');
		$checkIBpkp = $this->input->post('checkIBpkp');
		$catakIBpkp = $this->input->post('catakIBpkp');
		$checkITrukTinja = $this->input->post('checkITrukTinja');
		$catakITrukTinja = $this->input->post('catakITrukTinja');
		$checkPPembangunan = $this->input->post('checkPPembangunan');
		$catatPPembangunan = $this->input->post('catatPPembangunan');
		$checkPRab = $this->input->post('checkPRab');
		$catakPRab = $this->input->post('catakPRab');
		$checkPSpkp = $this->input->post('checkPSpkp');
		$catakPSpkp = $this->input->post('catakPSpkp');
		$checkPBll = $this->input->post('checkPBll');
		$catakPBll = $this->input->post('catakPBll');
		$checkPKbp = $this->input->post('checkPKbp');
		$catakPKbp = $this->input->post('catakPKbp');
		$checkPDcpm = $this->input->post('checkPDcpm');
		$catakPDcpm = $this->input->post('catakPDcpm');
		$checkPBkaw = $this->input->post('checkPBkaw');
		$catakPBkaw = $this->input->post('catakPBkaw');
		$checkPSPKD = $this->input->post('checkPSPKD');
		$catakPSPKD = $this->input->post('catakPSPKD');
		$checkPDddl = $this->input->post('checkPDddl');
		$catakPDddl = $this->input->post('catakPDddl');
		$checkJtp = $this->input->post('checkJtp');
		$catakJtp = $this->input->post('catakJtp');
		$checkSKKKP = $this->input->post('checkSKKKP');
		$catakSKKKP = $this->input->post('catakSKKKP');
		$checkAbdTp = $this->input->post('checkAbdTp');
		$catakAbdTp = $this->input->post('catakAbdTp');

		$air_limba_na = $this->input->post('air_limba_na');
		$air_limba_na_iplt = $this->input->post('air_limba_na_iplt');
		$persambahan_na = $this->input->post('persambahan_na');

		
		
		
		

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
			'checkSSK' => $checkSSK,
			'catatSSK' => $catatSSK,
			'checkDed' => $checkDed,
			'catatDed' => $catatDed,
			'checkRab' => $checkRab,
			'catatRab' => $catatRab,
			'checkSpkp' => $checkSpkp,
			'catatSpkp' => $catatSpkp,
			'checkKlbs' => $checkKlbs,
			'catatKlbs' => $catatKlbs,
			'checkDcpm' => $checkDcpm,
			'catatDcpm' => $catatDcpm,
			'checkIplt' => $checkIplt,
			'catatIplt' => $catatIplt,
			'checkJustifikasi' => $checkJustifikasi,
			'catatJustifikasi' => $catatJustifikasi,
			'checkSmkd' => $checkSmkd,
			'catatSmkd' => $catatSmkd,
			'checkSpl' => $checkSpl,
			'catakSpl' => $catakSpl,
			'checkBppw' => $checkBppw,
			'catakBppw' => $catakBppw,
			'checkIDpr' => $checkIDpr,
			'catakIDpr' => $catakIDpr,
			'checkIRab' => $checkIRab,
			'catakIRab' => $catakIRab,
			'checkIBll' => $checkIBll,
			'catakIBll' => $catakIBll,
			'checkIDjt' => $checkIDjt,
			'catakIDjt' => $catakIDjt,
			'checkIMasterPlan' => $checkIMasterPlan,
			'catakIMasterPlan' => $catakIMasterPlan,
			'checkIAmdal' => $checkIAmdal,
			'catakIAmdal' => $catakIAmdal,
			'checkIKlp' => $checkIKlp,
			'catakIKlp' => $catakIKlp,
			'checkIBisnis' => $checkIBisnis,
			'catakIBisnis' => $catakIBisnis,
			'checkIBkll' => $checkIBkll,
			'catakIBkll' => $catakIBkll,
			'checkIAbd' => $checkIAbd,
			'catakIAbd' => $catakIAbd,
			'checkIBpkp' => $checkIBpkp,
			'catakIBpkp' => $catakIBpkp,
			'checkITrukTinja' => $checkITrukTinja,
			'catakITrukTinja' => $catakITrukTinja,
			'checkPPembangunan' => $checkPPembangunan,
			'catatPPembangunan' => $catatPPembangunan,
			'checkPRab' => $checkPRab,
			'catakPRab' => $catakPRab,
			'checkPSpkp' => $checkPSpkp,
			'catakPSpkp' => $catakPSpkp,
			'checkPBll' => $checkPBll,
			'catakPBll' => $catakPBll,
			'checkPKbp' => $checkPKbp,
			'catakPKbp' => $catakPKbp,
			'checkPDcpm' => $checkPDcpm,
			'catakPDcpm' => $catakPDcpm,
			'checkPBkaw' => $checkPBkaw,
			'catakPBkaw' => $catakPBkaw,
			'checkPSPKD' => $checkPSPKD,
			'catakPSPKD' => $catakPSPKD,
			'checkPDddl' => $checkPDddl,
			'catakPDddl' => $catakPDddl,
			'checkJtp' => $checkJtp,
			'catakJtp' => $catakJtp,
			'checkSKKKP' => $checkSKKKP,
			'catakSKKKP' => $catakSKKKP,
			'checkAbdTp' => $checkAbdTp,
			'catakAbdTp' => $catakAbdTp,
			'catatanAll' => $catatanAll,
			'kdPersentase' => $kdPersentase,
			'kondisiAirLimba' => $air_limba_na,
			'kondisiAirLimbaIplt' => $air_limba_na_iplt,
			'kondisiPersampahan' => $persambahan_na,
			'ta' => $this->session->userdata('thang')
		);

		$this->M_dinamis->delete('t_data_ba_konreg_san', ['kdsatker' => $kdsatkerHidden, 'kdTematik' => $kdTematikHidden, 'ta' => $this->session->userdata('thang')]);
		$pros = $this->M_dinamis->save('t_data_ba_konreg_san', $dataInsert);

		echo json_encode(['code' => ($pros) ? 200 :500]);
		
	}


	public function prsCetakBaAM()
	{
		$kdsatkerBa = $this->input->post('kdsatkerBa'); 
		$tematikBa = $this->input->post('tematikBa');
		$peserta = $this->input->post('peserta');
		$noTlp = $this->input->post('noTlp');
		$ttdDaerah = $this->input->post('ttdDaerah');
		$jabatanttdDaerah = $this->input->post('jabatanttdDaerah');
		$balai = $this->input->post('balai');
		$jabatanBalai = $this->input->post('jabatanBalai');
		$ck1 = $this->input->post('ck1');
		$jabatanCk1 = $this->input->post('jabatanCk1');
		$ck2 = $this->input->post('ck2');
		$jabatanCk2 = $this->input->post('jabatanCk2');
		$Pfid = $this->input->post('Pfid');
		$jabatanPfid = $this->input->post('jabatanPfid');
		$ta = $this->session->userdata('thang');

		$tmp = array(
			'kdsatkerBa'  => $kdsatkerBa,
			'tematikBa' => $tematikBa,
			'peserta' => $peserta,
			'noTlp' => $noTlp,
			'ttdDaerah' => $ttdDaerah,
			'jabatanttdDaerah' => $jabatanttdDaerah,
			'balai' => $balai,
			'jabatanBalai' => $jabatanBalai,
			'ck1' => $ck1,
			'nmProvinsi' => $this->M_dinamis->getById('t_data_konreg_san', ['kdsatker' => $kdsatkerBa, 'ta' => $ta])->nmlokasi,
			'NmKabKota' => $this->M_dinamis->getById('t_data_konreg_san', ['kdsatker' => $kdsatkerBa, 'ta' => $ta])->nmkabkota,
			'jabatanCk1' => $jabatanCk1,
			'ck2' => $ck2,
			'jabatanCk2' => $jabatanCk2,
			'Pfid' => $Pfid,
			'jabatanPfid' => $jabatanPfid,
			'dataTabel' => $this->M_dinamis->getById('t_data_ba_konreg_am', ['kdsatker' => $kdsatkerBa, 'KdTematik' => clean($tematikBa)]),
			'dataHeader' => $this->M_dinamis->getById('t_data_konreg_san', ['kdsatker' => $kdsatkerBa, 'ta' => $ta]),
			'ta' => $this->session->userdata('thang')
		);



		$html= $this->load->view('ModuleSimoni/pdfkonregAM', $tmp, TRUE);

		$dompdf = new Dompdf();
		$dompdf->set_option('isHtml5ParserEnabled', true);
		$dompdf->set_option('isRemoteEnabled', true);
		$dompdf->setPaper('A4', 'portrait'); 
		$dompdf->loadHtml($html);
		$dompdf->render();
		$pdf_content = $dompdf->output();
		ob_end_clean();
		$dompdf->stream('BA_pdf.pdf', array('Attachment' => 0));
	}
	


}