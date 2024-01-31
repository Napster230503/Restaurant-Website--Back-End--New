
<?php
require_once "../conection.php";
$con = db_connect();
$id = mysqli_real_escape_string($con, $_GET["id"]);
$sql = "SELECT * FROM customer WHERE cust_id = '$id'";
$result = mysqli_query($con, $sql);
while($data = mysqli_fetch_assoc($result)) {
    $name = $data['cust_name'];
    $address = $data['cust_address'];
    $mail = $data['cust_mail'];
    $tlp = $data['no_tlp'];
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
            <h1 class="mt-4">Information</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Customer</li>
            </ol>
            <div class="card mb-4">
              <div class="card-header">
                <p>Customer Update</p>
            </div>
              
              <div class="card-body">
              <form id="frmemp" method="post" action="process_update_cust.php">
                <fieldset>
                    <div class="mb-3 row">
                        <label for="code" class="col-sm-2 col-form-label">Customer ID</label>
                        <div class="col-sm-10">
                          <input value="<?php echo $id; ?>" type="text" class="form-control"  id="id" name="id" placeholder="..." required="true" readonly>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label"> Name</label>
                        <div class="col-sm-10">
                          <input value="<?php echo $name; ?>"type="text" class="form-control"  id="name" name="name" placeholder="..." required="true">
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="address" name="address" placeholder="..." required="true"><?php echo $address; ?></textarea>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Mail</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="mail" name="mail" placeholder="..." required="true"><?php echo $mail; ?></textarea>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="price" class="col-sm-2 col-form-label">No Tlp</label>
                        <div class="col-sm-10">
                          <input value="<?php echo $tlp; ?>"type="number" class="form-control"  id="tlp" name="tlp" placeholder="+62" required="true">
                        </div>
                      </div>

                      <input type="submit" value="Update" class="btn btn-primary"/>

                    </fieldset>
                    </form>




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
