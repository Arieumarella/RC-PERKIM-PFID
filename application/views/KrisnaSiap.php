
<div class="container mt-3 " id="container2">
  <div class="col-md-12 col-lg-12">
    <div class="card card-stacked">
      <div class="card-body">
        <?= $this->session->flashdata('psn'); ?>
        <form action="<?= base_url(); ?>KrisnaSiap/simpanFileKrisna" method="POST" enctype="multipart/form-data">
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
          <div class="col-6">
            <div class="form-label">Catatan :</div>
            <textarea class="form-control" id="catatn_baru" name="catatn_baru" rows="6" placeholder="Content.." style="height: 179px;" required></textarea>
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