<?php 

    error_reporting(E_ALL);
    // error_reporting(0);  ปิด error  
// เชื่อมต่อdatabase
//    $conn = new mysqli('localhost','root','','bolt');
//    $conn = new mysqli('localhost','root','','bolt2');
    $conn = new mysqli('localhost','root','','bolt');
    $conn->set_charset('utf8');
    if($conn->connect_errno){
        echo "Connect Error :".$conn->connect_error;
        exit();
    }
    $base_path_products = 'images/products/';

?>