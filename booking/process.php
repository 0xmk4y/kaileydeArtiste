<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $selectedService = $_POST['underline_select'];
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone'];


    echo $selectedService;

}
?>