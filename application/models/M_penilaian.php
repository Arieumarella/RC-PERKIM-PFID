<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penilaian extends CI_Model {

	public function getDataSimoniKrisnaBelumSiap($kdsatker)
	{

		$ta = $this->session->userdata('thang');

		$qry = "SELECT a.sts_copy,a.id,a.kdsatker,a.idpaket,a.kecamatan,a.desa,a.sistem,a.bidang,a.subbidang,a.menu,a.rincian,a.pengadaan AS pengadaan1,a.volume AS volume1,a.satuan AS satuan1,a.harga_satuan AS harga_satuan1,a.usulan AS usulan1,a.Approval_KL AS Approval_KL1,a.Aprroval_PPN AS Aprroval_PPN1,a.Approval_Sum AS Approval_Sum1,a.Catatan_KL AS Catatan_KL1,a.Catatan_PPN AS Catatan_PPN1,a.komponen as komponen1, b.id AS id2,b.id_awal,IF(b.pengadaan IS NULL,a.pengadaan,b.pengadaan) AS pengadaan2,IF(b.volume IS NULL,a.volume,b.volume) AS volume2,IF(b.satuan IS NULL,a.satuan,b.satuan) AS satuan2,IF(b.harga_satuan IS NULL,a.harga_satuan,b.harga_satuan) AS harga_satuan2,IF(b.usulan IS NULL,a.usulan,b.usulan) AS usulan2,IF(b.Approval_KL IS NULL,a.Approval_KL,b.Approval_KL) AS Approval_KL2,IF(b.Aprroval_PPN IS NULL,a.Aprroval_PPN,b.Aprroval_PPN) AS Aprroval_PPN2,IF(b.Approval_Sum IS NULL,a.Approval_Sum,b.Approval_Sum) AS Approval_Sum2,IF(b.Catatan_KL IS NULL,a.Catatan_KL,b.Catatan_KL) AS Catatan_KL2,IF(b.Catatan_PPN IS NULL,a.Catatan_PPN,b.Catatan_PPN) AS Catatan_PPN2, IF(b.komponen IS NULL,a.komponen,b.komponen) AS komponen2
		FROM
		(SELECT * FROM data_awal_airminum WHERE kdsatker='$kdsatker' and ta=$ta) AS a
		LEFT JOIN
		(SELECT Y.*
			FROM
			(SELECT * FROM data_akhir_airminum WHERE kdsatker='$kdsatker' and ta=$ta) AS Y
			INNER JOIN
			(SELECT kdsatker,idpaket,MAX(id) AS id2 FROM data_akhir_airminum WHERE kdsatker='$kdsatker' and ta=$ta GROUP BY kdsatker,idpaket) AS z
			ON Y.kdsatker=z.kdsatker AND Y.idpaket=z.idpaket AND Y.id=z.id2) AS b ON a.kdsatker=b.kdsatker AND a.idpaket=b.idpaket and a.id=b.id_awal
		ORDER BY kdsatker,idpaket,id";
		
		return $this->db->query($qry)->result();
	}

	public function save($tabel, $data){
		return $this->db->insert($tabel, $data);
	}

	public function getById($tabel, $data)
	{
		return $this->db->get_where($tabel, $data)->row();
	}

	public function getMenu()
	{

		$qry = "SELECT menu FROM data_awal_airminum GROUP BY menu";

		return $this->db->query($qry)->result();
	}

	public function getAllSatuan()
	{	
		$qry = "SELECT satuan FROM data_awal_airminum GROUP BY satuan";
		return $this->db->query($qry)->result();
	}

	public function getrincianByMenu($menu)
	{
		$qry = "SELECT rincian as menu FROM data_awal_airminum WHERE menu='$menu' GROUP BY rincian";
		return $this->db->query($qry)->result();
	}

	public function insertDataCopy($idAwal, $dataInsertAwal, $dataInsertAkhir)
	{

		$this->db->trans_start(); 

		$this->db->insert('data_awal_airminum', $dataInsertAwal); 

		$insert_id = $this->db->insert_id(); 

		$dataInsertAkhir['id_awal'] = $insert_id;

		$this->db->insert('data_akhir_airminum', $dataInsertAkhir); 

		$this->db->where('id', $idAwal);
		$this->db->update('data_awal_airminum', ['sts_copy' => '1']); 

		return $this->db->trans_complete(); 
	}

	public function getDataSimoniKrisnaHeader($kdsatker)
	{

		$ta = $this->session->userdata('thang');

		$qry = "SELECT kdsatker,SUM(IF(approval_kl=1,1,0)) AS usulan_approve_kl,SUM(IF(approval_kl=3,1,0)) AS usulan_discuss_kl, SUM(IF(approval_kl=1,2,0)) AS usulan_reject_kl, SUM(IF(approval_kl=1,harga_satuan*volume,0)) AS approve_kl,SUM(IF(approval_kl=3,harga_satuan*volume,0)) AS discuss_kl,SUM(IF(approval_kl=2,harga_satuan*volume,0)) AS reject_kl,SUM(IF(approval_ppn=1,1,0)) AS usulan_approve_ppn,SUM(IF(approval_ppn=3,1,0)) AS usulan_discuss_ppn, SUM(IF(approval_ppn=1,2,0)) AS usulan_reject_ppn,
		SUM(IF(approval_ppn=1,harga_satuan*volume,0)) AS approve_ppn,SUM(IF(approval_ppn=3,harga_satuan*volume,0)) AS discuss_ppn,SUM(IF(approval_ppn=2,harga_satuan*volume,0)) AS reject_ppn,
		SUM(IF((approval_kl=1 AND approval_ppn=1) OR (approval_kl=1 AND approval_ppn=1),harga_satuan*volume,0)) AS nilai_approve,
		SUM(IF(approval_kl=3 OR approval_ppn=3 OR approval_kl+approval_ppn=3,harga_satuan*volume,0)) AS nilai_discuss,
		SUM(IF((approval_kl=2 AND approval_ppn=2) OR (approval_kl=2 OR approval_ppn=2) OR (approval_kl=0 AND approval_ppn=0),harga_satuan*volume,0)) AS nilai_reject,
		SUM(IF((approval_kl=1 AND approval_ppn=1) OR (approval_kl=1 AND approval_ppn=1),1,0)) AS usulan_approve,
		SUM(IF(approval_kl=3 OR approval_ppn=3 OR approval_kl+approval_ppn=3,1,0)) AS usulan_discuss,
		SUM(IF((approval_kl=2 AND approval_ppn=2) OR (approval_kl=2 OR approval_ppn=2) OR (approval_kl=0 AND approval_ppn=0),1,0)) AS usulan_reject
		FROM
		(SELECT kdsatker,idpaket,volume,harga_satuan,IF(sts_data=0,0,c.approval_kl) AS approval_kl,IF(sts_data=0,0,c.approval_ppn) AS approval_ppn
			FROM
			(SELECT a.id,a.kdsatker,a.idpaket,IF (b.volume IS NULL ,a.volume,b.volume) AS volume,
				IF (b.harga_satuan IS NULL ,a.harga_satuan,b.harga_satuan) AS harga_satuan,
				IF (b.Approval_KL IS NULL ,a.Approval_KL,b.Approval_KL) AS approval_kl,
				IF (b.Aprroval_PPN IS NULL ,a.Aprroval_PPN,b.Aprroval_PPN) AS approval_ppn,
				IF(b.idpaket IS NULL,0,1) AS sts_data
				FROM
				(SELECT f.*
					FROM
					(SELECT * FROM data_awal_airminum WHERE kdsatker='$kdsatker' AND ta=$ta) AS f
					INNER JOIN
					(SELECT kdsatker,idpaket,MAX(id) AS id2 FROM data_awal_airminum WHERE kdsatker='$kdsatker' and ta=$ta GROUP BY kdsatker,idpaket) AS g
					ON f.kdsatker=g.kdsatker AND f.idpaket=g.idpaket AND f.id=g.id2) AS a
				LEFT JOIN
				(SELECT f.*
					FROM
					(SELECT * FROM data_akhir_airminum WHERE kdsatker='$kdsatker' and ta=$ta) AS f
					INNER JOIN
					(SELECT kdsatker,idpaket,MAX(id) AS id2 FROM data_akhir_airminum WHERE kdsatker='$kdsatker' and ta=$ta GROUP BY kdsatker,idpaket) AS g
					ON f.kdsatker=g.kdsatker AND f.idpaket=g.idpaket AND f.id=g.id2) AS b ON a.kdsatker=b.kdsatker AND a.idpaket=b.idpaket AND a.id=b.id_awal) AS c) AS e

		";

		return $this->db->query($qry)->row();
	}

	public function getDataDaerah($kdsatker)
	{

		$qry = "SELECT * FROM d009_dak_awal";

		return $this->db->query($qry)->row();
	}


	public function getDataTabelPDF($kdsatker, $subBidang)
	{
		$ta = $this->session->userdata('thang');

		$qry = "SELECT a.komponen as komponen1,a.sts_copy,a.id,a.kdsatker,a.idpaket,a.kecamatan,a.desa,a.sistem,a.bidang,a.subbidang,a.menu,a.rincian,a.pengadaan AS pengadaan1,a.volume AS volume1,a.satuan AS satuan1,a.harga_satuan AS harga_satuan1,a.usulan AS usulan1,a.Approval_KL AS Approval_KL1,a.Aprroval_PPN AS Aprroval_PPN1,a.Approval_Sum AS Approval_Sum1,a.Catatan_KL AS Catatan_KL1,a.Catatan_PPN AS Catatan_PPN1,b.id AS id2,b.id_awal,IF(b.pengadaan IS NULL,a.pengadaan,b.pengadaan) AS pengadaan2,IF(b.volume IS NULL,a.volume,b.volume) AS volume2,IF(b.satuan IS NULL,a.satuan,b.satuan) AS satuan2,IF(b.harga_satuan IS NULL,a.harga_satuan,b.harga_satuan) AS harga_satuan2,IF(b.usulan IS NULL,a.usulan,b.usulan) AS usulan2,IF(b.Approval_KL IS NULL,a.Approval_KL,b.Approval_KL) AS Approval_KL2,IF(b.Aprroval_PPN IS NULL,a.Aprroval_PPN,b.Aprroval_PPN) AS Aprroval_PPN2,IF(b.Approval_Sum IS NULL,a.Approval_Sum,b.Approval_Sum) AS Approval_Sum2,IF(b.Catatan_KL IS NULL,a.Catatan_KL,b.Catatan_KL) AS Catatan_KL2,IF(b.Catatan_PPN IS NULL,a.Catatan_PPN,b.Catatan_PPN) AS Catatan_PPN2, IF(b.komponen IS NULL,a.komponen,b.komponen) AS komponen2
		FROM
		(SELECT * FROM data_awal_airminum WHERE kdsatker='$kdsatker' and subbidang='$subBidang' and ta=$ta) AS a
		LEFT JOIN
		(SELECT Y.*
			FROM
			(SELECT * FROM data_akhir_airminum WHERE kdsatker='$kdsatker' and ta=$ta) AS Y
			INNER JOIN
			(SELECT kdsatker,idpaket,MAX(id) AS id2 FROM data_akhir_airminum WHERE kdsatker='$kdsatker' and ta=$ta GROUP BY kdsatker,idpaket) AS z
			ON Y.kdsatker=z.kdsatker AND Y.idpaket=z.idpaket AND Y.id=z.id2) AS b ON a.kdsatker=b.kdsatker AND a.idpaket=b.idpaket and a.id=b.id_awal
		ORDER BY kdsatker,idpaket,id";
		
		return $this->db->query($qry)->result();
	}


	public function getDataSimoniKrisnaHeaderBySubBidang($kdsatker, $subBidang)
	{

		$ta = $this->session->userdata('thang');

		$qry = "SELECT kdsatker,SUM(IF(approval_kl=1,1,0)) AS usulan_approve_kl,SUM(IF(approval_kl=3,1,0)) AS usulan_discuss_kl, SUM(IF(approval_kl=1,2,0)) AS usulan_reject_kl, SUM(IF(approval_kl=1,harga_satuan*volume,0)) AS approve_kl,SUM(IF(approval_kl=3,harga_satuan*volume,0)) AS discuss_kl,SUM(IF(approval_kl=2,harga_satuan*volume,0)) AS reject_kl,SUM(IF(approval_ppn=1,1,0)) AS usulan_approve_ppn,SUM(IF(approval_ppn=3,1,0)) AS usulan_discuss_ppn, SUM(IF(approval_ppn=1,2,0)) AS usulan_reject_ppn,
		SUM(IF(approval_ppn=1,harga_satuan*volume,0)) AS approve_ppn,SUM(IF(approval_ppn=3,harga_satuan*volume,0)) AS discuss_ppn,SUM(IF(approval_ppn=2,harga_satuan*volume,0)) AS reject_ppn,
		SUM(IF((approval_kl=1 AND approval_ppn=1) OR (approval_kl=1 AND approval_ppn=1),harga_satuan*volume,0)) AS nilai_approve,
		SUM(IF(approval_kl=3 OR approval_ppn=3 OR approval_kl+approval_ppn=3,harga_satuan*volume,0)) AS nilai_discuss,
		SUM(IF((approval_kl=2 AND approval_ppn=2) OR (approval_kl=2 OR approval_ppn=2) OR (approval_kl=0 AND approval_ppn=0),harga_satuan*volume,0)) AS nilai_reject,
		SUM(IF((approval_kl=1 AND approval_ppn=1) OR (approval_kl=1 AND approval_ppn=1),1,0)) AS usulan_approve,
		SUM(IF(approval_kl=3 OR approval_ppn=3 OR approval_kl+approval_ppn=3,1,0)) AS usulan_discuss,
		SUM(IF((approval_kl=2 AND approval_ppn=2) OR (approval_kl=2 OR approval_ppn=2) OR (approval_kl=0 AND approval_ppn=0),1,0)) AS usulan_reject
		FROM
		(SELECT kdsatker,idpaket,volume,harga_satuan,IF(sts_data=0,0,c.approval_kl) AS approval_kl,IF(sts_data=0,0,c.approval_ppn) AS approval_ppn
			FROM
			(SELECT a.id,a.kdsatker,a.idpaket,IF (b.volume IS NULL ,a.volume,b.volume) AS volume,
				IF (b.harga_satuan IS NULL ,a.harga_satuan,b.harga_satuan) AS harga_satuan,
				IF (b.Approval_KL IS NULL ,a.Approval_KL,b.Approval_KL) AS approval_kl,
				IF (b.Aprroval_PPN IS NULL ,a.Aprroval_PPN,b.Aprroval_PPN) AS approval_ppn,
				IF(b.idpaket IS NULL,0,1) AS sts_data
				FROM
				(SELECT f.*
					FROM
					(SELECT * FROM data_awal_airminum WHERE kdsatker='$kdsatker' and subbidang='$subBidang' and ta=$ta) AS f
					INNER JOIN
					(SELECT kdsatker,idpaket,MAX(id) AS id2 FROM data_awal_airminum WHERE kdsatker='$kdsatker' and subbidang='$subBidang' and ta=$ta GROUP BY kdsatker,idpaket) AS g
					ON f.kdsatker=g.kdsatker AND f.idpaket=g.idpaket AND f.id=g.id2) AS a
				LEFT JOIN
				(SELECT f.*
					FROM
					(SELECT * FROM data_akhir_airminum WHERE kdsatker='$kdsatker' and ta=$ta) AS f
					INNER JOIN
					(SELECT kdsatker,idpaket,MAX(id) AS id2 FROM data_akhir_airminum WHERE kdsatker='$kdsatker' and ta=$ta GROUP BY kdsatker,idpaket) AS g
					ON f.kdsatker=g.kdsatker AND f.idpaket=g.idpaket AND f.id=g.id2) AS b ON a.kdsatker=b.kdsatker AND a.idpaket=b.idpaket AND a.id=b.id_awal) AS c) AS e

		";

		return $this->db->query($qry)->row();
	}
	

	public function getHeaderAmBaru($kdsatker)
	{

		$ta = $this->session->userdata('thang');

		$qry = "SELECT kdsatker,SUM(IF(approval_kl=1,1,0)) AS usulan_approve_kl,SUM(IF(approval_kl=3,1,0)) AS usulan_discuss_kl, SUM(IF(approval_kl=1,2,0)) AS usulan_reject_kl, SUM(IF(approval_kl=1,harga_satuan*volume,0)) AS approve_kl,SUM(IF(approval_kl=3,harga_satuan*volume,0)) AS discuss_kl,SUM(IF(approval_kl=2,harga_satuan*volume,0)) AS reject_kl,SUM(IF(approval_ppn=1,1,0)) AS usulan_approve_ppn,SUM(IF(approval_ppn=3,1,0)) AS usulan_discuss_ppn, SUM(IF(approval_ppn=1,2,0)) AS usulan_reject_ppn,
		SUM(IF(approval_ppn=1,harga_satuan*volume,0)) AS approve_ppn,SUM(IF(approval_ppn=3,harga_satuan*volume,0)) AS discuss_ppn,SUM(IF(approval_ppn=2,harga_satuan*volume,0)) AS reject_ppn,
		SUM(IF((approval_kl=1 AND approval_ppn=1) OR (approval_kl=1 AND approval_ppn=1),harga_satuan*volume,0)) AS nilai_approve,
		SUM(IF(approval_kl=3 OR approval_ppn=3 OR approval_kl+approval_ppn=3,harga_satuan*volume,0)) AS nilai_discuss,
		SUM(IF((approval_kl=2 AND approval_ppn=2) OR (approval_kl=2 OR approval_ppn=2) OR (approval_kl=0 AND approval_ppn=0),harga_satuan*volume,0)) AS nilai_reject,
		SUM(IF((approval_kl=1 AND approval_ppn=1) OR (approval_kl=1 AND approval_ppn=1),1,0)) AS usulan_approve,
		SUM(IF(approval_kl=3 OR approval_ppn=3 OR approval_kl+approval_ppn=3,1,0)) AS usulan_discuss,
		SUM(IF((approval_kl=2 AND approval_ppn=2) OR (approval_kl=2 OR approval_ppn=2) OR (approval_kl=0 AND approval_ppn=0),1,0)) AS usulan_reject
		FROM
		(SELECT kdsatker,idpaket,volume,harga_satuan,IF(sts_data=0,0,c.approval_kl) AS approval_kl,IF(sts_data=0,0,c.approval_ppn) AS approval_ppn
			FROM
			(SELECT a.id,a.kdsatker,a.idpaket,IF (b.volume IS NULL ,a.volume,b.volume) AS volume,
				IF (b.harga_satuan IS NULL ,a.harga_satuan,b.harga_satuan) AS harga_satuan,
				IF (b.Approval_KL IS NULL ,a.Approval_KL,b.Approval_KL) AS approval_kl,
				IF (b.Aprroval_PPN IS NULL ,a.Aprroval_PPN,b.Aprroval_PPN) AS approval_ppn,
				IF(b.idpaket IS NULL,0,1) AS sts_data
				FROM
				(SELECT f.*
					FROM
					(SELECT * FROM data_awal_airminum WHERE kdsatker='$kdsatker' and ta=$ta) AS f
					INNER JOIN
					(SELECT kdsatker,idpaket,MAX(id) AS id2 FROM data_awal_airminum WHERE kdsatker='$kdsatker' and ta=$ta GROUP BY kdsatker,idpaket) AS g
					ON f.kdsatker=g.kdsatker AND f.idpaket=g.idpaket AND f.id=g.id2) AS a
				LEFT JOIN
				(SELECT f.*
					FROM
					(SELECT * FROM data_akhir_airminum WHERE kdsatker='$kdsatker' and ta=$ta) AS f
					INNER JOIN
					(SELECT kdsatker,idpaket,MAX(id) AS id2 FROM data_akhir_airminum WHERE kdsatker='$kdsatker' and ta=$ta GROUP BY kdsatker,idpaket) AS g
					ON f.kdsatker=g.kdsatker AND f.idpaket=g.idpaket AND f.id=g.id2) AS b ON a.kdsatker=b.kdsatker AND a.idpaket=b.idpaket AND a.id=b.id_awal) AS c) AS e";

		return $this->db->query($qry)->row();
	}


	public function dataSubBidang($kdsatker)
	{
		$ta = $this->session->userdata('thang');
		$qry = "SELECT subbidang FROM data_awal_airminum WHERE kdsatker='$kdsatker' and ta=$ta GROUP BY subbidang";
		return $this->db->query($qry)->result();
	}


	public function delete($tabel, $data){
		$this->db->where($data);
		return $this->db->delete($tabel);
	}


	public function getDataKrisnaSiapById($nmkab, $nmBidang)
	{
		$ta = $this->session->userdata('thang');
		$qry = "SELECT * FROM data_krisna_siap WHERE pengusul_nama='$nmkab' AND bidang='$nmBidang' and ta=$ta";
		return $this->db->query($qry)->result();
	}


	public function getSubMenu($kabKota, $bidang)
	{
		$ta = $this->session->userdata('thang');

		$qry = "SELECT sub_bidang FROM data_krisna_siap WHERE kabupaten_nama='$kabKota' AND bidang='$bidang' and ta=$ta GROUP BY sub_bidang";

		return $this->db->query($qry)->result();
	}


	public function getDataheaderKrisnaSiap($nmKab, $nmBidang)
	{
		$ta = $this->session->userdata('thang');

		$qry = "SELECT pengusul_nama,
		SUM(IF(approval_sinkron_kl=1,1,0)) AS usulan_approve_kl,
		SUM(IF(approval_sinkron_kl=2,1,0)) AS usulan_reject_kl,
		SUM(IF(approval_sinkron_kl=3,1,0)) AS usulan_discuss_kl,
		SUM(IF(approval_sinkron_dit=1,1,0)) AS usulan_approve_ppn,
		SUM(IF(approval_sinkron_dit=2,1,0)) AS usulan_reject_ppn,
		SUM(IF(approval_sinkron_dit=3,1,0)) AS usulan_discuss_ppn,
		SUM(IF(approval_sinkron_sum=1,1,0)) AS usulan_approve_sinkron,
		SUM(IF(approval_sinkron_sum=1,1,0)) AS usulan_reject_sinkron,
		SUM(IF(approval_sinkron_sum=1,1,0)) AS usulan_discuss_sinkron,
		SUM(IF(approval_sinkron_kl=1,usulan_sinkron_kl,0)) AS nilai_approve_kl,
		SUM(IF(approval_sinkron_kl=2,nilai_usulan,0)) AS nilai_reject_kl,
		SUM(IF(approval_sinkron_kl=3,usulan_sinkron_kl,0)) AS nilai_discuss_kl,
		SUM(IF(approval_sinkron_dit=1,usulan_sinkron_dit,0)) AS nilai_approve_ppn,
		SUM(IF(approval_sinkron_dit=2,nilai_usulan,0)) AS nilai_reject_ppn,
		SUM(IF(approval_sinkron_dit=3,usulan_sinkron_dit,0)) AS nilai_discuss_ppn,
		SUM(IF(approval_sinkron_sum=1,usulan_sinkron_pusat,0)) AS nilai_approve_sinkron,
		SUM(IF(approval_sinkron_sum=2,nilai_usulan,0)) AS nilai_reject_sinkron,
		SUM(IF(approval_sinkron_sum=3,usulan_sinkron_pusat,0)) AS nilai_discuss_sinkron FROM data_krisna_siap WHERE pengusul_nama='$nmKab' AND bidang='$nmBidang' and ta=$ta GROUP BY pengusul_nama";

		return $this->db->query($qry)->row();

	}

	public function getDataExportKrisnaBelumSiap()
	{

		$ta = $this->session->userdata('thang');

		$qry = "SELECT nmkabkota AS pengusul_nama,nmlokasi AS provinsi,kecamatan,desa,sistem,bidang,subbidang,menu,rincian,a.pengadaan AS pengadaan_ids,a.volume,a.satuan,a.harga_satuan AS unit_cost,a.usulan,a.komponen,IF(a.approval_kl=1 OR a.approval_kl=3,a.volume,0) AS volume_kl,IF(a.approval_kl=1 OR a.approval_kl=3,a.harga_satuan,0) AS unit_cost_kl,IF(a.approval_kl=1 OR a.approval_kl=3,a.usulan,0) AS usulan_kl,IF(a.aprroval_ppn=1 OR a.aprroval_ppn=3,a.volume,0) AS volume_dit,IF(a.aprroval_ppn=1 OR a.aprroval_ppn=3,a.harga_satuan,0) AS unit_cost_dit,IF(a.aprroval_ppn=1 OR a.aprroval_ppn=3,a.usulan,0) AS usulan_dit,a.Approval_KL AS approval_kl,a.Aprroval_PPN AS approval_dit,a.Approval_Sum,a.Catatan_KL AS note_kl,a.Catatan_PPN AS note_dit,b.pengadaan AS pengadaan_sinkron_ids,b.volume AS volume_sinkron_daerah,b.harga_satuan AS unit_cost_sinkron_daerah,b.usulan AS usulan_sinkron_daerah,IF(b.approval_kl=1 OR b.approval_kl=3,b.volume,0) AS volume_sinkron_kl,IF(b.approval_kl=1 OR b.approval_kl=3,b.harga_satuan,0) AS unit_cost_sinkron_kl,IF(b.approval_kl=1 OR b.approval_kl=3,b.usulan,0) AS usulan_sinkron_kl,IF(b.aprroval_ppn=1 OR b.aprroval_ppn=3,b.volume,0) AS volume_sinkron_dit,IF(b.aprroval_ppn=1 OR b.aprroval_ppn=3,b.harga_satuan,0) AS unit_cost_sinkron_dit,IF(b.aprroval_ppn=1 OR b.aprroval_ppn=3,b.usulan,0) AS usulan_sinkron_dit,IF(b.approval_sum=1 OR b.approval_sum=3,b.volume,0) AS volume_sinkron_pusat,IF(b.approval_sum=1 OR b.approval_sum=3,b.harga_satuan,0) AS unit_cost_sinkron_pusat,IF(b.approval_sum=1 OR b.approval_sum=3,b.usulan,0) AS usulan_sinkron_pusat,b.komponen AS komponen_sinkron,b.Approval_KL AS approval_sinkron_kl,b.Aprroval_PPN AS approval_sinkron_dit,b.Approval_Sum AS approval_sinkron_sum,b.Catatan_KL AS note_sinkron_kl,b.Catatan_PPN AS note_sinkron_dit

		FROM
		(SELECT j.*
			FROM
			(SELECT * FROM data_awal_airminum where ta=$ta) AS j
			INNER JOIN
			(SELECT kdsatker,idpaket,MAX(id) AS id2 FROM data_awal_airminum WHERE ta=$ta GROUP BY kdsatker,idpaket) AS k ON j.kdsatker=k.kdsatker AND j.idpaket=k.idpaket AND j.id=k.id2 ORDER BY j.kdsatker,j.idpaket,j.id) AS a
		LEFT JOIN
		(SELECT j.*
			FROM
			(SELECT * FROM data_akhir_airminum WHERE ta=$ta) AS j
			INNER JOIN
			(SELECT kdsatker,idpaket,MAX(id) AS id2 FROM data_akhir_airminum WHERE ta=$ta GROUP BY kdsatker,idpaket) AS k ON j.kdsatker=k.kdsatker AND j.idpaket=k.idpaket AND j.id=k.id2 ORDER BY j.kdsatker,j.idpaket,j.id) AS b
		ON a.kdsatker=b.kdsatker AND a.idpaket=b.idpaket AND a.id=b.id_awal
		LEFT JOIN
		d009_dak_awal AS c ON LEFT(a.kdsatker,6)=c.kdsatker";

		return $this->db->query($qry)->result();
	}


	public function getDataProvinsiAM()
	{
		$qry = "SELECT MID(KdSatker,3,2) AS kdlokasi, nmlokasi FROM d009_dak_awal group by MID(KdSatker,3,2)";
		return $this->db->query($qry)->result();
	}



}