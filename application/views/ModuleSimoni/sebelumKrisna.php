
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
    font-size: 12px;
    border: 1px solid black;
  }

  .table tbody td {
    font-size: 12px;
    border: 1px solid black;
  }

  .form-selectX {
    width: unset;
  }


  .sticky-top {
    position: sticky;
    top: 0;
    background-color: #f8f9fa;
    z-index: 1;
  }

  .table-responsive {
    overflow-y: scroll;

  }

  .table-responsive::-webkit-scrollbar {
    width: 10px; 
    height: 10px;
  }

  textarea {
    width: 100%;
    height: 100%;
    resize: none;
    box-sizing: border-box;

  }

  td {
    padding: 0; /* Menghapus padding agar textarea mengisi sel dengan benar */
  }

  td textarea {
    height: 100px; /* Atur tinggi kolom tabel untuk textarea sesuai keinginan Anda */
    width: 100%; /* Menyesuaikan lebar textarea dengan lebar sel tabel */
    resize: none; /* Menonaktifkan fitur resize textarea oleh pengguna */
    box-sizing: border-box; /* Menghitung lebar textarea termasuk border dan padding */
  }

</style>

<div class="container">
  <div class="col-md-12 col-lg-12">
    <div class="card card-stacked">
      <div class="card-body">
        <!-- <h3 class="card-title">Pilih Privinsi Kab/Kota</h3> -->
        <?= $this->session->userdata('psn'); ?>
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
        <div class="mb-3 row">
          <label class="col-1 col-form-label">Pilih Kab/Kota</label>
          <div class="col-2 text-start">
            <select class="form-select form-sm" id="kabkota">
              <option value="" selected disabled>-- Pilih Kab/Kota --</option>
            </select>
          </div>
        </div>
        <div class="mb-2 row">
          <label class="col-1 col-form-label">Pilih Bidang</label>
          <div class="col-2 text-start">
            <select class="form-select form-sm" id="bidang">
              <option value="" selected disabled>-- Pilih Bidang --</option>
              <option value="03">Air Minum</option>
              <option value="04">Sanitasi</option>
            </select>
          </div>
        </div>
        <div class="mt-3 mb-2 row">
          <div class="col-3 text-end">
            <button class="btn btn-primary" onclick="getDataTableConten()"><i class="fa-solid fa-magnifying-glass" style="margin-right: 15%;"></i>  Cari</button>
          </div>
        </div>
        <a href="<?= base_url(); ?>ModuleSimoni/exportExcelAllData" class="btn btn-success"><i class="fa-solid fa-file-excel fa-lg" style="margin-right:10px;"></i> Export Excel ALL DATA</a>
      </div>
    </div>
  </div>
</div>

<div class="container mt-3 d-none" id="container2">
  <div class="col-md-12 col-lg-12">
    <div class="card card-stacked">
      <div class="card-body">
        <div class="text-center mt-3 ">
          <h2 class="font-calibri-tittle" id="topTextTittle"></h2>
          <h2 class="font-calibri-tittle" id="nmprovinsi"> </h2>
          <h2 class="font-calibri-tittle" id="nmkabkota"> </h2>
        </div>

        <div class="row mt-4">
          <div class="row mt-3">
            <div class="col-2 " style="margin-top:-0.6%;">
             TOTAL USULAN APPROVE PUPR
           </div>
           <div class="col-5" style="margin-top: -8px;">
            <div class="d-inline">
              : 
            </div>
            <div class="" style="padding-left: 4%; margin-top: -22px;" id="usulanApprove">
              <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
            </div>     
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-2 " style="margin-top:-0.6%;">
           TOTAL USULAN DISCUSS/STOCK PROGRAM PUPR
         </div>
         <div class="col-5" style="margin-top: -8px;">
          <div class="d-inline">
            : 
          </div>
          <div class="" style="padding-left: 4%; margin-top: -22px;" id="usulanDiscuss">
            <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
          </div>     
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-2 " style="margin-top:-0.6%;">
          TOTAL USULAN REJECT PUPR
        </div>
        <div class="col-5" style="margin-top: -8px;">
          <div class="d-inline">
            : 
          </div>
          <div class="" style="padding-left: 4%; margin-top: -22px;" id="usulanReject">
            <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
          </div>     
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="row mt-3">
        <div class="col-2 " style="margin-top:-0.6%;">
         TOTAL USULAN APPROVE PPN
       </div>
       <div class="col-5" style="margin-top: -8px;">
        <div class="d-inline">
          : 
        </div>
        <div class="" style="padding-left: 4%; margin-top: -22px;" id="usulanApprovePPN">
          <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
        </div>     
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-2 " style="margin-top:-0.6%;">
       TOTAL USULAN DISCUSS/STOCK PROGRAM PPN
     </div>
     <div class="col-5" style="margin-top: -8px;">
      <div class="d-inline">
        : 
      </div>
      <div class="" style="padding-left: 4%; margin-top: -22px;" id="usulanDiscussPPN">
        <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
      </div>     
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-2 " style="margin-top:-0.6%;">
      TOTAL USULAN REJECT PPN
    </div>
    <div class="col-5" style="margin-top: -8px;">
      <div class="d-inline">
        : 
      </div>
      <div class="" style="padding-left: 4%; margin-top: -22px;" id="usulanRejectPPN">
        <i class="fa-solid fa-circle-check " style="color: #74b816; font-size:25px;"></i>
      </div>     
    </div>
  </div>
</div>

<div class="row mt-4">
  <div class="">
    <form method="POST" action="<?= base_url(); ?>ModuleSimoni/SimpanData" id="formMainTabel">
      <table class="table table-bordered table-sm" style="border-color: #a7a7b6;" >
       <thead class="text-center sticky-top align-middle">
        <tr>
          <th style="background-color: #206bc4; color: #f8fafc;">NO</th>
          <th style="background-color: #206bc4; color: #f8fafc; width:20%;">MENU/RINCIAN/KECAMTAN/DESA</th>
          <th style="background-color: #206bc4; color: #f8fafc;">KETERANGAN</th>
          <th style="background-color: #206bc4; color: #f8fafc; width: 30%;">PENILAIAN AWAL</th>
          <th style="background-color: #206bc4; color: #f8fafc; width: 30%;">SINKRONASI & HARMONISASI</th>
          <th style="background-color: #206bc4; color: #f8fafc; width: 5%;">COPY FORM</th>
        </tr>
      </thead>

      <tbody class="text-end" id="bodyTableConten">

      </tbody>
    </table>
    <div class="text-end mt-2">
      <button type="button" class="btn btn-dark" onclick="showCetakBa();"><i class="fa-solid fa-download" style="margin-right:5px;"></i> DOWNLOAD BA</button>
      <button type="button" class="btn btn-primary" onclick="sipanData();">SIMPAN</button>
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>
</div>


<!-- Modal Input Copy Form -->
<div class="modal modal-blur fade" id="modal_copyform" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Copy Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUploadFileDPA" action="<?= base_url(); ?>ModuleSimoni/SimpanCopyForm" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="kdsatkerAwal" id="kdsatkerAwal">
          <input type="hidden" name="idpaketAwal" id="idpaketAwal">
          <input type="hidden" name="idAwal" id="idAwal">
          <div class="mb-3">
            <div class="form-label">Nama Kecamatan :</div>
            <input type="text" name="kec" id="kec" class="form-control" readonly required>
          </div>
          <div class="mb-3">
            <div class="form-label">Nama Desa :</div>
            <input type="text" name="des" id="des" class="form-control" readonly required>
          </div>
          <div class="mb-3">
            <div class="form-label">Menu :</div>
            <select class="form-select" name="menu" id="menu" required>
             <option value="" selected disabled>- Pilih Menu -</option>
             <?php foreach ($dataMenu as $key => $value) { ?>
              <option value="<?= $value->menu; ?>"><?= $value->menu; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="mb-3">
          <div class="form-label">Rincian :</div>
          <select class="form-select" name="rincian" id="rincian" required >
           <option value="" selected disabled>- Pilih Rincian -</option>

         </select>
       </div>
       <div class="mb-3">
        <div class="form-label">Pengadaan :</div>
        <select class="form-select" name="pengadaan" id="pengadaan" required >
         <option value="" selected disabled>- Pilih Pengadaan -</option>
         <option value="1">Swakelola</option>
         <option value="2">Penyedia</option>
       </select>
     </div>
     <div class="mb-3">
      <div class="form-label">Volume :</div>
      <input type="text" name="volume" id="volume" class="form-control" oninput="totalNilaiGenerate(event, '0'); this.value = this.value.replace(/[^0-9]/g, '')" required>
    </div>
    <div class="mb-3">
      <div class="form-label">Satuan :</div>
      <select class="form-select" name="satuan" id="satuan" required>
       <option value="" selected disabled>- Pilih Satuan -</option>
       <?php foreach ($dataSatuan as $key => $value) { ?>
         <option value="<?= $value->satuan; ?>"><?= $value->satuan; ?></option>
       <?php } ?>
     </select>
   </div>
   <div class="mb-3">
    <div class="form-label">Harga Satuan :</div>
    <input type="text" name="harga_satuan" id="harga_satuan" class="form-control" oninput="totalNilaiGenerate(event, '0'); this.value = this.value.replace(/[^0-9]/g, '')" required>
  </div>
  <div class="mb-3">
    <div class="form-label">Total Nilai :</div>
    <input type="text" name="tot_nilai" id="tot_nilai" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '')" readonly required>
  </div>
  <div class="mb-3">
    <div class="form-label">Komponen :</div>
    <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="kompnen" id="kompnen" style="height: 100px;" required></textarea>
  </div>
  <div class="mb-3">
    <div class="form-label">Penilaian PPN :</div>
    <select class="form-select" name="penilaian_ppn" id="penilaian_ppn" oninput="setApproval('0')" required>
     <option value="" selected disabled>- Pilih Penilaian -</option>
     <option value="1">Approve</option>
     <option value="2">Reject</option>
     <option value="3">Discuss/Stock Program</option>
   </select>
 </div>
 <div class="mb-3">
  <div class="form-label">Penilaian PUPR :</div>
  <select class="form-select" name="penilaian_pupr" id="penilaian_pupr" oninput="setApproval('0')" required>
   <option value="" selected disabled>- Pilih Penilaian -</option>
   <option value="1">Approve</option>
   <option value="2">Reject</option>
   <option value="3">Discuss/Stock Program</option>
 </select>
</div>
<div class="mb-3">
  <div class="form-label">Penilaian SUM :</div>
  <input type="text" name="Penilaian_sum" id="Penilaian_sum" class="form-control" readonly required>
</div>
<div class="mb-3">
  <div class="form-label">Catatan PPN :</div>
  <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatanPPN" id="catatanPPN" required></textarea>
</div>
<div class="mb-3">
  <div class="form-label">Catatan PUPR :</div>
  <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatanKl" id="catatanKl" required></textarea>
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
<!-- End Modal Copy Form -->

<!-- Modal Cetak BA -->
<div class="modal modal-blur fade" id="modal_ba" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Cetak BA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUploadFileDPA" action="<?= base_url(); ?>ModuleSimoni/downloadPdf" method="POST">
          <input type="hidden" name="kdSatkerBA" id="kdSatkerBA">
          <div class="mb-3 col-12">
            <div class="form-label">Sub-Bidang :</div>
            <select class="form-select" name="sub_menu" id="sub_menu" required>
             <option value="" selected disabled>- Pilih Sub-Bidang -</option>
           </select>
         </div>
         <div class="row">
           <div class="mb-3 col-6">
            <div class="form-label">Nama Petugas Desk :</div>
            <input type="text" name="nm_petugas_desk" id="nm_petugas_desk" class="form-control" required>
          </div>
          <div class="mb-3 col-6">
            <div class="form-label">Nama OPD/Dinas :</div>
            <input type="text" name="opd_dinas" id="opd_dinas" class="form-control" required>
          </div>
          <div class="mb-3 col-6">
            <div class="form-label">Nama Peserta Desk :</div>
            <input type="text" name="nm_peserta_desk" id="nm_peserta_desk" class="form-control" required>
          </div>
          <div class="mb-3 col-6">
            <div class="form-label">Nomor Hp :</div>
            <input type="text" name="no_hp" id="no_hp" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
          </div>
          <hr>
          <div class="mb-3 col-6">
            <div class="form-label">TTD DIT. Air Minum/Sanitasi :</div>
            <input type="text" name="dit_air_minum" id="dit_air_minum" class="form-control" required>
          </div>
          <div class="mb-3 col-6">
            <div class="form-label">TTD PFID :</div>
            <input type="text" name="ttd_pfid" id="ttd_pfid" class="form-control" required>
          </div>
          <div class="mb-3 col-6">
            <div class="form-label">TTD Pemda :</div>
            <input type="text" name="ttd_pemda" id="ttd_pemda" class="form-control" required>
          </div>
          <div class="mb-3 col-6">
            <div class="form-label">TTD BPPW :</div>
            <input type="text" name="ttd_bppw" id="ttd_bppw" class="form-control" required>
          </div>
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
<!-- End Modal cetak ba -->



<script type="text/javascript">
  $( document ).ready(function() {

    $.LoadingOverlaySetup({
      background: "rgba(0, 0, 0, 0.4)",
      text: "",
    });

    showCetakBa = function () {

      $('#modal_ba').modal('show')


    }

    sipanData = function () {
     $.LoadingOverlay("show");
     var form = $('#formMainTabel');
     var validasiOK = form[0].reportValidity();
     if(validasiOK){
       const formData = form.serializeArray();
       ajaxUntukSemua(base_url()+'ModuleSimoni/SimpanData', formData, function(data) {

        toastr.options = {
          "positionClass": "toast-bottom-right"
        };

        $.LoadingOverlay("hide");

        if (data.code == '200') {
          toastr.success('Data Berhasil Disimpan.');
        }else{
          toastr.error('Data Gagal Disimpan.');
        }

      }, function(error) {
        $.LoadingOverlay("hide");
        console.log('Kesalahan:', error);
        t_error('Ada yg Error : '+error)
      });


     }else{
      $.LoadingOverlay("hide");
      t_error('Ada Kolom yang kosong, Silakan lengkapi form terelebih dahulu.');
    }

  }


  showModalCopyForm = function (id) {

    ajaxUntukSemua(base_url()+'ModuleSimoni/getDataAwalById', {id}, function(data) {

      $('#kdsatkerAwal').val(data.kdsatker);
      $('#idpaketAwal').val(data.idpaket);
      $('#idAwal').val(data.id);
      $('#kec').val(data.kecamatan);
      $('#des').val(data.desa);
      $('#volume').val(data.volume);
      $('#harga_satuan').val(data.harga_satuan);
      $('#kompnen').val(data.komponen);
      $('#catatanPPN').val(data.Catatan_PPN == null ? '' : data.Catatan_PPN.replace(/[^\w\s]/gi, ''));
      $('#catatanKl').val(data.Catatan_KL == null ? '' : data.Catatan_KL.replace(/[^\w\s]/gi, ''));

      $('#menu').val(data.menu);
      $('#rincian').html(`<option value="${data.rincian}" selected>${data.rincian}</option>`);

      slicePengadaan = data.pengadaan == null ? '' : data.pengadaan.slice(2, -2) == '1' ? '1':'2';

      $('#pengadaan').val(slicePengadaan);
      $('#satuan').val(data.satuan);
      $('#penilaian_ppn').val(data.Aprroval_PPN);
      $('#penilaian_pupr').val(data.Approval_KL);

      $('#tot_nilai').val(data.harga_satuan*data.volume);


      let penilaianPPN = data.Aprroval_PPN,
      penilaianPU = data.Approval_KL,
      penilaian = '';

      if (penilaianPPN == '1' && penilaianPU == '1') {
        penilaian = 'APPROVE';
      }

      if (penilaianPPN == '2' && penilaianPU == '1') {
        penilaian = 'Discuss/Stock Program';
      }

      if (penilaianPPN == '1' && penilaianPU == '2') {
        penilaian = 'Discuss/Stock Program';
      }

      if (penilaianPPN == '1' && penilaianPU == '3') {
        penilaian = 'Discuss/Stock Program';
      }

      if (penilaianPPN == '3' && penilaianPU == '1') {
        penilaian = 'Discuss/Stock Program';
      }

      if (penilaianPPN == '3' && penilaianPU == '3') {
        penilaian = 'Discuss/Stock Program';
      }

      if (penilaianPPN == '2' && penilaianPU == '3') {
        penilaian = 'Discuss/Stock Program';
      }

      if (penilaianPPN == '3' && penilaianPU == '2') {
        penilaian = 'Discuss/Stock Program';
      }

      if (penilaianPPN == '2' && penilaianPU == '2') {
        penilaian = 'Reject';
      }

      $('#Penilaian_sum').val(penilaian);

      $('#modal_copyform').modal('show')


    }, function(error) {
      console.log('Kesalahan:', error);
      t_error('Ada yg Error : '+error)
    });

  }

  let priveX = '<?= $this->session->userdata('rkdak_priv'); ?>',
  pfidPerkim = '<?= $this->session->userdata('rkdak_user'); ?>';

  getDataTableConten = function () {

    var kdlokasi = $("#provinsi option:selected").val(),
    kdkabkota =  $("#kabkota option:selected").val().substr(4, 2),
    bidang = $("#bidang option:selected").val(),
    kdsatkerXe = '33'+kdlokasi+kdkabkota+bidang;

    // Set Kdsatker di modal cetak ba
    $('#kdSatkerBA').val(kdsatkerXe);

    if (kdkabkota == '') {  
      t_error('Silakan Pilih Provinsi/kabupaten Kota Terlebih Dahulu.!')
      return;
    }

    if (bidang == '') {
      t_error('Silakan Pilih Bidang Terlebih Dahulu.!')
      return;
    }

    $.LoadingOverlay("show");

    ajaxUntukSemua(base_url()+'ModuleSimoni/getDataKrisnaBelumSIap', {kdlokasi, kdkabkota, bidang}, function(data) {

      let nmprovinsi = $("#provinsi option:selected").text().toUpperCase(),
      nmkabkota = $("#kabkota option:selected").text().toUpperCase();

      if (bidang == '03') {

        nmBidang = 'Air Minum'.toUpperCase();

      }else{

        nmBidang = 'Sanitasi'.toUpperCase();

      }

      $('#topTextTittle').text(`BERITA ACARA SINKRONISASI & HARMONISASI BIDANG `+nmBidang+` TA. 2024`);
      $('#nmprovinsi').text('PROVINSI '+nmprovinsi);
      if(kdkabkota != '00'){
        $('#nmkabkota').text(nmkabkota);
      }else{
        $('#nmkabkota').text('');

      }

      $('#usulanApprove').text(formatRupiah(Math.ceil(data.dataHeader.approve_kl)));
      $('#usulanDiscuss').text(formatRupiah(Math.ceil(data.dataHeader.discuss_kl)));
      $('#usulanReject').text(formatRupiah(Math.ceil(data.dataHeader.reject_kl)));


      $('#usulanApprovePPN').text(formatRupiah(Math.ceil(data.dataHeader.approve_ppn)));
      $('#usulanDiscussPPN').text(formatRupiah(Math.ceil(data.dataHeader.discuss_ppn)));
      $('#usulanRejectPPN').text(formatRupiah(Math.ceil(data.dataHeader.reject_ppn)));

      let tbody = '',
      no=1,
      penggambunganField = '';

      $.each(data.dataBody, function(index, val) {


        let slicePengadaan1 = val.pengadaan1 == null ? '' : val.pengadaan1.slice(2, -2) == '1' ? 'Swakelola':'Penyedia',
        approvelKl1 = val.Approval_KL1 == null ? '' : val.Approval_KL1 == '1' ? 'Approve' :  val.Approval_KL1 == '2' ? 'Reject' : 'Discuss/Stock Program',
        approvelPPN1 = val.Aprroval_PPN1 == null ? '' : val.Aprroval_PPN1 == '1' ? 'Approve' :  val.Aprroval_PPN1 == '2' ? 'Reject' : 'Discuss/Stock Program',
        approvelSum1 = val.Approval_Sum1 == null ? '' : val.Approval_Sum1 == '1' ? 'Approve' :  val.Approval_Sum1 == '2' ? 'Reject' : 'Discuss/Stock Program',
        slicePengadaan2 = val.pengadaan2 == null ? '' : val.pengadaan2.slice(2, -2) == '1' ? 'Swakelola':'Penyedia',
        approvelKl2 = val.Approval_KL2 == null ? '' : val.Approval_KL2 == '1' ? 'Approve' :  val.Approval_KL2 == '2' ? 'Reject' : 'Discuss/Stock Program',
        approvelPPN2 = val.Aprroval_PPN2 == null ? '' : val.Aprroval_PPN2 == '1' ? 'Approve' :  val.Aprroval_PPN2 == '2' ? 'Reject' : 'Discuss/Stock Program',
        approvelSum2 = val.Approval_Sum2 == null ? '' : val.Approval_Sum2 == '1' ? 'Approve' :  val.Approval_Sum2 == '2' ? 'Reject' : 'Discuss/Stock Program',
        pengggabungan = `SubBidang : ${val.subbidang}<br>Menu : ${val.menu} <br><br>Rincian : ${val.rincian} <br><br>Kecamatan : ${val.kecamatan} <br>Desa : ${val.desa}`,
        background = val.sts_copy == '1' ? 'style="background-color:#ffeeb0;"' : '',
        verifPPn = '',
        verifKl = '',
        catatanPPNBappenas = '',
        catatanPUPR = '',
        bgColorPupr = val.Approval_KL2 == null ? 'style="background-color:#e4e4e4;"' : (val.Approval_KL2 == '1' ? 'style="background-color:#96ff95;"' :  (val.Approval_KL2 == '2' ? 'style="background-color:#ff6c6c;"' : 'style="background-color:#ffeeaf;"')),
        bgColorPpn = val.Aprroval_PPN2 == null ? 'style="background-color:#e4e4e4;"' : (val.Aprroval_PPN2 == '1' ? 'style="background-color:#96ff95;"' :  (val.Aprroval_PPN2 == '2' ? 'style="background-color:#ff6c6c;"' : 'style="background-color:#ffeeaf;"')),
        bgColorSum = val.Approval_Sum2 == null ? 'style="background-color:#e4e4e4;"' : (val.Approval_Sum2 == '1' ? 'style="background-color:#96ff95;"' :  (val.Approval_Sum2 == '2' ? 'style="background-color:#ff6c6c;"' : 'style="background-color:#ffeeaf;"'));


        if (priveX == '10') {

          verifPPn = `<select class="form-select w-100 form-sm" name="approvelPPN[]" id="apprPPN${no}" oninput="setApproval(${no})" style="font-size: 12px;" >
          <option value="" selected disabled>- Pilih Approvel -</option>
          <option value="1" ${val.Aprroval_PPN2 === '1' ? 'selected' : ''} >Approve</option>
          <option value="2" ${val.Aprroval_PPN2 === '2' ? 'selected' : ''} >Reject</option>
          <option value="3" ${val.Aprroval_PPN2 === '3' ? 'selected' : ''} >Discuss/Stock Program</option>
          </select>`;

          catatanPPNBappenas = `<textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatanPPN[]" style="font-size: 12px;" required>${(val.Catatan_PPN2 == null) ? '' : val.Catatan_PPN2.replace(/[^\w\s]/gi, '')}</textarea>`;


        }else{

          if(val.Aprroval_PPN2 === '1') {
            verifPPn = 'Approve';
          }else if (val.Aprroval_PPN2 === '2'){
            verifPPn = 'Reject';
          }else{
           verifPPn = 'Discuss/Stock Program';
         }

         verifPPn += `  <input type="hidden" name="approvelPPN[]" id="apprPPN${no}" class="form-control" value='${val.Aprroval_PPN2}'>`;
         catatanPPNBappenas = `${(val.Catatan_PPN2 == null) ? '' : val.Catatan_PPN2.replace(/[^\w\s]/gi, '')}`;
         catatanPPNBappenas += `  <input type="hidden" name="catatanPPN[]" class="form-control" value='${(val.Catatan_PPN2 == null) ? '' : val.Catatan_PPN2.replace(/[^\w\s]/gi, '')}'>`;

       }


       if (priveX == '6' || priveX == '7' || priveX == '5') {

        verifKl = `<select class="form-select w-100 form-sm" name="approvelpu[]" oninput="setApproval(${no})" id="apprKl${no}" style="font-size: 12px;" >
        <option value="" selected disabled>- Pilih Approvel -</option>
        <option value="1" ${val.Approval_KL2 === '1' ? 'selected' : ''} >Approve</option>
        <option value="2" ${val.Approval_KL2 === '2' ? 'selected' : ''} >Reject</option>
        <option value="3" ${val.Approval_KL2 === '3' ? 'selected' : ''} >Discuss/Stock Program</option>
        </select>`;

        catatanPUPR = `<textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="catatanPu[]" style="font-size: 12px;" required>${(val.Catatan_KL2 == null) ? '' : val.Catatan_KL2.replace(/[^\w\s]/gi, '')}</textarea>`;


      }else{

        if(val.Approval_KL2 === '1') {
          verifKl = 'Approve';
        }else if (val.Approval_KL2 === '2'){
          verifKl = 'Reject';
        }else{
         verifKl = 'Discuss/Stock Program';
       }

       verifKl += `  <input type="hidden" name="approvelpu[]" id="apprKl${no}" class="form-control" value='${val.Approval_KL2}'>`;
       catatanPUPR = `${(val.Catatan_KL2 == null) ? '' : val.Catatan_KL2.replace(/[^\w\s]/gi, '')}`;
       catatanPUPR += `  <input type="hidden" name="catatanPu[]" class="form-control" value='${(val.Catatan_KL2 == null) ? '' : val.Catatan_KL2.replace(/[^\w\s]/gi, '')}'>`;

     }



     tbody += `<tr ${background}>`;
     tbody += `<td class='text-center' rowspan='11' >${no}</td>`;
     tbody += `<td class='text-start' rowspan='11'>${pengggabungan}</td>`;
     tbody += `<td class='text-start'>Cara Pengadaan</td>`;
     tbody += `<td class='text-end'>${slicePengadaan1}</td>`;
     tbody += `<td class='text-start'><select class="form-select w-100 form-sm" name="pengadaan[]" style="font-size: 12px;" id="bidang" required>
     <option value="" selected disabled>- Pilih Pengadaan -</option>
     <option value="1" ${slicePengadaan2 === 'Swakelola' ? 'selected' : ''} >Swakelola</option>
     <option value="2" ${slicePengadaan2 === 'Penyedia' ? 'selected' : ''} >Penyedia</option>
     </select></td>`;
     tbody += `<td class='text-center' rowspan='11'>
     ${val.sts_copy != '2' ? `<button type="button" class="btn btn-icon btn-primary mt-2" onclick="showModalCopyForm(${val.id});" ${pfidPerkim != 'perkimpfid' ? 'disabled' : ''}><i class="fa-solid fa-plus"></i></button>` : ''}</td>`;
     tbody += `</tr>`;

     tbody += `<tr ${background}>`;
     tbody += `<td class='text-start'>Volume</td>`;
     tbody += `<td class='text-end'>${val.volume1 == null ? '' : val.volume1}</td>`;
     tbody += `<td class='text-start'><input type="text" name="volume[]" id="volume${no}" class="form-control" value="${val.volume2}" oninput="totalNilaiGenerate(event, ${no}); this.value = this.value.replace(/[^0-9]/g, '')" style="font-size: 12px;" required>
     <input type="hidden" name="idAwal[]" class="form-control" value="${val.id}" required>
     <input type="hidden" name="idPaket[]" class="form-control" value="${val.idpaket}" required>
     <input type="hidden" name="kdsatker[]" class="form-control" value="${val.kdsatker}" required>
     <input type="hidden" name="satuan[]" class="form-control" value="${val.satuan2}" required>
     </td>`;
     tbody += `</tr>`;

     tbody += `<tr ${background}>`;
     tbody += `<td class='text-start'>Satuan</td>`;
     tbody += `<td class='text-end'>${val.satuan1 == null ? '' : val.satuan1}</td>`;
     tbody += `<td class='text-start'>${val.satuan2}</td>`;
     tbody += `</tr>`;

     tbody += `<tr ${background}>`;
     tbody += `<td class='text-start'>Harga Satuan</td>`;
     tbody += `<td class='text-end'>${formatRupiah(Math.ceil(val.harga_satuan1)) == 0 ? '' : formatRupiah(Math.ceil(val.harga_satuan1))}</td>`;
     tbody += `<td class='text-start'><input type="text" id="hargaSatuan${no}" name="harga_satuan[]" class="form-control" value="${Math.ceil(val.harga_satuan2)}" oninput="totalNilaiGenerate(event, ${no}); this.value = this.value.replace(/[^0-9]/g, '')" style="font-size: 12px;" required></td>`;
     tbody += `</tr>`;

     tbody += `<tr ${background}>`;
     tbody += `<td class='text-start'>Total Nilai</td>`;
     tbody += `<td class='text-end'>${formatRupiah(val.volume1*Math.ceil(val.harga_satuan1)) == 0 ? '' : formatRupiah(val.volume1*Math.ceil(val.harga_satuan1))}</td>`;
     tbody += `<td class='text-start' id="totNilai${no}">${formatRupiah(val.volume2*Math.ceil(val.harga_satuan2))}</td>`;
     tbody += `</tr>`;

     tbody += `<tr ${background}>`;
     tbody += `<td class='text-start'>Komponen</td>`;
     tbody += `<td class='text-start'>${val.komponen1}</td>`;
     tbody += `<td class='text-start'> <textarea class="form-control" data-bs-toggle="autosize" placeholder="" name="komponen[]" style="font-size: 12px;">${(val.komponen2 == null) ? '' : val.komponen2}</textarea></td>`;
     tbody += `</tr>`;

     tbody += `<tr ${background}>`;
     tbody += `<td class='text-start'>Catatan PUPR</td>`;
     tbody += `<td class='text-start'>${(val.Catatan_KL1 == null) ? '' : val.Catatan_KL1.replace(/[^\w\s]/gi, '')}</td>`;
     tbody += `<td class='text-start'>${catatanPUPR}</td>`;
     tbody += `</tr>`;

     tbody += `<tr ${background}>`;
     tbody += `<td class='text-start'>Catatan PPN</td>`;
     tbody += `<td class='text-start'>${(val.Catatan_PPN1 == null) ? '' : val.Catatan_PPN1.replace(/[^\w\s]/gi, '')}</td>`;
     tbody += `<td class='text-start'>${catatanPPNBappenas}</td>`;
     tbody += `</tr>`;

     tbody += `<tr id="idBarisPenilaianPPN${no}" ${bgColorPpn}>`;
     tbody += `<td class='text-start'>Penilaian PPN</td>`;
     tbody += `<td class='text-end'>${approvelPPN1}</td>`;
     tbody += `<td class='text-start'>${verifPPn}</td>`;
     tbody += `</tr>`;

     tbody += `<tr id="idBarisPenilaianPupr${no}"  ${bgColorPupr}>`;
     tbody += `<td class='text-start'>Penilaian PUPR</td>`;
     tbody += `<td class='text-end'>${approvelKl1}</td>`;
     tbody += `<td class='text-start'>${verifKl}</td>`;
     tbody += `</tr>`;

     tbody += `<tr id="idBarisPenilaianSum${no}" ${bgColorSum}>`;
     tbody += `<td class='text-start'>Penilaian SUM</td>`;
     tbody += `<td class='text-end'>${approvelSum1}</td>`;
     tbody += `<td class='text-start' id="approvSum${no}">${approvelSum2}</td>`;
     tbody += `</tr>`;

     no++;     

   })



$('#bodyTableConten').html(tbody);

$('#container2').removeClass('d-none');

let optionSubBidang = '<option value="" selected="" disabled="">-- Pilih SubBidang --</option>';

$.each(data.dataSubBidang, function(index, val) {

  optionSubBidang += `<option value="${val.subbidang}">${val.subbidang}</option>`;

})

$('#sub_menu').html(optionSubBidang);

$('html, body').animate({
  scrollTop: $('#container2').offset().top
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


totalNilaiGenerate = function (event, id) {

  if (id != '0') {
    let volume = $('#volume'+id).val(),
    hargaSatuan = $('#hargaSatuan'+id).val(),
    hasilKali = formatRupiah(volume*hargaSatuan);
    $('#totNilai'+id).text(hasilKali);
  }else{

    let volume = $('#volume').val(),
    hargaSatuan = $('#harga_satuan').val(),
    hasilKali = volume*hargaSatuan;
    $('#tot_nilai').val(hasilKali);
  }
}


setApproval = function (id) {
  if (id != '0') {
    let penilaianPPN = $('#apprPPN'+id).val(),
    penilaianPU = $('#apprKl'+id).val(),
    penilaian = '',
    bgColor = '';

    if (penilaianPPN == '1' && penilaianPU == '1') {
      penilaian = 'APPROVE';
      bgColor = '#96ff95';
    }

    if (penilaianPPN == '2' && penilaianPU == '1') {
      penilaian = 'Discuss/Stock Program';
      bgColor = '#ffeeaf';
    }

    if (penilaianPPN == '1' && penilaianPU == '2') {
      penilaian = 'Discuss/Stock Program';
      bgColor = '#ffeeaf';
    }

    if (penilaianPPN == '1' && penilaianPU == '3') {
      penilaian = 'Discuss/Stock Program';
      bgColor = '#ffeeaf';
    }

    if (penilaianPPN == '3' && penilaianPU == '1') {
      penilaian = 'Discuss/Stock Program';
      bgColor = '#ffeeaf';
    }

    if (penilaianPPN == '3' && penilaianPU == '3') {
      penilaian = 'Discuss/Stock Program';
      bgColor = '#ffeeaf';
    }

    if (penilaianPPN == '2' && penilaianPU == '3') {
      penilaian = 'Discuss/Stock Program';
      bgColor = '#ffeeaf';
    }

    if (penilaianPPN == '3' && penilaianPU == '2') {
      penilaian = 'Discuss/Stock Program';
      bgColor = '#ffeeaf';
    }

    if (penilaianPPN == '2' && penilaianPU == '2') {
      penilaian = 'Reject';
      bgColor = '#ff6c6c';
    }

    let bgColorPupr = penilaianPU == null ? '#e4e4e4' : (penilaianPU == '1' ? '#96ff95' :  (penilaianPU == '2' ? '#ff6c6c' : '#ffeeaf')),
    bgColorPpn = penilaianPPN == null ? '#e4e4e4' : (penilaianPPN == '1' ? '#96ff95' :  (penilaianPPN == '2' ? '#ff6c6c' : '#ffeeaf'));
    
    $('#approvSum'+id).text(penilaian);
    $('#idBarisPenilaianSum'+id).css('background-color', `${bgColor}`);
    $('#idBarisPenilaianPPN'+id).css('background-color', `${bgColorPpn}`);
    $('#idBarisPenilaianPupr'+id).css('background-color', `${bgColorPupr}`);
    

  }else{
    let penilaianPPN = $('#penilaian_ppn').val(),
    penilaianPU = $('#penilaian_pupr').val(),
    penilaian = '',
    bgColor = '';

    if (penilaianPPN == '1' && penilaianPU == '1') {
      penilaian = 'APPROVE';
      bgColor = '#96ff95';
    }

    if (penilaianPPN == '2' && penilaianPU == '1') {
      penilaian = 'Discuss/Stock Program';
      bgColor = '#ffeeaf';
    }

    if (penilaianPPN == '1' && penilaianPU == '2') {
      penilaian = 'Discuss/Stock Program';
      bgColor = '#ffeeaf';
    }

    if (penilaianPPN == '1' && penilaianPU == '3') {
      penilaian = 'Discuss/Stock Program';
      bgColor = '#ffeeaf';
    }

    if (penilaianPPN == '3' && penilaianPU == '1') {
      penilaian = 'Discuss/Stock Program';
      bgColor = '#ffeeaf';
    }

    if (penilaianPPN == '3' && penilaianPU == '3') {
      penilaian = 'Discuss/Stock Program';
      bgColor = '#ffeeaf';
    }

    if (penilaianPPN == '2' && penilaianPU == '3') {
      penilaian = 'Discuss/Stock Program';
      bgColor = '#ffeeaf';
    }

    if (penilaianPPN == '3' && penilaianPU == '2') {
      penilaian = 'Discuss/Stock Program';
      bgColor = '#ffeeaf';
    }

    if (penilaianPPN == '2' && penilaianPU == '2') {
      penilaian = 'Reject';
      bgColor = '#ff6c6c';
    }

    let bgColorPupr = penilaianPU == null ? '#e4e4e4' : (penilaianPU == '1' ? '#96ff95' :  (penilaianPU == '2' ? '#ff6c6c"' : '#ffeeaf')),
    bgColorPpn = penilaianPPN == null ? '#e4e4e4' : (penilaianPPN == '1' ? '#96ff95' :  (penilaianPPN == '2' ? '#ff6c6c' : '#ffeeaf'));

    $('#Penilaian_sum').text(penilaian);
    $('#idBarisPenilaianSum'+id).css('background-color', `${bgColor}`);
    $('#idBarisPenilaianPPN'+id).css('background-color', `${bgColorPpn}`);
    $('#idBarisPenilaianPupr'+id).css('background-color', `${bgColorPupr}`);
    

  }
  
}


$('#provinsi').change(function() {
  var kdlokasi = $("#provinsi option:selected").val();

  ajaxUntukSemua(base_url()+'Rc_perkim24/getKabKotaByKdlokasi', {kdlokasi}, function(data) {

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


function formatRupiah(number) {
  return number.toLocaleString('id-ID');
}



$("#menu").change(function() {

  var val = $(this).val();
  
  ajaxUntukSemua(base_url()+'ModuleSimoni/getRincianByMenu', {val}, function(data) {

    let html = '<option value="" selected="" disabled="">- Pilih Menu -</option>';

    $.each(data, function(index, val) {

      html += `'<option value="${val.menu}">${val.menu}</option>';`;

    })

    $('#rincian').html(html);

  }, function(error) {
    console.log('Kesalahan:', error);
    t_error('Ada yg Error : '+error)
  });
});



});
</script>