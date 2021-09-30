<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "jourdanharminto@hotmail.com";
    $headers = "From: ".$emailFrom;
    $txt = "You have received an email on MMA website from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $headers);
    header("Location: contact.html?mailsend");
}
?>