<?php 
ob_start();
ob_clean();
?>

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
      <div class="row">
        <div class="col-lg-12">
          <h1>HAI INI ADALAH SOSMED SAYA</h1>
          <form action="" class="form" enctype="multipart/form-data" method="post">
              <textarea class="form-control" name="status" id=""></textarea>
              <div class="my-3">
                <button type="submit" name="posting" class="btn btn-primary float-end">Posting</button>
              </div>
          </form>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-12">
          <!-- MEMBUAT HASIL POSTINGAN BERANDA -->
          <div class="tab-content" id="myTabContent">
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
              <div class="like-comment">               
                  <a href="">Like</a>-<a href="">Comment</a>
              </div>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- /CONTENT -->

</div>
<script src="../assets/boots/assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
