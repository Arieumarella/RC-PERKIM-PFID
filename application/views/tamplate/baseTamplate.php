<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title><?= $tittle; ?></title>
  <!-- CSS files -->
  <link href="<?= base_url(); ?>assets//dist/css/tabler.min.css?1692870487" rel="stylesheet"/>
  <link href="<?= base_url(); ?>assets//dist/css/tabler-flags.min.css?1692870487" rel="stylesheet"/>
  <link href="<?= base_url(); ?>assets//dist/css/tabler-payments.min.css?1692870487" rel="stylesheet"/>
  <link href="<?= base_url(); ?>assets//dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet"/>
  <link href="<?= base_url(); ?>assets//dist/css/demo.min.css?1692870487" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <!-- datatable -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
  <!-- Toastr  -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/toastr/toastr.min.css">
  <!-- Selecr2 -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/select2/select2.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js" integrity="sha512-LW9+kKj/cBGHqnI4ok24dUWNR/e8sUD8RLzak1mNw5Ja2JYCmTXJTF5VpgFSw+VoBfpMvPScCo2DnKTIUjrzYw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="<?= base_url();  ?>assets/jquery/jquery.js"></script>
  <script type="text/javascript">
    function base_url() {
     return '<?= base_url(); ?>';
   }

   function ajaxUntukSemua(url, requestData, onSuccess, onError) {
    $.ajax({
      url: url,
      type: 'POST',
      data: requestData,
      dataType: 'json',
      success: function(data) {
        onSuccess(data);
      },
      error: function(xhr, status, error) {
        onError(error);
      }
    });
  }
</script>
<style>
  @import url('https://rsms.me/inter/inter.css');
  :root {
    --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
  }
  body {
    font-feature-settings: "cv03", "cv04", "cv11";
  }

  .philoShoper {
    font-family: "Philosopher", sans-serif;
  }

</style>


</head>
<body class="layout-fluid">
  <script src="<?= base_url(); ?>assets/dist/js/demo-theme.min.js?1692870487"></script>
  <div class="page">
    <!-- Sidebar -->
    <?php $this->load->view('tamplate/sidebar'); ?>
    <!-- End Sidebar -->

    <div class="page-wrapper content">
      <!-- Page header -->
      <div class="page-header d-print-none">
        <div class="container-xl">
          <div class="row g-2 align-items-center" style="margin-left: 20px;">
            <div class="col">
              <!-- Page pre-title -->
              <h2 class="page-title philoShoper" style="font-size: 45px; line-height: 50px; color: #4b4b4b;">
                <?= $tittle_header; ?>
              </h2>
              <div class="page-pretitle philoShoper" style="font-size: 15px; line-height: 15px;">
                <?= $this->session->userdata('rkdak_nama'); ?>
              </div>
            </div>
            <!-- Page title actions -->
<!--             <div class="col-auto ms-auto d-print-none">
              <div class="btn-list">
                <span class="d-none d-sm-inline">
                  <a href="#" class="btn">
                    New view
                  </a>
                </span>
                <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">

                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                  Create new report
                </a>
                <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">

                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                </a>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl ">
          <?php $this->load->view($content); ?>
        </div>
      </div>
      <!-- Footer -->
      <?php $this->load->view('tamplate/footer'); ?>
      <!-- End Footer -->
    </div>
  </div>
  <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">New report</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
          </div>
          <label class="form-label">Report type</label>
          <div class="form-selectgroup-boxes row mb-3">
            <div class="col-lg-6">
              <label class="form-selectgroup-item">
                <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
                <span class="form-selectgroup-label d-flex align-items-center p-3">
                  <span class="me-3">
                    <span class="form-selectgroup-check"></span>
                  </span>
                  <span class="form-selectgroup-label-content">
                    <span class="form-selectgroup-title strong mb-1">Simple</span>
                    <span class="d-block text-secondary">Provide only basic data needed for the report</span>
                  </span>
                </span>
              </label>
            </div>
            <div class="col-lg-6">
              <label class="form-selectgroup-item">
                <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                <span class="form-selectgroup-label d-flex align-items-center p-3">
                  <span class="me-3">
                    <span class="form-selectgroup-check"></span>
                  </span>
                  <span class="form-selectgroup-label-content">
                    <span class="form-selectgroup-title strong mb-1">Advanced</span>
                    <span class="d-block text-secondary">Insert charts and additional advanced analyses to be inserted in the report</span>
                  </span>
                </span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="mb-3">
                <label class="form-label">Report url</label>
                <div class="input-group input-group-flat">
                  <span class="input-group-text">
                    https://tabler.io/reports/
                  </span>
                  <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="mb-3">
                <label class="form-label">Visibility</label>
                <select class="form-select">
                  <option value="1" selected>Private</option>
                  <option value="2">Public</option>
                  <option value="3">Hidden</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Client name</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Reporting period</label>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="col-lg-12">
              <div>
                <label class="form-label">Additional information</label>
                <textarea class="form-control" rows="3"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
            Create new report
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal PDF -->
  <div class="modal modal-blur fade " id="modalPDFXX" >
    <div class="modal-dialog modal-xl "style="height:100%;">
      <div class="modal-content " style="height:100%; margin-top: -40px;">
        <div style="height: 100%; width: 100%; margin:auto;  justify-content: center;  align-items: center;">
          <embed src="" id="idEmbed" frameborder="0" width="100%" height="100%">
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal PDF -->
    
    <!-- Libs JS -->
    <script src="<?= base_url(); ?>assets/dist/libs/apexcharts/dist/apexcharts.min.js?1692870487" defer></script>
    <script src="<?= base_url(); ?>assets/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1692870487" defer></script>
    <script src="<?= base_url(); ?>assets/dist/libs/jsvectormap/dist/maps/world.js?1692870487" defer></script>
    <script src="<?= base_url(); ?>assets/dist/libs/jsvectormap/dist/maps/world-merc.js?1692870487" defer></script>
    <!-- Tabler Core -->
    <script src="<?= base_url(); ?>assets/dist/js/tabler.min.js?1692870487" defer></script>
    <script src="<?= base_url(); ?>assets/dist/js/demo.min.js?1692870487" defer></script>
    <!-- Loading Overlay -->
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>

    <!-- Toastr -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/toastr/toastr.min.js"></script>
    <!-- Custom Toast -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/toastr/toast_custom.js"></script>
    <!-- SweetAlert -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/sweetalert/sweetalert2.js"></script>
    <!-- Select2 -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/select2/select2.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- Datatable -->
    <script type="text/javascript" src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>

    <script>

      $.LoadingOverlaySetup({
        background      : "rgba(221, 221, 221, 0.4)",
        text : 'Loading . . .',
        textResizeFactor : '0.3'
      });

      $( document ).ready(function() {

        new DataTable('#userTabel');

        toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }


        $('#tahunAnggaran').on('change', function() {

          let val = $(this).val();
          
          $.ajax({
            url: base_url()+'Home/setSession',
            type: "post",
            dataType: 'json',
            data: {
              val
            },
            success: function(res) {
              if (res.code != 200) {
                t_error('Ada yang error.!');
                return;
              }
              location.reload();

            },
            error: function(jqXHR, textStatus, errorThrown) {
              t_error('Ada yg error.!');
            }
          });

        });


      });
    </script>

  </body>
  </html>