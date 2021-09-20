<?php 

if(($_POST) && !$_POST['subjext']) {
    $to = "mailto:usaops@redorange.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission from:".$from;
    //$subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    //$message = "welcome4";
    //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From: ".$_POST['email'];
    // $headers2 = "From:";
    if(mail($to,$subject,$message,$headers)){
    header("Location:https://www.redorange.com/contact.html");
    //header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
    }
}
?>
