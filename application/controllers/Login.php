<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dinamis');
		$this->load->helper('captcha');
	}

	public function index()
	{
		if ($this->session->userdata('sts_login') == true) {
			redirect('/Home', 'refresh');
			return;
		}

		$this->load->view('login');
	}

	public function prs_login()
	{
		$username = $this->input->post('Username');
		$password = $this->input->post('password');
		$ip = $this->input->ip_address();

		if ($username == '' or $password == '') {

			$this->session->set_flashdata('psn', '
				<div class="alert alert-important alert-danger alert-dismissible" role="alert">
				<div class="d-flex">
				<div>
				<svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
				</div>
				<div>
				User ID / Password Tidak Boleh Kososng.!
				</div>
				</div>
				<a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
				</div>
				');

			redirect('/Login', 'refresh');
			return;
		}


		$where = array(
			'username' => $username,
			'sandi' => $password
		);

		$data = $this->M_dinamis->getById('pengguna', $where);


		if ($data == null) {
			$this->session->set_flashdata('psn', '
				<div class="alert alert-important alert-danger alert-dismissible" role="alert">
				<div class="d-flex">
				<div>
				<svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
				</div>
				<div>
				Username/Password Salah.!
				</div>
				</div>
				<a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
				</div>
				');

			redirect('/Login', 'refresh');
			return;
		}


		$dataInsertLog = array(
			'username' => $data->username,
			'nama' => $data->nama,
			'kdlokasi' => $data->kdlokasi,
			'kdkabkota' => $data->kdkabkota,
			'kdbidang' => $data->kdbidang,
			'timelog' => date('Y-m-d H:i:s'),
			'ip' => $this->input->ip_address(),
			'idx' => $data->ket,
			'aksi' => 'login'
		);

		$this->M_dinamis->save('userlogdak', $dataInsertLog);

		$dataSession = array(
			'rkdak_user' => $data->username,
			'rkdak_passwd' => $data->sandi,
			'rkdak_prive' => $data->prive,
			'rkdak_priv' => $data->prive,
			'rkdak_nama' => $data->nama,
			'rkdak_kdunit' => $data->kdunit,
			'rkdak_kdbidang' => $data->kdbidang,
			'rkdak_kdref' => $data->kdbidang,
			'rkdak_kdref2' => $data->kdref,
			'rkdak_kdsat' => $data->ket,
			'rkdak_kdlokasi' => $data->kdlokasi,
			'rkdak_prop' => $data->kdlokasi,
			'rkdak_ket' => $data->ket,
			'rkdak_kab' => $data->kdkabkota,
			'kd_balai' => $data->kd_balai,
			'rkdak_stat' => 'x',
			'thang' => date('Y'),
			'sts_login' => true,
			'ipc' => $ip,
			'kdlokasiBalai' => $data->kd_balai,
			'rkdak_dak' => $data->ket,
		);

		$this->session->set_userdata($dataSession);
		redirect('/Home', 'refresh');
	}

	public function logOut()
	{
		$this->session->sess_destroy();
		redirect('/Login', 'refresh');
	}


	public function getKabKota()
	{
		$kdlokasi = clean($this->input->post('isi'));

		$data = $this->M_dinamis->getResult('tkabkota', ['KDLOKASI' => $kdlokasi]);

		echo json_encode(['code' => 200, 'data' => $data]);

		return;
	}

	public function simpanPengajuanAkun()
	{
		$nama = clean($this->input->post('nama'));
		$Jabatan = clean($this->input->post('Jabatan'));
		$email = clean($this->input->post('email'));
		$tlp = clean($this->input->post('tlp'));
		$instansi = clean($this->input->post('instansi'));
		$alamatInstansi = clean($this->input->post('alamatInstansi'));
		$bidang = clean($this->input->post('bidang'));
		$prov = clean($this->input->post('prov'));
		$kabKota = clean($this->input->post('kabKota'));


		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.pdf';
		$config['max_size'] = 10000;

		$this->load->library('upload', $config);

		if (!empty($_FILES['suratPermohonan']['name'])) {

			if (!file_exists('assets/upload_surat_pengajuan_akun')) {
				mkdir('assets/upload_surat_pengajuan_akun');
			}

			$pathX = $_FILES['suratPermohonan']['name'];
			$ext = pathinfo($pathX, PATHINFO_EXTENSION);
			$path = 'assets/upload_surat_pengajuan_akun/';

			$config['upload_path'] = $path;
			$config['allowed_types'] = 'pdf';
			$config['file_name'] = 'upload_time_' . date('Y-m-d') . '_' . time() . '.' . $ext;
			$config['max_size'] = 10000;

			$this->upload->initialize($config);

			if (!$this->upload->do_upload('suratPermohonan')) {

				$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>GAGAL </strong> Form Pengajuan Akun Gagal Disubmit.!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');

				redirect('/Login', 'refresh');
				return;
			} else {

				$upload_data = $this->upload->data();
				$namaFile = $upload_data['file_name'];

				$dataInsert = array(
					'nama' => $nama,
					'jabatan' => $Jabatan,
					'wa' => $tlp,
					'kdlokasi' => $prov,
					'kdkabkota' => $kabKota,
					'kdbidang' => $bidang,
					'alamat' => $alamatInstansi,
					'instansi' => $instansi,
					'file' => $namaFile,
					'created_at' => date('Y-m-d H:i:s'),
					'email' => $email
				);

				$pros = $this->M_dinamis->save('t_pengajuanakun', $dataInsert);


				if ($pros) {
					$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Berhasil </strong> Form Berhasil Disubmit Silakan Menunggu Konfirmasi Status Pengajuan Akun Pada Email/Nomor WhatsApp.!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>');
				} else {
					$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>GAGAL </strong> Data gagal Disimpam.! Silakan Hubungi Developer.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>');
				}

				redirect('/Login', 'refresh');
				return;
			}
		}

		$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>GAGAL </strong> File Emty.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');

		redirect('/Login', 'refresh');
		return;
	}
}

/* End of file Login.php */
	/* Location: ./application/controllers/Login.php */