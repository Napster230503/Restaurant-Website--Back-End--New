<?php
include_once 'conection.php';
function getkode() {
    $con = db_connect();
    $sql = "SELECT * FROM orders";
    $result = mysqli_query($con, $sql);

    $sql = mysqli_query($con, "SELECT max(order_id) as MaxID FROM orders");
    $data = mysqli_fetch_array($sql);

    $kode = $data['MaxID'];
    $number = substr($kode,2);
    $number++;
    $ket = 'O00';
    $autocode = $ket . $number;

    return $autocode;
}
?>
