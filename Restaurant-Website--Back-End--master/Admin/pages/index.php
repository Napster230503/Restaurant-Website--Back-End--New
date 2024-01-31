<?php
require_once '../conection.php';
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
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

        <div class="date" style="margin-left: 22px; font-size: xx-large; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
          <p class="inside_date">
            <?php
              echo date("d F Y");
            ?>
          </p>
        </div>
          <hr>

                <div class="container-fluid px-4">
            <h1 class="mt-4">Information</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Employee</li>
            </ol>
            <div class="mt-2">
                            <?php if (!empty($_GET["success"])): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success! </strong><?php echo $_GET["success"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>                                
                            <?php endif; ?>
                            <?php if (!empty($_GET["error"])): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>error! </strong><?php echo $_GET["success"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>                                
                            <?php endif; ?>
              
              </div>
            <div class="card mb-4">
              <div class="card-header">
              <i class="fas fa-table me-1"></i>
                <a href="create.php" class="btn btn-success"><i class=" fas fa-plus me-1"></i>Add Employee</a>
                
              </div>

              <div class="card-body">
                <table id="example" class="table table-striped" style="width:100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>No Tlp</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $database = db_connect ();

                    $no = 1;
                    $tampil = mysqli_query($database, 'SELECT * FROM employee order by emp_id desc');
                    while($data = mysqli_fetch_assoc($tampil)) :   
                  ?>
                  
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['emp_id'];?></td>
                        <td><?php echo $data['emp_name'];?></td>
                        <td><?php echo $data['emp_address'];?></td>
                        <td><?php echo $data['no_tlp']; ?></td>
                      <td>
                        <a href="show.php?id=<?php echo $data['emp_id']; ?>"><i class="fa fa-eye me-3"></i></a>
                        <a href="update.php?id=<?php echo $data['emp_id']; ?>" class='btn btn-primary'>Update</a>
                        <a href="delete.php?id=<?php echo $data['emp_id']; ?>" class='btn btn-danger'>Delete</a>
                      </td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
                <!-- mysqli_real_escape_string('$_post['nama field input']') -->
                <!-- trim() buat hapus spasi sebelah kiri -->
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function () {
    $('#example').DataTable();
});
</script>
<?php
db_disconnect($database);


?>
