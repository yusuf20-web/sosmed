<?php 
session_start();
include("koneksi.php");
// kondisi jika button register di tekan
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];

    // masukkan data ke dalam tbl user kolom kolom tbl user () dan nilainya di ambil dari inputan sesuai dengan urutan kolomnya
    $query = "INSERT INTO user (email, password, nama, username) VALUES ('$email', '$password', '$nama', '$username')";

    // eksekusi query
    $result = mysqli_query($koneksi, $query);

    // jika query berhasil
    // melempar ke halaman register
    header("location:../view/login.php?register=berhasil");
}

?>