<?php
$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '') {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "email1@localhost";
        $headers = "From: " . $mailFrom . " - Andreas Gaming OGC";
        $txt = "Dobili ste email od " . $name . ".\n\n" . $message;

        mail($mailTo, $subject, $txt, $headers);

        //header("Location: contact.php?mailsent");
        $message_sent = true;
    }
    else {

        $invalid_class_name = "is-invalid";
    }
}
