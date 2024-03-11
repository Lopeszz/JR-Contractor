<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set the email address where you want to receive the data
    $to_email = "giovanilopesmcp@gmail.com";

    // Capture form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Create email message
    $subject = "Submitting a new website contact form";
    $message = "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";

    // Send email
    if (mail($to_email, $subject, $message)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
