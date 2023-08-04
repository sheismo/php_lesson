<?php
    echo "Send emails";

    $recipient = 'hafsatabidemi5@gmail.com';
    $sender = 'ajumobizainab@gmail.com';
    $message = 'Hello! I am sending emails using PHP';
    $subject = 'Zainab is learning PHP';
    $header = 'From:ajumobizainab@gmail.com';

    $sendMessage = mail($recipient, $subject, $message, $header);

    if($sendMessage) {
        echo "Email successfully sent!";
    } else {
        echo "Not sent!";
    }

?>