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
	<h5><b>AIR MINUM</b></h5>
	<table style="margin-top: -15px;">
		<thead class="text-center align-middle">
			<tr class="fontTable">
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 1%;">No</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 15%;">Rincian Kegiatan</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Catatan</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">VOLUME</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">SATUAN</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">HARGA SATUAN</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">HARGA TOTAL</th>
			</tr>

		</thead>
		<tbody>
			<?php $hargasatuan=0; $volume=0; $no=1; $no=1; foreach ($dataAM as $key => $val) { ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $val->rincianKegiatan; ?></td>
					<td><?= $val->catatan; ?></td>
					<td><?= $val->volume; ?></td>
					<td><?= $val->satuan; ?></td>
					<td>Rp. <?= number_format($val->harga_satuan,0,',','.'); ?></td>
					<td>Rp. <?= number_format($val->harga_satuan*$val->volume,0,',','.'); ?></td>
				</tr>
				<?php $hargasatuan += $val->harga_satuan; $volume += $val->volume; ?>
			<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="6">TOTAL</th>
				<th>
					Rp. <?= number_format($hargasatuan*$volume,0,',','.'); ?>
				</th>
			</tr>
		</tfoot>
	</table>

	<br>

	<h5><b>SANITASI</b></h5>
	<table style="margin-top: -15px;">
		<thead class="text-center align-middle">
			<tr class="fontTable">
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 1%;">No</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 15%;">Rincian Kegiatan</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Catatan</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">VOLUME</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">SATUAN</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">HARGA SATUAN</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">HARGA TOTAL</th>
			</tr>

		</thead>
		<tbody>
			<?php $hargasatuan=0; $volume=0; $no=1; $no=1; foreach ($dataSAN as $key => $val) { ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $val->rincianKegiatan; ?></td>
					<td><?= $val->catatan; ?></td>
					<td><?= $val->volume; ?></td>
					<td><?= $val->satuan; ?></td>
					<td>Rp. <?= number_format($val->harga_satuan,0,',','.'); ?></td>
					<td>Rp. <?= number_format($val->harga_satuan*$val->volume,0,',','.'); ?></td>
				</tr>
				<?php $hargasatuan += $val->harga_satuan; $volume += $val->volume; ?>
			<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="6">TOTAL</th>
				<th>
					Rp. <?= number_format($hargasatuan*$volume,0,',','.'); ?>
				</th>
			</tr>
		</tfoot>
	</table>


	<br>

	<h5><b>PERUMAHAN</b></h5>
	<table style="margin-top: -15px;">
		<thead class="text-center align-middle">
			<tr class="fontTable">
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 1%;">No</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 15%;">Rincian Kegiatan</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Catatan</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">VOLUME</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">SATUAN</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">HARGA SATUAN</th>
				<th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">HARGA TOTAL</th>
			</tr>

		</thead>
		<tbody>
			<?php $hargasatuan=0; $volume=0; $no=1; $no=1; foreach ($dataPperum as $key => $val) { ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $val->rincianKegiatan; ?></td>
					<td><?= $val->catatan; ?></td>
					<td><?= $val->volume; ?></td>
					<td><?= $val->satuan; ?></td>
					<td>Rp. <?= number_format($val->harga_satuan,0,',','.'); ?></td>
					<td>Rp. <?= number_format($val->harga_satuan*$val->volume,0,',','.'); ?></td>
				</tr>
				<?php $hargasatuan += $val->harga_satuan; $volume += $val->volume; ?>
			<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="6">TOTAL</th>
				<th>
					Rp. <?= number_format($hargasatuan*$volume,0,',','.'); ?>
				</th>
			</tr>
		</tfoot>
	</table>

</body>
</html>