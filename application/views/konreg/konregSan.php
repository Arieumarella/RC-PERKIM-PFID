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






              <div class="container">
                <div class="col-md-12 col-lg-12">
                  <div class="card card-stacked">
                    <div class="card-body">
                      <!-- <h3 class="card-title">Pilih Privinsi Kab/Kota</h3> -->
                      <div class="mb-3 row">
                        <label class="col-lg-1 col-md-12 col-form-label">Pilih Provinsi</label>
                        <div class="col-lg-2 col-md-12 text-start">
                          <select class="form-select form-sm" id="provinsi">
                            <option value="" selected disabled>-- Pilih Provinsi --</option>

                            <?php foreach ($dataProvinsi as $key => $value) { ?>
                              <option value="<?= $value->kdlokasi; ?>"><?= $value->nmlokasi; ?></option>
                            <?php } ?>

                          </select>
                        </div>
                      </div>
                      <div class="mb-2 row">
                        <label class="col-lg-1 col-md-12 col-form-label">Pilih Kab/Kota</label>
                        <div class="col-lg-2 col-md-12 text-start">
                          <select class="form-select form-sm" id="kabkota">
                            <option value="" selected disabled>-- Pilih Kab/Kota --</option>
                          </select>
                        </div>
                      </div>

                      <div class="mb-2 row">
                        <label class="col-lg-1 col-md-12 col-form-label">Pilih Tematik</label>
                        <div class="col-lg-2 col-md-12 text-start">
                          <select class="form-select form-sm" id="tematik">
                            <option value="" selected disabled>-- Pilih Tematik --</option>
                            <option value="1">Non Tematik</option>
                            <option value="2">Tematik PPKT</option>
                            <option value="3">Tematik PE-RPKI</option>
                          </select>
                        </div>
                      </div>

                      <div class="mt-3 mb-2 row">
                        <div class="col-lg-3 col-md-12 text-end">
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
                        <h2 class="font-calibri-tittle">BERITA ACARA KONSULTASI PROGRAM BIDANG SANITASI TA. <?= $ta; ?></h2>
                        <h2 class="font-calibri-tittle" id="nmprovinsi"> </h2>
                        <h2 class="font-calibri-tittle" id="nmkabkota"> </h2>
                      </div>
                      <br>
                      <div class="row mt-4">
                        <div class="row ">
                          <div class="col-lg-3 col-sm-3" style="margin-top:-0.6%;">
                            Bidang     
                          </div>
                          <div class="col-lg-3 col-sm-2" style="margin-top: -8px;">
                            <div class="d-inline">
                              : 
                            </div>
                            <div class="col-lg-5 col-sm-3" style="padding-left: 4%; margin-top: -22px;" id="bidangHeader">
                              Sanitasi
                            </div>     
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-lg-3 col-sm-5" style="margin-top:-0.6%;">
                            Tematik     
                          </div>
                          <div class="col-lg-3 col-sm-1" style="margin-top: -8px;">
                            <div class="d-inline">
                              : 
                            </div>
                            <div class="" style="padding-left: 4%; margin-top: -22px;" id="icon-rispam">

                            </div>     
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-3" style="margin-top:-0.6%;">
                           Provinsi
                         </div>
                         <div class="col-3" style="margin-top: -8px;">
                          <div class="d-inline">
                            : 
                          </div>
                          <div class="" style="padding-left: 4%; margin-top: -22px;" id="provHeader">

                          </div>     
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-3" style="margin-top:-0.6%;">
                         Provinsi/Kabupaten/Kota Pengusul
                       </div>
                       <div class="col-3" style="margin-top: -8px;">
                        <div class="d-inline">
                          : 
                        </div>
                        <div class="" style="padding-left: 4%; margin-top: -22px;" id="kabKotaHeader">

                        </div>     
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-3" style="margin-top:-0.6%;">
                        Pagu Alokasi Total    
                      </div>
                      <div class="col-3" style="margin-top: -8px;">
                        <div class="d-inline">
                          : 
                        </div>
                        <div class="" style="padding-left: 4%; margin-top: -22px;" id="paguAlokasiTot">

                        </div>     
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-3" style="margin-top:-0.6%;">
                       Pagu Alokasi Pemda
                     </div>
                     <div class="col-3" style="margin-top: -8px;">
                      <div class="d-inline">
                        : 
                      </div>
                      <div class="" style="padding-left: 4%; margin-top: -22px;" id="paguAlokasiPemda">

                      </div>     
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-3" style="margin-top:-0.6%;">
                      Pagu Alokasi (Aspirasi)    
                    </div>
                    <div class="col-3" style="margin-top: -8px;">
                      <div class="d-inline">
                        : 
                      </div>
                      <div class="" style="padding-left: 4%; margin-top: -22px;" id="paguAspirasi">
                       Rp - 
                     </div>     
                   </div>
                 </div>
                 <div class="row mt-3">
                  <div class="col-3" style="margin-top:-0.6%;">
                    Min Approve RK (25% dari Pagu Alokasi)     
                  </div>
                  <div class="col-3" style="margin-top: -8px;">
                    <div class="d-inline">
                      : 
                    </div>
                    <div class="" style="padding-left: 4%; margin-top: -22px;" id="minApproveHeader">

                    </div>     
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-3" style="margin-top:-0.6%;">
                    Max Penunjang (5% dari Pagu Alokasi) 
                  </div>
                  <div class="col-3" style="margin-top: -8px;">
                    <div class="d-inline">
                      : 
                    </div>
                    <div class="" style="padding-left: 4%; margin-top: -22px;" id="MaxApproveHeader">

                    </div>     
                  </div>
                </div>
              </div>

              <input type="hidden" name="paguAlokasitotalhidde" id="paguAlokasitotalhidde">
              <input type="hidden" name="minApproveHeaderHedden" id="minApproveHeaderHedden">
              <input type="hidden" name="maxPenunjangHedden" id="maxPenunjangHedden">
              <input type="hidden" name="kdsatkerHidden" id="kdsatkerHidden">
              <input type="hidden" name="kdTematikHidden" id="kdTematikHidden">
              <input type="hidden" name="kdPersentase" id="kdPersentase">


              <div class="row mt-4">
                <div class="">
                  <?= $this->session->userdata('psn'); ?>
                  <table class="table table-bordered " style="border-color: #a7a7b6;" >
                   <thead class="text-center sticky-top align-middle">
                    <tr>
                      <th style="width: 1%; background-color: #5E767E; color: white;">No</th>
                      <th style="width: 25%; background-color: #5E767E; color: white;">KEGIATAN</th>
                      <th style="width: 25%; background-color: #5E767E; color: white;">CHECKLIST</th>
                      <th style="width: 20%; background-color: #5E767E; color: white;">NILAI <br> (Rp.)</th>
                      <th style="width: 15%; background-color: #5E767E; color: white;">STATUS</th>
                      <th style="width: 25%; background-color: #5E767E; color: white;">KETERANGAN</th>
                      <th style="width: 25%; background-color: #5E767E; color: white;">N/A</th>
                    </tr>
                  </thead>

                  <tbody class="text-end" id="bodyTableConten">
                    <tr class="text-start">
                      <td class="text-center" rowspan="3">1.</td>
                      <td rowspan="3">Kegiatan Fisik</td>
                      <td>a. Nilai Total Fisik</td>
                      <td class="text-satart" style="vertical-align: middle;"><input type="text" class="form-control" name="nilaiFisik" id="nilaiFisik" oninput="validasiPenunjang(); trigerStatus(); this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                        <small class="form-hint text-red" id='notifMerah'></small>
                      </td>
                      <td class="text-center" id="sts_fisik"></td>
                      <td class="text-center"><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatFisik" 
                        style="width: 200px;" id="catatFisik"></textarea>
                      </td>
                      <td rowspan="8"></td>
                    </tr>
                    <tr class="text-start">
                      <td>b. Output</td>
                      <td></td>
                      <td class="text-center"><input class="form-check-input custom-cheklist" type="checkbox" name="checkOutput" id="checkOutput"></td>
                      <td class="text-center" ><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatOutput" 
                        style="width: 200px;" id="catatOutput"></textarea>
                      </td>
                    </tr>
                    <tr class="text-start">
                      <td>C. Komponen</td>
                      <td></td>
                      <td class="text-center"><input class="form-check-input custom-cheklist" type="checkbox" name="checkKomponen" id="checkKomponen"></td>
                      <td class="text-center" ><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatKomponen" 
                        style="width: 200px;" id="catatKomponen"></textarea>
                      </td>
                    </tr>
                    <tr class="text-start">
                      <td class="text-center" rowspan="2">2.</td>
                      <td rowspan="2">Kegiatan Penunjang</td>
                      <td>a. nilai penunjang (5% dari pagu total Jenis/Bidang yang diambil)</td>
                      <td class="text-start" style="vertical-align: middle;"><input type="text" class="form-control" name="nilaiPenunjang" id="nilaiPenunjang"  oninput="validasiPenunjang(); trigerStatus(); this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                        <small class="form-hint text-red" id='notifMerahPenunjang'></small>
                      </td>
                      <td class="text-center" id="kegaiatanStatus"></td>
                      <td class="text-center" id="persentase">

                      </td>
                    </tr>
                    <tr class="text-start">
                      <td>b. Rincian Kegiatan Penunjang</td>
                      <td></td>
                      <td class="text-center"><input class="form-check-input custom-cheklist" type="checkbox" name="checkPenunjang" id="checkPenunjang"></td>
                      <td class="text-center" ><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="rincianKegiatan" 
                        style="width: 200px;" id="rincianKegiatan"></textarea>
                      </td>
                    </tr>

                    <tr class="text-start">
                      <td class="text-center" >3.</td>
                      <td >Kegiatan Fisik + Penunjang</td>
                      <td>a. Nilai Fisik + Penunjang</td>
                      <td class="text-end" style="vertical-align: middle;"><input type="text" class="form-control" name="fisikPenunjang" id="fisikPenunjang"  oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" readonly></td>
                      <td class="text-center" id="stsNilaiFisikPenunajng"></td>
                      <td class="text-center" ><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="fisikPenunjangCatat" 
                        style="width: 200px;" id="fisikPenunjangCatat"></textarea>
                      </td>
                    </tr>

                    <tr class="text-start">
                      <td class="text-center" rowspan="36">4.</td>
                      <td rowspan="2">Readiness Criteria</td>
                      <td>a. Surat pernyataan tanggungjawab mutlak (SPTJM)</td>
                      <td class="text-end" style="vertical-align: middle;"></td>
                      <td class="text-center"><input class="form-check-input custom-cheklist" type="checkbox" name="checkSPTJM" id="checkSPTJM"></td>
                      <td class="text-center"><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatSptjm" 
                        style="width: 200px;" id="catatSptjm"></textarea>
                      </td>
                    </tr>

                    <tr class="text-start">
                      <td>b. Dokumen Strategi Sanitasi Kab/Kota (SSK)</td>
                      <td class="text-end" style="vertical-align: middle;"></td>
                      <td class="text-center"><input class="form-check-input custom-cheklist" type="checkbox" name="checkSSK" id="checkSSK"></td>
                      <td class="text-center"><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatSSK" 
                        style="width: 200px;" id="catatSSK"></textarea>
                      </td>
                    </tr>

                    <tr class="text-start">
                      <td rowspan="7">Readiness Criteria - Air Limbah<br>(SPALD-T dan SPALD-S)</td>
                      <td>a. Template Dokumen Perencanaan Rinci/Detail Engineering Design (DED)</td>
                      <td class="text-end" style="vertical-align: middle;"></td>
                      <td class="text-center">
                        <input class="form-check-input custom-cheklist" type="checkbox" name="checkDed" id="checkDed">
                        <p class="c_air_limba_na d-none">N/A</p>
                      </td>
                      <td class="text-center">
                        <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatDed" 
                        style="width: 200px;" id="catatDed"></textarea>
                        <p class="c_air_limba_na d-none">N/A</p>
                      </td>
                      <td class="text-center" rowspan="7"><input class="form-check-input custom-cheklist" type="checkbox" name="air_limba_na" id="air_limba_na"></td>
                    </tr>

                    <tr class="text-start">
                      <td>b. Template Rencana Anggaran Biaya (RAB)  </td>
                      <td class="text-end" style="vertical-align: middle;"></td>
                      <td class="text-center">
                        <input class="form-check-input custom-cheklist" type="checkbox" name="checkRab" id="checkRab">
                        <p class="c_air_limba_na d-none">N/A</p>
                      </td>
                      <td class="text-center">
                        <p class="c_air_limba_na d-none">N/A</p>
                        <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatRab" 
                        style="width: 200px;" id="catatRab"></textarea>
                      </td>
                    </tr>

                    <tr class="text-start">
                      <td>c. Surat Pernyataan Kesiapan Pelaksanaan Kegiatan dari Pemerintah Desa/Kelurahan</td>
                      <td class="text-end" style="vertical-align: middle;"></td>
                      <td class="text-center">
                        <p class="c_air_limba_na d-none">N/A</p>
                        <input class="form-check-input custom-cheklist" type="checkbox" name="checkSpkp" id="checkSpkp"></td>
                        <td class="text-center">
                          <p class="c_air_limba_na d-none">N/A</p>
                          <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatSpkp" 
                          style="width: 200px;" id="catatSpkp"></textarea>
                        </td>
                      </tr>

                      <tr class="text-start">
                        <td>d. Kesiapan lahan berupa surat pernyataan kesiapan dari Pemerintah Desa/Sertifikat/Akta Hibah/Akta Jual Beli</td>
                        <td class="text-end" style="vertical-align: middle;"></td>
                        <td class="text-center">
                          <p class="c_air_limba_na d-none">N/A</p>
                          <input class="form-check-input custom-cheklist" type="checkbox" name="checkKlbs" id="checkKlbs">
                        </td>
                        <td class="text-center">
                          <p class="c_air_limba_na d-none">N/A</p>
                          <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatKlbs" 
                          style="width: 200px;" id="catatKlbs"></textarea>
                        </td>
                      </tr>

                      <tr class="text-start">
                        <td>e. Daftar Calon Penerima Manfaat</td>
                        <td class="text-end" style="vertical-align: middle;"></td>
                        <td class="text-center">
                          <p class="c_air_limba_na d-none">N/A</p>
                          <input class="form-check-input custom-cheklist" type="checkbox" name="checkDcpm" id="checkDcpm">
                        </td>
                        <td class="text-center">
                          <p class="c_air_limba_na d-none">N/A</p>
                          <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatDcpm" 
                          style="width: 200px;" id="catatDcpm"></textarea>
                        </td>
                      </tr>

                      <tr class="text-start">
                        <td>f. Bukti Kepemilikan IPLT</td>
                        <td class="text-end" style="vertical-align: middle;"></td>
                        <td class="text-center">
                          <p class="c_air_limba_na d-none">N/A</p>
                          <input class="form-check-input custom-cheklist" type="checkbox" name="checkIplt" id="checkIplt">
                        </td>
                        <td class="text-center">
                          <p class="c_air_limba_na d-none">N/A</p>
                          <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatIplt" 
                          style="width: 200px;" id="catatIplt"></textarea>
                        </td>
                      </tr>


                      <tr class="text-start">
                        <td>g. Justifikasi teknis untuk penambahan pipa pengumpul</td>
                        <td class="text-end" style="vertical-align: middle;"></td>
                        <td class="text-center">
                          <p class="c_air_limba_na d-none">N/A</p>
                          <input class="form-check-input custom-cheklist" type="checkbox" name="checkJustifikasi" id="checkJustifikasi"></td>
                          <td class="text-center">
                            <p class="c_air_limba_na d-none">N/A</p>
                            <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatJustifikasi" 
                            style="width: 200px;" id="catatJustifikasi"></textarea>
                          </td>
                        </tr>

                        <tr class="text-start">
                          <td rowspan="15">Readiness Criteria - Air Limbah <br> (IPLT dan Truck Tinja)</td>
                          <td>a. IPLT - Surat Minat Kepala Daerah </td>
                          <td class="text-end" style="vertical-align: middle;"></td>
                          <td class="text-center">
                            <p class="c_air_limba_na_iplt d-none">N/A</p>
                            <input class="form-check-input custom-cheklist" type="checkbox" name="checkSmkd" id="checkSmkd"></td>
                            <td class="text-center">
                              <p class="c_air_limba_na_iplt d-none">N/A</p>
                              <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatSmkd" 
                              style="width: 200px;" id="catatSmkd"></textarea>
                            </td>
                            <td class="text-center" rowspan="15"><input class="form-check-input custom-cheklist" type="checkbox" name="air_limba_na_iplt" id="air_limba_na_iplt"></td>
                          </tr>

                          <tr class="text-start">
                            <td>b. Justifikasi teknis untuk penambahan pipa pengumpul</td>
                            <td class="text-end" style="vertical-align: middle;"></td>
                            <td class="text-center">
                              <p class="c_air_limba_na_iplt d-none">N/A</p>
                              <input class="form-check-input custom-cheklist" type="checkbox" name="checkSpl" id="checkSpl"></td>
                              <td class="text-center">
                                <p class="c_air_limba_na_iplt d-none">N/A</p>
                                <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakSpl" 
                                style="width: 200px;" id="catakSpl"></textarea>
                              </td>
                            </tr>

                            <tr class="text-start">
                              <td>c. IPLT - Persetujuan dari Kepala BPPW  </td>
                              <td class="text-end" style="vertical-align: middle;"></td>
                              <td class="text-center">
                                <p class="c_air_limba_na_iplt d-none">N/A</p>
                                <input class="form-check-input custom-cheklist" type="checkbox" name="checkBppw" id="checkBppw"></td>
                                <td class="text-center">
                                  <p class="c_air_limba_na_iplt d-none">N/A</p>
                                  <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakBppw" 
                                  style="width: 200px;" id="catakBppw"></textarea>
                                </td>
                              </tr>

                              <tr class="text-start">
                                <td>d. IPLT - Dokumen Perencanaan Rinci / Detail Engineering Design (DED)</td>
                                <td class="text-end" style="vertical-align: middle;"></td>
                                <td class="text-center">
                                  <p class="c_air_limba_na_iplt d-none">N/A</p>
                                  <input class="form-check-input custom-cheklist" type="checkbox" name="checkIDpr" id="checkIDpr"></td>
                                  <td class="text-center">
                                    <p class="c_air_limba_na_iplt d-none">N/A</p>
                                    <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakIDpr" 
                                    style="width: 200px;" id="catakIDpr"></textarea>
                                  </td>
                                </tr>

                                <tr class="text-start">
                                  <td>e. IPLT - Rencana Anggaran Biaya (RAB)</td>
                                  <td class="text-end" style="vertical-align: middle;"></td>
                                  <td class="text-center">
                                    <p class="c_air_limba_na_iplt d-none">N/A</p>
                                    <input class="form-check-input custom-cheklist" type="checkbox" name="checkIRab" id="checkIRab"></td>
                                    <td class="text-center">
                                      <p class="c_air_limba_na_iplt d-none">N/A</p>
                                      <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakIRab" 
                                      style="width: 200px;" id="catakIRab"></textarea>
                                    </td>
                                  </tr>

                                  <tr class="text-start">
                                    <td>f. IPLT - Bukti Legalitas Lahan</td>
                                    <td class="text-end" style="vertical-align: middle;"></td>
                                    <td class="text-center">
                                      <p class="c_air_limba_na_iplt d-none">N/A</p>
                                      <input class="form-check-input custom-cheklist" type="checkbox" name="checkIBll" id="checkIBll"></td>
                                      <td class="text-center">
                                        <p class="c_air_limba_na_iplt d-none">N/A</p>
                                        <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakIBll" 
                                        style="width: 200px;" id="catakIBll"></textarea>
                                      </td>
                                    </tr>

                                    <tr class="text-start">
                                      <td>g. IPLT - Dokumentasi Justifikasi Teknis</td>
                                      <td class="text-end" style="vertical-align: middle;"></td>
                                      <td class="text-center">
                                        <p class="c_air_limba_na_iplt d-none">N/A</p>
                                        <input class="form-check-input custom-cheklist" type="checkbox" name="checkIDjt" id="checkIDjt"></td>
                                        <td class="text-center">
                                          <p class="c_air_limba_na_iplt d-none">N/A</p>
                                          <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakIDjt" 
                                          style="width: 200px;" id="catakIDjt"></textarea>
                                        </td>
                                      </tr>

                                      <tr class="text-start">
                                        <td>h. IPLT - Masterplan/Rencana Induk Air Limbah Kota/Kab</td>
                                        <td class="text-end" style="vertical-align: middle;"></td>
                                        <td class="text-center">
                                          <p class="c_air_limba_na_iplt d-none">N/A</p>
                                          <input class="form-check-input custom-cheklist" type="checkbox" name="checkIMasterPlan" id="checkIMasterPlan"></td>
                                          <td class="text-center">
                                            <p class="c_air_limba_na_iplt d-none">N/A</p>
                                            <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakIMasterPlan" 
                                            style="width: 200px;" id="catakIMasterPlan"></textarea>
                                          </td>
                                        </tr>

                                        <tr class="text-start">
                                          <td>i. IPLT - Dokumen Lingkungan (AMDAL/UKL-UPL)</td>
                                          <td class="text-end" style="vertical-align: middle;"></td>
                                          <td class="text-center">
                                            <p class="c_air_limba_na_iplt d-none">N/A</p>
                                            <input class="form-check-input custom-cheklist" type="checkbox" name="checkIAmdal" id="checkIAmdal"></td>
                                            <td class="text-center">
                                              <p class="c_air_limba_na_iplt d-none">N/A</p>
                                              <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakIAmdal" 
                                              style="width: 200px;" id="catakIAmdal"></textarea>
                                            </td>
                                          </tr>

                                          <tr class="text-start">
                                            <td>j. IPLT - Kesiapan Lembaga Pengelola</td>
                                            <td class="text-end" style="vertical-align: middle;"></td>
                                            <td class="text-center">
                                              <p class="c_air_limba_na_iplt d-none">N/A</p>
                                              <input class="form-check-input custom-cheklist" type="checkbox" name="checkIKlp" id="checkIKlp"></td>
                                              <td class="text-center">
                                                <p class="c_air_limba_na_iplt d-none">N/A</p>
                                                <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakIKlp" 
                                                style="width: 200px;" id="catakIKlp"></textarea>
                                              </td>
                                            </tr>

                                            <tr class="text-start">
                                              <td>k. IPLT - Business Plan </td>
                                              <td class="text-end" style="vertical-align: middle;"></td>
                                              <td class="text-center">
                                                <p class="c_air_limba_na_iplt d-none">N/A</p>
                                                <input class="form-check-input custom-cheklist" type="checkbox" name="checkIBisnis" id="checkIBisnis"></td>
                                                <td class="text-center">
                                                  <p class="c_air_limba_na_iplt d-none">N/A</p>
                                                  <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakIBisnis" 
                                                  style="width: 200px;" id="catakIBisnis"></textarea>
                                                </td>
                                              </tr>

                                              <tr class="text-start">
                                                <td>l. IPLT - Bukti Komitmen Layanan Lumpur Tinja Terjadwal</td>
                                                <td class="text-end" style="vertical-align: middle;"></td>
                                                <td class="text-center">
                                                  <p class="c_air_limba_na_iplt d-none">N/A</p>
                                                  <input class="form-check-input custom-cheklist" type="checkbox" name="checkIBkll" id="checkIBkll"></td>
                                                  <td class="text-center">
                                                    <p class="c_air_limba_na_iplt d-none">N/A</p>
                                                    <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakIBkll" 
                                                    style="width: 200px;" id="catakIBkll"></textarea>
                                                  </td>
                                                </tr>

                                                <tr class="text-start">
                                                  <td>m. IPLT - As Build Drawing IPLT</td>
                                                  <td class="text-end" style="vertical-align: middle;"></td>
                                                  <td class="text-center">
                                                    <p class="c_air_limba_na_iplt d-none">N/A</p>
                                                    <input class="form-check-input custom-cheklist" type="checkbox" name="checkIAbd" id="checkIAbd"></td>
                                                    <td class="text-center">
                                                      <p class="c_air_limba_na_iplt d-none">N/A</p>
                                                      <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakIAbd" 
                                                      style="width: 200px;" id="catakIAbd"></textarea>
                                                    </td>
                                                  </tr>

                                                  <tr class="text-start">
                                                    <td>n. IPLT - Audit/Reviu BPKP</td>
                                                    <td class="text-end" style="vertical-align: middle;"></td>
                                                    <td class="text-center">
                                                      <p class="c_air_limba_na_iplt d-none">N/A</p>
                                                      <input class="form-check-input custom-cheklist" type="checkbox" name="checkIBpkp" id="checkIBpkp"></td>
                                                      <td class="text-center">
                                                        <p class="c_air_limba_na_iplt d-none">N/A</p>
                                                        <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakIBpkp" 
                                                        style="width: 200px;" id="catakIBpkp"></textarea>
                                                      </td>
                                                    </tr>

                                                    <tr class="text-start">
                                                      <td>o. Truck Tinja - Spesifikasi teknis dan harga supplier</td>
                                                      <td class="text-end" style="vertical-align: middle;"></td>
                                                      <td class="text-center">
                                                        <p class="c_air_limba_na_iplt d-none">N/A</p>
                                                        <input class="form-check-input custom-cheklist" type="checkbox" name="checkITrukTinja" id="checkITrukTinja"></td>
                                                        <td class="text-center">
                                                          <p class="c_air_limba_na_iplt d-none">N/A</p>
                                                          <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakITrukTinja" 
                                                          style="width: 200px;" id="catakITrukTinja"></textarea>
                                                        </td>
                                                      </tr>

                                                      <tr class="text-start">
                                                        <td rowspan="12">Readiness Criteria - Persampahan <br> (Pembangunan dan Peningkatan/Rehabilitasi TPS3R)</td>
                                                        <td>a. Dokumen Perencanaan Rinci / Detail Engineering Design (DED) </td>
                                                        <td class="text-end" style="vertical-align: middle;"></td>
                                                        <td class="text-center">
                                                          <p class="c_persambahan_na d-none">N/A</p>
                                                          <input class="form-check-input custom-cheklist" type="checkbox" name="checkPPembangunan" id="checkPPembangunan"></td>
                                                          <td class="text-center">
                                                            <p class="c_persambahan_na d-none">N/A</p>
                                                            <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatPPembangunan" 
                                                            style="width: 200px;" id="catatPPembangunan"></textarea>
                                                          </td>
                                                          <td class="text-center" rowspan="12"><input class="form-check-input custom-cheklist" type="checkbox" name="persambahan_na" id="persambahan_na"></td>
                                                        </tr>

                                                        <tr class="text-start">
                                                          <td>b. Rencana Anggaran Biaya (RAB)</td>
                                                          <td class="text-end" style="vertical-align: middle;"></td>
                                                          <td class="text-center">
                                                            <p class="c_persambahan_na d-none">N/A</p>
                                                            <input class="form-check-input custom-cheklist" type="checkbox" name="checkPRab" id="checkPRab"></td>
                                                            <td class="text-center">
                                                              <p class="c_persambahan_na d-none">N/A</p>
                                                              <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakPRab" 
                                                              style="width: 200px;" id="catakPRab"></textarea>
                                                            </td>
                                                          </tr>

                                                          <tr class="text-start">
                                                            <td>c. Surat Pernyataan Kesiapan Pelaksanaan Kegiatan dari Pemerintah Desa/Kelurahan</td>
                                                            <td class="text-end" style="vertical-align: middle;"></td>
                                                            <td class="text-center">
                                                              <p class="c_persambahan_na d-none">N/A</p>
                                                              <input class="form-check-input custom-cheklist" type="checkbox" name="checkPSpkp" id="checkPSpkp"></td>
                                                              <td class="text-center">
                                                                <p class="c_persambahan_na d-none">N/A</p>
                                                                <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakPSpkp" 
                                                                style="width: 200px;" id="catakPSpkp"></textarea>
                                                              </td>
                                                            </tr>

                                                            <tr class="text-start">
                                                              <td>d. Bukti Legalitas Lahan</td>
                                                              <td class="text-end" style="vertical-align: middle;"></td>
                                                              <td class="text-center">
                                                                <p class="c_persambahan_na d-none">N/A</p>
                                                                <input class="form-check-input custom-cheklist" type="checkbox" name="checkPBll" id="checkPBll"></td>
                                                                <td class="text-center">
                                                                  <p class="c_persambahan_na d-none">N/A</p>
                                                                  <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakPBll" 
                                                                  style="width: 200px;" id="catakPBll"></textarea>
                                                                </td>
                                                              </tr>

                                                              <tr class="text-start">
                                                                <td>e. Konsep Business Plan Pengelolaan TPS3R</td>
                                                                <td class="text-end" style="vertical-align: middle;"></td>
                                                                <td class="text-center">
                                                                  <p class="c_persambahan_na d-none">N/A</p>
                                                                  <input class="form-check-input custom-cheklist" type="checkbox" name="checkPKbp" id="checkPKbp"></td>
                                                                  <td class="text-center">
                                                                    <p class="c_persambahan_na d-none">N/A</p>
                                                                    <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakPKbp" 
                                                                    style="width: 200px;" id="catakPKbp"></textarea>
                                                                  </td>
                                                                </tr>

                                                                <tr class="text-start">
                                                                  <td>f. Daftar Calon Penerima Manfaat</td>
                                                                  <td class="text-end" style="vertical-align: middle;"></td>
                                                                  <td class="text-center">
                                                                    <p class="c_persambahan_na d-none">N/A</p>
                                                                    <input class="form-check-input custom-cheklist" type="checkbox" name="checkPDcpm" id="checkPDcpm"></td>
                                                                    <td class="text-center">
                                                                      <p class="c_persambahan_na d-none">N/A</p>
                                                                      <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakPDcpm" 
                                                                      style="width: 200px;" id="catakPDcpm"></textarea>
                                                                    </td>
                                                                  </tr>

                                                                  <tr class="text-start">
                                                                    <td>g. Berita Acara Kesiapan Warga</td>
                                                                    <td class="text-end" style="vertical-align: middle;"></td>
                                                                    <td class="text-center">
                                                                      <p class="c_persambahan_na d-none">N/A</p>
                                                                      <input class="form-check-input custom-cheklist" type="checkbox" name="checkPBkaw" id="checkPBkaw"></td>
                                                                      <td class="text-center">
                                                                        <p class="c_persambahan_na d-none">N/A</p>
                                                                        <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakPBkaw" 
                                                                        style="width: 200px;" id="catakPBkaw"></textarea>
                                                                      </td>
                                                                    </tr>

                                                                    <tr class="text-start">
                                                                      <td>h. Surat pernyataan kesiapan dan dukungan biaya operasi dan pemeliharaan</td>
                                                                      <td class="text-end" style="vertical-align: middle;"></td>
                                                                      <td class="text-center">
                                                                        <p class="c_persambahan_na d-none">N/A</p>
                                                                        <input class="form-check-input custom-cheklist" type="checkbox" name="checkPSPKD" id="checkPSPKD"></td>
                                                                        <td class="text-center">
                                                                          <p class="c_persambahan_na d-none">N/A</p>
                                                                          <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakPSPKD" 
                                                                          style="width: 200px;" id="catakPSPKD"></textarea>
                                                                        </td>
                                                                      </tr>

                                                                      <tr class="text-start">
                                                                        <td>i. Durat dukungan Dinas Lingkungan Hidup</td>
                                                                        <td class="text-end" style="vertical-align: middle;"></td>
                                                                        <td class="text-center">
                                                                          <p class="c_persambahan_na d-none">N/A</p>
                                                                          <input class="form-check-input custom-cheklist" type="checkbox" name="checkPDddl" id="checkPDddl"></td>
                                                                          <td class="text-center">
                                                                            <p class="c_persambahan_na d-none">N/A</p>
                                                                            <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakPDddl" 
                                                                            style="width: 200px;" id="catakPDddl"></textarea>
                                                                          </td>
                                                                        </tr>

                                                                        <tr class="text-start">
                                                                          <td>j. Justifikasi Teknis Peningkatan/Rehabilitasi TPS3R</td>
                                                                          <td class="text-end" style="vertical-align: middle;"></td>
                                                                          <td class="text-center">
                                                                            <p class="c_persambahan_na d-none">N/A</p>
                                                                            <input class="form-check-input custom-cheklist" type="checkbox" name="checkJtp" id="checkJtp"></td>
                                                                            <td class="text-center">
                                                                              <p class="c_persambahan_na d-none">N/A</p>
                                                                              <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakJtp" 
                                                                              style="width: 200px;" id="catakJtp"></textarea>
                                                                            </td>
                                                                          </tr>

                                                                          <tr class="text-start">
                                                                            <td>k. SK Pembentukan KKP (khusus untuk peningkatan/ rehabilitasi TPS3R)</td>
                                                                            <td class="text-end" style="vertical-align: middle;"></td>
                                                                            <td class="text-center">
                                                                              <p class="c_persambahan_na d-none">N/A</p>
                                                                              <input class="form-check-input custom-cheklist" type="checkbox" name="checkSKKKP" id="checkSKKKP"></td>
                                                                              <td class="text-center">
                                                                                <p class="c_persambahan_na d-none">N/A</p>
                                                                                <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakSKKKP" 
                                                                                style="width: 200px;" id="catakSKKKP"></textarea>
                                                                              </td>
                                                                            </tr>

                                                                            <tr class="text-start">
                                                                              <td>l. As Build Drawing TPS3R Terbangun</td>
                                                                              <td class="text-end" style="vertical-align: middle;"></td>
                                                                              <td class="text-center">
                                                                                <p class="c_persambahan_na d-none">N/A</p>
                                                                                <input class="form-check-input custom-cheklist" type="checkbox" name="checkAbdTp" id="checkAbdTp"></td>
                                                                                <td class="text-center">
                                                                                  <p class="c_persambahan_na d-none">N/A</p>
                                                                                  <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catakAbdTp" 
                                                                                  style="width: 200px;" id="catakAbdTp"></textarea>
                                                                                </td>
                                                                              </tr>

                                                                              <tr>
                                                                                <td colspan="7" class="text-center"  style="background-color: #5E767E; color: white;">CATATAN</td>
                                                                              </tr>

                                                                              <tr>
                                                                                <td colspan="7" class="text-center" ><textarea class="form-control" data-bs-toggle="" placeholder="" name="catatanAll" 
                                                                                  style="width: 100%; height: 200px !important;" id="catatanAll"></textarea></td>
                                                                                </tr>

                                                                              </tr>
                                                                            </tbody>
                                                                          </table>
                                                                          <div class="ms-auto text-end">
                                                                            <button class="btn btn-dark" onclick="showCetakBa()">CETAK BA</button>
                                                                            <button class="btn btn-primary" onclick="simpanForm();">Simpan</button>
                                                                          </div>
                                                                        </div>
                                                                      </div>


                                                                      <div class="modal modal-blur fade" id="modalCetakBa" tabindex="-1" role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                                                          <div class="modal-content">
                                                                            <div class="modal-header">
                                                                              <h5 class="modal-title">Cetak Berita Acara Bidang Sanitasi</h5>
                                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                              <form action="<?= base_url(); ?>KonregSAN/prsCetakBaSAN" method="POST">
                                                                                <input type="hidden" name="kdsatkerBa" id="kdsatkerBa">
                                                                                <input type="hidden" name="tematikBa" id="tematikBa">
                                                                                <div class="row">
                                                                                  <div class="mb-3 col-6">
                                                                                    <label class="form-label">Nama Peserta</label>
                                                                                    <input type="text" class="form-control" name="peserta" placeholder="Nama Peserta." required>
                                                                                  </div>
                                                                                  <div class="mb-3 col-6">
                                                                                    <label class="form-label">Nomor Telepon Peserta</label>
                                                                                    <input type="text" class="form-control" name="noTlp" placeholder="Nomor Telepon Peserta." oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                                                                                  </div>
                                                                                </div>

                                                                                <hr class="mt-2 mb-2">

                                                                                <div class="row">
                                                                                  <div class="mb-3 col-6">
                                                                                    <label class="form-label">Penanda Tangan Daerah</label>
                                                                                    <input type="text" class="form-control" name="ttdDaerah" placeholder="Nama Penanda Tangan Daerah." required>
                                                                                  </div>
                                                                                  <div class="mb-3 col-6">
                                                                                    <label class="form-label">Jabatan Penanda Tangan Daerah</label>
                                                                                    <input type="text" class="form-control" name="jabatanttdDaerah" placeholder="Jabatan Penanda Tangan Daerah." required>
                                                                                  </div>

                                                                                  <div class="mb-3 col-6">
                                                                                    <label class="form-label">Name Petugas Balai</label>
                                                                                    <input type="text" class="form-control" name="balai" placeholder="Nama Petugas Balai." required>
                                                                                  </div>
                                                                                  <div class="mb-3 col-6">
                                                                                    <label class="form-label">Jabatan Petugas Balai</label>
                                                                                    <input type="text" class="form-control" name="jabatanBalai" placeholder="Jabatan Petugas Balai." required>
                                                                                  </div>

                                                                                  <div class="mb-3 col-6">
                                                                                    <label class="form-label">Name Petugas Ditjen CK 1</label>
                                                                                    <input type="text" class="form-control" name="ck1" placeholder="Nama Petugas Ditjen CK." required>
                                                                                  </div>
                                                                                  <div class="mb-3 col-6">
                                                                                    <label class="form-label">Jabatan Petugas Ditjen CK 1</label>
                                                                                    <input type="text" class="form-control" name="jabatanCk1" placeholder="Jabatan Ditjen CK." required>
                                                                                  </div>

                                                                                  <div class="mb-3 col-6">
                                                                                    <label class="form-label">Name Petugas Ditjen CK 2</label>
                                                                                    <input type="text" class="form-control" name="ck2" placeholder="Nama Petugas Ditjen CK." required>
                                                                                  </div>
                                                                                  <div class="mb-3 col-6">
                                                                                    <label class="form-label">Jabatan Petugas Ditjen CK 2</label>
                                                                                    <input type="text" class="form-control" name="jabatanCk2" placeholder="Jabatan Ditjen CK." required>
                                                                                  </div>
                                                                                  <div class="mb-3 col-6">
                                                                                    <label class="form-label">Name Petugas PFID</label>
                                                                                    <input type="text" class="form-control" name="Pfid" placeholder="Nama Petugas PFID." required>
                                                                                  </div>
                                                                                  <div class="mb-3 col-6">
                                                                                    <label class="form-label">Jabatan Petugas PFID</label>
                                                                                    <input type="text" class="form-control" name="jabatanPfid" placeholder="Jabatan PFID." required>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="modal-footer ms-auto">
                                                                                  <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">
                                                                                    Cancel
                                                                                  </a>
                                                                                  <button class="btn btn-primary" type="submit">Simpan</button>
                                                                                </form>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </div>


                                                                        <script type="text/javascript">
                                                                          $(document).ready(function() {

                                                                           $('#air_limba_na').change(function() {
                                                                            if($(this).is(':checked')) {
                                                                              $('.c_air_limba_na').removeClass('d-none'); 
                                                                              $('#checkDed').addClass('d-none'); 
                                                                              $('#catatDed').addClass('d-none');
                                                                              $('#checkRab').addClass('d-none');
                                                                              $('#catatRab').addClass('d-none');
                                                                              $('#checkSpkp').addClass('d-none');
                                                                              $('#catatSpkp').addClass('d-none');
                                                                              $('#checkKlbs').addClass('d-none');
                                                                              $('#catatKlbs').addClass('d-none');
                                                                              $('#checkDcpm').addClass('d-none');
                                                                              $('#catatDcpm').addClass('d-none');
                                                                              $('#checkIplt').addClass('d-none');
                                                                              $('#catatIplt').addClass('d-none');
                                                                              $('#checkJustifikasi').addClass('d-none');
                                                                              $('#catatJustifikasi').addClass('d-none');
                                                                            } else {
                                                                              $('.c_air_limba_na').addClass('d-none');
                                                                              $('#checkDed').removeClass('d-none'); 
                                                                              $('#catatDed').removeClass('d-none');
                                                                              $('#checkRab').removeClass('d-none');
                                                                              $('#catatRab').removeClass('d-none');
                                                                              $('#checkSpkp').removeClass('d-none');
                                                                              $('#catatSpkp').removeClass('d-none');
                                                                              $('#checkKlbs').removeClass('d-none');
                                                                              $('#catatKlbs').removeClass('d-none');
                                                                              $('#checkDcpm').removeClass('d-none');
                                                                              $('#catatDcpm').removeClass('d-none');
                                                                              $('#checkIplt').removeClass('d-none');
                                                                              $('#catatIplt').removeClass('d-none');
                                                                              $('#checkJustifikasi').removeClass('d-none');
                                                                              $('#catatJustifikasi').removeClass('d-none');


                                                                            }
                                                                          });


                                                                           $('#air_limba_na_iplt').change(function() {
                                                                            if($(this).is(':checked')) {
                                                                              $('.c_air_limba_na_iplt').removeClass('d-none'); 
                                                                              $('#checkSmkd').addClass('d-none');
                                                                              $('#catatSmkd').addClass('d-none'); 
                                                                              $('#checkSpl').addClass('d-none');
                                                                              $('#catakSpl').addClass('d-none');
                                                                              $('#checkBppw').addClass('d-none');
                                                                              $('#catakBppw').addClass('d-none');
                                                                              $('#checkIDpr').addClass('d-none');
                                                                              $('#catakIDpr').addClass('d-none');
                                                                              $('#checkIRab').addClass('d-none');
                                                                              $('#catakIRab').addClass('d-none');
                                                                              $('#checkIBll').addClass('d-none');
                                                                              $('#catakIBll').addClass('d-none');
                                                                              $('#checkIDjt').addClass('d-none');
                                                                              $('#catakIDjt').addClass('d-none');
                                                                              $('#checkIMasterPlan').addClass('d-none');
                                                                              $('#catakIMasterPlan').addClass('d-none');
                                                                              $('#checkIAmdal').addClass('d-none');
                                                                              $('#catakIAmdal').addClass('d-none');
                                                                              $('#checkIKlp').addClass('d-none');
                                                                              $('#catakIKlp').addClass('d-none');
                                                                              $('#checkIBisnis').addClass('d-none');
                                                                              $('#catakIBisnis').addClass('d-none');
                                                                              $('#checkIBkll').addClass('d-none');
                                                                              $('#catakIBkll').addClass('d-none');
                                                                              $('#checkIAbd').addClass('d-none');
                                                                              $('#catakIAbd').addClass('d-none');
                                                                              $('#checkIBpkp').addClass('d-none');
                                                                              $('#catakIBpkp').addClass('d-none');
                                                                              $('#checkITrukTinja').addClass('d-none');
                                                                              $('#catakITrukTinja').addClass('d-none');
                                                                            } else {
                                                                              $('.c_air_limba_na_iplt').addClass('d-none');

                                                                              $('#checkSmkd').removeClass('d-none');
                                                                              $('#catatSmkd').removeClass('d-none'); 
                                                                              $('#checkSpl').removeClass('d-none');
                                                                              $('#catakSpl').removeClass('d-none');
                                                                              $('#checkBppw').removeClass('d-none');
                                                                              $('#catakBppw').removeClass('d-none');
                                                                              $('#checkIDpr').removeClass('d-none');
                                                                              $('#catakIDpr').removeClass('d-none');
                                                                              $('#checkIRab').removeClass('d-none');
                                                                              $('#catakIRab').removeClass('d-none');
                                                                              $('#checkIBll').removeClass('d-none');
                                                                              $('#catakIBll').removeClass('d-none');
                                                                              $('#checkIDjt').removeClass('d-none');
                                                                              $('#catakIDjt').removeClass('d-none');
                                                                              $('#checkIMasterPlan').removeClass('d-none');
                                                                              $('#catakIMasterPlan').removeClass('d-none');
                                                                              $('#checkIAmdal').removeClass('d-none');
                                                                              $('#catakIAmdal').removeClass('d-none');
                                                                              $('#checkIKlp').removeClass('d-none');
                                                                              $('#catakIKlp').removeClass('d-none');
                                                                              $('#checkIBisnis').removeClass('d-none');
                                                                              $('#catakIBisnis').removeClass('d-none');
                                                                              $('#checkIBkll').removeClass('d-none');
                                                                              $('#catakIBkll').removeClass('d-none');
                                                                              $('#checkIAbd').removeClass('d-none');
                                                                              $('#catakIAbd').removeClass('d-none');
                                                                              $('#checkIBpkp').removeClass('d-none');
                                                                              $('#catakIBpkp').removeClass('d-none');
                                                                              $('#checkITrukTinja').removeClass('d-none');
                                                                              $('#catakITrukTinja').removeClass('d-none');

                                                                            }
                                                                          });

          $('#persambahan_na').change(function() {
            if($(this).is(':checked')) {
              $('.c_persambahan_na').removeClass('d-none'); 
              
              $('#checkPPembangunan').addClass('d-none');
              $('#catatPPembangunan').addClass('d-none');
              $('#checkPRab').addClass('d-none');
              $('#catakPRab').addClass('d-none');
              $('#checkPSpkp').addClass('d-none');
              $('#catakPSpkp').addClass('d-none');
              $('#checkPBll').addClass('d-none');
              $('#catakPBll').addClass('d-none');
              $('#checkPKbp').addClass('d-none');
              $('#catakPKbp').addClass('d-none');
              $('#checkPDcpm').addClass('d-none');
              $('#catakPDcpm').addClass('d-none');
              $('#checkPBkaw').addClass('d-none');
              $('#catakPBkaw').addClass('d-none');
              $('#checkPSPKD').addClass('d-none');
              $('#catakPSPKD').addClass('d-none');
              $('#checkPDddl').addClass('d-none');
              $('#catakPDddl').addClass('d-none');
              $('#checkJtp').addClass('d-none');
              $('#catakJtp').addClass('d-none');
              $('#checkSKKKP').addClass('d-none');
              $('#catakSKKKP').addClass('d-none');
              $('#checkAbdTp').addClass('d-none');
              $('#catakAbdTp').addClass('d-none');
            } else {
              $('.c_persambahan_na').addClass('d-none');
              $('#checkPPembangunan').removeClass('d-none');
              $('#catatPPembangunan').removeClass('d-none');
              $('#checkPRab').removeClass('d-none');
              $('#catakPRab').removeClass('d-none');
              $('#checkPSpkp').removeClass('d-none');
              $('#catakPSpkp').removeClass('d-none');
              $('#checkPBll').removeClass('d-none');
              $('#catakPBll').removeClass('d-none');
              $('#checkPKbp').removeClass('d-none');
              $('#catakPKbp').removeClass('d-none');
              $('#checkPDcpm').removeClass('d-none');
              $('#catakPDcpm').removeClass('d-none');
              $('#checkPBkaw').removeClass('d-none');
              $('#catakPBkaw').removeClass('d-none');
              $('#checkPSPKD').removeClass('d-none');
              $('#catakPSPKD').removeClass('d-none');
              $('#checkPDddl').removeClass('d-none');
              $('#catakPDddl').removeClass('d-none');
              $('#checkJtp').removeClass('d-none');
              $('#catakJtp').removeClass('d-none');
              $('#checkSKKKP').removeClass('d-none');
              $('#catakSKKKP').removeClass('d-none');
              $('#checkAbdTp').removeClass('d-none');
              $('#catakAbdTp').removeClass('d-none');

            }
          });




                // Show Data
          getDataTableConten = function () {

            let kdlokasi = $("#provinsi option:selected").val(),
            kdkabkota =  $("#kabkota option:selected").val(),
            tematik = $("#tematik option:selected").val();


                  // Masukan Value Hidden
            kdkabkotaX = kdkabkota.slice(0, 6);
            $('#kdTematikHidden').val(tematik);
            $('#kdsatkerHidden').val(kdkabkotaX+'04');

                  // Masukan Value Hidden
            if (kdkabkota == '') {
              t_error('Silakan Pilih Provinsi/kabupaten Kota Terlebih Dahulu.!')
              return;
            }

            if (tematik == '') {
              t_error('Silakan Pilih Tematik.!')
              return;
            }

            $.LoadingOverlay("show");

            ajaxUntukSemua(base_url()+'KonregSan/getDataBaSan', {kdlokasi, kdkabkota, tematik}, function(data) {


                    // Set provinsi 
              $('#provHeader').text($('#provinsi option:selected').text());
                    // End Set Provinsi

                    // Set kabupaten/Kota
              $('#kabKotaHeader').text($('#kabkota option:selected').text());
                    // End Set kabupaten/Kota


                     // set Pagu Heder


                    // Non tematik
              if (tematik == '1') {

                $('#icon-rispam').text('Non Tematik');

                $('#paguAlokasiTot').text(data.dataAwal.ld_total == 0 ? 0 : formatAngka(data.dataAwal.ld_total));
                $('#paguAlokasitotalhidde').val(data.dataAwal.ld_total);

                $('#paguAlokasiPemda').text('Rp. '+ data.dataAwal.ld_alokasi_pemda == 0 ? '-' : formatAngka(data.dataAwal.ld_alokasi_pemda));

                $('#paguAspirasi').text('Rp. '+ data.dataAwal.ld_alokasi_dpr == 0 ? '-' : formatAngka(data.dataAwal.ld_alokasi_dpr));

                $('#minApproveHeader').text(data.dataAwal.ld_min_approve == 0 ? 0 : formatAngka(data.dataAwal.ld_min_approve));
                $('#minApproveHeaderHedden').val(data.dataAwal.ld_min_approve);

                $('#MaxApproveHeader').text(data.dataAwal.ld_max_penunjang == 0 ? 0 : formatAngka(data.dataAwal.ld_max_penunjang) );
                $('#maxPenunjangHedden').val(data.dataAwal.ld_max_penunjang);


              }
                   // End Non tematik

                    // Tematik PPKT
              if (tematik == '2') {
                $('#icon-rispam').text('Tematik PPKT');
                $('#paguAlokasiTot').text(data.dataAwal.kt_alokasi_pemda == 0 ? 0 : formatAngka(data.dataAwal.kt_alokasi_pemda));
                $('#paguAlokasitotalhidde').val(data.dataAwal.kt_alokasi_pemda);


                $('#paguAlokasiPemda').text(data.dataAwal.kt_alokasi_pemda == 0 ? 0 : formatAngka(data.dataAwal.kt_alokasi_pemda));

                $('#paguAspirasi').text('Rp. -');

                $('#minApproveHeader').text(data.dataAwal.kt_min_approve == 0 ? 0 : formatAngka(data.dataAwal.kt_min_approve) );
                $('#minApproveHeaderHedden').val(data.dataAwal.kt_min_approve);


                $('#MaxApproveHeader').text(data.dataAwal.kt_max_penunjang == 0 ? 0 : formatAngka(data.dataAwal.kt_max_penunjang));
                $('#maxPenunjangHedden').val(data.dataAwal.kt_max_penunjang);

              }
                   // End Tematik PPKT


                    // Tematik PE-RPKI
              if (tematik == '3') {
                $('#icon-rispam').text('Tematik PE-RPKI');
                $('#paguAlokasiTot').text(data.dataAwal.ki_alokasi_pemda == 0 ? 0 : formatAngka(data.dataAwal.ki_alokasi_pemda));
                $('#paguAlokasitotalhidde').val(data.dataAwal.ki_alokasi_pemda);


                $('#paguAlokasiPemda').text(data.dataAwal.ki_alokasi_pemda == 0 ? 0 : formatAngka(data.dataAwal.ki_alokasi_pemda));

                $('#paguAspirasi').text('Rp. -');

                $('#minApproveHeader').text(data.dataAwal.ki_min_approve == 0 ? 0 : formatAngka(data.dataAwal.ki_min_approve) );
                $('#minApproveHeaderHedden').val(data.dataAwal.ki_min_approve);


                $('#MaxApproveHeader').text(data.dataAwal.ki_max_penunjang == 0 ? 0 : formatAngka(data.dataAwal.ki_max_penunjang));
                $('#maxPenunjangHedden').val(data.dataAwal.ki_max_penunjang);

              }
                   // End Tematik PE-RPKI



                     // End Set Pagu header

                    // Set Data Table
              if (data.dataBody != null) {

                       // Set Alokasi Pemda
                let alokasiTotal = '';

                if (tematik == '1') {
                  alokasiTotal = data.dataAwal.ld_total;
                }

                if (tematik == '2') {
                  alokasiTotal = data.dataAwal.kt_alokasi_pemda;
                }

                if (tematik == '3') {
                  alokasiTotal = data.dataAwal.ki_alokasi_pemda;
                }
                      // End Set Alokasi Pemda

                      // Set statsu kegiatan fisik
                if (Number(data.dataBody.nilaiFisik) < Number(alokasiTotal)) {
                  $('#sts_fisik').text('OK');
                }else{
                  $('#sts_fisik').text('NOT OK');
                }
                       // End Set statsu kegiatan fisik

                $('#persentase').text(((Number(data.dataBody.nilaiPenunjang)/Number(data.dataBody.fisikPenunjang))*100).toFixed(4)+' %');



                let totalPenunjangFisik = Number(data.dataBody.fisikPenunjang);



                      // Set Max Alokasi Penunjang
                let alokasiPenunjang = '';


                if (tematik == '1') {
                  alokasiPenunjang = data.dataAwal.ld_max_penunjang;
                }

                if (tematik == '2') {
                  alokasiPenunjang = data.dataAwal.kt_max_penunjang;
                }

                if (tematik == '3') {
                  alokasiPenunjang = data.dataAwal.ki_max_penunjang;
                }
                      // End Set Max Alokasi Penunjang


                let penujangPerbandingan = data.dataBody.nilaiPenunjang;

                if (totalPenunjangFisik > alokasiTotal) {
                  $('#stsNilaiFisikPenunajng').text('Not Ok');
                }else{
                  $('#stsNilaiFisikPenunajng').text('Ok');
                }


                if (penujangPerbandingan > alokasiPenunjang) {
                  $('#kegaiatanStatus').text('Not Ok');
                }else{
                  $('#kegaiatanStatus').text('Ok');
                }


                $('#nilaiFisik').val(data.dataBody.nilaiFisik);
                $('#catatFisik').val(data.dataBody.catatFisik);
                $('input[type="checkbox"][name="checkOutput"][id="checkOutput"]').prop('checked', data.dataBody.checkOutput == 'on' ? true:false);
                $('#catatOutput').val(data.dataBody.catatOutput);
                $('input[type="checkbox"][id="checkKomponen"]').prop('checked', data.dataBody.checkKomponen == 'on' ? true:false);
                $('#catatKomponen').val(data.dataBody.catatKomponen);
                $('#nilaiPenunjang').val(data.dataBody.nilaiPenunjang);
                $('input[type="checkbox"][id="checkPenunjang"]').prop('checked', data.dataBody.checkPenunjang == 'on' ? true:false);
                $('#rincianKegiatan').val(data.dataBody.rincianKegiatan);
                $('#fisikPenunjang').val(data.dataBody.fisikPenunjang);
                $('#fisikPenunjangCatat').val(data.dataBody.fisikPenunjangCatat);
                $('input[type="checkbox"][id="checkSPTJM"]').prop('checked', data.dataBody.checkSPTJM == 'on' ? true:false);
                $('#catatSptjm').val(data.dataBody.catatSptjm);
                $('input[type="checkbox"][id="checkSSK"]').prop('checked', data.dataBody.checkSSK == 'on' ? true:false);
                $('#catatSSK').val(data.dataBody.catatSSK);
                $('input[type="checkbox"][id="checkDed"]').prop('checked', data.dataBody.checkDed == 'on' ? true:false);
                $('#catatDed').val(data.dataBody.catatDed);
                $('input[type="checkbox"][id="checkRab"]').prop('checked', data.dataBody.checkRab == 'on' ? true:false);
                $('#catatRab').val(data.dataBody.catatRab);
                $('input[type="checkbox"][id="checkSpkp"]').prop('checked', data.dataBody.checkSpkp == 'on' ? true:false);
                $('#catatSpkp').val(data.dataBody.catatSpkp);
                $('input[type="checkbox"][id="checkKlbs"]').prop('checked', data.dataBody.checkKlbs == 'on' ? true:false);
                $('#catatKlbs').val(data.dataBody.catatKlbs);
                $('input[type="checkbox"][id="checkDcpm"]').prop('checked', data.dataBody.checkDcpm == 'on' ? true:false);
                $('#catatDcpm').val(data.dataBody.catatDcpm);
                $('input[type="checkbox"][id="checkIplt"]').prop('checked', data.dataBody.checkIplt == 'on' ? true:false);
                $('#catatIplt').val(data.dataBody.catatIplt);
                $('input[type="checkbox"][id="checkJustifikasi"]').prop('checked', data.dataBody.checkJustifikasi == 'on' ? true:false);
                $('#catatJustifikasi').val(data.dataBody.catatJustifikasi);
                $('input[type="checkbox"][id="checkSmkd"]').prop('checked', data.dataBody.checkSmkd == 'on' ? true:false);
                $('#catatSmkd').val(data.dataBody.catatSmkd);
                $('input[type="checkbox"][id="checkSpl"]').prop('checked', data.dataBody.checkSpl == 'on' ? true:false);
                $('#catakSpl').val(data.dataBody.catakSpl);
                $('input[type="checkbox"][id="checkBppw"]').prop('checked', data.dataBody.checkBppw == 'on' ? true:false);
                $('#catakBppw').val(data.dataBody.catakBppw);
                $('input[type="checkbox"][id="checkIDpr"]').prop('checked', data.dataBody.checkIDpr == 'on' ? true:false);
                $('#catakIDpr').val(data.dataBody.catakIDpr);
                $('input[type="checkbox"][id="checkIRab"]').prop('checked', data.dataBody.checkIRab == 'on' ? true:false);
                $('#catakIRab').val(data.dataBody.catakIRab);
                $('input[type="checkbox"][id="checkIBll"]').prop('checked', data.dataBody.checkIBll == 'on' ? true:false);
                $('#catakIBll').val(data.dataBody.catakIBll);
                $('input[type="checkbox"][id="checkIDjt"]').prop('checked', data.dataBody.checkIDjt == 'on' ? true:false);
                $('#catakIDjt').val(data.dataBody.catakIDjt);
                $('input[type="checkbox"][id="checkIMasterPlan"]').prop('checked', data.dataBody.checkIMasterPlan == 'on' ? true:false);
                $('#catakIMasterPlan').val(data.dataBody.catakIMasterPlan);
                $('input[type="checkbox"][id="checkIAmdal"]').prop('checked', data.dataBody.checkIAmdal == 'on' ? true:false);
                $('#catakIAmdal').val(data.dataBody.catakIAmdal);
                $('input[type="checkbox"][id="checkIKlp"]').prop('checked', data.dataBody.checkIKlp == 'on' ? true:false);
                $('#catakIKlp').val(data.dataBody.catakIKlp);
                $('input[type="checkbox"][id="checkIBisnis"]').prop('checked', data.dataBody.checkIBisnis == 'on' ? true:false);
                $('#catakIBisnis').val(data.dataBody.catakIBisnis);
                $('input[type="checkbox"][id="checkIBkll"]').prop('checked', data.dataBody.checkIBkll == 'on' ? true:false);
                $('#catakIBkll').val(data.dataBody.catakIBkll);
                $('input[type="checkbox"][id="checkIAbd"]').prop('checked', data.dataBody.checkIAbd == 'on' ? true:false);
                $('#catakIAbd').val(data.dataBody.catakIAbd);
                $('input[type="checkbox"][id="checkIBpkp"]').prop('checked', data.dataBody.checkIBpkp == 'on' ? true:false);
                $('#catakIBpkp').val(data.dataBody.catakIBpkp);
                $('input[type="checkbox"][id="checkITrukTinja"]').prop('checked', data.dataBody.checkITrukTinja == 'on' ? true:false);
                $('#catakITrukTinja').val(data.dataBody.catakITrukTinja);
                $('input[type="checkbox"][id="checkPPembangunan"]').prop('checked', data.dataBody.checkPPembangunan == 'on' ? true:false);
                $('#catatPPembangunan').val(data.dataBody.catatPPembangunan);
                $('input[type="checkbox"][id="checkPRab"]').prop('checked', data.dataBody.checkPRab == 'on' ? true:false);
                $('#catakPRab').val(data.dataBody.catakPRab);
                $('input[type="checkbox"][id="checkPSpkp"]').prop('checked', data.dataBody.checkPSpkp == 'on' ? true:false);
                $('#catakPSpkp').val(data.dataBody.catakPSpkp);
                $('input[type="checkbox"][id="checkPBll"]').prop('checked', data.dataBody.checkPBll == 'on' ? true:false);
                $('#catakPBll').val(data.dataBody.catakPBll);
                $('input[type="checkbox"][id="checkPKbp"]').prop('checked', data.dataBody.checkPKbp == 'on' ? true:false);
                $('#catakPKbp').val(data.dataBody.catakPKbp);
                $('input[type="checkbox"][id="checkPDcpm"]').prop('checked', data.dataBody.checkPDcpm == 'on' ? true:false);
                $('#catakPDcpm').val(data.dataBody.catakPDcpm);
                $('input[type="checkbox"][id="checkPBkaw"]').prop('checked', data.dataBody.checkPBkaw == 'on' ? true:false);
                $('#catakPBkaw').val(data.dataBody.catakPBkaw);
                $('input[type="checkbox"][id="checkPSPKD"]').prop('checked', data.dataBody.checkPSPKD == 'on' ? true:false);
                $('#catakPSPKD').val(data.dataBody.catakPSPKD);
                $('input[type="checkbox"][id="checkPDddl"]').prop('checked', data.dataBody.checkPDddl == 'on' ? true:false);
                $('#catakPDddl').val(data.dataBody.catakPDddl);
                $('input[type="checkbox"][id="checkJtp"]').prop('checked', data.dataBody.checkJtp == 'on' ? true:false);
                $('#catakJtp').val(data.dataBody.catakJtp);
                $('input[type="checkbox"][id="checkSKKKP"]').prop('checked', data.dataBody.checkSKKKP == 'on' ? true:false);
                $('#catakSKKKP').val(data.dataBody.catakSKKKP);
                $('input[type="checkbox"][id="checkAbdTp"]').prop('checked', data.dataBody.checkAbdTp == 'on' ? true:false);
                $('#catakAbdTp').val(data.dataBody.catakAbdTp);
                $('#catatanAll').val(data.dataBody.catatanAll);
                $('input[type="checkbox"][id="air_limba_na"]').prop('checked', data.dataBody.kondisiAirLimba == 'on' ? true:false);
                $('input[type="checkbox"][id="air_limba_na_iplt"]').prop('checked', data.dataBody.kondisiAirLimbaIplt == 'on' ? true:false);
                $('input[type="checkbox"][id="persambahan_na"]').prop('checked', data.dataBody.kondisiPersampahan == 'on' ? true:false);

                // Set NA 1
                if(data.dataBody.kondisiAirLimba == 'on') {
                  $('.c_air_limba_na').removeClass('d-none'); 
                  $('#checkDed').addClass('d-none'); 
                  $('#catatDed').addClass('d-none');
                  $('#checkRab').addClass('d-none');
                  $('#catatRab').addClass('d-none');
                  $('#checkSpkp').addClass('d-none');
                  $('#catatSpkp').addClass('d-none');
                  $('#checkKlbs').addClass('d-none');
                  $('#catatKlbs').addClass('d-none');
                  $('#checkDcpm').addClass('d-none');
                  $('#catatDcpm').addClass('d-none');
                  $('#checkIplt').addClass('d-none');
                  $('#catatIplt').addClass('d-none');
                  $('#checkJustifikasi').addClass('d-none');
                  $('#catatJustifikasi').addClass('d-none');
                } else {
                  $('.c_air_limba_na').addClass('d-none');
                  $('#checkDed').removeClass('d-none'); 
                  $('#catatDed').removeClass('d-none');
                  $('#checkRab').removeClass('d-none');
                  $('#catatRab').removeClass('d-none');
                  $('#checkSpkp').removeClass('d-none');
                  $('#catatSpkp').removeClass('d-none');
                  $('#checkKlbs').removeClass('d-none');
                  $('#catatKlbs').removeClass('d-none');
                  $('#checkDcpm').removeClass('d-none');
                  $('#catatDcpm').removeClass('d-none');
                  $('#checkIplt').removeClass('d-none');
                  $('#catatIplt').removeClass('d-none');
                  $('#checkJustifikasi').removeClass('d-none');
                  $('#catatJustifikasi').removeClass('d-none');
                }
                // End Set NA 1

                // Set NA 2
                if(data.dataBody.kondisiAirLimbaIplt == 'on') {
                  $('.c_air_limba_na_iplt').removeClass('d-none'); 
                  $('#checkSmkd').addClass('d-none');
                  $('#catatSmkd').addClass('d-none'); 
                  $('#checkSpl').addClass('d-none');
                  $('#catakSpl').addClass('d-none');
                  $('#checkBppw').addClass('d-none');
                  $('#catakBppw').addClass('d-none');
                  $('#checkIDpr').addClass('d-none');
                  $('#catakIDpr').addClass('d-none');
                  $('#checkIRab').addClass('d-none');
                  $('#catakIRab').addClass('d-none');
                  $('#checkIBll').addClass('d-none');
                  $('#catakIBll').addClass('d-none');
                  $('#checkIDjt').addClass('d-none');
                  $('#catakIDjt').addClass('d-none');
                  $('#checkIMasterPlan').addClass('d-none');
                  $('#catakIMasterPlan').addClass('d-none');
                  $('#checkIAmdal').addClass('d-none');
                  $('#catakIAmdal').addClass('d-none');
                  $('#checkIKlp').addClass('d-none');
                  $('#catakIKlp').addClass('d-none');
                  $('#checkIBisnis').addClass('d-none');
                  $('#catakIBisnis').addClass('d-none');
                  $('#checkIBkll').addClass('d-none');
                  $('#catakIBkll').addClass('d-none');
                  $('#checkIAbd').addClass('d-none');
                  $('#catakIAbd').addClass('d-none');
                  $('#checkIBpkp').addClass('d-none');
                  $('#catakIBpkp').addClass('d-none');
                  $('#checkITrukTinja').addClass('d-none');
                  $('#catakITrukTinja').addClass('d-none');
                } else {
                  $('.c_air_limba_na_iplt').addClass('d-none');

                  $('#checkSmkd').removeClass('d-none');
                  $('#catatSmkd').removeClass('d-none'); 
                  $('#checkSpl').removeClass('d-none');
                  $('#catakSpl').removeClass('d-none');
                  $('#checkBppw').removeClass('d-none');
                  $('#catakBppw').removeClass('d-none');
                  $('#checkIDpr').removeClass('d-none');
                  $('#catakIDpr').removeClass('d-none');
                  $('#checkIRab').removeClass('d-none');
                  $('#catakIRab').removeClass('d-none');
                  $('#checkIBll').removeClass('d-none');
                  $('#catakIBll').removeClass('d-none');
                  $('#checkIDjt').removeClass('d-none');
                  $('#catakIDjt').removeClass('d-none');
                  $('#checkIMasterPlan').removeClass('d-none');
                  $('#catakIMasterPlan').removeClass('d-none');
                  $('#checkIAmdal').removeClass('d-none');
                  $('#catakIAmdal').removeClass('d-none');
                  $('#checkIKlp').removeClass('d-none');
                  $('#catakIKlp').removeClass('d-none');
                  $('#checkIBisnis').removeClass('d-none');
                  $('#catakIBisnis').removeClass('d-none');
                  $('#checkIBkll').removeClass('d-none');
                  $('#catakIBkll').removeClass('d-none');
                  $('#checkIAbd').removeClass('d-none');
                  $('#catakIAbd').removeClass('d-none');
                  $('#checkIBpkp').removeClass('d-none');
                  $('#catakIBpkp').removeClass('d-none');
                  $('#checkITrukTinja').removeClass('d-none');
                  $('#catakITrukTinja').removeClass('d-none');

                }
                // End Set NA 2

                // Set NA 3
                if(data.dataBody.kondisiPersampahan == 'on') {
                  $('.c_persambahan_na').removeClass('d-none'); 

                  $('#checkPPembangunan').addClass('d-none');
                  $('#catatPPembangunan').addClass('d-none');
                  $('#checkPRab').addClass('d-none');
                  $('#catakPRab').addClass('d-none');
                  $('#checkPSpkp').addClass('d-none');
                  $('#catakPSpkp').addClass('d-none');
                  $('#checkPBll').addClass('d-none');
                  $('#catakPBll').addClass('d-none');
                  $('#checkPKbp').addClass('d-none');
                  $('#catakPKbp').addClass('d-none');
                  $('#checkPDcpm').addClass('d-none');
                  $('#catakPDcpm').addClass('d-none');
                  $('#checkPBkaw').addClass('d-none');
                  $('#catakPBkaw').addClass('d-none');
                  $('#checkPSPKD').addClass('d-none');
                  $('#catakPSPKD').addClass('d-none');
                  $('#checkPDddl').addClass('d-none');
                  $('#catakPDddl').addClass('d-none');
                  $('#checkJtp').addClass('d-none');
                  $('#catakJtp').addClass('d-none');
                  $('#checkSKKKP').addClass('d-none');
                  $('#catakSKKKP').addClass('d-none');
                  $('#checkAbdTp').addClass('d-none');
                  $('#catakAbdTp').addClass('d-none');
                } else {
                  $('.c_persambahan_na').addClass('d-none');
                  $('#checkPPembangunan').removeClass('d-none');
                  $('#catatPPembangunan').removeClass('d-none');
                  $('#checkPRab').removeClass('d-none');
                  $('#catakPRab').removeClass('d-none');
                  $('#checkPSpkp').removeClass('d-none');
                  $('#catakPSpkp').removeClass('d-none');
                  $('#checkPBll').removeClass('d-none');
                  $('#catakPBll').removeClass('d-none');
                  $('#checkPKbp').removeClass('d-none');
                  $('#catakPKbp').removeClass('d-none');
                  $('#checkPDcpm').removeClass('d-none');
                  $('#catakPDcpm').removeClass('d-none');
                  $('#checkPBkaw').removeClass('d-none');
                  $('#catakPBkaw').removeClass('d-none');
                  $('#checkPSPKD').removeClass('d-none');
                  $('#catakPSPKD').removeClass('d-none');
                  $('#checkPDddl').removeClass('d-none');
                  $('#catakPDddl').removeClass('d-none');
                  $('#checkJtp').removeClass('d-none');
                  $('#catakJtp').removeClass('d-none');
                  $('#checkSKKKP').removeClass('d-none');
                  $('#catakSKKKP').removeClass('d-none');
                  $('#checkAbdTp').removeClass('d-none');
                  $('#catakAbdTp').removeClass('d-none');

                }
                // End Set NA 3


              }else{

                $('#persentase').text('');
                $('#sts_fisik').text('');
                $('#nilaiFisik').val('');
                $('#catatFisik').val('');
                $('#catatKomponen').val('');
                $('input[type="checkbox"][name="checkOutput"][id="checkOutput"]').prop('checked', false);
                $('#catatOutput').val('');
                $('input[type="checkbox"][id="checkKomponen"]').prop('checked', false);
                $('#nilaiPenunjang').val('');
                $('input[type="checkbox"][id="checkPenunjang"]').prop('checked', false);
                $('#rincianKegiatan').val('');
                $('#fisikPenunjang').val('');
                $('#fisikPenunjangCatat').val('');
                $('input[type="checkbox"][id="checkSPTJM"]').prop('checked', false);
                $('#catatSptjm').val('');
                $('input[type="checkbox"][id="checkSSK"]').prop('checked', false);
                $('#catatSSK').val('');
                $('input[type="checkbox"][id="checkDed"]').prop('checked', false);
                $('#catatDed').val('');
                $('input[type="checkbox"][id="checkRab"]').prop('checked', false);
                $('#catatRab').val('');
                $('input[type="checkbox"][id="checkSpkp"]').prop('checked', false);
                $('#catatSpkp').val('');
                $('input[type="checkbox"][id="checkKlbs"]').prop('checked', false);
                $('#catatKlbs').val('');
                $('input[type="checkbox"][id="checkDcpm"]').prop('checked', false);
                $('#catatDcpm').val('');
                $('input[type="checkbox"][id="checkIplt"]').prop('checked', false);
                $('#catatIplt').val('');
                $('input[type="checkbox"][id="checkJustifikasi"]').prop('checked', false);
                $('#catatJustifikasi').val('');
                $('input[type="checkbox"][id="checkSmkd"]').prop('checked', false);
                $('#catatSmkd').val('');
                $('input[type="checkbox"][id="checkSpl"]').prop('checked', false);
                $('#catakSpl').val('');
                $('input[type="checkbox"][id="checkBppw"]').prop('checked', false);
                $('#catakBppw').val('');
                $('input[type="checkbox"][id="checkIDpr"]').prop('checked', false);
                $('#catakIDpr').val('');
                $('input[type="checkbox"][id="checkIRab"]').prop('checked', false);
                $('#catakIRab').val('');
                $('input[type="checkbox"][id="checkIBll"]').prop('checked', false);
                $('#catakIBll').val('');
                $('input[type="checkbox"][id="checkIDjt"]').prop('checked', false);
                $('#catakIDjt').val('');
                $('input[type="checkbox"][id="checkIMasterPlan"]').prop('checked', false);
                $('#catakIMasterPlan').val('');
                $('input[type="checkbox"][id="checkIAmdal"]').prop('checked', false);
                $('#catakIAmdal').val('');
                $('input[type="checkbox"][id="checkIKlp"]').prop('checked', false);
                $('#catakIKlp').val('');
                $('input[type="checkbox"][id="checkIBisnis"]').prop('checked', false);
                $('#catakIBisnis').val('');
                $('input[type="checkbox"][id="checkIBkll"]').prop('checked', false);
                $('#catakIBkll').val('');
                $('input[type="checkbox"][id="checkIAbd"]').prop('checked', false);
                $('#catakIAbd').val('');
                $('input[type="checkbox"][id="checkIBpkp"]').prop('checked', false);
                $('#catakIBpkp').val('');
                $('input[type="checkbox"][id="checkITrukTinja"]').prop('checked', false);
                $('#catakITrukTinja').val('');
                $('input[type="checkbox"][id="checkPPembangunan"]').prop('checked', false);
                $('#catatPPembangunan').val('');
                $('input[type="checkbox"][id="checkPRab"]').prop('checked', false);
                $('#catakPRab').val('');
                $('input[type="checkbox"][id="checkPSpkp"]').prop('checked', false);
                $('#catakPSpkp').val('');
                $('input[type="checkbox"][id="checkPBll"]').prop('checked', false);
                $('#catakPBll').val('');
                $('input[type="checkbox"][id="checkPKbp"]').prop('checked', false);
                $('#catakPKbp').val('');
                $('input[type="checkbox"][id="checkPDcpm"]').prop('checked', false);
                $('#catakPDcpm').val('');
                $('input[type="checkbox"][id="checkPBkaw"]').prop('checked', false);
                $('#catakPBkaw').val('');
                $('input[type="checkbox"][id="checkPSPKD"]').prop('checked', false);
                $('#catakPSPKD').val('');
                $('input[type="checkbox"][id="checkPDddl"]').prop('checked', false);
                $('#catakPDddl').val('');
                $('input[type="checkbox"][id="checkJtp"]').prop('checked', false);
                $('#catakJtp').val('');
                $('input[type="checkbox"][id="checkSKKKP"]').prop('checked', false);
                $('#catakSKKKP').val('');
                $('input[type="checkbox"][id="checkAbdTp"]').prop('checked', false);
                $('#catakAbdTp').val('');
                $('input[type="checkbox"][id="air_limba_na"]').prop('checked', false);
                $('input[type="checkbox"][id="air_limba_na_iplt"]').prop('checked', false);
                $('input[type="checkbox"][id="persambahan_na"]').prop('checked', false);
                $('#catatanAll').val('');

                $('.c_air_limba_na').addClass('d-none');
                $('#checkDed').removeClass('d-none'); 
                $('#catatDed').removeClass('d-none');
                $('#checkRab').removeClass('d-none');
                $('#catatRab').removeClass('d-none');
                $('#checkSpkp').removeClass('d-none');
                $('#catatSpkp').removeClass('d-none');
                $('#checkKlbs').removeClass('d-none');
                $('#catatKlbs').removeClass('d-none');
                $('#checkDcpm').removeClass('d-none');
                $('#catatDcpm').removeClass('d-none');
                $('#checkIplt').removeClass('d-none');
                $('#catatIplt').removeClass('d-none');
                $('#checkJustifikasi').removeClass('d-none');
                $('#catatJustifikasi').removeClass('d-none');
                $('.c_air_limba_na_iplt').addClass('d-none');
                $('#checkSmkd').removeClass('d-none');
                $('#catatSmkd').removeClass('d-none'); 
                $('#checkSpl').removeClass('d-none');
                $('#catakSpl').removeClass('d-none');
                $('#checkBppw').removeClass('d-none');
                $('#catakBppw').removeClass('d-none');
                $('#checkIDpr').removeClass('d-none');
                $('#catakIDpr').removeClass('d-none');
                $('#checkIRab').removeClass('d-none');
                $('#catakIRab').removeClass('d-none');
                $('#checkIBll').removeClass('d-none');
                $('#catakIBll').removeClass('d-none');
                $('#checkIDjt').removeClass('d-none');
                $('#catakIDjt').removeClass('d-none');
                $('#checkIMasterPlan').removeClass('d-none');
                $('#catakIMasterPlan').removeClass('d-none');
                $('#checkIAmdal').removeClass('d-none');
                $('#catakIAmdal').removeClass('d-none');
                $('#checkIKlp').removeClass('d-none');
                $('#catakIKlp').removeClass('d-none');
                $('#checkIBisnis').removeClass('d-none');
                $('#catakIBisnis').removeClass('d-none');
                $('#checkIBkll').removeClass('d-none');
                $('#catakIBkll').removeClass('d-none');
                $('#checkIAbd').removeClass('d-none');
                $('#catakIAbd').removeClass('d-none');
                $('#checkIBpkp').removeClass('d-none');
                $('#catakIBpkp').removeClass('d-none');
                $('#checkITrukTinja').removeClass('d-none');
                $('#catakITrukTinja').removeClass('d-none');
                $('.c_persambahan_na').addClass('d-none');
                $('#checkPPembangunan').removeClass('d-none');
                $('#catatPPembangunan').removeClass('d-none');
                $('#checkPRab').removeClass('d-none');
                $('#catakPRab').removeClass('d-none');
                $('#checkPSpkp').removeClass('d-none');
                $('#catakPSpkp').removeClass('d-none');
                $('#checkPBll').removeClass('d-none');
                $('#catakPBll').removeClass('d-none');
                $('#checkPKbp').removeClass('d-none');
                $('#catakPKbp').removeClass('d-none');
                $('#checkPDcpm').removeClass('d-none');
                $('#catakPDcpm').removeClass('d-none');
                $('#checkPBkaw').removeClass('d-none');
                $('#catakPBkaw').removeClass('d-none');
                $('#checkPSPKD').removeClass('d-none');
                $('#catakPSPKD').removeClass('d-none');
                $('#checkPDddl').removeClass('d-none');
                $('#catakPDddl').removeClass('d-none');
                $('#checkJtp').removeClass('d-none');
                $('#catakJtp').removeClass('d-none');
                $('#checkSKKKP').removeClass('d-none');
                $('#catakSKKKP').removeClass('d-none');
                $('#checkAbdTp').removeClass('d-none');
                $('#catakAbdTp').removeClass('d-none');
              }
      // End Set data table 

              $.LoadingOverlay("hide");


            }, function(error) {
              console.log('Kesalahan:', error);
              t_error('Ada yg Error : '+error)
            });

          $("#container2").removeClass("d-none");

        }
                // End Show Data




                // Simpan data

        simpanForm  = function () {

         let paguAlokasitotalhidde = $('#paguAlokasitotalhidde').val(),
         minApproveHeaderHedden = $('#minApproveHeaderHedden').val(),
         maxPenunjangHedden = $('#maxPenunjangHedden').val(),
         kdsatkerHidden = $('#kdsatkerHidden').val(),
         kdTematikHidden = $('#kdTematikHidden').val(),
         nilaiFisik = $('#nilaiFisik').val(),
         catatFisik = $('#catatFisik').val(),
         checkOutput = ($('#checkOutput').is(":checked")) ? 'on' : 'off',
         catatOutput = $('#catatOutput').val(),
         checkKomponen = ($('#checkKomponen').is(":checked")) ? 'on' : 'off',
         catatKomponen = $('#catatKomponen').val(),
         nilaiPenunjang = $('#nilaiPenunjang').val(),
         checkPenunjang = ($('#checkPenunjang').is(":checked")) ? 'on' : 'off',
         rincianKegiatan = $('#rincianKegiatan').val(),
         fisikPenunjang = $('#fisikPenunjang').val(),
         fisikPenunjangCatat = $('#fisikPenunjangCatat').val(),

         checkSPTJM = ($('#checkSPTJM').is(":checked")) ? 'on' : 'off',
         catatSptjm = $('#catatSptjm').val(),
         checkSSK = ($('#checkSSK').is(":checked")) ? 'on' : 'off',
         catatSSK = $('#catatSSK').val(),
         checkDed = ($('#checkDed').is(":checked")) ? 'on' : 'off',
         catatDed = $('#catatDed').val(),
         checkRab = ($('#checkRab').is(":checked")) ? 'on' : 'off',
         catatRab = $('#catatRab').val(),
         checkSpkp = ($('#checkSpkp').is(":checked")) ? 'on' : 'off',
         catatSpkp = $('#catatSpkp').val(),
         checkKlbs = ($('#checkKlbs').is(":checked")) ? 'on' : 'off',
         catatKlbs = $('#catatKlbs').val(),
         checkDcpm = ($('#checkDcpm').is(":checked")) ? 'on' : 'off',
         catatDcpm = $('#catatDcpm').val(),
         checkIplt = ($('#checkIplt').is(":checked")) ? 'on' : 'off',
         catatIplt = $('#catatIplt').val(),
         checkJustifikasi = ($('#checkJustifikasi').is(":checked")) ? 'on' : 'off',
         catatJustifikasi = $('#catatJustifikasi').val(),
         checkSmkd = ($('#checkSmkd').is(":checked")) ? 'on' : 'off',
         catatSmkd = $('#catatSmkd').val(),
         checkSpl = ($('#checkSpl').is(":checked")) ? 'on' : 'off',
         catakSpl = $('#catakSpl').val(),
         checkBppw = ($('#checkBppw').is(":checked")) ? 'on' : 'off',
         catakBppw = $('#catakBppw').val(),
         checkIDpr = ($('#checkIDpr').is(":checked")) ? 'on' : 'off',
         catakIDpr = $('#catakIDpr').val(),
         checkIRab = ($('#checkIRab').is(":checked")) ? 'on' : 'off',
         catakIRab = $('#catakIRab').val(),
         checkIBll = ($('#checkIBll').is(":checked")) ? 'on' : 'off',
         catakIBll = $('#catakIBll').val(),
         checkIDjt = ($('#checkIDjt').is(":checked")) ? 'on' : 'off',
         catakIDjt = $('#catakIDjt').val(),
         checkIMasterPlan = ($('#checkIMasterPlan').is(":checked")) ? 'on' : 'off',
         catakIMasterPlan = $('#catakIMasterPlan').val(),
         checkIAmdal = ($('#checkIAmdal').is(":checked")) ? 'on' : 'off',
         catakIAmdal = $('#catakIAmdal').val(),
         checkIKlp = ($('#checkIKlp').is(":checked")) ? 'on' : 'off',
         catakIKlp = $('#catakIKlp').val(),
         checkIBisnis = ($('#checkIBisnis').is(":checked")) ? 'on' : 'off',
         catakIBisnis = $('#catakIBisnis').val(),
         checkIBkll = ($('#checkIBkll').is(":checked")) ? 'on' : 'off',
         catakIBkll = $('#catakIBkll').val(),
         checkIAbd = ($('#checkIAbd').is(":checked")) ? 'on' : 'off',
         catakIAbd = $('#catakIAbd').val(),
         checkIBpkp = ($('#checkIBpkp').is(":checked")) ? 'on' : 'off',
         catakIBpkp = $('#catakIBpkp').val(),
         checkITrukTinja = ($('#checkITrukTinja').is(":checked")) ? 'on' : 'off',
         catakITrukTinja = $('#catakITrukTinja').val(),
         checkPPembangunan = ($('#checkPPembangunan').is(":checked")) ? 'on' : 'off',
         catatPPembangunan = $('#catatPPembangunan').val(),
         checkPRab = ($('#checkPRab').is(":checked")) ? 'on' : 'off',
         catakPRab = $('#catakPRab').val(),
         checkPSpkp = ($('#checkPSpkp').is(":checked")) ? 'on' : 'off',
         catakPSpkp = $('#catakPSpkp').val(),
         checkPBll = ($('#checkPBll').is(":checked")) ? 'on' : 'off',
         catakPBll = $('#catakPBll').val(),
         checkPKbp = ($('#checkPKbp').is(":checked")) ? 'on' : 'off',
         catakPKbp = $('#catakPKbp').val(),
         checkPDcpm = ($('#checkPDcpm').is(":checked")) ? 'on' : 'off',
         catakPDcpm = $('#catakPDcpm').val(),
         checkPBkaw = ($('#checkPBkaw').is(":checked")) ? 'on' : 'off',
         catakPBkaw = $('#catakPBkaw').val(),
         checkPSPKD = ($('#checkPSPKD').is(":checked")) ? 'on' : 'off',
         catakPSPKD = $('#catakPSPKD').val(),
         checkPDddl = ($('#checkPDddl').is(":checked")) ? 'on' : 'off',
         catakPDddl = $('#catakPDddl').val(),
         checkJtp = ($('#checkJtp').is(":checked")) ? 'on' : 'off',
         catakJtp = $('#catakJtp').val(),
         checkSKKKP = ($('#checkSKKKP').is(":checked")) ? 'on' : 'off',
         catakSKKKP = $('#catakSKKKP').val(),
         checkAbdTp = ($('#checkAbdTp').is(":checked")) ? 'on' : 'off',
         catakAbdTp = $('#catakAbdTp').val(),
         catatanAll = $('#catatanAll').val(),

         air_limba_na = ($('#air_limba_na').is(":checked")) ? 'on' : 'off',
         air_limba_na_iplt = ($('#air_limba_na_iplt').is(":checked")) ? 'on' : 'off',
         persambahan_na = ($('#persambahan_na').is(":checked")) ? 'on' : 'off',

         totFisikPenunjang = Number(nilaiFisik)+Number(nilaiPenunjang),
         kdPersentase = Number($('#kdPersentase').val());

         if(Number(nilaiFisik) <= Number(minApproveHeaderHedden)) {
           t_error('Jumlah Nilai Total Fisik Dibawah 25% Pagu Alokasi', 'Gagal');
           return false;
         }

         if(Number(nilaiFisik) > Number(paguAlokasitotalhidde)) {
          t_error('Jumlah Nilai Total Fisik Melebihi Pagu Alokasi Total', 'Gagal');
          return false;
        }


        if(totFisikPenunjang > Number(paguAlokasitotalhidde)) {
          t_error('Jumlah penunjang dan fisik melebihi total alokasi', 'Gagal');
          return false;
        }


        if(Number(nilaiPenunjang) > Number(maxPenunjangHedden)) {
         t_error('Nilai Melebihi 5% Dari Pagu Alokasi', 'Gagal');
         return false;
       }

       if (Number(fisikPenunjang) < Number(minApproveHeaderHedden)) {
        t_error(`Nilai Aprrove Fisik + Penunjang di bawah 25% dari pagu alokasi.!`, 'Gagal');
        return false;
      }

      if (Number(kdPersentase) > 5) {
       t_error(`Persentase Nilai Penunjang di atas 5%.!`, 'Gagal');
       return false; 
     }


     let datBody = {
      paguAlokasitotalhidde,
      minApproveHeaderHedden,
      maxPenunjangHedden,
      kdsatkerHidden,
      kdTematikHidden,
      nilaiFisik,
      catatFisik,
      checkOutput,
      catatOutput,
      checkKomponen,
      catatKomponen,
      nilaiPenunjang,
      checkPenunjang,
      rincianKegiatan,
      fisikPenunjang,
      fisikPenunjangCatat,      
      checkSPTJM,
      catatSptjm,
      checkSSK,
      catatSSK,
      checkDed,
      catatDed,
      checkRab,
      catatRab,
      checkSpkp,
      catatSpkp,
      checkKlbs,
      catatKlbs,
      checkDcpm,
      catatDcpm,
      checkIplt,
      catatIplt,
      checkJustifikasi,
      catatJustifikasi,
      checkSmkd,
      catatSmkd,
      checkSpl,
      catakSpl,
      checkBppw,
      catakBppw,
      checkIDpr,
      catakIDpr,
      checkIRab,
      catakIRab,
      checkIBll,
      catakIBll,
      checkIDjt,
      catakIDjt,
      checkIMasterPlan,
      catakIMasterPlan,
      checkIAmdal,
      catakIAmdal,
      checkIKlp,
      catakIKlp,
      checkIBisnis,
      catakIBisnis,
      checkIBkll,
      catakIBkll,
      checkIAbd,
      catakIAbd,
      checkIBpkp,
      catakIBpkp,
      checkITrukTinja,
      catakITrukTinja,
      checkPPembangunan,
      catatPPembangunan,
      checkPRab,
      catakPRab,
      checkPSpkp,
      catakPSpkp,
      checkPBll,
      catakPBll,
      checkPKbp,
      catakPKbp,
      checkPDcpm,
      catakPDcpm,
      checkPBkaw,
      catakPBkaw,
      checkPSPKD,
      catakPSPKD,
      checkPDddl,
      catakPDddl,
      checkJtp,
      catakJtp,
      checkSKKKP,
      catakSKKKP,
      checkAbdTp,
      catakAbdTp,
      catatanAll,
      kdPersentase,
      air_limba_na,
      air_limba_na_iplt,
      persambahan_na
    };
    $.LoadingOverlay("show");
    ajaxUntukSemua(base_url()+'KonregSan/simpanBaKonregSan', datBody, function(data) {

      if (data.code ==200) {
       t_succsess('Data Berhasil Disimpan.!');
     }else{
       t_error('Data gagal disimpan.!');
     }

     $.LoadingOverlay("hide");
   }, function(error) {
    $.LoadingOverlay("hide");
    console.log('Kesalahan:', error);
    t_error('Ada yg Error : '+error)
  });


  }

                // End Simpan Data

  validasiPenunjang = function () {
   let nilaiPenunjang = $('#nilaiPenunjang').val(),
   paguAlokasitotalhidde = $('#paguAlokasitotalhidde').val(),
   minApproveHeaderHedden = $('#minApproveHeaderHedden').val(),
   maxPenunjangHedden = $('#maxPenunjangHedden').val(),
   fisikPenunjang = $('#fisikPenunjang').val(),
   nilaiFisik = $('#nilaiFisik').val(),
   totNilai = Number(nilaiFisik)+Number(nilaiPenunjang);

   if (Number(nilaiPenunjang) > Number(maxPenunjangHedden)) {
    $('#notifMerahPenunjang').text('Nilai Melebihi 5% Dari Pagu Alokasi.!');
    $('#kegaiatanStatus').text('Not Ok');
  }else{
    $('#notifMerahPenunjang').text('');
    $('#kegaiatanStatus').text('Ok');
  }
}


              // target status
trigerStatus = function () {
  let nilaiFisik = $('#nilaiFisik').val(),
  paguAlokasitotalhidde = $('#paguAlokasitotalhidde').val(),
  minApproveHeaderHedden = $('#minApproveHeaderHedden').val(),
  maxPenunjangHedden = $('#maxPenunjangHedden').val(),
  nilaiPenunjang = $('#nilaiPenunjang').val(),
  fisikPenunjang = $('#fisikPenunjang').val(),
  totNilai = Number(nilaiFisik)+Number(nilaiPenunjang);
  console.log(Number(nilaiFisik), Number(minApproveHeaderHedden))
  if (nilaiFisik != '' && paguAlokasitotalhidde != '') {

    if (Number(nilaiFisik) <= Number(paguAlokasitotalhidde)) {
      $('#sts_fisik').text('Ok');
    }else{
      $('#sts_fisik').text('Not Ok');
    }

    if (Number(nilaiFisik) < Number(minApproveHeaderHedden)) {
      $('#notifMerah').text(`Jumlah Nilai Total Fisik Dibawah 25% Pagu Alokasi `);
    }else if (Number(nilaiFisik) > Number(paguAlokasitotalhidde)) {
      $('#notifMerah').text(`Jumlah Nilai Total Fi
        sik Melebihi Pagu Alokasi Total.!`);
    }else{
      $('#notifMerah').text('');
    }


  }else{
    $('#sts_fisik').text(''); 
  }

  if (nilaiFisik != '' && nilaiPenunjang != '') {
   $('#fisikPenunjang').val(Number(nilaiFisik)+Number(nilaiPenunjang)); 
   $('#sisaAlokasi').val(Number(paguAlokasitotalhidde)-Number(totNilai))
   let jumlahFisikDanPenunjang = Number(nilaiFisik)+Number(nilaiPenunjang);


   if (totNilai < Number(minApproveHeaderHedden)) {
    $('#stsNilaiFisikPenunajng').text('Jumlah Total Fisik+Penunjang dibawah 25%.!');
    $('#stsNilaiFisikPenunajng').text('Not Ok');
  }else{
    $('#stsNilaiFisikPenunajng').text(''); 
    $('#stsNilaiFisikPenunajng').text('Ok'); 
  }


  if (jumlahFisikDanPenunjang > Number(paguAlokasitotalhidde)) {
    $('#stsNilaiFisikPenunajng').text('Not Ok');
  }else{
    $('#stsNilaiFisikPenunajng').text('Ok');
  }

}


fisikPenunjang = $('#fisikPenunjang').val();

if (nilaiPenunjang != '' && fisikPenunjang != '') {

  let data = ((Number(nilaiPenunjang)/Number(fisikPenunjang))*100).toFixed(4);

  $('#persentase').text(((Number(nilaiPenunjang)/Number(fisikPenunjang))*100).toFixed(4)+' %');

  $('#kdPersentase').val(data);

  if (Number(data) > 5) {
    $('#kegaiatanStatus').text('Not Ok');
    $('#stsNilaiFisikPenunajng').text('Not Ok');
  }
}

}
              // End Target Status

            // Formated angka
function formatAngka(angka) {
  return 'Rp. '+angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}
            // End Formated Angka

                  // Pilih Provinsi
$('#provinsi').change(function() {

  const kdlokasi = $(this).val();

  ajaxUntukSemua(base_url()+'KonregSan/getDataKabKota', {kdlokasi}, function(data) {

    let html = `<option value="" selected disabled>-- Pilih Kab/Kota --</option>`;

    $.each(data, function(index, val) {

      html += `<option value="`+val.kdsatker+`">`+val.nmkabkota+`</option>`;

    })

    $('#kabkota').html(html);

  }, function(error) {
    console.log('Kesalahan:', error);
    t_error('Ada yg Error : '+error)
  });

});
                  // End Pilih Provinsi

                  // Pilih Kab/Kota
$('#kabkota').change(function() {

  const kdsatker = $(this).val();

  ajaxUntukSemua(base_url()+'KonregSan/getDataTematik', {kdsatker}, function(data) {


    if (data.ld_total == 0) {
      $('#tematik option[value="1"]').prop('disabled', true);
    }else{
      $('#tematik option[value="1"]').prop('disabled', false);
    }

    if (data.kt_alokasi_pemda == 0) {
      $('#tematik option[value="2"]').prop('disabled', true);
    }else{
      $('#tematik option[value="2"]').prop('disabled', false);
    }

    if (data.ki_alokasi_pemda == 0) {
      $('#tematik option[value="3"]').prop('disabled', true);
    }else{
      $('#tematik option[value="3"]').prop('disabled', false);
    }

    $('#tematik').val('');

  }, function(error) {
    console.log('Kesalahan:', error);
    t_error('Ada yg Error : '+error)
  });

});
// End Pilih Kab/kota

showCetakBa = function () {
  let kdsatkerBa = $('#kdsatkerHidden').val(),
  tematikBa = $('#kdTematikHidden').val();
  $('#kdsatkerBa').val(kdsatkerBa);
  $('#tematikBa').val(tematikBa);
  $('#modalCetakBa').modal('show');
}



});
</script>
</div>
</div>