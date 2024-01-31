<?php
    // session_start();
    require_once 'conection.php';
    //include 'autocode.php';
    //include 'autoCodeCust.php';
    //include 'autocode_emp.php';

    // $koneksi;
    $con = db_connect();
    $orderid = 'O'.time();
    $cust = 'cust000007';     //'SELECT cust_id FROM customer where cust_name = "Online"' ;
    $emp = 'emp0000007';     //'SELECT emp_id FROM employee WHERE emp_name = "Online"' ;
    // echo $orderid;
    // echo $custid;
    // echo $empid;
    // $hasil = mysqli_query($con,$cust);
    // $hasil2 = mysqli_query($con, $emp);

    // while($result = mysqli_fetch_assoc($hasil)){
    //     $custId = $result['cust_id'];
    // }
    // while($result2 = mysqli_fetch_assoc($hasil)){
    //     $empId = $result['emp_id'];
    // }
    $sql = "INSERT INTO orders (order_id, cust_id, emp_id) values ('".$orderid."', '".$cust."', '".$emp."')";
    $query = mysqli_query($con, $sql);

    // menambahkan id terakhir
    // $id_transaksi = mysqli_insert_id($koneksi);

    foreach($_SESSION["cart"] as $cart => $val){
        $script = "INSERT INTO order_detail (order_id, menu_id, jumlah, order_date, Total_price) VALUES ('".$orderid."','".$val['id']."',".$val["jumlah"].", '".date("Y-m-d")."', ".$val['harga'].")";

        $hasil = mysqli_query($con, $script);
    }
    db_disconnect($con);
    header("Location: food.php");
?>