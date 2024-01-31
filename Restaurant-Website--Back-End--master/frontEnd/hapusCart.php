<?php
    require_once 'conection.php';
    $con = db_connect();

    $id = mysqli_real_escape_string($con, $_GET["idMenu"]);
    
    unset($_SESSION["cart"][$id]);


    header("Location: cart.php");
?>