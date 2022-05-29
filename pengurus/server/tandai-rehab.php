<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'laporinaja');
$id= $_GET['id'];

$update = "UPDATE rehab SET status = '1' WHERE id = '$id'";
$query = mysqli_query($conn, $update);

if($query){
    header("Location: ../index.php");
}
    else{
        header("Location: ../index.php");
    }