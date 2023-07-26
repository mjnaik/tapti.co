<?php

$subscriberemail = $_POST['subemail'];

echo $subscriberemail;
// exit();
// Set the recipient email address
$to = "info@tapti.co";

// Set the subject of the email
$subject = "Send Through Tapti Site Subscriber Form..";

// Set the sender email address
$from = $subscriberemail;


// Compose the HTML message
$msg ='<h2>Recived From Tapti Site By Subscriber Form :</h2><p><b>Subscriber Email : </b>'.$subscriberemail
;


// Set additional headers for the email to be interpreted as HTML
$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

// Attempt to send the email
if (mail($to, $subject, $msg, $headers)) {
    echo "Subscription Mail Send Successfuly!";
} else {
    echo "Failed to send email.";
}
?>