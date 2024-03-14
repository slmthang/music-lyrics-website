<?php
    
    // email subs
    $email = $_POST["email-subscription"];
    
    // file
    $fileName = "subscription-emails.txt";
    $myFile = fopen($fileName, "a");

    // append the email to the textfile
    fwrite($myFile, $email . "\n");

    // close file
    fclose($myFile);

    include "../../index.php";
?>