<?php
include_once '../conection.php';
$con = db_connect();
$sql = "SELECT * FROM customer";
$result = mysqli_query($con, $sql);

$sql = mysqli_query($con, "SELECT max(cust_id) as MaxID FROM customer");
$data = mysqli_fetch_array($sql);

$kode = $data['MaxID'];

$kode++;
$ket = '';
$autocode = $ket . sprintf("%03s", $kode);

echo $autocode;
?>
