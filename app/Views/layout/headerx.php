<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  Document Title ============================================= -->
    <title>TI UNUSIA | Teknik Informatika</title>
    <!--  Favicons ============================================= -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url(''); ?>assets/titan/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url(''); ?>assets/titan/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url(''); ?>assets/titan/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(''); ?>assets/titan/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url(''); ?>assets/titan/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url(''); ?>assets/titan/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url(''); ?>assets/titan/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url(''); ?>assets/titan/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(''); ?>assets/titan/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url(''); ?>assets/titan/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(''); ?>assets/titan/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url(''); ?>assets/titan/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(''); ?>assets/titan/images/favicons/favicon-16x16.png">
    <!-- <link rel="manifest" href="/manifest.json"> -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= base_url(''); ?>assets/titan/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  Stylesheets ============================================= -->
    <!-- Default stylesheets-->
    <link href="<?= base_url(''); ?>assets/titan/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/animate.css/animate.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="<?= base_url(''); ?>assets/titan/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="<?= base_url(''); ?>assets/titan/css/colors/default.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="/">Teknik Informatika</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/" >Home</a>
              </li>

              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">About</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?= base_url(''); ?>profil"><i class="fa fa-bolt"></i> Profil</a></li>
                  <li><a href="<?= base_url(''); ?>pengelola"><i class="fa fa-link fa-sm"></i> Pengelola</a></li>
                  <li><a href="<?= base_url(''); ?>dosen"><i class="fa fa-tasks"></i> Dosen</a></li>
                  <li><a href="<?= base_url(''); ?>kurikulum"><i class="fa fa-list-alt"></i> Kurikulum</a></li>
                  <li><a href="<?= base_url(''); ?>pemintan"><i class="fa fa-check-square-o"></i> Peminatan</a></li>
                </ul>
              </li>

              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Posts</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= base_url(''); ?>post">Berita</a></li>
                      <li><a href="#">Pengumuman</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Sidang</a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Skripsi</a></li>
                      <li><a href="#">Magang</a></li>
                    </ul>
                  </li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Page 404</a></li>
                </ul>
              </li>

              <li class="dropdown"><a class="dropdown-toggle" href="documentation.html" data-toggle="dropdown">Documents</a>
                <ul class="dropdown-menu">
                  <li><a href="#">Docs1</a></li>
                  <li><a href="#">Docs2</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>