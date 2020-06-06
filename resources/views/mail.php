<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $mailfrom = $_POST['mail'];

    $mailTo = "agupta9355@conestogac.on.com";
    $headers = "From: "-$mailfrom;
    $txt = "You have received an email from ".$name."\n\n".$message;
    mail($mailTo, $subject,$txt,$headers);
    header("Location: indexx.php?milsend");
}
?>