<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'xarass');

function Login(){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $row['email'];
        $_SESSION['nama'] = $row['nama'];
        if($row['role'] == 0){
            header("Location: ../admin/");
        }else{
            header("Location: ../pengurus/");
        }
    }
        else{
            header("Location: index.php?pesan=Email%20atau%20Password%20Salah");
        }
}

function Daftar(){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];

    $result = mysqli_query($conn, "INSERT INTO user (username, password, email, nama) VALUES ('$username', '$password', '$email', '$nama')");
    if($result){
        header("Location: ../signin/?pesan=Berhasil%20Mendaftar");
    }
        else{
            header("Location: ../signin/?pesan=Gagal%20Mendaftar");
        }
}

function Pelaporan(){
    global $conn;
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $ttl = $_POST['ttl'];
    $nik = $_POST['nik'];
    $bentuk_kekerasan = $_POST['bentuk_kekerasan'];
    $waktu_kejadian = $_POST['waktu_kejadian'];
    $tempat_kejadian = $_POST['tempat_kejadian'];
    $kronologi = $_POST['kronologi'];
    $bukti = $_FILES['bukti'];
    $file_name = $bukti['name'];
    $save_name = time() . $file_name;
    $file_size = $bukti['size'];
    $file_tmp = $bukti['tmp_name'];
    $file_ext = strtolower(end(explode('.', $file_name)));
    $expensions = array("jpeg", "jpg", "png");

    if(in_array($file_ext, $expensions) === false){
        header("Location: form.php?pesan=Extensi%20File%20Tidak%20Sesuai");
    }
    else{
        if($file_size > 2097152){
            header("Location: form.php?pesan=Ukuran%20File%20Terlalu%20Besar");
        }
        else{
            if(move_uploaded_file($file_tmp, "bukti/".$save_name)){
            $query = "INSERT INTO pelaporan (nama, email, ttl, nik, bentuk_kekerasan, waktu_kejadian, tempat_kejadian, kronologi, bukti) VALUES ('$nama', '$email', '$ttl', '$nik', '$bentuk_kekerasan', '$waktu_kejadian', '$tempat_kejadian', '$kronologi', '$save_name')";
            }else{
                echo "Not uploaded because of error #".$_FILES["bukti"]["error"];
            }
            if(mysqli_query($conn, $query)){
                header("Location: index.php?pesan=Berhasil%20Mendaftar");
            }else{
                echo mysqli_error($conn);
            }
        }
    }
}
?>