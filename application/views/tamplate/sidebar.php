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


        <?php if ($this->session->userdata('rkdak_prive') > '1') { ?>

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

        <?php if ($this->session->userdata('rkdak_prive') > '1') { ?>

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

      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
          <span class="nav-link-icon d-md-none d-lg-inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12l0 9" /><path d="M12 12l-8 -4.5" /><path d="M16 5.25l-8 4.5" /></svg>
          </span>
          <span class="nav-link-title">
            Interface
          </span>
        </a>
        <div class="dropdown-menu">
          <div class="dropdown-menu-columns">
            <div class="dropdown-menu-column">
              <a class="dropdown-item" href="<?= base_url(); ?>assets//alerts.html">
                Alerts
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//accordion.html">
                Accordion
              </a>
              <div class="dropend">
                <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                  Authentication
                </a>
                <div class="dropdown-menu">
                  <a href="<?= base_url(); ?>assets//sign-in.html" class="dropdown-item">
                    Sign in
                  </a>
                  <a href="<?= base_url(); ?>assets//sign-in-link.html" class="dropdown-item">
                    Sign in link
                  </a>
                  <a href="<?= base_url(); ?>assets//sign-in-illustration.html" class="dropdown-item">
                    Sign in with illustration
                  </a>
                  <a href="<?= base_url(); ?>assets//sign-in-cover.html" class="dropdown-item">
                    Sign in with cover
                  </a>
                  <a href="<?= base_url(); ?>assets//sign-up.html" class="dropdown-item">
                    Sign up
                  </a>
                  <a href="<?= base_url(); ?>assets//forgot-password.html" class="dropdown-item">
                    Forgot password
                  </a>
                  <a href="<?= base_url(); ?>assets//terms-of-service.html" class="dropdown-item">
                    Terms of service
                  </a>
                  <a href="<?= base_url(); ?>assets//auth-lock.html" class="dropdown-item">
                    Lock screen
                  </a>
                  <a href="<?= base_url(); ?>assets//2-step-verification.html" class="dropdown-item">
                    2 step verification
                  </a>
                  <a href="<?= base_url(); ?>assets//2-step-verification-code.html" class="dropdown-item">
                    2 step verification code
                  </a>
                </div>
              </div>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//blank.html">
                Blank page
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//badges.html">
                Badges
                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//buttons.html">
                Buttons
              </a>
              <div class="dropend">
                <a class="dropdown-item dropdown-toggle" href="#sidebar-cards" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                  Cards
                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                </a>
                <div class="dropdown-menu">
                  <a href="<?= base_url(); ?>assets//cards.html" class="dropdown-item">
                    Sample cards
                  </a>
                  <a href="<?= base_url(); ?>assets//card-actions.html" class="dropdown-item">
                    Card actions
                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <a href="<?= base_url(); ?>assets//cards-masonry.html" class="dropdown-item">
                    Cards Masonry
                  </a>
                </div>
              </div>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//carousel.html">
                Carousel
                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//charts.html">
                Charts
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//colors.html">
                Colors
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//colorpicker.html">
                Color picker
                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//datagrid.html">
                Data grid
                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//datatables.html">
                Datatables
                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//dropdowns.html">
                Dropdowns
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//dropzone.html">
                Dropzone
                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
              </a>
              <div class="dropend">
                <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                  Error pages
                </a>
                <div class="dropdown-menu">
                  <a href="<?= base_url(); ?>assets//error-404.html" class="dropdown-item">
                    404 page
                  </a>
                  <a href="<?= base_url(); ?>assets//error-500.html" class="dropdown-item">
                    500 page
                  </a>
                  <a href="<?= base_url(); ?>assets//error-maintenance.html" class="dropdown-item">
                    Maintenance page
                  </a>
                </div>
              </div>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//flags.html">
                Flags
                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//inline-player.html">
                Inline player
                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
              </a>
            </div>
            <div class="dropdown-menu-column">
              <a class="dropdown-item" href="<?= base_url(); ?>assets//lightbox.html">
                Lightbox
                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//lists.html">
                Lists
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//modals.html">
                Modal
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//maps.html">
                Map
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//map-fullsize.html">
                Map fullsize
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//maps-vector.html">
                Map vector
                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//markdown.html">
                Markdown
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//navigation.html">
                Navigation
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//offcanvas.html">
                Offcanvas
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//pagination.html">
                Pagination
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//placeholder.html">
                Placeholder
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//steps.html">
                Steps
                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//stars-rating.html">
                Stars rating
                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//tabs.html">
                Tabs
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//tags.html">
                Tags
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//tables.html">
                Tables
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//typography.html">
                Typography
              </a>
              <a class="dropdown-item" href="<?= base_url(); ?>assets//tinymce.html">
                TinyMCE
                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
              </a>
            </div>
          </div>
        </div>
      </li> -->



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