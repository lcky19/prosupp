<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input fields
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags(trim($_POST["subject"])));
    $message = htmlspecialchars(strip_tags(trim($_POST["message"])));

    // Error array to store any validation issues
    $errors = [];

    // Validate fields
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    }
    if (empty($subject)) {
        $errors[] = "Subject is required.";
    }
    if (empty($message)) {
        $errors[] = "Message cannot be empty.";
    }

    // If there are no errors, process the form
    if (empty($errors)) {
        // You can store the data in a database or send it via email here

        // Example: Sending email (replace with your email details)
        $to = "support@shanesupply.com"; // Your email address
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $full_message = "You have received a new message from $name.\n\n";
        $full_message .= "Subject: $subject\n\n";
        $full_message .= "Message:\n$message\n";

        if (mail($to, $subject, $full_message, $headers)) {
            echo "<p>Thank you, $name! Your message has been sent successfully.</p>";
        } else {
            echo "<p>Sorry, there was an issue sending your message. Please try again later.</p>";
        }
    } else {
        // Display errors
        echo "<p>Please correct the following errors:</p>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
} else {
    // Redirect back to contact form if accessed directly
    header("Location: contact.php");
    exit;
}
?>
