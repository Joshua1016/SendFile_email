<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $contactNumber = $_POST["contactNumber"];
    $email = $_POST["email"];
    $positionApplyingFor = $_POST["positionApplyingFor"];
    $fileAttachment = $_FILES["file"];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'firstfarmersholdingcorporation@gmail.com';
        $mail->Password = 'zgwbpobdkrbsycgq';
        $mail->SMTPSecure = 'tls'; // Change to 'ssl' if needed
        $mail->Port = 587; // Change to 465 if using 'ssl'

        // Sender and recipient
        $mail->setFrom($email, $name);
        $mail->addAddress('firstfarmersholdingcorporation@gmail.com', 'Joshua'); // Change to the actual recipient's name

        // Content
        $mail->isHTML(false);
        $mail->Subject = 'Job Application: ' . $positionApplyingFor;
        $mail->Body = "Name: $name $lastName\n"
            . "Contact Number: $contactNumber\n"
            . "Email: $email\n"
            . "Position Applying For: $positionApplyingFor";

        // Attach file if provided
        if ($fileAttachment['error'] == UPLOAD_ERR_OK) {
            $mail->addAttachment($fileAttachment['tmp_name'], $fileAttachment['name']);
        }

        // Send the email
        $mail->send();

        echo '<script>';
        echo 'alert("Your application has been submitted. Thank you!");';
        echo 'window.location.href = "index.php";'; // Corrected redirection
        echo 'window.close();'; // Close the window immediately
        echo '</script>';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>