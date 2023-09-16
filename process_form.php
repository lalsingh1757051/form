<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    // You can perform actions with the submitted data here, such as sending an email.
    
    echo "Thank you for submitting the form, $name!";
} else {
    // Handle other HTTP request methods or direct visits to this page.
    echo "Invalid request.";
}
?>
