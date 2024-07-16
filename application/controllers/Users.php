<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
		$this->load->model('M_user');
	}


	public function index()
	{

		$tmp = array(
			'tittle' => 'User',
			'tittle_header' => 'User',
			'content' => 'User',
			'data' => $this->M_user->getAllData()
		);

		$this->load->view('tamplate/baseTamplate', $tmp);
	}


	public function prsEdit()
	{
		
		$kdsatker = $this->input->post('kdsatker');
		$username_hidden = $this->input->post('username_hidden');
		$Username = $this->input->post('Username');
		$Password = $this->input->post('Password');


		$dataInsert = array(
			'username' => $Username
		);

		if ($Password != null) {
			$dataInsert['sandi'] =  $Password;
		}


		$pros = $this->M_dinamis->update('pengguna', $dataInsert, ['ket' => $kdsatker, 'username' => $username_hidden]);


		if ($pros) {
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Data berhasil Disimpan.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}else{
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> Data Gagal Disimpan.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('Users', 'refresh');

	}



	public function prsHapus()
	{
		$kdsatker = $this->input->post('kdsatker');
		$username = $this->input->post('username');

		$pros = $this->M_dinamis->delete('pengguna', ['ket' => $kdsatker, 'username' => $username]);

		if ($pros) {
			$this->session->set_flashdata('psn', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> Data berhasil Dihapus.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}else{
			$this->session->set_flashdata('psn', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal </strong> Data Gagal Dihapus.!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		echo json_encode(['code' => ($pros) ? 200:500]);

	}


}