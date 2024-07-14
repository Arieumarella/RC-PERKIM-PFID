<!DOCTYPE html>
<html>
<head>
    <title>Berita Acara SIMONI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Ganti lebar tabel sesuai kebutuhan */
        .tableContent {
            border-collapse: collapse;
            width: 100%;
            margin: 10px auto; /* Tengahkan tabel */
        }

        .adaDiHeaderdanBody {
            border: 1px solid black;
            padding: 3px; /* Ganti padding sesuai kebutuhan */
            text-align: center;
        }

        .thHeader {
            background-color: #509ffc;
            font-size: 9px; /* Ganti ukuran font sesuai kebutuhan */
        }

        .bodyCss {
            font-size: 9px; /* Ganti ukuran font sesuai kebutuhan */
        }

        .landscape {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            
        }

        /* Ganti margin atas, kiri, dan kanan sesuai kebutuhan */
        .landscape div {
            margin: 10px 20px 20px 20px;
        }

        /* Tambahkan gaya untuk tabel kecil */
        .smallTable {
            float: left;
            width: 25%;
            margin-right: 10px;
        }

        .smallTable th,
        .smallTable td {
            border: 0px solid black;
            padding: 3px;
            text-align: left;
            font-size: 8.5px;
            border-collapse: collapse;
        }

        /* Gaya untuk tabel kecil di sebelah kanan */
        .smallTableRight {
            float: left;
            width: 25%;
            margin-left: -8px;
        }

        .smallTableRight th,
        .smallTableRight td {
            border: 1px solid black;
            padding: 3px;
            text-align: center;
            font-size: 9px;
            border-collapse: collapse;
        }

        .boldColumn {
            font-weight: bold;
        }

        .tableContentKecil {
            border-collapse: collapse;
            width: 23%;
        }

        .tableContentTengah {
            border-collapse: collapse;
            width: 23%;
        }

        .warnaIjo {
           background-color: #baffd6;
       }

       .smallTableRight2 {
        float: left;
        width: 25%;
        margin-left: 1.5px;
    }

    .smallTableRight2 th,
    .smallTableRight2 td {
        border: 1px solid black;
        padding: 3px;
        text-align: center;
        font-size: 9px;
        border-collapse: collapse;
    }

    .tableContentKeTiga {
        border-collapse: collapse;
        width: 23%;
    }

    .warnaAbuAbu {
     background-color: #e4e4e4;
 }

 .warnaHijauBanget {
   background-color: #96ff95;
}

.warnaKuningBanget {
   background-color: #ffe78f;
}

.warnaMerahBanget {
   background-color: #ff6c6c;
}
</style>
</head>
<body>
    <div class="landscape">
        <div>
            <!-- Tabel Kecil di Pojok Kiri Atas -->
            <table class="smallTable tableContentKecil">
                <thead>
                    <tr>
                        <th colspan="2">BERITA ACARA SINKRONISASI DAN HARMONISASI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="boldColumn warnaIjo">
                        <td>Petugas Desk</td>
                        <td><?= ucwords(strtolower($nm_petugas_desk)); ?></td>
                    </tr>
                    <tr class="boldColumn warnaIjo">
                        <td>OPD/Dinas</td>
                        <td><?= ucwords(strtolower($opd_dinas)); ?></td>
                    </tr>
                    <tr class="boldColumn warnaIjo">
                        <td>Peserta Desk</td>
                        <td><?= ucwords(strtolower($nm_peserta_desk)); ?></td>
                    </tr>
                    <tr class="boldColumn warnaIjo">
                        <td>Nomor Hp</td>
                        <td><?= ucwords(strtolower($no_hp)); ?></td>
                    </tr>
                    <tr>
                        <td>Nama Provinsi</td>
                        <td><?= ucwords(strtolower($nmProvinsi)); ?></td>
                    </tr>
                    <tr>
                        <td>Nama Pengusul</td>
                        <td><?= ucwords(strtolower($nmKabKota)); ?></td>
                    </tr>
                    <tr>
                        <td>Bidang</td>
                        <td><?= ucwords(strtolower($nmBidang)); ?></td>
                    </tr>
                    <tr>
                        <td>Sub_bidang</td>
                        <td><?= ucwords(strtolower($sub_menu)); ?></td>
                    </tr>                    
                </tbody>
            </table>

            <!-- Tabel Kecil di Sebelah Kanan -->
            <table class="smallTableRight tableContentTengah">
                <tbody>
                    <tr>
                        <td class="boldColumn" >DIT. <?= (stripos($sub_menu, 'Sanitasi') == true) ? 'SANITASI':'AIR MINUM'; ?></td>
                        <td class="boldColumn">PUSAT FID</td>
                    </tr>
                    <tr>
                        <td><br><br><br><br></td>
                        <td><br><br><br><br></td>
                    </tr>
                    <tr>
                        <td style="width:120px;"><?= ucwords(strtolower($dit_air_minum)); ?></td>
                        <td style="width:120px;" ><?= ucwords(strtolower($ttd_pfid)); ?></td>
                    </tr>
                    <tr>
                        <td class="boldColumn"><?= ucwords(strtolower($nmKabKota)); ?></td>
                        <td class="boldColumn">BPPW</td>
                    </tr>
                    <tr>
                        <td><br><br><br><br></td>
                        <td><br><br><br><br></td>
                    </tr>
                    <tr >
                        <td style="width:120px;" ><?= ucwords(strtolower($ttd_pemda)); ?></td>
                        <td style="width:120px;" ><?= ucwords(strtolower($ttd_bppw)); ?></td>
                    </tr>
                    <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
                </tbody>
            </table>

            <!-- Tabel Kecil di Sebelah Kanan yang Kedua -->
            <table class="smallTableRight2 tableContentKeTiga">
                <tbody>
                    <tr class="boldColumn warnaAbuAbu">
                        <td style="width:80px;">PUPR</td>
                        <td style="width:80px;">PPN</td>
                        <td style="width:80px;">SUM</td>
                        <td colspan="2" style="width:100px;">KETERANGAN</td>
                    </tr>
                    <tr class="warnaHijauBanget">
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->approve_kl,0,',','.'); ?></td>
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->approve_ppn,0,',','.'); ?></td>
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->nilai_approve,0,',','.'); ?></td>
                        <td style="width:80px; text-align:left;">NILAI</td>
                        <td rowspan="2" style="width:80px; text-align:left;">APPROVE</td>
                    </tr>
                    <tr class="warnaHijauBanget">
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->usulan_approve_kl,0,',','.'); ?></td>
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->usulan_approve_ppn,0,',','.'); ?></td>
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->usulan_approve,0,',','.'); ?></td>
                        <td style="width:80px; text-align:left;">USULAN</td>
                    </tr>
                    <tr class="warnaKuningBanget">
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->discuss_kl,0,',','.'); ?></td>
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->discuss_ppn,0,',','.'); ?></td>
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->nilai_discuss,0,',','.'); ?></td>
                        <td style="width:80px; text-align:left;">NILAI</td>
                        <td rowspan="2" style="width:80px; text-align:left;">DISCUSS/STOCK</td>
                    </tr>
                    <tr class="warnaKuningBanget">
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->usulan_discuss_kl,0,',','.'); ?><</td>
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->usulan_discuss_ppn,0,',','.'); ?></td>
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->usulan_discuss,0,',','.'); ?></td>
                        <td style="width:80px; text-align:left;">USULAN</td>
                    </tr>
                    <tr class="warnaMerahBanget">
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->reject_kl,0,',','.'); ?></td>
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->reject_ppn,0,',','.'); ?></td>
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->nilai_reject,0,',','.'); ?></td>
                        <td style="width:80px; text-align:left;">NILAI</td>
                        <td rowspan="2" style="width:80px; text-align:left;">REJECT</td>
                    </tr>
                    <tr class="warnaMerahBanget">
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->usulan_reject_kl,0,',','.'); ?><</td>
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->usulan_reject_ppn,0,',','.'); ?></td>
                        <td style="width:80px; text-align:right;"><?= number_format($dataHeader->usulan_reject,0,',','.'); ?></td>
                        <td style="width:80px; text-align:left;">USULAN</td>
                    </tr>
                    <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
                </tbody>
            </table>
            
            <br><br><br><br><br><br><br><br><br><br>

            <!-- Tabel Besar -->
            <table class="tableContent">
                <thead class="thHeader">
                    <tr>
                        <th class="adaDiHeaderdanBody">No</th>
                        <th class="adaDiHeaderdanBody">Kecamatan</th>
                        <th class="adaDiHeaderdanBody">Desa</th>
                        <th class="adaDiHeaderdanBody">Menu</th>
                        <th class="adaDiHeaderdanBody">Rincian</th>
                        <th class="adaDiHeaderdanBody">Pengadaan</th>
                        <th class="adaDiHeaderdanBody">Pengadaan<br>Simoni</th>
                        <th class="adaDiHeaderdanBody">Volume<br>Simoni</th>
                        <th class="adaDiHeaderdanBody">Satuan</th>
                        <th class="adaDiHeaderdanBody">Harga Satuan<br>Simoni</th>
                        <th class="adaDiHeaderdanBody">Nilai Usulan<br>Simoni</th>
                        <th class="adaDiHeaderdanBody">Approval<br>Simoni PUPR</th>
                        <th class="adaDiHeaderdanBody">Approval<br>Simoni PPN</th>
                        <th class="adaDiHeaderdanBody">Approval<br>Simoni SUM</th>
                        <th class="adaDiHeaderdanBody">Catatan Sinkron<br>PUPR</th>
                        <th class="adaDiHeaderdanBody">Catatan Sinkron<br>PPN</th>
                    </tr>
                </thead>
                <tbody class="bodyCss adaDiHeaderdanBody">
                    <?php $no=1; foreach ($dataTabel as $key => $value) { ?>

                        <?php 
                        
                        $pengadan = '';


                        if ($value->pengadaan1 != '') {

                            $pengadan = json_decode($value->pengadaan1, true)[0];

                            if ($pengadan == '1') {
                                $pengadan = 'Swakelola';
                            }else{
                                $pengadan = 'Penyedia';
                            }

                        }

                        $pengadan2 = '';


                        if ($value->pengadaan2 != '') {

                            $pengadan2 = json_decode($value->pengadaan2, true)[0];

                            if ($pengadan2 == '1') {
                                $pengadan2 = 'Swakelola';
                            }else{
                                $pengadan2 = 'Penyedia';
                            }

                        }

                        $approveKl='';
                        $warnaSum='';

                        if ($value->Aprroval_PPN2 == '1' and $value->Approval_KL2 == '1') {
                            $penilaian = 'Approve';
                            $warnaSum = 'warnaHijauBanget';
                        }

                        if ($value->Aprroval_PPN2 == '2' and $value->Approval_KL2 == '1') {
                            $penilaian = 'Discuss/Stock Program';
                            $warnaSum = 'warnaKuningBanget';
                        }

                        if ($value->Aprroval_PPN2 == '1' and $value->Approval_KL2 == '2') {
                            $penilaian = 'Discuss/Stock Program';
                            $warnaSum = 'warnaKuningBanget';
                        }

                        if ($value->Aprroval_PPN2 == '1' and $value->Approval_KL2 == '3') {
                            $penilaian = 'Discuss/Stock Program';
                            $warnaSum = 'warnaKuningBanget';
                        }

                        if ($value->Aprroval_PPN2 == '3' and $value->Approval_KL2 == '1') {
                            $penilaian = 'Discuss/Stock Program';
                            $warnaSum = 'warnaKuningBanget';
                        }

                        if ($value->Aprroval_PPN2 == '3' and $value->Approval_KL2 == '3') {
                            $penilaian = 'Discuss/Stock Program';
                            $warnaSum = 'warnaKuningBanget';
                        }

                        if ($value->Aprroval_PPN2 == '2' and $value->Approval_KL2 == '3') {
                            $penilaian = 'Discuss/Stock Program';
                            $warnaSum = 'warnaKuningBanget';
                        }

                        if ($value->Aprroval_PPN2 == '3' and $value->Approval_KL2 == '2') {
                            $penilaian = 'Discuss/Stock Program';
                            $warnaSum = 'warnaKuningBanget';
                        }

                        if ($value->Aprroval_PPN2 == '2' and $value->Approval_KL2 == '2') {
                            $penilaian = 'Reject';
                            $warnaSum = 'warnaMerahBanget';
                        }


                        ?>

                        <tr>
                            <td class="adaDiHeaderdanBody"><?= $no; ?></td>
                            <td class="adaDiHeaderdanBody" style="text-align: left;"><?= $value->kecamatan; ?></td>
                            <td class="adaDiHeaderdanBody" style="text-align: left;"><?= $value->desa; ?></td>
                            <td class="adaDiHeaderdanBody" style="text-align: left;"><?= $value->menu; ?></td>
                            <td class="adaDiHeaderdanBody" style="text-align: left;"><?= $value->rincian; ?></td>
                            <td class="adaDiHeaderdanBody" style="text-align: left;"><?= $pengadan; ?></td>
                            <td class="adaDiHeaderdanBody" style="text-align: left;"><?= $pengadan2; ?></td>
                            <td class="adaDiHeaderdanBody" style="text-align: right;"><?= $value->volume2; ?></td>
                            <td class="adaDiHeaderdanBody" style="text-align: left;"><?= $value->satuan2; ?></td>
                            <td class="adaDiHeaderdanBody"><?= number_format($value->harga_satuan2,0,',','.'); ?></td>
                            <td class="adaDiHeaderdanBody"><?= number_format($value->harga_satuan2*$value->volume2,0,',','.'); ?></td>
                            <td class="adaDiHeaderdanBody <?= ($value->Approval_KL2 == '1') ? 'warnaHijauBanget' :  (($value->Approval_KL2 == '2') ? 'warnaMerahBanget': (($value->Approval_KL2 == '3') ? 'warnaKuningBanget':'')); ?>"><?= ($value->Approval_KL2 == '1') ? 'Approve' :  (($value->Approval_KL2 == '2') ? 'Reject': (($value->Approval_KL2 == '3') ? 'Discuss/Stock Program':'')); ?></td>
                            <td class="adaDiHeaderdanBody <?= ($value->Aprroval_PPN2 == '1') ? 'warnaHijauBanget' :  (($value->Aprroval_PPN2 == '2') ? 'warnaMerahBanget': (($value->Aprroval_PPN2 == '3') ? 'warnaKuningBanget':'')); ?>"><?= ($value->Aprroval_PPN2 == '1') ? 'Approve' :  (($value->Aprroval_PPN2 == '2') ? 'Reject': (($value->Aprroval_PPN2 == '3') ? 'Discuss/Stock Program':'')); ?></td>
                            <td class="adaDiHeaderdanBody <?= $warnaSum; ?>"><?= $penilaian; ?></td>
                            <td class="adaDiHeaderdanBody" style="text-align: left;"><?= $value->Catatan_KL2; ?></td>
                            <td class="adaDiHeaderdanBody" style="text-align: left;"><?= $value->Catatan_PPN2; ?></td>
                        </tr>
                        <?php $no++; ?>
                    <?php  } ?>
                    <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>