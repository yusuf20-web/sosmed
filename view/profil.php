<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="../assets/boots/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Beranda</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/pricing/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/boots/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- STYLE THIS CSS -->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>
    <!-- /STYLE THIS CSS -->
    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    
    <!-- THEME LOGO (DARK/LIGHT) -->
      <?php include 'inc/tema.php'; ?>
    <!-- /THEME LOGO (DARK/LIGHT) -->

<div class="container py-3">

    <!-- NAVBAR -->
    <?php include 'inc/navbar.php'; ?>
    <!-- /NAVBAR -->

    <!-- CONTENT -->
    <main class="container mt-5">
      <!-- COVER PROFILE -->
      <div class="row">
        <div class="col-sm-12">
            <div class="cover">
                <img src="https://placehold.co/800x300" alt="cover picture" width="100%">
            </div>
        </div>
      </div>
      <!-- /COVER PROFILE -->

      <!-- PROFILE DISPLAY -->
      <div class="row">
        <div class="col-sm-6">
            <div class="profile-header ms-4" style="margin-top: -50px;">
                <img src="https://placehold.co/150x150" alt="profile picture" class="border border-2 rounded-circle">
                <h1>Yusuf Firdaus</h1>
                <p>@yusuffirdaus20</p>
                <p>Saya adalah manusia yang berubahh jadi berukk</p>
            </div>
          </div>
          <!-- BUTTON EDIT COVER AND PROFILE -->
            <div class="col-sm-6">
                <div class="float-end mt-2">
                    <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editCover">Edit Cover</a>
                    <a href="#" class="btn btn-primary btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#editProfil">Edit Profile</a>
                </div>
            </div>
        </div>
      <!-- /PROFILE DISPLAY -->

      <!-- PROFILE CONTENT -->
      <div class="tab-content mt-4" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
              <div class="d-flex my-auto">
                <!-- TAMPILIN FOTO PROFIL -->
                <div class="flex-shrink-0">
                  <img src="https://placehold.co/100x100" width="100" alt="foto profil" class="border border-2 rounded-circle">
                </div>
                <!-- TAMPIL ISI STATUS -->
                <div class="flex-grow-1 ms-3 mt-4">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita saepe eius aut fugiat cum est necessitatibus totam deleniti, hic, earum voluptates asperiores iusto facilis rerum suscipit. Blanditiis vero odit aspernatur!</p>
                </div>
              </div>
              <hr>
          </div>
      </div>
      
    </main>

    <!-- MODAL -->
      <!-- EDIT PROFILE -->
        <div class="modal fade" id="editProfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profil</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama" value="">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="nama_pengguna" placeholder="Username" value="">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email" value="">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password" value="">
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" name="foto" placeholder="Foto Profil">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="deskripsi" place holder="Deskripsi" value="">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- / -->

        <!-- EDIT COVER -->
        <div class="modal fade" id="editCover" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Cover</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="file" class="form-control" name="cover" placeholder="Foto Cover">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary" name="edit_cover">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- / -->
        <!-- /MODAL -->       
</div>
<!-- /CONTENT -->
    <script src="../assets/boots/assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
