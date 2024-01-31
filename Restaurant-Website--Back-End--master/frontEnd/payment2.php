<?php
require_once 'conection.php';

$con = db_connect2();

// untuk agar saat tombol dipencet di food.php sesuai dengan di database
$code = mysqli_real_escape_string($con, $_GET["id"]);
$sql = "SELECT * FROM order_detail WHERE order_id = '$code'";
$result = mysqli_query($con, $sql);
// menampilkan informasi di dalam menu_id F02
$sql2 = "SELECT * FROM menu WHERE menu_id = '$code'";
$result2 = mysqli_query($con, $sql2);

while($data = mysqli_fetch_assoc($result2)){
  $menuId = $data['menu_id'];
  $namaMenu = $data['menu_name'];
  $harga = $data['price'];
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Menu | Payment</title>
    <link rel="stylesheet" href="CSS/index.css" />
    <link rel="shortcut icon" href="IMG/Brown Simple Restaurant Logo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Hepta+Slab&family=Kdam+Thmor+Pro&family=PT+Sans&family=Silkscreen&family=Ubuntu+Mono&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script>
      // function tombol(){

      // }
    </script>
  </head>
  <body>
    <!-- navbar -->
    <section>
      <nav class="navbar navbar-expand-lg" style="border-bottom: 2px solid #f48901; font-family: 'Hepta Slab', serif">
        <div class="container-fluid">
          <a class="navbar-brand ms-5 fs-3" href="index.php"> <span style="color: #f48901" class="fs-2"> FS</span> Resto</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse fs-5 ms-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about_us.php">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="menu.php" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Menu </a>
                <ul class="dropdown-menu" style="background-color: white">
                  <li><a class="dropdown-item" href="food.php">Food</a></li>
                  <li><a class="dropdown-item" href="drink.php">Drink</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="ice_cream.php">Ice cream</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="promo.php">Promo</a>
              </li>
            </ul>
          </div>

          <!--
        <div class="payment">
          <a href="payment.html"><img src="cart.png" alt="Payment" width="60px";></a>
        </div>
            -->
        </div>
      </nav>
    </section>
    <!-- akhir navbar -->

    <!-- konten -->
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
    <div style="margin: 20px auto; width: 30rem; text-align: center">
      <h1>anda memesan :</h1>
    </div>

    <div class="card" style="width: 30rem; margin: 20px auto">
      <img src="IMG/Mie_Aceh.jpg" alt="Mie Aceh" />
      <div class="card-body">
        <center>
          <h3 style="color: #f48901"><?php echo $namaMenu?></h3>
          <h5><?php echo 'Rp. ' . number_format($harga, 0)?></h5>
        </center>

        <?php
         $tampil = mysqli_query($con, "SELECT * FROM menu limit 1");
          while($data = mysqli_fetch_assoc($tampil)):
            ?>
              <form action="tambahCart.php"  method="post">
                <h5>Jumlah makanan</h5>
                <input name="jumlah" type="number" style="width: 5rem; border: none; border-bottom: 2px solid #f48901; outline: none" required="" onkeyup="mult()" onclick="mult()" id="harga" /> <br />

                <h5 class="mt-5">Level Kepedasan</h5>
                <input type="radio" name="pesanan" value="pedesMampus" required="" />
                <label for="pedesMampus">Pedes Mampus</label>
                <input type="radio" class="ms-4" name="pesanan" value="pedesgila" required="" />
                <label for="pedesgila">Pedes Gila</label>

                <h5 class="mt-5">Total</h5>
                <h2 id="total" name="total"></h2>
                <input type="button" class="btn btn-warning mt-4" onclick="tombol()" value="Pesan"><a href="cart.php" >"></a>
                <a href="food.php" class="btn btn-danger mt-4 ms-4"> Batal</a>
              </form>  
          <?php endwhile; ?>
        
        
      </div>
    </div>

    <script>
      function mult() {
        let makanan = document.getElementById('harga');
        let harga = Number(makanan.value) * 35000;
        document.getElementById('total').innerHTML = 'Rp. ' + harga;
      }
    </script>
    <!-- akhir konten -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- <script type="text/javascript">
      function tombol() {
        swal({
          title: 'Your Transaction Is Success',
          text: 'Please Wait For Your Order :) ',
          icon: 'success',
          button: true,
        }).then(function () {
          window.location = 'index.php';
        });
      }
    </script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      import swal from 'sweetalert';
    </script>
  </body>
</html>
