<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Export PDF</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    /* Gaya CSS Anda */
    .container {
      border: 1px solid black;
      padding: 10px;
      text-align: center;
    }

    .tableWrapper {
      display: inline-block;
      width: 28%; /* Untuk tiga tabel dengan margin 10px */
      margin: 11px;
      vertical-align: top;
      text-align: center;
    }

    .smallTable {
      width: 100%;
      border-collapse: collapse;
    }

    .smallTable th,
    .smallTable td {
      border: 1px solid black;
      padding: 3px;
      text-align: center;
      font-size: 10.5px;
      border-collapse: collapse;
    }

    /* ... gaya-gaya lainnya ... */
  </style>
</head>
<body>
  <!-- Container untuk border keseluruhan -->

  <!-- Tabel Kecil Pertama -->
  <div class="tableWrapper">
    <table class="smallTable">
      <thead>
        <tr>
          <th style="background-color: #7fa4ff;">Pemerintah Daerah <br><?= ucwords(strtolower($nmkabkota)); ?></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><br><br><br><br><br><br></td>
        </tr>
        <tr>
          <td><?= ucwords(strtolower($ttdPemda)); ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <br>
  <!-- Tiga tabel berjejeran -->
  <?php if ($Bappenas == 'on') { ?>
    <div class="tableWrapper">
      <table class="smallTable">
        <thead>
          <tr>
            <th style="background-color: #7fa4ff;">Dit. Perumahan dan Kawasan <br> Permukiman <br> Kementerian PPN/Bappenas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><br><br><br><br><br><br><br><br></td>
          </tr>
          <tr>
            <td><?= ucwords(strtolower($ttdDitPerumahan)); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  <?php } ?>
  <?php if ($atrBpn == 'on') { ?>
    <div class="tableWrapper">
      <table class="smallTable">
        <thead>
          <tr>
            <th style="background-color: #7fa4ff;">Dit. Konsolidasi Tanah dan <br>Pengembangan Pertanahan <br>Kementerian ATR/BPN</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><br><br><br><br><br><br><br><br></td>
          </tr>
          <tr>
            <td><?= ucwords(strtolower($ttdAtrBpn)); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  <?php } ?>
  <?php if ($pfid == 'on') { ?>
    <div class="tableWrapper">
      <table class="smallTable">
        <thead>
          <tr>
            <th style="background-color: #7fa4ff;">Pusat Fasilitasi Infrastruktur Daerah <br>Kementerian PUPR </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><br><br><br><br><br><br><br><br><br></td>
          </tr>
          <tr>
            <td><?= ucwords(strtolower($ttdPfid)); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  <?php } ?>
  <!-- Tiga tabel lagi di bawah tiga tabel sebelumnya -->
  <?php if ($kawasanPermukiman == 'on') { ?>
    <div class="tableWrapper">
      <table class="smallTable">
        <thead>
          <tr>
            <th style="background-color: #7fa4ff;">Pengembangan Kawasan Permukiman Kementerian PUPR</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><br><br><br><br><br><br><br><br><br></td>
          </tr>
          <tr>
            <td><?= ucwords(strtolower($ttdPengembangan)); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  <?php } ?>
  <?php if ($am == 'on') { ?>
    <div class="tableWrapper">
      <table class="smallTable">
        <thead>
          <tr>
            <th style="background-color: #7fa4ff;">Dit. Air Minum <br> Kementerian PUPR</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><br><br><br><br><br><br><br><br><br></td>
          </tr>
          <tr>
            <td><?= ucwords(strtolower($ttdAirMinum)); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  <?php } ?>
  <?php if ($sanitasi == 'on') { ?>
    <div class="tableWrapper">
      <table class="smallTable">
        <thead>
          <tr>
            <th style="background-color: #7fa4ff;">Dit. Sanitasi <br> Kementerian PUPR</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><br><br><br><br><br><br><br><br><br></td>
          </tr>
          <tr>
            <td><?= ucwords(strtolower($ttdSanitasi)); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  <?php } ?>
  <?php if ($ditRuswa == 'on') { ?>
    <div class="tableWrapper">
      <table class="smallTable">
        <thead>
          <tr>
            <th style="background-color: #7fa4ff;">Dit. Rumah Swadaya <br> Kementerian PUPR</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><br><br><br><br><br><br><br><br><br></td>
          </tr>
          <tr>
            <td><?= ucwords(strtolower($ttdRuswa)); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  <?php } ?>

</body>
</html>