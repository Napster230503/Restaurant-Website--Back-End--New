<?php
    //  session_start();
    require_once 'conection.php';
    $con = db_connect();
    $id = $_POST['idMenu'];
    $qty = mysqli_real_escape_string($con, $_POST['qty']) ;

    $sql = "SELECT * FROM menu WHERE menu_id = '$id'" ;
    $query = mysqli_query($con, $sql);
    $hasil = mysqli_fetch_object($query);
    // $jumlah;
    echo $qty;
    $_SESSION["cart"] [$id] = [
        "id" => $hasil->menu_id,
        "nama" => $hasil->menu_name,
        "harga" => $hasil->price,
        "jumlah" => $qty
    ];


    header("Location: cart.php");
?>