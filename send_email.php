<?php

if (isset($_POST['submit']))
    
    $name = $_POST['Name'];
    $subject= $_POST['Subject'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    
    $mailTo = "ideecee101@gmail.com";
    $headers = "From: ". $mailTo;
    $text = "YOu have received an email from " .$name .".\n\n".$message;


    mail($mailTO,$subject,$message,$headers);


    //header("Location: index.php?mailsend");
    

?>