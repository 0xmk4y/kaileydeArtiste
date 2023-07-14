<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $email = $_POST['email'];

    // Process the data or perform any necessary actions

    // Echo the email value as a response
    echo 'meassage sent successful';
} else {
    // If the request method is not POST, return an error message
    echo 'Invalid request method.';
}
?>
