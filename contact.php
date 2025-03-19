<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "nishchaychaurasia610@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "You have received a new message from: \n\n".
            "Name: $username\n".
            "Email: $email\n".
            "Message:\n$message";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Message sending failed. Please try again.'); window.history.back();</script>";
    }
} else {
    header("Location: index.html");
    exit();
}
?>
