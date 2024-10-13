 <style type="text/css">
  .font-calibri-tittle {
    font-family:"calibri";
    letter-spacing: 1px;
  }

  .calibri {
    font-family:"calibri";
    letter-spacing: 0.1px;
  }

  .big-checkbox {width: 25px; height: 25px;}

  .table thead th {
    font-size: 13px;
  }

  .sticky-top {
    position: sticky;
    top: 0;
    background-color: #f8f9fa;
    z-index: 1;
  }

  .fontTable {
    font-size: 1px;
  }


</style>
<div class="container mt-3 " id="container">
  <div class="col-md-12 col-lg-12">
    <div class="card card-stacked">
      <div class="card-body text-center">
        <?= $this->session->flashdata('psn'); ?>
        <h2 class="font-calibri-tittle">READINESS CRITERIA TA. <?= $this->session->userdata('thang'); ?></h2>
        <h2 class="font-calibri-tittle" style="margin-top:-15px;"><?= strtoupper($dataKabKota->nmlokasi); ?></h2>
        <h2 class="font-calibri-tittle" style="margin-top:-15px;"><?= strtoupper($dataKabKota->nmkabkota); ?></h2>
        <h2 class="font-calibri-tittle" style="margin-top:-15px;">KECAMATAN <?= strtoupper($dataKecamatan->nmkec); ?></h2>
        <h2 class="font-calibri-tittle" style="margin-top:-15px;">DESA <?= strtoupper($dataDesa->nmdesa); ?></h2>

        <!-- Tabel 1 -->
        <div class="row mt-2">
          <table class="table table-bordered table-lg" style="border-color: black;" >
            <thead class="text-center align-middle">
              <tr class="fontTable">
                <th rowspan="2" style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Catatan Hasil Penilaian</th>
                <th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Hasil Penilaian RC Utama</th>
                <th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Hasil Penilaian RC Tahap 1</th>
                <th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Hasil Penilaian RC Tahap 2</th>
              </tr>          
              <tr>
                <td class="text-center">
                  <?php if ($dataDokumenRCPPKT->rc_utama != null) { ?>
                    <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->rc_utama; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
                  <?php } ?>

                  <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>                  
                    <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('rc_utama');"><i class="fas fa-file-upload"></i></button>
                  <?php } ?>

                </td>
                <td class="text-center">
                 <?php if ($dataDokumenRCPPKT->rc_tahap_1 != null) { ?>
                  <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->rc_tahap_1; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
                <?php } ?>

                <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>                
                  <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('rc_tahap_1');"><i class="fas fa-file-upload"></i></button>
                <?php } ?>

              </td>
              <td class="text-center">
                <?php if ($dataDokumenRCPPKT->rc_tahap_2 != null) { ?>
                  <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->rc_tahap_2; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
                <?php } ?>

                <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>                
                  <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('rc_tahap_2');"><i class="fas fa-file-upload"></i></button>
                <?php } ?>

              </td>
            </tr>
          </thead>
        </table>
      </div>


      <!-- tabel 2 -->
      <div class="row mt-2">
        <table class="table table-bordered table-lg" style="border-color: black;" >
          <thead class="text-center align-middle">
            <tr class="fontTable">
              <th style="background-color: #f59f00; color: black; font-size: 12px; width: 25%;">Upload File Dokumen Ekspose</th>
              <th>
                <?php if ($dataDokumenRCPPKT->dokumen_expose != null) { ?>
                  <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->dokumen_expose; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
                <?php } ?>

                <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>                
                  <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('dokumen_expose');"><i class="fas fa-file-upload"></i></button>
                <?php } ?>

              </th>
            </tr>          
          </thead>
        </table>
      </div>

      <!-- tabel 3 -->
      <div class="row mt-2">
        <table class="table table-bordered table-lg" style="border-color: black;" >
          <thead class="text-center align-middle">
            <tr class="fontTable">
              <th style="background-color: #f59f00; color: black; font-size: 12px; width: 1%;">No</th>
              <th colspan="2" style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Indikator dan Variabel</th>
              <th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">File</th>
              <th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Catatan Penilaian</th>
              <th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Catatan Rencana Kegiatan</th>
            </tr>
            <tr class="text-start">
              <th colspan="6" style="background-color: #76c0ec; color: black; font-size: 12px; width: 1%;">Readiness Criteria Utama</th>
            </tr>          
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td colspan="5" class="text-start">Program Penanganan Permukiman Kumuh Terpadu</td>
            </tr>
            <tr>
              <td></td>
              <td>1.1</td>
              <td class="text-start">Executive Summary Program Penanganan Permukiman Kumuh Terpadu (outline terlampir)</td>
              <td class="text-center">
                <?php if ($dataDokumenRCPPKT->{'1_1'} != null) { ?>
                  <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'1_1'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
                <?php } ?>

                <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>                
                  <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('1_1');"><i class="fas fa-file-upload"></i></button>
                <?php } ?>

              </td>
              <td class="text-start">

                <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                  <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_1');"><i class="fas fa-pencil-alt"></i></button>
                <?php } ?>

                <?php if ($catatRCPPKT->catat_penilaian_1 != null) { ?>
                  <br><br><?= $catatRCPPKT->catat_penilaian_1; ?>
                <?php } ?>
              </td>
              <td class="text-start">

                <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                  <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_1');"><i class="fas fa-pencil-alt"></i></button>
                <?php } ?>


                <?php if ($catatRCPPKT->catat_rincian_1 != null) { ?>
                  <br><br><?= $catatRCPPKT->catat_rincian_1; ?>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>2.</td>
              <td colspan="5" class="text-start">Surat Keputusan Kumuh</td>
            </tr>
            <tr>
              <td></td>
              <td>2.1</td>
              <td class="text-start">SK Penetapan Lokasi Perumahan Kumuh dan Permukiman Kumuh</td>
              <td class="text-center">
                <?php if ($dataDokumenRCPPKT->{'2_1'} != null) { ?>
                  <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'2_1'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
                <?php } ?>

                <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>                
                  <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('2_1');"><i class="fas fa-file-upload"></i></button>
                <?php } ?>

              </td>
              <td class="text-start">

                <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                  <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_2');"><i class="fas fa-pencil-alt"></i></button>
                <?php } ?>

                <?php if ($catatRCPPKT->catat_penilaian_2 != null) { ?>
                  <br><br><?= $catatRCPPKT->catat_penilaian_2; ?>
                <?php } ?>
              </td>
              <td class="text-start">

                <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                  <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_2');"><i class="fas fa-pencil-alt"></i></button>
                <?php } ?>


                <?php if ($catatRCPPKT->catat_rincian_2 != null) { ?>
                  <br><br><?= $catatRCPPKT->catat_rincian_2; ?>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>3.</td>
              <td colspan="5" class="text-start">Dokumen terkait Rencana Pencegahan dan Peningkatan Kualitas Permukiman Kumuh</td>
            </tr>
            <tr>
              <td></td>
              <td>3.1</td>
              <td class="text-start">RP2KPKPK/RP2KPKP/RP3KP/dan sejenisnya</td>
              <td class="text-center">
                <?php if ($dataDokumenRCPPKT->{'3_1'} != null) { ?>
                  <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'3_1'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
                <?php } ?>

                <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>                
                  <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('3_1');"><i class="fas fa-file-upload"></i></button>
                <?php } ?>

              </td>
              <td class="text-start">

                <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                  <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_3');"><i class="fas fa-pencil-alt"></i></button>
                <?php } ?>

                <?php if ($catatRCPPKT->catat_penilaian_3 != null) { ?>
                  <br><br><?= $catatRCPPKT->catat_penilaian_3; ?>
                <?php } ?>
              </td>
              <td class="text-start">

                <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                  <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_3');"><i class="fas fa-pencil-alt"></i></button>
                <?php } ?>


                <?php if ($catatRCPPKT->catat_rincian_3 != null) { ?>
                  <br><br><?= $catatRCPPKT->catat_rincian_3; ?>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>3.2</td>
              <td class="text-start">Dokumen RISPAM</td>
              <td class="text-center">
               <?php if ($dataDokumenRCPPKT->{'3_2'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'3_2'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>              
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('3_2');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_4');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_4 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_4; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_4');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_4 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_4; ?>
              <?php } ?>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>3.3</td>
            <td class="text-start">Dokumen SSK</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'3_3'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'3_3'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>              
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('3_3');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_5');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_5 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_5; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_5');"><i class="fas fa-pencil-alt"></i></button>
                </<?php } ?>


                td>
              </tr>
              <tr>
                <td></td>
                <td>3.4</td>
                <td class="text-start">Dokumen Rencana Induk Pengelolaan Sampah/Minimal Jakstrada</td>
                <td class="text-center">
                  <?php if ($dataDokumenRCPPKT->{'3_4'} != null) { ?>
                    <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'3_4'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
                  <?php } ?>

                  <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>              
                    <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('3_4');"><i class="fas fa-file-upload"></i></button>
                  <?php } ?>

                </td>
                <td class="text-start">

                  <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                    <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_6');"><i class="fas fa-pencil-alt"></i></button>
                  <?php } ?>

                  <?php if ($catatRCPPKT->catat_penilaian_6 != null) { ?>
                    <br><br><?= $catatRCPPKT->catat_penilaian_6; ?>
                  <?php } ?>
                </td>
                <td class="text-start">

                  <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                    <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_6');"><i class="fas fa-pencil-alt"></i></button>
                  <?php } ?>


                  <?php if ($catatRCPPKT->catat_rincian_6 != null) { ?>
                    <br><br><?= $catatRCPPKT->catat_rincian_6; ?>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>4.</td>
                <td colspan="5" class="text-start">Kesiapan Calon Penerima Bantuan</td>
              </tr>
              <tr>
                <td></td>
                <td>4.1</td>
                <td class="text-start">Bukti sosialisasi kepada masyarakat calon penerima bantuan.</td>
                <td class="text-center">
                  <?php if ($dataDokumenRCPPKT->{'4_1'} != null) { ?>
                    <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'4_1'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
                  <?php } ?>

                  <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>              
                    <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('4_1');"><i class="fas fa-file-upload"></i></button>
                  <?php } ?>

                </td>
                <td class="text-start">

                  <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                    <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_7');"><i class="fas fa-pencil-alt"></i></button>
                  <?php } ?>

                  <?php if ($catatRCPPKT->catat_penilaian_7 != null) { ?>
                    <br><br><?= $catatRCPPKT->catat_penilaian_7; ?>
                  <?php } ?>
                </td>
                <td class="text-start">

                  <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                    <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_7');"><i class="fas fa-pencil-alt"></i></button>
                  <?php } ?>


                  <?php if ($catatRCPPKT->catat_rincian_7 != null) { ?>
                    <br><br><?= $catatRCPPKT->catat_rincian_7; ?>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>5.</td>
                <td colspan="5" class="text-start">Dokumen Pernyataan Status Kesesuaian dan Kesiapan Lahan</td>
              </tr>
              <tr>
                <td></td>
                <td>5.1</td>
                <td class="text-start">Pemetaan status pertanahan dan rencana penanganannya</td>
                <td class="text-center">
                  <?php if ($dataDokumenRCPPKT->{'5_1'} != null) { ?>
                    <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'5_1'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
                  <?php } ?>

                  <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>              
                    <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('5_1');"><i class="fas fa-file-upload"></i></button>
                  <?php } ?>

                </td>
                <td class="text-start">

                  <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                    <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_8');"><i class="fas fa-pencil-alt"></i></button>
                  <?php } ?>

                  <?php if ($catatRCPPKT->catat_penilaian_8 != null) { ?>
                    <br><br><?= $catatRCPPKT->catat_penilaian_8; ?>
                  <?php } ?>
                </td>
                <td class="text-start">

                  <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                    <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_8');"><i class="fas fa-pencil-alt"></i></button>
                  <?php } ?>


                  <?php if ($catatRCPPKT->catat_rincian_8 != null) { ?>
                    <br><br><?= $catatRCPPKT->catat_rincian_8; ?>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>5.2</td>
                <td class="text-start">Berita Acara Kesepakatan Warga untuk konsolidasi tanah (jika menggunakan skema sertipikasi konsolidasi tanah)</td>
                <td class="text-center">
                  <?php if ($dataDokumenRCPPKT->{'5_2'} != null) { ?>
                    <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'5_2'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
                  <?php } ?>

                  <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>              
                    <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('5_2');"><i class="fas fa-file-upload"></i></button>
                  <?php } ?>

                </td>
                <td class="text-start">

                  <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                    <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_9');"><i class="fas fa-pencil-alt"></i></button>
                  <?php } ?>

                  <?php if ($catatRCPPKT->catat_penilaian_9 != null) { ?>
                    <br><br><?= $catatRCPPKT->catat_penilaian_9; ?>
                  <?php } ?>
                </td>
                <td class="text-start">

                  <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                    <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_9');"><i class="fas fa-pencil-alt"></i></button>
                  <?php } ?>


                  <?php if ($catatRCPPKT->catat_rincian_9 != null) { ?>
                    <br><br><?= $catatRCPPKT->catat_rincian_9; ?>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>5.3</td>
                <td class="text-start">Surat Dukungan Fasilitasi Aspek Pertanahan oleh Kantor Pertanahan setempat</td>
                <td class="text-center">
                  <?php if ($dataDokumenRCPPKT->{'5_3'} != null) { ?>
                    <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'5_3'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
                  <?php } ?>

                  <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>              
                    <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('5_3');"><i class="fas fa-file-upload"></i></button>
                  <?php } ?>

                </td>
                <td class="text-start">

                  <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                    <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_10');"><i class="fas fa-pencil-alt"></i></button>
                  <?php } ?>

                  <?php if ($catatRCPPKT->catat_penilaian_10 != null) { ?>
                    <br><br><?= $catatRCPPKT->catat_penilaian_10; ?>
                  <?php } ?>
                </td>
                <td class="text-start">

                  <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                    <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_10');"><i class="fas fa-pencil-alt"></i></button>
                  <?php } ?>


                  <?php if ($catatRCPPKT->catat_rincian_10 != null) { ?>
                    <br><br><?= $catatRCPPKT->catat_rincian_10; ?>
                  <?php } ?>
                </td>
              </tr>

              <tr>
                <td>6.</td>
                <td colspan="5" class="text-start">Kesesuaian Lahan sebagai Zona Permukiman</td>
              </tr>
              <tr>
                <td></td>
                <td>6.1</td>
                <td class="text-start">Surat Pernyataan Peruntukan Lahan untuk Permukiman dari Instansi Berwenang dalam Penataan Ruang</td>
                <td class="text-center">
                  <?php if ($dataDokumenRCPPKT->{'6_1'} != null) { ?>
                    <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'6_1'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
                  <?php } ?>

                  <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>              
                    <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('6_1');"><i class="fas fa-file-upload"></i></button>
                  <?php } ?>

                </td>
                <td class="text-start">

                  <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                    <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_11');"><i class="fas fa-pencil-alt"></i></button>
                  <?php } ?>

                  <?php if ($catatRCPPKT->catat_penilaian_11 != null) { ?>
                    <br><br><?= $catatRCPPKT->catat_penilaian_11; ?>
                  <?php } ?>
                </td>
                <td class="text-start">

                  <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                    <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_11');"><i class="fas fa-pencil-alt"></i></button>
                  <?php } ?>


                  <?php if ($catatRCPPKT->catat_rincian_11 != null) { ?>
                    <br><br><?= $catatRCPPKT->catat_rincian_11; ?>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>6.2</td>
                <td class="text-start">RTRW/Peraturan Daerah sejenisnya</td>
                <td class="text-center">
                  <?php if ($dataDokumenRCPPKT->{'6_2'} != null) { ?>
                    <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'6_2'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
                  <?php } ?>

                  <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>              
                    <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('6_2');"><i class="fas fa-file-upload"></i></button>
                  <?php } ?>

                </td>
                <td class="text-start">

                  <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                    <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_12');"><i class="fas fa-pencil-alt"></i></button>
                  <?php } ?>

                  <?php if ($catatRCPPKT->catat_penilaian_12 != null) { ?>
                    <br><br><?= $catatRCPPKT->catat_penilaian_12; ?>
                  <?php } ?>
                </td>
                <td class="text-start">

                  <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                    <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_12');"><i class="fas fa-pencil-alt"></i></button>
                  <?php } ?>


                  <?php if ($catatRCPPKT->catat_rincian_12 != null) { ?>
                    <br><br><?= $catatRCPPKT->catat_rincian_12; ?>
                  <?php } ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>


        <!-- Tabel 4 -->
        <div class="row mt-2">
          <table class="table table-bordered table-lg" style="border-color: black;" >
            <thead class="text-center align-middle">
              <tr class="fontTable">
                <th style="background-color: #f59f00; color: black; font-size: 12px; width: 1%;">No</th>
                <th colspan="2" style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Indikator dan Variabel</th>
                <th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">File</th>
                <th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Catatan Penilaian</th>
                <th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Catatan Rencana Kegiatan</th>
              </tr>
              <tr class="text-start">
                <th colspan="6" style="background-color: #76c0ec; color: black; font-size: 12px; width: 1%;">READINESS CRITERIA TEKNIS TAHAP 1</th>
              </tr>          
            </thead>
            <tbody>
             <tr>
              <td style="background-color: #b6f68b; color: black;">A.</td>
              <td colspan="5" class="text-start" style="background-color: #b6f68b; color: black;">Perencanaan, Program/Kegiatan dan Anggaran</td>
            </tr>
            <tr>
              <td>1.</td>
              <td colspan="5" class="text-start">Profil Kawasan Kumuh</td>
            </tr>
            <tr>
              <td></td>
              <td>1.1</td>
              <td class="text-start">Baseline permukiman kumuh</td>
              <td class="text-center">
                <?php if ($dataDokumenRCPPKT->{'7_1'} != null) { ?>
                  <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'7_1'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
                <?php } ?>

                <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>            
                  <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('7_1');"><i class="fas fa-file-upload"></i></button>
                <?php } ?>

              </td>
              <td class="text-start">

                <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                  <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_13');"><i class="fas fa-pencil-alt"></i></button>
                <?php } ?>

                <?php if ($catatRCPPKT->catat_penilaian_13 != null) { ?>
                  <br><br><?= $catatRCPPKT->catat_penilaian_13; ?>
                <?php } ?>
              </td>
              <td class="text-start">

                <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                  <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_13');"><i class="fas fa-pencil-alt"></i></button>
                <?php } ?>


                <?php if ($catatRCPPKT->catat_rincian_13 != null) { ?>
                  <br><br><?= $catatRCPPKT->catat_rincian_13; ?>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>1.2</td>
              <td class="text-start">Profil Permukiman Kumuh</td>
              <td class="text-center">
               <?php if ($dataDokumenRCPPKT->{'7_2'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'7_2'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('7_2');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_14');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_14 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_14; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_14');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_14 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_14; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td></td>
            <td>1.3</td>
            <td class="text-start">Video kawasan</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'7_3'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'7_3'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('7_3');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_15');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_15 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_15; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_15');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_15 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_15; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td>2.</td>
            <td colspan="5" class="text-start">Surat Bukti Komitmen Kepala Daerah</td>
          </tr>

          <tr>
            <td></td>
            <td>2.1</td>
            <td class="text-start">Surat Komitmen Kepala Daerah</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'7_4'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'7_4'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('7_4');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_16');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_16 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_16; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_16');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_16 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_16; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td></td>
            <td>2.2</td>
            <td class="text-start">Surat Dukungan Pendanaan Pihak Ketiga (jika ada)</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'7_5'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'7_5'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('7_5');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_17');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_17 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_17; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_17');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_17 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_17; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td>3.</td>
            <td colspan="5" class="text-start">Pokja yang menangani Permukiman, Air Minum, dan Sanitasi/Tim Koordinasi Sejenis</td>
          </tr>

          <tr>
            <td></td>
            <td>3.1</td>
            <td class="text-start">Bidang Perumahan dan Permukiman (Pokja PKP) maupun Air Minum dan Sanitasi (Pokja AMPL)</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'7_6'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'7_6'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('7_6');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_18');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_18 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_18; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_18');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_18 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_18; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td>4.</td>
            <td colspan="5" class="text-start">Alur Koordinasi</td>
          </tr>

          <tr>
            <td></td>
            <td>4.1</td>
            <td class="text-start">Alur koordinasi pelaksanaan DAK Tematik Pengentasan Permukiman Kumuh Terpadu</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'7_7'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'7_7'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('7_7');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_19');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_19 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_19; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_19');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_19 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_19; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td>5.</td>
            <td colspan="5" class="text-start">Kinerja DAK Tahun Sebelumnya</td>
          </tr>

          <tr>
            <td></td>
            <td>5.1</td>
            <td class="text-start">Kinerja DAK bidang (rumah/air minum/sanitasi) dalam 2 tahun terakhir</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'7_8'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'7_8'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('7_8');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_20');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_20 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_20; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_20');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_20 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_20; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td></td>
            <td>5.2</td>
            <td class="text-start">Kinerja DAK Tematik PPKT (Kab/kota pelaksana DAK Tematik PPKT tahun terakhir pelaksanaan)</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'7_9'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'7_9'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('7_9');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_21');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_21 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_21; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_21');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_21 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_21; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td style="background-color: #b6f68b; color: black;">B.</td>
            <td colspan="5" class="text-start" style="background-color: #b6f68b; color: black;">Kesiapan Penerima Program dan Keterlibatan Masyarakat</td>
          </tr>

          <tr>
            <td>1.</td>
            <td colspan="5" class="text-start">Kesiapan Calon Penerima Bantuan</td>
          </tr>

          <tr>
            <td></td>
            <td>1.1</td>
            <td class="text-start">SK Calon Penerima Bantuan dari Kepala Daerah</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'8_1'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'8_1'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('8_1');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_22');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_22 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_22; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_22');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_22 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_22; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td></td>
            <td>1.2</td>
            <td class="text-start">Surat Pernyataan Kesepakatan Warga</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'8_2'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'8_2'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('8_2');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_23');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_23 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_23; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_23');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_23 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_23; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td>2.</td>
            <td colspan="5" class="text-start">Kesiapan Calon Pengampu TPS3R, Air Limbah dan Air Minum (jika mengusulkan)</td>
          </tr>

          <tr>
            <td></td>
            <td>2.1</td>
            <td class="text-start">Surat Dukungan TPS3R dari Dinas Lingkungan Hidup (jika mengusulkan)</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'8_3'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'8_3'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('8_3');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_24');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_24 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_24; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_24');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_24 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_24; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td></td>
            <td>2.2</td>
            <td class="text-start">Surat Dukungan Air Limbah dari Dinas Lingkungan Hidup (jika mengusulkan)</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'8_4'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'8_4'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('8_4');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_25');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_25 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_25; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_25');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_25 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_25; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td></td>
            <td>2.3</td>
            <td class="text-start">Surat Dukungan Air Minum dari Dinas PUPR/PUTR atau sejenisnya (jika mengusulkan)</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'8_5'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'8_5'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('8_5');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_26');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_26 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_26; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_26');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_26 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_26; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td style="background-color: #b6f68b; color: black;">C.</td>
            <td colspan="5" class="text-start" style="background-color: #b6f68b; color: black;">Lahan/Pertanahan</td>
          </tr>

          <tr>
            <td>1.</td>
            <td colspan="5" class="text-start">Ketersediaan Lahan Peruntukan Bidang Perumahan Sektor Rumah Swadaya</td>
          </tr>

          <tr>
            <td></td>
            <td>1.1</td>
            <td class="text-start">Status Tanah dan rencana sertipikasi</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'8_6'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'8_6'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('8_6');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_27');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_27 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_27; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_27');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_27 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_27; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td></td>
            <td>1.2</td>
            <td class="text-start">Bukti Kesiapan Lahan Bidang Perumahan</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'8_7'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'8_7'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('8_7');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_28');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_28 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_28; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_28');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_28 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_28; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td>2.</td>
            <td colspan="5" class="text-start">Ketersediaan Lahan Peruntukan Bidang Jalan Lingkungan dan Drainase Lingkungan</td>
          </tr>

          <tr>
            <td></td>
            <td>2.1</td>
            <td class="text-start">Status Tanah</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'8_8'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'8_8'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('8_8');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_29');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_29 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_29; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_29');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_29 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_29; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td></td>
            <td>2.2</td>
            <td class="text-start">Status Tanah</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'8_9'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'8_9'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('8_9');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_30');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_30 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_30; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_30');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_30 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_30; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td>3.</td>
            <td colspan="5" class="text-start">Ketersediaan Lahan Peruntukan Bidang Air Minum</td>
          </tr>

          <tr>
            <td></td>
            <td>3.1</td>
            <td class="text-start">Status Tanah</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'9_1'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'9_1'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('9_1');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_31');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_31 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_31; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_31');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_31 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_31; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td></td>
            <td>3.2</td>
            <td class="text-start">Bukti Kesiapan Lahan Bidang Air Minum</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'9_2'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'9_2'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('9_2');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_32');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_32 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_32; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_32');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_32 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_32; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td>4.</td>
            <td colspan="5" class="text-start">Ketersediaan Lahan Peruntukan Bidang Air Minum</td>
          </tr>

          <tr>
            <td></td>
            <td>4.1</td>
            <td class="text-start">Status Tanah</td>
            <td class="text-center">
              <?php if ($dataDokumenRCPPKT->{'9_4'} != null) { ?>
                <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'9_4'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
              <?php } ?>

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
                <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('9_4');"><i class="fas fa-file-upload"></i></button>
              <?php } ?>

            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_34');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>

              <?php if ($catatRCPPKT->catat_penilaian_34 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_penilaian_34; ?>
              <?php } ?>
            </td>
            <td class="text-start">

              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_34');"><i class="fas fa-pencil-alt"></i></button>
              <?php } ?>


              <?php if ($catatRCPPKT->catat_rincian_34 != null) { ?>
                <br><br><?= $catatRCPPKT->catat_rincian_34; ?>
              <?php } ?>
            </td>
          </tr>

          <tr>
            <td></td>
            <td>4.2</td>
            <td class="text-start">Bukti Kesiapan Lahan Bidang Air Limbah</td>
            <td class="text-center">
             <?php if ($dataDokumenRCPPKT->{'9_5'} != null) { ?>
              <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'9_5'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
            <?php } ?>

            <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>        
              <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('9_5');"><i class="fas fa-file-upload"></i></button>
            <?php } ?>

          </td>
          <td class="text-start">
            <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

              <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_35');"><i class="fas fa-pencil-alt"></i></button>
            <?php } ?> 

            <?php if ($catatRCPPKT->catat_penilaian_35 != null) { ?>
              <br><br><?= $catatRCPPKT->catat_penilaian_35; ?>
            <?php } ?>
          </td>
          <td class="text-start">

            <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
              <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_35');"><i class="fas fa-pencil-alt"></i></button>
            <?php } ?>




            <?php if ($catatRCPPKT->catat_rincian_35 != null) { ?>
              <br><br><?= $catatRCPPKT->catat_rincian_35; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <td>5.</td>
          <td colspan="5" class="text-start">Ketersediaan Lahan Peruntukan Bidang Sanitasi Sektor Persampahan</td>
        </tr>

        <tr>
          <td></td>
          <td>5.1</td>
          <td class="text-start">Status Tanah</td>
          <td class="text-center">
            <?php if ($dataDokumenRCPPKT->{'9_6'} != null) { ?>
              <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'9_6'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
            <?php } ?>

            <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>        
              <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('9_6');"><i class="fas fa-file-upload"></i></button>
            <?php } ?>

          </td>
          <td class="text-start">
            <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

              <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_36');"><i class="fas fa-pencil-alt"></i></button>
            <?php } ?> 

            <?php if ($catatRCPPKT->catat_penilaian_36 != null) { ?>
              <br><br><?= $catatRCPPKT->catat_penilaian_36; ?>
            <?php } ?>
          </td>
          <td class="text-start">

            <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
              <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_36');"><i class="fas fa-pencil-alt"></i></button>
            <?php } ?>




            <?php if ($catatRCPPKT->catat_rincian_36 != null) { ?>
              <br><br><?= $catatRCPPKT->catat_rincian_36; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <td></td>
          <td>5.2</td>
          <td class="text-start">Bukti Kesiapan Lahan Bidang TPS3R</td>
          <td class="text-center">
            <?php if ($dataDokumenRCPPKT->{'9_7'} != null) { ?>
              <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'9_7'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
            <?php } ?>

            <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>        
              <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('9_7');"><i class="fas fa-file-upload"></i></button>
            <?php } ?>

          </td>
          <td class="text-start">
            <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

              <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_37');"><i class="fas fa-pencil-alt"></i></button>
            <?php } ?> 

            <?php if ($catatRCPPKT->catat_penilaian_37 != null) { ?>
              <br><br><?= $catatRCPPKT->catat_penilaian_37; ?>
            <?php } ?>
          </td>
          <td class="text-start">

            <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
              <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_37');"><i class="fas fa-pencil-alt"></i></button>
            <?php } ?>




            <?php if ($catatRCPPKT->catat_rincian_37 != null) { ?>
              <br><br><?= $catatRCPPKT->catat_rincian_37; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <td style="background-color: #b6f68b; color: black;">D.</td>
          <td colspan="5" class="text-start" style="background-color: #b6f68b; color: black;">Siteplan Before & After</td>
        </tr>

        <tr>
          <td></td>
          <td>1.1</td>
          <td class="text-start">Siteplan Before dan After Pelaksanaan</td>
          <td class="text-center">
           <?php if ($dataDokumenRCPPKT->{'9_8'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'9_8'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('9_8');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_38');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_38 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_38; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_38');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_38 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_38; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td style="background-color: #b6f68b; color: black;">E.</td>
        <td colspan="5" class="text-start" style="background-color: #b6f68b; color: black;">Rencana Kegiatan Detail Enginering Design (DED) dan Rencana Anggaran Biaya (RAB)</td>
      </tr>

      <tr>
        <td></td>
        <td>1.1</td>
        <td class="text-start">DED Air Minum</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'9_9'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'9_9'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('9_9');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_39');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_39 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_39; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_39');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_39 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_39; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td class="text-start">RAB Air Minum</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'10_1'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'10_1'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('10_1');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_40');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_40 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_40; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_40');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_40 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_40; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td>1.2</td>
        <td class="text-start">DED Air Limbah</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'10_2'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'10_2'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('10_2');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_41');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_41 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_41; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_41');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_41 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_41; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td class="text-start">RAB Air Limbah</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'10_3'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'10_3'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('10_3');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_42');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_42 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_42; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_42');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_42 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_42; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td>1.3</td>
        <td class="text-start">DED Pembangunan TPS3R</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'10_4'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'10_4'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('10_4');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_43');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_43 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_43; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_43');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_43 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_43; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td class="text-start">RAB Pembangunan TPS3R</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'10_5'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'10_5'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('10_5');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_44');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_44 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_44; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_44');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_44 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_44; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td class="text-start">Business Plan Pembangunan TPS3R</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'10_6'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'10_6'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('10_6');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_45');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_45 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_45; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_45');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_45 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_45; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td class="text-start">DED Peningkatan/Rehabilitasi TPS3R</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'10_7'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'10_7'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('10_7');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_46');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_46 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_46; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_46');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_46 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_46; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td class="text-start">RAB Peningkatan/Rehabilitasi TPS3R</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'10_8'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'10_8'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('10_8');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_47');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_47 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_47; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_47');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_47 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_47; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td class="text-start">Business Plan Peningkatan/Rehabilitasi TPS3R</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'10_9'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'10_9'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('10_9');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_48');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_48 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_48; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_48');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_48 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_48; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td class="text-start">Justifikasi Teknis Kebutuhan Peningkatan/Rehabilitasi TPS3R</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'11_1'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'11_1'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('11_1');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_49');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_49 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_49; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_49');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_49 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_49; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td class="text-start">SK Kelompok Pemeliharaan dan Pemanfaatan (KPP)</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'11_2'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'11_2'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('11_2');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_50');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_50 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_50; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_50');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_50 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_50; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td class="text-start">Surat kesiapan dukungan biaya operasional dan pemeliharaan</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'11_3'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'11_3'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('11_3');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_51');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_51 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_51; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_51');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_51 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_51; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td>1.4</td>
        <td class="text-start">DED Perumahan</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'11_4'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'11_4'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('11_4');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_52');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_52 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_52; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_52');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_52 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_52; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td class="text-start">RAB Perumahan</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'11_5'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'11_5'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('11_5');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_53');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_53 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_53; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_53');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_53 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_53; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td>1.5</td>
        <td class="text-start">DED Jalan dan drainase lingkungan</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'11_6'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'11_6'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('11_6');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_54');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_54 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_54; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_54');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_54 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_54; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td class="text-start">RAB Jalan dan drainase lingkungan</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'11_7'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'11_7'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>      
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('11_7');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_55');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_penilaian_55 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_55; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_55');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>





          <?php if ($catatRCPPKT->catat_rincian_55 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_55; ?>
          <?php } ?>
        </td>
      </tr>

    </tbody>
  </table>
</div>


<!-- Tabel 5 -->
<div class="row mt-2">
  <table class="table table-bordered table-lg" style="border-color: black;" >
    <thead class="text-center align-middle">
      <tr class="fontTable">
        <th style="background-color: #f59f00; color: black; font-size: 12px; width: 1%;">No</th>
        <th colspan="2" style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Indikator dan Variabel</th>
        <th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">File</th>
        <th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Catatan Penilaian</th>
        <th style="background-color: #f59f00; color: black; font-size: 12px; width: 20%;">Catatan Rencana Kegiatan</th>
      </tr>
      <tr class="text-start">
        <th colspan="6" style="background-color: #76c0ec; color: black; font-size: 12px; width: 1%;">READINESS CRITERIA TEKNIS TAHAP 2</th>
      </tr>          
    </thead>
    <tbody>
      <tr>
        <td style="background-color: #b6f68b; color: black;">A.</td>
        <td colspan="5" class="text-start" style="background-color: #b6f68b; color: black;">Dukungan NSPK dan Kelembagaan</td>
      </tr>
      <tr>
        <td>1.</td>
        <td colspan="5" class="text-start">Peraturan Daerah Pencegahan dan Peningkatan Kualitas Terhadap Perumahan Kumuh dan Permukiman Kumuh</td>
      </tr>

      <tr>
        <td></td>
        <td>1.1</td>
        <td class="text-start">Perda tentang Pencegahan dan Peningkatan Kualitas Terhadap Perumahan Kumuh dan Permukiman Kumuh</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'11_8'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'11_8'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('11_8');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_56');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>

          <?php if ($catatRCPPKT->catat_penilaian_56 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_56; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_56');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_rincian_56 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_56; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td style="background-color: #b6f68b; color: black;">B.</td>
        <td colspan="5" class="text-start" style="background-color: #b6f68b; color: black;">Rencana Kegiatan</td>
      </tr>
      <tr>
        <td>1.</td>
        <td colspan="5" class="text-start">Rencana Penanganan Sosial (Jika Diperlukan)</td>
      </tr>

      <tr>
        <td></td>
        <td>1.1</td>
        <td class="text-start">Rencana Ganti Untung</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'11_9'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'11_9'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('11_9');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_57');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>

          <?php if ($catatRCPPKT->catat_penilaian_57 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_57; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_57');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_rincian_57 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_57; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td>1.2</td>
        <td class="text-start">Rencana Penghunian Sementara</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'12_1'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'12_1'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('12_1');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>

            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_58');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>
          <?php if ($catatRCPPKT->catat_penilaian_58 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_58; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_58');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>



          <?php if ($catatRCPPKT->catat_rincian_58 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_58; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td>2.</td>
        <td colspan="5" class="text-start">Timeline Rencana Penanganan pada Lokasi yang Ditangani</td>
      </tr>

      <tr>
        <td></td>
        <td>2.1</td>
        <td class="text-start">Timeline Rencana Penanganan</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'12_2'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'12_2'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('12_2');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_59');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>

          <?php if ($catatRCPPKT->catat_penilaian_59 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_59; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_59');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_rincian_59 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_59; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td>3.</td>
        <td colspan="5" class="text-start">Dokumen Pendukung Air Limbah</td>
      </tr>

      <tr>
        <td></td>
        <td>3.1</td>
        <td class="text-start">Surat Komitmen Pembangunan IPLT/Pelaksanaan Operasionalisasi IPLT (untuk kab/kota yang mengusulkan menu TS Individual Perkotaan)</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'12_3'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'12_3'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('12_3');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_60');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>

          <?php if ($catatRCPPKT->catat_penilaian_60 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_60; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_60');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_rincian_60 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_60; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td style="background-color: #b6f68b; color: black;">C.</td>
        <td colspan="5" class="text-start" style="background-color: #b6f68b; color: black;">Rencana Konstruksi</td>
      </tr>
      <tr>
        <td>1.</td>
        <td colspan="5" class="text-start">Rencana Pelaksanaan Konstruksi</td>
      </tr>
      <tr>
        <td></td>
        <td>1.1</td>
        <td class="text-start">Tahapan Pelaksanaan Konstruksi</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'12_4'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'12_4'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('12_4');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_61');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>

          <?php if ($catatRCPPKT->catat_penilaian_61 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_61; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_61');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_rincian_61 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_61; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td>2.</td>
        <td colspan="5" class="text-start">Rencana Monitoring</td>
      </tr>

      <tr>
        <td></td>
        <td>2.1</td>
        <td class="text-start">Rencana Monitoring Pelaksanaan Konstruksi</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'12_5'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'12_5'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('12_5');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_62');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>

          <?php if ($catatRCPPKT->catat_penilaian_62 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_62; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_62');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_rincian_62 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_62; ?>
          <?php } ?>
        </td>
      </tr>

      <tr>
        <td style="background-color: #b6f68b; color: black;">D.</td>
        <td colspan="5" class="text-start" style="background-color: #b6f68b; color: black;">Rencana Pasca Konstruksi</td>
      </tr>
      <tr>
        <td>1.</td>
        <td colspan="5" class="text-start">Rencana Serah Terima Aset</td>
      </tr>

      <tr>
        <td></td>
        <td>1.1</td>
        <td class="text-start">Rencana Serah Terima Aset</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'12_6'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'12_6'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('12_6');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_63');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>

          <?php if ($catatRCPPKT->catat_penilaian_63 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_63; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_63');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_rincian_63 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_63; ?>
          <?php } ?>
        </td>
      </tr>
      <tr>
        <td>2.</td>
        <td colspan="5" class="text-start">Rencana Pengelolaan/Pemanfaatan</td>
      </tr>

      <tr>
        <td></td>
        <td>2.1</td>
        <td class="text-start">Rencana Pengelolaan Aset</td>
        <td class="text-center">
          <?php if ($dataDokumenRCPPKT->{'12_7'} != null) { ?>
            <button class="btn btn-icon btn-danger fa-lg" onclick="showPdf('<?= $dataDokumenRCPPKT->{'12_7'}; ?>');"><i class="fa-solid fas fa-file-pdf "></i></button>
          <?php } ?>
          
          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>          
            <button class="btn btn-icon btn-primary fa-lg" onclick="UploadDokumen('12_7');"><i class="fas fa-file-upload"></i></button>
          <?php } ?>

        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user') == 'perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_penilaian_64');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>

          <?php if ($catatRCPPKT->catat_penilaian_64 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_penilaian_64; ?>
          <?php } ?>
        </td>
        <td class="text-start">

          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
            <button class="btn btn-icon btn-success fa-lg" onclick="catat('catat_rincian_64');"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>


          <?php if ($catatRCPPKT->catat_rincian_64 != null) { ?>
            <br><br><?= $catatRCPPKT->catat_rincian_64; ?>
          <?php } ?>
        </td>
      </tr>


    </tbody>
  </table>
</div>


<!-- tabel 7 -->
<div class="row mt-2">
  <div class="row">  
    <div class="col-2">  
      <h4 class="text-start">BIDANG AIR MINUM</h4>
    </div>
    <div class="col-10 text-end">
      <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
        <button class="btn  btn-success" onclick="showModalTambahAM()"><i class="fas fa-plus" style="margin-right:5px;"></i> TAMBAH DATA</button>
      <?php } ?>
    </div>
  </div>
  <table class="table table-bordered table-lg mt-2" style="border-color: black;" >
    <thead class="text-center align-middle">
      <tr class="fontTable">
        <th style="background-color: #f59f00; color: black; font-size: 12px; width: 1%;">No.</th>
        <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Rincian Kegiatan</th>
        <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Catatan</th>
        <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Volume</th>
        <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Satuan</th>
        <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Harga Satuan</th>
        <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Harga Total</th>
        <th style="background-color: #f59f00; color: black; font-size: 12px; width: 1%;">Aksi</th>
      </tr>          
    </thead>
    <tbody>
      <?php $hargasatuan=0; $volume=0; $no=1; $no=1; foreach ($dataAM as $key => $val) { ?>
        <tr>
          <td class="text-start"><?= $no++; ?></td>
          <td class="text-start"><?= $val->rincianKegiatan; ?></td>
          <td class="text-start"><?= $val->catatan; ?></td>
          <td class="text-end"><?= $val->volume; ?></td>
          <td class="text-start"><?= $val->satuan; ?></td>
          <td class="text-end"><?= $val->harga_satuan; ?></td>
          <td class="text-end"><?= $val->harga_satuan*$val->volume; ?></td>
          <td class="text-center">
            <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
              <button class="btn btn-icon btn-danger" onclick="hpsAM('<?= $val->id; ?>')"><i class="fas fa-trash-alt"></i></button>
              <button class="btn btn-icon btn-warning" onclick="editsAM('<?= $val->id; ?>')"><i class="fas fa-edit"></i></button>
            <?php } ?>
          </td>
        </tr>
        <?php $hargasatuan += $val->harga_satuan; $volume += $val->volume; ?>
      <?php } ?>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="6" class="text-center">TOTAL</th>
        <th colspan="2" class="text-start"><?= $hargasatuan*$volume; ?></th>
      </tr>
    </table>
  </div>


  <!-- tabel 8 -->
  <div class="row mt-2">
    <div class="row">  
      <div class="col-2">  
        <h4 class="text-start">BIDANG SANITASI</h4>
      </div>
      <div class="col-10 text-end">
        <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
          <button class="btn  btn-success" onclick="showModalTambahSAN()"><i class="fas fa-plus" style="margin-right:5px;"></i> TAMBAH DATA</button>
        <?php } ?>
      </div>
    </div>
    <table class="table table-bordered table-lg mt-2" style="border-color: black;" >
      <thead class="text-center align-middle">
        <tr class="fontTable">
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 1%;">No.</th>
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Rincian Kegiatan</th>
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Catatan</th>
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Volume</th>
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Satuan</th>
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Harga Satuan</th>
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Harga Total</th>
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 1%;">Aksi</th>
        </tr>          
      </thead>
      <tbody>
        <?php $hargasatuan=0; $volume=0; $no=1; foreach ($dataSAN as $key => $val) { ?>
          <tr>
            <td class="text-start"><?= $no++; ?></td>
            <td class="text-start"><?= $val->rincianKegiatan; ?></td>
            <td class="text-start"><?= $val->catatan; ?></td>
            <td class="text-end"><?= $val->volume; ?></td>
            <td class="text-start"><?= $val->satuan; ?></td>
            <td class="text-end"><?= $val->harga_satuan; ?></td>
            <td class="text-end"><?= $val->harga_satuan*$val->volume; ?></td>
            <td class="text-center">
              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-danger" onclick="hpsSan('<?= $val->id; ?>')"><i class="fas fa-trash-alt"></i></button>
                <button class="btn btn-icon btn-warning" onclick="editSan('<?= $val->id; ?>')"><i class="fas fa-edit"></i></button>
              <?php } ?>
            </td>
          </tr>
          <?php $hargasatuan += $val->harga_satuan; $volume += $val->volume; ?>
        <?php } ?>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="6" class="text-center">TOTAL</th>
          <th colspan="
          2" class="text-start"><?= $hargasatuan*$volume; ?></th>
        </tr>
      </tfoot>
    </table>
  </div>


  <!-- tabel 9 -->
  <div class="row mt-2">
    <div class="row">  
      <div class="col-2">  
        <h4 class="text-start">BIDANG PERUMAHAN</h4>
      </div>
      <div class="col-10 text-end">
        <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
          <button class="btn  btn-success" onclick="showModalTambahPerum()"><i class="fas fa-plus" style="margin-right:5px;"></i> TAMBAH DATA</button>
        <?php } ?>
      </div>
    </div>
    <table class="table table-bordered table-lg mt-2" style="border-color: black;" >
      <thead class="text-center align-middle">
        <tr class="fontTable">
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 1%;">No.</th>
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Rincian Kegiatan</th>
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Catatan</th>
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Volume</th>
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Satuan</th>
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Harga Satuan</th>
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 16.7%;">Harga Total</th>
          <th style="background-color: #f59f00; color: black; font-size: 12px; width: 1%;">Aksi</th>
        </tr>          
      </thead>
      <tbody>
        <?php $hargasatuan=0; $volume=0; $no=1; foreach ($dataPperum as $key => $val) { ?>
          <tr>
            <td class="text-start"><?= $no++; ?></td>
            <td class="text-start"><?= $val->rincianKegiatan; ?></td>
            <td class="text-start"><?= $val->catatan; ?></td>
            <td class="text-end"><?= $val->volume; ?></td>
            <td class="text-start"><?= $val->satuan; ?></td>
            <td class="text-end"><?= $val->harga_satuan; ?></td>
            <?php $hargasatuan += $val->harga_satuan; $volume += $val->volume; ?>
            <td class="text-end"><?= $val->harga_satuan*$val->volume; ?></td>
            <td class="text-center">
              <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                <button class="btn btn-icon btn-danger" onclick="hpsPrum('<?= $val->id; ?>')"><i class="fas fa-trash-alt"></i></button>
                <button class="btn btn-icon btn-warning" onclick="editPrum('<?= $val->id; ?>')"><i class="fas fa-edit"></i></button>
              <?php } ?>
            </td>
          </tr>
        <?php } ?>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="6" class="text-center">TOTAL</th>
          <th colspan="
          2" class="text-start"><?= $hargasatuan*$volume; ?></th>
        </tr>
      </tfoot>
    </table>
  </div>
  <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
    <button class="btn btn-primary" style="float:right;" onclick="cetakBaPPKTShow()"><i class="fas fa-print" style="margin-right:10px;"></i> CETAK BA</button>
  <?php } ?>
</div>
</div>
</div>
</div>


<!-- Modal File CetakBa -->
<div class="modal modal-blur fade" id="modal_cetak_ba" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tittle_modal_dok">Form Cetak BA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUploadFileRcPerumahan" action="<?= base_url(); ?>PPKT/cetakBaPPKT" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $id; ?>">
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label class="form-label">TTD Pemda</label>
                <input type="text" class="form-control" name="ttdPemda" placeholder="Input Penandatangan Pemda">
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label class="form-label">TTD Dit. Perumahan dan Kawasan Permukiman Bappenas</label>
                <input type="text" class="form-control" name="ttdDitPerumahan" placeholder="Input Penandatangan Dit. Perumahan dan Kawasan Permukiman">
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label class="form-label">TTD Pusat Fasilitasi Infrastruktur Daerah</label>
                <input type="text" class="form-control" name="ttdPfid" placeholder="Input Penandatangan Pusat Fasilitasi Infrastruktur Daerah">
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label class="form-label">TTD Pengembangan Kawasan Permukiman PUPR</label>
                <input type="text" class="form-control" name="ttdPengembangan" placeholder="Input Penandatangan Pengembangan Kawasan Permukiman PUPR">
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label class="form-label">TTD Dit. Konsolidasi Tanah dan Pengembangan Pertanah ATR/BPN</label>
                <input type="text" class="form-control" name="ttdAtrBpn" placeholder="Input Penandatangan Dit. Konsolidasi Tanah dan Pengembangan Pertanah ATR/BPN">
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label class="form-label">TTD Dit. Air Minum PUPR</label>
                <input type="text" class="form-control" name="ttdAirMinum" placeholder="Input Penandatangan Dit. Air Minum PUPR">
              </div>
            </div>
            <div class="col-6">

              <div class="mb-3">
                <label class="form-label">TTD Dit. Sanitasi PUPR</label>
                <input type="text" class="form-control" name="ttdSanitasi" placeholder="Input Penandatangan Dit. Sanitasi PUPR">
              </div>
              <div class="mb-3">
                <label class="form-label">TTD Dit. Rumah Swadaya</label>
                <input type="text" class="form-control" name="ttdRuswa" placeholder="Input Penandatangan Dit. Ruswa PUPR">
              </div>
            </div> 
            <div class="col-6">   
              <div class="mb-3">
                <label class="form-label">BA Konsultasi Program</label>
                <input class="form-check-input" type="checkbox" name="baKonsultasiProgram">
              </div> 
            </div>
          </div>

          <div class="mb-3">
            <div class="form-label">Pilih Tanda Tangan :</div>
            <label class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="Bappenas">
              <span class="form-check-label">Dit. PERKIM Bappenas</span>
            </label>
            <label class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="atrBpn">
              <span class="form-check-label">ATR/BPN</span>
            </label>
            <label class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="pfid">
              <span class="form-check-label">PFID</span>
            </label>
            <label class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="am">
              <span class="form-check-label">Dit. Air Minum</span>
            </label>
            <label class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="sanitasi">
              <span class="form-check-label">Dit. Sanitasi PUPR</span>
            </label>
            <label class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="kawasanPermukiman">
              <span class="form-check-label">Pengembangan Kawasan Permukiman PUPR</span>
            </label>
            <label class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="ditRuswa">
              <span class="form-check-label">DIT. Rumah Swadaya</span>
            </label>
          </div>



        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Simpan File">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal CetakBa -->

<!-- Pembangunan -->
<div class="modal modal-blur fade" id="modalTambahPPKT" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tittle_modal_dok_iplt">Form Upload Dokumen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(); ?>PPKT/prsUploadDok" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="idppkt" id="idppkt" value="<?= $id; ?>">
          <div class="mb-3">
            <div class="form-label">Input File :</div>
            <input type="file" name="ded" id="inputanFIle" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Simpan File" >Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Pembangunan -->


<!-- catat -->
<div class="modal modal-blur fade" id="modalTambahPPKTCatat" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tittle_modal_dok_iplt">Form Catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(); ?>PPKT/prsSimpanCatat" method="POST">
          <input type="hidden" name="idppktCatat" id="idppktCatat" value="<?= $id; ?>">
          <div class="mb-3">
            <div class="form-label">Input Catatan :</div>
            <textarea class="form-control" id="catatanInput" name="catatan" rows="6" placeholder="Content.." style="height: 179px;"></textarea>
          </div>
        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Simpan File" >Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End catat -->


<!-- am -->
<div class="modal modal-blur fade" id="modalTambahPPKTam" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tittle_modal_dok_iplt">Form Tambah Data AIR MINUM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(); ?>PPKT/SimpanAM" method="POST">
          <input type="hidden" name="idppktAM" id="idppktAM" value="<?= $id; ?>">

          <div class="mb-3">
            <div class="form-label">Pilih Rincian Kegiatan :</div>
            <select class="form-select form-sm" name="rincianKegiatan" required>
              <option value="" selected disabled>-- Pilih Rincian Kegiatan --</option>
              <?php foreach ($dataRincianAM as $key => $value) { ?>
                <option value="<?= $value->rincian; ?>"><?= $value->rincian; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <div class="form-label">Input Catatan :</div>
            <textarea class="form-control" id="catatanInputAM" name="catatan" rows="6" placeholder="Content.." style="height: 179px;" required></textarea>
          </div>
          <div class="mb-3">
            <div class="form-label">Input Volume :</div>
            <input class="form-control" type="text" name="volume" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
          </div>
          <div class="mb-3">
            <div class="form-label">Input Satuan :</div>
            <input class="form-control" type="text" name="satuan" required>
          </div>
          <div class="mb-3">
            <div class="form-label">Harga Satuan :</div>
            <input class="form-control" type="text" name="harga_satuan" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
          </div>
        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Simpan File" >Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End am -->


<!-- Edit am -->
<div class="modal modal-blur fade" id="modalTambahPPKTamEdit" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tittle_modal_dok_iplt">Form Tambah Data AIR MINUM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(); ?>PPKT/SimpanAMEdit" method="POST">
          <input type="hidden" name="idppktAMEdit" id="idppktAMEdit">
          <input type="hidden" name="idPPKT12" value="<?= $id; ?>">
          <div class="mb-3">
            <div class="form-label">Pilih Rincian Kegiatan :</div>
            <select class="form-select form-sm" name="rincianKegiatanEdit" id="rincianKegiatanEdit"  required>
              <option value="" selected disabled>-- Pilih Rincian Kegiatan --</option>
              <?php foreach ($dataRincianAM as $key => $value) { ?>
                <option value="<?= $value->rincian; ?>"><?= $value->rincian; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <div class="form-label">Input Catatan :</div>
            <textarea class="form-control" id="catatanEdit" name="catatanEdit" rows="6" placeholder="Content.." style="height: 179px;" required></textarea>
          </div>
          <div class="mb-3">
            <div class="form-label">Input Volume :</div>
            <input class="form-control" type="text" name="volumeEdit" id="volumeEdit" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
          </div>
          <div class="mb-3">
            <div class="form-label">Input Satuan :</div>
            <input class="form-control" type="text" name="satuanEdit" id="satuanEdit" required>
          </div>
          <div class="mb-3">
            <div class="form-label">Harga Satuan :</div>
            <input class="form-control" type="text" name="harga_satuan_edit" id="harga_satuan_edit" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
          </div>
        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Simpan File" >Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Edit am -->



<!-- SAN -->
<div class="modal modal-blur fade" id="modalTambahPPKTSAN" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tittle_modal_dok_iplt">Form Tambah Data Sanitasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(); ?>PPKT/SimpanSan" method="POST">
          <input type="hidden" name="idppktSan" id="idppktSan" value="<?= $id; ?>">

          <div class="mb-3">
            <div class="form-label">Pilih Rincian Kegiatan :</div>
            <select class="form-select form-sm" name="rincianKegiatanSan" required>
              <option value="" selected disabled>-- Pilih Rincian Kegiatan --</option>
              <?php foreach ($dataRincianSan as $key => $value) { ?>
                <option value="<?= $value->rincian; ?>"><?= $value->rincian; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <div class="form-label">Input Catatan :</div>
            <textarea class="form-control" id="catatanInputsan" name="catatanSan" rows="6" placeholder="Content.." style="height: 179px;" required></textarea>
          </div>
          <div class="mb-3">
            <div class="form-label">Input Volume :</div>
            <input class="form-control" type="text" name="volumeSan" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
          </div>
          <div class="mb-3">
            <div class="form-label">Input Satuan :</div>
            <input class="form-control" type="text" name="satuanSan" required>
          </div>
          <div class="mb-3">
            <div class="form-label">Harga Satuan :</div>
            <input class="form-control" type="text" name="harga_satuanSan" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
          </div>
        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Simpan File" >Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End SAN -->

<!-- Edit SAN -->
<div class="modal modal-blur fade" id="modalTambahPPKTSanEdit" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tittle_modal_dok_iplt">Form Tambah Data AIR MINUM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(); ?>PPKT/SimpanSanEdit" method="POST">
          <input type="hidden" name="idppktSanEdit" id="idppktSanEdit">
          <input type="hidden" name="idPPKT12San" value="<?= $id; ?>">
          <div class="mb-3">
            <div class="form-label">Pilih Rincian Kegiatan :</div>
            <select class="form-select form-sm" name="rincianKegiatSanEdit" id="rincianKegiatSanEdit"  required>
              <option value="" selected disabled>-- Pilih Rincian Kegiatan --</option>
              <?php foreach ($dataRincianSan as $key => $value) { ?>
                <option value="<?= $value->rincian; ?>"><?= $value->rincian; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <div class="form-label">Input Catatan :</div>
            <textarea class="form-control" id="catataSannEdit" name="catatanSanEdit" rows="6" placeholder="Content.." style="height: 179px;" required></textarea>
          </div>
          <div class="mb-3">
            <div class="form-label">Input Volume :</div>
            <input class="form-control" type="text" name="volumeSanEdit" id="volumeSanEdit" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
          </div>
          <div class="mb-3">
            <div class="form-label">Input Satuan :</div>
            <input class="form-control" type="text" name="satuanSanEdit" id="satuanSanEdit" required>
          </div>
          <div class="mb-3">
            <div class="form-label">Harga Satuan :</div>
            <input class="form-control" type="text" name="harga_satuan_edit_san" id="harga_satuan_edit_san" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
          </div>
        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Simpan File" >Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Edit SAN -->

<!-- Perumahan -->
<div class="modal modal-blur fade" id="modalTambahPPKTPerumahan" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tittle_modal_dok_iplt">Form Tambah Data Perumahan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(); ?>PPKT/SimpanPerum" method="POST">
          <input type="hidden" name="idppktPerum" id="idppktPerum" value="<?= $id; ?>">

          <div class="mb-3">
            <div class="form-label">Pilih Rincian Kegiatan :</div>
            <select class="form-select form-sm" name="rincianKegiatanPerum" required>
              <option value="" selected disabled>-- Pilih Rincian Kegiatan --</option>
              <?php foreach ($dataRincianPrum as $key => $value) { ?>
                <option value="<?= $value->rincian; ?>"><?= $value->rincian; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <div class="form-label">Input Catatan :</div>
            <textarea class="form-control" id="catatanInputPerum" name="catatanPerum" rows="6" placeholder="Content.." style="height: 179px;" required></textarea>
          </div>
          <div class="mb-3">
            <div class="form-label">Input Volume :</div>
            <input class="form-control" type="text" name="volumePerum" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
          </div>
          <div class="mb-3">
            <div class="form-label">Input Satuan :</div>
            <input class="form-control" type="text" name="satuanPerum" required>
          </div>
          <div class="mb-3">
            <div class="form-label">Harga Satuan :</div>
            <input class="form-control" type="text" name="harga_satuanPerum" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
          </div>
        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Simpan File" >Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Perumahan -->

<!-- Edit SAN -->
<div class="modal modal-blur fade" id="modalTambahPPKTPerumEdit" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tittle_modal_dok_iplt">Form Tambah Data PERUMAHAN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(); ?>PPKT/SimpanPerumEdit" method="POST">
          <input type="hidden" name="idppktPerumEdit" id="idppktPerumEdit">
          <input type="hidden" name="idPPKT12Perum" value="<?= $id; ?>">
          <div class="mb-3">
            <div class="form-label">Pilih Rincian Kegiatan :</div>
            <select class="form-select form-sm" name="rincianKegiatPerumEdit" id="rincianKegiatPerumEdit"  required>
              <option value="" selected disabled>-- Pilih Rincian Kegiatan --</option>
              <?php foreach ($dataRincianPrum as $key => $value) { ?>
                <option value="<?= $value->rincian; ?>"><?= $value->rincian; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <div class="form-label">Input Catatan :</div>
            <textarea class="form-control" id="catataPerumEdit" name="catatanPerumEdit" rows="6" placeholder="Content.." style="height: 179px;" required></textarea>
          </div>
          <div class="mb-3">
            <div class="form-label">Input Volume :</div>
            <input class="form-control" type="text" name="volumePerumEdit" id="volumePerumEdit" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
          </div>
          <div class="mb-3">
            <div class="form-label">Input Satuan :</div>
            <input class="form-control" type="text" name="satuanPerumEdit" id="satuanPerumEdit" required>
          </div>
          <div class="mb-3">
            <div class="form-label">Harga Satuan :</div>
            <input class="form-control" type="text" name="harga_satuan_edit_perum" id="harga_satuan_edit_perum" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
          </div>
        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Simpan File" >Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Edit SAN -->



<script type="text/javascript">
  $( document ).ready(function() {

    cetakBaPPKTShow = function () {
     $('#modal_cetak_ba').modal('show');
   }


   editPrum = function (id) {

    $.ajax({
      url: base_url()+'PPKT/getDataByIdPerum',
      type: "post",
      dataType: 'json',
      data: {id},
      success: function (res) {

        $('#idppktPerumEdit').val(res.id);
        $('#rincianKegiatPerumEdit').val(res.rincianKegiatan);
        $('#catataPerumEdit').val(res.catatan);
        $('#volumePerumEdit').val(res.volume);
        $('#satuanPerumEdit').val(res.satuan);
        $('#harga_satuan_edit_perum').val(res.harga_satuan);

        $('#modalTambahPPKTPerumEdit').modal('show');


      },error: function(jqXHR, textStatus, errorThrown) {
        t_error('Ada yg error silakan hubungi developer');
      }
    });

  }

  hpsPrum = function (id) {

    Swal.fire({
      title: 'Anda Yakin ?',
      text: "Data yg Telah Dihapus Tidak Bisa Dikembalikan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya Hapus !'
    }).then((result) => {
      if (result.isConfirmed) {

       $.ajax({
        url: base_url()+'PPKT/hapusPerum',
        type: "post",
        dataType: 'json',
        data: {id},
        success: function (res) {
          if (res.code != 200 ){
            t_error('Data gagal Dihapus.!');
            return;
          }
          location.reload();

        },error: function(jqXHR, textStatus, errorThrown) {
          t_error('Ada yg error silakan hubungi developer');
        }
      });

     }
   });


  }


  showModalTambahPerum = function () {

    $('#modalTambahPPKTPerumahan').modal('show');

  }

  editSan = function (id) {

    $.ajax({
      url: base_url()+'PPKT/getDataByIdSAN',
      type: "post",
      dataType: 'json',
      data: {id},
      success: function (res) {

        $('#idppktSanEdit').val(res.id);
        $('#rincianKegiatSanEdit').val(res.rincianKegiatan);
        $('#catataSannEdit').val(res.catatan);
        $('#volumeSanEdit').val(res.volume);
        $('#satuanSanEdit').val(res.satuan);
        $('#harga_satuan_edit_san').val(res.harga_satuan);

        $('#modalTambahPPKTSanEdit').modal('show');


      },error: function(jqXHR, textStatus, errorThrown) {
        t_error('Ada yg error silakan hubungi developer');
      }
    });


  }


  hpsSan = function (id) {

    Swal.fire({
      title: 'Anda Yakin ?',
      text: "Data yg Telah Dihapus Tidak Bisa Dikembalikan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya Hapus !'
    }).then((result) => {
      if (result.isConfirmed) {

       $.ajax({
        url: base_url()+'PPKT/hapusSan',
        type: "post",
        dataType: 'json',
        data: {id},
        success: function (res) {
          if (res.code != 200 ){
            t_error('Data gagal Dihapus.!');
            return;
          }
          location.reload();

        },error: function(jqXHR, textStatus, errorThrown) {
          t_error('Ada yg error silakan hubungi developer');
        }
      });

     }
   });


  }

  showModalTambahSAN = function () {

    $('#modalTambahPPKTSAN').modal('show');

  }

  editsAM = function (id) {

    $.ajax({
      url: base_url()+'PPKT/getDataByIdAM',
      type: "post",
      dataType: 'json',
      data: {id},
      success: function (res) {

        $('#idppktAMEdit').val(res.id);
        $('#rincianKegiatanEdit').val(res.rincianKegiatan);
        $('#catatanEdit').val(res.catatan);
        $('#volumeEdit').val(res.volume);
        $('#satuanEdit').val(res.satuan);
        $('#harga_satuan_edit').val(res.harga_satuan);

        $('#modalTambahPPKTamEdit').modal('show');


      },error: function(jqXHR, textStatus, errorThrown) {
        t_error('Ada yg error silakan hubungi developer');
      }
    });


  }


  hpsAM = function (id) {

    Swal.fire({
      title: 'Anda Yakin ?',
      text: "Data yg Telah Dihapus Tidak Bisa Dikembalikan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya Hapus !'
    }).then((result) => {
      if (result.isConfirmed) {

       $.ajax({
        url: base_url()+'PPKT/hapusAM',
        type: "post",
        dataType: 'json',
        data: {id},
        success: function (res) {
          if (res.code != 200 ){
            t_error('Data gagal Dihapus.!');
            return;
          }
          location.reload();

        },error: function(jqXHR, textStatus, errorThrown) {
          t_error('Ada yg error silakan hubungi developer');
        }
      });

     }
   });


  }

  showModalTambahAM = function () {

    $('#modalTambahPPKTam').modal('show');

  }


  catat = function (key) {

    $('#catatanInput').attr('name', key);
    $('#modalTambahPPKTCatat').modal('show');  


  }


  UploadDokumen = function (key) {

    $('#inputanFIle').attr('name', key);
    $('#modalTambahPPKT').modal('show');

  }

  showPdf = async function (pathX) {

    let cekString = pathX.indexOf("/var/www/html/");

    if (cekString == -1) {
      path = pathX.replace(/,/g, "'");

      var sliceString = path.substring(11);

      var spasiJadiPersen = sliceString.replace(' ', '%20'); 
      var parent = await $('embed#idEmbed').parent();
      console.log(spasiJadiPersen)
      var newElement = await `<embed src="${base_url()}assets/2022/${spasiJadiPersen}" id='idEmbed' frameborder='0' width='100%' height='100%'>`;

      await $('embed#idEmbed').remove();
      await parent.append(newElement);
      await $('#modalPDFXX').modal('show');

    }else{

      path = pathX.replace(/,/g, "'");
      console.log(path)
      var sliceString = path.substring(14);

      var spasiJadiPersen = sliceString.replace(' ', '%20'); 
      var parent = await $('embed#idEmbed').parent();
      console.log(spasiJadiPersen)
      var newElement = await `<embed src="${base_url()}${spasiJadiPersen}" id='idEmbed' frameborder='0' width='100%' height='100%'>`;
      await $('embed#idEmbed').remove();
      await parent.append(newElement);
      await $('#modalPDFXX').modal('show');

    }



  }

});
</script>