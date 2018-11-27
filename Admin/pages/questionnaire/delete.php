<?php include_once('../authen.php') ?>
<?php
    // echo '<script> alert("Finished Deleting!")</script>'; 
    // header('Refresh:0; url=index.php');
    
    $id = $_GET['id'];
    if(isset($id)){
        $sql = "DELETE FROM `questionnaire` WHERE `questionnaire`.`questionnaire_id` = '".$id."'";
            $result = $conn->query($sql) or die($conn->error);
        //    if($conn->affected_rows;)

            if($result){
               
                header('Refresh:0; url=index.php');
            }else{
                header('Refresh:0; url=index.php');
            }
    }else{
        header('Refresh:0; url=index.php');
    }




?>