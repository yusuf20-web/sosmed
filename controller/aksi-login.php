<?php
// memulai sesi
session_start();
// koneksikan ke database
include 'koneksi.php';

// membuat kondisi jika tombol login di tekan
if (isset($_POST['login'])) {
    $password = $_POST['password'];
    $email    = $_POST['email'];

// menampilkan data login dari database
$queryLogin = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");
if(mysqli_num_rows($queryLogin) > 0) {
    $rowLogin = mysqli_fetch_assoc($queryLogin);
    if($password == $rowLogin['password']) {
        $_SESSION['id'] = $rowLogin['id'];
        $_SESSION['email'] = $rowLogin['email'];
        header("location:../view/index.php?login=berhasil");
    } else {
        header("location:../view/login.php?login=gagal");
    }

}else{
    header("location:../view/login.php?email%tidak%terdaftar");
    }
}

?>


