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
				<th colspan="4" style="background-color: #76c0ec; color: black; font-size: 12px; width: 1%; text-align: left;">READINESS CRITERIA TEKNIS TAHAP 2</th>
			</tr>          
		</thead>
		<tbody>
			<tr>
				<td style="background-color: #b6f68b;">A.</td>
				<td colspan="3" class="text-start" style="background-color: #b6f68b;">Dukungan NSPK dan Kelembagaan</td>
			</tr>
			<tr>
				<td>1.</td>
				<td colspan="3" class="text-start">Peraturan Daerah Pencegahan dan Peningkatan Kualitas Terhadap Perumahan Kumuh dan Permukiman Kumuh</td>
			</tr>

			<tr>
				<td></td>
				<td style="width:1%;">1.1</td>
				<td style="width:15%;">Perda tentang Pencegahan dan Peningkatan Kualitas Terhadap Perumahan Kumuh dan Permukiman Kumuh</td>
				<td style="width:20%;"><?= $catatRCPPKT->catat_penilaian_56; ?></td>
			</tr>

			<tr>
				<td style="background-color: #b6f68b;">B.</td>
				<td colspan="3" class="text-start" style="background-color: #b6f68b;">Rencana Kegiatan</td>
			</tr>

			<tr>
				<td>1.</td>
				<td colspan="3" class="text-start">Rencana Penanganan Sosial (Jika Diperlukan)</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">1.1</td>
				<td style="width:15%;">Rencana Ganti Untung</td>
				<td style="width:20%;"><?= $catatRCPPKT->catat_penilaian_57; ?></td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">1.2</td>
				<td style="width:15%;">Rencana Penghunian Sementara</td>
				<td style="width:20%;"><?= $catatRCPPKT->catat_penilaian_58; ?></td>
			</tr>
			<tr>
				<td>2.</td>
				<td colspan="3" class="text-start">Timeline Rencana Penanganan pada Lokasi yang Ditangani</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">2.1</td>
				<td style="width:15%;">Timeline Rencana Penanganan</td>
				<td style="width:20%;"><?= $catatRCPPKT->catat_penilaian_59; ?></td>
			</tr>
			
			<tr>
				<td>3.</td>
				<td colspan="3" class="text-start">Dokumen Pendukung Air Limbah</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">3.1</td>
				<td style="width:15%;">Surat Komitmen Pembangunan IPLT/Pelaksanaan Operasionalisasi IPLT (untuk kab/kota yang mengusulkan menu TS Individual Perkotaan)</td>
				<td style="width:20%;"><?= $catatRCPPKT->catat_penilaian_60; ?></td>
			</tr>

			<tr>
				<td style="background-color: #b6f68b;">C.</td>
				<td colspan="3" class="text-start" style="background-color: #b6f68b;">Rencana Konstruksi</td>
			</tr>


			<tr>
				<td>1.</td>
				<td colspan="3" class="text-start">Rencana Pelaksanaan Konstruksi</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">1.1</td>
				<td style="width:15%;">Tahapan Pelaksanaan Konstruksi</td>
				<td style="width:20%;"><?= $catatRCPPKT->catat_penilaian_61; ?></td>
			</tr>
			<tr>
				<td>2.</td>
				<td colspan="3" class="text-start">Rencana Monitoring</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">2.1</td>
				<td style="width:15%;">Rencana Monitoring Pelaksanaan Konstruksi</td>
				<td style="width:20%;"><?= $catatRCPPKT->catat_penilaian_62; ?></td>
			</tr>

			<tr>
				<td style="background-color: #b6f68b;">D.</td>
				<td colspan="3" class="text-start" style="background-color: #b6f68b;">Rencana Pasca Konstruksi</td>
			</tr>

			<tr>
				<td>1.</td>
				<td colspan="3" class="text-start">Rencana Serah Terima Aset</td>
			</tr>

			<tr>
				<td></td>
				<td style="width:1%;">1.1</td>
				<td style="width:15%;">Rencana Serah Terima Aset</td>
				<td style="width:20%;"><?= $catatRCPPKT->catat_penilaian_63; ?></td>
			</tr>
			<tr>
				<td>2.</td>
				<td colspan="3" class="text-start">Rencana Pengelolaan/Pemanfaatan</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:1%;">2.1</td>
				<td style="width:15%;">Rencana Pengelolaan Aset</td>
				<td style="width:20%;"><?= $catatRCPPKT->catat_penilaian_64; ?></td>
			</tr>
			
		</tbody>
	</table>

</body>
</html>