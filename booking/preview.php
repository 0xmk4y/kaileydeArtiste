<?php
    session_start();


    

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the POST data
    $subject = $_POST["subject"];
    $service = $_POST["service"];
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    // session variables
    $_SESSION["subject"] = $subject;
    $_SESSION["service"] = $service;
    $_SESSION["name"] = $name;
    $_SESSION["last_name"] = $last_name;
    $_SESSION["email"] = $email;
    $_SESSION["phone"] = $phone;
    $_SESSION["date"] = $date;
    $_SESSION["time"] = $time;

    if (!isset($_SESSION["subject"])) {
    header("Location: ../index.html");
    exit;
}

    $discount = 5;
    $price = 0;

    if($service == "Makeup"){
        $price = 10;
    }elseif($service == "Costumes"){
        $price = 20;
    }elseif($price = "Creative Directions"){
        $price = 30;
    };

    $total = $price - $discount;

    // echo $totalCost;
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




        <!-- preview -->
        <div class="h-screen flex justify-center items-center bg-gray-100">
            <div class="flex justify-center items-center m-5 p-5 w-[500px] bg-white shadow-2xl rounded-2xl">
                <form action="preview.php" method="POST" id="form" class="flex flex-col justify-center w-full items-center px-2 py-10 md:px-10">
                    <input type="hidden" name="subject" value="You just Recieved a new booking from kaileydaArtiste.com" />
                    <input type="checkbox" name="botcheck" id="" style="display: none;" />
    
                    <div class="pb-10 flex justify-center">
                        <p class="font-bold text-4xl">Costumes</p>
                    </div>
    
                    <div class="flex mb-6 space-x- w-full justify-between ">
                        <div class="flex flex-col text-left justify-center">
                            <label for="fname" class="block mb-2 font-bold">First
                                Name</label>
                            <p> <?php echo $name; ?></p>
                        </div>
                        <div class="flex flex-col text-right justify-center">
                            <label for="lname" class="block mb-2 dark:text-gray-400">Last
                                Name</label>
                            <p><?php echo $last_name; ?> </p>
                        </div>
                    </div>
    
                    <div class="flex mb-6 space-x-10 w-full justify-between">
                        <div class="flex flex-col text-left justify-center">
                            <label for="email" class="block mb-2 dark:text-gray-400">Email
                                Address</label>
                            <p><?php echo $email; ?> </p>
                        </div>
    
                        <div class="flex flex-col text-right justify-center">
                            <label for="phone" class="block mb-2">
                                Phone</label>
                            <p><?php echo $phone; ?></p>
                        </div>
                    </div>
    
                    <div class="flex mb-6 space-x-2 w-full justify-between ">
                        <div class="flex flex-col text-left justify-center">
                            <label for="fname" class="block mb-2">Date
                            </label>
                            <p><?php echo $date; ?></p>
                        </div>
                        <div class="flex flex-col text-right justify-center">
                            <label for="lname" class="block mb-2 dark:text-gray-400">Time
                            </label>
                            <p><?php echo $time; ?></p>
                        </div>
                    </div>
                    <!-- cost -->
                    <div class="w-full">
                        <!-- base price -->
                        <div class="flex justify-between py-2">
                            <p class="font-bold">Base Cost</p>
                            <p>GH <span id="price"><?php echo $price; ?></span></p>
                        </div>
                        <!-- discount -->
                        <div class="flex justify-between py-2">
                            <p class="font-bold">Discount</p>
                            <p>GH <span id="discount" name="Discount"><?php echo $discount; ?></span></p>
                        </div>
                        <!-- total cost -->
                        <div class="flex justify-between py-2 bg-gray-200 mb-5">
                            <p class="font-bold">Total Cost</p>
                            <p>GH <span id="total" name="totalCost"><?php echo $total; ?></span></p>
                        </div>
                    </div>
                    <div class="mb-6">
                        <button type="submit" id="submit"
                            class="w-full px-3 py-2 text-white bg-purple-500 mt-10">
                            Confirm
                        </button>
                    </div>
                    <p class="text-base text-center text-gray-400" id="result"></p>
                </form>
            </div>

        </div>

        <script>
            
        // Find the "Confirm" button
        var confirmButton = document.querySelector("#submit");
        
        // Add a click event listener to the "Confirm" button
        confirmButton.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent the default form submission
            
            // Redirect the user to "send.php"
            window.location.href = "send.php";
        });
        
        </script>

        <script src="../js/script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    </body>



</html>



