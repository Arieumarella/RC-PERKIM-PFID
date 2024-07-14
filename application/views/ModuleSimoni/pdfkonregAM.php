<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>BERITA ACARA KONSULTASI PROGRAM DAK FISIK TA. 2024</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    h1 {
      text-align: center;
      font-size: 17px;
    }
    .header {
      overflow: auto; /* Clear float */
    }
    .small-table {
      width: 40%; /* Mengatur lebar masing-masing tabel kecil */
      padding: 10px; /* Menambahkan jarak dengan padding */
    }
    .small-table-left {
      float: left; /* Mengatur tabel kiri mengapung ke sisi kiri */
    }
    .small-table-right {
      float: right; /* Mengatur tabel kanan mengapung ke sisi kanan */
    }
    .custom-table-kiri {
      /* Gaya khusus untuk tabel kiri */
    }
    .custom-table-kanan {
      /* Gaya khusus untuk tabel kanan */
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      border: 1px solid black;
      text-align: left;
      padding: 5px;
      font-size: 11px;
    }
    th {
      background-color: #f2f2f2;
      font-size: 11px;
      text-align: center;
    }
    /* Menghapus border dari tabel kiri di atas */
    .custom-table-kiri th,
    .custom-table-kiri td {
      border: 0px;
      padding: 4px;
    }

    .custom-table-kanan th,
    .custom-table-kanan td {
     border: 1px solid black;
     padding: 4px;
     word-wrap: break-word; /* Memaksa pemisahan kata jika teks terlalu panjang */
   }
 </style>
</head>
<body>
  <h1>BERITA ACARA KONSULTASI PROGRAM DAK FISIK TA. 2024</h1>
  <div class="header">
    <!-- Tabel kecil kiri -->
    <div class="small-table small-table-left custom-table-kiri">
      <table>
        <tbody>
          <tr>
            <td style="width: 250px;">Bidang</td>
            <td style="width:0px;">:</td>
            <td style="width:150px;">Air Minum</td>
          </tr>
          <tr>
            <td style="width: 250px;">Tematik</td>
            <td style="width:0px;">:</td>
            <?php

            if ($tematikBa =='1') {
              $tematik = 'tematik';
            }else{
              $tematik = 'Non Tematik';
            }

            ?>
            <td style="width:150px;"><?= $tematik; ?></td>
          </tr>
          <tr>
            <td style="width: 250px;">Provinsi</td>
            <td style="width:0px;">:</td>
            <td style="width:150px;"><?= $nmProvinsi->NMLOKASI; ?></td>
          </tr>

          <tr>
            <td style="width: 250px;">Provinsi/Kabupaten/Kota Pengusul</td>
            <td style="width:0px;">:</td>
            <td style="width:150px;"><?= $NmKabKota->NMKABKOTA; ?></td>
          </tr>

          <?php 
          $paguAlokasi='';
          $paguAlokasiPemda='';
          $paguAspirasi='';
          $minApprove='';
          $maxApprove='';

          if ($tematikBa =='1') {

            $paguAlokasi=$dataHeader->total_tematik*1000;
            $paguAlokasiPemda='-';
            $paguAspirasi='-';
            $minApprove=$dataHeader->min_approve_tematik*1000;
            $maxApprove=$dataHeader->max_penunjang_tematik*1000;

          }else{
            $paguAlokasi=$dataHeader->total_non_tematik*1000;
            $paguAlokasiPemda=$dataHeader->pemda_non_tematik*1000;
            $paguAspirasi=$dataHeader->dpr_non_tematik*1000;
            $minApprove=$dataHeader->min_approve_non_tematik*1000;
            $maxApprove=$dataHeader->max_penunjang_non_tematik*1000;
          }

          ?>

          <tr>
            <td style="width: 250px;">Pagu Alokasi Total</td>
            <td style="width:0px;">:</td>
            <td style="width:150px;">Rp <?= number_format($paguAlokasi,0,',','.'); ?></td>
          </tr>
          <tr>
            <td style="width: 250px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pagu Alokasi Pemda</td>
            <td style="width:0px;">:</td>
            <td style="width:150px;"> Rp <?=  ($paguAlokasiPemda != '-') ? number_format($paguAlokasiPemda,0,',','.'):'-'; ?></td>
          </tr>

          <tr>
            <td style="width: 250px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pagu Alokasi (Aspirasi)</td>
            <td style="width:0px;">:</td>
            <td style="width:150px;"> Rp <?= ($paguAspirasi != '-') ? number_format($paguAspirasi,0,',','.'):'-'; ?></td>
          </tr>

          <tr>
            <td style="width: 250px;">Min Approve RK (25% dari Pagu Alokasi)</td>
            <td style="width:0px;">:</td>
            <td style="width:150px;"> Rp <?= number_format($minApprove,0,',','.'); ?></td>
          </tr>
          <tr>
            <td style="width: 250px;">Max Penunjang (5% dari Pagu Alokasi)</td>
            <td style="width:0px;">:</td>
            <td style="width:150px;">Rp <?= number_format($maxApprove,0,',','.'); ?></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tabel kecil kanan -->
    <div class="small-table small-table-right custom-table-kanan">
      <table>
        <tbody>
          <tr>
            <td style="width:100px;">Nama Peserta Desk</td>
            <td><?= $peserta; ?></td>
          </tr>
          <tr>
            <td>Nomor Telepon</td>
            <td><?= $noTlp; ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <br><br><br><br><br><br><br><br><br><br><br>

  <!-- Tabel Utama -->
  <table>
    <thead>
      <tr>
        <th style="width:1px; text-align: center;">No.</th>
        <th style="width: 40px;">Kegiatan</th>
        <th style="width: 30px;">Checklist</th>
        <th style="width: 10px;">Nilai <br> (Rp.)</th>
        <th style="width:5px;">Satuan</th>
        <th style="width:15px;">Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td rowspan="3" style="text-align:center;">1.</td>
        <td rowspan="3">Kegiatan Fisik</td>
        <td>a. Nilai total fisik</td>
        <td style="text-align:right;"> <?= number_format($dataTabel->nilai_fisik,0,',','.');  ?></td>
        <td style="text-align: center;"><?= ($paguAlokasi < $dataTabel->nilai_fisik) ? 'Not Ok':'Ok'; ?></td>
        <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= $dataTabel->keterangan_fisik; ?></td>
      </tr>
      <tr>
        <td>b. Output</td>
        <td style="text-align:right;"></td>
        <td style="text-align: center;"><?= ($dataTabel->sts_output == '0') ? 'Not Ok':'Ok'; ?></td>
        <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= $dataTabel->keterangan_output; ?></td>
      </tr>
      <tr>
        <td>c. Output</td>
        <td style="text-align:right;"></td>
        <td style="text-align: center;"><?= ($dataTabel->sts_komponen == '0') ? 'Not Ok':'Ok'; ?></td>
        <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= $dataTabel->keterangan_komponen; ?></td>
      </tr>
      <tr>
        <td rowspan="2" style="text-align:center;">2.</td>
        <td rowspan="2">Kegiatan Penunjang</td>
        <td>a. nilai penunjang (5% dari pagu total Jenis/Bidang yang diambil)</td>
        <td style="text-align:right;"> <?= number_format($dataTabel->nilai_penunjang,0,',','.');  ?></td>
        <?php 

        $penunjangDanFisik = $dataTabel->nilai_fisik_penunjang;

        if ($paguAlokasi < $penunjangDanFisik) {
          $sts = 'not Ok';
        }else{
          $sts = 'Ok';
        }

        $persen= ($dataTabel->nilai_penunjang/$penunjangDanFisik)*100;

        ?>

        <td style="text-align: center;"><?= $sts; ?></td>
        <td><?= number_format($persen, 2, '.', ''); ?>% </td>
      </tr>
      <tr>
        <td>b. rincian kegiatan penunjang </td>
        <td style="text-align:right;"></td>
        <td style="text-align: center;"><?= ($dataTabel->sts_rincian_penunjang == '0') ? 'Not Ok':'Ok'; ?></td>
        <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= $dataTabel->keterangan_rincian_penunjang; ?></td>
      </tr>
      <tr>
        <td style="text-align:center;">3.</td>
        <td>  Sisa Alokasi</td>
        <td>a. Sisa Alokasi</td>
        <td style="text-align:right;"><?= number_format($dataTabel->sisaAlokasi,0,',','.'); ?></td>
        <td style="text-align: center;"></td>
        <td><?= $dataTabel->leterangan_sisaAlokasi; ?></td>
      </tr>
      <tr>
        <td style="text-align:center;">4.</td>
        <td>Kegiatan Fisik + Penunjang</td>
        <td>a. Nilai Fisik + Penunjang    </td>
        <td style="text-align:right;"> <?= number_format($dataTabel->nilai_fisik_penunjang,0,',','.'); ?></td>
        <td style="text-align: center;"><?= ($dataTabel->nilai_fisik_penunjang > $paguAlokasi) ? 'Not Ok':'Ok'; ?></td>
        <td><?= $dataTabel->keterangan_fisik_penunjang; ?></td>
      </tr>
      <tr>
        <td style="text-align:center;">5.</td>
        <td>Readiness Criteria</td>
        <td>a. Surat pernyataan tanggungjawab mutlak (SPTJM)</td>
        <td style="text-align:right;"></td>
        <td style="text-align: center;"><?= ($dataTabel->sts_sptjm == '0') ? 'Not Ok':'Ok'; ?></td>
        <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= $dataTabel->keterangan_sptjm; ?></td>
      </tr>
      <tr>
        <td style="text-align:center;"></td>
        <td></td>
        <td>b. Dokumen RISPAM</td>
        <td style="text-align:right;"></td>
        <td style="text-align: center;"><?= ($dataTabel->sts_rispam == '0') ? 'Not Ok':'Ok'; ?></td>
        <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= $dataTabel->keterangan_rispam; ?></td>
      </tr>
      <tr>
        <td style="text-align:center;"></td>
        <td></td>
        <td>c. Dokumen Perencanaan Rinci/Detail Engineering Design (DED)</td>
        <td style="text-align:right;"></td>
        <td style="text-align: center;"><?= ($dataTabel->sts_ded == '0') ? 'Not Ok':'Ok'; ?></td>
        <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= $dataTabel->keterangan_ded; ?></td>
      </tr>
      <tr>
        <td style="text-align:center;"></td>
        <td></td>
        <td>d. Rencana Anggaran Biaya (RAB)</td>
        <td style="text-align:right;"></td>
        <td style="text-align: center;"><?= ($dataTabel->sts_rab == '0') ? 'Not Ok':'Ok'; ?></td>
        <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= $dataTabel->keterangan_rab; ?></td>
      </tr>
      <tr>
        <td style="text-align:center;"></td>
        <td></td>
        <td>e. Surat Pernyataan Kesiapan Lahan (untuk kegiatan yang memiliki bangunan di atas lahan seperti IPA, Broncaptering, Sumur, dan Reservoir)</td>
        <td style="text-align:right;"></td>
        <td style="text-align: center;"><?= ($dataTabel->sts_kesiapan_lahan == '0') ? 'Not Ok':'Ok'; ?></td>
        <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= $dataTabel->keterangan_kesiapan_lahan; ?></td>
      </tr>
      <tr>
        <td style="text-align:center;"></td>
        <td></td>
        <td>f. Daftar calon penerima manfaat berdasarkan hasil Real Demand Survey (RDS) yang dikeluarkan dan ditandatangani pengelolan SPAM terbangun (PDAM / UPTD / Perumda / Kepala Desa /  KPSPAM / BUMDES) dan diketahui oleh OPD Teknis.</td>
        <td style="text-align:right;"></td>
        <td style="text-align: center;"><?= ($dataTabel->sts_rds == '0') ? 'Not Ok':'Ok'; ?></td>
        <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= $dataTabel->keterangan_rds; ?></td>
      </tr>
      <tr>
        <td style="text-align:center;"></td>
        <td></td>
        <td>g. Surat kesiapan Lembaga pengelola yang dikeluarkan oleh pengelola SPAM terbangun (PDAM / UPTD / Perumda / KPSPAM / BUMDES).</td>
        <td style="text-align:right;"></td>
        <td style="text-align: center;"><?= ($dataTabel->sts_pdam == '0') ? 'Not Ok':'Ok'; ?></td>
        <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= $dataTabel->keterangan_pdam; ?></td>
      </tr>
      <tr>
        <td style="text-align:center;"></td>
        <td></td>
        <td>h. Perjanjian Kerja Sama (PKS) pengembangan SPAM Regional yang sudah dilegalisasi atau apabila masih dalam proses penyusunan dapat disertakan surat pernyataan dari Kepala Daerah. (Untuk SPAM Regional Provinsi)</td>
        <td style="text-align:right;"></td>
        <td style="text-align: center; width: 10px;"><?= ($dataTabel->sts_pks == '0') ? 'Not Ok':'Ok'; ?></td>
        <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= $dataTabel->keterangan_pks; ?></td>
      </tr>
    </tbody>

    <tr>
      <th style="text-align: center;" colspan="6">Catatan Pembahasan</th>
    </tr>
    
    <tr>
      <td colspan="6" style="overflow: hidden; max-width: 150px; word-wrap: break-word; height: 70px;"><?= $dataTabel->keterangan_global; ?></td>
    </tr>

  </tbody>
</table>
<h6>Berita Acara adalah bukti selesai pembahasan, finalisasi Rencana Kegiatan (RK) dapat disetejui apabila Pemerintah Daerah telah melakukan sign digital pada aplikasi Krisna DAK 2024</h6>
<table>
  <thead>
    <tr>
      <th style="width:20%; text-align: center;">Instansi</th>
      <th style="width: 20%; text-align: center;">Nama</th>
      <th style="width: 20%; text-align: center;">Jabatan</th>
      <th style="width: 20%; text-align: center;">Paraf/TTD</th>
    </tr>
  </thead>
  <tbody>
    <tr style="text-align:left;">
      <td style="height: 40px;">Pemerintah Daerah Prov/Kab/ <?= $NmKabKota->NMKABKOTA; ?></td>
      <td style="height: 40px;"><?= $ttdDaerah; ?></td>
      <td style="height: 40px;"><?= $jabatanttdDaerah; ?></td>
      <td style="height: 40px;"></td>
    </tr>
    <tr style="text-align:left;">
      <td style="height: 40px;">Balai Prasarana Permukiman Wilayah <?= $nmProvinsi->NMLOKASI; ?></td>
      <td style="height: 40px;"><?= $balai; ?></td>
      <td style="height: 40px;"><?= $jabatanBalai; ?></td>
      <td style="height: 40px;"></td>
    </tr>
    <tr style="text-align:left;">
      <td rowspan="2" style="height: 40px;">Direktorat Air Minum Ditjen Cipta Karya</td>
      <td style="height: 40px;"><?= $ck1; ?></td>
      <td style="height: 40px;"><?= $jabatanCk1; ?></td>
      <td style="height: 40px;"></td>
    </tr>
    <tr style="text-align:left;">
      <td style="height: 40px;"><?= $ck2; ?></td>
      <td style="height: 40px;"><?= $jabatanCk2; ?></td>
      <td style="height: 40px;"></td>
    </tr>
    <tr style="text-align:left;">
      <td style="height: 40px;">Pusat Fasilitasi Infrastruktur Daerah Bidang Pelaksanaan DAK Perumahan dan Permukiman</td>
      <td style="height: 40px;"><?= $Pfid; ?></td>
      <td style="height: 40px;"><?= $jabatanPfid; ?></td>
      <td style="height: 40px;"></td>
    </tr>
  </tbody>
</table>