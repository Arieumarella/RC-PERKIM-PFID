<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rc24 extends CI_Model {

	private $thang = '';

	public function getDataProvinsiAM()
	{
		$qry = "
		
		SELECT MID(kdsatker,3,2) as kdlokasi, nmlokasi FROM d009_dak_awal group by MID(KdSatker,3,2)
		";

		return $this->db->query($qry)->result();
	}


	public function getKabKota($kdlokasi)
	{

		$kdlokasi = clean($kdlokasi);	
		$qry = "SELECT CONCAT(left(KdSatker,7),'5') as KdSatker, nmkabkota FROM d009_dak_awal WHERE MID(KdSatker,3,2)='$kdlokasi' GROUP BY nmkabkota";

		return $this->db->query($qry)->result();
	}


	public function getKabKotaKonreg($kdlokasi, $kdbidang)
	{

		$kdlokasi = clean($kdlokasi);	
		$qry = "SELECT CONCAT(LEFT(KdSatker,7),'5') AS KdSatker, nmkabkota FROM d009_dak_awal WHERE MID(KdSatker,3,2)='$kdlokasi'  ORDER BY nmkabkota";

		return $this->db->query($qry)->result();
	}


	public function getDataTable($kdlokasi, $kdkabkota)
	{

		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);

		$kdkabkota = kdkabkota($kdkabkota);

		if ($this->session->userdata('is_provinsi') == false and $this->session->userdata('rkdak_priv') == '1') {

			$qry = "SELECT nmkec, nmdesa, a.* FROM 
			(SELECT * FROM t_rc_am WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' and kdlokasi_penginput <>'00' ) AS a
			LEFT JOIN t_kec2 AS b ON a.kdlokasi=b.kdlokasi AND a.kdkabkota=b.kdkabkota AND a.kdkec=b.kdkec
			LEFT JOIN t_desa2 AS c ON a.kdlokasi=c.kdlokasi AND a.kdkabkota=c.kdkabkota AND a.kdkec=c.kdkec AND a.kddesa=c.kddesa ";

		}else{
			
			if ($this->session->userdata('rkdak_priv') == '1') {
				$qry = "SELECT nmkec, nmdesa, a.* FROM 
				(SELECT * FROM t_rc_am WHERE kdlokasi='$kdlokasi' AND kdlokasi_penginput='00') AS a
				LEFT JOIN t_kec2 AS b ON a.kdlokasi=b.kdlokasi AND a.kdkabkota=b.kdkabkota AND a.kdkec=b.kdkec
				LEFT JOIN t_desa2 AS c ON a.kdlokasi=c.kdlokasi AND a.kdkabkota=c.kdkabkota AND a.kdkec=c.kdkec AND a.kddesa=c.kddesa ";
			}else{
				$qry = "SELECT nmkec, nmdesa, a.* FROM 
				(SELECT * FROM t_rc_am WHERE kdlokasi='$kdlokasi' AND kdlokasi_penginput = '00' ) AS a
				LEFT JOIN t_kec2 AS b ON a.kdlokasi=b.kdlokasi AND a.kdkabkota=b.kdkabkota AND a.kdkec=b.kdkec
				LEFT JOIN t_desa2 AS c ON a.kdlokasi=c.kdlokasi AND a.kdkabkota=c.kdkabkota AND a.kdkec=c.kdkec AND a.kddesa=c.kddesa ";
			}

			
		}


		return $this->db->query($qry)->result();
	}

	public function getDataHeader($kdlokasi, $kdkabkota)
	{
		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);

		$qry = "SELECT a.*, g.path as sptjm, b.path AS rispam, c.path AS ba, d.path AS bappenas, e.path as komitmen_rispam, f.path as ba_simoni, h.path as stunting, i.path as komiteSSK FROM 
		(SELECT kdlokasi, kdkabkota, jns_bidang FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='am' GROUP BY kdlokasi,kdkabkota) as a
		LEFT JOIN
		(SELECT kdlokasi, kdkabkota, jns_bidang, path FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='am' AND jns_upload='sptjm') AS g on a.kdlokasi=g.kdlokasi AND a.kdkabkota=g.kdkabkota AND a.jns_bidang=g.jns_bidang
		LEFT JOIN
		(SELECT kdlokasi, kdkabkota, jns_bidang, path FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='AM' AND jns_upload='rispam') AS b ON a.kdlokasi=b.kdlokasi AND a.kdkabkota=b.kdkabkota AND a.jns_bidang=b.jns_bidang
		LEFT JOIN
		(SELECT kdlokasi, kdkabkota, jns_bidang, path FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='AM' AND jns_upload='ba') AS c ON a.kdlokasi=c.kdlokasi AND a.kdkabkota=c.kdkabkota AND a.jns_bidang=c.jns_bidang
		LEFT JOIN
		(SELECT kdlokasi, kdkabkota, jns_bidang, path FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='AM' AND jns_upload='komitmen_rispam') AS e ON a.kdlokasi=e.kdlokasi AND a.kdkabkota=e.kdkabkota AND a.jns_bidang=e.jns_bidang
		LEFT JOIN
		(SELECT kdlokasi, kdkabkota, jns_bidang, path FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='AM' AND jns_upload='s_bappenas') AS d ON a.kdlokasi=d.kdlokasi AND a.kdkabkota=d.kdkabkota AND a.jns_bidang=d.jns_bidang
		LEFT JOIN
		(SELECT kdlokasi, kdkabkota, jns_bidang, path FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='AM' AND jns_upload='ba_simoni') AS f ON a.kdlokasi=f.kdlokasi AND a.kdkabkota=f.kdkabkota AND a.jns_bidang=f.jns_bidang
		LEFT JOIN
		(SELECT kdlokasi, kdkabkota, jns_bidang, path FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='AM' AND jns_upload='stunting') AS h ON a.kdlokasi=h.kdlokasi AND a.kdkabkota=h.kdkabkota AND a.jns_bidang=h.jns_bidang
		LEFT JOIN
		(SELECT kdlokasi, kdkabkota, jns_bidang, path FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='AM' AND jns_upload='komiteKepalaDaerah') AS i ON a.kdlokasi=i.kdlokasi AND a.kdkabkota=i.kdkabkota AND a.jns_bidang=i.jns_bidang
		";

		return $this->db->query($qry)->row();
	}

	public function getDataProvinsiSan()
	{
		$qry = "
		SELECT MID(KdSatker,3,2) AS kdlokasi, nmlokasi FROM d009_dak_awal GROUP BY nmlokasi
		";

		return $this->db->query($qry)->result();
	}


	public function getDataTabelSanIpal($kdlokasi, $kdkabkota)
	{

		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);

		$qry = "SELECT nmkec,nmdesa,a.* FROM 
		(SELECT * FROM t_rc_san_ipal WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota') AS a
		LEFT JOIN
		t_kec2 AS b ON a.kdlokasi=b.kdlokasi AND a.kdkabkota=b.kdkabkota AND a.kdkec=b.kdkec 
		LEFT JOIN
		t_desa2 AS c ON a.kdlokasi=c.kdlokasi AND a.kdkabkota=c.kdkabkota AND a.kdkec=c.kdkec AND a.kddesa=c.kddesa
		ORDER BY nmkec,nmdesa";

		return $this->db->query($qry)->result();
	}


	public function getDataTabelSanIplt($kdlokasi, $kdkabkota)
	{

		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);

		$qry = "SELECT nmkec,nmdesa,a.* FROM 
		(SELECT * FROM t_rc_san_iplt WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota') AS a
		LEFT JOIN
		t_kec2 AS b ON a.kdlokasi=b.kdlokasi AND a.kdkabkota=b.kdkabkota AND a.kdkec=b.kdkec 
		LEFT JOIN
		t_desa2 AS c ON a.kdlokasi=c.kdlokasi AND a.kdkabkota=c.kdkabkota AND a.kdkec=c.kdkec AND a.kddesa=c.kddesa
		ORDER BY nmkec,nmdesa";

		return $this->db->query($qry)->result();
	}

	public function getDataTabelSanPembangunanBaru($kdlokasi, $kdkabkota)
	{

		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);

		$qry = "SELECT nmkec,nmdesa,a.* FROM 
		(SELECT * FROM t_rc_san_pembangunan_baru WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota') AS a
		LEFT JOIN
		t_kec2 AS b ON a.kdlokasi=b.kdlokasi AND a.kdkabkota=b.kdkabkota AND a.kdkec=b.kdkec 
		LEFT JOIN
		t_desa2 AS c ON a.kdlokasi=c.kdlokasi AND a.kdkabkota=c.kdkabkota AND a.kdkec=c.kdkec AND a.kddesa=c.kddesa
		ORDER BY nmkec,nmdesa";

		return $this->db->query($qry)->result();
	}


	public function getDataTabelSanRehabilitasi($kdlokasi, $kdkabkota)
	{

		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);

		$qry = "SELECT nmkec,nmdesa,a.* FROM 
		(SELECT * FROM t_rc_san_rehabilitasi WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota') AS a
		LEFT JOIN
		t_kec2 AS b ON a.kdlokasi=b.kdlokasi AND a.kdkabkota=b.kdkabkota AND a.kdkec=b.kdkec 
		LEFT JOIN
		t_desa2 AS c ON a.kdlokasi=c.kdlokasi AND a.kdkabkota=c.kdkabkota AND a.kdkec=c.kdkec AND a.kddesa=c.kddesa
		ORDER BY nmkec,nmdesa";

		return $this->db->query($qry)->result();
	}


	public function getDataTabelSanPembangunan($kdlokasi, $kdkabkota)
	{

		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);

		$qry = "SELECT nmkec,nmdesa,a.* FROM 
		(SELECT * FROM t_rc_san_pembangunan WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota') AS a
		LEFT JOIN
		t_kec2 AS b ON a.kdlokasi=b.kdlokasi AND a.kdkabkota=b.kdkabkota AND a.kdkec=b.kdkec 
		LEFT JOIN
		t_desa2 AS c ON a.kdlokasi=c.kdlokasi AND a.kdkabkota=c.kdkabkota AND a.kdkec=c.kdkec AND a.kddesa=c.kddesa
		ORDER BY nmkec,nmdesa";

		return $this->db->query($qry)->result();
	}


	public function getDataTableSanIPLT($kdlokasi, $kdkabkota)
	{

		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);

		$kdkabkota = kdkabkota($kdkabkota);

		$qry = "SELECT a.*, b.kddesa, nmdesa, c.path AS ded, d.path AS rab, e.path AS surat_penetapan_lokasi, f.path AS surat_persetujuan, g.path AS penerima_manfaat, h.path AS master_plan, i.path AS revitalisasi_iplt, j.path AS dokumen_lingkungan, k.path AS legalitas_lahan, g.sts_verifikasi FROM 
		(SELECT * FROM t_kec2 WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota') AS a
		LEFT JOIN
		(SELECT * FROM t_desa2 WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota') AS b ON a.kdlokasi=b.kdlokasi AND a.kdkabkota=b.kdkabkota AND a.kdkec=b.kdkec
		LEFT JOIN 
		(SELECT * FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_upload='ded-sanIPLT' AND jns_bidang='SAN') AS c ON a.kdlokasi=c.kdlokasi AND a.kdkabkota=c.kdkabkota AND a.kdkec=c.kdkec AND c.kddesa=b.kddesa
		LEFT JOIN 
		(SELECT * FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_upload='rab-sanIPLT' AND jns_bidang='SAN') AS d ON a.kdlokasi=d.kdlokasi AND a.kdkabkota=d.kdkabkota AND a.kdkec=d.kdkec AND d.kddesa=b.kddesa
		LEFT JOIN 
		(SELECT * FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_upload='spl-sanIPLT' AND jns_bidang='SAN') AS e ON a.kdlokasi=e.kdlokasi AND a.kdkabkota=e.kdkabkota AND a.kdkec=e.kdkec AND e.kddesa=b.kddesa
		LEFT JOIN 
		(SELECT * FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_upload='spkb-sanIPLT' AND jns_bidang='SAN') AS f ON a.kdlokasi=f.kdlokasi AND a.kdkabkota=f.kdkabkota AND a.kdkec=f.kdkec AND f.kddesa=b.kddesa
		LEFT JOIN 
		(SELECT * FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_upload='dcpm-sanIPLT' AND jns_bidang='SAN') AS g ON a.kdlokasi=g.kdlokasi AND a.kdkabkota=g.kdkabkota AND a.kdkec=g.kdkec AND g.kddesa=b.kddesa
		LEFT JOIN 
		(SELECT * FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_upload='mp-sanIPLT' AND jns_bidang='SAN') AS h ON a.kdlokasi=h.kdlokasi AND a.kdkabkota=h.kdkabkota AND a.kdkec=h.kdkec AND h.kddesa=b.kddesa
		LEFT JOIN 
		(SELECT * FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_upload='jri-sanIPLT' AND jns_bidang='SAN') AS i ON a.kdlokasi=i.kdlokasi AND a.kdkabkota=i.kdkabkota AND a.kdkec=i.kdkec AND i.kddesa=b.kddesa
		LEFT JOIN 
		(SELECT * FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_upload='dl-sanIPLT' AND jns_bidang='SAN') AS j ON a.kdlokasi=j.kdlokasi AND a.kdkabkota=j.kdkabkota AND a.kdkec=j.kdkec AND j.kddesa=b.kddesa
		LEFT JOIN 
		(SELECT * FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_upload='bll-sanIPLT' AND jns_bidang='SAN') AS k ON a.kdlokasi=j.kdlokasi AND a.kdkabkota=j.kdkabkota AND a.kdkec=j.kdkec AND j.kddesa=b.kddesa
		ORDER BY nmkec,nmdesa";

		return $this->db->query($qry)->result();
	}

	public function getDataRispam($kdlokasi, $kdkabkota)
	{

		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);
		$ta = $this->session->userdata('thang');

		$qry = "SELECT * FROM rispam WHERE MID(kdsatker,3,2)='$kdlokasi' AND MID(kdsatker,5,2)='$kdkabkota'";

		return $this->db->query($qry)->row();
	}

	public function getDataHeaderSan($kdlokasi, $kdkabkota)
	{

		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);

		$qry = "SELECT a.*, f.path as sptjm, b.path AS ssk, c.path AS ba, d.path as komitmen_ssk, i.path as ba_simoni, j.path as stanting FROM (SELECT kdlokasi, kdkabkota, jns_bidang FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='san' GROUP BY kdlokasi,kdkabkota) AS a
		LEFT JOIN 
		(SELECT kdlokasi, kdkabkota, jns_bidang, path FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='san' AND jns_upload='sptjm-san') as f ON a.kdlokasi=f.kdlokasi AND a.kdkabkota=f.kdkabkota AND a.jns_bidang=f.jns_bidang
		LEFT JOIN
		(SELECT kdlokasi, kdkabkota, jns_bidang, path FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='san' AND jns_upload='ssk-san') AS b ON a.kdlokasi=b.kdlokasi AND a.kdkabkota=b.kdkabkota AND a.jns_bidang=b.jns_bidang
		LEFT JOIN
		(SELECT kdlokasi, kdkabkota, jns_bidang, path FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='san' AND jns_upload='ba-san') AS c ON a.kdlokasi=c.kdlokasi AND a.kdkabkota=c.kdkabkota AND a.jns_bidang=c.jns_bidang
		LEFT JOIN
		(SELECT kdlokasi, kdkabkota, jns_bidang, path FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='san' AND jns_upload='komitmen-ssk-san') AS d ON a.kdlokasi=d.kdlokasi AND a.kdkabkota=d.kdkabkota AND a.jns_bidang=d.jns_bidang
		LEFT JOIN
		(SELECT kdlokasi, kdkabkota, jns_bidang, path FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='san' AND jns_upload='ba-simoni-san') AS i ON a.kdlokasi=i.kdlokasi AND a.kdkabkota=i.kdkabkota AND a.jns_bidang=i.jns_bidang
		LEFT JOIN
		(SELECT kdlokasi, kdkabkota, jns_bidang, path FROM t_rc_perkim WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND jns_bidang='san' AND jns_upload='stanting-simoni-san') AS j ON a.kdlokasi=j.kdlokasi AND a.kdkabkota=j.kdkabkota AND a.jns_bidang=j.jns_bidang
		";

		return $this->db->query($qry)->row();
	}


	public function getDataRekapIntegrasi($kdlokasi, $kdkabkota)
	{

		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);

		$qry = "SELECT nmkec,nmdesa,a.* FROM 
		(SELECT * FROM t_rc_perumahan WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota') AS a
		LEFT JOIN
		t_kec2 AS b ON a.kdlokasi=b.kdlokasi AND a.kdkabkota=b.kdkabkota AND a.kdkec=b.kdkec
		LEFT JOIN
		t_desa2 AS c ON a.kdlokasi=c.kdlokasi AND a.kdkabkota=c.kdkabkota AND a.kdkec=c.kdkec AND a.kddesa=c.kddesa";

		return $this->db->query($qry)->result();

	}

	public function getDataDetailDakIntegrasi($id)
	{
		$id = clean($id);
		$qry = "SELECT * FROM t_rc_perumahan WHERE id='$id'";
		return $this->db->query($qry)->row();
	}


	public function getNmKec($kdlokasi, $kdkabkota, $kdkec)
	{
		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);		
		$kdkec = clean($kdkec);		

		$qry = "SELECT * FROM t_kec2 WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND kdkec='$kdkec'";
		return $this->db->query($qry)->row();
	}


	public function getNmDesa($kdlokasi, $kdkabkota, $kdkec, $kddesa)
	{

		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);		
		$kdkec = clean($kdkec);	
		$kddesa = clean($kddesa);		

		$qry = "SELECT * FROM t_desa2 WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND kdkec='$kdkec' AND kddesa='$kddesa'";
		return $this->db->query($qry)->row();
	}


	public function getDataKecamatan($kdlokasi, $kdkabkota)
	{
		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);	

		$qry = "SELECT * FROM t_kec2 WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota'";
		return $this->db->query($qry)->result();
	}

	public function detDesa($kdlokasi, $kdkabkota, $kdkec)
	{
		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);		
		$kdkec = clean($kdkec);	

		$qry = "SELECT * FROM t_desa2 WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND kdkec='$kdkec'";
		return $this->db->query($qry)->result();
	}


	public function getDataBawahIntegrasi($kdlokasi, $kdkabkota, $kdkec, $kddesa)
	{

		$kdlokasi = clean($kdlokasi);
		$kdkabkota = clean($kdkabkota);		
		$kdkec = clean($kdkec);	
		$kddesa = clean($kddesa);	

		$qry = "SELECT * FROM t_rc_integrasi2 WHERE kdlokasi='$kdlokasi' AND kdkabkota='$kdkabkota' AND kdkec='$kdkec'  AND  kddesa='$kddesa'";
		return $this->db->query($qry)->row();
	}


	public function deleteKrisnaSiap($tabel, $data)
	{

		$data = clean($data);
		$tabel = clean($tabel);

		$this->db->where($data);
		return $this->db->delete($tabel);
	}

	public function getDataKrisnaSiapByIdX($nmkab, $nmBidang, $ta)
	{

		$nmkab = clean($nmkab);
		$nmBidang = clean($nmBidang);

		$qry = "SELECT * FROM data_krisna_siap WHERE pengusul_nama='$nmkab' AND bidang='$nmBidang' and ta=$ta";

		return $this->db->query($qry)->result();
	}


	public function getSubMenuXX($kabKota, $bidang, $ta)
	{
		$kabKota = clean($kabKota);
		$bidang = clean($bidang);

		$qry = "SELECT sub_bidang FROM data_krisna_siap WHERE pengusul_nama='$kabKota' AND bidang='$bidang' and ta=$ta GROUP BY sub_bidang";

		return $this->db->query($qry)->result();
	}


	public function getDataheaderKrisnaSiapXXXX($nmKab, $nmBidang, $ta)
	{
		$nmBidang = clean($nmBidang);
		$nmKab = clean($nmKab);

		$qry = "SELECT pengusul_nama,
		SUM(IF(approval_sinkron_kl=1,1,0)) AS usulan_approve_kl,
		SUM(IF(approval_sinkron_kl=2,1,0)) AS usulan_reject_kl,
		SUM(IF(approval_sinkron_kl=3,1,0)) AS usulan_discuss_kl,
		SUM(IF(approval_sinkron_dit=1,1,0)) AS usulan_approve_ppn,
		SUM(IF(approval_sinkron_dit=2,1,0)) AS usulan_reject_ppn,
		SUM(IF(approval_sinkron_dit=3,1,0)) AS usulan_discuss_ppn,
		SUM(IF(approval_sinkron_sum=1,1,0)) AS usulan_approve_sinkron,
		SUM(IF(approval_sinkron_sum=2,1,0)) AS usulan_reject_sinkron,
		SUM(IF(approval_sinkron_sum=3,1,0)) AS usulan_discuss_sinkron,
		SUM(IF(approval_sinkron_kl=1,usulan_sinkron_kl,0)) AS nilai_approve_kl,
		SUM(IF(approval_sinkron_kl=2,usulan_sinkron_kl,0)) AS nilai_reject_kl,
		SUM(IF(approval_sinkron_kl=3,usulan_sinkron_kl,0)) AS nilai_discuss_kl,
		SUM(IF(approval_sinkron_dit=1,usulan_sinkron_dit,0)) AS nilai_approve_ppn,
		SUM(IF(approval_sinkron_dit=2,usulan_sinkron_dit,0)) AS nilai_reject_ppn,
		SUM(IF(approval_sinkron_dit=3,usulan_sinkron_dit,0)) AS nilai_discuss_ppn,
		SUM(IF(approval_sinkron_sum=1,usulan_sinkron_pusat,0)) AS nilai_approve_sinkron,
		SUM(IF(approval_sinkron_sum=2,usulan_sinkron_kl,0)) AS nilai_reject_sinkron,
		SUM(IF(approval_sinkron_sum=3,usulan_sinkron_pusat,0)) AS nilai_discuss_sinkron FROM data_krisna_siap WHERE pengusul_nama='$nmKab' AND bidang='$nmBidang' AND ta=$ta GROUP BY pengusul_nama";

		$qry = "SELECT pengusul_nama,
		SUM(IF(approval_sinkron_kl='Approved',1,0)) AS usulan_approve_kl,
		SUM(IF(approval_sinkron_kl='Reject',1,0)) AS usulan_reject_kl,
		SUM(IF(approval_sinkron_kl='Discuss',1,0)) AS usulan_discuss_kl,
		SUM(IF(approval_sinkron_dit='Approved',1,0)) AS usulan_approve_ppn,
		SUM(IF(approval_sinkron_dit='Reject',1,0)) AS usulan_reject_ppn,
		SUM(IF(approval_sinkron_dit='Discuss',1,0)) AS usulan_discuss_ppn,
		SUM(IF(approval_sinkron_sum='Approved',1,0)) AS usulan_approve_sinkron,
		SUM(IF(approval_sinkron_sum='Reject',1,0)) AS usulan_reject_sinkron,
		SUM(IF(approval_sinkron_sum='Discuss',1,0)) AS usulan_discuss_sinkron,
		SUM(IF(approval_sinkron_kl='Approved',usulan_sinkron_kl,0)) AS nilai_approve_kl,
		SUM(IF(approval_sinkron_kl='Reject',usulan_sinkron_kl,0)) AS nilai_reject_kl,
		SUM(IF(approval_sinkron_kl='Discuss',usulan_sinkron_kl,0)) AS nilai_discuss_kl,
		SUM(IF(approval_sinkron_dit='Approved',usulan_sinkron_dit,0)) AS nilai_approve_ppn,
		SUM(IF(approval_sinkron_dit='Reject',usulan_sinkron_dit,0)) AS nilai_reject_ppn,
		SUM(IF(approval_sinkron_dit='Discuss',usulan_sinkron_dit,0)) AS nilai_discuss_ppn,
		SUM(IF(approval_sinkron_sum='Approved',usulan_sinkron_pusat,0)) AS nilai_approve_sinkron,
		SUM(IF(approval_sinkron_sum='Reject',usulan_sinkron_kl,0)) AS nilai_reject_sinkron,
		SUM(IF(approval_sinkron_sum='Discuss',usulan_sinkron_pusat,0)) AS nilai_discuss_sinkron FROM data_krisna_siap WHERE pengusul_nama='$nmKab' AND bidang='$nmBidang' AND ta=$ta GROUP BY pengusul_nama";

		return $this->db->query($qry)->row();
	}


}