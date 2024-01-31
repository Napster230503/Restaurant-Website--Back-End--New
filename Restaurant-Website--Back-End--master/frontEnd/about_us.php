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
    <title>FS Resto | About Us</title>
    <link rel="shortcut icon" href="IMG/Brown Simple Restaurant Logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Hepta+Slab&family=Kdam+Thmor+Pro&family=PT+Sans&family=Silkscreen&family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
</head>

<style>
  body {
  overflow-x: hidden;
}

   @media screen and (max-width: 600px) {
      .column, input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }

    .contact input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    .contact input[type=email], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }
    
    .contact input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
    }
    
    .contact input[type=submit]:hover {
      background-color: #45a049;
    }
    
    /* Style untuk bagian container/contact  */
    .contact .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 10px;
    }
    
    /* Buat dua kolom yang berfloat di samping satu sama lain */
    .contact .column {
      float: left;
      width: 50%;
      margin-top: 6px;
      padding: 20px;
    }
    
    /* Hapus floats setelah columns */
    .contact .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .collapse ul li a {
     color: #f48901;
    }

    

    @media all and (max-width: 576px) {
      body{
        overflow-x: hidden;
      }

       iframe {
         width: 400px;
       }

       .map u h1{
        width: 10px;
       }
       
       /* .card_aboutus2 .row .col u h1{
        
       } */
    }

    @media screen and(min-width:414px) {
      iframe {
        float:none;
       }
    }
</style>
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
                <a class="nav-link active" href="about_us.php">About</a>
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


    <!--CONTENT-->
    <div class="card_aboutus mt-4">
        <div class="row text-center" >
            <div class="col-sm-12 mt-5" style="border-bottom:2px solid orange;">
                <img src="IMG/Brown Simple Restaurant Logo.png" alt="FS Resto" style="height: 400px; width:400px;">
            </div>

            <div class="col-sm" style="background-color: grey;">
                <br><br><br>
                <center><h1 style="font-family: 'Hepta Slab', serif; color: white; margin-bottom: 55px;">ABOUT FS RESTO</h1></center>
            </div>
        </div>
    </div>

 <br><br><br>

    <div class="card_aboutus2">
        <div class="row">
            <div class="col-sm">
              <br>
                <u style="color: white"><center><h1 style="font-family: sans-serif; background-color: #f48901; border-radius: 10px; color: white; margin-bottom: 20px;">VISION</h1></center></u>
            </div>
            <div class="col-sm">
                <center><p style="font-size:x-large ; color: #f48901">FS RESTO is a company engaged in the culinary field. 
                            The vision of FS RESTO is to ensure quality and professional 
                            service in maintaining the quality, offering, and safety of the 
                            products offered</p></center>
            </div>
        </div>
    </div>

<br><br><br>
    <hr>
<br><br><br>

    <div class="card_aboutus3" style="border: none;">
        <div class="row" >
          <div class="col-sm mt-4">
            <br><br><br>
            <u style="color: white"><center><h1 style="font-family: sans-serif; background-color: #f48901; border-radius: 10px; color: white; margin-top: 50px;">MISSION</h1></center></u>
          </div>
            <div class="col-sm">
                <center><ul style="font-size:x-large ; color: #f48901" >
                    <li>To be the best company for all our employees in every community throughout Indonesia.</li>
                    <br>
                    <li>Providing services with a superior operational system for each of our customers in every FS RESTO branch restaurant.</li>
                    <br>
                    <li>Continue to develop in a profitable direction as a brand, and continue to develop the FS RESTO operational system in a better direction through innovation and technology.</li>
                </ul></center>
            </div>
            
        </div>
    </div>

<br><br><br>
    <hr>
<br><br><br>

    <section class="map">
      <div class="col-sm ms 1">
        <u style="color: white;"><h1 style="font-family: Copperplate;  background-color: #f48901; border-radius: 10px; color: white; width: 400px;" class="ms-1 ps-5 me-1">Our Location</h1></u>
      
      <br>
      <div class="card_maps1" >
        <div class="row">
            <div class="col-sm ms 1">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.57649699541844!2d106.80811611292437!3d-6.443842430248741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e94ec8e7102b%3A0x8a7d0908748afd9a!2sEmber%20Jati!5e0!3m2!1sen!2sid!4v1664711585313!5m2!1sen!2sid" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="col-sm mt-5 me-1"></iframe>
            </div>

          <div class="col-sm mt-5 me-1">
            <center><p style="font-size:xx-large ;color: #f48901">You can see our location by looking at Google Maps here.</p></center>
          </div>
      </div>
    </div>
  </div>
  </section>
      
    

    <br><br><br>
    
    <div class="mb-3" id="kartu_contact">
      <div class="contact" id="contact">
        <div class="container" style="background-color: rgb(175, 166, 166);">
          <div style="text-align:center">
            <h2 style="font-size: 50px; font-family: sans-serif;"><b>Contact Us</b></h2>
            <p>You can contact us if you have any questions about FS RESTO</p>
          </div>
          <div class="row">
            <div class="col-sm">
              <img src="IMG/Brown Simple Restaurant Logo.png" style="width:100%">
            </div>
            <div class="col-sm">
              <form class="border border-dark form-group" style="padding:20px">
                <label for="fname">Name</label>
                <input type="text" id="fname" name="Name" placeholder="Add your name" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">
                  Please provide a valid Email.
                </div>
                
                <label for="E-mail">E-mail</label>
                <input type="email" id="femail" name="E-mail"placeholder="Add your E-mail" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">
                  Please provide a valid Email.
                </div>
                
                <label for="Massage">Massage</label>
                <textarea id="Massage" name="Massage" placeholder="Add some Massage" style="height:170px" required></textarea>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">
                  Please provide a valid Email.
                </div>
                <center><input type="submit" value="Send Message" style="background-color: #f48901" id="submit"></center>
              </form>
            </div>
          </div>
        </div>
      </div>
  
    <!--CONTENT END-->

    <!--FOOTER-->
    <br><br><br>
    <footer class="mt-5 pb-4" style="border:2px solid #f48901">
      <div class="row">
        <div class="col-sm mt-4 ms-1 text-center">
          <h3 style="color: #f48901">FS Resto</h3>
          <ul class="list-unstyled">
            <li><a href="about_us.php" class="text-decoration-none" style="color: black">About us</a></li>
            <li><a href="contact_us.php" class="text-decoration-none" style="color: black">Contact us</a></li>
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
              <label for="exampleInputPassword1" class="form-label" style="color:black;">suggestion</label>
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
        <h5 style="color: white">©2022 FS_RESTO_Project1Semester3Quarter1</h5>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>