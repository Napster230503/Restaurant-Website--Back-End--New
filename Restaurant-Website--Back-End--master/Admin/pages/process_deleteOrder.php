<?php
    require_once '../conection.php';
    $con = db_connect();

    $kode = mysqli_real_escape_string($con, $_POST["code"]);

    // Membuat dan menjalankan query dari tabel yg berelasi
    $sql1 = "DELETE FROM orders WHERE order_id = '$kode'";
    $sql2 = "DELETE FROM order_detail WHERE order_id = '$kode'";
    mysqli_query($con, $sql1);
    mysqli_query($con, $sql2);
    // Menutup koneksi
    db_disconnect($con);
    header("Location: order.php?sukses=Data Berhasil Dihapus!"); 
?>