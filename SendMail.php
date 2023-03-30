<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "NewRoyalInternationalRecruitmentServicesSRL.com";
    $to = "---emailOfTheReceiver----";
    $subject = "You have a new email from New Royal Recruitment Services SRL";

    $clientName = $_POST['name'];
    $clientMail = $_POST['email'];
    $clientMessage = $_POST['message'];

    $message = "My name is: " . $clientName . " \nMy email is: " . $clientMail . " \nThis is my message: " . $clientMessage;
    
    // The content-type header must be set when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers)) {
        header("Location: index.html");
        die();
    } else {
        echo "Message was not sent.";
    }
?>