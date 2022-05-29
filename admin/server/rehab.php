<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'xarass');
$bentuk_rehab = "Chat";
$nama_psikolog = $_GET['nama'];
$antrian = rand(1,100);
$tanggal = date("Y-m-d");
$waktu = date("H:i:s");

$query = mysqli_query($conn, "INSERT INTO rehab (email,bentuk_rehab, nama_psikolog, antrian, tanggal, waktu) VALUES ('$_SESSION[email]','$bentuk_rehab', '$nama_psikolog', '$antrian', '$tanggal', '$waktu')");
if($query){
    header("Location: https://api.whatsapp.com/send?phone=$_GET[no]&text=Halo%20Saya%20Mau%20Rehab%20%3A%20$bentuk_rehab%20%3A%20$nama_psikolog%20%3A%20$antrian%20%3A%20$tanggal%20%3A%20$waktu");
}
else{
    echo "Gagal";
}