          <div class="row row-deck row-cards">
            <div class="">
              <style type="text/css">
                .font-calibri-tittle {
                  font-family: "calibri";
                  letter-spacing: 1px;
                }

                .calibri {
                  font-family: "calibri";
                  letter-spacing: 0.1px;
                }

                .big-checkbox {
                  width: 25px;
                  height: 25px;
                }

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
                          <h2 class="font-calibri-tittle">REKAP READINESS CRITERIA BIDANG AIR MINUM TA. <?= $this->session->userdata('thang'); ?></h2>
                          <h2 class="font-calibri-tittle" style="margin-top:-18px;" id="nmprovinsi"><?= $nmProvinsi; ?></h2>
                          <h2 class="font-calibri-tittle" style="margin-top:-18px;" id="nmkabkota"><?= $nmkabkota; ?></h2>
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
                                    <i class="fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('<?= $dataHeader->sptjm; ?>')"></i>
                                  </a>
                                <?php } ?>
                                <?php if ($this->session->userdata('rkdak_prive') == '1') { ?>
                                  <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Upload SPTJM " onclick="showUploadHeader('1')" style="margin-top:-10px; margin-left: 25px;"> Upload SPTJM</button>
                                <?php } ?>
                              </div>
                            </div>
                          </div>
                          <div class="row mt-3">
                            <div class="col-2" style="margin-top:-0.6%;">
                              Dokumen RISPAM
                            </div>
                            <div class="col-5" style="margin-top: -8px;">
                              <div class="d-inline">
                                :
                              </div>
                              <div class="" style="padding-left: 4%; margin-top: -22px;">
                                <?php if (@$dataHeader->rispam != '') { ?>
                                  <a type="button">
                                    <i class="fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('<?= $dataHeader->rispam; ?>')"></i>
                                  </a>
                                <?php } ?>
                                <?php if ($this->session->userdata('rkdak_prive') == '1') { ?>
                                  <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Upload RISPAM " onclick="showUploadHeader('2')" style="margin-top:-10px; margin-left: 25px;"> Upload RISPAM</button>
                                <?php } ?>

                              </div>
                            </div>
                          </div>
                         <!--  <div class="row mt-3">
                            <div class="col-2" style="margin-top:-0.6%;">
                              Tahun Terbit RISPAM
                            </div>
                            <div class="col-5" style="margin-top: -8px;">
                              <div class="d-inline">
                                :
                              </div>
                              <div class="" style="padding-left: 4%; margin-top: -22px;">

                                <?= @$dataRispam->thn_terbit; ?>

                              </div>
                            </div>
                          </div> -->
                          <!-- <div class="row mt-3">
                            <div class="col-2" style="margin-top:-0.6%;">
                              Umur RISPAM
                            </div>
                            <div class="col-5" style="margin-top: -8px;">
                              <div class="d-inline">
                                :
                              </div>
                              <div class="" style="padding-left: 4%; margin-top: -22px;">
                                <?= @$dataRispam->umur_rispam; ?>
                              </div>
                            </div>
                          </div> -->
                         <!--  <div class="row mt-3">
                            <div class="col-2" style="margin-top:-0.6%;">
                              Skoring RISPAM
                            </div>
                            <div class="col-5" style="margin-top: -8px;">
                              <div class="d-inline">
                                :
                              </div>
                              <div class="" style="padding-left: 4%; margin-top: -22px;">
                                <?= @$dataRispam->skoring_evaluasi * 100; ?>
                              </div>
                            </div>
                          </div> -->
                          <!-- <div class="row mt-3">
                            <div class="col-2 " style="margin-top:-0.6%;">
                              Kategori Skor RISPAM
                            </div>
                            <div class="col-5" style="margin-top: -8px;">
                              <div class="d-inline">
                                :
                              </div>
                              <div class="" style="padding-left: 4%; margin-top: -22px;">
                                <?= @$dataRispam->kat_skor_rispam; ?>
                              </div>
                            </div>
                          </div> -->
                          <!-- <div class="row mt-3">
                            <div class="col-2 " style="margin-top:-0.6%;">
                              Komitmen RISPAM
                            </div>
                            <div class="col-5" style="margin-top: -8px;">
                              <div class="d-inline">
                                :
                              </div>
                              <div class="" style="padding-left: 4%; margin-top: -22px;">
                                <?php if (@$dataHeader->komitmen_rispam != '') { ?>
                                  <a type="button">
                                    <i class="fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('<?= $dataHeader->komitmen_rispam; ?>')"></i>
                                  </a>
                                <?php } ?>
                                <?php if ($this->session->userdata('rkdak_prive') == '1') { ?>
                                  <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Upload BA Konultasi Program" onclick="showUploadHeader('5')" style="margin-top:-10px; margin-left: 25px;"> Upload File Komitmen RISPAM</button>
                                <?php } ?>
                              </div>
                            </div>
                          </div> -->
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
                                    <i class="fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('<?= $dataHeader->ba; ?>')"></i>
                                  </a>
                                <?php } ?>
                                <?php if ($this->session->userdata('rkdak_prive') == '1') { ?>
                                  <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Upload BA Konultasi Program" onclick="showUploadHeader('3')" style="margin-top:-10px; margin-left: 25px;"> Upload BA Konultasi Program</button>
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
                                    <i class="fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('<?= $dataHeader->ba_simoni; ?>')"></i>
                                  </a>
                                <?php } ?>
                                <?php if ($this->session->userdata('rkdak_prive') == '1') { ?>
                                  <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Upload Berita Acara Sinkronisasi & Harmonisasi" onclick="showUploadHeader('6')" style="margin-top:-10px; margin-left: 25px;"> Upload BA Konultasi Program</button>
                                <?php } ?>

                              </div>
                            </div>
                          </div>

                          <div class="row mt-3">
                            <div class="col-2 " style="margin-top:-0.6%;">
                             Surat Komitmen Kepala Daerah
                           </div>
                           <div class="col-5" style="margin-top: -8px;">
                            <div class="d-inline">
                              :
                            </div>
                            <div class="" style="padding-left: 4%; margin-top: -22px;">
                              <?php if (@$dataHeader->komiteSSK != '') { ?>
                                <a type="button">
                                  <i class="fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('<?= $dataHeader->komiteSSK; ?>')"></i>
                                </a>
                              <?php } ?>
                              <?php if ($this->session->userdata('rkdak_prive') == '1') { ?>
                                <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Upload Surat Komitmen Kepala Daerah" onclick="showUploadHeader('8')" style="margin-top:-10px; margin-left: 25px;"> Upload Surat Komitmen Kepala Daerah</button>
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
                                <?php if (@$dataHeader->stunting != '') { ?>
                                  <a type="button">
                                    <i class="fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('<?= $dataHeader->stunting; ?>')"></i>
                                  </a>
                                <?php } ?>
                                <?php if ($this->session->userdata('rkdak_prive') == '1') { ?>
                                  <button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Upload Update SK Stanting" onclick="showUploadHeader('7')" style="margin-top:-10px; margin-left: 25px;">Upload Update SK Stanting</button>
                                <?php } ?>

                              </div>
                            </div>
                          </div> -->
                        </div>

                        <div class="row mt-4">
                          <div class="">
                            <a href="#" type="button" class="btn btn-primary mb-2" onclick="showModalTambah()"><i class="fas fa-plus"></i> Tambah Data</a>
                            <?= $this->session->userdata('psn'); ?>
                            <table class="table table-bordered table-lg" style="border-color: #a7a7b6;">
                              <thead class="text-center sticky-top align-middle">
                                <tr>
                                  <th rowspan="2" style="background-color: #5E767E; color: white;">No</th>
                                  <th rowspan="2" style="background-color: #5E767E; color: white;">KECAMATAN</th>
                                  <th rowspan="2" style="background-color: #5E767E; color: white;">KELURAHAN/DESA</th>
                                  <th colspan="2" style="background-color: #5E767E; color: white;"><i>Detail Engineering Design</i> <br>(DED)</th>
                                  <th colspan="2" style="background-color: #5E767E; color: white;">Rencana Anggaran Biaya<br>(RAB)</th>
                                  <th colspan="2" style="background-color: #5E767E; color: white;">KESIAPAN LAHAN</th>
                                  <th colspan="2" style="background-color: #5E767E; color: white;">DAFTAR CALON <br> PENERIMA MANFAAT</th>
                                  <th colspan="2" style="background-color: #5E767E; color: white;">KESIAPAN LEMBAGA <br> PENGELOLA</th>
                                  <th colspan="2" style="background-color: #5E767E; color: white;">Studi Kelayakan/<br>Feasibility Study (FS)/ <br> Justifikasi Teknis (Justek)</th>
                                  <th colspan="2" style="background-color: #5E767E; color: white;">
                                    <i class="fa fa-star" style="margin-right: 5px; font-size: 10px;"></i><i style="margin-right: 5px; font-size: 10px;">Untuk kegiatan SPAM Regional</i><br>
                                    Perjanjian Kerja Sama
                                  </th>
                                  <th rowspan="2" style="background-color: #5E767E; color: white;">Edit Data</th>
                                </tr>
                                <tr>
                                  <th style="background-color: #5E767E; color: white;">FILE</th>
                                  <th style="background-color: #5E767E; color: white;">LINK</th>
                                  <th style="background-color: #5E767E; color: white;">FILE</th>
                                  <th style="background-color: #5E767E; color: white;">LINK</th>
                                  <th style="background-color: #5E767E; color: white;">FILE</th>
                                  <th style="background-color: #5E767E; color: white;">LINK</th>
                                  <th style="background-color: #5E767E; color: white;">FILE</th>
                                  <th style="background-color: #5E767E; color: white;">LINK</th>
                                  <th style="background-color: #5E767E; color: white;">FILE</th>
                                  <th style="background-color: #5E767E; color: white;">LINK</th>
                                  <th style="background-color: #5E767E; color: white;">FILE</th>
                                  <th style="background-color: #5E767E; color: white;">LINK</th>
                                  <th style="background-color: #5E767E; color: white;">FILE</th>
                                  <th style="background-color: #5E767E; color: white;">LINK</th>
                                </tr>
                              </thead>

                              <tbody class="text-end" id="bodyTableConten">
                                <?php $no = 1;
                                foreach ($dataTabel as $key => $value) { ?>
                                  <tr class="text-center">
                                    <td><?= $no; ?></td>
                                    <td><?= $value->nmkec; ?></td>
                                    <td><?= $value->nmdesa; ?></td>
                                    <td>
                                      <?php if ($value->ded != '') { ?>
                                        <button class="btn btn-icon btn-danger" onclick="showPdf('<?= str_replace("'", ",", $value->ded); ?>')">
                                          <i class="fas fa-file-pdf fa-lg"></i>
                                        </button>
                                      <?php } ?>
                                    </td>
                                    <td>
                                      <?php if ($value->ded != '') { ?>
                                        <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->ded; ?>')">
                                          <i class="fas fa-copy fa-lg"></i>
                                        </button>
                                      <?php } ?>
                                    </td>
                                    <td>
                                      <?php if ($value->rab != '') { ?>
                                        <button class="btn btn-icon btn-danger" onclick="showPdf('<?= str_replace("'", ",", $value->rab); ?>')">
                                          <i class="fas fa-file-pdf fa-lg"></i>
                                        </button>
                                      <?php } ?>
                                    </td>
                                    <td>
                                      <?php if ($value->rab != '') { ?>
                                        <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->rab; ?>')">
                                          <i class="fas fa-copy fa-lg"></i>
                                        </button>
                                      <?php } ?>
                                    </td>
                                    <td>
                                      <?php if ($value->k_lahan != '') { ?>
                                        <button class="btn btn-icon btn-danger" onclick="showPdf('<?= str_replace("'", ",", $value->k_lahan); ?>')">
                                          <i class="fas fa-file-pdf fa-lg"></i>
                                        </button>
                                      <?php } ?>
                                    </td>
                                    <td>
                                      <?php if ($value->k_lahan != '') { ?>
                                        <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->k_lahan; ?>')">
                                          <i class="fas fa-copy fa-lg"></i>
                                        </button>
                                      <?php } ?>
                                    </td>
                                    <td>
                                      <?php if ($value->penerima_manfaat != '') { ?>
                                        <button class="btn btn-icon btn-danger" onclick="showPdf('<?= str_replace("'", ",", $value->penerima_manfaat); ?>')">
                                          <i class="fas fa-file-pdf fa-lg"></i>
                                        </button>
                                      <?php } ?>
                                    </td>
                                    <td>
                                      <?php if ($value->penerima_manfaat != '') { ?>
                                        <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->penerima_manfaat; ?>')">
                                          <i class="fas fa-copy fa-lg"></i>
                                        </button>
                                      <?php } ?>
                                    </td>
                                    <td>
                                      <?php if ($value->k_lembaga != '') { ?>
                                        <button class="btn btn-icon btn-danger" onclick="showPdf('<?= str_replace("'", ",", $value->k_lembaga); ?>')">
                                          <i class="fas fa-file-pdf fa-lg"></i>
                                        </button>
                                      <?php } ?>
                                    </td>
                                    <td>
                                      <?php if ($value->k_lembaga != '') { ?>
                                        <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->k_lembaga; ?>')">
                                          <i class="fas fa-copy fa-lg"></i>
                                        </button>
                                      <?php } ?>
                                    </td>


                                    <td>
                                      <?php if ($value->kelayakan_justek != '') { ?>
                                        <button class="btn btn-icon btn-danger" onclick="showPdf('<?= str_replace("'", ",", $value->kelayakan_justek); ?>')">
                                          <i class="fas fa-file-pdf fa-lg"></i>
                                        </button>
                                      <?php } ?>
                                    </td>
                                    <td>
                                      <?php if ($value->kelayakan_justek != '') { ?>
                                        <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->kelayakan_justek; ?>')">
                                          <i class="fas fa-copy fa-lg"></i>
                                        </button>
                                      <?php } ?>
                                    </td>
                                    <td>
                                      <?php if ($value->pks != '') { ?>
                                        <button class="btn btn-icon btn-danger" onclick="showPdf('<?= str_replace("'", ",", $value->pks); ?>')">
                                          <i class="fas fa-file-pdf fa-lg"></i>
                                        </button>
                                      <?php } ?>
                                    </td>
                                    <td>
                                      <?php if ($value->pks != '') { ?>
                                        <button class="btn btn-icon btn-secondary" onclick="copyLink('<?= $value->pks; ?>')">
                                          <i class="fas fa-copy fa-lg"></i>
                                        </button>
                                      <?php } ?>
                                    </td>


                                    <td class="text-center" style="display: flex; align-items: center;">
                                      <button class="btn btn-warning btn-icon  d-inline" onclick="editData('<?= str_replace("'", "", $value->nmkec); ?>', '<?= str_replace("'", ",", $value->nmdesa);  ?>', '<?= $value->id; ?>', '<?= $value->kdkec; ?>', '<?= $value->kddesa; ?>')" style="margin-right: 10px;"><i class="fas fa-edit"></i></button>
                                      <button class="btn btn-danger btn-icon  d-inline" onclick="hapusData('<?= $value->id; ?>')"><i class="fas fa-trash"></i></button>
                                    </td>
                                  </tr>
                                  <?php $no++;
                                } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
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
                            <button class="btn btn-primary" onclick="getDataTableConten()"><i class="fas fa-search" style="margin-right: 15%;"></i> Cari</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="container mt-3 d-none" id="container2">
                  <div class="col-md-12 col-lg-12">
                    <div class="card card-stacked">
                      <div class="card-body">
                        <div class="text-center mt-3 ">
                          <h2 class="font-calibri-tittle">REKAP READINESS CRITERIA BIDANG AIR MINUM TA. <?= $this->session->userdata('thang'); ?></h2>
                          <h2 class="font-calibri-tittle" id="nmprovinsi"  style="margin-top:-18px;"> </h2>
                          <h2 class="font-calibri-tittle" id="nmkabkota"  style="margin-top:-18px;"> </h2>
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
                              Dokumen RISPAM
                            </div>
                            <div class="col-5" style="margin-top: -8px;">
                              <div class="d-inline">
                                :
                              </div>
                              <div class="" style="padding-left: 4%; margin-top: -22px;" id="icon-rispam">
                                <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
                              </div>
                            </div>
                          </div>
                        <!--   <div class="row mt-3">
                            <div class="col-2" style="margin-top:-0.6%;">
                              Tahun Terbit RISPAM
                            </div>
                            <div class="col-5" style="margin-top: -8px;">
                              <div class="d-inline">
                                :
                              </div>
                              <div class="" style="padding-left: 4%; margin-top: -22px;" id="tahun-rispam">
                                <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
                              </div>
                            </div>
                          </div> -->
                          <!-- <div class="row mt-3">
                            <div class="col-2" style="margin-top:-0.6%;">
                              Umur RISPAM
                            </div>
                            <div class="col-5" style="margin-top: -8px;">
                              <div class="d-inline">
                                :
                              </div>
                              <div class="" style="padding-left: 4%; margin-top: -22px;" id="umur-rispam">
                                <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
                              </div>
                            </div>
                          </div> -->
                        <!--   <div class="row mt-3">
                            <div class="col-2" style="margin-top:-0.6%;">
                              Skoring RISPAM
                            </div>
                            <div class="col-5" style="margin-top: -8px;">
                              <div class="d-inline">
                                :
                              </div>
                              <div class="" style="padding-left: 4%; margin-top: -22px;" id="skoring-rispam">
                                <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
                              </div>
                            </div>
                          </div> -->
                        <!--   <div class="row mt-3">
                            <div class="col-2 " style="margin-top:-0.6%;">
                              Kategori Skor RISPAM
                            </div>
                            <div class="col-5" style="margin-top: -8px;">
                              <div class="d-inline">
                                :
                              </div>
                              <div class="" style="padding-left: 4%; margin-top: -22px;" id="kategori-rispam">
                                <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
                              </div>
                            </div>
                          </div> -->
                         <!--  <div class="row mt-3">
                            <div class="col-2 " style="margin-top:-0.6%;">
                              Komitmen RISPAM
                            </div>
                            <div class="col-5" style="margin-top: -8px;">
                              <div class="d-inline">
                                :
                              </div>
                              <div class="" style="padding-left: 4%; margin-top: -22px;" id="icon-komitmen">
                                <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
                              </div>
                            </div>
                          </div> -->
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
                              Berita Acara Hasi Penilaian
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

                          <div class="row mt-3">
                            <div class="col-2 " style="margin-top:-0.6%;">
                              Surat Komitmen Kepala Daerah
                            </div>
                            <div class="col-5" style="margin-top: -8px;">
                              <div class="d-inline">
                                :
                              </div>
                              <div class="" style="padding-left: 4%; margin-top: -22px;" id="icon-komiteKepalaDaerah">
                                <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
                              </div>
                            </div>
                          </div>

                         <!--  <div class="row mt-3">
                            <div class="col-2 " style="margin-top:-0.6%;">
                              Update SK Stunting
                            </div>
                            <div class="col-5" style="margin-top: -8px;">
                              <div class="d-inline">
                                :
                              </div>
                              <div class="" style="padding-left: 4%; margin-top: -22px;" id="icon-stunting">
                                <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
                              </div>
                            </div>
                          </div> -->
                        </div>

                        <div class="row mt-4">
                          <div class="">
                            <?= $this->session->userdata('psn'); ?>
                            <table class="table table-bordered table-lg" style="border-color: #a7a7b6;">
                              <thead class="text-center sticky-top align-middle">
                                <tr>
                                  <th rowspan="2" style="background-color: #5E767E; color: white;">No</th>
                                  <th rowspan="2" style="background-color: #5E767E; color: white;">KECAMATAN</th>
                                  <th rowspan="2" style="background-color: #5E767E; color: white;">KELURAHAN/DESA</th>
                                  <th colspan="2" style="background-color: #5E767E; color: white;"><i>Detail Engineering Design</i> <br>(DED)</th>
                                  <th colspan="2" style="background-color: #5E767E; color: white;">Rencana Anggaran Biaya <br> (RAB)</th>
                                  <th colspan="2" style="background-color: #5E767E; color: white;">KESIAPAN LAHAN</th>
                                  <th colspan="2" style="background-color: #5E767E; color: white;">DAFTAR CALON <br> PENERIMA MANFAAT</th>
                                  <th colspan="2" style="background-color: #5E767E; color: white;">KESIAPAN LEMBAGA PENGELOLA</th>

                                  <th colspan="2" style="background-color: #5E767E; color: white;">Studi Kelayakan/<br>Feasibility Study (FS)/ <br> Justifikasi Teknis (Justek)</th>
                                  
                                  <th colspan="2" style="background-color: #5E767E; color: white;">
                                    <i class="fa fa-star" style="margin-right: 5px; font-size: 10px;"></i><i style="margin-right: 5px; font-size: 10px;">Untuk kegiatan SPAM Regional</i><br>
                                    Perjanjian Kerja Sama
                                  </th>

                                  <th rowspan="2" style="background-color: #5E767E; color: white;">STATUS <br> VERIFIKASI</th>
                                </tr>
                                <tr>
                                  <th style="background-color: #5E767E; color: white;">FILE</th>
                                  <th style="background-color: #5E767E; color: white;">LINK</th>
                                  <th style="background-color: #5E767E; color: white;">FILE</th>
                                  <th style="background-color: #5E767E; color: white;">LINK</th>
                                  <th style="background-color: #5E767E; color: white;">FILE</th>
                                  <th style="background-color: #5E767E; color: white;">LINK</th>
                                  <th style="background-color: #5E767E; color: white;">FILE</th>
                                  <th style="background-color: #5E767E; color: white;">LINK</th>
                                  <th style="background-color: #5E767E; color: white;">FILE</th>
                                  <th style="background-color: #5E767E; color: white;">LINK</th>
                                  <th style="background-color: #5E767E; color: white;">FILE</th>
                                  <th style="background-color: #5E767E; color: white;">LINK</th>
                                  <th style="background-color: #5E767E; color: white;">FILE</th>
                                  <th style="background-color: #5E767E; color: white;">LINK</th>
                                </tr>
                              </thead>

                              <tbody class="text-end" id="bodyTableConten">

                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
              <!-- End Page Selain Pemda -->

              <?php if ($this->session->userdata('rkdak_priv') == '1') { ?>
                <!-- Modal File Upload -->
                <div class="modal modal-blur fade" id="modal_upload_dokumen" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="tittle_modal_dok">Form Upload Dokumen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form id="formUploadFileRcAm" action="<?= base_url(); ?>AM/simpanFileAm" method="POST" enctype="multipart/form-data">
                          <?php if ($kdkabkota == '00') { ?>
                            <div class="mb-3">
                              <div class="form-label">Pilih Kab/Kota :</div>
                              <select id="klikKabKota" name="kabkota" class="form-select align-middle w-100" style="width:auto; height: 33px;">
                                <option value="" selected disabled>--- Pilih Kab/Kota ---</option>
                                <?php foreach ($dataKabKota as $key => $value) { ?>
                                  <option value="<?= kdkabkota($value->KdSatker); ?>"><?= $value->nmkabkota; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                          <?php } ?>
                          <div class="mb-3">
                            <div class="form-label">Pilih Kecamatan :</div>
                            <select id="klikKecamatan" name="kdkec" class="form-select align-middle w-100" style="width:auto; height: 33px;">
                              <option value="" selected disabled>--- Pilih Kecamatan ---</option>
                              <?php foreach ($dataKecamatan as $key => $value) { ?>
                                <option value="<?= $value->kdkec; ?>"><?= $value->nmkec; ?></option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">Pilih Desa :</div>
                            <select id="klikDesa" name="kddesa" class="form-select align-middle w-100" style="width:auto; height: 33px;">
                              <option value="" selected disabled>-- Pilih Desa --</option>

                            </select>
                          </div>
                          <hr class="mt-2 mb-2">
                          <div class="mb-3">
                            <div class="form-label">Detail Engineering Design (DED) :</div>
                            <input type="file" name="ded" id="ded" class="form-control" accept="application/pdf" />
                            <small class="form-hint">
                              <b>Gambar design beserta skematik jaringan / RMK untuk kegiatan pemberdayaan masyarakat</b>
                              <br>
                              File : PDF Max Size : 300 MB.
                            </small>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">Rencana Anggaran Biaya (RAB) :</div>
                            <input type="file" name="rab" id="rab" class="form-control" accept="application/pdf" />
                            <small class="form-hint">
                              File : PDF Max Size : 300 MB.
                            </small>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">Surat Kesiapan Lahan :</div>
                            <input type="file" name="k_lahan" id="k_lahan" class="form-control" accept="application/pdf" />
                            <small class="form-hint">
                              <b>Surat yang menyatakan bahwa lahan yang akan dipakai adalah milik Pemerintah desa/kab/kota yang tidak akan bermasalah pada saat pekerjaan dan untuk menu pembangunan baru SPAM JP, Peningkatan SPAM JP, & Perluasan SPAM bila ada pembangunan Komponen Reservoar</b>
                              <br>
                              File : PDF Max Size : 300 MB.
                            </small>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">Daftar Calon Penerima Manfaat :</div>
                            <input type="file" name="penerima_manfaat" id="penerima_manfaat" class="form-control" accept="application/pdf" />
                            <small class="form-hint">
                              <b>Daftar nama kepala keluarga penerima bantuan yang disahkan oleh PDAM/Dinas Terkait</b>
                              <br>
                              File : PDF Max Size : 300 MB.
                            </small>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">PKS (Perjanjian Kerja Sama) & Skema pembagian pendanaan :</div>
                            <input type="file" name="pks" id="pks" class="form-control" accept="application/pdf" />
                            <small class="form-hint">
                              <b>Perjanjian kerja sama antar pemerintah Pusat/Provinsi/Kab/Kota dalam pembangunan SPAM dilampirkan dengan skema pembagian pendanaan Khusus untuk kegiatan SPAM Regional/SPAM PSN dan Menu JDU SPAM dan Perluasan SPAM Regional</b>
                              <br>
                              File : PDF Max Size : 300 MB.
                            </small>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">Surat kesiapan Lembaga Pengelola :</div>
                            <input type="file" name="k_lembaga" id="k_lembaga" class="form-control" accept="application/pdf" />
                            <small class="form-hint">
                              <b>Surat kesiapan Lembaga pengelola yang dikeluarkan oleh:<br>
                                1. SPAM Perkotaan yang dikelola PDAM dikeluarkan oleh PDAM <br>
                                2. SPAM Pedesaan dikeluarkan oleh KPSPAM bila sudah mempunyai KPSPAM (untuk kegiatan pengembangan/peningkatan)<br>
                              3. SPAM Pedesaan yang belum mempunyai KPSPAM dikeluarkan oleh Kepala Desa/Lurah yang isinya akan dilakukan pembentukan KPSPAM.</b>
                              <br>
                              File : PDF Max Size : 300 MB.
                            </small>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">Studi Kelayakan/Feasibility Study (FS)/Justifikasi Teknis (Justek) :</div>
                            <input type="file" name="kelayakan_justek" id="kelayakan_justek" class="form-control" accept="application/pdf" />
                            <small class="form-hint">
                              <b>Untuk kegiatan pembangunan dan peningkatan SPAM di atas 10 liter per detik</b>
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



                <!-- Modal File Edit -->
                <div class="modal modal-blur fade" id="modal_upload_dokumen_edit" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="tittle_modal_dok_edit"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form id="formUploadFileRcAmEdit" action="<?= base_url(); ?>AM/simpanFileAmEdit" method="POST" enctype="multipart/form-data">
                          <input type="hidden" name="idEdit" id="idEdit">
                          <input type="hidden" name="idEditDKec" id="idEditDKec">
                          <input type="hidden" name="idEditDesa" id="idEditDesa">
                          <div class="mb-3">
                            <div class="form-label">Detail Engineering Design (DED) :</div>
                            <input type="file" name="ded_edit" id="ded_edit" class="form-control" accept="application/pdf" />
                            <small class="form-hint">
                              <b>Gambar design beserta skematik jaringan / RMK untuk kegiatan pemberdayaan masyarakat</b>
                              <br>
                              File : PDF Max Size : 300 MB.
                            </small>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">Rencana Anggaran Biaya (RAB) :</div>
                            <input type="file" name="rab_edit" id="rab_edit" class="form-control" accept="application/pdf" />
                            <small class="form-hint">
                              File : PDF Max Size : 300 MB.
                            </small>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">Surat Kesiapan Lahan :</div>
                            <input type="file" name="k_lahan_edit" id="k_lahan_edit" class="form-control" accept="application/pdf" />
                            <small class="form-hint">
                              <b>Surat yang menyatakan bahwa lahan yang akan dipakai adalah milik Pemerintah desa/kab/kota yang tidak akan bermasalah pada saat pekerjaan dan untuk menu pembangunan baru SPAM JP, Peningkatan SPAM JP, & Perluasan SPAM bila ada pembangunan Komponen Reservoar</b>
                              <br>
                              File : PDF Max Size : 300 MB.
                            </small>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">Daftar Calon Penerima Manfaat :</div>
                            <input type="file" name="penerima_manfaat_edit" id="penerima_manfaat_edit" class="form-control" accept="application/pdf" />
                            <small class="form-hint">
                              <b>Daftar nama kepala keluarga penerima bantuan yang disahkan oleh PDAM/Dinas Terkait</b>
                              <br>
                              File : PDF Max Size : 300 MB.
                            </small>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">PKS (Perjanjian Kerja Sama) & Skema pembagian pendanaan :</div>
                            <input type="file" name="pks_edit" id="pks_edit" class="form-control" accept="application/pdf" />
                            <small class="form-hint">
                              <b>Perjanjian kerja sama antar pemerintah Pusat/Provinsi/Kab/Kota dalam pembangunan SPAM dilampirkan dengan skema pembagian pendanaan Khusus untuk kegiatan SPAM Regional/SPAM PSN dan Menu JDU SPAM dan Perluasan SPAM Regional</b>
                              <br>
                              File : PDF Max Size : 300 MB.
                            </small>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">Surat kesiapan Lembaga Pengelola :</div>
                            <input type="file" name="k_lembaga_edit" id="k_lembaga_edit" class="form-control" accept="application/pdf" />
                            <small class="form-hint">
                              <b>Surat kesiapan Lembaga pengelola yang dikeluarkan oleh:<br>
                                1. SPAM Perkotaan yang dikelola PDAM dikeluarkan oleh PDAM <br>
                                2. SPAM Pedesaan dikeluarkan oleh KPSPAM bila sudah mempunyai KPSPAM (untuk kegiatan pengembangan/peningkatan)<br>
                              3. SPAM Pedesaan yang belum mempunyai KPSPAM dikeluarkan oleh Kepala Desa/Lurah yang isinya akan dilakukan pembentukan KPSPAM.</b>
                              <br>
                              File : PDF Max Size : 300 MB.
                            </small>
                          </div>
                          <div class="mb-3">
                            <div class="form-label">Studi Kelayakan/Feasibility Study (FS)/Justifikasi Teknis (Justek) :</div>
                            <input type="file" name="kelayakan_justek_edit" id="kelayakan_justek_edit" class="form-control" accept="application/pdf" />
                            <small class="form-hint">
                              <b>Untuk kegiatan pembangunan dan peningkatan SPAM di atas 10 liter per detik</b>
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
                <!-- End Modal Edit -->


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
                      <form id="formUploadFileDPA" action="<?= base_url(); ?>AM/simpanDokHeader" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <div class="form-label">Input File SPTJM :</div>
                          <input type="file" name="sptjm" id="sptjm" class="form-control" accept="application/pdf" />
                          <small class="form-hint">
                            <b>Surat Pernyataan Tanggungjawab Mutlak (SPTJM)</b>
                            <br>
                            File : PDF Max Size : 10 MB.
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

              <!-- Modal Input File RISPAM -->
              <div class="modal modal-blur fade" id="modal_rispam" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Form Upload Dokumen RISPAM</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form id="formUploadFileDPA" action="<?= base_url(); ?>AM/simpanDokHeader" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <div class="form-label">Input File RISPAM :</div>
                          <input type="file" name="rispam" id="rispam" class="form-control" accept="application/pdf" />
                          <small class="form-hint">
                            File : PDF Max Size : 10 MB.
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
              <!-- End Modal Input File RISPAM -->

              <!-- Modal Input File BA Konsultasi Program -->
              <div class="modal modal-blur fade" id="modal_ba" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Form Upload Dokumen Berita Acara Rencana Kegiatan</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form id="formUploadFileDPA" action="<?= base_url(); ?>AM/simpanDokHeader" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <div class="form-label">Input File Berita Acara Rencana Kegiatan :</div>
                          <input type="file" name="ba" id="ba" class="form-control" accept="application/pdf" />
                          <small class="form-hint">
                            File : PDF Max Size : 10 MB.
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


              <!-- Modal Input File Komitmen Rispam -->
              <div class="modal modal-blur fade" id="modal_komitmen_rispam" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Form Upload Komitmen Pembuatan RISPAM</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form id="formUploadFileDPA" action="<?= base_url(); ?>AM/simpanDokHeader" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <div class="form-label">Input File Komitmen Pembuatan RISPAM :</div>
                          <input type="file" name="komitmen_rispam" id="komitmen_rispam" class="form-control" accept="application/pdf" />
                          <small class="form-hint">
                            <b>Bila sedang berjalan 2023 dapat dibuktikan dengan RKA Tahun 2023</b>
                            <br>
                            File : PDF Max Size : 10 MB.
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
              <!-- End Modal Input File Komitmen Rispam -->

              <!-- Modal Input File BA Simoni -->
              <div class="modal modal-blur fade" id="modal_ba_simoni" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Form Upload Berita Acara Hasi Penilaian</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form id="formUploadFileDPA" action="<?= base_url(); ?>AM/simpanDokHeader" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <div class="form-label">Input Upload Berita Acara Hasi Penilaian :</div>
                          <input type="file" name="ba_simoni" id="ba_simoni" class="form-control" accept="application/pdf" />
                          <small class="form-hint">
                            File : PDF Max Size : 10 MB.
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
              <!-- End Modal Input File BA Simoni -->

              <!-- Modal Input File Stunting -->
              <div class="modal modal-blur fade" id="modal_stunting" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Form Upload Dokumen Update Stunting SK Stanting</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form id="formUploadFileDPA" action="<?= base_url(); ?>AM/simpanDokHeader" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <div class="form-label">Input Upload Upload Dokumen Update Stunting SK Stanting :</div>
                          <input type="file" name="stunting" id="stunting" class="form-control" accept="application/pdf" />
                          <small class="form-hint">
                            File : PDF Max Size : 10 MB.
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
              <!-- End Modal Input File stunting -->

              <!-- Modal Input File Surat Pernyataan Bappenas -->
              <div class="modal modal-blur fade" id="modal_bappenas" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Form Upload Dokumen Surat Pernyataan Bappenas</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form id="formUploadFileDPA" action="<?= base_url(); ?>AM/simpanDokHeader" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <div class="form-label">Input File Surat Pernyataan Bappenas :</div>
                          <input type="file" name="s_bappenas" id="s_bappenas" class="form-control" accept="application/pdf" />
                          <small class="form-hint">
                            File : PDF Max Size : 10 MB.
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

              <!-- Modal Input File komite -->
              <div class="modal modal-blur fade" id="modal_komite" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Surat Komitmen Kepala Daerah</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form id="formUploadFileDPA" action="<?= base_url(); ?>AM/simpanDokHeader" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <div class="form-label">Input Upload Surat Komitmen Kepala Daerah :</div>
                          <input type="file" name="komiteKepalaDaerah" id="komiteKepalaDaerah" class="form-control" accept="application/pdf" />
                          <small class="form-hint">
                            File : PDF Max Size : 10 MB.
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
              <!-- End Modal Input File komite -->

              <script type="text/javascript">
                $(document).ready(function() {


                  showModalTambah = function() {
                    $('#modal_upload_dokumen').modal('show');
                  }

                  showUploadHeader = function(idModal) {

                    if (idModal == '1') {
                      $('#modal_input_sptjm').modal('show');
                    }

                    if (idModal == '2') {
                      $('#modal_rispam').modal('show');
                    }

                    if (idModal == '3') {
                      $('#modal_ba').modal('show');
                    }

                    if (idModal == '4') {
                      $('#modal_bappenas').modal('show');
                    }

                    if (idModal == '5') {
                      $('#modal_komitmen_rispam').modal('show');
                    }

                    if (idModal == '6') {
                      $('#modal_ba_simoni').modal('show');
                    }

                    if (idModal == '7') {
                      $('#modal_stunting').modal('show');
                    }

                    if (idModal == '8') {
                      $('#modal_komite').modal('show');
                    }


                  }


    // Js Pemda
                  <?php if ($this->session->userdata('rkdak_priv') == '1') { ?>

                    hapusData = function(id) {

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
                            url: base_url() + 'AM/hapusAm',
                            type: "post",
                            dataType: 'json',
                            data: {
                              id
                            },
                            success: function(res) {
                              if (res.code != 200) {
                                t_error('Data gagal Dihapus.!');
                                return;
                              }
                              location.reload();

                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                              t_error('Ada yg error silakan hubungi developer');
                            }
                          });
                        }
                      })

                    }

                    $('#klikKecamatan').change(function() {
                      let idkec = $(this).val(),
                      kdkabkotaX = '<?= kdkabkota($this->session->userdata('rkdak_kdsat')); ?>' == '00' ? $("#klikKabKota option:selected").val() : '0';


                      ajaxUntukSemua(base_url() + 'AM/getDataDesa', {
                        idkec,
                        kdkabkotaX
                      }, function(data) {

                        let html = `<option value="" selected disabled>-- Pilih Desa --</option>`;

                        $.each(data, function(index, val) {

                          html += `<option value="` + val.kddesa + `">` + val.nmdesa + `</option>`;

                        })

                        $('#klikDesa').html(html);

                      }, function(error) {
                        console.log('Kesalahan:', error);
                        t_error('Ada yg Error : ' + error)
                      });


                    });


                    editData = function(nmkec, nmdes, id, kdkec, kddesa) {


                      $('#idEdit').val(id);
                      $('#idEditDKec').val(kdkec);
                      $('#idEditDesa').val(kddesa);
                      $('#tittle_modal_dok_edit').text(`Kecamatan : ` + nmkec + ` Desa : ` + nmdes);
                      $('#modal_upload_dokumen_edit').modal('show');

                    }


                    showUploadModal = function(kec, des, kdlokasi, kdkabkota, kdkec, kddesa) {

                      let tittle = `Kecamatan : ` + kec + ` Desa : ` + des;
                      $('#tittle_modal_dok').text(tittle);
                      $('#kdlokasi').val(kdlokasi);
                      $('#kdkabkota').val(kdkabkota);
                      $('#kdkec').val(kdkec);
                      $('#kddesa').val(kddesa);

                      $('#modal_upload_dokumen').modal('show')

                    }

      // Upload Js
                    $('#formUploadFileRcAm').submit(function() {

        // Ded
                      let fileDed = $('#ded').val().replace(/C:\\fakepath\\/i, '');

                      if (fileDed != '') {
                        let fileDedSize = document.getElementById("ded").files[0],
                        extension = fileDed.split('.').pop().toLowerCase();

                        if (extension != 'pdf') {
                          t_error('File DED Harus PDF');
                          return false;
                        }

                        if (fileDedSize.size > 300000000) {
                          t_error('File DED Melebihi 300 MB.!');
                          return false;
                        }
                      }
        // End Ded


        // RAB
                      let fileRab = $('#rab').val().replace(/C:\\fakepath\\/i, '');

                      if (fileRab != '') {
                        let fileRabSize = document.getElementById("rab").files[0],
                        extension = fileRab.split('.').pop().toLowerCase();

                        if (extension != 'pdf') {
                          t_error('File RAB Harus PDF');
                          return false;
                        }

                        if (fileRabSize.size > 300000000) {
                          t_error('File RAB Melebihi 300 MB.!');
                          return false;
                        }
                      }
        // End RAB


        // Keisapan Lahan
                      let fileKesiapanLahan = $('#k_lahan').val().replace(/C:\\fakepath\\/i, '');

                      if (fileKesiapanLahan != '') {
                        let fileKesiapanLahanSize = document.getElementById("k_lahan").files[0],
                        extension = fileKesiapanLahan.split('.').pop().toLowerCase();

                        if (extension != 'pdf') {
                          t_error('File RAB Harus PDF');
                          return false;
                        }

                        if (fileKesiapanLahanSize.size > 300000000) {
                          t_error('File Kesiapan Lahan Melebihi 300 MB.!');
                          return false;
                        }
                      }
        // End Kesiapan Lahan

        // Keisapan Lahan
                      let filePenerimaManfaatn = $('#penerima_manfaat').val().replace(/C:\\fakepath\\/i, '');

                      if (filePenerimaManfaatn != '') {
                        let filePenerimaManfaatSize = document.getElementById("penerima_manfaat").files[0],
                        extension = filePenerimaManfaatn.split('.').pop().toLowerCase();

                        if (extension != 'pdf') {
                          t_error('File Penerima Manfaat Harus PDF');
                          return false;
                        }

                        if (filePenerimaManfaatSize.size > 300000000) {
                          t_error('File Penerima Manfaat Melebihi 300 MB.!');
                          return false;
                        }
                      }
        // End Kesiapan Lahan


        // Keisapan Lembaga
                      let fileKLembaga = $('#k_lembaga').val().replace(/C:\\fakepath\\/i, '');

                      if (fileKLembaga != '') {
                        let fileKLembagaSize = document.getElementById("k_lembaga").files[0],
                        extension = fileKLembaga.split('.').pop().toLowerCase();

                        if (extension != 'pdf') {
                          t_error('File Kesiapan Lembaga Harus PDF');
                          return false;
                        }

                        if (fileKLembagaSize.size > 300000000) {
                          t_error('File Kesiapan Lembaga Melebihi 300 MB.!');
                          return false;
                        }
                      }
        // End Kesiapan Lembaga


        // Keisapan PKS
                      let filePKS = $('#pks').val().replace(/C:\\fakepath\\/i, '');

                      if (filePKS != '') {
                        let filePKSSize = document.getElementById("pks").files[0],
                        extension = filePKS.split('.').pop().toLowerCase();

                        if (extension != 'pdf') {
                          t_error('File PKS (Perjanjian Kerja Sama) & Skema pembagian pendanaan Harus PDF');
                          return false;
                        }

                        if (filePKSSize.size > 300000000) {
                          t_error('File PKS (Perjanjian Kerja Sama) & Skema pembagian pendanaan 300 MB.!');
                          return false;
                        }
                      }
        // End PKS

                      let idkec = $('#klikKecamatan').val(),
                      iddesa = $('#klikDesa').val();

                      if (idkec == null) {
                        t_error('Silakan Pilih Kecamatan Terlebih Dahulu.!');
                        return false;
                      }

                      if (iddesa == null) {
                        t_error('Silakan Pilih Desa Terlebih Dahulu.!');
                        return false;
                      }


                      if (fileKLembaga == '' && filePenerimaManfaatn == '' && fileKesiapanLahan == '' && fileRab == '' && fileDed == '' && filePKS == '') {
                        t_error('Silakan Masukan File Terlebih Dahulu.!');
                        return false;
                      }

                    });
      // End Upload Js





        <?php } ?>
    // Js Pemda


    // Js Selain Pemda
        <?php if ($this->session->userdata('rkdak_priv') != '1') { ?>
          $.LoadingOverlaySetup({
            background: "rgba(0, 0, 0, 0.4)",
            text: "",
          });


          getDataTableConten = function() {

            var kdlokasi = $("#provinsi option:selected").val(),
            kdkabkota = $("#kabkota option:selected").val();


            if (kdkabkota == '') {
              t_error('Silakan Pilih Provinsi/kabupaten Kota Terlebih Dahulu.!')
              return;
            }

            $.LoadingOverlay("show");

            ajaxUntukSemua(base_url() + 'AM/getDataTable', {
              kdlokasi,
              kdkabkota
            }, function(data) {
              console.log(data);
              let nmprovinsi = $("#provinsi option:selected").text().toUpperCase(),
              nmkabkota = $("#kabkota option:selected").text().toUpperCase();

              $('#nmprovinsi').text('PROVINSI ' + nmprovinsi);
              $('#nmkabkota').text(nmkabkota);


          // Set Header
              if (data.dataHeader && data.dataHeader.sptjm != null) {
                $('#icon-sptjm').html(`<a type="button">
                  <i class="fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('` + data.dataHeader.sptjm + `')"></i>
                  </a>`);
              } else {
                $('#icon-sptjm').html('');
              }

              if (data.dataHeader && data.dataHeader.rispam != null) {
                $('#icon-rispam').html(`<a type="button">
                  <i class="fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('` + data.dataHeader.rispam + `')"></i>
                  </a>`);
              } else {
                $('#icon-rispam').html('');
              }

              if (data.dataHeader && data.dataHeader.komitmen_rispam != null) {
                $('#icon-komitmen').html(`<a type="button">
                  <i class="fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('` + data.dataHeader.komitmen_rispam + `')"></i>
                  </a>`);
              } else {
                $('#icon-komitmen').html('');
              }

              if (data.dataHeader && data.dataHeader.ba_simoni != null) {
                $('#icon-ba-simoni').html(`<a type="button">
                  <i class="fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('` + data.dataHeader.ba_simoni + `')"></i>
                  </a>`);
              } else {
                $('#icon-ba-simoni').html('');
              }

              if (data.dataHeader && data.dataHeader.stunting != null) {
                $('#icon-stunting').html(`<a type="button">
                  <i class="fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('` + data.dataHeader.stunting + `')"></i>
                  </a>`);
              } else {
                $('#icon-stunting').html('');
              }

              $('#tahun-rispam').html((data.dataRispam) ? data.dataRispam.thn_terbit : '');
              $('#umur-rispam').html((data.dataRispam) ? data.dataRispam.umur_rispam : '');
              $('#skoring-rispam').html((data.dataRispam) ? data.dataRispam.skoring_evaluasi * 100 : '');
              $('#kategori-rispam').html((data.dataRispam) ? data.dataRispam.kat_skor_rispam : '');


              if (data.dataHeader && data.dataHeader.ba != null) {
                $('#icon-ba').html(`<a type="button">
                  <i class="fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('` + data.dataHeader.ba + `')"></i>
                  </a>`);
              } else {
                $('#icon-ba').html('');
              }


              if (data.dataHeader && data.dataHeader.komiteSSK != null) {
                $('#icon-komiteKepalaDaerah').html(`<a type="button">
                  <i class="fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('` + data.dataHeader.komiteSSK + `')"></i>
                  </a>`);
              } else {
                $('#icon-komiteKepalaDaerah').html('');
              }

              if (data.dataHeader && data.dataHeader.komiteSSK != null) {
                $('#icon-komiteKepalaDaerah').html(`<a type="button">
                  <i class="fas fa-file-pdf" style="color: #c33924; font-size:25px;" onclick="showPdf('` + data.dataHeader.komiteSSK + `')"></i>
                  </a>`);
              } else {
                $('#icon-komiteKepalaDaerah').html('');
              }
          // End Set Header


              let tbody = '',
              no = 1;

              $.each(data.dataBody, function(index, val) {

                let ded = `<button class="btn btn-icon btn-danger" onclick="showPdf('${val.ded != null ? val.ded.replace(/'/g, ",") : ''}')">
                <i class="fas fa-file-pdf fa-lg"></i>
                </button>`,

                dedCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('` + val.ded + `')">
                <i class="fas fa-copy fa-lg"></i>
                </button>`,

                k_lahan = `<button class="btn btn-icon btn-danger" onclick="showPdf('${val.k_lahan != null ?  val.k_lahan.replace(/'/g, ",") : ''}')">
                <i class="fas fa-file-pdf fa-lg"></i>
                </button>`,

                k_lahanCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('` + val.k_lahan + `')">
                <i class="fas fa-copy fa-lg"></i>
                </button>`,

                k_lembaga = `<button class="btn btn-icon btn-danger" onclick="showPdf('${val.k_lembaga != null ? val.k_lembaga.replace(/'/g, ",") : ''}')">
                <i class="fas fa-file-pdf fa-lg"></i>
                </button>`,

                k_lembagaCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('` + val.k_lembaga + `')">
                <i class="fas fa-copy fa-lg"></i>
                </button>`,

                penerima_manfaat = `<button class="btn btn-icon btn-danger" onclick="showPdf('${val.penerima_manfaat != null ? val.penerima_manfaat.replace(/'/g, ",") : ''}')">
                <i class="fas fa-file-pdf fa-lg"></i>
                </button>`,

                penerima_manfaatCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('` + val.penerima_manfaat + `')">
                <i class="fas fa-copy fa-lg"></i>
                </button>`,

                rab = `<button class="btn btn-icon btn-danger" onclick="showPdf('${val.rab != null ? val.rab.replace(/'/g, ",") : ''}')">
                <i class="fas fa-file-pdf fa-lg"></i>
                </button>`,

                rabCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('` + val.rab + `')">
                <i class="fas fa-copy fa-lg"></i>
                </button>`,

                kerjasama = `<button class="btn btn-icon btn-danger" onclick="showPdf('${val.pks != null ? val.pks.replace(/'/g, ",") : ''}')">
                <i class="fas fa-file-pdf fa-lg"></i>
                </button>`,

                kerjasamaCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('` + val.pks + `')">
                <i class="fas fa-copy fa-lg"></i>
                </button>`;

                kelayakanJustek = `<button class="btn btn-icon btn-danger" onclick="showPdf('${val.kelayakan_justek != null ? val.kelayakan_justek.replace(/'/g, ",") : ''}')">
                <i class="fas fa-file-pdf fa-lg"></i>
                </button>`,

                kelayakanJustekCopy = `<button class="btn btn-icon btn-secondary" onclick="copyLink('` + val.kelayakan_justek + `')">
                <i class="fas fa-copy fa-lg"></i>
                </button>`;



                tbody += `<tr>`;
                tbody += `<td class='text-center'>` + no + `</td>`;
                tbody += `<td class='text-center'>` + val.nmkec + `</td>`;
                tbody += `<td class='text-center'>` + val.nmdesa + `</td>`;
                tbody += `<td class='text-center'>` + (val.ded != null ? ded : "") + `</td>`;
                tbody += `<td class='text-center'>` + (val.ded != null ? dedCopy : "") + `</td>`;
                tbody += `<td class='text-center'>` + (val.rab != null ? rab : "") + `</td>`;
                tbody += `<td class='text-center'>` + (val.rab != null ? rabCopy : "") + `</td>`;
                tbody += `<td class='text-center'>` + (val.k_lahan != null ? k_lahan : '') + `</td>`;
                tbody += `<td class='text-center'>` + (val.k_lahan != null ? k_lahanCopy : '') + `</td>`;
                tbody += `<td class='text-center'>` + (val.penerima_manfaat != null ? penerima_manfaat : '') + `</td>`;
                tbody += `<td class='text-center'>` + (val.penerima_manfaat != null ? penerima_manfaatCopy : '') + `</td>`;
                tbody += `<td class='text-center'>` + (val.k_lembaga != null ? k_lembaga : '') + `</td>`;
                tbody += `<td class='text-center'>` + (val.k_lembaga != null ? k_lembagaCopy : '') + `</td>`;
                tbody += `<td class='text-center'>` + (val.pks != null ? kelayakanJustek : '') + `</td>`;
                tbody += `<td class='text-center'>` + (val.pks != null ? kelayakanJustekCopy : '') + `</td>`;
                tbody += `<td class='text-center'>` + (val.pks != null ? kerjasama : '') + `</td>`;
                tbody += `<td class='text-center'>` + (val.pks != null ? kerjasamaCopy : '') + `</td>`;
                tbody += `<td class='text-center'></td>`;
                tbody += `</tr>`;

                no++;
              });

          $('#bodyTableConten').html(tbody);

          $('#container2').removeClass('d-none');

          $('html, body').animate({
            scrollTop: $('#container2').offset().top
          }, {
            duration: 800,
            easing: 'swing'
          });

          $.LoadingOverlay("hide");


        }, function(error) {
          console.log('Kesalahan:', error);
          t_error('Ada yg Error : ' + error)
        });


        }


        $('#provinsi').change(function() {
          var kdlokasi = $("#provinsi option:selected").val();

          ajaxUntukSemua(base_url() + 'AM/getKabKotaByKdlokasi', {
            kdlokasi
          }, function(data) {

            let opt = `<option value="" selected disabled>-- Pilih Kab/Kota --</option>`;

            data.forEach(function(value) {

              opt += `<option value="` + value.KdSatker + `">` + value.nmkabkota + `</option>`

            });

            $('#kabkota').html(opt);

          }, function(error) {
            console.log('Kesalahan:', error);
            t_error('Ada yg Error : ' + error)
          });


        });
      <?php } ?>
    // End JS selain Pemda



      $('#klikKabKota').change(function() {
        var kdkabkota = $("#klikKabKota option:selected").val();

        ajaxUntukSemua(base_url() + 'AM/getKecamatanByProvinsi', {
          kdkabkota
        }, function(data) {

          let opt = `<option value="" selected disabled>-- Pilih Kecamatan --</option>`;

          data.forEach(function(value) {

            opt += `<option value="` + value.kdkec + `">` + value.nmkec + `</option>`

          });

          $('#klikKecamatan').html(opt);

        }, function(error) {
          console.log('Kesalahan:', error);
          t_error('Ada yg Error : ' + error)
        });


      });

      copyLink = function(link) {
        var tempInput = document.createElement('input');

        var sliceString = link.substring(14),
        spasiJadiPersen = sliceString.replace(' ', '%20'),
        stringUrl = base_url() + spasiJadiPersen;


        tempInput.value = stringUrl;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);

        t_succsess('Link Berhasil Disalin.');
      }


      showPdf = async function(pathX) {

        let cekString = pathX.indexOf("/var/www/html/");

        if (cekString == -1) {
          path = pathX.replace(/,/g, "'");
          var sliceString = path.substring(11);

          var spasiJadiPersen = sliceString.replace(' ', '%20');
          var parent = await $('embed#idEmbed').parent();
          var newElement = await `<embed src="${base_url()}assets/2022/${spasiJadiPersen}" id='idEmbed' frameborder='0' width='100%' height='100%'>`;

          await $('embed#idEmbed').remove();
          await parent.append(newElement);
          await $('#modalPDFXX').modal('show');

        } else {
          path = pathX.replace(/,/g, "'");
          var sliceString = path.substring(14);

          var spasiJadiPersen = sliceString.replace(' ', '%20');
          var parent = await $('embed#idEmbed').parent();
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