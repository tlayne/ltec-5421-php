<?php

  $msg  = "Name:    ".
    $_POST['name']."\n";
  $msg .= "E-Mail:  ".
      $_POST['email']."\n";
  $msg .= "Message: ".
      $_POST['msg']."\n";

$recipient = $_POST['email'];  
$subject = "Form Submission Results";
$mailheaders  = "Tim at LTEC 5421 <noreply@domain.com> \n";
$mailheaders .= "Reply-To: ".
    $_POST['email'];

 mail($recipient, $subject, $msg, $mailheaders);
 echo "Your message has been sent.";
 
?>