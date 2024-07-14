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
    
    .tabelutama {
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

    .page-break-before {
      page-break-before: always;
    }

    /* Gaya untuk memecah halaman setelah elemen dengan class "page-break-after" */
    .page-break-after {
      page-break-after: always;
    }
  </style>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

  <table class="tabelutama">
    <thead class="theaderX">
      <tr>
        <th class="Kuning" colspan="2" style="width:1px;">NO</th>
        <th class="Kuning" style="width:25%;">INDIKATOR DAN VARIABLE</th>
        <th class="Kuning" style="width:25%;">DOKUMEN <br> READINESS CRITERIA (RC)</th>
        <th class="Kuning" style="width:35%;">CATATAN KONSULTASI PROGRAM</th>
        <th class="Kuning" style="width:15%;">FILE</th>
      </tr>
    </thead>
    <tbody class="tbodyX">
      <tr class="text-start">
        <th colspan="6" style="background-color: #c5eef6; color: black; text-align:left;"><i>READINESS CRITERIA</i> <b>UTAMA (TAHAP BERSAMAAN DENGAN EXSUM)</b></th>
      </tr>
      <tr>
        <td colspan="2" class="text-center" style="text-align: center;"><b>1.</b></td>
        <td colspan="4" style="text-align: left;"><b>Program Penanganan Permukiman Kumuh Terpadu</b></td>
      </tr>
      <tr>
        <td></td>
        <td style="text-align: center;"><b>1.1</b></td>
        <td style="text-align: left;">Executive Summary Program Penanganan Permukiman Kumuh Terpadu (outline terlampir)</td>

        <td style="text-align: left;" >Upload file pdf/ppt tentang ringkasan program penanganan permukiman kumuh terpadu yang sudah dimiliki oleh daerah pada kawasan yang diusulkan. Executive summary merupakan lampiran dari surat minat kepala daerah. </td>

        <td style="text-align: left;">
          <?= $dataDetail->catat1; ?>
        </td>                   
        <td style="vertical-align: middle; text-align:center; text-align: center;">
          <?php

          if ($dataDetail->x1 != null or $dataDetail->x1 != '') {
            echo '<i class="fa-solid fa-check fa-xl"></i>V';
          }

          ?>
        </tr>
        <tr>
          <td colspan="2" class="text-center" style="text-align: center;"><b>2.</b></td>
          <td colspan="4" style="text-align: left;"><b>Masterplan Kawasan</b></td>
        </tr>
        <tr>
          <td></td>
          <td style="text-align: center;"><b>2.1</b></td>
          <td style="text-align: left;">Masterplan</td>
          <td style="text-align: left;" >Upload file pdf/ppt terkait masterplan rencana penanganan permukiman kumuh.</td>
          <td style="text-align: left;">
            <?= $dataDetail->catat2; ?>
          </td>
          <td style="vertical-align: middle; text-align:center;">
           <?php

           if ($dataDetail->x2 != null or $dataDetail->x2 != '') {
            echo '<i class="fa-solid fa-check fa-xl"></i>V';
          }

          ?>
        </td>
        <tr>
          <td colspan="2" style="text-align: center;"><b>3.</b></td>
          <td colspan="4" style="text-align: left;"><b>Surat Keputusan Kumuh</b></td>
        </tr>
      </tr>

      <tr>
        <td></td>
        <td style="text-align: center;"><b>3.1</b></td>
        <td style="text-align: left;">SK Kumuh</td>
        <td style="text-align: left;">Upload file SK Kumuh untuk lokasi permukiman kumuh yang ditangani.</td>
        <td style="text-align: left;">
          <?= $dataDetail->catat3; ?>
        </td>
        <td style="text-align: center;" style="vertical-align: middle; text-align:center;">
          <?php

          if ($dataDetail->x3 != null or $dataDetail->x3 != '') {
            echo '<i class="fa-solid fa-check fa-xl"></i>V';
          }

          ?>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center;"><b>4.</b></td>
          <td colspan="4" style="text-align: left;"><b>Dokumen terkait Rencana Pencegahan dan Peningkatan Kualitas Permukiman Kumuh</b></td>
        </tr>
        <tr>
          <td></td>
          <td style="text-align: center;"><b>4.1</b></td>
          <td style="text-align: left;">RP2KPKPK/RP2KPKP/RP3KP/dan sejenisnya</td>
          <td style="text-align: left;">Upload file RP2KPKPK/RP2KPKP/RP3KP/dan sejenisnya</td>
          <td style="text-align: left;">
            <?= $dataDetail->catat4; ?>
          </td>
          <td class="text-center" style="vertical-align: middle; text-align:center;">
            <?php

            if ($dataDetail->x4 != null or $dataDetail->x4 != '') {
              echo '<i class="fa-solid fa-check fa-xl"></i>V';
            }

            ?>
          </td>
        </tr>
        <tr>
          <td colspan="2" class="text-center" style="text-align: center;"><b>5.</b></td>
          <td colspan="4" style="text-align: left;"><b>Kesiapan Calon Penerima Bantuan</b></td>
        </tr>
        <tr>
          <td></td>
          <td style="text-align: center;"><b>5.1</b></td>
          <td style="text-align: left;">Bukti sosialisasi kepada masyarakat calon penerima bantuan.</td>
          <td style="text-align: left;">Upload file bukti sosialisasi program penanganan permukiman kumuh kepada calon warga peserta program. </td>
          <td style="text-align: left;">
            <?= $dataDetail->catat5; ?>
          </td>
          <td class="text-center" style="vertical-align: middle; text-align:center; text-align:center;">
           <?php

           if ($dataDetail->x5 != null or $dataDetail->x5 != '') {
            echo '<i class="fa-solid fa-check fa-xl"></i>V';
          }

          ?>
        </td>
      </tr>
      <tr>
        <td colspan="2" class="text-center" style="text-align: center;"><b>6.</b></td>
        <td colspan="4" style="text-align: left;"><b>Dokumen Pernyataan Status Kesesuaian dan Kesiapan Lahan </b></td>
      </tr>
      <tr>
        <td></td>
        <td style="text-align: center;"><b>6.1</b></td>
        <td style="text-align: left;">Surat Penetapan Lokasi (Penlok).</td>
        <td style="text-align: left;">Upload file Surat Penetapan Lokasi.</td>
        <td style="text-align: left;">
          <?= $dataDetail->catat6; ?>
        </td>
        <td class="text-center" style="vertical-align: middle; text-align:center;">
         <?php

         if ($dataDetail->x6 != null or $dataDetail->x6 != '') {
          echo '<i class="fa-solid fa-check fa-xl"></i>V';
        }

        ?>
      </tr>
      <tr>
        <td></td>
        <td style="text-align: center;"><b>6.2</b></td>
        <td style="text-align: left;">Berita Acara Kesepakatan Warga untuk konsolidasi tanah (jika menggunakan skema konsolidasi tanah).</td>
        <td style="text-align: left;">Upload file Berita Acara Kesepakatan Warga untuk konsolidasi tanah (jika menggunakan skema konsolidasi tanah).</td>
        <td style="text-align: left;">
         <?= $dataDetail->catat7; ?>
       </td>
       <td class="text-center" style="vertical-align: middle; text-align:center; text-align:left;">
         <?php

         if ($dataDetail->x7 != null or $dataDetail->x7 != '') {
          echo '<i class="fa-solid fa-check fa-xl"></i>V';
        }

        ?>        
      </td>
    </tr>
    <tr>
      <td></td>
      <td style="text-align: center;"><b>6.3</b></td>
      <td style="text-align: left;">Pemetaan status pertanahan dan rencana penanganannya.</td>
      <td style="text-align: left;">Upload file dokumen terkait informasi yang menggambarkan status tanah saat ini, program/rencana penyiapan sertipikasi tanah/bangunan, dan anggaran pertanahannya.</td>
      <td style="text-align: left;">
        <?= $dataDetail->catat8; ?>
      </td>
      <td class="text-center" style="vertical-align: middle; text-align:center;">
        <?php

        if ($dataDetail->x8 != null or $dataDetail->x8 != '') {
          echo '<i class="fa-solid fa-check fa-xl"></i>V';
        }

        ?>  
      </td>
    </tr>

    <tr>
      <td colspan="2" class="text-center" style="text-align: center;"><b>7.</b></td>
      <td colspan="4" style="text-align: left;"><b>Kesesuaian Lahan sebagai Zona Permukiman</b></td>
    </tr>

    <tr>
      <td></td>
      <td style="text-align: center;"><b>7.1</b></td>
      <td style="text-align: left;">Surat Pernyataan Peruntukan Lahan untuk Permukiman dari Instansi Berwenang dalam Penataan Ruang.</td>
      <td style="text-align: left;">Upload file dokumen surat dari dinas yang berwenang dalam penataan ruang bahwa lokasi pembangunan merupakan zona permukiman.</td>
      <td style="text-align: left;">
        <?= $dataDetail->catat9; ?>
      </td>
      <td class="text-center" style="vertical-align: middle; text-align:center;">
        <?php

        if ($dataDetail->x9 != null or $dataDetail->x9 != '') {
          echo '<i class="fa-solid fa-check fa-xl"></i>V';
        }

        ?>
      </td>
    </tr>

    <tr>
      <td></td>
      <td style="text-align: center;"><b>7.2</b></td>
      <td style="text-align: left;">RTRW/Peraturan Daerah sejenisnya.</td>
      <td style="text-align: left;">Upload file RTRW beserta lampiran peta RTRW atau Peraturan daerah yang mengatur peruntukan lahan.</td>
      <td style="text-align: left;">
       <?= $dataDetail->catat10; ?>
     </td>

     <td class="text-center" style="vertical-align: middle; text-align:center;">
      <?php

      if ($dataDetail->x10 != null or $dataDetail->x10 != '') {
        echo '<i class="fa-solid fa-check fa-xl"></i>V';
      }

      ?>
    </tr>

    <tr>
      <td colspan="2" class="text-center" style="text-align: center;"><b>8.</b></td>
      <td colspan="4" style="text-align: left;"><b>Kesediaan Kantor Pertanahan Setempat untuk Memfasilitasi terkait Pertanahan</b></td>
    </tr>

    <tr>
      <td></td>
      <td style="text-align: center;"><b>8.1</b></td>
      <td style="text-align: left;">Surat Dukungan Fasilitasi Aspek Pertanahan oleh Kantor Pertanahan setempat.</td>
      <td style="text-align: left;">Upload file surat dukungan fasilitasi aspek pertanahan dari Kantor Pertanahan setempat.</td>
      <td style="text-align: left;">
        <?= $dataDetail->catat11; ?>
      </td>
      <td class="text-center" style="vertical-align: middle; text-align:center;">
        <?php

        if ($dataDetail->x11 != null or $dataDetail->x11 != '') {
          echo '<i class="fa-solid fa-check fa-xl"></i>V';
        }

        ?>
      </td>
    </tr>

    <tr style="text-align:left;">
      <th colspan="6" style="background-color: #c5eef6; color: black; text-align:left;"><i>READINESS CRITERIA</i> <b>TEKNIS TAHAP 1 (TAHAP PASCA EXSUM)</b></th>
    </tr>
    <tr style="background-color:#e1ffe2;">
      <td colspan="2"  style="text-align: center;"><b>A.</b></td>
      <td colspan="4" style="text-align: left;"><b>Perencanaan, Program/Kegiatan dan Anggaran</b></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center;"><b>1.</b></td>
      <td colspan="4" style="text-align: left;"><b>Profil Kawasan Kumuh</b></td>
    </tr>
    <tr>
      <td></td>
      <td style="text-align: center;"><b>1.1</b></td>
      <td style="text-align: left;">Baseline permukiman kumuh</td>
      <td style="text-align: left;">Upload file excel data baseline permukiman kumuh by name by address (BNBA).</td>
      <td style="text-align: left;">
        <?= $dataDetail->catat12; ?>
      </td>

      <td class="text-center" style="vertical-align: middle; text-align:center; text-align:left;">
        <?php

        if ($dataDetail->x12 != null or $dataDetail->x12 != '') {
          echo '<i class="fa-solid fa-check fa-xl"></i>V';
        }

        ?>
      </td>
    </tr>
    <tr>
      <td></td>
      <td style="text-align: center;"><b>1.2</b></td>
      <td style="text-align: left;">Rekapitulasi Numerik Data Kumuh</td>
      <td style="text-align: left;">Upload file excel rekapitulasi numerik data kumuh yang mencakup 7 aspek kumuh.</td>
      <td style="text-align: left;">
        <?= $dataDetail->catat13; ?>
      </td>
      <td class="text-center" style="vertical-align: middle; text-align:center;">
        <?php

        if ($dataDetail->x13 != null or $dataDetail->x13 != '') {
          echo '<i class="fa-solid fa-check fa-xl"></i>V';
        }

        ?>
      </td>
    </tr>

    <tr>
      <td></td>
      <td style="text-align: center;"><b>1.3</b></td>
      <td style="text-align: left;">Peta Delineasi Kawasan Kumuh</td>
      <td style="text-align: left;">Upload file dokumen peta delineasi kawasan kumuh yang akan ditangani.</td>
      <td style="text-align: left;">
        <?= $dataDetail->catat14; ?>
      </td>
      <td class="text-center" style="vertical-align: middle; text-align:center;">
        <?php

        if ($dataDetail->x14 != null or $dataDetail->x14 != '') {
          echo '<i class="fa-solid fa-check fa-xl"></i>V';
        }

        ?>
      </td>
    </tr>
    <tr>
      <td colspan="2" class="text-center" style="text-align: center;"><b>2.</b></td>
      <td colspan="4" style="text-align: left;"><b>Surat Bukti Komitmen Kepala Daerah (format terlampir)</b></td>
    </tr>

    <tr>
      <td></td>
      <td style="text-align: center;"><b>2.1</b></td>
      <td style="text-align: left;">Surat Komitmen Kepala Daerah</td>
      <td style="text-align: left;">Upload file surat komitmen Kepala Daerah untuk kebutuhan spesifik.</td>
      <td style="text-align: left;">
        <?= $dataDetail->catat15; ?>
      </td>
      <td class="text-center" style="vertical-align: middle; text-align:center; text-align:left;">
       <?php

       if ($dataDetail->x15 != null or $dataDetail->x15 != '') {
        echo '<i class="fa-solid fa-check fa-xl"></i>V';
      }

      ?>
    </td>
  </tr>

  <tr>
    <td></td>
    <td style="text-align: center;"><b>2.2</b></td>
    <td style="text-align: left;">Surat Dukungan Pendanaan Pihak Ketiga (jika ada)</td>
    <td style="text-align: left;">Upload file surat dukungan pendanaan pihak ketiga (jika ada).</td>
    <td style="text-align: left;">
      <?= $dataDetail->catat16; ?>
    </td>
    <td class="text-center" style="vertical-align: middle; text-align:center;">
      <?php

      if ($dataDetail->x16 != null or $dataDetail->x16 != '') {
        echo '<i class="fa-solid fa-check fa-xl"></i>V';
      }

      ?>
    </td>
  </tr>

  <tr>
    <td colspan="2" class="text-center" style="text-align: center;"><b>3.</b></td>
    <td colspan="4" style="text-align: left;"><b>Rincian Kegiatan dan Anggaran</b></td>
  </tr>

  <tr>
    <td></td>
    <td style="text-align: center;"><b>3.1</b></td>
    <td style="text-align: left;">Dokumen Rencana Penanganan ke Depan</td>
    <td style="text-align: left;">Upload file excel yang memuat rencana penanganan seperti menu kegiatan, sumber dana, kebutuhan dana, dan output.</td>
    <td style="text-align: left;">
      <?= $dataDetail->catat17; ?>
    </td>
    <td class="text-center" style="vertical-align: middle; text-align:center;">
     <?php

     if ($dataDetail->x17 != null or $dataDetail->x17!= '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>3.2</b></td>
  <td style="text-align: left;">Laporan Pelaksanaan Kegiatan yang Sedang dan Telah Dilaksanakan</td>
  <td style="text-align: left;">Upload file laporan pelaksanaan kegiatan yang sedang dan/atau telah dilaksanakan.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat18; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x18 != null or $dataDetail->x18 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td colspan="2" style="text-align: center;"><b>4.</b></td>
  <td colspan="4" style="text-align: left;"><b>Pokja yang menangani Permukiman, Air Minum, dan Sanitasi/Tim Koordinasi Sejenis</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>4.1</b></td>
  <td style="text-align: left;">Bidang Perumahan dan Permukiman (Pokja PKP) maupun Air Minum dan Sanitasi (Pokja AMPL)</td>
  <td style="text-align: left;">Upload file SK Pokja PKP/AMPL/Tim Koordinasi sejenis.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat19; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
   <?php

   if ($dataDetail->x19 != null or $dataDetail->x19 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td colspan="2" class="text-center" style="text-align: left;"><b>5.</b></td>
  <td colspan="4" style="text-align: left;"><b>Alur Koordinasi</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>5.1</b></td>
  <td style="text-align: left;">Alur koordinasi pelaksanaan DAK Integrasi</td>
  <td style="text-align: left;">Upload file bagan alur koordinasi</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat20; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
   <?php

   if ($dataDetail->x20 != null or $dataDetail->x20 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td colspan="2" class="text-center" style="text-align: center;"><b>6.</b></td>
  <td colspan="4" style="text-align: left;"><b>Kinerja DAK Tahun Sebelumnya</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>6.1</b></td>
  <td style="text-align: left;">Kinerja DAK Reguler Tahun 2021-2022 (jika ada)</td>
  <td style="text-align: left;">Upload file laporan pelaksanaan DAK reguler di tahun 2021-2022 (jika ada)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat21; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center; text-align: left;">
    <?php

    if ($dataDetail->x21 != null or $dataDetail->x21 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>6.2</b></td>
  <td style="text-align: left;">Kinerja DAK Integrasi Tahun 2021-2022 (jika ada)</td>
  <td style="text-align: left;">Upload file laporan pelaksanaan (fisik, keuangan, capaian immediate outcome, foto before-after) DAK Integrasi di tahun 2021-2022 (jika ada)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat22; ?>
  </td>

  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x22 != null or $dataDetail->x22 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr style="background-color:#e1ffe2;">
  <td colspan="2"  style="text-align: center;"><b>B.</b></td>
  <td colspan="4" style="text-align: left;"><b>Kesiapan Penerima Program dan Keterlibatan Masyarakat</b></td>
</tr>

<tr>
  <td colspan="2"  style="text-align: center;"><b>1.</b></td>
  <td colspan="4" style="text-align: left;"><b>Kesiapan Calon Penerima Bantuan</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.1</b></td>
  <td style="text-align: left;">SK Penerima Bantuan dari Kepala Daerah</td>
  <td style="text-align: left;">Upload file SK Penerima Bantuan dari Kepala Daerah.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat23; ?>
  </td>
  
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x23 != null or $dataDetail->x23 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.2</b></td>
  <td style="text-align: left;">Berita Acara Kesepakatan Warga</td>
  <td style="text-align: left;">Upload file Berita Acara Kesepakatan Warga untuk mendukung pelaksanaan program.</td>
  <td style="text-align: left;">
   <?= $dataDetail->catat24; ?>
 </td>
 <td class="text-center" style="vertical-align: middle; text-align:center;">
  <?php

  if ($dataDetail->x24 != null or $dataDetail->x24 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Kesiapan calon penerima bantuan (untuk usulan menu TPST)</td>
  <td style="text-align: left;">Upload.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat25; ?>
  </td>
  
  <td class="text-center" style="vertical-align: middle; text-align:center; text-align: left;">
    <?php

    if ($dataDetail->x25 != null or $dataDetail->x25 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td colspan="2" class="text-center" style="text-align: center;"><b>2.</b></td>
  <td colspan="4" style="text-align: left;"><b>Kesiapan Calon Pengampu TPS3R (jika mengusulkan)</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>2.1</b></td>
  <td style="text-align: left;">Surat Dukungan TPS3R dari Dinas Lingkungan Hidup</td>
  <td style="text-align: left;">Upload file Surat DukunganTPS3R dari Dinas Lingkungan Hidup setempat.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat26; ?>
  </td>

  <td class="text-center" style="vertical-align: middle; text-align:center;">
   <?php

   if ($dataDetail->x26 != null or $dataDetail->x26 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr style="background-color:#e1ffe2;">
  <td colspan="2" class="text-center" style="text-align: center;"><b>C.</b></td>
  <td colspan="4" style="text-align: left;"><b>Lahan/Pertanahan</b></td>
</tr>

<tr>
  <td colspan="2" class="text-center" style="text-align: center;"><b>1.</b></td>
  <td colspan="4" style="text-align: left;"><b>Ketersediaan Lahan Peruntukan Bidang Perumahan</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.1</b></td>
  <td style="text-align: left;">Status Tanah</td>
  <td style="text-align: left;">Pilih lebih dari satu hasil data rinci pemetaan status tanah bidang perumahan eksisting dan rencana.</td>
  <td style="text-align: left;">
   <?= $dataDetail->catat27; ?>
 </td>
 <td class="text-center" style="vertical-align: middle; text-align:center;">
  <?php

  if ($dataDetail->x27 != null or $dataDetail->x27 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?> 
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.2</b></td>
  <td style="text-align: left;">Bukti Kesiapan Lahan Bidang Perumahan</td>
  <td style="text-align: left;">Upload file bukti legalisasi tanah/proses pengadaan lahan dan sebutkan rencana program sertipikasinya/rencana pengadaan lahan (hibah/ jual beli/atau metode lainnya)</td>
  <td style="text-align: left;">
   <?= $dataDetail->catat28; ?>
 </td>
 <td class="text-center" style="vertical-align: middle; text-align:center; text-align: left;">
   <?php

   if ($dataDetail->x28 != null or $dataDetail->x28 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?> 
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Peta Sebaran Bangunan/Rumah Eksisting dan Kavling/Bidang Tanah Eksisting</td>
  <td style="text-align: left;">Upload file peta kavling eksisiting (sebelum pelaksanaan) dan peta lokasi/sebaran bangunan/rumah yang akan ditangani di lokasi kumuh yang dikeluarkan oleh Kantor Pertanahan.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat29; ?>
  </td>

  <td class="text-center" style="vertical-align: middle; text-align:center;">
   <?php

   if ($dataDetail->x29 != null or $dataDetail->x29 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?> 
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.4</b></td>
  <td style="text-align: left;">Peta Rencana Sebaran Bangunan/Rumah dan Pembagian Kavling/Bidang Tanah</td>
  <td style="text-align: left;">Upload file peta rencana sebaran rumah yang akan ditangani dan peta kavling rencana (setelah pelaksanaan)  yang dikeluarkan oleh Kantor Pertanahan.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat30; ?>
  </td>
  
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x30 != null or $dataDetail->x30 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?> 
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.5</b></td>
  <td style="text-align: left;">Siteplan Before dan After Pelaksanaan</td>
  <td style="text-align: left;">Upload file sandingan siteplan eksisiting (sebelum pelaksanaan) dan rencana (setelah pelaksanaan).</td>
  <td style="text-align: left;">
   <?= $dataDetail->catat31; ?>
 </td>
 <td class="text-center" style="vertical-align: middle; text-align:center;">
  <?php

  if ($dataDetail->x31 != null or $dataDetail->x31 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?> 
</td>
</tr>

<tr>
  <td colspan="2" class="text-center" style="text-align: center;"><b>2.</b></td>
  <td colspan="4" style="text-align: left;"><b>Ketersediaan Lahan Peruntukan Bidang Jalan Lingkungan dan Drainase Lingkungan</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>2.1</b></td>
  <td style="text-align: left;">Status Tanah</td>
  <td style="text-align: left;">Pilih lebih dari satu hasil pemetaan status tanah bidang jalan lingkungan dan drainase lingkungan.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat32; ?>
  </td>
  
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x32 != null or $dataDetail->x32 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?> 
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>2.2</b></td>
  <td style="text-align: left;">Bukti Kesiapan Lahan Bidang Jalan Lingkungan dan Drainase Lingkungan</td>
  <td style="text-align: left;">Upload file bukti legalisasi tanah dan sebutkan rencana program sertipikasinya.</td>
  <td style="text-align: left;">
   <?= $dataDetail->catat33; ?>
 </td>
 
 <td class="text-center" style="vertical-align: middle; text-align:center; text-align: left;">
   <?php

   if ($dataDetail->x33 != null or $dataDetail->x33 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?> 
</td>
</tr>

<tr>
  <td colspan="2" class="text-center" style="text-align: center;"><b>3.</b></td>
  <td colspan="4" style="text-align: left;"><b>Ketersediaan Lahan Peruntukan Bidang Air Minum</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>3.1</b></td>
  <td style="text-align: left;">Status Tanah</td>
  <td style="text-align: left;">Pilih lebih dari satu hasil pemetaan status tanah bidang air minum.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat34; ?>
  </td>
  
  <td class="text-center" style="vertical-align: middle; text-align:center;">
   <?php

   if ($dataDetail->x34 != null or $dataDetail->x34 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?> 
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>3.2</b></td>
  <td style="text-align: left;">Bukti Kesiapan Lahan Bidang Air Minum</td>
  <td style="text-align: left;">Upload file bukti legalisasi tanah dan sebutkan rencana program sertipikasinya (jika ada)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat35; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x35 != null or $dataDetail->x35 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?> 
  </td>
</tr>

<tr>
  <td colspan="2" class="text-center" style="text-align: center;"><b>4.</b></td>
  <td colspan="4" style="text-align: left;"><b>Ketersediaan Lahan Peruntukan Bidang Sanitasi sektor Air Limbah</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>4.1</b></td>
  <td style="text-align: left;">Status Tanah</td>
  <td style="text-align: left;">Pilih lebih dari satu hasil pemetaan status tanah bidang sanitasi sektor air limbah.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat36; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x36 != null or $dataDetail->x36 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?> 
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>4.2</b></td>
  <td style="text-align: left;">Bukti Kesiapan Lahan Bidang Air Limbah</td>
  <td style="text-align: left;">Upload file bukti legalisasi lahan tanah dan sebutkan rencana program sertipikasinya (jika ada)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat37; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x37 != null or $dataDetail->x37 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?> 
  </td>
</tr>

<tr>
  <td colspan="2" class="text-center" style="text-align: center;"><b>5.</b></td>
  <td colspan="4" style="text-align: left;"><b>Ketersediaan Lahan Peruntukan Bidang Sanitasi Sektor Persampahan untuk Menu Pembangunan TPS3R atau Peningkatan/Rehabilitasi TPS3R</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>5.1</b></td>
  <td style="text-align: left;">Status Tanah</td>
  <td style="text-align: left;">Pilih lebih dari satu hasil pemetaan status tanah bidang sanitasi  sektor persampahan menu TPS3R.</td>
  <td style="text-align: left;">
   <?= $dataDetail->catat38; ?>
 </td>
 <td class="text-center" style="vertical-align: middle; text-align:center;">
  <?php

  if ($dataDetail->x38 != null or $dataDetail->x38 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>5.2</b></td>
  <td style="text-align: left;">Bukti Kesiapan Lahan Bidang TPS3R</td>
  <td style="text-align: left;">Upload file bukti legalisasi tanah dan sebutkan rencana program sertipikasinya (jika ada).</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat39; ?>
  </td>
  
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x39 != null or $dataDetail->x39 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td colspan="2" class="text-center" style="text-align: left;"><b>6.</b></td>
  <td colspan="4" style="text-align: left;"><b>Ketersediaan Lahan Peruntukan Bidang Sanitasi Sektor Persampahan untuk Menu TPST</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>6.1</b></td>
  <td style="text-align: left;">Status Tanah</td>
  <td style="text-align: left;">Pilih lebih dari satu hasil pemetaan status tanah bidang sanitasi sektor persampahan menu TPST.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat40; ?>
  </td>
  
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x40 != null or $dataDetail->x40 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>6.2</b></td>
  <td style="text-align: left;">Surat Penetapan Lokasi oleh Kepala Daerah</td>
  <td style="text-align: left;">Upload file Surat Penetapan Lokasi oleh Kepala Daerah.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat41; ?>
  </td>
  
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x41 != null or $dataDetail->x41 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>6.3</b></td>
  <td style="text-align: left;">Bukti Kesiapan Lahan Bidang TPST</td>
  <td style="text-align: left;">Upload file bukti legalitas lahan berupa sertifikat lahan dan sebutkan rencana program sertipikasinya (jika ada).</td>
  <td style="text-align: left;">
   <?= $dataDetail->catat42; ?>
 </td>
 
 <td class="text-center" style="vertical-align: middle; text-align:center;">
  <?php

  if ($dataDetail->x42 != null or $dataDetail->x42 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>6.4</b></td>
  <td style="text-align: left;">Kesesuaian dengan RTRW</td>
  <td style="text-align: left;">Upload File</td>
  <td style="text-align: left;">
   <?= $dataDetail->catat43; ?>
 </td>

 <td class="text-center" style="vertical-align: middle; text-align:center;">
  <?php

  if ($dataDetail->x43 != null or $dataDetail->x43 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr style="background-color:#e1ffe2;">
  <td colspan="2" class="text-center" style="text-align: center;"><b>D.</b></td>
  <td colspan="4" style="text-align: left;"><b>Inovasi</b></td>
</tr>
<tr>
  <td></td>
  <td style="text-align:center; "><b>1.1</b></td>
  <td style="text-align:left; ">Konsep Inovasi yang Ditawarkan</td>
  <td style="text-align: left;">Upload file berupa pdf/ppt tentang inovasi yang dilaksanakan dalam penanganan DAK Tematik PPKT.</td>
  <td style="text-align:left; ">
   <?= $dataDetail->catat44; ?>
 </td>

 <td class="text-center" style="vertical-align: middle; text-align:center;">
  <?php

  if ($dataDetail->x44 != null or $dataDetail->x44 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr style="background-color:#e1ffe2;">
  <td colspan="2" class="text-center" style="text-align: center;"><b>E.</b></td>
  <td colspan="4" style="text-align: left;"><b>Rencana Kegiatan Detail Enginering Design (DED) dan Rencana Anggaran Biaya (RAB)</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.1</b></td>
  <td style="text-align: left;">Air Minum</td>
  <td style="text-align: left;">Upload file Konsep Detail Enginering Design (DED)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat45; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x45 != null or $dataDetail->x45 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>


<tr>
  <td></td>
  <td style="text-align: center;"><b>1.1</b></td>
  <td style="text-align: left;">Air Minum</td>
  <td style="text-align: left;">Upload file Rencana Anggaran Biaya (RAB)</td>
  <td style="text-align: left;">
   <?= $dataDetail->catat46; ?>
 </td>
 <td class="text-center" style="vertical-align: middle; text-align:center;">
  <?php

  if ($dataDetail->x46 != null or $dataDetail->x46 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td rowspan="1"></td>
  <td rowspan="1" style="text-align: center;"><b>1.2</b></td>
  <td rowspan="1" style="text-align: left;">Air Limbah
  *) Untuk Menu TS Individual Perkotaan diwajibkan untuk pemerintah daerah yang sudah memiliki IPLT serta sudah/akan menyusun program LLTT</td>
  <td style="text-align: left;">Upload file Konsep Detail Enginering Design (DED)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat47; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x47 != null or $dataDetail->x47 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>  
 <td rowspan="1"></td>
 <td rowspan="1" style="text-align: center;"></td>
 <td rowspan="1" style="text-align: left;"></td>
 <td style="text-align: left;">Upload file Rencana Anggaran Biaya (RAB)</td>
 <td style="text-align: left;">
  <?= $dataDetail->catat48; ?>
</td>
<td class="text-center" style="vertical-align: middle; text-align:center;">
  <?php

  if ($dataDetail->x48 != null or $dataDetail->x48 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Persampahan Menu Pembangunan TPS3R</td>
  <td style="text-align: left;">Upload file Konsep Detail Enginering Design (DED)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat49; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x49 != null or $dataDetail->x49 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr  style="text-align: left;">
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Upload file Konsep Detail Enginering Design (DED)</td>
  <td style="text-align: left;">Upload file Rencana Anggaran Biaya (RAB)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat50; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x50 != null or $dataDetail->x50 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Upload file Konsep Detail Enginering Design (DED)</td>
  <td style="text-align: left;">Upload file Business Plan Pengelolaan dan Operasional TPS3R</td>
  <td style="text-align: left;">
   <?= $dataDetail->catat51; ?>
 </td>
 <td class="text-center" style="vertical-align: middle; text-align:center;">
  <?php

  if ($dataDetail->x51 != null or $dataDetail->x51 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Persampahan Menu Pembangunan TPS3R</td>
  <td style="text-align: left;">Upload file Konsep Detail Enginering Design (DED)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat52; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x52 != null or $dataDetail->x52 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?> 
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Persampahan Menu Pembangunan TPS3R</td>
  <td style="text-align: left;">Upload file Rencana Anggaran Biaya (RAB)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat53; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x53 != null or $dataDetail->x53 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?> 
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Persampahan Menu Pembangunan TPS3R</td>
  <td style="text-align: left;">Upload file Business Plan Pengelolaan dan Operasional TPS3R </td>
  <td style="text-align: left;">
    <?= $dataDetail->catat54; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x54 != null or $dataDetail->x54 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>   
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Persampahan Menu Pembangunan TPS3R</td>
  <td style="text-align: left;">Upload file Justifikasi Teknis Kebutuhan Peningkatan/Rehabilitasi TPS3R </td>
  <td style="text-align: left;">
    <?= $dataDetail->catat55; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x55 != null or $dataDetail->x55 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Persampahan Menu Pembangunan TPS3R</td>
  <td style="text-align: left;">Upload file Kepemilikan SK Kelompok Pemeliharaan dan Pemanfaatan (KPP)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat56; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x56 != null or $dataDetail->x56 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Persampahan Menu Pembangunan TPS3R</td>
  <td style="text-align: left;">Surat kesiapan dukungan biaya operasional dan pemeliharaan</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat57; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
   <?php

   if ($dataDetail->x57 != null or $dataDetail->x57 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Persampahan Menu Pembangunan TPST</td>
  <td style="text-align: left;">Upload file Konsep Detail Enginering Design (DED)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat58; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x58 != null or $dataDetail->x58 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Persampahan Menu Pembangunan TPST</td>
  <td style="text-align: left;">Upload file Rencana Anggaran Biaya (RAB)</td>
  <td style="text-align: left;">
   <?= $dataDetail->catat59; ?>
 </td>
 <td class="text-center" style="vertical-align: middle; text-align:center;">
  <?php

  if ($dataDetail->x59 != null or $dataDetail->x59 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Persampahan Menu Pembangunan TPST</td>
  <td style="text-align: left;">Upload file Dokumen Lingkungan</td>
  <td style="text-align: left;">
   <?= $dataDetail->catat60; ?>
 </td>
 <td class="text-center" style="vertical-align: middle; text-align:center;">
  <?php

  if ($dataDetail->x60 != null or $dataDetail->x60 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Persampahan Menu Pembangunan TPST</td>
  <td style="text-align: left;">Upload file PKS dengan Offtaker</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat61; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x61 != null or $dataDetail->x61 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Persampahan Menu Pembangunan TPST</td>
  <td style="text-align: left;">Upload file Surat Kesiapan Pengelolaan</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat62; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
   <?php

   if ($dataDetail->x62 != null or $dataDetail->x62 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Persampahan Menu Pembangunan TPST</td>
  <td style="text-align: left;">Upload file Data Profil</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat63; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
   <?php

   if ($dataDetail->x63 != null or $dataDetail->x63 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>1.3</b></td>
  <td style="text-align: left;">Persampahan Menu Pembangunan TPST</td>
  <td style="text-align: left;">Upload file Surat pernyataan Komitmen DPRD</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat64; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x64 != null or $dataDetail->x64 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>

  <td rowspan="1"></td>
  <td rowspan="1" style="text-align: center;"><b>1.4</b></td>
  <td rowspan="1" style="text-align: left;">Perumahan</td>
  <td style="text-align: left;">Upload file Konsep Detail Enginering Design (DED)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat65; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x65 != null or $dataDetail->x65 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td rowspan="1"></td>
  <td rowspan="1" style="text-align: center;"></td>
  <td rowspan="1" style="text-align: left;"></td>
  <td style="text-align: left;">Upload file Rencana Anggaran Biaya (RAB)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat66; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x66 != null or $dataDetail->x66 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td rowspan="1"></td>
  <td rowspan="1" style="text-align: center;"><b>1.5</b></td>
  <td rowspan="1" style="text-align: left;">Jalan dan drainase lingkungan</td>
  <td style="text-align: left;">Upload file Konsep Detail Enginering Design (DED)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat67; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php
    if ($dataDetail->x67 != null or $dataDetail->x67 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }
    ?>
  </td>
</tr>
<tr>
  <td rowspan="1"></td>
  <td rowspan="1"></td>
  <td rowspan="1"></td>
  <td style="text-align: left;">Upload file Rencana Anggaran Biaya (RAB)</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat68; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php
    if ($dataDetail->x68 != null or $dataDetail->x68 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }
    ?>
  </td>
</tr>

<tr >
  <td colspan="6" style="background-color: #c5eef6; color: black; text-align: left;"><b>RC TEKNIS TAHAP 2 (TAHAP SINKRONISASI- HARMONISASI)</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>A.1</b></td>
  <td style="text-align: left;" colspan="4"><b>Peraturan Daerah Kumuh</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>A.1.1</b></td>
  <td style="text-align: left;">Peraturan Daerah Kumuh</td>
  <td style="text-align: left;">Upload file Peraturan Daerah Kumuh.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat69; ?>
  </td>
  <td style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x69 != null or $dataDetail->x69 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>A.1.2</b></td>
  <td style="text-align: left;">Surat Keterangan Penyusunan Peraturan Daerah Kumuh</td>
  <td style="text-align: left;">Surat Keterangan Penyusunan Peraturan Daerah Kumuh</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat70; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x70 != null or $dataDetail->x70 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>

  </td>
</tr>

<tr style="background-color:#e1ffe2;">
  <td colspan="2" class="text-center" style="text-align: center;"><b>B.</b></td>
  <td colspan="4" style="text-align: left;"><b>Rencana Penanganan Sosial (Jika Diperlukan)</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>B.1.1</b></td>
  <td style="text-align: left;">Rencana Ganti Untung</td>
  <td style="text-align: left;">Upload file berupa pdf/ppt tentang:<br>1. Rencana Ganti Untung tanah dan bangunan. <br>2. Rencana penggantian aset warga (jika ada) yang telah disepakati oleh warga bersama pemerintah daerah.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat71; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
   <?php

   if ($dataDetail->x71 != null or $dataDetail->x71 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>B.1.2</b></td>
  <td style="text-align: left;">Rencana Penghunian Sementara (jika diperlukan)</td>
  <td style="text-align: left;">Upload file berupa pdf/ppt tentang:<br>1. Rencana Penghunian Sementara. <br>2. Rencana penyediaan lokasi huntara beserta informasi kelengkapan prasarana dan sarana (serta durasi penghuian sementara).</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat72; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x72 != null or $dataDetail->x72 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>B.1.3</b></td>
  <td style="text-align: left;">Rencana Pemberian Uang Sewa (jika diperlukan)</td>
  <td style="text-align: left;">Masukan link file berupa pdf/ppt tentang mekanisme pemberian uang sewa.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat73; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x73 != null or $dataDetail->x73 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>B.2</b></td>
  <td style="text-align: left;" colspan="4"><b>Timeline Rencana Penanganan pada Lokasi yang Ditangani</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>B.2.1</b></td>
  <td style="text-align: left;">Timeline Rencana Penanganan</td>
  <td style="text-align: left;">Upload file timeline pelaksanaan kegiatan.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat74; ?>
  </td>
  <td style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x74 != null or $dataDetail->x74 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>B.3</b></td>
  <td style="text-align: left;" colspan="4"><b>Dokumen Perencanaan Rencana Induk Sistem Penyediaan Air Minum (RISPAM)</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>B.3.1</b></td>
  <td style="text-align: left;">Dokumen RISPAM</td>
  <td style="text-align: left;">Upload file dokumen RISPAM.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat75; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
   <?php

   if ($dataDetail->x75 != null or $dataDetail->x75 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>B.4</b></td>
  <td style="text-align: left;" colspan="4"><b>Dokumen Perencanaan Strategi Sanitasi Kota/Kab (SSK)</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>B.4.1</b></td>
  <td style="text-align: left;">Dokumen SSK</td>
  <td style="text-align: left;">Upload file dokumen SSK.</td>
  <td style="text-align: left;">
   <?= $dataDetail->catat76; ?>
 </td>
 <td class="text-center" style="vertical-align: middle; text-align:center;">
  <?php

  if ($dataDetail->x76 != null or $dataDetail->x76 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>B.5</b></td>
  <td style="text-align: left;" colspan="4"><b>Dokumen Rencana Induk Pengelolaan Sampah/Minimal Jakstrada</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>B.5.1</b></td>
  <td style="text-align: left;">Dokumen Rencana Induk Pengelolaan Sampah/Minimal Jakstrada</td>
  <td style="text-align: left;">Dokumen Rencana Induk Pengelolaan Sampah/Minimal Jakstrada.</td>
  <td style="text-align: left;">
   <?= $dataDetail->catat77; ?>
 </td>
 <td class="text-center" style="vertical-align: middle; text-align:center;">
  <?php

  if ($dataDetail->x77 != null or $dataDetail->x77 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

<tr style="background-color:#e1ffe2;">
  <td colspan="2" class="text-center" style="text-align: center;"><b>C.</b></td>
  <td colspan="4" style="text-align: left;"><b>Rencana Konstruksi</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>C.1</b></td>
  <td style="text-align: left;" colspan="4"><b>Rencana Pelaksanaan Konstruksi </b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>C.1.1</b></td>
  <td style="text-align: left;">Tahapan Pelaksanaan Konstruksi</td>
  <td style="text-align: left;">Upload file berupa pdf/ppt tentang tahapan pelaksanaan konstruksi.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat78; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x78 != null or $dataDetail->x78 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>C.2</b></td>
  <td style="text-align: left;" colspan="4"><b>Rencana Monitoring</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>C.2.1</b></td>
  <td style="text-align: left;">Rencana Monitoring Pelaksanaan Konstruksi</td>
  <td style="text-align: left;">Upload file berupa pdf/ppt tentang rencana monitoring pelaksanaan konstruksi.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat79; ?>
  </td>
  <td style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x79 != null or $dataDetail->x79 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr style="background-color:#e1ffe2;">
  <td colspan="2" class="text-center" style="text-align: center;"><b>D.</b></td>
  <td colspan="4" style="text-align: left;"><b>Rencana Pasca Konstruksi</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>D.1</b></td>
  <td style="text-align: left;" colspan="4"><b>Rencana Serah Terima Aset</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>D.1.1</b></td>
  <td style="text-align: left;">Rencana Serah Terima Aset</td>
  <td style="text-align: left;">Upload file berupa pdf/ppt tentang serah terima aset.</td>
  <td style="text-align: left;">
    <?= $dataDetail->catat80; ?>
  </td>
  <td class="text-center" style="vertical-align: middle; text-align:center;">
    <?php

    if ($dataDetail->x80 != null or $dataDetail->x80 != '') {
      echo '<i class="fa-solid fa-check fa-xl"></i>V';
    }

    ?>
  </td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>D.2</b></td>
  <td style="text-align: left;" colspan="4"><b>Rencana Pengelolaan/Pemanfaatan</b></td>
</tr>

<tr>
  <td></td>
  <td style="text-align: center;"><b>D.2.1</b></td>
  <td style="text-align: left;">Rencana Pengelolaan Aset</td>
  <td style="text-align: left;">Upload file berupa pdf/ppt tentang rencana pengelolaan aset.</td>
  <td style="text-align: left;">
   <?= $dataDetail->catat81; ?>
 </td>
 <td class="text-center" style="vertical-align: middle; text-align:center;">
  <?php

  if ($dataDetail->x81 != null or $dataDetail->x81 != '') {
    echo '<i class="fa-solid fa-check fa-xl"></i>V';
  }

  ?>
</td>
</tr>

</tbody>
</table>
</body>
</html>





