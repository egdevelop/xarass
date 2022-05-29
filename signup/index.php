<?php
include "../server/server.php";

if(isset($_POST['daftar'])){
    Daftar();
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Xarass - Sign Up</title>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/login-img.svg" style="width: 90% ;" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign Up</h3>
                                <p class="mb-4">We are here to be a bridge between you and those who can help</p>
                            </div>
                            <form action="index.php" method="post">
                                <div class="form-group first">
                                    <label for="username">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="form-group first">
                                    <label for="username">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" required>
                                </div>
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username" required>
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>

                                <div class="align-items-center">
                                    <p style="font-size:13px">Come in and see the magix happen</p>
                                </div>

                                <input type="submit" name="daftar" value="Sign Up" class="btn btn-block btn-primary"
                                    style="background-color: #354259 ; border-color:#354259;">

                            </form>
                            <div class="align-items-center mt-2">
                                <a href="../signin/" style="font-size:13px">Have Account? Sign in Here</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>