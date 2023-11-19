<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $description = htmlspecialchars($_POST["description"]);

    $to = "umarmaaz.ur.123@gmail.com"; 
    $message = "Name: $name\nEmail: $email\nSubject: $subject\nDescription: $description";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    header("Location: thank_you.html");
    exit();
}
?>
