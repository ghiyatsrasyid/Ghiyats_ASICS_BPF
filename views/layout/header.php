
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets/')?>img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?=base_url('assets/')?>img/favicon.png">
  <title>
    ASICS STORE
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?=base_url('assets/')?>css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?=base_url('assets/')?>css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?=base_url('assets/')?>css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?=base_url('assets/')?>css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link href="<?=base_url('assets/')?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://demos.creative-tim.com/test/argon-dashboard-pro/assets/css/argon-dashboard.min.css?v=2.0.0" type="text/css" />
  <!-- <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet"> -->
  <link rel="canonical" href="https://www.creative-tim.com/learning-lab/bootstrap/charts/argon-dashboard" />
</head>

<body class="g-sidenav-show bg-gray-200">
  <div class="min-height-300 bg-gradient-warning position-absolute w-100"></div>
  <aside class="sidenav bg-default navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header ">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-10 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="<?=base_url('assets/')?>img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold"><strong>ASICS STORE</strong></span>
      </a>
    </div>
    <hr>
    <?php
    if ($user['role'] == 'Admin') { ?>
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="<?= site_url('Dashboard') ?>">
            <div class="icon icon-shape icon-lg border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= site_url('Produk') ?>">
            <div class="icon icon-shape icon-lg border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-folder-17 text-warning text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Produk</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= site_url('Penjualan') ?>">
            <div class="icon icon-shape icon-lg border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Penjualan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= site_url('Saran') ?>">
            <div class="icon icon-shape icon-lg border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-box-2 text-info text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Kotak Saran</span>
          </a>
        </li>
      </ul>
    </div>
    <?php } else { ?>
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="<?= site_url('User') ?>">
            <div class="icon icon-shape icon-lg border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-shop text-warning text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Produk</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="<?= site_url('User/detail') ?>">
            <div class="icon icon-shape icon-lg border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-cart text-danger text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Keranjang</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= site_url('User/pembelian') ?>">
            <div class="icon icon-shape icon-lg border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-delivery-fast text-info text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Status Pesanan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= site_url('Saran/tambah') ?>">
            <div class="icon icon-shape icon-lg border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-email-83 text-success text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Kritik & Saran</span>
          </a>
        </li>
      </ul>
    </div>
    <?php
    } ?>

<!-- <div class="dropdown">
  <button class="btn bg-gradient-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    Kategori
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="#">Kendaraan</a></li>
    <li><a class="dropdown-item" href="#">Senjata</a></li>
    <li><a class="dropdown-item" href="#">Perangko</a></li>
    <li><a class="dropdown-item" href="#">Mistis</a></li>
  </ul>
</div> -->


  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div> -->
          </div>
          <ul class="navbar-nav  justify-content-start">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-5">
                <img src="<?= base_url('assets/img/profil/') . $user['gambar']; ?>" class="avatar avatar-sm me-3">
                <span class="d-sm-inline d-none"><strong>Hi, <?= $user['nama']; ?></strong></span>
              </a>
            </li>
            <?php
            if ($user['role'] == 'User') {
            ?>
            <li class="nav-item dropdown pe-4 px-4 d-flex align-items-center">
              <a href="<?= site_url('User/pembelian') ?>" class="nav-link text-white p-0" aria-expanded="false">
                <i class="ni ni-archive-2 cursor-pointer"></i>
                <span class="badge badge-md badge-circle badge-floating badge-danger border-white">
                !
                </span>
              </a>
            </li>
            <li class="nav-item dropdown pe-5 px-4 d-flex align-items-center">
              <a href="<?= site_url('User/detail') ?>" class="nav-link text-white p-0" aria-expanded="false">
                <i class="ni ni-basket cursor-pointer"></i>
                <span class="badge badge-md badge-circle badge-floating badge-danger border-white">
                <?= $jlh ?>
                </span>
              </a>
            </li>
            <?php
            }
            ?>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
              <?php
              if ($user['role'] == 'Admin') { ?>
              <ul class="dropdown-menu  dropdown-menu-end  px-4 py-4 me-sm-n3" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <button class="dropdown-item border-radius-md" type="button" data-bs-toggle="modal" data-bs-target="#modal-notification">
                    <div class="d-flex py-0">
                      <div class="my-auto">
                      <i class="ni ni-button-power fixed-plugin-button-nav cursor-pointer"></i>
                      </div>
                      <div class="d-flex flex-column px-4 justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="text-dark font-weight-bold">Log Out</span>
                        </h6>
                      </div>
                    </div>
                  </button>
                </li>
              </ul>

              <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h6 class="modal-title" id="modal-title-notification">Session Alert !</h6>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="py-3 text-center">
                            <i class="ni ni-button-power ni-3x"></i>
                            <h4 class="text-gradient text-danger mt-4">Logout</h4>
                            <p>Apakah anda ingin log out ?</p>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="<?= site_url('Auth/Logout') ?>" class="btn btn-dark">Ya</a>
                        </div>
                      </div>
                    </div>
                  </div>

            <?php } else { ?>
              <ul class="dropdown-menu  dropdown-menu-end  px-4 py-4 me-sm-n3" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="<?= base_url('User/test/')?>">
                    <div class="d-flex py-0">
                      <div class="my-auto">
                      <i class="ni ni-single-02 fixed-plugin-button-nav cursor-pointer"></i>
                      </div>
                      <div class="d-flex flex-column px-4 justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="text-dark font-weight-bold">Profile</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <button class="dropdown-item border-radius-md" type="button" data-bs-toggle="modal" data-bs-target="#modal-notification">
                    <div class="d-flex py-0">
                      <div class="my-auto">
                      <i class="ni ni-button-power fixed-plugin-button-nav cursor-pointer"></i>
                      </div>
                      <div class="d-flex flex-column px-4 justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="text-dark font-weight-bold">Log Out</span>
                        </h6>
                      </div>
                    </div>
                  </button>
                </li>
              </ul>

              <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h6 class="modal-title" id="modal-title-notification">Session Alert !</h6>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="py-3 text-center">
                            <i class="ni ni-button-power ni-3x"></i>
                            <h4 class="text-gradient text-danger mt-4">Logout</h4>
                            <p>Apakah anda ingin log out ?</p>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="<?= site_url('Auth/Logout') ?>" class="btn btn-dark">Ya</a>
                        </div>
                      </div>
                    </div>
                  </div>

            <?php
            } ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->