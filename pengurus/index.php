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
                    <a class="nav-link active" href="index.php">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
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
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Pelaporan</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead class="text-center">
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                No
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Bentuk Pelaporan
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Status
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php
                                        $data = mysqli_query($conn, "SELECT * FROM pelaporan");
                                        $no = 1;
                                        while ($d = mysqli_fetch_array($data)) {
                                          if($d['status'] == '0'){
                                            $status = '<span class="badge bg-danger">Belum Ditangani</span>';
                                        }else if($d['status'] == '2'){
                                            $status = '<span class="badge bg-danger">Reject</span>';
                                        }else{
                                            $status = '<span class="badge bg-success">Sudah Ditangani</span>';
                                        }
                                    switch ($d['bentuk_kekerasan'])
                                    {
                                        case 1:
                                            $bentuk = 'Pelecehan Seksual';
                                            break;
                                        case 2:
                                            $bentuk = 'Eksploitasi Seksual';
                                            break;
                                        case 3:
                                            $bentuk = 'Pemaksaan Kontrasepsi';
                                            break;
                                        case 4:
                                            $bentuk = 'Pemaksaan Aborsi';
                                            break;
                                        case 5:
                                            $bentuk = 'Pemerkosaan';
                                            break;
                                        case 6:
                                            $bentuk = 'Pemaksaan Perkawinan';
                                            break;
                                        case 7:
                                            $bentuk = 'Pemaksaan Pelacuran';
                                            break;
                                        case 8:
                                            $bentuk = 'Perbudakan Seksual';
                                            break;
                                        case 9:
                                            $bentuk = 'Penyiksaan Seksual';
                                            break;
                                    }
                                          ?>
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0"><?= $no ?></p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs font-weight-bold mb-0"><?= $bentuk ?>
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?= $status ?>
                                            </td>
                                            <td>
                                                <?php if ($d['status'] == 0){ ?>
                                                <a href="server/tandai-lapor.php?id=<?= $d['id'] ?>"
                                                    class="btn btn-success">Tandai ditanggani</a>
                                                <a href="server/reject-lapor.php?id=<?= $d['id'] ?>"
                                                    class="btn btn-danger">Reject</a>
                                                <?php } ?>
                                                <a href="data/lapor.php?id=<?= $d['id'] ?>"
                                                    class="btn btn-primary">Lihat Data</a>
                                            </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Rehabilitasi</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0 text-center">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                No
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Bentuk Rehabilitasi
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Nama Psikolog
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                Antrian
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                Hari/Tanggal
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                Waktu
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                Status
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                $data2 = mysqli_query($conn, "SELECT * FROM rehab");
                                while($row2 = mysqli_fetch_array($data2)){
                                    if($row2['status'] == 0){
                                        $status = '<span class="badge bg-danger">Belum Ditangani</span>';
                                    }elseif($row2['status'] == 2){
                                        $status = '<span class="badge bg-danger">Reject</span>';
                                    }else{
                                        $status = '<span class="badge bg-success">Sudah Ditanggani</span>';
                                    }
                                    echo '<tr>
                                            <th scope="row" class="text-xs font-weight-bold mb-0">'.$row2['id'].'</th>
                                            <td class="text-xs font-weight-bold mb-0">'.$row2['bentuk_rehab'].'</td>
                                            <td class="text-xs font-weight-bold mb-0">'.$row2['nama_psikolog'].'</td>
                                            <td class="text-xs font-weight-bold mb-0">'.$row2['antrian'].'</td>
                                            <td class="text-xs font-weight-bold mb-0">'.$row2['tanggal'].'</td>
                                            <td class="text-xs font-weight-bold mb-0">'.$row2['waktu'].'</td>
                                            <td class="text-xs font-weight-bold mb-0">'.$status.'</td>
                                            <td>
                                                <a href="server/tandai-rehab.php?id='. $row2['id'] .'" class="btn btn-success">tandai ditanggani</a>
                                            </td>
                                        </tr>';
                                }
                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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