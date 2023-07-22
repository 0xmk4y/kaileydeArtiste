<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    session_start();

if(!$_SESSION['service']){
    header('Location: booking.html');
    die();
};
    $subject = $_SESSION["subject"];
    $service = $_SESSION["service"];
    $name = $_SESSION["name"];
    $last_name = $_SESSION["last_name"];
    $email = $_SESSION["email"];
    $phone = $_SESSION["phone"];
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
    $mail->Subject = 'New Booking from kaileydaArtiste.com';
    $mail->Body = ' <html>
                <body style="color:rgb(77, 77, 77);">
                    <b   style="font-size:2rem;">Dear Kailey</b>,<br>
                    <h4 style="font-size:1.2rem" ;>You have received a new booking from your website. Here are the details:</h4>
                    <p style="font-size: 20px;">Service: <span> '.$service.'</span></p>
                    <p style="font-size: 20px;">Name: <span>'.$name.' '.$last_name.'</span></p>
                    <p style="font-size: 20px;">Email: <span> '.$email.'</span></p>
                    <p style="font-size: 20px;">Phone: <span>'.$phone.'</span></p>
                    <p style="font-size: 20px;">Date: <span> '.$date.'</span></p>
                    <p style="font-size: 20px;">Time: <span> '.$time.'</span></p><br>
                    <b style="font-size:1.2rem;">Please review the booking and follow up with the customer as soon as possible.</b>                    
                </body>
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

            
        <section class="flex flex-col justify-center items-center h-screen space-y-10 ">
            <div class="flex justify-center items-center -mt-20">
                <img src="../img/success-35.svg" alt="" class="px-10" style="width: 400px; min-width: 200px;">
            </div>
            <h2 class="font-bold text-2xl">Booking Sucessfull&#127881;</h2>
        </section>


        <!-- JavaScript code for redirection -->
        <!-- <script>
            setTimeout(function () {
                window.location.href = '../index.html';
            }, 3000); 
        </script> -->


        <script src="../js/script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    </body>



</html>





















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



