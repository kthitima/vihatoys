<?php include_once('../authen.php') ?>
<?php
    // echo '<script> alert("Finished Updating!")</script>'; 
    // header('Refresh:0; url=index.php');
    // print_r($_POST);
    if(isset($_POST['submit'])){
        $sql = "  UPDATE `admin` SET `first_name` = '".$_POST['first_name']."', 
                                     `last_name` = '".$_POST['last_name']."', 
                                     `status` = '".$_POST['status']."'
                        WHERE `admin`.`id` = '".$_POST['id']."'";
        
            $result = $conn->query($sql) or die($conn->error);
            if($result){
                echo '<script> alert("Finished Update!")</script>';
                header('Refresh:0; url=index.php');
            }else{
                echo '<script> alert("Finished Update Error!")</script>';
                header('Refresh:0; url=index.php');
            }
    }else{
        header('Refresh:0; url=index.php');
    }
?>