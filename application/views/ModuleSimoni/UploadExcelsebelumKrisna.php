
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


  /*.sticky-top {
    position: sticky;
    top: 0;
    background-color: #f8f9fa;
    z-index: 1;
  }*/

  .table-responsive {
    overflow-y: scroll;

  }

  .table-responsive::-webkit-scrollbar {
    width: 12px; 
    height: 12px;
  }




</style>

<div class="container">
  <div class="col-md-12 col-lg-12">
    <div class="card card-stacked">
      <div class="card-body">
        <form method="POST" action="<?= base_url(); ?>ModuleSimoni/prosKrisnaBelumSiap" enctype="multipart/form-data">
          <div class="mb-3 row">
            <label class="col-2 col-form-label">Upload File Excel</label>
            <div class="col-3 text-start">
              <input type="file" class="form-control" accept=".xls, .xlsx" name="fileExsel" id="dataTeknis" required>
            </div>
          </div>
          <div class="mt-3 mb-2 row">
            <div class="col-5 text-end">
              <button type="submit" class="btn btn-primary">Upload</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



