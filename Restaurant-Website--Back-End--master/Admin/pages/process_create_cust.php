<?php
require_once '../conection.php';
$con = db_connect();

$id = mysqli_real_escape_string($con, $_POST["id"]);
$nama = mysqli_real_escape_string($con, $_POST["name"]);
$address = mysqli_real_escape_string($con, $_POST["address"]);
$mail = mysqli_real_escape_string($con, $_POST["mail"]);
$telp = mysqli_real_escape_string($con, $_POST["tlp"]);

// Melakukan validasi terhadap data
if (empty($id)) {
    header("Location: create_cust.php?error=cust id cannot be empty!");
    die();
}
if (empty($nama)) {
    header("Location: create_cust.php?error=cust name cannot be empty!");
    die();
}
if (empty($address)) {
    header("Location: create_cust.php?error=cust address cannot be empty!");
    die();
}

if (empty($mail)) {
    header("Location: create_cust.php?error=cust mail cannot be empty!");
    die();
}

if (!is_numeric($telp)) {
    header("Location: create_cust.php?error=Telp must be numeric!");
    die();
}

// Membuat dan menjalankan query
$sql = "INSERT INTO customer (cust_id, cust_name, cust_address, cust_mail, no_tlp) VALUES ('$id','$nama', '$address', '$mail', '$telp')";
mysqli_query($con, $sql);
// Menutup koneksi
db_disconnect($con);
header("Location: create_cust.php?sukses=Data Saved Successfully!");
?>