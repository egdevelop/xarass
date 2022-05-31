<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '@egdev', 'xarass');

$id= $_GET['id'];

$update = "UPDATE pelaporan SET status = '2' WHERE id = '$id'";
$query = mysqli_query($conn, $update);

if($query){
    header("Location: ../index.php");
}
    else{
        header("Location: ../index.php");
    }