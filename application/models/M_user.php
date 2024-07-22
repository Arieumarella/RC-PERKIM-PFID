<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {


	public function getAllData()
	{
		$qry = "SELECT nmlokasi, nmkabkota, a.* FROM (SELECT * FROM pengguna) AS a
		LEFT JOIN (SELECT * FROM d009_dak_awal) AS b ON LEFT(a.ket,6)=b.kdsatkerx";

		return $this->db->query($qry)->result();
	}


}