<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_konregSan extends CI_Model {


	public function getProvinsiBySan()
	{

		$ta = $this->session->userdata('thang');

		return $this->db->query("select mid(kdsatker,3,2) as kdlokasi, nmlokasi from t_data_konreg_san where ta='$ta' GROUP BY  mid(kdsatker,3,2)")->result();
	}


	public function getKabKota($kdlokasi=NULL)
	{
		$ta = $this->session->userdata('thang');

		return $this->db->query("select kdsatker,nmkabkota from `t_data_konreg_san` where MID(kdsatker,3,2)='$kdlokasi' AND ta='$ta' GROUP BY kdsatker")->result();
	}


	public function getDataTematik($kdsatker=null)
	{
		$ta = $this->session->userdata('thang');

		return $this->db->query("select ld_total, kt_alokasi_pemda, ki_alokasi_pemda, total_alokasi from `t_data_konreg_san` WHERE kdsatker='$kdsatker' AND ta='$ta'")->row();
	}


}