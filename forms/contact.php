<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
// the message
// $msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
//$message = wordwrap($message,70);

$to = "boosterservicesltd@gmail.com";

$email_from = 'boosterservicesltd@gmail.com';

$email_subject = "New Form submission - $subject.\n";

 $email_body = "You have received a new message from the user $name.\n".
                        "Here is the message:\n $message".

// send email
$headers = array(
    'From' => $email_from,
    'Reply-To' => $visitor_email,
    'X-Mailer' => 'PHP/' . phpversion(),
    'Allow' => 'GET, POST'
);
mail($to,$$email_subject,$email_body, $headers);
//mail($to,$subject,$message, $headers);

?>