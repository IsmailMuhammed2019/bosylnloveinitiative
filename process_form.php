<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Construct email content
    $to = "info@boslynloveinitiative.com";
    $subject = "New Contact Form Submission: $subject";
    $headers = "From: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    $email_content = "<p>Name: $name</p>";
    $email_content .= "<p>Email: $email</p>";
    $email_content .= "<p>Subject: $subject</p>";
    $email_content .= "<p>Message: $message</p>";

    // Send email
    mail($to, $subject, $email_content, $headers);
    
    // Redirect back to your website or a thank-you page
    header("Location: your-thank-you-page.html");
    exit();
}
?>