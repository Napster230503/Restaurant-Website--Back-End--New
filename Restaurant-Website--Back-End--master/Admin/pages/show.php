<?php
require_once "../conection.php";
$con = db_connect();
$code = mysqli_real_escape_string($con, $_GET["id"]);
$sql = "SELECT * FROM employee WHERE emp_id = '$code'";
$result = mysqli_query($con, $sql);
while($data = mysqli_fetch_assoc($result)) {
    $name = $data['emp_name'];
    $address = $data['emp_address'];
    $telp = $data['no_tlp'];
}

session_start();
if(!isset($_SESSION['masuk'])){
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - FS Resto</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../../resource/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  </head>

  <body class="sb-nav-fixed">
   <?=
      include 'partIndex/navbar.php';
   ?>

    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
       <?=
        include 'sideNavbar.php';
       ?>
      </div>
      <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Employee</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Information</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                            Detail Data<br/>
                        </div>
                        <div class="card-body">
                            <p>Employee Code : <?php echo $code; ?></p>
                            <p>Full Name : <?php echo $name; ?></p>
                            <p>Address: <?php echo $address?></p>
                            <p>No Telp : <?php echo $telp; ?></p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </main>
           
       <?=
          include 'partIndex/footer.php';
       ?>
      </div>
    </div>
    <?=
      include_once 'partIndex/script.php';
    ?>
  </body>
</html>
<?php
    db_disconnect($con);
?>