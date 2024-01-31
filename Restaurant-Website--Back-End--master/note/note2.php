<?php
include_once "Admin/conection.php";

$con = db_connect();
$sql = mysqli_query($con, "SELECT max(emp_id) as MaxID FROM employee");
$data = mysqli_fetch_array($sql);
$result = mysqli_query($con, $sql);

$kode = $data['MaxID'];

$kode++;
$ket = 'ID';
$autocode = $ket . sprintf("%03s", $kode);

echo $autocode;
?>