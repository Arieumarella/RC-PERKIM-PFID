
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
        <form action="<?= base_url(); ?>ModuleSimoni/simpanFileKrisna" method="POST" enctype="multipart/form-data">
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
        <div class="mb-3 row">
          <div class="col-6 text-start">
            <div class="form-label">File Krisna :</div>
            <input type="file" name="file_krisna" id="file_krisna" class="form-control" accept=".xlsx" required>
          </div>
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
  $( document ).ready(function() {



  });
</script>