<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_PPKT extends CI_Model {


	public function getDataProvinsi()
	{
		$qry = "
		SELECT MID(KdSatker,3,2) AS kdlokasi, nmlokasi FROM d009_dak_awal GROUP BY nmlokasi
		";

		return $this->db->query($qry)->result();
	}


	public function getKabKota($kdlokasi)
	{

		$kdlokasi = clean($kdlokasi);	
		$qry = "SELECT CONCAT(left(KdSatker,7),'5') as KdSatker, nmkabkota FROM d009_dak_awal WHERE MID(KdSatker,3,2)='$kdlokasi' GROUP BY nmkabkota";

		return $this->db->query($qry)->result();
	}


	public function getDataTabelPPKT($kdsatker)
	{

		$ta = $this->session->userdata('thang');

		$qry = "SELECT nmkec,nmdesa,a.* FROM (SELECT * FROM t_rc_ppkt WHERE kdsatker='$kdsatker' and ta=$ta) AS a
		LEFT JOIN (SELECT * FROM t_kec2) AS b ON MID(a.kdsatker,3,2)=b.kdlokasi AND MID(a.kdsatker,5,2)=b.kdkabkota AND a.kdkec=b.kdkec
		LEFT JOIN (SELECT * FROM t_desa2) AS c ON MID(a.kdsatker,3,2)=c.kdlokasi AND MID(a.kdsatker,5,2)=c.kdkabkota AND a.kdkec=c.kdkec AND a.kddesa=c.kddesa";

		return $this->db->query($qry)->result();
	}


	public function getDataPPKTDokumen($id)
	{
		$id = clean($id);

		$qry = "
		WITH main_docs AS (
			SELECT id_ppkt,
			MAX(CASE WHEN jns_file = 'rc_utama' THEN path END) AS rc_utama,
			MAX(CASE WHEN jns_file = 'rc_tahap_1' THEN path END) AS rc_tahap_1,
			MAX(CASE WHEN jns_file = 'rc_tahap_2' THEN path END) AS rc_tahap_2,
			MAX(CASE WHEN jns_file = 'dokumen_expose' THEN path END) AS dokumen_expose
			FROM t_dok_ppkt
			WHERE id_ppkt = '$id'
			GROUP BY id_ppkt
			),

		
		stage_docs_1_5 AS (
			SELECT id_ppkt,
			MAX(CASE WHEN jns_file = '1_1' THEN path END) AS 1_1,
			MAX(CASE WHEN jns_file = '2_1' THEN path END) AS 2_1,
			MAX(CASE WHEN jns_file = '3_1' THEN path END) AS 3_1,
			MAX(CASE WHEN jns_file = '3_2' THEN path END) AS 3_2,
			MAX(CASE WHEN jns_file = '3_3' THEN path END) AS 3_3,
			MAX(CASE WHEN jns_file = '3_4' THEN path END) AS 3_4,
			MAX(CASE WHEN jns_file = '4_1' THEN path END) AS 4_1,
			MAX(CASE WHEN jns_file = '5_1' THEN path END) AS 5_1,
			MAX(CASE WHEN jns_file = '5_2' THEN path END) AS 5_2,
			MAX(CASE WHEN jns_file = '5_3' THEN path END) AS 5_3
			FROM t_dok_ppkt
			WHERE id_ppkt = '$id'
			GROUP BY id_ppkt
			),

		stage_docs_6_12 AS (
			SELECT id_ppkt,
			MAX(CASE WHEN jns_file = '6_1' THEN path END) AS 6_1,
			MAX(CASE WHEN jns_file = '6_2' THEN path END) AS 6_2,
			MAX(CASE WHEN jns_file = '7_1' THEN path END) AS 7_1,
			MAX(CASE WHEN jns_file = '7_2' THEN path END) AS 7_2,
			MAX(CASE WHEN jns_file = '7_3' THEN path END) AS 7_3,
			MAX(CASE WHEN jns_file = '7_4' THEN path END) AS 7_4,
			MAX(CASE WHEN jns_file = '7_5' THEN path END) AS 7_5,
			MAX(CASE WHEN jns_file = '7_6' THEN path END) AS 7_6,
			MAX(CASE WHEN jns_file = '7_7' THEN path END) AS 7_7,
			MAX(CASE WHEN jns_file = '7_8' THEN path END) AS 7_8,
			MAX(CASE WHEN jns_file = '7_9' THEN path END) AS 7_9,
			MAX(CASE WHEN jns_file = '8_1' THEN path END) AS 8_1,
			MAX(CASE WHEN jns_file = '8_2' THEN path END) AS 8_2,
			MAX(CASE WHEN jns_file = '8_3' THEN path END) AS 8_3,
			MAX(CASE WHEN jns_file = '8_4' THEN path END) AS 8_4,
			MAX(CASE WHEN jns_file = '8_5' THEN path END) AS 8_5,
			MAX(CASE WHEN jns_file = '8_6' THEN path END) AS 8_6,
			MAX(CASE WHEN jns_file = '8_7' THEN path END) AS 8_7,
			MAX(CASE WHEN jns_file = '8_8' THEN path END) AS 8_8,
			MAX(CASE WHEN jns_file = '8_9' THEN path END) AS 8_9,
			MAX(CASE WHEN jns_file = '9_1' THEN path END) AS 9_1,
			MAX(CASE WHEN jns_file = '9_2' THEN path END) AS 9_2,
			MAX(CASE WHEN jns_file = '9_4' THEN path END) AS 9_4,
			MAX(CASE WHEN jns_file = '9_5' THEN path END) AS 9_5,
			MAX(CASE WHEN jns_file = '9_6' THEN path END) AS 9_6,
			MAX(CASE WHEN jns_file = '9_7' THEN path END) AS 9_7,
			MAX(CASE WHEN jns_file = '9_8' THEN path END) AS 9_8,
			MAX(CASE WHEN jns_file = '9_9' THEN path END) AS 9_9,
			MAX(CASE WHEN jns_file = '10_1' THEN path END) AS 10_1,
			MAX(CASE WHEN jns_file = '10_2' THEN path END) AS 10_2,
			MAX(CASE WHEN jns_file = '10_3' THEN path END) AS 10_3,
			MAX(CASE WHEN jns_file = '10_4' THEN path END) AS 10_4,
			MAX(CASE WHEN jns_file = '10_5' THEN path END) AS 10_5,
			MAX(CASE WHEN jns_file = '10_6' THEN path END) AS 10_6,
			MAX(CASE WHEN jns_file = '10_7' THEN path END) AS 10_7,
			MAX(CASE WHEN jns_file = '10_8' THEN path END) AS 10_8,
			MAX(CASE WHEN jns_file = '10_9' THEN path END) AS 10_9,
			MAX(CASE WHEN jns_file = '11_1' THEN path END) AS 11_1,
			MAX(CASE WHEN jns_file = '11_2' THEN path END) AS 11_2,
			MAX(CASE WHEN jns_file = '11_3' THEN path END) AS 11_3,
			MAX(CASE WHEN jns_file = '11_4' THEN path END) AS 11_4,
			MAX(CASE WHEN jns_file = '11_5' THEN path END) AS 11_5,
			MAX(CASE WHEN jns_file = '11_6' THEN path END) AS 11_6,
			MAX(CASE WHEN jns_file = '11_7' THEN path END) AS 11_7,
			MAX(CASE WHEN jns_file = '11_8' THEN path END) AS 11_8,
			MAX(CASE WHEN jns_file = '11_9' THEN path END) AS 11_9,
			MAX(CASE WHEN jns_file = '12_1' THEN path END) AS 12_1,
			MAX(CASE WHEN jns_file = '12_2' THEN path END) AS 12_2,
			MAX(CASE WHEN jns_file = '12_3' THEN path END) AS 12_3,
			MAX(CASE WHEN jns_file = '12_4' THEN path END) AS 12_4,
			MAX(CASE WHEN jns_file = '12_5' THEN path END) AS 12_5,
			MAX(CASE WHEN jns_file = '12_6' THEN path END) AS 12_6,
			MAX(CASE WHEN jns_file = '12_7' THEN path END) AS 12_7
			FROM t_dok_ppkt
			WHERE id_ppkt = '$id'
			GROUP BY id_ppkt
			)

		SELECT 
		rc_utama.rc_utama, rc_tahap_1.rc_tahap_1, rc_tahap_2.rc_tahap_2, dokumen_expose.dokumen_expose,
		stage_docs_1_5.*, stage_docs_6_12.*, a.*
		FROM t_rc_ppkt AS a
		LEFT JOIN main_docs AS rc_utama ON a.id = rc_utama.id_ppkt
		LEFT JOIN main_docs AS rc_tahap_1 ON a.id = rc_tahap_1.id_ppkt
		LEFT JOIN main_docs AS rc_tahap_2 ON a.id = rc_tahap_2.id_ppkt
		LEFT JOIN main_docs AS dokumen_expose ON a.id = dokumen_expose.id_ppkt
		LEFT JOIN stage_docs_1_5 ON a.id = stage_docs_1_5.id_ppkt
		LEFT JOIN stage_docs_6_12 ON a.id = stage_docs_6_12.id_ppkt
		WHERE a.id = $id;";


		return $this->db->query($qry)->row();

	}


	public function getDataPPKTCatatan($id='')
	{

		$id = clean($id);

		$qry = "WITH catat_penilaian AS (
			SELECT 
			id_ppkt,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_1' THEN catatn END) AS catat_penilaian_1,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_2' THEN catatn END) AS catat_penilaian_2,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_3' THEN catatn END) AS catat_penilaian_3,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_4' THEN catatn END) AS catat_penilaian_4,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_5' THEN catatn END) AS catat_penilaian_5,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_6' THEN catatn END) AS catat_penilaian_6,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_7' THEN catatn END) AS catat_penilaian_7,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_8' THEN catatn END) AS catat_penilaian_8,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_9' THEN catatn END) AS catat_penilaian_9,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_10' THEN catatn END) AS catat_penilaian_10,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_11' THEN catatn END) AS catat_penilaian_11,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_12' THEN catatn END) AS catat_penilaian_12,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_13' THEN catatn END) AS catat_penilaian_13,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_14' THEN catatn END) AS catat_penilaian_14,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_15' THEN catatn END) AS catat_penilaian_15,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_16' THEN catatn END) AS catat_penilaian_16,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_17' THEN catatn END) AS catat_penilaian_17,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_18' THEN catatn END) AS catat_penilaian_18,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_19' THEN catatn END) AS catat_penilaian_19,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_20' THEN catatn END) AS catat_penilaian_20,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_21' THEN catatn END) AS catat_penilaian_21,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_22' THEN catatn END) AS catat_penilaian_22,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_23' THEN catatn END) AS catat_penilaian_23,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_24' THEN catatn END) AS catat_penilaian_24,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_25' THEN catatn END) AS catat_penilaian_25,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_26' THEN catatn END) AS catat_penilaian_26,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_27' THEN catatn END) AS catat_penilaian_27,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_28' THEN catatn END) AS catat_penilaian_28,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_29' THEN catatn END) AS catat_penilaian_29,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_30' THEN catatn END) AS catat_penilaian_30,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_31' THEN catatn END) AS catat_penilaian_31,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_32' THEN catatn END) AS catat_penilaian_32,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_34' THEN catatn END) AS catat_penilaian_34,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_35' THEN catatn END) AS catat_penilaian_35,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_36' THEN catatn END) AS catat_penilaian_36,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_37' THEN catatn END) AS catat_penilaian_37,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_38' THEN catatn END) AS catat_penilaian_38,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_39' THEN catatn END) AS catat_penilaian_39,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_40' THEN catatn END) AS catat_penilaian_40,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_41' THEN catatn END) AS catat_penilaian_41,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_42' THEN catatn END) AS catat_penilaian_42,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_43' THEN catatn END) AS catat_penilaian_43,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_44' THEN catatn END) AS catat_penilaian_44,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_45' THEN catatn END) AS catat_penilaian_45,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_46' THEN catatn END) AS catat_penilaian_46,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_47' THEN catatn END) AS catat_penilaian_47,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_48' THEN catatn END) AS catat_penilaian_48,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_49' THEN catatn END) AS catat_penilaian_49,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_50' THEN catatn END) AS catat_penilaian_50,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_51' THEN catatn END) AS catat_penilaian_51,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_52' THEN catatn END) AS catat_penilaian_52,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_53' THEN catatn END) AS catat_penilaian_53,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_54' THEN catatn END) AS catat_penilaian_54,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_55' THEN catatn END) AS catat_penilaian_55,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_56' THEN catatn END) AS catat_penilaian_56,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_57' THEN catatn END) AS catat_penilaian_57,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_58' THEN catatn END) AS catat_penilaian_58,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_59' THEN catatn END) AS catat_penilaian_59,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_60' THEN catatn END) AS catat_penilaian_60,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_61' THEN catatn END) AS catat_penilaian_61,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_62' THEN catatn END) AS catat_penilaian_62,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_63' THEN catatn END) AS catat_penilaian_63,
			MAX(CASE WHEN jns_catatan = 'catat_penilaian_64' THEN catatn END) AS catat_penilaian_64
			FROM t_catat_ppkt
			WHERE id_ppkt = $id
			GROUP BY id_ppkt
			),
catat_rincian AS (
	SELECT 
	id_ppkt,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_1' THEN catatn END) AS catat_rincian_1,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_2' THEN catatn END) AS catat_rincian_2,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_3' THEN catatn END) AS catat_rincian_3,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_4' THEN catatn END) AS catat_rincian_4,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_5' THEN catatn END) AS catat_rincian_5,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_6' THEN catatn END) AS catat_rincian_6,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_7' THEN catatn END) AS catat_rincian_7,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_8' THEN catatn END) AS catat_rincian_8,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_9' THEN catatn END) AS catat_rincian_9,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_10' THEN catatn END) AS catat_rincian_10,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_11' THEN catatn END) AS catat_rincian_11,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_12' THEN catatn END) AS catat_rincian_12,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_13' THEN catatn END) AS catat_rincian_13,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_14' THEN catatn END) AS catat_rincian_14,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_15' THEN catatn END) AS catat_rincian_15,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_16' THEN catatn END) AS catat_rincian_16,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_17' THEN catatn END) AS catat_rincian_17,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_18' THEN catatn END) AS catat_rincian_18,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_19' THEN catatn END) AS catat_rincian_19,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_20' THEN catatn END) AS catat_rincian_20,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_21' THEN catatn END) AS catat_rincian_21,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_22' THEN catatn END) AS catat_rincian_22,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_23' THEN catatn END) AS catat_rincian_23,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_24' THEN catatn END) AS catat_rincian_24,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_25' THEN catatn END) AS catat_rincian_25,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_26' THEN catatn END) AS catat_rincian_26,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_27' THEN catatn END) AS catat_rincian_27,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_28' THEN catatn END) AS catat_rincian_28,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_29' THEN catatn END) AS catat_rincian_29,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_30' THEN catatn END) AS catat_rincian_30,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_31' THEN catatn END) AS catat_rincian_31,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_32' THEN catatn END) AS catat_rincian_32,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_34' THEN catatn END) AS catat_rincian_34,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_35' THEN catatn END) AS catat_rincian_35,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_36' THEN catatn END) AS catat_rincian_36,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_37' THEN catatn END) AS catat_rincian_37,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_38' THEN catatn END) AS catat_rincian_38,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_39' THEN catatn END) AS catat_rincian_39,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_40' THEN catatn END) AS catat_rincian_40,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_41' THEN catatn END) AS catat_rincian_41,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_42' THEN catatn END) AS catat_rincian_42,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_43' THEN catatn END) AS catat_rincian_43,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_44' THEN catatn END) AS catat_rincian_44,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_45' THEN catatn END) AS catat_rincian_45,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_46' THEN catatn END) AS catat_rincian_46,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_47' THEN catatn END) AS catat_rincian_47,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_48' THEN catatn END) AS catat_rincian_48,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_49' THEN catatn END) AS catat_rincian_49,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_50' THEN catatn END) AS catat_rincian_50,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_51' THEN catatn END) AS catat_rincian_51,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_52' THEN catatn END) AS catat_rincian_52,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_53' THEN catatn END) AS catat_rincian_53,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_54' THEN catatn END) AS catat_rincian_54,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_55' THEN catatn END) AS catat_rincian_55,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_56' THEN catatn END) AS catat_rincian_56,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_57' THEN catatn END) AS catat_rincian_57,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_58' THEN catatn END) AS catat_rincian_58,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_59' THEN catatn END) AS catat_rincian_59,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_60' THEN catatn END) AS catat_rincian_60,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_61' THEN catatn END) AS catat_rincian_61,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_62' THEN catatn END) AS catat_rincian_62,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_63' THEN catatn END) AS catat_rincian_63,
	MAX(CASE WHEN jns_catatan = 'catat_rincian_64' THEN catatn END) AS catat_rincian_64
	FROM t_catat_ppkt
	WHERE id_ppkt = $id
	GROUP BY id_ppkt
)
SELECT * 
FROM catat_penilaian
LEFT JOIN catat_rincian USING (id_ppkt);";


return $this->db->query($qry)->row();

}


public function getRincianAM()
{
	$qry = "SELECT rincian FROM data_awal_airminum where right(kdsatker,2)='03' GROUP BY rincian";
	return $this->db->query($qry)->result();
}


public function getDataAMPPKT($id)
{
	$id = clean($id);
	$qry = "SELECT * FROM t_ppkt_am WHERE id_ppkt=$id";
	return $this->db->query($qry)->result();

}

public function getRincianSAN()
{
	$qry = "SELECT rincian FROM data_awal_airminum where right(kdsatker,2)='04' GROUP BY rincian";
	return $this->db->query($qry)->result();
}

public function getDataAMPPKTSan($id)
{
	$id = clean($id);
	$qry = "SELECT * FROM t_ppkt_san WHERE id_ppkt=$id";
	return $this->db->query($qry)->result();

}

public function getRincianPerum()
{
	$qry = "SELECT rincian FROM data_awal_airminum where right(kdsatker,2)='05' GROUP BY rincian";
	return $this->db->query($qry)->result();
}

public function getDataAMPPKTPerum($id)
{
	$id = clean($id);
	$qry = "SELECT * FROM t_ppkt_perum WHERE id_ppkt=$id";
	return $this->db->query($qry)->result();

}

}