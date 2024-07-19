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
    font-size: 11px;
  }

  .sticky-top {
    position: sticky;
    top: 0;
    background-color: #f8f9fa;
    z-index: 1;
  }

  .custom-cheklist {
    width: 30px; height: 30px; font-size: 18px; color: white;
  }


</style>


<div class="container mt-3 " id="container2">
  <div class="col-md-12 col-lg-12">
    <div class="card card-stacked">
      <div class="card-body">
        <?= $this->session->flashdata('psn'); ?>
        <div class="mb-3 row">
          <label class="col-lg-1 col-sm-5 col-form-label">Pilih Provinsi</label>
          <div class="col-lg-2 col-sm-5 text-start">
            <select class="form-select form-sm" id="provinsi">
              <option value="" selected disabled>-- Pilih Provinsi --</option>

              <?php foreach ($dataProvinsi as $key => $value) { ?>
                <option value="<?= $value->kdlokasi; ?>"><?= $value->nmlokasi; ?></option>
              <?php } ?>

            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-lg-1 col-sm-5 col-form-label">Pilih Kab/Kota</label>
          <div class="col-lg-2 col-sm-5 text-start">
            <select class="form-select form-sm" id="kabkota">
              <option value="" selected disabled>-- Pilih Kab/Kota --</option>
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-lg-1 col-sm-5 col-form-label">Pilih Tematik</label>
          <div class="col-lg-2 col-sm-5 text-start">
            <select class="form-select form-sm" id="tematik">
              <option value="" selected disabled>-- Pilih Tematik --</option>
              <option value="1">Tematik</option>
              <option value="0">Non-Tematik</option>
            </select>
          </div>
        </div>
        <div class="mt-3 mb-2 row">
          <div class="col-lg-3 col-sm-5 text-end">
            <button class="btn btn-primary" onclick="getDataTableConten()"><i class="fa-solid fa-magnifying-glass" style="margin-right: 15%;"></i>  Cari</button>
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
          <h2 class="font-calibri-tittle">BERITA ACARA KONSULTASI PROGRAM BIDANG AIR MINUM TA. 2024</h2>
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
        <td class="text-center" >4.</td>
        <td >Sisa Alokasi</td>
        <td>a. Sisa Alokasi</td>
        <td class="text-end" style="vertical-align: middle;"><input type="text" class="form-control" name="sisaAlokasi" id="sisaAlokasi"  oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" readonly></td>
        <td class="text-center"></td>
        <td class="text-center" ><textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="sisaAlokasiCatat" 
          style="width: 200px;" id="sisaAlokasiCatat"></textarea>
        </td>
      </tr>

      <tr class="text-start">
        <td class="text-center" rowspan="8">5.</td>
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
</div>
</div>
</div>
</div>

<div class="modal modal-blur fade" id="modalCetakBa" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cetak Berita Acara Bidang Air Minum</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(); ?>BA/prsCetakBaAM" method="POST">
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
    $( document ).ready(function() {

     $.LoadingOverlaySetup({
      background: "rgba(0, 0, 0, 0.4)",
      text: "",
    });

     let optionsToast = {

      "closeButton": true,
      "progressBar": true,
      "positionClass": "toast-bottom-right"

    }

    showCetakBa = function () {
      let kdsatkerBa = $('#kdsatkerHidden').val(),
      tematikBa = $('#kdTematikHidden').val();
      $('#kdsatkerBa').val(kdsatkerBa);
      $('#tematikBa').val(tematikBa);
      $('#modalCetakBa').modal('show');
    }


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
     sisaAlokasi = $('#sisaAlokasi').val(),
     catatSisaAlokasi = $('#sisaAlokasiCatat').val(),
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
  sisaAlokasi,
  catatSisaAlokasi,
  kdPersentase
};
$.LoadingOverlay("show");
ajaxUntukSemua(base_url()+'BA/simpanBaKonregAM', datBody, function(data) {

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


if (nilaiFisik != '' && nilaiPenunjang != '') {

 $('#fisikPenunjang').val(Number(nilaiFisik)+Number(nilaiPenunjang)); 
 $('#sisaAlokasi').val(Number(paguAlokasitotalhidde)-Number(totNilai));

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


getDataTableConten = function () {

  let kdlokasi = $("#provinsi option:selected").val(),
  kdkabkota =  $("#kabkota option:selected").val(),
  tematik = $("#tematik option:selected").val();


  // Masukan Value Hidden
  kdkabkotaX = kdkabkota.slice(0, 6);
  $('#kdTematikHidden').val(tematik);
  $('#kdsatkerHidden').val(kdkabkotaX+'03');

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

  ajaxUntukSemua(base_url()+'BA/getDataBaAm', {kdlokasi, kdkabkota, tematik}, function(data) {


        // Set provinsi 
   $('#provHeader').text($('#provinsi option:selected').text());
        // End Set Provinsi

        // Set kabupaten/Kota
   $('#kabKotaHeader').text($('#kabkota option:selected').text());
        // End Set kabupaten/Kota


        // set Pagu Heder
        // tematik
   if (tematik == '1') {

    $('#icon-rispam').text('Tematik');

    $('#paguAlokasiTot').text(data.dataAwal.total_tematik == null ? 0 : formatAngka(data.dataAwal.total_tematik*1000));
    $('#paguAlokasitotalhidde').val(data.dataAwal.total_tematik*1000);

    $('#paguAlokasiPemda').text('Rp. -');

    $('#paguAspirasi').text('Rp. -');

    $('#minApproveHeader').text(data.dataAwal.min_approve_tematik == null ? 0 : formatAngka(data.dataAwal.min_approve_tematik*1000) );
    $('#minApproveHeaderHedden').val(data.dataAwal.min_approve_tematik*1000);

    $('#MaxApproveHeader').text(data.dataAwal.max_penunjang_tematik == null ? 0 : formatAngka(data.dataAwal.max_penunjang_tematik*1000) );
    $('#maxPenunjangHedden').val(data.dataAwal.max_penunjang_tematik*1000);


  }
        // End Temati

        // Non tematik
  if (tematik == '0') {
    $('#icon-rispam').text('Non-Tematik');
    $('#paguAlokasiTot').text(data.dataAwal.total_non_tematik == null ? 0 : formatAngka(data.dataAwal.total_non_tematik*1000) );
    $('#paguAlokasitotalhidde').val(data.dataAwal.total_non_tematik*1000);


    $('#paguAlokasiPemda').text(data.dataAwal.pemda_non_tematik == null ? 0 : formatAngka(data.dataAwal.pemda_non_tematik*1000) );

    $('#paguAspirasi').text(data.dataAwal.dpr_non_tematik == null ? 0 :  formatAngka(data.dataAwal.dpr_non_tematik*1000) );

    $('#minApproveHeader').text(data.dataAwal.min_approve_non_tematik == null ? 0 : formatAngka(data.dataAwal.min_approve_non_tematik*1000) );
    $('#minApproveHeaderHedden').val(data.dataAwal.min_approve_non_tematik*1000);


    $('#MaxApproveHeader').text(data.dataAwal.max_penunjang_non_tematik == null ? 0 : formatAngka(data.dataAwal.max_penunjang_non_tematik*1000) );
    $('#maxPenunjangHedden').val(data.dataAwal.max_penunjang_non_tematik*1000);

  }
        // Non Tematik
        // End Set Pagu header

        // Set Data Table
  if (data.dataBody != null) {

    // Set statsu kegiatan fisik
    if (tematik == '0') {

      if (Number(data.dataBody.nilai_fisik) <= (Number(data.dataAwal.total_non_tematik)*1000)) {
        $('#sts_fisik').text('OK');
      }else{
        $('#sts_fisik').text('NOT OK');
      }

    }


    if (tematik == '1') {
      if (Number(data.dataBody.nilai_fisik) <= (Number(data.dataAwal.total_tematik)*1000)) {
        $('#sts_fisik').text('OK');
      }else{
        $('#sts_fisik').text('NOT OK');
      }
    }
    // End Set statsu kegiatan fisik

    $('#persentase').text(((Number(data.dataBody.nilai_penunjang)/Number(data.dataBody.nilai_fisik_penunjang))*100).toFixed(4)+' %');



    let totalPenunjangFisik=Number(data.dataBody.nilai_fisik_penunjang),
    alokasiTotal = (tematik=='0') ? data.dataAwal.total_non_tematik*1000 : data.dataAwal.total_tematik*1000,
    alokasiPenunjang = (tematik=='0') ? data.dataAwal.max_penunjang_non_tematik*1000 : data.dataAwal.max_penunjang_tematik*1000,
    penujangPerbandingan = data.dataBody.nilai_penunjang;

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


    $('#nilaiFisik').val(data.dataBody.nilai_fisik);
    $('#catatFisik').val(data.dataBody.keterangan_fisik);
    $('input[type="checkbox"][name="checkOutput"][id="checkOutput"]').prop('checked', data.dataBody.sts_output == '1' ? true:false);
    $('#catatOutput').val(data.dataBody.keterangan_output);
    $('input[type="checkbox"][id="checkKomponen"]').prop('checked', data.dataBody.sts_komponen == '1' ? true:false);
    $('#catatKomponen').val(data.dataBody.keterangan_komponen);
    $('#nilaiPenunjang').val(data.dataBody.nilai_penunjang);
    $('input[type="checkbox"][id="checkPenunjang"]').prop('checked', data.dataBody.sts_rincian_penunjang == '1' ? true:false);
    $('#rincianKegiatan').val(data.dataBody.keterangan_rincian_penunjang);
    $('#fisikPenunjang').val(data.dataBody.nilai_fisik_penunjang);
    $('#fisikPenunjangCatat').val(data.dataBody.keterangan_fisik_penunjang);
    $('input[type="checkbox"][id="checkSPTJM"]').prop('checked', data.dataBody.sts_sptjm == '1' ? true:false);
    $('#catatSptjm').val(data.dataBody.keterangan_sptjm);
    $('input[type="checkbox"][id="checkRispam"]').prop('checked', data.dataBody.sts_rispam == '1' ? true:false);
    $('#catatRispam').val(data.dataBody.keterangan_rispam);
    $('input[type="checkbox"][id="checkDed"]').prop('checked', data.dataBody.sts_ded == '1' ? true:false);
    $('#dedCatat').val(data.dataBody.keterangan_ded);
    $('input[type="checkbox"][id="checkRab"]').prop('checked', data.dataBody.sts_rab == '1' ? true:false);
    $('#rabCatat').val(data.dataBody.keterangan_rab);
    $('input[type="checkbox"][id="checkIpa"]').prop('checked', data.dataBody.sts_kesiapan_lahan == '1' ? true:false);
    $('#ipaCatat').val(data.dataBody.keterangan_kesiapan_lahan);
    $('input[type="checkbox"][id="checkRds"]').prop('checked', data.dataBody.sts_rds == '1' ? true:false);
    $('#rdsCatat').val(data.dataBody.keterangan_rds);
    $('input[type="checkbox"][id="checkPdam"]').prop('checked', data.dataBody.sts_pdam == '1' ? true:false);
    $('#pdamCatat').val(data.dataBody.keterangan_pdam);
    $('input[type="checkbox"][id="checkPks"]').prop('checked', data.dataBody.sts_pks == '1' ? true:false);
    $('#pksCatat').val(data.dataBody.keterangan_pks);
    $('#catatanAll').val(data.dataBody.keterangan_global);
    $('#sisaAlokasi').val(data.dataBody.sisaAlokasi);
    $('#sisaAlokasiCatat').val(data.dataBody.leterangan_sisaAlokasi);

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
    $('input[type="checkbox"][id="checkRispam"]').prop('checked', false);
    $('#catatRispam').val('');
    $('input[type="checkbox"][id="checkDed"]').prop('checked', false);
    $('#dedCatat').val('');
    $('input[type="checkbox"][id="checkRab"]').prop('checked', false);
    $('#rabCatat').val('');
    $('input[type="checkbox"][id="checkIpa"]').prop('checked', false);
    $('#ipaCatat').val('');
    $('input[type="checkbox"][id="checkRds"]').prop('checked', false);
    $('#rdsCatat').val('');
    $('input[type="checkbox"][id="checkPdam"]').prop('checked', false);
    $('#pdamCatat').val('');
    $('input[type="checkbox"][id="checkPks"]').prop('checked', false);
    $('#pksCatat').val('');
    $('#catatanAll').val('');
    $('#sisaAlokasi').val('');
    $('#sisaAlokasiCatat').val('');
  }
      // End Set data table 

  $.LoadingOverlay("hide");


}, function(error) {
  console.log('Kesalahan:', error);
  t_error('Ada yg Error : '+error)
});

$("#container2").removeClass("d-none");

}


function formatAngka(angka) {
  return 'Rp. '+angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

$('#provinsi').change(function() {
  var kdlokasi = $("#provinsi option:selected").val(),
  kdbidang = '<?= $kdbidang; ?>';

  ajaxUntukSemua(base_url()+'BA/getKabKotaByKdlokasiKonreg', {kdlokasi, kdbidang}, function(data) {

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


$('#kabkota').change(function() {

  let kabkota = $('#kabkota').val();

  ajaxUntukSemua(base_url()+'BA/getTematik', {kabkota}, function(data) {

    if (data.val.total_tematik == '0') {
      $('#tematik option[value="1"]').prop('disabled', true);
    }else{
      $('#tematik option[value="1"]').prop('disabled', false);
    }


    if (data.val.total_non_tematik == '0') {
      $('#tematik option[value="0"]').prop('disabled', true);
    }else{
      $('#tematik option[value="0"]').prop('disabled', false);
    }

    $('#tematik').val('')

  }, function(error) {
    console.log('Kesalahan:', error);
    t_error('Ada yg Error : '+error)
  });



});




$('#klikKabKota').change(function() {
  var kdkabkota = $("#klikKabKota option:selected").val();

  ajaxUntukSemua(base_url()+'BA/getKecamatanByProvinsi', {kdkabkota}, function(data) {

    let opt = `<option value="" selected disabled>-- Pilih Kecamatan --</option>`; 

    data.forEach(function(value) {

      opt += `<option value="`+value.kdkec+`">`+value.nmkec+`</option>`

    });

    $('#klikKecamatan').html(opt);

  }, function(error) {
    console.log('Kesalahan:', error);
    t_error('Ada yg Error : '+error)
  });


});

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
    var newElement = await `<embed src="${base_url()}assets/2022/${spasiJadiPersen}" id='idEmbed' frameborder='0' width='100%' height='100%'>`;

    await $('embed#idEmbed').remove();
    await parent.append(newElement);
    await $('#modalPDFXX').modal('show');

  }else{
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