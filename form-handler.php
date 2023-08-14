<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $areaInterest = $_POST["areaInterest"];
    $motivation = $_POST["motivation"];

    $to = "davidmwape376@gmail.com"; // Your email address
    $subject = "Ambassador Program Registration";
    $message = "Full Name: " . $fullName . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Phone Number: " . $phone . "\n";
    $message .= "Area of Interest: " . $areaInterest . "\n";
    $message .= "Motivation: " . $motivation . "\n";

    mail($to, $subject, $message);
}
?>
