<?php
include "../server/server.php";

if(isset($_POST['login'])){
    Login();
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

    <title>Xarass - Login</title>
</head>

<body>
<style>
    .sign-img{
        width: 80%;
    }
@media only screen and (max-width: 600px) {
        .sign-img{
            width: 100%;
            margin-top: -100px;
        }
    }
</style>


    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/login-img.svg" alt="Image" class="img-fluid sign-img">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign In</h3>
                                <p class="mb-4">We are here to be a bridge between you and those who can help</p>
                            </div>
                            <form action="index.php" method="post">
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password">

                                </div>

                                <div class="align-items-center">
                                    <p style="font-size:13px">Come in and see the magix happen</p>
                                </div>

                                <input type="submit" name="login" value="Log In" class="btn btn-block btn-primary"
                                    style="background-color: #354259 ; border-color:#354259;">

                            </form>
                            <div class="align-items-center mt-2">
                                <a href="../signup/" style="font-size:13px">Dont have account? Sign Up Here</p>
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