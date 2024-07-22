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
            <?php if ($this->session->userdata('rkdak_prive') == '1') { ?>

              

              <div class="container mt-3 text-center" id="contenAdmin">
                <div class="col-md-12 col-lg-12">
                  <div class="card card-stacked">
                    <div class="card-body">
                      <h2 class="font-calibri-tittle">REKAP READINESS CRITERIA PPKT TA. <?= $this->session->userdata('thang'); ?></h2>
                      <h2 class="font-calibri-tittle" id="nmprovinsi2" style="margin-top:-18px;"></h2>
                      <h2 class="font-calibri-tittle" id="nmkabkota2" style="margin-top:-18px;"></h2>

                      <div class="row text-start">
                        <div class="col-2">
                          <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                            <button class="btn btn-primary" onclick="showModalTambah();"><i class="fas fa-plus"></i> TAMBAH DATA</button>
                          <?php } ?>
                        </div>
                      </div>

                      <table class="table table-bordered table-lg mt-2" style="border-color: #a7a7b6;" >
                       <thead class="text-center sticky-top align-middle">
                        <tr>
                          <th style="background-color: #5E767E; color: white; font-size: 10px; width: 1px;">No.</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">Kecamatan</th>
                          <th style="background-color: #5E767E; color: white; font-size: 10px;">Desa</th>
                        </tr>
                      </thead>

                      <tbody class="text-end" id="bodyTableConten">
                        <?php $no=1; foreach ($dataTabel as $key => $val) { ?>
                          <tr>
                            <td><?= $no++; ?></td>
                            <td class="text-start"><?= $val->nmkec; ?></td>
                            <td  class='text-start'><a href="<?= base_url(); ?>PPKT/detail/<?= $val->id; ?>" target="_blank"><?= $val->nmdesa; ?></a></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>


                  </div>
                </div>
              </div>
            </div>
          <?php } ?>


          <?php if ($this->session->userdata('rkdak_prive') > '1') { ?>

            <div class="container mt-3 " id="container">
              <div class="col-md-12 col-lg-12">
                <div class="card card-stacked">
                  <div class="card-body">
                    <?= $this->session->flashdata('psn'); ?>
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
                        <button class="btn btn-primary" onclick="getDataTableConten()"><i class="fas fa-search" style="margin-right: 15%;"></i>  Cari</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="container mt-3 text-center d-none" id="contenAdmin">
              <div class="col-md-12 col-lg-12">
                <div class="card card-stacked">
                  <div class="card-body">
                    <h2 class="font-calibri-tittle">REKAP READINESS CRITERIA PPKT TA. <?= $this->session->userdata('thang'); ?></h2>
                    <h2 class="font-calibri-tittle" id="nmprovinsi2" style="margin-top:-18px;"></h2>
                    <h2 class="font-calibri-tittle" id="nmkabkota2" style="margin-top:-18px;"></h2>

                    <div class="row text-start">
                      <div class="col-2">
                        <?php if($this->session->userdata('rkdak_user')=='perkimpfid'){ ?>
                          <button class="btn btn-primary" onclick="showModalTambah();"><i class="fas fa-plus"></i> TAMBAH DATA</button>
                        <?php } ?>
                      </div>
                    </div>

                    <table class="table table-bordered table-lg mt-2" style="border-color: #a7a7b6;" >
                     <thead class="text-center sticky-top align-middle">
                      <tr>
                        <th style="background-color: #5E767E; color: white; font-size: 10px; width: 1px;">No.</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">Kecamatan</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px;">Desa</th>
                        <th style="background-color: #5E767E; color: white; font-size: 10px; width: 1px;">Aksi</th>
                      </tr>
                    </thead>

                    <tbody class="text-end" id="bodyTableConten">

                    </tbody>
                  </table>


                </div>
              </div>
            </div>
          </div>

          <!-- Pembangunan -->
          <div class="modal modal-blur fade" id="modalTambahPPKT" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="tittle_modal_dok_iplt">Form Tambah Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="formUploadpembangunan">
                    <input type="hidden" name="kdsatkerPPKT" id="kdsatkerPPKT">
                    <div class="mb-3">
                      <div class="form-label">Pilih Kecamatan :</div>
                      <select id="kecamatanPPKT" name="kecamatanPPKT" class="form-select align-middle w-100" style="width:auto; height: 33px;" >
                        <option value="" selected disabled>-- Pilih Kecamatan --</option>

                      </select>
                    </div>

                    <div class="mb-3">
                      <div class="form-label">Pilih Desa :</div>
                      <select id="desaPPKT" name="desaPPKT" class="form-select align-middle w-100" style="width:auto; height: 33px;" >
                        <option value="" selected disabled>-- Pilih Desa --</option>

                      </select>
                    </div>
                  </div>
                  <div class="modal-footer text-end">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                      Cancel
                    </a>
                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Simpan File" onclick="simpanDataPPKT();">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- End Pembangunan -->

        <?php } ?>


        <script type="text/javascript">
          $( document ).ready(function() {

           <?php if ($this->session->userdata('rkdak_prive') > '1') { ?>

            hapusPPKT = function (id) {

             Swal.fire({
              title: 'Apakah Anda yakin?',
              text: "Data yang telah dihapus tidak bisa dikambalikan.!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ya, hapus!',
              cancelButtonText: 'Batal'
            }).then((result) => {
              if (result.isConfirmed) {
                ajaxUntukSemua(base_url()+'PPKT/hapusPPKT', {id}, function(data) {
                  getDataTableConten();
                  Swal.fire(
                    'Dihapus!',
                    'Data Berhasil Dihapus.!',
                    'success'
                    );


                }, function(error) {
                  console.log('Kesalahan:', error);
                  t_error('Ada yg Error : '+error)
                });
              }
            });

          }


          simpanDataPPKT = function () {

            let kdsatker = $("#kdsatkerPPKT").val(),
            kdkec =  $("#kecamatanPPKT option:selected").val(),
            kddesa =  $("#desaPPKT option:selected").val();

            if (kdsatker == '') {
              t_error('Invalid Parameter.!')
              return;
            }

            if (kdkec == '') {
              t_error('Silahkan Pilih Kecamatan Terlebih Dahulu.!');
              return;
            }


            if (kddesa == '') {
              t_error('Silahkan Pilih Desa Terlebih Dahulu.!');
              return;
            }


            ajaxUntukSemua(base_url()+'PPKT/simpanDataPPKT', {kdsatker,kdkec,kddesa}, function(data) {

              if (data.code != 200) {

                $('#modalTambahPPKT').modal('hide');
                t_error('Data gagal Disimpan.!');

              }


              if (data.code == 200) {

               $('#modalTambahPPKT').modal('hide');
               getDataTableConten();
               Swal.fire({
                icon: 'success',
                title: 'Data Berhasil Disimpan',
                confirmButtonText: 'OK'
              });


             }


           }, function(error) {
            console.log('Kesalahan:', error);
            t_error('Ada yg Error : '+error)
          });




          }


          showModalTambah = function () {

            $('#modalTambahPPKT').modal('show');


          }


          getDataTableConten = function () { 

            let kdlokasi = $("#provinsi option:selected").val(),
            kdkabkota =  $("#kabkota option:selected").val();

            if (kdkabkota == '') {
              t_error('Silakan Pilih Provinsi/kabupaten Kota Terlebih Dahulu.!')
              return;
            }

            let kdlokasi_text = $("#provinsi option:selected").text(),
            kdkabkota_text =  $("#kabkota option:selected").text();

            $('#nmprovinsi2').text(kdlokasi_text.toUpperCase());
            $('#nmkabkota2').text(kdkabkota_text.toUpperCase());
            $('#kdsatkerPPKT').val(kdkabkota);

            $.LoadingOverlay("show");

            ajaxUntukSemua(base_url()+'PPKT/getDataTabel', {kdlokasi,kdkabkota}, function(data) {

                  // Set Kecamatan
              let opt = `<option value="" selected disabled>-- Pilih Kecamatan --</option>`; 

              data.dataKecamatan.forEach(function(value) {

                opt += `<option value="`+value.kdkec+`">`+value.nmkec+`</option>`

              });

              $('#kecamatanPPKT').html(opt);
                  // End Set Kecamatan


                  // Set Data Tabel
              let tbody = ``,
              no=1;

              data.dataTabel.forEach(function(value) {

               tbody += `<tr>`;
               tbody += `<td class='text-center'>${no}</td>`;
               tbody += `<td  class='text-start'>${value.nmkec}</td>`;
               tbody += `<td  class='text-start'><a href="`+base_url()+'PPKT/detail/'+value.id+`" target="_blank">${value.nmdesa}</a></td>`;
               tbody += `<td class='text-center'><button class="btn btn-icon btn-danger" onclick="hapusPPKT('${value.id}')"><i class="fas fa-trash-alt"></i></button></td>`;
               tbody += `</tr>`;
               no++;
             });

              $('#bodyTableConten').html(tbody);
                  // End Set Data Tabel

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
            let kdlokasi = $("#provinsi option:selected").val();

            ajaxUntukSemua(base_url()+'PPKT/getKabKotaByKdlokasi', {kdlokasi}, function(data) {

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


          $('#kecamatanPPKT').change(function() {
            let kdsatker = $("#kdsatkerPPKT").val(),
            kdkec = $("#kecamatanPPKT option:selected").val();

            ajaxUntukSemua(base_url()+'PPKT/getDataDesa', {kdsatker, kdkec}, function(data) {

              let opt = `<option value="" selected disabled>-- Pilih Desa --</option>`; 

              data.forEach(function(value) {

                opt += `<option value="`+value.kddesa+`">`+value.nmdesa+`</option>`

              });

              $('#desaPPKT').html(opt);

            }, function(error) {
              console.log('Kesalahan:', error);
              t_error('Ada yg Error : '+error)
            });


          });

        <?php } ?>
      });
    </script>