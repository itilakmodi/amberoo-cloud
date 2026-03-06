<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data safely
    $name    = htmlspecialchars(trim($_POST['first_name']));
    $phone   = htmlspecialchars(trim($_POST['phone_number']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid Email Address");
    }

    // Receiver email
    $to = "info@amberoocloud.com";

    // Email subject
    $email_subject = "New Contact Form Message: " . $subject;

    // Email content
    $email_body = "You have received a new message from Amberoo Cloud website.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n\n";
    $email_body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: info@aero-stack.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send mail
    if (mail($to, $email_subject, $email_body, $headers)) {

        echo "<script>
                alert('Message Sent Successfully!');
                window.location.href='contact.php';
              </script>";

    } else {

        echo "<script>
                alert('Message Sending Failed!');
                window.history.back();
              </script>";
    }

} else {
    echo "Invalid Request";
}

?>
