<?php
require_once 'conection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FS Resto</title>
    <link rel="stylesheet" href="CSS/index.css" />
    <link rel="shortcut icon" href="IMG/Brown Simple Restaurant Logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Hepta+Slab&family=Kdam+Thmor+Pro&family=PT+Sans&family=Silkscreen&family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
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


<!-- ringkasan singkat -->
    <section class="ringkas mt-5">
      <div class="row text-center">
        <div class="col-sm-12" style=" border-bottom:3px solid #f48901; border-radius: 10px;">
          <img src="IMG/Brown Simple Restaurant Logo.png" alt="logo">
        </div>
        <div class="col-sm" style=" background-color: grey; color: white; border-radius: 10px;">
            <p class="para fs-3" style="font-family: 'Hepta Slab', serif;">FS RESTO is a company engaged in the culinary field. 
              The vision of FS RESTO is to ensure quality and professional 
              service in maintaining the quality, offering, and safety of the 
              products offered. </p>
        </div>
      </div>
    </section >

<!-- akhir ringkasan -->
    <section id="galery" class="mt-5">
      <div class="row text-center">
        <div class="col">
          <h1 style="color: #ffab3d; font-family: 'Hepta Slab', serif;">Favourite Menu</h1> 
          <center>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="IMG/Ayam_Geprek.jpg" class="d-block w-100 img-fluid" alt="ayam gevrek" />
                  <div class="carousel-caption d-none d-md-block">
                    <h5><b>AYAM GEPREK</b></h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="IMG/Mie_Aceh.jpg" class="d-block w-100 img-fluid" alt="mie a a a acwehh" />
                  <div class="carousel-caption d-none d-md-block">
                    <h5><B>MIE ACEH</B></h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="IMG/esTeh.jpg" class="d-block w-100 img-fluid" alt="es teh" />
                  <div class="carousel-caption d-none d-md-block">
                    <h5><b>ES TEH MANIS</b></h5>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <button type="button" class="tombol btn btn-warning mt-5"><a href="food.php" style="text-decoration: none; color: white;">See More Favorite Menu</a></button>
          </center>
        </section>                                

    <!--NAVBAR END-->


    <br><br><br>
    <center><h1 class="mt-5" style="color: #ffab3d; font-family: 'Hepta Slab', serif;">PROMO MENARIK</h1></center>


                                  <!--Promotion Card-->


    <section class="card mt-5 ms-3 me-3">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-3-sm">
          <div class="card h-100">
            <img src="IMG/Free_shipping.png" class="card-img-top" alt="Free Shipping" />
            <div class="card-body">
              <h5 class="card-title" style="color: #f48901; font-family: 'Hepta Slab', serif;">FREE SHIPPING</h5>
              <p class="card-text">You can order the menu you want all over Indonesia with Free Shipping</p>
            </div>
            <div class="card-footer" style="background-color: #f48901">
              <smalls style="color: white">Last updated 3 mins ago</smalls>
            </div>
          </div>
        </div>

        <div class="col-3-sm">
          <div class="card h-100">
            <img src="IMG/Discount.png" class="card-img-top" alt="Discount" />
            <div class="card-body">
              <h5 class="card-title" style="color: #f48901; font-family: 'Hepta Slab', serif;">ABCD CARD USERS ONLY</h5>
              <p class="card-text">ABCD card users will get a 25% discount on every weekend and other national holidays.</p>
            </div>
            <div class="card-footer" style="background-color: #f48901">
              <small style="color: white">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>

        <div class="col-3-sm" >
          <div class="card h-100">
            <img src="IMG/Easy_order.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title" style="color: #f48901; font-family: 'Hepta Slab', serif;">SIMPLE TO USE</h5>
              <p class="card-text">Customers who want to order and view our menu, can easily view and access our website without having to come to FS RESTO.</p>
            </div>
            <div class="card-footer" style="background-color: #f48901">
              <small style="color: white">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        
    </section>


    <center>
      <button type="button" class="tombol btn btn-warning mt-5"><a href="promo.php" style="text-decoration: none; color: black;">See More Promotion</a></button>
    </center>


    <section class="aplication mt-5">
      <div class="card">
        <div class="row">
          <div class="col-sm">
            <a href="https://play.google.com/store/"><img src="IMG/PlayStore.png" alt="PlayStore" style="width: 250px" class="ms-4 mt-5" /></a>
            <a href="https://www.apple.com/app-store/"><img src="IMG/appStore.png" alt="AppStore" style="width: 200px" class="ms-5 mt-5" /></a>
          </div>
          <div class="col-sm">
            <p class="mt-5 ms-4 fs-2" style="color: #ffab3d;">More Efficient and Practical by Downloading the FS RESTO application on the Google PlayStore and AppStore. Download Now!</p>
          </div>
        </div>
      </div>

      
    </section>



    <footer class="mt-5 pb-4" style="border:2px solid #f48901">
      <div class="row">
        <div class="col-sm mt-4 ms-1 text-center">
          <h3 style="color: #f48901">FS Resto</h3>
          <ul class="list-unstyled">
            <li><a href="about_us.html" class="text-decoration-none" style="color: black">About us</a></li>
            <li><a href="contact_us.html" class="text-decoration-none" style="color: black">Contact us</a></li>
          </ul>
        </div>
        <div class="col-sm mt-4 text-center">
          <h3 class="mb-4" style="color: #f48901">See our social media</h3>
          <a href="https://www.instagram.com"> <img src="IMG/IG.png" alt="Instagram" style="height: 50px" /> </a>
          <a href="https://www.facebook.com"> <img src="IMG/fb.png" alt="Facebook" style="height: 50px" /> </a>
          <a href="https://www.youtube.com"> <img src="IMG/YT.png" alt="YouTube" style="height: 50px" /> </a>
        </div>
        <div class="col-sm me-4 mt-4">
          <h3 class="text-center" style="color: #f48901">Give us your critism and suggestion</h3>
          <form>
            <div class="mb-3">
              <label class="form-label" style="color: black">critism</label>
              <input type="text" class="form-control" id="exampleInputEmail1" style="border: none; border-bottom: 2px solid #f48901;"/>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label" style="color: black">suggestion</label>
              <input type="text" class="form-control" id="exampleInputPassword1" style="border: none; border-bottom: 2px solid #f48901;"/>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
