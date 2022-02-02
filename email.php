<?php 
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$messgae = $_POST['messgae'];

$email_from = 'http://formspree.io/jhavaard@gmail.com'

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $vistor_email.\n".
                  "Subject: $subject.\n". 
                    "User Messgae: $messgae .\n";

$to = "jhavaard@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $vistor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>