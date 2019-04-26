<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'From Dominic Martino Website';
  $email_subject = 'New Message From Website';
  $email_body = "Name: ".$name.".\n".
                "Email: ".$email.".\n\n".
                "Message: ".$message.".\n";

  $to = "dominic.martino@temple.edu";
  $headers = "From: ".$email_from;
  $headers .= "Reply-To: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: index.html");
}
?>
