<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BA PPKT</title>

	<style>
		body {
			font-family: Arial, sans-serif;
		}
		.container {
			margin: 20px auto;
			max-width: 800px;
			padding: 20px;
			border: 1px solid #ccc;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		table {
			width: 104%;
			border-collapse: collapse;
			margin-top: 10px;
			margin-left: -2%;
		}
		th, td {
			border: 1px solid #ccc;
			padding: 8px;
			text-align: left;
			border-color: black;
			font-size: 11px;
		}
		th {
			background-color: #f2f2f2;
			font-size: 11px;
			text-align: center;
		}

		.tittleX {
			font-size: 15px;
			margin-top: -5 ;
		}

		.Kuning{
			background-color: #f59f00;
		}

		.biru{
			background-color: #c5eef6;
		}

		.merah{
			background-color: #ffb9b9;
		}
	</style>

</head>
<body>

	<h2 style="text-align: center;" class="tittleX">PENILAIAN USULAN RENCANA KEGIATAN DAK FISIK TEMATIK PENGENTASAN PERMUKIMAN KUMUH TERPADU TA.<?= $this->session->userdata('thang'); ?></h2>
	<h2 style="text-align: center;" class="tittleX"><?= $nmProvinsi; ?></h2>
	<h2 style="text-align: center;" class="tittleX"><?= $nmkabkota; ?></h2>
	<h2 style="text-align: center;" class="tittleX"><?= $nmkec; ?></h2>
	<h2 style="text-align: center;" class="tittleX"><?= $nmdesa; ?></h2>

	<br>


	<table>
		<thead class="text-center align-middle">
			<tr class="fontTable">
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 1%;">No</th>
				<th colspan="2" style="background-color: #f59f00; color: black; font-size: 12px; width: 15%;">Indikator dan Variabel</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Catatan</th>
			</tr>
			<tr >
				<th colspan="4" style="background-color: #76c0ec; color: black; font-size: 12px; width: 1%; text-align: left;">Readiness Criteria Utama</th>
			</tr>          
		</thead>
		<tbody>
			<tr>
				<td>1.</td>
				<td colspan="3" class="text-start">Program Penanganan Permukiman Kumuh Terpadu</td>
			</tr>

			<tr>
				<td></td>
				<td style="width:1%;">1.1</td>
				<td style="width:15%;">Executive Summary Program Penanganan Permukiman Kumuh Terpadu (outline terlampir)</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_1 : $catatRCPPKT->catat_penilaian_1; ?></td>
			</tr>

			<tr>
				<td>2.</td>
				<td colspan="3" class="text-start">Surat Keputusan Kumuh</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">2.1</td>
				<td style="width:15%;">SK Penetapan Lokasi Perumahan Kumuh dan Permukiman Kumuh</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_2 : $catatRCPPKT->catat_penilaian_2; ?></td>
			</tr>
			<tr>
				<td>3.</td>
				<td colspan="3" class="text-start">Dokumen terkait Rencana Pencegahan dan Peningkatan Kualitas Permukiman Kumuh</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">3.1</td>
				<td style="width:15%;">RP2KPKPK/RP2KPKP/RP3KP/dan sejenisnya</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_3 : $catatRCPPKT->catat_penilaian_3; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">3.2</td>
				<td style="width:15%;">Dokumen RISPAM</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_4 : $catatRCPPKT->catat_penilaian_4; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">3.3</td>
				<td style="width:15%;">Dokumen SSK</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_5 : $catatRCPPKT->catat_penilaian_5; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">3.4</td>
				<td style="width:15%;">Dokumen Rencana Induk Pengelolaan Sampah/Minimal Jakstrada</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_6 : $catatRCPPKT->catat_penilaian_6; ?></td>
			</tr>
			<tr>
				<td>4.</td>
				<td colspan="3" class="text-start">	Kesiapan Calon Penerima Bantuan</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">4.1</td>
				<td style="width:15%;">Bukti sosialisasi kepada masyarakat calon penerima bantuan.</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_7 : $catatRCPPKT->catat_penilaian_7; ?></td>
			</tr>
			<tr>
				<td>5.</td>
				<td colspan="3" class="text-start">Dokumen Pernyataan Status Kesesuaian dan Kesiapan Lahan</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">5.1</td>
				<td style="width:15%;">Pemetaan status pertanahan dan rencana penanganannya.</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_8 : $catatRCPPKT->catat_penilaian_8; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">5.2</td>
				<td style="width:15%;">Berita Acara Kesepakatan Warga untuk konsolidasi tanah (jika menggunakan skema sertipikasi konsolidasi tanah)</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_9 : $catatRCPPKT->catat_penilaian_9; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">5.3</td>
				<td style="width:15%;">Surat Dukungan Fasilitasi Aspek Pertanahan oleh Kantor Pertanahan setempat</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_10 : $catatRCPPKT->catat_penilaian_10;?> </td>
			</tr>
			<tr>
				<td>6.</td>
				<td colspan="3" class="text-start">Kesesuaian Lahan sebagai Zona Permukiman</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">6.1</td>
				<td style="width:15%;">Surat Pernyataan Peruntukan Lahan untuk Permukiman dari Instansi Berwenang dalam Penataan Ruang</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_11 : $catatRCPPKT->catat_penilaian_11;?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">6.2</td>
				<td style="width:15%;">RTRW/Peraturan Daerah sejenisnya</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_12 : $catatRCPPKT->catat_penilaian_12;?></td>
			</tr>
		</tbody>
	</table>

</body>
</html>