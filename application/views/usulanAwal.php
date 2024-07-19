
<div class="container mt-3 " id="container2">
  <div class="col-md-12 col-lg-12">
    <div class="card card-stacked">
      <div class="card-body">
        <?= $this->session->flashdata('psn'); ?>
        <form action="<?= base_url(); ?>/uploadUsulanAwal/prdUpload" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="mb-3 col-3">
              <div class="form-label">Upload File Exel</div>
              <input type="file" class="form-control" name="fileExel" accept=".xlsx, .xls">
            </div>
            <div class="mb-3 col-2" style="margin-top:28px;">
              <button class="btn btn btn-primary">Simpan</button>
            </div>
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