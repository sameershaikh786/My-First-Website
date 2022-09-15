<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject']
$message = $_POST['message']

$email_from = 'info@CodeIndia.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User message: $message.\n".

$to = 'sshaikh99201@gmail.com'

$headers = "form: $email_from \r\n";


mail($to,$email_subject,$email_body,$headers);


headers("Location: contact.html")





?>