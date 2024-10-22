          <div class="row row-deck row-cards">
            <div class="">
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




            </style>


            <!-- Page Pemda -->
            <?php if ($this->session->userdata('rkdak_prive') == '1') { ?>


              <div class="container mt-3 " id="container2">
                <div class="col-md-12 col-lg-12">
                  <div class="card card-stacked">
                    <div class="card-body">
                      <div class="text-center mt-3 ">
                        <h2 class="font-calibri-tittle">REKAP READINESS CRITERIA BIDANG SANITASI TA. <?= $this->session->userdata('thang'); ?></h2>
                        <h2 class="font-calibri-tittle" id="nmprovinsi" style="margin-top:-18px;"><?= $nmProvinsi; ?></h2>
                        <h2 class="font-calibri-tittle" id="nmkabkota" style="margin-top:-18px;"><?= $nmkabkota; ?></h2>
                      </div>

                      <div class="row mt-4">
                        <div class="row ">
                          <div class="col-2" style="margin-top:-0.6%;">
                            SPTJM     
                          </div>
                          <div class="col-5" style="margin-top: -8px;">
                            <div class="d-inline">
                              : 
                            </div>
                            <div class="" style="padding-left: 4%; margin-top: -22px;">
                              <?php if (@$dataHeader->sptjm != '') { ?>
                                <a type="button">
                                  <i class="fa-solid fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('<?= $dataHeader->sptjm; ?>')"></i>
                                </a>
                              <?php } ?>
                              <?php if ($this->session->userdata('rkdak_prive') == '1'){ ?>  
                                <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-original-title="Upload SPTJM " onclick="showUploadHeader('1')" style="margin-top:-10px; margin-left: 25px;">Upload SPTJM</button>
                              <?php } ?>
                            </div>     
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-2" style="margin-top:-0.6%;">
                            Dokumen SSK     
                          </div>
                          <div class="col-5" style="margin-top: -8px;">
                            <div class="d-inline">
                              : 
                            </div>
                            <div class="" style="padding-left: 4%; margin-top: -22px;">
                              <?php if (@$dataHeader->ssk != '') { ?>
                                <a type="button">
                                  <i class="fa-solid fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('<?= $dataHeader->ssk; ?>')"></i>
                                </a>
                              <?php } ?>
                              <?php if ($this->session->userdata('rkdak_prive') == '1'){ ?>  
                                <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-original-title="Upload SSK " onclick="showUploadHeader('2')" style="margin-top:-10px; margin-left: 25px;">Upload SSK</button>
                              <?php } ?>

                            </div>     
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-2 " style="margin-top:-0.6%;">
                            Surat Komitmen Pemutakhiran SSK     
                          </div>
                          <div class="col-5" style="margin-top: -8px;">
                            <div class="d-inline">
                              : 
                            </div>
                            <div class="" style="padding-left: 4%; margin-top: -22px;">
                             <?php if (@$dataHeader->komitmen_ssk != '') { ?>
                              <a type="button">
                                <i class="fa-solid fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('<?= $dataHeader->komitmen_ssk; ?>')"></i>
                              </a>
                            <?php } ?>
                            <?php if ($this->session->userdata('rkdak_prive') == '1'){ ?>  
                              <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top"
                              data-bs-original-title="Upload Surat Komitmen Pemutakhiran SSK" onclick="showUploadHeader('4')" style="margin-top:-10px; margin-left: 25px;"> Upload Surat Komitmen Pemutakhiran SSK</button>
                            <?php } ?>

                          </div>     
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-2 " style="margin-top:-0.6%;">
                          Berita Acara Rencana Kegiatan     
                        </div>
                        <div class="col-5" style="margin-top: -8px;">
                          <div class="d-inline">
                            : 
                          </div>
                          <div class="" style="padding-left: 4%; margin-top: -22px;">
                           <?php if (@$dataHeader->ba != '') { ?>
                            <a type="button">
                              <i class="fa-solid fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('<?= $dataHeader->ba; ?>')"></i>
                            </a>
                          <?php } ?>
                          <?php if ($this->session->userdata('rkdak_prive') == '1'){ ?>  
                            <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-original-title="Upload BA Konultasi Program" onclick="showUploadHeader('3')" style="margin-top:-10px; margin-left: 25px;"> Upload BA Konultasi Program</button>
                          <?php } ?>

                        </div>     
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-2 " style="margin-top:-0.6%;">
                        Berita Acara Hasi Penilaian   
                      </div>
                      <div class="col-5" style="margin-top: -8px;">
                        <div class="d-inline">
                          : 
                        </div>
                        <div class="" style="padding-left: 4%; margin-top: -22px;">
                         <?php if (@$dataHeader->ba_simoni != '') { ?>
                          <a type="button">
                            <i class="fa-solid fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('<?= $dataHeader->ba_simoni; ?>')"></i>
                          </a>
                        <?php } ?>
                        <?php if ($this->session->userdata('rkdak_prive') == '1'){ ?>  
                          <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top"
                          data-bs-original-title="Upload BA Simoni" onclick="showUploadHeader('5')" style="margin-top:-10px; margin-left: 25px;"> Upload BA SIMONI</button>
                        <?php } ?>

                      </div>     
                    </div>
                  </div>
                  <!-- <div class="row mt-3">
                    <div class="col-2 " style="margin-top:-0.6%;">
                      Update SK Stunting   
                    </div>
                    <div class="col-5" style="margin-top: -8px;">
                      <div class="d-inline">
                        : 
                      </div>
                      <div class="" style="padding-left: 4%; margin-top: -22px;">
                       <?php if (@$dataHeader->stanting != '') { ?>
                        <a type="button">
                          <i class="fa-solid fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('<?= $dataHeader->stanting; ?>')"></i>
                        </a>
                      <?php } ?>
                      <?php if ($this->session->userdata('rkdak_prive') == '1'){ ?>  
                        <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-original-title="Upload Update SK Stunting" onclick="showUploadHeader('6')" style="margin-top:-10px; margin-left: 25px;"> Upload Update SK Stunting</button>
                      <?php } ?>

                    </div>     
                  </div>
                </div> -->
              </div>



              <a href="#" type="button" class="btn btn-primary mt-4" onclick="showModaUpload('1')"><i class="fas fa-plus" style="margin-right:5px;"></i> Tambah data - Air Limbah (SPALD-T dan SPALD-S)</a>
              <br>
              <a href="#" type="button" class="btn btn-primary mt-2" onclick="showModaUpload('2')"><i class="fas fa-plus" style="margin-right:5px;"></i> Tambah data - Air Limbah (IPLT dan Truck Tinja)</a>
              <br>
              <a href="#" type="button" class="btn btn-primary mt-2 bg-orange text-orange-fg" onclick="showModaUpload('3')"><i class="fas fa-plus" style="margin-right:5px;"></i> Tambah data - Persampahan (Pembangunan dan Peningkatan/Rehabilitasi TPS3R)</a>
              <br>
              <!-- <a href="#" type="button" class="btn btn-primary mt-2 bg-orange text-orange-fg" onclick="showModaUpload('4')"><i class="fas fa-plus" style="margin-right:5px;"></i> Tambah data - Persampahan (Rehabilitasi TPS3R)</a>
              <br>
              <a href="#" type="button" class="btn btn-primary mt-2 mb-2 bg-orange text-orange-fg" onclick="showModaUpload('5')"><i class="fas fa-plus" style="margin-right:5px;"></i> Tambah data - Persampahan (Pembangunan TPST)</a> -->

              <?= $this->session->userdata('psn'); ?>
              <!-- Card Tab -->
              <div class="card-tabs  mt-3 mb-3">
                <!-- Cards navigation -->
                <ul class="nav nav-tabs ">
                  <li class="nav-item"><a href="#tab-top-1" class="nav-link active " data-bs-toggle="tab">Air Limbah <br>(SPALD-T dan SPALD-S)</a></li>
                  <li class="nav-item"><a href="#tab-top-2" class="nav-link" data-bs-toggle="tab">Air Limbah <br>(IPLT dan Truck Tinja)</a></li>
                  <li class="nav-item"><a href="#tab-top-3" class="nav-link" data-bs-toggle="tab">Persampahan <br>(Pembangunan dan Peningkatan/Rehabilitasi TPS3R)</a></li>
                  <!-- <li class="nav-item"><a href="#tab-top-4" class="nav-link" data-bs-toggle="tab">Persampahan <br>(Rehabilitasi TPS3R)</a></li>
                    <li class="nav-item"><a href="#tab-top-5" class="nav-link" data-bs-toggle="tab">Persampahan <br>(Pembangunan TPST)</a></li> -->
                  </ul>
                  <div class="tab-content ">
                    <!-- Content of card #1 -->
                    <div id="tab-top-1" class="card tab-pane active show">
                      <div class="card-body">
                        <div class="text-center">

                          <table class="table table-bordered table-lg" style="border-color: #a7a7b6;" >
                           <thead class="text-center sticky-top align-middle">
                            <tr>
                              <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">No</th>
                              <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">KECAMATAN</th>
                              <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">KELURAHAN/DESA</th>
                              <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">DED</th>
                              <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">RAB</th>
                              <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Surat Pernyataan <br> Kesiapan Pelaksanaan <br> Kegiatan dari <br>Pemerintah Desa/Kelurahan</th>
                              <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Surat Pernyataan Kesiapan Lahan</th>
                              <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Daftar calon <br> penerima manfaat </th>
                              <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Bukti Kepemilikan dan/<br>atau keberfungsian IPLT<br> (*untuk rincian menu tangki septik <br> individual pedesaan, perkotaan, <br> dan tangki septik komunal (5-10KK))</th>

                              <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;"><i>As Build Drawing</i>Jaringan IPAL terbangun <br> dan rencana pengembangannya <br> (*untuk rincian menu <br> penambahan pipa <br> pengumpul dan SR)</th>
                              <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Justifikasi teknis untuk <br> penambahan pipa pengumpul <br> (*untuk rincian menu <br> penambahan pipa <br> pengumpul dan SR)</th>
                              <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Edit Data</th>
                            </tr>
                            <tr>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                              <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                            </tr>
                          </thead>

                          <tbody class="text-end" id="bodyTableConten">
                            <?php $noIpal=1; foreach ($dataSanIpal as $key => $value) { ?>
                             <tr class="text-center">
                               <td><?= $noIpal; ?></td>
                               <td><?= $value->nmkec; ?></td>
                               <td><?= $value->nmdesa; ?></td>
                               <td>
                                 <?php if ($value->ded_ipal != '') { ?>
                                  <button class="btn btn-icon btn-danger" onclick="showPdf('<?=  str_replace("'", ",", $value->ded_ipal); ?>')">
                                    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
                                  </button>
                                <?php } ?>
                              </td>
                              <td>
                               <?php if ($value->ded_ipal != '') { ?>
                                <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->ded_ipal; ?>')">
                                  <i class="fas fa-copy fa-lg"></i>
                                </button>
                              <?php } ?>
                            </td>
                            <td>
                             <?php if ($value->rab_ipal != '') { ?>
                              <button class="btn btn-icon btn-danger" onclick="showPdf('<?= str_replace("'", ",", $value->rab_ipal); ?>')">
                                <i class="fa-solid fas fa-file-pdf fa-lg"></i>
                              </button>
                            <?php } ?>
                          </td>
                          <td>
                           <?php if ($value->rab_ipal != '') { ?>
                            <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->rab_ipal; ?>')">
                              <i class="fas fa-copy fa-lg"></i>
                            </button>
                          <?php } ?>
                        </td>
                        <td>
                         <?php if ($value->k_lahan_ipal != '') { ?>
                          <button class="btn btn-icon btn-danger" onclick="showPdf('<?= str_replace("'", ",", $value->k_lahan_ipal); ?>')">
                            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
                          </button>
                        <?php } ?>
                      </td>
                      <td>
                       <?php if ($value->k_lahan_ipal != '') { ?>
                        <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->k_lahan_ipal; ?>')">
                          <i class="fas fa-copy fa-lg"></i>
                        </button>
                      <?php } ?>
                    </td>
                    <td>
                     <?php if ($value->k_lahan_dinas_ipal != '') { ?>
                      <button class="btn btn-icon btn-danger" onclick="showPdf('<?= str_replace("'", ",", $value->k_lahan_dinas_ipal); ?>')">
                        <i class="fa-solid fas fa-file-pdf fa-lg"></i>
                      </button>
                    <?php } ?>
                  </td>
                  <td>
                   <?php if ($value->k_lahan_dinas_ipal != '') { ?>
                    <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->k_lahan_dinas_ipal; ?>')">
                      <i class="fas fa-copy fa-lg"></i>
                    </button>
                  <?php } ?>
                </td>
                <td>
                 <?php if ($value->penerima_manfaat_ipal != '') { ?>
                  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= str_replace("'", ",", $value->penerima_manfaat_ipal); ?>')">
                    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
                  </button>
                <?php } ?>
              </td>
              <td>
               <?php if ($value->penerima_manfaat_ipal != '') { ?>
                <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->penerima_manfaat_ipal; ?>')">
                  <i class="fas fa-copy fa-lg"></i>
                </button>
              <?php } ?>
            </td>
            <td>
             <?php if ($value->spesifikasi_ipal != '') { ?>
              <button class="btn btn-icon btn-danger" onclick="showPdf('<?= str_replace("'", ",", $value->spesifikasi_ipal); ?>')">
                <i class="fa-solid fas fa-file-pdf fa-lg"></i>
              </button>
            <?php } ?>
          </td>
          <td>
           <?php if ($value->spesifikasi_ipal != '') { ?>
            <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->spesifikasi_ipal; ?>')">
              <i class="fas fa-copy fa-lg"></i>
            </button>
          <?php } ?>
        </td>

        <td>
          <?php if ($value->abd != '') { ?>
            <button class="btn btn-icon btn-danger" onclick="showPdf('<?= str_replace("'", ",", $value->abd); ?>')">
              <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>
          <?php } ?>
        </td>
        <td>
          <?php if ($value->abd != '') { ?>
            <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->abd; ?>')">
              <i class="fas fa-copy fa-lg"></i>
            </button>
          <?php } ?>
        </td>

        <td>
          <?php if ($value->justekPipa != '') { ?>
            <button class="btn btn-icon btn-danger" onclick="showPdf('<?= str_replace("'", ",", $value->justekPipa); ?>')">
              <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>
          <?php } ?>
        </td>
        <td>
          <?php if ($value->justekPipa != '') { ?>
            <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->justekPipa; ?>')">
              <i class="fas fa-copy fa-lg"></i>
            </button>
          <?php } ?>
        </td>


        <td class="text-center" style="display: flex; align-items: center;">
          <button class="btn btn-warning btn-icon  d-inline" onclick="editDataIpal('<?= str_replace("'", "",$value->nmkec); ?>', '<?= str_replace("'", "",$value->nmdesa);  ?>', '<?= $value->id; ?>', '<?= $value->kdkec; ?>', '<?= $value->kddesa; ?>')" style="margin-right: 10px;"><i class="fas fa-edit"></i></button>
          <button class="btn btn-danger btn-icon  d-inline" onclick="hapusDataIpal('<?= $value->id; ?>')"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <?php $noIpal++;} ?>
    </tbody>
  </table>
</div>
</div>
</div>
<!-- Content of card #2 -->
<div id="tab-top-2" class="card tab-pane">
  <div class="card-body text-center">
    <div class="text-center">

      <table class="table table-bordered " style="border-color: #a7a7b6;">
       <thead class="text-center sticky-top align-middle">
        <tr>
          <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">No</th>
          <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">KECAMATAN</th>
          <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">KELURAHAN/DESA</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat Minat dari<br>Kepala Daerah</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat Penetapan<br>Lokasi oleh<br>Kepala Daerah</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat Pernyataan<br>BPPW</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;"><i>Detail Engineering Design</i><br>(DED)</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Rencana Anggaran Biaya <br> RAB</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Bukti <br> legalitas lahan <br> berupa sertifikat lahan</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Dokumen <br> justifikasi <br> teknis <br> *untuk rincian <br> menu peningkatan/<br> rehabilitasi IPLT</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Materplan/Rencana<br> Induk</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Dokumen <br> Lingkungan</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat <br> Kesiapan <br> Lembaga Pengelola</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Rencana pengelolaan/<br> business plan IPLT</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Bukti komitmen<br>untuk melaksanaan LLTT</th>

          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">As Build Drawing<br>IPLT Terbangun<br>*untuk rincian <br> menu peningkatan/ <br> rehabilitasi IPLT</th>

          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Laporan Audit/<br> Reviu BPKP</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Spesifikasi Teknis <br> dan Harga Supplier <br>Truk Tinja</th>
          <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">edit Data</th>
        </tr>
        <tr>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
        </tr>
      </thead>

      <tbody class="text-end" id="bodyTableConten">

        <?php $noIplt=1; foreach ($dataSanIPLT as $key => $value) { ?>
          <tr class="text-center">
           <td><?= $noIplt; ?></td>
           <td><?= $value->nmkec; ?></td>
           <td><?= $value->nmdesa; ?></td>
           <td>
             <?php if ($value->mintatKepalaDaerah != '') { ?>
              <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->mintatKepalaDaerah; ?>')">
                <i class="fa-solid fas fa-file-pdf fa-lg"></i>
              </button>
            <?php } ?>
          </td>
          <td>
           <?php if ($value->mintatKepalaDaerah != '') { ?>
            <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->mintatKepalaDaerah; ?>')">
              <i class="fas fa-copy fa-lg"></i>
            </button>
          <?php } ?>
        </td>

        <td>
         <?php if ($value->penetapan_ipltx != '') { ?>
          <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->penetapan_ipltx; ?>')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
          </button>
        <?php } ?>
      </td>
      <td>
       <?php if ($value->penetapan_ipltx != '') { ?>
        <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->penetapan_ipltx; ?>')">
          <i class="fas fa-copy fa-lg"></i>
        </button>
      <?php } ?>
    </td>

    <td>
     <?php if ($value->pernyataanBPPW != '') { ?>
      <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->pernyataanBPPW; ?>')">
        <i class="fa-solid fas fa-file-pdf fa-lg"></i>
      </button>
    <?php } ?>
  </td>
  <td>
   <?php if ($value->pernyataanBPPW != '') { ?>
    <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->pernyataanBPPW; ?>')">
      <i class="fas fa-copy fa-lg"></i>
    </button>
  <?php } ?>
</td>

<td>
 <?php if ($value->ded_ipltx != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->ded_ipltx; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>

<td>
 <?php if ($value->ded_ipltx != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->ded_ipltx; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>

<td>
 <?php if ($value->rab_ipltx != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->rab_ipltx; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->rab_ipltx != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->rab_ipltx; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->legalitas_ipltx != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->legalitas_ipltx; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->legalitas_ipltx != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->legalitas_ipltx; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->justifikasi_ipltx != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->justifikasi_ipltx; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->justifikasi_ipltx != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->justifikasi_ipltx; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->mp_ipltx != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->mp_ipltx; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->mp_ipltx != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->mp_ipltx; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->lingkungan_ipltx != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->lingkungan_ipltx; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->lingkungan_ipltx != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->lingkungan_ipltx; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->kesiapan_ipltx != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->kesiapan_ipltx; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->kesiapan_ipltx != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->kesiapan_ipltx; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>

<td>
 <?php if ($value->businessPlanIPLT != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->businessPlanIPLT; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->businessPlanIPLT != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->businessPlanIPLT; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>

<td>
 <?php if ($value->buktiKomitmenIPLT != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->buktiKomitmenIPLT; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->buktiKomitmenIPLT != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->buktiKomitmenIPLT; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>


<td>
 <?php if ($value->abd != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->abd; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->abd != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->abd; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>

<td>
 <?php if ($value->bpkp != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->bpkp; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->bpkp != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->bpkp; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>

<td>
 <?php if ($value->sTrukTinja != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->sTrukTinja; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->sTrukTinja != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->sTrukTinja; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>

<td class="text-center" style="display: flex; align-items: center;">
  <button class="btn btn-warning btn-icon  d-inline" onclick="editDataIplt('<?= str_replace("'", '',$value->nmkec); ?>', '<?= str_replace("'", '',$value->nmdesa);  ?>', '<?= $value->id; ?>', '<?= $value->kdkec; ?>', '<?= $value->kddesa; ?>')" style="margin-right: 10px;"><i class="fas fa-edit"></i></button>
  <button class="btn btn-danger btn-icon  d-inline" onclick="hapusDataIplt('<?= $value->id; ?>')"><i class="fas fa-trash"></i></button>
</td>

</tr>
<?php $noIplt++;} ?> 
</tbody>
</table>
</div>
</div>
</div>
<!-- Content of card #3 -->
<div id="tab-top-3" class="card tab-pane">
  <div class="card-body">
    <div class="text-center">

      <table class="table table-bordered " style="border-color: #a7a7b6;">
       <thead class="text-center sticky-top align-middle">
        <tr>
          <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">No</th>
          <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">KECAMATAN</th>
          <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">KELURAHAN/DESA</th>
          <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;"><i>Detail Engineering Design</i><br>(DED)</th>
          <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Rencana Anggaran Biaya<br>(RAB)</th>
          <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Surat Pernyataan <br> Kesiapan Pelaksanaan <br>Kegiatan </th>
          <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Bukti legalitas lahan <br> untuk TPS 3R </th>
          <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Konsep Business Plan <br>pengelolaan TPS 3R <br>pasca konstruksi</th>
          <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Daftar Calon<br>Penerima Manfaat TPS3R <br> (MIN 200 KK)</th>
          <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Berita Acara <br> Kesepakatan Warga</th>
          <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Surat Pernyataan <br> Kesiapan dan Dukungan <br> Biaya Operasi <br> dan Pemeliharaan</th>
          <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Surat dukungan <br> Dinas Lingkungan Hidup</th>
          <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Justifikasi Peningkatan/ <br> Rehabilitasi TPS3R <br> (*untuk rincian menu <br> peningkatan/rehabilitasi TPS3R)</th>
          <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">SK Kepala Desa <br> tentang Pembentukan KKP <br> *untuk rincian menu <br> peningkatan/rehabilitasi TPS3R</th>
          <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;"><i>As Build Drawing</i> <br> TPS3R Terbangun</th>

          <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Edit Data</th>
        </tr>
        <tr>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
        </tr>
      </thead>

      <tbody class="text-end" id="bodyTableConten">

        <?php $noPembangunanBaru=1; foreach ($dataSanPembangunanBaru as $key => $value) { ?>
          <tr class="text-center">
           <td><?= $noPembangunanBaru; ?></td>
           <td><?= $value->nmkec; ?></td>
           <td><?= $value->nmdesa; ?></td>
           <td>
             <?php if ($value->ded_pembangunanBaru != '') { ?>
              <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->ded_pembangunanBaru; ?>')">
                <i class="fa-solid fas fa-file-pdf fa-lg"></i>
              </button>
            <?php } ?>
          </td>
          <td>
           <?php if ($value->ded_pembangunanBaru != '') { ?>
            <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->ded_pembangunanBaru; ?>')">
              <i class="fas fa-copy fa-lg"></i>
            </button>
          <?php } ?>
        </td>
        <td>
         <?php if ($value->rab_pembangunanBaru != '') { ?>
          <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->rab_pembangunanBaru; ?>')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
          </button>
        <?php } ?>
      </td>
      <td>
       <?php if ($value->rab_pembangunanBaru != '') { ?>
        <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->rab_pembangunanBaru; ?>')">
          <i class="fas fa-copy fa-lg"></i>
        </button>
      <?php } ?>
    </td>
    <td>
     <?php if ($value->kesiapan_pembangunanBaru != '') { ?>
      <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->kesiapan_pembangunanBaru; ?>')">
        <i class="fa-solid fas fa-file-pdf fa-lg"></i>
      </button>
    <?php } ?>
  </td>
  <td>
   <?php if ($value->kesiapan_pembangunanBaru != '') { ?>
    <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->kesiapan_pembangunanBaru; ?>')">
      <i class="fas fa-copy fa-lg"></i>
    </button>
  <?php } ?>
</td>
<td>
 <?php if ($value->legalitas_pembangunanBaru != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->legalitas_pembangunanBaru; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->legalitas_pembangunanBaru != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->legalitas_pembangunanBaru; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->bp_pembangunanBaru != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->bp_pembangunanBaru; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->bp_pembangunanBaru != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->bp_pembangunanBaru; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->penerima_manfaat_pembangunanBaru != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->penerima_manfaat_pembangunanBaru; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->penerima_manfaat_pembangunanBaru != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->penerima_manfaat_pembangunanBaru; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>

<td>
 <?php if ($value->ba_warga != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->ba_warga; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->ba_warga != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->ba_warga; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>

<td>
 <?php if ($value->kesepakatan_oprasi_pemeliharan != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->kesepakatan_oprasi_pemeliharan; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->kesepakatan_oprasi_pemeliharan != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->kesepakatan_oprasi_pemeliharan; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>

<td>
 <?php if ($value->surat_dinas_hidup != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->surat_dinas_hidup; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->surat_dinas_hidup != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->surat_dinas_hidup; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>


<td>
 <?php if ($value->justifikasi_TPS_peningkatan != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->justifikasi_TPS_peningkatan; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->justifikasi_TPS_peningkatan != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->justifikasi_TPS_peningkatan; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>


<td>
 <?php if ($value->sk_desa_kpp != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->sk_desa_kpp; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->sk_desa_kpp != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->sk_desa_kpp; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>


<td>
 <?php if ($value->abd != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->abd; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->abd != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->abd; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>


<td>
  <button class="btn btn-warning btn-icon  d-inline" onclick="editDataPembangunanBaru('<?= str_replace("'", '',$value->nmkec); ?>', '<?= str_replace("'", '',$value->nmdesa);  ?>', '<?= $value->id; ?>', '<?= $value->kdkec; ?>', '<?= $value->kddesa; ?>')" style="margin-right: 10px;"><i class="fas fa-edit"></i></button>
  <button class="btn btn-danger btn-icon  d-inline" onclick="hapusDataPembangunanBaru('<?= $value->id; ?>')"><i class="fas fa-trash"></i></button>
</td>
</tr>
<?php $noPembangunanBaru++;} ?>
</tbody>
</table>
</div>
</div>
</div>
<!-- Content of card #4 -->
<div id="tab-top-4" class="card tab-pane">
  <div class="card-body">
    <div class="text-center">

      <table class="table table-bordered table-lg" style="border-color: #a7a7b6;" >
       <thead class="text-center sticky-top align-middle">
        <tr>
          <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">No</th>
          <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">KECAMATAN</th>
          <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">KELURAHAN/DESA</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">DED</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">RAB</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat Pernyataan <br> Kesiapan Pelaksanaan <br> Kegiatan </i></th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Bukti <br>legalitas lahan <br>untuk TPS 3R </th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Konsep <br>Business Plan <br>pengelolaan TPS 3R <br> pasca konstruksi</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Daftar calon <br>penerima manfaat <br>TPS 3R <br>minimal 200 KK</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Justifikasi teknis <br>kebutuhan <br>peningkatan/rehabilitasi <br> TPS 3R </th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat Komitmen <br> Kepala Daerah </th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat kesiapan <br> dukungan biaya <br>operasional dan pemeliharaan</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Rincian <br>Kegiatan dan Anggaran <br>alokasi APBD untuk <br> peningkatan kapasitas TPS3R</th>
          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Bukti <br> Kepemilikan KPP</th>
          <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Edit Data</th>
        </tr>
        <tr>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
        </tr>
      </thead>
      <tbody class="text-end" id="bodyTableConten">
        <?php $noRehabilitasi=1; foreach ($dataSanRehabilitasi as $key => $value) { ?>
          <tr class="text-center">
           <td><?= $noRehabilitasi; ?></td>
           <td><?= $value->nmkec; ?></td>
           <td><?= $value->nmdesa; ?></td>
           <td>
             <?php if ($value->ded_rehabilitasi != '') { ?>
              <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->ded_rehabilitasi; ?>')">
                <i class="fa-solid fas fa-file-pdf fa-lg"></i>
              </button>
            <?php } ?>
          </td>
          <td>
           <?php if ($value->ded_rehabilitasi != '') { ?>
            <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->ded_rehabilitasi; ?>')">
              <i class="fas fa-copy fa-lg"></i>
            </button>
          <?php } ?>
        </td>
        <td>
         <?php if ($value->rab_rehabilitasi != '') { ?>
          <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->rab_rehabilitasi; ?>')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
          </button>
        <?php } ?>
      </td>
      <td>
       <?php if ($value->rab_rehabilitasi != '') { ?>
        <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->rab_rehabilitasi; ?>')">
          <i class="fas fa-copy fa-lg"></i>
        </button>
      <?php } ?>
    </td>
    <td>
     <?php if ($value->kesiapan_rehabilitasi != '') { ?>
      <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->kesiapan_rehabilitasi; ?>')">
        <i class="fa-solid fas fa-file-pdf fa-lg"></i>
      </button>
    <?php } ?>
  </td>
  <td>
   <?php if ($value->kesiapan_rehabilitasi != '') { ?>
    <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->kesiapan_rehabilitasi; ?>')">
      <i class="fas fa-copy fa-lg"></i>
    </button>
  <?php } ?>
</td>
<td>
 <?php if ($value->legalitas_rehabilitasi != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->legalitas_rehabilitasi; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->legalitas_rehabilitasi != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->legalitas_rehabilitasi; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->bp_rehabilitasi != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->bp_rehabilitasi; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->bp_rehabilitasi != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->bp_rehabilitasi; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->penerima_manfaat_rehabilitasi != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->penerima_manfaat_rehabilitasi; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->penerima_manfaat_rehabilitasi != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->penerima_manfaat_rehabilitasi; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->justifikasi_rehabilitasi != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->justifikasi_rehabilitasi; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->justifikasi_rehabilitasi != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->justifikasi_rehabilitasi; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->komitmen_rehabilitasi != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->komitmen_rehabilitasi; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->komitmen_rehabilitasi != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->komitmen_rehabilitasi; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->dukungan_rehabilitasi != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->dukungan_rehabilitasi; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->dukungan_rehabilitasi != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->dukungan_rehabilitasi; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->rincian_anggaran_rehabilitasi != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->rincian_anggaran_rehabilitasi; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->rincian_anggaran_rehabilitasi != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->rincian_anggaran_rehabilitasi; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
  <?php if ($value->kpp != '') { ?>
    <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->kpp; ?>')">
      <i class="fa-solid fas fa-file-pdf fa-lg"></i>
    </button>
  <?php } ?>
</td>
<td>
  <?php if ($value->kpp != '') { ?>
    <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->kpp; ?>')">
      <i class="fas fa-copy fa-lg"></i>
    </button>
  <?php } ?>
</td>

<td>
  <button class="btn btn-warning btn-icon  d-inline" onclick="editDataRehabilitasi('<?= str_replace("'", '',$value->nmkec); ?>', '<?= str_replace("'", '',$value->nmdesa);  ?>', '<?= $value->id; ?>', '<?= $value->kdkec; ?>', '<?= $value->kddesa; ?>')" style="margin-right: 10px;"><i class="fas fa-edit"></i></button>
  <button class="btn btn-danger btn-icon  d-inline" onclick="hapusDataRehabilitasi('<?= $value->id; ?>')"><i class="fas fa-trash"></i></button>
</td>
</tr>
<?php $noRehabilitasi++;} ?>
</tbody>
</table>
</div>
</div>
</div>



<!-- Content of card #5 -->
<div id="tab-top-5" class="card tab-pane">
  <div class="card-body">
    <div class="text-center">

      <table class="table table-bordered table-lg" style="border-color: #a7a7b6;" >
       <thead class="text-center sticky-top align-middle">
        <tr>
          <th  rowspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">No</th>
          <th  rowspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">KECAMATAN</th>
          <th  rowspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">KELURAHAN/DESA</th>
          <th  colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat <br>Penetapan Lokasi <br>oleh <br> Kepala Daerah</th>
          <th  colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Bukti <br>legalitas lahan <br> berupa <br>sertifikat lahan</th>
          <th  colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Kesesuaian <br>dengan RTRW</th>
          <th  colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat Pernyataan <br>Kesiapan Lembaga Pengelola <br> berupa UPTD, <br>BLUD, BUMD </th>
          <th  colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">RAB</th>
          <th  colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">DED</th>
          <th  colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">PKS</th>
          <th  colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Dokumen <br> Lingkungan</th>
          <th  colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Data <br> profil </th>
          <th  colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat pernyataan <br> Komitmen DPRD </th>
          <th  colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Kesiapan <br> calon penerima </th>
          <th  rowspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Hapus <br> Data </th>
        </tr>
        <tr>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
        </tr>
      </thead>

      <tbody class="text-end" id="bodyTableConten">
        <?php $noPembangunan=1; foreach ($dataSanPembangunan as $key => $value) { ?>
         <tr  class="text-center">
           <td><?= $noPembangunan; ?></td>
           <td><?= $value->nmkec; ?></td>
           <td><?= $value->nmdesa; ?></td>
           <td>
             <?php if ($value->penetapan_lokasi_pembangunan != '') { ?>
              <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->penetapan_lokasi_pembangunan; ?>')">
                <i class="fa-solid fas fa-file-pdf fa-lg"></i>
              </button>
            <?php } ?>
          </td>
          <td>
           <?php if ($value->penetapan_lokasi_pembangunan != '') { ?>
            <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->penetapan_lokasi_pembangunan; ?>')">
              <i class="fas fa-copy fa-lg"></i>
            </button>
          <?php } ?>
        </td>
        <td>
         <?php if ($value->legalitas_pembangunan != '') { ?>
          <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->legalitas_pembangunan; ?>')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
          </button>
        <?php } ?>
      </td>
      <td>
       <?php if ($value->legalitas_pembangunan != '') { ?>
        <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->legalitas_pembangunan; ?>')">
          <i class="fas fa-copy fa-lg"></i>
        </button>
      <?php } ?>
    </td>
    <td>
     <?php if ($value->rtrw_pembangunan != '') { ?>
      <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->rtrw_pembangunan; ?>')">
        <i class="fa-solid fas fa-file-pdf fa-lg"></i>
      </button>
    <?php } ?>
  </td>
  <td>
   <?php if ($value->rtrw_pembangunan != '') { ?>
    <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->rtrw_pembangunan; ?>')">
      <i class="fas fa-copy fa-lg"></i>
    </button>
  <?php } ?>
</td>
<td>
 <?php if ($value->kesiapan_pengelola_pembangunan != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->kesiapan_pengelola_pembangunan; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->kesiapan_pengelola_pembangunan != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->kesiapan_pengelola_pembangunan; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->rab_pembangunan != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->rab_pembangunan; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->rab_pembangunan != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->rab_pembangunan; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->ded_pembangunan != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->ded_pembangunan; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->ded_pembangunan != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->ded_pembangunan; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->pks_pembangunan != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->pks_pembangunan; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->pks_pembangunan != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->pks_pembangunan; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->lingkungan_pembangunan != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->lingkungan_pembangunan; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->lingkungan_pembangunan != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->lingkungan_pembangunan; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->profile_pembangunan != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->profile_pembangunan; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->profile_pembangunan != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->profile_pembangunan; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->dprd_pembangunan != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->dprd_pembangunan; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->dprd_pembangunan != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->dprd_pembangunan; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->penerima_pembangunan != '') { ?>
  <button class="btn btn-icon btn-danger" onclick="showPdf('<?= $value->penerima_pembangunan; ?>')">
    <i class="fa-solid fas fa-file-pdf fa-lg"></i>
  </button>
<?php } ?>
</td>
<td>
 <?php if ($value->penerima_pembangunan != '') { ?>
  <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->penerima_pembangunan; ?>')">
    <i class="fas fa-copy fa-lg"></i>
  </button>
<?php } ?>
</td>
<td class="text-center" style="display: flex; align-items: center;">
  <button class="btn btn-warning btn-icon  d-inline" onclick="editDataPembangunan('<?= str_replace("'", '',$value->nmkec); ?>', '<?= str_replace("'", '',$value->nmdesa);  ?>', '<?= $value->id; ?>', '<?= $value->kdkec; ?>', '<?= $value->kddesa; ?>')" style="margin-right: 10px;"><i class="fas fa-edit"></i></button>
  <button class="btn btn-danger btn-icon  d-inline" onclick="hapusDataPembangunan('<?= $value->id; ?>')"><i class="fas fa-trash"></i></button>
</td>
</tr>
<?php $noPembangunan++;} ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- End Card Tab -->

</div>
</div>
</div>
</div>


<?php } ?>
<!-- End Page Pemda -->



<!-- Page Selain Pemda -->
<?php if ($this->session->userdata('rkdak_prive') != '1') { ?>
  <div class="container">
    <div class="col-md-12 col-lg-12">
      <div class="card card-stacked">
        <div class="card-body">
          <!-- <h3 class="card-title">Pilih Privinsi Kab/Kota</h3> -->
          <div class="mb-3 row">
            <label class="col-1 col-form-label">Pilih Provinsi</label>
            <div class="col-2 text-start">
              <select class="form-select form-sm" id="provinsi">
                <option value="" selected disabled>-- Pilih Provinsi --</option>

                <?php foreach ($dataProvinsi as $key => $value) { ?>
                  <option value="<?= $value->kdlokasi; ?>"><?= $value->nmlokasi; ?></option>
                <?php } ?>

              </select>
            </div>
          </div>
          <div class="mb-2 row">
            <label class="col-1 col-form-label">Pilih Kab/Kota</label>
            <div class="col-2 text-start">
              <select class="form-select form-sm" id="kabkota">
                <option value="" selected disabled>-- Pilih Kab/Kota --</option>
              </select>
            </div>
          </div>
          <div class="mt-3 mb-2 row">
            <div class="col-3 text-end">
              <button class="btn btn-primary" onclick="getDataTableConten()"><i class="fa-solid fa-magnifying-glass" style="margin-right: 15%;"></i>  Cari</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container d-none mt-3" id="contenAdmin">
    <div class="col-md-12 col-lg-12">
      <div class="card card-stacked">
        <div class="card-body">
          <div class="text-center mt-3 ">
            <h2 class="font-calibri-tittle">REKAP READINESS CRITERIA SANITASI TA. <?= $this->session->userdata('thang'); ?></h2>
            <h2 class="font-calibri-tittle" id="nmprovinsi" style="margin-top:-18px;"> </h2>
            <h2 class="font-calibri-tittle" id="nmkabkota" style="margin-top:-18px;"> </h2>
          </div>

          <div class="row mt-4">
            <div class="row ">
              <div class="col-2" style="margin-top:-0.6%;">
                SPTJM     
              </div>
              <div class="col-5" style="margin-top: -8px;">
                <div class="d-inline">
                  : 
                </div>
                <div class="" style="padding-left: 4%; margin-top: -22px;" id="icon-sptjm">
                  <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
                </div>     
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-2" style="margin-top:-0.6%;">
                Dokumen SSK     
              </div>
              <div class="col-5" style="margin-top: -8px;">
                <div class="d-inline">
                  : 
                </div>
                <div class="" style="padding-left: 4%; margin-top: -22px;" id="icon-ssk">
                  <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
                </div>     
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-2 " style="margin-top:-0.6%;">
                Surat Komitmen Pemutakhiran SSK     
              </div>
              <div class="col-5" style="margin-top: -8px;">
                <div class="d-inline">
                  : 
                </div>
                <div class="" style="padding-left: 4%; margin-top: -22px;" id="icon-komitmen">
                  <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
                </div>     
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-2 " style="margin-top:-0.6%;">
                Berita Acara Rencana Kegiatan     
              </div>
              <div class="col-5" style="margin-top: -8px;">
                <div class="d-inline">
                  : 
                </div>
                <div class="" style="padding-left: 4%; margin-top: -22px;" id="icon-ba">
                  <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
                </div>     
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-2 " style="margin-top:-0.6%;">
                Berita Acara Sinkronisasi & Harmonisasi    
              </div>
              <div class="col-5" style="margin-top: -8px;">
                <div class="d-inline">
                  : 
                </div>
                <div class="" style="padding-left: 4%; margin-top: -22px;" id="icon-ba-simoni">
                  <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
                </div>     
              </div>
            </div>
            <!-- <div class="row mt-3">
              <div class="col-2 " style="margin-top:-0.6%;">
                Update SK Stunting    
              </div>
              <div class="col-5" style="margin-top: -8px;">
                <div class="d-inline">
                  : 
                </div>
                <div class="" style="padding-left: 4%; margin-top: -22px;" id="icon-stanting">
                  <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
                </div>     
              </div>
            </div> -->
          </div>

          <div class="row mt-4 " >


            <div class="card-tabs  mb-3">
              <!-- Cards navigation -->
              <ul class="nav nav-tabs ">
                <li class="nav-item"><a href="#tab-top-1" class="nav-link active " data-bs-toggle="tab">Air Limbah <br>(SPALD-T dan SPALD-S)</a></li>
                <li class="nav-item"><a href="#tab-top-2" class="nav-link" data-bs-toggle="tab">Air Limbah <br>(IPLT dan Truck Tinja)</a></li>
                <li class="nav-item"><a href="#tab-top-3" class="nav-link" data-bs-toggle="tab">Persampahan <br>(Pembangunan dan Peningkatan/Rehabilitasi TPS3R)</a></li>
               <!--  <li class="nav-item"><a href="#tab-top-4" class="nav-link" data-bs-toggle="tab">Persampahan <br>(Rehabilitasi TPS3R)</a></li>
                <li class="nav-item"><a href="#tab-top-5" class="nav-link" data-bs-toggle="tab">Persampahan <br>(Pembangunan TPST)</a></li> -->
              </ul>
              <div class="tab-content ">
                <!-- Content of card #1 -->
                <div id="tab-top-1" class="card tab-pane active show">
                  <div class="card-body">
                    <div class="text-center">

                      <table class="table table-bordered table-lg" style="border-color: #a7a7b6;" >
                       <thead class="text-center sticky-top align-middle">
                        <tr>
                          <th rowspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">No</th>
                          <th rowspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">KECAMATAN</th>
                          <th rowspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">KELURAHAN/DESA</th>
                          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">DED</th>
                          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">RAB</th>
                          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat Pernyataan <br> Kesiapan Pelaksanaan dan/atau <br> Pengelolaan Kegiatan <br> (dari Desa/Kelurahan <br> untuk IPAL Skala <br> Permukiman atau <br> dari Pemerintah Daerah <br> untuk IPAL Skala Perkotaan)</th>
                          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat Pernyataan Kesiapan Lahan</th>
                          <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Daftar calon <br> penerima manfaat </th>
                          <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Bukti Kepemilikan dan/<br>atau keberfungsian IPLT<br> (*untuk rincian menu tangki septik <br> individual pedesaan, perkotaan, <br> dan tangki septik komunal (5-10KK))</th>

                          <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;"><i>As Build Drawing</i>Jaringan IPAL terbangun <br> dan rencana pengembangannya <br> (*untuk rincian menu <br> penambahan pipa <br> pengumpul dan SR)</th>
                          <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Justifikasi teknis untuk <br> penambahan pipa pengumpul <br> (*untuk rincian menu <br> penambahan pipa <br> pengumpul dan SR)</th>
                        </tr>
                        <tr>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                        </tr>
                      </thead>

                      <tbody class="text-end" id="bodyIpal">

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Content of card #2 -->
              <div id="tab-top-2" class="card tab-pane">
                <div class="card-body text-center">
                  <div class="text-center">

                    <table class="table table-bordered " style="border-color: #a7a7b6;">
                     <thead class="text-center sticky-top align-middle">
                      <tr>
                        <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">No</th>
                        <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">KECAMATAN</th>
                        <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">KELURAHAN/DESA</th>
                        <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat Minat dari<br>Kepala Daerah</th>
                        <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat Penetapan<br>Lokasi oleh<br>Kepala Daerah</th>
                        <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat Pernyataan<br>BPPW</th>
                        <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;"><i>Detail Engineering Design</i><br>(DED)</th>
                        <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Rencana Anggaran Biaya <br> RAB</th>
                        <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Bukti <br> legalitas lahan <br> berupa sertifikat lahan</th>
                        <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Dokumen <br> justifikasi <br> teknis <br> *untuk rincian <br> menu peningkatan/<br> rehabilitasi IPLT</th>
                        <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Materplan/Rencana<br> Induk</th>
                        <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Dokumen <br> Lingkungan</th>
                        <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat <br> Kesiapan <br> Lembaga Pengelola</th>
                        <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Rencana pengelolaan/<br> business plan IPLT</th>
                        <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Bukti komitmen<br>untuk melaksanaan LLTT</th>

                        <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">As Build Drawing<br>IPLT Terbangun<br>*untuk rincian <br> menu peningkatan/ <br> rehabilitasi IPLT</th>

                        <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Laporan Audit/<br> Reviu BPKP</th>
                        <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Spesifikasi Teknis <br> dan Harga Supplier <br>Truk Tinja</th>
                      </tr>
                      <tr>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                      </tr>
                    </thead>

                    <tbody class="text-end" id="bodyIPLT">

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Content of card #3 -->
            <div id="tab-top-3" class="card tab-pane">
              <div class="card-body">
                <div class="text-center">

                  <table class="table table-bordered " style="border-color: #a7a7b6;">
                   <thead class="text-center sticky-top align-middle">
                    <tr>
                      <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">No</th>
                      <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">KECAMATAN</th>
                      <th rowspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">KELURAHAN/DESA</th>
                      <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;"><i>Detail Engineering Design</i><br>(DED)</th>
                      <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Rencana Anggaran Biaya<br>(RAB)</th>
                      <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Surat Pernyataan <br> Kesiapan Pelaksanaan <br>Kegiatan </th>
                      <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Bukti legalitas lahan <br> untuk TPS 3R </th>
                      <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Konsep Business Plan <br>pengelolaan TPS 3R <br>pasca konstruksi</th>
                      <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Daftar Calon<br>Penerima Manfaat TPS3R <br> (MIN 200 KK)</th>
                      <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Berita Acara <br> Kesepakatan Warga</th>
                      <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Surat Pernyataan <br> Kesiapan dan Dukungan <br> Biaya Operasi <br> dan Pemeliharaan</th>
                      <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Surat dukungan <br> Dinas Lingkungan Hidup</th>
                      <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">Justifikasi Peningkatan/ <br> Rehabilitasi TPS3R <br> (*untuk rincian menu <br> peningkatan/rehabilitasi TPS3R)</th>
                      <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;">SK Kepala Desa <br> tentang Pembentukan KKP <br> *untuk rincian menu <br> peningkatan/rehabilitasi TPS3R</th>
                      <th colspan='2' style="background-color: #5E767E; color: white; font-size: 10px;"><i>As Build Drawing</i> <br> TPS3R Terbangun</th>
                    </tr>
                    <tr>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                      <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                    </tr>
                  </thead>

                  <tbody class="text-end" id="bodyPembangunanBaru">

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Content of card #4 -->
          <div id="tab-top-4" class="card tab-pane">
            <div class="card-body">
              <div class="text-center">

                <table class="table table-bordered table-lg" style="border-color: #a7a7b6;" >
                 <thead class="text-center sticky-top align-middle">
                  <tr>
                    <th rowspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">No</th>
                    <th rowspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">KECAMATAN</th>
                    <th rowspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">KELURAHAN/DESA</th>
                    <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">DED</th>
                    <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">RAB</th>
                    <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat Pernyataan <br> Kesiapan Pelaksanaan <br> Kegiatan </i></th>
                    <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Bukti <br>legalitas lahan <br>untuk TPS 3R </th>
                    <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Konsep <br>Business Plan <br>pengelolaan TPS 3R <br> pasca konstruksi</th>
                    <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Daftar calon <br>penerima manfaat <br>TPS 3R <br>minimal 200 KK</th>
                    <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Justifikasi teknis <br>kebutuhan <br>peningkatan/rehabilitasi <br> TPS 3R </th>
                    <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat Komitmen <br> Kepala Daerah </th>
                    <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat kesiapan <br> dukungan biaya <br>operasional dan pemeliharaan</th>
                    <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Rincian <br>Kegiatan dan Anggaran <br>alokasi APBD untuk <br> peningkatan kapasitas TPS3R</th>
                    <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Bukti <br>kepemilikan KPP</th>
                  </tr>
                  <tr>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                    <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                  </tr>
                </thead>
                <tbody class="text-end" id="bodyRehabilitasi">

                </tbody>
              </table>
            </div>
          </div>
        </div>



        <!-- Content of card #5 -->
        <div id="tab-top-5" class="card tab-pane">
          <div class="card-body">
            <div class="text-center">

              <table class="table table-bordered table-lg" style="border-color: #a7a7b6;" >
               <thead class="text-center sticky-top align-middle">
                <tr>
                  <th rowspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">No</th>
                  <th rowspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">KECAMATAN</th>
                  <th rowspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">KELURAHAN/DESA</th>
                  <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat <br>Penetapan Lokasi <br>oleh <br> Kepala Daerah</th>
                  <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Bukti <br>legalitas lahan <br> berupa <br>sertifikat lahan</th>
                  <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Kesesuaian <br>dengan RTRW</th>
                  <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat Pernyataan <br>Kesiapan Lembaga Pengelola <br> berupa UPTD, <br>BLUD, BUMD </th>
                  <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">RAB</th>
                  <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">DED</th>
                  <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">PKS</th>
                  <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Dokumen <br> Lingkungan</th>
                  <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Data <br> profil </th>
                  <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Surat pernyataan <br> Komitmen DPRD </th>
                  <th colspan="2" style="background-color: #5E767E; color: white; font-size: 10px;">Kesiapan <br> calon penerima </th>
                </tr>
                <tr>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">FILE</th>
                  <th style="background-color: #5E767E; color: white; font-size: 10px;">LINK</th>
                </tr>
              </thead>

              <tbody class="text-end" id="bodyPembangunan">

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Card Tab -->

</div>
</div>
</div>
</div>
</div>





<?php } ?>
<!-- End Page Selain Pemda -->

<?php if ($this->session->userdata('rkdak_priv') == '1') { ?>
  <!-- Modal File  -->
  <div class="modal modal-blur fade" id="modal_upload_dokumen" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tittle_modal_dok"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="formUploadFileRcSan" action="<?= base_url(); ?>SAN/simpanFileSan" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="kdlokasi" id="kdlokasi">
            <input type="hidden" name="kdkabkota" id="kdkabkota">
            <input type="hidden" name="kdkec" id="kdkec">
            <input type="hidden" name="kddesa" id="kddesa">
            <div class="mb-3">
              <div class="form-label">DED :</div>
              <input type="file" name="ded" id="ded" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 300 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">RAB :</div>
              <input type="file" name="rab" id="rab" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 300 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Spesifikasi Truck Tinja:</div>
              <input type="file" name="spesifikasi" id="spesifikasi" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <i>(Khusu Usulan Truck Tinja)</i>
                <br>
                File : PDF Max Size : 300 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Bukti Kesiapan Lahan :</div>
              <input type="file" name="kesiapan_lahan" id="kesiapan_lahan" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 300 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Daftar Calon Penerima Manfaat :</div>
              <input type="file" name="penerima_manfaat" id="penerima_manfaat" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <i>(Khusu Usulan TPS3R)</i>
                <br>
                File : PDF Max Size : 300 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Business Plan TPS3R :</div>
              <input type="file" name="bp" id="bp" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <i>(Khusu Usulan TPS3R)</i>
                <br>
                File : PDF Max Size : 300 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Surat Pernyataan Kesiapan Desa :</div>
              <input type="file" name="kesiapan_desa" id="kesiapan_desa" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 300 MB.
              </small>
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
  <!-- End Modal File Upload -->


  <!-- Modal IPAL -->
  <div class="modal modal-blur fade" id="modal-ipal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tittle_modal_dok_iplt">Form Tambah Data Air Limbah (SPALD-T dan SPALD-S)</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="formUploadFileRcSanIplt" action="<?= base_url(); ?>SAN/simpanFileSanIpal" method="POST" enctype="multipart/form-data">

            <?php if ($this->session->userdata('is_provinsi')) { ?>

              <div class="mb-3">
                <div class="form-label">Pilih Kabupaten/Kota :</div>
                <select id="klikKabKota_ipal" name="klikKabKota_ipal" class="form-select align-middle w-100" style="width:auto; height: 33px;" >
                  <option value="" selected disabled>--- Pilih Kabupaten/Kota ---</option>
                  <?php foreach ($dataKabKota as $key => $val) { ?>
                    <option value="<?= $val->kdkabkota; ?>"><?= $val->nmkabkota; ?></option>
                  <?php } ?>
                </select>
              </div>

            <?php } ?>




            <div class="mb-3">
              <div class="form-label">Pilih Kecamatan :</div>
              <select id="klikKecamatan_ipal" name="kdkec_ipal" class="form-select align-middle w-100" style="width:auto; height: 33px;" >
                <option value="" selected disabled>--- Pilih Kecamatan ---</option>
                <?php if ($this->session->userdata('is_provinsi')!= true) { ?>
                  <?php foreach ($dataKecamatan as $key => $value) { ?>
                    <option value="<?= $value->kdkec; ?>"><?= $value->nmkec; ?></option>
                  <?php } ?>
                <?php } ?>
              </select>
            </div>

            <div class="mb-3">
              <div class="form-label">Pilih Desa :</div>
              <select id="klikDesa_ipal" name="kddesa_ipal" class="form-select align-middle w-100" style="width:auto; height: 33px;" >
                <option value="" selected disabled>-- Pilih Desa --</option>

              </select>
            </div>

            <hr class="mt-2 mb-2">

            <div class="mb-3">
              <div class="form-label">Template/Konsep Detail Engineering Design (DED) :</div>
              <input type="file" name="ded_ipal" id="ded_ipal" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 30 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Template Rencana Anggaran Biaya (RAB) :</div>
              <input type="file" name="rab_ipal" id="rab_ipal" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 10 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Surat Pernyataan Kesiapan Pelaksanaan Kegiatan dari Pemerintah Desa/Kelurahan :</div>
              <input type="file" name="k_lahan_ipal" id="k_lahan_ipal" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Surat yang didalam isinya terdapat kesiapan lahan dan kesiapan untuk melakukan pembentukan lembaga pengelola</b>
                <br>
                File : PDF Max Size : 5 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Surat Pernyataan Kesiapan Pelaksanaan Kegiatan dari Dinas Kab/Kota
              (Untuk menu Pengembangan dan Pembangunan Sistem Pengelolaan Air Limbah Domestik Terpusat (SPALD-T) - Penuntasan Pembangunan SR di IPALD Skala Kota) :</div>
              <input type="file" name="k_lahan_dinas_ipal" id="k_lahan_dinas_ipal" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Surat yang didalam isinya terdapat kesiapan lahan dan kesiapan untuk melakukan pembentukan lembaga pengelola</b>
                <br>
                File : PDF Max Size : 5 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Daftar calon penerima manfaat  :</div>
              <input type="file" name="penerima_manfaat_ipal" id="penerima_manfaat_ipal" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Untuk menu Pengembangan dan Pembangunan Sistem Pengelolaan Air Limbah Domestik Terpusat (SPALD-T) - Penuntasan Pembangunan SR di IPALD Skala Kota</b>
                <br>
                File : PDF Max Size : 5 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Bukti Kepemilikan dan/atau keberfungsian IPLT  :</div>
              <input type="file" name="spesifikasi_ipal" id="spesifikasi_ipal" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>untuk rincian menu tangki septik individual pedesaan, perkotaan, dan tangki septik komunal (5-10KK)</b>
                <br>
                File : PDF Max Size : 5 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">As Build Drawing Jaringan IPAL terbangun dan rencana pengembangannya  :</div>
              <input type="file" name="abd" id="abd" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>untuk rincian menu penambahan pipa pengumpul dan SR</b>
                <br>
                File : PDF Max Size : 30 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Justifikasi teknis untuk penambahan pipa pengumpul  :</div>
              <input type="file" name="justekPipa" id="justekPipa" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>untuk rincian menu penambahan pipa pengumpul dan SR</b>
                <br>
                File : PDF Max Size : 5 MB.
              </small>
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
  <!-- End Modal IPAL -->

  <!-- Modal Edit IPAL -->
  <div class="modal modal-blur fade" id="modal-ipal-edit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tittle_modal_ipal_edit"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="formUploadFileRcSanIplEdit" action="<?= base_url(); ?>SAN/simpanFileSanIpalEdit" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="idEditIpal" id="idEditIpal">
            <input type="hidden" name="idEditDKecIpal" id="idEditDKecIpal">
            <input type="hidden" name="idEditDesaIpal" id="idEditDesaIpal">

            <div class="mb-3">
              <div class="form-label">Template/Konsep Detail Engineering Design (DED) :</div>
              <input type="file" name="ded_ipal_edit" id="ded_ipal_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 30 MB.
              </small>
            </div>

            <div class="mb-3">
              <div class="form-label">Template Rencana Anggaran Biaya (RAB) :</div>
              <input type="file" name="rab_ipal_edit" id="rab_ipal_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 10 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Surat Pernyataan Kesiapan Pelaksanaan Kegiatan dari Pemerintah Desa/Kelurahan :</div>
              <input type="file" name="k_lahan_ipal_edit" id="k_lahan_ipal_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Surat yang didalam isinya terdapat kesiapan lahan dan kesiapan untuk melakukan pembentukan lembaga pengelola</b>
                <br>
                File : PDF Max Size : 5 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Surat Pernyataan Kesiapan Pelaksanaan Kegiatan dari Dinas Kab/Kota
              (Untuk menu Pengembangan dan Pembangunan Sistem Pengelolaan Air Limbah Domestik Terpusat (SPALD-T) - Penuntasan Pembangunan SR di IPALD Skala Kota) :</div>
              <input type="file" name="k_lahan_dinas_ipal_edit" id="k_lahan_dinas_ipal_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Surat yang didalam isinya terdapat kesiapan lahan dan kesiapan untuk melakukan pembentukan lembaga pengelola</b>
                <br>
                File : PDF Max Size : 5 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Daftar calon penerima manfaat  :</div>
              <input type="file" name="penerima_manfaat_ipal_edit" id="penerima_manfaat_ipal_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Untuk menu Pengembangan dan Pembangunan Sistem Pengelolaan Air Limbah Domestik Terpusat (SPALD-T) - Penuntasan Pembangunan SR di IPALD Skala Kota</b>
                <br>
                File : PDF Max Size : 5 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Bukti Kepemilikan dan/atau keberfungsian IPLT  :</div>
              <input type="file" name="spesifikasi_ipal_edit" id="spesifikasi_ipal_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Untuk rincian menu tangki septik individual pedesaan, perkotaan, dan tangki septik komunal (5-10KK)</b>
                <br>
                File : PDF Max Size : 5 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">As Build Drawing Jaringan IPAL terbangun dan rencana pengembangannya  :</div>
              <input type="file" name="abd_edit" id="abd_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Untuk rincian menu penambahan pipa pengumpul dan SR</b>
                <br>
                File : PDF Max Size : 30 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Justifikasi teknis untuk penambahan pipa pengumpul  :</div>
              <input type="file" name="justekPipa_edit" id="justekPipa_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Untuk rincian menu penambahan pipa pengumpul dan SR</b>
                <br>
                File : PDF Max Size : 5 MB.
              </small>
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
  <!-- End Modal Edit IPAL -->



  <!-- Modal IPLTX -->
  <div class="modal modal-blur fade" id="modal-ipltX" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tittle_modal_dok_iplt">Tambah data - Air Limbah (IPLT dan Truck Tinja)</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="formUploadFileRcSanIpltX" action="<?= base_url(); ?>SAN/simpanFileSanIPLTX" method="POST" enctype="multipart/form-data">

            <?php if ($this->session->userdata('is_provinsi')) { ?>

              <div class="mb-3">
                <div class="form-label">Pilih Kabupaten/Kota :</div>
                <select id="klikKabKota_ipltX" name="klikKabKota_ipltX" class="form-select align-middle w-100" style="width:auto; height: 33px;" >
                  <option value="" selected disabled>--- Pilih Kabupaten/Kota ---</option>
                  <?php foreach ($dataKabKota as $key => $val) { ?>
                    <option value="<?= $val->kdkabkota; ?>"><?= $val->nmkabkota; ?></option>
                  <?php } ?>
                </select>
              </div>

            <?php } ?>


            <div class="mb-3">
              <div class="form-label">Pilih Kecamatan :</div>
              <select id="klikKecamatan_ipltX" name="kdkec_ipltX" class="form-select align-middle w-100" style="width:auto; height: 33px;" >
                <option value="" selected disabled>--- Pilih Kecamatan ---</option>
                <?php if ($this->session->userdata('is_provinsi')!= true) { ?>
                  <?php foreach ($dataKecamatan as $key => $value) { ?>
                    <option value="<?= $value->kdkec; ?>"><?= $value->nmkec; ?></option>
                  <?php } ?>
                <?php } ?>
              </select>
            </div>

            <div class="mb-3">
              <div class="form-label">Pilih Desa :</div>
              <select id="klikDesa_ipltX" name="kddesa_ipltX" class="form-select align-middle w-100" style="width:auto; height: 33px;" >
                <option value="" selected disabled>-- Pilih Desa --</option>

              </select>
            </div>

            <hr class="mt-2 mb-2">

            <div class="mb-3">
              <div class="form-label">Surat Minat dari Kepala Daerah :</div>
              <input type="file" name="mintatKepalaDaerah" id="mintatKepalaDaerah" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
            </div>

            <div class="mb-3">
              <div class="form-label">Surat Penetapan Lokasi oleh Kepala Daerah :</div>
              <input type="file" name="penetapan_ipltx" id="penetapan_ipltx" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
            </div>

            <div class="mb-3">
              <div class="form-label">Surat Pernyataan BPPW :</div>
              <input type="file" name="pernyataanBPPW" id="pernyataanBPPW" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
            </div>

            <div class="mb-3">
              <div class="form-label">Detail Engineering Design (DED) :</div>
              <input type="file" name="ded_ipltx" id="ded_ipltx" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Detail Engineering Design (DED) yang telah disusun/direviu, didampingi serta disetujui oleh Balai PPW Provinsi yang dibuktikan dengan Surat Pernyataan Persetujuan dari Kepala Balai PPW Provinsi yang bersangkutan</b>
                <br>
                File : PDF Max Size : 30 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Rencana Anggaran Biaya (RAB) :</div>
              <input type="file" name="rab_ipltx" id="rab_ipltx" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Rencana Anggaran Biaya (RAB) yang telah disusun/direviu, didampingi serta disetujui oleh Balai PPW Provinsi yang dibuktikan dengan Surat Pernyataan Persetujuan dari Kepala Balai PPW Provinsi yang bersangkutan</b>
                <br>
                File : PDF Max Size : 10 MB.
              </small>
            </div>



            <div class="mb-3">
              <div class="form-label">Bukti legalitas lahan berupa sertifikat lahan :</div>
              <input type="file" name="legalitas_ipltx" id="legalitas_ipltx" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
            </div>


            <div class="mb-3">
              <div class="form-label">Dokumen justifikasi teknis   :</div>
              <input type="file" name="justifikasi_ipltx" id="justifikasi_ipltx" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Laporan/bukti layanan IPLT sudah >75% (catatan logbook lumpur tinja yang masuk IPLT)  dan rencana tambahan layanan (usulan peningkatan IPLT)</b>
                <br>
                File : PDF Max Size : 5 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">MasterPlan/Rencana Induk  :</div>
              <input type="file" name="mp_ipltx" id="mp_ipltx" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 10 MB.
              </small>
            </div>

            <div class="mb-3">
              <div class="form-label">Dokumen Lingkungan :</div>
              <input type="file" name="lingkungan_ipltx" id="lingkungan_ipltx" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Surat Kesiapan Lembaga Pengelola  :</div>
              <input type="file" name="kesiapan_ipltx" id="kesiapan_ipltx" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
            </div>

            <div class="mb-3">
              <div class="form-label">Rencana pengelolaan/business plan IPLT :</div>
              <input type="file" name="businessPlanIPLT" id="businessPlanIPLT" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 10 MB.
              </small>
            </div>

            <div class="mb-3">
              <div class="form-label">Bukti komitmen untuk melaksanaan LLTT :</div>
              <input type="file" name="buktiKomitmenIPLT" id="buktiKomitmenIPLT" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
            </div>

            <div class="mb-3">
              <div class="form-label">As Build Drawing IPLT Terbangun *(untuk rincian menu peningkatan/ rehabilitasi IPLT) :</div>
              <input type="file" name="abd" id="abd" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 30 MB.
              </small>
            </div>

            <div class="mb-3">
              <div class="form-label">Laporan Audit/reviu BPKP *(untuk rincian menu peningkatan/ rehabilitasi IPLT) :</div>
              <input type="file" name="bpkp" id="bpkp" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
            </div>

            <div class="mb-3">
              <div class="form-label">Spesifikasi Teknis dan Harga Supplier Truk Tinja *(untuk rincian menu pengadaan truk tinja) :</div>
              <input type="file" name="sTrukTinja" id="sTrukTinja" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
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
  <!-- End Modal IPLTX -->

  <!-- Modal Edit IPLTX -->
  <div class="modal modal-blur fade" id="modal-ipltX-edit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tittle_modal_dok_iplt-edit">Tambah data - Air Limbah (IPLT dan Truck Tinja)</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="formUploadFileRcSanIpltXEdit" action="<?= base_url(); ?>SAN/simpanFileSanIPLTXEdit" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="idEditIplt" id="idEditIplt">
            <input type="hidden" name="idEditDKecIplt" id="idEditDKecIplt">
            <input type="hidden" name="idEditDesaIplt" id="idEditDesaIplt">

            <div class="mb-3">
              <div class="form-label">Surat Minat dari Kepala Daerah :</div>
              <input type="file" name="mintatKepalaDaerah_edit" id="mintatKepalaDaerah_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
            </div>

            <div class="mb-3">
              <div class="form-label">Surat Penetapan Lokasi oleh Kepala Daerah :</div>
              <input type="file" name="penetapan_ipltx_edit" id="penetapan_ipltx_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
            </div>

            <div class="mb-3">
              <div class="form-label">Surat Pernyataan BPPW :</div>
              <input type="file" name="pernyataanBPPW_edit" id="pernyataanBPPW_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
            </div>


            <div class="mb-3">
              <div class="form-label">Detail Engineering Design (DED) :</div>
              <input type="file" name="ded_ipltx_edit" id="ded_ipltx_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Detail Engineering Design (DED) yang telah disusun/direviu, didampingi serta disetujui oleh Balai PPW Provinsi yang dibuktikan dengan Surat Pernyataan Persetujuan dari Kepala Balai PPW Provinsi yang bersangkutan</b>
                <br>
                File : PDF Max Size : 30 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Rencana Anggaran Biaya (RAB) :</div>
              <input type="file" name="rab_ipltx_edit" id="rab_ipltx_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Rencana Anggaran Biaya (RAB) yang telah disusun/direviu, didampingi serta disetujui oleh Balai PPW Provinsi yang dibuktikan dengan Surat Pernyataan Persetujuan dari Kepala Balai PPW Provinsi yang bersangkutan</b>
                <br>
                File : PDF Max Size : 10 MB.
              </small>
            </div>



            <div class="mb-3">
              <div class="form-label">Bukti legalitas lahan berupa sertifikat lahan :</div>
              <input type="file" name="legalitas_ipltx_edit" id="legalitas_ipltx_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
            </div>


            <div class="mb-3">
              <div class="form-label">Dokumen justifikasi teknis   :</div>
              <input type="file" name="justifikasi_ipltx_edit" id="justifikasi_ipltx_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Laporan/bukti layanan IPLT sudah >75% (catatan logbook lumpur tinja yang masuk IPLT)  dan rencana tambahan layanan (usulan peningkatan IPLT)</b>
                <br>
                File : PDF Max Size : 5 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">MasterPlan/Rencana Induk  :</div>
              <input type="file" name="mp_ipltx_edit" id="mp_ipltx_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 10 MB.
              </small>
            </div>

            <div class="mb-3">
              <div class="form-label">Dokumen Lingkungan :</div>
              <input type="file" name="lingkungan_ipltx_edit" id="lingkungan_ipltx_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                <b>Berupa Dokumen AMDAL/UKL-UPL</b>
                <br>
                File : PDF Max Size : 5 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Surat Kesiapan Lembaga Pengelola  :</div>
              <input type="file" name="kesiapan_ipltx_edit" id="kesiapan_ipltx_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Rencana pengelolaan/business plan IPLT  :</div>
              <input type="file" name="businessPlanIPLT_edit" id="businessPlanIPLT_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 10 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Bukti komitmen untuk melaksanaan LLTT :</div>
              <input type="file" name="buktiKomitmenIPLT_edit" id="buktiKomitmenIPLT_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">As Build Drawing IPLT Terbangun :</div>
              <input type="file" name="abd_edit" id="abd_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 30 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Laporan Audit/reviu BPKP :</div>
              <input type="file" name="bpkp_edit" id="bpkp_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
            </div>
            <div class="mb-3">
              <div class="form-label">Spesifikasi Teknis dan Harga Supplier Truk Tinja :</div>
              <input type="file" name="sTrukTinja_edit" id="sTrukTinja_edit" class="form-control" accept="application/pdf" />
              <small class="form-hint">
                File : PDF Max Size : 5 MB.
              </small>
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
  <!-- End Modal Edit IPLTX -->

  <!-- Modal Pembangunan Baru -->
  <div class="modal modal-blur fade" id="modal-pembangunanBaru" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tittle_modal_dok_iplt">Form Tambah Data Persampahan (Pembangunan dan Peningkatan/Rehabilitasi TPS3R)</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="formUploadFileRcSanPembangunanBaru" action="<?= base_url(); ?>SAN/simpanFileSanPembangunanBaru" method="POST" enctype="multipart/form-data">

           <?php if ($this->session->userdata('is_provinsi')) { ?>

            <div class="mb-3">
              <div class="form-label">Pilih Kabupaten/Kota :</div>
              <select id="klikKabKota_pembangunanBaru" name="klikKabKota_pembangunanBaru" class="form-select align-middle w-100" style="width:auto; height: 33px;" >
                <option value="" selected disabled>--- Pilih Kabupaten/Kota ---</option>
                <?php foreach ($dataKabKota as $key => $val) { ?>
                  <option value="<?= $val->kdkabkota; ?>"><?= $val->nmkabkota; ?></option>
                <?php } ?>
              </select>
            </div>

          <?php } ?>

          <div class="mb-3">
            <div class="form-label">Pilih Kecamatan :</div>
            <select id="klikKecamatan_pembangunanBaru" name="kdkec_pembangunanBaru" class="form-select align-middle w-100" style="width:auto; height: 33px;" >
              <option value="" selected disabled>--- Pilih Kecamatan ---</option>
              <?php if ($this->session->userdata('is_provinsi')!= true) { ?>
                <?php foreach ($dataKecamatan as $key => $value) { ?>
                  <option value="<?= $value->kdkec; ?>"><?= $value->nmkec; ?></option>
                <?php } ?>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <div class="form-label">Pilih Desa :</div>
            <select id="klikDesa_pembangunanBaru" name="kddesa_pembangunanBaru" class="form-select align-middle w-100" style="width:auto; height: 33px;" >
              <option value="" selected disabled>-- Pilih Desa --</option>

            </select>
          </div>

          <hr class="mt-2 mb-2">
          <div class="mb-3">
            <div class="form-label">Template/Konsep Detail Engineering Design (DED) :</div>
            <input type="file" name="ded_pembangunanBaru" id="ded_pembangunanBaru" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 30 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Template Rencana Anggaran Biaya (RAB) :</div>
            <input type="file" name="rab_pembangunanBaru" id="rab_pembangunanBaru" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 10 MB.
            </small>
          </div>



          <div class="mb-3">
            <div class="form-label">Surat Pernyataan Kesiapan Pelaksanaan Kegiatan :</div>
            <input type="file" name="kesiapan_pembangunanBaru" id="kesiapan_pembangunanBaru" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Surat yang didalamnya isinya terdapat kesiapan lahan dan kesiapan untuk melakukan pembentukan lembaga pengelola</b>
              <br>
              File : PDF Max Size : 5 MB.
            </small>
          </div>


          <div class="mb-3">
            <div class="form-label">Bukti legalitas lahan untuk TPS 3R  :</div>
            <input type="file" name="legalitas_pembangunanBaru" id="legalitas_pembangunanBaru" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Berupa Sertifikat/Akta Jual Beli lahan apabila lahan milik pemerintah dan Akta Jual Beli/Akta Hibah untuk kegiatan Pembangunan TPS 3R apabila lahan semula milik masyarakat/pribadi</b>
              <br>
              File : PDF Max Size : 5 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Konsep Business Plan pengelolaan TPS 3R pasca konstruksi :</div>
            <input type="file" name="bp_pembangunanBaru" id="bp_pembangunanBaru" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 10 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Daftar Calon Penerima Manfaat TPS3R (MIN 200 KK) :</div>
            <input type="file" name="penerima_manfaat_pembangunanBaru" id="penerima_manfaat_pembangunanBaru" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">Berita Acara Kesepakatan Warga :</div>
            <input type="file" name="ba_warga" id="ba_warga" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">Surat Pernyataan Kesiapan dan Dukungan Biaya Operasi dan Pemeliharaan :</div>
            <input type="file" name="kesepakatan_oprasi_pemeliharan" id="kesepakatan_oprasi_pemeliharan" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">Surat dukungan Dinas Lingkungan Hidup :</div>
            <input type="file" name="surat_dinas_hidup" id="surat_dinas_hidup" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">Justifikasi Peningkatan/Rehabilitasi TPS3R (*untuk rincian menu peningkatan/rehabilitasi TPS3R) :</div>
            <input type="file" name="justifikasi_TPS_peningkatan" id="justifikasi_TPS_peningkatan" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">SK Kepala Desa tentang Pembentukan KKP (*untuk rincian menu peningkatan/rehabilitasi TPS3R) :</div>
            <input type="file" name="sk_desa_kpp" id="sk_desa_kpp" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">As Build Drawing TPS3R Terbangun (*untuk rincian menu peningkatan/rehabilitasi TPS3R) :</div>
            <input type="file" name="abd" id="abd" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 30 MB.
            </small>
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
<!-- End Modal Pembangunan Baru -->

<!-- Modal Pembangunan Baru -->
<div class="modal modal-blur fade" id="modal-pembangunanBaruEdit" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tittle_modal_pembangunanBaru_Edit"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUploadFileRcSanPembangunanBaruEdit" action="<?= base_url(); ?>SAN/simpanFileSanPembangunanBaruEdit" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="idEditPembangunanBaru" id="idEditPembangunanBaru">
          <input type="hidden" name="idEditDKecPembangunanBaru" id="idEditDKecPembangunanBaru">
          <input type="hidden" name="idEditDesaPembangunanBaru" id="idEditDesaPembangunanBaru">
          <div class="mb-3">
            <div class="form-label">Template/Konsep Detail Engineering Design (DED) :</div>
            <input type="file" name="ded_pembangunanBaru_edit" id="ded_pembangunanBaru_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 30 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Template Rencana Anggaran Biaya (RAB) :</div>
            <input type="file" name="rab_pembangunanBaru_edit" id="rab_pembangunanBaru_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 10 MB.
            </small>
          </div>



          <div class="mb-3">
            <div class="form-label">Surat Pernyataan Kesiapan Pelaksanaan Kegiatan :</div>
            <input type="file" name="kesiapan_pembangunanBaru_edit" id="kesiapan_pembangunanBaru_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Surat yang didalamnya isinya terdapat kesiapan lahan dan kesiapan untuk melakukan pembentukan lembaga pengelola</b>
              <br>
              File : PDF Max Size : 5 MB.
            </small>
          </div>


          <div class="mb-3">
            <div class="form-label">Bukti legalitas lahan untuk TPS 3R  :</div>
            <input type="file" name="legalitas_pembangunanBaru_edit" id="legalitas_pembangunanBaru_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Berupa Sertifikat/Akta Jual Beli lahan apabila lahan milik pemerintah dan Akta Jual Beli/Akta Hibah untuk kegiatan Pembangunan TPS 3R apabila lahan semula milik masyarakat/pribadi</b>
              <br>
              File : PDF Max Size : 5 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Konsep Business Plan pengelolaan TPS 3R pasca konstruksi :</div>
            <input type="file" name="bp_pembangunanBaru_edit" id="bp_pembangunanBaru_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 10 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Daftar Calon Penerima Manfaat TPS3R (MIN 200 KK):</div>
            <input type="file" name="penerima_manfaat_pembangunanBaru_edit" id="penerima_manfaat_pembangunanBaru_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">Berita Acara Kesepakatan Warga :</div>
            <input type="file" name="ba_warga" id="ba_warga" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">Surat Pernyataan Kesiapan dan Dukungan Biaya Operasi dan Pemeliharaan :</div>
            <input type="file" name="kesepakatan_oprasi_pemeliharan" id="kesepakatan_oprasi_pemeliharan" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">Surat dukungan Dinas Lingkungan Hidup :</div>
            <input type="file" name="surat_dinas_hidup_edit" id="surat_dinas_hidup_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">Justifikasi Peningkatan/Rehabilitasi TPS3R (*untuk rincian menu peningkatan/rehabilitasi TPS3R) :</div>
            <input type="file" name="justifikasi_TPS_peningkatan_edit" id="justifikasi_TPS_peningkatan_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">SK Kepala Desa tentang Pembentukan KKP (*untuk rincian menu peningkatan/rehabilitasi TPS3R) :</div>
            <input type="file" name="sk_desa_kpp_edit" id="sk_desa_kpp_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">As Build Drawing TPS3R Terbangun (*untuk rincian menu peningkatan/rehabilitasi TPS3R) :</div>
            <input type="file" name="abd_edit" id="abd_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 30 MB.
            </small>
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
<!-- End Modal Pembangunan Baru -->


<!-- Modal Rehabilitasi -->
<div class="modal modal-blur fade" id="modal-rehabilitasi" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tittle_modal_dok_iplt">Form Tambah Data Persampahan (Rehabilitasi TPS3R)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUploadrehabilitasi" action="<?= base_url(); ?>SAN/simpanFileSanRehabilitasi" method="POST" enctype="multipart/form-data">

          <div class="mb-3">
            <div class="form-label">Pilih Kecamatan :</div>
            <select id="klikKecamatan_rehabilitasi" name="kdkec_rehabilitasi" class="form-select align-middle w-100" style="width:auto; height: 33px;" >
              <option value="" selected disabled>--- Pilih Kecamatan ---</option>
              <?php foreach ($dataKecamatan as $key => $value) { ?>
                <option value="<?= $value->kdkec; ?>"><?= $value->nmkec; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <div class="form-label">Pilih Desa :</div>
            <select id="klikDesa_rehabilitasi" name="kddesa_rehabilitasi" class="form-select align-middle w-100" style="width:auto; height: 33px;" >
              <option value="" selected disabled>-- Pilih Desa --</option>

            </select>
          </div>

          <hr class="mt-2 mb-2">
          <div class="mb-3">
            <div class="form-label">Template/Konsep Detail Engineering Design (DED) :</div>
            <input type="file" name="ded_rehabilitasi" id="ded_rehabilitasi" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Template Rencana Anggaran Biaya (RAB) :</div>
            <input type="file" name="rab_rehabilitasi" id="rab_rehabilitasi" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Surat Pernyataan Kesiapan Pelaksanaan Kegiatan :</div>
            <input type="file" name="kesiapan_rehabilitasi" id="kesiapan_rehabilitasi" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Surat yang didalam isinya terdapat kesiapan lahan dan kesiapan untuk melakukan pembentukan lembaga pengelola</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Bukti legalitas lahan untuk TPS 3R :</div>
            <input type="file" name="legalitas_rehabilitasi" id="legalitas_rehabilitasi" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Berupa Sertifikat/Akta Jual Beli lahan apabila lahan milik pemerintah dan Akta Jual Beli/Akta Hibah untuk kegiatan Pembangunan TPS 3R apabila lahan semula milik masyarakat/pribadi</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Konsep Business Plan pengelolaan TPS 3R pasca konstruksi :</div>
            <input type="file" name="bp_rehabilitasi" id="bp_rehabilitasi" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Daftar calon penerima manfaat TPS 3R minimal 200 KK :</div>
            <input type="file" name="penerima_manfaat_rehabilitasi" id="penerima_manfaat_rehabilitasi" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">Justifikasi teknis kebutuhan peningkatan/rehabilitasi TPS 3R :</div>
            <input type="file" name="justifikasi_rehabilitasi" id="justifikasi_rehabilitasi" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Memuat informasi mengenai kondisi bangunan dan prasarana; informasi jenis pengolahan yang diterapkan oleh TPS3R, baik untuk sampah organik maupun sampah anorganik; informasi mengenai volume timbulan sampah yang dikelola dan volume residu yang diangkut ke TPA/TPST</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Surat Komitmen Kepala Daerah :</div>
            <input type="file" name="komitmen_rehabilitasi" id="komitmen_rehabilitasi" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Memuat komitmen kepala daerah dalam melaksanakan pemicuan masyarakat termasuk rencana kegiatan pendampingan dan pemicuan perubahan perilaku</b>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Surat kesiapan dukungan biaya operasional dan pemeliharaan :</div>
            <input type="file" name="dukungan_rehabilitasi" id="dukungan_rehabilitasi" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Surat kesiapan dukungan biaya operasional dan pemeliharaan yang dikeluarkaan yang dinas terkait.</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Rincian Kegiatan dan Anggaran alokasi APBD untuk peningkatan kapasitas TPS3R :</div>
            <input type="file" name="rincian_anggaran_rehabilitasi" id="rincian_anggaran_rehabilitasi" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Bukti Kepemilikan KPP :</div>
            <input type="file" name="kpp" id="kpp" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>yang dibuktikan dengan kepemilikan SK Pembentukan KPP</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
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
<!-- End Modal Rehabilitasi -->


<!-- Modal Edit Rehabilitasi -->
<div class="modal modal-blur fade" id="modal-rehabilitasi-edit" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tittle_modal_rehabilitasi_edit"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUploadrehabilitasiEdit" action="<?= base_url(); ?>SAN/simpanFileSanRehabilitasiEdit" method="POST" enctype="multipart/form-data">

          <input type="hidden" name="idEditRehabilitasi" id="idEditRehabilitasi">
          <input type="hidden" name="idEditDKecRehabilitasi" id="idEditDKecRehabilitasi">
          <input type="hidden" name="idEditDesaRehabilitasi" id="idEditDesaRehabilitasi">

          <div class="mb-3">
            <div class="form-label">Template/Konsep Detail Engineering Design (DED) :</div>
            <input type="file" name="ded_rehabilitasi_edit" id="ded_rehabilitasi_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Template Rencana Anggaran Biaya (RAB) :</div>
            <input type="file" name="rab_rehabilitasi_edit" id="rab_rehabilitasi_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Surat Pernyataan Kesiapan Pelaksanaan Kegiatan :</div>
            <input type="file" name="kesiapan_rehabilitasi_edit" id="kesiapan_rehabilitasi_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Surat yang didalam isinya terdapat kesiapan lahan dan kesiapan untuk melakukan pembentukan lembaga pengelola</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Bukti legalitas lahan untuk TPS 3R :</div>
            <input type="file" name="legalitas_rehabilitasi_edit" id="legalitas_rehabilitasi_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Berupa Sertifikat/Akta Jual Beli lahan apabila lahan milik pemerintah dan Akta Jual Beli/Akta Hibah untuk kegiatan Pembangunan TPS 3R apabila lahan semula milik masyarakat/pribadi</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Konsep Business Plan pengelolaan TPS 3R pasca konstruksi :</div>
            <input type="file" name="bp_rehabilitasi_edit" id="bp_rehabilitasi_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Daftar calon penerima manfaat TPS 3R minimal 200 KK :</div>
            <input type="file" name="penerima_manfaat_rehabilitasi_edit" id="penerima_manfaat_rehabilitasi_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">Justifikasi teknis kebutuhan peningkatan/rehabilitasi TPS 3R :</div>
            <input type="file" name="justifikasi_rehabilitasi_edit" id="justifikasi_rehabilitasi_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Memuat informasi mengenai kondisi bangunan dan prasarana; informasi jenis pengolahan yang diterapkan oleh TPS3R, baik untuk sampah organik maupun sampah anorganik; informasi mengenai volume timbulan sampah yang dikelola dan volume residu yang diangkut ke TPA/TPST</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Surat Komitmen Kepala Daerah :</div>
            <input type="file" name="komitmen_rehabilitasi_edit" id="komitmen_rehabilitasi_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Memuat komitmen kepala daerah dalam melaksanakan pemicuan masyarakat termasuk rencana kegiatan pendampingan dan pemicuan perubahan perilaku</b>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Surat kesiapan dukungan biaya operasional dan pemeliharaan :</div>
            <input type="file" name="dukungan_rehabilitasi_edit" id="dukungan_rehabilitasi_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Surat kesiapan dukungan biaya operasional dan pemeliharaan yang dikeluarkaan yang dinas terkait.</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Rincian Kegiatan dan Anggaran alokasi APBD untuk peningkatan kapasitas TPS3R :</div>
            <input type="file" name="rincian_anggaran_rehabilitasi_edit" id="rincian_anggaran_rehabilitasi_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Bukti Kepemilikan KPP :</div>
            <input type="file" name="kpp_edit" id="kpp_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>yang dibuktikan dengan kepemilikan SK Pembentukan KPP</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
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
<!-- End Modal Edit Rehabilitasi -->




<!-- Pembangunan -->
<div class="modal modal-blur fade" id="modal-pembangunan" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tittle_modal_dok_iplt">Form Tambah Data Persampahan (Pembangunan TPST)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUploadpembangunan" action="<?= base_url(); ?>SAN/simpanFileSanPembangunan" method="POST" enctype="multipart/form-data">

          <div class="mb-3">
            <div class="form-label">Pilih Kecamatan :</div>
            <select id="klikKecamatan_pembangunan" name="kdkec_pembangunan" class="form-select align-middle w-100" style="width:auto; height: 33px;" >
              <option value="" selected disabled>--- Pilih Kecamatan ---</option>
              <?php foreach ($dataKecamatan as $key => $value) { ?>
                <option value="<?= $value->kdkec; ?>"><?= $value->nmkec; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <div class="form-label">Pilih Desa :</div>
            <select id="klikDesa_pembangunan" name="kddesa_pembangunan" class="form-select align-middle w-100" style="width:auto; height: 33px;" >
              <option value="" selected disabled>-- Pilih Desa --</option>

            </select>
          </div>

          <hr class="mt-2 mb-2">
          <div class="mb-3">
            <div class="form-label">Surat Penetapan Lokasi oleh Kepala Daerah :</div>
            <input type="file" name="penetapan_lokasi_pembangunan" id="penetapan_lokasi_pembangunan" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Bukti legalitas lahan berupa sertifikat lahan :</div>
            <input type="file" name="legalitas_pembangunan" id="legalitas_pembangunan" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Kesesuaian dengan RTRW :</div>
            <input type="file" name="rtrw_pembangunan" id="rtrw_pembangunan" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Surat Pernyataan Kesiapan Lembaga Pengelola berupa UPTD, BLUD, BUMD :</div>
            <input type="file" name="kesiapan_pengelola_pembangunan" id="kesiapan_pengelola_pembangunan" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Surat Pernyataan Kesiapan Lembaga Pengelola berupa UPTD, BLUD, BUMD dengan (melampirkan rincian data SDM serta memuat penyataan Kesiapan Biaya Operasional dan Pemeliharaan dan Pernyataan Kesanggupan untuk menyediakan alat pengangkut sampah terpilah dan/atau penjadwalan pengangkutan sampah terpilah)</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Rencana Anggaran Biaya (RAB) :</div>
            <input type="file" name="rab_pembangunan" id="rab_pembangunan" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label"> Detail Engineering Design (DED) :</div>
            <input type="file" name="ded_pembangunan" id="ded_pembangunan" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">PKS dengan Offtaker :</div>
            <input type="file" name="pks_pembangunan" id="pks_pembangunan" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Dilengkapi Detail teknis spesifikasi offtaker jenis industri, profil perusahaan, lokasi, jarak dengan infrastruktur pengolahan sampah</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Dokumen Lingkungan :</div>
            <input type="file" name="lingkungan_pembangunan" id="lingkungan_pembangunan" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Berupa Dokumen AMDAL/UKL-UPL</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Data profil :</div>
            <input type="file" name="profile_pembangunan" id="profile_pembangunan" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Profil pengelolaan sampah kab/kota menyeluruh mulai dari hulu ke hilir terkait 5 aspek pegelolaan sampah yang terdiri dari dari regulasi, kelembagaan, teknis, keuangan dan peran serta masyarakat termasuk substansi Ketersediaan, jumlah, dan kondisi keberfungsian sarana pengolahan sampah (alat angkut, alat berat, dll); Ketersediaan, jumlah, dan kondisi keberfungsian prasarana pengolahan sampah (TPS3R, TPST, TPA, bank sampah, PDU, dll); Timbulan dan persentase sampah terkumpul menuju prasarana pengolahan sampah; Timbulan sampah dan persentase sampah yang sudah dipilah di prasarana pengolahan sampah; Timbulan dan persentase sampah yang terangkut ke TPA; Ketersediaan alur/ diagram neraca massa sampah</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Surat pernyataan Komitmen DPRD :</div>
            <input type="file" name="dprd_pembangunan" id="dprd_pembangunan" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Surat pernyataan Komitmen DPRD untuk mendanai biaya operasi dan pemeliharaan yang memuat nominal alokasi biaya OP</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Kesiapan calon penerima :</div>
            <input type="file" name="penerima_pembangunan" id="penerima_pembangunan" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Kesiapan calon penerima bantuan berupa kesiapan masyarakat untuk terlayani persampahan dan untuk membayar retribusi sampah; Bukti form kesiapan masyarakat untuk siap melakukan pemilahan sampah, mau terlayani TPST, dan membayar retribusi sampah</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
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
<!-- End Pembangunan -->



<!-- Edit Pembangunan -->
<div class="modal modal-blur fade" id="modal-pembangunan-edit" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tittle_modal_dpembangunan-edit"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUploadpembangunanEdit" action="<?= base_url(); ?>SAN/simpanFileSanPembangunanEdit" method="POST" enctype="multipart/form-data">

          <input type="hidden" name="idEditPembangunan" id="idEditPembangunan">
          <input type="hidden" name="idEditDKecPembangunan" id="idEditDKecPembangunan">
          <input type="hidden" name="idEditDesaPembangunan" id="idEditDesaPembangunan">

          <div class="mb-3">
            <div class="form-label">Surat Penetapan Lokasi oleh Kepala Daerah :</div>
            <input type="file" name="penetapan_lokasi_pembangunan_edit" id="penetapan_lokasi_pembangunan_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Bukti legalitas lahan berupa sertifikat lahan :</div>
            <input type="file" name="legalitas_pembangunan_edit" id="legalitas_pembangunan_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Kesesuaian dengan RTRW :</div>
            <input type="file" name="rtrw_pembangunan_edit" id="rtrw_pembangunan_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Surat Pernyataan Kesiapan Lembaga Pengelola berupa UPTD, BLUD, BUMD :</div>
            <input type="file" name="kesiapan_pengelola_pembangunan_edit" id="kesiapan_pengelola_pembangunan_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Surat Pernyataan Kesiapan Lembaga Pengelola berupa UPTD, BLUD, BUMD dengan (melampirkan rincian data SDM serta memuat penyataan Kesiapan Biaya Operasional dan Pemeliharaan dan Pernyataan Kesanggupan untuk menyediakan alat pengangkut sampah terpilah dan/atau penjadwalan pengangkutan sampah terpilah)</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Rencana Anggaran Biaya (RAB) :</div>
            <input type="file" name="rab_pembangunan_edit" id="rab_pembangunan_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label"> Detail Engineering Design (DED) :</div>
            <input type="file" name="ded_pembangunan_edit" id="ded_pembangunan_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 300 MB.
            </small>
          </div>

          <div class="mb-3">
            <div class="form-label">PKS dengan Offtaker :</div>
            <input type="file" name="pks_pembangunan_edit" id="pks_pembangunan_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Dilengkapi Detail teknis spesifikasi offtaker jenis industri, profil perusahaan, lokasi, jarak dengan infrastruktur pengolahan sampah</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Dokumen Lingkungan :</div>
            <input type="file" name="lingkungan_pembangunan_edit" id="lingkungan_pembangunan_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Berupa Dokumen AMDAL/UKL-UPL</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Data profil :</div>
            <input type="file" name="profile_pembangunan_edit" id="profile_pembangunan_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Profil pengelolaan sampah kab/kota menyeluruh mulai dari hulu ke hilir terkait 5 aspek pegelolaan sampah yang terdiri dari dari regulasi, kelembagaan, teknis, keuangan dan peran serta masyarakat termasuk substansi Ketersediaan, jumlah, dan kondisi keberfungsian sarana pengolahan sampah (alat angkut, alat berat, dll); Ketersediaan, jumlah, dan kondisi keberfungsian prasarana pengolahan sampah (TPS3R, TPST, TPA, bank sampah, PDU, dll); Timbulan dan persentase sampah terkumpul menuju prasarana pengolahan sampah; Timbulan sampah dan persentase sampah yang sudah dipilah di prasarana pengolahan sampah; Timbulan dan persentase sampah yang terangkut ke TPA; Ketersediaan alur/ diagram neraca massa sampah</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Surat pernyataan Komitmen DPRD :</div>
            <input type="file" name="dprd_pembangunan_edit" id="dprd_pembangunan_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Surat pernyataan Komitmen DPRD untuk mendanai biaya operasi dan pemeliharaan yang memuat nominal alokasi biaya OP</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
          </div>
          <div class="mb-3">
            <div class="form-label">Kesiapan calon penerima :</div>
            <input type="file" name="penerima_pembangunan_edit" id="penerima_pembangunan_edit" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              <b>Kesiapan calon penerima bantuan berupa kesiapan masyarakat untuk terlayani persampahan dan untuk membayar retribusi sampah; Bukti form kesiapan masyarakat untuk siap melakukan pemilahan sampah, mau terlayani TPST, dan membayar retribusi sampah</b>
              <br>
              File : PDF Max Size : 300 MB.
            </small>
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
<!-- End Edit Pembangunan -->



<?php } ?>


<!-- Modal Input File SPTJM -->
<div class="modal modal-blur fade" id="modal_input_sptjm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Upload Dokumen SPTJM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUploadFileDPA" action="<?= base_url(); ?>SAN/simpanDokHeaderSan" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <div class="form-label">Input File SPTJM :</div>
            <input type="file" name="sptjm" id="sptjm" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>
        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Input File SPTJM -->

<!-- Modal Input File SSK -->
<div class="modal modal-blur fade" id="modal_ssk" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Upload Dokumen SSK</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUploadFileDPA" action="<?= base_url(); ?>SAN/simpanDokHeaderSan" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <div class="form-label">Input File SSK :</div>
            <input type="file" name="ssk" id="ssk" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 50 MB.
            </small>
          </div>
        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Input File SSK -->

<!-- Modal Input File BA Konsultasi Program -->
<div class="modal modal-blur fade" id="modal_ba" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Upload Dokumen BA Konsultasi Program</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUploadFileDPA" action="<?= base_url(); ?>SAN/simpanDokHeaderSan" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <div class="form-label">Input File BA Konsultasi Program :</div>
            <input type="file" name="ba" id="ba" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>
        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Input File BA Konsultasi Program -->


<!-- Modal Input File Komitmen SSK -->
<div class="modal modal-blur fade" id="modal_komitmen" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Upload Dokumen Komitmen SSK</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUploadFileDPA" action="<?= base_url(); ?>SAN/simpanDokHeaderSan" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <div class="form-label">Input File Komitmen SSK :</div>
            <input type="file" name="komitmen_SSK" id="komitmen_SSK" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>
        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Input File Komitmen SSK-->

<!-- Modal Input File Komitmen SSK -->
<div class="modal modal-blur fade" id="modal_simoni" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Upload Dokumen SIMONI</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="" action="<?= base_url(); ?>SAN/simpanDokHeaderSan" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <div class="form-label">Input File SIMONI :</div>
            <input type="file" name="ba_simoni" id="ba_simoni" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>
        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Input File Komitmen SSK-->

<!-- Modal Input File File Stunting -->
<div class="modal modal-blur fade" id="modal_stanting" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Upload Update SK Stunting</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="" action="<?= base_url(); ?>SAN/simpanDokHeaderSan" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <div class="form-label">Input File Update SK Stunting :</div>
            <input type="file" name="stanting" id="stanting" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>
        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Input File Stunting -->

<!-- Modal Input File Surat Pernyataan Bappenas -->
<div class="modal modal-blur fade" id="modal_bappenas" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Upload Dokumen Surat Pernyataan Bappenas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUploadFileDPA" action="<?= base_url(); ?>SAN/simpanDokHeader" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <div class="form-label">Input File Surat Pernyataan Bappenas :</div>
            <input type="file" name="s_bappenas" id="s_bappenas" class="form-control" accept="application/pdf" />
            <small class="form-hint">
              File : PDF Max Size : 5 MB.
            </small>
          </div>
        </div>
        <div class="modal-footer text-end">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Input File Surat Pernyataan Bappenas -->

<script type="text/javascript">
  $( document ).ready(function() {

    showModaUpload = function (idForm) {

      if (idForm == '1') {
        $('#modal-ipal').modal('show');
      }

      if (idForm == '2') {
        $('#modal-ipltX').modal('show');
      }

      if (idForm == '3') {
        $('#modal-pembangunanBaru').modal('show');
      }

      if (idForm == '4') {
        $('#modal-rehabilitasi').modal('show');
      }

      if (idForm == '5') {
        $('#modal-pembangunan').modal('show');
      }

    }

    hapusDataIpal = function (id) {

      Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Data yang telah dihapus tidak akan bisa dikembalikan.!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus.!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: base_url()+'SAN/hapusIpal',
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
      })

    }


    hapusDataIplt = function (id) {
     Swal.fire({
      title: 'Apakah Anda Yakin?',
      text: "Data yang telah dihapus tidak akan bisa dikembalikan.!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus.!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: base_url()+'SAN/hapusIplt',
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
    })
  }

  hapusDataPembangunanBaru = function (id) {

    Swal.fire({
      title: 'Apakah Anda Yakin?',
      text: "Data yang telah dihapus tidak akan bisa dikembalikan.!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus.!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: base_url()+'SAN/hapusPembangunanBaru',
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
    })

  }


  hapusDataRehabilitasi = function (id) {

    Swal.fire({
      title: 'Apakah Anda Yakin?',
      text: "Data yang telah dihapus tidak akan bisa dikembalikan.!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus.!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: base_url()+'SAN/hapusRehabilitasi',
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
    })

  }


  hapusDataPembangunan = function (id) {

   Swal.fire({
    title: 'Apakah Anda Yakin?',
    text: "Data yang telah dihapus tidak akan bisa dikembalikan.!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, Hapus.!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: base_url()+'SAN/hapusPembangunan',
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
  })

}


editDataIpal = function (nmkec, nmdes, id, kdkec, kddesa) {
  $('#idEditIpal').val(id);
  $('#idEditDKecIpal').val(kdkec);
  $('#idEditDesaIpal').val(kddesa);
  $('#tittle_modal_ipal_edit').text(`Kecamatan : `+nmkec+` Desa : `+nmdes);
  $('#modal-ipal-edit').modal('show');

}

editDataIplt = function (nmkec, nmdes, id, kdkec, kddesa) {
  $('#idEditIplt').val(id);
  $('#idEditDKecIplt').val(kdkec);
  $('#idEditDesaIplt').val(kddesa);
  $('#tittle_modal_dok_iplt-edit').text(`Kecamatan : `+nmkec+` Desa : `+nmdes);
  $('#modal-ipltX-edit').modal('show');

}

editDataPembangunanBaru = function (nmkec, nmdes, id, kdkec, kddesa) {
  $('#idEditPembangunanBaru').val(id);
  $('#idEditDKecPembangunanBaru').val(kdkec);
  $('#idEditDesaPembangunanBaru').val(kddesa);
  $('#tittle_modal_pembangunanBaru_Edit').text(`Kecamatan : `+nmkec+` Desa : `+nmdes);
  $('#modal-pembangunanBaruEdit').modal('show');
}


editDataRehabilitasi = function (nmkec, nmdes, id, kdkec, kddesa) {
  $('#idEditRehabilitasi').val(id);
  $('#idEditDKecRehabilitasi').val(kdkec);
  $('#idEditDesaRehabilitasi').val(kddesa);
  $('#tittle_modal_rehabilitasi_edit').text(`Kecamatan : `+nmkec+` Desa : `+nmdes);
  $('#modal-rehabilitasi-edit').modal('show');
}

editDataPembangunan = function (nmkec, nmdes, id, kdkec, kddesa) {
  $('#idEditPembangunan').val(id);
  $('#idEditDKecPembangunan').val(kdkec);
  $('#idEditDesaPembangunan').val(kddesa);
  $('#tittle_modal_dpembangunan-edit').text(`Kecamatan : `+nmkec+` Desa : `+nmdes);
  $('#modal-pembangunan-edit').modal('show');
}



$('#klikKecamatan_ipal').change(function() {
  let idkec = $(this).val(),
  idkabKota = '';

  <?php if ($this->session->userdata('is_provinsi')) { ?>
    idkabKota = $('#klikKabKota_ipal').val();
  <?php } ?>

  ajaxUntukSemua(base_url()+'SAN/getDataDesaIplt', {idkec,idkabKota}, function(data) {

    let html = `<option value="" selected disabled>-- Pilih Desa --</option>`;

    $.each(data, function(index, val) {

      html += `<option value="`+val.kddesa+`">`+val.nmdesa+`</option>`;

    })

    $('#klikDesa_ipal').html(html);

  }, function(error) {
    console.log('Kesalahan:', error);
    t_error('Ada yg Error : '+error)
  });


});


<?php if ($this->session->userdata('is_provinsi')) { ?>

  $('#klikKabKota_ipal').change(function() {

    let idkabKota = $(this).val();

    ajaxUntukSemua(base_url()+'SAN/getDatakecamatan', {idkabKota}, function(data) {


      let htmlIpltx = `<option value="" selected disabled>-- Pilih Kecamatan --</option>`;

      $.each(data, function(index, val) {

        htmlIpltx += `<option value="`+val.kdkec+`">`+val.nmkec+`</option>`;

      })

      $('#klikKecamatan_ipal').html(htmlIpltx);


    }, function(error) {
      console.log('Kesalahan:', error);
      t_error('Ada yg Error : '+error)
    });



  });


  $('#klikKabKota_ipltX').change(function() {

    let idkabKota = $(this).val();

    ajaxUntukSemua(base_url()+'SAN/getDatakecamatan', {idkabKota}, function(data) {


      let htmlIpltx = `<option value="" selected disabled>-- Pilih Kecamatan --</option>`;

      $.each(data, function(index, val) {

        htmlIpltx += `<option value="`+val.kdkec+`">`+val.nmkec+`</option>`;

      })

      $('#klikKecamatan_ipltX').html(htmlIpltx);


    }, function(error) {
      console.log('Kesalahan:', error);
      t_error('Ada yg Error : '+error)
    });



  });


  $('#klikKabKota_pembangunanBaru').change(function() {

    let idkabKota = $(this).val();

    ajaxUntukSemua(base_url()+'SAN/getDatakecamatan', {idkabKota}, function(data) {


      let htmlIpltx = `<option value="" selected disabled>-- Pilih Kecamatan --</option>`;

      $.each(data, function(index, val) {

        htmlIpltx += `<option value="`+val.kdkec+`">`+val.nmkec+`</option>`;

      })

      $('#klikKecamatan_pembangunanBaru').html(htmlIpltx);


    }, function(error) {
      console.log('Kesalahan:', error);
      t_error('Ada yg Error : '+error)
    });



  });

<?php } ?>


$('#klikKecamatan_ipltX').change(function() {
  let idkec = $(this).val(),
  idkabKota = '';

  <?php if ($this->session->userdata('is_provinsi')) { ?>
    idkabKota = $('#klikKabKota_ipltX').val();
  <?php } ?>

  ajaxUntukSemua(base_url()+'SAN/getDataDesa', {idkec,idkabKota}, function(data) {
    console.log(data)
    let htmlIpltx = `<option value="" selected disabled>-- Pilih Desa --</option>`;

    $.each(data, function(index, val) {

      htmlIpltx += `<option value="`+val.kddesa+`">`+val.nmdesa+`</option>`;

    })

    $('#klikDesa_ipltX').html(htmlIpltx);

  }, function(error) {
    console.log('Kesalahan:', error);
    t_error('Ada yg Error : '+error)
  });


});

$('#klikKecamatan_pembangunanBaru').change(function() {
  let idkec = $(this).val(),
  idkabKota = '';

  <?php if ($this->session->userdata('is_provinsi')) { ?>
    idkabKota = $('#klikKabKota_pembangunanBaru').val();
  <?php } ?>

  ajaxUntukSemua(base_url()+'SAN/getDataDesa', {idkec,idkabKota}, function(data) {

    let htmlIpltx = `<option value="" selected disabled>-- Pilih Desa --</option>`;

    $.each(data, function(index, val) {

      htmlIpltx += `<option value="`+val.kddesa+`">`+val.nmdesa+`</option>`;

    })

    $('#klikDesa_pembangunanBaru').html(htmlIpltx);

  }, function(error) {
    console.log('Kesalahan:', error);
    t_error('Ada yg Error : '+error)
  });


});


$('#klikKecamatan_rehabilitasi').change(function() {
  let idkec = $(this).val();

  ajaxUntukSemua(base_url()+'SAN/getDataDesa', {idkec}, function(data) {

    let htmlIpltx = `<option value="" selected disabled>-- Pilih Desa --</option>`;

    $.each(data, function(index, val) {

      htmlIpltx += `<option value="`+val.kddesa+`">`+val.nmdesa+`</option>`;

    })

    $('#klikDesa_rehabilitasi').html(htmlIpltx);

  }, function(error) {
    console.log('Kesalahan:', error);
    t_error('Ada yg Error : '+error)
  });


});

$('#klikKecamatan_pembangunan').change(function() {
  let idkec = $(this).val();

  ajaxUntukSemua(base_url()+'SAN/getDataDesa', {idkec}, function(data) {

    let htmlIpltx = `<option value="" selected disabled>-- Pilih Desa --</option>`;

    $.each(data, function(index, val) {

      htmlIpltx += `<option value="`+val.kddesa+`">`+val.nmdesa+`</option>`;

    })

    $('#klikDesa_pembangunan').html(htmlIpltx);

  }, function(error) {
    console.log('Kesalahan:', error);
    t_error('Ada yg Error : '+error)
  });


});


showUploadHeader = function(idModal) {

  if (idModal == '1') {
    $('#modal_input_sptjm').modal('show');  
  }

  if (idModal == '2') {
    $('#modal_ssk').modal('show');
  }

  if (idModal == '3') {
    $('#modal_ba').modal('show');
  }

  if (idModal == '4') {
    $('#modal_komitmen').modal('show');
  }

  if (idModal == '5') {
    $('#modal_simoni').modal('show');
  }

  if (idModal == '6') {
    $('#modal_stanting').modal('show');
  }  

}


    // Js Pemda
<?php if ($this->session->userdata('rkdak_priv') == '1') { ?>

  showUploadModal = function (kec, des, kdlokasi, kdkabkota, kdkec, kddesa) {

    let tittle = `Kecamatan : `+kec+` Desa : `+des;
    $('#tittle_modal_dok').text(tittle);
    $('#kdlokasi').val(kdlokasi);
    $('#kdkabkota').val(kdkabkota);
    $('#kdkec').val(kdkec);
    $('#kddesa').val(kddesa);

    $('#modal_upload_dokumen').modal('show')

  }

  showUploadModalIplt = function (kec, des, kdlokasi, kdkabkota, kdkec, kddesa) {

    let tittle = `Kecamatan : `+kec+` Desa : `+des;
    $('#tittle_modal_dok_iplt').text(tittle);
    $('#kdlokasi_iplt').val(kdlokasi);
    $('#kdkabkota_iplt').val(kdkabkota);
    $('#kdkec_iplt').val(kdkec);
    $('#kddesa_iplt').val(kddesa);
    $('#modal_upload_dokumen_iplt').modal('show')
  }

      // IPLT
  $('#formUploadFileRcSanIpltX').submit(function() {

        // penetapan lokasi
    let filePenetapanLokasi = $('#penetapan_ipltx').val().replace(/C:\\fakepath\\/i, '');

    if (filePenetapanLokasi != '') {
     let filePenetapanLokasiSize = document.getElementById("penetapan_ipltx").files[0],
     extension = filePenetapanLokasi.split('.').pop().toLowerCase();

     if (extension != 'pdf') {
      t_error('File Surat Penetapan Lokasi oleh Kepala Daerah Harus PDF');
      return false;
    }

    if(filePenetapanLokasiSize.size > 300000000){
      t_error('File Surat Penetapan Lokasi oleh Kepala Daerah Melebihi 300 MB.!');
      return false;
    }
  }
      // End penetapan lokasi


// surat kesiapan dinas
  let fileKesiapanDinas = $('#k_lahan_dinas_ipal').val().replace(/C:\\fakepath\\/i, '');

  if (fileKesiapanDinas != '') {
   let fileKesiapanDinasSize = document.getElementById("k_lahan_dinas_ipal").files[0],
   extension = fileKesiapanDinas.split('.').pop().toLowerCase();

   if (extension != 'pdf') {
    t_error('File Surat Pernyataan Kesiapan Pelaksanaan Kegiatan dari Dinas Kab/Kota (Untuk menu Pengembangan dan Pembangunan Sistem Pengelolaan Air Limbah Domestik Terpusat (SPALD-T) - Penuntasan Pembangunan SR di IPALD Skala Kota) Harus PDF');
    return false;
  }

  if(fileKesiapanDinasSize.size > 300000000){
    t_error('File Surat Pernyataan Kesiapan Pelaksanaan Kegiatan dari Dinas Kab/Kota (Untuk menu Pengembangan dan Pembangunan Sistem Pengelolaan Air Limbah Domestik Terpusat (SPALD-T) - Penuntasan Pembangunan SR di IPALD Skala Kota) Melebihi 300 MB.!');
    return false;
  }
}
// End kesiapan dinas

      // penetapan Legalitas
let fileLegalitas = $('#legalitas_ipltx').val().replace(/C:\\fakepath\\/i, '');

if (fileLegalitas != '') {
 let fileLegalitasSize = document.getElementById("legalitas_ipltx").files[0],
 extension = fileLegalitas.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File Bukti legalitas lahan berupa sertifikat lahan Harus PDF');
  return false;
}

if(fileLegalitasSize.size > 300000000){
  t_error('File Bukti legalitas lahan berupa sertifikat lahan Melebihi 300 MB.!');
  return false;
}
}
      // End Legalitas  

        // Ded
let fileDed = $('#ded_ipltx').val().replace(/C:\\fakepath\\/i, '');

if (fileDed != '') {
 let fileDedSize = document.getElementById("ded_ipltx").files[0],
 extension = fileDed.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File DED Harus PDF');
  return false;
}

if(fileDedSize.size > 300000000){
  t_error('File DED Melebihi 300 MB.!');
  return false;
}
}
      // End Ded


      // RAB
let fileRab = $('#rab_ipltx').val().replace(/C:\\fakepath\\/i, '');

if (fileRab != '') {
 let fileRabSize = document.getElementById("rab_ipltx").files[0],
 extension = fileRab.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File RAB Harus PDF');
  return false;
}

if(fileRabSize.size > 300000000){
  t_error('File RAB Melebihi 300 MB.!');
  return false;
}
}
      // End RAB


    // Justifikasi
let fileJustifikasi = $('#justifikasi_ipltx').val().replace(/C:\\fakepath\\/i, '');

if (fileJustifikasi != '') {
 let fileJustifikasiSize = document.getElementById("justifikasi_ipltx").files[0],
 extension = fileJustifikasi.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File Dokumen justifikasi teknis  Harus PDF');
  return false;
}

if(fileJustifikasiSize.size > 300000000){
  t_error('File Dokumen justifikasi teknis  Melebihi 300 MB.!');
  return false;
}
}
      // End Justifikasi


 // MP
let fileMp = $('#mp_ipltx').val().replace(/C:\\fakepath\\/i, '');

if (fileMp != '') {
 let fileMpSize = document.getElementById("mp_ipltx").files[0],
 extension = fileMp.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File MasterPlan/Rencana Induk Harus PDF');
  return false;
}

if(fileMpSize.size > 300000000){
  t_error('File MasterPlan/Rencana Induk Melebihi 300 MB.!');
  return false;
}
}
// End MP

// Lingkungan
let fileLingkungan = $('#lingkungan_ipltx').val().replace(/C:\\fakepath\\/i, '');

if (fileLingkungan != '') {
 let fileLingkunganSize = document.getElementById("lingkungan_ipltx").files[0],
 extension = fileLingkungan.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File Dokumen Lingkungan Harus PDF');
  return false;
}

if(fileLingkunganSize.size > 300000000){
  t_error('File Dokumen Lingkungan Melebihi 300 MB.!');
  return false;
}
}
// End Lingkungan


// Kesiapan Lahan
let fileKesiapanLahan = $('#kesiapan_ipltx').val().replace(/C:\\fakepath\\/i, '');

if (fileKesiapanLahan != '') {
 let fileKesiapanLahanSize = document.getElementById("kesiapan_ipltx").files[0],
 extension = fileKesiapanLahan.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File Surat Kesiapan Lembaga Pengelola Harus PDF');
  return false;
}

if(fileKesiapanLahanSize.size > 300000000){
  t_error('File Surat Kesiapan Lembaga Pengelola Melebihi 300 MB.!');
  return false;
}
}
// End Kesiapan Lahan


let kdkec = $('#klikKecamatan_ipltX').val(),
kddesa = $('#klikDesa_ipltX').val();


if (kdkec == null) {
  t_error('Silakan Pilih Kecamatan Terlebih Dahulu.!');
  return false; 
}

if (kddesa == null) {
  t_error('Silakan Pilih Desa Terlebih Dahulu.!');
  return false; 
}


if (fileLegalitas=='' && filePenetapanLokasi == '' && fileDed == '' && fileRab=='' && fileJustifikasi=='' && fileMp=='' && fileLingkungan=='' && fileKesiapanLahan=='' && fileKesiapanDinas=='') {
  t_error('Silakan Masukan File Terlebih Dahulu.!');
  return false; 
}

});
// Validasi IPLT

// Validasi Pembangunan Baru
          $('#formUploadFileRcSanPembangunanBaru').submit(function() {



// DED
            let fileDed = $('#ded_pembangunanBaru').val().replace(/C:\\fakepath\\/i, '');

            if (fileDed != '') {
             let fileDedSize = document.getElementById("ded_pembangunanBaru").files[0],
             extension = fileDed.split('.').pop().toLowerCase();

             if (extension != 'pdf') {
              t_error('File Ded Harus PDF');
              return false;
            }

            if(fileDedSize.size > 300000000){
              t_error('File Ded Melebihi 300 MB.!');
              return false;
            }
          }
// End DED


// RAB
          let fileRAB = $('#rab_pembangunanBaru').val().replace(/C:\\fakepath\\/i, '');

          if (fileRAB != '') {
           let fileRABSize = document.getElementById("rab_pembangunanBaru").files[0],
           extension = fileRAB.split('.').pop().toLowerCase();

           if (extension != 'pdf') {
            t_error('File RAB Harus PDF');
            return false;
          }

          if(fileRABSize.size > 300000000){
            t_error('File RAB Melebihi 300 MB.!');
            return false;
          }
        }
// End RAB

// Kesiapan
        let fileKesiapan = $('#kesiapan_pembangunanBaru').val().replace(/C:\\fakepath\\/i, '');

        if (fileKesiapan != '') {
         let fileKesiapanSize = document.getElementById("kesiapan_pembangunanBaru").files[0],
         extension = fileKesiapan.split('.').pop().toLowerCase();

         if (extension != 'pdf') {
          t_error('File Surat Pernyataan Kesiapan Pelaksanaan Kegiatan Harus PDF');
          return false;
        }

        if(fileKesiapanSize.size > 300000000){
          t_error('File Surat Pernyataan Kesiapan Pelaksanaan Kegiatan Melebihi 300 MB.!');
          return false;
        }
      }
// End Kesiapan


// Legalitas
      let fileLegalitas = $('#legalitas_pembangunanBaru').val().replace(/C:\\fakepath\\/i, '');

      if (fileLegalitas != '') {
       let fileLegalitasSize = document.getElementById("legalitas_pembangunanBaru").files[0],
       extension = fileLegalitas.split('.').pop().toLowerCase();

       if (extension != 'pdf') {
        t_error('File Bukti legalitas lahan untuk TPS 3R Harus PDF');
        return false;
      }

      if(fileLegalitasSize.size > 300000000){
        t_error('File Bukti legalitas lahan untuk TPS 3R Melebihi 300 MB.!');
        return false;
      }
    }
// End Legalitas


// Bp
    let fileBp = $('#bp_pembangunanBaru').val().replace(/C:\\fakepath\\/i, '');

    if (fileBp != '') {
      let fileBpSize = document.getElementById("bp_pembangunanBaru").files[0],
      extension = fileBp.split('.').pop().toLowerCase();

      if (extension != 'pdf') {
        t_error('File Konsep Business Plan pengelolaan TPS 3R pasca konstruksi Harus PDF');
        return false;
      }

      if(fileBpSize.size > 300000000){
        t_error('File Konsep Business Plan pengelolaan TPS 3R pasca konstruksi Melebihi 300 MB.!');
        return false;
      }
    }
// End bp


// Penerima Manfaat
    let filePenerimaManfaat = $('#penerima_manfaat_pembangunanBaru').val().replace(/C:\\fakepath\\/i, '');

    if (filePenerimaManfaat != '') {
      let filePenerimaManfaatSize = document.getElementById("penerima_manfaat_pembangunanBaru").files[0],
      extension = filePenerimaManfaat.split('.').pop().toLowerCase();

      if (extension != 'pdf') {
        t_error('File Daftar calon penerima manfaat TPS 3R minimal 200 KK konstruksi Harus PDF');
        return false;
      }

      if(filePenerimaManfaatSize.size > 300000000){
        t_error('File Daftar calon penerima manfaat TPS 3R minimal 200 KK konstruksi Melebihi 300 MB.!');
        return false;
      }
    }
// End Penerima Manfaat

    let kdkec = $('#klikKecamatan_pembangunanBaru').val(),
    kddesa = $('#klikDesa_pembangunanBaru').val();

    if (kdkec == null) {
      t_error('Silakan Pilih Kecamatan Terlebih Dahulu.!');
      return false; 
    }

    if (kddesa == null) {
      t_error('Silakan Pilih Desa Terlebih Dahulu.!');
      return false; 
    }

    if (fileDed=='' && fileRAB == '' && fileKesiapan == '' && fileLegalitas=='' && fileBp=='' && filePenerimaManfaat=='') {
      t_error('Silakan Masukan File Terlebih Dahulu.!');
      return false; 
    }

  })
// End Validasi Pembangunan baru


          $('#formUploadFileRcSanIplt').submit(function() {


        // Ded
            let fileDed = $('#ded_ipal').val().replace(/C:\\fakepath\\/i, '');

            if (fileDed != '') {
             let fileDedSize = document.getElementById("ded_ipal").files[0],
             extension = fileDed.split('.').pop().toLowerCase();

             if (extension != 'pdf') {
              t_error('File DED Harus PDF');
              return false;
            }

            if(fileDedSize.size > 300000000){
              t_error('File DED Melebihi 300 MB.!');
              return false;
            }
          }
      // End Ded


      // RAB
          let fileRab = $('#rab_ipal').val().replace(/C:\\fakepath\\/i, '');

          if (fileRab != '') {
           let fileRabSize = document.getElementById("rab_ipal").files[0],
           extension = fileRab.split('.').pop().toLowerCase();

           if (extension != 'pdf') {
            t_error('File RAB Harus PDF');
            return false;
          }

          if(fileRabSize.size > 300000000){
            t_error('File RAB Melebihi 300 MB.!');
            return false;
          }
        }
      // End RAB


    // penetapan Kesiapan Lahan
        let fileKesiapanLahan = $('#k_lahan_ipal').val().replace(/C:\\fakepath\\/i, '');

        if (fileKesiapanLahan != '') {
         let fileKesiapanLahanSize = document.getElementById("k_lahan_ipal").files[0],
         extension = fileKesiapanLahan.split('.').pop().toLowerCase();

         if (extension != 'pdf') {
          t_error('File Surat Pernyataan Kesiapan Pelaksanaan Kegiatan Harus PDF');
          return false;
        }

        if(fileKesiapanLahanSize.size > 300000000){
          t_error('File Surat Pernyataan Kesiapan Pelaksanaan Kegiatan Melebihi 300 MB.!');
          return false;
        }
      }
      // End Kesiapan Lahan

    // Penerima Manfaat
      let filePenerimaManfaat = $('#penerima_manfaat_ipal').val().replace(/C:\\fakepath\\/i, '');

      if (filePenerimaManfaat != '') {
       let filePenerimaManfaatSize = document.getElementById("penerima_manfaat_ipal").files[0],
       extension = filePenerimaManfaat.split('.').pop().toLowerCase();

       if (extension != 'pdf') {
        t_error('File Daftar calon penerima manfaat Harus PDF');
        return false;
      }

      if(filePenerimaManfaatSize.size > 300000000){
        t_error('File Daftar calon penerima manfaat Melebihi 300 MB.!');
        return false;
      }
    }
      // End Penerima Manfaat



    // Master Spesifikasi
    let fileSpesifikasiIpal = $('#spesifikasi_ipal').val().replace(/C:\\fakepath\\/i, '');

    if (fileSpesifikasiIpal != '') {
     let fileSpesifikasiIpalSize = document.getElementById("spesifikasi_ipal").files[0],
     extension = fileSpesifikasiIpal.split('.').pop().toLowerCase();

     if (extension != 'pdf') {
      t_error('File Spesifikasi Teknis dan harga supplier truk tinja Harus PDF');
      return false;
    }

    if(fileSpesifikasiIpalSize.size > 300000000){
      t_error('File Spesifikasi Teknis dan harga supplier truk tinja Melebihi 300 MB.!');
      return false;
    }
  }
      // End Master Spesifikasi



  let kdkec = $('#klikKecamatan_ipal').val(),
  kddesa = $('#klikDesa_ipal').val();

  if (kdkec == null) {

    t_error('Silakan Pilih Kecamatan Terlebih Dahulu.!');
    return false; 

  }


  if (kddesa == null) {

    t_error('Silakan Pilih Desa Terlebih Dahulu.!');
    return false; 

  }


  if (fileDed == '' && fileRab=='' && fileKesiapanLahan=='' && filePenerimaManfaat=='' && fileSpesifikasiIpal=='') {
    t_error('Silakan Masukan File Terlebih Dahulu.!');
    return false; 
  }

})      
// End Upload Js



// Rehabilitasi
          $('#formUploadrehabilitasi').submit(function() {


        // Ded
            let fileDed = $('#ded_rehabilitasi').val().replace(/C:\\fakepath\\/i, '');

            if (fileDed != '') {
             let fileDedSize = document.getElementById("ded_rehabilitasi").files[0],
             extension = fileDed.split('.').pop().toLowerCase();

             if (extension != 'pdf') {
              t_error('File DED Harus PDF');
              return false;
            }

            if(fileDedSize.size > 300000000){
              t_error('File DED Melebihi 300 MB.!');
              return false;
            }
          }
      // End Ded


      // RAB
          let fileRab = $('#rab_rehabilitasi').val().replace(/C:\\fakepath\\/i, '');

          if (fileRab != '') {
           let fileRabSize = document.getElementById("rab_rehabilitasi").files[0],
           extension = fileRab.split('.').pop().toLowerCase();

           if (extension != 'pdf') {
            t_error('File RAB Harus PDF');
            return false;
          }

          if(fileRabSize.size > 300000000){
            t_error('File RAB Melebihi 300 MB.!');
            return false;
          }
        }
      // End RAB


// penetapan Kesiapan Lahan
        let fileKesiapanLahan = $('#kesiapan_rehabilitasi').val().replace(/C:\\fakepath\\/i, '');

        if (fileKesiapanLahan != '') {
         let fileKesiapanLahanSize = document.getElementById("kesiapan_rehabilitasi").files[0],
         extension = fileKesiapanLahan.split('.').pop().toLowerCase();

         if (extension != 'pdf') {
          t_error('File Surat Pernyataan Kesiapan Pelaksanaan Kegiatan Harus PDF');
          return false;
        }

        if(fileKesiapanLahanSize.size > 300000000){
          t_error('File Surat Pernyataan Kesiapan Pelaksanaan Kegiatan Melebihi 300 MB.!');
          return false;
        }
      }
// End Kesiapan Lahan

// Legalitas
      let fileLegalitasLahan = $('#legalitas_rehabilitasi').val().replace(/C:\\fakepath\\/i, '');

      if (fileLegalitasLahan != '') {
       let fileLegalitasLahanSize = document.getElementById("legalitas_rehabilitasi").files[0],
       extension = fileLegalitasLahan.split('.').pop().toLowerCase();

       if (extension != 'pdf') {
        t_error('File Bukti legalitas lahan untuk TPS 3R  Harus PDF');
        return false;
      }

      if(fileLegalitasLahanSize.size > 300000000){
        t_error('File Bukti legalitas lahan untuk TPS 3R  Melebihi 300 MB.!');
        return false;
      }
    }
// End Legalitas



// Master Spesifikasi
    let filebp = $('#bp_rehabilitasi').val().replace(/C:\\fakepath\\/i, '');

    if (filebp != '') {
     let filebpSize = document.getElementById("bp_rehabilitasi").files[0],
     extension = filebp.split('.').pop().toLowerCase();

     if (extension != 'pdf') {
      t_error('File Konsep Business Plan pengelolaan TPS 3R pasca konstruksi Harus PDF');
      return false;
    }

    if(filebpSize.size > 300000000){
      t_error('File Konsep Business Plan pengelolaan TPS 3R pasca konstruksi Melebihi 300 MB.!');
      return false;
    }
  }
// End Master Spesifikasi


// Penerima Manfaat
  let filePenerimaManfaat = $('#penerima_manfaat_rehabilitasi').val().replace(/C:\\fakepath\\/i, '');

  if (filePenerimaManfaat != '') {
   let filePenerimaManfaatSize = document.getElementById("penerima_manfaat_rehabilitasi").files[0],
   extension = filePenerimaManfaat.split('.').pop().toLowerCase();

   if (extension != 'pdf') {
    t_error('File Konsep Daftar calon penerima manfaat TPS 3R minimal 200 KK Harus PDF');
    return false;
  }

  if(filePenerimaManfaatSize.size > 300000000){
    t_error('File Konsep Daftar calon penerima manfaat TPS 3R minimal 200 KK Melebihi 300 MB.!');
    return false;
  }
}
// End Penerima Manfaat


// justifikasi
let fileJustifikasi = $('#justifikasi_rehabilitasi').val().replace(/C:\\fakepath\\/i, '');

if (fileJustifikasi != '') {
 let fileJustifikasiSize = document.getElementById("justifikasi_rehabilitasi").files[0],
 extension = fileJustifikasi.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File Justifikasi teknis kebutuhan peningkatan/rehabilitasi TPS 3R Harus PDF');
  return false;
}

if(fileJustifikasiSize.size > 300000000){
  t_error('File Justifikasi teknis kebutuhan peningkatan/rehabilitasi TPS 3R Melebihi 300 MB.!');
  return false;
}
}
// End justifikasi


// Kepala Daerah
let fileKomitmen = $('#komitmen_rehabilitasi').val().replace(/C:\\fakepath\\/i, '');

if (fileKomitmen != '') {
 let fileKomitmenSize = document.getElementById("komitmen_rehabilitasi").files[0],
 extension = fileKomitmen.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File Surat Komitmen Kepala Daerah Harus PDF');
  return false;
}

if(fileKomitmenSize.size > 300000000){
  t_error('File Surat Komitmen Kepala Daerah Melebihi 300 MB.!');
  return false;
}
}
// End Kepala Daerah


// Dukungan Biaya
let fileDukunganBiaya = $('#dukungan_rehabilitasi').val().replace(/C:\\fakepath\\/i, '');

if (fileDukunganBiaya != '') {
 let fileDukunganBiayaSize = document.getElementById("dukungan_rehabilitasi").files[0],
 extension = fileDukunganBiaya.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File Surat kesiapan dukungan biaya operasional dan pemeliharaan Harus PDF');
  return false;
}

if(fileDukunganBiayaSize.size > 300000000){
  t_error('File Surat kesiapan dukungan biaya operasional dan pemeliharaan Melebihi 300 MB.!');
  return false;
}
}
// End Dukungan Biaya


// APBD
let fileAPBD = $('#rincian_anggaran_rehabilitasi').val().replace(/C:\\fakepath\\/i, '');

if (fileAPBD != '') {
 let fileAPBDSize = document.getElementById("rincian_anggaran_rehabilitasi").files[0],
 extension = fileAPBD.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File Rincian Kegiatan dan Anggaran alokasi APBD untuk peningkatan kapasitas TPS3R Harus PDF');
  return false;
}

if(fileAPBDSize.size > 300000000){
  t_error('File Rincian Kegiatan dan Anggaran alokasi APBD untuk peningkatan kapasitas TPS3R Melebihi 300 MB.!');
  return false;
}
}
// End DAPBD

// KPP
let fileKPP = $('#kpp').val().replace(/C:\\fakepath\\/i, '');

if (fileKPP != '') {
 let fileKPPSize = document.getElementById("kpp").files[0],
 extension = fileKPP.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File Rincian Kegiatan dan Anggaran alokasi APBD untuk peningkatan kapasitas TPS3R Harus PDF');
  return false;
}

if(fileKPPSize.size > 300000000){
  t_error('File Rincian Kegiatan dan Anggaran alokasi APBD untuk peningkatan kapasitas TPS3R Melebihi 300 MB.!');
  return false;
}
}
// End KPP



let kdkec = $('#klikKecamatan_rehabilitasi').val(),
kddesa = $('#klikDesa_rehabilitasi').val();

if (kdkec == null) {

  t_error('Silakan Pilih Kecamatan Terlebih Dahulu.!');
  return false; 

}


if (kddesa == null) {

  t_error('Silakan Pilih Desa Terlebih Dahulu.!');
  return false; 
  
}


if (fileDed == '' && fileRab=='' && fileKesiapanLahan=='' && fileLegalitasLahan=='' && filebp=='' && filePenerimaManfaat=='' && fileJustifikasi=='' && fileKomitmen=='' && fileDukunganBiaya=='' && fileAPBD=='' && fileKPP == '') {
  t_error('Silakan Masukan File Terlebih Dahulu.!');
  return false; 
}

})      
// End Rehabilitasi



// Pembangunan
          $('#formUploadpembangunan').submit(function() {


// penetapan lokasi
            let filePenetapanLokasi = $('#penetapan_lokasi_pembangunan').val().replace(/C:\\fakepath\\/i, '');

            if (filePenetapanLokasi != '') {
             let filePenetapanLokasiSize = document.getElementById("penetapan_lokasi_pembangunan").files[0],
             extension = filePenetapanLokasi.split('.').pop().toLowerCase();

             if (extension != 'pdf') {
              t_error('File Surat Penetapan Lokasi oleh Kepala Daerah Harus PDF');
              return false;
            }

            if(filePenetapanLokasiSize.size > 300000000){
              t_error('File Surat Penetapan Lokasi oleh Kepala Daerah Melebihi 300 MB.!');
              return false;
            }
          }
// End penetapan lokasi


// Legalitas
          let fileLegalitas = $('#legalitas_pembangunan').val().replace(/C:\\fakepath\\/i, '');

          if (fileLegalitas != '') {
           let fileLegalitasSize = document.getElementById("legalitas_pembangunan").files[0],
           extension = fileLegalitas.split('.').pop().toLowerCase();

           if (extension != 'pdf') {
            t_error('File Bukti legalitas lahan berupa sertifikat lahan Harus PDF');
            return false;
          }

          if(fileLegalitasSize.size > 300000000){
            t_error('File Bukti legalitas lahan berupa sertifikat lahan Melebihi 300 MB.!');
            return false;
          }
        }
// End Legalitas


// RTRW
        let filertrw = $('#rtrw_pembangunan').val().replace(/C:\\fakepath\\/i, '');

        if (filertrw != '') {
         let filertrwSize = document.getElementById("rtrw_pembangunan").files[0],
         extension = filertrw.split('.').pop().toLowerCase();

         if (extension != 'pdf') {
          t_error('File Kesesuaian dengan RTRW Harus PDF');
          return false;
        }

        if(filertrwSize.size > 300000000){
          t_error('File Kesesuaian dengan RTRW Melebihi 300 MB.!');
          return false;
        }
      }
// End RTRW

// Kesiapan Lembaga
      let fileKesiapanLembaga = $('#kesiapan_pengelola_pembangunan').val().replace(/C:\\fakepath\\/i, '');

      if (fileKesiapanLembaga != '') {
       let fileKesiapanLembagaSize = document.getElementById("kesiapan_pengelola_pembangunan").files[0],
       extension = fileKesiapanLembaga.split('.').pop().toLowerCase();

       if (extension != 'pdf') {
        t_error('File Surat Pernyataan Kesiapan Lembaga Pengelola berupa UPTD, BLUD, BUMD Harus PDF');
        return false;
      }

      if(fileKesiapanLembagaSize.size > 300000000){
        t_error('File Surat Pernyataan Kesiapan Lembaga Pengelola berupa UPTD, BLUD, BUMD Melebihi 300 MB.!');
        return false;
      }
    }
// End Kesiapan Lembaga



// RAB
    let fileRab = $('#rab_pembangunan').val().replace(/C:\\fakepath\\/i, '');

    if (fileRab != '') {
     let fileRabSize = document.getElementById("rab_pembangunan").files[0],
     extension = fileRab.split('.').pop().toLowerCase();

     if (extension != 'pdf') {
      t_error('File RAB Harus PDF');
      return false;
    }

    if(fileRabSize.size > 300000000){
      t_error('File RAB Melebihi 300 MB.!');
      return false;
    }
  }
// End RAB


// DED
  let fileDED = $('#ded_pembangunan').val().replace(/C:\\fakepath\\/i, '');

  if (fileDED != '') {
   let fileDEDSize = document.getElementById("ded_pembangunan").files[0],
   extension = fileDED.split('.').pop().toLowerCase();

   if (extension != 'pdf') {
    t_error('File DED Harus PDF');
    return false;
  }

  if(fileDEDSize.size > 300000000){
    t_error('File DED Melebihi 300 MB.!');
    return false;
  }
}
// End DED


// PKS
let filePks = $('#pks_pembangunan').val().replace(/C:\\fakepath\\/i, '');

if (filePks != '') {
 let filePksSize = document.getElementById("pks_pembangunan").files[0],
 extension = filePks.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File PKS dengan Offtaker Harus PDF');
  return false;
}

if(filePksSize.size > 300000000){
  t_error('File PKS dengan Offtaker Melebihi 300 MB.!');
  return false;
}
}
// End PKS


// Dokumen Lingkungan
let fileDokuemnLingkungan = $('#lingkungan_pembangunan').val().replace(/C:\\fakepath\\/i, '');

if (fileDokuemnLingkungan != '') {
  let fileDokuemnLingkunganSize = document.getElementById("lingkungan_pembangunan").files[0],
  extension = fileDokuemnLingkungan.split('.').pop().toLowerCase();

  if (extension != 'pdf') {
    t_error('File Dokumen Lingkungan Harus PDF');
    return false;
  }

  if(fileDokuemnLingkunganSize.size > 300000000){
    t_error('File Dokumen Lingkungan Melebihi 300 MB.!');
    return false;
  }
}
// End Dokumen Lingkungan


// Data profil
let fileDataProfil = $('#profile_pembangunan').val().replace(/C:\\fakepath\\/i, '');

if (fileDataProfil != '') {
 let fileDataProfilSize = document.getElementById("profile_pembangunan").files[0],
 extension = fileDataProfil.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File Data profil Harus PDF');
  return false;
}

if(fileDataProfilSize.size > 300000000){
  t_error('File Data profil Melebihi 300 MB.!');
  return false;
}
}
// End Data profil


// DPRD
let prDprd = $('#dprd_pembangunan').val().replace(/C:\\fakepath\\/i, '');

if (prDprd != '') {
 let FileprDprdSize = document.getElementById("dprd_pembangunan").files[0],
 extension = prDprd.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File Surat pernyataan Komitmen DPRD Harus PDF');
  return false;
}

if(FileprDprdSize.size > 300000000){
  t_error('File Surat pernyataan Komitmen DPRD Melebihi 300 MB.!');
  return false;
}
}
// End DPRD


// Penerima Manfaat
let filePenerimaManfaat = $('#penerima_pembangunan').val().replace(/C:\\fakepath\\/i, '');

if (filePenerimaManfaat != '') {
 let filePenerimaManfaatSize = document.getElementById("penerima_pembangunan").files[0],
 extension = filePenerimaManfaat.split('.').pop().toLowerCase();

 if (extension != 'pdf') {
  t_error('File Kesiapan calon penerima Harus PDF');
  return false;
}

if(filePenerimaManfaatSize.size > 300000000){
  t_error('File Kesiapan calon penerima Melebihi 300 MB.!');
  return false;
}
}
// End Penerima Manfaat



let kdkec = $('#klikKecamatan_pembangunan').val(),
kddesa = $('#klikDesa_pembangunan').val();

if (kdkec == null) {
  t_error('Silakan Pilih Kecamatan Terlebih Dahulu.!');
  return false; 
}


if (kddesa == null) {
  t_error('Silakan Pilih Desa Terlebih Dahulu.!');
  return false; 
}


if (filePenetapanLokasi == '' && fileLegalitas=='' && filertrw=='' && fileKesiapanLembaga=='' && fileRab=='' && fileDED=='' && filePks=='' && fileDokuemnLingkungan=='' && fileDataProfil=='' && prDprd=='' && filePenerimaManfaat=='') {
  t_error('Silakan Masukan File Terlebih Dahulu.!');
  return false; 
}

}) 
// End Pembangunan

        <?php } ?>
    // Js Pemda


    // Js Selain Pemda
        <?php if ($this->session->userdata('rkdak_priv') != '1') { ?>
          $.LoadingOverlaySetup({
            background: "rgba(0, 0, 0, 0.4)",
            text: "",
          });


          getDataTableConten = function () {

            var kdlokasi = $("#provinsi option:selected").val(),
            kdkabkota =  $("#kabkota option:selected").val();


            if (kdkabkota == '') {
              t_error('Silakan Pilih Provinsi/kabupaten Kota Terlebih Dahulu.!')
              return;
            }

            $.LoadingOverlay("show");

            ajaxUntukSemua(base_url()+'SAN/getDataTableSan', {kdlokasi, kdkabkota}, function(data) {
              console.log(data);

              let nmprovinsi = $("#provinsi option:selected").text().toUpperCase(),
              nmkabkota = $("#kabkota option:selected").text().toUpperCase();

              $('#nmprovinsi').text('PROVINSI '+nmprovinsi);
              $('#nmkabkota').text(nmkabkota);


      // Set Header
              if (data.dataHeader && data.dataHeader.sptjm != null) {
                $('#icon-sptjm').html(`<a type="button">
                  <i class="fa-solid fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('`+data.dataHeader.sptjm+`')"></i>
                  </a>`);
              }else{
                $('#icon-sptjm').html('');
              }

              if (data.dataHeader && data.dataHeader.ssk != null) {
                $('#icon-ssk').html(`<a type="button">
                  <i class="fa-solid fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('`+data.dataHeader.ssk+`')"></i>
                  </a>`);
              }else{
                $('#icon-ssk').html('');
              }


              if (data.dataHeader && data.dataHeader.ba != null) {
                $('#icon-ba').html(`<a type="button">
                  <i class="fa-solid fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('`+data.dataHeader.ba+`')"></i>
                  </a>`);
              }else{
                $('#icon-ba').html('');
              }

              if (data.dataHeader && data.dataHeader.komitmen_ssk != null) {
                $('#icon-komitmen').html(`<a type="button">
                  <i class="fa-solid fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('`+data.dataHeader.komitmen_ssk+`')"></i>
                  </a>`);
              }else{
                $('#icon-komitmen').html('');
              }

              if (data.dataHeader && data.dataHeader.ba_simoni != null) {
                $('#icon-ba-simoni').html(`<a type="button">
                  <i class="fa-solid fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('`+data.dataHeader.ba_simoni+`')"></i>
                  </a>`);
              }else{
                $('#icon-ba-simoni').html('');
              }

              if (data.dataHeader && data.dataHeader.stanting != null) {
                $('#icon-stanting').html(`<a type="button">
                  <i class="fa-solid fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('`+data.dataHeader.stanting+`')"></i>
                  </a>`);
              }else{
                $('#icon-stanting').html('');
              }

          // End Set Header

// Set Body Ipal
              let tbody = '',
              no=1;

              $.each(data.ipal, function(index, val) {

                let ded = `<button class="btn btn-icon btn-danger" onclick="showPdf('${(val.ded_ipal != null) ? val.ded_ipal.replace(/'/g, ","):''}')">
                <i class="fa-solid fas fa-file-pdf fa-lg"></i>
                </button>`,
                dedCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.ded_ipal+`')">
                <i class="fas fa-copy fa-lg"></i>
                </button>`,

                rab = `<button class="btn btn-icon btn-danger" onclick="showPdf('${(val.rab_ipal != null) ? val.rab_ipal.replace(/'/g, ",") : ''}')">
                <i class="fa-solid fas fa-file-pdf fa-lg"></i>
                </button>`,
                rabCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.rab_ipal+`')">
                <i class="fas fa-copy fa-lg"></i>
                </button>`,

                k_pelaksanaan = `<button class="btn btn-icon btn-danger" onclick="showPdf('${(val.k_lahan_ipal != null) ? val.k_lahan_ipal.replace(/'/g, ",") : ''}')">
                <i class="fa-solid fas fa-file-pdf fa-lg"></i>
                </button>`,
                k_pelaksanaanCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.k_lahan_ipal+`')">
                <i class="fas fa-copy fa-lg"></i>
                </button>`,

                k_pelaksanaandinas = `<button class="btn btn-icon btn-danger" onclick="showPdf('${(val.k_lahan_dinas_ipal != null) ? val.k_lahan_dinas_ipal.replace(/'/g, ",") : ''}')">
                <i class="fa-solid fas fa-file-pdf fa-lg"></i>
                </button>`,
                k_pelaksanaandinasCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('${(val.k_lahan_dinas_ipal != null) ? val.k_lahan_dinas_ipal.replace(/'/g, ","):''}')">
                <i class="fas fa-copy fa-lg"></i>
                </button>`,

                penerima_manfaat = `<button class="btn btn-icon btn-danger" onclick="showPdf('${(val.penerima_manfaat_ipal != null) ? val.penerima_manfaat_ipal.replace(/'/g, ","):''}')">
                <i class="fa-solid fas fa-file-pdf fa-lg"></i>
                </button>`,
                penerima_manfaatCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.penerima_manfaat_ipal+`')">
                <i class="fas fa-copy fa-lg"></i>
                </button>`,

                spesifikasi_ipal = `<button class="btn btn-icon btn-danger" onclick="showPdf('${(val.spesifikasi_ipal != null) ? val.spesifikasi_ipal.replace(/'/g, ","):''}')">
                <i class="fa-solid fas fa-file-pdf fa-lg"></i>
                </button>`,
                spesifikasi_ipalCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.spesifikasi_ipal+`')">
                <i class="fas fa-copy fa-lg"></i>
                </button>`;

                abd = `<button class="btn btn-icon btn-danger" onclick="showPdf('${(val.abd != null) ? val.abd.replace(/'/g, ","):''}')">
                <i class="fa-solid fas fa-file-pdf fa-lg"></i>
                </button>`,
                abdCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.abd+`')">
                <i class="fas fa-copy fa-lg"></i>
                </button>`;

                justekPipa = `<button class="btn btn-icon btn-danger" onclick="showPdf('${(val.justekPipa != null) ? val.justekPipa.replace(/'/g, ","):''}')">
                <i class="fa-solid fas fa-file-pdf fa-lg"></i>
                </button>`,
                justekPipaCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.justekPipa+`')">
                <i class="fas fa-copy fa-lg"></i>
                </button>`;


                tbody += `<tr>`;
                tbody += `<td class='text-center'>`+no+`</td>`;
                tbody += `<td class='text-center'>`+ val.nmkec +`</td>`;
                tbody += `<td class='text-center'>`+ val.nmdesa +`</td>`;
                tbody += `<td class='text-center'>`+ (val.ded_ipal != null && val.ded_ipal != '' ? ded : "") +`</td>`;
                tbody += `<td class='text-center'>`+ (val.ded_ipal != null && val.ded_ipal != '' ? dedCopy : "") +`</td>`;
                tbody += `<td class='text-center'>`+ (val.rab_ipal != null && val.rab_ipal != '' ? rab : "") +`</td>`;
                tbody += `<td class='text-center'>`+ (val.rab_ipal != null && val.rab_ipal != ''  ? rabCopy : "") +`</td>`;
                tbody += `<td class='text-center'>`+ (val.k_lahan_ipal != null && val.k_lahan_ipal != '' ? k_pelaksanaan : '') +`</td>`;
                tbody += `<td class='text-center'>`+ (val.k_lahan_ipal != null && val.k_lahan_ipal != '' ? k_pelaksanaanCopy : '') +`</td>`;
                tbody += `<td class='text-center'>`+ (val.k_lahan_dinas_ipal != null && val.k_lahan_dinas_ipal != '' ? k_pelaksanaandinas : '') +`</td>`;
                tbody += `<td class='text-center'>`+ (val.k_lahan_dinas_ipal != null && val.k_lahan_dinas_ipal != '' ? k_pelaksanaandinasCopy : '') +`</td>`;        
                tbody += `<td class='text-center'>`+ (val.penerima_manfaat_ipal != null && val.penerima_manfaat_ipal != '' ? penerima_manfaat : '') +`</td>`;
                tbody += `<td class='text-center'>`+ (val.penerima_manfaat_ipal != null && val.penerima_manfaat_ipal != '' ? penerima_manfaatCopy : '') +`</td>`;
                tbody += `<td class='text-center'>`+ (val.spesifikasi_ipal != null && val.spesifikasi_ipal != '' ? spesifikasi_ipal : '') +`</td>`;
                tbody += `<td class='text-center'>`+ (val.spesifikasi_ipal != null && val.spesifikasi_ipal != '' ? spesifikasi_ipalCopy : '') +`</td>`;
                tbody += `<td class='text-center'>`+ (val.abd != null && val.abd != '' ? abd : '') +`</td>`;
                tbody += `<td class='text-center'>`+ (val.abd != null && val.abd != '' ? abdCopy : '') +`</td>`;
                tbody += `<td class='text-center'>`+ (val.justekPipa != null && val.justekPipa != '' ? justekPipa : '') +`</td>`;
                tbody += `<td class='text-center'>`+ (val.justekPipa != null && val.justekPipa != '' ? justekPipaCopy : '') +`</td>`;

                tbody += `</tr>`;

                no++;
              }); 

          $('#bodyIpal').html(tbody);
// End Set Body Ipal


// Set Body Iplt
          let tbodyIplt = '',
          noIplt=1;

          $.each(data.iplt, function(index, val) {

            let penetapan_ipltx = (val.penetapan_ipltx != null || val.penetapan_ipltx != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.penetapan_ipltx+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>` : ``,
            penetapan_ipltxCopy = (val.penetapan_ipltx != null || val.penetapan_ipltx != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.penetapan_ipltx+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>` : '',

            ded_ipltx = (val.ded_ipltx != null || val.ded_ipltx != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.ded_ipltx+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>` : ``,
            ded_ipltxCopy = (val.ded_ipltx != null || val.ded_ipltx != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.ded_ipltx+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>` : ``,

            rab_ipltx = (val.rab_ipltx != null || val.rab_ipltx != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.rab_ipltx+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>` : '',
            rab_ipltxCopy = (val.rab_ipltx != null || val.rab_ipltx != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.rab_ipltx+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>` : '',

            legalitas_ipltx = (val.legalitas_ipltx != null || val.legalitas_ipltx != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.legalitas_ipltx+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>` : '',
            legalitas_ipltxCopy = (val.legalitas_ipltx != null || val.legalitas_ipltx != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.legalitas_ipltx+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>` : '',

            justifikasi_ipltx = (val.justifikasi_ipltx != null || val.justifikasi_ipltx != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.justifikasi_ipltx+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>` : ``,
            justifikasi_ipltxCopy = (val.justifikasi_ipltx != null || val.justifikasi_ipltx != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.justifikasi_ipltx+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>` : ``,

            audit_ipltx = (val.audit_ipltx != null || val.audit_ipltx != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.audit_ipltx+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>` : ``,
            audit_ipltxCopy = (val.audit_ipltx != null || val.audit_ipltx != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.audit_ipltx+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`:``,

            mp_ipltx = (val.mp_ipltx != null || val.mp_ipltx != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.mp_ipltx+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>` : ``,
            mp_ipltxCopy = (val.mp_ipltx != null || val.mp_ipltx != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.mp_ipltx+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`:``,

            lingkungan_ipltx = (val.lingkungan_ipltx != null || val.lingkungan_ipltx != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.lingkungan_ipltx+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>` :``,
            lingkungan_ipltxCopy = (val.lingkungan_ipltx != null || val.lingkungan_ipltx != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.lingkungan_ipltx+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>` :``,

            kesiapan_ipltx = (val.kesiapan_ipltx != null || val.kesiapan_ipltx != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.kesiapan_ipltx+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>` :``,
            kesiapan_ipltxCopy = (val.kesiapan_ipltx != null || val.kesiapan_ipltx != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.kesiapan_ipltx+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`:``,

            kesiapan_biaya_ipltx = (val.kesiapan_biaya_ipltx != null || val.kesiapan_biaya_ipltx != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.kesiapan_biaya_ipltx+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`:``,
            kesiapan_biaya_ipltxCopy = (val.kesiapan_biaya_ipltx != null || val.kesiapan_biaya_ipltx != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.kesiapan_biaya_ipltx+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>` :``;

            mintatKepalaDaerah = (val.mintatKepalaDaerah != null || val.mintatKepalaDaerah != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.mintatKepalaDaerah+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`:``;
            mintatKepalaDaerahCopy = (val.mintatKepalaDaerah != null || val.mintatKepalaDaerah != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.mintatKepalaDaerah+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>` :``;

            pernyataanBPPW = (val.pernyataanBPPW != null || val.pernyataanBPPW != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.pernyataanBPPW+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`:``;
            pernyataanBPPWCopy = (val.pernyataanBPPW != null || val.pernyataanBPPW != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.pernyataanBPPW+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>` :``;

            businessPlanIPLT = (val.businessPlanIPLT != null || val.businessPlanIPLT != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.businessPlanIPLT+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`:``;
            businessPlanIPLTCopy = (val.businessPlanIPLT != null || val.businessPlanIPLT != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.businessPlanIPLT+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>` :``;

            buktiKomitmenIPLT = (val.buktiKomitmenIPLT != null || val.buktiKomitmenIPLT != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.buktiKomitmenIPLT+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`:``;
            buktiKomitmenIPLTCopy = (val.buktiKomitmenIPLT != null || val.buktiKomitmenIPLT != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.buktiKomitmenIPLT+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>` :``;

            abd = (val.abd != null || val.abd != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.abd+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`:``;
            abdCopy = (val.abd != null || val.abd != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.abd+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>` :``;

            bpkp = (val.bpkp != null || val.bpkp != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.bpkp+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`:``;
            bpkpCopy = (val.bpkp != null || val.bpkp != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.bpkp+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>` :``;

            sTrukTinja = (val.sTrukTinja != null || val.sTrukTinja != '') ? `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.sTrukTinja+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`:``;
            sTrukTinjaCopy = (val.sTrukTinja != null || val.sTrukTinja != '') ? `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.sTrukTinja+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>` :``;



            tbodyIplt += `<tr>`;
            tbodyIplt += `<td class='text-center'>`+noIplt+`</td>`;
            tbodyIplt += `<td class='text-center'>`+ val.nmkec +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ val.nmdesa +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.mintatKepalaDaerah != null ? mintatKepalaDaerah : "") +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.mintatKepalaDaerah != null ? mintatKepalaDaerahCopy : "") +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.penetapan_ipltx != null ? penetapan_ipltx : "") +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.penetapan_ipltx != null ? penetapan_ipltxCopy : "") +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.pernyataanBPPW != null ? pernyataanBPPW : "") +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.pernyataanBPPW != null ? pernyataanBPPWCopy : "") +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.ded_ipltx != null ? ded_ipltx : "") +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.ded_ipltx != null ? ded_ipltxCopy : "") +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.rab_ipltx != null ? rab_ipltx : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.rab_ipltx != null ? rab_ipltxCopy : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.legalitas_ipltx != null ? legalitas_ipltx : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.legalitas_ipltx != null ? legalitas_ipltxCopy : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.justifikasi_ipltx != null ? justifikasi_ipltx : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.justifikasi_ipltx != null ? justifikasi_ipltxCopy : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.mp_ipltx != null ? mp_ipltx : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.mp_ipltx != null ? mp_ipltxCopy : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.lingkungan_ipltx != null ? lingkungan_ipltx : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.lingkungan_ipltx != null ? lingkungan_ipltxCopy : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.kesiapan_ipltx != null ? kesiapan_ipltx : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.kesiapan_ipltx != null ? kesiapan_ipltxCopy : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.businessPlanIPLT != null ? businessPlanIPLT : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.businessPlanIPLT != null ? businessPlanIPLTCopy : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.buktiKomitmenIPLT != null ? buktiKomitmenIPLT : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.buktiKomitmenIPLT != null ? buktiKomitmenIPLTCopy : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.abd != null ? abd : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.abd != null ? abdCopy : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.bpkp != null ? bpkp : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.bpkp != null ? bpkpCopy : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.sTrukTinja != null ? sTrukTinja : '') +`</td>`;
            tbodyIplt += `<td class='text-center'>`+ (val.sTrukTinja != null ? sTrukTinjaCopy : '') +`</td>`;

            tbodyIplt += `</tr>`;

            noIplt++;
          }); 

          $('#bodyIPLT').html(tbodyIplt);
// End Set Body Iplt


// Set Body PembangunanBaru
          let tbodyPembangunanBaru = '',
          noPembangunanBaru=1;

          $.each(data.pembangunanBaru, function(index, val) {

            let ded_pembangunanBaru = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.ded_pembangunanBaru+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            ded_pembangunanBaruCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.ded_pembangunanBaru+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            rab_pembangunanBaru = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.rab_pembangunanBaru+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            rab_pembangunanBaruCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.rab_pembangunanBaru+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            kesiapan_pembangunanBaru = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.kesiapan_pembangunanBaru+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            kesiapan_pembangunanBaruCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.kesiapan_pembangunanBaru+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            legalitas_pembangunanBaru = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.legalitas_pembangunanBaru+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            legalitas_pembangunanBaruCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.legalitas_pembangunanBaru+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            bp_pembangunanBaru = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.bp_pembangunanBaru+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            bp_pembangunanBaruCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.bp_pembangunanBaru+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            penerima_manfaat_pembangunanBaru = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.penerima_manfaat_pembangunanBaru+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            penerima_manfaat_pembangunanBaruCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.penerima_manfaat_pembangunanBaru+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`;

            ba_warga = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.ba_warga+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`;
            ba_wargaCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.ba_warga+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`;

            kesepakatan_oprasi_pemeliharan = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.kesepakatan_oprasi_pemeliharan+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`;
            kesepakatan_oprasi_pemeliharanCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.kesepakatan_oprasi_pemeliharan+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`;

            surat_dinas_hidup = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.surat_dinas_hidup+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`;
            surat_dinas_hidupCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.surat_dinas_hidup+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`;

            justifikasi_TPS_peningkatan = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.justifikasi_TPS_peningkatan+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`;
            justifikasi_TPS_peningkatanCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.justifikasi_TPS_peningkatan+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`;

            sk_desa_kpp = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.sk_desa_kpp+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`;
            sk_desa_kppCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.sk_desa_kpp+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`;

            abd = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.abd+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`;
            abdCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.abd+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`;



            tbodyPembangunanBaru += `<tr>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+noPembangunanBaru+`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ val.nmkec +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ val.nmdesa +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.ded_pembangunanBaru != null ? ded_pembangunanBaru : "") +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.ded_pembangunanBaru != null ? ded_pembangunanBaruCopy : "") +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.rab_pembangunanBaru != null ? rab_pembangunanBaru : "") +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.rab_pembangunanBaru != null ? rab_pembangunanBaruCopy : "") +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.kesiapan_pembangunanBaru != null ? kesiapan_pembangunanBaru : '') +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.kesiapan_pembangunanBaru != null ? kesiapan_pembangunanBaruCopy : '') +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.legalitas_pembangunanBaru != null ? legalitas_pembangunanBaru : '') +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.legalitas_pembangunanBaru != null ? legalitas_pembangunanBaruCopy : '') +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.bp_pembangunanBaru != null ? bp_pembangunanBaru : '') +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.bp_pembangunanBaru != null ? bp_pembangunanBaruCopy : '') +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.penerima_manfaat_pembangunanBaru != null ? penerima_manfaat_pembangunanBaru : '') +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.penerima_manfaat_pembangunanBaru != null ? penerima_manfaat_pembangunanBaruCopy : '') +`</td>`;

            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.ba_warga != null ? ba_warga : '') +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.ba_warga != null ? ba_wargaCopy : '') +`</td>`;

            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.kesepakatan_oprasi_pemeliharan != null ? kesepakatan_oprasi_pemeliharan : '') +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.kesepakatan_oprasi_pemeliharan != null ? kesepakatan_oprasi_pemeliharanCopy : '') +`</td>`;

            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.surat_dinas_hidup != null ? surat_dinas_hidup : '') +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.surat_dinas_hidup != null ? surat_dinas_hidupCopy : '') +`</td>`;

            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.justifikasi_TPS_peningkatan != null ? justifikasi_TPS_peningkatan : '') +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.justifikasi_TPS_peningkatan != null ? justifikasi_TPS_peningkatanCopy : '') +`</td>`;

            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.sk_desa_kpp != null ? sk_desa_kpp : '') +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.sk_desa_kpp != null ? sk_desa_kppCopy : '') +`</td>`;

            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.abd != null ? abd : '') +`</td>`;
            tbodyPembangunanBaru += `<td class='text-center'>`+ (val.abd != null ? abdCopy : '') +`</td>`;


            tbodyPembangunanBaru += `</tr>`;

            noPembangunanBaru++;
          }); 

          $('#bodyPembangunanBaru').html(tbodyPembangunanBaru);
// End Set Body PembangunanBaru


// Set Body Rehabilitasi
          let tbodyRehabiltasi = '',
          noRehabiltasi=1;

          $.each(data.rehabilitasi, function(index, val) {

            let ded_rehabilitasi = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.ded_rehabilitasi+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            ded_rehabilitasiCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.ded_rehabilitasi+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            rab_rehabilitasi = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.rab_rehabilitasi+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            rab_rehabilitasiCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.rab_rehabilitasi+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            kesiapan_rehabilitasi = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.kesiapan_rehabilitasi+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            kesiapan_rehabilitasiCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.kesiapan_rehabilitasi+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            legalitas_rehabilitasi = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.legalitas_rehabilitasi+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            legalitas_rehabilitasiCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.legalitas_rehabilitasi+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            bp_rehabilitasi = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.bp_rehabilitasi+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            bp_rehabilitasiCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.bp_rehabilitasi+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            penerima_manfaat_rehabilitasi = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.penerima_manfaat_rehabilitasi+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            penerima_manfaat_rehabilitasiCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.penerima_manfaat_rehabilitasi+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            justifikasi_rehabilitasi = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.justifikasi_rehabilitasi+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            justifikasi_rehabilitasiCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.justifikasi_rehabilitasi+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            komitmen_rehabilitasi = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.komitmen_rehabilitasi+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            komitmen_rehabilitasiCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.komitmen_rehabilitasi+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            dukungan_rehabilitasi = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.dukungan_rehabilitasi+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            dukungan_rehabilitasiCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.dukungan_rehabilitasi+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            rincian_anggaran_rehabilitasi = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.rincian_anggaran_rehabilitasi+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            rincian_anggaran_rehabilitasiCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.rincian_anggaran_rehabilitasi+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            kpp = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.kpp+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            kppCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.kpp+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`;



            tbodyRehabiltasi += `<tr>`;
            tbodyRehabiltasi += `<td class='text-center'>`+noRehabiltasi+`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ val.nmkec +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ val.nmdesa +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.ded_rehabilitasi != null ? ded_rehabilitasi : "") +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.ded_rehabilitasi != null ? ded_rehabilitasiCopy : "") +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.rab_rehabilitasi != null ? rab_rehabilitasi : "") +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.rab_rehabilitasi != null ? rab_rehabilitasiCopy : "") +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.kesiapan_rehabilitasi != null ? kesiapan_rehabilitasi : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.kesiapan_rehabilitasi != null ? kesiapan_rehabilitasiCopy : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.legalitas_rehabilitasi != null ? legalitas_rehabilitasi : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.legalitas_rehabilitasi != null ? legalitas_rehabilitasiCopy : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.bp_rehabilitasi != null ? bp_rehabilitasi : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.bp_rehabilitasi != null ? bp_rehabilitasiCopy : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.penerima_manfaat_rehabilitasi != null ? penerima_manfaat_rehabilitasi : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.penerima_manfaat_rehabilitasi != null ? penerima_manfaat_rehabilitasiCopy : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.justifikasi_rehabilitasi != null ? justifikasi_rehabilitasi : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.justifikasi_rehabilitasi != null ? justifikasi_rehabilitasiCopy : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.komitmen_rehabilitasi != null ? komitmen_rehabilitasi : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.komitmen_rehabilitasi != null ? komitmen_rehabilitasiCopy : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.dukungan_rehabilitasi != null ? dukungan_rehabilitasi : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.dukungan_rehabilitasi != null ? dukungan_rehabilitasiCopy : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.rincian_anggaran_rehabilitasi != null ? rincian_anggaran_rehabilitasi : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.rincian_anggaran_rehabilitasi != null ? rincian_anggaran_rehabilitasiCopy : '') +`</td>`;

            tbodyRehabiltasi += `<td class='text-center'>`+ (val.kpp != null ? kpp : '') +`</td>`;
            tbodyRehabiltasi += `<td class='text-center'>`+ (val.kpp != null ? kppCopy : '') +`</td>`;
            tbodyRehabiltasi += `</tr>`;

            noRehabiltasi++;
          }); 

          $('#bodyRehabilitasi').html(tbodyRehabiltasi);
// End Set Body Rehabilitasi


// Set Body pembangunan
          let tbodyPembangunan = '',
          noPembangunan=1;

          $.each(data.pembangunan, function(index, val) {

            let penetapan_lokasi_pembangunan = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.penetapan_lokasi_pembangunan+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            penetapan_lokasi_pembangunanCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.penetapan_lokasi_pembangunan+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            legalitas_pembangunan = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.legalitas_pembangunan+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            legalitas_pembangunanCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.legalitas_pembangunan+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            rtrw_pembangunan = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.rtrw_pembangunan+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            rtrw_pembangunanCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.rtrw_pembangunan+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            kesiapan_pengelola_pembangunan = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.kesiapan_pengelola_pembangunan+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            kesiapan_pengelola_pembangunanCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.kesiapan_pengelola_pembangunan+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            rab_pembangunan = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.rab_pembangunan+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            rab_pembangunanCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.rab_pembangunan+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            ded_pembangunan = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.ded_pembangunan+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            ded_pembangunanCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.ded_pembangunan+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            pks_pembangunan = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.pks_pembangunan+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            pks_pembangunanCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.pks_pembangunan+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            lingkungan_pembangunan = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.lingkungan_pembangunan+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            lingkungan_pembangunanCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.lingkungan_pembangunan+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            profile_pembangunan = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.profile_pembangunan+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            profile_pembangunanCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.profile_pembangunan+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            dprd_pembangunan = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.dprd_pembangunan+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            dprd_pembangunanCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.dprd_pembangunan+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`,

            penerima_pembangunan = `<button class="btn btn-icon btn-danger" onclick="showPdf('`+val.penerima_pembangunan+`')">
            <i class="fa-solid fas fa-file-pdf fa-lg"></i>
            </button>`,
            penerima_pembangunanCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('`+val.penerima_pembangunan+`')">
            <i class="fas fa-copy fa-lg"></i>
            </button>`;



            tbodyPembangunan += `<tr>`;
            tbodyPembangunan += `<td class='text-center'>`+noPembangunan+`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ val.nmkec +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ val.nmdesa +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.penetapan_lokasi_pembangunan != null ? penetapan_lokasi_pembangunan : "") +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.penetapan_lokasi_pembangunan != null ? penetapan_lokasi_pembangunanCopy : "") +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.legalitas_pembangunan != null ? legalitas_pembangunan : "") +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.legalitas_pembangunan != null ? legalitas_pembangunanCopy : "") +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.rtrw_pembangunan != null ? rtrw_pembangunan : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.rtrw_pembangunan != null ? rtrw_pembangunanCopy : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.kesiapan_pengelola_pembangunan != null ? kesiapan_pengelola_pembangunan : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.kesiapan_pengelola_pembangunan != null ? kesiapan_pengelola_pembangunanCopy : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.rab_pembangunan != null ? rab_pembangunan : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.rab_pembangunan != null ? rab_pembangunanCopy : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.ded_pembangunan != null ? ded_pembangunan : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.ded_pembangunan != null ? ded_pembangunanCopy : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.pks_pembangunan != null ? pks_pembangunan : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.pks_pembangunan != null ? pks_pembangunanCopy : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.lingkungan_pembangunan != null ? lingkungan_pembangunan : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.lingkungan_pembangunan != null ? lingkungan_pembangunanCopy : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.profile_pembangunan != null ? profile_pembangunan : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.profile_pembangunan != null ? profile_pembangunanCopy : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.dprd_pembangunan != null ? dprd_pembangunan : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.dprd_pembangunan != null ? dprd_pembangunanCopy : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.penerima_pembangunan != null ? penerima_pembangunan : '') +`</td>`;
            tbodyPembangunan += `<td class='text-center'>`+ (val.penerima_pembangunan != null ? penerima_pembangunanCopy : '') +`</td>`;


            tbodyPembangunan += `</tr>`;

            noPembangunan++;
          }); 

          $('#bodyPembangunan').html(tbodyPembangunan);
// End Set Body pembangunan




          $('#contenAdmin').removeClass('d-none');

          $('html, body').animate({
            scrollTop: $('#contenAdmin').offset().top
          }, {
            duration: 800, 
            easing: 'swing' 
          });

          $.LoadingOverlay("hide");


        }, function(error) {
          console.log('Kesalahan:', error);
          t_error('Ada yg Error : '+error)
        });


        }


        $('#provinsi').change(function() {
          var kdlokasi = $("#provinsi option:selected").val();

          ajaxUntukSemua(base_url()+'SAN/getKabKotaByKdlokasi', {kdlokasi}, function(data) {

            let opt = `<option value="" selected disabled>-- Pilih Kab/Kota --</option>`; 

            data.forEach(function(value) {

              opt += `<option value="`+value.KdSatker+`">`+value.nmkabkota+`</option>`

            });

            $('#kabkota').html(opt);

          }, function(error) {
            console.log('Kesalahan:', error);
            t_error('Ada yg Error : '+error)
          });


        });
      <?php } ?>
    // End JS selain Pemda



      copyLink = function (link) {
        var tempInput = document.createElement('input');

        var sliceString = link.substring(14),
        spasiJadiPersen = sliceString.replace(' ', '%20'),
        stringUrl = base_url()+spasiJadiPersen;


        tempInput.value = stringUrl;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);

        t_succsess('Link Berhasil Disalin.');
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
</div>
</div>