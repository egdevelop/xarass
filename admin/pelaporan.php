<?php
include "../server/server.php";
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
                    <a class="nav-link active" href="pelaporan.php">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Pelaporan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rehab.php">
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
            <a class="btn btn-primary btn-sm mb-0 w-100"
                href="../server/logout.php" type="button">Logout</a>
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
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center my-2">
                                <img src="https://greatmind.id/uploads/contributor-detail/739a579afaa6613b12930f1a7d90769df8107735.jpg"
                                    class="rounded-circle" style="width: 50px ; height:50px;" alt="">
                                <h5 class="mx-3">Pelecehan Seksual</h5>
                            </div>
                            <p>Kekerasan Seksual yang dilakukan dalam bentuk tindakan fisik atau non-fisik kepada orang
                                lain, yang berhubungan dengan bagian tubuh seseorang dan terkait hasrat seksual,
                                sehingga mengakibatkan orang lain terintimidasi, terhina, direndahkan, atau
                                dipermalukan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center my-2">
                                <img src="https://greatmind.id/uploads/contributor-detail/739a579afaa6613b12930f1a7d90769df8107735.jpg"
                                    class="rounded-circle" style="width: 50px ; height:50px;" alt="">
                                <h5 class="mx-3">Eksploitasi Seksual</h5>
                            </div>
                            <p>Kekerasan Seksual yang dilakukan dalam bentuk kekerasan, ancaman kekerasan, tipu daya,
                                rangkaian kebohongan, nama atau identitas atau martabat palsu, atau penyalahgunaan
                                kepercayaan, agar seseorang melakukan hubungan seksual dengannya atau orang lain
                                dan/atau perbuatan yang memanfaatkan tubuh orang tersebut yang terkait hasrat seksual,
                                dengan maksud menguntungkan diri sendiri atau orang lain.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center my-2">
                                <img src="https://greatmind.id/uploads/contributor-detail/739a579afaa6613b12930f1a7d90769df8107735.jpg"
                                    class="rounded-circle" style="width: 50px ; height:50px;" alt="">
                                <h5 class="mx-3">Pemaksaan Kontrasepsi</h5>
                            </div>
                            <p>Kekerasan Seksual yang dilakukan dalam bentuk mengatur, menghentikan dan/atau merusak
                                organ, fungsi dan/atau sistem reproduksi biologis orang lain dengan kekerasan, ancaman
                                kekerasan, tipu muslihat, rangkaian kebohongan, atau penyalahgunaan kekuasaan, sehingga
                                orang tersebut kehilangan kontrol terhadap organ, fungsi dan/atau sistem reproduksinya
                                yang mengakibatkan Korban tidak dapat memiliki keturunan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center my-2">
                                <img src="https://greatmind.id/uploads/contributor-detail/739a579afaa6613b12930f1a7d90769df8107735.jpg"
                                    class="rounded-circle" style="width: 50px ; height:50px;" alt="">
                                <h5 class="mx-3">Pemaksaan Aborsi</h5>
                            </div>
                            <p>Kekerasan Seksual yang dilakukan dalam bentuk memaksa orang lain untuk melakukan aborsi
                                dengan kekerasan, ancaman kekerasan, tipu muslihat, rangkaian kebohongan, penyalahgunaan
                                kekuasaan, atau menggunakan kondisi seseorang yang tidak mampu memberikan persetujuan.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center my-2">
                                <img src="https://greatmind.id/uploads/contributor-detail/739a579afaa6613b12930f1a7d90769df8107735.jpg"
                                    class="rounded-circle" style="width: 50px ; height:50px;" alt="">
                                <h5 class="mx-3">Perkosaan</h5>
                            </div>
                            <p>Kekerasan Seksual yang dilakukan dalam bentuk kekerasan, ancaman kekerasan, atau tipu
                                muslihat, atau menggunakan kondisi seseorang yang tidak mampu memberikan persetujuan
                                untuk melakukan hubungan seksual.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center my-2">
                                <img src="https://greatmind.id/uploads/contributor-detail/739a579afaa6613b12930f1a7d90769df8107735.jpg"
                                    class="rounded-circle" style="width: 50px ; height:50px;" alt="">
                                <h5 class="mx-3">Pemaksaan Perkawinan</h5>
                            </div>
                            <p>Kekerasan Seksual yang dilakukan dalam bentuk menyalahgunakan kekuasaan dengan kekerasan,
                                ancaman kekerasan, tipu muslihat, rangkaian kebohongan, atau tekanan psikis lainnya
                                sehingga seseorang tidak dapat memberikan persetujuan yang sesungguhnya untuk melakukan
                                perkawinan.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center my-2">
                                <img src="https://greatmind.id/uploads/contributor-detail/739a579afaa6613b12930f1a7d90769df8107735.jpg"
                                    class="rounded-circle" style="width: 50px ; height:50px;" alt="">
                                <h5 class="mx-3">Pemaksaan Pelacuran</h5>
                            </div>
                            <p>Kekerasan Seksual yang dilakukan dalam bentuk kekerasan, ancaman kekerasan, rangkaian
                                kebohongan, nama, identitas, atau martabat palsu, atau penyalahgunaan kepercayaan,
                                melacurkan seseorang dengan maksud menguntungkan diri sendiri dan/atau orang lain</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center my-2">
                                <img src="https://greatmind.id/uploads/contributor-detail/739a579afaa6613b12930f1a7d90769df8107735.jpg"
                                    class="rounded-circle" style="width: 50px ; height:50px;" alt="">
                                <h5 class="mx-3">Perbudakan Seksual</h5>
                            </div>
                            <p>Kekerasan Seksual yang dilakukan dalam bentuk membatasi ruang gerak atau mencabut
                                kebebasan seseorang, dengan tujuan menempatkan orang tersebut melayani kebutuhan seksual
                                dirinya sendiri atau orang lain dalam jangka waktu tertentu.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center my-2">
                                <img src="https://greatmind.id/uploads/contributor-detail/739a579afaa6613b12930f1a7d90769df8107735.jpg"
                                    class="rounded-circle" style="width: 50px ; height:50px;" alt="">
                                <h5 class="mx-3">Penyiksaan Seksual</h5>
                            </div>
                            <p>Kekerasan Seksual yang dilakukan dalam bentuk menyiksa Korban.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-grid gap-2 mt-3">
                <a href="form.php" class="btn btn-secondary">Lapor ke Xarass</a>
            </div>
            <footer class="footer pt-3">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ©
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