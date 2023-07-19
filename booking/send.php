<?php
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    $subject = $_SESSION["subject"];
    $service = $_SESSION["service"];
    $name = $_SESSION["name"];
    $last_name = $_SESSION["last_name"];
    $email = $_SESSION["email"];
    $email = $_SESSION["phone"];
    $date = $_SESSION["date"];
    $time = $_SESSION["time"];




// Notice smtp crdentials must be put in env variable

require '../PHPMailer/src/PHPMailer.php'; // Make sure to include PHPMailer library
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/SMTP.php';

// Sanitize input


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0; // Enable verbose debug output. Set to 0 to disable.
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp-relay.sendinblue.com '; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'markarlgh@gmail.com'; // SMTP username
    $mail->Password = 'p0ZY9AGK6SjByfxE'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to

    //Recipients
    $mail->setFrom('markarlgh@gmail.com', 'Kailey Eatery Contact Form');
    $mail->addAddress('markarlgh@gmail.com'); // Add a recipient
    // $mail->addAddress('khalilmark9@gmail.com'); adding multiple recipient

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'New Contact Message from Kailey Eatery Website';
    $mail->Body    = '<html><b>Dear Kailey</b>,<br>

    <h4>You have received a new order from your website. Here are the details:</h4><br>
    
    <b>Name:</b> '.' <br>
    <b>Email: </b>'.' <br>
    <b>Number of Guests: </b>'.' <br>
    <b>Message: </b>'.' <br><br>
    
    <b>Please review the order and follow up with the customer as soon as possible.</b>
    
    </html>';


    $mail->send();
    session_unset();

    // header("Location: ../index.html");
    // exit; // Terminate the script after redirection


} catch (Exception $e) {
    echo 'Message could not be sent. Error';
}
   

?>





















<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements@1.0.0-beta1/dist/css/index.min.css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


        <link rel="stylesheet" href="style.css">
        <title>KaileydaArtiste</title>
    </head>

    <body>


                <!-- JavaScript code for redirection -->
        <script>
            setTimeout(function() {
                window.location.href = '../index.html';
            }, 3000); // 3 seconds delay
        </script>


        <script src="../js/script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    </body>



</html>



