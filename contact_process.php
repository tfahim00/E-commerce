<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate inputs (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "All fields are required";
        exit;
    }

    // Sanitize inputs
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    // Email message
    $to = "your@email.com";
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "You have received a new message from the contact form:\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message";

    // Send email
    if (mail($to, $email_subject, $email_body)) {
        echo "Message sent successfully";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    // If the request method is not POST, redirect back to the contact page
    header("Location: contact.php");
    exit;
}
?>
