<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Save to a file
    $file = fopen("data.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nMessage: $message\n---\n");
    fclose($file);

    // Redirect to thank you page
    header("Location: thankyou.html");
    exit();
}
?>
