<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set up email parameters
    $to = "jadenanthony816@gmail.com"; // Replace with your email address
    $subject = "Message from Contact Form";
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";
    
    // Send email
    if (mail($to, $subject, $body)) {
        // Email sent successfully
        http_response_code(200);
        echo "Success";
    } else {
        // Error sending email
        http_response_code(500);
        echo "Error";
    }
} else {
    // If form is not submitted
    http_response_code(403);
    echo "Access Forbidden";
}
?>
