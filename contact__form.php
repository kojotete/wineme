<?php
if (isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])) {
    $contact_name = $_POST['contact_name'];
    $contact_email = $_POST['contact_email'];
    $contact_text = $_POST['contact_text'];

    if (!empty($contact_name) && !empty($contact_email) && !empty($contact_text)) {
        if (strlen($contact_name) > 25   || strlen($contact_email) > 50 || strlen($contact_text) > 1000) {

            echo 'Sorry, maxlength for some fields have been exceeded.';
        } else {
            $to = 'asare.sethuk@gmail.com';
            $subject = 'contact form submitted.';
            $body = $contact_name . "\n" . $contact_text;
            $headers = "From:$contact_email";

            if (mail($to, $subject, $body, $headers)) {
                echo 'thanks for contacting us. We\'ll be in touch soon.';
            } else {
                echo ' Sorry, an error occurred. Please try again later.';
            }
        }
    } else {
        echo 'All fields are required.';
    }
}
else
{
    echo 'All fields are required.';
}
