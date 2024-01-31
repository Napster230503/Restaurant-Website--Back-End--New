
<?php
require_once "../conection.php";
$con = db_connect();
$code = mysqli_real_escape_string($con, $_POST["code"]);

// Membuat dan menjalankan query
$sql = "DELETE FROM employee WHERE emp_id = '$code'";
mysqli_query($con, $sql);
// Menutup koneksi
db_disconnect($con);
header("Location: index.php?sukses=Data Removed Successfully!");
?>