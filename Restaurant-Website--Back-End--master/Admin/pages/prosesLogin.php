<?php

    session_start();
    require_once '../conection.php';

    $koneksi = db_connect();

    $username = mysqli_real_escape_string($koneksi, $_POST['user']);
    $password = md5(mysqli_real_escape_string($koneksi, $_POST['pass']));

    $query = "SELECT * FROM pengurus WHERE username = '$username' AND pasword = '$password'";
    $hasil = mysqli_query($koneksi, $query);
    $cek = mysqli_num_rows ($hasil);

    if($cek == true){
        $_SESSION['user'] = $username;

        // cek sesi
        $_SESSION['masuk'] = true;
        header("Location: index.php");
    }else{
        header("Location: login.php?pesan=gagal");
    }
?>