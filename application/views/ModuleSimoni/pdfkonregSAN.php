<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>BERITA ACARA KONSULTASI PROGRAM DAK FISIK TA. <?= $ta; ?></title>
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
  <h1>BERITA ACARA KONSULTASI PROGRAM DAK FISIK TA. <?= $ta; ?></h1>
  <div class="header">
    <!-- Tabel kecil kiri -->
    <div class="small-table small-table-left custom-table-kiri">
      <table>
        <tbody>
          <tr>
            <td style="width: 250px;">Bidang</td>
            <td style="width:0px;">:</td>
            <?php $nmBidang = getNameBidang($kdsatkerBa); ?>
            <td style="width:150px;"><?= $nmBidang; ?></td>
          </tr>
          <tr>
            <td style="width: 250px;">Tematik</td>
            <td style="width:0px;">:</td>
            <?php


            if ($tematikBa =='1') {
              $tematik = 'Non Tematik';
            }

            if ($tematikBa =='2') {
              $tematik = 'Tematik PPKT';
            }

            if ($tematikBa =='3') {
              $tematik = 'Tematik PE-RPKI';
            }

            ?>
            <td style="width:150px;"><?= $tematik; ?></td>
          </tr>
          <tr>
            <td style="width: 250px;">Provinsi</td>
            <td style="width:0px;">:</td>
            <td style="width:150px;"><?= $nmProvinsi->nmlokasi; ?></td>
          </tr>

          <tr>
            <td style="width: 250px;">Provinsi/Kabupaten/Kota Pengusul</td>
            <td style="width:0px;">:</td>
            <td style="width:150px;"><?= $NmKabKota->nmkabkota; ?></td>
          </tr>

          <?php 
          $paguAlokasi='';
          $paguAlokasiPemda='';
          $paguAspirasi='';
          $minApprove='';
          $maxApprove='';

          if ($tematikBa =='1') {

            $paguAlokasi=$dataHeader->ld_total;
            $paguAlokasiPemda=$dataHeader->ld_alokasi_pemda;
            $paguAspirasi=$dataHeader->ld_alokasi_dpr;
            $minApprove=$dataHeader->ld_min_approve;
            $maxApprove=$dataHeader->ld_max_penunjang;

          }

          if($tematikBa =='2'){
           $paguAlokasi=$dataHeader->kt_alokasi_pemda;
           $paguAlokasiPemda=$dataHeader->kt_alokasi_pemda;
           $paguAspirasi='-';
           $minApprove=$dataHeader->kt_min_approve;
           $maxApprove=$dataHeader->kt_max_penunjang;
         }


         if($tematikBa =='3'){
           $paguAlokasi=$dataHeader->ki_alokasi_pemda;
           $paguAlokasiPemda=$dataHeader->ki_alokasi_pemda;
           $paguAspirasi='-';
           $minApprove=$dataHeader->ki_min_approve;
           $maxApprove=$dataHeader->ki_max_penunjang;
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
    <h4 style="margin-bottom: -15px; text-align: left;">CP Krisna Daerah</h4>
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
      <td style="text-align:right;"> <?= number_format(@$dataTabel->nilaiFisik,0,',','.');  ?></td>
      <td style="text-align: center;"><?= (@$paguAlokasi < @$dataTabel->nilaiFisik) ? 'Not Ok':'Ok'; ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->catatFisik; ?></td>
    </tr>
    <tr>
      <td>b. Output</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?= (@$dataTabel->checkOutput != 'on') ? 'Not Ok':'Ok'; ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->catatOutput; ?></td>
    </tr>
    <tr>
      <td>c. Output</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?= (@$dataTabel->checkKomponen != 'on') ? 'Not Ok':'Ok'; ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->catatKomponen; ?></td>
    </tr>
    <tr>
      <td rowspan="2" style="text-align:center;">2.</td>
      <td rowspan="2">Kegiatan Penunjang</td>
      <td>a. nilai penunjang (5% dari pagu total Jenis/Bidang yang diambil)</td>
      <td style="text-align:right;"> <?= number_format(@$dataTabel->nilaiPenunjang,0,',','.');  ?></td>
      <?php 

      $penunjangDanFisik = @$dataTabel->fisikPenunjang;

      if (@$paguAlokasi < @$penunjangDanFisik) {
        $sts = 'not Ok';
      }else{
        $sts = 'Ok';
      }

      $persen= ($dataTabel->nilaiPenunjang/$penunjangDanFisik)*100;;

      ?>

      <td style="text-align: center;"><?= @$sts; ?></td>
      <td><?= number_format($persen, 2, '.', ''); ?>% </td>
    </tr>
    <tr>
      <td>b. rincian kegiatan penunjang </td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?= (@$dataTabel->checkPenunjang != 'on') ? 'Not Ok':'Ok'; ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->rincianKegiatan; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;">3.</td>
      <td>Kegiatan Fisik + Penunjang</td>
      <td>a. Nilai Fisik + Penunjang    </td>
      <td style="text-align:right;"> <?= number_format(@$dataTabel->fisikPenunjang,0,',','.'); ?></td>
      <td style="text-align: center;"><?= (@$dataTabel->fisikPenunjang > @$paguAlokasi) ? 'Not Ok':'Ok'; ?></td>
      <td><?= @$dataTabel->fisikPenunjangCatat; ?></td>
    </tr>


    <tr>
      <td style="text-align:center;">4.</td>
      <td>Readiness Criteria</td>
      <td>a. Surat pernyataan tanggungjawab mutlak (SPTJM)</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?= @$dataTabel->checkSPTJM != 'on' ? 'Not Ok':'Ok'; ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->catatSptjm; ?></td>
    </tr>
    

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>b. Dokumen Strategi Sanitasi Kab/Kota (SSK)</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?= @$dataTabel->checkSSK != 'on' ? 'Not Ok':'Ok'; ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->catatSSK; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td>Readiness Criteria - Air Limbah <br> (SPALD-T dan SPALD-S)</td>
      <td>a. Template Dokumen Perencanaan Rinci/Detail Engineering Design (DED) </td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?= @$dataTabel->kondisiAirLimba == 'on' ? 'N/A' :  (@$dataTabel->checkDed != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= (@$dataTabel->kondisiAirLimba == 'on') ? 'N/A' : @$dataTabel->catatDed; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>b. Template Rencana Anggaran Biaya (RAB)</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimba == 'on' ? 'N/A' :  (@$dataTabel->checkRab != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimba == 'on' ? 'N/A' : @$dataTabel->catatRab; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>c. Surat Pernyataan Kesiapan Pelaksanaan Kegiatan dari Pemerintah Desa/Kelurahan</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimba == 'on' ? 'N/A' :  (@$dataTabel->checkSpkp != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimba == 'on' ? 'N/A' : @$dataTabel->catatSpkp; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>d. Kesiapan lahan berupa surat pernyataan kesiapan dari Pemerintah Desa/Sertifikat/Akta Hibah/Akta Jual Beli</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimba == 'on' ? 'N/A' :  (@$dataTabel->checkKlbs != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimba == 'on' ? 'N/A' : @$dataTabel->catatKlbs; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>e. Daftar Calon Penerima Manfaat</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimba == 'on' ? 'N/A' :  (@$dataTabel->checkDcpm != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimba == 'on' ? 'N/A' : @$dataTabel->catatDcpm; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>f. Bukti Kepemilikan IPLT</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimba == 'on' ? 'N/A' :  (@$dataTabel->checkIplt != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimba == 'on' ? 'N/A' : @$dataTabel->catatIplt; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>g. Justifikasi teknis untuk penambahan pipa pengumpul</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimba == 'on' ? 'N/A' :  (@$dataTabel->checkJustifikasi != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimba == 'on' ? 'N/A' : @$dataTabel->catatJustifikasi; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td>Readiness Criteria - Air Limbah <br> (IPLT dan Truck Tinja)</td>
      <td>a. IPLT - Surat Minat Kepala Daerah</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' :  (@$dataTabel->checkSmkd != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' : @$dataTabel->catatSmkd; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>b. IPLT - Surat Penetapan Lokasi</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' :  (@$dataTabel->checkSpl != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' : @$dataTabel->catakSpl; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>c. IPLT - Persetujuan dari Kepala BPPW</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' :  (@$dataTabel->checkBppw != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' : @$dataTabel->catakBppw; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>d. IPLT - Dokumen Perencanaan Rinci / Detail Engineering Design (DED)</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' :  (@$dataTabel->checkIDpr != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' : @$dataTabel->catakIDpr; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>e. IPLT - Rencana Anggaran Biaya (RAB)</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' :  (@$dataTabel->checkIRab != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' : @$dataTabel->catakIRab; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>f. IPLT - Bukti Legalitas Lahan</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' :  (@$dataTabel->checkIBll != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' : @$dataTabel->catakIBll; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>g. IPLT - Dokumentasi Justifikasi Teknis</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' :  (@$dataTabel->checkIDjt != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' : @$dataTabel->catakIDjt; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>h. IPLT - Masterplan/Rencana Induk Air Limbah Kota/Kab</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' :  (@$dataTabel->checkIMasterPlan != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' : @$dataTabel->catakIMasterPlan; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>i. IPLT - Dokumen Lingkungan (AMDAL/UKL-UPL)</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' :  (@$dataTabel->checkIAmdal != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' : @$dataTabel->catakIAmdal; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>j. IPLT - Kesiapan Lembaga Pengelola</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' :  (@$dataTabel->checkIKlp != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' : @$dataTabel->catakIKlp; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>k. IPLT - Business Plan</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' :  (@$dataTabel->checkIBisnis != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' : @$dataTabel->catakIBisnis; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>l. IPLT - Bukti Komitmen Layanan Lumpur Tinja Terjadwal</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' :  (@$dataTabel->checkIBkll != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' : @$dataTabel->catakIBkll; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>m. IPLT - As Build Drawing IPLT</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' :  (@$dataTabel->checkIAbd != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' : @$dataTabel->catakIAbd; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>n. IPLT - Audit/Reviu BPKP</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' :  (@$dataTabel->checkIBpkp != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' : @$dataTabel->catakIBpkp; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>o. Truck Tinja - Spesifikasi teknis dan harga supplier</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' :  (@$dataTabel->checkITrukTinja != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiAirLimbaIplt == 'on' ? 'N/A' : @$dataTabel->catakITrukTinja; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td>Readiness Criteria - Persampahan (Pembangunan dan Peningkatan/Rehabilitasi TPS3R)</td>
      <td>a. Dokumen Perencanaan Rinci / Detail Engineering Design (DED)</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' :  (@$dataTabel->checkPPembangunan != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' : @$dataTabel->catatPPembangunan; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>b. Rencana Anggaran Biaya (RAB)</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' :  (@$dataTabel->checkPRab != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' : @$dataTabel->catakPRab; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>c. Surat Pernyataan Kesiapan Pelaksanaan Kegiatan dari Pemerintah Desa/Kelurahan</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' :  (@$dataTabel->checkPSpkp != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' : @$dataTabel->catakPSpkp; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>d. Bukti Legalitas Lahan</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' :  (@$dataTabel->checkPBll != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' : @$dataTabel->catakPBll; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>e. Konsep Business Plan Pengelolaan TPS3R</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' :  (@$dataTabel->checkPKbp != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' : @$dataTabel->catakPKbp; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>f. Daftar Calon Penerima Manfaat</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' :  (@$dataTabel->checkPDcpm != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' : @$dataTabel->catakPDcpm; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>g. Berita Acara Kesiapan Warga</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' :  (@$dataTabel->checkPBkaw != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' : @$dataTabel->catakPBkaw; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>h. Surat pernyataan kesiapan dan dukungan biaya operasi dan pemeliharaan</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' :  (@$dataTabel->checkPSPKD != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' : @$dataTabel->catakPSPKD; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>i. Durat dukungan Dinas Lingkungan Hidup</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' :  (@$dataTabel->checkPDddl != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' : @$dataTabel->catakPDddl; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>j. Justifikasi Teknis Peningkatan/Rehabilitasi TPS3R</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' :  (@$dataTabel->checkJtp != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' : @$dataTabel->catakJtp; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>k. SK Pembentukan KKP (khusus untuk peningkatan/ rehabilitasi TPS3R)</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' :  (@$dataTabel->checkSKKKP != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' : @$dataTabel->catakSKKKP; ?></td>
    </tr>

    <tr>
      <td style="text-align:center;"></td>
      <td></td>
      <td>l. As Build Drawing TPS3R Terbangun</td>
      <td style="text-align:right;"></td>
      <td style="text-align: center;"><?=  @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' :  (@$dataTabel->checkAbdTp != 'on' ? 'Not Ok':'Ok'); ?></td>
      <td style="overflow: hidden; max-width: 150px; word-wrap: break-word;"><?= @$dataTabel->kondisiPersampahan == 'on' ? 'N/A' : @$dataTabel->catakAbdTp; ?></td>
    </tr>

  </tbody>

  <tr>
    <th style="text-align: center;" colspan="6">Catatan Pembahasan</th>
  </tr>

  <tr>
    <td colspan="6" style="overflow: hidden; max-width: 150px; word-wrap: break-word; height: 70px;"><?= @$dataTabel->catatanAll; ?></td>
  </tr>

</tbody>
</table>
<h6>Berita Acara adalah bukti selesai pembahasan, finalisasi Rencana Kegiatan (RK) dapat disetejui apabila Pemerintah Daerah telah melakukan sign digital pada aplikasi Krisna DA. <?= $ta; ?></h6>
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
      <td style="height: 40px;">Pemerintah Daerah Prov/Kab/ <?= $NmKabKota->nmkabkota; ?></td>
      <td style="height: 40px;"><?= $ttdDaerah; ?></td>
      <td style="height: 40px;"><?= $jabatanttdDaerah; ?></td>
      <td style="height: 40px;"></td>
    </tr>
    <tr style="text-align:left;">
      <td style="height: 40px;">Balai Prasarana Permukiman Wilayah <?= $nmProvinsi->nmlokasi; ?></td>
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