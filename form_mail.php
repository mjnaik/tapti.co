
<?php

$visitorname = $_POST['yourname'];
$visitoremail = $_POST['youremail'];
$visitorphone = $_POST["yourphone"];
$visitormessage = $_POST["yourmessage"];


// Set the recipient email address
$to = "info@tapti.co";

// Set the subject of the email
$subject = "Send Through Tapti Site Contact Form..";

// Set the sender email address
$from = $visitoremail;


// Compose the HTML message
$msg ='<h2>Recived From Tapti Site By Contact Form :</h2><p><b>Visitor Name : </b>'.$visitorname.
'</p><p><b>Visitor Email : </b>'.$visitoremail.
'</p><p><b>Visitor Phone : </b>'.$visitorphone.
'</p><p><b>Visitor Message : </b>'.$visitormessage.'</p>'
;


// Set additional headers for the email to be interpreted as HTML
$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

// Attempt to send the email
if (mail($to, $subject, $msg, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>