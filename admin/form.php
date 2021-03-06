<?php
include "../server/server.php";
if(isset($_POST['pelaporan'])){
    Pelaporan();
}
?>
<!--
=========================================================
* Argon Dashboard 2 - v2.0.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/Xarass.png" />
    <title>Xarass - Main App</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4"
        id="sidenav-main">
        <div class="sidenav-header text-center">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
                target="_blank">
                <img src="./assets/img/Xarass.png" class="navbar-brand-img h-100" alt="main_logo" />
            </a>
        </div>
        <hr class="horizontal dark mt-0" />
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Riwayat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="edukasi.php">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Edukasi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pelaporan.php">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Pelaporan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="rehab.php">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Rehabilitasi</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer mx-3">
            <a class="btn btn-primary btn-sm mb-0 w-100" href="../server/logout.php" type="button">Logout</a>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm">
                            <a class="opacity-5 text-white" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <p style="display: none">Xarass</p>
                    </div>
                    <ul class="navbar-nav justify-content-end">
                                                <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none"><?= $_SESSION['nama'] ?></span>
                            </a>
                        </li>
                                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form class="" method="POST" action="form.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" value="<?= $_SESSION['email'] ?>" name="email" class="form-control"
                                    disabled>
                                <input type="hidden" value="<?= $_SESSION['email'] ?>" name="email"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tempat , Tanggal Lahir</label>
                                <input type="date" name="ttl" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NIK</label>
                                <input type="text" name="nik" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bentuk kekerasan Seksual</label>
                                <select class="form-select" name="bentuk_kekerasan" aria-label="Default select example">
                                    <option selected>Pilih satu..</option>
                                    <option value="1">Pelecehan Seksual</option>
                                    <option value="2">Eksploitasi Seksual</option>
                                    <option value="3">Pemaksaan Kontrasepsi</option>
                                    <option value="4">Pemaksaan Aborsi</option>
                                    <option value="5">Pemerkosaan</option>
                                    <option value="6">Pemaksaan Perkawinan</option>
                                    <option value="7">Pemaksaan Pelacuran</option>
                                    <option value="8">Perbudakan Seksual</option>
                                    <option value="9">Penyiksaan Seksual</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Waktu Kejadian</label>
                                <input type="date" name="waktu_kejadian" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tempat Kejadian</label>
                                <input type="text" name="tempat_kejadian" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kronologi</label>
                                <input type="text" name="kronologi" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bukti kejadian</label>
                                <input type="file" name="bukti" class="form-control">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" name="pelaporan" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="footer pt-3">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ??
                                <script>
                                document.write(new Date().getFullYear());
                                </script>
                                , made with <i class="fa fa-heart"></i> by
                                <a href="#" class="font-weight-bold" target="_blank">Xarass Team</a>
                                for a better web.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/argon-dashboard.min.js?v=2.0.2"></script>
</body>

</html>