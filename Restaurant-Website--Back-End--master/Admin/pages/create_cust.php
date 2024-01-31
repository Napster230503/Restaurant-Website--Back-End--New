<?php
include_once '../conection.php';
$con = db_connect();
$sql = "SELECT * FROM customer";
$result = mysqli_query($con, $sql);
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
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Add Customer</li>
            </ol>
            <div class="card mb-4">
              <div class="card-header">
              <i class=" fas fa-table me-1"></i>Add Customer
                <?php if (!empty($_GET["error"])): ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <strong>Failed! </strong><?php echo $_GET["error"]; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>    
                <?php endif; ?>
                   <?php if (!empty($_GET["sukses"])): ?>
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                         <strong>Success! </strong><?php echo $_GET["sukses"]; ?>
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>                                
                <?php endif; ?>


              </div>
              <div class="card-body">
              <form action="process_create_cust.php" method="post">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID</label>
                <input type="text" name="id" class="form-control" id="emp_id_auto" readonly value="<?php include 'autocode_cust.php' ?>">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Anonymous" required='true'>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder="Address" required='true'>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mail</label>
                <input type="text" name="mail" class="form-control" id="exampleFormControlInput1" placeholder="your@mail.com" required='true'>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No Telp</label>
                <input type="number" name="tlp" class="form-control" id="exampleFormControlInput1" placeholder="08**********" required='true'>
              </div>

                <input type="submit" value="Submit" class="btn btn-primary"/>
            
              </form>
             


              </div>
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


