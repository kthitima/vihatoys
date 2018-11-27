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
 
      //print_r($_POST['tag']);
    $tag = implode(', ', $_POST['tag']);
    if(isset($_POST['submit'])){
        $sql = "  UPDATE `products` SET `product_name` = '".$_POST['product_name']."', 
                                        `product_img_name` ='".$_FILES['uploaded_file']['name']."',
                                     `product_desc` = '".$_POST['product_desc']."',
                                     `tag` = '".$tag."'

                        WHERE id = '".$_POST['product_id']."'";
        
            $result = $conn->query($sql) or die($conn->error);

    }
?>