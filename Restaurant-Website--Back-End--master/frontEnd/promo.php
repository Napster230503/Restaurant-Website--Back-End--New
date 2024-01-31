<?php
require_once 'conection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FS Resto | Promo</title>
    <link rel="shortcut icon" href="IMG/Brown Simple Restaurant Logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Hepta+Slab&family=Kdam+Thmor+Pro&family=PT+Sans&family=Silkscreen&family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
    <style>
      .collapse ul li a {
        color: #f48901;
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
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
                <a class="nav-link active" href="promo.php">Promo</a>
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


                            


    <!--CONTENT-->
<br><br><br>

<center><h1 style="font-style: italic; font-family: 'Hepta Slab', serif; color: #f48901">PROMO FOR THIS MONTH</h1></center>

<br><br><br>

    <section class="card mt-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-3-sm">
          <div class="card h-100">
            <img src="IMG/Free_shipping.png" class="card-img-top" alt="Free Shipping" />
            <div class="card-body">
              <h5 class="card-title" style="color: #f48901; font-family: 'Hepta Slab', serif;">FREE SHIPPING</h5>
              <p class="card-text">You can order the menu you want all over Indonesia with Free Shipping and Delivery</p>
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

        
        <div class="col-3-sm">
          <div class="card h-100">
            <img src="IMG/Free_Delivery.png" class="card-img-top" alt="Free Delivery">
          <div class="card-body">
            <h5 class="card-title" style="color: #f48901; font-family: 'Hepta Slab', serif;">FREE DELIVERY</h5>
            <p class="card-text">Free delivery all over Indonesia</p>
          </div>
          <div class="card-footer" style="background-color: #f48901">
            <small style="color: white;">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>

      <div class="col-3-sm">
        <div class="card h-100">
          <img src="IMG/ABCD_DebitCard.png" class="card-img-top" alt="Get Point" />
          <div class="card-body">
            <h5 class="card-title" style="color: #f48901; font-family: 'Hepta Slab', serif;">GET AND REEDEM YOUR POINT</h5>
            <p class="card-text">Earn and collect your points using the ABCD debit card. Terms and conditions apply according to ABCD bank.</p>
          </div>
          <div class="card-footer" style="background-color: #f48901">
            <small style="color: white">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </section>

    <!--CONTENT END-->

    <footer class="mt-5 pb-4" style="border: 2px solid #f48901">
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
          <a href="https://www.instagram.com"> <img src="IMG/IG.png" alt="instagram" style="height: 50px" /> </a>
          <a href="https://www.facebook.com"> <img src="IMG/fb.png" alt="facebook" style="height: 50px" /> </a>
          <a href="https://www.youtube.com"> <img src="IMG/YT.png" alt="youtube" style="height: 50px" /> </a>
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