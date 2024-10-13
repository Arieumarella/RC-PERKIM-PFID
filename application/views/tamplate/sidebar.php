<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand navbar-brand-autodark philoShoper" style="font-size: 25px; line-height: 50px;">
     <div style="color: #ffc107;">RC</div> - DAK PUPR
   </h1>
   <div class="d-flex justify-content-center" style="text-align: center;  text-align-last: center; margin-top: -10px; margin-bottom: -10px;">
    <select type="text" class="form-select" id="tahunAnggaran" value="" style="width: 100px;">
      <option value="2025" <?= $this->session->userdata('thang') == '2025' ? 'selected' : ''; ?>>2025</option>
    </select>
  </div>



  <div class="collapse navbar-collapse" id="sidebar-menu">
    <ul class="navbar-nav pt-lg-3">
      <li class="nav-item <?= $tittle == 'Home' ? 'active':''; ?>">
        <a class="nav-link <?= $tittle == 'Home' ? 'active':''; ?>" href="<?= base_url(); ?>Home" >
          <span class="nav-link-icon d-md-none d-lg-inline-block "><!-- Download SVG icon from http://tabler-icons.io/i/home -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon " width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
          </span>
          <span class="nav-link-title">
            Home
          </span>
        </a>
      </li>

      <?php if ($this->session->userdata('rkdak_kdbidang') == '03' or $this->session->userdata('rkdak_prive') > '1') { ?>

        <li class="nav-item <?= $tittle == 'Air Minum' ? 'active':''; ?>">
          <a class="nav-link <?= $tittle == 'Air Minum' ? 'active':''; ?>" href="<?= base_url(); ?>AM" >
            <span class="nav-link-icon d-md-none d-lg-inline-block "><!-- Download SVG icon from http://tabler-icons.io/i/home -->
              <i class="fas fa-tint"></i>
            </span>
            <span class="nav-link-title">
              Air Minum
            </span>
          </a>
        </li>

      <?php } ?>

      <?php if ($this->session->userdata('rkdak_kdbidang') == '04' or $this->session->userdata('rkdak_prive') > '1') { ?>

        <li class="nav-item <?= $tittle == 'Sanitasi' ? 'active':''; ?>">
          <a class="nav-link <?= $tittle == 'Sanitasi' ? 'active':''; ?>" href="<?= base_url(); ?>SAN" >
            <span class="nav-link-icon d-md-none d-lg-inline-block ">
              <i class="fas fa-seedling"></i>
            </span>
            <span class="nav-link-title">
              Sanitasi
            </span>
          </a>
        </li>

      <?php } ?>

      

      <li class="nav-item <?= $tittle == 'PPKT' ? 'active':''; ?>">
        <a class="nav-link <?= $tittle == 'PPKT' ? 'active':''; ?>" href="<?= base_url(); ?>PPKT" >
          <span class="nav-link-icon d-md-none d-lg-inline-block ">
            <i class="fas fa-igloo"></i>
          </span>
          <span class="nav-link-title">
            PPKT
          </span>
        </a>
      </li>


<!--       <?php if ($this->session->userdata('rkdak_user') == 'perkimpfid') { ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= $tittle == 'BA Air Minum' ? 'show':''; ?>" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded=" <?= $tittle == 'BA Air Minum' ? 'true':'false'; ?>" >
            <span class="nav-link-icon d-md-none d-lg-inline-block">
              <i class="fas fa-print"></i>
            </span>
            <span class="nav-link-title">
              Berita Acara
            </span>
          </a>
          <div class="dropdown-menu <?= $tittle == 'BA Air Minum' ? 'show':''; ?>">
            <div class="dropdown-menu-columns">
              <div class="dropdown-menu-column">
                <a class="dropdown-item <?= $tittle == 'BA Air Minum' ? 'active':''; ?>" href="<?= base_url(); ?>Ba/AM">
                  Air Minum
                </a>
                <a class="dropdown-item" href="<?= base_url(); ?>Ba/SAN">
                  Sanitasi
                </a>
              </div>
            </div>
          </div>
        </li>
        <?php } ?> -->


        <?php if ($this->session->userdata('rkdak_prive') > '2') { ?>

          <li class="nav-item <?= $tittle == 'Penilaian Usulan Awal' ? 'active':''; ?>">
            <a class="nav-link <?= $tittle == 'Penilaian Usulan Awal' ? 'active':''; ?>" href="<?= base_url(); ?>Penilaian" >
              <span class="nav-link-icon d-md-none d-lg-inline-block ">
                <i class="fas fa-clipboard-list"></i>
              </span>
              <span class="nav-link-title">
                Penilaian Usulan Awal
              </span>
            </a>
          </li>

        <?php } ?>

        <?php if ($this->session->userdata('rkdak_prive') > '2') { ?>

          <li class="nav-item <?= $tittle == 'BA Krisna Siap' ? 'active':''; ?>">
            <a class="nav-link <?= $tittle == 'BA Krisna Siap' ? 'active':''; ?>" href="<?= base_url(); ?>KrisnaSiap" >
              <span class="nav-link-icon d-md-none d-lg-inline-block ">
               <i class="fas fa-paste"></i>
             </span>
             <span class="nav-link-title">
              BA Krisna Siap
            </span>
          </a>
        </li>

      <?php } ?>





      <?php if ($this->session->userdata('rkdak_user') == 'perkimpfid') { ?>

        <li class="nav-item <?= $tittle == 'Upload Usulan Awal' ? 'active':''; ?>">
          <a class="nav-link <?= $tittle == 'Upload Usulan Awal' ? 'active':''; ?>" href="<?= base_url(); ?>uploadUsulanAwal" >
            <span class="nav-link-icon d-md-none d-lg-inline-block ">
             <i class="fas fa-file-upload"></i>
           </span>
           <span class="nav-link-title">
            Upload Usulan Awal Krisna
          </span>
        </a>
      </li>

    <?php } ?>

    <?php if ($this->session->userdata('rkdak_user') == 'perkimpfid') { ?>

      <?php 

      $dataTittle = ['BA Konsultasi Program AM', 'BA Konsultasi Program Sanitasi'];

      ?>

      <li class="nav-item <?= in_array($tittle, $dataTittle) ? 'active':''; ?> dropdown">
        <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="true" >
         <span class="nav-link-icon d-md-none d-lg-inline-block">
          <i class="fas fa-stream"></i>
        </span>
        <span class="nav-link-title">
          Konsultasi Program
        </span>
      </a>
      <div class="dropdown-menu <?= in_array($tittle, $dataTittle) ? 'show':''; ?>">
        <div class="dropdown-menu-columns">
          <div class="dropdown-menu-column">
            <a class="dropdown-item <?= $tittle == 'BA Konsultasi Program AM' ? 'active':''; ?>" href="<?= base_url(); ?>KonregAM" >
              BA Air Minum
            </a>
            <a class="dropdown-item <?= $tittle == 'BA Konsultasi Program Sanitasi' ? 'active':''; ?>" href="<?= base_url(); ?>KonregSan" >
              BA Sanitasi
            </a>
          </div>
        </div>
      </div>
    </li>

  <?php } ?>


  <?php if ($this->session->userdata('rkdak_user') == 'perkimpfid') { ?>

    <li class="nav-item <?= $tittle == 'User' ? 'active':''; ?>">
      <a class="nav-link <?= $tittle == 'User' ? 'active':''; ?>" href="<?= base_url(); ?>Users" >
        <span class="nav-link-icon d-md-none d-lg-inline-block ">
          <i class="fas fa-users"></i>
        </span>
        <span class="nav-link-title">
          Users
        </span>
      </a>
    </li>

  <?php } ?>



  <li class="nav-item">
    <a class="nav-link" href="<?= base_url(); ?>Login/Logout" >
      <span class="nav-link-icon d-md-none d-lg-inline-block ">
        <i class="fas fa-sign-out-alt"></i>
      </span>
      <span class="nav-link-title">
        Logout
      </span>
    </a>
  </li>


</ul>
</div>
</div>
</aside>