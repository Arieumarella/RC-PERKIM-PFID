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
	<table>
		<thead class="text-center align-middle">
			<tr class="fontTable">
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 1%;">No</th>
				<th colspan="2" style="background-color: #f59f00; color: black; font-size: 12px; width: 15%;">Indikator dan Variabel</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Catatan</th>
			</tr>
			<tr >
				<th colspan="4" style="background-color: #76c0ec; color: black; font-size: 12px; width: 1%; text-align: left;">READINESS CRITERIA TEKNIS TAHAP 1</th>
			</tr>          
		</thead>
		<tbody>
			<tr>
				<td style="background-color: #b6f68b;">A.</td>
				<td colspan="3" class="text-start" style="background-color: #b6f68b;">Perencanaan, Program/Kegiatan dan Anggaran</td>
			</tr>
			<tr>
				<td>1.</td>
				<td colspan="3" class="text-start">Profil Kawasan Kumuh</td>
			</tr>

			<tr>
				<td></td>
				<td style="width:1%;">1.1</td>
				<td style="width:15%;">Baseline permukiman kumuh</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_13 : $catatRCPPKT->catat_penilaian_13; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">1.2</td>
				<td style="width:15%;">Profil Permukiman Kumuh</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_14 : $catatRCPPKT->catat_penilaian_14; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">1.3</td>
				<td style="width:15%;">Video kawasan</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_15 : $catatRCPPKT->catat_penilaian_15; ?></td>
			</tr>

			<tr>
				<td>2.</td>
				<td colspan="3" class="text-start">Surat Bukti Komitmen Kepala Daerah</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">2.1</td>
				<td style="width:15%;">Surat Komitmen Kepala Daerah</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_16 : $catatRCPPKT->catat_penilaian_16; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">2.2</td>
				<td style="width:15%;">Surat Dukungan Pendanaan Pihak Ketiga (jika ada)</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_17 : $catatRCPPKT->catat_penilaian_17; ?></td>
			</tr>
			<tr>
				<td>3.</td>
				<td colspan="3" class="text-start">Pokja yang menangani Permukiman, Air Minum, dan Sanitasi/Tim Koordinasi Sejenis</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">3.1</td>
				<td style="width:15%;">Bidang Perumahan dan Permukiman (Pokja PKP) maupun Air Minum dan Sanitasi (Pokja AMPL)</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_18 : $catatRCPPKT->catat_penilaian_18; ?></td>
			</tr>
			<tr>
				<td>4.</td>
				<td colspan="3" class="text-start">Alur Koordinasi</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">4.1</td>
				<td style="width:15%;">Alur koordinasi pelaksanaan DAK Tematik Pengentasan Permukiman Kumuh Terpadu</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_19 : $catatRCPPKT->catat_penilaian_19; ?></td>
			</tr>
			<tr>
				<td>5.</td>
				<td colspan="3" class="text-start">Kinerja DAK Tahun Sebelumnya</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">5.1</td>
				<td style="width:15%;">Kinerja DAK bidang (rumah/air minum/sanitasi) dalam 2 tahun terakhir</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_20 : $catatRCPPKT->catat_penilaian_20; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">5.2</td>
				<td style="width:15%;">Kinerja DAK Tematik PPKT (Kab/kota pelaksana DAK Tematik PPKT tahun terakhir pelaksanaan)</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_21 : $catatRCPPKT->catat_penilaian_21; ?></td>
			</tr>
			<tr>
				<td style="background-color: #b6f68b;">B.</td>
				<td colspan="3" class="text-start" style="background-color: #b6f68b;">Kesiapan Penerima Program dan Keterlibatan Masyarakat</td>
			</tr>


			<tr>
				<td>1.</td>
				<td colspan="3" class="text-start">Kesiapan Calon Penerima Bantuan</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">1.1</td>
				<td style="width:15%;">SK Calon Penerima Bantuan dari Kepala Daerah</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_22 : $catatRCPPKT->catat_penilaian_22; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">1.2</td>
				<td style="width:15%;">Surat Pernyataan Kesepakatan Warga</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_23 : $catatRCPPKT->catat_penilaian_23; ?></td>
			</tr>

			<tr>
				<td>2.</td>
				<td colspan="3" class="text-start">Kesiapan Calon Pengampu TPS3R, Air Limbah dan Air Minum (jika mengusulkan)</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">2.1</td>
				<td style="width:15%;">Surat Dukungan TPS3R dari Dinas Lingkungan Hidup (jika mengusulkan)</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_24 : $catatRCPPKT->catat_penilaian_24; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">2.2</td>
				<td style="width:15%;">Surat Dukungan Air Limbah dari Dinas Lingkungan Hidup (jika mengusulkan)</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_25 : $catatRCPPKT->catat_penilaian_25; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">2.3</td>
				<td style="width:15%;">Surat Dukungan Air Minum dari Dinas PUPR/PUTR atau sejenisnya (jika mengusulkan)</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_26 : $catatRCPPKT->catat_penilaian_26; ?></td>
			</tr>
			<tr>
				<td style="background-color: #b6f68b;">C.</td>
				<td colspan="3" class="text-start" style="background-color: #b6f68b;">	Lahan/Pertanahan</td>
			</tr>
			<tr>
				<td>1.</td>
				<td colspan="3" class="text-start">Ketersediaan Lahan Peruntukan Bidang Perumahan Sektor Rumah Swadaya</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">1.1</td>
				<td style="width:15%;">Status Tanah dan rencana sertipikasi</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_27 : $catatRCPPKT->catat_penilaian_27; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">1.2</td>
				<td style="width:15%;">Bukti Kesiapan Lahan Bidang Perumahan</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_28 : $catatRCPPKT->catat_penilaian_28; ?></td>
			</tr>

			<tr>
				<td>2.</td>
				<td colspan="3" class="text-start">Ketersediaan Lahan Peruntukan Bidang Jalan Lingkungan dan Drainase Lingkungan</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">2.1</td>
				<td style="width:15%;">Status Tanah</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_29 : $catatRCPPKT->catat_penilaian_29; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">2.2</td>
				<td style="width:15%;">Status Tanah</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_30 : $catatRCPPKT->catat_penilaian_30; ?></td>
			</tr>
			<tr>
				<td>3.</td>
				<td colspan="3" class="text-start">Ketersediaan Lahan Peruntukan Bidang Air Minum</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">3.1</td>
				<td style="width:15%;">Status Tanah</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_31 : $catatRCPPKT->catat_penilaian_31; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">3.2</td>
				<td style="width:15%;">Bukti Kesiapan Lahan Bidang Air Minum</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_32 : $catatRCPPKT->catat_penilaian_32; ?></td>
			</tr>
			<tr>
				<td>4.</td>
				<td colspan="3" class="text-start">Ketersediaan Lahan Peruntukan Bidang Air Minum</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">4.1</td>
				<td style="width:15%;">Status Tanah</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_34 : $catatRCPPKT->catat_penilaian_34; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">4.2</td>
				<td style="width:15%;">Bukti Kesiapan Lahan Bidang Air Limbah</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_35 : $catatRCPPKT->catat_penilaian_35; ?></td>
			</tr>
			<tr>
				<td>5.</td>
				<td colspan="3" class="text-start">Ketersediaan Lahan Peruntukan Bidang Sanitasi Sektor Persampahan</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">5.1</td>
				<td style="width:15%;">Status Tanah</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_36 : $catatRCPPKT->catat_penilaian_36; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">5.2</td>
				<td style="width:15%;">Bukti Kesiapan Lahan Bidang TPS3R</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_37 : $catatRCPPKT->catat_penilaian_37; ?></td>
			</tr>
			<tr>
				<td style="background-color: #b6f68b;">D.</td>
				<td colspan="3" class="text-start" style="background-color: #b6f68b;">Siteplan Before & After</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">1.1</td>
				<td style="width:15%;">Siteplan Before dan After Pelaksanaan</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_38 : $catatRCPPKT->catat_penilaian_38; ?></td>
			</tr>
			<tr>
				<td style="background-color: #b6f68b;">D.</td>
				<td colspan="3" class="text-start" style="background-color: #b6f68b;">	Rencana Kegiatan Detail Enginering Design (DED) dan Rencana Anggaran Biaya (RAB)</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">1.1</td>
				<td style="width:15%;">DED Air Minum</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_39 : $catatRCPPKT->catat_penilaian_39; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;"></td>
				<td style="width:15%;">RAB Air Minum</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_40 : $catatRCPPKT->catat_penilaian_40; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">1.2</td>
				<td style="width:15%;">DED Air Limbah</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_41 : $catatRCPPKT->catat_penilaian_41; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;"></td>
				<td style="width:15%;">RAB Air Limbah</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_42 : $catatRCPPKT->catat_penilaian_42; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">1.3</td>
				<td style="width:15%;">DED Pembangunan TPS3R</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_43 : $catatRCPPKT->catat_penilaian_43; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;"></td>
				<td style="width:15%;">RAB Pembangunan TPS3R</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_44 : $catatRCPPKT->catat_penilaian_44; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;"></td>
				<td style="width:15%;">Business Plan Pembangunan TPS3R</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_45 : $catatRCPPKT->catat_penilaian_45; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;"></td>
				<td style="width:15%;">DED Peningkatan/Rehabilitasi TPS3R</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_46 : $catatRCPPKT->catat_penilaian_46; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;"></td>
				<td style="width:15%;">RAB Peningkatan/Rehabilitasi TPS3R</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_47 : $catatRCPPKT->catat_penilaian_47; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;"></td>
				<td style="width:15%;">Business Plan Peningkatan/Rehabilitasi TPS3R</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_48 : $catatRCPPKT->catat_penilaian_48; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;"></td>
				<td style="width:15%;">Justifikasi Teknis Kebutuhan Peningkatan/Rehabilitasi TPS3R</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_49 : $catatRCPPKT->catat_penilaian_49; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;"></td>
				<td style="width:15%;">	SK Kelompok Pemeliharaan dan Pemanfaatan (KPP)</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_50 : $catatRCPPKT->catat_penilaian_50; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;"></td>
				<td style="width:15%;">Surat kesiapan dukungan biaya operasional dan pemeliharaan</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_51 : $catatRCPPKT->catat_penilaian_51; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">1.4</td>
				<td style="width:15%;">DED Perumahan</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_52 : $catatRCPPKT->catat_penilaian_52; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;"></td>
				<td style="width:15%;">RAB Perumahan</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_53 : $catatRCPPKT->catat_penilaian_53; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">1.5</td>
				<td style="width:15%;">DED Jalan dan drainase lingkungan</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_54 : $catatRCPPKT->catat_penilaian_54; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;"></td>
				<td style="width:15%;">RAB Jalan dan drainase lingkungan</td>
				<td style="width:20%;"><?= ($baKonsultasiProgram == 'on') ? $catatRCPPKT->catat_rincian_55 : $catatRCPPKT->catat_penilaian_55; ?></td>
			</tr>

		</tbody>
	</table>

</body>
</html>