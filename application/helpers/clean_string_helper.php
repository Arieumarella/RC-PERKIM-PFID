<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

function clean($str)
{
	// $result = preg_replace('/[^^a-zA-Z0-9#@:_(),.!@\/ -]/', "", $str);
	// return $result;

	$CI = &get_instance();
	if (is_array($str)) {
		foreach ($str as $key => $value) {
			$str[$key] = clean($value);
		}
	} else {
		$str = $CI->db->escape($str);
	}

	if (!is_array($str)) {
		return  str_replace(['"', "'", '{', '`', '}', '%'], '',$str);
	}else{
		return $str;
	}

	
}

function kdlokasi($kdsatker ='')
{

	$kdsatker = $kdsatker ?? '';

	return substr($kdsatker,2,2);
}

function kdkabkota($kdsatker='')
{
	$kdsatker = $kdsatker ?? '';

	return substr($kdsatker,4,2);
}

function kdbidang($kdsatker='')
{	

	$kdsatker = $kdsatker ?? '';
	return substr($kdsatker,6,2);
}

function getNameBidang($kdsatker='')
{
	$kdsatker = $kdsatker ?? '';
	$kdbidangan = substr($kdsatker,6,2);

	switch ($kdbidangan) {
		case "01":
		return "Jalan";
		break;
		case "02":
		return "Irigasi";
		break;
		case "03":
		return "Air Minum";
		break;
		case "04":
		return "Sanitasi";
		break;
		case "05":
		return "Perumahan";
		break;
		default:
		return null;
	}
}


function getNameBidangByKdbidang($kdbidang='')
{

	switch ($kdbidang) {
		case "01":
		return "JALAN";
		break;
		case "02":
		return "IRIGASI";
		break;
		case "03":
		return "AIR MINUM";
		break;
		case "04":
		return "SANITASI";
		break;
		case "05":
		return "PERUMAHAN";
		break;
		case "03;04":
		return "Air Minum dan Sanitasi";
		break;
		case "04;03":
		return "Air Minum dan Sanitasi";
		break;
		default:
		return null;
	}
}


function getNamaBalaiByIdBalai($idBalai='')
{
	$qry = "Select * from emonx.pengguna where kd_balai='$idBalai' ";
	
	$CI =& get_instance();

	$thang = $CI->load->database('2023', TRUE);


	return $thang->query($qry)->row()->nama; 
}

function getNameBalaiById($kdbidang='', $idBalai='', $prive='')
{

	if ($kdbidang == '01') {

		$select = 'kdsatker, Jalan as nmBalai';
		$groupBy = 'Jalan';
		
		if ($prive == '2') {
			$where = "MID(kdsatker,3,2)=$idBalai";
		}else{
			$where = "kdBalaiJalan='$idBalai'";
		}


	}elseif($kdbidang == '02'){

		$select = 'kdsatker, Irigasi as nmBalai';
		$groupBy = 'Irigasi';

		if ($prive == '2') {
			$where = "MID(kdsatker,3,2)=$idBalai";
		}else{
			$where = "kdBalaiIrigasi='$idBalai'";
		}

	}elseif($kdbidang == '03'){

		$select = 'kdsatker, Air_Minum as nmBalai';
		$groupBy = 'Air_Minum';

		if ($prive == '2') {
			$where = "MID(kdsatker,3,2)=$idBalai";
		}else{
			$where = "kdBalaiAirMinum='$idBalai'";
		}

	}elseif($kdbidang == '04'){

		$select = 'kdsatker, Sanitasi as nmBalai';
		$groupBy = 'Sanitasi';

		if ($prive == '2') {
			$where = "MID(kdsatker,3,2)=$idBalai";
		}else{
			$where = "kdBalaiSanitasi='$idBalai'";
		}

	}elseif($kdbidang == '05'){

		$select = 'kdsatker, Perumahan as nmBalai';
		$groupBy = 'Perumahan';

		if ($prive == '2') {
			$where = "MID(kdsatker,3,2)=$idBalai";
		}else{
			$where = "kdBalaiPerumahan='$idBalai'";
		}
	}

	$CI =& get_instance();

	$thang = $CI->load->database('2023', TRUE);


	return $thang->query("SELECT $select FROM t_balai_all WHERE $where")->row(); 
}


function getNameBalaiByIdBalay($idBalai='', $kdbidang='')
{
	if ($kdbidang == '01') {

		$select = 'kdsatker, Jalan as nmBalai';
		$groupBy = 'Jalan';


	}elseif($kdbidang == '02'){

		$select = 'kdsatker, Irigasi as nmBalai';
		$groupBy = 'Irigasi';

	}elseif($kdbidang == '03'){

		$select = 'kdsatker, Air_Minum as nmBalai';
		$groupBy = 'Air_Minum';

	}elseif($kdbidang == '04'){

		$select = 'kdsatker, Sanitasi as nmBalai';
		$groupBy = 'Sanitasi';

	}elseif($kdbidang == '05'){

		$select = 'kdsatker, Perumahan as nmBalai';
		$groupBy = 'Perumahan';
	}

	$CI =& get_instance();

	$thang = $CI->load->database('2023', TRUE);


	return $thang->query("SELECT $select FROM t_balai_all WHERE kdsatker='$idBalai'")->row(); 
}

function getArrayBulan() {
	$data = array(
		'01' => 'Januari',
		'02' => 'Februari',
		'03' => 'Maret',
		'04' => 'April',
		'05' => 'Mei',
		'06' => 'Juni',
		'07' => 'Juli',
		'08' => 'Agustus',
		'09' => 'September',
		'10' => 'Oktober',
		'11' => 'November',
		'12' => 'Desember'

	);

	return $data;
}


function getNameBulanByKdbulan($kdbulan='')
{

	switch ($kdbulan) {
		case "01":
		return "Januari";
		break;
		case "02":
		return "Februari";
		break;
		case "03":
		return "Maret";
		break;
		case "04":
		return "April";
		break;
		case "05":
		return "Mei";
		break;
		case "06":
		return "Juni";
		break;
		case "07":
		return "Juli";
		break;
		case "08":
		return "Agustus";
		break;
		case "09":
		return "September";
		break;
		case "10":
		return "Oktober";
		break;
		case "11":
		return "November";
		break;
		case "12":
		return "Desember";
		break;
		default:
		return null;
	}
}


function getArrayBidang()
{
	$data = array(
		'01' => 'Jalan',
		'02' => 'Irigasi',
		'03' => 'Air Minum',
		'04' => 'Sanitasi',
		'05' => 'Perumahan'
	);

	return $data;
}

function kapitalAwalKalimat($str='')
{
	return ucwords(strtolower($str));
}


function formatAngka($number='')
{
	if (is_int($number)) {
		return strval($number);
	} else {

		return number_format($number,2,',','.');
	}
}



?>