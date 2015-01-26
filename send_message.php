<?php
$to      = 'david.neuman64@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: me@myself.com' . "\r\n" .
    'Reply-To: me@myself.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>