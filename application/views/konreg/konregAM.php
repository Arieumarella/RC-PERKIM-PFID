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

              <div class="container mt-3" id="container2">
                <div class="col-md-12 col-lg-12">
                  <div class="card card-stacked">
                    <div class="card-body">
                      <div class="text-center mt-3 ">
                        <h2 class="font-calibri-tittle">BERITA ACARA KONSULTASI PROGRAM BIDANG AIR MINUM TA. <?= $ta+1; ?></h2>
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
                              Air Minum
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
                    </tr>
                  </thead>

                  <tbody class="text-end" id="bodyTableConten">
                    <tr class="text-start">
                      <td class="text-center" rowspan="3">1.</td>
                      <td rowspan="3">Kegiatan Fisik</td>
                      <td>a. Nilai Total Fisik</td>
                      <td class="text-satart" style="vertical-align: middle;"><input type="text" class="form-control" name="nilaiFisik" id="nilaiFisik" oninput="trigerStatus(); this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                        <small class="form-hint text-red" id='notifMerah'></small>
                      </td>
                      <td class="text-center" id="sts_fisik"></td>
                      <td class="text-center"><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatFisik" 
                        style="width: 200px;" id="catatFisik"></textarea>
                      </td>
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
                      <td class="text-start" style="vertical-align: middle;"><input type="text" class="form-control" name="nilaiPenunjang" id="nilaiPenunjang"  oninput="validasiPenunjang(); this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
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
                      <td class="text-center" rowspan="8">4.</td>
                      <td rowspan="8">Readiness Criteria</td>
                      <td>a. Surat pernyataan tanggungjawab mutlak (SPTJM)</td>
                      <td class="text-end" style="vertical-align: middle;"></td>
                      <td class="text-center"><input class="form-check-input custom-cheklist" type="checkbox" name="checkSPTJM" id="checkSPTJM"></td>
                      <td class="text-center"><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatSptjm" 
                        style="width: 200px;" id="catatSptjm"></textarea>
                      </td>
                    </tr>

                    <tr class="text-start">
                      <td>b. Dokumen RISPAM</td>
                      <td></td>
                      <td class="text-center"><input class="form-check-input custom-cheklist" type="checkbox" name="checkRispam" id="checkRispam"></td>
                      <td class="text-center" ><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatRispam" 
                        style="width: 200px;" id="catatRispam"></textarea>
                      </td>
                    </tr>

                    <tr class="text-start">
                      <td>c. Dokumen Perencanaan Rinci / Detail Engineering Design (DED)</td>
                      <td></td>
                      <td class="text-center"><input class="form-check-input custom-cheklist" type="checkbox" name="checkDed" id="checkDed"></td>
                      <td class="text-center" ><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="dedCatat" 
                        style="width: 200px;" id="dedCatat"></textarea>
                      </td>
                    </tr>

                    <tr class="text-start">
                      <td>d. Rencana Anggaran Biaya (RAB)</td>
                      <td></td>
                      <td class="text-center"><input class="form-check-input custom-cheklist" type="checkbox" name="checkRab" id="checkRab"></td>
                      <td class="text-center" ><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="rabCatat" 
                        style="width: 200px;" id="rabCatat"></textarea>
                      </td>
                    </tr>

                    <tr class="text-start">
                      <td>e. Surat Pernyataan Kesiapan Lahan (untuk kegiatan yang memiliki bangunan di atas lahan seperti IPA, Broncaptering, Sumur, dan Reservoir);</td>
                      <td></td>
                      <td class="text-center"><input class="form-check-input custom-cheklist" type="checkbox" name="checkIpa" id="checkIpa"></td>
                      <td class="text-center" ><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="ipaCatat" 
                        style="width: 200px;" id="ipaCatat"></textarea>
                      </td>
                    </tr>

                    <tr class="text-start">
                      <td>f. Daftar calon penerima manfaat berdasarkan hasil Real Demand Survey (RDS) yang dikeluarkan dan ditandatangani pengelolan SPAM terbangun (PDAM / UPTD / Perumda / Kepala Desa /  KPSPAM / BUMDES) dan diketahui oleh OPD Teknis.</td>
                      <td></td>
                      <td class="text-center"><input class="form-check-input custom-cheklist" type="checkbox" name="checkRds" id="checkRds"></td>
                      <td class="text-center" ><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="rdsCatat" 
                        style="width: 200px;" id="rdsCatat"></textarea>
                      </td>
                    </tr>

                    <tr class="text-start">
                      <td>g. Surat kesiapan Lembaga pengelola yang dikeluarkan oleh pengelola SPAM terbangun (PDAM / UPTD / Perumda / KPSPAM / BUMDES).</td>
                      <td></td>
                      <td class="text-center"><input class="form-check-input custom-cheklist" type="checkbox" name="checkPdam" id="checkPdam"></td>
                      <td class="text-center" ><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="pdamCatat" 
                        style="width: 200px;" id="pdamCatat"></textarea>
                      </td>
                    </tr>

                    <tr class="text-start">
                      <td>h. Perjanjian Kerja Sama (PKS) pengembangan SPAM Regional yang sudah dilegalisasi atau apabila masih dalam proses penyusunan dapat disertakan surat pernyataan dari Kepala Daerah. (Untuk SPAM Regional Provinsi).</td>
                      <td></td>
                      <td class="text-center"><input class="form-check-input custom-cheklist" type="checkbox" name="checkPks" id="checkPks"></td>
                      <td class="text-center" ><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="pksCatat" 
                        style="width: 200px;" id="pksCatat"></textarea>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="6" class="text-center"  style="background-color: #5E767E; color: white;">CATATAN</td>
                    </tr>

                    <tr>
                      <td colspan="6" class="text-center" ><textarea class="form-control" data-bs-toggle="" placeholder="" name="catatanAll" 
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


            <script type="text/javascript">
              $(document).ready(function() {

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
                 checkRispam = ($('#checkRispam').is(":checked")) ? 'on' : 'off',
                 catatRispam = $('#catatRispam').val(),
                 checkDed = ($('#checkDed').is(":checked")) ? 'on' : 'off',
                 dedCatat = $('#dedCatat').val(),
                 checkRab = ($('#checkRab').is(":checked")) ? 'on' : 'off',
                 rabCatat = $('#rabCatat').val(),
                 checkIpa = ($('#checkIpa').is(":checked")) ? 'on' : 'off',
                 ipaCatat = $('#ipaCatat').val(),
                 checkRds = ($('#checkRds').is(":checked")) ? 'on' : 'off',
                 rdsCatat = $('#rdsCatat').val(),
                 checkPdam = ($('#checkPdam').is(":checked")) ? 'on' : 'off',
                 pdamCatat = $('#pdamCatat').val(),
                 checkPks = ($('#checkPks').is(":checked")) ? 'on' : 'off',
                 pksCatat = $('#pksCatat').val(),
                 catatanAll = $('#catatanAll').val(),
                 totFisikPenunjang = Number(nilaiFisik)+Number(nilaiPenunjang),
                 kdPersentase = Number($('#kdPersentase').val());

                 if(Number(nilaiFisik) <= Number(minApproveHeaderHedden)) {
                   toastr.error('Jumlah Nilai Total Fisik Dibawah 25% Pagu Alokasi', 'Gagal', optionsToast);
                   return false;
                 }


                 if(Number(nilaiFisik) > Number(paguAlokasitotalhidde)) {
                  toastr.error('Jumlah Nilai Total Fisik Melebihi Pagu Alokasi Total', 'Gagal', optionsToast);
                  return false;
                }


                if(totFisikPenunjang > Number(paguAlokasitotalhidde)) {
                  toastr.error('Jumlah penunjang dan fisik melebihi total alokasi', 'Gagal', optionsToast);
                  return false;
                }


                if(Number(nilaiPenunjang) > Number(maxPenunjangHedden)) {
                 toastr.error('Nilai Melebihi 5% Dari Pagu Alokasi', 'Gagal', optionsToast);
                 return false;
               }

               if (Number(fisikPenunjang) < Number(minApproveHeaderHedden)) {
                toastr.error(`Nilai Aprrove Fisik + Penunjang di bawah 25% dari pagu alokasi.!`, 'Gagal', optionsToast);
                return false;
              }

              if (Number(kdPersentase) > 5) {
               toastr.error(`Persentase Nilai Penunjang di atas 5%.!`, 'Gagal', optionsToast);
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
              checkRispam,
              catatRispam,
              checkDed,
              dedCatat,
              checkRab,
              rabCatat,
              checkIpa,
              ipaCatat,
              checkRds,
              rdsCatat,
              checkPdam,
              pdamCatat,
              checkPks,
              pksCatat,
              catatanAll,
              kdPersentase
            };
            $.LoadingOverlay("show");
            ajaxUntukSemua(base_url()+'KonregAM/simpanBaKonregAM', datBody, function(data) {

              if (data.code ==200) {
               toastr.success('Data Berhasil Disimpan.!', 'Berhasil',optionsToast);
             }else{
               toastr.error('Data gagal disimpan.!', 'Gagal', optionsToast);
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

        ajaxUntukSemua(base_url()+'KonregAM/getDataKabKota', {kdlokasi}, function(data) {

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

        ajaxUntukSemua(base_url()+'KonregAM/getDataTematik', {kdsatker}, function(data) {

          console.log(data)

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


        }, function(error) {
          console.log('Kesalahan:', error);
          t_error('Ada yg Error : '+error)
        });

      });
                  // End Pilih Kab/kota

    });
  </script>
</div>
</div>