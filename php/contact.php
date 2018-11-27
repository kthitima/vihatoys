<?php

    require_once('connect.php');
    if(isset($_POST['btn-submit'])){
            $sql = "INSERT INTO `contact` ( `name`, `phone`, `email`, `datail`, `created_at`) 
            VALUES ('".$_POST['name']."', 
                    '".$_POST['phone']."', 
                    '".$_POST['email']."', 
                    '".$_POST['message']."', 
                    '".date("Y-m-d")."');";
            $result = $conn->query($sql) or die($conn->error);
            if($result){
                //เปิดใช้งาน function sent to line ตรงนี้
                //sendToLine ();
                echo '<script> alert("ส่งข้อมูลเรียบร้อยแล้ว")</script>';
                header('Refresh:0; url=../contact.php');
        }else{
            //echo '<script> alert("Verification Recaptcha Failed!!!")</script>';
            //header('Refresh:0; url=../contact.php'); 
        }
}
    
    function sendToLine (){
        $text = "มีผู้ติดต่อมาจาก WebBlog \n";
        $text .= "ชื่อ: ". $_POST['name'] ."\n";
        $text .= "เบอร์: ". $_POST['phone']."\n";
        $text .= "อีเมลล์: ". $_POST['email']."\n";
        $text .= "ข้อความ: ". $_POST['message'];
        $message = array(
            'message'=>$text
        );
        notify_message($message);
    }
    function notify_message($message){
        define('LINE_API',"https://notify-api.line.me/api/notify");
        define('LINE_TOKEN',"35KiBt8TZ3Y7ATU9uFLOtiMToI4xveAGvUlEwWV4tFG");
        $queryData = http_build_query($message,'','&');
        $headerOption = array(
            'http'=>array(
                'method'=>'POST',
                'header'=>"Content-type: application/x-www-form-urlencoded\r\n"
                        ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                        ."Content-Length: ".strlen( $queryData)."\r\n",
            'content'=>  $queryData
            )
        );
        $context = stream_context_create($headerOption);
        $result = file_get_contents(LINE_API,FALSE,$context);
        $resp = json_decode($result);
        if ($resp->status == 200){
            echo '<script> alert("ส่งข้อมูลเรียบร้อยแล้ว")</script>';
            header('Refresh:0; url=../index.php'); 
        }else{
            echo '<script> alert("ส่งข้อมูลไม่สำเร็จ โปรดติดต่อ.........")</script>';
            header('Refresh:0; url=../contact.php');
        }     
    }   
?>