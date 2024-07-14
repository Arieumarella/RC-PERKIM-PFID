<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>xx</title>
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

  <h2 style="text-align: center;" class="tittleX">BERITA ACARA KONSULTASI PROGRAM</h2>
  <h2 style="text-align: center;" class="tittleX">DAK TEMATIK PPKT TA. <?= $ta; ?></h2>
  <h2 style="text-align: center;" class="tittleX"><?= $nmkabkota; ?></h2>
  <h2 style="text-align: center;" class="tittleX">KECAMATAN <?= $nmkec; ?></h2>
  <h2 style="text-align: center;" class="tittleX">DESA/KELURAHAN <?= $nmdesa; ?></h2>

  <br>

  <table>
    <thead>
      <tr>
        <th class="Kuning" style="width: 1%;" >NO</th>
        <th class="Kuning" style="width: 20%;" >BIDANG/RINCIAN KEGIATAN</th>
        <th class="Kuning" style="width: 10%;" >VOLUME</th>
        <th class="Kuning" style="width: 5%;" >SATUAN</th>
        <th class="Kuning" style="width: 10%;" >HARGA SATUAN</th>
        <th class="Kuning" style="width: 10%;" >HARGA TOTAL</th>
        <th class="Kuning" style="width: 30%;" >CATATAN</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="biru" style="text-align:center;">A.1</th>
        <th class="biru" style="text-align:left;" colspan="6">BIDANG AIR MINUM</th>
      </tr>
      <tr>
        <td></td>
        <td>Perluasan SPAM Jaringan Perpipaan</td>
        <td style="text-align: right;"><?= $dataBawah->vol1; ?></td>
        <td style="text-align: center;">SR</td>
        <td style="text-align: right;"><?= $dataBawah->sat1; ?></td>
        <td style="text-align: right;"><?php $tot1 = $dataBawah->vol1*$dataBawah->sat1;  echo $tot1;?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX1; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Peningkatan SPAM Jaringan Perpipaan</td>
        <td style="text-align: right;"><?= $dataBawah->vol2; ?></td>
        <td style="text-align: center;">SR</td>
        <td style="text-align: right;"><?= $dataBawah->sat2; ?></td>
        <td style="text-align: right;"><?php $tot2 = $dataBawah->vol2*$dataBawah->sat2; echo $tot2; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX2; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Pembangunan Baru SPAM Jaringan Perpipaan</td>
        <td style="text-align: right;"><?= $dataBawah->vol3; ?></td>
        <td style="text-align: center;">SR</td>
        <td style="text-align: right;"><?= $dataBawah->sat3; ?></td>
        <td style="text-align: right;"><?php $tot3 = $dataBawah->vol3*$dataBawah->sat3; echo $tot3; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX3; ?></td>
      </tr>
      <tr>
        <th class="merah" style="text-align:center;" colspan="5">KEGIATAN FISIK BIDANG AIR MINUM</th>
        <th class="merah" style="text-align:right;"><?= $tot1+$tot2+$tot3; ?></th>
        <th class="merah" style="text-align:right;"></th>
      </tr>

      
      <tr>
        <th class="biru" style="text-align:center;">A.2</th>
        <th class="biru" style="text-align:left;" colspan="6">KEGIATAN PENUNJANG BIDANG AIR MINUM</th>
      </tr>
      

      <tr>
        <td></td>
        <td>Biaya tender</td>
        <td style="text-align: right;"><?= $dataBawah->vol15; ?></td>
        <td style="text-align: center;">Paket</td>
        <td style="text-align: right;"><?= $dataBawah->sat15; ?></td>
        <td style="text-align: right;"><?php $tot15 = $dataBawah->vol15*$dataBawah->sat15; echo $tot15; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX15; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Honorarium pendamping/fasilitator non-aparatur sipil negara</td>
        <td style="text-align: right;"><?= $dataBawah->vol16; ?></td>
        <td style="text-align: center;">Orang Bulan</td>
        <td style="text-align: right;"><?= $dataBawah->sat16; ?></td>
        <td style="text-align: right;"><?php $tot16 = $dataBawah->vol16*$dataBawah->sat16; echo $tot16; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX16; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Jasa konsultan pengawas kegiatan kontraktual</td>
        <td style="text-align: right;"><?= $dataBawah->vol17; ?></td>
        <td style="text-align: center;">Orang Bulan</td>
        <td style="text-align: right;"><?= $dataBawah->sat17; ?></td>
        <td style="text-align: right;"><?php $tot17 = $dataBawah->vol17*$dataBawah->sat17; echo $tot17; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX17; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Penyelenggaraan rapat koordinasi</td>
        <td style="text-align: right;"><?= $dataBawah->vol18; ?></td>
        <td style="text-align: center;">Frekuensi</td>
        <td style="text-align: right;"><?= $dataBawah->sat18; ?></td>
        <td style="text-align: right;"><?php $tot18 = $dataBawah->vol18*$dataBawah->sat18; echo $tot18; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX18; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Perjalanan dinas ke/dari lokasi kegiatan</td>
        <td style="text-align: right;"><?= $dataBawah->vol19; ?></td>
        <td style="text-align: center;">Frekuensi</td>
        <td style="text-align: right;"><?= $dataBawah->sat19; ?></td>
        <td style="text-align: right;"><?php $tot19 = $dataBawah->vol19*$dataBawah->sat19; echo $tot19; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX19; ?></td>
      </tr>
      <tr>
        <th class="merah" style="text-align:center;" colspan="5">KEGIATAN PENUNJANG BIDANG AIR MINUM</th>
        <th class="merah" style="text-align:right;"><?= $tot15+$tot16+$tot17+$tot18+$tot19; ?></th>
        <th class="merah" style="text-align:right;"></th>
      </tr>
      <tr>
        <th class="merah" style="text-align:center;" colspan="5">KEBUTUHAN TOTAL BIDANG AIR MINUM</th>
        <th class="merah" style="text-align:right;"><?= $tot1+$tot2+$tot3+$tot15+$tot16+$tot17+$tot18+$tot19; ?></th>
        <th class="merah" style="text-align:right;"></th>
      </tr>

      <tr>
        <th class="biru" style="text-align:center;">B.1</th>
        <th class="biru" style="text-align:left;" colspan="6">KEGIATAN FISIK BIDANG SANITASI</th>
      </tr>
      <tr>
        <th style="text-align:center; background-color: #ffff;">B.1.1</th>
        <th style="text-align:left; background-color: #ffff;" colspan="6">SEKTOR AIR LIMBAH</th>
      </tr>
      <tr>
        <td></td>
        <td>Pembangunan IPAL Skala Permukiman minimal 50 KK</td>
        <td style="text-align: right;"><?= $dataBawah->vol4; ?></td>
        <td style="text-align: center;">SR</td>
        <td style="text-align: right;"><?= $dataBawah->sat4; ?></td>
        <td style="text-align: right;"><?php $tot4 = $dataBawah->vol4*$dataBawah->sat4; echo $tot4; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX4; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Penambahan pipa pengumpul dan SR</td>
        <td style="text-align: right;"><?= $dataBawah->vol5; ?></td>
        <td style="text-align: center;">SR</td>
        <td style="text-align: right;"><?= $dataBawah->sat5; ?></td>
        <td style="text-align: right;"><?php $tot5 = $dataBawah->vol5*$dataBawah->sat5; echo $tot5; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX5; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Pembangunan Tangki Septik Komunal (5-10 KK)</td>
        <td style="text-align: right;"><?= $dataBawah->vol6; ?></td>
        <td style="text-align: center;">SR</td>
        <td style="text-align: right;"><?= $dataBawah->sat6; ?></td>
        <td style="text-align: right;"><?php $tot6 = $dataBawah->vol6*$dataBawah->sat6; echo $tot6; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX6; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Pembangunan Tangki Septik Skala Individual Perkotaan</td>
        <td style="text-align: right;"><?= $dataBawah->vol7; ?></td>
        <td style="text-align: center;">UNIT</td>
        <td style="text-align: right;"><?= $dataBawah->sat7; ?></td>
        <td style="text-align: right;"><?php $tot7 = $dataBawah->vol7*$dataBawah->sat7; echo $tot7; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX7; ?></td>
      </tr>
      <tr>
        <th style="text-align:center; background-color: #ffff;">B.1.2</th>
        <th style="text-align:left; background-color: #ffff;" colspan="6">SEKTOR PERSAMPAHAN</th>
      </tr>
      <tr>
        <td></td>
        <td>Pembangunan TPS3R</td>
        <td style="text-align: right;"><?= $dataBawah->vol8; ?></td>
        <td style="text-align: center;">UNIT</td>
        <td style="text-align: right;"><?= $dataBawah->sat8; ?></td>
        <td style="text-align: right;"><?php $tot8 = $dataBawah->vol8*$dataBawah->sat8; echo $tot8; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX8; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Peningkatan/ Rehabilitasi TPS3R</td>
        <td style="text-align: right;"><?= $dataBawah->vol9; ?></td>
        <td style="text-align: center;">UNIT</td>
        <td style="text-align: right;"><?= $dataBawah->sat9; ?></td>
        <td style="text-align: right;"><?php $tot9 = $dataBawah->vol9*$dataBawah->sat9; echo $tot9; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX9; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Pembangunan TPST</td>
        <td style="text-align: right;"><?= $dataBawah->vol10; ?></td>
        <td style="text-align: center;">UNIT</td>
        <td style="text-align: right;"><?= $dataBawah->sat10; ?></td>
        <td style="text-align: right;"><?php $tot10 = $dataBawah->vol10*$dataBawah->sat10; echo $tot10; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX10; ?></td>
      </tr>
      <tr>
        <th class="merah" style="text-align:center;" colspan="5">KEGIATAN FISIK BIDANG SANITASI</th>
        <th class="merah" style="text-align:right;"><?= $tot4+$tot5+$tot6+$tot7+$tot8+$tot9+$tot10; ?></th>
        <th class="merah" style="text-align:right;"></th>
      </tr>
      <tr>
        <th class="biru" style="text-align:center;">B.2</th>
        <th class="biru" style="text-align:left;" colspan="6">KEGIATAN PENUNJANG BIDANG SANITASI</th>
      </tr>
      <tr>
        <td></td>
        <td>Biaya tender</td>
        <td style="text-align: right;"><?= $dataBawah->vol20; ?></td>
        <td style="text-align: center;">PAKET</td>
        <td style="text-align: right;"><?= $dataBawah->sat20; ?></td>
        <td style="text-align: right;"><?php $tot20 = $dataBawah->vol20*$dataBawah->sat20; echo $tot20; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX20; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Honorarium pendamping/fasilitator non-aparatur sipil negara</td>
        <td style="text-align: right;"><?= $dataBawah->vol21; ?></td>
        <td style="text-align: center;">Orang Bulan</td>
        <td style="text-align: right;"><?= $dataBawah->sat21; ?></td>
        <td style="text-align: right;"><?php $tot21 = $dataBawah->vol21*$dataBawah->sat21; echo $tot21; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX21; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Jasa konsultan pengawas kegiatan kontraktual</td>
        <td style="text-align: right;"><?= $dataBawah->vol22; ?></td>
        <td style="text-align: center;">Orang Bulan</td>
        <td style="text-align: right;"><?= $dataBawah->sat22; ?></td>
        <td style="text-align: right;"><?php $tot22 = $dataBawah->vol22*$dataBawah->sat22; echo $tot22; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX22; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Penyelenggaraan rapat koordinasi</td>
        <td style="text-align: right;"><?= $dataBawah->vol23; ?></td>
        <td style="text-align: center;">Frekuensi</td>
        <td style="text-align: right;"><?= $dataBawah->sat23; ?></td>
        <td style="text-align: right;"><?php $tot23 = $dataBawah->vol23*$dataBawah->sat23; echo $tot23; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX23; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Perjalanan dinas ke/dari lokasi kegiatan</td>
        <td style="text-align: right;"><?= $dataBawah->vol24; ?></td>
        <td style="text-align: center;">Frekuensi</td>
        <td style="text-align: right;"><?= $dataBawah->sat24; ?></td>
        <td style="text-align: right;"><?php $tot24 = $dataBawah->vol24*$dataBawah->sat24; echo $tot24; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX24; ?></td>
      </tr>
      <tr>
        <th class="merah" style="text-align:center;" colspan="5">KEGIATAN PENUNJANG BIDANG SANITASI</th>
        <th class="merah" style="text-align:right;"><?= $tot20+$tot21+$tot22+$tot23+$tot24; ?></th>
        <th class="merah" style="text-align:right;"></th>
      </tr>
      <tr>
        <th class="merah" style="text-align:center;" colspan="5">KEBUTUHAN TOTAL BIDANG SANITASI</th>
        <th class="merah" style="text-align:right;"><?= $tot20+$tot21+$tot22+$tot23+$tot24+$tot4+$tot5+$tot6+$tot7+$tot8+$tot9+$tot10; ?></th>
        <th class="merah" style="text-align:right;"></th>
      </tr>

      <tr>
        <th class="biru" style="text-align:center;">C.1</th>
        <th class="biru" style="text-align:left;" colspan="6">KEGIATAN FISIK BIDANG PERUMAHAN DAN PERMUKIMAN</th>
      </tr>
      <tr>
        <th style="text-align:center; background-color: #ffff;">C.1.1</th>
        <th style="text-align:left; background-color: #ffff;" colspan="6">SEKTOR PERUMAHAN</th>
      </tr>
      <tr>
        <td></td>
        <td>Pembangunan Baru Rumah Swadaya</td>
        <td style="text-align: right;"><?= $dataBawah->vol11; ?></td>
        <td style="text-align: center;">UNIT</td>
        <td style="text-align: right;"><?= $dataBawah->sat11; ?></td>
        <td style="text-align: right;"><?php $tot11 = $dataBawah->vol11*$dataBawah->sat11; echo $tot11; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX11; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Peningkatan Kualitas Rumah Swadaya</td>
        <td style="text-align: right;"><?= $dataBawah->vol12; ?></td>
        <td style="text-align: center;">UNIT</td>
        <td style="text-align: right;"><?= $dataBawah->sat12; ?></td>
        <td style="text-align: right;"><?php $tot12 = $dataBawah->vol12*$dataBawah->sat12; echo $tot12; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX12; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Rehabilitasi dan Rekonstruksi Rumah Swadaya</td>
        <td style="text-align: right;"><?= $dataBawah->vol13; ?></td>
        <td style="text-align: center;">UNIT</td>
        <td style="text-align: right;"><?= $dataBawah->sat13; ?></td>
        <td style="text-align: right;"><?php $tot13 = $dataBawah->vol13*$dataBawah->sat13; echo $tot13; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX13; ?></td>
      </tr>
      <tr>
        <th style="text-align:center; background-color: #ffff;">C.2</th>
        <th style="text-align:left; background-color: #ffff;" colspan="6">SEKTOR JALAN DAN DRAINASE</th>
      </tr>
      <tr>
        <td></td>
        <td>Jalan Lingkungan dan Drainase Lingkungan</td>
        <td style="text-align: right;"><?= $dataBawah->vol14; ?></td>
        <td style="text-align: center;">UNIT</td>
        <td style="text-align: right;"><?= $dataBawah->sat14; ?></td>
        <td style="text-align: right;"><?php $tot14 = $dataBawah->vol14*$dataBawah->sat14; echo $tot14; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX14; ?></td>
      </tr>
      <tr>
        <th class="merah" style="text-align:center;" colspan="5">KEGIATAN FISIK BIDANG PERUMAHAN DAN PERMUKIMAN</th>
        <th class="merah" style="text-align:right;"><?= $tot11+$tot12+$tot13+$tot14; ?></th>
        <th class="merah" style="text-align:right;"></th>
      </tr>
      <tr>
        <th class="biru" style="text-align:center;">C.2</th>
        <th class="biru" style="text-align:left;" colspan="6">KEGIATAN PENUNJANG BIDANG PERUMAHAN DAN PERMUKIMAN</th>
      </tr>
      <tr>
        <td></td>
        <td>Biaya tender</td>
        <td style="text-align: right;"><?= $dataBawah->vol25; ?></td>
        <td style="text-align: center;">Paket</td>
        <td style="text-align: right;"><?= $dataBawah->sat25; ?></td>
        <td style="text-align: right;"><?php $tot25 = $dataBawah->vol25*$dataBawah->sat25; echo $tot25; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX25; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Honorarium pendamping/fasilitator non-aparatur sipil negara</td>
        <td style="text-align: right;"><?= $dataBawah->vol26; ?></td>
        <td style="text-align: center;">Orang Bulan</td>
        <td style="text-align: right;"><?= $dataBawah->sat26; ?></td>
        <td style="text-align: right;"><?php $tot26 = $dataBawah->vol26*$dataBawah->sat26; echo $tot26; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX26; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Jasa konsultan pengawas kegiatan kontraktual</td>
        <td style="text-align: right;"><?= $dataBawah->vol27; ?></td>
        <td style="text-align: center;">Orang Bulan</td>
        <td style="text-align: right;"><?= $dataBawah->sat27; ?></td>
        <td style="text-align: right;"><?php $tot27 = $dataBawah->vol27*$dataBawah->sat27; echo $tot27; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX27; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Penyelenggaraan rapat koordinasi</td>
        <td style="text-align: right;"><?= $dataBawah->vol28; ?></td>
        <td style="text-align: center;">Frekuensi</td>
        <td style="text-align: right;"><?= $dataBawah->sat28; ?></td>
        <td style="text-align: right;"><?php $tot28 = $dataBawah->vol28*$dataBawah->sat28; echo $tot28; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX28; ?></td>
      </tr>
      <tr>
        <td></td>
        <td>Perjalanan dinas ke/dari lokasi kegiatan</td>
        <td style="text-align: right;"><?= $dataBawah->vol29; ?></td>
        <td style="text-align: center;">Frekuensi</td>
        <td style="text-align: right;"><?= $dataBawah->sat29; ?></td>
        <td style="text-align: right;"><?php $tot29 = $dataBawah->vol29*$dataBawah->sat29; echo $tot29; ?></td>
        <td style="text-align: right;"><?= $dataBawah->catatX29; ?></td>
      </tr>
      <tr>
        <th class="merah" style="text-align:center;" colspan="5">KEGIATAN PENUNJANG BIDANG PERUMAHAN DAN PERMUKIMAN</th>
        <th class="merah" style="text-align:right;"><?= $tot25+$tot26+$tot27+$tot28+$tot29; ?></th>
        <th class="merah" style="text-align:right;"></th>
      </tr>
      <tr>
        <th class="merah" style="text-align:center;" colspan="5">KEBUTUHAN TOTAL BIDANG PERUMAHAN DAN PERMUKIMAN</th>
        <th class="merah" style="text-align:right;"><?= $tot11+$tot12+$tot13+$tot14+$tot25+$tot26+$tot27+$tot28+$tot29; ?></th>
        <th class="merah" style="text-align:right;"></th>
      </tr>

      <tr>
        <th style="text-align:center; background-color:#ffeeaf;" colspan="5">KEBUTUHAN TOTAL</th>
        <th style="text-align:right; background-color:#ffeeaf;"><?= $tot1+$tot2+$tot3+$tot4+$tot5+$tot6+$tot7+$tot8+$tot9+$tot10+$tot11+$tot12+$tot13+$tot14+$tot15+$tot16+$tot17+$tot18+$tot19+$tot20+$tot21+$tot22+$tot23+$tot24+$tot25+$tot26+$tot27+$tot28+$tot29; ?></th>
        <th style="text-align:right; background-color:#ffeeaf;"></th>
      </tr>
    </tbody>
  </table>
</body>
</html>





