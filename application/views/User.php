
<div class="container mt-3 " id="container2">
  <div class="col-md-12 col-lg-12">
    <div class="card card-stacked">
      <div class="card-body">
        <?= $this->session->flashdata('psn'); ?>
        <div class="table-responsive">
          <table id="userTabel" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Provinsi</th>
                <th>Kabupaten/Kota</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach ($data as $key => $val) { ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $val->nmlokasi; ?></td>
                  <td><?= $val->nmkabkota; ?></td>
                  <td><?= $val->nama; ?></td>
                  <td><?= $val->username; ?></td>
                  <td><?= $val->sandi; ?></td>
                  <td>
                    <button class="btn btn-icon btn-warning" onclick="shwoModalEdit('<?= $val->ket; ?>', '<?= $val->username; ?>')"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-icon btn-danger" onclick="shwowAlertDelete('<?= $val->ket; ?>', '<?= $val->username; ?>')"><i class="fas fa-trash"></i></button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Provinsi</th>
                <th>Kabupaten/Kota</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal modal-blur fade" id="modalEdit" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tittle_modal_dok">Form Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUploadFileRcSan" action="<?= base_url(); ?>Users/prsEdit" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="kdsatker" id="kdsatker_hidden">
          <input type="hidden" name="username_hidden" id="username_hidden">
          <div class="mb-3">
            <div class="form-label">Username :</div>
            <input type="text" name="Username" id="Username" class="form-control" required />
          </div>
          <div class="mb-3">
            <div class="form-label">Password :</div>
            <input type="password" name="Password" id="Password" class="form-control" />
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


<script type="text/javascript">
  $( document ).ready(function() {

    shwoModalEdit = function (kdsatker,username) {

      $('#kdsatker_hidden').val(kdsatker);
      $('#username_hidden').val(username);
      $('#Username').val(username);
      $('#Password').val('');


      $('#modalEdit').modal('show');
    }



    shwowAlertDelete = function(kdsatker, username) {
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data yang telah dihapus tidak bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {

          $.ajax({
            url: base_url()+'Users/prsHapus',
            type: 'POST',
            data: {
              kdsatker,username
            },
            success: function(res) {

              location.reload();

            }
          });

        }
      });
    }

  });
</script>