<?php
include_once '../conection.php';
$con = db_connect();
$sql = "SELECT * FROM employee";
$result = mysqli_query($con, $sql);

$sql = mysqli_query($con, "SELECT max(emp_id) as MaxID FROM employee");
$data = mysqli_fetch_array($sql);

$kode = $data['MaxID'];

$kode++;
$ket = '';
$autocode = $ket . sprintf("%03s", $kode);

echo $autocode;
?>
