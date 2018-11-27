<?php include_once('../authen.php') ?>
<?php

if (!empty($_FILES['uploaded_file'])) {
    $path = "upload/";
    $path = $path . basename($_FILES['uploaded_file']['name']);
    if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
        echo header('Refresh:0; url=index.php');
    } else {
        //echo "There was an error uploading the file, please try again!";
    }
    //echo print_r($_FILES['uploaded_file']['name']);
}
    $tag = implode(', ', $_POST['tag']);
    if(isset($_POST['submit'])){
            $sql = "INSERT INTO products (product_name, product_code, price, qty, product_desc, product_img_name, tag)
            VALUES ('".$_POST["product_name"]."','".$_POST["product_sku"]."','".$_POST["product_price"]."','".$_POST["product_qty"]."','".$_POST["product_desc"]."','".$_FILES['uploaded_file']['name']."','".$tag."')";
                $result = $conn->query($sql) or die($conn->error);
} 
?>