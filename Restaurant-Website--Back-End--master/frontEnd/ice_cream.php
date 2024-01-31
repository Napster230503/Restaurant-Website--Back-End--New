<?php
require_once 'conection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FS Resto | Ice cream</title>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="IMG/Brown Simple Restaurant Logo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Hepta+Slab&family=Kdam+Thmor+Pro&family=PT+Sans&family=Silkscreen&family=Ubuntu+Mono&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    <style>
      .collapse ul li a {
        color: #f48901;
      }

      /* * {
        overflow-x: hidden;
      } */

      @media all and (max-width: 576px) {
        body {
          overflow-x: hidden;
        }
      }
    </style>
  </head>
  <body>
    <!--Navbar-->
    <section>
      <nav class="navbar navbar-expand-lg" style="border-bottom: 2px solid #f48901; font-family: 'Hepta Slab', serif;">
        <div class="container-fluid">
          <a class="navbar-brand ms-5 fs-3" href="index.php"> <span style="color: #f48901" class="fs-2"> FS</span> Resto</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse fs-5 ms-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about_us.php">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Menu </a>
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
              <li class="nav-item ms-5">
                <a href="cart.php"><i class="fas fa-shopping-cart fs-2 "></i></a>
              </li>
            </ul>
          </div>
          </div>
      <!-- <div class="payment">
        <a href="payment.html"><img src="cart.png" alt="Payment" width="60px";></a>
      </div> -->

        </div>
      </nav>
    </section>
<!--Navbar End-->

    <center>
      <h1 class="mt-5 mb-5" style="font-family: 'Hepta Slab', serif"><span style="color: #f48901">FS</span> Resto | Ice cream</h1>
    </center>

    <div class="card ms-3" style="border: 2px solid #f48901">
      <div class="row m-5 mb-4">
        <div class="col-sm mb-5 ms-5">
          <div class="card" style="width: 18rem">
            <img src="IMG/softIce.jpg" class="card-img-top" alt="Soft ice cream" />
            <div class="card-body">
              <h5 class="card-title" style="color: #f48901">Soft ice cream</h5>
              <p class="card-text">Rp.10.000</p>
              <a href="paymentIce.php" class="btn btn-warning">Pesan</a>
            </div>
          </div>
        </div>
        <div class="col-sm mb-5 ms-5">
          <div class="card" style="width: 18rem">
            <img src="IMG/gelato.jpg" class="card-img-top" alt="gelato" />
            <div class="card-body">
              <h5 class="card-title" style="color: #f48901">gelato</h5>
              <p class="card-text">Rp.10.000</p>
              <a href="paymentIce2.html" class="btn btn-warning">Pesan</a>
            </div>
          </div>
        </div>
        <div class="col-sm mb-5 ms-5">
          <div class="card" style="width: 18rem">
            <img src="IMG/FrozenYog.jpg" class="card-img-top" alt="Frozen yoghurt" />
            <div class="card-body">
              <h5 class="card-title" style="color: #f48901">Frozen yoghurt</h5>
              <p class="card-text">Rp.15.000</p>
              <a href="paymentIce3.html" class="btn btn-warning">Pesan</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="aplication mt-5">
      <div class="card">
        <div class="row">
          <div class="col-sm">
            <a href="https://play.google.com/store/"><img src="IMG/PlayStore.png" alt="PlayStore" style="width: 250px" class="ms-4 mt-5" /></a>
            <a href="https://www.apple.com/app-store/"><img src="IMG/appStore.png" alt="appStore" style="width: 200px" class="ms-5 mt-5" /></a>
          </div>
          <div class="col-sm">
            <p class="mt-5 ms-4 fs-2" style="color: #ffab3d">More Efficient and Practical by Downloading the FS RESTO application on the Google PlayStore and AppStore. Download Now!</p>
          </div>
        </div>
      </div>
    </section>

    <footer class="mt-5 pb-4" style="background-color: #f48901">
      <div class="row">
        <div class="col-sm mt-4 ms-1 text-center">
          <h3 style="color: white">FS Resto</h3>
          <ul class="list-unstyled">
            <li><a href="about_us.php" class="text-decoration-none" style="color: white">About us</a></li>
            <li><a href="contact_us.php" class="text-decoration-none" style="color: white">Contact us</a></li>
          </ul>
        </div>
        <div class="col-sm mt-4 text-center">
          <h3 class="mb-4" style="color: white">See our social media</h3>
          <a href="https://www.instagram.com"> <img src="IMG/IG.png" alt="instagram" style="height: 50px" /> </a>
          <a href="https://www.facebook.com"> <img src="IMG/fb.png" alt="facebook" style="height: 50px" /> </a>
          <a href="https://www.youtube.com"> <img src="IMG/YT.png" alt="youtube" style="height: 50px" /> </a>
        </div>
        <div class="col-sm me-4 mt-4">
          <h3 class="text-center" style="color: white">Give us your critism and suggestion</h3>
          <form>
            <div class="mb-3">
              <label class="form-label" style="color: white">critism</label>
              <input type="text" class="form-control" id="exampleInputEmail1" />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label" style="color: white">suggestion</label>
              <input type="text" class="form-control" id="exampleInputPassword1" />
            </div>
            <button type="submit" class="btn btn-warning">Kirim</button>
          </form>
        </div>
      </div>
    </footer>

    <section class="author mt-5" style="background-color: grey; padding: 12px 0">
      <div class="author text-center">
        <h5><span style="color: white" class="fs-2">FS</span> Resto</h5>
        <p style="color: white">Fahmi A.N</p>
        <p style="color: white">M.Syaifullah</p>
        <h5 style="color: white">©<?php echo date('Y')?> FS_RESTO_Project1Semester3Quarter1</h5>
      </div>
    </section>
  </body>
</html>
