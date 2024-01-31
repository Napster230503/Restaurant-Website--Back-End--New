<?php
require_once '../conection.php';
$con = db_connect();

$id = mysqli_real_escape_string($con, $_POST["id"]);
$name = mysqli_real_escape_string($con, $_POST["name"]);
$address = mysqli_real_escape_string($con, $_POST["address"]);
$telp = mysqli_real_escape_string($con, $_POST["tlp"]);

// Melakukan validasi terhadap data
if (empty($id)) {
    header("Location: create.php?error=Employee id cannot be empty!");
    die();
}
if (empty($name)) {
    header("Location: create.php?error=Employee name cannot be empty!");
    die();
}
if (empty($address)) {
    header("Location: create.php?error=Employee address cannot be empty!");
    die();
}
if (!is_numeric($telp)) {
    header("Location: create.php?error=Telp must be numeric!");
    die();
}

// Membuat dan menjalankan query
$sql = "INSERT INTO employee (emp_id, emp_name, emp_address, no_tlp) VALUES ('$id','$name', '$address', $telp)";
mysqli_query($con, $sql);
// Menutup koneksi
db_disconnect($con);
header("Location: create.php?sukses=Data Saved Successfully!");
?>