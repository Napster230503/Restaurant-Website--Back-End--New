
<?php
require_once "../conection.php";
$con = db_connect();
$code = mysqli_real_escape_string($con, $_POST["code"]);

// Membuat dan menjalankan query
$sql = "DELETE FROM customer WHERE cust_id = '$code'";
mysqli_query($con, $sql);
// Menutup koneksi
db_disconnect($con);
header("Location: customer.php?sukses=Data Removed Successfully!");
?>