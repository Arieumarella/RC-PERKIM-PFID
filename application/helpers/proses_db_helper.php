<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

function getProvinsiByRow($kdlokasi)
{
	$CI = &get_instance();

	return $CI->db->query("SELECT nmlokasi AS NMLOKASI, nmlokasi, mid(kdSatker,3,2) as kodelokasi FROM d009_dak_awal WHERE MID(kdsatkerx,3,2)='$kdlokasi'")->row();
	// ->NMLOKASI;
}

function getKabKotaByRow($kdlokasi, $kdkabkota)
{
	$CI = &get_instance();
	return $CI->db->query("SELECT nmlokasi, nmlokasi AS NMLOKASI, nmkabkota AS NMKABKOTA, nmkabkota, mid(kdsatker,3,2) as kdkabkota FROM d009_dak_awal WHERE mid(kdsatker,3,2)='$kdlokasi' AND mid(kdsatker,5,2)='$kdkabkota' ")->row();
	// ->NMKABKOTA;
}

function getKecamatan($kdlokasi, $kdkabkota, $kdkec)
{
	$CI = &get_instance();
	return $CI->db->query("SELECT * FROM t_kec2 WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND kdkec='$kdkec'")->row();
	// ->nmkec;
}

function getdesa($kdlokasi, $kdkabkota, $kdkec, $kddesa)
{
	$CI = &get_instance();
	return $CI->db->query("SELECT * FROM t_desa2 WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND kdkec='$kdkec' AND kddesa='$kddesa'")->row();
	// ->nmdesa;
}

function getAllProvinsi()
{
	$CI = &get_instance();
	return $CI->db->query("SELECT * FROM emonx.t001_lokasi ORDER BY kdbps")->result();
}

function getKabKotaByKdlokasi($kdlokasi)
{


	$CI = &get_instance();
	return $CI->db->query("SELECT nmlokasi AS NMLOKASI, nmkabkota, nmkabkota as NMKABKOTA, nmlokasi, mid(kdSatker,3,2) as kodelokasi, mid(kdSatker,3,2) as kdlokasi, mid(kdSatker,5,2) as kdkabkota, mid(kdSatker,3,2) as KDLOKASI, mid(kdSatker,5,2) as KDKABKOTA FROM d009_dak_awal2022 WHERE mid(kdSatker,3,2)='$kdlokasi' GROUP BY mid(kdSatker,5,2)")->result();
}

function getNamaLokasiByKdsatker($kdsatker)
{
	$kdlokasi = substr($kdsatker, 2, 2);
	$CI = &get_instance();
	return $CI->db->query("SELECT nmlokasi AS NMLOKASI, nmlokasi, mid(kdSatker,3,2) as kodelokasi, mid(kdSatker,3,2) as kdlokasi, mid(kdSatker,5,2) as kdkabkota, mid(kdSatker,3,2) as KDLOKASI, mid(kdSatker,5,2) as KDKABKOTA  FROM d009_dak_awal2022 WHERE mid(kdSatker,3,2)='$kdlokasi'")->row();
	// ->NMLOKASI;
}

function getNamaKabKotaByKdsatker($kdsatker)
{

	$CI = &get_instance();
	return $CI->db->query("SELECT nmlokasi AS NMLOKASI, nmlokasi, nmkabkota as NMKABKOTA, nmkabkota, mid(kdSatker,3,2) as kodelokasi, mid(kdSatker,3,2) as kdlokasi, mid(kdSatker,5,2) as kdkabkota, mid(kdSatker,3,2) as KDLOKASI, mid(kdSatker,5,2) as KDKABKOTA FROM d009_dak_awal2022 WHERE kdSatker='$kdsatker' ")->row();
	// ->NMKABKOTA;
}
