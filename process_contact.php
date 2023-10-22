<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "aymen199719@hotmail.fr"; // Replace with the actual email address

    // Set the email subject
    $subject = "Contact Form Submission - $sujet";

    // Compose the email message
    $message = "Nom: $nom\nEmail: $email\nSujet: $sujet\n\n$message";

    // Additional headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        // Email sending failed
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    // Redirect back to the contact page if accessed directly without form submission
    header("Location: contact.php");
}
?>
