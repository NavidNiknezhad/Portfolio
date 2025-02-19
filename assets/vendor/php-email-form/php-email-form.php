<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = 'From: My Website'; 
    $to = 'contact@navidniknezhad.me'; 
    $body = "From: $name\n E-Mail: $email\n Subject:$subject\n Message:\n $message";
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    } 

}

?>
