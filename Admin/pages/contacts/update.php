<?php include_once('../authen.php') ?>
<?php  
           
     //print_r($_POST['images']);
    if(isset($_POST['submit'])){
        $sql = "  UPDATE `contact` SET `name` = '".$_POST['name']."', 
                                        `phone` ='".$_POST['phone']."',
                                        `datail` ='".$_POST['detail']."',
                                     `email` = '".$_POST['email']."'
                                     WHERE id = '".$_POST['contact_id']."'";
        
            $result = $conn->query($sql) or die($conn->error);
            if($result){
                echo '<script> alert("Finished Update!")</script>';
                header('Refresh:0; url=index.php');
            }else{
                echo '<script> alert("Finished Update Error!")</script>';
                header('Refresh:0; url=index.php');
            }
    }
?>